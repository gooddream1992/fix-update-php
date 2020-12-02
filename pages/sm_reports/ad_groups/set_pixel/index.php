<form name="" action="<?=$_SERVER['SCRIPT_NAME'];?>" method="POST">
<input type="hidden" name="page" value="<?=PAGE_C;?>">
<input type="hidden" name="id" value="<?=$WorkingAdGroup->getId();?>">
<input type="hidden" name="back_page" value="<?=htmlspecialchars($back_page);?>">
<input type="hidden" name="rand" value="<?=rand(10000000, 99999999)?>">

<table width="95%" border="0">
	<tr>
		<td class="txt_head" colspan="2"><h4><?php echo COMPANY_C;?>: <?=breadcrumbs();?></h4></td>
	</tr>
	
	<?

	if(strlen($_GET['back_page'])) {
		printf("
		<tr>
			<td class=\"mainText\" colspan=\"2\" align=\"right\">When you are done, <a href=\"%s\">Click here</a> to go back to the last page.</td>
		</tr>
		", $_GET['back_page']);
	}
	
	?>
	
	<tr>
		<td class="mainText" colspan="2" bgcolor="#d5d5d5"><b>Update Pixel Info</b></td>
	</tr>
	<tr>
		<td class="mainText"><b>User Id</b></td>
		<td class="mainText">
		<?=$WorkingAdGroup->getUser()->getId();?>
		<b>&rarr; </b><a href="/sm_reports-advertisers-edit.htm?back_page=<?=urlencode($_SERVER['REQUEST_URI']);?>&id=<?=$WorkingAdGroup->getUser()->getId();?>">edit user</a>
		</td>
	</tr>
	<tr>
		<td class="mainText"><b>Email</b></td>
		<td class="mainText"><?=$WorkingAdGroup->getUser()->getEmail();?> </td>
	</tr>
	<tr>
		<td class="mainText"><b>Company Name</b></td>
		<td class="mainText"><?=$WorkingAdGroup->getUser()->getCompanyName();?> </td>
	</tr>
	<tr>
		<td class="mainText"><b>Wilshire</b></td>
		<td class="mainText" nowrap>
		<b>&rarr; U:</b> <input type="text" style="background-color: #d5d5d5;" value="<?=htmlspecialchars($WorkingAdGroup->getUser()->getWilshireUsername());?>" size="<?=strlen($WorkingAdGroup->getUser()->getWilshireUsername())+1;?>">
		<b>&rarr; P:</b> <input type="text" style="background-color: #d5d5d5;" value="<?=htmlspecialchars($WorkingAdGroup->getUser()->getWilshirePassword());?>" size="<?=strlen($WorkingAdGroup->getUser()->getWilshirePassword())+1;?>">
		</td>
	</tr>
	<tr>
		<td class="mainText"><b>AdGroup Name</b></td>
		<td class="mainText"><?=$WorkingAdGroup->getGroupName();?> </td>
	</tr>
	<tr>
		<td class="mainText"><b>Notify user by email that their pixel code is ready?</b></td>
		<td class="mainText">
		<input type="radio" name="notify_user" value="yes"<?=($_POST['notify_user'] == 'yes')?' checked':'';?>>Yes --
		<input type="radio" name="notify_user" value="no"<?=($_POST['notify_user'] == 'no')?' checked':'';?>>No.
		</td>
	</tr>
</table>
<br>

<?=$WorkingAdGroup->getFormHeader(''); ?>
<?=$WorkingAdGroup->getForm($WorkingAdGroup->getFieldsPixel()); ?>
<?=$WorkingAdGroup->getFormFooter(' Save '); ?>


</form>

