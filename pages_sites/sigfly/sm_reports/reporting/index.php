<form name="" action="<?printf("/%s-users-search.htm", str_replace('/', '-', PAGE_C));?>" method="GET">
<input type="hidden" name="back_page" value="<?=htmlspecialchars($_SERVER['REQUEST_URI']);?>">
<input type="hidden" name="rand" value="<?=rand(10000000, 99999999)?>">

<table width="95%" border="0">
	<tr>
		<td colspan="7" class="txt_head"><h4><?php echo COMPANY_C;?>: <?=breadcrumbs();?></h4></td>
	</tr>
	
	<tr bgcolor="#d5d5d5">
		<td class="mainText"><b>Date</b></td>
		<td class="mainText"><b>Signups</b></td>
		<td class="mainText"><b>w/CC</b></td>
		<td class="mainText"><b>w/All Creative</b></td>
		<td class="mainText"><b>w/Text</b></td>
		<td class="mainText"><b>w/Banner</b></td>
		<td class="mainText"><b>hasImps</b></td>
	</tr>
<?

$total = array();

while (list($date, $var) = each($arr_data)) {
	
//	signup
//	cc
//	creative_all
//	creative_text
//	creative_banner

	$total['signup'] += $var['signup'];
	$total['cc'] += $var['cc'];
	$total['imps'] += $var['imps'];
	$total['creative_all'] += $var['creative_all'];
	$total['creative_text'] += $var['creative_text'];
	$total['creative_banner'] += $var['creative_banner'];


	printf("	<tr>\n");
	printf("		<td class=\"mainText\">%s</td>\n", $date);
	printf("		<td class=\"mainText\">%d</td>\n", $var['signup']);
	printf("		<td class=\"mainText\">%d</td>\n", $var['cc']);
	printf("		<td class=\"mainText\">%d</td>\n", $var['creative_all']);
	printf("		<td class=\"mainText\">%d</td>\n", $var['creative_text']);
	printf("		<td class=\"mainText\">%d</td>\n", $var['creative_banner']);
	printf("		<td class=\"mainText\">%d</td>\n", $var['imps']);
	printf("	</tr>\n\n");
}
?>
	
	<tr>
		<td colspan="7" class="mainText" align="center" bgcolor="Black"><img src="/images/dot.gif" height="1" width="1"></td>
	</tr>
	
	<tr bgcolor="#d5d5d5">
		<td class="mainText"><b>Date</b></td>
		<td class="mainText"><b>Signups</b></td>
		<td class="mainText"><b>w/CC</b></td>
		<td class="mainText"><b>w/All Creative</b></td>
		<td class="mainText"><b>w/Text</b></td>
		<td class="mainText"><b>w/Banner</b></td>
		<td class="mainText"><b>hasImps</b></td>
	</tr>
	<tr>
		<td colspan="7" class="mainText" align="center" bgcolor="Black"><img src="/images/dot.gif" height="1" width="1"></td>
	</tr>
	<tr>
		<td class="mainText"><em>Sum:</em></td>
		<td class="mainText"><?=(int)$total['signup'];?></td>
		<td class="mainText"><?=(int)$total['cc'];?></td>
		<td class="mainText"><?=(int)$total['creative_all'];?></td>
		<td class="mainText"><?=(int)$total['creative_text'];?></td>
		<td class="mainText"><?=(int)$total['creative_banner'];?></td>
		<td class="mainText"><?=(int)$total['imps'];?></td>
	</tr>
	<tr>
		<td colspan="7" class="mainText" align="center"><hr></td>
	</tr>
	<!--
	<tr bgcolor="#d5d5d5">
		<td colspan="7" class="mainText" align="center">testing data, ignore below here</td>
	</tr>
	
	<tr bgcolor="#d5d5d5">
		<td class="mainText"><b>Date</b></td>
		<td class="mainText"><b>Signups</b></td>
		<td class="mainText"><b>w/CC</b></td>
		<td class="mainText"><b>w/Creative</b></td>
		<td class="mainText"><b>w/Pixel</b></td>
		<td class="mainText"><b>Complete</b></td>
		<td class="mainText"><b>hasImps</b></td>
	</tr>
	
	<tr>
		<td class="mainText">04-03-2006</td>
		<td class="mainText">10</td>
		<td class="mainText">7</td>
		<td class="mainText">5</td>
		<td class="mainText">10</td>
		<td class="mainText">5</td>
		<td class="mainText">-</td>
	</tr>
	-->
</table>

</form>

