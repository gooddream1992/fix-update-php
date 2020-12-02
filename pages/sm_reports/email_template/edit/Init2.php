<?

$id = $_POST['id']?$_POST['id']:$_GET['id'];
$back_page = $_POST['back_page']?$_POST['back_page']:$_GET['back_page'];

$EmailTemplate = EmailTemplatePeer::retrieveByPK((int)$id);

if(is_null($EmailTemplate)) {
	$location = sprintf("/%s.htm?rnd=%d&bad_id", str_replace('/', '-', PAGE_PARENT_C), rand(100, 999999999));
	header('Location: '. $location);
	exit;
}

$ReplacementFields = UserPeer::getReplacementFields();


