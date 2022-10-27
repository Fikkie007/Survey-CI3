<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kritik extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kritik_model');
    }

    public function index()
    {
        $data['title'] = 'Kritik dan Saran';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['jawaban'] = $this->db->get('jawaban_coba')->result_array();
        $data['query'] = $this->Kritik_model->kritik();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/side-menu', $data);
        $this->load->view('admin/kritik-views', $data);
        $this->load->view('admin/footer');
    }

    public function export()
    {
        $data['query'] = $this->Kritik_model->kritik();
        $this->load->view('admin/export-result-kritik', $data);
    }
}
