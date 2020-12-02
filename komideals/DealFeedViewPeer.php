<?php



/**
 * Skeleton subclass for performing query and update operations on the 'deal_feed_view' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.komideals
 */
class DealFeedViewPeer extends BaseDealFeedViewPeer {
	
	/**
	 * Adds a view record to the database.
	 * 
	 * @param integer $dBusinessId
	 * @param string $strHttpReferer2 optional
	 * @param string $strHttpUserAgent optional
	 * @param string $strRemoteAddr optional
	 * 
	 * @return DealFeedClick
	 */
	public static function saveView($dBusinessId, $strHttpReferer2=NULL, $strHttpUserAgent=NULL, $strRemoteAddr=NULL, $strSurferId=NULL) {
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
		
		$objDealFeedView = new DealFeedView();
		$objDealFeedView->setBusinessId($dBusinessId);
		$objDealFeedView->setUserAgent($objUserAgent);
		$objDealFeedView->setHttpReferer($strHttpReferer);
		$objDealFeedView->setHttpReferer2($strHttpReferer2);
		$objDealFeedView->setRemoteAddr($strRemoteAddr);
		$objDealFeedView->setSid($strSurferId);
		$objDealFeedView->save();
		
		return $objDealFeedView;
	}

} // DealFeedViewPeer
