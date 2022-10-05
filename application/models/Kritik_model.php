<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Kritik_model extends CI_Model
{
    public function kritik()
    {
        $query = "SELECT jawaban_coba.data_pelanggan_id, jawaban_coba.kritik, jawaban_coba.date, data_pelanggan.id, data_pelanggan.name
        FROM jawaban_coba
        JOIN data_pelanggan ON jawaban_coba.data_pelanggan_id = data_pelanggan.id
        GROUP BY jawaban_coba.data_pelanggan_id";
        return $this->db->query($query)->result_array();
    }
}
