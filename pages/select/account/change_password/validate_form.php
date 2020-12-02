<?

if( ! strlen($_POST['current_password'])) {
	$arrError['current_password'] = 'Please enter your current password.';
}

if( ! $User->isValidPassword($_POST['current_password'])) {
	$arrError['current_password'] = 'You entered your current password incorrectly.  It does not match the password we have on file.';
}

if($_POST['password1'] !== $_POST['password2']) {
	$arrError['password1'] = 'Password in position one does not match your second entry.';
	$arrError['password2'] = 'Password in position two does not match your first entry.';
}

if( ! strlen($_POST['password1'])) {
	$arrError['password1'] = 'Please enter your password in the first position.';
}

if( ! strlen($_POST['password2'])) {
	$arrError['password2'] = 'Please enter your password in the second position for verification.';
}

if( ! count($arrError)) {
	// save
	try {
	
		$User->setPassword($_POST['password1']);
		$User->save();
		
		$arrStatus[] = 'Your new password has been saved.';
	
	} catch (Exception $e) {
		$arrError[] = $e->getMessage();
	}
}

