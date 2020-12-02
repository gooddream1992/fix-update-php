<?

// save
try {
	
	$WorkingAdGroup->setFieldsFromArray($_POST, $WorkingAdGroup->getFieldsPixel());
	if( ! $WorkingAdGroup->validate_adgroup($WorkingAdGroup->getFieldsPixel())) {
		throw new Exception('Could not validate information.');
	}
	
	/* @var $WorkingAdGroup AdGroup */
	$WorkingAdGroup->save();
	
	if($_POST['notify_user'] == 'yes') {
		$WorkingAdGroup->sendPixelNotificationToUser();
	}
	
	$urlLocation = sprintf("%s?page=%s&rand=%d&good_save", $_SERVER['SCRIPT_NAME'], PAGE_PARENT_C, rand(10000000, 99999999));
	header('Location: '. ((strlen($back_page)) ? $back_page : $urlLocation));
	echo 'relocating to: ' . ((strlen($back_page)) ? $back_page : $urlLocation);
	exit;

} catch (Exception $e) {
//	JS_alert($e->getMessage());
}



