<?php

class Customer extends CI_Controller{
    
        public function __construct()
        {
                parent::__construct();
                $this->load->model('customer_model');
                $this->load->helper('url_helper');
        }

        public function home()
        {
            $this->load->view('customer/customer_form');
        }
        
        public function insert()
        {
           $data = array(
            'name' => $this->input->post('name'),
            'phone' => $this->input->post('phone'),
            'od_sph' => $this->input->post('od_sph'),
            'os_sph' => $this->input->post('os_sph'),
            'od_cyl' => $this->input->post('od_cyl'),
            'os_cyl' => $this->input->post('os_cyl'),
            'od_axis' => $this->input->post('od_axis'),
            'os_axis' => $this->input->post('os_axis'),
            'od_add' => $this->input->post('od_add'),
            'os_add' => $this->input->post('os_add'),
            'od_pd' => $this->input->post('od_pd'),
            'os_pd' => $this->input->post('os_pd'),
            'pd' => $this->input->post('pd'),
            'lens_index' => $this->input->post('lens_index'),
            'lens_detail' => $this->input->post('lens_detail'),
            'frame_style' => $this->input->post('frame_style'),
            'frame_material' => $this->input->post('frame_material'),
            'frame_detail' => $this->input->post('frame_detail'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
             );
           $id = $this->customer_model->create_customer($data);
           if(is_numeric($id)&&$id>0){
               $this->output->set_output("success!");
           }
        }
}
