<?php
class Dashboard_model extends CI_Model {

    public function get_all_resumee(){
        $this->db->query("SELECT * 
                          FROM resumee
                          ORDER BY createdAt DESC")
                 ->result();
       
    }
}