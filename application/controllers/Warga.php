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

        // Ambil data keyword
        if( $this->input->post('submit') ) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);

        } else {
            $data['keyword'] = $data['keyword'] = $this->session->userdata('keyword');;
        }
        // CONFIG
        $this->db->like('name', $data['keyword']); 
        $this->db->from('people');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 8;



        
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['title'] = 'Data Warga';
        $data['warga'] = $this->Warga_model->getWarga($config['per_page'], $data['start'], $data['keyword']);
        
        $this->load->view('templates/header', $data);
        $this->load->view('warga/index', $data);
        $this->load->view('templates/footer');
 

    }

}

?>