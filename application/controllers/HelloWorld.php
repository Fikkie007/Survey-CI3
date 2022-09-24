<?php
class HelloWorld extends CI_Controller
{
    public function index()
    {
        $this->load->view('tes/hello_world');
    }
}
