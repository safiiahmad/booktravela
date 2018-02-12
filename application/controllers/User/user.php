<?php
class User extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('my_model');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view("user/v_user");
	}
}