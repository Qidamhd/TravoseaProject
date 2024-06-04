<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_landingPage extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_landingPage');
	}

	public function index()
	{
		$data['images'] =  $this->M_landingPage->get_package();
		$this->load->view('landing_page/landingPage', $data);
	}
	public function package()
	{
		$hasil = $this->M_landingPage->get_package();
		// var_dump($hasil);
	}
	//form_pendaftaran

	public function form_pembelian()
	{
		$data['judul'] = 'form_pembelian';
		$this->template->template_packages('landing_page/form_pemesanan.php', $data);
	}

	public function bidadari()
	{
		$data['judul'] = 'Bidadari';
		$this->template->template_packages('packages/bidadari.php', $data);
		/* $this->load->view('packages/bidadari.php', $data); */
	}
	public function pari()
	{
		$data['judul'] = 'pari';
		$this->template->template_packages('packages/pari.php', $data);
		/* $this->load->view('packages/bidadari.php', $data); */
	}
	public function dolphin()
	{
		$data['judul'] = 'doplhin';
		$this->template->template_packages('packages/dolphin.php', $data);
		/* $this->load->view('packages/bidadari.php', $data); */
	}
	public function macan()
	{
		$data['judul'] = 'macan';
		$this->template->template_packages('packages/macan.php', $data);
		/* $this->load->view('packages/bidadari.php', $data); */
	}
	public function pelangi()
	{
		$data['judul'] = 'pelangi';
		$this->template->template_packages('packages/pelangi.php', $data);
		/* $this->load->view('packages/bidadari.php', $data); */
	}
	public function pramuka()
	{
		$data['judul'] = 'pramuka';
		$this->template->template_packages('packages/pramuka.php', $data);
		/* $this->load->view('packages/bidadari.php', $data); */
	}
	public function tidung()
	{
		$data['judul'] = 'tidung';
		$this->template->template_packages('packages/tidung.php', $data);
		/* $this->load->view('packages/bidadari.php', $data); */
	}
	public function untungjawa()
	{
		$data['judul'] = 'untungjawa';
		$this->template->template_packages('packages/untungjawa.php', $data);
		/* $this->load->view('packages/bidadari.php', $data); */
	}
}
