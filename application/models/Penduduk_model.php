<?php 
class Penduduk_model extends CI_Model {
    public function getAllPenduduk() {
        $query = $this->db->get('mahasiswa');
        return $query->result_array();
    }

    public function addDataPenduduk() {
        $data = array(
                'nama' => $this->input->post('nama', true),
                'nim' => $this->input->post('nim', true),
                'email' => $this->input->post('email', true),
                'jurusan' => $this->input->post('jurusan', true)
            );
    
        $this->db->insert('mahasiswa', $data);
    }

    public function deleteDataPenduduk($id) {
        $this->db->where('id', $id);
        $this->db->delete('mahasiswa');
    }

    public function getPendudukById($id) {
        return $this->db->get_where('mahasiswa', ['id'=> $id])->row_array();
    }

    public function editDataPenduduk($id) {
        $data = array(
            'nama' => $this->input->post('nama', true),
            'nim' => $this->input->post('nim', true),
            'email' => $this->input->post('email', true),
            'jurusan' => $this->input->post('jurusan', true)
        );
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('mahasiswa', $data);
    }

    public function cariDataPenduduk() {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('jurusan', $keyword);
        return $this->db->get('mahasiswa')->result_array();
    }
}

?>