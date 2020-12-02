<?

// save
try {
	
	$WorkingUser->setFieldsFromArray($_POST, $WorkingUser->getFieldsAdmin());
	if( ! $WorkingUser->validate_user($WorkingUser->getFieldsAdmin())) {
		throw new Exception('Could not validate user information.');
	}
	
	$WorkingUser->save();
	
	$urlLocation = sprintf("%s?page=%s&rand=%d&good_save", $_SERVER['SCRIPT_NAME'], PAGE_PARENT_C, rand(10000000, 99999999));
	header('Location: '. ((strlen($back_page)) ? $back_page : $urlLocation));
	exit;

} catch (Exception $e) {
	JS_alert($e->getMessage());
}



