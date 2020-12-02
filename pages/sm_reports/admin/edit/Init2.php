<?

$id = $_POST['id']?$_POST['id']:$_GET['id'];
$back_page = $_POST['back_page']?$_POST['back_page']:$_GET['back_page'];

$WorkingUser = UserPeer::retrieveByPK((int)$id);

if(is_null($WorkingUser)) {
	$location = sprintf("/%s.htm?rnd=%d&bad_id", str_replace('/', '-', PAGE_PARENT_C), rand(100, 999999999));
	header('Location: '. $location);
	exit;
}

// gotta do this before retrieving new list of objects
if ($_POST['submit_button'] == $button_text_add && is_array($_POST['unused_objects'])) {
	// add objects...
	while (list($key, $SecurityObjectId) = each($_POST['unused_objects'])) {
		$WorkingUser->setSecurityObjectAccessBySecurityObjectId((int)$SecurityObjectId, $objSession->getUser());
	}
}
if ($_POST['submit_button'] == $button_text_remove && is_array($_POST['working_objects'])) {
	// remove objects...
	while (list($key, $SecurityObjectId) = each($_POST['working_objects'])) {
		try {
			$WorkingUser->deleteSecurityObjectAccessBySecurityObjectId((int)$SecurityObjectId);
		} catch (Exception $e) {
			JS_alert($e->getMessage());
		}
	}
}


$AllObjects = SecurityObjectPeer::getAll();
$WorkingObjects = array();
$UnusedObjects = array();
foreach ($AllObjects as $SecurityObject) {
	$UserSecurityObject = $WorkingUser->getUserSecurityObjectRelatedBySecurityObject($SecurityObject);
	if (is_null($UserSecurityObject)) {
		$UnusedObjects[] = $SecurityObject;
	} else {
		$WorkingObjects[] = $SecurityObject;
	}
}
reset($AllObjects);


