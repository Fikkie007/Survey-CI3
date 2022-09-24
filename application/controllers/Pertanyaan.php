<?php

class Pertanyaan extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        fill_question();
        $this->load->model('Jawaban_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['data_pelanggan'] = $this->db->get_where('data_pelanggan', ['email' =>
        $this->session->userdata('email')])->row_array();
        $user = $this->db->get_where('data_pelanggan', ['email'])->row_array();
        $data['pertanyaan'] = $this->db->get('pertanyaan')->result_array();
        $data['opsi'] = $this->db->get('pilihan')->result_array();
        $this->form_validation->set_rules('answer', 'Pertanyaan', 'integer');
        $data['user'] = $this->db->get_where('data_pelanggan', ['email' => $this->session->userdata('email')])->row_array();

        if ($this->form_validation->run() == false) {
            $this->load->view('pertanyaan', $data, $user);
        } else {
            $tambah = $this->Jawaban_model->isiJawaban();
            if ($tambah) {
                echo 'gagal';
            } else {
                $this->session->unset_userdata('name');
                $this->session->unset_userdata('email');
                $this->session->unset_userdata('channel_number');
                redirect('overall');
            };
        }
    }
}
