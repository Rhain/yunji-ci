<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends MX_Controller {

	function __construct()
        {
            parent::__construct();
        }
    
    
	public function view($page = 'home')
        {
                $data['title'] = ucfirst($page); // Capitalize the first letter

                $this->load->view('templates/home/header');
                $this->load->view('pages/'.$page, $data);
                $this->load->view('templates/home/footer');
        }
}
