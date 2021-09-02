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
			$db->where('MD5(concat(id,"#undp%"))', $id);
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
			$id = md5($db->insert_id().'#undp%');
		}
		if($result){
			$return = ['status'=>true, 'message'=>'Success', 'id'=>$id];
		}else{
			$return = ['status'=>true, 'message'=>'Failed'];
		}
		echo json_encode($return);
	}
	public function export2($source = '')
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
	public function export($source = '')
	{
		if ($_SERVER['PHP_AUTH_USER']!='admin' || $_SERVER['PHP_AUTH_PW']!='#undp#') {
            header('WWW-Authenticate: Basic realm="UNDP"');
            header('HTTP/1.0 401 Unauthorized');
            exit;
        }

		header("Content-type: application/csv"); 
		header("Content-Disposition: attachment; filename=undp-".date('Ymd').".csv");
		
		$db = $this->load->database('default', true);
		if(!empty($source)){
			$db->where('source', $source);
		}
		$result = $db->get('participant')->result();
		$output = fopen("php://output", "w"); 
		$header = ['No','Tanggal','O1','O2','A1','A2','A3','A4','A5','A6','A7_a','A7_b','A7_c','A7_d','A7_e','A7_f','A7_g','A7_h','A7_no','A7_oth','A8_prov','A8_kab','A9','A10','A10_oth','A11','A11_oth','A12_a','A12_b','A12_c','A12_d','A12_no'];
		for ($j='a'; $j <= 'm'; $j++) { 
			$header[] = 'A13_'.$j;
		}
		$header = array_merge($header,['A13_oth','A14','A15','A16','A17','A18','A19_f','A19_m','A20_f','A20_m','A21_f','A21_m','A22_a','A22_b','A22_c','A22_d','A22_e','A23','B1','B2_a','B2_b','B2_c','B2_d','B2_no','B3']);
		for ($j='a'; $j <= 'l'; $j++) {
			$header[] = 'B4_'.$j;
		}
		$header[] = 'B4_oth';
		for ($j='a'; $j <= 'e'; $j++) {
			$header[] = 'B5_'.$j;
		}
		$header = array_merge($header,['B5_no','C1_f','C1_f_dis','C1_m','C1_m_dis']);
		for ($j='a'; $j <= 'p'; $j++) {
			$header[] = 'C2_'.$j;
		}
		$header[] = 'C2_no';
		for ($j='a'; $j <= 'p'; $j++) {
			$header[] = 'C3_'.$j;
		}
		$header[] = 'C3_no';
		for ($j='a'; $j <= 'd'; $j++) {
			$header[] = 'C4_'.$j;
		}
		for ($j='a'; $j <= 'f'; $j++) {
			$header[] = 'C5_a_'.$j;
		}
		$header[] = 'C5_a_no';
		for ($j='a'; $j <= 'f'; $j++) {
			$header[] = 'C5_b_'.$j;
		}
		$header[] = 'C5_b_no';
		for ($j='a'; $j <= 'i'; $j++) {
			$header[] = 'C5_c_'.$j;
		}
		$header = array_merge($header,['C5_c_no','C6','C7']);
		for ($j='a'; $j <= 'g'; $j++) {
			$header[] = 'C8_'.$j;
		}
		$header[] = 'C8_no';
		for ($j='a'; $j <= 'd'; $j++) {
			$header[] = 'C9_'.$j;
		}
		$header[] = 'C9_no';
		for ($j='a'; $j <= 'd'; $j++) {
			$header[] = 'D1_'.$j;
		}
		for ($j=2; $j <= 7; $j++) {
			$header[] = 'D'.$j;
		}
		$header = array_merge($header,['E1','E2']);
		for ($j='a'; $j <= 'g'; $j++) {
			$header[] = 'E3_'.$j;
		}
		$header[] = 'E3_no';
		for ($j='a'; $j <= 'g'; $j++) {
			$header[] = 'E4_'.$j;
		}
		$header[] = 'E5';
		for ($j='a'; $j <= 'g'; $j++) {
			$header[] = 'E6_'.$j;
		}
		$header[] = 'E6_no';
		for ($j='a'; $j <= 'j'; $j++) {
			$header[] = 'F1_'.$j;
		}
		$header[] = 'F1_no';
		for ($j='a'; $j <= 'd'; $j++) {
			$header[] = 'F2_'.$j;
		}
		$header = array_merge($header,['F3','F4']);
		for ($j='a'; $j <= 'g'; $j++) {
			$header[] = 'G1_'.$j;
		}
		$header[] = 'G1_no';
		for ($j='a'; $j <= 'c'; $j++) {
			$header[] = 'G2_'.$j;
		}
		$header[] = 'G3';
		$header[] = 'G4';
		$header[] = 'Source';
		// dd($header);
		fputcsv($output, $header); 
		$i=1;
		foreach ($result as $row) {			
			$answer = @json_decode($row->answer, true);
			if(empty($answer[0])){continue;}			
			$body[] = $i++;
			$body[] = $row->created_at;
			$body[] = @$answer[0];
			$body[] = @$answer[1];
			$body[] = @$answer[2];
			$body[] = @$answer[3];
			$body[] = @$answer[4];
			$body[] = @$answer[5];
			$body[] = @$answer[6];
			$body[] = @$answer[7];
			for ($j=1; $j <= 9; $j++) {
				$body[] = (!empty(@$answer[8][$j][0])?1:0);
			}
			$body[] = @$answer[8][11];
			$body[] = @$answer[9];
			$body[] = @$answer[10];
			$body[] = @$answer[11];
			$body[] = $answer[12][0];
			$body[] = @$answer[12][1];
			$body[] = $answer[13][0];
			$body[] = @$answer[13][1];
			for ($j=1; $j <= 5; $j++) {
				$body[] = (!empty(@$answer[14][$j][0])?1:0);
			}
			for ($j=1; $j <= 13; $j++) {
				$body[] = (!empty(@$answer[15][$j][0])?1:0);
			}
			$body[] = @$answer[15][15];
			$body[] = @$answer[16];
			$body[] = @$answer[17];
			$body[] = @$answer[18];
			$body[] = @$answer[19];
			$body[] = @$answer[20];
			$body[] = @$answer[21][0];
			$body[] = @$answer[21][1];
			$body[] = @$answer[22][0];
			$body[] = @$answer[22][1];
			$body[] = @$answer[23][0];
			$body[] = @$answer[23][1];
			$body[] = substr(@$answer[24][1][0],0,1);
			$body[] = substr(@$answer[24][2][0],0,1);
			$body[] = substr(@$answer[24][3][0],0,1);
			$body[] = substr(@$answer[24][4][0],0,1);
			$body[] = substr(@$answer[24][5][0],0,1);
			$body[] = @$answer[25];
			$body[] = @$answer[26];
			for ($j=1; $j <= 5; $j++) {
				$body[] = (!empty(@$answer[27][$j][0])?1:0);
			}
			$body[] = @$answer[28];
			for ($j=1; $j <= 12; $j++) {
				$body[] = (!empty(@$answer[29][$j][0])?1:0);
			}
			$body[] = @$answer[29][14];
			for ($j=1; $j <= 6; $j++) {
				$body[] = (!empty(@$answer[30][$j][0])?1:0);
			}
			$body[] = @$answer[31][0];
			$body[] = @$answer[31][1];
			$body[] = @$answer[31][2];
			$body[] = @$answer[31][3];
			for ($j=1; $j <= 17; $j++) {
				$body[] = (!empty(@$answer[32][$j][0])?1:0);
			}
			for ($j=1; $j <= 17; $j++) {
				$body[] = (!empty(@$answer[33][$j][0])?1:0);
			}
			for ($j=0; $j <= 3; $j++) {
				$body[] = @$answer[34][$j];
			}
			for ($j=1; $j <= 7; $j++) {
				$body[] = (!empty(@$answer[35][0][$j][0])?1:0);
			}
			for ($j=1; $j <= 7; $j++) {
				$body[] = (!empty(@$answer[35][1][$j][0])?1:0);
			}
			for ($j=1; $j <= 10; $j++) {
				$body[] = (!empty(@$answer[35][2][$j][0])?1:0);
			}
			$body[] = @$answer[36];
			$body[] = @$answer[37];
			for ($j=1; $j <= 8; $j++) {
				$body[] = (!empty(@$answer[38][$j][0])?1:0);
			}
			for ($j=1; $j <= 5; $j++) {
				$body[] = (!empty(@$answer[39][$j][0])?1:0);
			}
			for ($j=0; $j <= 3; $j++) {
				$body[] = @$answer[40][$j];
			}
			for ($j=41; $j <= 48; $j++) {
				$body[] = @$answer[$j];
			}
			for ($j=1; $j <= 8; $j++) {
				$body[] = (!empty(@$answer[49][$j][0])?1:0);
			}
			for ($j=1; $j <= 7; $j++) {
				$body[] = (!empty(@$answer[50][$j][0])?1:0);
			}
			$body[] = @$answer[51];
			for ($j=1; $j <= 8; $j++) {
				$body[] = (!empty(@$answer[52][$j][0])?1:0);
			}
			for ($j=1; $j <= 11; $j++) {
				$body[] = (!empty(@$answer[53][$j][0])?1:0);
			}
			for ($j=0; $j <= 3; $j++) {
				$body[] = @$answer[54][$j];
			}
			$body[] = @$answer[55];
			$body[] = @$answer[56];
			for ($j=1; $j <= 8; $j++) {
				$body[] = (!empty(@$answer[57][$j][0])?1:0);
			}
			for ($j=0; $j <= 2; $j++) {
				$body[] = @$answer[58][$j];
			}
			$body[] = @$answer[59];
			$body[] = @$answer[60];
			$body[] = @$row->source;
			fputcsv($output, $body);
			unset($body);
		}

		// echo $output;
		fclose($output); 
	}
}
