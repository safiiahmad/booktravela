<?php
/**
* 
*/
class My_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function cek_user($uname, $pass)
	{
		$qry = $this->db->query("select * from tuser where username='$uname' and password='$pass'");
		return $qry;
	}

	public function input_data($data, $table)
	{
		$this->db->insert($table,$data);
	}

	public function tampil_data($table)
	{
		return $this->db->get($table);
	}

	public function edit_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function select_from()
	{
		$this->db->select("rute_from");
	    $this->db->from('trute');
	    $this->db->group_by("rute_from");
	    $query = $this->db->get();
	    return $query;
	}

	public function select_to()
	{
		$this->db->select("rute_to");
	    $this->db->from('trute');
	    $this->db->group_by("rute_to");
	    $query = $this->db->get();
	    return $query;
	}
}