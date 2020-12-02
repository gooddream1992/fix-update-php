<form name="emailverify" action="<?=$_SERVER['SCRIPT_NAME'];?>" method="GET">
<input type=hidden name=page value="<?=htmlspecialchars($page); ?>">

<table border=0 cellspacing=0 cellpadding=0 width="100%" bgcolor="#FFFFFF">
	<tr>
		<td>
		
		<span class="mainText">Please enter your info in the spaces provided below.  
		To resend activation or verification instructions to your email, enter your email
		and click the button 'Resend Verification Email'.</span><br>

		<?

		if( count($arrError) > 0) {
			printf("
			<table bgcolor=\"#f0f0f0\" border=\"0\" cellspacing=\"0\" cellpadding=\"8\" width=\"100%%\" style=\"border: 1px solid black;\">
			<tr>
				<td valign=\"center\"><font size=\"2\" color=\"red\"><b>Please check these messages:</b></font></td>
				<td colspan=\"3\"><font size=\"2\"><b><li>%s</b></font></td>
			</tr>",
			implode(' <li>', $arrError)
			);
		}

		?>
				
		<table border=0 cellpadding=3 cellspacing=10 width="100%">
			<tr>
				<td valign="top" width="50%">
				<table border=0 cellpadding=3 cellspacing=10 width="100%" bgcolor="#ffffff">
					<tr>
						<td align=right valign=center><span class="mainText">Id:</span></td>
						<td>&nbsp;<input type="text" name="id" value="<?php echo htmlspecialchars($_GET['id']); ?>" size=20></td>
					</tr>
					<tr>
						<td align=right valign=center><span class="mainText">Key:</span></td>
						<td>&nbsp;<input type="text" name="key"  value="<?php echo htmlspecialchars($_GET['key']); ?>" size=20></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input type=submit name="verify" value="Verify Info"></td>
					</tr>
				</table>
				</td>
				<td valign="top" width="50%">
				<table border=0 cellpadding=3 cellspacing=10 width="100%" bgcolor="#ffffff">
					<tr>
						<td align=right valign=center><span class="mainText">Email:</span></td>
						<td>&nbsp;<input type="text" name="email" value="<?php echo htmlspecialchars($_GET['email']); ?>" size=20></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input type=submit name="resend" value="Resend Verification Email"></td>
					</tr>
				</table>
				</td>
			</tr>
		</table>
		</font>

		</td>
	</tr>
</table>

</form>