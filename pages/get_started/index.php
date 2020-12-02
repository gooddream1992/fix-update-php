<?

global $arrError;

// make javascript alerts on error
//if(count($arrError)) {
//	JS_alert('We cannot continue because: \n\n'. strip_tags(implode('\\n', $arrError)) . '\\n');
//}

$bgMouseOver = '#f5f5f5';
$bgMouseOut = '#ffffff';

?>


		<h2>New Affiliate Registration
		<br><span>Starred (*) fields are required</span>
		</h2>
	
<?php /* <form action="https://secure.<?=DOMAIN_C;?><?=$_SERVER['SCRIPT_NAME'];?>" method="POST"> */ ?>
<form action="<?=$_SERVER['SCRIPT_NAME'];?>" method="POST" id="contactform">
<input type="hidden" name="page" value="<?=PAGE_C;?>">
<?php 

if(count($arrError)) {
	printf("<table width=\"100%%\" border=\"0\" cellspacing=\"0\" cellpadding=\"7\">
	<tr>
	<td colspan=\"2\" class=\"mainText\" valign=\"top\" style=\"border: 1px solid black; background-color:#f0f0f0\">
	<ul>
	<li><p>%s</p></li>
	</ul>
	</td>
	</tr>
	</table>", implode('</p></li><li><p>', $arrError)); 
}

?>
<blockquote>
<ol>

<li>
<label>First Name:<sup>*</sup>
<?php if($arrError['fname']) echo '<span class="mainText" style="color: #ff0000;">Attention required.</span>';?>
</label>
<br><input class="text" name="fname" type="text" size=20 maxlength=64 value="<?=htmlspecialchars($_POST['fname']);?>">
</li>

<li>
<label>Last Name:<sup>*</sup>
<?php if($arrError['lname']) echo '<span class="mainText" style="color: #ff0000;">Attention required.</span>';?>
</label>
<br><input class="text" name="lname" type="text" size=20 maxlength=64 value="<?=htmlspecialchars($_POST['lname']);?>">
</li>

<li>
<label>Company Name:<sup>*</sup>
<?php if($arrError['company_name']) echo '<span class="mainText" style="color: #ff0000;">Attention required.</span>';?>
</label>
<br><input class="text" name="company_name" type="text" size=20 maxlength=64 value="<?=htmlspecialchars($_POST['company_name']);?>">
</li>

<li>
<label>Company URL:
<?php if($arrError['company_url']) echo '<span class="mainText" style="color: #ff0000;">Attention required.</span>';?>
</label>
<br><input class="text" name="company_url" type="text" size=20 maxlength=64 value="<?=htmlspecialchars($_POST['company_url']);?>">
</li>

<li>
<label>Telephone:<sup>*</sup>
<?php if($arrError['telephone']) echo '<span class="mainText" style="color: #ff0000;">Attention required.</span>';?>
</label>
<br><input class="text" name="telephone" type="text" size=20 maxlength=64 value="<?=htmlspecialchars($_POST['telephone']);?>">
</li>

<li>
<label>Email:<sup>*</sup>
<br>(This will be your login ID.)
<?php if($arrError['email1']) echo '<span class="mainText" style="color: #ff0000;">Attention required.</span>';?>
</label>
<br><input class="text" name="email1" type="text" size=20 maxlength=128 value="<?=htmlspecialchars($_POST['email1']);?>">
</li>

<li>
<label>Password:<sup>*</sup>
<?php if($arrError['password1']) echo '<span class="mainText" style="color: #ff0000;">Attention required.</span>';?>
</label>
<br><input class="text" name="password1" type="password" size=20 maxlength=128 value="<?=htmlspecialchars($_POST['password1']);?>">
	<br><label>Verify Password. (Minimum 8 characters containing letters &amp; numbers.)
	<?php if($arrError['password2']) echo '<span class="mainText" style="color: #ff0000;">Attention required.</span>';?>
</label><input class="text" name="password2" type="password" size=20 maxlength=128 value="<?=htmlspecialchars($_POST['password2']);?>">

</li>

<?php if(!defined('V_C')) { ?>

	<li>
	<label>Where did you hear about us?
	<?php if($arrError['referral']) echo '<span class="mainText" style="color: #ff0000;">Attention required.</span>';?>
	</label>
		<br><select name="referral" class="text">
			<option value=""				<?=($_POST['referral'] == '')?' selected':'';?>>--None--</option>
			<option value="Advertisement"	<?=($_POST['referral'] == 'Advertisement')?' selected':'';?>>Advertisement</option>
			<option value="Banner"			<?=($_POST['referral'] == 'Banner')?' selected':'';?>>Banner</option>
			<option value="Email"			<?=($_POST['referral'] == 'Email')?' selected':'';?>>Email</option>
			<option value="Employee Referral"<?=($_POST['referral']== 'Employee Referral')?' selected':'';?>>Employee Referral</option>
			<option value="External Referral"<?=($_POST['referral']== 'External Referral')?' selected':'';?>>External Referral</option>
			<option value="Google"			<?=($_POST['referral'] == 'Google')?' selected':'';?>>Google</option>
			<option value="Trade Show"		<?=($_POST['referral'] == 'Trade Show')?' selected':'';?>>Trade Show</option>
			<option value="Web"				<?=($_POST['referral'] == 'Web')?' selected':'';?>>Web</option>
			<option value="Word of mouth"	<?=($_POST['referral'] == 'Word of mouth')?' selected':'';?>>Word of mouth</option>
			<option value="Yahoo"			<?=($_POST['referral'] == 'Yahoo')?' selected':'';?>>Yahoo</option>
			<option value="Other"			<?=($_POST['referral'] == 'Other')?' selected':'';?>>Other</option>
		</select> 
			
	</li>
	
<?php } ?>

<li>
<label><input type="checkbox" name="tos_agreement" value="1" 
	<?=($_POST['tos_agreement'] == 1)?'checked':'';?>>I agree to the 
	<a href="/about-terms_and_conditions.htm" target="_blank">Terms and Conditions</a>.
	<?php if($arrError['tos_agreement']) echo '<span class="mainText" style="color: #ff0000;">Attention required.</span>';?>
	</label>
</li>

<li>
	<br><input type="submit" value="Submit &gt;&gt;" style="vertical-align: middle;" class="send">
	<div class="clr"></div>
	
</li>
</ol>
</blockquote>

<?php /*
<table width="100%" border="0" cellspacing="0" cellpadding="7" bgcolor="<?=$bgMouseOut;?>">

	<tr bgcolor="#FFFFFF"> 
		<td colspan="2" nowrap class="mainText" style="padding:0pt;">
		<h2>New User Registration
		<br><span>Starred (*) fields are required</span>
		</h2>
		</td>
	</tr>
	
<?php if(count($arrError)) printf("<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"7\"><tr><td colspan=\"2\" class=\"mainText\" valign=\"top\" style=\"border: 1px solid black; background-color:#f0f0f0\"><ul><li><p>%s</p></li></p></ul></td></tr></table>", implode('</p></li><li><p>', $arrError)); ?>

<tr onmouseover="this.setAttribute('bgcolor', '<?=$bgMouseOver;?>', 0);" onmouseout="this.setAttribute('bgcolor', '<?=$bgMouseOut;?>', 0);">
<td nowrap class="mainText" valign="top" width="25%">Company Name:<sup>*</sup></td>
<td class="mainText"><p><input class="text" name="company_name" type="text" size=20 maxlength=64 value="<?=htmlspecialchars($_POST['company_name']);?>">
	<?php if($arrError['company_name']) echo '<span class="mainText" style="color: #ff0000;">Attention required.</span>';?>
</td>
</tr>

<tr onmouseover="this.setAttribute('bgcolor', '<?=$bgMouseOver;?>', 0);" onmouseout="this.setAttribute('bgcolor', '<?=$bgMouseOut;?>', 0);">
<td nowrap class="mainText" valign="top"><p>Company URL:</td>
<td class="mainText"><p><input class="text" name="company_url" type="text" size=20 maxlength=64 value="<?=htmlspecialchars($_POST['company_url']);?>">
	<?php if($arrError['company_url']) echo '<span class="mainText" style="color: #ff0000;">Attention required.</span>';?>
</td>
</tr>

<tr onmouseover="this.setAttribute('bgcolor', '<?=$bgMouseOver;?>', 0);" onmouseout="this.setAttribute('bgcolor', '<?=$bgMouseOut;?>', 0);">
<td nowrap class="mainText" valign="top"><p>Email:<sup>*</sup>
<br>(This will be your login ID.)</td>
<td class="mainText"><p><input class="text" name="email1" type="text" size=20 maxlength=128 value="<?=htmlspecialchars($_POST['email1']);?>">
	<?php if($arrError['email1']) echo '<span class="mainText" style="color: #ff0000;">Attention required.</span>';?>
	<br><input name="email2" type="text" size=20 maxlength=128 value="<?=htmlspecialchars($_POST['email2']);?>">
	<?php if($arrError['email2']) echo '<span class="mainText" style="color: #ff0000;">Attention required.</span>';?>
	(verify email)
</td>
</tr>

<tr onmouseover="this.setAttribute('bgcolor', '<?=$bgMouseOver;?>', 0);" onmouseout="this.setAttribute('bgcolor', '<?=$bgMouseOut;?>', 0);">
<td nowrap class="mainText" valign="top"><p>Password:<sup>*</sup></td>
<td class="mainText"><p><input class="text" name="password1" type="password" size=20 maxlength=128 value="<?=htmlspecialchars($_POST['password1']);?>">
	<?php if($arrError['password1']) echo '<span class="mainText" style="color: #ff0000;">Attention required.</span>';?>
	<br>(minimum 8 characters containing letters &amp; numbers)
	<br><input name="password2" type="password" size=20 maxlength=128 value="<?=htmlspecialchars($_POST['password2']);?>">
	<?php if($arrError['password2']) echo '<span class="mainText" style="color: #ff0000;">Attention required.</span>';?>
	<br>(verify password)
</td>
</tr>

<?php if(!defined('V_C')) { ?>

	<tr onmouseover="this.setAttribute('bgcolor', '<?=$bgMouseOver;?>', 0);" onmouseout="this.setAttribute('bgcolor', '<?=$bgMouseOut;?>', 0);">
	<td nowrap class="mainText" valign="top"><p>Where did you hear about us?</td>
	<td class="mainText">
	<p>
		<select name="referral" class="text">
			<option value=""				<?=($_POST['referral'] == '')?' selected':'';?>>--None--</option>
			<option value="Advertisement"	<?=($_POST['referral'] == 'Advertisement')?' selected':'';?>>Advertisement</option>
			<option value="Banner"			<?=($_POST['referral'] == 'Banner')?' selected':'';?>>Banner</option>
			<option value="Email"			<?=($_POST['referral'] == 'Email')?' selected':'';?>>Email</option>
			<option value="Employee Referral"<?=($_POST['referral']== 'Employee Referral')?' selected':'';?>>Employee Referral</option>
			<option value="External Referral"<?=($_POST['referral']== 'External Referral')?' selected':'';?>>External Referral</option>
			<option value="Google"			<?=($_POST['referral'] == 'Google')?' selected':'';?>>Google</option>
			<option value="Trade Show"		<?=($_POST['referral'] == 'Trade Show')?' selected':'';?>>Trade Show</option>
			<option value="Web"				<?=($_POST['referral'] == 'Web')?' selected':'';?>>Web</option>
			<option value="Word of mouth"	<?=($_POST['referral'] == 'Word of mouth')?' selected':'';?>>Word of mouth</option>
			<option value="Yahoo"			<?=($_POST['referral'] == 'Yahoo')?' selected':'';?>>Yahoo</option>
			<option value="Other"			<?=($_POST['referral'] == 'Other')?' selected':'';?>>Other</option>
		</select> 
		<?php if($arrError['referral']) echo '<span class="mainText" style="color: #ff0000;">Attention required.</span>';?>
	
	</td>
	</tr>
	
<tr onmouseover="this.setAttribute('bgcolor', '<?=$bgMouseOver;?>', 0);" onmouseout="this.setAttribute('bgcolor', '<?=$bgMouseOut;?>', 0);">
<td class="mainText"><p>&nbsp;</td>
<td class="mainText"><p><input class="text" type="checkbox" name="tos_agreement" value="1" 
	<?=($_POST['tos_agreement'] == 1)?'checked':'';?>>I agree to the 
	<a href="/about-terms_and_conditions.htm" target="_blank">Terms and Conditions</a>.
	<?php if($arrError['tos_agreement']) echo '<span class="mainText" style="color: #ff0000;">Attention required.</span>';?>
</td>
</tr>

<tr bgcolor="#ffffff">
	<td><p>&nbsp;</td>
	<td><p><input type="submit" value="Submit &gt;&gt;" style="vertical-align: middle;" class="send"></td>

</tr>

<tr bgcolor="#ffffff">
	<td colspan="2">

		<table width="100%" cellpadding="10" border="0">
		<tr><td class="mainText">
		<p><h2>Please Note:</h2> 
		<p>To all new publishers... Due to the high demand 
		of our service, it may 
		take more than the usual amount of time to verify and approve of your account.
		</p>
	
		<p>We verify and approve of accounts on a first come, first served basis, 
		so sign up now!
		</p>
		</td></tr></table>
	</td>
</tr>
</table>
*/ ?>
      
</form>