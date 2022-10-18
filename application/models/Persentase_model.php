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
        WHERE answer = 1";
        return $this->db->query($query)->result_array();
    }
    public function answer2()
    {
        $query = "SELECT COUNT(answer)
        AS total 
        FROM jawaban_coba
        WHERE answer = 2";
        return $this->db->query($query)->result_array();
    }
    public function answer3()
    {
        $query = "SELECT COUNT(answer)
        AS total 
        FROM jawaban_coba
        WHERE answer = 3";
        return $this->db->query($query)->result_array();
    }
    public function answer4()
    {
        $query = "SELECT COUNT(answer)
        AS total 
        FROM jawaban_coba
        WHERE answer = 4";
        return $this->db->query($query)->result_array();
    }
}
