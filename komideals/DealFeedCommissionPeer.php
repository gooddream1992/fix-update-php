<?php



/**
 * Skeleton subclass for performing query and update operations on the 'deal_feed_commission' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.komideals
 */
class DealFeedCommissionPeer extends BaseDealFeedCommissionPeer {
	
	public static function processLivingSocialStats($strApiKey, $dDaysToProcess=30) {
		global $dealnumber;
		
		try {
		
			$url = 'http://affiliates.livingsocial.com/stats/lead_report.json?';
			$url .= '&api_key='.urlencode($strApiKey);
			$url .= '&start_date='.date("Y-m-d", time()-(86400*($dDaysToProcess-1)));
			$url .= '&end_date='.date("Y-m-d");
			
			$result = curl_process_url($url, 0);
			
			$objResult = json_decode($result['result']);
			
			if ($objResult->success != TRUE) {
				throw new Exception('Success not TRUE. Quitting.');
			}
			
			if ($objResult->totalNumRows < 1) {
				throw new Exception('No commission data. Rows < 1');
			}
			
			
			write_app_log('Commission Results: '.$objResult->totalNumRows."\n");
			
			foreach ($objResult->data as $objCommission) {
				$dealnumber++;
				self::saveCommissionFromLivingSocialObject($objCommission);
				vdump($objCommission);
			}
		
		} catch (Exception $e){
			write_app_log("There was an error with your request or the service is unavailable.\n");
			write_app_log("Exception: ".$e->getMessage()."\n");
		}
		
		return TRUE;
	}
	
	public static function saveCommissionFromLivingSocialObject($objCommission) {
		$strAdvertiserName = 'LivingSocial';
		
		if (!strlen($objCommission->sub_id)) {
			write_app_log("No sub_id\n");
			return false;
		}
		
		// check for existing commission object
		$objExistingCommission = DealFeedCommissionQuery::create()
			->filterByAdvertiserName($strAdvertiserName)
			->filterByEventDate($objCommission->date_time)
			->filterBySId($objCommission->sub_id)
			->findOne();
		if ($objExistingCommission instanceof DealFeedCommission) {
			write_app_log("Commission record already in DB\n");
			return $objExistingCommission;
		}
		
		$objDealFeedCommission = new DealFeedCommission();
		$objDealFeedCommission->setAdvertiserName($strAdvertiserName);
		$objDealFeedCommission->setActionType('sale');
//	    object(stdClass)#102 (12) {
//	      ["offer"]=>
//	      string(15) "Direct Purchase"
		$objDealFeedCommission->setEventDate($objCommission->date_time);
		$objDealFeedCommission->setLockingDate($objCommission->date_time);
//	      ["date_time"]=>
//	      string(19) "2011-03-17 10:33:10"
//	      ["source"]=>
//	      string(0) ""
		$objDealFeedCommission->setSId($objCommission->sub_id);
//	      ["sub_id"]=>
//	      string(36) "dxda47324pxpa19568sxsadealgrater.com"
//	      ["sub_id1"]=>
//	      string(36) "dxda47324pxpa19568sxsadealgrater.com"
//	      ["sub_id2"]=>
//	      string(0) ""
//	      ["sub_id3"]=>
//	      string(0) ""
//	      ["sub_id4"]=>
//	      string(0) ""
//	      ["sub_id5"]=>
//	      string(0) ""
		$objDealFeedCommission->setCommissionAmount(ereg_replace("[^0-9.]", "", $objCommission->payout));
//	      ["payout"]=>
//	      string(5) "$5.85"
//	      ["ip"]=>
//	      string(10) "204.61.6.1"
		$objDealFeedCommission->setActionStatus($objCommission->status);
//	      ["status"]=>
//	      string(8) "approved"
//	    }
		
		$objDealFeedCommission->setPostingDate(time());

		// old:  $sId = 'd0123p012s098bla' / deal = '0123', pubid (businessid) = 012, pub surfer id = 098bla
		// new:  $sId = 'dxda0123pxpa012sxsa098bla' / same (2 ways to transfer data)
		
		$dDealId = 0;
		$dPublisherId = 0;
		$strSid = '';
		
		if (str_replace('dxda', '', $objCommission->sub_id) != $objCommission->sub_id) {
			// new method of passing deal/pub/sid data in cj sid
			$dDealId = preg_replace("/dxda(\\d+)pxpa(\\d+)sxsa(.*)/", "\\1", $objCommission->sub_id);
			$dPublisherId = preg_replace("/dxda(\\d+)pxpa(\\d+)sxsa(.*)/", "\\2", $objCommission->sub_id);
			$strSid = preg_replace("/dxda(\\d+)pxpa(\\d+)sxsa(.*)/", "\\3", $objCommission->sub_id);
			
		} elseif ($objCommission->sub_id{0} == 'd') {
			// old method of passing info
			$dDealId = preg_replace("/d(\\d+)p(\\d+)s(.*)/", "\\1", $objCommission->sub_id);
			$dPublisherId = preg_replace("/d(\\d+)p(\\d+)s(.*)/", "\\2", $objCommission->sub_id);
			$strSid = preg_replace("/d(\\d+)p(\\d+)s(.*)/", "\\3", $objCommission->sub_id);
		}
		write_app_log('DealId: '.$dDealId."\n");
		write_app_log('PublisherId: '.$dPublisherId."\n");
		write_app_log('sId: '.$strSid."\n");
		
		if ($dDealId == 0) {
			$dDealId = 1; // default;
		}
		if ($dPublisherId == 0) {
			$dPublisherId = PID_DEFAULT_C; // default
		}
		if ($dPublisherId == 3) {
			$dPublisherId = PID_DEFAULT_C; // dealn.it test
		}
		$objCheckBusiness = BusinessQuery::create()->findPk($dPublisherId);
		if (!$objCheckBusiness instanceof Business) {
			write_app_log("Business does not exist: $dPublisherId\n");
			throw new PropelException('Business does not exist: '.$dPublisherId);
		}
		$objCheckDeal = DealFeedQuery::create()->findPk($dDealId);
		if (!$objCheckDeal instanceof DealFeed) {
			write_app_log("Deal does not exist: $dDealId\n");
			throw new PropelException('Deal does not exist: '.$dDealId);
		}
		
		$objDealFeedCommission->setSaleAmount($objCheckDeal->getPrice());
		
		$objDealFeedCommission->setDealFeedId($dDealId);
		$objDealFeedCommission->setBusinessId($dPublisherId);
		$objDealFeedCommission->setPublisherSId($strSid);
		
		$objDealFeedCommission->setIsPaid(0);
		$objDealFeedCommission->save();
		
		return $objDealFeedCommission;
	}
	
	public static function processCommissionJunctionStats($strApiKey, $dDaysToProcess=30) {
		global $dealnumber;
				
		for ($i = time()-($dDaysToProcess*86400); $i < time()+300; $i+=86400) {
			try {
				write_app_log("i: $i ".date("Y-m-d H:i:s", $i)."\n");
			
				$client = new SoapClient("https://pubcommission.api.cj.com/wsdl/version2/publisherCommissionServiceV2.wsdl", array('trace'=> true));
				
				//Enter the request parameters for publisherCommissionSearch below.
				//For detailed usage of the parameter values, please refer to CJ Web Services online documentation
				
				$results = $client->findPublisherCommissions(array(
					"developerKey" => $strApiKey,
					"date" => date("m/d/Y", $i),
				//	"date" => 'mm/dd/yyyy',
					"dateType" => 'Event', // Posting
				//	"advertiserIds" => '',
				//	"websiteIds" => '',
					"actionStatus" => 'all',
				//	"actionTypes" => 'sale',
				//	"adIds" => '',
					"countries" => 'all',
				//	"correctionStatus" => 'all',
					"sortBy" => '',
					"sortOrder" => 'asc',
				));
				
				// The entire response structure will be printed in the next line
				write_app_log('Commission Results: '.$results->out->totalResults."\n");
				
				// when more than 1 result, PublisherCommissionV2 is array of objects
				if ($results->out->totalResults > 1) {
					// save results
					foreach ($results->out->publisherCommissions->PublisherCommissionV2 as $objCommission) {
						$dealnumber++;
						self::saveCommissionFromCJSoapObject($objCommission);
					}
				}
				
				// when only 1 result, PublisherCommissionV2 is object
				if ($results->out->totalResults == 1) {
					// save results
					$dealnumber++;
					self::saveCommissionFromCJSoapObject($results->out->publisherCommissions->PublisherCommissionV2);
				}
			
			} catch (Exception $e){
				write_app_log("There was an error with your request or the service is unavailable.\n");
				write_app_log("Exception: ".$e->getMessage()."\n");
			}
		}
		return TRUE;
	}
	
	public static function saveCommissionFromCJSoapObject($objCommission) {
		// check for existing commission object
		if (!strlen($objCommission->transactionId)) {
			write_app_log("No transactionId\n");
			return false;
		}
		if (!strlen($objCommission->sId)) {
			write_app_log("No sId\n");
			return false;
		}
		$objExistingCommission = DealFeedCommissionQuery::create()->findOneByTransactionId($objCommission->transactionId);
		if ($objExistingCommission instanceof DealFeedCommission) {
			write_app_log("Commission record already in DB\n");
			return $objExistingCommission;
		}
		
		$objDealFeedCommission = new DealFeedCommission();
//		object(stdClass)#84 (17) {
		$objDealFeedCommission->setActionStatus($objCommission->actionStatus);
//		  ["actionStatus"]=>
//		  string(3) "new"
		$objDealFeedCommission->setActionType($objCommission->actionType);
//		  ["actionType"]=>
//		  string(13) "advanced sale"
		$objDealFeedCommission->setAdId($objCommission->adId);
//		  ["adId"]=>
//		  int(10843752)
		$objDealFeedCommission->setAdvertiserId($objCommission->advertiserId);
//		  ["advertiserId"]=>
//		  int(3158811)
		$objDealFeedCommission->setAdvertiserName($objCommission->advertiserName);
//		  ["advertiserName"]=>
//		  string(10) "DealOn.com"
		$objDealFeedCommission->setCommissionAmount($objCommission->commissionAmount);
//		  ["commissionAmount"]=>
//		  string(4) "2.85"
		$objDealFeedCommission->setCountry($objCommission->country);
//		  ["country"]=>
//		  string(0) ""
		$objDealFeedCommission->setEventDate($objCommission->eventDate);
//		  ["eventDate"]=>
//		  string(25) "2011-01-09T09:53:00-08:00"
		$objDealFeedCommission->setLockingDate($objCommission->lockingDate);
//		  ["lockingDate"]=>
//		  string(25) "2011-02-10T00:00:00-08:00"
		$objDealFeedCommission->setOrderId($objCommission->orderId);
//		  ["orderId"]=>
//		  string(5) "23659"
		$objDealFeedCommission->setOriginal($objCommission->original);
//		  ["original"]=>
//		  bool(true)
		$objDealFeedCommission->setOriginalActionId($objCommission->originalActionId);
//		  ["originalActionId"]=>
//		  int(890643879)
		$objDealFeedCommission->setPostingDate($objCommission->postingDate);
//		  ["postingDate"]=>
//		  string(25) "2011-01-14T07:30:05-08:00"
		$objDealFeedCommission->setSId($objCommission->sId);
//		  ["sId"]=>
//		  string(9) "d20280p3s"
		$objDealFeedCommission->setSaleAmount($objCommission->saleAmount);
//		  ["saleAmount"]=>
//		  string(2) "19"
		$objDealFeedCommission->setTransactionId($objCommission->transactionId);
//		  ["transactionId"]=>
//		  int(1127091673)
		$objDealFeedCommission->setWebsiteId($objCommission->websiteId);
//		  ["websiteId"]=>
//		  int(4282653)
//		}

		// old:  $sId = 'd0123p012s098bla' / deal = '0123', pubid (businessid) = 012, pub surfer id = 098bla
		// new:  $sId = 'dxda0123pxpa012sxsa098bla' / same (2 ways to transfer data)
		
		$dDealId = 0;
		$dPublisherId = 0;
		$strSid = '';
		
		if (str_replace('dxda', '', $objCommission->sId) != $objCommission->sId) {
			// new method of passing deal/pub/sid data in cj sid
			$dDealId = preg_replace("/dxda(\\d+)pxpa(\\d+)sxsa(.*)/", "\\1", $objCommission->sId);
			$dPublisherId = preg_replace("/dxda(\\d+)pxpa(\\d+)sxsa(.*)/", "\\2", $objCommission->sId);
			$strSid = preg_replace("/dxda(\\d+)pxpa(\\d+)sxsa(.*)/", "\\3", $objCommission->sId);
			
		} elseif ($objCommission->sId{0} == 'd') {
			// old method of passing info
			$dDealId = preg_replace("/d(\\d+)p(\\d+)s(.*)/", "\\1", $objCommission->sId);
			$dPublisherId = preg_replace("/d(\\d+)p(\\d+)s(.*)/", "\\2", $objCommission->sId);
			$strSid = preg_replace("/d(\\d+)p(\\d+)s(.*)/", "\\3", $objCommission->sId);
		}
		write_app_log('DealId: '.$dDealId."\n");
		write_app_log('PublisherId: '.$dPublisherId."\n");
		write_app_log('sId: '.$strSid."\n");
		
		if ($dDealId == 0) {
			$dDealId = 1; // default;
		}
		if ($dPublisherId == 0) {
			$dPublisherId = PID_DEFAULT_C; // default
		}
		if ($dPublisherId == 3) {
			$dPublisherId = PID_DEFAULT_C; // dealn.it test
		}
		$objCheckBusiness = BusinessQuery::create()->findPk($dPublisherId);
		if (!$objCheckBusiness instanceof Business) {
			write_app_log("Business does not exist: $dPublisherId\n");
			throw new PropelException('Business does not exist: '.$dPublisherId);
		}
		$objCheckDeal = DealFeedQuery::create()->findPk($dDealId);
		if (!$objCheckDeal instanceof DealFeed) {
			write_app_log("Deal does not exist: $dDealId\n");
			throw new PropelException('Deal does not exist: '.$dDealId);
		}
		
		$objDealFeedCommission->setDealFeedId($dDealId);
		$objDealFeedCommission->setBusinessId($dPublisherId);
		$objDealFeedCommission->setPublisherSId($strSid);
		
		$objDealFeedCommission->setIsPaid(0);
		$objDealFeedCommission->save();
		
		return $objDealFeedCommission;
	}

} // DealFeedCommissionPeer
