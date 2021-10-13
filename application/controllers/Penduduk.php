<?php 

class Penduduk extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Penduduk_model');
    }

    public function index() {
        $data['title'] = 'Daftar Penduduk';
        $data['penduduk'] = $this->Penduduk_model->getAllPenduduk();
        $this->load->view('templates/header', $data);
        $this->load->view('Penduduk/index', $data);
        $this->load->view('templates/footer');
    }
}

 ?>