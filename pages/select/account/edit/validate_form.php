<?
global $User;
global $objSession;

// save
try {
	
	$User->setFieldsFromArray($_POST, $User->getFieldsUserEditable());
	
	if( ! $User->validate_user($User->getFieldsUserEditable())) {
		throw new Exception('Could not validate user information.');
	}
	
	$User->save();
	
//	$urlLocation = sprintf("/%s.htm?good_save", str_replace('/', '-', PAGE_PARENT_C));
//	header('Location: '. $urlLocation);
	
	$objSession->SetSessionVar('session_form_information', 'Your account information has been saved.');
	
//	exit;

} catch (Exception $e) {
	Propel::log($e->getMessage().' '.$e->getTraceAsString(), Propel::LOG_CRIT);
	JS_alert($e->getMessage());
}

