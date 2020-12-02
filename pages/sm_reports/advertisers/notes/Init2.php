<?

// init2
$id = $_POST['id']?$_POST['id']:$_GET['id'];
$back_page = $_POST['back_page']?$_POST['back_page']:$_GET['back_page'];

$_POST['email_from'] = (isset($_POST['email_from']))? $_POST['email_from']: 'info@'.DOMAIN_C;

$WorkingUser = UserPeer::retrieveByPK($id);

if($WorkingUser === null) {
	$urlLocation = sprintf("%s?page=%s&rand=%d&bad_id", $_SERVER['SCRIPT_NAME'], PAGE_PARENT_C, rand(100000, 999999));
	header('Location: '. $urlLocation);
	exit;
}

$UserNotes = $WorkingUser->getUserNotesRelatedByUserId();
$ReplacementFields = UserPeer::getReplacementFields();
$collEmailTemplate = EmailTemplatePeer::getAll();

// prepopulate email fields if template_id is passed in the url
if ((int)$_GET['template_id'] > 0) {
	$thisTemplate = EmailTemplatePeer::retrieveByPK((int)$_GET['template_id']);
	if(is_object($thisTemplate)) {
		$_POST['notes'] = $thisTemplate->getBody();
		$_POST['email_subject'] = $thisTemplate->getSubject();
		$_POST['send_email'] = '1';
	}
}

