<form name="" action="/sm_reports-users-search.htm" method="GET">
<input type="hidden" name="page" value="sm_reports/advertisers/search">
<input type="hidden" name="back_page" value="<?=htmlspecialchars($_SERVER['REQUEST_URI']);?>">
<input type="hidden" name="rand" value="<?=rand(10000000, 99999999)?>">

<table width="95%" border="0">
	<tr>
		<td class="txt_head"><h4><?php echo COMPANY_C;?>: <?=breadcrumbs();?></h4></td>
	</tr>
	<tr>
		<td><input type="text" name="s"><input type="submit" value=" Search ">
		<br>
		<span class="mainText">
		To add new users, you must find them first.  Use the form above for that.
		</span>
		</td>
	</tr>
	
	<tr>
		<td class="mainText">
		<hr>
		<p><b>List of users who currently have admin access:</b></p>
<table width="100%" border="0">
<tr bgcolor="#d5d5d5">
<td class="mainText"><b><em>(action)</em></b></td>
<td class="mainText"><b>Email</b></td>
<td class="mainText"><b>Name</b></td>
</tr>
		
<?

if(is_array($AdminUsers)) {
	foreach ($AdminUsers as $AdminUser) {
		/* @var $AdminUser User */
		printf("<tr>\n");
		printf("<td class=\"mainText\"><a href=\"/%s-edit.htm?id=%d&back_page=%s\">view/modify</a></td>", str_replace('/', '-', PAGE_C), $AdminUser->getId(), urlencode($_SERVER['REQUEST_URI']));
		printf("<td class=\"mainText\">%s</td>", $AdminUser->getEmail());
		printf("<td class=\"mainText\">%s %s</td>", $AdminUser->getFname(), $AdminUser->getLname());
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