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

$im = imagecreatetruecolor(728, 90);

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

// add first word
$fontSizeFirstWord = 20;
imagettftext($im, $fontSizeFirstWord, 0, imagesx($dealimg)+10, 30, $orange, $GillSansBd, $firstWord);
$bboxFirstWord = imagettfbbox ($fontSizeFirstWord, 0, $GillSansBd , $firstWord);

$strBuy = 'ONLY $'.$objDealFeed->getPrice();
if (eregi_replace("[^0-9]", "", $firstWord) == $objDealFeed->getPrice()) {
	$strBuy = 'Ends Today';
}
$fontSizeBuy = 18;
$bboxBuy = imagettfbbox($fontSizeBuy, 0, $GillSansBd , $strBuy);
imagettftext($im, $fontSizeBuy, 0, 710-$bboxBuy[LR_X], 44, $orange, $GillSansBd, $strBuy);
imageline(
	$im
	, 710-$bboxBuy[LL_X]
	, $bboxBuy[LL_Y] + 46
	, 710-$bboxBuy[LR_X] + 2
	, $bboxBuy[LR_Y] + 46
	, $white);

$fontSizeTitle = 14;
$text1 = $text;
$arrText = explode(' ', $text1);
$bboxText = imagettfbbox($fontSizeTitle, 0, $GillSansBd, $text1);
$counter = 0;
while ($bboxText[LR_X] > 690-$bboxFirstWord[LR_X]-5-$bboxBuy[LR_X]-imagesx($dealimg)) {
	if ($counter++ > 50)
		die('loop count too long 1');
	$null = array_pop($arrText);
	$text1 = implode(' ', $arrText);
	$bboxText = imagettfbbox($fontSizeTitle, 0, $GillSansBd, $text1);
}
	
$text2 = trim(str_replace($text1, '', $text));
$arrText = explode(' ', $text2);
$bboxText = imagettfbbox($fontSizeTitle, 0, $GillSansBd, $text2);
$counter = 0;
while ($bboxText[LR_X] > 690-$bboxBuy[LR_X]-imagesx($dealimg)) {
	if ($counter++ > 50)
		die('loop count too long 2');
	$null = array_pop($arrText);
	$text2 = implode(' ', $arrText);
	$bboxText = imagettfbbox($fontSizeTitle, 0, $GillSansBd, $text2);
}
$text2 = trim($text2, '-, ');

// Add the text
imagettftext($im, $fontSizeTitle, 0, imagesx($dealimg)+17+$bboxFirstWord[LR_X], 30, $white, $GillSansBd, $text1);
imagettftext($im, $fontSizeTitle, 0, imagesx($dealimg)+10, 49, $white, $GillSansBd, $text2);

$dealfeed_source = $objDealFeed->getDealFeedSource()->getContent();
$dealfeed_division = $objDealFeed->getDealFeedDivision()->getDivisionName();

if ((int)$objDealFeed->getRetailValue() > 0) {
	$percent = ceil((100/(int)$objDealFeed->getRetailValue()) * ((int)$objDealFeed->getRetailValue() - (int)$objDealFeed->getPrice()));
} else {
	$percent = '?';
}
$fontSizeSavings = 8;
$savings = (int)$objDealFeed->getRetailValue() - (int)$objDealFeed->getPrice();
$value = (int)$objDealFeed->getRetailValue();
$strSavings = sprintf("VALUE \$%s / DISCOUNT %s%% / SAVE \$%s!"
	, $value
	, $percent
	, $savings
	);
//$strSavings = sprintf("Discount is %s%% and you SAVE \$%d!"
//	, $percent
//	, $savings
//	);

$bboxSavings = imagettfbbox($fontSizeSavings, 0, $GillSans, $strSavings);
imagettftext($im, $fontSizeSavings, 0, imagesx($dealimg)+10, 80, $lightgrey, $GillSans, $strSavings);

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

$fontSizeCity = 9;
$bboxCity = imagettfbbox(9, 0, $GillSans, $city);
$adjustAfterIcon -= $bboxCity[LR_X]+5;
imagettftext($im, $fontSizeCity, 0, $adjustAfterIcon, 80, $grey, $GillSans, $city);

// make company_name x pix wide
$widthAllowed = 450 - $bboxSavings[LR_X] - $bboxCity[LR_X];
$arrCompanyName = explode(' ', $company_name);
$bboxCompanyName = imagettfbbox($fontSizeCity, 0, $GillSansBd, $company_name);
while ($bboxCompanyName[LR_X] > $widthAllowed) {
	$null = array_pop($arrCompanyName);
	$company_name = implode(' ', $arrCompanyName);
	$bboxCompanyName = imagettfbbox($fontSizeCity, 0, $GillSansBd, $company_name);
}
$adjustAfterIcon -= $bboxCompanyName[LR_X]+5;
imagettftext($im, $fontSizeCity, 0, $adjustAfterIcon, 80, $grey, $GillSansBd, $company_name);


header( 'Content-type: image/png' );
imagepng($im);



