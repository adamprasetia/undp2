<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{		
		$db = $this->load->database('default', true);


		$data = [
			'prov' => $db->query('select distinct(prov) from city')->result(),
		];

		$this->load->view('home_view', $data);		
	}
	public function city($prov = '')
	{
		$db = $this->load->database('default', true);	
		$city = $db->select('city')->where('prov', urldecode($prov))->get('city')->result();
		echo json_encode($city);
	}
	public function participant()
	{		
		$db = $this->load->database('default', true);
		$answer = $this->input->post('q', true);
		if(!is_array($answer)){
			echo json_encode(['status'=>false,'message'=>'question wrong format']);
			exit;
		}
		$result = $db->insert('participant', [
			'answer'=>json_encode($answer),
			'created_at'=>date('Y-m-d H:i:s')
		]);
		if($result){
			$return = ['status'=>true, 'message'=>'Success'];
		}else{
			$return = ['status'=>true, 'message'=>'Failed'];
		}
		echo json_encode($return);
	}
	public function export()
    {       
        if ($_SERVER['PHP_AUTH_USER']!='admin' || $_SERVER['PHP_AUTH_PW']!='#undp#') {
            header('WWW-Authenticate: Basic realm="UNDP"');
            header('HTTP/1.0 401 Unauthorized');
            exit;
        }

		$db = $this->load->database('default', true);
		$question = config_item('question');

        header("Content-type: application/vnd-ms-excel"); 
        header("Content-Disposition: attachment; filename=undp-".date('YmdHis').".xls");
        $this->load->library('table');
		$this->table->set_template([
			'table_open'            => '<table border="1" cellpadding="4" cellspacing="0">',
		]);
		$i = 0;
        $this->table->set_heading('No', 'Created At', 'Name', 'Gender', 'Age', 'Occ', 'City', 'Email', 'Badge', 
			$question[$i++]['titleen'], 
			$question[$i++]['titleen'],
			$question[$i++]['titleen'],
			$question[$i++]['titleen'],
			$question[$i++]['titleen'],
			$question[$i++]['titleen'],
			$question[$i++]['titleen'],
			$question[$i++]['titleen'],
			$question[$i++]['titleen'],
			$question[$i++]['titleen'],
			$question[$i++]['titleen'],
			$question[$i++]['titleen']
		);

        $i = 1;
        $result = $db->get('participant')->result();
        foreach ($result as $k => $v)
        {
			$answer = @json_decode($v->answer);
			if($answer && is_array($answer)){
				$answer = array_map(function($val){
					if(is_array($val)){
						return implode(',', $val);
					}else{
						return $val;
					}
				}, $answer);
			}else{
				$answer = [];
			}
			$occ = '';
			switch ($v->occ) {
				case 'student':
					$occ = 'Student/Youth';
					break;
				case 'genemp':
					$occ = 'Private sector';
					break;
				case 'govemp':
					$occ = 'Government official';
					break;
				case 'unemp':
					$occ = 'Not Working';
					break;
				case 'adacemic':
					$occ = 'Academia';
					break;
				case 'entrep':
					$occ = 'Entrepreneur';
					break;
				case 'prof':
					$occ = 'Professional';
					break;
				case 'others':
					$occ = 'Others';
					break;				
				default:
					$occ = '';
					break;
			}
			$bio = [
                $i,
                $v->created_at,
                $v->name,
                $v->gender,
                $v->age,
                $occ,
                $v->city,
                $v->email,
                $v->badge,				
            ];
			$data = array_merge($bio,$answer);
			// dd($data);
            $this->table->add_row($data);
            $i++;
        }
        
        echo $this->table->generate();
    }
}
