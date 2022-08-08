<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Siswa_model');
		$this->load->model('Ayah_model');
		$this->load->model('Ibu_model');
		$this->load->model('Wali_model');
	}
	public function index()
	{
		$data['judul'] = "Halaman Data Siswa";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['siswa'] = $this->Siswa_model->get();
		$this->load->view("layout/header", $data);
		$this->load->view("siswa/vw_siswa", $data);
		$this->load->view("layout/footer", $data);
	}

	public function tambah()
	{
		$data['judul'] = "Halaman Tambah Data Siswa";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['ayah'] = $this->Ayah_model->get();
		$data['ibu'] = $this->Ibu_model->get();
		$data['wali'] = $this->Wali_model->get();

		$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required', [
			'required' => 'Nama Lengkap Wajib di isi'
		]);
		$this->form_validation->set_rules('nisn', 'NISN', 'required', [
			'required' => 'NISN Wajib di isi'
		]);
		$this->form_validation->set_rules('alamat', 'Alamat', 'required', [
			'required' => 'Alamat Wajib di isi'
		]);
		$this->form_validation->set_rules('anak_ke', 'Anak Ke', 'required', [
			'required' => 'Anak Ke Wajib di isi'
		]);
		$this->form_validation->set_rules('dari', 'Dari', 'required', [
			'required' => 'Dari Wajib di isi'
		]);
		$this->form_validation->set_rules('asal_sekolah', 'Asal Sekolah', 'required', [
			'required' => 'Asal Sekolah Wajib di isi'
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("siswa/vw_tambah_siswa", $data);
			$this->load->view("layout/footer", $data);
		} else {
			$data = [
				'nik' => $this->input->post('nik'),
				'nama_lengkap' => $this->input->post('nama_lengkap'),
				'nisn' => $this->input->post('nisn'),
				'alamat' => $this->input->post('alamat'),
				'anak_ke' => $this->input->post('anak_ke'),
				'dari' => $this->input->post('dari'),
				'asal_sekolah' => $this->input->post('asal_sekolah'),
				'ayah' => $this->input->post('ayah'),
				'ibu' => $this->input->post('ibu'),
				'wali' => $this->input->post('wali'),
				'jurusan' => $this->input->post('jurusan')
			];

			$this->Siswa_model->insert($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data
			Siswa Berhasil Ditambah!</div>');
			redirect("Ayah/tambah");
		}
	}


	public function edit($id)
	{
		$data['judul'] = "Halaman Edit Siswa";
		$data['ayah'] = $this->Ayah_model->get();
		$data['ibu'] = $this->Ibu_model->get();
		$data['wali'] = $this->Wali_model->get();
		$data['siswa'] = $this->Siswa_model->getById($id);
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();



		$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required', [
			'required' => 'Nama Lengkap Wajib di isi'
		]);
		$this->form_validation->set_rules('nisn', 'NISN', 'required', [
			'required' => 'NISN Wajib di isi'
		]);
		$this->form_validation->set_rules('alamat', 'Alamat', 'required', [
			'required' => 'Alamat Wajib di isi'
		]);
		$this->form_validation->set_rules('anak_ke', 'Anak Ke', 'required', [
			'required' => 'Anak Ke Wajib di isi'
		]);
		$this->form_validation->set_rules('dari', 'Dari', 'required', [
			'required' => 'Dari Wajib di isi'
		]);
		$this->form_validation->set_rules('asal_sekolah', 'Asal Sekolah', 'required', [
			'required' => 'Asal Sekolah Wajib di isi'
		]);

		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("siswa/vw_ubah_siswa", $data);
			$this->load->view("layout/footer");
		} else {
			$data = [
				'nik' => $this->input->post('nik'),
				'nama_lengkap' => $this->input->post('nama_lengkap'),
				'nisn' => $this->input->post('nisn'),
				'alamat' => $this->input->post('alamat'),
				'anak_ke' => $this->input->post('anak_ke'),
				'dari' => $this->input->post('dari'),
				'asal_sekolah' => $this->input->post('asal_sekolah'),
				'ayah' => $this->input->post('ayah'),
				'ibu' => $this->input->post('ibu'),
				'wali' => $this->input->post('wali'),
				'jurusan' => $this->input->post('jurusan')
			];
			$id = $this->input->post('nik');
			$this->Siswa_model->update(['nik' => $id], $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Siswa Berhasil
                Diubah!</div>');
			redirect('Siswa');
		}
	}
	public function detail($id)
	{
		$data['judul'] = "Halaman Detail Mahasiswa";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['siswa'] = $this->Siswa_model->getById($id);
		$this->load->view("layout/header", $data);
		$this->load->view("siswa/vw_detail_siswa", $data);
		$this->load->view("layout/footer", $data);
	}
	public function detail_orangtua($id)
	{
		$data['judul'] = "Halaman Detail Orangtua";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['siswa'] = $this->Siswa_model->getById($id);
		$data['ayah'] = $this->Ayah_model->get();
		$data['ibu'] = $this->Ibu_model->get();
		$data['wali'] = $this->Wali_model->get();
		$this->load->view("layout/header", $data);
		$this->load->view("siswa/vw_detail_orangtua", $data);
		$this->load->view("layout/footer", $data);
	}
	public function hapus($id)
	{
		$this->Siswa_model->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Mahasiswa Berhasil Dihapus!</div>');
		redirect('Siswa');
	}
}
