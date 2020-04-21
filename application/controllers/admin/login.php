<?php
defined('BASEPATH') OR exit ('No direct access allowed');

class login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
		$this->load->library(array('session', 'form_validation'));
		$this->load->helper(array('url', 'form'));
	}

	public function index()
	{
		$this->data['title'] = 'Admin login';
		if ($this->session->aspireAdmin) {
			$this->load->view('admin/index');
		} 
		else {
			if ($this->input->post()) {
				$this->form_validation->set_rules('email', 'Email', 'trim|required');
				$this->form_validation->set_rules('password', 'Password', 'required');

				if ($this->form_validation->run() == FALSE) {
					$this->data['title'] = "Admin Login";
					$this->session->set_flashdata('error', validation_errors());
					$this->load->view('admin/login');
				} 
				else {
					$admin = $this->Admin_model->get_admin_by_email($this->input->post('email'));
					if ($admin) {
						if (password_verify($this->input->post('password'), $admin->password)) {
							$this->session->set_userdata('aspireAdmin', $admin);
							redirect(base_url('admin/home'));
						} else {
							$this->data['title'] = "Admin Login";
							$this->session->set_flashdata('invalid', 'incorrect password');
							$this->load->view('admin/login');
						}

					} 
					else {
						$this->session->set_flashdata('false', 'Account does not exist');
						$this->load->view('admin/login');
					}
				}

			} 
			else {
				$this->load->view('admin/login', $this->data);
			}
		}
	}
 

	public function logout()
	{
		if (!$this->session->aspireAdmin) {
			redirect(base_url('admin/login'));
		} 
		else {
			$this->session->unset_userdata('aspireAdmin');
			redirect(base_url('admin/login'));
		}
	}
}
