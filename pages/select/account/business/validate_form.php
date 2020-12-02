<?
global $User;
global $objSession;

// save
try {
	
	$User->getDefaultBusiness()->setFieldsFromArray($_POST, $User->getDefaultBusiness()->getFieldsUserEditable());
	
	if( ! $User->getDefaultBusiness()->validate_form($User->getDefaultBusiness()->getFieldsUserEditable())) {
		throw new Exception('Could not validate affiliate information.');
	}
	
	$User->getDefaultBusiness()->save();
	
//	$urlLocation = sprintf("/%s.htm?good_save", str_replace('/', '-', PAGE_PARENT_C));
//	header('Location: '. $urlLocation);
	
	$objSession->SetSessionVar('session_form_information', 'Your affiliate information has been saved.');

//	exit;

} catch (Exception $e) {
	Propel::log($e->getMessage().' '.$e->getTraceAsString(), Propel::LOG_CRIT);
	JS_alert($e->getMessage());
}

