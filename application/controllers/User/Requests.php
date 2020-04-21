<?php
defined('BASEPATH') or exit('No direct access found');

class Requests extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('jobcategory_model');
        $this->load->model('request_model');
        if (!$this->session->aspireUser) {
            redirect(base_url());
        }
    }
    public function make()
    {
        if ($this->input->post()) {
            $this->form_validation->set_rules('description', 'Job Description', 'trim|required');
            $this->form_validation->set_rules('location', 'Job Location', 'trim|required');
            $this->form_validation->set_rules('category_id', 'Request Category', 'trim|required|numeric');
            if ($this->form_validation->run() == FALSE) {
                $this->session->set_flashdata('error', validation_errors());
                redirect(base_url('user/home'));
            } else {
                $data = array(
                    'user_id' => $this->session->aspireUser->id,
                    'category_id' => $this->input->post('category_id'),
                    'request' => $this->input->post('description'),
                    'location' => $this->input->post('location'),
                    'request_date' => date('Y-m-d h:i:s')
                );
                if ($this->request_model->insert($data)) {
                    $this->session->set_flashdata('success', 'You have successfully requested for our technician service, we will contact you soon.');
                    redirect(base_url('user/home'));
                } else {
                    $this->session->set_flashdata('error', 'Request was not successful, please try again');
                    redirect(base_url('user/home'));
                }
            }
        } else {
            $this->session->set_flashdata('error', 'Invalid form values');
            redirect(base_url('user/home'));
        }
    }
}