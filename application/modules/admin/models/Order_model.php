<?php

class Order_model extends CI_Model {

        private $table_orders;

        public function __construct()
        {       $this->table_order='orders';
                $this->load->database();
        }

        public function set_order($post)
        {
                $data = array(
                        'user_id'       => $post['user_id'],
                        'usd_amount'    => $post['total_amount'],
                        'token_cnt'     => $post['count'],
                        'is_paid'       => 0,
                        'created'       => date("Y-m-d H:i:s"),
                        'updated'       => date("Y-m-d H:i:s")
                );
                $this->db->insert('orders', $data);
                $insert_id = $this->db->insert_id();
                return $insert_id;
        }
        
}

