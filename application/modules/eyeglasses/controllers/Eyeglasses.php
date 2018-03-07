<?php

class Eyeglasses extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('eyeglasses_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
            // Get brands
                
                $data['title']= "Eyeglasses Recommend";
                $this->load->view('templates/home/header');
                $this->load->view('eyeglasses/index', $data);
                $this->load->view('templates/home/footer');
        }
        
        public function home()
        {
            // Get recommend items
                $egs=$this->eyeglasses_model->get_recommend();
                $i = 0;
                $recommend = array();
                foreach($egs as $eg){
                        $recommend[$i]=$eg;
                        if(($main_image = $this->eyeglasses_model->get_main_image($eg['id'])) != null){
                            $recommend[$i]['guid'] =$this->config->base_url().'uploads/images/'.$main_image[0]['guid'];
                            $i++;
                        }
                        
                }
                $data['recommend'] = $recommend;
            // Get lateat items
                $egs=$this->eyeglasses_model->get_newest();
                $i = $j = 0;
                $newest = array();
                foreach($egs as $eg){
                        $newest[$i]=$eg;
                        if(($main_image = $this->eyeglasses_model->get_main_image($eg['id'])) != null){
                            $newest[$i]['guid'] =$this->config->base_url().'uploads/images/'.$main_image[0]['guid'];
                        }
                        $i++;
                }
                $data['newest'] = $newest;
                $this->load->view('eyeglasses/home', $data);
        }
        
        public function view()
        {
            $param = array();
            $keep = array();
             if(isset($_GET['cate']) && $_GET['cate']!="none"){
                 $keep['cate'] = $_GET['cate'];
                 $param['category'] = $_GET['cate'];
             }   
             if(isset($_GET['material']) && $_GET['material']!="none"){
                 $keep['material'] = $_GET['material'];
                 $param['material'] = str_replace('-',' ',$_GET['material']);
             } 
             if(isset($_GET['brand']) && $_GET['brand']!="none"){
                 $keep['brand'] = $_GET['brand'];
                 $param['brand_name'] = str_replace('-', ' ', $_GET['brand']);
             }
             $sort = null;
             if(isset($_GET['price']) && $_GET['price']!="none"){
                 $sort = $_GET['price'];
             }
             // paginate
             $paginate = array();
             $page = 1;
             if(isset($_GET['page'])){
                 $page = $_GET['page'];
             }
             $paginate['page'] = $page;
             $paginate['each_page_count'] = 2;
             $result = $this->eyeglasses_model->get_eyeglasses($param,$sort,$paginate);
             $egs =$result[0];
             $paginate['records']= $result[1];
             $i = 0;
             foreach($egs as $eg){
                if(($main_image = $this->eyeglasses_model->get_main_image($eg['id'])) != null){
                    $egs[$i]['guid'] =$this->config->base_url().'uploads/images/'.$main_image[0]['guid'];
                    $i++;
                }
                
             }
             $data['eyeglasses'] = $egs;
             $keep_link = http_build_query($keep);
             if(($page == 1) &&($page!=ceil($paginate['records']/$paginate['each_page_count'])) ){
                 $data['next'] = "view?".$keep_link."&page=2&price=".$sort;
             }
             else if(($page >1) && $page == ceil($paginate['records']/$paginate['each_page_count']))
             {
                 $previous = $page-1;
                 $data['previous'] = "view?".$keep_link."&page=".$previous."&price=".$sort;
             }
             else if($page > 1){
                 $previous = $page-1;
                 $next = $page+1;
                 $data['previous'] = "view?".$keep_link."&page=".$previous."&price=".$sort;
                 $data['next'] = "view?".$keep_link."&page=".$next."&price=".$sort;
             }
             $keep_link=str_replace('&','@',$keep_link);
             $keep_link=str_replace('=','*',$keep_link);
             $data['now']="view~".$keep_link."@page*".$page."@price*".$sort;
             $data['paginate'] = $paginate;
             $data['brands'] = $this->eyeglasses_model->get_brands();
             $this->load->view('eyeglasses/view',$data);
        }
        
        public function search()
        {
            if(isset($_GET['keywords']) && $_GET['keywords']!=""){
                $keywords = str_replace('-', ' ', $_GET['keywords']);
                // paginate
                 $paginate = array();
                 $page = 1;
                 if(isset($_GET['page'])){
                     $page = $_GET['page'];
                 }
                 $paginate['page'] = $page;
                 $paginate['each_page_count'] = 2;
                 $result = $this->eyeglasses_model->search_eyeglasses($keywords,$paginate);
                 $egs = $result[0];
                 $paginate['records']= $result[1];
                 $i = 0;
                 foreach($egs as $eg){
                    if(($main_image = $this->eyeglasses_model->get_main_image($eg['id'])) != null){
                        $egs[$i]['guid'] =$this->config->base_url().'uploads/images/'.$main_image[0]['guid'];
                        $i++;
                    }
                 }
                 $data['eyeglasses'] = $egs;
                 $data['paginate'] = $paginate;
                 if(($page == 1) &&($page!=ceil($paginate['records']/$paginate['each_page_count'])) ){
                     $data['next'] = "search?keywords=".$_GET['keywords']."&page=2";
                 }
                 else if(($page >1) && $page == ceil($paginate['records']/$paginate['each_page_count']))
                 {
                     $previous = $page-1;
                     $data['previous'] = "search?keywords=".$_GET['keywords']."&page=".$previous;
                 }
                 else if($page > 1){
                     $previous = $page-1;
                     $next = $page+1;
                     $data['previous'] = "search?keywords=".$_GET['keywords']."&page=".$previous;
                     $data['next'] = "search?keywords=".$_GET['keywords']."&page=".$next;
                 }
                 $data['now']="search?keywords=".$_GET['keywords']."@page=".$page;
                 $data['brands'] = $this->eyeglasses_model->get_brands();
                 $this->load->view('eyeglasses/view',$data);
            }
        }
        
        public function details(){
          $data['eyeglasses'] = $this->eyeglasses_model->get_eyeglasses(array('id'=>$_GET['pid']))[0];
          $imgs = $this->eyeglasses_model->get_images($_GET['pid']);
          $images = array();
          foreach($imgs as $img){
              $images[]=$img['image_url'];
          }
          $data['images'] = $images;
          $this->load->view('templates/home/header');
          $this->load->view('eyeglasses/details',$data);
          $this->load->view('templates/home/footer');
            
        }
        
        
}

