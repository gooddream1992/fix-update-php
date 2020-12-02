<?php

if(!function_exists("get_buywithme_data")) {

	function get_buywithme_data($url, $force=FALSE, $unitTest=FALSE) {
		global $fp;
		global $dealnumber;
		global $arrDoneDeals;
	//	ini_set('memory_limit', memory_get_usage() + 20000000);
		
		// 'http://buywithme.com/la/deals/permalink'
		if (strstr($url, '/deals/') // contains a deal
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
		curl_setopt($ch, CURLOPT_REFERER, 'http://www.buywithme.com/la/deals');
		curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.10) Gecko/20100914 Firefox/3.6.10');
		curl_setopt($ch, CURLOPT_COOKIE, 'location=boston;');
		
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
//			'deals2inbox.com',
		);
		$deal['deal_source_name'] = 'BuyWithMe.com';
		$regions = array();
	
//	$deal["deal_deadline"] = 'error';
//	$deal["unix_deal_deadline"] = 'error';
//	$deal["deal_permalink"] = 'error';
//	$deal["deal_perma_url"] = 'error';
//	$deal["amount"] = 'error';
//	$deal["discount"] = 'error';
//	$deal["value"] = 'error';
//	$deal["url"] = 'error';
//	$deal["price"] = 'error';
//	$deal["photo"] = 'error';
//	$deal["photo_small"] = 'error';
//	$deal["photo_medium"] = 'error';
//	$deal["control_title"] = 'error';
//	$deal["email_subject"] = 'error';
//	$deal["comment_number"] = 'error';
//	$deal["discussion_url"] = 'error';
//	$deal["division_name"] = 'error';
//	$deal["description"] = 'error';
//	$deal["number_sold"] = 'error';
//	$deal["tipped_at"] = 'error';
//	$deal["website"] = 'error';
//	$deal["company_name"] = 'error';
//	$deal["fine_print"] = array('error');
//	$deal["highlights"] = array('error');
//	$deal["comments"] = array(
//		"unique_id" =>   array(
//			"author" =>'error',
//			"timestamp" => 'error',
//			"unix_timestamp" => 'error',
//			"body" => 'error',
//			"unique_id" => 'error',
//			"email" => 'error',
//		)
//	);
//	$deal["adr"] = array(
//		0 => array(
//			"location_name" => 'error',
//			"addressline1" => 'error',
//			"addressline2" => 'error',
//			"locality" => 'error',
//			"telephone" => 'error',
//			"zipcode" => 'error',
//		)
//	);
		// find regions/cities/divisoins
		if ($hdom->find('#city_list', 0)) {
		
			foreach ($hdom->find('#city_list', 0)->find('a') as $a) {
				
				if (1
				&& strlen($a->attr['href']) - strlen(str_replace('/', '', $a->attr['href'])) == 3 // only 3 slash(es) in href
				&& strstr($a->attr['href'], 'http://') // contains 'http'
				) {
					$regions[md5($a->attr['href'])] = $a->attr['href'].'/deals/';
				}
			}
		}
		
		foreach ($hdom->find('a') as $a) {
			
			if (strstr($a->attr['href'], '/deals/') 
			&& strlen($a->attr['href']) - strlen(str_replace('/', '', $a->attr['href'])) == 5 // only 5 slash(es) in href
			&& strstr($a->attr['href'], 'http://')
			) {
				$href = $a->attr['href'];
				// strip query string off
				if (strpos($href, '?')) {
					$href = substr($href, 0, strpos($href, '?'));
				}
				if (strpos($href, 'our_favorites')) {
					// one-off case. looks like a deal, but isn't: 
					// /deals/how_it_works
					// http://www.buywithme.com/la/deals/our_favorites
					continue;
				}
				$deals_on_page[md5($href)] = $href;
			}
		}
		
		$deal['deal_deadline'] = 0;
		
		if ($hdom->find('.timer', 0) && count($hdom->find('.timer')) == 1) {
			$deal['deal_deadline'] = $hdom->find('.timer', 0)->attr['title'];
		}
		
		if (strlen($deal['deal_deadline']) > 1 || $unitTest) {
		// we got ourselves a deal
		
			if (!$unitTest) {
				//doesn't work: '02 Dec, 2010 07:59 AM UTC', 
				//so convert to format: 'Mon Oct 18 06:59:00 UTC 2010'
				$deal_deadline = preg_replace(
					"/(\\d+) (\\w+), (\\d+) (\\d+):(\\d+) (\\w+) (\\w+)/", 
					"\\2 \\1 \\4:\\5:00 \\6 \\7 \\3", $deal['deal_deadline']);
				$objDate = new DateTime($deal_deadline);
				$deal['unix_deal_deadline'] = $objDate->format('U');
			}
			
			/*
			 * @todo: deal_permalink and deal_perma_url should be retrieved from page html
			 */
			$deal['deal_permalink'] = preg_replace("/http:\\/\\/(.*)\\/deals\\/(.*)/", "\\2", $url);
			$deal['deal_perma_url'] = $url;
			
			// single option senario
			if ($hdom->find('#main_price_text')) {
				$deal['amount'] = trim(preg_replace("/[^0-9.]/", '', $hdom->find('#main_price_text', 0)->innertext));
			}
			if ($hdom->find('#value_display')) {
				$deal['value'] = preg_replace("/[^0-9.]/", '', $hdom->find('#value_display', 0)->find('div', 0)->innertext);
				$deal['discount_percentage'] = preg_replace("/[^0-9.]/", '', $hdom->find('#value_display', 0)->find('div', 1)->innertext);
				$deal['discount'] = preg_replace("/[^0-9.]/", '', $hdom->find('#value_display', 0)->find('div', 2)->innertext);
			}
			
			// multi-option senario
			if ($hdom->find('.pack_price')) {
				$deal['amount'] = preg_replace("/[^0-9.]/", "", strip_tags($hdom->find('.pack_price', 0)->innertext));
//				$strPackvalue = "Discount: 50%, Savings: $198"
				$strPackvalue = $hdom->find('.pack_value', 0)->innertext;
				$arrPv = explode(',', $strPackvalue);
				$deal['discount_percentage'] = preg_replace("/[^0-9.]/", '', $arrPv[0]);
				$deal['discount'] = preg_replace("/[^0-9.]/", '', $arrPv[1]);
				$deal['value'] = $deal['amount'] + $deal['discount'];
			}
			
			/*
			 * @todo: url should be retrieved from page html
			 */
			$deal['url'] = $url;
			// alias... who knows why
			$deal['price'] = $deal['amount'];
			
			// /system/images/deals/2637/deal_Gregory_Robins_Family_Dentistry_discount_coupon.jpg?1290524460
			// /system/images/deals/2637/carousel_Gregory_Robins_Family_Dentistry_discount_coupon.jpg?1290524460
			// /system/images/deals/2637/thumbnail_Gregory_Robins_Family_Dentistry_discount_coupon.jpg?1290524460
			
			$deal['photo'] = 'http://www.buywithme.com'.trim($hdom->find('#main_asset', 0)->attr['src']);
			// strip query string off
			if (strpos($deal['photo'], '?')) {
				$deal['photo'] = substr($deal['photo'], 0, strpos($deal['photo'], '?'));
			}
			$deal['photo_medium'] = str_replace('/deal_', '/carousel_', $deal['photo']);
			$deal['photo_small'] = str_replace('/deal_', '/thumbnail_', $deal['photo']);
			
			if (strlen(trim($hdom->find('#main_asset', 0)->attr['title']))) {
				$deal['control_title'] = trim($hdom->find('#main_asset', 0)->attr['title']);
			} elseif (strlen(trim($hdom->find('#deal_content', 0)->find('h1', 0)->innertext))) {
				$deal['control_title'] = trim($hdom->find('#deal_content', 0)->find('h1', 0)->innertext);
			}
			$deal['email_subject'] = trim($hdom->find('#main_asset', 0)->attr['alt']);
			$deal['control_title'] = trim($deal['control_title'], '.');
			$deal['email_subject'] = trim($deal['email_subject'], '.');
			
			if ($hdom->find('.dropdown_selector', 0)) {
				$deal['division_name'] = trim($hdom->find('.dropdown_selector', 0)->innertext);
				// strip everything after (and including) '<'
				$deal['division_name'] = preg_replace("/([^&]+).*/", "\\1", $deal['division_name']);
			}
			
			if (strlen(trim($hdom->find('#full_description', 0)->innertext))) {
				$deal['description'] = trim($hdom->find('#full_description', 0)->innertext);
			}
			if (!strlen($deal['description'])) {
				$deal['description'] = trim($hdom->find('#short_description', 0)->innertext);
			}
			if (strlen($deal['description'])) {
//				$deal['description'] = preg_replace('<p class="link"></p>', '', $deal['description']);
//				$deal['description'] = trim($deal['description']);
				// add surrounding p, if needed
				if (substr($deal['description'], 0, 2) != '<p') {
					$deal['description'] = '<p>'.$deal['description'].'</p>';
				}
			}
			
			$deal['number_sold'] = 0; // not displayed anywhere on site
	//		if (is_object($hdom->find('.purchased', 0))) {
	//			$deal['number_sold'] = ereg_replace('[^0-9]', '', trim($hdom->find('.purchased', 0)->find('.value', 0)->innertext));
	//		}
			
			
			if (is_object($hdom->find('#dealSpot', 0))) {
				if ($hdom->find('#dealSpot', 0)->find('em', 0)) {
					$deal['company_name'] = trim(strip_tags($hdom->find('#dealSpot', 0)->find('em', 0)->innertext));
				}
				$strDealSpot = $hdom->find('#dealSpot', 0)->innertext;
				if (strpos($strDealSpot, '<br>')) {
					$deal['location_note'] = strip_tags(strstr($strDealSpot, '<br>'));
					
					if (str_replace('http://', '', $deal['location_note']) != $deal['location_note']) {
						$deal['is_online'] == true;
					}
					if (str_replace('online', '', $deal['location_note']) != $deal['location_note']) {
						$deal['is_online'] == true;
					}
				}
				
				$adrCount = 0;
				foreach ($hdom->find('#dealSpot', 0)->find('li') as $adrDom) {
					/* @var $adrDom simple_html_dom */
					$strAddress = trim($adrDom->innertext);
					// strip everything after (and including) '<'
					$strAddress = preg_replace("/([^<]+).*/", "\\1", $strAddress);
					
					$result = google_geocode($strAddress);
					
	//				vdump($result->formatted_address);
	//				vdump($result->address_components);
	//				vdump($result->geometry->location);
		
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
	//				$deal['adr'][$adrCount]['addressline2'] = trim($adrDom->find('.street_2', 0)->innertext);
	//				$deal['adr'][$adrCount]['telephone'] = trim($adrDom->find('.phone', 0)->innertext);
					
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
			}
	
			if ($hdom->find('#dealDesc')) {
				
				foreach ($hdom->find('#dealDesc', 0)->find('li') as $liDom) {
					$strValue = $liDom->innertext;
					
					// must start with space
					if ($strValue{0} != ' ') {
						continue;
					}
					if (strpos($strValue, 'ther conditions apply')) {
						// their default fine print spiel??
						continue;
					}
					$deal['fine_print'][] = trim($strValue);
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
}