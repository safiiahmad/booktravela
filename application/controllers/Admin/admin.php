<?php
class Admin extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('my_model');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view("admin/v_admin");
	}
	public function ndeleng_rute()
	{
		$data['trute'] = $this->my_model->tampil_data('trute')->result();
		
		$data['show']=$this->my_model->tampil_data('trute');
		$data['side']='admin/tampil/side';
		$data['content']='admin/rute';
		$this->load->view('admin/tampil/main',$data);
	}

	public function ndeleng_user()
	{
		$data['tuser'] = $this->my_model->tampil_data('tuser')->result();
		
		$data['show']=$this->my_model->tampil_data('tuser');
		$data['side']='admin/tampil/side';
		$data['content']='admin/user';
		$this->load->view('admin/tampil/main',$data);
	}

	public function edit_user($id)
	{
		$where = array('id' => $id );
		$data['show']=$this->my_model->edit_data($where, 'tuser')->result();
		$data['side']='admin/tampil/side';
		$data['content']='admin/edit_user';
		$this->load->view('admin/tampil/main',$data);
	}

	public function update_user()
	{
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$fullname = $this->input->post('fullname');

		$data = array(
			'username' => $username,
			'fullname' => $fullname
		);

		$where = array(
			'id' => $id
		);

		$this->my_model->update_data($where,$data,'tuser');
		redirect('admin/admin/ndeleng_user');
	}

	public function hapus_user($id)
	{
		$where = array('id' => $id );
		$this->my_model->hapus_data($where, 'tuser');
		redirect('admin/admin/ndeleng_user');
	}

	public function logout()
	{
		$this->session->unset_userdata("username");
		$this->session->unset_userdata("level");
		session_destroy();
		redirect("home");
	}

}