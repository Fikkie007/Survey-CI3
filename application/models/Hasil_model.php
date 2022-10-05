<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Hasil_model extends CI_Model
{
    public function hasil()
    {

        $query = "SELECT * FROM pertanyaan 
        JOIN kategori ON pertanyaan.id_kategori = kategori.id 
        JOIN jawaban_coba ON pertanyaan.id = jawaban_coba.pertanyaan_id
        JOIN data_pelanggan ON jawaban_coba.data_pelanggan_id = data_pelanggan.id
        ";
        return $this->db->query($query)->result_array();
    }

    public function buttonSort()
    {

        $query = "SELECT * FROM pertanyaan 
        JOIN kategori ON pertanyaan.id_kategori = kategori.id 
        JOIN jawaban_coba ON pertanyaan.id = jawaban_coba.pertanyaan_id
        JOIN data_pelanggan ON jawaban_coba.data_pelanggan_id = data_pelanggan.id
        GROUP BY kategori";

        return $this->db->query($query)->result_array();
    }

    public function kategori($kategori)
    {
        $query = "SELECT * FROM pertanyaan 
        JOIN kategori ON pertanyaan.id_kategori = kategori.id 
        JOIN jawaban_coba ON pertanyaan.id = jawaban_coba.pertanyaan_id
        JOIN data_pelanggan ON jawaban_coba.data_pelanggan_id = data_pelanggan.id
        WHERE kategori.kategori = '$kategori'";
        return $this->db->query($query)->result_array();
    }
}
