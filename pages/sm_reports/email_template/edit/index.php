<form name="" action="<?=$_SERVER['SCRIPT_NAME'];?>" method="POST">
<input type="hidden" name="page" value="<?=PAGE_C;?>">
<input type="hidden" name="id" value="<?=$EmailTemplate->getId();?>">
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
	
	if(count($arrError)) {
		printf("<tr><td colspan=\"2\" class=\"mainText\" valign=\"top\" style=\"border: 15px solid red;\"><li>%s</td></tr>", implode(' <li>', $arrError));
	}
	
	if(count($arrStatus)) {
		printf("<tr><td colspan=\"2\" class=\"mainText\" valign=\"top\" style=\"border: 15px solid green;\"><li>%s</td></tr>", implode(' <li>', $arrStatus));
	}
	
	?>
	
	<tr>
		<td class="mainText" colspan="2" bgcolor="#d5d5d5">&nbsp;<b>Edit Email Template:</b></td>
	</tr>
	
	<tr>
		<td class="mainText" valign="top"><b>id</b></td>
		<td class="mainText" valign="top"><?=$EmailTemplate->getId();?> </td>
	</tr>
	
	<tr>
		<td class="mainText" valign="top"><b>Name</b></td>
		<td class="mainText" valign="top">
			(...as it will appear on this site. not seen by email recipient.)
			<br><input type="text" name="email_name" size="65" maxlength="64" value="<?=htmlspecialchars($EmailTemplate->getName());?>">
			(64 chars. max)</td>
	</tr>
	
	<tr>
		<td class="mainText" valign="top"><b>Email Subject</b></td>
		<td class="mainText" valign="top">
			<input type="text" name="email_subject" size="65" maxlength="64" value="<?=htmlspecialchars($EmailTemplate->getSubject());?>">
			(64 chars. max)</td>
	</tr>
	
	<tr>
		<td class="mainText" valign="top"><b>Email Body</b></td>
		<td class="mainText" valign="top"><textarea name="email_body" cols="70" rows="23"><?=htmlspecialchars($EmailTemplate->getBody());?></textarea></td>
	</tr>
	
	<tr>
		<td class="mainText" valign="top">&nbsp;</td>
		<td class="mainText" valign="top"><input type="submit" value="Submit"></td>
	</tr>
	
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

</form>