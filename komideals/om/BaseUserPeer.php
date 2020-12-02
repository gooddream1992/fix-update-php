<?php


/**
 * Base static class for performing query and update operations on the 'user' table.
 *
 * 
 *
 * @package    propel.generator.komideals.om
 */
abstract class BaseUserPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'komideals';

	/** the table name for this class */
	const TABLE_NAME = 'user';

	/** the related Propel class for this table */
	const OM_CLASS = 'User';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'komideals.User';

	/** the related TableMap class for this table */
	const TM_CLASS = 'UserTableMap';
	
	/** The total number of columns. */
	const NUM_COLUMNS = 36;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the ID field */
	const ID = 'user.ID';

	/** the column name for the EMAIL field */
	const EMAIL = 'user.EMAIL';

	/** the column name for the PASSWORD_HASH field */
	const PASSWORD_HASH = 'user.PASSWORD_HASH';

	/** the column name for the PASSWORD_RESET_HASH field */
	const PASSWORD_RESET_HASH = 'user.PASSWORD_RESET_HASH';

	/** the column name for the COMPANY_DESCRIPTION field */
	const COMPANY_DESCRIPTION = 'user.COMPANY_DESCRIPTION';

	/** the column name for the COMPANY_URL field */
	const COMPANY_URL = 'user.COMPANY_URL';

	/** the column name for the COMPANY_NAME field */
	const COMPANY_NAME = 'user.COMPANY_NAME';

	/** the column name for the JOB_TITLE field */
	const JOB_TITLE = 'user.JOB_TITLE';

	/** the column name for the GENDER field */
	const GENDER = 'user.GENDER';

	/** the column name for the FNAME field */
	const FNAME = 'user.FNAME';

	/** the column name for the LNAME field */
	const LNAME = 'user.LNAME';

	/** the column name for the ADDRESSLINE1 field */
	const ADDRESSLINE1 = 'user.ADDRESSLINE1';

	/** the column name for the ADDRESSLINE2 field */
	const ADDRESSLINE2 = 'user.ADDRESSLINE2';

	/** the column name for the CITY field */
	const CITY = 'user.CITY';

	/** the column name for the STATE field */
	const STATE = 'user.STATE';

	/** the column name for the POSTCODE field */
	const POSTCODE = 'user.POSTCODE';

	/** the column name for the COUNTRY field */
	const COUNTRY = 'user.COUNTRY';

	/** the column name for the TELEPHONE field */
	const TELEPHONE = 'user.TELEPHONE';

	/** the column name for the FAX field */
	const FAX = 'user.FAX';

	/** the column name for the IS_ACTIVE field */
	const IS_ACTIVE = 'user.IS_ACTIVE';

	/** the column name for the IS_AFFILIATE field */
	const IS_AFFILIATE = 'user.IS_AFFILIATE';

	/** the column name for the REFERRAL_ID field */
	const REFERRAL_ID = 'user.REFERRAL_ID';

	/** the column name for the REFERRAL field */
	const REFERRAL = 'user.REFERRAL';

	/** the column name for the ADVERTISING_TIMELINE field */
	const ADVERTISING_TIMELINE = 'user.ADVERTISING_TIMELINE';

	/** the column name for the MONTHLY_BUDGET field */
	const MONTHLY_BUDGET = 'user.MONTHLY_BUDGET';

	/** the column name for the PRIMARY_TARGET field */
	const PRIMARY_TARGET = 'user.PRIMARY_TARGET';

	/** the column name for the ADVERTISING_OBJECTIVE field */
	const ADVERTISING_OBJECTIVE = 'user.ADVERTISING_OBJECTIVE';

	/** the column name for the ADDITIONAL_INFORMATION field */
	const ADDITIONAL_INFORMATION = 'user.ADDITIONAL_INFORMATION';

	/** the column name for the IS_EMAIL_VERIFIED field */
	const IS_EMAIL_VERIFIED = 'user.IS_EMAIL_VERIFIED';

	/** the column name for the IS_PREMIUM field */
	const IS_PREMIUM = 'user.IS_PREMIUM';

	/** the column name for the LAST_LOGIN_DATE field */
	const LAST_LOGIN_DATE = 'user.LAST_LOGIN_DATE';

	/** the column name for the DATE_CREATED field */
	const DATE_CREATED = 'user.DATE_CREATED';

	/** the column name for the DATE_EXPIRES field */
	const DATE_EXPIRES = 'user.DATE_EXPIRES';

	/** the column name for the DATE_MODIFIED field */
	const DATE_MODIFIED = 'user.DATE_MODIFIED';

	/** the column name for the REMOTE_ADDR_CREATED field */
	const REMOTE_ADDR_CREATED = 'user.REMOTE_ADDR_CREATED';

	/** the column name for the REMOTE_ADDR_MODIFIED field */
	const REMOTE_ADDR_MODIFIED = 'user.REMOTE_ADDR_MODIFIED';

	/**
	 * An identiy map to hold any loaded instances of User objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array User[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Email', 'PasswordHash', 'PasswordResetHash', 'CompanyDescription', 'CompanyUrl', 'CompanyName', 'JobTitle', 'Gender', 'Fname', 'Lname', 'Addressline1', 'Addressline2', 'City', 'State', 'Postcode', 'Country', 'Telephone', 'Fax', 'IsActive', 'IsAffiliate', 'ReferralId', 'Referral', 'AdvertisingTimeline', 'MonthlyBudget', 'PrimaryTarget', 'AdvertisingObjective', 'AdditionalInformation', 'IsEmailVerified', 'IsPremium', 'LastLoginDate', 'DateCreated', 'DateExpires', 'DateModified', 'RemoteAddrCreated', 'RemoteAddrModified', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'email', 'passwordHash', 'passwordResetHash', 'companyDescription', 'companyUrl', 'companyName', 'jobTitle', 'gender', 'fname', 'lname', 'addressline1', 'addressline2', 'city', 'state', 'postcode', 'country', 'telephone', 'fax', 'isActive', 'isAffiliate', 'referralId', 'referral', 'advertisingTimeline', 'monthlyBudget', 'primaryTarget', 'advertisingObjective', 'additionalInformation', 'isEmailVerified', 'isPremium', 'lastLoginDate', 'dateCreated', 'dateExpires', 'dateModified', 'remoteAddrCreated', 'remoteAddrModified', ),
		BasePeer::TYPE_COLNAME => array (self::ID, self::EMAIL, self::PASSWORD_HASH, self::PASSWORD_RESET_HASH, self::COMPANY_DESCRIPTION, self::COMPANY_URL, self::COMPANY_NAME, self::JOB_TITLE, self::GENDER, self::FNAME, self::LNAME, self::ADDRESSLINE1, self::ADDRESSLINE2, self::CITY, self::STATE, self::POSTCODE, self::COUNTRY, self::TELEPHONE, self::FAX, self::IS_ACTIVE, self::IS_AFFILIATE, self::REFERRAL_ID, self::REFERRAL, self::ADVERTISING_TIMELINE, self::MONTHLY_BUDGET, self::PRIMARY_TARGET, self::ADVERTISING_OBJECTIVE, self::ADDITIONAL_INFORMATION, self::IS_EMAIL_VERIFIED, self::IS_PREMIUM, self::LAST_LOGIN_DATE, self::DATE_CREATED, self::DATE_EXPIRES, self::DATE_MODIFIED, self::REMOTE_ADDR_CREATED, self::REMOTE_ADDR_MODIFIED, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID', 'EMAIL', 'PASSWORD_HASH', 'PASSWORD_RESET_HASH', 'COMPANY_DESCRIPTION', 'COMPANY_URL', 'COMPANY_NAME', 'JOB_TITLE', 'GENDER', 'FNAME', 'LNAME', 'ADDRESSLINE1', 'ADDRESSLINE2', 'CITY', 'STATE', 'POSTCODE', 'COUNTRY', 'TELEPHONE', 'FAX', 'IS_ACTIVE', 'IS_AFFILIATE', 'REFERRAL_ID', 'REFERRAL', 'ADVERTISING_TIMELINE', 'MONTHLY_BUDGET', 'PRIMARY_TARGET', 'ADVERTISING_OBJECTIVE', 'ADDITIONAL_INFORMATION', 'IS_EMAIL_VERIFIED', 'IS_PREMIUM', 'LAST_LOGIN_DATE', 'DATE_CREATED', 'DATE_EXPIRES', 'DATE_MODIFIED', 'REMOTE_ADDR_CREATED', 'REMOTE_ADDR_MODIFIED', ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'email', 'password_hash', 'password_reset_hash', 'company_description', 'company_url', 'company_name', 'job_title', 'gender', 'fname', 'lname', 'addressline1', 'addressline2', 'city', 'state', 'postcode', 'country', 'telephone', 'fax', 'is_active', 'is_affiliate', 'referral_id', 'referral', 'advertising_timeline', 'monthly_budget', 'primary_target', 'advertising_objective', 'additional_information', 'is_email_verified', 'is_premium', 'last_login_date', 'date_created', 'date_expires', 'date_modified', 'remote_addr_created', 'remote_addr_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Email' => 1, 'PasswordHash' => 2, 'PasswordResetHash' => 3, 'CompanyDescription' => 4, 'CompanyUrl' => 5, 'CompanyName' => 6, 'JobTitle' => 7, 'Gender' => 8, 'Fname' => 9, 'Lname' => 10, 'Addressline1' => 11, 'Addressline2' => 12, 'City' => 13, 'State' => 14, 'Postcode' => 15, 'Country' => 16, 'Telephone' => 17, 'Fax' => 18, 'IsActive' => 19, 'IsAffiliate' => 20, 'ReferralId' => 21, 'Referral' => 22, 'AdvertisingTimeline' => 23, 'MonthlyBudget' => 24, 'PrimaryTarget' => 25, 'AdvertisingObjective' => 26, 'AdditionalInformation' => 27, 'IsEmailVerified' => 28, 'IsPremium' => 29, 'LastLoginDate' => 30, 'DateCreated' => 31, 'DateExpires' => 32, 'DateModified' => 33, 'RemoteAddrCreated' => 34, 'RemoteAddrModified' => 35, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'email' => 1, 'passwordHash' => 2, 'passwordResetHash' => 3, 'companyDescription' => 4, 'companyUrl' => 5, 'companyName' => 6, 'jobTitle' => 7, 'gender' => 8, 'fname' => 9, 'lname' => 10, 'addressline1' => 11, 'addressline2' => 12, 'city' => 13, 'state' => 14, 'postcode' => 15, 'country' => 16, 'telephone' => 17, 'fax' => 18, 'isActive' => 19, 'isAffiliate' => 20, 'referralId' => 21, 'referral' => 22, 'advertisingTimeline' => 23, 'monthlyBudget' => 24, 'primaryTarget' => 25, 'advertisingObjective' => 26, 'additionalInformation' => 27, 'isEmailVerified' => 28, 'isPremium' => 29, 'lastLoginDate' => 30, 'dateCreated' => 31, 'dateExpires' => 32, 'dateModified' => 33, 'remoteAddrCreated' => 34, 'remoteAddrModified' => 35, ),
		BasePeer::TYPE_COLNAME => array (self::ID => 0, self::EMAIL => 1, self::PASSWORD_HASH => 2, self::PASSWORD_RESET_HASH => 3, self::COMPANY_DESCRIPTION => 4, self::COMPANY_URL => 5, self::COMPANY_NAME => 6, self::JOB_TITLE => 7, self::GENDER => 8, self::FNAME => 9, self::LNAME => 10, self::ADDRESSLINE1 => 11, self::ADDRESSLINE2 => 12, self::CITY => 13, self::STATE => 14, self::POSTCODE => 15, self::COUNTRY => 16, self::TELEPHONE => 17, self::FAX => 18, self::IS_ACTIVE => 19, self::IS_AFFILIATE => 20, self::REFERRAL_ID => 21, self::REFERRAL => 22, self::ADVERTISING_TIMELINE => 23, self::MONTHLY_BUDGET => 24, self::PRIMARY_TARGET => 25, self::ADVERTISING_OBJECTIVE => 26, self::ADDITIONAL_INFORMATION => 27, self::IS_EMAIL_VERIFIED => 28, self::IS_PREMIUM => 29, self::LAST_LOGIN_DATE => 30, self::DATE_CREATED => 31, self::DATE_EXPIRES => 32, self::DATE_MODIFIED => 33, self::REMOTE_ADDR_CREATED => 34, self::REMOTE_ADDR_MODIFIED => 35, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'EMAIL' => 1, 'PASSWORD_HASH' => 2, 'PASSWORD_RESET_HASH' => 3, 'COMPANY_DESCRIPTION' => 4, 'COMPANY_URL' => 5, 'COMPANY_NAME' => 6, 'JOB_TITLE' => 7, 'GENDER' => 8, 'FNAME' => 9, 'LNAME' => 10, 'ADDRESSLINE1' => 11, 'ADDRESSLINE2' => 12, 'CITY' => 13, 'STATE' => 14, 'POSTCODE' => 15, 'COUNTRY' => 16, 'TELEPHONE' => 17, 'FAX' => 18, 'IS_ACTIVE' => 19, 'IS_AFFILIATE' => 20, 'REFERRAL_ID' => 21, 'REFERRAL' => 22, 'ADVERTISING_TIMELINE' => 23, 'MONTHLY_BUDGET' => 24, 'PRIMARY_TARGET' => 25, 'ADVERTISING_OBJECTIVE' => 26, 'ADDITIONAL_INFORMATION' => 27, 'IS_EMAIL_VERIFIED' => 28, 'IS_PREMIUM' => 29, 'LAST_LOGIN_DATE' => 30, 'DATE_CREATED' => 31, 'DATE_EXPIRES' => 32, 'DATE_MODIFIED' => 33, 'REMOTE_ADDR_CREATED' => 34, 'REMOTE_ADDR_MODIFIED' => 35, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'email' => 1, 'password_hash' => 2, 'password_reset_hash' => 3, 'company_description' => 4, 'company_url' => 5, 'company_name' => 6, 'job_title' => 7, 'gender' => 8, 'fname' => 9, 'lname' => 10, 'addressline1' => 11, 'addressline2' => 12, 'city' => 13, 'state' => 14, 'postcode' => 15, 'country' => 16, 'telephone' => 17, 'fax' => 18, 'is_active' => 19, 'is_affiliate' => 20, 'referral_id' => 21, 'referral' => 22, 'advertising_timeline' => 23, 'monthly_budget' => 24, 'primary_target' => 25, 'advertising_objective' => 26, 'additional_information' => 27, 'is_email_verified' => 28, 'is_premium' => 29, 'last_login_date' => 30, 'date_created' => 31, 'date_expires' => 32, 'date_modified' => 33, 'remote_addr_created' => 34, 'remote_addr_modified' => 35, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, )
	);

	/**
	 * Translates a fieldname to another type
	 *
	 * @param      string $name field name
	 * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @param      string $toType   One of the class type constants
	 * @return     string translated name of the field.
	 * @throws     PropelException - if the specified name could not be found in the fieldname mappings.
	 */
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	/**
	 * Returns an array of field names.
	 *
	 * @param      string $type The type of fieldnames to return:
	 *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     array A list of field names
	 */

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	/**
	 * Convenience method which changes table.column to alias.column.
	 *
	 * Using this method you can maintain SQL abstraction while using column aliases.
	 * <code>
	 *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
	 *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
	 * </code>
	 * @param      string $alias The alias for the current table.
	 * @param      string $column The column name for current table. (i.e. UserPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(UserPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	/**
	 * Add all the columns needed to create a new object.
	 *
	 * Note: any columns that were marked with lazyLoad="true" in the
	 * XML schema will not be added to the select list and only loaded
	 * on demand.
	 *
	 * @param      Criteria $criteria object containing the columns to add.
	 * @param      string   $alias    optional table alias
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function addSelectColumns(Criteria $criteria, $alias = null)
	{
		if (null === $alias) {
			$criteria->addSelectColumn(UserPeer::ID);
			$criteria->addSelectColumn(UserPeer::EMAIL);
			$criteria->addSelectColumn(UserPeer::PASSWORD_HASH);
			$criteria->addSelectColumn(UserPeer::PASSWORD_RESET_HASH);
			$criteria->addSelectColumn(UserPeer::COMPANY_DESCRIPTION);
			$criteria->addSelectColumn(UserPeer::COMPANY_URL);
			$criteria->addSelectColumn(UserPeer::COMPANY_NAME);
			$criteria->addSelectColumn(UserPeer::JOB_TITLE);
			$criteria->addSelectColumn(UserPeer::GENDER);
			$criteria->addSelectColumn(UserPeer::FNAME);
			$criteria->addSelectColumn(UserPeer::LNAME);
			$criteria->addSelectColumn(UserPeer::ADDRESSLINE1);
			$criteria->addSelectColumn(UserPeer::ADDRESSLINE2);
			$criteria->addSelectColumn(UserPeer::CITY);
			$criteria->addSelectColumn(UserPeer::STATE);
			$criteria->addSelectColumn(UserPeer::POSTCODE);
			$criteria->addSelectColumn(UserPeer::COUNTRY);
			$criteria->addSelectColumn(UserPeer::TELEPHONE);
			$criteria->addSelectColumn(UserPeer::FAX);
			$criteria->addSelectColumn(UserPeer::IS_ACTIVE);
			$criteria->addSelectColumn(UserPeer::IS_AFFILIATE);
			$criteria->addSelectColumn(UserPeer::REFERRAL_ID);
			$criteria->addSelectColumn(UserPeer::REFERRAL);
			$criteria->addSelectColumn(UserPeer::ADVERTISING_TIMELINE);
			$criteria->addSelectColumn(UserPeer::MONTHLY_BUDGET);
			$criteria->addSelectColumn(UserPeer::PRIMARY_TARGET);
			$criteria->addSelectColumn(UserPeer::ADVERTISING_OBJECTIVE);
			$criteria->addSelectColumn(UserPeer::ADDITIONAL_INFORMATION);
			$criteria->addSelectColumn(UserPeer::IS_EMAIL_VERIFIED);
			$criteria->addSelectColumn(UserPeer::IS_PREMIUM);
			$criteria->addSelectColumn(UserPeer::LAST_LOGIN_DATE);
			$criteria->addSelectColumn(UserPeer::DATE_CREATED);
			$criteria->addSelectColumn(UserPeer::DATE_EXPIRES);
			$criteria->addSelectColumn(UserPeer::DATE_MODIFIED);
			$criteria->addSelectColumn(UserPeer::REMOTE_ADDR_CREATED);
			$criteria->addSelectColumn(UserPeer::REMOTE_ADDR_MODIFIED);
		} else {
			$criteria->addSelectColumn($alias . '.ID');
			$criteria->addSelectColumn($alias . '.EMAIL');
			$criteria->addSelectColumn($alias . '.PASSWORD_HASH');
			$criteria->addSelectColumn($alias . '.PASSWORD_RESET_HASH');
			$criteria->addSelectColumn($alias . '.COMPANY_DESCRIPTION');
			$criteria->addSelectColumn($alias . '.COMPANY_URL');
			$criteria->addSelectColumn($alias . '.COMPANY_NAME');
			$criteria->addSelectColumn($alias . '.JOB_TITLE');
			$criteria->addSelectColumn($alias . '.GENDER');
			$criteria->addSelectColumn($alias . '.FNAME');
			$criteria->addSelectColumn($alias . '.LNAME');
			$criteria->addSelectColumn($alias . '.ADDRESSLINE1');
			$criteria->addSelectColumn($alias . '.ADDRESSLINE2');
			$criteria->addSelectColumn($alias . '.CITY');
			$criteria->addSelectColumn($alias . '.STATE');
			$criteria->addSelectColumn($alias . '.POSTCODE');
			$criteria->addSelectColumn($alias . '.COUNTRY');
			$criteria->addSelectColumn($alias . '.TELEPHONE');
			$criteria->addSelectColumn($alias . '.FAX');
			$criteria->addSelectColumn($alias . '.IS_ACTIVE');
			$criteria->addSelectColumn($alias . '.IS_AFFILIATE');
			$criteria->addSelectColumn($alias . '.REFERRAL_ID');
			$criteria->addSelectColumn($alias . '.REFERRAL');
			$criteria->addSelectColumn($alias . '.ADVERTISING_TIMELINE');
			$criteria->addSelectColumn($alias . '.MONTHLY_BUDGET');
			$criteria->addSelectColumn($alias . '.PRIMARY_TARGET');
			$criteria->addSelectColumn($alias . '.ADVERTISING_OBJECTIVE');
			$criteria->addSelectColumn($alias . '.ADDITIONAL_INFORMATION');
			$criteria->addSelectColumn($alias . '.IS_EMAIL_VERIFIED');
			$criteria->addSelectColumn($alias . '.IS_PREMIUM');
			$criteria->addSelectColumn($alias . '.LAST_LOGIN_DATE');
			$criteria->addSelectColumn($alias . '.DATE_CREATED');
			$criteria->addSelectColumn($alias . '.DATE_EXPIRES');
			$criteria->addSelectColumn($alias . '.DATE_MODIFIED');
			$criteria->addSelectColumn($alias . '.REMOTE_ADDR_CREATED');
			$criteria->addSelectColumn($alias . '.REMOTE_ADDR_MODIFIED');
		}
	}

	/**
	 * Returns the number of rows matching criteria.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @return     int Number of matching rows.
	 */
	public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
	{
		// we may modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(UserPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			UserPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		// BasePeer returns a PDOStatement
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}
	/**
	 * Method to select one object from the DB.
	 *
	 * @param      Criteria $criteria object used to create the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     User
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = UserPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	/**
	 * Method to do selects.
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     array Array of selected Objects
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelect(Criteria $criteria, PropelPDO $con = null)
	{
		return UserPeer::populateObjects(UserPeer::doSelectStmt($criteria, $con));
	}
	/**
	 * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
	 *
	 * Use this method directly if you want to work with an executed statement durirectly (for example
	 * to perform your own object hydration).
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con The connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     PDOStatement The executed PDOStatement object.
	 * @see        BasePeer::doSelect()
	 */
	public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			UserPeer::addSelectColumns($criteria);
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		// BasePeer returns a PDOStatement
		return BasePeer::doSelect($criteria, $con);
	}
	/**
	 * Adds an object to the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doSelect*()
	 * methods in your stub classes -- you may need to explicitly add objects
	 * to the cache in order to ensure that the same objects are always returned by doSelect*()
	 * and retrieveByPK*() calls.
	 *
	 * @param      User $value A User object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(User $obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getId();
			} // if key === null
			self::$instances[$key] = $obj;
		}
	}

	/**
	 * Removes an object from the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doDelete
	 * methods in your stub classes -- you may need to explicitly remove objects
	 * from the cache in order to prevent returning objects that no longer exist.
	 *
	 * @param      mixed $value A User object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof User) {
				$key = (string) $value->getId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or User object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
				throw $e;
			}

			unset(self::$instances[$key]);
		}
	} // removeInstanceFromPool()

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
	 * @return     User Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
	 * @see        getPrimaryKeyHash()
	 */
	public static function getInstanceFromPool($key)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if (isset(self::$instances[$key])) {
				return self::$instances[$key];
			}
		}
		return null; // just to be explicit
	}
	
	/**
	 * Clear the instance pool.
	 *
	 * @return     void
	 */
	public static function clearInstancePool()
	{
		self::$instances = array();
	}
	
	/**
	 * Method to invalidate the instance pool of all tables related to user
	 * by a foreign key with ON DELETE CASCADE
	 */
	public static function clearRelatedInstancePool()
	{
	}

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     string A string version of PK or NULL if the components of primary key in result array are all null.
	 */
	public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
	{
		// If the PK cannot be derived from the row, return NULL.
		if ($row[$startcol] === null) {
			return null;
		}
		return (string) $row[$startcol];
	}

	/**
	 * Retrieves the primary key from the DB resultset row 
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, an array of the primary key columns will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     mixed The primary key of the row
	 */
	public static function getPrimaryKeyFromRow($row, $startcol = 0)
	{
		return (int) $row[$startcol];
	}
	
	/**
	 * The returned array will contain objects of the default type or
	 * objects that inherit from the default.
	 *
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function populateObjects(PDOStatement $stmt)
	{
		$results = array();
	
		// set the class once to avoid overhead in the loop
		$cls = UserPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = UserPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = UserPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				UserPeer::addInstanceToPool($obj, $key);
			} // if key exists
		}
		$stmt->closeCursor();
		return $results;
	}
	/**
	 * Populates an object of the default type or an object that inherit from the default.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     array (User object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = UserPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = UserPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + UserPeer::NUM_COLUMNS;
		} else {
			$cls = UserPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			UserPeer::addInstanceToPool($obj, $key);
		}
		return array($obj, $col);
	}
	/**
	 * Returns the TableMap related to this peer.
	 * This method is not needed for general use but a specific application could have a need.
	 * @return     TableMap
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	/**
	 * Add a TableMap instance to the database for this peer class.
	 */
	public static function buildTableMap()
	{
	  $dbMap = Propel::getDatabaseMap(BaseUserPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseUserPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new UserTableMap());
	  }
	}

	/**
	 * The class that the Peer will make instances of.
	 *
	 * If $withPrefix is true, the returned path
	 * uses a dot-path notation which is tranalted into a path
	 * relative to a location on the PHP include_path.
	 * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
	 *
	 * @param      boolean $withPrefix Whether or not to return the path with the class name
	 * @return     string path.to.ClassName
	 */
	public static function getOMClass($withPrefix = true)
	{
		return $withPrefix ? UserPeer::CLASS_DEFAULT : UserPeer::OM_CLASS;
	}

	/**
	 * Method perform an INSERT on the database, given a User or Criteria object.
	 *
	 * @param      mixed $values Criteria or User object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from User object
		}

		if ($criteria->containsKey(UserPeer::ID) && $criteria->keyContainsValue(UserPeer::ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.UserPeer::ID.')');
		}


		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		try {
			// use transaction because $criteria could contain info
			// for more than one table (I guess, conceivably)
			$con->beginTransaction();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollBack();
			throw $e;
		}

		return $pk;
	}

	/**
	 * Method perform an UPDATE on the database, given a User or Criteria object.
	 *
	 * @param      mixed $values Criteria or User object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(UserPeer::ID);
			$value = $criteria->remove(UserPeer::ID);
			if ($value) {
				$selectCriteria->add(UserPeer::ID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(UserPeer::TABLE_NAME);
			}

		} else { // $values is User object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Method to DELETE all rows from the user table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(UserPeer::TABLE_NAME, $con, UserPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			UserPeer::clearInstancePool();
			UserPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a User or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or User object or primary key or array of primary keys
	 *              which is used to create the DELETE statement
	 * @param      PropelPDO $con the connection to use
	 * @return     int 	The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
	 *				if supported by native driver or if emulated using Propel.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	 public static function doDelete($values, PropelPDO $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			UserPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof User) { // it's a model object
			// invalidate the cache for this single object
			UserPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(UserPeer::ID, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				UserPeer::removeInstanceFromPool($singleval);
			}
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; // initialize var to track total num of affected rows

		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			UserPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given User object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      User $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(User $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(UserPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(UserPeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach ($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		}

		return BasePeer::doValidate(UserPeer::DATABASE_NAME, UserPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     User
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = UserPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(UserPeer::DATABASE_NAME);
		$criteria->add(UserPeer::ID, $pk);

		$v = UserPeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	/**
	 * Retrieve multiple objects by pkey.
	 *
	 * @param      array $pks List of primary keys
	 * @param      PropelPDO $con the connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function retrieveByPKs($pks, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(UserPeer::DATABASE_NAME);
			$criteria->add(UserPeer::ID, $pks, Criteria::IN);
			$objs = UserPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseUserPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseUserPeer::buildTableMap();

