<?php

set_time_limit(6000);
$arrDoneDeals = array();
$strUniqueId = date("H:i:s");

require_once './functions/simplehtmldom/simple_html_dom.php';

define('LOG_FILENAME_C','/tmp/app_log');
write_app_log("starting script...\n");

//$data = file_get_contents('./pages_sites/dailyfeed/events/parse_groupon/groupon.txt');

function get_groupon_data($url, $forceRegardlessOfLastModified=FALSE) {
	global $fp;
	global $dealnumber;
	global $arrDoneDeals;
//	ini_set('memory_limit', memory_get_usage() + 20000000);
	
	// 'http://www.groupon.com/deals/permalink'
	if (strstr($url, '/deals/') // contains deal
	&& strlen($url) - strlen(str_replace('/', '', $url)) < 5 // only 4 slash(es) in href
	&& $forceRegardlessOfLastModified == FALSE
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
	curl_setopt($ch, CURLOPT_REFERER, 'http://www.groupon.com/orange-county/');
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.10) Gecko/20100914 Firefox/3.6.10');
	curl_setopt($ch, CURLOPT_COOKIE, 'division=orange-county; b=6d5ab64a-ccd9-11df-a4b5-0050569554db; visited=true; subscriber_email=test%40test.com; _chartbeat2=35858kfz5h84nw1w; km_lv=x; km_ai=eulh1cwd7MTZWX%2FxlCZxKbYu1kA%3D; km_uq=; _thepoint=656f3a1d6bb27e73b97d8a80a6ffd418; optimizer_test=2164367096; adchemy_id=; close_subscribe_drawer=true; s=6d5ad562-ccd9-11df-a4b5-0050569554db');
	
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
	$categories = array();
	$deal = array();
	$deal['adr'] = array();
	$deal['post_to_blog_name'] = 'grouponia.com';
	$deal['deal_source_name'] = 'Groupon.com';
	$regions = array();
	
	foreach ($hdom->find('a') as $a) {
	//	vdump($a->attr);
	//	$a->attr['href'];
		if (strstr($a->attr['class'], 'E-Drawer_click_') 
		&& !strstr($a->attr['href'], 'http://')
		) {
			$regions[] = 'http://www.groupon.com'.$a->attr['href'];
		}
		
		if (strstr($a->attr['href'], '/deals/') 
		&& strlen($a->attr['href']) - strlen(str_replace('/', '', $a->attr['href'])) < 3 // only 2 slash(es) in href
		&& !strstr($a->attr['href'], 'http://')
		) {
			$href = $a->attr['href'];
			if (strpos($href, '?')) {
				$href = substr($href, 0, strpos($href, '?'));
			}
			$deals_on_page[strlen($href)] = 'http://www.groupon.com'.$href;
		}
		
		if (strstr($a->attr['href'], '/deals/categories/') 
		&& !strstr($a->attr['href'], 'http://')
		) {
			$categories[$a->attr['href']] = 'http://www.groupon.com'.$a->attr['href'];
		}
	//	vdump($a->attr['id']);
	//	vdump($a);
	//	exit;
	}
	
	$deal['deal_deadline'] = trim($hdom->find('#deal_deadline', 0)->attr['data-value']);
	
	if (strlen($deal['deal_deadline']) != 0) {
	// we got ourselves a deal
	
		//$date = 'Mon Oct 18 06:59:00 UTC 2010';
		$objDate = new DateTime($deal['deal_deadline']);
		$deal['unix_deal_deadline'] = $objDate->format('U');

		$deal['deal_permalink'] = trim($hdom->find('#deal_permalink', 0)->attr['data-value']);
		$deal['deal_perma_url'] = 'http://www.groupon.com/deals/' . $deal['deal_permalink'];
		$deal['amount'] = ereg_replace('[^0-9.]', '', trim($hdom->find('#amount', 0)->innertext));
		
		if ($hdom->find('#deal_discount', 0)->find('.save', 0))
			$deal['discount'] = ereg_replace('[^0-9.]', '', trim($hdom->find('#deal_discount', 0)->find('.save', 0)->find('dd', 0)->innertext));

		$deal['value'] = $deal['amount'] + $deal['discount'];
		$deal['url'] = trim($hdom->find('.url', 0)->innertext);
		$deal['price'] = trim($hdom->find('.price', 0)->innertext);
		$deal['photo'] = trim($hdom->find('.photo', 0)->innertext);
		$deal['photo_small'] = str_replace('.jpg', '_sidedeal.jpg', $deal['photo']);
		$deal['photo_medium'] = str_replace('.jpg', '_sidebar.jpg', $deal['photo']);
		$deal['control_title'] = trim(strip_tags($hdom->find('.control_title', 0)->innertext));
		$deal['email_subject'] = trim(strip_tags($hdom->find('.email_subject', 0)->innertext));
		$deal['comment_number'] = ereg_replace('[^0-9]', '', trim(strip_tags($hdom->find('.comment_number', 0)->innertext)));
		$deal['discussion_url'] = 'http://www.groupon.com/deals/' . $deal['deal_permalink'] . '/posts';
		$deal['division_name'] = trim(strip_tags($hdom->find('.division_name', 0)->innertext));
		
		if (is_object($hdom->find('.pitch_content', 0))) {
			$strDesc = $hdom->find('.pitch_content', 0)->innertext;
//		if (is_object($hdom->find('.article', 0))) {
//			$strDesc = $hdom->find('.article', 0)->innertext;
			if (strpos($strDesc, '<h3>Reviews</h3>')) {
				$strDesc = substr($strDesc, 0, strpos($strDesc, '<h3>Reviews</h3>'));
			}
			if (strpos($strDesc, "<div class='btn_discussion_writeup_join")) {
				$strDesc = substr($strDesc, 0, strpos($strDesc, "<div class='btn_discussion_writeup_join"));
			}
			$deal['description'] = trim($strDesc);	
		}
		if (is_object($hdom->find('#number_sold_container', 0))) {
			$deal['number_sold'] = ereg_replace('[^0-9]', '', trim($hdom->find('#number_sold_container', 0)->find('.number', 0)->innertext));
			$deal['tipped_at'] = trim($hdom->find('#number_sold_container', 0)->find('.tipping', 0)->innertext);
		}
		
		$deal['website'] = trim($hdom->find('.E-Company_linkout_Location', 0)->attr['href']);
		$deal['company_name'] = trim($hdom->find('.vcard', 0)->find('.fn', 0)->innertext);
		
		if (is_object($hdom->find('.vcard', 0)->find('.location_note', 0))) {
			$deal['location_note'] = trim($hdom->find('.vcard', 0)->find('.location_note', 0)->innertext);
		}
		if (strlen($deal['website']) && (strpos($deal['location_note'], 'online') || strpos($deal['location_note'], 'telephone'))) {
			$deal['is_online'] = true;
		}
		if (is_object($hdom->find('.vcard', 0)->find('.adr', 0))) {
			$adrCount = 0;
			foreach ($hdom->find('.vcard', 0)->find('.adr') as $adrDom) {
				/* @var $adrDom simple_html_dom */
				/* @var $liDom simple_html_dom */
				
				$isStreetAddressDisplayed = false;
				$isLocalityDisplayed = false;
				foreach ($adrDom->find('li') as $liDom) {
					if (!$isLocalityDisplayed && !$isStreetAddressDisplayed && $liDom->attr['class'] == '') {
						$deal['adr'][$adrCount]['location_name'] = trim($liDom->innertext);
					}
					if ($liDom->attr['class'] == 'street-address') {
						$deal['adr'][$adrCount]['addressline1'] = trim($liDom->innertext);
						$isStreetAddressDisplayed = true;
					}
					if ($isStreetAddressDisplayed && !$isLocalityDisplayed && $liDom->attr['class'] == '') {
						$deal['adr'][$adrCount]['addressline2'] = trim($liDom->innertext);
					}
					if ($liDom->attr['class'] == 'locality') {
						$deal['adr'][$adrCount]['locality'] = trim($liDom->innertext);
						$arrLocality = explode(' ', trim($liDom->innertext));
						$deal['adr'][$adrCount]['zipcode'] = $arrLocality[count($arrLocality)-1];
						$isLocalityDisplayed = true;
					}
					if ($isStreetAddressDisplayed && $isLocalityDisplayed && $liDom->attr['class'] == '' && strlen(trim($liDom->innertext)) < 20) {
						$deal['adr'][$adrCount]['telephone'] = trim($liDom->innertext);
					}
				}
				
				$adrCount++;
			}
		}
		
		foreach ($hdom->find('.fine_print', 0)->find('li') as $uls) {
			if(trim(strip_tags($uls->innertext)) == 'See the rules that apply to all deals.') {
				// their default fine print spiel
				continue;
			}
			$deal['fine_print'][] = trim($uls->innertext);
		}
		
		foreach ($hdom->find('.highlights', 0)->find('li') as $uls) {
			$deal['highlights'][] = trim($uls->innertext);
		}
		
		if ((int)$deal['comment_number'] > 0) {
			
			// SET URL
			curl_setopt($ch, CURLOPT_URL, $deal['discussion_url']);
			curl_setopt($ch, CURLOPT_REFERER, $url);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
			curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
			
			# Setting CURLOPT_RETURNTRANSFER variable to 1 will force cURL
			# not to print out the results of its query.
			# Instead, it will return the results as a string return value
			# from curl_exec() instead of the usual true/false.
			curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
			
			write_app_log("requesting comment page...\n");
			// EXECUTE 1st REQUEST
			$data = curl_exec ($ch);
			write_app_log("done.\n");
			
			/* @var $cdom simple_html_dom */
			$cdom = str_get_html($data);
			
			if (is_object($cdom->find('.discussion', 0))) {
				foreach ($cdom->find('.discussion', 0)->find('.comment') as $com) {
					$idx = trim($com->find('a', 0)->attr['name']);
					
					if (!strlen($idx)) {
						continue;
					}
					
					$comments[$idx]['author'] = trim(strip_tags($com->find('.author', 0)->innertext));

					$comments[$idx]['timestamp'] = strip_tags($com->find('.timestamp', 0)->innertext);
					$comments[$idx]['timestamp'] = str_replace('commented', '', $comments[$idx]['timestamp']);
					$comments[$idx]['timestamp'] = str_replace('and', '', $comments[$idx]['timestamp']);
					$objDate = new DateTime($comments[$idx]['timestamp']);
					$comments[$idx]['unix_timestamp'] = $objDate->format('U');
					
					$comments[$idx]['body'] = trim(strip_tags($com->find('.body', 0)->innertext));
					$comments[$idx]['unique_id'] = $idx;
					
					// if strip_tags(author) == '', they're fb users
					if (!strlen($comments[$idx]['author'])) {
						$comments[$idx]['author'] = 'FaceBook User';
						$comments[$idx]['email'] = trim($com->find('fb:name', 0)->attr['uid']. '@facebook.com');
					} else {
						$comments[$idx]['email'] = trim($comments[$idx]['author'] . '@groupon.com');
					}
				}
			} else {
				$deal['comments_not_found'] = true;
			}
		}
	} else {
		// no deal deadline... 
		write_app_log("no deal deadline.\n");
	}
	$deal['comments'] = $comments;
	
	$hdom = null;
	$cdom = null;
	
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
		
	return array(
	  'deal'=>$deal
	, 'deals_on_page'=>$deals_on_page
	, 'categories'=>$categories
	, 'regions'=>$regions
	);
}

function save_deal_from_array($data) {
	try {
		DealFeedPeer::saveDealFromArray($data['deal'], FALSE);
	} catch (Exception $e) {
		vdump($e->getMessage());
		vdump($data['deal']);
		exit;
	}
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
	
	$data = get_groupon_data($url);
	if ($data) {
		save_deal_from_array($data);
	}
	
	foreach ($data['deals_on_page'] as $dealUrl) {
		$arrDealUrl = get_groupon_data($dealUrl);
		if ($arrDealUrl) {
			save_deal_from_array($arrDealUrl);
			save_groupon_categories($arrDealUrl['categories']);
			
			foreach ($arrDealUrl['deals_on_page'] as $dealUrl_1) {
				$arrDealUrl_1 = get_groupon_data($dealUrl_1);
				if ($arrDealUrl_1) {
					save_deal_from_array($arrDealUrl_1);
				}
			}
		}
	}
	
} else {
	$url = 'http://www.groupon.com/deals/katzen-eye-baltimore';
//	$url = 'http://www.groupon.com/deals/invisalign-promotion-houston'; // many locations
//	$url = 'http://www.groupon.com/edmonton/';
//	$url = 'http://www.groupon.com/deals/back-to-basics-health-and-wellness-orange-county';

	$data = get_groupon_data($url, TRUE);	
	
	if($data) {
		save_deal_from_array($data);
	
		foreach ($data['deals_on_page'] as $dealUrl) {
			$arrDealUrl = get_groupon_data($dealUrl);
			if ($arrDealUrl) {
				save_deal_from_array($arrDealUrl);
				save_groupon_categories($data['categories']);
			}
		}
		save_groupon_categories($data['categories']);
		shuffle($data['regions']);
	
		// INIT CURL
		$ch = curl_init();
		
		foreach ($data['regions'] as $regionUrl) {
			// pass region to another script
			$url = 'http://dailyfeed.lify.us/events-parse_groupon.htm?getUrl='. urlencode($regionUrl);
	
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
			
			$sleep = rand(1, 15);
			write_app_log(" ... sleep ".$sleep." ...\n");
			sleep($sleep);
		}
	}
}


//foreach ($data['categories'] as $category) {
//	$arr = get_groupon_data($category);
//	foreach ($arr['deals_on_page'] as $deal) {
//		$arrDeal = get_groupon_data($deal);
//		DealFeedPeer::saveDealFromArray($arrDeal['deal']);
//		
//		foreach ($arrDeal['deals_on_page'] as $newdeal) {
//			$arrNewdeal = get_groupon_data($newdeal);
//			DealFeedPeer::saveDealFromArray($arrNewdeal['deal']);
//		}
//		break(2);
//	}
//}


vdump($data['deal']);
vdump($data['deals_on_page']);
vdump($data['categories']);
vdump($data['regions']);

write_app_log("quitting script.\n");
exit;

