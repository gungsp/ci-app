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

        // ENCLOSING
        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</nav></ul>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $congig['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $congig['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $congig['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $congig['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        
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