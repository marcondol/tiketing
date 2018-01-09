<?php
public function __construct()
{
	parent::__construct();
	$this->load->library('sesion');
}

public function index()
{
	$user = $this->input->post('username');
	$pass = $this->input->post('password');
	
	if( $user == 'admin' && $pass=='123')
	{
		$this->session->set_userdata('username',$user);
		redirect('login/admin_page');
	}
	else
	{
		$this->load->view('login/index');
	}
}

public function admin_page()
{
	$this->load->view('lofin/admin_page');
}
?>