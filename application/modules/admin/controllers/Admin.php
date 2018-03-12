<?php

class Admin extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->library('ion_auth');

                if (!$this->ion_auth->logged_in()) {
                    redirect('/auth', 'refresh');
                }
                
                $this->load->model('admin_model');
                $this->load->model('eyeglasses/eyeglasses_model');
                $this->load->model('customer/customer_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
            $data['icons'] = $this->admin_model->get_backend_icons();
            $this->load->view('templates/header');
            $this->load->view('templates/footer');
        }

        public function view()
        {
            $this->load->model('admin/order_model');
            $user_id = $this->session->userdata('user_id');
            $data['token'] = $this->order_model->get_token($user_id);
            $this->load->view('templates/header');
            $this->load->view('admin/view',$data);
            $this->load->view('templates/footer');
        }
        public function products()
        {
            // paginate
             $paginate = array();
             $page = 1;
             if(isset($_GET['page'])){
                 $page = $_GET['page'];
             }
             $paginate['page'] = $page;
             $paginate['each_page_count'] = 2;
             $result = $this->eyeglasses_model->get_eyeglasses(null,null,$paginate);
             $egs = $result[0];
             $paginate['records'] = $result[1];
             $i = 0;
             foreach($egs as $eg){
                if(($main_image = $this->eyeglasses_model->get_main_image($eg['id'])) != null){
                    $egs[$i]['guid'] =$this->config->base_url().'uploads/images/'.$main_image[0]['guid'];
                    $i++;
                }
             }
             $data['products'] = $egs;
             $data['paginate'] = $paginate;
             $base_url = $this->config->base_url();
             if(($page == 1) &&($page!=ceil($paginate['records']/$paginate['each_page_count'])) ){
                 $data['next'] = $base_url."admin/products?&page=2";
             }
             else if(($page >1) && $page == ceil($paginate['records']/$paginate['each_page_count']))
             {
                 $previous = $page-1;
                 $data['previous'] = $base_url."admin/products?page=".$previous;
             }
             else if($page > 1){
                 $previous = $page-1;
                 $next = $page+1;
                 $data['previous'] = $base_url."admin/products?page=".$previous;
                 $data['next'] = $base_url."admin/products?page=".$next;
             }
            $this->load->view('admin/products', $data);
        }
        
        public function settings()
        {
            $base_url = $this->config->base_url();
            $data['base_url'] = $base_url;
            $this->load->view('templates/header');
            $this->load->view('admin/settings');
            $this->load->view('templates/footer');
        }
        
        public function customers()
        {
            // paginate
             $paginate = array();
             $page = 1;
             if(isset($_GET['page'])){
                 $page = $_GET['page'];
             }
             $paginate['page'] = $page;
             $paginate['each_page_count'] = 2;
             $result = $this->customer_model->get_customers($paginate);
             $data['customers'] = $result[0];
             $paginate['records'] = $result[1];
             $data['paginate'] = $paginate;
             $base_url = $this->config->base_url();
             if(($page == 1) &&($page!=ceil($paginate['records']/$paginate['each_page_count'])) ){
                 $data['next'] = $base_url."admin/customers?&page=2";
             }
             else if(($page >1) && $page == ceil($paginate['records']/$paginate['each_page_count']))
             {
                 $previous = $page-1;
                 $data['previous'] = $base_url."admin/customers?page=".$previous;
             }
             else if($page > 1){
                 $previous = $page-1;
                 $next = $page+1;
                 $data['previous'] = $base_url."admin/customers?page=".$previous;
                 $data['next'] = $base_url."admin/customers?page=".$next;
             }
             $this->load->view('admin/customers',$data);
        }
        
        public function create_eyeglasses()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['title'] = 'Create a eyeglasses item';

            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('description', 'Description', 'required');
            
            if(isset($_GET['pid'])){
                $data['eyeglasses'] = $this->eyeglasses_model->get_eyeglasses(array('id' => $_GET['pid']))[0];
                $data['images'] = $this->eyeglasses_model->get_images( $_GET['pid'] );
            }
            else{
                $data['eyeglasses']['id'] = 0;
            }
            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('admin/create_eyeglasses',$data);

            }
            else
            {
                 if(null!= $this->input->post('id')){
                    //update item
                    $item_id = $this->input->post('id');
                    $this->admin_model->set_eyeglasses($item_id);
                }
                else{
                // insert item
                    $item_id = $this->admin_model->set_eyeglasses();
                }
                // import images
                $this->handle_images($item_id);
            }
        }
        
        public function delete_eyeglasses()
        {
            if(isset($_GET['pid'])){
                $this->admin_model->delete_eyeglasses($_GET['pid']);
            }
        }

        
        
        private function handle_images( $item_id ){
            // If there is new uploads files, then upload them
            if(!empty($_FILES['images']['name'])){
                        $filesCount = count($_FILES['images']['name']);
                        for($i = 0; $i < $filesCount; $i++){
                            $_FILES['image']['name'] = $_FILES['images']['name'][$i];
                            $_FILES['image']['type'] = $_FILES['images']['type'][$i];
                            $_FILES['image']['tmp_name'] = $_FILES['images']['tmp_name'][$i];
                            $_FILES['image']['error'] = $_FILES['images']['error'][$i];
                            $_FILES['image']['size'] = $_FILES['images']['size'][$i];

                            $uploadPath = 'uploads/images/';
                            $config['upload_path'] = $uploadPath;
                            $config['allowed_types'] = 'gif|jpg|png';

                            $this->load->library('upload', $config);
                            $this->upload->initialize($config);
                            if($this->upload->do_upload('image')){
                                $fileData = $this->upload->data();
                                $uploadData['guid'] = $fileData['file_name'];
                                $uploadData['created_at'] = date("Y-m-d H:i:s");
                                $uploadData['updated_at'] = date("Y-m-d H:i:s");
                                //Insert file information into the database
                                $file_id = $this->admin_model->insert_single_file($uploadData);
                                if (is_numeric( $file_id ) && $file_id > 0 ) {
                                    $tmp['raw_img_'.$_FILES['image']['name']] = $file_id ;
                                 }
                            }
                        }
                    }
                    $new_sorts = array();
                    $i = 0 ;
                    foreach ( $this->input->post('sorts') as $sort ){
                        $new_sorts[$i]['id_eyeglasses'] = $item_id;
                        if (is_numeric($sort)){
                            $new_sorts[$i]['id_media'] = $sort;
                        } else {
                            $new_sorts[$i]['id_media'] = $tmp[$sort];
                        }
                        $i = $i + 1;
                    }
                    $this->admin_model->delete_eyeglasses_media(array('id_eyeglasses'=>$item_id));
                    $this->admin_model->insert_eyeglass_media_batch($new_sorts);
                    // delete the existing images that no longer need
                    if ( (  $this->input->post('id') != null ) && ! empty( $this->input->post('delete-existing-file') ) ) {
				$delete_ids = explode( ',', $this->input->post('delete-existing-file')  );
				foreach ( $delete_ids as $id ) {
                                        
					$this->admin_model->delete_media($id);
				}
			}
                
        }
}

