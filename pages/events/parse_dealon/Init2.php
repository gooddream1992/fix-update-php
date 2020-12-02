<?php

set_time_limit(3000);
$arrDoneDeals = array();
$strUniqueId = date("H:i:s");
require_once 'komideals/DealFeedPeer.php';
require_once 'komideals/CategoryPeer.php';

require_once 'functions/simplehtmldom/simple_html_dom.php';
require_once 'functions/rss_php.php';

define('LOG_FILENAME_C','/tmp/dealon');
write_app_log("starting script...\n");

function parse_dealon_rss($url) {
	
	// INIT CURL
	$ch = curl_init();
	
	// SET URL
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
	curl_setopt($ch, CURLOPT_REFERER, 'http://cj.dealon.com/');
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.10) Gecko/20100914 Firefox/3.6.10');
	curl_setopt($ch, CURLOPT_COOKIE, '__prevSub=test%40test.com;__subcity=268');
	
	# Setting CURLOPT_RETURNTRANSFER variable to 1 will force cURL
	# not to print out the results of its query.
	# Instead, it will return the results as a string return value
	# from curl_exec() instead of the usual true/false.
	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
	
	write_app_log("requesting rss page... ".$url."\n");
	// EXECUTE 1st REQUEST
	$data = curl_exec ($ch);
	write_app_log("done.\n");
	
	$objRssPhp = new rss_php();
	$objRssPhp->loadRSS($data);
	$arrItems = $objRssPhp->getItems();
	$arrDealsOnPage = array();
	
	foreach ($arrItems as $dThisKey => $arrThisItem) {
		parse_str($arrThisItem['link'], $arrUrl);
		$arrItems[$dThisKey]['link'] = $arrUrl['URL'];
		$arrDealsOnPage[] = $arrItems[$dThisKey]['link'];
	}
	
	$arrRet = array();
	$arrRet['deals_on_page'] = $arrDealsOnPage;
	$arrRet['items'] = $arrItems;
	return $arrRet;
}

function get_dealon_data($url, $item=array(), $force=FALSE) {
	global $fp;
	global $dealnumber;
	global $arrDoneDeals;
//	ini_set('memory_limit', memory_get_usage() + 20000000);
	
	// 'http://www.dealon.com/atlanta/deal/permalink'
	if (strstr($url, '/deal/') // contains a deal
	&& strlen($url) - strlen(str_replace('/', '', $url)) == 5 // only 5 slash(es) in href
	&& $force == FALSE
	) {
		write_app_log("checking existing URL: ".$url."\n");
		// check existing deal
		$objExistingDealFeed = DealFeedQuery::create()->findOneByClickUrl($url);
		if ($objExistingDealFeed instanceof DealFeed) {
			write_app_log("url found. checking date...\n");
			if ($objExistingDealFeed->getDateModified('U') > time()-(60*60)) {
				// modified less than 1 hour(s) ago
				write_app_log("SKIPPING. deal too FRESH.\n");
				return FALSE;
			};
		}
	}
	
	if ($arrDoneDeals[$url] == $url) {
		write_app_log("SKIPPING deal page.".$url."\n");
		return false;
	}
	
	$arrDoneDeals[$url] = $url;
	$dealnumber++;
	
	// INIT CURL
	$ch = curl_init();
	
	// SET URL
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
	curl_setopt($ch, CURLOPT_REFERER, 'http://cj.dealon.com/');
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.10) Gecko/20100914 Firefox/3.6.10');
	curl_setopt($ch, CURLOPT_COOKIE, '__prevSub=test%40test.com;__subcity=268');
	
	# Setting CURLOPT_RETURNTRANSFER variable to 1 will force cURL
	# not to print out the results of its query.
	# Instead, it will return the results as a string return value
	# from curl_exec() instead of the usual true/false.
	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
	
	write_app_log("requesting deal page... ".$url."\n");
	// EXECUTE 1st REQUEST
	$data = curl_exec ($ch);
	write_app_log("done.\n");
	
	/* @var $hdom simple_html_dom */
	$hdom = str_get_html($data);
	
	$comments = array();
	$deals_on_page = array();
	$deal = array();
	$deal['adr'] = array();
	$deal['highlights'] = array();
	$deal['fine_print'] = array();
	$deal['requested_url'] = $url;
//	$deal['requested_data'] = $data;
//	$deal['post_to_blog_name'] = 'grouponia.com';
	$deal['post_to_blogs'] = array(
		'dealgrater.com',
//		'deals2inbox.com',
	);
	$deal['deal_source_name'] = 'DealOn.com';
	$regions = array();

//$deal["deal_deadline"] = 'error';
//$deal["unix_deal_deadline"] = 'error';
//$deal["deal_permalink"] = 'error';
//$deal["deal_perma_url"] = 'error';
//$deal["amount"] = 'error';
//$deal["discount"] = 'error';
//$deal["value"] = 'error';
//$deal["url"] = 'error';
//$deal["price"] = 'error';
//$deal["photo"] = 'error';
//$deal["photo_small"] = 'error';
//$deal["photo_medium"] = 'error';
//$deal["control_title"] = 'error';
//$deal["email_subject"] = 'error';
//$deal["comment_number"] = 'error';
//$deal["discussion_url"] = 'error';
//$deal["division_name"] = 'error';
//$deal["description"] = 'error';
//$deal["number_sold"] = 'error';
//$deal["tipped_at"] = 'error';
//$deal["is_online"] = 'error';
//$deal["website"] = 'error';
//$deal["company_name"] = 'error';
//$deal["adr"] = array(
//	0 => array(
//		"location_name" => 'error',
//		"addressline1" => 'error',
//		"addressline2" => 'error',
//		"locality" => 'error',
//		"telephone" => 'error',
//		"zipcode" => 'error',
//		"google" => 'error',
//	)
//);

	// fill data from item's array
	if (array_key_exists('title', $item)) {
		$deal['control_title'] = $item['title'];
	}
	if (array_key_exists('description', $item)) {
		$deal['description'] = $item['description'];
	}
	if (array_key_exists('endDate', $item)) {
		$deal['deal_deadline'] = $item['endDate'];
	}
	if (array_key_exists('market', $item)) {
		$deal['division_name'] = $item['market'];
	}
	if (array_key_exists('startPrice', $item)) {
		$deal['price'] = ereg_replace('[^0-9.]', '', $item['startPrice']);
		$deal['amount'] = ereg_replace('[^0-9.]', '', $item['startPrice']);
	}
	if (array_key_exists('retailPrice', $item)) {
		$deal['value'] = ereg_replace('[^0-9.]', '', $item['retailPrice']);
	}
	if (array_key_exists('details', $item)) {
		$deal['fine_print'][] = $item['details']['detail'];
	}
	if (array_key_exists('highlights', $item)) {
		$deal['highlights'][] = $item['highlights']['highlight'];
	}
	
	// find regions/cities/divisoins
//	foreach ($hdom->find('option') as $optionDom) {
//		$regions[md5($optionDom->attr['value'])] = 'http://cj.dealon.com/'.$optionDom->attr['value'].'/deal/today';
//	}
	
//	// find deals on page
//	foreach ($hdom->find('a') as $a) {
//		
//		if (strstr($a->attr['href'], '/deal/') 
//		&& strlen($a->attr['href']) - strlen(str_replace('/', '', $a->attr['href'])) == 3 // only n slash(es) in href
////		&& strstr($a->attr['href'], 'http://')
//		) {
//			$href = $a->attr['href'];
//			vdump($href);
//			// strip query string off
//			if (strpos($href, '?')) {
//				$href = substr($href, 0, strpos($href, '?'));
//			}
//			if (strpos($href, 'our_favorites')) {
//				// one-off case. looks like a deal, but isn't: 
//				// /deals/how_it_works
//				// http://www.buywithme.com/la/deals/our_favorites
//				continue;
//			}
//			$deals_on_page[md5($href)] = $href;
//		}
//	}
	
	if (strlen($deal['deal_deadline']) > 1) {
	// we got ourselves a deal
	
		//doesn't work: '02 Dec, 2010 07:59 AM UTC', 
		//so convert to format: 'Mon Oct 18 06:59:00 UTC 2010'
//		$deal_deadline = preg_replace(
//			"/(\d+) (\w+), (\d+) (\d+):(\d+) (\w+) (\w+)/", 
//			"\\2 \\1 \\4:\\5:00 \\6 \\7 \\3", $deal['deal_deadline']);
//		$objDate = new DateTime($deal_deadline);
		$objDate = new DateTime($deal['deal_deadline']);
		$deal['unix_deal_deadline'] = $objDate->format('U');
		
		/*
		 * @todo: deal_permalink and deal_perma_url should be retrieved from page html
		 */
		$deal['deal_permalink'] = preg_replace("/http.*:\/\/(.*)\/deal\/(.*)/", "\\2", $url);
		$deal['deal_perma_url'] = $url;
		
		if ($deal['value'] > 0)
			$deal['discount'] = $deal['value'] - $deal['amount'];
	
		/*
		 * @todo: url should be retrieved from page html
		 */
		$deal['url'] = $url;
		
		//   http://cj.dealon.com/images/coupons/5051_image_4d24a370ad8bc.jpg
		// https://www.dealon.com/images/coupons/small/5049_image_4d24a098cc61f.jpg Get It Girl
		//						 /images/coupons/      5049_image_4d24a098cc61f.jpg
		
		$deal['photo'] = 'http://www.dealon.com'.trim($hdom->find('.deal-image', 0)->attr['src']);
		// strip query string off
		if (strpos($deal['photo'], '?')) {
			$deal['photo'] = substr($deal['photo'], 0, strpos($deal['photo'], '?'));
		}
		$deal['photo_medium'] = str_replace('/images/coupons/', '/images/coupons/small/', $deal['photo']);
		$deal['photo_small'] = str_replace('/images/coupons/', '/images/coupons/small/', $deal['photo']);
		
		$deal['control_title'] = trim($deal['control_title'], '.');
		$deal['email_subject'] = trim($deal['email_subject'], '.');
		
		// add surrounding p, if needed
		if (substr($deal['description'], 0, 2) != '<p') {
			$deal['description'] = '<p>'.$deal['description'].'</p>';
		}
		
		$deal['number_sold'] = 0; // not displayed anywhere on site
//		if (is_object($hdom->find('.purchased', 0))) {
//			$deal['number_sold'] = ereg_replace('[^0-9]', '', trim($hdom->find('.purchased', 0)->find('.value', 0)->innertext));
//		}
		
		$deal['company_name'] = trim($hdom->find('.deal-image', 0)->attr['alt']);
		
		if (is_object($hdom->find('#dealBusinessAddress', 0))) {
			$adrCount = 0;
			$strAddress = trim($hdom->find('#dealBusinessAddress', 0)->attr['value']);
			$result = google_geocode($strAddress);
			
			$arrAdr = array();
			foreach ($result->address_components as $objAdrComp) {
				foreach ($objAdrComp->types as $strAdrCompType) {
					switch ($strAdrCompType) {
						case 'subpremise':
						case 'street_number':
						case 'route': // street name
						case 'locality': // city 
						case 'sublocality': // alternate city
						case 'administrative_area_level_1': // state
						case 'country':
						case 'postal_code':
							$arrAdr[$strAdrCompType] = $objAdrComp;
						break;
						
						default:
							// noting
						break;
					}
				}
			}
			$deal['adr'][$adrCount]['addressline1'] = sprintf("%s %s", $arrAdr['street_number']->long_name, $arrAdr['route']->long_name);
			if (strlen($arrAdr['subpremise']->long_name)) {
				$deal['adr'][$adrCount]['addressline1'] .= sprintf(" #%s", $arrAdr['subpremise']->long_name);
			}
			
			// @todo: should get lat/lng from javascript on page
			// ...
			
			// locality: city, state zip
			$city = strlen($arrAdr['locality']->long_name)?$arrAdr['locality']->long_name:$arrAdr['sublocality']->long_name;
			$deal['adr'][$adrCount]['locality'] = sprintf("%s, %s %s"
				, $city
				, $arrAdr['administrative_area_level_1']->short_name
				, $arrAdr['postal_code']->long_name
				);
			$deal['adr'][$adrCount]['zipcode'] = $arrAdr['postal_code']->long_name;
			$deal['adr'][$adrCount]['google'] = $result;
			
			$deal['adr'][$adrCount]['location_name'] = $deal['company_name'];
			$adrCount++;
		}

		// is online, website
		if (is_object($hdom->find('.deal-details', 0))) {
			// is online
			if (strpos($hdom->find('.deal-details', 0)->innertext, 'Visit Online')) {
				$deal['is_online'] = 1;
			}
			// website
			if (is_object($hdom->find('.deal-details', 0)->find('a', 0))) {
				$deal['website'] = $hdom->find('.deal-details', 0)->find('a', 0)->attr['href'];
			}
		}
		
		// fine_print, highlights
		if (is_object($hdom->find('.deal-highlights', 0))) {
			foreach ($hdom->find('.deal-highlights', 0)->find('.deal-highlights-column') as $objTd) {
				$strArrayKey = 'fine_print';
				if (strpos($objTd->innertext, 'Deal Highlights')) {
					$strArrayKey = 'highlights';
				}
				foreach ($objTd->find('span') as $objSpan) {
					$deal[$strArrayKey][] = trim(strip_tags($objSpan->innertext));
				}
				$deal[$strArrayKey] = array_unique($deal[$strArrayKey]);
			}
		}
		
	} else {
		// no deal deadline... 
		write_app_log("no deal deadline.\n");
	}
	$deal['comments'] = array();
	
	$hdom = null;
	$cdom = null;
	
	// remove text at or near end of description
	$deal["description"] = str_replace('Read less...', '', $deal['description']);
	
	$strBadChars = "’";
	$deal["control_title"] = str_replace($strBadChars, "'", $deal["control_title"]);
	$deal["email_subject"] = str_replace($strBadChars, "'", $deal["email_subject"]);
	$deal["description"] = str_replace($strBadChars, "'", $deal["description"]);
	$cdom = null;
	
	$strBadChars = "“";
	$deal["control_title"] = str_replace($strBadChars, "'", $deal["control_title"]);
	$deal["email_subject"] = str_replace($strBadChars, "'", $deal["email_subject"]);
	$deal["description"] = str_replace($strBadChars, "'", $deal["description"]);
	$cdom = null;
	
	$strBadChars = "”";
	$deal["control_title"] = str_replace($strBadChars, "'", $deal["control_title"]);
	$deal["email_subject"] = str_replace($strBadChars, "'", $deal["email_subject"]);
	$deal["description"] = str_replace($strBadChars, "'", $deal["description"]);
	
	$strBadChars = "“";
	$deal["control_title"] = str_replace($strBadChars, "'", $deal["control_title"]);
	$deal["email_subject"] = str_replace($strBadChars, "'", $deal["email_subject"]);
	$deal["description"] = str_replace($strBadChars, "'", $deal["description"]);
	
	$strBadChars = "”";
	$deal["control_title"] = str_replace($strBadChars, "'", $deal["control_title"]);
	$deal["email_subject"] = str_replace($strBadChars, "'", $deal["email_subject"]);
	$deal["description"] = str_replace($strBadChars, "'", $deal["description"]);

	if (strlen($deal['deal_permalink']) && $deal['deal_permalink'] == $deal['deal_perma_url']) {
		// permalink should be part of url.
		// that means nothing matched regex for permalink.
		// we don't want to save deals that are on the index page.
		// reset deal so it isn't processed:
		write_app_log("bad: permalink == url: ".$deal['deal_permalink']."\n");
		$deal = array();
	}
	
	return array(
	  'deal'=>$deal
	, 'deals_on_page'=>$deals_on_page
	, 'regions'=>$regions
	);
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
	
	$data = get_dealon_data($url);
	if ($data) {
		save_deal_from_array($data);
	}
	
	foreach ($data['deals_on_page'] as $dealUrl) {
		$arrDealUrl = get_dealon_data($dealUrl);
		if ($arrDealUrl) {
			save_deal_from_array($arrDealUrl);
			
			foreach ($arrDealUrl['deals_on_page'] as $dealUrl_1) {
				$arrDealUrl_1 = get_dealon_data($dealUrl_1);
				if ($arrDealUrl_1) {
					save_deal_from_array($arrDealUrl_1);
				}
			}
		}
	}
	
} else {
	$url = 'https://www.dealon.com/rssbrand?api_key=7308000&aid=10843752&pid=4282653&sid=';

	$arrItems = parse_dealon_rss($url);
	
	foreach ($arrItems['items'] as $arrThisItem) {
		$data = get_dealon_data($arrThisItem['link'], $arrThisItem);
	
		if($data) {
			save_deal_from_array($data);
			
			$sleep = rand(1, 5);
			write_app_log(" ... sleep (1) ".$sleep." ...\n");
			sleep($sleep);
				
			foreach ($data['deals_on_page'] as $dealUrl) {
				$arrDealUrl = get_dealon_data($dealUrl);
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
				
				$sleep = rand(1, 5);
				write_app_log(" ... sleep ".$sleep." ...\n");
				sleep($sleep);
			}
		}
	}
}

vdump($data['deal']);
vdump($data['deals_on_page']);
vdump($data['regions']);

write_app_log("quitting script.\n");
exit;

