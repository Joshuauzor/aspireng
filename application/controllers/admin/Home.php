<?php
defined ('BASEPATH') OR exit ('No direct access allowed');

 class home extends CI_Controller{

	public function __construct ()
    {
        parent::__construct(); 
        $this->load->model(array('request_model','Customer_model'));
        $this->load->model('admin_model');
        $this->load->library(array('session', 'form_validation'));
        $this->load->helper(array('form', 'url'));
		if(!$this->session->aspireAdmin){
			redirect(base_url('admin/login'));
		}
    }

    public function index (){
        $this->data['title'] = 'Aspire Solutions Nig';
        $this->data['totalusers']= $this->Customer_model->get_all();
        //$this->data['totalrequest'] = $this->request_model->get_by_admin($this->session->aspireAdmin->id);
        $this->data['totalrequest'] = $this->request_model->get_everything();
		$this->load->view('admin/index', $this->data);
    }

    public function userdetails (){
        $this->data['title'] = 'User details';
        $this->data['user_details'] = $this->Customer_model->get_all();
        $this->load->view('admin/dashboard/userdetails', $this->data);
    }

    public function profile (){
        $this->data['title'] = 'Admin profile';
        //error, try to rectify
        //$declined = $this->session->aspireAdmin->firstname.''.$this->session->aspireAdmin->lastname;
        //$this->data['requests'] = $this->request_model->get_by_admin($declined);
        $this->data['requests'] = $this->request_model->get_by_admin($this->session->aspireAdmin->id);
        $this->load->view('admin/dashboard/profile', $this->data);
    }

    public function editprofile (){
        $this->data['title'] = 'Edit profile';
        // $id= $this->admin_model->get_one($this->aspireAdmin->id);

        if($this->input->post()){
                $this->form_validation->set_rules('firstname','Firstname','required|trim');
                $this->form_validation->set_rules('lastname','Lastname','required|trim');
                $this->form_validation->set_rules('email','Email','required');
                $id= $this->session->aspireAdmin->id;
        if($this->form_validation->run()==FALSE){
               $this->session->set_flashdata('error', validation_errors());
               redirect(base_url('admin/home/profile'));
             }
        else{
            $data= array(
                'firstname' => $_POST['firstname'],
                'lastname' => $_POST['lastname'],
                'email' => $_POST['email']
            );
        $update = $this->admin_model->update($id, $data);

        if($update){
            $this->session->set_flashdata('success','you have successfully updated your profile');
            redirect(base_url('admin/home/profile'));
        } 
        else{
            $this->session->set_flashdata('opps','error in update');
            redirect(base_url('admin/home/profile'));

        }
        }
        }
        else{
            $this->load->view('admin/dashboard/editprofile', $this->data);
        }
    }
 }
