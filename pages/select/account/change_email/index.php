<form action="<?=$_SERVER['SCRIPT_NAME'];?>" method="POST">
<input type="hidden" name="page" value="<?=PAGE_C;?>">

<div align="left">

<table width="100%" border="0" cellspacing="0" cellpadding="10">
<?

if(count($arrError)) {
	printf("<tr><td colspan=\"4\" class=\"mainText\" valign=\"top\" style=\"border: 15px solid red;\"><li>%s</td></tr>", implode(' <li>', $arrError));
}

if(count($arrStatus)) {
	printf("<tr><td colspan=\"4\" class=\"mainText\" valign=\"top\" style=\"border: 15px solid green;\"><li>%s</td></tr>", implode(' <li>', $arrStatus));
}

?>
	<tr bgcolor="#FFFFFF"> 
		<td class="mainText" valign="top" colspan="4">
		<b>Warning:</b> Once your email address is changed, you will not be able to login here 
		again until after you verify the new email address.  Instructions will be sent to the 
		new email address describing how to verify that email account.
		
		<p>To change your email address, you will need to enter your current password.  Then, enter
		your new email address and retype the new email address to verify that you typed it correctly.
		</td>
	</tr>
	<tr bgcolor="#FFFFFF"> 
		<td class="mainText" valign="top" align="right" colspan="2"><b>Current Password:</b></td>
		<td class="mainText" valign="top" colspan="2"><input type="password" value="" name="current_password"></td>
	</tr>
	<tr bgcolor="#FFFFFF"> 
		<td class="mainText" valign="top" align="right" colspan="2"><b>New Email:</b><br><em>(again to verify)</em></td>
		<td class="mainText" valign="top" colspan="2">
			<input type="text" value="" name="email1" value="<?=htmlspecialchars($_POST['email1']);?>">
			<br><input type="text" value="" name="email2" value="<?=htmlspecialchars($_POST['email2']);?>">
		</td>
	</tr>
	<tr bgcolor="#FFFFFF"> 
		<td class="mainText" valign="top" align="right" colspan="2">&nbsp;</td>
		<td class="mainText" valign="top" colspan="2"><input type="submit" value="Change Email Address"></td>
	</tr>
</table>

</div>
</form>
