<?php 

global $objSession;
global $h1;
global $rssLink;
global $add_to_head;
global $page_title;
global $h1;

$region = '';
for ($i = 0; $i < strlen($_GET['var']); $i++) {
	if (!strlen(eregi_replace("[^a-z0-9-]", '', $_GET['var']{$i}))) {
		break 1;
	}
	$region .= $_GET['var']{$i};
}

$h1 =  ucwords(str_replace('-', ' ', $region)). ': List Daily Deals in Region';
$page_title = $h1 . ': '. $page_title;

if (strpos($_GET['var'], '/rss') && substr($_GET['var'], -4, 4) != '/rss') {
	// bad link, redirect
	header('Location: /region/'.$region);
	exit;
}

$group = 1;
if (array_key_exists('group', $_GET)) {
	$group = (int)$_GET['group'];
	if ($group == 0)
		$group = 1;
}

$dLimit = 0; // limit per page
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

$collectionDealFeed = DealFeedQuery::retrieveByDivisionSlugOrderByLatLngUsingRemoteAddr($region, $remote_addr, 50);
$collDealFeed = DealFeedQuery::formatDealFeedsForOutput($collectionDealFeed);

$rssLink = 'http://'.$_SERVER['HTTP_HOST'].'/region/'.$region.'/rss';
if (array_key_exists('group', $_GET)) {
	$rssLink = str_replace('?group='.$_GET['group'], '', $rssLink);
	$rssLink = str_replace('&group='.$_GET['group'], '', $rssLink);
}
$add_to_head .= '<link rel="alternate" type="application/rss+xml" title="FiveDeals &raquo; '.$h1.'" href="'.$rssLink.'" />';

// if rss
if (substr($_GET['var'], -4, 4) == '/rss') {
	// output rss
	header('Content-Type: text/xml; charset=utf-8');
	echo DealFeedQuery::getRss($collectionDealFeed, $h1);
	exit;
}