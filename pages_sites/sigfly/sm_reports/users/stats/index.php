
<form name="null" action="<?=$_SERVER['SCRIPT_NAME'];?>" method="post">
<input type=hidden name=page value="<?=htmlspecialchars(PAGE_C); ?>">

<table border=0 cellspacing=0 cellpadding=7 width="100%" bgcolor="#FFFFFF">
	<tr> 
		<td nowrap class="mainText" style="padding:0pt;" colspan="7">Note: This is exactly what the Advertiser sees.</td>
	</tr>
	<tr>
		<td class="mainText" colspan="<?=3+count($arrHead);?>">
		<p>Ad Stats are delayed up to 24 hours.  New campaigns may take several days to start seeing 
		stats.  Typical users see stats within 2 days after installing their pixel code.
		Stats may also be delayed if creative is modified causing it to be queued for approval.
		</p>
		</td>
	</tr>
	<tr>
		<td class="mainText" colspan="<?=3+count($arrHead);?>">&nbsp;</td>
	</tr>
	<tr bgcolor="#d5d5d5">
		<td class="mainText" bgcolor="#ffffff" style="padding:3pt;" width="5%">&nbsp;&nbsp;</td>
		<td class="mainText" align="right" style="padding:3pt;"><b>Date</b></td>
		<?php foreach ($arrHead as $strHeadName) {
			printf("<td class=\"mainText\" align=\"right\" style=\"padding:3pt;\"><b>%s</b></td>\n", $strHeadName);
		}
		?>
		<td class="mainText" style="padding:3pt;">&nbsp;&nbsp;</td>
	</tr>
	
<?

$statSum = array();
$days = 0;

foreach ($arrAdStats as $strDate => $arrAdStat) {
	
	printf("<tr bgcolor=\"#%s\">\n", ($days++&1)?'f5f5f5':'ffffff');
	printf("	<td class=\"mainText\" align=\"right\" bgcolor=\"#ffffff\" style=\"padding:3pt;\">&nbsp;&nbsp;</td>\n");
	printf("	<td class=\"mainText\" align=\"right\" style=\"padding:3pt;\">%s</td>\n", $strDate);
	
	foreach ($arrAdStat as $strHeadName => $dHeadCount) {
		
		// only sum those with # in head name
		if (str_replace('#', '', $strHeadName) != $strHeadName) {
			$statSum[$strHeadName] += $dHeadCount;
		}
		
		printf("	<td class=\"mainText\" align=\"right\" style=\"padding:3pt;\">%d</td>\n", $dHeadCount);
	}
	
	printf("	<td class=\"mainText\" align=\"right\" style=\"padding:3pt;\">&nbsp;&nbsp;</td>\n");
	printf("</tr>\n\n");
}

if (count($statSum)) {
	
	printf("<tr bgcolor=\"#000000\">\n");
	printf("	<td colspan=\"%d\" style=\"padding:0pt;\"><img src=/images/dot.gif height=1 width=1></td>\n", 3+count($arrHead));
	printf("</tr>\n\n");
	
	printf("<tr bgcolor=\"#d5d5d5\">\n");
	printf("	<td class=\"mainText\" align=\"right\" colspan=\"%d\" style=\"padding:3pt;\"><em>Summary:</em> %s days</td>\n", 2+(count($arrHead)-count($statSum)), $days);
	
	foreach ($statSum as $dStatValue) {
		printf("	<td class=\"mainText\" align=\"right\" style=\"padding:3pt;\">%s</td>\n", $dStatValue);
	}
	
	printf("	<td class=\"mainText\" align=\"right\" style=\"padding:3pt;\">&nbsp;&nbsp;</td>\n");
	printf("</tr>\n\n");
	
} else {
	
	
	printf("<tr bgcolor=\"#ffffff\">\n");
	printf("	<td class=\"mainText\" colspan=\"%d\" align=center><em>No stats avaialble yet.</em></td>\n", 3+count($arrHead));
	printf("</tr>\n\n");
}

?>


</table>

</form>

