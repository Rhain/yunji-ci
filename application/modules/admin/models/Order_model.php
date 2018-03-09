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

        public function get_orders($array = NULL,$sort=NULL,$paginate=NULL)
        {
            
                $this->db->select('*');
                $this->db->from('orders');
                if(null != $array ){
                    $this->db->where($array);
                }
                if(null != $sort){
                    $this->db->order_by('id',$sort);
                }
                else {
                   $this->db->order_by('updated','desc'); 
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
                    $this->db->from('orders');
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

        public function get_payment($order_id) 
        {
                $query = $this->db->query("select amount,coinLabel from crypto_payments where orderID='".$order_id."' order by paymentID");
                return $query->result_array();
        }
        
        public function del_order($order_id)
        {
                $this->db->delete('orders',array('id'=>$order_id));

        }

        public function get_token($user_id)
        {
            $this->db->select('tokens');
            $this->db->from('users');
            $this->db->where('id',$user_id);
            $this->db->limit(1);
            $tokens = $this->db->get()->row()->tokens;  
            return $tokens;
        }
}

