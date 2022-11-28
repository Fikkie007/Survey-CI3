<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Pertanyaan_model');
        $this->load->model('Persentase_model');
        $this->load->library('form_validation');
        $this->load->library('pagination');
        $this->load->model('Sort_model');
    }
    public function index()
    {
        $data['title'] = 'Admin';
        $data['url'] = 'admin';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['total'] = $this->db->count_all('user');
        $data['persentase'] = $this->Persentase_model->index();
        $data['answer'] = $this->Persentase_model->answer();
        $data['total_pertanyaan'] = $this->db->count_all('pertanyaan');
        $data['total_kategori'] = $this->db->count_all('kategori');
        $data['data_pelanggan'] = $this->db->count_all('data_pelanggan');
        $this->load->view('admin/header', $data);
        $this->load->view('admin/side-menu', $data);
        $this->load->view('admin/body', $data);
        $this->load->view('admin/footer', $data);
    }

    public function dataAdmin()
    {
        $data['title'] = 'Data Admin';
        $data['url'] = 'admin';
        $count['admin'] = $this->db->get('user')->num_rows();
        $config['base_url'] = 'http://localhost:8080/Admin/dataAdmin/';
        $config['total_rows'] = $count['admin'];
        $config['per_page'] = 5;
        $this->pagination->initialize($config);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user_data'] = $this->db->get('user')->result_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/side-menu', $data);
        $this->load->view('admin/data-admin', $data, $config);
        $this->load->view('admin/footer');
    }

    public function deleteAdmin($id)
    {

        $this->db->delete('user', ['id' => $id]);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data admin berhasil dihapus!
        </div>');
        redirect('login');
    }
    public function addAdmin()
    {
        $data['title'] = 'Tambah Admin';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2],', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[3]|matches[password1]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);



        if ($this->form_validation->run() == false) {
            $this->load->view('admin/header', $data);
            $this->load->view('admin/side-menu', $data);
            $this->load->view('admin/add-admin', $data);
            $this->load->view('admin/footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 1,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data admin berhasil ditambahkan!
            </div>');
            redirect('admin/dataAdmin');
        }
    }
    public function editAdmin($id)
    {
        $data['title'] = 'Edit Admin';
        $data['data'] = $this->db->get_where('user', ['id' => $id])->row_array($id);
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2],', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[3]|matches[password1]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/header', $data);
            $this->load->view('admin/side-menu', $data);
            $this->load->view('admin/edit-admin', $data);
            $this->load->view('admin/footer');
        } else {
            $data = [
                'id' => $id,
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 1,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->replace('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data admin berhasil diubah!
            </div>');
            redirect('admin/dataAdmin');
        }
    }
    public function profileAdmin()
    {
        $data['title'] = 'Profile Admin';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/side-menu', $data);
        $this->load->view('admin/profile', $data);
        $this->load->view('admin/footer');
    }
    public function editQuestion()
    {

        $data['title'] = 'Edit Pertanyaan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['data_kategori'] = $this->db->get('kategori')->result_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/side-menu', $data);
        $this->load->view('admin/edit-pertanyaan', $data);
        $this->load->view('admin/footer');
    }
    public function addKategori()
    {
        $data['title'] = 'Edit Pertanyaan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['data_kategori'] = $this->db->get('kategori')->result_array();
        $data['data'] = $this->db->get_where('kategori', ['kategori' =>
        $this->session->userdata('kategori')])->row_array();
        $this->form_validation->set_rules('kategori', 'kategori', 'required|trim|is_unique[kategori.kategori]', [
            'is_unique' => 'Kategori Sudah Ada !'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/header', $data);
            $this->load->view('admin/side-menu', $data);
            $this->load->view('admin/edit-pertanyaan', $data);
            $this->load->view('admin/footer');
        } else {
            $data = array(
                'kategori' => $this->input->post('kategori'),
                'jumlah_responden' => $this->input->post('jumlah_responden')
            );
            $this->db->insert('kategori', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Kategori Baru Telah Ditambahkan
            </div>');
            redirect('admin/editQuestion');
        }
    }

    public function deleteKategori($id)
    {
        $this->db->delete('kategori', ['id' => $id]);
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Kategori berhasil dihapus!
        </div>');
        redirect('admin/editQuestion');
    }

    public function editKategori($id)
    {
        $data['title'] = 'Edit Kategori';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['data'] = $this->db->get_where('kategori', ['id' => $id])->row_array($id);
        $this->form_validation->set_rules('kategori', 'kategori', 'required|trim|is_unique[kategori.kategori]', [
            'is_unique' => 'Kategori Sudah Ada !'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/header', $data);
            $this->load->view('admin/side-menu', $data);
            $this->load->view('admin/edit-kategori', $data);
            $this->load->view('admin/footer');
        } else {
            $data = [
                'id' => $id,
                'kategori' => $this->input->post('kategori'),
                'jumlah_responden' => $this->input->post('jumlah_responden')
            ];
            $this->db->replace('kategori', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Kategori Berhasil Diubah
            </div>');
            redirect('admin/editQuestion');
        }
    }

    public function pertanyaan()
    {


        $data['title'] = 'Edit Kuisioner';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data2['query'] = $this->Pertanyaan_model->getKategori();
        $data2['kategori'] = $this->db->get('kategori')->result_array();


        $this->form_validation->set_rules('id', 'id', 'required|trim|is_unique[kategori.id]', [
            'is_unique' => 'Kategori Sudah Ada !'
        ]);
        $this->form_validation->set_rules('pertanyaan', 'pertanyaan', 'required|trim');



        if ($this->form_validation->run() == false) {

            $this->load->view('admin/header', $data);
            $this->load->view('admin/side-menu', $data);
            $this->load->view('admin/pertanyaan',  $data2);
            $this->load->view('admin/footer');
        } else {
            $data = [
                'id' => $this->input->post('id'),
                'pertanyaan' => $this->input->post('pertanyaan')
            ];

            $this->db->insert('pertayaan', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Pertanyaan Berhasil
                    </div>');
            redirect('admin/editQuestion');
        }
    }
    public function addPertanyaan()
    {
        $data['title'] = 'Tambah Pertanyaan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data2['query'] = $this->Pertanyaan_model->getKategori();
        $data2['kategori'] = $this->db->get('kategori')->result_array();
        $data2['pertanyaan'] = $this->db->get('pertanyaan')->result_array();


        $this->form_validation->set_rules('id_kategori', 'kategori', 'required|trim');
        $this->form_validation->set_rules('pertanyaan', 'pertanyaan', 'required|trim');



        if ($this->form_validation->run() == false) {

            $this->load->view('admin/header', $data);
            $this->load->view('admin/side-menu', $data);
            $this->load->view('admin/add-pertanyaan',  $data2);
            $this->load->view('admin/footer');
        } else {
            $data = [
                'id_kategori' => $this->input->post('id_kategori'),
                'pertanyaan' => $this->input->post('pertanyaan'),
                'jawaban1' => 'Sangat Puas',
                'jawaban2' => 'Puas',
                'jawaban3' => 'Biasa',
                'jawaban4' => 'Tidak Puas',
            ];

            $this->db->insert('pertanyaan', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Pertanyaan Berhasil Ditambahkan
                    </div>');

            redirect('admin/pertanyaan');
        }
    }


    public function editPertanyaan($id)
    {
        $data['title'] = 'Edit Pertanyaan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data2['query'] = $this->Pertanyaan_model->getKategori();
        $data2['kategori'] = $this->db->get('kategori')->result_array();
        $data2['pertanyaan'] = $this->db->get('pertanyaan')->result_array();
        $data['data'] = $this->db->get_where('pertanyaan', ['id' => $id])->row_array($id);


        $this->form_validation->set_rules('id_kategori', 'kategori', 'required|trim');
        $this->form_validation->set_rules('pertanyaan', 'pertanyaan', 'required|trim');



        if ($this->form_validation->run() == false) {

            $this->load->view('admin/header', $data);
            $this->load->view('admin/side-menu', $data);
            $this->load->view('admin/edit-kategori-pertanyaan',  $data2, $data);
            $this->load->view('admin/footer');
        } else {
            $data = [
                'id_kategori' => $this->input->post('id_kategori'),
                'pertanyaan' => $this->input->post('pertanyaan'),
                'jawaban1' => 'Sangat Puas',
                'jawaban2' => 'Puas',
                'jawaban3' => 'Biasa',
                'jawaban4' => 'Tidak Puas',
            ];

            $this->db->replace('pertanyaan', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Pertanyaan Berhasil Diubah
                    </div>');

            redirect('admin/pertanyaan');
        }
    }


    public function deletePertanyaan($id)
    {
        $data['title'] = 'Edit Pertanyaan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->db->delete('pertanyaan', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Peranyaan berhasil dihapus!
        </div>');
        redirect('admin/pertanyaan');
    }

    public function sortKategori($id)
    {

        $data['title'] = 'Sort Kategori';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data2['kategori'] = $this->db->get('kategori')->result_array();
        $data2['query'] = $this->Sort_model->sort($id);


        $this->load->view('admin/header', $data);
        $this->load->view('admin/side-menu', $data);
        $this->load->view('admin/pertanyaan-sort', $data2);
        $this->load->view('admin/footer');
    }
}
