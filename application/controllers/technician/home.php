<?php
defined ('BASEPATH') OR exit ('No direct access allowed');

class home extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('');
        $this->load->library(array('session','form_validation'));
        $this->load->helper(array('form','url'));
        if(!$this->session->aspiretechnician){
            redirect(base_url('technician/login'));
        }
}

public function index (){
  $this->data['title']='Aspire Solutions Nig';
  $this->load->view('technician/index');
}
}