<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kereta extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('kereta_model');

	}

	public function index(){
		$this->load->view('home', $data);
	}

	public function result(){
      $posted_data = $this->input->post();
      if(!empty($posted_data)){
         $post_data['roundtrip'] = 'oneway';
         $post_data['from'] =$posted_data['from'];
         $post_data['to'] =$posted_data['to'];
         $post_data['depart'] = preg_replace('/(\d{1,2}).(\d{1,2}).(\d{1,4})/', '$3-$2-$1', $posted_data['departure']);
         $post_data['adult'] =$posted_data['adult'];
         $post_data['child'] =$posted_data['infant'];
         $schedule = (array)$this->kereta_model->get_train($post_data);
         $arr_data['kereta'][] = array_filter($schedule, function($dt) {
                  return $dt=='session_id' || $dt =='schedule';
                  }, ARRAY_FILTER_USE_KEY);
      }
		$this->load->view('result_kereta', $arr_data);

   }

   public function form_pesan($session_id){
      $arr_data = json_decode(base64_decode(urldecode($session_id)),true);
      $detail_data['kereta_detail'][] = $this->kereta_model->get_train_detail($arr_data);
      $this->load->view('form_pesan_kereta',$detail_data);
	}

}


