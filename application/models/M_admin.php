<?php
class M_model extends CI_Model
{

	/* public function __construct()
	{
		parent::__construct();
	}

	public function check_login($username, $password)
	{
		// Query to check user credentials
		$this->db->where('username', $username);
		$this->db->where('password', md5($password)); // Assuming the password is stored in md5 hash
		$query = $this->db->get('users');

		if ($query->num_rows() == 1) {
			return $query->row();
		} else {
			return false;
		}
	} */
}
