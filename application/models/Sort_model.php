<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Jawaban_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function sort($id)
    {
        $data = $this->db->get_where('kategori', ['id' => $id])->row_array($id);
    }
}
