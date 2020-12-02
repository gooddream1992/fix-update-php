<?

	// ------------------------------------------------------------
	// class for processing notifier data and users
	//
	//	Notifier(void)
	//	* constructor
	//
	//	GetMessages($user_id)
	//	* returns array containing messages
	//
	//	GetTypes(void)
	//	* returns array containing message types
	//
	//	GetOptions(void)
	//	* returns array containing internal options
	//
	//	MarkSent($id)
	//	* returns nothing.  marks a message as sent
	//
	//	CreateMessage($messageType, $user_id, $message)
	//	* creates new message and returns id of newly created record, or false if failed
	//
	//	DeleteMessage($id, $user_id)
	//	* deletes existing listing and returns boolean
	//	* using $user_id for added security
	//
	//	SendMessages()
	//	* returns nothing
	//	* aggregate function running other functions
	//
	//	SendMessage($mType, $date='', $msg='', $link_url='', $delimiter='')
	//	* returns nothing
	//	* sends a message to the browser
	//
	//	SendError($msg)
	//	* returns nothing
	//	* uses SendMessage to deliver message, then exits
	//
	//	SendNoop(void)
	//	* returns nothing
	//	* uses SendMessage to deliver a NOOP, then exits
	//
	//	VerifyUser(void)
	//	* returns user_id
	//	* uses HTTP_GET_VARS
	//
	//	LogUser($user_id)
	//	* returns nothing
	//	* updates or creates a record in the Notifier_Users table

	// required classes
	include_once( $functionsdir . 'DataObject.php' );

	/**
	* class Notifier(DataObject)
	*
	* { class }
	*
	*/
	Class Notifier extends DataObject {

		/**
		* Notifier::Notifier()
		*
		* { constructor }
		*
		*/
		function Notifier() {
		global $HTTP_GET_VARS, $HTTP_POST_VARS, $HTTP_COOKIE_VARS, $HTTP_SERVER_VARS;

			// constructor
			// ------------------------------------------------------------
			$this->__ClassName = "Notifier";

			$this->__UserCache = array();

			// set options relations
			$this->__MessageTypes = array();
			$this->__MessageTypes['message'] = 'MSG';
			$this->__MessageTypes['update'] = 'UPDATE';
			$this->__MessageTypes['noop'] = 'NOOP';

			$this->__Options = array();
			$this->__Options['popup_duration'] = 'popup_duration';
			$this->__Options['query_url'] = 'query_url';
			$this->__Options['display_name'] = 'display_name';
			$this->__Options['url_retries'] = 'url_retries';
			$this->__Options['query_delay'] = 'query_delay';

			$this->__NotifierClient = array();

			// if post exists, set as get
			if( strlen($HTTP_POST_VARS['nam'])) $HTTP_GET_VARS['nam'] = $HTTP_POST_VARS['nam'];
			if( strlen($HTTP_POST_VARS['ord'])) $HTTP_GET_VARS['ord'] = $HTTP_POST_VARS['ord'];
			// if cookie exists, set as get
			if( strlen($HTTP_COOKIE_VARS['nam'])) $HTTP_GET_VARS['nam'] = $HTTP_COOKIE_VARS['nam'];
			if( strlen($HTTP_COOKIE_VARS['ord'])) $HTTP_GET_VARS['ord'] = $HTTP_COOKIE_VARS['ord'];

			$this->__nickname = trim(stripslashes($HTTP_GET_VARS['nam']));
			$this->__password = trim(stripslashes($HTTP_GET_VARS['ord']));

			// set defaults
			$this->__mType = $this->MessageTypes['message'];
			$this->__date = sprintf("%s GMT %s", date("Y-m-d H:i:s"), date("O"));
			$this->__msg = sprintf("Notifier is not yet ready. Time now is: %s. How much text will this accept?", date("Y-m-d H:i:s"));
			$this->__link_url = 'http://www.luvoo.com/';
			$this->__TxtDelimiter = "\t";
			$this->__MsgDelimiter = "\n";

			// modify defaults for amit's version
			if( stripslashes(strtolower($HTTP_SERVER_VARS['HTTP_USER_AGENT'])) == "amit's bidway notifier") {
				$this->__date = gmdate ("M d Y H:i:s");
				$this->__TxtDelimiter = '|';
				$this->__MsgDelimiter = '~';
				$this->__NotifierClient = 'amit';
			}

			$this->__ConfigNotifierMessages = array(
				'id' => array(
					'type'   => 'integer',
					'insert' => false,
					'insreq' => false,
					'update' => false,
					'minval' => 1,
					'maxval' => 2147000000
				),
				'user_id' => array(
					'type'   => 'integer',
					'insert' => true,
					'insreq' => true,
					'update' => true,
					'minval' => 1,
					'maxval' => 2147000000,
					'default'=> 0
				),
				'date_created' => array(
					'type'   => 'integer',
					'insert' => true,
					'insreq' => true,
					'update' => true,
					'minval' => 0,
					'maxval' => 2147000000
				),
				'date_sent' => array(
					'type'   => 'integer',
					'insert' => true,
					'insreq' => false,
					'update' => true,
					'minval' => 0,
					'maxval' => 2147000000
				),
				'message_type' => array(
					'type'   => 'string',
					'insert' => true,
					'insreq' => true,
					'update' => true,
					'minval' => 3,
					'maxval' => 32
				),
				'message' => array(
					'type'   => 'string',
					'insert' => true,
					'insreq' => true,
					'update' => true,
					'minval' => 1,
					'maxval' => 256
				),
				'link_url' => array(
					'type'   => 'string',
					'insert' => true,
					'insreq' => true,
					'update' => true,
					'minval' => 1,
					'maxval' => 256
				),
				'is_sent' => array(
					'type'   => 'integer',
					'insert' => true,
					'insreq' => false,
					'update' => true,
					'minval' => 0,
					'maxval' => 1
				)
			);

			$this->__ConfigNotifierUsers = array(
				'user_id' => array(
					'type'   => 'integer',
					'insert' => true,
					'insreq' => true,
					'update' => false,
					'minval' => 1,
					'maxval' => 2147000000
				),
				'date_created' => array(
					'type'   => 'integer',
					'insert' => true,
					'insreq' => true,
					'update' => false,
					'minval' => 0,
					'maxval' => 2147000000
				),
				'last_login_date' => array(
					'type'   => 'integer',
					'insert' => true,
					'insreq' => false,
					'update' => true,
					'minval' => 0,
					'maxval' => 2147000000
				),
				'login_attempts' => array(
					'type'   => 'integer',
					'insert' => true,
					'insreq' => false,
					'update' => true,
					'minval' => 0,
					'maxval' =>2147000000
				)
			);

		}

		function GetMessages($user_id) {
		//	* returns array containing messages
			$messages = array();

			// get queued messages
			$sqlGetMessages = sprintf("SELECT id, date_created, message_type, message, link_url FROM notifier_messages WHERE user_id = %d AND is_sent = 0", $user_id );
			if( !$resGetMessages = @sql_query( $sqlGetMessages, PRIMARYCONN_C)) {
				$this->SendError('We are experiencing problems with the messages database.  Please try again later. ('.__LINE__.')');
			}

			while( $objGetMessage = @sql_fetch_object($resGetMessages)) {
				$messages[$objGetMessage->id] = $objGetMessage;
			}

			return (array)$messages;
		}

		function GetTypes() {
		//	* returns array containing message types
			return (array)$this->__MessageTypes;
		}

		function GetOptions() {
		//	* returns array containing internal options
			return (array)$this->__Options;
		}

		function MarkSent($id) {
		//	* returns nothing.  marks a message as sent

			$sqlUpdateMessage = sprintf("UPDATE notifier_messages SET date_sent = %d, is_sent = 1 WHERE id = %d", time(), $id );
			if( !$resUpdateMessages = @sql_query( $sqlUpdateMessage, PRIMARYCONN_C)) {
				$this->SendError('We are experiencing problems with the messages database.  Please try again later. ('.__LINE__.')');
			}
		}

		function CreateMessage($user_id, $messageType, $message, $link_url) {
		//	* creates new message and returns id of newly created record, or false if failed

			$sqlVerifyUser = sprintf("
				SELECT COUNT(user_id) AS cntid
				FROM users
				WHERE user_id = %d",
				$user_id);
			if( !$resVerivyUser = @sql_query( $sqlVerifyUser, PRIMARYCONN_C)) {
				$this->__LogMsg('We are experiencing problems with the user database.  Please try again later. ('.__LINE__.')');
				return false;
			}
			$objVerifyUser = @sql_fetch_object($resVerivyUser);
			if( (int)$objVerifyUser->cntid == 0) {
				$this->__LogMsg('Cannot create message. The user could not be found. ('.__LINE__.')');
				return false;
			}

			// format messageType
			$messageType = strtolower($messageType);

			if( strlen($messageType) == 0) {
				$this->__LogMsg('Cannot create message. No message type specified. ('.__LINE__.')');
				return false;
			}

			if( strlen($message) == 0) {
				$this->__LogMsg('Cannot create message. No message specified. ('.__LINE__.')');
				return false;
			}

			if( strlen($link_url) == 0) {
				$this->__LogMsg('Cannot create message. No link_url specified. ('.__LINE__.')');
				return false;
			}


			if( strlen($messageType) > 7) {
				$this->__LogMsg('Cannot create message. Message type length exceeds allowable limits. ('.__LINE__.')');
				return false;
			}

			if( strlen($message) > 256) {
				$this->__LogMsg('Cannot create message. Message specified exceeds allowable limits. ('.__LINE__.')');
				return false;
			}

			if( strlen($link_url) > 256) {
				$this->__LogMsg('Cannot create message. Link_url specified exceeds allowable limits. ('.__LINE__.')');
				return false;
			}

			// is this a valid message type
			if( $this->__MessageTypes[$messageType] == null) {
				$this->__LogMsg('Cannot create message. Invalid message type passed. ('.__LINE__.')');
				return false;
			} else {
				$messageType = $this->__MessageTypes[$messageType];
			}

			if( $messageType == 'update' ) {

				// if update, check for valid update type
				if( $this->__Options[$message] == null) {
					$this->__LogMsg('Cannot create message. Invalid option passed. ('.__LINE__.')');
					return false;
				} else {
					$message = $this->__Options[$message];
				}
			}

			$sqlCreate = sprintf("
				INSERT INTO notifier_messages 	(user_id, 	date_created, 	date_sent, 	message_type, 			message, 		link_url, 	is_sent)
							VALUES 	(%d, 		%d, 		0, 		'%s', 				'%s', 			'%s', 		0)",
								$user_id, 	time(),				escapemssql($messageType), 	escapemssql($message), 	escapemssql($link_url) );
			if( !$resCreate = @sql_query( $sqlCreate, PRIMARYCONN_C)) {
				$this->__LogMsg('We are experiencing problems with the messages database.  Please try again later. ('.__LINE__.')');
				return false;
			}

			$sqlIdentity = 'SELECT @@IDENTITY AS last_insert_id';
			if( !$resIdentity = @sql_query( $sqlIdentity, PRIMARYCONN_C)) {
				$this->__LogMsg('We are experiencing problems with the messages database.  Please try again later. ('.__LINE__.')');
				return false;
			}
			$objIdentity = @sql_fetch_object($resIdentity);

			return (int)$objIdentity->last_insert_id;
		}

		function DeleteMessage($id, $user_id) {
		//	* deletes existing listing and returns boolean
		//	* using $user_id for added security

			$sqlDelete = sprintf("DELETE FROM notifier_messages WHERE id = %d AND user_id = %d", $id, $user_id );
			if( !$resDelete = @sql_query( $sqlDelete, PRIMARYCONN_C)) {
				$this->__LogMsg('We are experiencing problems with the messages database.  Please try again later. ('.__LINE__.')');
				return false;
			}

			return true;
		}

		function SendMessages() {
		//	* returns nothing
		//	* aggregate function running other functions

			$user_id = $this->VerifyUser();

			$this->LogUser($user_id);

			$messages = $this->GetMessages($user_id);

			if( count($messages) == 0 ) {
				$this->SendNoop();

			}

			while(list($id, $objGetMessage) = @each($messages)) {

				// send messages
				$this->SendMessage($objGetMessage->message_type, $this->__date, $objGetMessage->message, $objGetMessage->link_url, $this->__TxtDelimiter );

				// mark message sent
				$this->MarkSent($id);
			}
		}

		function SendMessage($mType, $date='', $msg='', $link_url='', $delimiter='') {
		//	* returns nothing
		//	* actually sends a message

			if($this->__NotifierClient == 'amit') {
				$msg = str_replace("\\", "\\\\", $msg);
				$msg = str_replace("|", "\\|", $msg);
				$msg = str_replace('~', '~~', $msg);

				$link_url = str_replace("\\", "\\\\", $link_url);
				$link_url = str_replace("|", "\\|", $link_url);
				$link_url = str_replace('~', '~~', $link_url);
			}

			// output message
			printf("%s%s%s%s%s%s%s%s",
				$mType,
				$delimiter,
				$date,
				$delimiter,
				$msg,
				$delimiter,
				$link_url,
				$this->__MsgDelimiter
				);
		}

		function SendError($msg) {
		//	* returns nothing
		//	* uses SendMessage to deliver message, then exits

			$this->SendMessage($this->__MessageTypes['message'], $this->__date, 'Error: '.$msg, $this->__link_url, $this->__TxtDelimiter);
			exit;
		}

		function SendNoop() {
		//	* returns nothing
		//	* uses SendMessage to deliver a NOOP, then exits

		//	$this->SendMessage($this->__MessageTypes['message'], $this->__date, 'Account verified. Messages would appear here if there were any in the queue.', $this->__link_url, $this->__TxtDelimiter );

			$this->SendMessage($this->__MessageTypes['noop']);
			exit;
		}

		function VerifyUser() {
		//	* returns user_id
		//	* uses HTTP_GET_VARS or HTTP_POST_VARS

			// check for required vars before anything else
			if(strlen($this->__nickname) == 0) {
				$this->SendError('You must supply a valid Username.');
			}
			if(strlen($this->__password) != 48) {
				$this->SendError('You must supply a valid Password.');
			}

			// verify account
			$sqlValidate = sprintf("SELECT user_id, password FROM users WHERE nickname = '%s'", escapemssql($this->__nickname) );
			if( !$resValidate = @sql_query( $sqlValidate, PRIMARYCONN_C)) {
				$this->SendError('We are experiencing problems with the login database.  Please try again later. ('.__LINE__.')');
			}
			if( @sql_num_rows($resValidate) != 1) {
				$this->SendError('Your account could not be verified ('.__LINE__.')');
			}
			$objVerify = @sql_fetch_object($resValidate);

			// don't allow zero-length passwords to work
			if( strlen($objVerify->password) == 0) {
				$this->SendError('We do not allow zero-length passwords.');
			}

			$passKey = substr( $this->__password, -16);
			$passHash = substr( $this->__password, 0, 32);
			$passCheck = md5( $objVerify->password . $passKey );

			if( $passHash != $passCheck ) {
				$this->SendError('Your account could not be verified ('.__LINE__.')');
			}

			return (int)$objVerify->user_id;
		}

		function LogUser($user_id) {
		//	* returns nothing
		//	* updates or creates a record in the Notifier_Users table

			// log that the user has been here
			$sqlCheckLog = sprintf("SELECT date_created, last_login_date FROM notifier_users WHERE user_id = %d", $user_id);
			if( !$resCheckLog = @sql_query( $sqlCheckLog, PRIMARYCONN_C)) {
				$this->SendError('We are experiencing problems with the user database.  Please try again later. ('.__LINE__.')');
			}
			if( @sql_num_rows($resCheckLog) == 0 ) {
				// create new record
				$sqlInsertUser = sprintf("INSERT INTO notifier_users (user_id, date_created, last_login_date, login_attempts) VALUES (%d, %d, %d, 1)", $user_id, time(), time() );
				if( !$resInsertUser = @sql_query( $sqlInsertUser, PRIMARYCONN_C)) {
					$this->SendError('We are experiencing problems with the user database.  Please try again later.');
				}
			} else {
				// update existing record
				$sqlUpdateUser = sprintf("UPDATE notifier_users SET last_login_date = %d, login_attempts = login_attempts + 1 WHERE user_id = %d", time(), $user_id);
				if( !$resUpdateUser = @sql_query( $sqlUpdateUser, PRIMARYCONN_C)) {
					$this->SendError('We are experiencing problems with the user database.  Please try again later.');
				}
			}
		}

		var $__ClassName; // something or other

		var $__MessageTypes; // array holding the types of messages
		var $__Options; // array holding the types of options
		var $__UserCache; // array holding user nickname cache

		var $__nickname;
		var $__password;

		var $__mType; // default message type
		var $__date; // formatted date
		var $__msg; // default message
		var $__link_url; // default link url
		var $__TxtDelimiter; // field delimiter
		var $__MsgDelimiter; // message delimiter

	}

?>