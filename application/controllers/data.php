<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('pesawat_model');
		$this->load->model('hotel_model');
		$this->load->model('kereta_model');
	}

	public function get_airlines(){
		$get_airlines = $this->pesawat_model->get_airlines();
		echo json_encode($get_airlines);
	}

}


