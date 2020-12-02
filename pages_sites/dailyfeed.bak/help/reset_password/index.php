<form name="emailverify" action="<?=$_SERVER['SCRIPT_NAME'];?>" method="POST">
<input type=hidden name=page value="<?=htmlspecialchars($page); ?>">

<table border=0 cellspacing=0 cellpadding=0 width="100%" bgcolor="#FFFFFF">
	<tr>  
		<td><img src="/images/dot.gif" width="15" height="1"></td>
		<td class="mainText">
		
		<p>Please enter your password reset key and id in the space provided below
		along with your new password.</p>
		
		<p>If you do not have a password reset key, you must first have one emailed
		to you.  Go to the <a href="/help-lost_password.htm">lost password page</a> to 
		send the password reset instructions, along with the reset key and id, to 
		your email account.</p>
		
		<br>

		<?

		if( count($arrError) > 0) {
			printf("
			<table bgcolor=\"#f0f0f0\" border=\"0\" cellspacing=\"0\" cellpadding=\"8\" width=\"100%%\" style=\"border: 1px solid black;\">
			<tr>
				<td valign=\"center\"><font size=\"2\" color=\"red\"><b>Please check these messages:</b></font></td>
				<td colspan=\"3\"><font size=\"2\"><b><li>%s</b></font></td>
			</tr>
			</table>",
			implode(' <li>', $arrError)
			);
		}

		if( count($arrStatus) > 0) {
			printf("
			<table bgcolor=\"#f0f0f0\" border=\"0\" cellspacing=\"0\" cellpadding=\"8\" width=\"100%%\" style=\"border: 1px solid black;\">
			<tr>
				<td valign=\"center\"><font size=\"2\" color=\"green\"><b>Please check these messages:</b></font></td>
				<td colspan=\"3\"><font size=\"2\"><b><li>%s</b></font></td>
			</tr>
			</table>",
			implode(' <li>', $arrStatus)
			);
		}

		?>
				
		</td>
		<td><img src="/images/dot.gif" width="15" height="1"></td>
	</tr>
	<tr>
		<td align="center" colspan="3">
			<table border=0 cellpadding=3 cellspacing=10 width="80%" bgcolor="#ffffff">
				<tr>
					<td align="right" valign="middle" class="mainText">Password Reset Key:</td>
					<td>&nbsp;<input type="text" name="password_reset_hash" value="<?php echo htmlspecialchars($_POST['password_reset_hash']); ?>" size=30></td>
				</tr>
				<tr>
					<td align="right" valign="middle" class="mainText">Id:</td>
					<td>&nbsp;<input type="text" name="id" value="<?php echo htmlspecialchars($_POST['id']); ?>" size=10></td>
				</tr>
				<tr>
					<td align="right" valign="top" class="mainText">Your New Password:<br>
						<em>(Twice for good measure.)</em></td>
					<td>&nbsp;<input type="password" name="password1" value="<?php echo htmlspecialchars($_POST['password1']); ?>" size=20>
						<br>&nbsp;<input type="password" name="password2" value="<?php echo htmlspecialchars($_POST['password2']); ?>" size=20></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input type=submit value="Reset Password"></td>
				</tr>
			</table>
		</td>
	</tr>
</table>

</form>