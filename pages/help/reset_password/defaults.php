<?

$h1 = 'Password Reset Utility: Enter Key';
$page_title = ucfirst(DOMAIN_C) .': ' . $h1;

$arrError = array();
$arrStatus = array();

// set these if exists and page hasn't been posted to
if(!isset($_POST['page'])) {
	if(isset($_GET['id'])) $_POST['id'] = $_GET['id'];
	if(isset($_GET['key'])) $_POST['password_reset_hash'] = $_GET['key'];
}

