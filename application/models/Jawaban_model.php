<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Jawaban_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function isiJawaban()
    {
        $total = $this->db->count_all('pertanyaan');
        $user =  $this->db->get_where('data_pelanggan', ['email' => $this->session->userdata('email')])->row_array();
        $insert = $_REQUEST['answer'];
        for ($i = 0; $i <= $total; $i++) {
            if (isset($insert[$i])) {
                $this->db->insert(
                    'jawaban_coba',
                    array(
                        'pertanyaan_id' => $i,
                        'answer' => $insert[$i],
                        'data_pelanggan_id' => $user['id'],
                        'kritik' => $this->input->post('content')
                    )

                );
            }
        }
    }
}
