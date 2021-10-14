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
        $this->load->view('templates/header', $data);
        $this->load->view('penduduk/index', $data);
        $this->load->view('templates/footer');
    }

    public function addPenduduk(){
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
            redirect('penduduk/index');
        }
    }
}

 ?>