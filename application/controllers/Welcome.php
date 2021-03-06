<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		$this->load->model('pesawat_model');
		$this->load->model('kereta_model');
		$this->load->model('hotel_model');
	}
	public function index(){
		$this->load->view('welcome_message');
	}

	public function methods($param){
		echo "<pre>";
		switch ($param) {
		    case 'airlines':
		        print_r($this->pesawat_model->get_airlines());
		        break;
		    case 'connect':
		        print_r($this->pesawat_model->get_airlines_connect());
		        break;
		    case 'airport':
		        print_r($this->pesawat_model->get_airport_connect());
		        break;
		    case 'departure':
		        print_r($this->pesawat_model->get_departure_airport(1));
		        break;
		    case 'arrival':
		        print_r($this->pesawat_model->get_arrival_airport(1,"BDO"));
		        break;
		    case 'rute':
		        print_r($this->pesawat_model->get_airport_rute("BDO"));
		        break;
		    case 'search':
		        print_r($this->pesawat_model->get_search_flight(1));
		        break;
		    case 'station':
		        print_r($this->kereta_model->get_station());
		        break;    
		    case 'train':
		        print_r($this->kereta_model->get_train());
		        break;
		    case 'hotel':
		        print_r($this->hotel_model->get_hotel());
		        break;
		    case 'hotel_city':
		        print_r($this->hotel_model->get_city_list());
		        break;
		    default:
		        echo "test";
		}
		
	}
}
