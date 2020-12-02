<?



// set COOKIE_DOMAIN_C

$tmpDomainArray = explode(".",$HTTP_SERVER_VARS["HTTP_HOST"]);

$strCookieDomain = sprintf(".%s.%s", $tmpDomainArray[count($tmpDomainArray)-2], $tmpDomainArray[count($tmpDomainArray)-1] );

define("COOKIE_DOMAIN_C", $strCookieDomain);



//header("Cache-Control: private");

//header("Pragma: no-cache");

//header("Expires: 0");



$im = imagecreate(10,10);

$grey = ImageColorAllocate($im,170,170,170);

$devnull = imagefill($im,0,0,$grey);



$strTmpSID = stripslashes( $HTTP_GET_VARS["login"] );

$strTmpSID = rawurlencode( $strTmpSID );

$strTmpSID = str_replace( ".", "%2E", $strTmpSID );

$strTmpSID = str_replace( "_", "%5F", $strTmpSID );

$strTmpSID = str_replace( "-", "%2D", $strTmpSID );

$strTmpSID = str_replace( "%20", "+", $strTmpSID );



$strSetCookie = sprintf("Set-Cookie: SID=%s; path=/; domain=%s;", $strTmpSID, COOKIE_DOMAIN_C);

header($strSetCookie);



Header("Content-type: image/png");



ImagePng($im);



ImageDestroy($im);

 

?>