<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_landingPage extends CI_Model
{
	public function get_package()
	{
		$query = $this->db->get('packages');
		return $query->result();
	}
}
