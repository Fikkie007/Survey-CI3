<?php

class Survey extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
    }


    public function index()
    {
        $data['data_pelanggan'] = $this->db->get_where('data_pelanggan', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('phone_number', 'Phone Number', 'required|trim|max_length[12]', [
            'max_length' => 'Nomor Telefon Tidak Valid!'
        ]);
        $this->form_validation->set_rules('address', 'Address', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('channel_number', 'Nomor Saluran', 'required|trim|max_length[6]|is_unique[data_pelanggan.channel_number]', [
            'max_length' => 'Nomor Saluran Tidak Valid',
            'is_unique' => 'Anda Sudah Mengisi Kuisioner'
        ]);



        if ($this->form_validation->run() == false) {
            $this->load->view('survey');
            $this->session->unset_userdata('name');
            $this->session->unset_userdata('channel_number');
        } else {
            $data = [
                'name' => $this->input->post('name'),
                'phone_number' => $this->input->post('phone_number'),
                'address' => $this->input->post('address'),
                'email' => $this->input->post('email'),
                'channel_number' => $this->input->post('channel_number')
            ];
            $this->session->set_userdata($data);
            $this->db->insert('data_pelanggan', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Silahkan mengisi kuesioner
            </div>');
            
            redirect('pertanyaan');
        }
    }
}
