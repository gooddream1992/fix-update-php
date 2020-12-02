<table width="95%" border="0">
	<tr>
		<td colspan="5" class="txt_head"><h4><?php echo COMPANY_C;?>: <?=breadcrumbs();?></h4></td>
	</tr>
</table>

<p><strong>Click Graphs:</strong></p>
<?php 
$arrStats = (DealFeedClickQuery::getGlobalClickStatsGroupByDateCreated()); 
$max = 0;
foreach ($arrStats as $datekey => $obj) {
	// cntid, year, month, day
	if ($obj->cntid > $max) {
		$max = $obj->cntid;
	}
}
foreach ($arrStats as $datekey => $obj) {
	// cntid, year, month, day
	$time = mktime(0,0,1,$obj->month,$obj->day,$obj->year);
	printf("<div style=\"text-align:left;width:%dpx;height:25px;background-color:red\"><p><span title=\"%s\">%s&nbsp;%d</span></p></div>\n"
	, (500/$max)*$obj->cntid
	, date("Y-m-d l", $time)
	, date("Y-m-d-D", $time)
	, $obj->cntid
	);
}
?>

<p><strong>View Graphs:</strong></p>
<?php 
$arrStats = (DealFeedViewQuery::getGlobalViewStatsGroupByDateCreated()); 
$max = 0;
foreach ($arrStats as $datekey => $obj) {
	// cntid, year, month, day
	if ($obj->cntid > $max) {
		$max = $obj->cntid;
	}
}
foreach ($arrStats as $datekey => $obj) {
	// cntid, year, month, day
	$time = mktime(0,0,1,$obj->month,$obj->day,$obj->year);
	printf("<div style=\"text-align:left;width:%dpx;height:25px;background-color:red\"><p><span title=\"%s\">%s&nbsp;%d</span></p></div>\n"
	, (500/$max)*$obj->cntid
	, date("Y-m-d l", $time)
	, date("Y-m-d-D", $time)
	, $obj->cntid
	);
}
?>


