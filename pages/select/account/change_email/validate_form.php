<?

if( ! strlen($_POST['current_password'])) {
	$arrError['current_password'] = 'Please enter your current password.';
}

if( ! $User->isValidPassword($_POST['current_password'])) {
	$arrError['current_password'] = 'You entered your current password incorrectly.  It does not match the password we have on file.';
}

if($_POST['email1'] !== $_POST['email2']) {
	$arrError['email1'] = 'Email in position one does not match your second entry.';
	$arrError['email2'] = 'Email in position two does not match your first entry.';
}

if( ! strlen($_POST['email1'])) {
	$arrError['email1'] = 'Please enter your Email in the first position.';
}

if( ! strlen($_POST['email2'])) {
	$arrError['email2'] = 'Please enter your Email in the second position for verification.';
}

if( ! count($arrError)) {
	// save
	try {
	
		// throws exception if bad or dupe
		UserPeer::checkEmail($_POST['email1']);
		
		$User->setEmail($_POST['email1']);
		$User->setIsEmailVerified(0);
		$User->save();
		
		UserPeer::doSendActivationEmail($_POST['email1']);
		
		$arrStatus[] = 'Your new email has been saved.  Please check your email account for instructions on how to verify your new email address.';
	
	} catch (Exception $e) {
		$arrError[] = $e->getMessage();
	}
}

