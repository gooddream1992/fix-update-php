<?php

if(!function_exists("get_livingsocial_data")) {
	
function get_livingsocial_data($url, $force=FALSE, $unitTest=FALSE, $arrThisItem=array()) {
	global $fp;
	global $dealnumber;
	global $arrDoneDeals;
//	ini_set('memory_limit', memory_get_usage() + 20000000);
	
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
		'4realcheap.com',
//		'deals2inbox.com',
	);
	$deal['deal_source_name'] = 'LivingSocial.com';
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
//$deal["website"] = 'error';
//$deal["company_name"] = 'error';
//$deal["fine_print"] = array('error');
//$deal["highlights"] = array('error');
//$deal["comments"] = array(
//	"unique_id" =>   array(
//		"author" =>'error',
//		"timestamp" => 'error',
//		"unix_timestamp" => 'error',
//		"body" => 'error',
//		"unique_id" => 'error',
//		"email" => 'error',
//	)
//);
//$deal["adr"] = array(
//	0 => array(
//		"location_name" => 'error',
//		"addressline1" => 'error',
//		"addressline2" => 'error',
//		"locality" => 'error',
//		"telephone" => 'error',
//		"zipcode" => 'error',
//	)
//);
	
	// 'http://livingsocial.com/deals/permalink'
	if (strstr($url, '/deals/') // contains a deal
	&& strlen($url) - strlen(str_replace('/', '', $url)) < 5 // only 4 slash(es) in href
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
	$dPreferredCity = 0;
	if (strpos($url, '/cities/')) {
		$dPreferredCity = (int)preg_replace("/[^0-9]/", "", $url);
		write_app_log("processing city page... ".$url.", city_id: ".$dPreferredCity."\n");
		$url = 'http://livingsocial.com/cities';
	}
	if ($dPreferredCity < 1) {
		$dPreferredCity = 60; // orange county = 60
	}
	
	// INIT CURL
	$ch = curl_init();
	
	// SET URL
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
	curl_setopt($ch, CURLOPT_REFERER, 'http://livingsocial.com/cities');
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.10) Gecko/20100914 Firefox/3.6.10');
	curl_setopt($ch, CURLOPT_COOKIE, 'seen-roadblock=1; preferred_city='.$dPreferredCity.'; _session=e19dde73037161d90d1ba64ce6fdbd15; vanity_id=99883eb3827b339450dfa9454b896b0d; msdc_for_30243=33;');
	
	# Setting CURLOPT_RETURNTRANSFER variable to 1 will force cURL
	# not to print out the results of its query.
	# Instead, it will return the results as a string return value
	# from curl_exec() instead of the usual true/false.
	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
	
	write_app_log("requesting deal page... ".$url."\n");
	// EXECUTE 1st REQUEST
	$data = curl_exec ($ch);
	write_app_log("done requesting page.\n");
	
	/* @var $hdom simple_html_dom */
	$hdom = str_get_html($data);
	
	foreach ($hdom->find('a') as $a) {
		
		if (strstr($a->attr['href'], '/deals/') 
		&& strlen($a->attr['href']) - strlen(str_replace('/', '', $a->attr['href'])) < 3 // only 2 slash(es) in href
		&& !strstr($a->attr['href'], 'http://')
		) {
			$href = $a->attr['href'];
			if (strpos($href, '?')) {
				$href = substr($href, 0, strpos($href, '?'));
			}
			if (strpos($href, 'how_it_works')) {
				// one-off case. looks like a deal, but isn't: /deals/how_it_works
				continue;
			}
			$deals_on_page[md5($href)] = 'http://livingsocial.com'.$href;
		}
		
		if (strstr($a->attr['href'], '/cities/') 
		&& strlen($a->attr['href']) - strlen(str_replace('/', '', $a->attr['href'])) < 3 // only 2 slash(es) in href
		&& !strstr($a->attr['href'], 'http://')
		) {
			$regions[md5($a->attr['href'])] = 'http://livingsocial.com'.$a->attr['href'];
		}
	}
	
	if ($hdom->find('#countdown', 0)) {
		$arrNumPositions = array(0=>'hours', 1=>'minutes', 2=>'seconds');
		$counterCountdownDoms = 0;
		$strCountdown = '';
		foreach ($hdom->find('#countdown', 0)->find('.num') as $domNum) {
			$strCountdown .= $domNum->innertext.' '.$arrNumPositions[$counterCountdownDoms].' ';
			$counterCountdownDoms++;
		}
		$deal['deal_deadline'] = $strCountdown;
	}
	if ($deal['deal_deadline'] == '-- hours -- minutes -- seconds ') {
		$deal['deal_deadline'] = '';
	}
	
	if (count($arrThisItem)) {
//		  ["offer_ends_at"]=>
		$deal['deal_deadline'] = $arrThisItem['offer_ends_at'];
	}
	
	if (strlen($deal['deal_deadline']) != 0 || $unitTest) {
	// we got ourselves a deal
		
		if (!$unitTest) {
			//$date = 'Mon Oct 18 06:59:00 UTC 2010'; ... 
			$objDate = new DateTime($deal['deal_deadline']);
			$deal['unix_deal_deadline'] = $objDate->format('U');
		}
		
		/*
		 * @todo: deal_permalink and deal_perma_url should be retrieved from page html
		 */
		$deal['deal_permalink'] = str_replace('http://livingsocial.com/deals/', '', $url);
		$deal['deal_perma_url'] = $url;
		$deal['amount'] = trim(preg_replace("/[^0-9.]/", '', $hdom->find('.deal-price', 0)->innertext));
		
		if ($hdom->find('.deal-info', 0)->find('.value', 0))
			$deal['discount_percentage'] = preg_replace("/[^0-9.]/", '', $hdom->find('.deal-info', 0)->find('.value', 0)->innertext);

		if ($deal['discount_percentage'] != 100)
			$deal['value'] = $deal['amount']*100 / (100-$deal['discount_percentage']);
			
		if ($deal['value'] > 0)
			$deal['discount'] = $deal['value'] - $deal['amount'];
	
		/*
		 * @todo: url should be retrieved from page html
		 */
		$deal['url'] = $url;
		$deal['price'] = $deal['amount'];
		
		foreach ($hdom->find('link') as $domLink) {
			if ($domLink->attr['rel'] == 'image_src') {
				$strPhotoBase = trim($domLink->attr['href']);
				$strPhotoBase = explode('/', $strPhotoBase);
				array_pop($strPhotoBase);
				$strPhotoBase = implode('/', $strPhotoBase);
				$deal['photo'] = $strPhotoBase . '/280_q60.jpg'; // 280px, 60% quality, jpg format (livingsocial's nice little image maker)
				$deal['photo_medium'] = $strPhotoBase . '/200_q60.jpg'; // 200px, 60% quality, jpg format (livingsocial's nice little image maker)
				$deal['photo_small'] = $strPhotoBase . '/124_q60.jpg'; // 280px, 60% quality, jpg format (livingsocial's nice little image maker)
			}
		}
		
		$deal['control_title'] = trim(strip_tags($hdom->find('.deal-title', 0)->find('p', 0)->innertext));
//		if ($deal['control_title'] == 'A Little Something Bakery' || $deal['control_title'] == 'One Dozen Cupcakes') {
//			vdump($deal);
//			vdump($data);
//			exit;
//		}

		$deal['email_subject'] = $hdom->find('title', 0)->innertext;
		$deal['email_subject'] = substr($deal['email_subject'], strpos($deal['email_subject'], '-')+1, strlen($deal['email_subject'])); // get everything after -
		$deal['email_subject'] = trim($deal['email_subject']);

		$deal['division_name'] = trim($hdom->find('.market', 0)->innertext);
		
		if (!is_object($hdom->find('.deal-description', 0)) ) {
			// no description
			write_app_log("no description... quitting.\n");
			return NULL;
		}
		if (is_object($hdom->find('#sfwt_full_1', 0)) ) {
			$deal['description'] = trim($hdom->find('#sfwt_full_1', 0)->find('p', 0)->innertext);
		} else {
			$deal['description'] = trim($hdom->find('.deal-description', 0)->find('p', 0)->innertext);
		}
		
		if (substr($deal['description'], 0, 3) != '<p>') {
			$deal['description'] = '<p>'.$deal['description'].'</p>';
		}
		
		if (is_object($hdom->find('.purchased', 0))) {
			$deal['number_sold'] = preg_replace("/[^0-9.]/", '', trim($hdom->find('.purchased', 0)->find('.value', 0)->innertext));
		}
		
		$deal['company_name'] = trim(strip_tags($hdom->find('.deal-title', 0)->find('h1', 0)->innertext));
		
		// find out if company_name/control_title are reversed
		$page_title = trim($hdom->find('title', 0)->innertext);
		if (str_replace($deal['company_name'], '', $page_title) != $page_title) {
			// company_name IS in title (not good), reverse
			$company_name = $deal['control_title'];
			$control_title = $deal['company_name'];
			$deal['control_title'] = $control_title;
			$deal['company_name'] = $company_name;
		}
		
		if (is_object($hdom->find('.addresses', 0))) {
			$adrCount = 0;
			foreach ($hdom->find('.addresses', 0)->find('.address') as $adrDom) {
				/* @var $adrDiv simple_html_dom */
				/* @var $adrDom simple_html_dom */
//				$adrDom = $adrDiv->find('.coly', 1); // get second instance of class coly
//				vdump($adrDom->innertext);
//				exit;
				
				$deal['adr'][$adrCount]['addressline1'] = trim($adrDom->find('.street_1', 0)->innertext);
				$deal['adr'][$adrCount]['addressline2'] = trim($adrDom->find('.street_2', 0)->innertext);
				$deal['adr'][$adrCount]['telephone'] = trim($adrDom->find('.phone', 0)->innertext, ' |');
				
				$strLocality = $adrDom->innertext;
				$strLocality = str_replace($adrDom->find('.street_1', 0)->innertext, '', $strLocality); // remove address line 1
				$strLocality = str_replace($adrDom->find('.street_2', 0)->innertext, '', $strLocality); // remove address line 2
				$strLocality = str_replace($adrDom->find('.phone', 0)->innertext, '', $strLocality); // remove telephone
				$strLocality = str_replace($adrDom->find('.directions', 0)->innertext, '', $strLocality); // remove directions link
				$strLocality = strip_tags($strLocality);
				$strLocality = str_replace('&nbsp;', ' ', $strLocality);
				
				$deal['adr'][$adrCount]['locality'] = trim($strLocality);
				$arrLocality = explode(' ', trim($strLocality));
				$deal['adr'][$adrCount]['zipcode'] = $arrLocality[count($arrLocality)-1];
				
				$adrCount++;
			}
		}
	
		$strFinePrint = $hdom->find('.fine-print', 0)->find('p', 0)->innertext;
		$strFinePrint = strip_tags($strFinePrint);
		$arrFinePrint = explode('•', $strFinePrint);
		foreach ($arrFinePrint as $strValue) {
			if (strpos($strValue, 'ther conditions apply')) {
				// their default fine print spiel
				continue;
			}
			$deal['fine_print'][] = trim($strValue);
		}
	
		// $arrThisItem from rss feed
		if (count($arrThisItem)) {
			
	//		  ["link"]=>
	
			
	//		  ["division_name"]=>
			$deal['division_name'] = $arrThisItem['division_name'];
			
	//		  ["title"]=>
			$deal['control_title'] = $arrThisItem['title'];
			
	//		  ["subtitle"]=>
			$deal['email_subject'] = $arrThisItem['subtitle'];
			
	//		  ["offer_ends_at"]=>
			$deal['deal_deadline'] = $arrThisItem['offer_ends_at'];
			
	//		  ["price"]=>
			$deal['price'] = $arrThisItem['price'];
			$deal['amount'] = $arrThisItem['price'];
			
	//		  ["value"]=>
			$deal['value'] = $arrThisItem['value'];
			$deal['discount'] = $deal['value'] - $deal['price'];
			
	//		  ["savings"]=> (percent)
			$deal['discount_percentage'] = $arrThisItem['savings'];
			
	//		  ["orders_count"]=>
//			$deal['number_sold'] = $arrThisItem['orders_count'];
			
	//		  ["merchant_name"]=>
			$deal['company_name'] = $arrThisItem['merchant_name'];
			
	//		  ["sold_out"]=>
	//		$deal['deal_deadline'] = $arrThisItem['sold_out'];
			
	//		  ["national"]=>
			$deal['is_online'] = $arrThisItem['national'];
			
	//		  ["description"]=>
	//		$deal['deal_deadline'] = $arrThisItem['description'];
			
	//		  ["details"]=>
	//		$deal['deal_deadline'] = $arrThisItem['details'];
			
			foreach ($deal['adr'] as $adrKey => $aAdrValue) {
				
				foreach ($arrThisItem['adr'] as $rssAdrKey => $rssAAdrValue) {
					if ($aAdrValue['addressline1'] == $rssAAdrValue['address1']) {
						// addresses are the same... merge
						
						if (array_key_exists('address2', $rssAAdrValue) && strlen($rssAAdrValue['address2']))
							$deal['adr'][$adrKey]['addressline2'] = $rssAAdrValue['address2'];
							
						if (array_key_exists('city', $rssAAdrValue) && strlen($rssAAdrValue['city']))
							$deal['adr'][$adrKey]['city'] = $rssAAdrValue['city'];
						
						if (array_key_exists('state', $rssAAdrValue) && strlen($rssAAdrValue['state']))
							$deal['adr'][$adrKey]['state'] = $rssAAdrValue['state'];
						
						if (array_key_exists('zip', $rssAAdrValue) && strlen($rssAAdrValue['zip']))
							$deal['adr'][$adrKey]['zipcode'] = $rssAAdrValue['zip'];
						
						if (array_key_exists('country', $rssAAdrValue) && strlen($rssAAdrValue['country']))
							$deal['adr'][$adrKey]['country'] = $rssAAdrValue['country'];
						
						if (array_key_exists('telephone', $rssAAdrValue) && strlen($rssAAdrValue['telephone']))
							$deal['adr'][$adrKey]['telephone'] = $rssAAdrValue['telephone'];
						
						if (array_key_exists('latitude', $rssAAdrValue) && strlen($rssAAdrValue['latitude']))
							$deal['adr'][$adrKey]['lat'] = $rssAAdrValue['latitude'];
						
						if (array_key_exists('longitude', $rssAAdrValue) && strlen($rssAAdrValue['longitude']))
							$deal['adr'][$adrKey]['lng'] = $rssAAdrValue['longitude'];
						
					}
				}
			}
			
//		"location_name" => 'error',
//		"addressline1" => 'error',
//		"addressline2" => 'error',
//		"locality" => 'error',
//		"telephone" => 'error',
//		"zipcode" => 'error',
//		"lat" => 'error',
//		"lng" => 'error',
			
	//		  ["adr"]=>
	//		  array(2) {
	//		    [0]=>
	//		    array(7) {
	//		      ["address1"]=>
	//		      ["city"]=>
	//		      ["state"]=>
	//		      ["zip"]=>
	//		      ["country"]=>
	//		      ["latitude"]=>
	//		      ["longitude"]=>
	//		    }
			
		}
		
	} else {
		// no deal deadline... 
		write_app_log("no deal deadline.\n");
	}
	$deal['comments'] = array();
	
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
	, 'regions'=>$regions
	);
}
}