<?php

set_time_limit(3000);
$arrDoneDeals = array();
$strUniqueId = date("H:i:s");

require_once 'functions/simplehtmldom/simple_html_dom.php';
require_once 'functions/rss_php.php';
include('classes/simplepie.inc');

define('LOG_FILENAME_C','/tmp/livingsocial_rss');
write_app_log("starting script...\n");

$arrMatches = check_apache_running_script('events-parse_livingsocial-rss.htm?v_c=via_cron');
if (1 < count($arrMatches) && !array_key_exists('force', $_GET)) {
	write_app_log("too many running scripts. not forcing.\n");
	die('too many running scripts. not forcing.');
}

function parse_livingsocial_rss($url) {
	
	/*
	// INIT CURL
	$ch = curl_init();
	
	// SET URL
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
//	curl_setopt($ch, CURLOPT_REFERER, 'http://cj.dealon.com/');
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.10) Gecko/20100914 Firefox/3.6.10');
//	curl_setopt($ch, CURLOPT_COOKIE, '__prevSub=test%40test.com;__subcity=268');
	
	# Setting CURLOPT_RETURNTRANSFER variable to 1 will force cURL
	# not to print out the results of its query.
	# Instead, it will return the results as a string return value
	# from curl_exec() instead of the usual true/false.
	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
	
	write_app_log("requesting rss page... ".$url."\n");
	// EXECUTE 1st REQUEST
	$data = curl_exec ($ch);
	*/
	write_app_log("requesting rss page... ".$url."\n");
	
	$curlResult = curl_process_url($url, 1800);
	$data = $curlResult['result'];
	
	write_app_log("done.\n");
	
	$feed = new SimplePie();
	$feed->set_raw_data($data);
	$feed->init();
	
	$items = $feed->data['child']['http://www.w3.org/2005/Atom']['feed'][0]['child']['http://www.w3.org/2005/Atom']['entry'];
	$arrItems = array();
	
	foreach ($items as $arrItem) {
//		vdump($arrItem);
//		exit;
		
		$thisItem = array();
		foreach ($arrItem['child']['http://www.w3.org/2005/Atom'] as $key => $value) {
			switch ($key) {
				case 'link':
					$thisItem[$key] = $value[0]['attribs']['']['href'];
					// keep urls the same as in other scripts
					$thisItem[$key] = str_replace('http://deals.livingsocial.com', 'http://livingsocial.com', $thisItem[$key]);
				break;
				case 'title':
					$thisItem['division_name'] = $value[0]['data'];
				break;
				case 'content':
					/* @var $hdom simple_html_dom */
					$hdom = str_get_html($value[0]['data']);
					$thisItem['title'] = $hdom->find('.deal_title', 0)->innertext;
				break;
				case 'price':
				case 'savings':
				case 'value':
				case 'order_count':
					$thisItem[$key] = ereg_replace("[^0-9.]", "", $value[0]['data']);
				break;
				case 'author':
					// skip
				break;
				
				default:
					$thisItem[$key] = $value[0]['data'];
				break;
			}
			$thisItem[$key] = trim($thisItem[$key]);
		}
		
		$cntAddr = 0;
		$arrAllLocation = $arrItem['child']['http://livingsocial.com/ns/1.0']['location'];
		if ($arrAllLocation) foreach ($arrAllLocation as $keyLocation => $arrLocation) {
			foreach ($arrLocation['child']['http://livingsocial.com/ns/1.0'] as $key => $value) {
				switch ($key) {
					default:
						$thisItem['adr'][$cntAddr][$key] = trim($value[0]['data']);
					break;
				}
			}
			$cntAddr++;
		}
//		if ($thisItem['id'] == 'tag:deals.livingsocial.com,2005:Deal/30780') {
//			vdump($arrItem);
//			vdump($thisItem);
//			exit;
//		}
		$arrItems[$thisItem['link']] = $thisItem;
	}
	return $arrItems;
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

//$url = 'http://deals.livingsocial.com/cities.atom?offer_id=4&aff_id=1409';
// using feed as of ls's email regarding new url 2/15/12
$url = 'http://feed.livingsocial.com/cities.atom?offer_id=4&aff_id=1409';
$arrItems = parse_livingsocial_rss($url);

// randomize items
shuffle($arrItems);
write_app_log("Total Items: ".count($arrItems).".\n");

foreach ($arrItems as $arrThisItem) {
	// more than 200 megs usage
	if (memory_get_usage() > 240000000) {
		write_app_log("1. too much memory being used.\n");
		parsing_stopped();
	}
	
//	if ($arrThisItem['link'] != 'http://livingsocial.com/deals/32572-chemical-peel') {
//		continue;
//	}
	
	// get_livingsocial_data($url, $force=FALSE, $unitTest=FALSE, $arrThisItem)
	$data = get_livingsocial_data($arrThisItem['link'], false, false, $arrThisItem);

	if($data) {
		save_deal_from_array($data);
	}
	
//	vdump('loop');
//	vdump($arrThisItem);
//	vdump($data['deal']);
//	exit;
			
//	$sleep = rand(1, 15);
//	write_app_log(" ... sleep ".$sleep." ...\n");
//	sleep($sleep);
}



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

