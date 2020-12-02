<?

global $add_to_head;
global $numbermask;
global $starttime;
global $siteInformation;
global $functionsdir;

date_default_timezone_set('America/Los_Angeles');

// lower because we're including files using this value
$_SERVER["HTTP_HOST"] = strtolower($_SERVER["HTTP_HOST"]);

// compact privacy policy
header('P3P: policyref="http://'. $_SERVER['HTTP_HOST'] .'/w3c/p3p.xml", CP="CAO DSP COR CURa ADMa DEVa TAIa PSAa PSDa IVAa IVDa CONa TELa OUR IND PHY ONL UNI PUR COM NAV INT DEM CNT STA PRE"');
//header('P3P: CP="CAO DSP COR CURa ADMa DEVa TAIa PSAa PSDa IVAa IVDa CONa TELa OUR IND PHY ONL UNI PUR COM NAV INT DEM CNT STA PRE"');

include($functionsdir . 'BadWords.php');

$starttime = @getmicrotime();  /* start: show page execution time */

$siteInformation[] = "Server: ".$_SERVER["SERVER_ADDR"];

@$add_to_head .= sprintf("\n\t<meta name=\"server\" content=\"%s\">\n", $_SERVER["SERVER_ADDR"]);
@$add_to_head .= sprintf("\n\t<meta name=\"client\" content=\"%s\">\n", $_SERVER["REMOTE_ADDR"]);

define("COMPANY_C", 'Dealn.it Inc.');

$tmpDomainArray = explode(".",$_SERVER["HTTP_HOST"]);
$tmpDomainString = ($_SERVER['HTTP_HOST'] == $_SERVER['SERVER_ADDR'])? COMPANY_C : sprintf("%s.%s", strtolower($tmpDomainArray[count($tmpDomainArray)-2]), strtolower($tmpDomainArray[count($tmpDomainArray)-1]) );
define("DOMAIN_C", $tmpDomainString);
define("DOMAIN_HOME_C", 'http://dealn.it');
//define("DOMAIN_HOME_C", '');
//define("DOMAIN_HOME_C", 'http://www.komideals.com');

// dealn
define('COMMISSION_JUNCTION_API_KEY_C',   '008642fcf8a95067e6daf0097b6d22b671245e0f353157fb325043f3e3a1382504dfd528ee8af3b076f3057c07e8139d0986a5bfd2ba8c09e6ae99dd376a4e266f/49069a8dad99fc49867fd4c87b5dcc19d20c0efd81af3703f0c06521448943288f5936dc01b1871ce5fdadee65135e0819f56717375c32eb2cc8b9dd3a3cb661');
// komi
define('COMMISSION_JUNCTION_API_KEY_2_C', '00b4d4f58d7f7d5335638bf2e0f55770cfd6579c485fddd7f71a5104ae0afad72e9cdfa5bedf65d64d1d7aaf0709ee262668dc68519edd6096d0f04a3815ce0c0d/6ef7d46bed9561af7c94100a9e63f755836a25fc7fdfea3cb80889bfa7fb407a4ff19709671e1fd38648f5db692667cca96d4f7e4283c9c4dcc0a7ee388f0221');


// livingsocial
define('LIVINGSOCIAL_API_KEY_C', 'AFFDE0qrgg9jxlHIw4FSJWKLKPymi8');

//----------------------------//
// Include database wrapper. // 
//----------------------------//
include( $functionsdir . 'sql_layer.php' );

						 
// set COOKIE_DOMAIN_C
define("COOKIE_DOMAIN_C", DOMAIN_C);
//define("COOKIE_DOMAIN_C",$_SERVER['HTTP_HOST']);

// set affiliate id cookie as needed
if( strlen($_GET['source']) > 0 ) {
	setcookie( 'source', $_GET['source'], time()+(30*86400), '/', COOKIE_DOMAIN_C);
	// set here so it can be used immediately
	$_COOKIE['source'] = $_GET['source'];
}
define("SOURCE_C", ($_COOKIE['source'])? $_COOKIE['source'] : $_SERVER['HTTP_HOST']);

// set sub-affiliate id cookie as needed
if( strlen($_GET['uid']) > 0 ) {
	setcookie( 'uid', $_GET['uid'], time()+(30*86400), '/', COOKIE_DOMAIN_C);
	// set here so it can be used immediately
	$_COOKIE['uid'] = $_GET['uid'];
}
define("UID_C", ($_COOKIE['uid'])? $_COOKIE['uid'] : $_SERVER['HTTP_HOST']);

// set as needed
if( strlen($_GET['v']) > 0 ) {
	setcookie( 'v', $_GET['v'], time()+(30*86400), '/', COOKIE_DOMAIN_C);
	// set here so it can be used immediately
	$_COOKIE['v'] = $_GET['v'];
}
define("V_C", ($_COOKIE['v'])? $_COOKIE['v'] : '');

// set as needed for A/B testing
if( strlen($_GET['ab']) > 0 ) {
	setcookie( 'ab', $_GET['ab'], time()+(30*86400), '/', COOKIE_DOMAIN_C);
	// set here so it can be used immediately
	$_COOKIE['ab'] = $_GET['ab'];
}
define("AB_C", ($_COOKIE['ab'])? $_COOKIE['ab'] : '');

// set as needed for publisher id
if( (int)$_GET['pid'] > 0 ) {
	// special circumstance for user 35198
	if ((int)$_GET['pid'] == 35198) {
		$_GET['pid'] = 33703;
	}
	setcookie( 'pid', (int)$_GET['pid'], time()+(30*86400), '/', COOKIE_DOMAIN_C);
	// set here so it can be used immediately
	$_COOKIE['pid'] = (int)$_GET['pid'];
}
define("PID_C", ($_COOKIE['pid'])? (int)$_COOKIE['pid'] : 19568); // 19568 = test publisher
define('PID_DEFAULT_C', 19568);

// set as needed for surfer id
if( strlen($_GET['sid']) > 0 ) {
	setcookie( 'sid', $_GET['sid'], time()+(30*86400), '/', COOKIE_DOMAIN_C);
	// set here so it can be used immediately
	$_COOKIE['sid'] = $_GET['sid'];
}
define("SID_C", ($_COOKIE['sid'])? $_COOKIE['sid'] : ''); // default to nothing
define('SID_DEFAULT_C', '');

// --------------------------------------------------
// Setup disk caching info...
// --------------------------------------------------
if( !eregi('apache', $_SERVER['SERVER_SOFTWARE']) ) {
	define('CACHE_PATH_C', 'd:\\inetpub\\wwwroot\\cache\\');
} else { 
	define('CACHE_PATH_C', '/var/www/cache/');
}

define('MAX_OFFERS_C', 10);

$strUriFrom = sprintf("&from=%s", urlencode(str_replace('&from='.urlencode($_GET['from']), '', $_SERVER['REQUEST_URI'])));
define('CACHE_BUSTER_C', sprintf("&cb=%s", md5($_SERVER['REMOTE_ADDR'] . time() . rand(10000000, 99999999))));
define('EMAIL_PAGE_C', 'http://'. $_SERVER['HTTP_HOST'] . '/index.php?page=index' . CACHE_BUSTER_C .$strUriFrom);
define('DATA_PAGE_C',  'http://'. $_SERVER['HTTP_HOST'] . '/index.php?page=data'  . CACHE_BUSTER_C .$strUriFrom);
define('OFFER_PAGE_C', 'http://'. $_SERVER['HTTP_HOST'] . '/index.php?page=offer' . CACHE_BUSTER_C .$strUriFrom);
define('CARROT_PAGE_C','http://'. $_SERVER['HTTP_HOST'] . '/index.php?page=carrot'. CACHE_BUSTER_C .$strUriFrom);
define('OPTIN_PAGE_C', 'http://'. $_SERVER['HTTP_HOST'] . '/index.php?page=o-i'   . CACHE_BUSTER_C .$strUriFrom);
define('FINAL_PAGE_C', 'http://'. $_SERVER['HTTP_HOST'] . '/index.php?page=final' . CACHE_BUSTER_C .$strUriFrom);

// --------------------------------------------------
// Primary DB Info
// --------------------------------------------------
define('PRIMARY_SERVER_C',	'localhost');
define('PRIMARY_DB_C',		'komideals');
define('PRIMARY_USERNAME_C','komiuser');
define('PRIMARY_PASSWORD_C','komi211290');
define('PRIMARY_DBTYPE_C',	'MySQL');

// --------------------------------------------------
// User Session DB Info
// --------------------------------------------------
define('SESSION_SERVER_C',		PRIMARY_SERVER_C );
define('SESSION_DB_C',			PRIMARY_DB_C );
define('SESSION_USERNAME_C',	PRIMARY_USERNAME_C );
define('SESSION_PASSWORD_C',	PRIMARY_PASSWORD_C );
define('SESSION_DBTYPE_C',		PRIMARY_DBTYPE_C);

$numbermask = 99999999999.99;

