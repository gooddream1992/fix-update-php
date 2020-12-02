<?php

require_once 'komideals/Zipcode.php';

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
class DealFeedQuery extends BaseDealFeedQuery {
	
	public static function getRss($collDealFeed, $strTitle='', $strLink='', $iLimit=10, $strSid='', $dPubId=0) {
		if ((int)$iLimit < 1) $iLimit = 1;
		if ((int)$iLimit > 20) $iLimit = 20;
		$counter = 0;
		if (!strlen($strTitle)) $strTitle = $_SERVER['HTTP_HOST'];
		if (!strlen($strLink)) $strLink = 'http://'. $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		$strTitle = str_replace('/rss', '', $strTitle);
		$strLink = str_replace('/rss', '', $strLink);
		
		foreach ($collDealFeed as $objDealFeed) {
			/* @var $objDealFeed DealFeed */
			
			$itemDescription = $objDealFeed->getDetails();
			// strip links only
			$itemDescription = preg_replace('/<a[^>]*>/', '', $itemDescription);
			$itemDescription = eregi_replace('/</a>/', '', $itemDescription);
			
			$itemTitle = html_entity_decode($objDealFeed->getTitle());
		
			if (++$counter == 1) {
				// first row
			
				$details = '<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
	<channel>
		<title>'. $strTitle .'</title>
		<atom:link href="'.$strLink.'/rss" rel="self" type="application/rss+xml" />
		<link>'. $strLink . '</link>
		<language>en</language>
		<description>'. ucfirst($_SERVER['HTTP_HOST']).' - '.$strTitle .'</description>
		<image>
			<title>'. $strTitle .'</title>
			<url>'. $objDealFeed->getPhotoMedium() .'</url>
			<link>'. $strLink .'</link>
		</image>
';

//		<image>
//			<title>'. $objDealFeed->getTitle() .'</title>
//			<url>'. $objDealFeed->getPhotoMedium() .'</url>
//			<link>'. $objDealFeed->getClickUrlRedirect($strSid, $dPubId) .'</link>
//			<width>'. $row['image_width'] .'</width>
//			<height>'. $row['image_height'] .'</height>
//		</image>

			} // end if first row
			
			switch (substr($objDealFeed->getPhotoMedium(), -3, 3)) {
				case 'jpg':
					$imageType = 'jpeg';
				break;
				
				default:
					$imageType = substr($objDealFeed->getPhotoMedium(), -3, 3);
				break;
			}
			
			$details .= '		<item>
			<title><![CDATA['. $itemTitle .']]></title>
			<link><![CDATA['. $objDealFeed->getClickUrlRedirect($strSid, $dPubId) .']]></link>
			<description><![CDATA['. $itemDescription .']]></description>
			<category>'.$objDealFeed->getDealFeedDivision()->getDivisionName().'</category>
			<source url="http://'.$objDealFeed->getDealFeedSource()->getContent().'">'.$objDealFeed->getDealFeedSource()->getContent().'</source>
			<guid>http://'.$_SERVER['HTTP_HOST'].'/deal/'.$objDealFeed->getId().'/'.$objDealFeed->getPermalink().'</guid>
			<enclosure url="'.$objDealFeed->getPhotoMedium().'" length="78645" type="image/'.$imageType.'" />
		</item>
';
			
			if ($counter == $iLimit) break 1;
		}
	
	$details .= '	</channel>
</rss>';
		
		return $details;
	}
	
	
	public static function formatDealFeedForOutput($objDealFeed, $strSid='', $dPubId=0) {
		
		if (!$objDealFeed instanceof DealFeed) {
			return null;
		}
		
		/* @var $objDealFeed DealFeed */
		/* @var $objDealFeedDetail DealFeedDetail */
		/* @var $objDealFeedHighlight DealFeedHighlight */
		/* @var $objDealFeedLocation DealFeedLocation */
		
		$result = new stdClass();
		$result->Business = new stdClass();
		
		$collDetail = $objDealFeed->getDealFeedDetails();
		if (count($collDetail)) {
			foreach ($collDetail as $objDetail) {
				$Detail = new stdClass();
				$Detail->Content = $objDetail->getContent();
				$result->Detail[] = $Detail;
			}
		}
		$collHighlight = $objDealFeed->getDealFeedHighlights();
		if (count($collHighlight)) {
			foreach ($collHighlight as $objHighlight) {
				$Highlight = new stdClass();
				$Highlight->Content = $objHighlight->getContent();
				$result->Highlight[] = $Highlight;
			}
		}
		$collLocation = $objDealFeed->getDealFeedLocations();
		if (count($collLocation)) {
			foreach ($collLocation as $objLocation) {
				$Location = new stdClass();
				$Location->LocationName = $objLocation->getLocationName();
				$Location->Addressline1 = $objLocation->getAddressline1();
				$Location->Addressline2 = $objLocation->getAddressline2();
				$Location->Postcode = $objLocation->getPostcode();
				$Location->Telephone = $objLocation->getTelephone();
				$Location->Latitude = $objLocation->getLatitude();
				$Location->Longitude = $objLocation->getLongitude();
				$result->Location[] = $Location;
			}
		}
		$result->Id = $objDealFeed->getId();
		$result->DateStart = $objDealFeed->getDateStart("c");
		$result->DateEnd = $objDealFeed->getDateEnd("c");
		$result->Price = $objDealFeed->getPrice();
		$result->RetailValue = $objDealFeed->getRetailValue();
		$result->Details = $objDealFeed->getDetails();
		
		$result->ClickUrl = $objDealFeed->getClickUrlRedirect($strSid, $dPubId);
		
		$result->Latitude = $objDealFeed->getLatitude();
		$result->Longitude = $objDealFeed->getLongitude();
		$result->Permalink = $objDealFeed->getPermalink();
		$result->PhotoSmall = $objDealFeed->getPhotoSmall();
		$result->PhotoMedium = $objDealFeed->getPhotoMedium();
		$result->Photo = $objDealFeed->getPhoto();
		$result->Subject = $objDealFeed->getSubject();
		$result->Title = $objDealFeed->getTitle();
		$result->CommentNumber = $objDealFeed->getCommentNumber();
		$result->DiscussionUrl = $objDealFeed->getDiscussionUrl();
		$result->NumberSold = $objDealFeed->getNumberSold();
		$result->IsOnline = $objDealFeed->getIsOnline();
		$result->WebsiteUrl = $objDealFeed->getWebsiteUrl();
		
		$result->Business->Id = $objDealFeed->getBusiness()->getId();
		$result->Business->CompanyUrl = $objDealFeed->getBusiness()->getCompanyUrl();
		$result->Business->CompanyName = $objDealFeed->getBusiness()->getCompanyName();
		$result->Business->Addressline1 = $objDealFeed->getBusiness()->getAddressline1();
		$result->Business->Addressline2 = $objDealFeed->getBusiness()->getAddressline2();
		$result->Business->City = $objDealFeed->getBusiness()->getCity();
		$result->Business->State = $objDealFeed->getBusiness()->getState();
		$result->Business->Postcode = $objDealFeed->getBusiness()->getPostcode();
		$result->Business->Country = $objDealFeed->getBusiness()->getCountry();
		$result->Business->Telephone = $objDealFeed->getBusiness()->getTelephone();
		$result->Business->Fax = $objDealFeed->getBusiness()->getFax();
		
		$result->DivisionName = $objDealFeed->getDealFeedDivision()->getDivisionName();
		$result->SourceName = $objDealFeed->getDealFeedSource()->getContent();
		
		// add virtual columns added to results
		$arrVirtualColumns = $objDealFeed->getVirtualColumns();
		foreach ($arrVirtualColumns as $key => $value) {
			// non-collumn entry.. set in query as extra collumn
			$result->$key = $value;
		}
		return $result;
	}
	
	public static function formatDealFeedsForOutput($collDealFeed, $strSid='', $dPubId=0) {
		
		$ret = array();
		if (count($collDealFeed)) {
			foreach ($collDealFeed as $key => $objDealFeed) {
				$ret[] = self::formatDealFeedForOutput($objDealFeed, $strSid, $dPubId);
			}
		}
		return $ret;
	}
	
	public static function retrieveActiveDivisions($strSearch = '', $iLimit=10) {
		if ((int)$iLimit < 1) $iLimit = 1;
		if ((int)$iLimit > 1000) $iLimit = 1000;
		
		// cache 
		$cacheStatus = FALSE;
		$cacheKey = $_SERVER['HTTP_HOST'].':DealFeedQuery:retrieveActiveDivisions:'. md5(serialize($strSearch).serialize($iLimit));
		$arrTotalsCache = cache_fetch_custom($cacheKey, $cacheStatus);
		if ($cacheStatus) {
			write_app_log('apc_cache: '. $cacheKey. ": cached\n");
			return $arrTotalsCache;
		}
		write_app_log('apc_cache: '. $cacheKey. ": not cached\n");
		
		$strSearchCriteria = '';
		if (strlen(trim($strSearch))) {
			$strSearchCriteria = sprintf("AND dfd.division_name LIKE '%%%s%%' ", $strSearch);
		}
		/* @var $con PropelPDO */
		$con = Propel::getConnection();

		$sql = "
			SELECT DISTINCT dfd.slug, dfd.division_name
			FROM deal_feed_division dfd, deal_feed d
			WHERE 1
			AND dfd.slug != ''
			AND dfd.id = d.deal_feed_division_id
			AND d.is_active = 1
			AND d.date_end > NOW()
			$strSearchCriteria
			ORDER BY dfd.division_name ASC
			LIMIT $iLimit
		";
		/* @var $stmt PDOStatement */
		$stmt = $con->prepare($sql);
		$stmt->execute();
		$totals = array();
		
		while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
			$totals[] = $row;
		}
		cache_store_custom($cacheKey, $totals, 3600);
		return $totals;
		
	}
	
	public static function retrieveActiveCategories($strSearch = '', $iLimit=10, $OrderBy='score') {
		if ((int)$iLimit < 1) $iLimit = 1;
		if ((int)$iLimit > 1000) $iLimit = 1000;
		
		switch ($OrderBy) {
			case 'score':
				$strOrderBy = 'ORDER BY score DESC';
			break;
			case 'name':
				$strOrderBy = 'ORDER BY taxonomy_name ASC';
			break;
			case 'namelong':
				$strOrderBy = 'ORDER BY slug ASC';
			break;
			case 'parent':
				$strOrderBy = 'ORDER BY parent_id DESC, taxonomy_name ASC';
			break;
			
			default:
				$strOrderBy = 'ORDER BY score DESC';
			break;
		}
		
		// cache 
		$cacheStatus = FALSE;
		$cacheKey = $_SERVER['HTTP_HOST'].':DealFeedQuery:retrieveActiveCategories:'. md5(serialize($strSearch).serialize($iLimit).serialize($OrderBy));
		$arrTotalsCache = cache_fetch_custom($cacheKey, $cacheStatus);
		if ($cacheStatus) {
			write_app_log('apc_cache: '. $cacheKey. ": cached\n");
			return $arrTotalsCache;
		}
		write_app_log('apc_cache: '. $cacheKey. ": not cached\n");
		
		$strSearchCriteria = '';
		if (strlen(trim($strSearch))) {
			$strSearchCriteria = sprintf("AND t.taxonomy_name LIKE '%%%s%%' ", $strSearch);
		}
		/*
			SELECT count( t.taxonomy_name ) AS cntid, t.taxonomy_name
			FROM taxonomy_dmoz t, deal_feed_taxonomy_dmoz dt, deal_feed d
			WHERE 1
			AND dt.deal_feed_id = d.id
			AND dt.taxonomy_dmoz_id = t.id
			AND d.is_active =1
			GROUP BY t.taxonomy_name
			HAVING cntid >2
			ORDER BY cntid DESC
		*/
		/* @var $con PropelPDO */
		$con = Propel::getConnection();

		$sql = "
			SELECT count( t.taxonomy_name ) AS score, t.taxonomy_name, t.slug_part
			FROM taxonomy_dmoz t, deal_feed_taxonomy_dmoz dt, deal_feed d
			WHERE 1
			AND dt.deal_feed_id = d.id
			AND dt.taxonomy_dmoz_id = t.id
			AND d.is_active = 1
			AND d.date_end > NOW()
			$strSearchCriteria
			GROUP BY t.taxonomy_name
			HAVING score > 1
			$strOrderBy
			LIMIT $iLimit
		";
		/* @var $stmt PDOStatement */
		$stmt = $con->prepare($sql);
		$stmt->execute();
		$totals = array();
		
		while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
			$totals[] = $row;
		}
		cache_store_custom($cacheKey, $totals, 3600);
		return $totals;
	}

	/**
	 * returns propel collection of dealfeeds
	 * @param string/array $arrCategory categories as found in retrieveActiveCategories
	 * @param integer $iLimit how many deals to get, between 1 and 100
	 * 
	 * @deprecated retrieveIdsByCategory
	 */
	public static function retrieveByCategory($arrCategory, $iLimit=10) {
		if ((int)$iLimit < 1) $iLimit = 1;
		if ((int)$iLimit > 100) $iLimit = 100;
		
		if (!is_array($arrCategory)) {
			$arrCategory = array($arrCategory);
		}
		$arrCategoryClean = array();
		foreach ($arrCategory as $strCategory) {
			$arrCategoryClean[] = mysql_escape_string($strCategory);
		}
		
		// prepare and execute an arbitrary SQL statement
		$con = Propel::getConnection(DealFeedPeer::DATABASE_NAME);
		$sql = sprintf("
			SELECT DISTINCT d.* 
			FROM taxonomy_dmoz t, deal_feed_taxonomy_dmoz dt, deal_feed d
			WHERE 1
			AND dt.deal_feed_id = d.id
			AND dt.taxonomy_dmoz_id = t.id
			AND d.is_active = 1
			AND d.date_end > NOW()
			AND t.taxonomy_name IN ('%s')
			LIMIT $iLimit
			"
			, implode("','", $arrCategoryClean)
			);
//			vdump($sql);
		$stmt = $con->prepare($sql);
//		$stmt->execute(array(':name' => 'Austen'));
		$stmt->execute();
		
		// hydrate objects with the result
		$formatter = new PropelObjectFormatter();
		$formatter->setClass('DealFeed');
		$collDealFeed = $formatter->format($stmt);
		
		return $collDealFeed;
	}
	
	public static function retrieveIdsByCategory($arrCategory, $strTaxonomyField='taxonomy_name') {
		// cache 
		$cacheStatus = FALSE;
		$cacheKey = $_SERVER['HTTP_HOST'].':DealFeedQuery:retrieveIdsByCategory:'. md5(serialize($arrCategory));
		$arrIdsCache = cache_fetch_custom($cacheKey, $cacheStatus);
		if ($cacheStatus) {
			write_app_log('apc_cache: '. $cacheKey. ": cached\n");
			return $arrIdsCache;
		}
		write_app_log('apc_cache: '. $cacheKey. ": not cached\n");
	
		if (!is_array($arrCategory)) {
			$arrCategory = array($arrCategory);
		}
		$arrCategoryClean = array();
		foreach ($arrCategory as $strCategory) {
			$arrCategoryClean[] = mysql_escape_string($strCategory);
		}
		
		// prepare and execute an arbitrary SQL statement
		$con = Propel::getConnection(DealFeedPeer::DATABASE_NAME);
		$sql = sprintf("
			SELECT DISTINCT d.id
			FROM taxonomy_dmoz t, deal_feed_taxonomy_dmoz dt, deal_feed d
			WHERE 1
			AND dt.deal_feed_id = d.id
			AND dt.taxonomy_dmoz_id = t.id
			AND d.is_active = 1
			AND d.date_end > NOW()
			AND t.%s IN ('%s')
			"
			, $strTaxonomyField
			, implode("','", $arrCategoryClean)
			);
		/* @var $stmt PDOStatement */
		$stmt = $con->prepare($sql);
//		$stmt->execute(array(':name' => 'Austen'));
		$stmt->execute();
		
		$arrIds = array();
		while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
			$arrIds[] = $row->id;
		}
		cache_store_custom($cacheKey, $arrIds, 3600);
		return $arrIds;
	}
	
	public static function retrieveIdsByDivision($arrDivision, $strDivisionField='slug') {
		// cache 
		$cacheStatus = FALSE;
		$cacheKey = $_SERVER['HTTP_HOST'].':DealFeedQuery:retrieveIdsByDivision:'. md5(serialize($arrDivision));
		$arrIdsCache = cache_fetch_custom($cacheKey, $cacheStatus);
		if ($cacheStatus) {
			write_app_log('apc_cache: '. $cacheKey. ": cached\n");
			return $arrIdsCache;
		}
		write_app_log('apc_cache: '. $cacheKey. ": not cached\n");
	
		if (!is_array($arrDivision)) {
			$arrDivision = array($arrDivision);
		}
		$arrDivisionClean = array();
		foreach ($arrDivision as $strDivision) {
			$arrDivisionClean[] = mysql_escape_string($strDivision);
		}
		
		// prepare and execute an arbitrary SQL statement
		$con = Propel::getConnection(DealFeedPeer::DATABASE_NAME);
		$sql = sprintf("
			SELECT DISTINCT d.id
			FROM deal_feed_division dfd, deal_feed d
			WHERE 1
			AND dfd.id = d.deal_feed_division_id
			AND d.is_active = 1
			AND d.date_end > NOW()
			AND dfd.%s IN ('%s')
			"
			, $strDivisionField
			, implode("','", $arrDivisionClean)
			);
		/* @var $stmt PDOStatement */
		$stmt = $con->prepare($sql);
//		$stmt->execute(array(':name' => 'Austen'));
		$stmt->execute();
		
		$arrIds = array();
		while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
			$arrIds[] = $row->id;
		}
		cache_store_custom($cacheKey, $arrIds, 3600);
		return $arrIds;
	}
	
	public static function getDivisionsByRemoteAddr($strRemoteAddr, $iLimit) {
		$arrRegions = array();
		$arrRet = array();
		$counter = 0;
		// cache 
		$cacheStatus = FALSE;
		$cacheKey = $_SERVER['HTTP_HOST'].':DealFeedQuery:getDivisionsByRemoteAddr:'. md5(serialize($strRemoteAddr).serialize($iLimit));
		$arrRet = cache_fetch_custom($cacheKey, $cacheStatus);
		if ($cacheStatus) {
			write_app_log('apc_cache: '. $cacheKey. ": cached\n");
			return $arrRet;
		}
		write_app_log('apc_cache: '. $cacheKey. ": not cached\n");
		
		$collDealFeed = self::retrieveByRemoteAddr($strRemoteAddr, 20);
		foreach ($collDealFeed as $objDealFeed) {
			if (!strlen($objDealFeed->getDealFeedDivision()->getDivisionName()))
				continue;
				
			$arrRegions[$objDealFeed->getDealFeedDivision()->getDivisionName()]['count']++;
			$arrRegions[$objDealFeed->getDealFeedDivision()->getDivisionName()]['slug'] = $objDealFeed->getDealFeedDivision()->getSlug();
			$arrRegions[$objDealFeed->getDealFeedDivision()->getDivisionName()]['name'] = $objDealFeed->getDealFeedDivision()->getDivisionName();
			
		}
		
		foreach ($arrRegions as $strRegion => $arrInfo) {
			if (++$counter > $iLimit)
				break 1;
				
			$arrRet[] = $arrInfo;
		}
		
		cache_store_custom($cacheKey, $arrRet, 3600);
		return $arrRet;
	}
	
	public static function retrieveByDivisionSlugOrderByLatLngUsingRemoteAddr($arrDivision, $strRemoteAddr, $iLimit=10) {
		
		$arrIds = self::retrieveIdsByDivision($arrDivision, 'slug');
		$ipResult = geo_ip($strRemoteAddr);
		
		$collDealFeed = self::retrieveByLatLon($ipResult['latitude'], $ipResult['longitude'], $iLimit, FALSE, $arrIds);
		return $collDealFeed;
	}
	
	public static function retrieveByCategoryOrderByLatLngUsingRemoteAddr($arrCategory, $strRemoteAddr, $iLimit=10, $strTaxonomyField='taxonomy_name') {
		
		$arrIds = self::retrieveIdsByCategory($arrCategory, $strTaxonomyField);
		$ipResult = geo_ip($strRemoteAddr);
		
		$collDealFeed = self::retrieveByLatLon($ipResult['latitude'], $ipResult['longitude'], $iLimit, FALSE, $arrIds);
		return $collDealFeed;
	}

	public static function retrieveByCategoryOrderByLatLngUsingLatLng($arrCategory, $fLat, $fLng, $iLimit=10, $strTaxonomyField='taxonomy_name') {
		
		$arrIds = self::retrieveIdsByCategory($arrCategory, $strTaxonomyField);
		
		$collDealFeed = self::retrieveByLatLon($fLat, $fLng, $iLimit, FALSE, $arrIds);
		return $collDealFeed;
	}
	
	public static function retrieveByZipcode($strZipcode, $iLimit=10, $bInternetOnly=FALSE) {
		/* @var $objZipcode Zipcode */
		$objZipcode = ZipcodeQuery::create()->filterByCitytype('D')->filterByZipcode($strZipcode)->findOne();
		if (!$objZipcode instanceof Zipcode) {
			return false;
		}
		return self::retrieveByLatLon($objZipcode->getLatitude(), $objZipcode->getLongitude(), $iLimit, $bInternetOnly);
	}
	
	public static function retrieveByRemoteAddr($strRemoteAddr, $iLimit=10, $bInternetOnly=FALSE) {
		$ipResult = geo_ip($strRemoteAddr);
		$collDealFeed = self::retrieveByLatLon($ipResult['latitude'], $ipResult['longitude'], $iLimit, $bInternetOnly);
		return $collDealFeed;
	}
	
	public static function retrieveByLatLon($dLatitude, $dLongitude, $iLimit=10, $bInternetOnly=FALSE, $arrIds=FALSE) {
		// cache 
		$cacheStatus = FALSE;
		$cacheKey = $_SERVER['HTTP_HOST'].':DealFeedQuery:retrieveByLatLon:'. md5(serialize($dLatitude).serialize($dLongitude).serialize($iLimit).serialize($bInternetOnly).serialize($arrIds));
		
		$collDealFeedCache = cache_fetch_custom($cacheKey, $cacheStatus);
		if ($cacheStatus) {
			write_app_log('apc_cache: '. $cacheKey. ": cached\n");
			return $collDealFeedCache;
		}
		write_app_log('apc_cache: '. $cacheKey. ": not cached\n");
		
		if ((int)$iLimit < 1) $iLimit = 1;
		if ((int)$iLimit > 100) $iLimit = 100;
		
		$strCondition = "3963.191 * ACOS(
		 (SIN(PI()*$dLatitude/180)*SIN(PI()*Latitude/180)) +
		 (COS(PI()*$dLatitude/180)*cos(PI()*Latitude/180)*COS(PI()*Longitude/180-PI()*$dLongitude/180))
		)";
		
		/* @var $objQuery DealFeedQuery */
		$objQuery = DealFeedQuery::create()
			->filterByDateEnd(time(), Criteria::GREATER_THAN)
			->withColumn($strCondition, 'Distance')
			->setLimit($iLimit)
			->orderBy('Distance', Criteria::ASC);
		if ($bInternetOnly) {
			$objQuery->filterByIsOnline('1');
		}
		if (is_array($arrIds) && count($arrIds)) {
			$objQuery->filterById($arrIds, Criteria::IN);
		}
		$collDealFeed = $objQuery->find();
		
		cache_store_custom($cacheKey, $collDealFeed, 3600);
		return $collDealFeed;
	}

} // DealFeedQuery
