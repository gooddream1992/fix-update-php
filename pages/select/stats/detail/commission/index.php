<?php 

global $objSession;
global $collCommissions;

?>

<h2>Commission detail for the last 30 days</h2>

<table width="100%" border="0" cellpadding="0" cellspacing="3">
<tr>
	<th>Date/Time</th>
	<th>Type</th>
	<th>Commission (USD)</th>
	<th>Sale (USD)</th>
	<th>Deal Clicked</th>
	<th>Sub-ID</th>
</tr>

<?php

foreach ($collCommissions as $objCommission) {
	/* @var $objCommission DealFeedCommission */

	$dDateCreated = $objCommission->getEventDate("U");
	$dDateDiff = time() - $dDateCreated;
	$dDateToday = time() - mktime(0,0,0, date("m"), date("d"), date("Y"));
	
	if ($dDateDiff > (86400*7)) {
		$strDateFormat = "Y-m-d H:i:s";
		$strTime = $objCommission->getEventDate($strDateFormat);
		
	} elseif ($dDateDiff > $dDateToday) {
		$strDateFormat = "D H:i:s";
		$strTime = $objCommission->getEventDate($strDateFormat);
		
	} elseif ($dDateDiff > (60*60)) {
		$strDateFormat = "H:i:s";
		$strTime = 'Today '.$objCommission->getEventDate($strDateFormat);
		
	} else {
		$strDateFormat = "H:i:s";
		$strTime = 'Today '.$objCommission->getEventDate($strDateFormat);
		
	}
	
	// advanced sale / advanced lead
	$strActionType = $objCommission->getActionType();
	$strActionType = trim(str_replace('advanced', '', $strActionType));
	
	
	printf( "<tr>");
	printf( "	<td valign='top' nowrap>%s</td>", $strTime);
	printf( "	<td valign='top'>%s</td>", $strActionType);
	printf( "	<td valign='top'>\$%s</td>", $objCommission->getCommissionAmount());
	printf( "	<td valign='top'>\$%s</td>", $objCommission->getSaleAmount());
	printf( "	<td valign='top'><span title='%s'>%s</span></td>", htmlspecialchars($objCommission->getDealFeed()->getTitle()), $objCommission->getDealFeedId());
	printf( "	<td valign='top'>%s</td>", $objCommission->getPublisherSId());
	printf( "</tr>");
}

?>

</table>