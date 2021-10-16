<?php 
class Warga extends CI_Controller {
    public function __construct()
    {  
        parent::__construct();
        $this->load->model('Warga_model');
        
    }

    public function index() {
    // PAGINATION
    $this->load->library('pagination');

    // CONFIG
    
    $config['base_url'] = 'http://localhost/ci-app/warga/index/';
    $config['total_rows'] = $this->Warga_model->countAllWarga();
    $config['per_page'] = 12;
    
    $this->pagination->initialize($config);
    $data['start'] = $this->uri->segment(3);
    $data['title'] = 'Data Warga';
    $data['warga'] = $this->Warga_model->getWarga($config['per_page'], $data['start']);
    
    $this->load->view('templates/header', $data);
    $this->load->view('warga/index', $data);
    $this->load->view('templates/footer');
 

    }

}

?>