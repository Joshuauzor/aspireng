<?php 
defined ('BASEPATH') OR exit ('No direct access allowed');
class login extends CI_Controller{
public function __construct(){
    parent::__construct();
    $this->load->model('technician_model');
    $this->load->library(array('session','form_validation'));
    $this->load->helper(array('form','url'));

}
 
public function index(){
    if($this->session->aspiretechnician){
        $this->load->view('technician/home');
    } 
    else{
        if($this->input->post()){
        $this->form_validation->set_rules('email','Email','required|trim');
        $this->form_validation->set_rules('password','Password','required|trim');
// var_dump($this->input->post()); die;
        if($this->form_validation->run()==FALSE){
            $this->data['title']= 'Technician login';
            $this->session->set_flashdata('error',validation_errors());
            redirect(base_url('technician/login'));
        }
        else {
            $technician= $this->technician_model->get_technician_by_email($this->input->post('email'));
            if($technician){
                if(password_verify($this->input->post('password'), $technician->password)){
                $this->session->set_userdata('aspiretechnician',$technician);
                redirect(base_url('technician/home'));
                }
            
            else{
                $this->data['title']='Technician login';
                $this->session->set_flashdata('invalid','incorrect password');
                $this->load->view('technician/login');
            }
        }
        else{
            $this->data['title']='Technician login';
            $this->session->set_flashdata('stop','Account does not exist');
            $this->load->view('technician/login');
        }
        
    }
}
        else {
    $this->load->view('technician/login');
            }
        }
    }

    public function logout(){
        if(!$this->session->aspiretechnician){
                redirect(base_url('technician/login'));
        }
        else{
                $this->session->unset_userdata('aspiretechnician');
                redirect(base_url('technician/login'));
        }
    }
}