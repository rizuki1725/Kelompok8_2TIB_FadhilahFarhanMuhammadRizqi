<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ibu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Ibu_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Data Ibu";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['ibu'] = $this->Ibu_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("ibu/vw_ibu", $data);
        $this->load->view("layout/footer", $data);
    }

    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Data Ibu";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nik', 'NIK', 'required', [
            'required' => 'NIK Wajib di isi'
        ]);
        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Nama Wajib di isi'
        ]);
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required', [
            'required' => 'Tempat Lahir Wajib di isi'
        ]);
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required', [
            'required' => 'Pekerjaan Wajib di isi'
        ]);
        $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required', [
            'required' => 'Pendidikan Terakhir Wajib di isi'
        ]);
        $this->form_validation->set_rules('no_hp', 'No Telepon', 'required|integer', [
            'required' => 'No HP Wajib di isi',
            'integer' => 'No HP harus Angka'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required', [
            'required' => 'Email Wajib di isi'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Alamat Wajib di isi'
        ]);
        $this->form_validation->set_rules('penghasilan', 'Penghasilan', 'required', [
            'required' => 'Penghasilan Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("ibu/vw_tambah_ibu", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nik' => $this->input->post('nik'),
                'nama' => $this->input->post('nama'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'pendidikan' => $this->input->post('pendidikan'),
                'no_hp' => $this->input->post('no_hp'),
                'email' => $this->input->post('email'),
                'alamat' => $this->input->post('alamat'),
                'penghasilan' => $this->input->post('penghasilan')
            ];

            $this->Ibu_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data
			Ibu Berhasil Ditambah!</div>');
            redirect('Wali/tambah');
        }
    }

    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Data Ibu";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['ibu'] = $this->Ibu_model->getById($id);
        $this->form_validation->set_rules('nik', 'NIK', 'required', [
            'required' => 'NIK Wajib di isi'
        ]);
        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Nama Wajib di isi'
        ]);
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required', [
            'required' => 'Tempat Lahir Wajib di isi'
        ]);
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required', [
            'required' => 'Pekerjaan Wajib di isi'
        ]);
        $this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required', [
            'required' => 'Pendidikan Terakhir Wajib di isi'
        ]);
        $this->form_validation->set_rules('no_hp', 'No Telepon', 'required|integer', [
            'required' => 'No HP Wajib di isi',
            'integer' => 'No HP harus Angka'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required', [
            'required' => 'Email Wajib di isi'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Alamat Wajib di isi'
        ]);
        $this->form_validation->set_rules('penghasilan', 'Penghasilan', 'required', [
            'required' => 'Penghasilan Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("ibu/vw_ubah_ibu", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nik' => $this->input->post('nik'),
                'nama' => $this->input->post('nama'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'pendidikan' => $this->input->post('pendidikan'),
                'no_hp' => $this->input->post('no_hp'),
                'email' => $this->input->post('email'),
                'alamat' => $this->input->post('alamat'),
                'penghasilan' => $this->input->post('penghasilan')
            ];
            $id = $this->input->post('nik');
            $this->Ibu_model->update(['nik' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Ibu Berhasil
			Diubah!</div>');
            redirect('Ibu');
        }
    }

    public function hapus($id)
    {
        $this->Ibu_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon
			fas fa-info-circle"></i>Data Ibu tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i
			class="icon fas fa-check-circle"></i>Data Ibu Berhasil Dihapus!</div>');
        }
        redirect('Ibu');
    }
}
