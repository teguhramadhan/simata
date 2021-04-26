<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maincore extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Maincore';

        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['maincore'] = $this->db->get('maincore_wbb')->result_array();

        $this->load->view('template/admin/header', $data);
        $this->load->view('template/admin/sidebar', $data);
        $this->load->view('template/admin/topbar', $data);
        $this->load->view('maincore/index', $data);
        $this->load->view('template/admin/footer', $data);
    }

    public function view()
    {
        $data['title'] = 'View Maincore';

        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['maincore'] = $this->db->get('maincore_wbb')->result_array();

        $this->load->view('template/admin/header', $data);
        $this->load->view('template/admin/sidebar', $data);
        $this->load->view('template/admin/topbar', $data);
        $this->load->view('maincore/index', $data);
        $this->load->view('template/admin/footer', $data);
    }

    public function add()
    {
        $data['title'] = 'Add Maincore';

        $data['users'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();
        $data['maincore'] = $this->db->get('maincore_wbb')->result_array();

        $this->form_validation->set_rules('sto', 'STO', 'required|trim', [
          'required' => 'STO harus di isi!'
        ]);
        $this->form_validation->set_rules('eakses', 'E-AKSES', 'required|trim', [
          'required' => 'E-AKSES harus di isi!'
        ]);
        $this->form_validation->set_rules('oakses', 'O-AKSES', 'required|trim', [
          'required' => 'O-AKSES harus di isi!'
        ]);
        $this->form_validation->set_rules('odc', 'ODC', 'required|trim', [
          'required' => 'ODC harus di isi!'
        ]);

        if($this->form_validation->run() == false ) {
          $this->load->view('template/admin/header', $data);
          $this->load->view('template/admin/sidebar', $data);
          $this->load->view('template/admin/topbar', $data);
          $this->load->view('maincore/add', $data);
          $this->load->view('template/admin/footer', $data);
        } else {
          $data = [
            'sto' => htmlspecialchars($this->input->post('sto', 'true')),
            'gpon_slot' => htmlspecialchars($this->input->post('gpon_slot', 'true')),
            'gpon_ip' => htmlspecialchars($this->input->post('gpon_ip', 'true')),
            'eakses' => htmlspecialchars($this->input->post('eakses', 'true')),
            'oakses' => htmlspecialchars($this->input->post('oakses', 'true')),
            'odc' => htmlspecialchars($this->input->post('odc', 'true')),
            'tanggal' => htmlspecialchars($this->input->post('tanggal', 'true')),
            'teknisi' => htmlspecialchars($this->input->post('teknisi', 'true')),
            'keterangan' => htmlspecialchars($this->input->post('keterangan', 'true')),
          ];

          $this->db->insert('maincore_wbb', $data);
          $this->session->set_flashdata('message', '<div class="alert alert-success mt-2" role="alert"> Congratulation! Data Maincore baru telah ditambahkan!</div>');
          redirect('maincore');
        }
    }
}