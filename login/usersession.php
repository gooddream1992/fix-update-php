<?php

// ============================================================
// UserSession
//
// description:
//	 login/logout user accounts to establish/destroy sessions..
//	 validate session ids already supplied via 'SID' cookie
//
// usage:
//	 - instantiate
//
// instantiation:
//	 $objMyObject = new UserSession;
//	 $objMyObject = new UserSession('HTML');
//	   - start session..  defaults to html support
//	 $objMyObject = new UserSession('WDDX');
//	   - start session..  wddx support..  suppresses browser redirects
//
// public methods:
//	 GetSID()
//	   - returns (string)
//	   - current session id..
//
//	 (mixed) GetValue( $SessionVar )
//	     * method used to retrieve a single session var
//	     * args:
//	         (string) $SessionVar = session variable you're wanting the value for
//
//	 CountSessionMessages()
//	   - returns (integer)
//	   - number of messages stored in this instance of session
//	 CountSessionVars()
//	   - returns (integer)
//	   - number of session variables stored in this instance of session
//	 GetSessionMessages()
//	   - returns (array)
//	   - any messages from this instance of session..  ie. reasons for failure/success
//	 LoginUser( string login, string password [, bool remember_user] )
//	   - returns (bool)
//	   - login success/failure..  follow with other pub methods if additional info required
//	   - if remember flag true sets sid cookie in user's browser..  default is false
//	 LogoutUser()
//	   - returns (bool)
//	   - logout success/failure..  if html support..  redirects to login screen after successful logout
//	   - to force user back to login in html support..  instantiate session (good or bad)..  then call LogoutUser()
// 
// Date of Creation:
//	 2001-02-14
// ============================================================

require_once 'komideals/User.php';
require_once 'komideals/Session.php';
//die('testing '.__FILE__.': '.__LINE__.': '.time());

class UserSession {

	private $_conn = null;				// database connection id
	private $_strSID = '';				// (string) current session id
	private $_objSessionVars = array();	// (array) session objects
	private $_objMessages = array();	// (array) response messages
	private $_objUser = null;			// (object) User
	private $_strDefSessionType ='HTML';// (string) default session type
	private $_strSessionType = '';		// (string) session type in use..  'HTML', 'WDDX', 'GUEST'
	private $_strSidVarName = 'SID';	// (string) name of session id variable

	// constructor
	// ------------------------------------------------------------
	function __construct( $strSessType='', $conn=null ) {
		
		if( $strSessType == 'WDDX' || $strSessType == 'GUEST') {
			$this->_strSessionType = $strSessType;
		} else {
			$this->_strSessionType = $this->_strDefSessionType;
		}
			
		if( !isset($_COOKIE[$this->_strSidVarName]) ) {
			$_COOKIE[$this->_strSidVarName] = md5($_SERVER['REMOTE_HOST'].time().mt_rand(1,99999999));
		}
		
		$this->_strSID = $_COOKIE[$this->_strSidVarName];
		
		// set cookie, always do so to re-set expiration time
		setcookie( $this->_strSidVarName, $this->GetSID(), time()+(4*60*60), '/', COOKIE_DOMAIN_C );
	
		// allow for specific connection
		if($conn) {
			$this->_conn = $conn;
		} else {
			// or use default connection
			$this->_conn = Propel::getConnection();
		}

		// log this info with timestamp
		CheckPointTime('UserSession constructor, sid: '. $this->_strSID);
		
		$this->_loadSessionVars();
		$this->_updateTimestamp();
		
	}
	
	/**
	 * Checks if there is a user associated with this session
	 *
	 * @return boolean
	 */
	public function IsLoggedIn() {
		if($this->getUser() === null) {
			return false;
		}
		return true;
	}
	
	/**
	 * marries user to session, i.e. logs them in
	 *
	 * @param User $User
	 * @return boolean
	 */
	public function setUser(User $User) {
		if(!$User->getId()) {
			return false;
		}
		$this->_objUser = $User;
		$this->SetSessionVar('session_user_id', $User->getId());
		return true;
	}
	
	/**
	 * Get the associated User object
	 *
	 * @param Connection Optional Connection object.
	 * @return User The associated User object.
	 * @throws PropelException
	 */
	public function getUser($con = null) {
		
		if($this->_objUser !== null) {
			return $this->_objUser;
		}
		if((int)$this->GetValue('session_user_id') > 0) {
			$obj = UserPeer::retrieveByPK($this->GetValue('session_user_id'), $con);
			$this->_objUser = $obj;
			
			return $this->_objUser;
		}
		
		return null;
	}

	public function GetValue( $SessionVar ) {

		// return the value of the given session variable name
		// ------------------------------------------------------------
		$obj = $this->_objSessionVars[strtolower($SessionVar)];
		
		if($obj === null) {
			return null;
			
		}
		return $obj->getValue();
	}

	// get session messages
	// ------------------------------------------------------------
	public function GetSessionMessages() {
		return $this->_objMessages;
	}

	// get SID
	// ------------------------------------------------------------
	public function GetSID() {
		return $this->_strSID;
	}

	// count session vars
	// ------------------------------------------------------------
	public function CountSessionVars() {
		return count( $this->_objSessionVars );
	}

	// count session messages
	// ------------------------------------------------------------
	public function CountSessionMessages()
	{
		return count( $this->_objMessages );
	}

	// clear session messages
	// ------------------------------------------------------------
	public function DeleteMessages() {
		while( list($key) = each($this->_objMessages) )
			unset( $this->_objMessages[$key] );

		return true;
	}

	// login user
	// ------------------------------------------------------------
	public function LoginUser( $login_info='' ) {

		// clear all session messages
		$this->DeleteMessages();

		// make sure login isn't 0 length
		if( strlen($login_info['email']) < 1) {
			$this->_objMessages[] = 'Please supply a valid email address for your account.';
			return false;
		}

		$crit = new Criteria();
		$crit->add(UserPeer::EMAIL , $login_info['email'], Criteria::EQUAL );
		
		try {
			$User = UserPeer::doSelectOne($crit);
			
		} catch (Exception $e) {
			$err = $e->getMessage();
			$this->_objMessages[] = sprintf("a) There was a problem connecting to the database.  Please try again later. (%s) (%d)", $err , __LINE__);
			return false;
		}

		$isSuccess = 1;
		
		if( $User == null ) {
		// check that record was found
			$this->_objMessages[] = 'Your account cannot be verified. (code 1)';
			$this->_objMessages[] = 'Incorrect password or account does not exist.';
			$this->_objMessages[] = 'If you forgot your password, please check our password reset utility <a href=/help-lost_password.htm>here</a>';
		//	$this->_objMessages[] = sprintf("You have tried to log into this account unsuccessfully %d time%s. (error no. 1)", $objLoginLogAll->cntid+1, ($objLoginLogAll->cntid+1 == 1)? '': 's');
			$isSuccess = 0;

		} elseif( (int)$User->getIsActive() != 1 ) {
		// check that retrieved account is active
			$this->_objMessages[] = 'Your account cannot be verified. (code 2)';
			$this->_objMessages[] = 'Incorrect password or account does not exist.';
			$this->_objMessages[] = 'If you forgot your password, please check our password reset utility <a href=/help-lost_password.htm>here</a>';
		//	$this->_objMessages[] = sprintf("You have tried to log into this account unsuccessfully %d time%s. (error no. 2)", $objLoginLogAll->cntid+1, ($objLoginLogAll->cntid+1 == 1)? '': 's');
			$isSuccess = 0;

		} elseif( (int)$User->getIsEmailVerified() != 1 ) {
		// check that retrieved account is active
			$this->_objMessages[] = 'Your email address has not been verified. (code 3)';
			$this->_objMessages[] = 'If you have not received an email with account verification instructions, please <a href=/help-verify_email.htm>click here</a> to resend the instructions.';
		//	$this->_objMessages[] = sprintf("You have tried to log into this account unsuccessfully %d time%s. (error no. 2)", $objLoginLogAll->cntid+1, ($objLoginLogAll->cntid+1 == 1)? '': 's');
			$isSuccess = 0;

		} elseif( !$User->isValidPassword( $login_info['password'] )) {
		// check that given password matches account password
			$this->_objMessages[] = 'Your account cannot be verified. (code 4)';
			$this->_objMessages[] = 'Incorrect password or account does not exist.';
			$this->_objMessages[] = 'If you forgot your password, please check our password reset utility <a href=/help-lost_password.htm>here</a>';
		//	$this->_objMessages[] = sprintf("You have tried to log into this account unsuccessfully %d time%s. (error no. 3)", $objLoginLogAll->cntid+1, ($objLoginLogAll->cntid+1 == 1)? '': 's');
			$isSuccess = 0;
		}

		if( $isSuccess == 0 ) {
			return false;

		} else {

			
			try {
				// update account's last login date
				$User->setLastLoginDate(time());
				$User->save();
				
			} catch (Exception $e) {
				$this->_objMessages[] = sprintf("a) There was a problem connecting to the database.  Please try again later. (%s) (%d)", $e->getMessage(), __LINE__);
				return false;
			}

			// add welcome message
			$this->_objMessages[] = sprintf( "Welcome %s.", $User->getEmail() );

			// delete all session vars
			$this->DeleteSessionVars();

			// set all new session vars
			$this->setUser($User);
			$this->SetSessionVar( 'session_fname',	$User->getFname());
			$this->SetSessionVar( 'session_lname',	$User->getLname());
			$this->SetSessionVar( 'session_email',	$User->getEmail());

			return true;
		}
	}

	// logout user
	// ------------------------------------------------------------
	public function LogoutUser() {

		// delete all session vars
		$this->DeleteSessionVars();

		// delete sid cookie
		setcookie( $this->_strSidVarName, 'x', time() - (30000000 * 25), '/', COOKIE_DOMAIN_C );

		// delete admin cookie
		if( isset($_COOKIE['ADMIN']) )
			setcookie( 'ADMIN', 'x', time() - (30000000 * 25), '/', COOKIE_DOMAIN_C );
		
		// clear all session messages
		$this->DeleteMessages();
		
		// clear session id
		$this->_strSID = '';
		
		// send user back to login if html support
//		if( $this->_strSessionType == 'HTML' ) {
//			$this->GotoHTMLLogin();
//		}

		return true;
	}
	
	// goto html login
	// ------------------------------------------------------------
	public function GotoHTMLLogin( $login_server='' ) {
		// stop if not html support
		if( $this->_strSessionType != 'HTML' && $this->_strSessionType != 'GUEST' )
			return false;
		
		$http_type = 'http';
		if($_SERVER['HTTPS'] == 'on') $http_type = 'https';

		if( $login_server == '' )
			$login_server = $_SERVER['HTTP_HOST'];
		
		$errorcode   = implode( ',', $this->_objMessages );
		$errorcode   = rawurlencode( $errorcode );
		
		if(!strlen($errorcode) && !strlen($this->GetValue('login_message'))) {
			$errorcode = 'Please login before continuing.';
		}
		
		if(strlen($errorcode)) {
			$this->SetSessionVar('login_message', $errorcode);
		}
		
		$qs = $_SERVER['QUERY_STRING'];
		// remove stuff added by apache mod_rewrite rules
		if($_GET['rewrite'] == '1') {
			$qs = str_replace('rewrite=1&', '', $qs);
			$qs = str_replace('page=' .$_GET['page'].'&', '', $qs);
		}
		$qs = str_Replace( 'sid=', 'dis=', $qs );
		if(strlen($qs)) $qs = '?'. $qs;
		
		$ref = sprintf("%s://%s/%s.htm%s", $http_type, $_SERVER['HTTP_HOST'], str_replace('/', '-', PAGE_C), $qs);
		$ref         = rawurlencode( $ref );
		$redirectURL = sprintf( "http://%s/login.htm?ref=%s", $login_server, $ref );

		// redirect browser to login screen
		if(!headers_sent()) {
			header( sprintf("Location: %s",$redirectURL) );
		} else {
			printf("<p><a href=%s>Click here to login.</a>",$redirectURL);
		}
		return true;
	}

	// set session var
	// ------------------------------------------------------------
	public function SetSessionVar( $name, $value ) {
		$obj = $this->_objSessionVars[strtolower($name)];
		if($obj === null) {
			$obj = new Session();
			$obj->setSid($this->_strSID);
			$obj->setVariable(strtolower($name));
		}
		if($obj->getValue() != $value) $obj->setValue($value);
		if($obj->isModified()) $obj->save($this->_conn);
		$this->_objSessionVars[strtolower($name)] = $obj;
		
		return true;
	}

	// delete session var(s)
	// ------------------------------------------------------------
	public function DeleteSessionVars() {
		// reset array pointer to make sure we walk entire length of array
		reset( $this->_objSessionVars );

		if( func_num_args() > 0 ) {
			// delete specified vars
			$objKeys = func_get_args();
			if( is_array($objKeys[0]) )
			{
				$objKeys = $objKeys[0];
			}
			while( list($key, $value) = each($objKeys) ) {
				$this->_objSessionVars[strtolower($value)]->delete($this->_conn);
				unset($this->_objSessionVars[strtolower($value)]);
			}
		} else {
			// delete all vars
			while( list($key, $obj) = each($this->_objSessionVars) ) {
				$obj->delete($this->_conn);
				unset($this->_objSessionVars[$key]);
			}
		}
		
		reset( $this->_objSessionVars );
		return true;
	}

	// ------------------------------------------------------------
	// private methods
	// ------------------------------------------------------------

	// update SID timestamp
	// ------------------------------------------------------------
	private function _updateTimestamp() {
		
		while( list($key, $obj) = each($this->_objSessionVars) ) {
			/* @var $obj Session */
			$obj->setTimestamp(time());
			$obj->save($this->_conn);
		}
		
		return true;

	}

	// load session vars from db
	// ------------------------------------------------------------
	private function _loadSessionVars() {
		global $page;
			
		$crit = new Criteria();
		$crit->add(SessionPeer::SID , $this->_strSID, Criteria::EQUAL );
		
		$sess = SessionPeer::doSelect($crit, $this->_conn);
		
		foreach ($sess as $obj) {
			/* @var $obj Session */
			$this->_objSessionVars[$obj->getVariable()] = $obj;
		}
		
		/*
		if( $this->_objSessionVars['session_company'] == 'na' &&
			$this->_objSessionVars['session_name']    == 'na' &&
			strtolower($page) != 'registration/step2' ) {

			$http_type = 'http';
			if($_SERVER['HTTPS'] == 'on') $http_type = 'https';

			$ref = rawurlencode($http_type.'://'.$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'].'?'. str_Replace('sid=','dis=',$_SERVER['QUERY_STRING']));
			$redirectURL = $http_type.'://'.$_SERVER['HTTP_HOST'].'/index.php?page=registration/step2&ref=$ref&typephpUS';

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
	
}

