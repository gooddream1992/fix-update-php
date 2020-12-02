<?

//	key=71165d5070786815f39e8fff56fee7b1
//	id=2

if(strlen($_GET['verify']) && strlen($_GET['id']) && strlen($_GET['key'])) {
	// request comming from email link...
	
	try {
		UserPeer::verifyEmail((int)$_GET['id'], $_GET['key']);
		$arrError[] = 'Your email address has been verified.  You may now login.';
		
	} catch(Exception $e) {
		$arrError[] = $e->getMessage();
	}
	
}

if (strlen($_GET['resend']) && strlen($_GET['email'])) {
	// try sending email verification instructions again...
	
	try {
		UserPeer::doSendActivationEmail($_GET['email']);	
		$arrError[] = 'Email activation instructions sent successfully.  Please check your email.  Note: email may take up to several minutes for delivery.';
		
	} catch(Exception $e) {
		$arrError[] = $e->getMessage();
	}
	
}

