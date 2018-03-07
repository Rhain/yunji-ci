<?php

class Eyeglasses_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        
        public function get_recommend(){
            $this->db->select('*');
            $this->db->from('eyeglasses');
            $this->db->where(array('recommend'=>1));
            $this->db->order_by('id','asc');
            $this->db->limit(6);
            $query = $this->db->get();
            return $query->result_array();
        }
        
        public function get_newest(){
            $this->db->select('*');
            $this->db->from('eyeglasses');
            $this->db->order_by('updated_at','desc');
            $this->db->limit(6);
            $query = $this->db->get();
            return $query->result_array();
        }
        
        public function get_eyeglasses($array = NULL,$sort=NULL,$paginate=NULL){
            
                $this->db->select('*');
                $this->db->from('eyeglasses');
                if(null != $array ){
                    $this->db->where($array);
                }
                if(null != $sort){
                    $this->db->order_by('price',$sort);
                }
                else {
                   $this->db->order_by('updated_at','desc'); 
                }
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
                    $this->db->from('eyeglasses');
                    if(null != $array ){
                        $this->db->where($array);
                    }
                    $query = $this->db->get();
                    $data[1] = $query->num_rows();
                    return $data;
                } else {
                    return $query->result_array();
                }
            
        }
        
        public function search_eyeglasses($str = NULL,$paginate=NULL){
            $this->db->select('*');
            $this->db->from('eyeglasses');
            $this->db->like('title',$str);
            $this->db->or_like('model_number',$str);
            $this->db->or_like('description',$str);
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
                $this->db->from('eyeglasses');
                $this->db->like('title',$str);
                $this->db->or_like('model_number',$str);
                $this->db->or_like('description',$str);
                $query = $this->db->get();
                $data[1] = $query->num_rows();
                return $data;
            }
            else {
                return $query->result_array();
            }
        }
        
        public function get_main_image($pid) {
            $this->db->select('id_media');
            $this->db->from('eyeglasses_media');
            $this->db->where('id_eyeglasses',$pid);
            $this->db->order_by("id","asc");
            $this->db->limit(1);
            $media_id = $this->db->get()->row()->id_media;
            $query = $this->db->query("select guid from media where id=".$media_id." order by id asc limit 1");
            return $query->result_array();
        }
        
        public function get_images($pid) {
            $this->db->select('id_media');
            $this->db->from('eyeglasses_media');
            $this->db->where('id_eyeglasses',$pid);
            $this->db->order_by("id","asc");
            $media_ids = $this->db->get()->result_array();
            $ids = array();
            $i = 0;
            foreach($media_ids as $media_id){
                $ids[$i]['image_id'] = $media_id['id_media'];
                $query = $this->db->query("select guid from media where id=".$media_id['id_media']." order by id asc limit 1");
                if(null != $query->result_array()){
                    $ids[$i]['image_url'] = $this->config->base_url().'uploads/images/'.$query->result_array()[0]['guid'];
                }
                $i = $i + 1;
            }
            return $ids;
        }
        
        public function get_brands(){
                $this->db->select('brand_name');
                $this->db->from('eyeglasses');
                $this->db->group_by("brand_name");
            $brands_array = $this->db->get()->result_array();
            $brands = array();
            foreach($brands_array as $brand){
                $brands[] = $brand['brand_name'];
            }
            return $brands;
        }
}

