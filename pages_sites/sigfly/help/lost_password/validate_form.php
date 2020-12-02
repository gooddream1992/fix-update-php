<?

try {
	if($objSession->GetValue(sprintf("session_pw_reset_%s", md5($_POST['email']))) == '1') {
		throw new Exception('Email already sent.  Please check your email account.');
	}
	
	$null = UserPeer::doSendPasswordResetEmail($_POST['email']);
	$arrStatus[] = 'Email sent successfully.  Please check your email account now.';
	
	$objSession->SetSessionVar(sprintf("session_pw_reset_%s", md5($_POST['email'])), '1');
	
} catch (Exception $e) {
	
	$arrError[] = $e->getMessage();
}

