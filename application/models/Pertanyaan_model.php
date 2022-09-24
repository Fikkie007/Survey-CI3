<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pertanyaan_model extends CI_Model
{
    public function getKategori()
    {
        $query = "SELECT `a`.`id`,`a`.`id_kategori`, `a`.`pertanyaan`, `b`.`kategori`
        FROM `pertanyaan` AS `a`
        JOIN `kategori` AS  `b`
        ON `a`.`id_kategori` = `b`.`id`;
                    ";
        return $this->db->query($query)->result_array();
    }
}
