<?php 

global $objSession;
global $h1;
global $rssLink;
global $strCategory;
global $add_to_head;
global $page_title;
global $h1;

$category = '';
for ($i = 0; $i < strlen($_GET['var']); $i++) {
	if (!strlen(eregi_replace("[^a-z0-9-]", '', $_GET['var']{$i}))) {
		break 1;
	}
	$category .= $_GET['var']{$i};
}

$h1 =  ucwords(str_replace('-', ' ', $category)). ': List Daily Deals in Category';
$page_title = $h1 . ': '. $page_title;

if (strpos($_GET['var'], '/rss') && substr($_GET['var'], -4, 4) != '/rss') {
	// bad link, redirect
	header('Location: /category/'.$category);
	exit;
}

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

$strCategory = $_GET['var'];
$strCategory = preg_replace("/(.*)\\/.*/", "\\1", $strCategory);

$collectionDealFeed = DealFeedQuery::retrieveByCategoryOrderByLatLngUsingRemoteAddr($strCategory, $remote_addr, 50, 'slug_part');
$collDealFeed = DealFeedQuery::formatDealFeedsForOutput($collectionDealFeed);

$rssLink = 'http://'.$_SERVER['HTTP_HOST'].'/category/'.urlencode($strCategory).'/rss';
if (array_key_exists('group', $_GET)) {
	$rssLink = str_replace('?group='.$_GET['group'], '', $rssLink);
	$rssLink = str_replace('&group='.$_GET['group'], '', $rssLink);
}
$add_to_head = '<link rel="alternate" type="application/rss+xml" title="FiveDeals &raquo; '.$h1.'" href="'.$rssLink.'" />';

// if rss
if (substr($_GET['var'], -4, 4) == '/rss') {
	// output rss
	header('Content-Type: text/xml; charset=utf-8');
	echo DealFeedQuery::getRss($collectionDealFeed, $h1);
	exit;
}
