<?php


/**
 * Base static class for performing query and update operations on the 'affiliate_payment' table.
 *
 * 
 *
 * @package    propel.generator.sigfly.om
 */
abstract class BaseAffiliatePaymentPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'sigfly';

	/** the table name for this class */
	const TABLE_NAME = 'affiliate_payment';

	/** the related Propel class for this table */
	const OM_CLASS = 'AffiliatePayment';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'sigfly.AffiliatePayment';

	/** the related TableMap class for this table */
	const TM_CLASS = 'AffiliatePaymentTableMap';
	
	/** The total number of columns. */
	const NUM_COLUMNS = 23;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the ID field */
	const ID = 'affiliate_payment.ID';

	/** the column name for the USER_ID field */
	const USER_ID = 'affiliate_payment.USER_ID';

	/** the column name for the BUSINESS_ID field */
	const BUSINESS_ID = 'affiliate_payment.BUSINESS_ID';

	/** the column name for the COMPANY_NAME field */
	const COMPANY_NAME = 'affiliate_payment.COMPANY_NAME';

	/** the column name for the ADDRESSLINE1 field */
	const ADDRESSLINE1 = 'affiliate_payment.ADDRESSLINE1';

	/** the column name for the ADDRESSLINE2 field */
	const ADDRESSLINE2 = 'affiliate_payment.ADDRESSLINE2';

	/** the column name for the CITY field */
	const CITY = 'affiliate_payment.CITY';

	/** the column name for the STATE field */
	const STATE = 'affiliate_payment.STATE';

	/** the column name for the POSTCODE field */
	const POSTCODE = 'affiliate_payment.POSTCODE';

	/** the column name for the COUNTRY field */
	const COUNTRY = 'affiliate_payment.COUNTRY';

	/** the column name for the TELEPHONE field */
	const TELEPHONE = 'affiliate_payment.TELEPHONE';

	/** the column name for the FAX field */
	const FAX = 'affiliate_payment.FAX';

	/** the column name for the IS_ACTIVE field */
	const IS_ACTIVE = 'affiliate_payment.IS_ACTIVE';

	/** the column name for the IS_CLEARED field */
	const IS_CLEARED = 'affiliate_payment.IS_CLEARED';

	/** the column name for the DATE_CREATED field */
	const DATE_CREATED = 'affiliate_payment.DATE_CREATED';

	/** the column name for the DATE_EXPIRES field */
	const DATE_EXPIRES = 'affiliate_payment.DATE_EXPIRES';

	/** the column name for the DATE_MODIFIED field */
	const DATE_MODIFIED = 'affiliate_payment.DATE_MODIFIED';

	/** the column name for the DATE_CLEARED field */
	const DATE_CLEARED = 'affiliate_payment.DATE_CLEARED';

	/** the column name for the REMOTE_ADDR_CREATED field */
	const REMOTE_ADDR_CREATED = 'affiliate_payment.REMOTE_ADDR_CREATED';

	/** the column name for the REMOTE_ADDR_MODIFIED field */
	const REMOTE_ADDR_MODIFIED = 'affiliate_payment.REMOTE_ADDR_MODIFIED';

	/** the column name for the AMOUNT field */
	const AMOUNT = 'affiliate_payment.AMOUNT';

	/** the column name for the CHECK_NUMBER field */
	const CHECK_NUMBER = 'affiliate_payment.CHECK_NUMBER';

	/** the column name for the TRANSACTION_ID field */
	const TRANSACTION_ID = 'affiliate_payment.TRANSACTION_ID';

	/**
	 * An identiy map to hold any loaded instances of AffiliatePayment objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array AffiliatePayment[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'UserId', 'BusinessId', 'CompanyName', 'Addressline1', 'Addressline2', 'City', 'State', 'Postcode', 'Country', 'Telephone', 'Fax', 'IsActive', 'IsCleared', 'DateCreated', 'DateExpires', 'DateModified', 'DateCleared', 'RemoteAddrCreated', 'RemoteAddrModified', 'Amount', 'CheckNumber', 'TransactionId', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'userId', 'businessId', 'companyName', 'addressline1', 'addressline2', 'city', 'state', 'postcode', 'country', 'telephone', 'fax', 'isActive', 'isCleared', 'dateCreated', 'dateExpires', 'dateModified', 'dateCleared', 'remoteAddrCreated', 'remoteAddrModified', 'amount', 'checkNumber', 'transactionId', ),
		BasePeer::TYPE_COLNAME => array (self::ID, self::USER_ID, self::BUSINESS_ID, self::COMPANY_NAME, self::ADDRESSLINE1, self::ADDRESSLINE2, self::CITY, self::STATE, self::POSTCODE, self::COUNTRY, self::TELEPHONE, self::FAX, self::IS_ACTIVE, self::IS_CLEARED, self::DATE_CREATED, self::DATE_EXPIRES, self::DATE_MODIFIED, self::DATE_CLEARED, self::REMOTE_ADDR_CREATED, self::REMOTE_ADDR_MODIFIED, self::AMOUNT, self::CHECK_NUMBER, self::TRANSACTION_ID, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID', 'USER_ID', 'BUSINESS_ID', 'COMPANY_NAME', 'ADDRESSLINE1', 'ADDRESSLINE2', 'CITY', 'STATE', 'POSTCODE', 'COUNTRY', 'TELEPHONE', 'FAX', 'IS_ACTIVE', 'IS_CLEARED', 'DATE_CREATED', 'DATE_EXPIRES', 'DATE_MODIFIED', 'DATE_CLEARED', 'REMOTE_ADDR_CREATED', 'REMOTE_ADDR_MODIFIED', 'AMOUNT', 'CHECK_NUMBER', 'TRANSACTION_ID', ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'user_id', 'business_id', 'company_name', 'addressline1', 'addressline2', 'city', 'state', 'postcode', 'country', 'telephone', 'fax', 'is_active', 'is_cleared', 'date_created', 'date_expires', 'date_modified', 'date_cleared', 'remote_addr_created', 'remote_addr_modified', 'amount', 'check_number', 'transaction_id', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'UserId' => 1, 'BusinessId' => 2, 'CompanyName' => 3, 'Addressline1' => 4, 'Addressline2' => 5, 'City' => 6, 'State' => 7, 'Postcode' => 8, 'Country' => 9, 'Telephone' => 10, 'Fax' => 11, 'IsActive' => 12, 'IsCleared' => 13, 'DateCreated' => 14, 'DateExpires' => 15, 'DateModified' => 16, 'DateCleared' => 17, 'RemoteAddrCreated' => 18, 'RemoteAddrModified' => 19, 'Amount' => 20, 'CheckNumber' => 21, 'TransactionId' => 22, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'userId' => 1, 'businessId' => 2, 'companyName' => 3, 'addressline1' => 4, 'addressline2' => 5, 'city' => 6, 'state' => 7, 'postcode' => 8, 'country' => 9, 'telephone' => 10, 'fax' => 11, 'isActive' => 12, 'isCleared' => 13, 'dateCreated' => 14, 'dateExpires' => 15, 'dateModified' => 16, 'dateCleared' => 17, 'remoteAddrCreated' => 18, 'remoteAddrModified' => 19, 'amount' => 20, 'checkNumber' => 21, 'transactionId' => 22, ),
		BasePeer::TYPE_COLNAME => array (self::ID => 0, self::USER_ID => 1, self::BUSINESS_ID => 2, self::COMPANY_NAME => 3, self::ADDRESSLINE1 => 4, self::ADDRESSLINE2 => 5, self::CITY => 6, self::STATE => 7, self::POSTCODE => 8, self::COUNTRY => 9, self::TELEPHONE => 10, self::FAX => 11, self::IS_ACTIVE => 12, self::IS_CLEARED => 13, self::DATE_CREATED => 14, self::DATE_EXPIRES => 15, self::DATE_MODIFIED => 16, self::DATE_CLEARED => 17, self::REMOTE_ADDR_CREATED => 18, self::REMOTE_ADDR_MODIFIED => 19, self::AMOUNT => 20, self::CHECK_NUMBER => 21, self::TRANSACTION_ID => 22, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'USER_ID' => 1, 'BUSINESS_ID' => 2, 'COMPANY_NAME' => 3, 'ADDRESSLINE1' => 4, 'ADDRESSLINE2' => 5, 'CITY' => 6, 'STATE' => 7, 'POSTCODE' => 8, 'COUNTRY' => 9, 'TELEPHONE' => 10, 'FAX' => 11, 'IS_ACTIVE' => 12, 'IS_CLEARED' => 13, 'DATE_CREATED' => 14, 'DATE_EXPIRES' => 15, 'DATE_MODIFIED' => 16, 'DATE_CLEARED' => 17, 'REMOTE_ADDR_CREATED' => 18, 'REMOTE_ADDR_MODIFIED' => 19, 'AMOUNT' => 20, 'CHECK_NUMBER' => 21, 'TRANSACTION_ID' => 22, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'user_id' => 1, 'business_id' => 2, 'company_name' => 3, 'addressline1' => 4, 'addressline2' => 5, 'city' => 6, 'state' => 7, 'postcode' => 8, 'country' => 9, 'telephone' => 10, 'fax' => 11, 'is_active' => 12, 'is_cleared' => 13, 'date_created' => 14, 'date_expires' => 15, 'date_modified' => 16, 'date_cleared' => 17, 'remote_addr_created' => 18, 'remote_addr_modified' => 19, 'amount' => 20, 'check_number' => 21, 'transaction_id' => 22, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
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
	 * @param      string $column The column name for current table. (i.e. AffiliatePaymentPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(AffiliatePaymentPeer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(AffiliatePaymentPeer::ID);
			$criteria->addSelectColumn(AffiliatePaymentPeer::USER_ID);
			$criteria->addSelectColumn(AffiliatePaymentPeer::BUSINESS_ID);
			$criteria->addSelectColumn(AffiliatePaymentPeer::COMPANY_NAME);
			$criteria->addSelectColumn(AffiliatePaymentPeer::ADDRESSLINE1);
			$criteria->addSelectColumn(AffiliatePaymentPeer::ADDRESSLINE2);
			$criteria->addSelectColumn(AffiliatePaymentPeer::CITY);
			$criteria->addSelectColumn(AffiliatePaymentPeer::STATE);
			$criteria->addSelectColumn(AffiliatePaymentPeer::POSTCODE);
			$criteria->addSelectColumn(AffiliatePaymentPeer::COUNTRY);
			$criteria->addSelectColumn(AffiliatePaymentPeer::TELEPHONE);
			$criteria->addSelectColumn(AffiliatePaymentPeer::FAX);
			$criteria->addSelectColumn(AffiliatePaymentPeer::IS_ACTIVE);
			$criteria->addSelectColumn(AffiliatePaymentPeer::IS_CLEARED);
			$criteria->addSelectColumn(AffiliatePaymentPeer::DATE_CREATED);
			$criteria->addSelectColumn(AffiliatePaymentPeer::DATE_EXPIRES);
			$criteria->addSelectColumn(AffiliatePaymentPeer::DATE_MODIFIED);
			$criteria->addSelectColumn(AffiliatePaymentPeer::DATE_CLEARED);
			$criteria->addSelectColumn(AffiliatePaymentPeer::REMOTE_ADDR_CREATED);
			$criteria->addSelectColumn(AffiliatePaymentPeer::REMOTE_ADDR_MODIFIED);
			$criteria->addSelectColumn(AffiliatePaymentPeer::AMOUNT);
			$criteria->addSelectColumn(AffiliatePaymentPeer::CHECK_NUMBER);
			$criteria->addSelectColumn(AffiliatePaymentPeer::TRANSACTION_ID);
		} else {
			$criteria->addSelectColumn($alias . '.ID');
			$criteria->addSelectColumn($alias . '.USER_ID');
			$criteria->addSelectColumn($alias . '.BUSINESS_ID');
			$criteria->addSelectColumn($alias . '.COMPANY_NAME');
			$criteria->addSelectColumn($alias . '.ADDRESSLINE1');
			$criteria->addSelectColumn($alias . '.ADDRESSLINE2');
			$criteria->addSelectColumn($alias . '.CITY');
			$criteria->addSelectColumn($alias . '.STATE');
			$criteria->addSelectColumn($alias . '.POSTCODE');
			$criteria->addSelectColumn($alias . '.COUNTRY');
			$criteria->addSelectColumn($alias . '.TELEPHONE');
			$criteria->addSelectColumn($alias . '.FAX');
			$criteria->addSelectColumn($alias . '.IS_ACTIVE');
			$criteria->addSelectColumn($alias . '.IS_CLEARED');
			$criteria->addSelectColumn($alias . '.DATE_CREATED');
			$criteria->addSelectColumn($alias . '.DATE_EXPIRES');
			$criteria->addSelectColumn($alias . '.DATE_MODIFIED');
			$criteria->addSelectColumn($alias . '.DATE_CLEARED');
			$criteria->addSelectColumn($alias . '.REMOTE_ADDR_CREATED');
			$criteria->addSelectColumn($alias . '.REMOTE_ADDR_MODIFIED');
			$criteria->addSelectColumn($alias . '.AMOUNT');
			$criteria->addSelectColumn($alias . '.CHECK_NUMBER');
			$criteria->addSelectColumn($alias . '.TRANSACTION_ID');
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
		$criteria->setPrimaryTableName(AffiliatePaymentPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			AffiliatePaymentPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(AffiliatePaymentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     AffiliatePayment
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = AffiliatePaymentPeer::doSelect($critcopy, $con);
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
		return AffiliatePaymentPeer::populateObjects(AffiliatePaymentPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(AffiliatePaymentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			AffiliatePaymentPeer::addSelectColumns($criteria);
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
	 * @param      AffiliatePayment $value A AffiliatePayment object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(AffiliatePayment $obj, $key = null)
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
	 * @param      mixed $value A AffiliatePayment object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof AffiliatePayment) {
				$key = (string) $value->getId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or AffiliatePayment object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     AffiliatePayment Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to affiliate_payment
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
		$cls = AffiliatePaymentPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = AffiliatePaymentPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = AffiliatePaymentPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				AffiliatePaymentPeer::addInstanceToPool($obj, $key);
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
	 * @return     array (AffiliatePayment object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = AffiliatePaymentPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = AffiliatePaymentPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + AffiliatePaymentPeer::NUM_COLUMNS;
		} else {
			$cls = AffiliatePaymentPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			AffiliatePaymentPeer::addInstanceToPool($obj, $key);
		}
		return array($obj, $col);
	}

	/**
	 * Returns the number of rows matching criteria, joining the related User table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinUser(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(AffiliatePaymentPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			AffiliatePaymentPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(AffiliatePaymentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(AffiliatePaymentPeer::USER_ID, UserPeer::ID, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related Business table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinBusiness(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(AffiliatePaymentPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			AffiliatePaymentPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(AffiliatePaymentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(AffiliatePaymentPeer::BUSINESS_ID, BusinessPeer::ID, $join_behavior);

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
	 * Selects a collection of AffiliatePayment objects pre-filled with their User objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of AffiliatePayment objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinUser(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		AffiliatePaymentPeer::addSelectColumns($criteria);
		$startcol = (AffiliatePaymentPeer::NUM_COLUMNS - AffiliatePaymentPeer::NUM_LAZY_LOAD_COLUMNS);
		UserPeer::addSelectColumns($criteria);

		$criteria->addJoin(AffiliatePaymentPeer::USER_ID, UserPeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = AffiliatePaymentPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = AffiliatePaymentPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = AffiliatePaymentPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				AffiliatePaymentPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = UserPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = UserPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = UserPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					UserPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (AffiliatePayment) to $obj2 (User)
				$obj2->addAffiliatePayment($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of AffiliatePayment objects pre-filled with their Business objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of AffiliatePayment objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinBusiness(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		AffiliatePaymentPeer::addSelectColumns($criteria);
		$startcol = (AffiliatePaymentPeer::NUM_COLUMNS - AffiliatePaymentPeer::NUM_LAZY_LOAD_COLUMNS);
		BusinessPeer::addSelectColumns($criteria);

		$criteria->addJoin(AffiliatePaymentPeer::BUSINESS_ID, BusinessPeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = AffiliatePaymentPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = AffiliatePaymentPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = AffiliatePaymentPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				AffiliatePaymentPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = BusinessPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = BusinessPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = BusinessPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					BusinessPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (AffiliatePayment) to $obj2 (Business)
				$obj2->addAffiliatePayment($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Returns the number of rows matching criteria, joining all related tables
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(AffiliatePaymentPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			AffiliatePaymentPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(AffiliatePaymentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(AffiliatePaymentPeer::USER_ID, UserPeer::ID, $join_behavior);

		$criteria->addJoin(AffiliatePaymentPeer::BUSINESS_ID, BusinessPeer::ID, $join_behavior);

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
	 * Selects a collection of AffiliatePayment objects pre-filled with all related objects.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of AffiliatePayment objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		AffiliatePaymentPeer::addSelectColumns($criteria);
		$startcol2 = (AffiliatePaymentPeer::NUM_COLUMNS - AffiliatePaymentPeer::NUM_LAZY_LOAD_COLUMNS);

		UserPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + (UserPeer::NUM_COLUMNS - UserPeer::NUM_LAZY_LOAD_COLUMNS);

		BusinessPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + (BusinessPeer::NUM_COLUMNS - BusinessPeer::NUM_LAZY_LOAD_COLUMNS);

		$criteria->addJoin(AffiliatePaymentPeer::USER_ID, UserPeer::ID, $join_behavior);

		$criteria->addJoin(AffiliatePaymentPeer::BUSINESS_ID, BusinessPeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = AffiliatePaymentPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = AffiliatePaymentPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = AffiliatePaymentPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				AffiliatePaymentPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

			// Add objects for joined User rows

			$key2 = UserPeer::getPrimaryKeyHashFromRow($row, $startcol2);
			if ($key2 !== null) {
				$obj2 = UserPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = UserPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					UserPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 loaded

				// Add the $obj1 (AffiliatePayment) to the collection in $obj2 (User)
				$obj2->addAffiliatePayment($obj1);
			} // if joined row not null

			// Add objects for joined Business rows

			$key3 = BusinessPeer::getPrimaryKeyHashFromRow($row, $startcol3);
			if ($key3 !== null) {
				$obj3 = BusinessPeer::getInstanceFromPool($key3);
				if (!$obj3) {

					$cls = BusinessPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					BusinessPeer::addInstanceToPool($obj3, $key3);
				} // if obj3 loaded

				// Add the $obj1 (AffiliatePayment) to the collection in $obj3 (Business)
				$obj3->addAffiliatePayment($obj1);
			} // if joined row not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related User table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptUser(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(AffiliatePaymentPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			AffiliatePaymentPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(AffiliatePaymentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(AffiliatePaymentPeer::BUSINESS_ID, BusinessPeer::ID, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related Business table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptBusiness(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(AffiliatePaymentPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			AffiliatePaymentPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(AffiliatePaymentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(AffiliatePaymentPeer::USER_ID, UserPeer::ID, $join_behavior);

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
	 * Selects a collection of AffiliatePayment objects pre-filled with all related objects except User.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of AffiliatePayment objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptUser(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		AffiliatePaymentPeer::addSelectColumns($criteria);
		$startcol2 = (AffiliatePaymentPeer::NUM_COLUMNS - AffiliatePaymentPeer::NUM_LAZY_LOAD_COLUMNS);

		BusinessPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + (BusinessPeer::NUM_COLUMNS - BusinessPeer::NUM_LAZY_LOAD_COLUMNS);

		$criteria->addJoin(AffiliatePaymentPeer::BUSINESS_ID, BusinessPeer::ID, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = AffiliatePaymentPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = AffiliatePaymentPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = AffiliatePaymentPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				AffiliatePaymentPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined Business rows

				$key2 = BusinessPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = BusinessPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = BusinessPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					BusinessPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (AffiliatePayment) to the collection in $obj2 (Business)
				$obj2->addAffiliatePayment($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of AffiliatePayment objects pre-filled with all related objects except Business.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of AffiliatePayment objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptBusiness(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		AffiliatePaymentPeer::addSelectColumns($criteria);
		$startcol2 = (AffiliatePaymentPeer::NUM_COLUMNS - AffiliatePaymentPeer::NUM_LAZY_LOAD_COLUMNS);

		UserPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + (UserPeer::NUM_COLUMNS - UserPeer::NUM_LAZY_LOAD_COLUMNS);

		$criteria->addJoin(AffiliatePaymentPeer::USER_ID, UserPeer::ID, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = AffiliatePaymentPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = AffiliatePaymentPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = AffiliatePaymentPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				AffiliatePaymentPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined User rows

				$key2 = UserPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = UserPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = UserPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					UserPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (AffiliatePayment) to the collection in $obj2 (User)
				$obj2->addAffiliatePayment($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
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
	  $dbMap = Propel::getDatabaseMap(BaseAffiliatePaymentPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseAffiliatePaymentPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new AffiliatePaymentTableMap());
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
		return $withPrefix ? AffiliatePaymentPeer::CLASS_DEFAULT : AffiliatePaymentPeer::OM_CLASS;
	}

	/**
	 * Method perform an INSERT on the database, given a AffiliatePayment or Criteria object.
	 *
	 * @param      mixed $values Criteria or AffiliatePayment object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(AffiliatePaymentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from AffiliatePayment object
		}

		if ($criteria->containsKey(AffiliatePaymentPeer::ID) && $criteria->keyContainsValue(AffiliatePaymentPeer::ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.AffiliatePaymentPeer::ID.')');
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
	 * Method perform an UPDATE on the database, given a AffiliatePayment or Criteria object.
	 *
	 * @param      mixed $values Criteria or AffiliatePayment object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(AffiliatePaymentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(AffiliatePaymentPeer::ID);
			$value = $criteria->remove(AffiliatePaymentPeer::ID);
			if ($value) {
				$selectCriteria->add(AffiliatePaymentPeer::ID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(AffiliatePaymentPeer::TABLE_NAME);
			}

		} else { // $values is AffiliatePayment object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Method to DELETE all rows from the affiliate_payment table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(AffiliatePaymentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(AffiliatePaymentPeer::TABLE_NAME, $con, AffiliatePaymentPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			AffiliatePaymentPeer::clearInstancePool();
			AffiliatePaymentPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a AffiliatePayment or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or AffiliatePayment object or primary key or array of primary keys
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
			$con = Propel::getConnection(AffiliatePaymentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			AffiliatePaymentPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof AffiliatePayment) { // it's a model object
			// invalidate the cache for this single object
			AffiliatePaymentPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(AffiliatePaymentPeer::ID, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				AffiliatePaymentPeer::removeInstanceFromPool($singleval);
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
			AffiliatePaymentPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given AffiliatePayment object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      AffiliatePayment $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(AffiliatePayment $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(AffiliatePaymentPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(AffiliatePaymentPeer::TABLE_NAME);

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

		return BasePeer::doValidate(AffiliatePaymentPeer::DATABASE_NAME, AffiliatePaymentPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     AffiliatePayment
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = AffiliatePaymentPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(AffiliatePaymentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(AffiliatePaymentPeer::DATABASE_NAME);
		$criteria->add(AffiliatePaymentPeer::ID, $pk);

		$v = AffiliatePaymentPeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(AffiliatePaymentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(AffiliatePaymentPeer::DATABASE_NAME);
			$criteria->add(AffiliatePaymentPeer::ID, $pks, Criteria::IN);
			$objs = AffiliatePaymentPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseAffiliatePaymentPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseAffiliatePaymentPeer::buildTableMap();

