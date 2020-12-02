<?php 

global $collDealFeed;
global $dLimit;
global $group;
global $strCategory;

$strTarget = '_top';

if (count($collDealFeed)) {
	$arrTitles = array();
	$counter = 0;
	$loop_count = 0;
	$start_count = ($group-1) * $dLimit;
	
	foreach ($collDealFeed as $key => $objDealFeed) {
		
		// skip duplicates, don't count in loop_count
		if (array_key_exists($objDealFeed->Title, $arrTitles)) {
//			printf("<li>skipping %s</li>\n", $objDealFeed->Title);
			continue;
		}
		$arrTitles[$objDealFeed->Title] = TRUE;
		
		if ($loop_count++ < $start_count) {
			continue;
		}
		
		if (++$counter > $dLimit) {
			break 1;
		}
		
		display_daily_deal($objDealFeed, $strTarget);
	}
	$strLink = '/category/'.urlencode($strCategory);
//	$strLink = str_replace('&group='.$_GET['group'], '', $_SERVER['REQUEST_URI']);
//	$strLink = str_replace('?group='.$_GET['group'], '', $strLink);
	
	echo '<br><br><h2 class="title">Additional Pages:</h2><br>';
	PageLinks($group, ceil(count($collDealFeed)/$dLimit), $strLink);
} else {
	echo '<br>No deals found.';
}

