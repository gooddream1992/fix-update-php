<?php

function parse_signed_request($signed_request, $secret) {
//	array(7) {
//	  ["algorithm"]=>
//	  string(11) "HMAC-SHA256"
//	  ["expires"]=>
//	  int(1300575600)
//	  ["issued_at"]=>
//	  int(1300569070)
//	  ["oauth_token"]=>
//	  string(102) "137193673016943|2.eEAinTQxchzW2ABSLM6AaQ__.3600.1300575600-197704270249663|x4fLJc5KFWN8liMRma1xBLviyC8"
//	  ["page"]=>
//	  array(3) {
//	    ["id"]=>
//	    string(15) "197704270249663"
//	    ["liked"]=>
//	    bool(false)
//	    ["admin"]=>
//	    bool(true)
//	  }
//	  ["user"]=>
//	  array(3) {
//	    ["country"]=>
//	    string(2) "us"
//	    ["locale"]=>
//	    string(5) "en_US"
//	    ["age"]=>
//	    array(1) {
//	      ["min"]=>
//	      int(21)
//	    }
//	  }
//	  ["user_id"]=>
//	  string(15) "197704270249663"
//	}
	
	list($encoded_sig, $payload) = explode('.', $signed_request, 2); 
	
	// decode the data
	$sig = base64_url_decode($encoded_sig);
	$data = json_decode(base64_url_decode($payload), true);
	
	if (strtoupper($data['algorithm']) !== 'HMAC-SHA256') {
		error_log('Unknown algorithm. Expected HMAC-SHA256');
		return null;
	}
	
	// check sig
	$expected_sig = hash_hmac('sha256', $payload, $secret, $raw = true);
	if ($sig !== $expected_sig) {
		error_log('Bad Signed JSON signature!');
		return null;
	}
	return $data;
}

function base64_url_decode($input) {
	return base64_decode(strtr($input, '-_', '+/'));
}
