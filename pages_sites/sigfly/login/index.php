<?php 

global $arrError;
global $SubContinueValue;

/* ?><form name="loginform" action="https://secure.<?=DOMAIN_C;?><?=$_SERVER['SCRIPT_NAME'];?>" method="post">
*/ ?>
<form class="respond" name="loginform" action="<?=$_SERVER['SCRIPT_NAME'];?>" method="post">
<input type=hidden name=page value="<?=htmlspecialchars(PAGE_C); ?>">
<input type=hidden name=ref value="<?=htmlspecialchars($_POST['ref']); ?>">
<input type=hidden name=aa  value="<?=htmlspecialchars($_POST['aa']); ?>">

		
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

			<?php

			if( count($arrError) > 0) {
				printf("
				<table bgcolor=\"#f0f0f0\" border=\"0\" cellspacing=\"0\" cellpadding=\"8\" width=\"100%%\" style=\"border: 1px solid black;\">
				<tr>
					<td valign=\"center\"><p><span style=\"color:#ff0000\">Please check these messages:</span></td>
					<td colspan=\"3\"><font size=\"2\"><li><p>%s</p></font></td>
				</tr>
				</table>",
				implode('</p></li><li><p>', $arrError)
				);
			}

			?>
		<blockquote>	
			<p>
			<input type="text" name="email" value="<?php echo htmlspecialchars($_POST['email']); ?>" size=20>
			<label>Email</label>
			</p>
			
			<p>
			<input type="password" name="password"  value="<?php echo htmlspecialchars($_POST['password']); ?>" size=15>
			<label>Password</label>
			</p>
			
			<p>
			<input class="submit" type=submit name=SubContinue value="<?php echo $SubContinueValue; ?>">
			<p>
		</blockquote>
		
		<br class="clear">
		<br>
		
		<div class="holder">
			<h2>New Users:</h2> 
			<p>You need to register before continuing.  
			<a href="<?php echo $_SERVER['SCRIPT_NAME'];?>?page=get_started">Click here to get started</a>.</p>
									
			<SCRIPT LANGUAGE="JavaScript">
				document.loginform.email.focus();
			</SCRIPT>
		</div>

		<?php } /* end showing form */ ?>


</form>

