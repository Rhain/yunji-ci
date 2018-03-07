<?php
class About extends CI_Controller{
    
        public function __construct()
        {
                parent::__construct();
                $this->load->model('about_model');
                $this->load->helper('url_helper');
        }
        
        public function home()
        {
            $this->load->view("about/home");
        }
        
}
