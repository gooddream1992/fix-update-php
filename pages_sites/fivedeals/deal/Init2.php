<?php 

global $objSession;

$key = preg_replace("/(\\d+)\\/.*/", "\\1", $_GET['var']);
//vdump($key);
//exit;

$objDealFeed = DealFeedQuery::create()->findPk($key);
if (!$objDealFeed instanceof DealFeed) {
	header('Location: /');
	exit;
}

$strShortTitle = '';
if (strlen($objDealFeed->getSubject()) && !strlen($objDealFeed->getTitle())) $strShortTitle = ': '.$objDealFeed->getSubject();
$h1 = $objDealFeed->getBusiness()->getCompanyName(). $strShortTitle.': Deal Detail';
$page_title = $h1 . ': '. $page_title;

$_GET['more_details'] = 1; // force output of more details

