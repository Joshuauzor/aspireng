<?php
defined ('BASEPATH') OR exit ('No direct access allowed');

class register extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model(array('technician_model','jobcategory_model'));
        $this->load->library(array('session','form_validation'));
        $this->load->helper(array('form','url'));

    }
    public function index(){
    if($this->input->post()){
        $this->form_validation->set_rules('firstname','Firstname','trim|required');
        $this->form_validation->set_rules('lastname','Lastname','trim|required');
        $this->form_validation->set_rules('email','Email','trim|required');
        $this->form_validation->set_rules('role','Role','trim|required');
        $this->form_validation->set_rules('password','Password','trim|required');
        $this->form_validation->set_rules('confirmpass','Confirmpass','trim|required|matches[password]');

        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error', validation_errors());
            $this->load->view('technician/register');
        } else{
            $hash_password=password_hash($_POST['password'],PASSWORD_DEFAULT);
            $data= array(
                'firstname' => $_POST['firstname'],
                'lastname' => $_POST['lastname'],
                'email' => $_POST['email'],
                'role' => $_POST['role'],
                'password' => $hash_password
            );
            
          $technician=$this->technician_model->get_technician_by_email($_POST['email']);
        
        if ($technician){
            $this->session->set_flashdata('oops','Email already exist');
            $this->load->view('technician/register');
        }
        else{
            $this->technician_model->insert_data_into_table($data);
            $this->load->view('technician/login');
            $this->session->set_flashdata('success','you have successfully registered');
        }
    }
}
    else{
        $this->data['categories'] = $this->jobcategory_model->get_all();
        $this->load->view('technician/register', $this->data);
    }
}
}