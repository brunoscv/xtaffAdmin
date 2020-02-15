<?php
class Dashboard_model extends CI_Model {

    public function get_all_resumee(){
        $this->db->select('r.*');
        $this->db->select('q.description as qualification_name');
        $this->db->from('resumee AS r');
        $this->db->join('qualification AS q','r.qualification = q.id','INNER');
        $this->db->order_by('r.id','DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
       
    }

    public function get_qualifications(){
        $this->db->select('u.*');
        $this->db->select('c.name as country_name');
        $this->db->from('user u');
        $this->db->join('country c','c.id = u.country','LEFT');
        $this->db->where('u.id',$this->session->userdata('id'));
        $this->db->order_by('u.id','DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }
}