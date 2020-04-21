<?php
defined ('BASEPATH') OR exit('No direct access allowed');

class Register extends CI_Controller
{
    public function __construct ()
    {
        parent::__construct();
        $this->load->model('Customer_model');
        $this->load->library('session');
        $this->load->helper(array('form','url'));
        $this->load->library('form_validation');
    }

    public function user_register (){
        if($this->input->post()){    
        $this->form_validation->set_rules('username','Username', 'trim|required');
        $this->form_validation->set_rules('email','Email', 'trim|required');
        $this->form_validation->set_rules('password','Password', 'trim|required');
        $this->form_validation->set_rules('confirmpass','confirmpass','trim|required|matches[password]');
        $this->form_validation->set_rules('location','Location', 'trim|required');
        $this->form_validation->set_rules('phone','Phone', 'trim|required');

        if($this->form_validation->run()==FALSE){
        $this->session->set_flashdata('whops', validation_errors());
        redirect(base_url());
        }
         else{
             $hash_password=password_hash($_POST['password'],PASSWORD_DEFAULT);
             $userdata = array (
                 "username"=> $_POST['username'],
                 "email"=> $_POST['email'],
                 "password"=> $hash_password,
                 "location"=> $_POST['location'],
                 "phone"=> $_POST['phone']

             );
             $user=$this->Customer_model->get_user_by_email($this->input->post('email'));

             if($user){
                 $this->session->set_flashdata('error','email already exist');
                 redirect(base_url(),'refresh');
             }
             else{
                 $this->Customer_model->insert_data_into_table($userdata);
                 $this->session->set_flashdata('success','you have successfully registered');
                 $this->load->view("homepage/index");
             }

         }
     
        }
        else {
            redirect (base_url(),'refresh');
        }
    }
}