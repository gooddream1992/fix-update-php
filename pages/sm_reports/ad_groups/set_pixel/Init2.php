<?

// init2
$id = $_POST['id']?$_POST['id']:$_GET['id'];
$back_page = $_POST['back_page']?$_POST['back_page']:$_GET['back_page'];
$_POST['notify_user'] = (strlen($_POST['notify_user']))? $_POST['notify_user']: 'yes';

$WorkingAdGroup = AdGroupPeer::retrieveByPK($id);

if($WorkingAdGroup === null) {
	$urlLocation = sprintf("%s?page=%s&rand=%d&bad_id", $_SERVER['SCRIPT_NAME'], PAGE_PARENT_C, rand(100000, 999999));
	header('Location: '. $urlLocation);
	exit;
}



