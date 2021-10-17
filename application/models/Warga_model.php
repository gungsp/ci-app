<?php 
class Warga_model extends CI_Model {
    public function getAllWarga() {
        $query = $this->db->get('people');
        return $query->result_array();
    }

    public function getWarga($limit, $start, $keyword = null) {
        if( $keyword ) {
            $this->db->like('name', $keyword);
        }
        return $this->db->get('people', $limit, $start)->result_array();
    }

    public function countAllWarga() {
        return $this->db->get('people')->num_rows();
    }
}

?>