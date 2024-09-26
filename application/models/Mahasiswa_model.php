<?php 

  /**
   * summary
   */
    class mahasiswa_model extends CI_Model{
        public function getAllMahasiswa()
    {
        // //menggunakan cara pertama
        // $query = $this->db->get->('mahasiswa');
        // return &query->result_array();
        // menggunakan cara cepat methode chaining // pemanggil data base
        return $this->db->get('mahasiswa')->result_array();
        
        }
    }