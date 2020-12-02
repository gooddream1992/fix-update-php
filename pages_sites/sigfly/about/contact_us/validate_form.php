<?php 

// send email:

$strEmail = "Contact form:\n\n";
foreach ($_POST as $key => $value) {
	$strEmail .= sprintf("%s = %s\n", $key, $value);
}
$strEmail .= "
***********************************************************
Generated: [date] by [REMOTE_ADDR]
";

$strEmail = str_replace('[date]', date("Y-m-d H:i:s"), $strEmail);
$strEmail = str_replace('[REMOTE_ADDR]', $_SERVER['REMOTE_ADDR'], $strEmail);
		
$arrEmail = array();
$arrEmail['Joe'] = 'joejr000@gmail.com';

foreach ($arrEmail as $first_name => $email) {

	$subject = 'Contact for submission for '. ucfirst(DOMAIN_C);
	$toEmail = sprintf("\"%s\" <%s>", $first_name, $email);
	$fromEmail = sprintf("\"%s\" <NO-REPLY@%s>", ucfirst(DOMAIN_C), DOMAIN_C);
	
	$headers = sprintf("From: %s\nErrors-To: %s\nReply-To: %s", $fromEmail, $fromEmail, $fromEmail);
	
	@mail($toEmail, $subject, $strEmail, $headers);
	
}

header("Location: /about-contact_us-thank_you.htm");
exit;
