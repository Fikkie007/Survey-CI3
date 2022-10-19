<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Persentase_model extends CI_Model
{
    public function index()
    {
        $query = "SELECT COUNT(answer)
        AS total 
        FROM jawaban_coba";
        return $this->db->query($query)->result_array();
    }
    public function answer()
    {
        $query = "SELECT COUNT(answer)
        AS total 
        FROM jawaban_coba
        GROUP BY answer";
        return $this->db->query($query)->result_array();
    }
}
