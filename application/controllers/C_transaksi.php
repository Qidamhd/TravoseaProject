<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_transaksi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_transaksi');
	}
	public function insert_penjualan()
	{
		$nama = $this->input->post('nama');
		$notelp = $this->input->post('no_telp');
		$alamat = $this->input->post('alamat');
		$tjwisata = $this->input->post('tj_wisata');
		$jenispaket = $this->input->post('jenis_paket');
		$jumlahpaket = $this->input->post('jumlah_paket');
		$kodepesanan = $this->input->post('kd_pesanan');
		$tglpemesanan = $this->input->post('tgl_pemesanan');

		$data = [
			'nama' => $nama,
			'no_telp' => $notelp,
			'alamat' => $alamat,
			'tj_wisata' => $tjwisata,
			'jenis_paket' => $jenispaket,
			'jumlah_tiket' => $jumlahpaket,
			'kd_pesanan' => $kodepesanan,
			'tgl_pemesenan' => $tglpemesanan,
		];

		$insert =  $this->M_transaksi->add_transaksi($data);
		if ($insert) {
			return redirect('C_landingPage/form_pembelian');
		}
	}
}
