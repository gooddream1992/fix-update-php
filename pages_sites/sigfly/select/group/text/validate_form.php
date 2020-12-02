<?


// save
try {
	
	$AdMedia->setFieldsFromArray($_POST);
	
	if(!$AdMedia->validate_media()) {
		throw new Exception('Creative did not validate.');
	}
	
	$AdMedia->setQueueForProcessing();
	$AdMedia->save();

	$urlLocation = sprintf("/%s-text_preview.htm", str_replace('/', '-', PAGE_PARENT_C));
	header('Location: '. $urlLocation);
	exit;

} catch (Exception $e) {
	$AdMedia->setFormError($e->getMessage());
}
