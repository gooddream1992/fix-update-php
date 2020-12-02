<?

/*
$Header: /www.luvoo.com/functions/DataObject.php 3     6/20/04 10:42p Joe $
*/

	// ------------------------------------------------------------
	// dataobject class extends object class
	// provides extra capabilities for db related objects
	// such as field validation for inserts/updates
	//
	// -- note: starred (*) args are optional --
	// 
	// (void)    DataObject()
	//           constructor.
	//
	// ------------------------------------------------------------
	// - methods to handle config table for class if available.
	//   these methods will not work if config table not available.
	//   prereqs:
	//     - setup config table in database associated with derived class' tables
	//     - define config table's name in derived class
	//       protected value to overload is: $this->__DBConfigTable
	//     - setup config array for config table in derived class
	//       protected value to overload is: $this->__DBConfigArray
	//
	// (bool)   IsDBConfigPresent()
	//          - method used to determine if DB config table is present for class
	//          - args:
	//            (void)
	//          - returns:
	//            bool, if db config table is actually present or not
	//
	// (struct) GetDBConfig()
	//          - retrieves all config values in a struct
	//          - args:
	//            (void)
	//          - returns:
	//            (struct) {
	//              (mixed) = one key value pair for each config value.
	//            }
	//          - returns:
	//            empty struct, if no db config available.
	//
	// (bool)   SetDBConfig( $Options )
	//          - saves a given set of config values if valid
	//          - optional validations:
	//            SetDBConfig() runs standard validations based on your config array..
	//            if you would like to run additional validations then overload the protected
	//            method __ValidateDBConfig() in your derived class.
	//            these additional validations will be run last before SetDBConfig returns true/false.
	//            see __ValidateDBConfig method for additional notes.
	//          - args:
	//            (struct) {
	//              (mixed) = one key value pair for each config value you'd like to change.
	//                        all keys are optional.
	//            }
	//          - returns:
	//            (bool) = success/failure of save
	//          - returns:
	//            false, if no db config available.
	//
	// ------------------------------------------------------------
	// -- methods to handle optional log tables if available.
	//    these methods will not work if log table not setup.
	//    prereqs:
	//     - setup log table in database for the table you would like to log.
	//         - log table name should be: {name of table being logged}_change_log
	//         - log table fields:
	//             id           INT IDENTITY = auto inc. primary key for table.
	//             table_id     INT          = primary key from table you're logging.  indexed.
	//             field_name   VARCHAR(64)  = field name being logged from table.
	//             date_changed INT          = date field changed.  indexed.
	//             old_value    VARCHAR(255) = field's old value before it was changed.
	//                                         logging after value changed/deleted b/c it saves space since orig value in main table.
	//     - add flags to config array of base table for fields you want to log.
	//       make sure 'prikey' is also defined in config array.  will not work if it's not.  only first field set on will be used as key.
	//         ie: 'minval' => 0,
	//             'maxval' => 100,
	//             'logged' => true     // this flag tells class to log field when it changes
	//     - overload log table/config array associations in derived class.
	//       these associations should help to reduce the chance of error.
	//       w/o them it would be easier to log data into the wrong log table.
	//         ie: $this->__LoggedTables = array(
	//               '[name of table being logged]' => & [ref to config array of table to log]
	//             )
	//     - add call to __LogFields() in every update & delete method where you need fields to be logged.
	//       be sure to log changes just before you actually make the changes, but after the changes have been
	//       validated successfully.
	//         - note: logging fields adds load to the database since it has to retrieve the current values,
	//                 compare them to the new values if $LogAllFields=false, and run a query for each field that
	//                 needs to be logged.  if $LogAllFields=true, then no comparison is made between old and new values,
	//                 however then an insert is required to the log for each field.  see note on __LogFields() for more info.
	//
	// (array)   GetFieldLog( $TableName, $Sort='ASC', $Options=null )
	//           - method used to retrieve history from a field log
	//           - args:
	//             (string) TableName = name of table being logged.  must be setup in __LoggedTables.
	//             (string) *Sort     = [ASC|DESC] sort result by date changed.  default is oldest to newest.
	//             (struct) *Options  = {
	//               *TableIds  = (array) {
	//                 (mixed) pri key from logged table.  one or more to limit result to.
	//               }
	//               *DateStart = (int) only match records changed GTE this value.
	//               *DateEnd   = (int) only match records changed LTE this value.
	//             }
	//           - returns:
	//             (array) {
	//               (struct) {
	//                 [one record from log table.  see log table config below.]
	//               }
	//             }
	//
	// (bool)    __LogFields( $TableName, $RecordId, $Changes, $LogAllFields=false )
	//           - method used internally to log fields that are being updated/deleted.
	//           - note: this method creates extra load on the database since it
	//                   runs extra queries to create the log.  use it sparingly.
	//           - args:
	//             (string) TableName     = name of table being logged.  must be setup in __LoggedTables.
	//             (mixed)  RecordId      = pri key for record being changed.  supported types are (int,float,string)
	//             (struct) Changes       = {
	//               '[field being changed]' = [its new value]
	//             }
	//             (bool)   *LogAllFields = should all fields from record be logged?
	//                                      used when deleting a record that might have logged fields.
	//                                      if true, $Changes will be ignored, so you can supply an empty struct for it.
	//
	// ------------------------------------------------------------
	// -- methods for standard maintenance in data classes
	//
	// (array)   GetBadChanges()
	//           - returns array of bad field changes from previous call to __IsGoodChanges()
	//           - 2d array.  key is db field name.  value is array of debugging errors.
	//
	// (array)   __GetFieldList( $Mode, $FieldConfig )
	//           - returns array of fields valid for given mode/query type
	//           - args:
	//             $Mode        = select,insert,update,logged,prikey (,forkey NOT IMPLEMEMTED)
	//             $FieldConfig = field config array.  key is field name.  see __IsGoodChanges for values
	//
	// (bool)    __IsDirty()
	//           - returns false if the data loaded in object is reliable for updates.
	//           - data is considered reliable if it was loaded in a serialized transaction.
	//
	// (bool)    __SetDirtyStatus( $Status=true )
	//           - updates the status of the dirty bit in this object.
	//           - if new status not given, or given status is not bool, then defaults to dirty.
	//
	// (bool)    __IsGoodChanges( $Mode, $FieldConfig, $Fields )
	//           - validates a group of given fields based on a given config and mode.
	//           - args:
	//             $Mode        = insert or update
	//             $FieldConfig = field config array.  key is field name. possible values:
	//                            type     - simple data type (integer, float, string, boolean)
	//                            insert   - can this field be inserted to
	//                            update   - can this field be updated
	//                            insreq   - if this field can be inserted to, is it required in insert
	//                                       (optional)
	//                            minval   - minimum requirement of this field
	//                                       (number=lowest poss num, string=minimum str len)
	//                                       (not used for bool.)
	//                            maxval   - maximum allowed value of field
	//                                       (number=highest poss num, string=maximum str len)
	//                                       (not used for bool.)
	//                            *rxmask  - optional POSIX regular expresion mask.
	//                                       if mask present and field doesn't match it, field is invalid.
	//                            *rxPmask - optional PERL regular expresion mask.
	//                                       if mask present and field doesn't match it, field is invalid.
	//                            *default - default value to use for field in insert..
	//                                       ..if value is not required in insert and not supplied.
	//                                       documented here, but class doesn't validate this value.
	//                            *prikey  - [true|false] if field is primary key set this value to true
	//                                       so it can be referenced later.  else it can be left off.
	//                                       may only be set on one field!  all functions use the first one found in config array.
	//                            *forkey  - [true|false] NOT IMPLEMENTED
	//             $Fields      = array of fields to validate.  key is field name.  value is new field value.
	//
	// (bool)   __LogBadChange( $FieldName, $DebugMsg )
	//          - adds a record to the bad field array in an object
	//          - args:
	//            (string) $FieldName = field name there is a problem with
	//            (string) $DebugMsg  = debugging message that goes with it
	// ------------------------------------------------------------

	// suppressed errors on includes for security
	@include_once( sprintf("%sObject.php",$functionsdir) );


	class DataObject extends Object {

		// ------------------------------------------------------------
		// public methods
		// ------------------------------------------------------------

		function DataObject() {

			// constructor
			// ------------------------------------------------------------
			$this->Object();

			$this->__SetDirtyStatus();

			// init values which may be overloaded
			$this->__DBConfigTable = null;
			$this->__DBConfigArray = null;
			$this->__LoggedTables  = null;

			// init values for internal use
			$this->__LogTableConfig = array(
				'id' => array(						// standard auto inc. pri key used in change_log tables
					'type'   => 'integer',
					'insert' => false,
					'update' => false,
					'prikey' => true
				),
				'table_id' => array(
					'type'   => 'integer',			// pri key from table being logged
					'insert' => true,
					'insreq' => true,
					'update' => false,
					'minval' => 1,
					'maxval' => 2147000000
				),
				'field_name' => array(				// field name being logged from table
					'type'   => 'string',
					'insert' => true,
					'insreq' => true,
					'update' => false,
					'minval' => 1,
					'maxval' => 64
				),
				'date_changed' => array(				// date the field being logged was changed
					'type'    => 'integer',
					'insert'  => true,
					'insreq'  => false,
					'update'  => false,
					'minval'  => 1,
					'maxval'  => 2147000000,
				),
				'old_value' => array(
					'type'   => 'string',
					'insert' => true,
					'insreq' => true,
					'update' => false,
					'minval' => 1,
					'maxval' => 255
				)
			);
		}

		function IsDBConfigPresent() {

			// returns if DB config table is present or not
			// ------------------------------------------------------------
			$this->__FlushMsgs();

			if (strlen($this->__DBConfigTable) > 0 && is_array($this->__DBConfigArray) && count($this->__DBConfigArray) > 0)
				return true;
			else
				return false;
		}

		function GetDBConfig() {

			// method to retrieve all db config values
			// ------------------------------------------------------------
			$this->__FlushMsgs();

			// abort if DB config not available
			if (! $this->IsDBConfigPresent()) {
				$this->__LogMsg("Database config not available.");
				return array();
			}

			// init
			$Config = array();
			$Fields = $this->__GetFieldList('select', $this->__DBConfigArray);

			list($CrntFld) = each($Fields);
			$FieldList     = $CrntFld;
			while (list($CrntFld) = each($Fields)) {
				$FieldList .= ',' . $CrntFld;
			}

			// get entries
			$strQryGetConfig = sprintf("SELECT TOP 1 %s FROM %s ", $FieldList, $this->__DBConfigTable);

			if (! $pQryGetConfig = sql_query($strQryGetConfig, PRIMARYCONN_C)) {
				$this->__LogMsg("Database error while attempting to retrieve database config.");
				return array();
			}

			$row = sql_fetch_object($pQryGetConfig);		// there should only be one row in this table
			reset( $Fields );
			while (list($CrntFld,$CrntType) = each($Fields)) {
				eval( sprintf("\$Config[\$CrntFld] = (%s) \$row->\$CrntFld;", $CrntType) );	// clean data & prevent from working if config not correct
			}
			unset($pQryGetConfig);

			return (array) $Config;
		}

		function SetDBConfig( $Options ) {

			// method to save given set of db config values
			// ------------------------------------------------------------
			$this->__FlushMsgs();

			// abort if DB config not available
			if (! $this->IsDBConfigPresent()) {
				$this->__LogMsg("Database config not available.");
				return array();
			}

			// validate args
			if (! is_array($Options) || count($Options) == 0) {
				$this->__LogMsg("Unable to save DB config because no values were given.");
				return false;
			}

			// auto validations
			if (! $this->__IsGoodChanges('update', $this->__DBConfigArray, $Options)) {
				$this->__LogMsg('Incomplete data.  Unable to save DB config.');
				return false;
			}

			// run manual validations
			$TranNeeded = false;
			if (! $this->__ValidateDBConfig( $Options, $TranNeeded )) {
				return false;
			}

			// everything ok, save values
			$Fields     = $this->__GetFieldList('update', $this->__DBConfigArray);
			$ChangeList = '';

			while (list($CrntFld,$CrntType) = each($Fields)) {

				if (isset($Options[$CrntFld])) {
					$CrntValue =& $Options[$CrntFld];

					if (strlen($ChangeList) > 0 )
						$ChangeList .= ',';
					$ChangeList .= sprintf("%s = ", $CrntFld);

					switch ($CrntType) {
						case 'string':
							$ChangeList .= sprintf("'%s'", $CrntValue);
							break;
						case 'integer':
						case 'boolean':
							$ChangeList .= sprintf("%d", $CrntValue);
							break;
						case 'float':
							$ChangeList .= sprintf("%.4f", $CrntValue);
							break;
					}
				}
			}
			$strQryUpdConfig = sprintf("UPDATE %s SET %s", $this->__DBConfigTable, $ChangeList);

			if (! sql_query($strQryUpdConfig, PRIMARYCONN_C)) {
				$this->__LogMsg("Database error while attempting to save DB config.");
				return false;
			}

			// if manual validations required transaction, must commit tran to finish
			if ($TranNeeded && ! sql_commitTrans(PRIMARYCONN_C)) {
				$this->__LogMsg("Unable to commit changes to DB config to database.");
				if (! sql_rollbackTrans(PRIMARYCONN_C))
					die( sprintf("Fatal error! (%s.SetDBConfig)", get_class($this)) );
				return false;
			}

			return true;
		}

		function GetFieldLog( $TableName, $Sort='ASC', $Options=null ) {
			//
			// method used to get history from a change_log table
			//
			$this->__FlushMsgs();

			// has field logging been setup?
			if ($this->__LoggedTables == null) {
				$this->__LogMsg("Data object has not been setup for table logging.");
				return array();
			}

			// validate args
			if (! isset($this->__LoggedTables[$TableName])) {
				$this->__LogMsg("Table has not been setup for field logging.");
				return array();
			}
			if ($Sort != 'ASC' && $Sort != 'DESC') {
				$this->__LogMsg("Invalid sort option for table log.");
				return array();
			}

			// get history from log table
			$Fields = $this->__GetFieldList('select', $this->__LogTableConfig);

			list($CrntFld) = each($Fields);
			$FieldList     = $CrntFld;
			while (list($CrntFld) = each($Fields)) {
				$FieldList .= ',' . $CrntFld;
			}
			$strQryFieldLog = sprintf("SELECT %s FROM %s_change_log ", $FieldList, $TableName);
			$QryConditions  = '';

			if (isset($Options['TableIds']) && is_array($Options['TableIds'])) {

				// right now only INT foreign key supported in change_log tables!!
				$ForKeyName = 'table_id';
				$ForKeyType = 'integer';

				// narrow search to matching pri keys
				$QryConditions .= (strlen($QryConditions) == 0) ? 'WHERE ' : 'AND ';
				$QryConditions .= sprintf("%s IN(", $ForKeyName);

				$Counter = 0;
				while (list(,$CrntId) = each($Options['TableIds'])) {
					if ($Counter > 0)
						$QryConditions .= ',';
					switch ($ForKeyType) {
						case 'integer':
							$QryConditions .= sprintf("%d", $CrntId);
							break;
						case 'float':
							$QryConditions .= sprintf("%f", $CrntId);
							break;
						case 'string':
							$QryConditions .= sprintf("'%s'", str_replace("'", "''", $CrntId));		// escaping single quotes, will break on other databases
							break;
						default:
							$this->__LogMsg("Invalid record key type.  Unable to retrieve change log.");
							return array();
					}
					$Counter++;
				}
				$QryConditions .= ') ';
			}
			if (isset($Options['DateStart'])) {
				// narrow search to entries after this date
				$QryConditions .= (strlen($QryConditions) == 0) ? 'WHERE ' : 'AND ';
				$QryConditions .= sprintf("date_changed >= %d", $Options['DateStart']);
			}
			if (isset($Options['DateEnd'])) {
				// narrow search to entries before this date
				$QryConditions .= (strlen($QryConditions) == 0) ? 'WHERE ' : 'AND ';
				$QryConditions .= sprintf("date_changed < %d ", $Options['DateEnd']);
			}

			$strQryFieldLog .= $QryConditions;
			$strQryFieldLog .= sprintf("ORDER BY date_changed %s ", $Sort);

			if (! $pQryFieldLog = sql_query($strQryFieldLog, PRIMARYCONN_C)) {
				$this->__LogMsg("Database error while attempting to retrieve field log.");
				return array();
			}

			// return history
			$History    = array();
			$CurrentRow = 0;
			while ($row = sql_fetch_object($pQryFieldLog)) {
				reset( $Fields );
				while (list($CrntFld,$CrntType) = each($Fields)) {
					eval( sprintf("\$History[\$CurrentRow][\$CrntFld] = (%s) \$row->\$CrntFld;", $CrntType) );	// clean data & prevent from working if config not correct
				}
				$CurrentRow++;
			}
			unset($pQryFieldLog);

			return (array) $History;
		}

		function GetBadChanges() {

			// return array of fields not meeting last __IsGoodChanges stored in object
			// ------------------------------------------------------------
			return (array) $this->__BadChanges;
		}


		// ------------------------------------------------------------
		// protected methods
		// ------------------------------------------------------------

		function __ValidateDBConfig( &$Options, &$TranNeeded ) {

			// method overloaded by derived classes to add manual validations to SetDBConfig()
			// ------------------------------------------------------------

			// if you need transaction support to isolate your validations
			// and changes from the outside world..
			// start a tran in your overloaded method and set $TranNeeded = true.
			// then SetDBConfig() will commit the tran for you.
			// BUT! in order for that to work you must reference &$Options and &$TransNeeded
			// with an ampersand.
			// if you forget the ampersand it will not work.

			// no validations for this method
			$TranNeeded = false;

			return true;
		}

		function __LogFields( $TableName, $RecordId, $Changes, $LogAllFields=false ) {
			//
			// method used in derived classes to log fields as they change in a table
			//

			// validate args
			if (! isset($this->__LoggedTables[$TableName])) {
				$this->__LogMsg("Table has not been setup for logging.");
				return false;
			}
			if (! is_int($RecordId) && ! is_float($RecordId) && ! is_string($RecordId)) {
				$this->__LogMsg("Unable to log changes to record.  Data key invalid.");
				return false;
			}
			if (! is_array($Changes)) {
				$this->__LogMsg("Unable to log changes to record.  Invalid changes.");
				return false;
			}
			if ($LogAllFields != false && $LogAllFields != true) {
				$this->__LogMsg("Unable to log changes to record.  Invalid option.");
				return false;
			}

			// validate pri key is defined, and grab
			$PriKeyInfo = $this->__GetFieldList('prikey', $this->__LoggedTables[$TableName]);
			if (count($PriKeyInfo) != 1) {
				$this->__LogMsg("Unable to log changes to record.  Record key is not defined.");
				return false;
			}
			list($PriKeyName,$PriKeyType) = each($PriKeyInfo);

			// decide what we're going to log
			if ($LogAllFields) {
				// logging everything
				$FieldsToLog = $this->__GetFieldList('select', $this->__LoggedTables[$TableName]);
			}
			else {
				// logging some
				$FieldsToLog = $this->__GetFieldList('logged', $this->__LoggedTables[$TableName]);
			}

			$FieldList = '';
			while (list($CrntFld) = each($FieldsToLog)) {
				if (strlen($FieldList) > 0)
					$FieldList .= ',';
				$FieldList .= $CrntFld;
			}
			if (strlen($FieldList) < 1) {
				// no fields to log..  stop here w/ success.
				return true;
			}

			$strQryOldValues  = sprintf("SELECT %s FROM %s WHERE %s = ", $FieldList, $TableName, $PriKeyName);
			switch ($PriKeyType) {
				case 'integer':
					$strQryOldValues .= sprintf("%d", $RecordId);
					break;
				case 'float':
					$strQryOldValues .= sprintf("%f", $RecordId);
					break;
				case 'string':
					$strQryOldValues .= sprintf("'%s'", str_replace("'", "''", $RecordId));
					break;
				default:
					$this->__LogMsg("Unable to log changes to record.  Unsupported record key datatype.");
					return false;
			}

			if (! $pQryOldValues = sql_query($strQryOldValues, PRIMARYCONN_C)) {
				$this->__LogMsg("Database error while attempting to log changes to record. (a)");
				return false;
			}
			if (sql_num_rows($pQryOldValues) == 0) {
				$this->__LogMsg("Unable to log changes to record.  Record does not exist.");
				return false;
			}

			$objQryOldValues = sql_fetch_object($pQryOldValues);

			// log fields
			$LogTableFields = $this->__GetFieldList('insert', $this->__LogTableConfig);
			$DateChanged    = time();

			reset($FieldsToLog);
			while (list($CrntFld) = each($FieldsToLog)) {

				$LogThisField = false;

				if ($LogAllFields)
					$LogThisField = true;
				else if (isset($Changes[$CrntFld]) && $Changes[$CrntFld] != $objQryOldValues->$CrntFld )
					$LogThisField = true;

				if ($LogThisField) {

					// save to log
					$FieldList      = '';
					$ValueList      = '';

					// not sure how to make this 100% dynamic
					reset( $LogTableFields );
					while (list($CrntLogFld,$CrntLogType) = each($LogTableFields)) {

						if (strlen($FieldList) > 0)
							$FieldList .= ',';
						$FieldList .= $CrntLogFld;

						if (strlen($ValueList) > 0)
							$ValueList .= ',';

						$TypeForField  = $CrntLogType;		// will use type for log table field, but what if forkey is different?
						$ValueForField = null;				// will determine what this value should be

						// translating values from one record to multiple log entries
						switch ($CrntLogFld) {
							case 'table_id':
								$ValueForField = $RecordId;
								$TypeForField  = $PriKeyType;
								break;

							case 'field_name':
								$ValueForField = $CrntFld;
								break;

							case 'date_changed':
								$ValueForField = $DateChanged;
								break;

							case 'old_value':
								$ValueForField = $objQryOldValues->$CrntFld;
								break;

							default:
								$this->__LogMsg("Log table not setup for this field.");
								return false;
						}

						// append current field/value to log entry query
						switch ($TypeForField) {
							case 'integer':
								$ValueList .= sprintf("%d", $ValueForField);
								break;
							case 'float':
								$ValueList .= sprintf("%f", $ValueForField);
								break;
							case 'string':
								$ValueList .= sprintf("'%s'", str_replace("'", "''", $ValueForField));
								break;
							default:
								$this->__LogMsg("Unable to create log entry.  Unsupported record key data type.");
								return false;
						}
					}

					$strQryLogField = sprintf("INSERT INTO %s_change_log (%s) VALUES (%s)", $TableName, $FieldList, $ValueList);

					if (! $pQryLogField = sql_query($strQryLogField, PRIMARYCONN_C)) {
						$this->__LogMsg("Database error.  Unable to log changes.");
						return false;
					}
				}
			}

			return true;
		}

		function __GetFieldList( $Mode, $FieldConfig ) {

			// return 2d array of db fields that are used in opperation
			// ------------------------------------------------------------
			$FieldConfig = (array) $FieldConfig;
			$FieldList   = array();

			while( list($field,$info) = each($FieldConfig) ) {
				switch( $Mode ) {
					case 'select':
						$FieldList[$field] = $info['type'];
						break;

					case 'update':
						if( $info['update'] )
							$FieldList[$field] = $info['type'];
						break;

					case 'insert':
						if( $info['insert'] )
							$FieldList[$field] = $info['type'];
						break;

					case 'logged':
						if( $info['logged'] )
							$FieldList[$field] = $info['type'];
						break;

					case 'prikey':
						if( $info['prikey'] )
							$FieldList[$field] = $info['type'];
						break 2;								// only supporting one field as prikey

					// forkey not implemented yet
					//case 'forkey':
					//	if( $info['forkey'] )
					//		$FieldList[$field] = $info['type'];
					//	break;

					default:
				}
			}
			return (array) $FieldList;
		}

		function __IsDirty() {

			// return whether or not the data in object is considered reliable for updates
			// ------------------------------------------------------------
			$IsDirty = true;
			if( isset($this->__DataIsDirty) && is_bool($this->__DataIsDirty) )
				$IsDirty = $this->__DataIsDirty;

			return (bool) $IsDirty;
		}

		function __SetDirtyStatus( $Status=true ) {

			// set new dirty status of object.  defaulting to is dirty data
			// ------------------------------------------------------------
			if( ! is_bool($Status) )
				$Status = true;
			$this->__DataIsDirty = $Status;

			return (bool) true;
		}

		function __IsGoodChanges( $Mode, $FieldConfig, $Fields ) {

			// return array of fields being inserted/updated that don't meet requirements in config
			// ------------------------------------------------------------

			// flush log from previous run
			if( ! $this->__FlushBadChanges() )
				return false;

			if( $Mode != 'insert' && $Mode != 'update' )
				return false;
			if( ! is_array($FieldConfig) )
				return false;
			if( ! is_array($Fields) )
				return false;

			$IsGood = true;

			while( list($crntfld,$fldvalue) = each($Fields) ) {

				// get working values
				$IsChangeable = true;

				// skip arg if not in config (will change to loop only on config in future)
				if( ! isset($FieldConfig[$crntfld]) )
					continue;

				$cfgtype   = $FieldConfig[$crntfld]['type'];
				$cfginsert = $FieldConfig[$crntfld]['insert'];
				$cfginsreq = $FieldConfig[$crntfld]['insreq'];
				$cfgupdate = $FieldConfig[$crntfld]['update'];
				$cfgminval = $FieldConfig[$crntfld]['minval'];
				$cfgmaxval = $FieldConfig[$crntfld]['maxval'];

				// is there a POSIX regex mask for this field?
				if (isset($FieldConfig[$crntfld]['rxmask'])) {
					$cfgrxmask = $FieldConfig[$crntfld]['rxmask'];
				}
				else {
					$cfgrxmask = null;
				}

				// is there a PERL regex mask for this field?
				if (isset($FieldConfig[$crntfld]['rxPmask'])) {
					$cfgrxPmask = $FieldConfig[$crntfld]['rxPmask'];
				}
				else {
					$cfgrxPmask = null;
				}

				// validate for insert/update
				switch( $Mode ) {
					case 'insert':
						if( ! $cfginsert ) {
							$this->__LogBadChange($crntfld, "You cannot insert into this field.");
							$IsChangeable = false;
							$IsGood       = false;
						}
						break;

					case 'update':
						if( ! $cfgupdate ) {
							$this->__LogBadChange($crntfld, "You cannot update this field.");
							$IsChangeable = false;
							$IsGood       = false;
						}
						break;
				}

				if( $IsChangeable ) {

					// validate field type, and min/max field value requirements
					switch( $cfgtype ) {
						case 'integer':
							if( ! is_integer($fldvalue) ) {
								$this->__LogBadChange($crntfld, "Field must be an integer.");
								$IsGood = false;
							}
							else if( ($fldvalue < $cfgminval) || ($fldvalue > $cfgmaxval) ) {
								$this->__LogBadChange($crntfld, "Field value is less or greater than what it requires.");
								$IsGood = false;
							}
							break;
						case 'float':
							if( ! is_float($fldvalue) ) {
								$this->__LogBadChange($crntfld, "Field must be a float.");
								$IsGood = false;
							} else if( $fldvalue < $cfgminval || $fldvalue > $cfgmaxval ) {
								$this->__LogBadChange($crntfld, "Field value is less or greater than what it requires.");
								$IsGood = false;
							}
							break;
						case 'string':
							if( ! is_string($fldvalue) ) {
								$this->__LogBadChange($crntfld, "Field must be a string.");
								$IsGood = false;
							} else if( strlen($fldvalue) < $cfgminval || strlen($fldvalue) > $cfgmaxval ) {
								$this->__LogBadChange($crntfld, "Field value is less or greater than what it requires.");
								$IsGood = false;
							}
							break;
						case 'boolean':
							if( ! is_bool($fldvalue) ) {
								$this->__LogBadChange($crntfld, "Field must be a boolean value.");
								$IsGood = false;
							}
							break;
						default:
							$this->__LogBadChange($crntfld, "Field data type is not supported.");
							$IsGood = false;
					}

					// does value match optional POSIX regex mask?
					if ($cfgrxmask != null && ! ereg($cfgrxmask, $fldvalue)) {
						$this->__LogBadChange($crntfld, "Field is not formatted properly.");
						$IsGood = false;
					}

					// does value match optional PERL regex mask?
					if ($cfgrxPmask != null && ! preg_match($cfgrxPmask, $fldvalue)) {
						$this->__LogBadChange($crntfld, "Field is not formatted properly. (P)");
						$IsGood = false;
					}
				}

			} // end of loop over given fields

			// if inserting, validate all required fields are present
			if( $Mode == 'insert' ) {
				while( list($crntfld,$info) = each($FieldConfig) ) {
					if( $info['insreq'] && ! isset($Fields[$crntfld]) ) {
						$this->__LogBadChange($crntfld, "Field is required in an insert. ($crntfld)");
						$IsGood = false;
					}
				}
			}

			return (bool) $IsGood;
		}

		function __LogBadChange( $FieldName, $DebugMsg ) {

			// adds a record to the bad field array in an object
			// ------------------------------------------------------------

			$FieldName = (string) $FieldName;
			$this->__BadChanges[$FieldName][] = (string) $DebugMsg;
			return true;
		}

		function __FlushBadChanges() {

			// flush bad field changes log from previous run
			// ------------------------------------------------------------
			$this->__BadChanges = array();
			return true;
		}

		// ------------------------------------------------------------
		// protected members
		// ------------------------------------------------------------

		var $__DBConfigTable;			// name of DB config table for derived class
		var $__DBConfigArray;			// name of DB config table's config array for derived class

		var $__LoggedTables;			// logged table/config array associations.  overloaded in derived classes.

		// ------------------------------------------------------------
		// private members
		// ------------------------------------------------------------

		var $__BadChanges;				// 2d array of field names that didn't meet last
		var $__DataIsDirty;				// bool.  is the data loaded into the object reliable for updates.

		var $__LogTableConfig;			// struct containing config array for standard field log table
	}

?>