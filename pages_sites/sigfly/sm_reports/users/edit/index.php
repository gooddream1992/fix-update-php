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
		", $back_page);
	}
	
	?>
	
	<tr bgcolor="#d5d5d5">
		<td class="mainText" colspan="2"><b>Update User Info</b></td>
	</tr>
	<tr>
		<td class="mainText"><b>User Id</b></td>
		<td class="mainText"><?=$WorkingUser->getId();?></td>
	</tr>
	<tr>
		<td class="mainText"><b>Email</b></td>
		<td class="mainText"><?=$WorkingUser->getEmail();?> </td>
	</tr>
	<tr>
		<td class="mainText"><b>Accounting</b></td>
		<td class="mainText">
		<a href="/sm_reports-users-accounting.htm?id=<?=$WorkingUser->getId();?>">Accounting/CC Info</a>
		(Last 4: <?=$WorkingUser->getDefaultPaymentMethod()->getNumberLastFour();?>)
		<a href="/sm_reports-users-notes.htm?template_id=9&id=<?=$WorkingUser->getId();?>">email no cc</a>
		</td>
	</tr>
	<tr>
		<td class="mainText"><b>Date Registered</b></td>
		<td class="mainText"><?=$WorkingUser->getDateCreated();?> </td>
	</tr>
	<tr>
		<td class="mainText"><b>Date Expires</b></td>
		<td class="mainText"><?=$WorkingUser->getDateExpires();?> </td>
	</tr>
<?

if ($WorkingUser->getIsEmailVerified() != 1) {
	printf("
		<tr>
			<td class=\"mainText\"><b><font color=red>Email Not Verified</font></b></td>
			<td class=\"mainText\"><a href=\"/help-verify_email.htm?email=%s\">Resend Verification Email</a></td>
		</tr>
		", urlencode(trim($WorkingUser->getEmail()))
		);
}

if($objSession->getUser()->isWebSiteAdmin('sm_reports/admin/edit')) {

	echo "	<tr bgcolor=\"#f5f5f5\">\n";
	echo "		<td class=\"mainText\" valign=\"top\"><b>Admin Rights</b></td>\n";
	echo "		<td class=\"mainText\" valign=\"top\">\n";
	
	$isAdminWorkingUser = $WorkingUser->isWebSiteAdmin();
	
	printf("<a href=\"/sm_reports-admin-edit.htm?id=%d&back_page=%s\">View / Assign / Delete Rights</a>\n", $WorkingUser->getId(), urlencode($_SERVER['REQUEST_URI']));
	printf("<br>This user currently does %s have access %s admin areas.\n", $isAdminWorkingUser?'':'not', $isAdminWorkingUser?'some or all':'any');
	
	
	echo " </td>\n";
	echo "	</tr>\n";

}

?>

</table>
<br>

<?=$WorkingUser->getFormHeader('Edit User Info'); ?>
<?=$WorkingUser->getForm($WorkingUser->getFieldsAdmin()); ?>
<?=$WorkingUser->getFormFooter(' Save '); ?>


</form>
<br>

<?

printf("<table width=\"100%%\" border=\"0\" cellpadding=\"7\" cellspacing=\"0\">");
printf("<tr bgcolor=\"#d0dce0\">");
printf("<td class=\"mainText\" style=\"border-bottom: 1px solid #000000;\"><b>User Notes:</td>");

if(strlen($back_page)) {
	printf("<td class=\"mainText\" align=\"right\" style=\"border-bottom: 1px solid #000000;\"><a href=\"%s\">Back to Last Page</a></td>", $back_page);
}

printf("<td class=\"mainText\" align=\"right\" style=\"border-bottom: 1px solid #000000;\"><a href=\"%s?page=%s/notes&id=%d&back_page=%s\">Add New Note</a></tr>",
	$_SERVER['SCRIPT_NAME'], PAGE_PARENT_C, $WorkingUser->getId(), urlencode($_SERVER['REQUEST_URI']));

printf("</tr>");
printf("</table>");

if($UserNotes !== null) {
	
	foreach ($UserNotes as $UNote) {
		/* @var $UNote UserNote */
		printf("<table width=\"100%%\" border=\"0\" cellpadding=\"7\" cellspacing=\"0\">");
		printf("<tr class=\"%s\"><td class=\"mainText\">%s</td>", ++$i&1?'odd':'even', $UNote->getDateCreated('r'));
		printf("<td class=\"mainText\" align=\"right\">View Author: <a href=\"%s?page=%s&id=%d&back_page=%s\">%s</a></td>\n", 
			$_SERVER['SCRIPT_NAME'], 
			PAGE_C, 
			$UNote->getUserRelatedByAdminId()->getId(), 
			urlencode($_SERVER['REQUEST_URI']), 
			$UNote->getUserRelatedByAdminId()->getEmail());
		printf("</tr>");
		printf("<tr class=\"%s\"><td class=\"mainText\" colspan=\"2\" style=\"border-bottom: 1px solid #000000; line-height: 14px\">", $i&1?'odd':'even');
		printf("%s", str_replace("\n", "\n<br>", $UNote->getNotes()));
		printf("</td></tr>");
		printf("</table>");
		
	}
}


?>
