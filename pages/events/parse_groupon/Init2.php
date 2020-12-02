<?php

set_time_limit(3000);

$arrDoneDeals = array();
$strUniqueId = date("H:i:s");
require_once 'DealFeedPeer.php';
require_once 'CategoryPeer.php';

define('LOG_FILENAME_C','/tmp/app_log');
write_app_log("starting script...\n");

//$data = file_get_contents('./pages_sites/dailyfeed/events/parse_groupon/groupon.txt');

function save_deal_from_array($data) {
	
	if ($data['deal']['control_title'] == '' && $data['deal']['email_subject'] == '') {
		write_app_log("NO TITLE... skipping.\n");
		return false;
	}
	try {
		DealFeedPeer::saveDealFromArray($data['deal'], FALSE);
	} catch (Exception $e) {
		vdump($e->getMessage());
		vdump($data['deal']);
		exit;
	}
}

function get_groupon_datax($url, $force=FALSE) {
//	return get_deal_data($url);
	return DealFeedPeer::getGrouponData($url, $force);
}

function save_groupon_categories($arrCategories) {
	$arrNewCategories = array();
	foreach ($arrCategories as $strCategory) {
//		write_app_log("Category: ".$strCategory."\n");
		$arrNewCategories[] = str_replace('http://www.groupon.com/deals/categories/', '', $strCategory);
	}
	CategoryPeer::saveCategoriesFromArray($arrNewCategories);
	return true;
}

if (strlen($_GET['getUrl'])) {
	$url = $_GET['getUrl'];
	
	$data = get_groupon_datax($url);
	
	if ($data) {
		save_deal_from_array($data);
	}
	
	foreach ($data['deals_on_page'] as $dealUrl) {
		// more than 200 megs usage
		if (memory_get_usage() > 240000000) {
			write_app_log("1. too much memory being used.\n");
			parsing_stopped();
		}
		$arrDealUrl = get_groupon_datax($dealUrl);
		if ($arrDealUrl) {
			save_deal_from_array($arrDealUrl);
//			save_groupon_categories($arrDealUrl['categories']);
			
			foreach ($arrDealUrl['deals_on_page'] as $dealUrl_1) {
				// more than 200 megs usage
				if (memory_get_usage() > 200000000) {
					write_app_log("2. too much memory being used.\n");
					parsing_stopped();
				}
				$arrDealUrl_1 = get_groupon_datax($dealUrl_1);
				if ($arrDealUrl_1) {
					save_deal_from_array($arrDealUrl_1);
				}
			}
		}
	}
	
} else {
	$arrMatches = check_apache_running_script('events-parse_groupon.htm?v_c=via_cron');
	if (1 < count($arrMatches) && !array_key_exists('force', $_GET)) {
		write_app_log("too many running scripts. not forcing.\n");
		die('too many running scripts. not forcing.');
	}
	
//	$url = 'http://www.groupon.com/deals/chocolate-com-san-francisco';
	
//	$url = 'http://www.groupon.com/deals/invisalign-promotion-houston'; // many locations
//	$url = 'http://www.groupon.com/edmonton/';
//	$url = 'http://www.groupon.com/springfield-mo/';
//	$url = 'http://www.groupon.com/deals/no-limit-boot-camp';
	$url = 'http://www.groupon.com/deals/smoke-and-mirrors-fitness';
//	$url = 'http://www.groupon.com/deals/barclays-wine-eugene';
//	$url = 'http://www.groupon.com/deals/back-to-basics-health-and-wellness-orange-county';

//	$data = get_groupon_datax($url, TRUE);
	$data = DealFeedPeer::getGrouponData($url, TRUE);
	vdump($data);
	
	if($data) {
		save_deal_from_array($data);
	
		foreach ($data['deals_on_page'] as $dealUrl) {
			// more than 200 megs usage
			if (memory_get_usage() > 240000000) {
				write_app_log("3. too much memory being used.\n");
				parsing_stopped();
			}
			$arrDealUrl = get_groupon_datax($dealUrl);
			if ($arrDealUrl) {
				save_deal_from_array($arrDealUrl);
//				save_groupon_categories($data['categories']);
			}
		}
//		save_groupon_categories($data['categories']);
		shuffle($data['regions']);

		// INIT CURL
		$ch = curl_init();
		
		foreach ($data['regions'] as $regionUrl) {
			write_app_log("processing region: ".$regionUrl.".\n");
			
			// pass region to another script
			$url = 'http://'.$_SERVER['HTTP_HOST'].'/events-parse_groupon.htm?getUrl='. urlencode($regionUrl);
	
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
				continue;
			}
			
//			$sleep = rand(1, 5);
//			write_app_log(" ... sleep ".$sleep." ...\n");
//			sleep($sleep);
		}
	}
}


//foreach ($data['categories'] as $category) {
//	$arr = DealFeedPeer::getGrouponData($category);
//	foreach ($arr['deals_on_page'] as $deal) {
//		$arrDeal = DealFeedPeer::getGrouponData($deal);
//		DealFeedPeer::saveDealFromArray($arrDeal['deal']);
//		
//		foreach ($arrDeal['deals_on_page'] as $newdeal) {
//			$arrNewdeal = DealFeedPeer::getGrouponData($newdeal);
//			DealFeedPeer::saveDealFromArray($arrNewdeal['deal']);
//		}
//		break(2);
//	}
//}

function parsing_stopped() {
	global $data;
	
	vdump($data['deal']);
	vdump($data['deals_on_page']);
	vdump($data['categories']);
	vdump($data['regions']);
	write_app_log("quitting script.\n");
	exit;
}
parsing_stopped();

