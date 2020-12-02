<?php



/**
 * Skeleton subclass for performing query and update operations on the 'deal_feed_click' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.komideals
 */
class DealFeedClickPeer extends BaseDealFeedClickPeer {
	
	/**
	 * Adds a click record to the database.
	 * 
	 * @param integer $dDealFeedId
	 * @param integer $dBusinessId
	 * @param string $strHttpReferer2 optional
	 * @param string $strHttpUserAgent optional
	 * @param string $strRemoteAddr optional
	 * 
	 * @return DealFeedClick
	 */
	public static function saveClick($dDealFeedId, $dBusinessId, $strHttpReferer2=NULL, $strHttpUserAgent=NULL, $strRemoteAddr=NULL, $strSurferId=NULL) {
		// setup defaults
		$strHttpReferer = $_SERVER['HTTP_REFERER'];
		if (!$strHttpUserAgent)
			$strHttpUserAgent = $_SERVER['HTTP_USER_AGENT'];
		if (!$strRemoteAddr)
			$strRemoteAddr = $_SERVER['REMOTE_ADDR'];
		if (!$strSurferId) {
			$strSurferId = SID_C;
		}
			
		$objUserAgent = UserAgentQuery::create()->findOneByUserAgent($strHttpUserAgent);
		if (!$objUserAgent instanceof UserAgent) {
			$objUserAgent = new UserAgent();
			$objUserAgent->setUserAgent($strHttpUserAgent);
			$objUserAgent->save();
		}
		
		$objDealFeedClick = new DealFeedClick();
		$objDealFeedClick->setBusinessId($dBusinessId);
		$objDealFeedClick->setDealFeedId($dDealFeedId);
		$objDealFeedClick->setUserAgent($objUserAgent);
		$objDealFeedClick->setHttpReferer($strHttpReferer);
		$objDealFeedClick->setHttpReferer2($strHttpReferer2);
		$objDealFeedClick->setRemoteAddr($strRemoteAddr);
		$objDealFeedClick->setSid($strSurferId);
		$objDealFeedClick->save();
		
		return $objDealFeedClick;
	}

} // DealFeedClickPeer
