<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('pesawat_model');
		$this->load->model('hotel_model');
		$this->load->model('kereta_model');
	}

	public function index()
	{
		$data['pesawat']= $this->pesawat_model->get_airport_connect();
		$data['kereta']= $this->kereta_model->get_station();
		$this->load->view('home', $data);
	}

	
	public function overview()
	{
		$this->load->view('overview');
	}


	public function testimonials()
	{
		$this->load->view('testimonials');
	}


	public function faq()
	{
		$this->load->view('faq');
	}


	public function contacts()
	{
		$this->load->view('contacts');
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function register()
	{
		$this->load->view('register');
	}

	public function logincustomer()
	{
		$this->load->view('logincustomer');
	}
	
	public function registercustomer()
	{
		$this->load->view('registercustomer');
	}
	
	public function registersukses()
	{
		$this->load->view('registersukses');
	}	
}


