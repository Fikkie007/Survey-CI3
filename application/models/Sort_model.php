<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Sort_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function sort($id)
    {
        $query = "SELECT `a`.`id`,`a`.`id_kategori`, `a`.`pertanyaan`, `b`.`kategori`
        FROM `pertanyaan` AS `a`
        JOIN `kategori` AS  `b`
        ON `a`.`id_kategori` = `b`.`id`
        WHERE b.id = $id;
                    ";
        return $this->db->query($query)->result_array();
    }
}
