<?php

class Order_model extends CI_Model {

        private $table_orders;

        public function __construct()
        {       $this->table_order='wx_orders';
                $this->load->database();
        }
        
}

