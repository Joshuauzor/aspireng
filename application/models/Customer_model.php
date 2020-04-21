<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    private $table_name = 'users';

    public function insert_data_into_table($data)
    {
        return $this->db->insert($this->table_name, $data);
    }

    public function get_user_by_email($email)
    {
        $this->db->where(array('email' => $email));
        return $this->db->get($this->table_name)->row();
    }
    public function get_all(){
        return $this->db->get($this->table_name)->result();
    }

    public function get_one($id){
        $this->db->where('id',$id);
        return $this->db->get($this->table_name)->row();
    }

    public function update($id, $data){
        $this->db->where('id',$id);
        return $this->db->update($this->table_name, $data);
    }

    public function delete($id, $data){
        $this->db->where('id', $id);
        return $this->db->delete($this->table_name, $data);
    }

    public function delete_account($id){
        $this->db->where('id',$id);
        return $this->db->delete($this->table_name);
    }
}

