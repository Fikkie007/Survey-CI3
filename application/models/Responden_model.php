<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Responden_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function responden()
    {
        $query = "SELECT a.name ,a.phone_number, a.address , a.channel_number , b.data_pelanggan_id , DATE_FORMAT(b.date,'%d-%m-%Y') date
        FROM data_pelanggan AS a 
        JOIN jawaban_coba AS b ON a.id = b.data_pelanggan_id 
        GROUP BY a.name, a.address , a.channel_number , b.data_pelanggan_id, b.date";
        $result =  $this->db->query($query)->result_array();
        return $result;
    }
}
