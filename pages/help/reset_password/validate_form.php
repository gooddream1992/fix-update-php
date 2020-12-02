<?

try {
	
	$null = UserPeer::doResetPasswordWithHash($_POST['id'], $_POST['password_reset_hash'], $_POST['password1'], $_POST['password2']);
	$arrStatus[] = 'Password reset successfully.  You may now logon to your account..';
	
	$_POST['password1'] = str_repeat('*', strlen($_POST['password1']));
	$_POST['password2'] = str_repeat('*', strlen($_POST['password2']));
	
} catch (Exception $e) {
	
	$arrError[] = $e->getMessage();
}

