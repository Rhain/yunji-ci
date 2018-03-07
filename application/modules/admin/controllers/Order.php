<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once("Admin.php");
class Order extends Admin {
        public function __construct()
        {
                parent::__construct();
                $this->load->model('admin/order_model');
                
        }
        
        public function view()
        {
            
            $this->load->view('admin/order');
            include_once("payapi/example_basic.php");
        }

        public function commitpay()
        {
                
        }

        public function paycallback()
        {
                var_dump($_POST);
        }
        
}