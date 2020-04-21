<?php 
defined ('BASEPATH') OR exit ('No direct access allowed');


class register extends CI_Controller {

    public function __construct ()
    {
        parent::__construct(); 
        $this->load->model ('admin_model');
        $this->load->library(array('session', 'form_validation'));
        $this->load->helper(array('form', 'url'));

    }


     public function index(){
        if(!$this->session->aspireAdmin){
            redirect(base_url('user/home/accesserror'));
        }
        else{
        if($this->input->post()){
        $this->form_validation->set_rules('firstname','Firstname','trim|required');
        $this->form_validation->set_rules('lastname','Lastname','trim|required');
        $this->form_validation->set_rules('email','Email','trim|required');
        $this->form_validation->set_rules('password','Password','trim|required');
        $this->form_validation->set_rules('confirmpass','Confirmpass','trim|required|matches[password]');

        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',validation_errors());
            $this->load->view('admin/register');
        }
        else {
            $passwordencrypt= password_hash($_POST['password'], PASSWORD_DEFAULT);
            $admindata = array(
                'firstname'=> $_POST['firstname'],
                'lastname'=> $_POST['lastname'],
                'email'=> $_POST['email'],
                'password'=>$passwordencrypt
                );
                $admin = $this->admin_model->get_admin_by_email($this->input->post('email'));

            if($admin){
                $this->session->set_flashdata('oops','email already exist');
                $this->load->view('admin/register');

            }
            else {
                $this->admin_model->insert_admin_data_into_table($admindata);
                $this->session->set_flashdata('success','you have successfully registered');
                redirect(base_url('admin/home'));
            }
            }
        }
    
        else { 
                $this->load->view('admin/register');
        }

     }
}
}