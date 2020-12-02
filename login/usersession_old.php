<?php

	// ============================================================
	// UserSession
	//
	// description:
	//	 login/logout user accounts to establish/destroy sessions..
	//	 validate session ids already supplied via "sid" cookie, post, or get
	//
	// usage:
	//	 - instantiate
	//	 - session object will try to validate when created
	//	   + (case 1) check status
	//	     - if html and failed call logout user to force back to login
	//	     - if wddx..  retrieve info and add to appropriate packet info
	//	   + (case 2) call login user
	//	     - ie. trying to establish session when not logged in yet
	//	     - then go to case 1
	//	 - after that object's fair game
	//
	// instantiation:
	//	 $objMyObject = new UserSession;
	//	 $objMyObject = new UserSession("HTML");
	//	   - start session..  defaults to html support
	//	 $objMyObject = new UserSession("WDDX");
	//	   - start session..  wddx support..  suppresses browser redirects
	//
	// public methods:
	//	 GetSessionStatus()
	//	   - returns (bool)
	//	   - current session status..  valid/invalid
	//	 GetNicknameStatus()
	//	   - returns (bool)
	//	   - current status of user's nickname..  valid/invalid format
	//	 GetSID()
	//	   - returns (string)
	//	   - current session id..
	//	 GetSessionVars( [string index, ...] )
	//	   - returns (array)
	//	   - vars stored on current session..  ie. $ArrayName["session_nickname"]
	//	   - optional arguments..  desired indexes..  if supplied returned array will contain only those indexes
	//
	//	 (mixed) GetValue( $SessionVar )
	//	     * method used to retrieve a single session var
	//	     * args:
	//	         (string) $SessionVar = session variable you're wanting the value for
	//
	//	 GetSessionMessages()
	//	   - returns (array)
	//	   - any messages from this instance of session..  ie. reasons for failure/success
	//	 CountSessionVars()
	//	   - returns (integer)
	//	   - number of session variables stored in this instance of session
	//	 CountSessionMessages()
	//	   - returns (integer)
	//	   - number of messages stored in this instance of session
	//	 LoginUser( string login, string password [, bool remember_user] )
	//	   - returns (bool)
	//	   - login success/failure..  follow with other pub methods if additional info required
	//	   - if remember flag true sets sid cookie in user's browser..  default is false
	//	 LogoutUser()
	//	   - returns (bool)
	//	   - logout success/failure..  if html support..  redirects to login screen after successful logout
	//	   - to force user back to login in html support..  instantiate session (good or bad)..  then call LogoutUser()
	// 
	// note:
	//	 have experienced intermittent problem with server hanging
	//	 when trying to use array returned by methods which return
	//	 arrays if you're attempting to use returned array directly
	//	 from method call response..  but if you set a new variable
	//	 equal to the returned array and then use it instead of the
	//	 method call itself doesn't seem to be a problem.
	//	 php oop support seems lacking..  and could probably be
	//	 helped by stronger typed syntax..  forcing little issues
	//	 like this to be resolved.
	//
	// Authors:
	//	 John Adams
	// Date:
	//	 2001-02-14
	// ============================================================

	// seed random number generator
	// ============================================================
	srand ((double) microtime() * 1000000);

	class UserSession {

		var $strSID;			// (string) current session id
		var $bIsGoodSID;		// (bool) 1|0.. is valid session id
		var $bIsGoodNick;		// (bool) 1|0.. nickname is valid format
		var $objSessionVars;	// (array) session vars
		var $objMessages;		// (array) response messages
		var $strDefSessionType;	// (string) default session type
		var $strSessionType;	// (string) session type in use..  "HTML", "WDDX"
		var $ReqAdultCookie;	// (bool) require adult cookie for good session
		var $IsSetAdultCookie;	// (bool) is adult cookie set or not
		
		var $_isSessionModified; // (bool) flag to determin if a save is required.

		// constructor
		// ------------------------------------------------------------
		function UserSession( $strSessType="", $AdultCookie=false ) {
			global $_GET, $_POST, $_COOKIE;
			global $siteInformation;

			// * forcing property type to array makes sure it can always be evaluated as array by class user
			settype( $this->objSessionVars, "array" );
			settype( $this->objMessages, "array" );

			// set type of session
			$this->strDefSessionType = "HTML";

			if( $strSessType == "WDDX" || $strSessType == "GUEST")
				$this->strSessionType = $strSessType;
			else
				$this->strSessionType = $this->strDefSessionType;

			// default to invalid session id
			$this->bIsGoodSID  = 0;

			// default to valid nickname format
			$this->bIsGoodNick = 1;
			
			$this->_isSessionModified = false;

			// set session id if given
			$strTmpSID = "nosid";
			if( isset($_GET["sid"]) )
				$strTmpSID = $_GET["sid"];
			if( isset($_POST["sid"]) )
				$strTmpSID = $_POST["sid"];
			if( isset($_COOKIE["sid"]) )
				$strTmpSID = $_COOKIE["sid"];
			if( isset($_COOKIE["SID"]) )
				$strTmpSID = $_COOKIE["SID"]; // CF SUCKS! sorry, u set a lcase var & cf makes it upper.
			$strTmpSID = stripslashes( $strTmpSID );
			$strTmpSID = rawurlencode( $strTmpSID );
			$strTmpSID = str_replace( ".", "%2E", $strTmpSID );
			$strTmpSID = str_replace( "_", "%5F", $strTmpSID );
			$strTmpSID = str_replace( "-", "%2D", $strTmpSID );
			$this->strSID = $strTmpSID;

			// set adult cookie requirement
			$this->ReqAdultCookie = (bool) $AdultCookie;

			// set status of adult cookie
			if( isset( $_COOKIE['ADULT_ALLOWED'] ) ) {
				$this->IsSetAdultCookie = true;
			} else {
				$this->IsSetAdultCookie = false;
			}

			$siteInformation[] = 'UserSession constructor, sid: '. $this->strSID;
			// validate session id
			if( $this->ValidateSID() ) {
				// update session timestamps
				$this->UpdateTimestamp();

				// set session vars
				$this->LoadSessionVars();

				// validate format of user's nickname
				$this->ValidateNickname();
			}
		}

		// get session status
		// ------------------------------------------------------------
		function GetSessionStatus() {
			return $this->bIsGoodSID;
		}

		// get nickname status
		// ------------------------------------------------------------
		function GetNicknameStatus() {
			return $this->bIsGoodNick;
		}

		// get SID
		// ------------------------------------------------------------
		function GetSID() {
			return $this->strSID;
		}

		// get session vars
		// ------------------------------------------------------------
		function GetSessionVars() {
			if( func_num_args() == 0 ) {
				// return entire array
				return $this->objSessionVars;
			} else {
				// return array with desired elements
				$objArray;
				$objArgs = func_get_args();
				settype( $objArray, "array" );
				while( list($key, $value) = each($objArgs) )
					$objArray[$value] = $this->objSessionVars[$value];
				reset( $this->objSessionVars );
				return $objArray;
			}
		}

		function GetValue( $SessionVar ) {

			// return the value of the given session variable name
			// ------------------------------------------------------------
			return $this->objSessionVars[$SessionVar];
		}

		// get session messages
		// ------------------------------------------------------------
		function GetSessionMessages() {
			return $this->objMessages;
		}

		// count session vars
		// ------------------------------------------------------------
		function CountSessionVars() {
			return count( $this->objSessionVars );
		}

		// count session messages
		// ------------------------------------------------------------
		function CountSessionMessages()
		{
			return count( $this->objMessages );
		}

		/*
		// login user
		// ------------------------------------------------------------
		function LoginUser( $login_info="", $pass="", $adult="0" ) {
			global $primaryconn, $_COOKIE, $HTTP_USER_AGENT, $REMOTE_ADDR;

			// clear all session messages
			$this->DeleteMessages();

			// make sure login isn't 0 length
			if( strlen($login_info['nickname']) < 1 && strlen($login_info['email']) < 1 ) {
				$this->objMessages[] = "Please supply a valid nickname or email address for your account.";
				return false;
			}

			// make sure password isn't 0 length
			if( strlen($pass) < 1 ) {
				$this->objMessages[] = "Please supply a valid password for your account.";
				return false;
			}

			$auth_field = (strlen($login_info['nickname']) > 0)? 'nickname' : 'email';
			$auth_info = (strlen($login_info['nickname']) > 0)? trim($login_info['nickname']) : trim($login_info['email']);

			// get user info where nickname or user_id matching login
			$strQryUserInfo = sprintf("
				SELECT
					user_id,
					nickname,
					date_registered,
					password,
					is_active,
					aboutme,
					name,
					fname,
					lname,
					deny_access,
					email,
					address1,
					address2,
					city,
					state,
					postal_code,
					country,
					phone1,
					phone2,
					company
				  FROM users
				 WHERE %s = '%s'
				 ",
				 $auth_field,
				 escapemssql($auth_info)
				 );

			if( ! $nQryUserInfo = @sql_query($strQryUserInfo, $primaryconn) ) {
				$this->bIsGoodSID    = 0;
				$this->objMessages[] = sprintf("There was a problem connecting to the database.  Please try again later. (%d)", __LINE__);
				return false;
			}

			$objQryUserInfo = @sql_fetch_array( $nQryUserInfo );

			$isSuccess = 1;

			$sqlLoginLogAll = sprintf("
				SELECT COUNT(id) AS cntid
				  FROM login_log
				 WHERE nickname = '%s'
				   AND date_logged > DATEADD(n,-15,GETDATE())
				   AND is_success = 0
				   AND is_reset = 0
				",
				escapemssql($auth_info)
				);
			if( ! $resLoginLogAll = @sql_query($sqlLoginLogAll, $primaryconn) ) {
				$this->bIsGoodSID    = 0;
				$this->objMessages[] = sprintf("There was a problem connecting to the database.  Please try again later. (%d)", __LINE__);
				return false;
			}
			$objLoginLogAll = @sql_fetch_object($resLoginLogAll);

			$sqlLoginLogAddr = sprintf("
				SELECT COUNT(id) AS cntid
				  FROM login_log
				 WHERE nickname = '%s'
				   AND date_logged > DATEADD(n,-15,GETDATE())
				   AND is_success = 0
				   AND is_reset = 0
				   AND remote_addr = '%s'
				",
				escapemssql($auth_info),
				$REMOTE_ADDR
				);
			if( ! $resLoginLogAddr = @sql_query($sqlLoginLogAddr, $primaryconn) ) {
				$this->bIsGoodSID    = 0;
				$this->objMessages[] = sprintf("There was a problem connecting to the database.  Please try again later. (%d)", __LINE__);
				return false;
			}
			$objLoginLogAddr = @sql_fetch_object($resLoginLogAddr);

			if($objLoginLogAddr->cntid > 5 || $objLoginLogAll->cntid > 50 ) {
			// check that bad login tries has not been exceeded
				$this->bIsGoodSID    = 0;
				$this->objMessages[] = "You have tried to log in to this account unsuccessfully too many times. For the protection of our members, your IP address has been recorded and may be subject to investigation.  Please try again after 15 minutes.";
				$this->objMessages[] = "If you forgot your password, please check our password retreival utility <a href=/index.php?page=help/lostpassword>here</a>";
				$isSuccess = 0;

			} elseif( @sql_num_rows($nQryUserInfo) < 1 ) {
			// check that record was found
				$this->bIsGoodSID    = 0;
				$this->objMessages[] = "Your account cannot be verified.";
				$this->objMessages[] = "Incorrect password or account does not exist.";
				$this->objMessages[] = "If you forgot your password, please check our password retreival utility <a href=/index.php?page=help/lostpassword>here</a>";
				$this->objMessages[] = sprintf("You have tried to log into this account unsuccessfully %d time%s. (error no. 1)", $objLoginLogAll->cntid+1, ($objLoginLogAll->cntid+1 == 1)? '': 's');
				$isSuccess = 0;

			} elseif( $objQryUserInfo["is_active"] == 0 ) {
			// check that retrieved account is active
				$this->bIsGoodSID    = 0;
				$this->objMessages[] = "Your account cannot be verified.";
				$this->objMessages[] = "Incorrect password or account does not exist.";
				$this->objMessages[] = "If you forgot your password, please check our password retreival utility <a href=/index.php?page=help/lostpassword>here</a>";
				$this->objMessages[] = sprintf("You have tried to log into this account unsuccessfully %d time%s. (error no. 2)", $objLoginLogAll->cntid+1, ($objLoginLogAll->cntid+1 == 1)? '': 's');
				$isSuccess = 0;

			} elseif( $pass != $objQryUserInfo["password"] ) {
			// check that given password matches account password
				$this->bIsGoodSID    = 0;
				$this->objMessages[] = "Your account cannot be verified.";
				$this->objMessages[] = "Incorrect password or account does not exist.";
				$this->objMessages[] = "If you forgot your password, please check our password retreival utility <a href=/index.php?page=help/lostpassword>here</a>";
				$this->objMessages[] = sprintf("You have tried to log into this account unsuccessfully %d time%s. (error no. 3)", $objLoginLogAll->cntid+1, ($objLoginLogAll->cntid+1 == 1)? '': 's');
				$isSuccess = 0;
			}

			// create new session id for user
			$strSID       = $objQryUserInfo["user_id"] . $REMOTE_ADDR . substr( $HTTP_USER_AGENT, 0, 20 ) . substr( $HTTP_USER_AGENT, 0, -20 );
			$strSID       = $objQryUserInfo['nickname'] . md5( $strSID );
			$this->strSID = $strSID;

			$sqlLoginLogInsert = sprintf("
				INSERT INTO login_log (user_id, nickname, password, date_logged, remote_addr, is_success, sid)
				VALUES (%d, '%s', '%s', GETDATE(), '%s', %d, '%s')
				",
				$objQryUserInfo["user_id"],
				escapemssql($auth_info),
				escapemssql($pass),
				$REMOTE_ADDR,
				$isSuccess,
				urlencode($strSID)
				);
			$resLoginLogInsert = @sql_query($sqlLoginLogInsert, $primaryconn);

			if( $isSuccess == 0 ) {
				return false;

			} else {

				// if account is denied access lock out browser
				if( $objQryUserInfo["deny_access"] == 1 )
					setcookie( "BIDBAYUID", rand(1000000,99999999), time() + (30000000 * 25), "/", COOKIE_DOMAIN_C );

				// update account's last login date
				$strQryUpdDate =
					"UPDATE users " .
					"   SET last_login_date = GETDATE() " .
					" WHERE user_id = '" . $objQryUserInfo["user_id"] . "'";

				if( ! $nQryUpdDate = @sql_query($strQryUpdDate, $primaryconn) ) {
					$this->bIsGoodSID    = 0;
					$this->objMessages[] = "There was a problem connecting to the database.  Please try again later.";
					return false;
				}

				// check if they are an admin
				$sqlAdmin = sprintf("SELECT COUNT(*) AS cntid FROM security_users WHERE user_id = %d", $objQryUserInfo["user_id"]);
				$resAdmin = @sql_query($sqlAdmin, $primaryconn);
				$objAdmin = @sql_fetch_object($resAdmin);

				// add welcome message
				$this->objMessages[] = sprintf( "Welcome user %s.", $objQryUserInfo["nickname"] );

				if( $adult == 1 ) {
					$this->__SetAdultCookie();
				}

				setcookie( "SID", $this->strSID, time()+(86400*30), "/", COOKIE_DOMAIN_C );

				// delete all session vars
				$this->DeleteSessionVars();

				// set all new session vars
				$this->SetSessionVar( "session_user_id",	$objQryUserInfo["user_id"] );
				$this->SetSessionVar( "session_nickname",   	$objQryUserInfo["nickname"] );
				$this->SetSessionVar( "session_name",   	$objQryUserInfo["name"] );
				$this->SetSessionVar( "session_fname",   	$objQryUserInfo["fname"] );
				$this->SetSessionVar( "session_lname",   	$objQryUserInfo["lname"] );
				$this->SetSessionVar( "session_aboutme",	$objQryUserInfo["aboutme"] );

				$this->SetSessionVar( "session_date_registered",$objQryUserInfo["date_registered"] );
				$this->SetSessionVar( "session_email",		$objQryUserInfo["email"] );
				$this->SetSessionVar( "session_address1",	$objQryUserInfo["address1"] );
				$this->SetSessionVar( "session_address2",	$objQryUserInfo["address2"] );
				$this->SetSessionVar( "session_city",		$objQryUserInfo["city"] );
				$this->SetSessionVar( "session_state",		$objQryUserInfo["state"] );
				$this->SetSessionVar( "session_postal_code",	$objQryUserInfo["postal_code"] );
				$this->SetSessionVar( "session_country",	$objQryUserInfo["country"] );
				$this->SetSessionVar( "session_phone1",		$objQryUserInfo["phone1"] );
				$this->SetSessionVar( "session_phone2",		$objQryUserInfo["phone2"] );
				$this->SetSessionVar( "session_company",	$objQryUserInfo["company"] );
				$this->SetSessionVar( "is_admin",		$objAdmin->cntid );

				if( ! $this->SaveSessionVars() ) {
					return false;
				}

				// set session status good
				$this->bIsGoodSID = 1;

				// validate format of user's nickname
				if( ! $this->ValidateNickname() ) {
					$this->GotoNicknameNotice();
					return false;
				}

				return true;
			}
		}
*/
		// logout user
		// ------------------------------------------------------------
		function LogoutUser() {
			global $_COOKIE;

			// delete all session vars
			$this->DeleteSessionVars();
			$this->SaveSessionVars();

			// delete sid cookie
			setcookie( "SID", "x", time() - (30000000 * 25), "/", COOKIE_DOMAIN_C );

			// delete admin cookie
			if( isset($_COOKIE["admin"]) )
				setcookie( "ADMIN", "x", time() - (30000000 * 25), "/", COOKIE_DOMAIN_C );

			$this->__DestroyAdultCookie();
			
			// clear all session messages
			$this->DeleteMessages();
			
			// clear session id
			$this->strSID = "";

			// set session status invalid
			$this->bIsGoodSID = 0;

			// send user back to login if html support
			if( $this->strSessionType == "HTML" )
				$this->GotoHTMLLogin();

			return true;
		}
		
		// goto html login
		// ------------------------------------------------------------
		function GotoHTMLLogin( $login_server="" ) {
			// stop if not html support
			if( $this->strSessionType != "HTML" && $this->strSessionType != "GUEST" )
				return false;
			
			global $_SERVER;

			$http_type = "http";
			if($_SERVER['HTTPS'] == "on") $http_type = "https";

			if( $login_server == "" )
				$login_server = $_SERVER['HTTP_HOST'];
			
			$errorcode   = implode( ",", $this->objMessages );
			$errorcode   = rawurlencode( $errorcode );
			$ref         = rawurlencode( $http_type."://".$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']."?" . str_Replace( "sid=", "dis=", $_SERVER['QUERY_STRING'] ) );
			$AdultFlag   = ($this->ReqAdultCookie) ? '&aa=1': '';
			$redirectURL = sprintf( "http://%s/index.php?page=registration&error=%s&ref=%s%s", $login_server, $errorcode, $ref, $AdultFlag );

			// redirect browser to login screen
			if(!headers_sent()) {
				header( sprintf("Location: %s",$redirectURL) );
			} else {
				printf("<p><a href=%s>Click here to login.</a>",$redirectURL);
			}
			return true;
		}

		// goto bad nickname notice
		// ------------------------------------------------------------
		function GotoNicknameNotice( $login_server="" ) {
			// stop if not html support
			if( $this->strSessionType != "HTML" )
				return false;
				
			global $_SERVER;

			if( $login_server == "" ) $login_server = $_SERVER['HTTP_HOST'];

			// redirect browser to nickname notice
			header( sprintf( "Location: http://%s/%s?page=login/bad_nickname", $login_server, $_SERVER['SCRIPT_NAME'] ) );
			exit;
		}

		// validate SID
		// ------------------------------------------------------------
		function ValidateSID() {

			if( $this->ReqAdultCookie && ! $this->IsSetAdultCookie ) {
				// session requires adult cookie & it's not there
				$this->bIsGoodSID    = 0;
				$this->objMessages[] = "Invalid session.  Please confirm your age before continuing.";
				return false;
			}

			if( $this->strSID == "nosid" || $this->strSID == "x") {
				// session id doesn't exist
				$this->bIsGoodSID    = 0;
				$this->objMessages[] = "No session started yet. Please login.";
				return false;
			}

			$sql = sprintf( "SELECT count(id) FROM session WHERE sid = '%s' AND variable = 'session_user_id' AND LENGTH(value) > 0 AND timestamp > date_sub(now(),interval 3600 minute)", $this->strSID );
			if( ! $res = @sql_query( $sql, SESSIONCONN_C ) ) {
				// encountered problem connecting to session db
				$this->bIsGoodSID    = 0;
				$this->objMessages[] = "There was a problem connecting to the session database.  Please try again later.";
				return false;
			}

			list( $countsession ) = @sql_fetch_row( $res );

			if(  intval( $countsession ) < 1 && strlen($this->strSID) < 32 ) {
				// session id doesn't exist
				$this->bIsGoodSID    = 0;
				$this->objMessages[] = "No session started yet. Please login.. .";
				return false;
			}
			if( intval( $countsession ) < 1 && $this->strSessionType != "GUEST") {
				// active session not found in db
				$this->bIsGoodSID    = 0;
				$this->objMessages[] = "Your session has expired. Please login again.";
				return false;
			}

			$this->bIsGoodSID = 1;
			return true;
		}

		// update SID timestamp
		// ------------------------------------------------------------
		function UpdateTimestamp() {

			$sql = sprintf( "UPDATE session SET timestamp = now() WHERE sid = '%s'", $this->strSID );
			if( ! $res = @sql_query( $sql, SESSIONCONN_C ) )
				return false;
			else
				return true;
		}

		// load session vars from db
		// ------------------------------------------------------------
		function LoadSessionVars() {
			global $_SERVER, $page;
			
			// get session vars from db
			$sql = sprintf( "SELECT variable, value FROM session WHERE sid = '%s'", $this->strSID );
			if( ! $res = sql_query( $sql, SESSIONCONN_C ) )
				return false;

			while( list( $variable, $value ) = @sql_fetch_row( $res ) ) {
				// set the value of 'variable' index in session vars array to 'value'
				$this->objSessionVars[strtolower($variable)] = $value;
			}
			
			/*
			if( $this->objSessionVars["session_company"] == "na" &&
				$this->objSessionVars["session_name"]    == "na" &&
				strtolower($page) != "registration/step2" ) {

				$http_type = "http";
				if($_SERVER['HTTPS'] == "on") $http_type = "https";

				$ref = rawurlencode($http_type."://".$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']."?". str_Replace("sid=","dis=",$_SERVER['QUERY_STRING']));
				$redirectURL = $http_type."://".$_SERVER['HTTP_HOST']."/index.php?page=registration/step2&ref=$ref&typephpUS";

				// redirect browser to login screen
				if(!headers_sent()) {
					header( sprintf("Location: %s",$redirectURL) );
					exit;
				} else {
					printf("<p><a href=%s>Click here to continue.</a>",$redirectURL);
				}
			}
			*/

			return true;
		}

		// set session var
		// ------------------------------------------------------------
		function SetSessionVar( $name, $value ) {
			$this->objSessionVars[strtolower($name)] = $value;
			$this->_isSessionModified = true;
			return true;
		}

		// save session vars to db
		// ------------------------------------------------------------
		function SaveSessionVars() {
			
			// check session id available
			if( ! strlen($this->strSID) ) {
				$this->objMessages[] = "No session id available to save session information to.";
				return false;
			}
			
			// don't do anything if not modified
			if($this->_isSessionModified == false) {
				return true;
			}
			$this->_isSessionModified = false;

			// delete all existing vars stored on session
			$strQryDelVars = sprintf( "DELETE FROM session WHERE sid = '%s'", addslashes( $this->strSID ) );
			if( ! $nQryDelVars = sql_query( $strQryDelVars, SESSIONCONN_C ) ) {
				$this->objMessages[] = "There was a problem connecting to the session database.  Please try again later.";
				return false;
			}

			// save current vars on session
			reset( $this->objSessionVars );
			while( list($key, $value) = each($this->objSessionVars) ) {
				$strQryInsVar = sprintf( "INSERT INTO session ( sid, variable, value, timestamp ) VALUES ( '%s', '%s', '%s', NOW() )", addslashes($this->strSID), addslashes($key), addslashes($value) );
				if( ! $nQryInsVar = @sql_query($strQryInsVar, SESSIONCONN_C) ) {
					return false;
				}
			}

			return true;
		}

		// delete session var(s)
		// ------------------------------------------------------------
		function DeleteSessionVars() {
			// reset array pointer to make sure we walk entire length of array
			reset( $this->objSessionVars );

			if( func_num_args() > 0 ) {
				// delete specified vars
				$objKeys = func_get_args();
				if( is_array($objKeys[0]) )
				{
					$objKeys = $objKeys[0];
				}
				while( list($key, $value) = each($objKeys) )
					unset( $this->objSessionVars[strtolower($value)] );
			} else {
				// delete all vars
				while( list($key) = each($this->objSessionVars) )
					unset( $this->objSessionVars[strtolower($key)] );
			}

			$this->_isSessionModified = true;
			
			reset( $this->objSessionVars );
			return true;
		}

		// validate nickname format
		// ------------------------------------------------------------
		function ValidateNickname() {
			if( ereg( "[^a-zA-Z0-9._\-]", $this->objSessionVars["session_nickname"] ) ) {
				$this->bIsGoodSID    = 0;
				$this->bIsGoodNick   = 0;
				$this->objMessages[] = "Your nickname contains characters that might cause problems with our system and needs to be changed.";
				$this->objMessages[] = "Valid nicknames may include letters, numbers, dashes, underscores, and '.' dots.";
				return false;
			} else {
				return true;
			}
		}

		// clear session messages
		// ------------------------------------------------------------
		function DeleteMessages() {
			while( list($key) = each($this->objMessages) )
				unset( $this->objMessages[$key] );

			return true;
		}

		// set adult cookie
		// ------------------------------------------------------------
		function __SetAdultCookie() {
			setcookie( "ADULT_ALLOWED", "yes", 0, "/", COOKIE_DOMAIN_C );		// expires when browser closed
		}

		// destroy adult cookie
		// ------------------------------------------------------------
		function __DestroyAdultCookie() {
			setcookie( "ADULT_ALLOWED", "x", 1, "/", COOKIE_DOMAIN_C );		// expires in 1970
		}

	}

?>