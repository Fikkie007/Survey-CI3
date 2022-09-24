<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User_model extends CI_Model
{
    public function deleteUser($id)
    {
        $this->db->delete('user', ['id' => $id]);
    }
    public function updateUser($id)
    {
        $data = [
            'name' => $this->input->post('name', true),
            'email' => $this->input->post('email', true),
            'image' => $this->input->post('image', true)
        ];
        $this->db->where('id', $id);
        $this->db->update('user', $data);
    }
}
