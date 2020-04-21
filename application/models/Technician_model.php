<?php 
defined ('BASEPATH') OR exit ('No direct access allowed');

class technician_model extends CI_Model{
     private $table_name = 'technician';

    function insert_data_into_table($data){
        $this->db->insert($this->table_name, $data);
    }

    function get_technician_by_email($email){
        $this->db->where(array('email' => $email));
        return $this->db->get($this->table_name)->row();
    }
}