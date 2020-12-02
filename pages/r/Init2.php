<?php 

// dealon
// http://www.jdoqocy.com/click-4282653-10843752?SID=&URL=https%3A%2F%2Fcj.dealon.com%2Fatlanta%2Fdeal%2Fnailgroove

if (!array_key_exists('id', $_GET)) {
	header('Location: http://dealn.it/');
	exit;
}

// hack to allow urls in id field
if (strpos($_GET['id'], 'ttp://')) {
	header('Location: '.$_GET['id']);
	exit;
}

if (substr($_SERVER['HTTP_USER_AGENT'], 0, 9) == 'WordPress') {
	exit;
}

$objDealFeed = DealFeedQuery::create()->findPk($_GET['id']);
if (!$objDealFeed instanceof DealFeed) {
	header('Location: http://dealn.it/');
	exit;
}

// don't deal with crawlers
$arrBrowser = get_browser($_SERVER['HTTP_USER_AGENT'], true);
if ($arrBrowser['crawler'] == '1') {
	$strClickUrl = $objDealFeed->getClickUrl();
	header('Location: '.$strClickUrl);
	exit;
}

// log click
$objBusiness = BusinessQuery::create()->findPk(PID_C);
if (!$objBusiness instanceof Business) {
	$objBusiness = BusinessQuery::create()->findPk(PID_DEFAULT_C);
}

$objDealFeedStat = DealFeedStatPeer::incrementClick($objDealFeed->getId(), $objBusiness->getId());
$objDealFeedClick = DealFeedClickPeer::saveClick($objDealFeed->getId(), $objBusiness->getId(), $_GET['ref']);

$strFeedSourceClickUrl = $objDealFeed->getDealFeedSource()->getClickUrl();

if (strlen($strFeedSourceClickUrl)) {
	
	// contains [url]
	if (str_replace('[url]', '', $strFeedSourceClickUrl) != $strFeedSourceClickUrl) {
		// getDealFeedSource()->getClickUrl() should look like '[url]' or 'http://site.com/file.ext?url=[url]&stuff=adsf..'
		$strClickUrl = str_replace('[url]', $objDealFeed->getClickUrl(), $strFeedSourceClickUrl);
	} else {
		// getDealFeedSource()->getClickUrl() should look like 'http://site.com/file.ext?url='
		$strClickUrl = sprintf("%s%s"
			, $strFeedSourceClickUrl
			, urlencode($objDealFeed->getClickUrl())
			);
	}
	
	// add user-defined data here
	if (strlen($objDealFeed->getDealFeedSource()->getPublisherId())) {
		
//		$strClickUrl = sprintf("%s&%s=d-%d|p-%d|s-%s"
		$strClickUrl = sprintf("%s%s%s=dxda%dpxpa%dsxsa%s"
		, $strClickUrl
		, (strpos($strClickUrl, '?')?'&':'?')
		, $objDealFeed->getDealFeedSource()->getPublisherId()
		, $objDealFeed->getId()
		, $objBusiness->getId()
		, urlencode(SID_C)
		
		);
	}
		
} else {
	$strClickUrl = $objDealFeed->getClickUrl();
}

header('Location: '.$strClickUrl);
exit;
