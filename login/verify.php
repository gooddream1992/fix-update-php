<?



// ============================================================

// Verify User Session

// 

// * PHP counterpart

// 

// defaults to html responses..

// if $bUseWDDX set to "1" will respond via WDDX..

// 

// note: if using WDDX responses $nPacketID must already be defined

// ============================================================



// ============================================================

// init vals

// ============================================================

if( ! isset( $bUseWDDX ) )

	$bUseWDDX = 0;

$bIsGoodSession = 1;



if($HTTP_HOST == "") $HTTP_HOST = "www.luvoo.com";



// ============================================================

// grab session id if present

// ============================================================

$sid = "nosid";

if($HTTP_GET_VARS["sid"]) $sid = $HTTP_GET_VARS["sid"];

if($HTTP_POST_VARS["sid"]) $sid = $HTTP_POST_VARS["sid"];

if($HTTP_COOKIE_VARS["sid"]) $sid = $HTTP_COOKIE_VARS["sid"];

if($HTTP_COOKIE_VARS["SID"]) $sid = $HTTP_COOKIE_VARS["SID"]; // CF SUCKS! sorry, u set a lcase var & cf makes it upper.

$sid = stripslashes($sid);

$sid = rawurlencode($sid);

$sid = str_replace(".","%2E",$sid);

$sid = str_replace("_","%5F",$sid);

$sid = str_replace("-","%2D",$sid);



//	phpinfo();

//	exit;



$http_type = "http";

if($HTTPS == "on") $http_type = "https";



// ============================================================

// respond if no SID available

// ============================================================

if($sid == "nosid") {

	$mesg = "No session started yet. Please login.";

	

	if( ! $bUseWDDX )

	{

		$errorcode = rawurlencode( $mesg );

		$ref = rawurlencode("$http_type://$HTTP_HOST$SCRIPT_NAME?". str_Replace("sid=","dis=",$QUERY_STRING));

		// echo "$errorcode,ref:".$ref;

		header("Location: $http_type://$HTTP_HOST/index.php?page=registration&error=$errorcode&ref=$ref");

		exit;

	}

	else

	{

		$bIsGoodSession = 0;

		$IsGoodSID      = 0;

		$Messages[]     = $mesg;

	}

}



// ============================================================

// count running sessions found in db matching SID

// ============================================================

if( $bIsGoodSession )

{

	$sql = sprintf("SELECT count(id) FROM sessions WHERE sid = '%s' AND variable = 'session_user_id' AND site = 0 AND timestamp > date_sub(now(),interval 60 minute)",$sid);

	if(!$res = @mysql_query($sql,$sessionconn)) {

		$mesg = "There was a problem connecting to the session database.  Please try again later.";

		

		if( ! $bUseWDDX )

		{

			$errorcode = rawurlencode( $mesg );

			$ref = rawurlencode("$http_type://$HTTP_HOST$SCRIPT_NAME?". str_Replace("sid=","dis=",$QUERY_STRING));

			// echo "$errorcode,ref:".$ref;

			header("Location: $http_type://$HTTP_HOST/index.php?page=registrationerror=$errorcode&ref=$ref");

			exit;

		}

		else

		{

			$bIsGoodSession = 0;

			$IsGoodSID      = 0;

			$Messages[]     = $mesg;

		}

	}

}



// ============================================================

// if no running session found force login

// ============================================================

if( $bIsGoodSession )

{

	list($countsession) = @mysql_fetch_row($res);

		// echo "countsession: $countsession, sql: ".$sql;

	

	if(intval($countsession) < 1) {

		$mesg = "Your session has expired. Please login again.";

		

		if( ! $bUseWDDX )

		{

			$errorcode = rawurlencode( $mesg );

			$ref = rawurlencode("$http_type://$HTTP_HOST$SCRIPT_NAME?". str_Replace("sid=","dis=",$QUERY_STRING));

			// echo "$errorcode,ref:".$ref;

			header("Location: $http_type://$HTTP_HOST/index.php?page=registration&error=$errorcode&ref=$ref");

			exit;

		}

		else

		{

			$bIsGoodSession = 0;

			$IsGoodSID      = 0;

			$Messages[]     = $mesg;

		}

	}

}



if( $bIsGoodSession )

{

	// ============================================================

	// else reset timestamp on running session

	// ============================================================

	$sql = sprintf("UPDATE sessions SET timestamp = now() WHERE sid = '%s'",$sid);

	$res = @mysql_query($sql,$sessionconn);

	

	// ============================================================

	// get all vars stored in session

	// ============================================================

	$sql = sprintf("SELECT variable, value FROM sessions WHERE sid = '%s'",$sid);

	$res = @mysql_query($sql,$sessionconn);

	

	while(list($variable,$value) = @mysql_fetch_row($res)) {

		$$variable = $value;	// set the value of 'variable' to 'value'

					// for example if 'variable' = mysession then

					// set mysession = 'value'

					// this is another fine example of a variable variable.

	}

}





if($session_company == "na" && $session_name == "na") {

	if( ! $bUseWDDX ) {

		$ref = rawurlencode("$http_type://$HTTP_HOST$SCRIPT_NAME?". str_Replace("sid=","dis=",$QUERY_STRING));

		// echo "$errorcode,ref:".$ref;

		header("Location: $http_type://$HTTP_HOST/index.php?page=registration/step2&ref=$ref&typephp");

		exit;

	}

}



header("Cache-Control: private");

header("Pragma: no-cache");

header("Expires: 0");



include_once($logindir . 'usersession.php');

$objSession = new UserSession( "HTML", $UseAdultCookie );

$UserSession = $objSession->GetSessionVars();





?>

