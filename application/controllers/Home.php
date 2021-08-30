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
	public function export()
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
		$output = 'No,Tanggal,O1,O2,A1,A2,A3,A4,A5,A6,A7_a,A7_b,A7_c,A7_d,A7_e,A7_f,A7_g,A7_h,A7_no,A7_oth,A8_prov,A8_kab,A9,A10,A10_oth,A11,A11_oth,A12_a,A12_b,A12_c,A12_d,A12_no,';
		for ($j='a'; $j <= 'm'; $j++) { 
			$output .= 'A13_'.$j.',';
		}
		$output .= 'A13_oth,A14,A15,A16,A17,A18,A19_f,A19_m,A20_f,A20_m,A21_f,A21_m,A22_a,A22_b,A22_c,A22_d,A22_e,A23,B1,B2_a,B2_b,B2_c,B2_d,B2_no,B3,';
		for ($j='a'; $j <= 'l'; $j++) {
			$output .= 'B4_'.$j.',';
		}
		$output .= 'B4_oth,';
		for ($j='a'; $j <= 'e'; $j++) {
			$output .= 'B5_'.$j.',';
		}
		$output .= 'B5_no,C1_f,C1_f_dis,C1_m,C1_m_dis,';
		for ($j='a'; $j <= 'p'; $j++) {
			$output .= 'C2_'.$j.',';
		}
		$output .= 'C2_no,';
		for ($j='a'; $j <= 'p'; $j++) {
			$output .= 'C3_'.$j.',';
		}
		$output .= 'C3_no,';
		for ($j='a'; $j <= 'd'; $j++) {
			$output .= 'C4_'.$j.',';
		}
		for ($j='a'; $j <= 'f'; $j++) {
			$output .= 'C5_a_'.$j.',';
		}
		$output .= 'C5_a_no,';
		for ($j='a'; $j <= 'f'; $j++) {
			$output .= 'C5_b_'.$j.',';
		}
		$output .= 'C5_b_no,';
		for ($j='a'; $j <= 'i'; $j++) {
			$output .= 'C5_c_'.$j.',';
		}
		$output .= 'C5_c_no,C6,C7,';
		for ($j='a'; $j <= 'g'; $j++) {
			$output .= 'C8_'.$j.',';
		}
		$output .= 'C8_no,';
		for ($j='a'; $j <= 'd'; $j++) {
			$output .= 'C9_'.$j.',';
		}
		$output .= 'C9_no,';
		for ($j='a'; $j <= 'd'; $j++) {
			$output .= 'D1_'.$j.',';
		}
		for ($j=2; $j <= 7; $j++) {
			$output .= 'D'.$j.',';
		}
		$output .= 'E1,E2,';
		for ($j='a'; $j <= 'g'; $j++) {
			$output .= 'E3_'.$j.',';
		}
		$output .= 'E3_no,';
		for ($j='a'; $j <= 'g'; $j++) {
			$output .= 'E4_'.$j.',';
		}
		$output .= 'E5,';
		for ($j='a'; $j <= 'g'; $j++) {
			$output .= 'E6_'.$j.',';
		}
		$output .= 'E6_no,';
		for ($j='a'; $j <= 'j'; $j++) {
			$output .= 'F1_'.$j.',';
		}
		$output .= 'F1_no,';
		for ($j='a'; $j <= 'd'; $j++) {
			$output .= 'F2_'.$j.',';
		}
		$output .= 'F3,F4,';
		for ($j='a'; $j <= 'g'; $j++) {
			$output .= 'G1_'.$j.',';
		}
		$output .= 'G1_no,';
		for ($j='a'; $j <= 'c'; $j++) {
			$output .= 'G2_'.$j.',';
		}
		$output .= 'G3,';
		$output .= 'G4,';
		$output .= 'Source'.PHP_EOL;
		$i=1;
		foreach ($result as $row) {
			$answer = @json_decode($row->answer, true);
			if(empty($answer[0])){continue;}
			$output .= '"'.$i++.'",';
			$output .= '"'.$row->created_at.'",';
			$output .= '"'.@$answer[0].'",';
			$output .= '"'.@$answer[1].'",';
			$output .= '"'.@$answer[2].'",';
			$output .= '"'.@$answer[3].'",';
			$output .= '"'.@$answer[4].'",';
			$output .= '"'.@$answer[5].'",';
			$output .= '"'.@$answer[6].'",';
			$output .= '"'.@$answer[7].'",';
			for ($j=1; $j <= 9; $j++) {
				$output .= '"'.(!empty(@$answer[8][$j][0])?1:0).'",';
			}
			$output .= '"'.@$answer[8][11].'",';
			$output .= '"'.@$answer[9].'",';
			$output .= '"'.@$answer[10].'",';
			$output .= '"'.@$answer[11].'",';
			$output .= '"'.$answer[12][0].'",';
			$output .= '"'.@$answer[12][1].'",';
			$output .= '"'.$answer[13][0].'",';
			$output .= '"'.@$answer[13][1].'",';
			for ($j=1; $j <= 5; $j++) {
				$output .= '"'.(!empty(@$answer[14][$j][0])?1:0).'",';
			}
			for ($j=1; $j <= 13; $j++) {
				$output .= '"'.(!empty(@$answer[15][$j][0])?1:0).'",';
			}
			$output .= '"'.@$answer[15][15].'",';
			$output .= '"'.@$answer[16].'",';
			$output .= '"'.@$answer[17].'",';
			$output .= '"'.@$answer[18].'",';
			$output .= '"'.@$answer[19].'",';
			$output .= '"'.@$answer[20].'",';
			$output .= '"'.@$answer[21][0].'",';
			$output .= '"'.@$answer[21][1].'",';
			$output .= '"'.@$answer[22][0].'",';
			$output .= '"'.@$answer[22][1].'",';
			$output .= '"'.@$answer[23][0].'",';
			$output .= '"'.@$answer[23][1].'",';
			$output .= '"'.substr(@$answer[24][1][0],0,1).'",';
			$output .= '"'.substr(@$answer[24][2][0],0,1).'",';
			$output .= '"'.substr(@$answer[24][3][0],0,1).'",';
			$output .= '"'.substr(@$answer[24][4][0],0,1).'",';
			$output .= '"'.substr(@$answer[24][5][0],0,1).'",';
			$output .= '"'.@$answer[25].'",';
			$output .= '"'.@$answer[26].'",';
			for ($j=1; $j <= 5; $j++) {
				$output .= '"'.(!empty(@$answer[27][$j][0])?1:0).'",';
			}
			$output .= '"'.@$answer[28].'",';
			for ($j=1; $j <= 12; $j++) {
				$output .= '"'.(!empty(@$answer[29][$j][0])?1:0).'",';
			}
			$output .= '"'.@$answer[29][14].'",';
			for ($j=1; $j <= 6; $j++) {
				$output .= '"'.(!empty(@$answer[30][$j][0])?1:0).'",';
			}
			$output .= '"'.@$answer[31][0].'",';
			$output .= '"'.@$answer[31][1].'",';
			$output .= '"'.@$answer[31][2].'",';
			$output .= '"'.@$answer[31][3].'",';
			for ($j=1; $j <= 17; $j++) {
				$output .= '"'.(!empty(@$answer[32][$j][0])?1:0).'",';
			}
			for ($j=1; $j <= 17; $j++) {
				$output .= '"'.(!empty(@$answer[33][$j][0])?1:0).'",';
			}
			for ($j=0; $j <= 3; $j++) {
				$output .= '"'.@$answer[34][$j].'",';
			}
			for ($j=1; $j <= 7; $j++) {
				$output .= '"'.(!empty(@$answer[35][0][$j][0])?1:0).'",';
			}
			for ($j=1; $j <= 7; $j++) {
				$output .= '"'.(!empty(@$answer[35][1][$j][0])?1:0).'",';
			}
			for ($j=1; $j <= 10; $j++) {
				$output .= '"'.(!empty(@$answer[35][2][$j][0])?1:0).'",';
			}
			$output .= '"'.@$answer[36].'",';
			$output .= '"'.@$answer[37].'",';
			for ($j=1; $j <= 8; $j++) {
				$output .= '"'.(!empty(@$answer[38][$j][0])?1:0).'",';
			}
			for ($j=1; $j <= 5; $j++) {
				$output .= '"'.(!empty(@$answer[39][$j][0])?1:0).'",';
			}
			for ($j=0; $j <= 3; $j++) {
				$output .= '"'.@$answer[40][$j].'",';
			}
			for ($j=41; $j <= 48; $j++) {
				$output .= '"'.@$answer[$j].'",';
			}
			for ($j=1; $j <= 8; $j++) {
				$output .= '"'.(!empty(@$answer[49][$j][0])?1:0).'",';
			}
			for ($j=1; $j <= 7; $j++) {
				$output .= '"'.(!empty(@$answer[50][$j][0])?1:0).'",';
			}
			$output .= '"'.@$answer[51].'",';
			for ($j=1; $j <= 8; $j++) {
				$output .= '"'.(!empty(@$answer[52][$j][0])?1:0).'",';
			}
			for ($j=1; $j <= 11; $j++) {
				$output .= '"'.(!empty(@$answer[53][$j][0])?1:0).'",';
			}
			for ($j=0; $j <= 3; $j++) {
				$output .= '"'.@$answer[54][$j].'",';
			}
			$output .= '"'.@$answer[55].'",';
			$output .= '"'.@$answer[56].'",';
			for ($j=1; $j <= 8; $j++) {
				$output .= '"'.(!empty(@$answer[57][$j][0])?1:0).'",';
			}
			for ($j=0; $j <= 2; $j++) {
				$output .= '"'.@$answer[58][$j].'",';
			}
			$output .= '"'.@$answer[59].'",';
			$output .= '"'.@$answer[60].'",';
			$output .= '"'.@$row->source.'"'.PHP_EOL;
		}

		echo $output;
	}
}
