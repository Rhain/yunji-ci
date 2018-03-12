<?php
defined('BASEPATH') OR exit('No direct script access allowed');
define('SALT', 'whateveryouwant'); 
require_once("Admin.php");
class Promo extends Admin {
        public function __construct()
        {
                parent::__construct();
                $this->load->model('admin/order_model');
        }
        
        public function view()
        {
                $data['user_hash'] = $this->get_userhash();
                $this->load->view('templates/header');    
                $this->load->view('admin/promotion',$data); 
                $this->load->view('templates/footer');   
        }

        private function get_userhash()
        {
                $user_id = $this->session->userdata('user_id');
            //    $encryptcode = $this->encrypt($user_id);
                return $user_id;
        }

        

        public function encrypt($text) 
        { 
            return trim(base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, SALT, $text, MCRYPT_MODE_ECB, mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND)))); 
        } 

        public function decrypt($text) 
        { 
            return trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, SALT, base64_decode($text), MCRYPT_MODE_ECB, mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND))); 
        } 

        
}