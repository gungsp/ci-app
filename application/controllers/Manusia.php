<?php 

class Manusia extends CI_Controller {
    public function index() {
        $data['title'] = 'Daftar Manusia';
        $this->load->view('templates/header', $data);
        $this->load->view('manusia/index');
        $this->load->view('templates/footer');
    }
}

 ?>