<?php

set_time_limit(3000);
$arrDoneDeals = array();
$strUniqueId = date("H:i:s");

require_once './functions/simplehtmldom/simple_html_dom.php';

define('LOG_FILENAME_C','/tmp/buywithme');
write_app_log("starting script...\n");

function get_buywithme_datax($url, $force=FALSE) {
//	return get_deal_data($url);
	return get_buywithme_data($url, $force);
}

function save_deal_from_array($data) {
	try {
		DealFeedPeer::saveDealFromArray($data['deal'], false);
	} catch (Exception $e) {
		vdump($e->getMessage());
		vdump($data['deal']);
		exit;
	}
}

if (strlen($_GET['getUrl'])) {
	$url = $_GET['getUrl'];
	
	$data = get_buywithme_datax($url);
	if ($data) {
		save_deal_from_array($data);
	}
	
	foreach ($data['deals_on_page'] as $dealUrl) {
		$arrDealUrl = get_buywithme_datax($dealUrl);
		if ($arrDealUrl) {
			save_deal_from_array($arrDealUrl);
			
			foreach ($arrDealUrl['deals_on_page'] as $dealUrl_1) {
				$arrDealUrl_1 = get_buywithme_datax($dealUrl_1);
				if ($arrDealUrl_1) {
					save_deal_from_array($arrDealUrl_1);
				}
			}
		}
	}
	
} else {
	$arrMatches = check_apache_running_script('events-parse_buywithme.htm?v_c=via_cron');
	if (1 < count($arrMatches) && !array_key_exists('force', $_GET)) {
		write_app_log("too many running scripts. not forcing.\n");
		die('too many running scripts. not forcing.');
	}
	
//	$url = 'http://www.buywithme.com/boston/deals/4870-castle-hill-resort-and-spa';
	$url = 'http://www.buywithme.com/sandiego/deals/';
//	$url = 'http://www.buywithme.com/sandiego/deals/4336-ahura-salon';
//	$url = 'http://www.buywithme.com/boston/deals/2444-sugarloaf';
//	$url = 'http://www.buywithme.com/la/deals/2697-winery-insider';
//	$url = 'http://www.buywithme.com/la/deals/2637-gregory-robins-family-dentistry';

	$data = get_buywithme_data($url, TRUE);	
//	vdump($data);
//	exit;
	
	if($data) {
		save_deal_from_array($data);
	
		foreach ($data['deals_on_page'] as $dealUrl) {
			$arrDealUrl = get_buywithme_data($dealUrl);
			if ($arrDealUrl) {
				save_deal_from_array($arrDealUrl);
			}
		}
		shuffle($data['regions']);
	
		// INIT CURL
		$ch = curl_init();
		
		foreach ($data['regions'] as $regionUrl) {
			write_app_log("processing region: ".$regionUrl.".\n");
			
			// pass region to another script
			$url = 'http://'.$_SERVER['HTTP_HOST'].'/events-parse_buywithme.htm?getUrl='. urlencode($regionUrl);
	
			// SET URL
			curl_setopt($ch, CURLOPT_URL, $url);
			# Setting CURLOPT_RETURNTRANSFER variable to 1 will force cURL
			# not to print out the results of its query.
			# Instead, it will return the results as a string return value
			# from curl_exec() instead of the usual true/false.
			curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
			// EXECUTE 1st REQUEST
			$data = curl_exec ($ch);
				
			if(!$data) {
				write_app_log(" ===== return page misbehaving ===== quitting =====\n");
				break;
			}
			
//			write_app_log(" ... ending first loop after one entry ".$sleep." ...\n");
//			break;
			
//			$sleep = rand(1, 5);
//			write_app_log(" ... sleep ".$sleep." ...\n");
//			sleep($sleep);
		}
	}
}

vdump($data['deal']);
vdump($data['deals_on_page']);
vdump($data['regions']);

write_app_log("quitting script.\n");
exit;

