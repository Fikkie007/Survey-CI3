<?php

class HasilKuisioner extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
        $this->load->model('Hasil_model');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Hasil Kuisioner';
        $data['kategori'] = $this->db->get('kategori')->result_array();
        $data['hasil'] = $this->Hasil_model->hasil();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/side-menu', $data);
        $this->load->view('admin/hasil-kuisioner', $data);
        $this->load->view('admin/footer');
    }
}
