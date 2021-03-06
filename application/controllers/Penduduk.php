<?php 

class Penduduk extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Penduduk_model');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['title'] = 'Daftar Penduduk';
        $data['penduduk'] = $this->Penduduk_model->getAllPenduduk();
        if( $this->input->post('keyword') ) {
            $data['penduduk'] = $this->Penduduk_model->cariDataPenduduk();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('penduduk/index', $data);
        $this->load->view('templates/footer');
    }

    public function addPenduduk() {
        $data['title'] = 'Tambah data penduduk';

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nim', 'Social credit', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if( $this->form_validation->run() == FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('penduduk/add');
            $this->load->view('templates/footer');
        } else {
            $this->Penduduk_model->addDataPenduduk();
            $this->session->set_flashdata('flash', 'ditambahkan!');
            redirect('penduduk/index');
        }
    }

    public function deletePenduduk($id) {
        $this->Penduduk_model->deleteDataPenduduk($id);
        $this->session->set_flashdata('flash', 'dihapus!');
        redirect('penduduk/index');
    }

    public function detail($id) {
        $data['title'] = "Detail Penduduk";
        $data['penduduk'] = $this->Penduduk_model->getPendudukById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('penduduk/detail', $data);
        $this->load->view('templates/footer');
    }

    public function editPenduduk($id) {
        $data['title'] = 'Ubah Data Penduduk';
        $data['penduduk'] = $this->Penduduk_model->getPendudukById($id);
        $data['jurusan'] = ['Teknik Informatika', 'Teknik Elektryk', 'Pengangguran', 'Teknik Nuklir', 'Dokter', 'Medic'];

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nim', 'Social credit', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if( $this->form_validation->run() == FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('penduduk/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Penduduk_model->editDataPenduduk($id);
            $this->session->set_flashdata('flash', 'diubah!');
            redirect('penduduk/index');
        }
    }
}

 ?>