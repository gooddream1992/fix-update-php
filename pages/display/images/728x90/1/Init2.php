<?php 

global $objSession;

define('LL_X', 0); // lower left x, etc.
define('LL_Y', 1);
define('LR_X', 2);
define('LR_Y', 3);
define('UR_X', 4);
define('UR_Y', 5);
define('UL_X', 6);
define('UR_Y', 7);

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

$im = imagecreatetruecolor(728, 90);

$white = imagecolorallocate($im, 255, 255, 255);
$grey = imagecolorallocate($im, 153, 153, 153);
$blue = imagecolorallocate($im, 56, 128, 255);
$red = imagecolorallocate($im, 255, 64, 64);
$green = imagecolorallocate($im, 0, 255, 0);
$orange = imagecolorallocate($im, 255, 102, 0);
$black = imagecolorallocate($im, 0, 0, 0);

$result = curl_process_url($objDealFeed->getPhotoMedium(), 60);
$dealimg = imagecreatefromstring($result['result']);

imagefilledrectangle($im, imagesx($dealimg), 0, 728, 90, $black);

$imageOffset = 30;
if ($objDealFeed->getDealFeedSource()->getContent() == 'DealOn.com') {
	$imageOffset = 0;
}
imagecopymerge( $im, $dealimg, 0, 0, 0, $imageOffset, imagesx($dealimg), imagesy($dealimg), 100 );

imagerectangle($im, 1 , 1, imagesx($dealimg)-2, 88, $white);

$text = $objDealFeed->getTitle();
if (!strlen($text))
	$text = $objDealFeed->getSubject();
$text = html_entity_decode($text, ENT_COMPAT, 'UTF-8');
$text = str_replace("\n", " ", $text);
while(ereg("  ",$text))
	$text = ereg_replace("  "," ",$text);

// take first word off
$arrText = explode(' ', $text);
$firstWord = array_shift($arrText);
$text = implode(' ', $arrText);
	
$text = wordwrap($text, 38-(strlen($firstWord)*3));
$arrText = explode("\n", $text);
$text1 = array_shift($arrText);

$text = wordwrap(implode(" ", $arrText), 38);
$arrText = explode("\n", $text);
$text2 = array_shift($arrText);
if (count($arrText))
	$text2 .= '...';

// Replace path by your own font path
$ariel = 'arial.ttf';
$arielbd = 'arialbd.ttf';
$verdana = 'verdana.ttf';
$verdanabd = 'verdanab.ttf';
$GillSans = 'GillSans.ttf';
$GillSansBd = 'GillSans-Bold.ttf';

// add first word
imagettftext($im, 36, 0, imagesx($dealimg)+10, 42, $orange, $GillSansBd, $firstWord);
$bboxFirstWord = imagettfbbox (36, 0, $GillSansBd , $firstWord);

// Add the text
imagettftext($im, 14, 0, imagesx($dealimg)+15+$bboxFirstWord[LR_X], 42, $white, $GillSansBd, $text1);
imagettftext($im, 14, 0, imagesx($dealimg)+10, 63, $white, $GillSansBd, $text2);

$dealfeed_source = $objDealFeed->getDealFeedSource()->getContent();
$dealfeed_division = $objDealFeed->getDealFeedDivision()->getDivisionName();

$timeToday = mktime(0,0,0,date("m"),date("d"),date("Y"));
$timeTomorrow = $timeToday + 86400;
$strTime = 'soon';
if ($objDealFeed->getDateEnd('U') < $timeTomorrow)
	$strTime = 'today';

// should never happen
if ($objDealFeed->getDateEnd('U') < $timeToday)
	$strTime = $objDealFeed->getDateEnd('D');

if ((int)$objDealFeed->getRetailValue() > 0) {
	$percent = ceil((100/(int)$objDealFeed->getRetailValue()) * ((int)$objDealFeed->getRetailValue() - (int)$objDealFeed->getPrice()));
} else {
	$percent = '?';
}
$savings = (int)$objDealFeed->getRetailValue() - (int)$objDealFeed->getPrice();
$strSavings = sprintf("Discount is %s%% and you SAVE \$%d!"
	, $percent
	, $savings
	);
	
imagettftext($im, 9, 0, imagesx($dealimg)+10, 80, $grey, $GillSans, $strSavings);
imagettftext($im, 18, 0, 618, 44, $orange, $GillSansBd, 'BUY IT!');
$bboxSavings = imagettfbbox(18, 0, $GillSansBd , 'BUY IT!');
imageline(
	$im
	, $bboxSavings[LL_X] + 618 + 2
	, $bboxSavings[LL_Y] + 48
	, $bboxSavings[LR_X] + 618 + 2
	, $bboxSavings[LR_Y] + 48
	, $white);

switch (strtolower($dealfeed_source)) {
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

$adjustAfterIcon = 690;
if ($deal_icon) {
	imagecopymerge($im, $deal_icon, $adjustAfterIcon, 60, 0, 0, imagesx($deal_icon), imagesy($deal_icon), 100);
}

$city = html_entity_decode($objDealFeed->getBusiness()->getCity(), ENT_COMPAT, 'UTF-8');
$company_name = html_entity_decode($objDealFeed->getBusiness()->getCompanyName(), ENT_COMPAT, 'UTF-8');
if (!strlen($city))
	$city = $dealfeed_division;

$bboxCity = imagettfbbox(9, 0, $GillSans, $city);
$adjustAfterIcon -= $bboxCity[LR_X]+5;
imagettftext($im, 9, 0, $adjustAfterIcon, 80, $grey, $GillSans, $city);

// make company_name 225 pix wide
$arrCompanyName = explode(' ', $company_name);
$bboxCompanyName = imagettfbbox(9, 0, $GillSansBd, $company_name);
while ($bboxCompanyName[LR_X] > 225) {
	$null = array_pop($arrCompanyName);
	$company_name = implode(' ', $arrCompanyName);
	$bboxCompanyName = imagettfbbox(9, 0, $GillSansBd, $company_name);
}
$adjustAfterIcon -= $bboxCompanyName[LR_X]+5;
imagettftext($im, 9, 0, $adjustAfterIcon, 80, $grey, $GillSansBd, $company_name);


header( 'Content-type: image/png' );
imagepng($im);



