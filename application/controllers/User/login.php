<?php
defined('BASEPATH') or exit('No direct acess allowed');
class login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Customer_model');
        $this->load->library('session');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }
    public function index()
    {
        if ($this->session->aspireUser) {
            redirect(base_url('user/home'));
        } else {
            if ($this->input->post()) {
                $this->form_validation->set_rules('email', 'Email', 'trim|required');
                $this->form_validation->set_rules('password', 'Email', 'trim|required');
                if ($this->form_validation->run() == FALSE) {
                    $this->session->set_flashdata('error', validation_errors());
                    redirect(base_url());
                } else {
                    $users = $this->Customer_model->get_user_by_email($this->input->post('email'));

                    if ($users) {
                        if (password_verify($this->input->post('password'), $users->password)) {
                            $this->session->set_userdata('aspireUser', $users);
                            // $this->session->set_userdata('aspireCustomer',$users);
                            $this->session->set_flashdata('success', 'Login successful');
                            redirect(base_url('user/home'));
                        } else {
                            $this->session->set_flashdata('false', 'incorrect password');
                            redirect(base_url());
                        }
                    } else {
                        $this->session->set_flashdata('wrong', 'No account exist with this credentials');
                        redirect(base_url(), 'refresh');
                    }
                }
            }
        }
    }
    public function logout()
    {
        if (!$this->session->aspireUser) {
            redirect(base_url());
        } else {
            $this->session->unset_userdata('aspireUser');
            redirect(base_url());
        }
    }
}
