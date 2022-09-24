<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Hasil_model extends CI_Model
{
    public function hasil()
    {

        $query = "SELECT * FROM pertanyaan JOIN kategori 
        ON pertanyaan.id_kategori = kategori.id 
        JOIN jawaban_coba ON pertanyaan.id = jawaban_coba.pertanyaan_id 
        GROUP BY pertanyaan.id_kategori, pertanyaan.id; ";
        return $this->db->query($query)->result_array();
    }
}
