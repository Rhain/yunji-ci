<?php

class Admin_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        public function get_backend_icons()
        {
            $query = $this->db->get_where('backend_icons');
            return $query->result_array();
        }
        
        public function set_eyeglasses($id=0)
        {
            
            $data = array(
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'price' => $this->input->post('price'),
                'stock' => $this->input->post('stock'),
                'category' => $this->input->post('category'),
                'brand_name' => $this->input->post('brand_name'),
                'model_number' => $this->input->post('model_number'),
                'material' => $this->input->post('material'),
                'gender' => $this->input->post('gender'),
                'frame_color' => $this->input->post('frame_color'),
                'lens_color' => $this->input->post('lens_color'),
                'lens_width' => $this->input->post('lens_width'),
                'nose_bridge' => $this->input->post('nose_bridge'),
                'temple' => $this->input->post('temple'),
                'total_width' => $this->input->post('total_width'),
                'vertical' => $this->input->post('vertical'),
                'lens_index' => $this->input->post('lens_index'),
                'recommend' => (null !==$this->input->post('recommend'))?$this->input->post('recommend'):0,
                'is_private' => (null !==$this->input->post('is_private'))?$this->input->post('is_private'):0,
                 'updated_at'=> date("Y-m-d H:i:s"),   
            );
            if($id == 0 ){
                $data['created_at'] = date("Y-m-d H:i:s");
                $this->db->insert('eyeglasses', $data);
                $insert_id = $this->db->insert_id();
                return $insert_id;
            } 
            else {
                $this->db->where('id',$id);
                $this->db->update('eyeglasses', $data);
                return $id;
            }
        }
        
        public function insert_files($data = array()){
            $insert = $this->db->insert_batch('media',$data);
            return $insert?true:false;
        }
        
        public function insert_single_file($data = array()){
            $this->db->insert('media',$data);
            $insert_id = $this->db->insert_id();
            return $insert_id;
        }
        public function insert_eyeglass_media_batch($data = array()){
            $insert = $this->db->insert_batch('eyeglasses_media',$data);
            return $insert?true:false;
        }
        public function delete_eyeglasses_media($data = array()){
            return $this->db->delete('eyeglasses_media',$data);
        }
        public function delete_media($id){
            $this->db->select('guid');
            $this->db->from('media');
            $this->db->where('id',$id);
            $guid = $this->db->get()->row()->guid;
            $file_name = FCPATH.'/uploads/images/'.$guid;
            unlink($file_name);
            $this->db->delete('media',array('id'=>$id));
        }
        public function delete_eyeglasses($pid){
            $this->db->select('id_media');
            $this->db->from('eyeglasses_media');
            $this->db->where('id_eyeglasses',$pid);
            $media_ids = $this->db->get()->result_array();
            foreach($media_ids as $media_id){
                $m_id = $media_id['id_media'];
                $this->delete_eyeglasses_media( array('id_media'=>$m_id) );
                $this->delete_media($m_id);
            }
            $this->db->delete('eyeglasses', array('id'=>$pid));
        }
        public function update_code($email,$code){
            $data = array(
                'last_code' => $code
            );
            $this->db->where('email',$email);
            $this->db->update('users',$data);

        }
        
}

