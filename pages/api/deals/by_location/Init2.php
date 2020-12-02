<?php

require_once 'DealFeedPeer.php';

$dLimit = 0;
if (array_key_exists('limit', $_GET)) {
	$dLimit = (int)$_GET['limit'];
}

if ($dLimit == 0)
	$dLimit = 1;

if ($dLimit > 100)
	$dLimit = 100;

$remote_addr = $_SERVER['REMOTE_ADDR'];
if (array_key_exists('remote_addr', $_GET)) {
	$remote_addr = $_GET['remote_addr'];
}

$collDealFeed = DealFeedQuery::retrieveByRemoteAddr($remote_addr, $dLimit, FALSE);
$collDealFeed = DealFeedQuery::formatDealFeedsForOutput($collDealFeed);

if (count($collDealFeed)) {
//	foreach ($collDealFeed as $key => $objDealFeed) {
//		vdump($objDealFeed);
//	}
	echo json_encode($collDealFeed);
}

exit;