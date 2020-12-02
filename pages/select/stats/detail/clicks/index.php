<?php 

global $objSession;
global $collClicks;

?>

<h2>Click detail for the last 30 days</h2>

<table width="100%" border="0" cellpadding="0" cellspacing="3">
<tr>
	<th>Date/Time</th>
	<th>Browser</th>
	<th>Referer</th>
	<th>Deal Clicked</th>
	<th>Sub-ID</th>
</tr>

<?php

foreach ($collClicks as $objClick) {
	/* @var $objClick DealFeedClick */

	$dDateCreated = $objClick->getDateCreated("U");
	$dDateDiff = time() - $dDateCreated;
	$dDateToday = time() - mktime(0,0,0, date("m"), date("d"), date("Y"));
	
	if ($dDateDiff > (86400*7)) {
		$strDateFormat = "Y-m-d H:i:s";
		$strTime = $objClick->getDateCreated($strDateFormat);
		
	} elseif ($dDateDiff > $dDateToday) {
		$strDateFormat = "D H:i:s";
		$strTime = $objClick->getDateCreated($strDateFormat);
		
	} elseif ($dDateDiff > (60*60)) {
		$strDateFormat = "H:i:s";
		$strTime = 'Today '.$objClick->getDateCreated($strDateFormat);
		
	} else {
		$strDateFormat = "H:i:s";
		$strTime = 'Today '.$objClick->getDateCreated($strDateFormat);
		
	}
	
	$strHttpReferer = $objClick->getHttpReferer();
	$arrHttpReferer = parse_url($strHttpReferer);
	$strHttpRefererShort = $arrHttpReferer['host'];
	
	printf( "<tr>");
	printf( "	<td valign='top' nowrap>%s</td>", $strTime);
	printf( "	<td valign='top' nowrap><span title='%s'>%s</span></td>", htmlspecialchars($objClick->getUserAgent()->getUserAgent()), $objClick->getUserAgent()->getParent());
	printf( "	<td valign='top'><span title='%s'>%s</span></td>", $strHttpReferer, $strHttpRefererShort);
	printf( "	<td valign='top'><span title='%s'>%s</span></td>", htmlspecialchars($objClick->getDealFeed()->getTitle()), $objClick->getDealFeedId());
	printf( "	<td valign='top'>%s</td>", $objClick->getSid());
	printf( "</tr>");
}

?>

</table>