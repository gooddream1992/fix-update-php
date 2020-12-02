<?php 

global $arrError;
global $SubContinueValue;

/* ?><form name="loginform" action="https://secure.<?=DOMAIN_C;?><?=$_SERVER['SCRIPT_NAME'];?>" method="post">
*/ ?>
<form name="loginform" action="<?=$_SERVER['SCRIPT_NAME'];?>" method="post">
<input type=hidden name=page value="<?=htmlspecialchars(PAGE_C); ?>">
<input type=hidden name=ref value="<?=htmlspecialchars($_POST['ref']); ?>">
<input type=hidden name=aa  value="<?=htmlspecialchars($_POST['aa']); ?>">

<table border=0 cellspacing=0 cellpadding=0 width="100%" bgcolor="#FFFFFF">
	<tr>
		<td>
		
		<?php
		
		if( strlen($refreshTo) > 0) {
			// refresh if logging out and ref was passed.
			// or when login was successful and ref was passed
//			echo 'refreshing: no login form.';
			echo $refreshTo;
		
		} else {
			// show form.
		
		?>
		
			<h2>Please enter your email address and password in the spaces provided</h2>
			<br>

			<?php

			if( count($arrError) > 0) {
				printf("
				<table bgcolor=\"#f0f0f0\" border=\"0\" cellspacing=\"0\" cellpadding=\"8\" width=\"100%%\" style=\"border: 1px solid black;\">
				<tr>
					<td valign=\"center\"><p><span style=\"color:#ff0000\">Please check these messages:</span></td>
					<td colspan=\"3\"><font size=\"2\"><b><li><p>%s</p></b></font></td>
				</tr>",
				implode('</p></li><li><p>', $arrError)
				);
			}

			?>
					
						<table border=0 cellpadding=3 cellspacing=1 width=100% bgcolor="#ffffff">
							<tr>
								<td align="right" valign="center" width="20%"><p>Email:</td>
								<td><p>&nbsp;<input type="text" name="email" value="<?php echo htmlspecialchars($_POST['email']); ?>" size=20></td>
							</tr>
							<tr>
								<td align=right valign=center><p>Password:</td>
								<td><p>&nbsp;<input type="password" name="password"  value="<?php echo htmlspecialchars($_POST['password']); ?>" size=15></td>
							</tr>
							<tr>
								<td><p>&nbsp;</td>
								<td><p><input type=submit name=SubContinue value="<?php echo $SubContinueValue; ?>"></td>
							</tr>
							<tr>
								<td colspan="2" valign="top" class="mainText">
									<h2>Please note:</h2>
									<p>If you arrive at this page, even after entering valid login information, 
									please check that you have cookies turned on in your browser settings.</p>
									
									<h2>New Affiliates:</h2> 
									<p>You need to register before continuing.  
									<a href="<?php echo $_SERVER['SCRIPT_NAME'];?>?page=get_started">Click here now to get started</a>.</p>
									
								</td>
							</tr>
						
						</table>

			<SCRIPT LANGUAGE="JavaScript">
				document.loginform.email.focus();
			</SCRIPT>

		<?php } /* end showing form */ ?>

		</td>
	</tr>
</table>

</form>

