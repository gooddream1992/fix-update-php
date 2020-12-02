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
class DealFeedViewQuery extends BaseDealFeedViewQuery {
	
	public static function getGlobalViewStatsGroupByDateCreated() {
		$sql = "
			SELECT COUNT(id) AS cntid, YEAR(date_created) AS year, MONTH(date_created) AS month, DAY(date_created) AS day
			FROM `deal_feed_view` 
			WHERE 1
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
	
	public static function getGlobalViewStatsLast24hours() {
		$sql = "
			SELECT COUNT(id) AS cntid
			FROM `deal_feed_view`
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
	
	public static function getGlobalViewStatsLast24hoursGroupByBusinessId() {
		$sql = "
			SELECT count( d.business_id ) AS views, d.business_id, b.email, bu.user_id
			FROM `deal_feed_view` d, business b, business_user bu
			WHERE 1
			AND http_referer != ''
			AND bu.business_id = b.id
			AND b.id = d.business_id
			AND d.date_created > date_add( now( ) , INTERVAL -1 DAY )
			GROUP BY d.business_id
			ORDER BY views DESC
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

} // DealFeedViewQuery
