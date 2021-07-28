<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index($source = '')
	{		
		$db = $this->load->database('default', true);

		$data = [
			'source'=>$source,
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
		$id = $this->input->post('id', true);
		$source = $this->input->post('source', true);
		// echo json_encode($answer);exit;
		if(!is_array($answer)){
			echo json_encode(['status'=>false,'message'=>'question wrong format']);
			exit;
		}
		if(!empty($id)){
			$db->where('md5(id)', $id);
			$result = $db->update('participant', [
				'answer'=>json_encode($answer),
				'source'=>$source,
				'created_at'=>date('Y-m-d H:i:s')
			]);
		}else{
			$result = $db->insert('participant', [
				'answer'=>json_encode($answer),
				'source'=>$source,
				'created_at'=>date('Y-m-d H:i:s')
			]);
			$id = md5($db->insert_id());
		}
		if($result){
			$return = ['status'=>true, 'message'=>'Success', 'id'=>$id];
		}else{
			$return = ['status'=>true, 'message'=>'Failed'];
		}
		echo json_encode($return);
	}
	public function export($source = '')
    {       
        if ($_SERVER['PHP_AUTH_USER']!='admin' || $_SERVER['PHP_AUTH_PW']!='#undp#') {
            header('WWW-Authenticate: Basic realm="UNDP"');
            header('HTTP/1.0 401 Unauthorized');
            exit;
        }

		$db = $this->load->database('default', true);

        header("Content-type: application/vnd-ms-excel"); 
        header("Content-Disposition: attachment; filename=undp-".date('YmdHis').".xls");

		if(!empty($source)){
			$db->where('source', $source);
		}
		$result = $db->get('participant')->result();
		// $this->load->view('export_view', ['result'=>$result]);
		$this->load->view('export2_view', ['result'=>$result]);
    }
}
