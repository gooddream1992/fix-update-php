<?



header("Cache-Control: private");

header("Pragma: no-cache");

header("Expires: 0");



$functionsdir = "../functions/";

$includesdir = "../includes/";



include_once("../includes/app_globals.php");



$strTmpSID = stripslashes( $HTTP_GET_VARS["login"] );

$strTmpSID = rawurlencode( $strTmpSID );

$strTmpSID = str_replace( ".", "%2E", $strTmpSID );

$strTmpSID = str_replace( "_", "%5F", $strTmpSID );

$strTmpSID = str_replace( "-", "%2D", $strTmpSID );

$strTmpSID = str_replace( "%20", "+", $strTmpSID );



printf("<html><head></head><body><center>Logging in... Please wait.<img src=http://www%s/login/cookie.php?login=%s border=0 height=1 width=1>",COOKIE_DOMAIN_C,$strTmpSID);



echo " \n\n";

flush();

sleep(1);



?>



<script language=javascript>

<!--



self.close();

// -->

</script>

</body>

</html>

