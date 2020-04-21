<?php
defined('BASEPATH') or exit('No direcr script access allowed');

class Request_model extends CI_Model
{
    private $table_name = 'requests';
    public function __construct()
    {
        parent::__construct();
    }

    public function insert($data)
    {
        return $this->db->insert($this->table_name, $data);
    }

    public function get_one($id)
    {
        $this->db->where('id', $id);
        $this->db->join('job_categories', 'requests.category_id = job_categories.id');
        $this->db->join('users', 'requests.user_id = users.id');
        return $this->db->get($this->table_name)->row();
    }

    public function get_by_user($user_id)
    {
        $this->db->where('user_id', $user_id);
        $this->db->join('job_categories', 'requests.category_id = job_categories.id');
        $this->db->join('users', 'requests.user_id = users.id');
        return $this->db->get($this->table_name)->result();
    }

    public function get_by_admin($declined){
        $this->db->where('approved'||'declined', $declined);
        return $this->db->get($this->table_name)->result();
    }

    public function get_all()
    {
        $this->db->join('job_categories', 'requests.category_id = job_categories.id');
        $this->db->join('users', 'requests.user_id = users.id');
        return $this->db->get($this->table_name)->result();
    }

    public function get_everything(){
        return $this->db->get($this->table_name)->result();
    }
    public function update($id, $data)
    {
        $this->db->where('no', $id);
        return $this->db->update($this->table_name, $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete($this->table_name);
    }

    // public function get_all_id(){
    //     $this->db->join('job_categories', 'requests.category_id = job_categories.id');
    //     $this->db->join('users','requests.user_id = users.id');
    //     return $this->db->get($this->table_name)->result();

    
    // }
}
