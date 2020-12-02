<form name="emailverify" action="<?=$_SERVER['SCRIPT_NAME'];?>" method="POST">
<input type=hidden name=page value="<?=htmlspecialchars($page); ?>">

<table border=0 cellspacing=0 cellpadding=0 width="100%" bgcolor="#FFFFFF">
	<tr>  
		<td><img src="/images/dot.gif" width="15" height="1"></td>
		<td class="mainText">
		
		Please enter your email address in the space provided below.  
		We will send to you instructions on how to reset your password.  
		Included with the instructions will be a special code that is
		required when you reset your password.
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
					<td align=right valign=center><span class="mainText">Email:</span></td>
					<td>&nbsp;<input type="text" name="email" value="<?php echo htmlspecialchars($_POST['email']); ?>" size=20></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input type=submit value="Send Password Reset Instructions"></td>
				</tr>
			</table>
		</td>
	</tr>
</table>

</form>