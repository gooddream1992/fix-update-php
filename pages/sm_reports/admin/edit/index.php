<form name="" action="<?=$_SERVER['SCRIPT_NAME'];?>" method="POST">
<input type="hidden" name="page" value="<?=PAGE_C;?>">
<input type="hidden" name="id" value="<?=$WorkingUser->getId();?>">
<input type="hidden" name="back_page" value="<?=htmlspecialchars($back_page);?>">
<input type="hidden" name="rand" value="<?=rand(10000000, 99999999)?>">

<table width="95%" border="0">
	<tr>
		<td class="txt_head" colspan="2"><h4><?php echo COMPANY_C;?>: <?=breadcrumbs();?></h4></td>
	</tr>

	<?

	if(strlen($back_page)) {
		printf("
		<tr>
			<td class=\"mainText\" colspan=\"2\" align=\"right\">When you are done, <a href=\"%s\">Click here</a> to go back to the last page.</td>
		</tr>
		", $_GET['back_page']);
	}
	
	?>
	
	<tr>
		<td class="mainText" colspan="2" bgcolor="#d5d5d5"><b>Admin Access Control:</b></td>
	</tr>
	<tr>
		<td class="mainText"><b>User Id</b></td>
		<td class="mainText">
		<?=$WorkingUser->getId();?>
		<b>&rarr; </b><a href="/sm_reports-users-edit.htm?back_page=<?=urlencode($_SERVER['REQUEST_URI']);?>&id=<?=$WorkingUser->getId();?>">edit user</a>
		</td>
	</tr>
	<tr>
		<td class="mainText"><b>Email</b></td>
		<td class="mainText"><?=$WorkingUser->getEmail();?> </td>
	</tr>
	
	<tr>
		<td colspan="2"><hr></td>
	</tr>
	
</table>
<table width="95%" border="0">

	<tr>
		<td class="mainText" valign="top" width="33%"><p><b>Available Pages:</b></p>
		<select name="unused_objects[]" multiple size="30">
<?

foreach ($UnusedObjects as $SecurityObject) {
	/* @var $SecurityObject SecurityObject */
	$object_name = strlen($SecurityObject->getDescription())?$SecurityObject->getDescription():$SecurityObject->getName();
	printf("<option value=\"%d\">%s</option>\n", $SecurityObject->getId(), htmlspecialchars($object_name));
}

?>
		</select>
		</td>
		<td class="mainText" valign="middle" align="center" width="33%">
			<input type="submit" name="submit_button" value="<?=htmlspecialchars($button_text_add);?>">
			<br><br>
			<input type="submit" name="submit_button" value="<?=htmlspecialchars($button_text_remove);?>">
		</td>
		<td class="mainText" valign="top" width="33%"><p><b>Accessible Pages by this User:</b></p>
		<select name="working_objects[]" multiple size="30">
<?

foreach ($WorkingObjects as $SecurityObject) {
	/* @var $SecurityObject SecurityObject */
	$object_name = strlen($SecurityObject->getDescription())?$SecurityObject->getDescription():$SecurityObject->getName();
	printf("<option value=\"%d\">%s</option>\n", $SecurityObject->getId(), htmlspecialchars($object_name));
}

?>
		</select>
		</td>
	</tr>
	
</table>

</form>