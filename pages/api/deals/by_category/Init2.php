<?php

require_once 'komideals/DealFeedPeer.php';

$dLimit = 0;
if (array_key_exists('limit', $_GET)) {
	$dLimit = (int)$_GET['limit'];
}

if ($dLimit == 0)
	$dLimit = 1;

if ($dLimit > 100)
	$dLimit = 100;

$strRemoteAddr = $_SERVER['REMOTE_ADDR'];
if (array_key_exists('ip', $_GET)) {
	$remote_addr = $_GET['ip'];
}
if (array_key_exists('remote_addr', $_GET)) {
	$strRemoteAddr = $_GET['remote_addr'];
}

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
}
// no category specified? return available categories...
if (count($arrCategory) == 0) {
	// allow searching categories
	$strSearch = '';
	if (array_key_exists('search', $_GET)) {
		$strSearch = $_GET['search'];
	}
	$collCategory = DealFeedQuery::retrieveActiveCategories($strSearch,$dLimit);
	echo json_encode($collCategory);
	exit;
}

$collDealFeed = DealFeedQuery::retrieveByCategoryOrderByLatLngUsingRemoteAddr($arrCategory, $strRemoteAddr, $dLimit);
$collDealFeed = DealFeedQuery::formatDealFeedsForOutput($collDealFeed);
if (count($collDealFeed)) {
//	vdump($collDealFeed);
//	foreach ($collDealFeed as $objDealFeed) {
//		echo $objDealFeed->ClickUrl."<br>\n";
//	}
}
echo json_encode($collDealFeed);

exit;