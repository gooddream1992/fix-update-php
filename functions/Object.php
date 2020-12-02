<?

	

	// ------------------------------------------------------------

	// basic object class

	// provides basic services such as error message handling

	// 

	// (array) GetMsgs()

	//         - returns array of messages saved into message log during

	//         - last opperation.  empty array if no messages.

	// 

	// (bool)  IsDebugOn()

	//         - method used to determine if debugging is On or Off for object.

	//           if debbugging is On you may log additional error messages.

	//           this flag should not be used for echoing additional error messages

	//           directly into the HTTP response, since this would break most applications

	//           and make debugging more difficult.

	//         - args:

	//           (void) nothing required since checking internal state.

	//         - returns:

	//           (bool) if debbuging is turned on or not

	// 

	// (bool)  SetDebug( $State )

	//         - method used to turn debbugging on/off for object.

	//         - args:

	//           (string) State = [On|Off] only two valid options

	//         - returns:

	//           (bool) if operation succeeded or not.

	// 

	// 

	// (bool) __LogMsg( (string) $Message )

	//        saves given message into message log.

	// (bool) __LogStdMsg( (string) $StdMsgKey )

	//        saves message from std message with given key to message log.

	//        returns false if invalid message.

	// (bool) __FlushMsgs()

	//        flushes all messages from message log.  ideally called at the

	//        beginning of all public methods to erase log from previous call.

	// (bool) __LoadStdMsgs( (array) $Messages )

	//        loads the given array into standard messages.  if an array

	//        is not given will fail.

	// ------------------------------------------------------------

	

	class Object {

		

		// ------------------------------------------------------------

		// public methods

		// ------------------------------------------------------------

		

		function Object() {

			

			// constructor

			// ------------------------------------------------------------

			$this->__StdMsgs = array();

			$this->__MsgLog  = array();

			$this->__DebugOn = false;

		}



		function vd($var) {

			$this->v_d($var);

		}



		function v_d($var) {

		global $HTTP_SERVER_VARS, $HTTP_COOKIE_VARS;



			$host = explode('.', $HTTP_SERVER_VARS['HTTP_HOST']);



			if(strtolower($host[0]) == 'dev') {

				echo "\n<div align=\"left\"><pre>\n";

				var_dump($var);

				echo "\n</pre></div>\n";

			}



		}

		

		function GetMsgs() {

			

			// return array of messages from last operation saved in log

			// ------------------------------------------------------------

			return (array) $this->__MsgLog;

		}

		

		function IsDebugOn() {

			// 

			// method used to determine if debugging is On or Off

			// 

			

			return (bool) $this->__DebugOn;

		}

		

		function SetDebug( $State ) {

			// 

			// method used to change the status of debugging

			// 

			

			// init

			$State = strtolower($State);

			

			// set debug state

			if ($State == 'on') {

				$this->__DebugOn = true;

			}

			else if($State == 'off') {

				$this->__DebugOn = false;

			}

			else {

				$this->__LogMsg("Invalid debugging state.");

				return false;

			}

			

			return true;

		}

		

		

		// ------------------------------------------------------------

		// private members

		// ------------------------------------------------------------

		

		var $__StdMsgs;			// standard messages

		var $__MsgLog;				// errors/possible problems with last opperation

		var $__DebugOn;			// current state of debbuging for object

		

		

		// ------------------------------------------------------------

		// private methods

		// ------------------------------------------------------------

		

		function __LogMsg( $Message ) {

			

			// save message to message log

			// ------------------------------------------------------------

			$this->__MsgLog[] = $Message;

			return true;

		}

		

		function __LogStdMsg( $StdMsgKey ) {

			

			// logs message from std messages into message log

			// ------------------------------------------------------------

			$Message = $this->__StdMsgs[$StdMsgKey];

			if( strlen($Message) > 0 && is_scalar($Message) ) {

				$this->__MsgLog[] = $Message;

				return true;

			} else {

				return false;

			}

		}

		

		function __FlushMsgs() {

			

			// flush messages from message log

			// ------------------------------------------------------------

			$this->__MsgLog = array();

			return true;

		}

		

		function __LoadStdMsgs( $Messages ) {

			

			// sets given messages into std messages array

			// ------------------------------------------------------------

			if( is_array($Messages) ) {

				$this->__StdMsgs = $Messages;

				return true;

			} else {

				return false;

			}

		}

	}

	

?>