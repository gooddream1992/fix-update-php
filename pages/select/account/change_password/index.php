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
		To change your password, you will need to enter your current password.  Then, enter
		a new password and retype the new password to verify that you typed it correctly.
		</td>
	</tr>
	<tr bgcolor="#FFFFFF"> 
		<td class="mainText" valign="top" align="right" colspan="2"><b>Current Password:</b></td>
		<td class="mainText" valign="top" colspan="2"><input type="password" value="" name="current_password"></td>
	</tr>
	<tr bgcolor="#FFFFFF"> 
		<td class="mainText" valign="top" align="right" colspan="2"><b>New Password:</b><br><em>(twice)</em></td>
		<td class="mainText" valign="top" colspan="2">
			<input type="password" value="" name="password1">
			<br><input type="password" value="" name="password2">
		</td>
	</tr>
	<tr bgcolor="#FFFFFF"> 
		<td class="mainText" valign="top" align="right" colspan="2">&nbsp;</td>
		<td class="mainText" valign="top" colspan="2"><input type="submit" value="Change Password"></td>
	</tr>
</table>

</div>
</form>
