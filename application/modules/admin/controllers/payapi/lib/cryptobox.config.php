<?php
/**
 *  ... Please MODIFY this file ...
 *
 *
 *  YOUR MYSQL DATABASE DETAILS
 *
 */

 define("DB_HOST", 	"localhost");				// hostname
 define("DB_USER", 	"root");		// database username
 define("DB_PASSWORD", 	"toto44");		// database password
 define("DB_NAME", 	"xstore");	// database name




/**
 *  ARRAY OF ALL YOUR CRYPTOBOX PRIVATE KEYS
 *  Place values from your gourl.io signup page
 *  array("your_privatekey_for_box1", "your_privatekey_for_box2 (otional)", "etc...");
 */
 
 $cryptobox_private_keys = array("27025AABwopiLitecoin77LTCPRVJ3RshPv9zvcp0Kt0HfGT9N","27023AAtNOwwBitcoin77BTCPRVk7hmp8s3ew6pwgOMgxMq81F");




 define("CRYPTOBOX_PRIVATE_KEYS", implode("^", $cryptobox_private_keys));
 unset($cryptobox_private_keys);

?>