<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Dashboard';

        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/admin/header', $data);
        $this->load->view('template/admin/sidebar', $data);
        $this->load->view('template/admin/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('template/admin/footer', $data);
    }
}