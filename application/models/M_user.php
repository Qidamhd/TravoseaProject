<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_user extends CI_Model
{
	public function get_user($username, $password)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get()->row_array();
	}
}
