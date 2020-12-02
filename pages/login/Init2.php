<?

$arrError = array();
$refreshTo = '';

if($_POST['refresh_to'] === null) {
	$_POST['refresh_to'] = '';
}

if($_POST['email'] === null) {
	$_POST['email'] = '';
}

if($_POST['password'] === null) {
	$_POST['password'] = '';
}

if($_GET['logout'] === null) {
	$_GET['logout'] = '';
}

if($_GET['ref'] === null) {
	$_GET['ref'] = '';
}
if($_POST['ref'] === null) {
	$_POST['ref'] = $_GET['ref'];
}
$_GET['ref'] = $_POST['ref'];


if($_GET['error'] === null) {
	$_GET['error'] = '';
	
} else {
	// passed error in url
	if(eregi(DOMAIN_C, $_SERVER['HTTP_REFERER'])) {
		$arrError[] = htmlspecialchars($_GET['error']);
	}
}

// passed error in session
if($objSession->GetValue('login_message')) {
	$arrError[] = $objSession->GetValue('login_message');
	$objSession->DeleteSessionVars(array('login_message'));
}

// standard login continue button
$DfltContinueCapt  = "Continue";

// adult login continue button
$AdultContinueCapt = "I am over 18";


/* --------------------------------------------------
' if requested log user out
--------------------------------------------------- */
if($_GET['logout'] != '') {
	$objSession->LogoutUser();
	$arrError[] = 'You have been logged out.';

	if( strlen( $_GET['ref']) > 0 ) {
		$add_to_head = sprintf("<meta http-equiv=refresh content='0;URL=%s'>", $_GET['ref']);
		$refreshTo = sprintf("
			<script language = 'javascript'>
			<!--//
				document.location = \"%s\";
			// -->
			</script>
			<font size=2>Logout successful.  Please <a href=\"%s\">click here to continue</a>.</font><br>
			",
			$_GET['ref'],
			$_GET['ref']
			);
	}
}

/* --------------------------------------------------
' if requested cancel, return user to front page
--------------------------------------------------- */
if( strlen($_POST['SubCancel']) ) {
	$redirectURL = sprintf("http://%s/", $_SERVER['HTTP_HOST']);
	header( sprintf("Location: %s",$redirectURL) );
	exit;
}

/* --------------------------------------------------
' Verify their username and password
--------------------------------------------------- */
if( strlen($_POST['SubContinue']) ) {


	if( count($arrError) == 0) {

		$login_info = array(
			'password' => $_POST['password'],
			'email' => $_POST['email']
			);


		if( !$loginStatus = $objSession->LoginUser( $login_info )) {

			$arrError = array_merge($arrError, $objSession->GetSessionMessages());
			
		} else {

			if( strlen( $_GET['ref']) == 0 ) {
				$_GET['ref'] = '/select.htm';
			}

			$add_to_head = sprintf("<meta http-equiv=refresh content='0;URL=%s'>", $_GET['ref']);
			$refreshTo = sprintf("
				<script language = 'javascript'>
				<!--//
					document.location = \"%s\";
				// -->
				</script>
				<font size=2>Login successful.  Please <a href=\"%s\">click here to continue</a>.</font><br>
				",
				$_GET['ref'],
				$_GET['ref']
				);
		}

	}
}

$SubContinueValue = $DfltContinueCapt;


