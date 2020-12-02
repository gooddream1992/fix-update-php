<?php 

// find deal_feeds with zero lat/lng and fix them with division's lat/lng

$i = 0;

$collDealFeed = DealFeedQuery::create()
	->filterByLatitude(0, Criteria::EQUAL)
	->filterByLongitude(0, Criteria::EQUAL)
	->filterByIsActive(1)
	->find();
	
vdump('<hr>total deal_feeds found with zero lat, lng: '.count($collDealFeed));

foreach ($collDealFeed as $objDealFeed) {
	/* @var $objDealFeed DealFeed */
	
	// if division dosen't have info, quit
	if ($objDealFeed->getDealFeedDivision()->getLatitude() == 0) {
		continue;
	}
	
	vdump('saved: '.$objDealFeed->getTitle());
	$objDealFeed->setLatitude($objDealFeed->getDealFeedDivision()->getLatitude());
	$objDealFeed->setLongitude($objDealFeed->getDealFeedDivision()->getLongitude());
	$objDealFeed->save();
	
	if ($i++ > 100)
		break;
}


	