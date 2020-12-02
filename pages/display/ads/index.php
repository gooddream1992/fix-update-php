<?php 

$date_end = mktime(17, 0, 0, date("m"), date("d"), date("Y"))+86400; // tomorrow at 5 pm
$dealDirectory = '/tmp/deals/';

$collDealFeed = DealFeedQuery::create()
	->filterByDateEnd($date_end, Criteria::GREATER_THAN)
	->find();

//$collDealFeed = DealFeedQuery::create()->findById(62994);

$arrDeals = array();
foreach ($collDealFeed as $objDealFeed) {
	$arrDeals[] = $objDealFeed;
}

shuffle($arrDeals);
$i = 0;
$limitTitle = 32;
$limitDescription = 128;
$strOutput = '';

foreach ($arrDeals as $objDealFeed) {
	
	if ($i++ > 1000) {
		break;
	}
	
	if ($objDealFeed->getPrice() < 19) {
		$i--;
		continue;
	}
	
	if (strlen($objDealFeed->getBusiness()->getPostcode()) != 5 && $objDealFeed->getIsOnline() == 0) {
		$i--;
		continue;
	}
	
	$company_name = html_entity_decode($objDealFeed->getBusiness()->getCompanyName(), ENT_COMPAT, 'UTF-8');
	$comlessSource = $objDealFeed->getDealFeedSource()->getContent();
	$comlessSource = str_replace('.com', '', $comlessSource);
	$divisionName = $objDealFeed->getDealFeedDivision()->getDivisionName();

	if ($objDealFeed->getIsOnline() == '1') {
		$divisionName = 'Online';
	}
	
	$title = sprintf("%s - %s"
		, $comlessSource
		, $divisionName
		);
	$title = trim($title, '.');
	$city = html_entity_decode($objDealFeed->getBusiness()->getCity(), ENT_COMPAT, 'UTF-8');
	
	if (strlen($city) > 0 && strlen($title) > 32 && strlen($city) < strlen($objDealFeed->getDealFeedDivision()->getDivisionName())) {
		$title = sprintf("%s - %s"
			, $comlessSource
			, $city
			);
		$title = trim($title, '.');
	}
	
	$description = trim($objDealFeed->getTitle(),'.').'.';
	
	$title = html_entity_decode($title, ENT_COMPAT, 'UTF-8');
	$title = str_replace("\n", " ", $title);
	$title = str_replace(" / ", "/", $title);
	while(ereg("  ",$title))
		$title = ereg_replace("  "," ",$title);
	
	$description = html_entity_decode($description, ENT_COMPAT, 'UTF-8');
	$description = str_replace("\n", " ", $description);
	while(ereg("  ",$description))
		$description = ereg_replace("  "," ",$description);
	
	// take first word off
	$arrText = explode(' ', $description);
	$firstWord = array_shift($arrText);
	
	$strEndsWhen = 'Ends Today';
//	if (date("d") != date("d", $objDealFeed->getDateEnd('U'))) {
//		$strEndsWhen = 'Ends Soon';
//	}
	$iDaysLeft = floor(($objDealFeed->getDateEnd('U')-time())/86400);
	// skip anything ending in more than 2 days
	if ($iDaysLeft > 2) {
		$i--;
		continue;
	}
	
	$price = $objDealFeed->getPrice();
	$strBuy = $strOnly = 'Only $'.$price;
	if (eregi_replace("[^0-9]", "", $firstWord) == $price) {
		$strBuy = '';
	}
	
	if (strlen($description.' '.$strBuy) < 129 && strlen($strBuy)) {
		$description .= ' '.$strBuy;
	} elseif (strlen($title.' - '.$strBuy) < 33 && strlen($strBuy)) {
		$title .= ' - '.$strBuy;
	}
	
	$description = trim($description,'.');
	if (strlen($description.'. '.$strEndsWhen) < 128 && !strpos($description, $strEndsWhen)) {
		$description .= '. '.$strEndsWhen;
	}
	
	while (strlen($description) > 128) {
		$descArr = explode(' ', $description);
		array_pop($descArr);
		$description = implode(' ', $descArr);
	}
	if (substr($description, -1, 1) != '.' && strlen($description) < 128) {
		$description .= '.';
	}
	// add company name if not already in desc
	if (strlen($company_name .' - '.$description) < 129 && !strpos($description, $company_name)) {
		$description = $company_name .' - '.$description;
	}

	if ((int)$objDealFeed->getRetailValue() > 0) {
		$percent = ceil((100/(int)$objDealFeed->getRetailValue()) * ((int)$objDealFeed->getRetailValue() - (int)$objDealFeed->getPrice()));
	} else {
		$percent = '?';
	}
	$strSave = sprintf("Save %d%%", $percent);
	if (strlen($title.' - '.$strSave) < 33 && $percent != '?') {
		$title .= ' - '.$strSave;
	}
	
	// add .com back into source, if we can
	if (strlen($title)+4 < 33) {
		$title = str_replace($comlessSource, $objDealFeed->getDealFeedSource()->getContent(), $title);
	}

//	printf("<img src=\"/display-images-300x250.htm?id=%d\" width=\"300\" height=\"250\"> "
//		, $objDealFeed->getId()
//		);
	printf("<img src=\"/display-images-110x80.htm?id=%d\" width=\"110\" height=\"80\"> "
		, $objDealFeed->getId()
		);

//	printf("<img src=\"/display-images-728x90-2.htm?id=%d\" width=\"728\" height=\"90\"> "
//		, $objDealFeed->getId()
//		);
//	printf("<br><img src=\"%s\"> "
//		, $objDealFeed->getPhotoSmall()
//		);
	printf("<br>(%d) Id: %d<br>Title (%d): %s<br>Description (%d): %s<br>Zip: %s<br><br><hr>\n"
		, $i
		, $objDealFeed->getId()
		, strlen($title)
		, $title
		, strlen($description)
		, $description
		, $objDealFeed->getBusiness()->getPostcode()
		);
		
	$strOutput .= sprintf("\"%d\",\"%d.png\",\"%s\",\"%s\",\"%s\",\"%s\",\"%s\"\n"
		, $objDealFeed->getId()
		, $objDealFeed->getId()
		, $title
		, $description
		, $objDealFeed->getBusiness()->getPostcode()
		, date("Y-m-d", $date_end)
		, $objDealFeed->getDateEnd("Y-m-d H:i:s")
		);
}

if (strlen($strOutput)) {
	file_put_contents($dealDirectory.'deals_'.date("Y-m-d-H-i-s").'.csv', $strOutput);
}

