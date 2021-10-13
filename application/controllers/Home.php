<?php 

class Home extends CI_Controller {
    public function index( $nama = "Manusia") {
        $data['title'] = 'Home';
        $data['nama'] = $nama;
        $this->load->view('templates/header', $data);
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }
}

?>