<?php

require_once 'DealFeedPeer.php';

$dLimit = 0;
if (array_key_exists('limit', $_GET))
	$dLimit = (int)$_GET['limit'];

if ($dLimit == 0)
	$dLimit = 10;

if ($dLimit > 100)
	$dLimit = 100;

$strRegionTarget = 'ip';
if (array_key_exists('region_target', $_GET))
	$strRegionTarget = $_GET['region_target'];

$fLat = 0;
if (array_key_exists('lat', $_GET))
	$fLat = $_GET['lat'];

$fLng = 0;
if (array_key_exists('lng', $_GET))
	$fLng = $_GET['lng'];


$strRemoteAddr = $_SERVER['REMOTE_ADDR'];
//if (array_key_exists('remote_addr', $_GET) && strlen($_GET['remote_addr']) > 6) {
//	$strRemoteAddr = $_GET['remote_addr'];
//}

//$arrCategory = array('Restaurants and Bars');
//$arrCategory = array('golf');
//$arrCategory = array('Christmas');
$arrCategory = array();
if (array_key_exists('category', $_GET)) {
	if (is_array($_GET['category'])) {
		foreach ($_GET['category'] as $strCategory) {
			// don't save empty elements
			if (strlen(trim($strCategory)))
				$arrCategory[] = $strCategory;
		}
		
	} else {
		$arrCategory = array($_GET['category']);
	}
} else {
	$arrCategory = array('All');
}

if ($strRegionTarget == 'latlng') {
	$collDealFeed = DealFeedQuery::retrieveByCategoryOrderByLatLngUsingLatLng($arrCategory, $fLat, $fLng, $dLimit);
	$collDealFeed = DealFeedQuery::formatDealFeedsForOutput($collDealFeed);
} else {
	$collDealFeed = DealFeedQuery::retrieveByCategoryOrderByLatLngUsingRemoteAddr($arrCategory, $strRemoteAddr, $dLimit);
	$collDealFeed = DealFeedQuery::formatDealFeedsForOutput($collDealFeed);
}


// log view
$objBusiness = BusinessQuery::create()->findPk(PID_C);
if (!$objBusiness instanceof Business) {
	$objBusiness = BusinessQuery::create()->findPk(PID_DEFAULT_C);
}
$objDealFeedView = DealFeedViewPeer::saveView($objBusiness->getId(), $_GET['ref']);

// setup what we're going to output
$bDidOutput = false;
echo "document.write('<ul>');\n";

foreach ($collDealFeed as $objDeal) {
	// if click url, it is probably a deal
	if (strlen($objDeal->ClickUrl)) {
		$bDidOutput = true;
		$strImage = '';
		if (strlen($_GET['show_image']) && strlen($objDeal->PhotoMedium)) {
			$strImage = sprintf("<img src='%s' align='left' %s=%d style='margin:4px;' border=0 alt=\"%s\">"
				, $objDeal->PhotoMedium
				, $_GET['image_limit']
				, $_GET['image_px']
				, htmlentities($objDeal->Title)
				);
		}
		$strTestOutput = sprintf("<li><a target=\"%s\" href=\"%s&ref=%s&vid=%d\" title=\"%s: %s\">%s%s</a></li><br>"
			, $_GET['link_target']
			, $objDeal->ClickUrl
			, urlencode($_GET['ref'])
			, $objDealFeedView->getId()
			, $objDeal->DivisionName
			, strlen($objDeal->Subject)?$objDeal->Subject:$objDeal->Title
			, $strImage
			, $objDeal->Title
			);
		$strTestOutput = ereg_replace("\n", " ", $strTestOutput);
		printf("document.write('%s');\n", addcslashes($strTestOutput, "'"));
	}
}
if (!strlen($strTestOutput)) {
	$strTestOutput = '<li> - None found - </li>';
	printf("document.write('%s');\n", addcslashes($strTestOutput, "'"));
}

echo "document.write('<ul>');\n";

if ($bDidOutput) {
	
	$strTestOutput = '<span style="font-size:10px;"><a href="http://dealn.it/?v='.(int)PID_C.'" target="_blank" title="Your daily deals provided by Dealn.it">Powered by Dealn.it</a></span>';
	printf("document.write('%s');\n", addcslashes($strTestOutput, "'"));
}

exit;
