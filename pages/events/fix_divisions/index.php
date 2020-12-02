<?php 

// find division with zero lat/lng

$collDealFeedDivision = DealFeedDivisionQuery::create()->filterByLatitude(0)->filterByLongitude(0)->find();

vdump('total divisions with zero lat, lng: '.count($collDealFeedDivision));

foreach ($collDealFeedDivision as $objDealFeedDivision) {
	/* @var $objDealFeedDivision DealFeedDivision */
	
	$collDealFeed = DealFeedQuery::create()
		->filterByDealFeedDivisionId($objDealFeedDivision->getId())
		->filterByLatitude(0, Criteria::NOT_EQUAL)
		->filterByLongitude(0, Criteria::NOT_EQUAL)
//		->filterByIsActive(1)
		->find();
		
	vdump('<hr>total deal_feeds found in division with non-zero lat, lng: '.count($collDealFeed));
	vdump($objDealFeedDivision->getDivisionName());
	
	if (!count($collDealFeed)) {
		continue;
	}
	
	$sumLat = 0;
	$sumLng = 0;
	$arrLat = array();
	$arrLng = array();
	foreach ($collDealFeed as $objDealFeed) {
	/* @var $objDealFeed DealFeed */
		$sumLat += $objDealFeed->getLatitude();
		$arrLat[] = $objDealFeed->getLatitude();
		
		$sumLng += $objDealFeed->getLongitude();
		$arrLng[] = $objDealFeed->getLongitude();
	}
	
	$avgLat = $sumLat/count($collDealFeed);
	$avgLng = $sumLng/count($collDealFeed);
	
//	vdump($avgLat);
//	vdump($avgLng);
	
	$objDealFeedDivision->setLatitude($avgLat);
	$objDealFeedDivision->setLongitude($avgLng);
	$objDealFeedDivision->save();
	
//	vdump($arrLat);
//	vdump($arrLng);

//	if ($i++ > 10)
//		break;
}