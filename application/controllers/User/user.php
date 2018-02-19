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

	public function profilku()
	{
		$this->load->view("user/v_profile");
	}

	public function logout()
	{
		$this->session->unset_userdata("username");
		$this->session->unset_userdata("level");
		session_destroy();
		redirect("home");
	}
}