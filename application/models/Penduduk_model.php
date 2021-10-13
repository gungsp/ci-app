<?php 
class Penduduk_model extends CI_Model {
    public function getAllPenduduk() {
        $query = $this->db->get('mahasiswa');
        return $query->result_array();
    }
}

?>