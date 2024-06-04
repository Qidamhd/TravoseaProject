<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_transaksi extends CI_Model
{
	public function add_transaksi($data)
	{
		return $this->db->insert('tbl_pembelian', $data);
	}
	public function get_pembelian()
	{
		return $this->db->get('tbl_pembelian')->result();
	}
}
