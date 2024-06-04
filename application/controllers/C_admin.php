<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$user = $this->session->userdata('user');

		if ($user == null) {
			redirect('C_auth/login_page');
		}
		$this->load->model('M_transaksi');
	}

	public function index()
	{
		$user = $this->session->userdata('user');
		$this->template->template_admin('Admin/content/dashboard.php');
	}
	public function user_page()
	{
		$this->template->template_admin('Admin/content/user.php');
	}
	public function visitor_page()
	{
		$this->template->template_admin('Admin/content/visitor.php');
	}
	public function pemesanan_page()
	{
		$data['data_pembelian'] = $this->M_transaksi->get_pembelian();
		$this->template->template_admin('Admin/content/pemesanan.php', $data);
	}
}
