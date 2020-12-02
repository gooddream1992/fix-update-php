<form name="" action="<?printf("/%s-users-search.htm", str_replace('/', '-', PAGE_C));?>" method="GET">
<input type="hidden" name="back_page" value="<?=htmlspecialchars($_SERVER['REQUEST_URI']);?>">
<input type="hidden" name="rand" value="<?=rand(10000000, 99999999)?>">

<table width="95%" border="0">
	<tr>
		<td colspan="5" class="txt_head"><h4><?php echo COMPANY_C;?>: <?=breadcrumbs();?></h4></td>
	</tr>
	
	<tr>
		<td colspan="5" class="mainText">
		<ul>
		<li><a href="<?printf("/%s-users.htm?type=wilshire", str_replace('/', '-', PAGE_C));?>">Users</a> <?=(int)$countUsersNeedWilshire;?> in queue for wilshire logins.</li>
		<li><a href="<?printf("/%s-users.htm?type=cc", str_replace('/', '-', PAGE_C));?>">Bill Expir(ing/ed) Users</a> <?=(int)$countUsersExpired;?> expired.</li>
		<li><a href="<?printf("/%s-coupons.htm", str_replace('/', '-', PAGE_C));?>">MS adCenter Coupons</a></li>
		<li><a href="<?printf("/%s-reporting.htm", str_replace('/', '-', PAGE_C));?>">Summary Reporting</a></li>
		<li>Admin the Admins: <a href="<?printf("/%s-admin.htm", str_replace('/', '-', PAGE_C));?>">List Admins</a></li>
		<li>Ignore this for now: <a href="<?printf("/%s-debug.htm", str_replace('/', '-', PAGE_C));?>">Debug (sets your browser to output debugging info)</a></li>
		</ul>
		</td>
	</tr>
	
	<tr>
		<td><input type="text" name="s"><input type="submit" value=" Search Users "></td>
	</tr>
</table>

</form>
