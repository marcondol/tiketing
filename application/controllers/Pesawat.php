<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesawat extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('pesawat_model');
		
	}

	public function index(){
		$data['pesawat']= $this->pesawat_model->get_airport_connect();
		$data['kereta']= $this->kereta_model->get_station();
		$this->load->view('home', $data);
	}

	public function result(){
		$posted_data = $this->input->post();
		$airlines = $this->pesawat_model->get_airlines();			
		$post_data['roundtrip'] = 'oneway';//$posted_data['roundtrip'];
		$post_data['from'] =$posted_data['from'];
		$post_data['to'] =$posted_data['to'];
		$post_data['depart'] = preg_replace('/(\d{1,2}).(\d{1,2}).(\d{1,4})/', '$3-$2-$1', $posted_data['departure']);
		$post_data['return'] =preg_replace('/(\d{1,2}).(\d{1,2}).(\d{1,4})/', '$3-$2-$1', $posted_data['return']);
		$post_data['adult'] =$posted_data['adult'];
		$post_data['child'] =$posted_data['child'];
		$post_data['infant'] =0;
		$arr_data['pesawat'] = array_map(function($dt) use ($post_data) {
			$post_data['airline'] = $dt->airlines_id;
			$schedule = $this->pesawat_model->get_search_flight($post_data);
			return array("ses_id"=>$schedule[0]->session_id,
						 "schedule"=> $schedule[0]->schedule->depart);
		}, $airlines->airlines_data);
		// echo "<pre>";
		// print_r($arr_data);
		// return;
		$this->load->view('result', $arr_data);
	}

	public function form_pesan($session_id){
		$arr_data = json_decode(base64_decode(urldecode($session_id)),true);
		$detail_data['pesawat_detail'] = $this->pesawat_model->get_flight_detail($arr_data);
		$this->load->view('form_pesan',$detail_data);
	}

	public function order(){
		$arr_data = json_decode(base64_decode(urldecode($session_id)),true);
		$detail_data['pesawat_detail'] = $this->pesawat_model->get_flight_detail($arr_data);
		$this->load->view('form_pesan',$detail_data);
	}

}


