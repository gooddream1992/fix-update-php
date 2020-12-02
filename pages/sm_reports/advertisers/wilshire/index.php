<form name="" action="<?=$_SERVER['SCRIPT_NAME'];?>" method="POST">
<input type="hidden" name="page" value="<?=PAGE_C;?>">
<input type="hidden" name="id" value="<?=$UserWilshire->getId();?>">
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
		", $back_page);
	}
	
	/* @var $UserWilshire User */
	
	?>
	
	<tr>
		<td class="mainText" colspan="2" bgcolor="#d5d5d5"><b>Update Wilshire Info</b></td>
	</tr>
	<tr>
		<td class="mainText"><b>User Id</b></td>
		<td class="mainText">
		<?=$UserWilshire->getId();?>
		<b>&rarr; </b><a href="/sm_reports-advertisers-edit.htm?back_page=<?=urlencode($_SERVER['REQUEST_URI']);?>&id=<?=$UserWilshire->getId();?>">edit user</a>
		</td>
	</tr>
	<tr>
		<td class="mainText"><b>Email</b></td>
		<td class="mainText"><?=$UserWilshire->getEmail();?> </td>
	</tr>
	<tr>
		<td class="mainText"><b>Company Name</b></td>
		<td class="mainText"><?=$UserWilshire->getCompanyName();?> </td>
	</tr>
</table>
<br>

<?=$UserWilshire->getFormHeader('Add/Edit Wilshire Login Info'); ?>
<?=$UserWilshire->getForm($UserWilshire->getFieldsWilshire()); ?>
<?=$UserWilshire->getFormFooter(' Save '); ?>


</form>

