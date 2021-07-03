<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{		
		$db = $this->load->database('default', true);


		$data = [
			'prov' => $db->query('select distinct(prov) from city')->result(),
		];

		// dd($data);
		
		
		$this->load->view('home_view', $data);		
	}
	public function city($prov = '')
	{
		$db = $this->load->database('default', true);	
		$city = $db->select('city')->where('prov', urldecode($prov))->get('city')->result();
		// dd($db->last_query());
		echo json_encode($city);
	}
	public function participant()
	{		
		$answer = $this->input->post('q', true);
		echo json_encode($answer);exit;
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('', ', ');
		$this->form_validation->set_rules('name','Name', 'required|trim');
		$this->form_validation->set_rules('gender','Gender', 'required|trim|in_list[M,F,none]');
		$this->form_validation->set_rules('age','Age', 'required|trim|is_natural_no_zero');
		$this->form_validation->set_rules('occ','Occ', 'required|trim');
		$this->form_validation->set_rules('city','City', 'required|trim');
		$this->form_validation->set_rules('email','Email', 'trim|valid_email');

		$return = ['status'=>false];
		if($this->form_validation->run() === FALSE){
			$return = ['status'=>false, 'message'=>validation_errors()];
		}else{
			$db = $this->load->database('default', true);
			$answer = $this->input->post('question', true);
			if(!is_array($answer)){
				echo json_encode(['status'=>false,'message'=>'question wrong format']);
				exit;
			}
			$array = array_slice($answer,-5,5);
			$values = array_count_values($array);
			arsort($values);
			$badge = array_slice(array_keys($values), 0, 1, true);

			$result = $db->insert('participant', [
				'name'=>$this->input->post('name', true),
				'gender'=>$this->input->post('gender', true),
				'age'=>$this->input->post('age', true),
				'occ'=>$this->input->post('occ', true),
				'city'=>$this->input->post('city', true),
				'email'=>$this->input->post('email', true),
				'answer'=>json_encode($answer),
				'badge'=>$badge[0],
			]);
			$badge_index = 0;
			switch ($badge[0]) {
				case 'a':
					$badge_index = 0;
					break;
				case 'b':
					$badge_index = 1;
					break;
				case 'c':
					$badge_index = 2;
					break;
				case 'd':
					$badge_index = 3;
					break;
				case 'e':
					$badge_index = 4;
					break;
				
				default:
					$badge_index = 0;
					break;
			}			
			$badge_config = config_item('badge');
			if($result){
				$return = ['status'=>true, 'badge'=>$badge_index, 'share_url'=>base_url('?badge='.$badge[0]), 'share_caption'=>$badge_config[$badge_index]['og_desc']];
			}
		}		
		echo json_encode($return);
	}
	public function set_lang($value = '')
	{
		setcookie('lang', $value, time() + (86400 * 30),'/');
		redirect();
	}
	public function get_lang()
	{
		echo config_item('lang');
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
