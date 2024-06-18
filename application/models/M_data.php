<?php
class M_data extends CI_Model{

    // Menampilkan data yang diambil dari db
    function get_data($table){
        return $this->db->get($table);
    }

    // Input data ke db
    function insert_data($data,$table){
        $this->db->insert($table,$data);
    }

    // Ambil data dari db sesuai id untuk di edit
    function edit_data($where,$table){
        return $this->db->get_where($table,$where);
    }

    // Update data yang diedit
    function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    // Hapus data
    function delete_data($where,$table){
        $this->db->delete($table,$where);
    }

    // Cek login
    function cek_login($table, $where){
        return $this->db->get_where($table, $where);
    }
}

?>