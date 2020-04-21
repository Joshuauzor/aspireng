<?php
defined('BASEPATH') or exit('No direct access found');

class admin_request extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('jobcategory_model');
        $this->load->model('request_model');
        if (!$this->session->aspireAdmin) {
            redirect(base_url('admin/login'));
        }
    }
   
    public function newrequest()
    {
        $this->data['title']='Aspire Solutions Nig';
        $this->data['newrequest']= $this->request_model->get_all();
        $this->load->view('admin/dashboard/newrequest',$this->data);
    }




    public function declinedrequest($id = NULL){
        $this->data['title']='Aspire Solutions Nig';
        $this->data['declinedrequest']=$this->request_model->get_all();
       if($id != NULL){
           $data =array(
            // 'technician_id' => $this->input->post('technician_id'),
            'status' => 'declined',
            'declined_date' => date("Y-m-d h:i:s"),
            'declined_by' => $this->session->aspireAdmin->firstname.' '.$this->session->aspireAdmin->lastname

           );
           $declined = $this->request_model->update($id, $data);
        //    var_dump($data); die;
           if($declined){
           $this->session->set_flashdata('declined','you have declined the request');
           redirect(base_url('admin/admin_request/newrequest'));           }
           else{
            redirect(base_url('admin/admin_request/newrequest'));           }
       }
       else{
           $this->data['title']='Aspire solutions';
           $this->load->view('admin/dashboard/declinedrequest',$this->data);
       }
    }


    public function approvedrequest($id = NULL){
        $this->data['title'] = 'Aspire Solutions Nig';
        $this->data['approvedrequest'] = $this->request_model->get_all();
        //id was gotten from the view 
        if($id != NULL){
            $data = array (
                'status' => 'approved',
                'approved_date' => date("y-m-d h:i:s"),
                'approved_by' => $this->session->aspireAdmin->firstname.' '.$this->session->aspireAdmin->lastname

            );
            $approved = $this->request_model->update($id, $data);

            if($approved){
                $this->session->set_flashdata('approved','you have approved the request');
                redirect(base_url('admin/admin_request/newrequest'));
            }
            else{
                redirect(base_url('admin/admin_request/newrequest'));            }
        }
        else{
            $this->load->view('admin/dashboard/approvedrequest',$this->data);
        }
    }


    public function addservices(){
        // $this->data['categories']=$this->jobcategory_model->get_all();
        $this->data['title'] = 'Add services';
       
        if(!$this->session->aspireAdmin){
            redirect(base_url('admin/login'));
        } else{
            if($this->input->post()){
                $this->form_validation->set_rules('category','Category','required');
                $this->form_validation->set_rules('description','Description','required');
                $this->form_validation->set_rules('image','Image','required');
                if($this->form_validation->run()){
                    $data = array (
                        'category' => $_POST['category'],
                        'description' => $_POST['description'],
                        'image' =>  $_POST['image']
                    );
                    $add = $this->jobcategory_model->insert($data);
                    if($add){
                        $this->session->set_flashdata('added','you have added a job category');
                        redirect(base_url('admin/home')); 
                    }
                    else{
                        $this->session->set_flashdata('error',validation_errors());
                    }
                }
                else{
                    redirect(base_url('admin/home'));  
                }

            }else{
                $this->load->view('admin/dashboard/addservices',$this->data);
            }
           
        }
    }


    public function removeservices(){
        $this->data['title']= 'Remove services';
        $this->data['remove'] = $this->jobcategory_model->get_all();
        if(!$this->session->aspireAdmin){
            redirect(base_url('admin/login'));
        }
        else{
            if($this->input->post()){
                $this->form_validation->set_rules('category_id','Category_id','required');
            
            if($this->form_validation->run()){
              // loop through the total job category and get the id from the form
                $getall = $this->jobcategory_model->get_all();
                //foreach loop was used so we could get the id of the jobcategory
                foreach($getall as $allid):{
                     $id= $allid->id;
                }
            endforeach;
               $delete = $this->jobcategory_model->delete($id);
               if($delete){
                $this->session->set_flashdata('removed','you have successfully removed the job category');
                redirect(base_url('admin/home'));
               }
               else{
                $this->session->set_flashdata('error','oops, an error occured');
                redirect(base_url('admin/home'));
               }
            }
            else{
                redirect(base_url('admin/home'));
            }
        }
            else{
                $this->load->view('admin/dashboard/removeservices',$this->data);
            }
           
        }
    }
}