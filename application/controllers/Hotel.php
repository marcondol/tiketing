<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('hotel_model');

	}

	public function index(){
		$this->load->view('home', $data);
	}

	public function result(){
      $posted_data = $this->input->post();
      $arr_data['hotel'] = array();
      if(!empty($posted_data)){
         $post_data['city'] =$posted_data['city'];
         $post_data['room'] =$posted_data['room'];
         $post_data['ci'] = preg_replace('/(\d{1,2}).(\d{1,2}).(\d{1,4})/', '$3-$2-$1', $posted_data['ci']);
         $post_data['co'] = preg_replace('/(\d{1,2}).(\d{1,2}).(\d{1,4})/', '$3-$2-$1', $posted_data['co']);
         $post_data['adult'] =$posted_data['adult'];
         $post_data['child'] =$posted_data['child'];

         $schedule = (array)$this->hotel_model->get_hotel($post_data);
         $arr_data['hotel'][] = array_filter($schedule, function($dt) {
                  return $dt=='session_id' || $dt =='result_data';
                  }, ARRAY_FILTER_USE_KEY);

      }
		$this->load->view('result_hotel', $arr_data);

   }

   public function detail($session_id){
      $arr_data = json_decode(base64_decode(urldecode($session_id)),true);

      $detail_data['hotel_detail'] = $this->hotel_model->get_detail_hotel($arr_data);
      echo "<pre>";
      print_r($detail_data);
      return;
		// $this->load->view('form_pesan_kereta',$detail_data);
	}

}


