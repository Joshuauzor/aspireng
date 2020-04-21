<?php
defined ('BASEPATH') OR exit ('No access file allowed');


 class Admin_model extends CI_MODEL{

    
    public function __construct()
    {
    parent::__construct();
    }
    private $table_name = 'admin';

        public function insert_admin_data_into_table ($data){
            return $this->db->insert($this->table_name,$data);
        }

       public function get_admin_by_email($email){
            $this->db->where(array('email'=>$email));
            return $this->db->get($this->table_name)->row();
        }

        public function update($id, $data){
            $this->db->where('id', $id);
            return $this->db->update($this->table_name, $data);
        }

        public function get_one($id){
            $this->db->where('id', $id);
            $this->db->get($this->table_name)->row();
        }

        public function get_all($id){
            $this->db->where('id', $id);
            return $this->db->get($this->table_name)->result();
        }

        public function delete($id, $data){
            $this->db->where('id', $id);
            $this->db->delete($this->table_name, $data)->row();
        }

 }
