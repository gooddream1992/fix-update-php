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
class DealFeedCommissionQuery extends BaseDealFeedCommissionQuery {
	
	/**
	 * 
	 * Returns an array of stats: business_id => commission stats 
	 * 
	 * @return array 
	 */
	
	public static function getCurrentCommissionsGroupByBusinessId() {
		
		/* @var $con PropelPDO */
		$con = Propel::getConnection();
		
		$sql = sprintf("
			SELECT 
			SUM(c.commission_amount) AS commission_amount, c.business_id, b.email, bu.user_id
			FROM deal_feed_commission c, business b, business_user bu
			WHERE 1
			AND b.id = c.business_id
			AND bu.business_id = b.id
			AND c.is_paid = 0
			GROUP BY business_id
			ORDER BY commission_amount DESC
			"
		);
	
		/* @var $stmt PDOStatement */
		$stmt = $con->prepare($sql);
		$stmt->execute();
		
		while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
			$ret[$row->business_id] = $row;
		}
		
		return $ret;
	}
	
	/**
	 * 
	 * Returns sum of unpaid commissions for specified user 
	 * based on their default business
	 * 
	 * @return string 
	 */
	public static function getCurrentCommissions($User) {
		
		/* @var $con PropelPDO */
		$con = Propel::getConnection();
		
		$sql = sprintf("
			SELECT 
			SUM(c.commission_amount) AS commission_amount
			FROM deal_feed_commission c
			WHERE 1
			AND c.business_id = %d
			AND c.is_paid = 0
			LIMIT 1
			"
			, $User->getDefaultBusiness()->getId()
		);
	
		/* @var $stmt PDOStatement */
		$stmt = $con->prepare($sql);
		$stmt->execute();
		
		while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
			$ret = $row->commission_amount;
		}
		
		return $ret;
	}
	
	/**
	 * Get click stats from click table.  
	 * 
	 * @param User $User
	 * @param string $strRange [month/week]
	 * 
	 * @return array of stats 
	 */
	public static function getCommissionStatsThisPeriod(User $User, $strRange="Month") {
		
		// cache 
		$cacheStatus = FALSE;
		$cacheKey = $_SERVER['HTTP_HOST'].':DealFeedCommissionQuery:getCommissionStatsThisPeriod:'. md5(serialize($User->getId()).serialize($strRange));
		$ret = cache_fetch_custom($cacheKey, $cacheStatus);
		if ($cacheStatus) {
			write_app_log('apc_cache: '. $cacheKey. ": cached\n");
			return $ret;
		}
		write_app_log('apc_cache: '. $cacheKey. ": not cached\n");
		
		$ret = array();
		
		/* @var $con PropelPDO */
		$con = Propel::getConnection();
		
		// get this month/week		
		$startTime = mktime(0, 0, 0, date('n'), date('j'), date('Y')) - ((date('N')-1)*3600*24); // week
		if (strtolower($strRange) == 'month')
			$startTime = mktime(0, 0, 0, date('m'), 1, date('Y')); // month
		
		$sql = sprintf("
			SELECT 
			SUM(c.commission_amount) AS commission_amount,
			SUM(c.sale_amount) AS sale_amount,
			COUNT(c.id) AS cntid,
			DAY(c.event_date) AS date_day,
			MONTH(c.event_date) AS date_month, 
			YEAR(c.event_date) AS date_year,
			UNIX_TIMESTAMP(c.event_date) AS date_timestamp
			
			FROM deal_feed_commission c
			WHERE c.business_id = %d
			AND c.event_date > '%s'
			GROUP BY YEAR(c.event_date), MONTH(c.event_date), DAY(c.event_date)
			ORDER BY YEAR(c.event_date), MONTH(c.event_date), DAY(c.event_date) ASC
			"
			, $User->getDefaultBusiness()->getId()
			, date('Y-m-d H:i:s', $startTime)
		);
	
		/* @var $stmt PDOStatement */
		$stmt = $con->prepare($sql);
		$stmt->execute();
		$totals = array();
		$totalCount = 0;
		$totalCommission = 0;
		$totalSale = 0;
		
		// setup empty totals array
		for ($i = $startTime; $i < time(); $i+=86400) {
			$emptyObj = new stdClass();
			$emptyObj->cntid = 0;
			$emptyObj->date_day = date("d", $i);
			$emptyObj->date_month = date("m", $i);
			$emptyObj->date_year = date("Y", $i);
			$emptyObj->date_timestamp = $i;
			$totals[date("Y-m-d", $i)] = $emptyObj;
		}
		
		while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
			$row->date_cnv = date("Y-m-d H:i:s", $row->date_timestamp);
			$totalCount += $row->cntid;
			$totalCommission += $row->commission_amount;
			$totalSale += $row->sale_amount;
			$totals[date("Y-m-d", $row->date_timestamp)] = $row;
			
		}
		
//		$ret['sql'] = $sql;
		$ret['rows'] = $totals;
		$ret['total_count'] = $totalCount;
		$ret['total_commission'] = $totalCommission;
		$ret['total_sale'] = $totalSale;
			
//		vdump($ret);
		
		cache_store_custom($cacheKey, $ret, 60);
		return $ret;
	}
	
	/**
	 * Get click stats from click table.  
	 * 
	 * @param User $User
	 * @param string $strRange [month/week]
	 * 
	 * @return array of stats 
	 */
	public static function getCommissionStatsLastPeriod(User $User, $strRange="Month") {
		
		// cache 
		$cacheStatus = FALSE;
		$cacheKey = $_SERVER['HTTP_HOST'].':DealFeedCommissionQuery:getCommissionStatsLastPeriod:'. md5(serialize($User->getId()).serialize($strRange));
		$ret = cache_fetch_custom($cacheKey, $cacheStatus);
		if ($cacheStatus) {
			write_app_log('apc_cache: '. $cacheKey. ": cached\n");
			return $ret;
		}
		write_app_log('apc_cache: '. $cacheKey. ": not cached\n");
		
		$ret = array();
		
		/* @var $con PropelPDO */
		$con = Propel::getConnection();
		
		// get last month/week
		if (strtolower($strRange) == 'month') {
			
			$startTime = strtotime(date("Y-m-01",strtotime("-1 month", strtotime(date("Y-m-d"))))); // month
			$endTime = strtotime("-1 second", strtotime(date("Y-m-01"))); // month
			
			$sql = sprintf("
				SELECT 
				SUM(c.commission_amount) AS commission_amount,
				SUM(c.sale_amount) AS sale_amount,
				COUNT(c.id) AS cntid,
				DAY(c.event_date) AS date_day,
				MONTH(c.event_date) AS date_month, 
				YEAR(c.event_date) AS date_year,
				UNIX_TIMESTAMP(c.event_date) AS date_timestamp
				
				FROM deal_feed_commission c
				WHERE c.business_id = %d
				AND YEAR(c.event_date) = %d
				AND MONTH(c.event_date) = %d
				GROUP BY YEAR(c.event_date), MONTH(c.event_date), DAY(c.event_date)
				ORDER BY YEAR(c.event_date), MONTH(c.event_date), DAY(c.event_date) ASC
				"
				, $User->getDefaultBusiness()->getId()
				, date("Y", $startTime)
				, date("m", $startTime)
			);
		} else {
			
			$startTime = mktime(0, 0, 0, date('n'), date('j')-6, date('Y')) - ((date('N'))*3600*24); // week
			$endTime = mktime(23, 59, 59, date('n'), date('j'), date('Y')) - ((date('N'))*3600*24); // week
			
			$sql = sprintf("
				SELECT 
				SUM(c.commission_amount) AS commission_amount,
				SUM(c.sale_amount) AS sale_amount,
				COUNT(c.id) AS cntid,
				DAY(c.event_date) AS date_day,
				MONTH(c.event_date) AS date_month, 
				YEAR(c.event_date) AS date_year,
				UNIX_TIMESTAMP(c.event_date) AS date_timestamp
				
				FROM deal_feed_commission c
				WHERE c.business_id = %d
				AND c.event_date > '%s'
				AND c.event_date < '%s'
				GROUP BY YEAR(c.event_date), MONTH(c.event_date), DAY(c.event_date)
				ORDER BY YEAR(c.event_date), MONTH(c.event_date), DAY(c.event_date) ASC
				"
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
		$totalCommission = 0;
		$totalSale = 0;
		
		// setup empty totals array
		for ($i = $startTime; $i < $endTime; $i+=86400) {
			$emptyObj = new stdClass();
			$emptyObj->cntid = 0;
			$emptyObj->date_day = date("d", $i);
			$emptyObj->date_month = date("m", $i);
			$emptyObj->date_year = date("Y", $i);
			$emptyObj->date_timestamp = $i;
			$totals[date("Y-m-d", $i)] = $emptyObj;
		}
		
		while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
			$row->date_cnv = date("Y-m-d H:i:s", $row->date_timestamp);
			$totalCount += $row->cntid;
			$totalCommission += $row->commission_amount;
			$totalSale += $row->sale_amount;
			$totals[date("Y-m-d", $row->date_timestamp)] = $row;
			
		}
		
//		$ret['sql'] = $sql;
		$ret['rows'] = $totals;
		$ret['total_count'] = $totalCount;
		$ret['total_commission'] = $totalCommission;
		$ret['total_sale'] = $totalSale;
		
//		vdump($ret);
		
		cache_store_custom($cacheKey, $ret, 60);
		return $ret;
	}
	
	/**
	 * Get click stats from click table.  
	 * 
	 * @param User $User
	 * @param string $strRange [month/week]
	 * 
	 * @return array of stats 
	 */
	public static function getCommissionStatsLastDays(User $User, $strRange="Month") {
		
		// cache 
		$cacheStatus = FALSE;
		$cacheKey = $_SERVER['HTTP_HOST'].':DealFeedCommissionQuery:getCommissionStatsLastDays:'. md5(serialize($User->getId()).serialize($strRange));
		$ret = cache_fetch_custom($cacheKey, $cacheStatus);
		if ($cacheStatus) {
			write_app_log('apc_cache: '. $cacheKey. ": cached\n");
			return $ret;
		}
		write_app_log('apc_cache: '. $cacheKey. ": not cached\n");
		
		$ret = array();
		
		/* @var $con PropelPDO */
		$con = Propel::getConnection();
		
		// get last n days
		$startTime = mktime(0, 0, 0, date("m"), date("d")-7,   date("Y"));
		if (strtolower($strRange) == 'month') 
			$startTime = mktime(0, 0, 0, date("m"), date("d")-30,   date("Y"));
			
		$sql = sprintf("
			SELECT 
			SUM(c.commission_amount) AS commission_amount,
			SUM(c.sale_amount) AS sale_amount,
			COUNT(c.id) AS cntid,
			DAY(c.event_date) AS date_day,
			MONTH(c.event_date) AS date_month, 
			YEAR(c.event_date) AS date_year,
			UNIX_TIMESTAMP(c.event_date) AS date_timestamp
			
			FROM deal_feed_commission c
			WHERE c.business_id = %d
			AND c.event_date > '%s'
			GROUP BY YEAR(c.event_date), MONTH(c.event_date), DAY(c.event_date)
			ORDER BY YEAR(c.event_date), MONTH(c.event_date), DAY(c.event_date) ASC
			"
			, $User->getDefaultBusiness()->getId()
			, date("Y-m-d", $startTime)
		);
	
		/* @var $stmt PDOStatement */
		$stmt = $con->prepare($sql);
		$stmt->execute();
		$totals = array();
		$totalCount = 0;
		$totalCommission = 0;
		$totalSale = 0;
		
		// setup empty totals array
		for ($i = $startTime; $i < time(); $i+=86400) {
			$emptyObj = new stdClass();
			$emptyObj->cntid = 0;
			$emptyObj->date_day = date("d", $i);
			$emptyObj->date_month = date("m", $i);
			$emptyObj->date_year = date("Y", $i);
			$emptyObj->date_timestamp = $i;
			$totals[date("Y-m-d", $i)] = $emptyObj;
		}
		
		while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
			$row->date_cnv = date("Y-m-d H:i:s", $row->date_timestamp);
			$totalCount += $row->cntid;
			$totalCommission += $row->commission_amount;
			$totalSale += $row->sale_amount;
			$totals[date("Y-m-d", $row->date_timestamp)] = $row;
			
		}
		
//		$ret['sql'] = $sql;
		$ret['rows'] = $totals;
		$ret['total_count'] = $totalCount;
		$ret['total_commission'] = $totalCommission;
		$ret['total_sale'] = $totalSale;
		
//		vdump($ret);
		
		cache_store_custom($cacheKey, $ret, 60);
		return $ret;
	}
	
	/**
	 * Get click stats from click table.  
	 * 
	 * @param User $User
	 * @param string $strRange [month/week]
	 * 
	 * @return array of stats 
	 */
	public static function getCommissionStatsHourlyTrends(User $User, $strRange="Month") {
		
		// cache 
		$cacheStatus = FALSE;
		$cacheKey = $_SERVER['HTTP_HOST'].':DealFeedCommissionQuery:getCommissionStatsHourlyTrends:'. md5(serialize($User->getId()).serialize($strRange));
		$ret = cache_fetch_custom($cacheKey, $cacheStatus);
		if ($cacheStatus) {
			write_app_log('apc_cache: '. $cacheKey. ": cached\n");
			return $ret;
		}
		write_app_log('apc_cache: '. $cacheKey. ": not cached\n");
		
		$ret = array();
		
		/* @var $con PropelPDO */
		$con = Propel::getConnection();
		
		// get last n days
		$startTime = mktime(0, 0, 0, date("m"), date("d")-7,   date("Y"));
		if (strtolower($strRange) == 'month') 
			$startTime = mktime(0, 0, 0, date("m"), date("d")-30,   date("Y"));
			
		// gimme hourly trends for last n days
		$sql = sprintf("
			SELECT 
			SUM(c.commission_amount) AS commission_amount,
			SUM(c.sale_amount) AS sale_amount,
			COUNT(c.id) AS cntid,
			HOUR(c.event_date) AS date_hour,
			DAY(c.event_date) AS date_day,
			MONTH(c.event_date) AS date_month, 
			YEAR(c.event_date) AS date_year,
			UNIX_TIMESTAMP(c.event_date) AS date_timestamp
			
			FROM deal_feed_commission c
			WHERE c.business_id = %d
			AND c.event_date > '%s'
			GROUP BY YEAR(c.event_date), MONTH(c.event_date), DAY(c.event_date), HOUR(c.event_date)
			ORDER BY YEAR(c.event_date), MONTH(c.event_date), DAY(c.event_date), HOUR(c.event_date) ASC
			"
			, $User->getDefaultBusiness()->getId()
			, date("Y-m-d", $startTime)
		);
	
		/* @var $stmt PDOStatement */
		$stmt = $con->prepare($sql);
		$stmt->execute();
		$totals = array();
		$days_in_segment = array();
		
		// setup empty totals array
		for ($i = 0; $i < 24; $i++) {
			$emptyObj = new stdClass();
			$emptyObj->cntid = 0;
			$emptyObj->commission_amount = 0;
			$emptyObj->sale_amount = 0;
			$totals[$i] = $emptyObj;
		}
		
		// sum each hour and count days
		while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
			$days_in_segment[date("Y-m-d", $row->date_timestamp)] = TRUE;
			$newObj = new stdClass();
			$newObj->cntid += (int)$row->cntid;
			$newObj->commission_amount += $row->commission_amount;
			$newObj->sale_amount += $row->sale_amount;
			
			$totals[(int)$row->date_hour] = $newObj;
		}
		// divide each sum by total days
		foreach ($totals as $key => $obj) {
			if (count($days_in_segment) > 0) {
				$obj->cntid = $obj->cntid/count($days_in_segment);
				$obj->commission_amount = $obj->commission_amount/count($days_in_segment);
				$obj->sale_amount = $obj->sale_amount/count($days_in_segment);
				
				$totals[$key] = $obj;
			}
		}
		// find min/max values
//		$fMax = NULL;
//		$fMin = NULL;
//		foreach ($totals as $key => $obj) {
//			if ($fMax === NULL)
//				$fMax = $value;
//			if ($fMin === NULL)
//				$fMin = $value;
//				
//			if ($fMax < $value)
//				$fMax = $value;
//			if ($fMin > $value)
//				$fMin = $value;
//		}
//		$ret['max'] = $fMax;
//		$ret['min'] = $fMin;
		
//		$ret['sql'] = $sql;
		$ret['rows'] = $totals;
		$ret['segment'] = $days_in_segment;
		
//		vdump($ret);
//		exit;
		
		cache_store_custom($cacheKey, $ret, 60);
		return $ret;
	}

} // DealFeedCommissionQuery
