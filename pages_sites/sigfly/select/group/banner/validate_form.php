<?
	
if(strlen($_POST['skip'])) {
	$urlLocation = sprintf("/%s.htm?skipped", str_replace('/', '-', PAGE_PARENT_C));
	header('Location: '. $urlLocation);
	exit;
}

$PostFilesArray = array_merge($_POST, $_FILES);

$gotErrors = false;

// save
try {
	
	$AdMediaBanner->setFieldsFromArray($PostFilesArray);
	
	if(!$AdMediaBanner->validate_media()) {
		throw new Exception('Creative did not validate.');
	}
	
	$AdMediaBanner->setQueueForProcessing();
	$AdMediaBanner->save();

} catch (Exception $e) {
	$AdMediaBanner->setFormError($e->getMessage());
	$gotErrors = true;
}
	
if($gotErrors === false) {
	$urlLocation = sprintf("/%s.htm?good_save", str_replace('/', '-', PAGE_PARENT_C));
	header('Location: '. $urlLocation);
	exit;
}

