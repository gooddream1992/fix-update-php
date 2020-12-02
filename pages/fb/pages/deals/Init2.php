<?php

global $objSession;

$secret = '69f7b8acd78036738c36faa6c36f87f7';
$arrFBRequest = array();
if (array_key_exists('signed_request', $_POST)) {
	$arrFBRequest = parse_signed_request($_POST['signed_request'], $secret);
}

$group = 1;
if (array_key_exists('group', $_GET)) {
	$group = (int)$_GET['group'];
	if ($group == 0)
		$group = 1;
}

if (array_key_exists('content', $_POST)) {
	$cont = unserialize($_POST['content']);
} else {
	$cont = new stdClass();
	$cont->_GET = $_GET;
	$cont->_POST = $_POST;
	$cont->_SERVER = $_SERVER;
}

//if ($cont->_SERVER['REMOTE_ADDR'] != '98.154.211.93') {
//	echo 'Under construction.';
//	exit;
//}

$base_link = sprintf("http://%s%s", $cont->_SERVER['HTTP_HOST'], $cont->_SERVER['REQUEST_URI']);


$dLimit = 0;
if (array_key_exists('limit', $_GET)) {
	$dLimit = (int)$_GET['limit'];
}
if (array_key_exists('limit', $cont->_GET)) {
	$dLimit = (int)$cont->_GET['limit'];
}
if ($dLimit == 0) {
	$dLimit = 2;
}

$remote_addr = $_SERVER['REMOTE_ADDR'];
if (array_key_exists('REMOTE_ADDR', $cont->_SERVER)) {
	$remote_addr = $cont->_SERVER['REMOTE_ADDR'];
}
if (array_key_exists('ip', $cont->_GET)) {
	$remote_addr = $cont->_GET['ip'];
}
if (array_key_exists('remote_addr', $cont->_GET)) {
	$remote_addr = $cont->_GET['remote_addr'];
}

if (array_key_exists('postal_code', $cont->_GET)) {
	$collDealFeed = DealFeedQuery::retrieveByZipcode($cont->_GET['postal_code'], 40, FALSE);
	$collDealFeed = DealFeedQuery::formatDealFeedsForOutput($collDealFeed);
} else {
	$collDealFeed = DealFeedQuery::retrieveByRemoteAddr($remote_addr, 40, FALSE);
	$collDealFeed = DealFeedQuery::formatDealFeedsForOutput($collDealFeed);
}
