<script language="JavaScript">

function selectTemplate(form) {
	
	if (form.templates.value == "") {
		alert('You must first select a choice!');
	} else {
		 
		var multipleVar = form.templates.options[form.templates.selectedIndex].value 
		if(form.notes.value == "") {
			
			form.notes.value = multipleVar + '\n'; 
			
		} else if (form.notes.value != "") {
			
			var insertedMultipleVar = form.notes.value;
			form.notes.value = insertedMultipleVar +  multipleVar + '\n'
			
		}
	}
}


</script>

<form name="" action="<?=$_SERVER['SCRIPT_NAME'];?>" method="POST">
<input type="hidden" name="page" value="<?=PAGE_C;?>">
<input type="hidden" name="id" value="<?=$WorkingUser->getId();?>">
<input type="hidden" name="back_page" value="<?=htmlspecialchars($back_page);?>">
<input type="hidden" name="rand" value="<?=rand(10000000, 99999999)?>">

<table width="95%" border="0">
	<tr>
		<td class="txt_head" colspan="2"><h4><?php echo COMPANY_C;?>: <?=breadcrumbs();?></h4></td>
	</tr>
	
	<tr>
		<td class="mainText" colspan="2"><b>Add Note to User</b></td>
	</tr>
	<tr>
		<td class="mainText"><b>User Id</b></td>
		<td class="mainText"><?=$WorkingUser->getId();?></td>
	<tr>
		<td class="mainText"><b>Email</b></td>
		<td class="mainText"><?=$WorkingUser->getEmail();?> </td>
	</tr>
	<tr>
		<td class="mainText"><b>Company Name</b></td>
		<td class="mainText"><?=$WorkingUser->getCompanyName();?> </td>
	</tr>
	<tr bgcolor="#d0dce0">
		<td class="mainText"><b>Also Send as Email</b></td>
		<td class="mainText">
		<input type="radio" name="send_email" value="1"<?=($_POST['send_email']=='1')?' checked':'';?>>Yes -
		<input type="radio" name="send_email" value="0"<?=($_POST['send_email']!='1')?' checked':'';?>>No 
		<br> From: <input type="text" size="40" maxlength="64" name="email_from" value="<?=htmlspecialchars($_POST['email_from']);?>">
		<br> Subject: <input type="text" size="40" maxlength="64" name="email_subject" value="<?=htmlspecialchars($_POST['email_subject']);?>">
		
		</td>
	</tr>
	<tr>
		<td class="mainText"><b>Avaialble Templates</b></td>
		<td class="mainText"><select name="templates" id="templates">
		<option value=""> -- Select One -- </option>

<?

foreach ($collEmailTemplate as $EmailTemplate) {
	printf("<option value=\"%s\">%s</option>\n", htmlspecialchars($EmailTemplate->getBody()), htmlspecialchars($EmailTemplate->getName()));
}

?>

		</select>
		<input type="button" name="button1" value="Populate Textarea" onMouseOver="style.cursor='pointer'" onClick="selectTemplate(this.form)" />
		<a href="/sm_reports-email_template.htm">&gt;&gt; Edit Templates</a>
		</td>
	</tr>
	<tr>
		<td class="mainText" colspan="2"><textarea name="notes" cols="65" id="notes" rows="7"><?=htmlspecialchars($_POST['notes']);?></textarea></td>
	</tr>
	<tr>
		<td class="mainText" colspan="2"><input type="submit" value=" Save "></td>
	</tr>
</table>


</form>
<br>

<?

printf("<table width=\"100%%\" border=\"0\" cellpadding=\"7\" cellspacing=\"0\">");
printf("<tr bgcolor=\"#d0dce0\">");
printf("<td class=\"mainText\" style=\"border-bottom: 1px solid #000000;\"><b>User Notes:</td>");

if(strlen($back_page)) {
	printf("<td class=\"mainText\" align=\"right\" style=\"border-bottom: 1px solid #000000;\"><a href=\"%s\">Back to Last Page</a></td>", $back_page);
}

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


<table width="95%" border="0">
	<tr>
		<td class="mainText" valign="top"><b>Replacement Fields</b></td>
		<td class="mainText" valign="top">When you use one of these strings, it will automatically 
		be replaced with the user's current information.
		<br>
		<br>

<?

while (list($phpName, $dbName) = each($ReplacementFields)) {
	printf("[%s]<br>\n", $dbName);
}



?>
		
		</td>
	</tr>
</table>
