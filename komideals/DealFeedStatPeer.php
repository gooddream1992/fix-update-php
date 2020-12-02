<?php



/**
 * Skeleton subclass for performing query and update operations on the 'deal_feed_stat' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.komideals
 */
class DealFeedStatPeer extends BaseDealFeedStatPeer {
	
	/**
	 * Get click stats from stat table.  
	 * 
	 * @param User $User
	 * @param string $strRange
	 * 
	 * @return array of stats 
	 */
	public static function getClickStats(User $User, $strRange="Month") {
		$ret = array();
		
		/* @var $con PropelPDO */
		$con = Propel::getConnection();
		
		$arrHours = array();
		$arrSumHours = array();
		for ($i =0; $i < 24; $i++) {
			$arrHours[] = sprintf("h%02d00", $i);
			$arrSumHours[] = sprintf("SUM(h%02d00) AS h%02d00", $i, $i);
			
		}
		
		// get this month/week		
		$startTime = mktime(0, 0, 0, date('n'), date('j'), date('Y')) - ((date('N')-1)*3600*24); // week
		if (strtolower($strRange) == 'month')
			$startTime = mktime(0, 0, 0, date('m'), 1, date('Y')); // month
		
		$sql = sprintf("
			SELECT SUM(%s) AS cntid, UNIX_TIMESTAMP(date) AS date
			FROM deal_feed_stat 
			WHERE business_id = %d
			AND date > '%s'
			GROUP BY date
			ORDER BY date ASC
			"
			, implode('+', $arrHours)
			, $User->getDefaultBusiness()->getId()
			, date('Y-m-d H:i:s', $startTime)
		);
	
		/* @var $stmt PDOStatement */
		$stmt = $con->prepare($sql);
		$stmt->execute();
		$totals = array();
		$totalCount = 0;
		
		while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
			$totals[] = $row;
			$totalCount += $row->cntid;
		}
		
		$ret['this_period']['sql'] = $sql;
		$ret['this_period']['rows'] = $totals;
		$ret['this_period']['total'] = $totalCount;
			
			
		// get last month/week
		if (strtolower($strRange) == 'month') {
			$sql = sprintf("
				SELECT SUM(%s) AS cntid, UNIX_TIMESTAMP(date) AS date
				FROM deal_feed_stat 
				WHERE business_id = %d
				AND YEAR(date) = %d
				AND MONTH(date) = %d
				GROUP BY date
				ORDER BY date ASC
				"
				, implode('+', $arrHours)
				, $User->getDefaultBusiness()->getId()
				, date("Y", mktime(0, 0, 0, date("m")-1, date("d"),   date("Y")))
				, date("m", mktime(0, 0, 0, date("m")-1, date("d"),   date("Y")))
			);
		} else {
			
			$startTime = mktime(0, 0, 0, date('n'), date('j')-6, date('Y')) - ((date('N'))*3600*24); // week
			$endTime = mktime(23, 59, 59, date('n'), date('j'), date('Y')) - ((date('N'))*3600*24); // week
			
			$sql = sprintf("
				SELECT SUM(%s) AS cntid, UNIX_TIMESTAMP(date) AS date
				FROM deal_feed_stat 
				WHERE business_id = %d
				AND date > '%s'
				AND date < '%s'
				GROUP BY date
				ORDER BY date ASC
				"
				, implode('+', $arrHours)
				, $User->getDefaultBusiness()->getId()
				, date('Y-m-d H:i:s', $startTime)
				, date('Y-m-d H:i:s', $endTime)
			);
		}
	
		/* @var $stmt PDOStatement */
		$stmt = $con->prepare($sql);
		$stmt->execute();
		$totals = array();
		$totalCount = 0;
		
		while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
			$totals[] = $row;
			$totalCount += $row->cntid;
		}
		
		$ret['last_period']['sql'] = $sql;
		$ret['last_period']['rows'] = $totals;
		$ret['last_period']['total'] = $totalCount;
			
			
		// get last n days
		$startTime = mktime(0, 0, 0, date("m"), date("d")-7,   date("Y"));
		if (strtolower($strRange) == 'month') 
			$startTime = mktime(0, 0, 0, date("m"), date("d")-30,   date("Y"));
			
		$sql = sprintf("
			SELECT SUM(%s) AS cntid, UNIX_TIMESTAMP(date) AS date
			FROM deal_feed_stat 
			WHERE business_id = %d
			AND date > '%s'
			GROUP BY date
			ORDER BY date ASC
			"
			, implode('+', $arrHours)
			, $User->getDefaultBusiness()->getId()
			, date("Y-m-d", $startTime)
		);
	
		/* @var $stmt PDOStatement */
		$stmt = $con->prepare($sql);
		$stmt->execute();
		$totals = array();
		$totalCount = 0;
		
		while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
			$totals[] = $row;
			$totalCount += $row->cntid;
		}
		
		$ret['last_days']['sql'] = $sql;
		$ret['last_days']['rows'] = $totals;
		$ret['last_days']['total'] = $totalCount;
			
			
		// gimme hourly trends for last n days
		$sql = sprintf("
			SELECT %s
			FROM deal_feed_stat 
			WHERE business_id = %d
			AND date > '%s'
			"
			, implode(',', $arrSumHours)
			, $User->getDefaultBusiness()->getId()
			, date("Y-m-d", $startTime)
		);
	
		/* @var $stmt PDOStatement */
		$stmt = $con->prepare($sql);
		$stmt->execute();
		$totals = array();
		
		while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
			$totals = $row;
		}
		$ret['hourly_trends'] = $totals;
		
//		vdump($ret);
//		vdump(get_browser());
		
		return $ret;
	}
	
	/**
	 * Increments value for corresponding stat record. Creates new if needed.
	 * @param integer $dDealFeedId
	 * @param integer $dBusinessId
	 * 
	 * @return Object DealFeed
	 */
	public static function incrementClick($dDealFeedId, $dBusinessId) {
	
	
		$objDealFeedStat = DealFeedStatQuery::create()
			->filterByDealFeedId($dDealFeedId)
			->filterByBusinessId($dBusinessId)
			->filterByDate(date("Y-m-d"))
			->findOne();
		if (!$objDealFeedStat instanceof DealFeedStat) {
			$objDealFeedStat = new DealFeedStat();
			$objDealFeedStat->setDealFeedId($dDealFeedId);
			$objDealFeedStat->setBusinessId($dBusinessId);
		}
		// increment value
		$strSetCallback = sprintf("setH%s00", date("H"));
		$strGetCallback = sprintf("getH%s00", date("H"));
		$objDealFeedStat->$strSetCallback($objDealFeedStat->$strGetCallback()+1);
		
		$objDealFeedStat->save();
		
		return $objDealFeedStat;
	}

} // DealFeedStatPeer
