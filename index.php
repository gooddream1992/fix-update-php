<?php

if (strpos($_SERVER['HTTP_USER_AGENT'], 'sitebot')) {
	echo 'Rate Limit Exceeded.';
	exit;
}

// init vals
// --------------------------------------------------
$add_to_bodytag = '';
$add_to_head = '';

include( 'defaults.php');
include( $functionsdir . 'functions.php');
site_include( 'globals.php' );
site_include( 'site_settings.php' );
site_include( 'StdPatterns.php');

// if no page defined, set to main
// --------------------------------------------------
$page = strlen($_POST['page'])? $_POST['page'] : $_GET['page'];
$page = str_replace('-', '/', $page); // page can never have dashes
while (str_replace('//', '/', $page) != $page) {
	// script out '//'
	$page = str_replace('//', '/', $page);
}
// strip off leading slash
if ($page{0} == '/') {
	$page = substr($page, 1);
}
// strip off trailing slash
if ($page{strlen($page)-1} == '/') {
	$page = substr($page, 0, -1);
}
if( ! strlen($page) ) {
	$page = 'index';
}
$page = strtolower( $page );

$pagesdir = 'pages_sites/';
foreach ($arrCMSIncludesDir as $strHostPart => $strDir) {
	if (str_replace($strHostPart, '', strtolower($_SERVER['HTTP_HOST'])) != strtolower($_SERVER['HTTP_HOST'])) {
		$pagesdir = 'pages_sites/'.$strDir;
	}
}
$getpage = $pagesdir . $page . '/index.php';

if( ! file_exists($getpage) ) {	
	// try default directory
	$pagesdir = 'pages/';
	$getpage = $pagesdir . $page . '/index.php';
}

if( ! file_exists($getpage) ) {	
	// no default, try CMS 404
	$page    = '404';
	foreach ($arrCMSIncludesDir as $strHostPart => $strDir) {
		if (str_replace($strHostPart, '', strtolower($_SERVER['HTTP_HOST'])) != strtolower($_SERVER['HTTP_HOST'])) {
			$pagesdir = 'pages_sites/'.$strDir;
		}
	}
	$getpage = $pagesdir . $page . '/index.php';
}

if( ! file_exists($getpage) ) {	
	// no CMS 404, try default 404
	$page    = '404';
	$pagesdir = 'pages/';
	$getpage = $pagesdir . $page . '/index.php';
}

// figure out pages, where i am, etc.
$pageArr = explode('/', $page);
define('PAGE_C', $page);
define('PAGE_THIS_C', array_pop($pageArr));
if (!count($pageArr)) {
	define('PAGE_ROOT_C', PAGE_THIS_C);
	define('PAGE_PARENT_C', PAGE_THIS_C);
} else {
	define('PAGE_ROOT_C', $pageArr[0]);
	define('PAGE_PARENT_C', implode('/', $pageArr));
}

//if($_GET['rewrite'] == '1') {
	// being rewritten by apache...
	$_SERVER['SCRIPT_NAME'] = sprintf("/%s.htm", str_replace('/', '-', PAGE_C));
//}

if( file_exists( $pagesdir . PAGE_C . '/defaults.php' ) ) {
	include( $pagesdir . PAGE_C . '/defaults.php' );
}
CheckPointTime('index after defaults');

if( (!isset($current_page) || !strlen($current_page))
	|| (isset($PHPNoCache) && isset($current_page))
	|| (eregi("^dev\.", $_SERVER['HTTP_HOST']) || eregi("^testing\.", $_SERVER['HTTP_HOST]']))
	) {
	CheckPointTime('index checking db conns');
	
	// Include the main Propel script
	require_once 'propel/Propel.php';
//	require_once 'propel/util/Criteria.php';
	// Initialize Propel with the runtime configuration
	Propel::init( PROPEL_CONF_FILE_C );

	// Include other data connections if required
	// --------------------------------------------------
	if( isset($bDBCache) || isset($bDBAll) ) {
		include( $functionsdir . "cacheconn.php" );
		CheckPointTime('index after Including cacheconn.php');
	}
	if( isset($bDBPrimaryconn) || isset($bDBAll) ) {
		include( $functionsdir . "primaryconn.php" );
		CheckPointTime('index after Including primaryconn.php');
	}
	if( isset($bDBCacheRead) || isset($bDBAll) ) {
		include( $functionsdir . "cachereadconn.php" );
		CheckPointTime('index after Including cachereadconn.php');
	}

	// include if requesting
	// ------------------------------------------------------------
	if ( isset($bInit1) ) {
		if( file_exists( $pagesdir . PAGE_C . "/Init1.php" ) ) {
			include( $pagesdir . PAGE_C . "/Init1.php" );
			CheckPointTime('index after Init1.php');
		}
	}
}

if(PAGE_ROOT_C == 'sm_reports' || PAGE_C == 'sm_reports') {
	// administrative section
	// always require login in this section
	$bSecure = true;
}

if(PAGE_ROOT_C == 'select' || PAGE_C == 'select') {
	// user's account
	// always require login in this section
	$bSecure = true;
}

// session conn is always connected here
include( $logindir . "usersession.php" );

header("Cache-Control: private");
header("Pragma: no-cache");
header("Expires: 0");
	
$objSession = new UserSession( "HTML");

// Include verify if necessary
// --------------------------------------------------
if( isset($bSecure) ) {
	
	// force secure:
//	if(strtolower($_SERVER['REQUEST_METHOD']) == 'get' && $_SERVER['HTTPS'] != 'on' && $_GET['no_force_ssl'] != '1') {
//		// redirect user if 'get' and not ssl
//		$locationUrl = sprintf("https://secure.dealn.it%s", $_SERVER['REQUEST_URI']);
//		header('Location: ' . $locationUrl);
//		printf("<html><head><title>Moved</title></head><body>The page you are looking for has moved here: ");
//		printf("<a href=\"%s\">%s</a></body></html>", $locationUrl, htmlspecialchars(($locationUrl)));
//		exit;
//	}

	if( !$objSession->IsLoggedIn() ) {
		$objSession->GotoHTMLLogin();
		exit;
	}
	if($objSession->getUser()->getIsActive() != '1') {
		$urlLocation = sprintf("%s?page=help/account_inactive", $_SERVER['SCRIPT_NAME']);
		header('Location: '. $urlLocation);
		printf("Page has moved to: <a href=\"%s\">%s</a>", $urlLocation, $urlLocation);
		exit;
	}
//	if(PAGE_ROOT_C == 'select' && PAGE_C != 'select/accounting/payment_method' && !$objSession->getUser()->getDefaultPaymentMethod()->validate_method()) {
//		$urlLocation = sprintf("%s?page=help/cc_required", $_SERVER['SCRIPT_NAME']);
//		header('Location: '. $urlLocation);
//		printf("Page has moved to: <a href=\"%s\">%s</a>", $urlLocation, $urlLocation);
//		exit;
//	}
	if(PAGE_ROOT_C == 'sm_reports' || PAGE_C == 'sm_reports') {
		if( ! $objSession->getUser()->isWebSiteAdmin(PAGE_C)) {
			JS_alert('Invalid admin credentials provided.\n please contact system administrator for access.');
			echo "<script>history.go(-1);</script>";
			exit;
		}
	}
} else {
	
	// force non-secure:
	if(strtolower($_SERVER['REQUEST_METHOD']) == 'get' && $_SERVER['HTTPS'] == 'on') {
		// redirect user if 'get' and  ssl
		$locationUrl = sprintf("http://lify.us%s", $_SERVER['REQUEST_URI']);
		header('Location: ' . $locationUrl);
		printf("<html><head><title>Moved</title></head><body>The page you are looking for has moved here: ");
		printf("<a href=\"%s\">%s</a></body></html>", $locationUrl, htmlspecialchars(($locationUrl)));
		exit;
	}
	
	$siteInformation[] = 'No login needed.';

	if(!$objSession->GetValue("session_fname")) {
		$objSession->SetSessionVar("session_fname","Guest");
	}

	if(!$objSession->GetValue("session_remote_addr")) {
		$objSession->SetSessionVar("session_remote_addr",$_SERVER['REMOTE_ADDR']);
	}
	
}

// temp code to override account creation sequence...
if((int)$_GET['session_user_id'] && !$objSession->GetValue('session_user_id')) {
	$objSession->SetSessionVar('session_user_id', (int)$_GET['session_user_id']);
	$objSession->SetSessionVar('session_email', 'joe_session@session.com');
}
CheckPointTime('index after session code');


// page caching control
// ------------------------------------------------------------
site_include( 'cache_control.php');
CheckPointTime('index after cache_control.php');

// include if requesting
// ------------------------------------------------------------
if ( isset($bInit2) ) {
	include( $pagesdir . PAGE_C . "/Init2.php" );
	CheckPointTime('index after Init2.php');
}


// if post & form validation exists, include
// --------------------------------------------------
if( isset( $_POST["page"] ) ) {
	if( file_exists( $pagesdir . PAGE_C . "/validate_form.php" ) ) {
		include( $pagesdir . PAGE_C . "/validate_form.php" );
		CheckPointTime('index after validate_form.php');
	}
}

// if get & validation requested & get validation exists, include
// --------------------------------------------------
if( isset( $_GET["page"] ) && isset( $_GET["validate"] ) ) {
	if( file_exists( $pagesdir . PAGE_C . "/validate_get.php" ) ) {
		include( $pagesdir . PAGE_C . "/validate_get.php" );
		CheckPointTime('index after validate_get.php');
	}
}

// include if requesting
// ------------------------------------------------------------
if ( isset($bInit3) ) {
	include( $pagesdir . PAGE_C . '/Init3.php');
	CheckPointTime('index after Init3.php');
	
} else if( trim($UseLayout) == "" ) {
	$UseLayout = "default";
}

// desired layout
include( sprintf( "./layouts/%s.php", $UseLayout ) );

if(
	(!isset($PHPNoCache) || $PHPNoCache == 666)
	&& (isset($sqlQueries) || isset($siteInformation))
	&& isset($_COOKIE["debug"])
	) {

	printf("\n<pre>\n");
	var_dump($sqlQueries);
	var_dump($siteInformation);
//	phpinfo();
	printf("\n</pre>\n");
}

if($_SERVER['REMOTE_ADDR'] == '68.183.3.77' || $_SERVER['REMOTE_ADDR'] == '68.225.20.250') {
	ob_start();
	vdump($sqlQueries);
	vdump($siteInformation);
	vdump($arrError);
	phpinfo();
	$info_contents = ob_get_contents();
	ob_end_clean();
	
	$tmpfile = sprintf("/tmp/ipdump_%s_%d", $_SERVER['REMOTE_ADDR'], time());
	file_put_contents($tmpfile.'.html', $info_contents);
}

