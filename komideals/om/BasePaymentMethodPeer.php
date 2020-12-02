<?php


/**
 * Base static class for performing query and update operations on the 'payment_method' table.
 *
 * 
 *
 * @package    propel.generator.komideals.om
 */
abstract class BasePaymentMethodPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'komideals';

	/** the table name for this class */
	const TABLE_NAME = 'payment_method';

	/** the related Propel class for this table */
	const OM_CLASS = 'PaymentMethod';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'komideals.PaymentMethod';

	/** the related TableMap class for this table */
	const TM_CLASS = 'PaymentMethodTableMap';
	
	/** The total number of columns. */
	const NUM_COLUMNS = 19;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the ID field */
	const ID = 'payment_method.ID';

	/** the column name for the USER_ID field */
	const USER_ID = 'payment_method.USER_ID';

	/** the column name for the TYPE field */
	const TYPE = 'payment_method.TYPE';

	/** the column name for the NUMBER_ENC field */
	const NUMBER_ENC = 'payment_method.NUMBER_ENC';

	/** the column name for the NUMBER_LAST_FOUR field */
	const NUMBER_LAST_FOUR = 'payment_method.NUMBER_LAST_FOUR';

	/** the column name for the CCV field */
	const CCV = 'payment_method.CCV';

	/** the column name for the NAME field */
	const NAME = 'payment_method.NAME';

	/** the column name for the ADDRESSLINE1 field */
	const ADDRESSLINE1 = 'payment_method.ADDRESSLINE1';

	/** the column name for the ADDRESSLINE2 field */
	const ADDRESSLINE2 = 'payment_method.ADDRESSLINE2';

	/** the column name for the CITY field */
	const CITY = 'payment_method.CITY';

	/** the column name for the STATE field */
	const STATE = 'payment_method.STATE';

	/** the column name for the POSTCODE field */
	const POSTCODE = 'payment_method.POSTCODE';

	/** the column name for the EXPIRATION_MONTH field */
	const EXPIRATION_MONTH = 'payment_method.EXPIRATION_MONTH';

	/** the column name for the EXPIRATION_YEAR field */
	const EXPIRATION_YEAR = 'payment_method.EXPIRATION_YEAR';

	/** the column name for the TELEPHONE_DAY field */
	const TELEPHONE_DAY = 'payment_method.TELEPHONE_DAY';

	/** the column name for the TELEPHONE_EVE field */
	const TELEPHONE_EVE = 'payment_method.TELEPHONE_EVE';

	/** the column name for the IS_ACTIVE field */
	const IS_ACTIVE = 'payment_method.IS_ACTIVE';

	/** the column name for the DATE_CREATED field */
	const DATE_CREATED = 'payment_method.DATE_CREATED';

	/** the column name for the REMOTE_ADDR field */
	const REMOTE_ADDR = 'payment_method.REMOTE_ADDR';

	/**
	 * An identiy map to hold any loaded instances of PaymentMethod objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array PaymentMethod[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'UserId', 'Type', 'NumberEnc', 'NumberLastFour', 'Ccv', 'Name', 'Addressline1', 'Addressline2', 'City', 'State', 'Postcode', 'ExpirationMonth', 'ExpirationYear', 'TelephoneDay', 'TelephoneEve', 'IsActive', 'DateCreated', 'RemoteAddr', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'userId', 'type', 'numberEnc', 'numberLastFour', 'ccv', 'name', 'addressline1', 'addressline2', 'city', 'state', 'postcode', 'expirationMonth', 'expirationYear', 'telephoneDay', 'telephoneEve', 'isActive', 'dateCreated', 'remoteAddr', ),
		BasePeer::TYPE_COLNAME => array (self::ID, self::USER_ID, self::TYPE, self::NUMBER_ENC, self::NUMBER_LAST_FOUR, self::CCV, self::NAME, self::ADDRESSLINE1, self::ADDRESSLINE2, self::CITY, self::STATE, self::POSTCODE, self::EXPIRATION_MONTH, self::EXPIRATION_YEAR, self::TELEPHONE_DAY, self::TELEPHONE_EVE, self::IS_ACTIVE, self::DATE_CREATED, self::REMOTE_ADDR, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID', 'USER_ID', 'TYPE', 'NUMBER_ENC', 'NUMBER_LAST_FOUR', 'CCV', 'NAME', 'ADDRESSLINE1', 'ADDRESSLINE2', 'CITY', 'STATE', 'POSTCODE', 'EXPIRATION_MONTH', 'EXPIRATION_YEAR', 'TELEPHONE_DAY', 'TELEPHONE_EVE', 'IS_ACTIVE', 'DATE_CREATED', 'REMOTE_ADDR', ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'user_id', 'type', 'number_enc', 'number_last_four', 'ccv', 'name', 'addressline1', 'addressline2', 'city', 'state', 'postcode', 'expiration_month', 'expiration_year', 'telephone_day', 'telephone_eve', 'is_active', 'date_created', 'remote_addr', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'UserId' => 1, 'Type' => 2, 'NumberEnc' => 3, 'NumberLastFour' => 4, 'Ccv' => 5, 'Name' => 6, 'Addressline1' => 7, 'Addressline2' => 8, 'City' => 9, 'State' => 10, 'Postcode' => 11, 'ExpirationMonth' => 12, 'ExpirationYear' => 13, 'TelephoneDay' => 14, 'TelephoneEve' => 15, 'IsActive' => 16, 'DateCreated' => 17, 'RemoteAddr' => 18, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'userId' => 1, 'type' => 2, 'numberEnc' => 3, 'numberLastFour' => 4, 'ccv' => 5, 'name' => 6, 'addressline1' => 7, 'addressline2' => 8, 'city' => 9, 'state' => 10, 'postcode' => 11, 'expirationMonth' => 12, 'expirationYear' => 13, 'telephoneDay' => 14, 'telephoneEve' => 15, 'isActive' => 16, 'dateCreated' => 17, 'remoteAddr' => 18, ),
		BasePeer::TYPE_COLNAME => array (self::ID => 0, self::USER_ID => 1, self::TYPE => 2, self::NUMBER_ENC => 3, self::NUMBER_LAST_FOUR => 4, self::CCV => 5, self::NAME => 6, self::ADDRESSLINE1 => 7, self::ADDRESSLINE2 => 8, self::CITY => 9, self::STATE => 10, self::POSTCODE => 11, self::EXPIRATION_MONTH => 12, self::EXPIRATION_YEAR => 13, self::TELEPHONE_DAY => 14, self::TELEPHONE_EVE => 15, self::IS_ACTIVE => 16, self::DATE_CREATED => 17, self::REMOTE_ADDR => 18, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'USER_ID' => 1, 'TYPE' => 2, 'NUMBER_ENC' => 3, 'NUMBER_LAST_FOUR' => 4, 'CCV' => 5, 'NAME' => 6, 'ADDRESSLINE1' => 7, 'ADDRESSLINE2' => 8, 'CITY' => 9, 'STATE' => 10, 'POSTCODE' => 11, 'EXPIRATION_MONTH' => 12, 'EXPIRATION_YEAR' => 13, 'TELEPHONE_DAY' => 14, 'TELEPHONE_EVE' => 15, 'IS_ACTIVE' => 16, 'DATE_CREATED' => 17, 'REMOTE_ADDR' => 18, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'user_id' => 1, 'type' => 2, 'number_enc' => 3, 'number_last_four' => 4, 'ccv' => 5, 'name' => 6, 'addressline1' => 7, 'addressline2' => 8, 'city' => 9, 'state' => 10, 'postcode' => 11, 'expiration_month' => 12, 'expiration_year' => 13, 'telephone_day' => 14, 'telephone_eve' => 15, 'is_active' => 16, 'date_created' => 17, 'remote_addr' => 18, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
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
	 * @param      string $column The column name for current table. (i.e. PaymentMethodPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(PaymentMethodPeer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(PaymentMethodPeer::ID);
			$criteria->addSelectColumn(PaymentMethodPeer::USER_ID);
			$criteria->addSelectColumn(PaymentMethodPeer::TYPE);
			$criteria->addSelectColumn(PaymentMethodPeer::NUMBER_ENC);
			$criteria->addSelectColumn(PaymentMethodPeer::NUMBER_LAST_FOUR);
			$criteria->addSelectColumn(PaymentMethodPeer::CCV);
			$criteria->addSelectColumn(PaymentMethodPeer::NAME);
			$criteria->addSelectColumn(PaymentMethodPeer::ADDRESSLINE1);
			$criteria->addSelectColumn(PaymentMethodPeer::ADDRESSLINE2);
			$criteria->addSelectColumn(PaymentMethodPeer::CITY);
			$criteria->addSelectColumn(PaymentMethodPeer::STATE);
			$criteria->addSelectColumn(PaymentMethodPeer::POSTCODE);
			$criteria->addSelectColumn(PaymentMethodPeer::EXPIRATION_MONTH);
			$criteria->addSelectColumn(PaymentMethodPeer::EXPIRATION_YEAR);
			$criteria->addSelectColumn(PaymentMethodPeer::TELEPHONE_DAY);
			$criteria->addSelectColumn(PaymentMethodPeer::TELEPHONE_EVE);
			$criteria->addSelectColumn(PaymentMethodPeer::IS_ACTIVE);
			$criteria->addSelectColumn(PaymentMethodPeer::DATE_CREATED);
			$criteria->addSelectColumn(PaymentMethodPeer::REMOTE_ADDR);
		} else {
			$criteria->addSelectColumn($alias . '.ID');
			$criteria->addSelectColumn($alias . '.USER_ID');
			$criteria->addSelectColumn($alias . '.TYPE');
			$criteria->addSelectColumn($alias . '.NUMBER_ENC');
			$criteria->addSelectColumn($alias . '.NUMBER_LAST_FOUR');
			$criteria->addSelectColumn($alias . '.CCV');
			$criteria->addSelectColumn($alias . '.NAME');
			$criteria->addSelectColumn($alias . '.ADDRESSLINE1');
			$criteria->addSelectColumn($alias . '.ADDRESSLINE2');
			$criteria->addSelectColumn($alias . '.CITY');
			$criteria->addSelectColumn($alias . '.STATE');
			$criteria->addSelectColumn($alias . '.POSTCODE');
			$criteria->addSelectColumn($alias . '.EXPIRATION_MONTH');
			$criteria->addSelectColumn($alias . '.EXPIRATION_YEAR');
			$criteria->addSelectColumn($alias . '.TELEPHONE_DAY');
			$criteria->addSelectColumn($alias . '.TELEPHONE_EVE');
			$criteria->addSelectColumn($alias . '.IS_ACTIVE');
			$criteria->addSelectColumn($alias . '.DATE_CREATED');
			$criteria->addSelectColumn($alias . '.REMOTE_ADDR');
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
		$criteria->setPrimaryTableName(PaymentMethodPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			PaymentMethodPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(PaymentMethodPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     PaymentMethod
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = PaymentMethodPeer::doSelect($critcopy, $con);
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
		return PaymentMethodPeer::populateObjects(PaymentMethodPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(PaymentMethodPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			PaymentMethodPeer::addSelectColumns($criteria);
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
	 * @param      PaymentMethod $value A PaymentMethod object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(PaymentMethod $obj, $key = null)
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
	 * @param      mixed $value A PaymentMethod object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof PaymentMethod) {
				$key = (string) $value->getId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or PaymentMethod object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     PaymentMethod Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to payment_method
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
		$cls = PaymentMethodPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = PaymentMethodPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = PaymentMethodPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				PaymentMethodPeer::addInstanceToPool($obj, $key);
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
	 * @return     array (PaymentMethod object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = PaymentMethodPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = PaymentMethodPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + PaymentMethodPeer::NUM_COLUMNS;
		} else {
			$cls = PaymentMethodPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			PaymentMethodPeer::addInstanceToPool($obj, $key);
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
		$criteria->setPrimaryTableName(PaymentMethodPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			PaymentMethodPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(PaymentMethodPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(PaymentMethodPeer::USER_ID, UserPeer::ID, $join_behavior);

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
	 * Selects a collection of PaymentMethod objects pre-filled with their User objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of PaymentMethod objects.
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

		PaymentMethodPeer::addSelectColumns($criteria);
		$startcol = (PaymentMethodPeer::NUM_COLUMNS - PaymentMethodPeer::NUM_LAZY_LOAD_COLUMNS);
		UserPeer::addSelectColumns($criteria);

		$criteria->addJoin(PaymentMethodPeer::USER_ID, UserPeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = PaymentMethodPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = PaymentMethodPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = PaymentMethodPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				PaymentMethodPeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (PaymentMethod) to $obj2 (User)
				$obj2->addPaymentMethod($obj1);

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
		$criteria->setPrimaryTableName(PaymentMethodPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			PaymentMethodPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(PaymentMethodPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(PaymentMethodPeer::USER_ID, UserPeer::ID, $join_behavior);

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
	 * Selects a collection of PaymentMethod objects pre-filled with all related objects.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of PaymentMethod objects.
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

		PaymentMethodPeer::addSelectColumns($criteria);
		$startcol2 = (PaymentMethodPeer::NUM_COLUMNS - PaymentMethodPeer::NUM_LAZY_LOAD_COLUMNS);

		UserPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + (UserPeer::NUM_COLUMNS - UserPeer::NUM_LAZY_LOAD_COLUMNS);

		$criteria->addJoin(PaymentMethodPeer::USER_ID, UserPeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = PaymentMethodPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = PaymentMethodPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = PaymentMethodPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				PaymentMethodPeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (PaymentMethod) to the collection in $obj2 (User)
				$obj2->addPaymentMethod($obj1);
			} // if joined row not null

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
	  $dbMap = Propel::getDatabaseMap(BasePaymentMethodPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BasePaymentMethodPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new PaymentMethodTableMap());
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
		return $withPrefix ? PaymentMethodPeer::CLASS_DEFAULT : PaymentMethodPeer::OM_CLASS;
	}

	/**
	 * Method perform an INSERT on the database, given a PaymentMethod or Criteria object.
	 *
	 * @param      mixed $values Criteria or PaymentMethod object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(PaymentMethodPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from PaymentMethod object
		}

		if ($criteria->containsKey(PaymentMethodPeer::ID) && $criteria->keyContainsValue(PaymentMethodPeer::ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.PaymentMethodPeer::ID.')');
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
	 * Method perform an UPDATE on the database, given a PaymentMethod or Criteria object.
	 *
	 * @param      mixed $values Criteria or PaymentMethod object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(PaymentMethodPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(PaymentMethodPeer::ID);
			$value = $criteria->remove(PaymentMethodPeer::ID);
			if ($value) {
				$selectCriteria->add(PaymentMethodPeer::ID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(PaymentMethodPeer::TABLE_NAME);
			}

		} else { // $values is PaymentMethod object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Method to DELETE all rows from the payment_method table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(PaymentMethodPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(PaymentMethodPeer::TABLE_NAME, $con, PaymentMethodPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			PaymentMethodPeer::clearInstancePool();
			PaymentMethodPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a PaymentMethod or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or PaymentMethod object or primary key or array of primary keys
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
			$con = Propel::getConnection(PaymentMethodPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			PaymentMethodPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof PaymentMethod) { // it's a model object
			// invalidate the cache for this single object
			PaymentMethodPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(PaymentMethodPeer::ID, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				PaymentMethodPeer::removeInstanceFromPool($singleval);
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
			PaymentMethodPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given PaymentMethod object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      PaymentMethod $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(PaymentMethod $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(PaymentMethodPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(PaymentMethodPeer::TABLE_NAME);

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

		return BasePeer::doValidate(PaymentMethodPeer::DATABASE_NAME, PaymentMethodPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     PaymentMethod
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = PaymentMethodPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(PaymentMethodPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(PaymentMethodPeer::DATABASE_NAME);
		$criteria->add(PaymentMethodPeer::ID, $pk);

		$v = PaymentMethodPeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(PaymentMethodPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(PaymentMethodPeer::DATABASE_NAME);
			$criteria->add(PaymentMethodPeer::ID, $pks, Criteria::IN);
			$objs = PaymentMethodPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BasePaymentMethodPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BasePaymentMethodPeer::buildTableMap();

