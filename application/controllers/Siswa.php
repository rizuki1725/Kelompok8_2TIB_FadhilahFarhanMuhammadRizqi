<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Siswa_model');
	}
	public function index()
	{
		$data['Judul'] = "Halaman Siswa";
		$this->load->view("layout/header", $data);
		$this->load->view("siswa/vw_siswa", $data);
		$this->load->view("layout/footer", $data);
	}
	public function detail(){
		$data['judul'] = "Halaman Detail Mahasiswa";
		$this->load->view("layout/header", $data);
		$this->load->view("Siswa/vw_detail_siswa", $data);
		$this->load->view("layout/footer", $data);
	}
	public function detail_orangtua(){
		$data['judul'] = "Halaman Detail Orangtua";
		$this->load->view("layout/header", $data);
		$this->load->view("Siswa/vw_detail_orangtua", $data);
		$this->load->view("layout/footer", $data);
	}
	public function detail_tambahan(){
		$data['judul'] = "Halaman Detail Mahasiswa";
		$this->load->view("layout/header", $data);
		$this->load->view("Siswa/vw_detail_tambahan", $data);
		$this->load->view("layout/footer", $data);
	}
}
?>