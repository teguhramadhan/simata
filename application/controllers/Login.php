<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if($this->form_validation->run() == false ) {

			$data['title'] = 'Login Account';
			$this->load->view('auth/login', $data);

		} else {
			// validation success
			$this->_login();
		}

    }

    private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$users = $this->db->get_where('users', ['email' => $email])->row_array();
		
		// user ada
		if($users) {
			// user active?
			if($users['is_active'] == 1) {
				// check password
				if(password_verify($password, $users['password'])) {
					$data = [
						'email' => $users['email'],
						'role_id' => $users['role_id']
					];
					$this->session->set_userdata($data);
					if($users['role_id'] == 1 ) {
						redirect('admin');
					} else {
						redirect('user');
					}
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Wrong password!</div>');
					redirect('login');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Email has not been Activated!</div>');
				redirect('login');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Email is not registered!</div>');
			redirect('login');
		}
	}

    public function logout()
    {
        $this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> You have been logout!</div>');
		redirect('login');
    }
}