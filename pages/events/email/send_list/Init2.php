<?php

set_time_limit(3000);
define('LOG_FILENAME_C','/tmp/send_list');
write_app_log("starting script...\n");

$collEmail = EmailLeadQuery::create()->filterByEmail('joe@dealn.it')->filterByIsActive('1')->find();

foreach ($collEmail as $objEmailLead) {
	/* @var $objEmailLead EmailLead */
	
	$objZip = ZipcodeQuery::create()->filterByCitytype('D')->filterByZipcode($objEmailLead->getZipcode())->findOne();
	// if zip in database
	if ($objZip instanceof Zipcode) {
		/* @var $objZip Zipcode */
		$collDealFeed = DealFeedQuery::retrieveByZipcode($objEmailLead->getZipcode(), 10);
	} else {
		$collDealFeed = DealFeedQuery::retrieveByRemoteAddr($objEmailLead->getRemoteAddr(), 10);
	}
	
	vdump(count($collDealFeed));
	foreach ($collDealFeed as $objDealFeed) {
		/* @var $objDealFeed DealFeed */
		vdump($objDealFeed->getTitle());
	}
	vdump($objEmailLead->getEmail());
	vdump($objEmailLead->getRemoteAddr());
	vdump($objEmailLead->getZipcode());
	vdump($objEmailLead->getAffiliateId());
	vdump($objEmailLead->getAffiliateName());
}


write_app_log("quitting script.\n");
exit;

