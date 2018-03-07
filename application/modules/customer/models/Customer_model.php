<?php

class Customer_model extends CI_Model {
    
    public function __construct()
    {
            $this->load->database();
    }
    public function create_customer($data)
    {
        $this->db->insert('customers',$data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
    public function get_customers($paginate=NULL){
        $this->db->select('*');
        $this->db->from('customers');
        if(null !=$paginate ){
            $index = intval($paginate['page']);
            $row = intval($paginate['each_page_count']);
            $this->db->limit($row,($index-1)*$row);
        }
        $query = $this->db->get();
        // get total records
        if(null !=$paginate ){
            $data[0] = $query->result_array(); 
            $this->db->select('*');
            $this->db->from('customers');
            $query = $this->db->get();
            $data[1] = $query->num_rows();
            return $data;
        } else {
            return $query->result_array();
        }
    }
}

