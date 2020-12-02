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
class DealFeedClickQuery extends BaseDealFeedClickQuery {
	
	public static function getGlobalClickStatsGroupByDateCreated() {
		$sql = "
			SELECT COUNT(id) AS cntid, YEAR(date_created) AS year, MONTH(date_created) AS month, DAY(date_created) AS day
			FROM `deal_feed_click` 
			WHERE 1
			AND http_referer != ''
			GROUP BY YEAR(date_created), MONTH(date_created), DAY(date_created)
			ORDER BY year DESC, month DESC, day DESC
			LIMIT 30
			";
		
		/* @var $con PropelPDO */
		$con = Propel::getConnection();
	
		/* @var $stmt PDOStatement */
		$stmt = $con->prepare($sql);
		$stmt->execute();
		
		while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
			$ret[sprintf("%d-%d-%d", $row->year, $row->month, $row->day)] = $row;
		}
		
		return $ret;
	}
	
	public static function getGlobalClickStatsLast24hours() {
		$sql = "
			SELECT COUNT(id) AS cntid
			FROM `deal_feed_click`
			WHERE http_referer != ''
			AND date_created > date_add( now( ) , INTERVAL -1 DAY )
			";
		
		/* @var $con PropelPDO */
		$con = Propel::getConnection();
	
		/* @var $stmt PDOStatement */
		$stmt = $con->prepare($sql);
		$stmt->execute();
		
		while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
			$ret = $row->cntid;
		}
		
		return $ret;
	}
	
	public static function getGlobalClickStatsLast24hoursGroupByBusinessId() {
		$sql = "
			SELECT count( d.business_id ) AS clicks, d.business_id, b.email, bu.user_id
			FROM `deal_feed_click` d, business b, business_user bu
			WHERE 1
			AND http_referer != ''
			AND bu.business_id = b.id
			AND b.id = d.business_id
			AND d.date_created > date_add( now( ) , INTERVAL -1 DAY )
			GROUP BY d.business_id
			ORDER BY clicks DESC
			";
		
		/* @var $con PropelPDO */
		$con = Propel::getConnection();
	
		/* @var $stmt PDOStatement */
		$stmt = $con->prepare($sql);
		$stmt->execute();
		
		while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
			$ret[$row->business_id] = $row;
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
	public static function getClickStatsThisPeriod(User $User, $strRange="month") {
		
		// cache 
		$cacheStatus = FALSE;
		$cacheKey = $_SERVER['HTTP_HOST'].':DealFeedClickQuery:getClickStatsThisPeriod:'. md5(serialize($User->getId()).serialize($strRange));
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
			COUNT(d.id) AS cntid,
			DAY(d.date_created) AS date_day,
			MONTH(d.date_created) AS date_month, 
			YEAR(d.date_created) AS date_year,
			UNIX_TIMESTAMP(d.date_created) AS date_timestamp
			
			FROM deal_feed_click d, user_agent u
			WHERE d.business_id = %d
			AND d.date_created > '%s'
			AND d.user_agent_id = u.id
			AND u.crawler = 0
			AND u.parent != ''
			GROUP BY YEAR(d.date_created), MONTH(d.date_created), DAY(d.date_created)
			ORDER BY YEAR(d.date_created), MONTH(d.date_created), DAY(d.date_created) ASC
			"
			, $User->getDefaultBusiness()->getId()
			, date('Y-m-d H:i:s', $startTime)
		);
	
		/* @var $stmt PDOStatement */
		$stmt = $con->prepare($sql);
		$stmt->execute();
		$totals = array();
		$totalCount = 0;
		
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
			$totals[date("Y-m-d", $row->date_timestamp)] = $row;
			$totalCount += $row->cntid;
			
		}
		
//		$ret['sql'] = $sql;
		$ret['rows'] = $totals;
		$ret['total'] = $totalCount;
		
		// find min/max values
		$fMax = NULL;
		$fMin = NULL;
		foreach ($totals as $key => $obj) {
			if ($fMax === NULL)
				$fMax = (int)$obj->cntid;
			if ($fMin === NULL)
				$fMin = (int)$obj->cntid;
				
			if ($fMax < (int)$obj->cntid)
				$fMax = (int)$obj->cntid;
			if ($fMin > (int)$obj->cntid)
				$fMin = (int)$obj->cntid;
		}
		$ret['max'] = $fMax;
		$ret['min'] = $fMin;
			
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
	public static function getClickStatsLastPeriod(User $User, $strRange="Month") {
		
		// cache 
		$cacheStatus = FALSE;
		$cacheKey = $_SERVER['HTTP_HOST'].':DealFeedClickQuery:getClickStatsLastPeriod:'. md5(serialize($User->getId()).serialize($strRange));
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
				COUNT(d.id) AS cntid,
				DAY(d.date_created) AS date_day,
				MONTH(d.date_created) AS date_month, 
				YEAR(d.date_created) AS date_year,
				UNIX_TIMESTAMP(d.date_created) AS date_timestamp
				
				FROM deal_feed_click d, user_agent u
				WHERE d.business_id = %d
				AND YEAR(d.date_created) = %d
				AND MONTH(d.date_created) = %d
				AND d.user_agent_id = u.id
				AND u.crawler = 0
				AND u.parent != ''
				GROUP BY YEAR(d.date_created), MONTH(d.date_created), DAY(d.date_created)
				ORDER BY YEAR(d.date_created), MONTH(d.date_created), DAY(d.date_created) ASC
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
				COUNT(d.id) AS cntid,
				DAY(d.date_created) AS date_day,
				MONTH(d.date_created) AS date_month, 
				YEAR(d.date_created) AS date_year,
				UNIX_TIMESTAMP(d.date_created) AS date_timestamp
				
				FROM deal_feed_click d, user_agent u
				WHERE d.business_id = %d
				AND d.date_created > '%s'
				AND d.date_created < '%s'
				AND d.user_agent_id = u.id
				AND u.crawler = 0
				AND u.parent != ''
				GROUP BY YEAR(d.date_created), MONTH(d.date_created), DAY(d.date_created)
				ORDER BY YEAR(d.date_created), MONTH(d.date_created), DAY(d.date_created) ASC
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
			$totals[date("Y-m-d", $row->date_timestamp)] = $row;
			$totalCount += $row->cntid;
		}
		
//		$ret['sql'] = $sql;
		$ret['rows'] = $totals;
		$ret['total'] = $totalCount;
		
		// find min/max values
		$fMax = NULL;
		$fMin = NULL;
		foreach ($totals as $key => $obj) {
			if ($fMax === NULL)
				$fMax = (int)$obj->cntid;
			if ($fMin === NULL)
				$fMin = (int)$obj->cntid;
				
			if ($fMax < (int)$obj->cntid)
				$fMax = (int)$obj->cntid;
			if ($fMin > (int)$obj->cntid)
				$fMin = (int)$obj->cntid;
		}
		$ret['max'] = $fMax;
		$ret['min'] = $fMin;
		
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
	public static function getClickStatsLastDays(User $User, $strRange="Month") {
		
		// cache 
		$cacheStatus = FALSE;
		$cacheKey = $_SERVER['HTTP_HOST'].':DealFeedClickQuery:getClickStatsLastDays:'. md5(serialize($User->getId()).serialize($strRange));
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
			COUNT(d.id) AS cntid,
			DAY(d.date_created) AS date_day,
			MONTH(d.date_created) AS date_month, 
			YEAR(d.date_created) AS date_year,
			UNIX_TIMESTAMP(d.date_created) AS date_timestamp
			
			FROM deal_feed_click d, user_agent u
			WHERE d.business_id = %d
			AND d.date_created > '%s'
			AND d.user_agent_id = u.id
			AND u.crawler = 0
			AND u.parent != ''
			GROUP BY YEAR(d.date_created), MONTH(d.date_created), DAY(d.date_created)
			ORDER BY YEAR(d.date_created), MONTH(d.date_created), DAY(d.date_created) ASC
			"
			, $User->getDefaultBusiness()->getId()
			, date("Y-m-d", $startTime)
		);
	
		/* @var $stmt PDOStatement */
		$stmt = $con->prepare($sql);
		$stmt->execute();
		$totals = array();
		$totalCount = 0;
		
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
			$totals[date("Y-m-d", $row->date_timestamp)] = $row;
			$totalCount += $row->cntid;
		}
		
//		$ret['sql'] = $sql;
		$ret['rows'] = $totals;
		$ret['total'] = $totalCount;
		
		// find min/max values
		$fMax = NULL;
		$fMin = NULL;
		foreach ($totals as $key => $obj) {
			if ($fMax === NULL)
				$fMax = (int)$obj->cntid;
			if ($fMin === NULL)
				$fMin = (int)$obj->cntid;
				
			if ($fMax < (int)$obj->cntid)
				$fMax = (int)$obj->cntid;
			if ($fMin > (int)$obj->cntid)
				$fMin = (int)$obj->cntid;
		}
		$ret['max'] = $fMax;
		$ret['min'] = $fMin;
		
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
	public static function getClickStatsHourlyTrends(User $User, $strRange="Month") {
		
		// cache 
		$cacheStatus = FALSE;
		$cacheKey = $_SERVER['HTTP_HOST'].':DealFeedClickQuery:getClickStatsHourlyTrends:'. md5(serialize($User->getId()).serialize($strRange));
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
			COUNT(d.id) AS cntid,
			HOUR(d.date_created) AS date_hour,
			DAY(d.date_created) AS date_day,
			MONTH(d.date_created) AS date_month, 
			YEAR(d.date_created) AS date_year,
			UNIX_TIMESTAMP(d.date_created) AS date_timestamp
			
			FROM deal_feed_click d, user_agent u
			WHERE d.business_id = %d
			AND d.date_created > '%s'
			AND d.user_agent_id = u.id
			AND u.crawler = 0
			AND u.parent != ''
			GROUP BY YEAR(d.date_created), MONTH(d.date_created), DAY(d.date_created), HOUR(d.date_created)
			ORDER BY YEAR(d.date_created), MONTH(d.date_created), DAY(d.date_created), HOUR(d.date_created) ASC
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
			
			$totals[(int)$row->date_hour] = $newObj;
		}
		// divide each sum by total days
		foreach ($totals as $key => $obj) {
			if (count($days_in_segment) > 0) {
				$obj->cntid = $obj->cntid/count($days_in_segment);
				
				$totals[$key] = $obj;
			}
		}
		// find min/max values
//		$fMax = NULL;
//		$fMin = NULL;
//		foreach ($totals as $key => $value) {
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
	
	public static function getClicksGroupedByDealFeed($dDateStart=0, $dDateEnd=0, $bIsActive=1, $iLimit=10) {
		
		// cache 
		$cacheStatus = FALSE;
		$cacheKey = $_SERVER['HTTP_HOST'].':DealFeedClickQuery:getClicksGroupedByDealFeed:'. md5(serialize($dDateStart).serialize($dDateEnd).serialize($bIsActive).serialize($iLimit));
		$arrTotalsCache = cache_fetch_custom($cacheKey, $cacheStatus);
		if ($cacheStatus) {
			write_app_log('apc_cache: '. $cacheKey. ": cached\n");
			return $arrTotalsCache;
		}
		write_app_log('apc_cache: '. $cacheKey. ": not cached\n");
		
		if ((int)$iLimit < 1) $iLimit = 1;
		if ((int)$iLimit > 1000) $iLimit = 1000;
		if ((int)$dDateStart == 0) $dDateStart = time()-(86400*1);
		if ((int)$dDateEnd == 0) $dDateEnd = time();
		if ((int)$dDateStart >= $dDateEnd) $dDateStart = $dDateEnd - (86400*1);
		
		if ($bIsActive == 1) $strIsActive = 'AND d.is_active = 1 AND d.date_end > NOW()';
		
		$strDateStart = date("Y-m-d H:i:s", $dDateStart);
		$strDateEnd = date("Y-m-d H:i:s", $dDateEnd);
		
		/* @var $con PropelPDO */
		$con = Propel::getConnection();

		$sql = "
			SELECT COUNT(c.deal_feed_id) AS cntid, c.deal_feed_id AS id
			FROM deal_feed_click c, deal_feed d, user_agent u
			WHERE 1
			AND c.user_agent_id = u.id
			AND c.deal_feed_id = d.id
			AND c.date_created > '$strDateStart'
			AND c.date_created < '$strDateEnd'
			$strIsActive
			AND u.crawler = 0
			AND u.parent != ''
			GROUP BY c.deal_feed_id
			ORDER BY cntid DESC
			LIMIT $iLimit
		";
//		echo $sql;
		/* @var $stmt PDOStatement */
		$stmt = $con->prepare($sql);
		$stmt->execute();
		$totals = array();
		
		while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
			$row->objDealFeed = DealFeedQuery::create()->findPk($row->id);
			$totals[$row->id] = $row;
		}
		cache_store_custom($cacheKey, $totals, 600);
		return $totals;
		
	}

} // DealFeedClickQuery
