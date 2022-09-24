<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Responden extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Responden_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Hasil Responden';
        $data['url'] = 'admin/';
        $data['pelanggan'] = $this->db->get('data_pelanggan')->result_array();
        $data['responden'] = $this->Responden_model->responden();


        $this->load->view('admin/header', $data);
        $this->load->view('admin/side-menu', $data);
        $this->load->view('admin/responden', $data);
        $this->load->view('admin/footer');
    }
}
