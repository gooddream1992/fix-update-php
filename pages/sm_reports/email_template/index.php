<form name="" action="/sm_reports-users-search.htm" method="GET">
<input type="hidden" name="page" value="sm_reports/advertisers/search">
<input type="hidden" name="back_page" value="<?=htmlspecialchars($back_page);?>">
<input type="hidden" name="rand" value="<?=rand(10000000, 99999999)?>">

<table width="95%" border="0">
	<tr>
		<td class="txt_head"><h4><?php echo COMPANY_C;?>: <?=breadcrumbs();?></h4></td>
	</tr>
	
	<tr>
		<td class="mainText">
		<hr>
		<p><b>List of email templates:</b></p>
<table width="100%" border="0">
<tr bgcolor="#d5d5d5">
<td class="mainText"><b><em>(action)</em></b></td>
<td class="mainText"><b>id</b></td>
<td class="mainText"><b>Name/Subject</b></td>
</tr>
		
<?

if(is_array($collEmailTemplate)) {
	foreach ($collEmailTemplate as $EmailTemplate) {
		/* @var $EmailTemplate EmailTemplate */
		printf("<tr>\n");
		printf("<td class=\"mainText\" valign=top width=\"15%%\"><a href=\"/%s-edit.htm?id=%d&back_page=%s\">view/modify</a></td>", str_replace('/', '-', PAGE_C), $EmailTemplate->getId(), urlencode($_SERVER['REQUEST_URI']));
		printf("<td class=\"mainText\" valign=top width=\"5%%\">%s</td>", $EmailTemplate->getId());
		printf("<td class=\"mainText\" valign=top>%s<br>%s</td>", htmlspecialchars($EmailTemplate->getName()), htmlspecialchars($EmailTemplate->getSubject()));
		printf("</tr>\n");
	}
} else {
	printf("<tr><td colspan=3 align=center class=\"mainText\">(none found)</td></tr>\n");
}

?>

</table>
		</td>
		
		
	</tr>
</table>

</form>