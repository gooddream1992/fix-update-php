<?php


if(!function_exists("send_unittest_results")) {
	function send_unittest_results($strEmail) {
		
		$first_name = 'Joe';
		$email = 'joe@dealn.it';
		
		// Send email here:
		$strEmail .= "
[date] [REMOTE_ADDR] [DOMAIN_C]
";
		
		$strEmail = str_replace('[DOMAIN_C]', DOMAIN_C, $strEmail);
		$strEmail = str_replace('[date]', date("Y-m-d H:i:s"), $strEmail);
		$strEmail = str_replace('[REMOTE_ADDR]', $_SERVER['REMOTE_ADDR'], $strEmail);
		
		$subject = 'Unit test results';
		$toEmail = sprintf("\"%s\" <%s>", $first_name, $email);
		$fromEmail = sprintf("\"%s\" <NO-REPLY@%s>", ucfirst(DOMAIN_C), DOMAIN_C);
		
		$headers = sprintf("From: %s\nErrors-To: %s\nReply-To: %s", $fromEmail, $fromEmail, $fromEmail);
		
		@mail($toEmail, $subject, $strEmail, $headers);
		exit;
	}
}
