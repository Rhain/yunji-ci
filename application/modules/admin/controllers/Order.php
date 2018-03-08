<?php
defined('BASEPATH') OR exit('No direct script access allowed');

DEFINE("CRYPTOBOX_PHP_FILES_PATH", BASEPATH."../application/modules/admin/controllers/payapi/lib/");
DEFINE("CRYPTOBOX_LANGUAGE_HTMLID", "alang");
DEFINE("CRYPTOBOX_COINS_HTMLID", "acoin");
DEFINE("CRYPTOBOX_PREFIX_HTMLID", "acrypto_");
require_once(CRYPTOBOX_PHP_FILES_PATH . "cryptobox.class.php" );

require_once("Admin.php");
class Order extends Admin {
        public function __construct()
        {
                parent::__construct();
                $this->load->model('admin/order_model');
                
        }
        
        public function view()
        {
                
                $this->load->view('templates/header');    
                $this->load->view('admin/order');
                $this->load->view('templates/footer');   
        }

        public function makeOrder()
        {
                $data['user_id'] = $this->session->userdata('user_id'); 
                $data['count'] = $this->input->post('count');
                $data['total_amount'] = $this->input->post('total_amount');
                $orderid = $this->order_model->set_order($data);
                $data['orderid']=$orderid;
                echo json_encode($data); 
        }

        public function preparePay()
        {
                $userID 		= "demo";
                $userFormat		= "COOKIE"; 
                $orderID		= "invoice2";
                $amountUSD		= 0.01;
                $period		= "NOEXPIRY";
                $def_language	= "en";
                $def_coin		= "bitcoin";
                $coins = array('litecoin','bitcoin','speedcoin');
                $all_keys = array(	"litecoin" => array(	"public_key" => "27025AABwopiLitecoin77LTCPUBcHRk4OegHlaWAh0xzpmLJD", 
								"private_key" => "27025AABwopiLitecoin77LTCPRVJ3RshPv9zvcp0Kt0HfGT9N"),
					"bitcoin" => array(	"public_key" => "27023AAtNOwwBitcoin77BTCPUBzo4PVkUmYCa2dR770wNNstd", 
                                                                "private_key" => "27023AAtNOwwBitcoin77BTCPRVk7hmp8s3ew6pwgOMgxMq81F"),
                                        "speedcoin" => array(   "public_key" => "27108AAOkKF6Speedcoin77SPDPUBKfj4yQL9sWWFmBzmNP0O5",
                                                                "private_key" => "27108AAOkKF6Speedcoin77SPDPRVhFaVChVLAcD0aobPdlXTe")
                                ); 
                $def_coin = strtolower($def_coin);
                if (!in_array($def_coin, $coins)) $coins[] = $def_coin;  
	        foreach($coins as $v)
	        {
		        if (!isset($all_keys[$v]["public_key"]) || !isset($all_keys[$v]["private_key"])) die("Please add your public/private keys for '$v' in \$all_keys variable");
		        elseif (!strpos($all_keys[$v]["public_key"], "PUB"))  die("Invalid public key for '$v' in \$all_keys variable");
		        elseif (!strpos($all_keys[$v]["private_key"], "PRV")) die("Invalid private key for '$v' in \$all_keys variable");
		        elseif (strpos(CRYPTOBOX_PRIVATE_KEYS, $all_keys[$v]["private_key"]) === false) 
				die("Please add your private key for '$v' in variable \$cryptobox_private_keys, file /lib/cryptobox.config.php.");
                }
                $coinName = cryptobox_selcoin($coins, $def_coin);
                $public_key  = $all_keys[$coinName]["public_key"];
                $private_key = $all_keys[$coinName]["private_key"];
                $options = array(
                        "public_key"  	=> $public_key,	    // your public key from gourl.io
                        "private_key" 	=> $private_key,	// your private key from gourl.io
                        "webdev_key"  	=> "", 			    // optional, gourl affiliate key
                        "orderID"     	=> $orderID, 		// order id or product name
                        "userID"      		=> $userID, 	// unique identifier for every user
                        "userFormat"  	=> $userFormat, 	// save userID in COOKIE, IPADDRESS, SESSION  or MANUAL
                        "amount"   	  	=> 0,			    // product price in btc/bch/ltc/doge/etc OR setup price in USD below
                        "amountUSD"   	=> $amountUSD,	    // we use product price in USD
                        "period"      		=> $period, 	// payment valid period
                        "language"	  	=> $def_language    // text on EN - english, FR - french, etc
                    );
                $box = new Cryptobox ($options); 
                $coinName = $box->coin_name();
                
                //pack the data array

                $data = array();
                $data['box'] = $box;
                $data['coins'] = $coins;
                $data['def_coin'] = $def_coin;
                $data['def_language'] = $def_language;

            $this->load->view('templates/header');    
            $this->load->view('admin/payment_box',$data);
            $this->load->view('templates/footer');  
        }
        
}