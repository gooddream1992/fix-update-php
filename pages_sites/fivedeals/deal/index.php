<?php 

global $objDealFeed;

$strTarget = '_top';
display_daily_deal(DealFeedQuery::formatDealFeedForOutput($objDealFeed), $strTarget);

if (!stripos($_SERVER['HTTP_USER_AGENT'], 'bot')) {
	$url = $objDealFeed->getClickUrlRedirect();
	$url = str_replace('.com', '', $url);
	$url = str_replace('&sid=', '&sid=p.', $url);
	
	printf("\n<iframe src=\"%s\" height=\"1\" width=\"1\" style=\"border:0px;\"></iframe>\n", $url);
}
