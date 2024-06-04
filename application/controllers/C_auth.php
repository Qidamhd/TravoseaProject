<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_user');
	}

	public function login_page()
	{
		$this->load->view('auth/login.php');
	}

	public function prosess_login()
	{
		$username = $this->input->post('username');
		$formpassword = $this->input->post('password');
		$password = md5($formpassword);
		$data = $this->M_user->get_user($username, $password);

		/* var_dump($data['username']);
		die; */

		if ($data == null) {
			redirect('C_auth/login_page');
		} else {
			$this->session->set_userdata('user', $data['username']);
			redirect('C_admin');
		}
	}

	public function prosses_logout()
	{
		session_destroy();
		redirect('C_auth/login_page');
	}
}
