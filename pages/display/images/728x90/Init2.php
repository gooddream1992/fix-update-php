<?php 

global $objSession;

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

$cacheKey = $_SERVER['HTTP_HOST'].'_pages_display_images_728x90_'.$objDealFeed->getId();

$im = imagecreatetruecolor(728, 90);

$white = imagecolorallocate($im, 255, 255, 255);
$grey = imagecolorallocate($im, 128, 128, 128);
$blue = imagecolorallocate($im, 56, 128, 255);
$red = imagecolorallocate($im, 255, 64, 64);
$green = imagecolorallocate($im, 0, 255, 0);
$orange = imagecolorallocate($im, 255, 101, 0);

$black = imagecolorallocate($im, 0, 0, 0);
//imagefilledrectangle($im, 0, 0, 728, 90, $white);

$result = curl_process_url($objDealFeed->getPhotoMedium(), 60);

$dealimg = imagecreatefromstring($result['result']);

imagefill($im, 0, 0, $white);
//imagefilledrectangle($im, imagesx($dealimg), 0, 728, 90, $white);

$imageOffset = 30;
if ($objDealFeed->getDealFeedSource()->getContent() == 'DealOn.com') {
	$imageOffset = 0;
}
imagecopymerge( $im, $dealimg, 0, 0, 0, $imageOffset, imagesx($dealimg), imagesy($dealimg), 100 );
// imagecopymerge($dst_im, $src_im, $dst_x, $dst_y, $src_x, $src_y, $src_w, $src_h, $pct)
//imagecopy (          $dst_im, $src_im, $dst_x, $dst_y, $src_x, $src_y, $src_w, $src_h)
//imagecopyresampled ( $dst_im, $src_im, $dst_x, $dst_y, $src_x, $src_y, $dst_w, $dst_h, $src_w, $src_h)

$text = $objDealFeed->getTitle();
if (!strlen($text))
	$text = $objDealFeed->getSubject();
$text = html_entity_decode($text, ENT_COMPAT, 'UTF-8');
//$text = htmlspecialchars_decode($text);
$text = str_replace("\n", " ", $text);
while(ereg("  ",$text))
	$text = ereg_replace("  "," ",$text);
$text = wordwrap($text, 53);

$arrText = explode("\n", $text);
$text = array_shift($arrText);

// Replace path by your own font path
$ariel = 'arial.ttf';
$arielbd = 'arialbd.ttf';
$verdana = 'verdana.ttf';
$verdanabd = 'verdanab.ttf';

// Add some shadow to the text
imagettftext($im, 16, 0, imagesx($dealimg)+11, 19, $grey, $ariel, $text);
// Add the text
imagettftext($im, 16, 0, imagesx($dealimg)+10, 18, $black, $ariel, $text);

$description = $objDealFeed->getDetails();
$description = trim(strip_tags($description));
$description = str_replace("\n", " ", $description);
$description = html_entity_decode($description, ENT_COMPAT, 'UTF-8');
//$description = htmlspecialchars_decode($description);
$dealfeed_source = $objDealFeed->getDealFeedSource()->getContent() . ', ' . $objDealFeed->getDealFeedDivision()->getDivisionName();
$description = $dealfeed_source . ' - ' .$description;

while(ereg("  ",$description))
	$description = ereg_replace("  "," ",$description);

$maxlen = 280;
$maxlinelen = 87;
if ($objDealFeed->getDealFeedSource()->getContent() == 'BuyWithMe.com') {
	$maxlinelen = 85;
}
$description = strlen($description)>$maxlen?substr($description, 0, $maxlen).'...':$description;
$description = wordwrap($description, $maxlinelen);
$arrDesc = explode("\n", $description);
$description = $arrDesc[0]."\n".$arrDesc[1]."\n".$arrDesc[2].'...';

//$description .= ' ('.floor(CheckPointTime('footer')).')';

imagettftext($im, 8, 0, imagesx($dealimg)+10, 37, $black, $verdana, $description);
//imagettftext($im, 8, 0, imagesx($dealimg)+10, 37, $green, $verdana, $dealfeed_source);
imagettftext($im, 8, 0, imagesx($dealimg)+9, 36, $green, $verdana, $dealfeed_source);

$timeToday = mktime(0,0,0,date("m"),date("d"),date("Y"));
$timeTomorrow = $timeToday + 86400;
$strTime = 'soon';
if ($objDealFeed->getDateEnd('U') < $timeTomorrow)
	$strTime = 'today';
	
// should never happen
if ($objDealFeed->getDateEnd('U') < $timeToday)
	$strTime = $objDealFeed->getDateEnd('D');


imagettftext($im, 11, 0, imagesx($dealimg)+10, 88, $red, $verdanabd, 'Buy this deal - Find awesome deals!');
imagettftext($im, 11, 0, 545, 88, $red, $verdanabd, 'Ends '.$strTime.'!');
imagettftext($im, 11, 0, 648, 88, $blue, $verdanabd, 'Click now');
//imagettftext($im, 11, 0, 613, 88, $blue, $verdanabd, 'Click for more');

header( 'Content-type: image/png' );
imagepng($im);
//header( 'Content-type: image/jpeg' );
//imagejpeg($im, null, 100);


