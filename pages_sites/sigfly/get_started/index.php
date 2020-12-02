<?

global $arrError;

// make javascript alerts on error
//if(count($arrError)) {
//	JS_alert('We cannot continue because: \n\n'. strip_tags(implode('\\n', $arrError)) . '\\n');
//}

$bgMouseOver = '#f5f5f5';
$bgMouseOut = '#ffffff';

?>


		<h2>New User Registration
		<br><span>All fields are required</span>
		</h2>
	
<div class="respond">
<blockquote>
<?php /* <form action="https://secure.<?=DOMAIN_C;?><?=$_SERVER['SCRIPT_NAME'];?>" method="POST"> */ ?>
<form action="<?=$_SERVER['SCRIPT_NAME'];?>" method="POST" id="contactform">
<input type="hidden" name="page" value="<?=PAGE_C;?>">
<?php 

if(count($arrError)) {
	printf("<table width=\"100%%\" border=\"0\" cellspacing=\"0\" cellpadding=\"7\">
	<tr>
	<td colspan=\"2\" valign=\"top\" style=\"border: 1px solid black; background-color:#f0f0f0\">
	<ul>
	<li><p>%s</p></li>
	</ul>
	</td>
	</tr>
	</table>", implode('</p></li><li><p>', $arrError)); 
}

?>

<p>
<input class="text" name="fname" type="text" size=20 maxlength=64 value="<?=htmlspecialchars($_POST['fname']);?>">
<label>First Name
<?php if($arrError['fname']) echo '<span style="color: #ff0000;">Attention required.</span>';?>
</label>
</p>

<p>
<input class="text" name="lname" type="text" size=20 maxlength=64 value="<?=htmlspecialchars($_POST['lname']);?>">
<label>Last Name
<?php if($arrError['lname']) echo '<span style="color: #ff0000;">Attention required.</span>';?>
</label>
</p>

<p>
<input class="text" name="company_name" type="text" size=20 maxlength=64 value="<?=htmlspecialchars($_POST['company_name']);?>">
<label>Company Name
<?php if($arrError['company_name']) echo '<span style="color: #ff0000;">Attention required.</span>';?>
</label>
</p>

<p>
<input class="text" name="company_url" type="text" size=20 maxlength=64 value="<?=htmlspecialchars($_POST['company_url']);?>">
<label>Company URL
<?php if($arrError['company_url']) echo '<span style="color: #ff0000;">Attention required.</span>';?>
</label>
</p>

<p>
<input class="text" name="email1" type="text" size=20 maxlength=128 value="<?=htmlspecialchars($_POST['email1']);?>">
<label>Email (This will be your login ID.)
<?php if($arrError['email1']) echo '<span style="color: #ff0000;">Attention required.</span>';?>
</label>
</p>

<p>
<input class="text" name="password1" type="password" size=20 maxlength=128 value="<?=htmlspecialchars($_POST['password1']);?>">
<label>Password
<?php if($arrError['password1']) echo '<span style="color: #ff0000;">Attention required.</span>';?>
</label>
</p>

<p>
<input class="text" name="password2" type="password" size=20 maxlength=128 value="<?=htmlspecialchars($_POST['password2']);?>">
<label>Verify Password. (Minimum 8 characters, letters &amp; numbers.)
<?php if($arrError['password2']) echo '<span style="color: #ff0000;">Attention required.</span>';?>
</label>
</p>

<p>
	<select name="referral" class="select">
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
	<label>Where did you hear about us?
	<?php if($arrError['referral']) echo '<span style="color: #ff0000;">Attention required.</span>';?>
	</label>	
</p>

<p>
<input class="checkbox" type="checkbox" name="tos_agreement" value="1" <?=($_POST['tos_agreement'] == 1)?'checked':'';?>>
<label>I agree to the 
<a href="/about-terms_and_conditions.htm" target="_blank">Terms and Conditions</a>.
<?php if($arrError['tos_agreement']) echo '<span style="color: #ff0000;">Attention required.</span>';?>
</label>
</p>

<p>
<input type="submit" value="Submit &gt;&gt;" class="submit">
</p>
      
</form>
</blockquote>

</div>
