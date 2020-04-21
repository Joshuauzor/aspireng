<?php
defined('BASEPATH') or exit('No direct access found');

class home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('jobcategory_model','request_model','customer_model'));
		$this->load->library(array('form_validation','session'));
		if (!$this->session->aspireUser) {
			redirect(base_url());
		}
	}

	public function index()
	{
		// var_dump($this->session->aspireUser);
		// die;

		$this->data['title'] = 'Aspire Solutions Nig';
		$this->data['categories'] = $this->jobcategory_model->get_all();
		// var_dump($this->data['categories']);
		// die;
		$this->load->view('user/index', $this->data);
	}
	// public function makerequest(){
	//     $this->data['title']='Aspire Solutions: Make Request';
	//     $this->load->view('user/makerequest');
	//}
	public function approvedrequest()
	{
		$this->data['title'] = 'Aspire Solutions: Approved Request';
		$this->data['approvedrequest'] = $this->request_model->get_by_user($this->session->aspireUser->id);
		$this->load->view('user/userapproved',$this->data);
	}

	public function userpending()
	{
		$this->data['requests'] = $this->request_model->get_by_user($this->session->aspireUser->id);
		$this->data['title'] = 'Pending Request';
		$this->load->view('user/userpending', $this->data);
	}

	public function declinedrequest()
	{
		$this->data['title']='Declined Reqeust';
		$this->data['declined'] = $this->request_model->get_by_user($this->session->aspireUser->id); 
		$this->load->view('user/userdeclined',$this->data);
	}

	public function profile(){
		$this->data['title']='Customer Profile';
		$this->data['total_request']= $this->request_model->get_by_user($this->session->aspireUser->id);
		$this->load->view('user/profile',$this->data);
	}

	public function editprofile(){
		$this->data['title']='Edit Profile';
		$id=$this->customer_model->get_one($this->session->aspireUser->id);
		// var_dump($id); die;
		if($id){ 
		if($this->input->post()){
			$this->form_validation->set_rules('username','Username','trim|required');
			$this->form_validation->set_rules('location','Location','trim|required');
			$this->form_validation->set_rules('phone','Phone','trim|required');
			$this->form_validation->set_rules('email','Email','trim|required');
			$id = $this->session->aspireUser->id;

			if($this->form_validation->run()==FALSE)
			{
				$this->session->set_flashdata('error',validation_errors());
				$this->load->view('user/editprofile');
			}
			else{
				$data = array (
					'username'=> $_POST['username'],
					'location'=> $_POST['location'],
					'phone'=> $_POST['phone'],
					'email'=> $_POST['email']
				);
				// var_dump($data); die;
				$updateprofile = $this->customer_model->update($id,$data);
				// var_dump($updateprofile); die;
				if($updateprofile){
					$this->session->set_flashdata('update','you have successfully updated your profile');
					redirect(base_url('user/profile'));
				}
				else{
					redirect(base_url('user/editprofile',$this->data));
				}
			}
			
		}
		else{
			$this->data['title']='Edit Profile';
			$this->load->view('user/editprofile', $this->data);
		}
	}
		else{
			$this->data['title']='Edit Profile';
			$this->load->view('user/editprofile', $this->data);
		}
	}

	public function deleteaccount(){
		$this->data['title']= 'Delete Account';
		$id=$this->customer_model->get_one($this->session->aspireUser->id);
		// var_dump($id); die;
		if($id){
			if($this->input->post()){
				$this->form_validation->set_rules('email','Email','required');
				$this->form_validation->set_rules('password','Password','required');

			}
			if($this->form_validation->run()==FALSE){
				$this->session->set_flashdata('error',validation_errors());
				$this->load->view('user/deleteaccount',$this->data);
			}
			else{
				$email=$this->customer_model->get_user_by_email($this->input->post('email'));
				//var_dump($email); die;
				if($email){
					if(password_verify($this->input->post('password'),$email->password)){
						//here I got the id from the user session in other to identify in the database
						$id = $this->session->aspireUser->id;
						$delete=$this->customer_model->delete_account($id);
						// var_dump($delete); die;
						$this->session->set_flashdata('success','you have deleted your account');
						redirect(base_url());
					}
				else{
					$this->session->set_flashdata('wrong','incorrect password');
					redirect(base_url('user/deleteaccount'));
				}
			}
			else{
				$this->session->set_flashdata('invalid','invalid email address');
				redirect(base_url('user/deleteaccount'));
				}
			}

		}
		else{
			$this->load->view('user/deleteaccount', $this->data);
		}
	}

	public function accesserror (){
        $this->data['title'] = 'Access denied';
        $this->load->view('user/accesserror', $this->data);
	}
	
	public function error (){
		$this->data['title'] = 'error';
		$this->load->view('user/error', $this->data);
	}
}
