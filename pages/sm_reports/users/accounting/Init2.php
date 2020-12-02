<?


// init2
$id = $_POST['id']?$_POST['id']:$_GET['id'];
$back_page = $_POST['back_page']?$_POST['back_page']:$_GET['back_page'];

$WorkingUser = UserPeer::retrieveByPK($id);
/* @var $WorkingUser User */

if($WorkingUser === null) {
	$urlLocation = sprintf("/%s.htm?rand=%d&bad_id", str_replace('/', '-', PAGE_PARENT_C), rand(100000, 999999));
	header('Location: '. $urlLocation);
	exit;
}

$PaymentMethod = $WorkingUser->getDefaultPaymentMethod();

if (!strlen($_POST['amount_per_month'])) {
	$_POST['amount_per_month'] = $WorkingUser->getPaymentPlan()->getAmount();
}

$_POST['amount_per_month'] = ereg_replace("[^0-9.]",'', $_POST['amount_per_month']);


