<?php 

global $objSession;
global $h1;
global $rssLink;

$group = 1;
if (array_key_exists('group', $_GET)) {
	$group = (int)$_GET['group'];
	if ($group == 0)
		$group = 1;
}

$dLimit = 0;
if (array_key_exists('limit', $_GET)) {
	$dLimit = (int)$_GET['limit'];
}
if (array_key_exists('limit', $_GET)) {
	$dLimit = (int)$_GET['limit'];
}
if ($dLimit == 0) {
	$dLimit = 5;
}

$remote_addr = $_SERVER['REMOTE_ADDR'];
if (array_key_exists('REMOTE_ADDR', $_SERVER)) {
	$remote_addr = $_SERVER['REMOTE_ADDR'];
}
if (array_key_exists('ip', $_GET)) {
	$remote_addr = $_GET['ip'];
}
if (array_key_exists('remote_addr', $_GET)) {
	$remote_addr = $_GET['remote_addr'];
}

if (array_key_exists('postal_code', $_GET)) {
	$collectionDealFeed = DealFeedQuery::retrieveByZipcode($_GET['postal_code'], 50, FALSE);
	$collDealFeed = DealFeedQuery::formatDealFeedsForOutput($collectionDealFeed);
} else {
	$collectionDealFeed = DealFeedQuery::retrieveByRemoteAddr($remote_addr, 50, FALSE);
	$collDealFeed = DealFeedQuery::formatDealFeedsForOutput($collectionDealFeed);
}

if (array_key_exists('var', $_GET)) {
	if ($_GET['var'] == 'rss') {
		// output rss feed
		header('Content-Type: text/xml; charset=utf-8');
		echo DealFeedQuery::getRss($collectionDealFeed, $h1);
		exit;
	}
}

