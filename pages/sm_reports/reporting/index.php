<table width="95%" border="0">
	<tr>
		<td colspan="5" class="txt_head"><h4><?php echo COMPANY_C;?>: <?=breadcrumbs();?></h4></td>
	</tr>
</table>

<p>
<br><strong>Clicks Last 24 Hours:</strong>
<?php 
echo number_format(DealFeedClickQuery::getGlobalClickStatsLast24hours()); 
?>
<br>
<br><strong>Clicks Last 24 Hours by Affiliate:</strong>
<br>
<?php
$arrStats = (DealFeedClickQuery::getGlobalClickStatsLast24hoursGroupByBusinessId()); 
foreach ($arrStats as $obj) {
	// clicks, business_id, email, user_id
	printf("%s %s <a href=/sm_reports-users-edit.htm?id=%d>View</a><br>\n"
	, number_format($obj->clicks)
	, $obj->email
	, $obj->user_id
	);
}
 ?>

<br><strong>Feed Views Last 24 Hours:</strong>
<?php 
echo number_format(DealFeedViewQuery::getGlobalViewStatsLast24hours()); 
?>
<br>
<br><strong>Feed Views Last 24 Hours by Affiliate:</strong>
<br>
<?php 
$arrStats = (DealFeedViewQuery::getGlobalViewStatsLast24hoursGroupByBusinessId()); 
foreach ($arrStats as $obj) {
	// views, business_id, email, user_id
	printf("%s %s <a href=/sm_reports-users-edit.htm?id=%d>View</a><br>\n"
	, number_format($obj->views)
	, $obj->email
	, $obj->user_id
	);
}
?>

<br><strong>Current Commissions: (updated every midnight)</strong>
<br>
<?php 
$arrStats = (DealFeedCommissionQuery::getCurrentCommissionsGroupByBusinessId()); 
foreach ($arrStats as $obj) {
	// commission_amount, c.business_id, b.email, bu.user_id
	printf("USD %s %s <a href=/sm_reports-users-edit.htm?id=%d>View</a><br>\n"
	, number_format($obj->commission_amount, 2)
	, $obj->email
	, $obj->user_id
	);
}
?>
</p>

