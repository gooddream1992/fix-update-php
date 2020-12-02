<?php

require_once 'komideals/User.php';
require_once 'komideals/DealFeedDetail.php';
require_once 'komideals/DealFeedHighlight.php';
require_once 'komideals/DealFeedThread.php';
require_once 'komideals/DealFeedLocation.php';
require_once 'komideals/DealFeedSource.php';
require_once 'komideals/Category.php';
require_once 'komideals/Zipcode.php';
require_once 'komideals/Business.php';
require_once 'komideals/DealFeedBlogPost.php';
require_once 'komideals/DealFeedDivision.php';
require_once 'xmlrpc/blogger.php';
require_once 'functions/simplehtmldom/simple_html_dom.php';
	
/**
 * Skeleton subclass for performing query and update operations on the 'deal_feed' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.komideals
 */
class DealFeedPeer extends BaseDealFeedPeer {

	public static function getGrouponData($url, $forceRegardlessOfLastModified=FALSE, $unitTest=FALSE) {
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
			write_app_log("SKIPPING deal page (already done this request). ".$url."\n");
			return false;
		}
		
		$arrDoneDeals[$url] = $url;
		$dealnumber++;
		
		$cookie = '';
		$cookie .= '_thepoint=66961b813a532b0271d34737dab2bcc1; ';
		$cookie .= '__utmz=44473723.1296869387.5.5.utmcsr=rvs|utmccn=4484184|utmcmd=afl; ';
		$cookie .= '__utma=44473723.29739883.1296202362.1296780863.1296869387.5; ';
		$cookie .= 'division=orange-county; ';
		$cookie .= 'adchemy_id=; ';
		$cookie .= 's=5a3b2728-5665-11e0-8984-005056950d32; ';
		$cookie .= 'subscriber_email=jody%40yahoo.com; ';
		$cookie .= 'opt_everyscape_v=2; ';
		$cookie .= 'opt_default=everyscape; ';
		$cookie .= 'visited=true; ';
		$cookie .= 'b=f50e9c08-27e9-11e0-8e4d-005056954da0; ';
		$cookie = trim($cookie);
		
		// INIT CURL
		$ch = curl_init();
		
		// SET URL
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
		curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
		curl_setopt($ch, CURLOPT_REFERER, 'http://www.groupon.com/orange-county/');
		curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.10) Gecko/20100914 Firefox/3.6.10');
		curl_setopt($ch, CURLOPT_COOKIE, $cookie);
//		curl_setopt($ch, CURLOPT_COOKIE, 'division=orange-county; b=6d5ab64a-ccd9-11df-a4b5-0050569554db; visited=true; subscriber_email=test%40test.com; _chartbeat2=35858kfz5h84nw1w; km_lv=x; km_ai=eulh1cwd7MTZWX%2FxlCZxKbYu1kA%3D; km_uq=; _thepoint=656f3a1d6bb27e73b97d8a80a6ffd418; optimizer_test=2164367096; adchemy_id=; close_subscribe_drawer=true; s=6d5ad562-ccd9-11df-a4b5-0050569554db');
		
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
		
//		$deal["deal_deadline"] = 'error';
//		$deal["unix_deal_deadline"] = 'error';
//		$deal["deal_permalink"] = 'error';
//		$deal["deal_perma_url"] = 'error';
//		$deal["amount"] = 'error';
//		$deal["discount"] = 'error';
//		$deal["value"] = 'error';
//		$deal["url"] = 'error';
//		$deal["price"] = 'error';
//		$deal["photo"] = 'error';
//		$deal["photo_small"] = 'error';
//		$deal["photo_medium"] = 'error';
//		$deal["control_title"] = 'error';
//		$deal["email_subject"] = 'error';
//		$deal["comment_number"] = 'error';
//		$deal["discussion_url"] = 'error';
//		$deal["division_name"] = 'error';
//		$deal["description"] = 'error';
//		$deal["number_sold"] = 'error';
//		$deal["tipped_at"] = 'error';
//		$deal["website"] = 'error';
//		$deal["company_name"] = 'error';
//		$deal["fine_print"] = array('error');
//		$deal["highlights"] = array('error');
//		$deal["comments"] = array(
//			"unique_id" =>   array(
//				"author" =>'error',
//				"timestamp" => 'error',
//				"unix_timestamp" => 'error',
//				"body" => 'error',
//				"unique_id" => 'error',
//				"email" => 'error',
//			)
//		);
//		$deal["adr"] = array(
//			0 => array(
//				"location_name" => 'error',
//				"addressline1" => 'error',
//				"addressline2" => 'error',
//				"locality" => 'error',
//				"telephone" => 'error',
//				"zipcode" => 'error',
//			)
//		);

		$deal['post_to_blogs'] = array(
			'grouponia.com', 
//			'dailycouponds.com',
//			'komidaily.com', 
//			'koreamdeals.com',
		);
//		$deal['post_to_blog_name'] = 'grouponia.com';
		$deal['deal_source_name'] = 'Groupon.com';
		$regions = array();
		
		foreach ($hdom->find('a') as $a) {
		//	vdump($a->attr);
		//	$a->attr['href'];
			if (stristr($a->attr['class'], 'E-Drawer_click_') 
			&& !stristr($a->attr['href'], 'http://')
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
		
		foreach ($hdom->find('.area') as $li) {
			$a = $li->find('a', 0);
			// sub areas/regions
			if (1
			&& strlen($a->attr['href']) - strlen(str_replace('/', '', $a->attr['href'])) == 4 // contains 4 '/' slashes
			&& !stristr($a->attr['href'], 'http://')
			) {
				$regions[] = 'http://www.groupon.com'.$a->attr['href'];
			}
		}
		
		$deal['deal_deadline'] = trim($hdom->find('#deal_deadline', 0)->attr['data-value']);
		
		if (strlen($deal['deal_deadline']) == 0) {
			// deal may have ended, find date ended:
//			vdump('deal ended');
			if ($hdom->find('#remaining_time_container', 0)) {
//				vdump('remaining_time_container');
				$liDoms = $hdom->find('#remaining_time_container', 0)->find('li');
				$strTimeEnd = $liDoms[1]->innertext;
				$strDateEnd = $liDoms[2]->innertext;
				$deal['deal_deadline'] = trim(sprintf("%s %s", $strDateEnd, $strTimeEnd));
			}
		}
		if (strlen($deal['deal_deadline']) == 0) {
			$deal['unix_deal_deadline'] = trim($hdom->find('.groupon_countdown', 0)->attr['data-deadline']);
			$deal['deal_deadline'] = date("Y-m-d H:i:s", $deal['unix_deal_deadline']);
		}
		
//		vdump($deal);
//		vdump($regions);
//		exit;
		
		if (strlen($deal['deal_deadline']) != 0) {
		// we got ourselves a deal
		
			if ($deal['unix_deal_deadline']) {
				// do nothing
			} elseif (trim($deal['deal_deadline']) == 'No deadline!') {
				$deal['unix_deal_deadline'] = time() + (86400);
			} else {
				//$date = 'Mon Oct 18 06:59:00 UTC 2010';
				$objDate = new DateTime($deal['deal_deadline']);
				$deal['unix_deal_deadline'] = $objDate->format('U');
			}
			$deal['date_from_unix_time'] = date("Y-m-d H:i:s", $deal['unix_deal_deadline']);
	
			$deal['deal_permalink'] = trim($hdom->find('#deal_permalink', 0)->attr['data-value']);
			$deal['deal_perma_url'] = 'http://www.groupon.com/deals/' . $deal['deal_permalink'];
			$deal['amount'] = preg_replace("/[^0-9.]/", '', trim($hdom->find('#amount', 0)->innertext));
			
			if ($hdom->find('#deal_discount', 0)->find('.save', 0))
				$deal['discount'] = preg_replace("/[^0-9.]/", '', trim($hdom->find('#deal_discount', 0)->find('.save', 0)->find('dd', 0)->innertext));
	
			$deal['value'] = $deal['amount'] + $deal['discount'];
			$deal['url'] = trim($hdom->find('.url', 0)->innertext);
			$deal['price'] = trim($hdom->find('.price', 0)->innertext);
			$deal['photo'] = trim($hdom->find('.photo', 0)->innertext);
			$deal['photo_small'] = preg_replace('/\.jpg$/', '_sidedeal.jpg', $deal['photo']);
			$deal['photo_medium'] = preg_replace('/\.jpg$/', '_sidebar.jpg', $deal['photo']);
			
//			$deal['control_title'] = trim(strip_tags($hdom->find('.control_title', 0)->innertext));
			
			foreach ($hdom->find('meta') as $metaDom) {
				if ($metaDom->attr['property'] == 'og:title') {
					$deal['control_title'] = $metaDom->attr['content'];
				}
			}
//			
//			if ($hdom->find('.control_title', 0) && $hdom->find('.control_title', 0)->find('.control_title', 0))
//				$deal['control_title'] = trim(strip_tags($hdom->find('.control_title', 0)->find('.control_title', 0)->innertext));
				
			$deal['email_subject'] = trim(strip_tags($hdom->find('.email_subject', 0)->innertext));
			$deal['comment_number'] = preg_replace("/[^0-9.]/", '', trim(strip_tags($hdom->find('.comment_number', 0)->innertext)));
			$deal['discussion_url'] = 'http://www.groupon.com/deals/' . $deal['deal_permalink'] . '/posts';
			$deal['division_name'] = trim(strip_tags($hdom->find('.division_name', 0)->innertext));
			
			// remove 'company name -- division_name' from title
//			if (is_object($hdom->find('.deal_subtitle', 0))) {
//				$subtitle = trim($hdom->find('.deal_subtitle', 0)->innertext);
//				$deal['control_title'] = trim(str_replace($subtitle, '', $deal['control_title']));
//			}
			
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
				if (!strpos($strDesc, '<p>')) {
					$strDesc = '<p>'.$strDesc.'</p>';
				}
				$deal['description'] = trim($strDesc);	
			}
			if (is_object($hdom->find('#number_sold_container', 0))) {
				$deal['number_sold'] = preg_replace("/[^0-9.]/", '', trim($hdom->find('#number_sold_container', 0)->find('.number', 0)->innertext));
				$deal['tipped_at'] = trim($hdom->find('#number_sold_container', 0)->find('.tipping', 0)->innertext);
			}
			
			$deal['website'] = trim($hdom->find('.E-Company_linkout_Location', 0)->attr['href']);
			$deal['company_name'] = trim($hdom->find('#company_box', 0)->find('.name', 0)->innertext);
			
			if (is_object($hdom->find('.location_note', 0))) {
				$deal['location_note'] = trim($hdom->find('.location_note', 0)->innertext);
			}
			if (strlen($deal['website']) && (strpos($deal['location_note'], 'online') || strpos($deal['location_note'], 'telephone'))) {
				$deal['is_online'] = true;
			}
			
			// new address loop...
			if (is_object($hdom->find('#deal_locations_container', 0))) {
				$adrCount = 0;
				foreach ($hdom->find('#deal_locations_container', 0)->find('li') as $adrDom) {
					/* @var $adrDom simple_html_dom */
					/* @var $liDom simple_html_dom */
					
					$deal['adr'][$adrCount]['lat'] = $adrDom->attr['data-lat'];
					$deal['adr'][$adrCount]['lng'] = $adrDom->attr['data-lng'];
					
					$strAddress = $adrDom->find('.address',0)->innertext;
					$strAddress = strip_tags($strAddress);
					$strAddress = str_replace('Get Directions', '', $strAddress);
					$strAddress = trim($strAddress);
					
					$result = google_geocode($strAddress);
					
					$arrAdr = array();
					foreach ((array) $result->address_components as $objAdrComp) {
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
					
					// locality: city, state zip
					$city = strlen($arrAdr['locality']->long_name)?$arrAdr['locality']->long_name:$arrAdr['sublocality']->long_name;
					$deal['adr'][$adrCount]['locality'] = sprintf("%s, %s %s"
						, $city
						, $arrAdr['administrative_area_level_1']->short_name
						, $arrAdr['postal_code']->long_name
						);
					$deal['adr'][$adrCount]['zipcode'] = $arrAdr['postal_code']->long_name;
					$deal['adr'][$adrCount]['google'] = $result;
					
					$adrCount++;
				}
			}
			
			if ($hdom->find('.fine_print', 0)) {
				foreach ($hdom->find('.fine_print', 0)->find('li') as $uls) {
					if(trim(strip_tags($uls->innertext)) == 'See the rules that apply to all deals.') {
						// their default fine print spiel
						continue;
					}
					$deal['fine_print'][] = trim($uls->innertext);
				}
			}
			
			if ($hdom->find('.highlights', 0)) {
				foreach ($hdom->find('.highlights', 0)->find('li') as $uls) {
					$deal['highlights'][] = trim($uls->innertext);
				}
			}
			
			// get comments page if comments and deal not expired
			if ((int)$deal['comment_number'] > 0 && $deal['unix_deal_deadline'] > time()) {
				
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
						
						// skip this comment advertising MyGrouponDiscount
						if (strpos($comments[$idx]['body'], 'MyGrouponDiscount')) { // MyGrouponDiscount
							unset($comments[$idx]);
							continue;
						}
						
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
	} // getGrouponData
	
	public static function saveDealFromArray($data, $bForceBlogUpdate = false) {
		write_app_log("saveDealFromArray: start\n");

//  ["post_to_blog_name"]=> string(13) "grouponia.com"
//  ["deal_source_name"]=> string(11) "groupon.com"
//  ["deal_deadline"]=>  string(28) "Tue Nov 02 03:59:00 UTC 2010"
//  ["unix_deal_deadline"]=>  string(10) "1288670340"
//  ["deal_permalink"]=>  string(23) "jekyll-hyde-the-musical"
//  ["deal_perma_url"]=>  string(52) "http://www.groupon.com/deals/jekyll-hyde-the-musical"
//  ["amount"]=>  string(2) "26" // example number only
//  ["discount"]=>  string(2) "36" // example number only
//  ["value"]=>  int(62) // example number only
//  ["price"]=>  string(3) "$26"
//  ["photo"]=>  string(81) "http://www.groupon.com/images/site_images/0223/5309/Jekyll-_-Hyde-The-Musical.jpg"
//  ["photo_small"]=>  string(90) "http://www.groupon.com/images/site_images/0223/5309/Jekyll-_-Hyde-The-Musical_sidedeal.jpg"
//  ["photo_medium"]=>  string(89) "http://www.groupon.com/images/site_images/0223/5309/Jekyll-_-Hyde-The-Musical_sidebar.jpg"
//  ["control_title"]=>  string(104) "$26 for One Ticket to 'Jekyll &amp; Hyde: The Musical' at Maguire Theater in Old Westbury ($52.20 value)"
//  ["email_subject"]=>  string(51) "Half Off Ticket to 'Jekyll &amp; Hyde: The Musical'"
//  ["comment_number"]=>  string(1) "4"
//  ["discussion_url"]=>  string(58) "http://www.groupon.com/deals/jekyll-hyde-the-musical/posts"
//  ["division_name"]=>  string(13) "New York City"
//  ["description"]=>  string(1050) "<p>Live theater offers all the thrill of going to the movies, without the alienation of the screen or the overwhelming despair of sticky floors. Submerge in stage-based spectacle with today's Groupon: for $26, you get one ticket to <a href="http://bit.ly/9GdWwd"><em>Jekyll &amp; Hyde: The Musical</em></a> at <a href="http://www.theatermania.com/long-island/theaters/maguire-theater-suny-old-westbury_9244/">Maguire Theater</a> in Old Westbury (a $52.20 value). Choose from the available dates and times listed in the sidebar. Robert Louis Stevenson's classic tale of good and evil gets a stunning stage update, complete with sets and costumes from Broadway, a full orchestra, and an outstanding cast. Watch as the noble Dr. Jekyll falls prey to the seductive lifestyle of his nefarious alter ego, lured by the promise of nocturnal trysts and repercussion-free jaywalking. Check out local <a href="http://bit.ly/bUPtzw">media</a> to hear snippets of the score, and see the show's <a href="http://bit.ly/aOtlrr">schedule</a> to plan your evening.</p>"
//  ["number_sold"]=>  string(2) "27"
//  ["tipped_at"]=>  string(60) "Tipped at 12:07PM with <span class="number">15</span> bought"
//  ["website"]=>  string(35) "http://jekyllandhydelongisland.com/"
//  ["company_name"]=>  string(25) "Jekyll & Hyde The Musical"
//  ["fine_print"]=>  
//  array(2) {
//    [0]=>    string(17) "Expiration varies"
//    [1]=>    string(135) "Valid only for date and time purchased. For group seating, purchase in 1 order and redeem at same time. Non-transferable. No cash back."
//  }
//  ["highlights"]=>  
//  array(3) {
//    [0]=>    string(26) "Professional New York cast"
//    [1]=>    string(26) "Original sets and costumes"
//    [2]=>    string(14) "Full orchestra"
//  }
//  ["comments"]=>  
//  array(4) {
//    ["c409518"]=>    array(6) {
//      ["author"]=>      string(14) "bendicionesmil"
//      ["timestamp"]=>      string(24) " 3 hours  44 minutes ago"
//      ["unix_timestamp"]=>      string(10) "1288624839"
//      ["body"]=>      string(191) "Hi! Just wanted to check if we can chose any seats or if this is for restricted seats. 
//                    Also, if I want to go with someone else, can I buy two or should I gift it? Thanks!"
//      ["unique_id"]=>      string(7) "c409518"
//      ["email"]=>      string(26) "bendicionesmil@groupon.com"
//    }
//  }
//  ["adr"]=>  
//  array(1) {
//    [0]=>    
//    array(4) {
//      ["location_name"]=>      string(19) "The Maguire Theater"
//      ["addressline1"]=>      string(15) "Route 107 North"
//      ["addressline2"]=>      string(?) "whatever"
//      ["locality"]=>      string(28) "Old Westbury, New York 11568"
//      ["telephone"]=>      string(28) "any format telephone"
//      ["zipcode"]=>      string(5) "11568"
//    }
//  }
/*
	example array:
	
$deal['post_to_blog_name'] = 'error.com';
$deal['deal_source_name'] = 'error';
$deal["deal_deadline"] = 'error';
$deal["unix_deal_deadline"] = 'error';
$deal["deal_permalink"] = 'error';
$deal["deal_perma_url"] = 'error';
$deal["amount"] = 'error';
$deal["discount"] = 'error';
$deal["value"] = 'error';
$deal["url"] = 'error';
$deal["price"] = 'error';
$deal["photo"] = 'error';
$deal["photo_small"] = 'error';
$deal["photo_medium"] = 'error';
$deal["control_title"] = 'error';
$deal["email_subject"] = 'error';
$deal["comment_number"] = 'error';
$deal["discussion_url"] = 'error';
$deal["division_name"] = 'error';
$deal["description"] = 'error';
$deal["number_sold"] = 'error';
$deal["tipped_at"] = 'error';
$deal["website"] = 'error';
$deal["company_name"] = 'error';
$deal["fine_print"] = array('error');
$deal["highlights"] = array('error');
$deal["is_online"] = array('error');
$deal["comments"] = array(
	"unique_id" =>   array(
		"author" =>'error',
		"timestamp" => 'error',
		"unix_timestamp" => 'error',
		"body" => 'error',
		"unique_id" => 'error',
		"email" => 'error',
	)
);
$deal["adr"] = array(
	0 => array(
		"location_name" => 'error',
		"addressline1" => 'error',
		"addressline2" => 'error',
		"locality" => 'error',
		"telephone" => 'error',
		"zipcode" => 'error',
		"lat" => 'error',
		"lng" => 'error',
	)
);
*/
	
		if (strlen($data["control_title"]) == 0 && strlen($data["email_subject"]) == 0) {
			write_app_log(" no control_title and no email_subject. one must be set. exiting.\n");
			return false;
		}
		$strBadChars = "’";
		$data["control_title"] = str_replace($strBadChars, "'", $data["control_title"]);
		$data["email_subject"] = str_replace($strBadChars, "'", $data["email_subject"]);
		$data["description"] = str_replace($strBadChars, "'", $data["description"]);
		
		$strBadChars = "“";
		$data["control_title"] = str_replace($strBadChars, "'", $data["control_title"]);
		$data["email_subject"] = str_replace($strBadChars, "'", $data["email_subject"]);
		$data["description"] = str_replace($strBadChars, "'", $data["description"]);
		$strBadChars = "”";
		
		$data["control_title"] = str_replace($strBadChars, "'", $data["control_title"]);
		$data["email_subject"] = str_replace($strBadChars, "'", $data["email_subject"]);
		$data["description"] = str_replace($strBadChars, "'", $data["description"]);
	
		$strBadChars = "“";
		$data["control_title"] = str_replace($strBadChars, "'", $data["control_title"]);
		$data["email_subject"] = str_replace($strBadChars, "'", $data["email_subject"]);
		$data["description"] = str_replace($strBadChars, "'", $data["description"]);
		
		$strBadChars = "”";
		$data["control_title"] = str_replace($strBadChars, "'", $data["control_title"]);
		$data["email_subject"] = str_replace($strBadChars, "'", $data["email_subject"]);
		$data["description"] = str_replace($strBadChars, "'", $data["description"]);
		
		$data["description"] = str_replace('<br><br>', '</p><p>', $data["description"]);
	
		$objDefaultCategory = CategoryQuery::create()->findPk(1);
		if (!$objDefaultCategory instanceof Category) {
			write_app_log(" No default category found. Critical error.\n");
			throw new Exception('No default category found. Critical error');
		}
		$objSourceGroupon = DealFeedSourceQuery::create()->filterByContent($data['deal_source_name'])->findOne();
		if (!$objSourceGroupon instanceof DealFeedSource) {
			write_app_log(" Deal source not found with provided name: ".$data['deal_source_name']."\n");
			return false;
		}
		$bIsNew = false;
		
		// deal has expired, etc.
		if (!strlen(trim($data['deal_permalink']))) {
			write_app_log(" NO PERMALINK. quitting\n");
			return false;
		}
		if (!strlen($data['deal_deadline']) || $data['unix_deal_deadline'] == 0) {
			write_app_log(" NO DEAL INFO. quitting\n");
			return false;
		}
		if ($data['unix_deal_deadline'] < time()) {
			write_app_log(" DEAL EXPIRED. quitting\n");
			return false;
		}
		
		write_app_log("processing deal... ".$data['deal_permalink']."\n");
		
		$objDealFeed = DealFeedQuery::create()->findOneByPermalink($data['deal_permalink']);
		if(!($objDealFeed instanceof DealFeed)) {
			// create new
			$bIsNew = true;
			write_app_log(" new deal...". $data['deal_permalink'] ."\n");
			$objDealFeed = new DealFeed();
			$objDealFeed->setCategory($objDefaultCategory);
			$objDealFeed->setDealFeedSource($objSourceGroupon);
			
			$objDealFeed->setDateStart(time());
			$objDealFeed->setDateEnd($data['unix_deal_deadline']);
			$objDealFeed->setPermalink($data['deal_permalink']);
			$objDealFeed->setClickUrl($data['deal_perma_url']);
			$objDealFeed->setPrice($data['amount']);
			$objDealFeed->setRetailValue($data['value']);
			$objDealFeed->setIsActive(1);
			$objDealFeed->setPhoto($data['photo']);
			$objDealFeed->setPhotoMedium($data['photo_medium']);
			$objDealFeed->setPhotoSmall($data['photo_small']);
			$objDealFeed->setDiscussionUrl($data['discussion_url']);
			$objDealFeed->setLocationNote($data['location_note']);
			$objDealFeed->setIsOnline($data['is_online']);
			
			write_app_log(sprintf(" IS online: %s\n", $data['is_online']?'yes':'no'));
			
			if ($data['highlights']) foreach ( $data['highlights'] as $highlight) {
				write_app_log("new highlight\n");
				$objHighlight = new DealFeedHighlight();
				$objHighlight->setContent($highlight);
				$objHighlight->setIsActive(1);
				$objHighlight->setDateCreated(time());
				
				$objDealFeed->addDealFeedHighlight($objHighlight);
			}
			if ($data['fine_print']) foreach ( $data['fine_print'] as $fine_print) {
				write_app_log("new fineprint\n");
				$objFeedDetail = new DealFeedDetail();
				$objFeedDetail->setContent($fine_print);
				$objFeedDetail->setIsActive(1);
				$objFeedDetail->setDateCreated(time());
				
				$objDealFeed->addDealFeedDetail($objFeedDetail);
			}
		
			// create business
			$objBusiness = BusinessQuery::create()->findOneByEmail($data['company_name'].'@'.$data['deal_source_name']);
			if(!($objBusiness instanceof Business)) {
				/* @var $objBusiness Business */
				$objBusiness = new Business();
				write_app_log("new business\n");
				$objBusiness->setEmail($data['company_name'].'@'.$data['deal_source_name']);
				if(strlen($data['company_name'])) $objBusiness->setCompanyName($data['company_name']);
				if(strlen($data['website'])) $objBusiness->setCompanyUrl($data['website']);
				
			}
			
		} // end new deal stuff
		
		if(!($objBusiness instanceof Business)) {
			/* @var $objBusiness Business */
			$objBusiness = BusinessQuery::create()->findOneByEmail($data['company_name'].'@'.$data['deal_source_name']);
			
			if(!($objBusiness instanceof Business)) {
				$objBusiness = new Business();
				write_app_log("new business\n");
				$objBusiness->setEmail($data['company_name'].'@'.$data['deal_source_name']);
				if(strlen($data['company_name'])) $objBusiness->setCompanyName($data['company_name']);
				if(strlen($data['website'])) $objBusiness->setCompanyUrl($data['website']);
				
			}
		}
		
		$arrDefaultLocation = array();
		foreach ($data['adr'] as $arrLocation) {
			if (!count($arrDefaultLocation)) {
				// default location is the first
				$arrDefaultLocation = &$arrLocation;
			}
			
			if ($arrLocation['google']) {
				$arrAdr = array();
//				vdump($arrLocation['google']->formatted_address);
//				vdump($arrLocation['google']->address_components);
//				vdump($arrLocation['google']->geometry->location);
	
				foreach ($arrLocation['google']->address_components as $objAdrComp) {
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
				// set address1, zip
				$arrLocation['addressline1'] = sprintf("%s %s"
					, $arrAdr['street_number']->long_name
					, $arrAdr['route']->long_name
					);
				if (strlen($arrAdr['subpremise']->long_name)) {
					$arrLocation['addressline1'] .= sprintf(" #%s", $arrAdr['subpremise']->long_name);
				}
				$arrLocation['zipcode'] = $arrAdr['postal_code']->long_name;
			}
			
			$objDealFeedLocationQuery = DealFeedLocationQuery::create();
			if(strlen($arrLocation['location_name'])) $objDealFeedLocationQuery->filterByLocationName($arrLocation['location_name']);
			if(strlen($arrLocation['addressline1'])) $objDealFeedLocationQuery->filterByAddressline1($arrLocation['addressline1']);
			if(strlen($arrLocation['addressline2'])) $objDealFeedLocationQuery->filterByAddressline2($arrLocation['addressline2']);
			if(strlen($arrLocation['telephone'])) $objDealFeedLocationQuery->filterByTelephone($arrLocation['telephone']);
			if(strlen($arrLocation['zipcode'])) $objDealFeedLocationQuery->filterByPostcode($arrLocation['zipcode']);
			$objDealFeedLocation = $objDealFeedLocationQuery->findOne();
			
			// if DealFeedLocation not in database
			if (!$objDealFeedLocation instanceof DealFeedLocation) {
				write_app_log(" new location created.\n");
				$objDealFeedLocation = new DealFeedLocation();
				$objDealFeedLocation->setLocationName($arrLocation['location_name']);
				$objDealFeedLocation->setAddressline1($arrLocation['addressline1']);
				$objDealFeedLocation->setAddressline2($arrLocation['addressline2']);
				$objDealFeedLocation->setTelephone($arrLocation['telephone']);
				$objDealFeedLocation->setPostcode($arrLocation['zipcode']);
				
				if ($arrLocation['lat'] != 0 && $arrLocation['lng'] != 0) {
					$objDealFeedLocation->setLatitude($arrLocation['lat']);
					$objDealFeedLocation->setLongitude($arrLocation['lng']);

				} elseif ($arrLocation['google']) {
				// set lat lng from google
					$objDealFeedLocation->setLatitude($arrLocation['google']->geometry->location->lat);
					$objDealFeedLocation->setLongitude($arrLocation['google']->geometry->location->lng);
					
				} else {
					// if no google, try to look it up
					$objZip = ZipcodeQuery::create()->filterByCitytype('D')->findOneByZipcode($arrLocation['zipcode']);
					if(($objZip instanceof Zipcode)) {
						/* @var $objZip Zipcode */
						$objDealFeedLocation->setLatitude($objZip->getLatitude());
						$objDealFeedLocation->setLongitude($objZip->getLongitude());
					}
				}
				$objDealFeed->addDealFeedLocation($objDealFeedLocation);
			}
		} // end foreach ($data['adr'] as $arrLocation)
		
		// fill lat/lon
		if ($arrDefaultLocation['google']) {
			$arrAdr = array();
			foreach ($arrLocation['google']->address_components as $objAdrComp) {
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
//			if (PAGE_THIS_C == 'parse_buywithme') {
//				vdump($arrLocation['google']);
//				exit;
//			}
//			write_app_log("SETTING GOOGLE deal coords ".$arrDefaultLocation['google']->geometry->location->lat.", ".$arrDefaultLocation['google']->geometry->location->lng."\n");
			
			$objDealFeed->setLatitude($arrDefaultLocation['google']->geometry->location->lat);
			$objDealFeed->setLongitude($arrDefaultLocation['google']->geometry->location->lng);
			// use locality if exists, otherwise, use sublocality
			$objBusiness->setCity(strlen($arrAdr['locality']->long_name)?$arrAdr['locality']->long_name:$arrAdr['sublocality']->long_name);
			$objBusiness->setState($arrAdr['administrative_area_level_1']->short_name);

			// temp fix
			if ($objBusiness->getCity() === null) {
				$objBusiness->setCity('');
				write_app_log("NO city for ".$objDealFeed->getPermalink()."\n");
			}
			if ($objBusiness->getState() === null) {
				$objBusiness->setState('');
				write_app_log("NO state for ".$objDealFeed->getPermalink()."\n");
			}
			
		} elseif (strlen($arrDefaultLocation['zipcode'])) {
			$objZip = ZipcodeQuery::create()->filterByCitytype('D')->findOneByZipcode($arrDefaultLocation['zipcode']);
			if(($objZip instanceof Zipcode)) {
//				write_app_log("SETTING deal coords ".$objZip->getLatitude().", ".$objZip->getLongitude()."\n");

				// lat and lng are not very accurate at zip level, try not to use these
				$objDealFeed->setLatitude($objZip->getLatitude());
				$objDealFeed->setLongitude($objZip->getLongitude());
				
				$objBusiness->setCity($objZip->getCity());
				$objBusiness->setState($objZip->getStatecode());
			}
		}

		if(strlen($arrDefaultLocation['addressline1'])) $objBusiness->setAddressline1($arrDefaultLocation['addressline1']);
		if(strlen($arrDefaultLocation['addressline2'])) $objBusiness->setAddressline2($arrDefaultLocation['addressline2']);
		if(strlen($arrDefaultLocation['city'])) $objBusiness->setCity($arrDefaultLocation['city']);
		if(strlen($arrDefaultLocation['state'])) $objBusiness->setState($arrDefaultLocation['state']);
		if(strlen($arrDefaultLocation['country'])) $objBusiness->setCountry($arrDefaultLocation['country']);
		if(strlen($arrDefaultLocation['zipcode'])) $objBusiness->setPostcode($arrDefaultLocation['zipcode']);
		
		if(strlen($arrDefaultLocation['lat'])) $objDealFeed->setLatitude($arrDefaultLocation['lat']);
		if(strlen($arrDefaultLocation['lng'])) $objDealFeed->setLongitude($arrDefaultLocation['lng']);
		
		write_app_log("SETTING deal coords ".$objDealFeed->getLatitude().", ".$objDealFeed->getLongitude()."\n");
		
	//	$objBusiness->addDealFeed($objDealFeed);
		$objBusiness->save();
		$objDealFeed->setBusiness($objBusiness);
		
		$objDealFeed->setTippedAt($data['tipped_at']);
		if (strlen($data['tipped_at']) &&(int)$objDealFeed->getIsTipped() == 0) {
			$objDealFeed->setIsTipped(1);
			$objDealFeed->setDateTipped(time());
		}
		
		$objDealFeed->setWebsiteUrl($data['website']);
		$objDealFeed->setSubject($data['email_subject']);
		$objDealFeed->setTitle($data['control_title']);
		$objDealFeed->setDetails($data['description']);
		$objDealFeed->setNumberSold($data['number_sold']);
		$objDealFeed->setCommentNumber($data['comment_number']);
		$objDealFeed->setDateModified(time());
		
		// set DealFeedDivision aka Groupon 'city'
		$objDealFeedDivision = DealFeedDivisionQuery::create()->filterByDivisionName($data['division_name'])->findOne();
		write_app_log("division NAME: " .$data['division_name']. "\n");
		if (!$objDealFeedDivision instanceof DealFeedDivision) {
			write_app_log(" new division created.\n");
			$objDealFeedDivision = new DealFeedDivision();
			$objDealFeedDivision->setIsActive(1);
			$objDealFeedDivision->setDateCreated(time());
			$objDealFeedDivision->setParentId(1);
			$objDealFeedDivision->setDivisionName($data['division_name']);
			$objDealFeedDivision->save();
		}
		$objDealFeed->setDealFeedDivision($objDealFeedDivision);
		
		/* @var $objDefaultThread DealFeedThread */
		$objDefaultThread = DealFeedThreadQuery::create()->findPk(1);
		$arrCreatedUsers = array();
		$arrCreatedComments = array();
		$countNewThread = 0;
		
		foreach ($data['comments'] as $comment) {
			
			$strPermalink = strtolower($comment['unique_id'].'@'.$data['deal_source_name']);
			$objThread = DealFeedThreadQuery::create()->findOneByPermalink($strPermalink);
			if (!($objThread instanceof DealFeedThread)) {
				write_app_log("  thread not in database " .$strPermalink. "\n");
				$objThread = $arrCreatedComments[$strPermalink];
			}
			if(!($objThread instanceof DealFeedThread)) {
				write_app_log("  thread not in array    " .$strPermalink. "\n");
				/* @var $objThread DealFeedThread */
				$objThread = new DealFeedThread();
				write_app_log("    new dealfeedthread   ".++$countNewThread."\n");
				$objThread->setParentId($objDefaultThread->getId());
				
				$objThread->setDateCreated($comment['unix_timestamp']);
				$objThread->setPermalink($strPermalink);
				$objThread->setContent($comment['body']);
				
				$arrCreatedComments[$strPermalink] = $objThread;
				
				// get (new) user....
				$strUniqueUserEmail = str_replace(' ', '_', strtolower($comment['email']));
				$objUser = UserQuery::create()->findOneByEmail($strUniqueUserEmail);
				if (!($objUser instanceof User)) {
					write_app_log("    user not in database " .$strUniqueUserEmail. "\n");
					$objUser = $arrCreatedUsers[$strUniqueUserEmail];
				}
				if(!($objUser instanceof User)) {
					write_app_log("    user not in array    " .$strUniqueUserEmail. "\n");
					/* @var $objUser User */
					$objUser = new User();
					write_app_log("      new user           " .$strUniqueUserEmail. "\n");
					$objUser->setEmail($strUniqueUserEmail);
					$objUser->setFname($comment['author']);
					$objUser->setIsActive(1);
					$objUser->setDateCreated(time());
					
					$arrCreatedUsers[$strUniqueUserEmail] = $objUser;
					
					$objUser->save();
					
				}
				$objThread->setUser($objUser);
				$objThread->setDealFeed($objDealFeed);
			}
		}
		try {
			write_app_log("saving dealfeed... " .$objDealFeed->getPermalink(). "\n");
			$objDealFeed->save();
			
			if (is_array($data['post_to_blogs'])) {
				$objDealFeed->postToBlogWithBlogNameArray($data['post_to_blogs'], $bForceBlogUpdate);
			}
			
			if (strlen($data['post_to_blog_name'])) {
				write_app_log("processing blog... " .$objDealFeed->getPermalink().'@'.$data['post_to_blog_name']. "\n");
				if ($objDealFeed->postToBlogWithBlogName($data['post_to_blog_name'], $bForceBlogUpdate)) {
					write_app_log("saving dealfeed... " .$objDealFeed->getPermalink(). "\n");
					$objDealFeed->save();
				}
			}
		} catch (Exception $e) {
			throw new Exception('DealFeedPeer exception: '.$e->getMessage());
		}
		
		write_app_log("saveDealFromArray: done\n");
	} // saveDealFromArray

} // DealFeedPeer
