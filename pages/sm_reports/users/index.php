<form name="" action="<?=$_SERVER['SCRIPT_NAME'];?>" method="GET">
<input type="hidden" name="page" value="<?=PAGE_C;?>/search">
<input type="hidden" name="back_page" value="<?=htmlspecialchars($_SERVER['REQUEST_URI']);?>">
<input type="hidden" name="rand" value="<?=rand(10000000, 99999999)?>">

<table width="95%" border="0">
	<tr>
		<td class="txt_head"><h4><?php echo COMPANY_C;?>: <?=breadcrumbs();?></h4></td>
	</tr>
	<tr>
		<td><input type="text" name="s"><input type="submit" value=" Search Users "></td>
	</tr>
	
	<tr>
		<td class="mainText">
		
<?

if($_GET['type'] != 'cc') {
	
//	echo "<b>Users Needing Wilshire Logins</b>";
//	$UsersNeedWilshire = UserPeer::getNoWilshire();
//	foreach ($UsersNeedWilshire as $UserNW) {
//		/* @var $UserNW User */
//		printf("<br>registered: <b>%s</b>, %s, <a href=\"/%s-wilshire.htm?id=%d&back_page=%s\">set wilshire info</a>\n", 
//			$UserNW->getDateCreated(), $UserNW->getEmail(),  str_replace('/', '-', PAGE_C), $UserNW->getId(), urlencode($_SERVER['REQUEST_URI']));
//	}

} else {

	echo "<b>Users Expired and/or Expiring Soon</b>";
	$UsersExpired = UserPeer::getExpired(0);
	foreach ($UsersExpired as $UserExp) {
		/* @var $UserExp User */
		printf("<br>expiring: <b>%s</b>, %s, <a href=\"%s-accounting.htm?id=%d&back_page=%s\">charge card</a>\n", 
			$UserExp->getDateExpires(), $UserExp->getEmail(),  str_replace('/', '-', PAGE_C), $UserExp->getId(), urlencode($_SERVER['REQUEST_URI']));
			
		printf(" -- <a href=\"%s-edit.htm?id=%d&back_page=%s\">edit</a>\n", 
			str_replace('/', '-', PAGE_C), $UserExp->getId(), urlencode($_SERVER['REQUEST_URI']));
	}
}

?>

		</td>
		
		
	</tr>
</table>

</form>