<?php 

global $objSession;

$dealDirectory = '/tmp/deals/';

define('LL_X', 0); // lower left x, etc.
define('LL_Y', 1);
define('LR_X', 2);
define('LR_Y', 3);
define('UR_X', 4);
define('UR_Y', 5);
define('UL_X', 6);
define('UL_Y', 7);

$ariel = 'arial.ttf';
$arielbd = 'arialbd.ttf';
$verdana = 'verdana.ttf';
$verdanabd = 'verdanab.ttf';
$GillSans = 'GillSans.ttf';
$GillSansBd = 'GillSans-Bold.ttf';

if (array_key_exists('id', $_GET)) {
	$objDealFeed = DealFeedQuery::create()->findPk($_GET['id']);
} else {
	$date_end = mktime(17, 0, 0, date("m"), date("d"), date("Y"));
	$collDealFeed = DealFeedQuery::create()
		->filterByDateEnd($date_end, Criteria::GREATER_THAN)
		->find();
	
	$arrDeals = array();
	foreach ($collDealFeed as $objDealFeed) {
		$arrDeals[] = $objDealFeed;
	}
	
	shuffle($arrDeals);
	$objDealFeed = $arrDeals[rand(0, count($arrDeals))];
}
//$collDF = DealFeedQuery::retrieveByRemoteAddr($_SERVER['REMOTE_ADDR'], 3);
//$objDealFeed = DealFeedQuery::create()->findPk($collDF[rand(0,count($collDF)-1)]->Id);

$dst_h = 80;
$dst_w = 110;

$im = imagecreatetruecolor($dst_w, $dst_h);

$white = imagecolorallocate($im, 255, 255, 255);
$lightgrey = imagecolorallocate($im, 220, 220, 220);
$grey = imagecolorallocate($im, 153, 153, 153);
$blue = imagecolorallocate($im, 56, 128, 255);
$red = imagecolorallocate($im, 255, 64, 64);
$green = imagecolorallocate($im, 0, 255, 0);
$orange = imagecolorallocate($im, 255, 102, 0);
$black = imagecolorallocate($im, 0, 0, 0);

$result = curl_process_url($objDealFeed->getPhotoMedium(), 60);
$dealimg = imagecreatefromstring($result['result']);

//imagefilledrectangle($im, imagesx($dealimg), 0, 728, 90, $black);

$imageOffset = 0;
if ($objDealFeed->getDealFeedSource()->getContent() == 'DealOn.com') {
	$imageOffset = 0;
}
$srcW = imagesx($dealimg);
$srcH = imagesy($dealimg);

$percentSrcW = $dst_w/$srcW;
$percentSrcH = $dst_h/$srcH;

if ($percentSrcW < $percentSrcH) {
	// resize based on H
	$resizeOn = 'H';
	$newSrcH = $srcH;
	$newSrcW = $dst_w/$percentSrcH;
	
} else {
	// resize based on W
	$resizeOn = 'W';
	$newSrcH = $dst_h/$percentSrcW;
	$newSrcW = $srcW;
}


switch (strtolower($objDealFeed->getDealFeedSource()->getContent())) {
	case 'groupon.com':
		$deal_icon = imagecreatefromgif('./images/dealn_it/icons/dealicon-groupon.gif');
	break;
	case 'buywithme.com':
		$deal_icon = imagecreatefromgif('./images/dealn_it/icons/dealicon-buywithme.gif');
	break;
	case 'dealon.com':
		$deal_icon = imagecreatefromgif('./images/dealn_it/icons/dealicon-dealon.gif');
	break;
	case 'livingsocial.com':
		$deal_icon = imagecreatefromgif('./images/dealn_it/icons/dealicon-livingsocial.gif');
	break;
	
	default:
		$deal_icon = false;
	break;
}

if (strlen($_GET['src'])) {

	vdump($objDealFeed->getPhotoSmall());
	vdump('$deal_icon: '.$deal_icon);
	vdump('$resizeOn: '.$resizeOn);
	vdump('$srcW: '.$srcW);
	vdump('$srcH: '.$srcH);
	vdump('$percentSrcW: '.$percentSrcW);
	vdump('$percentSrcH: '.$percentSrcH);
	vdump('$newSrcW: '.$newSrcW);
	vdump('$newSrcH: '.$newSrcH);
	vdump('$dst_w: '.$dst_w);
	vdump('$dst_h: '.$dst_h);

	printf("<img src=\"/display-images-110x80.htm?id=%d\" width=\"110\" height=\"80\"> "
		, $objDealFeed->getId()
		);
	printf("<br><img src=\"%s\"> "
		, $objDealFeed->getPhotoSmall()
		);
	
	exit;
}

imagecopyresized  ($im, $dealimg, 0, 0, 0, 0, $dst_w, $dst_h, $newSrcW,  $newSrcH);

if ($deal_icon) {
	imagecopymerge($im, $deal_icon, 90, 00, 0, 0, imagesx($deal_icon), imagesy($deal_icon), 100);
}

header( 'Content-type: image/png' );
imagepng($im);

// save image
imagepng($im, $dealDirectory.$objDealFeed->getId().'.png');



