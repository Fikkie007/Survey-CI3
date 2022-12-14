<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');


        if ($this->form_validation->run() == false) {;
            $this->load->view('login');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if ($user) {
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    // $admin = $this->session->set_userdata($data);
                    $this->session->set_userdata($data);
                    // if (isset($admin)) {
                    //     redirect('login');
                    // } else {
                    //     redirect('admin');
                    // }
                    // }
                
                    redirect('admin');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Wrong password!
                    </div>');
                
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                This email has not been activated!
                </div>');

                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email is not registered!

            </div>');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
        redirect('home');
    }
}
