<?php

require_once 'classes/phpPayPal.php';

$config = array();

$config['api_username'] = '';
$config['api_password'] = '';
$config['api_signature'] = '';
		
$config['use_proxy'] = '';
$config['proxy_host'] = '';
$config['proxy_port'] = '';
		
$config['return_url'] = '';
$config['cancel_url'] = '';

$paypal = new phpPayPal($config, TRUE);


$paypal->first_name		= 'first name';
$paypal->last_name		= 'last name';
$paypal->profile_start_date	= date('c'); // Must be ISO 8601 date format
$paypal->amount			= '30.00';
$paypal->billing_period		= 'Month';
$paypal->billing_frequency	= '1';
$paypal->description		= 'This is a description of the subscription.';

//$paypal->email			= $business_email; // Optional

//$paypal->credit_card_number	= '123456578901';
//$paypal->credit_card_type	= 'Visa';
//$paypal->expire_date		= 'MMYYYY';

//$paypal->initial_amount         = '75.00'; // OPTIONAL

$paypal->create_recurring_payments_profile();

