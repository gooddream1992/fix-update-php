<?php


/**
 * Base static class for performing query and update operations on the 'business' table.
 *
 * 
 *
 * @package    propel.generator.komideals.om
 */
abstract class BaseBusinessPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'komideals';

	/** the table name for this class */
	const TABLE_NAME = 'business';

	/** the related Propel class for this table */
	const OM_CLASS = 'Business';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'komideals.Business';

	/** the related TableMap class for this table */
	const TM_CLASS = 'BusinessTableMap';
	
	/** The total number of columns. */
	const NUM_COLUMNS = 23;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the ID field */
	const ID = 'business.ID';

	/** the column name for the EMAIL field */
	const EMAIL = 'business.EMAIL';

	/** the column name for the COMPANY_DESCRIPTION field */
	const COMPANY_DESCRIPTION = 'business.COMPANY_DESCRIPTION';

	/** the column name for the COMPANY_URL field */
	const COMPANY_URL = 'business.COMPANY_URL';

	/** the column name for the COMPANY_NAME field */
	const COMPANY_NAME = 'business.COMPANY_NAME';

	/** the column name for the ADDRESSLINE1 field */
	const ADDRESSLINE1 = 'business.ADDRESSLINE1';

	/** the column name for the ADDRESSLINE2 field */
	const ADDRESSLINE2 = 'business.ADDRESSLINE2';

	/** the column name for the CITY field */
	const CITY = 'business.CITY';

	/** the column name for the STATE field */
	const STATE = 'business.STATE';

	/** the column name for the POSTCODE field */
	const POSTCODE = 'business.POSTCODE';

	/** the column name for the COUNTRY field */
	const COUNTRY = 'business.COUNTRY';

	/** the column name for the TELEPHONE field */
	const TELEPHONE = 'business.TELEPHONE';

	/** the column name for the FAX field */
	const FAX = 'business.FAX';

	/** the column name for the IS_ACTIVE field */
	const IS_ACTIVE = 'business.IS_ACTIVE';

	/** the column name for the IS_PREMIUM field */
	const IS_PREMIUM = 'business.IS_PREMIUM';

	/** the column name for the DATE_CREATED field */
	const DATE_CREATED = 'business.DATE_CREATED';

	/** the column name for the DATE_EXPIRES field */
	const DATE_EXPIRES = 'business.DATE_EXPIRES';

	/** the column name for the DATE_MODIFIED field */
	const DATE_MODIFIED = 'business.DATE_MODIFIED';

	/** the column name for the REMOTE_ADDR_CREATED field */
	const REMOTE_ADDR_CREATED = 'business.REMOTE_ADDR_CREATED';

	/** the column name for the REMOTE_ADDR_MODIFIED field */
	const REMOTE_ADDR_MODIFIED = 'business.REMOTE_ADDR_MODIFIED';

	/** the column name for the PAYMENT_THRESHOLD field */
	const PAYMENT_THRESHOLD = 'business.PAYMENT_THRESHOLD';

	/** the column name for the TAX_ID_ENC field */
	const TAX_ID_ENC = 'business.TAX_ID_ENC';

	/** the column name for the TAX_ID_LAST_FOUR field */
	const TAX_ID_LAST_FOUR = 'business.TAX_ID_LAST_FOUR';

	/**
	 * An identiy map to hold any loaded instances of Business objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array Business[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Email', 'CompanyDescription', 'CompanyUrl', 'CompanyName', 'Addressline1', 'Addressline2', 'City', 'State', 'Postcode', 'Country', 'Telephone', 'Fax', 'IsActive', 'IsPremium', 'DateCreated', 'DateExpires', 'DateModified', 'RemoteAddrCreated', 'RemoteAddrModified', 'PaymentThreshold', 'TaxIdEnc', 'TaxIdLastFour', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'email', 'companyDescription', 'companyUrl', 'companyName', 'addressline1', 'addressline2', 'city', 'state', 'postcode', 'country', 'telephone', 'fax', 'isActive', 'isPremium', 'dateCreated', 'dateExpires', 'dateModified', 'remoteAddrCreated', 'remoteAddrModified', 'paymentThreshold', 'taxIdEnc', 'taxIdLastFour', ),
		BasePeer::TYPE_COLNAME => array (self::ID, self::EMAIL, self::COMPANY_DESCRIPTION, self::COMPANY_URL, self::COMPANY_NAME, self::ADDRESSLINE1, self::ADDRESSLINE2, self::CITY, self::STATE, self::POSTCODE, self::COUNTRY, self::TELEPHONE, self::FAX, self::IS_ACTIVE, self::IS_PREMIUM, self::DATE_CREATED, self::DATE_EXPIRES, self::DATE_MODIFIED, self::REMOTE_ADDR_CREATED, self::REMOTE_ADDR_MODIFIED, self::PAYMENT_THRESHOLD, self::TAX_ID_ENC, self::TAX_ID_LAST_FOUR, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID', 'EMAIL', 'COMPANY_DESCRIPTION', 'COMPANY_URL', 'COMPANY_NAME', 'ADDRESSLINE1', 'ADDRESSLINE2', 'CITY', 'STATE', 'POSTCODE', 'COUNTRY', 'TELEPHONE', 'FAX', 'IS_ACTIVE', 'IS_PREMIUM', 'DATE_CREATED', 'DATE_EXPIRES', 'DATE_MODIFIED', 'REMOTE_ADDR_CREATED', 'REMOTE_ADDR_MODIFIED', 'PAYMENT_THRESHOLD', 'TAX_ID_ENC', 'TAX_ID_LAST_FOUR', ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'email', 'company_description', 'company_url', 'company_name', 'addressline1', 'addressline2', 'city', 'state', 'postcode', 'country', 'telephone', 'fax', 'is_active', 'is_premium', 'date_created', 'date_expires', 'date_modified', 'remote_addr_created', 'remote_addr_modified', 'payment_threshold', 'tax_id_enc', 'tax_id_last_four', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Email' => 1, 'CompanyDescription' => 2, 'CompanyUrl' => 3, 'CompanyName' => 4, 'Addressline1' => 5, 'Addressline2' => 6, 'City' => 7, 'State' => 8, 'Postcode' => 9, 'Country' => 10, 'Telephone' => 11, 'Fax' => 12, 'IsActive' => 13, 'IsPremium' => 14, 'DateCreated' => 15, 'DateExpires' => 16, 'DateModified' => 17, 'RemoteAddrCreated' => 18, 'RemoteAddrModified' => 19, 'PaymentThreshold' => 20, 'TaxIdEnc' => 21, 'TaxIdLastFour' => 22, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'email' => 1, 'companyDescription' => 2, 'companyUrl' => 3, 'companyName' => 4, 'addressline1' => 5, 'addressline2' => 6, 'city' => 7, 'state' => 8, 'postcode' => 9, 'country' => 10, 'telephone' => 11, 'fax' => 12, 'isActive' => 13, 'isPremium' => 14, 'dateCreated' => 15, 'dateExpires' => 16, 'dateModified' => 17, 'remoteAddrCreated' => 18, 'remoteAddrModified' => 19, 'paymentThreshold' => 20, 'taxIdEnc' => 21, 'taxIdLastFour' => 22, ),
		BasePeer::TYPE_COLNAME => array (self::ID => 0, self::EMAIL => 1, self::COMPANY_DESCRIPTION => 2, self::COMPANY_URL => 3, self::COMPANY_NAME => 4, self::ADDRESSLINE1 => 5, self::ADDRESSLINE2 => 6, self::CITY => 7, self::STATE => 8, self::POSTCODE => 9, self::COUNTRY => 10, self::TELEPHONE => 11, self::FAX => 12, self::IS_ACTIVE => 13, self::IS_PREMIUM => 14, self::DATE_CREATED => 15, self::DATE_EXPIRES => 16, self::DATE_MODIFIED => 17, self::REMOTE_ADDR_CREATED => 18, self::REMOTE_ADDR_MODIFIED => 19, self::PAYMENT_THRESHOLD => 20, self::TAX_ID_ENC => 21, self::TAX_ID_LAST_FOUR => 22, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'EMAIL' => 1, 'COMPANY_DESCRIPTION' => 2, 'COMPANY_URL' => 3, 'COMPANY_NAME' => 4, 'ADDRESSLINE1' => 5, 'ADDRESSLINE2' => 6, 'CITY' => 7, 'STATE' => 8, 'POSTCODE' => 9, 'COUNTRY' => 10, 'TELEPHONE' => 11, 'FAX' => 12, 'IS_ACTIVE' => 13, 'IS_PREMIUM' => 14, 'DATE_CREATED' => 15, 'DATE_EXPIRES' => 16, 'DATE_MODIFIED' => 17, 'REMOTE_ADDR_CREATED' => 18, 'REMOTE_ADDR_MODIFIED' => 19, 'PAYMENT_THRESHOLD' => 20, 'TAX_ID_ENC' => 21, 'TAX_ID_LAST_FOUR' => 22, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'email' => 1, 'company_description' => 2, 'company_url' => 3, 'company_name' => 4, 'addressline1' => 5, 'addressline2' => 6, 'city' => 7, 'state' => 8, 'postcode' => 9, 'country' => 10, 'telephone' => 11, 'fax' => 12, 'is_active' => 13, 'is_premium' => 14, 'date_created' => 15, 'date_expires' => 16, 'date_modified' => 17, 'remote_addr_created' => 18, 'remote_addr_modified' => 19, 'payment_threshold' => 20, 'tax_id_enc' => 21, 'tax_id_last_four' => 22, ),
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
	 * @param      string $column The column name for current table. (i.e. BusinessPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(BusinessPeer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(BusinessPeer::ID);
			$criteria->addSelectColumn(BusinessPeer::EMAIL);
			$criteria->addSelectColumn(BusinessPeer::COMPANY_DESCRIPTION);
			$criteria->addSelectColumn(BusinessPeer::COMPANY_URL);
			$criteria->addSelectColumn(BusinessPeer::COMPANY_NAME);
			$criteria->addSelectColumn(BusinessPeer::ADDRESSLINE1);
			$criteria->addSelectColumn(BusinessPeer::ADDRESSLINE2);
			$criteria->addSelectColumn(BusinessPeer::CITY);
			$criteria->addSelectColumn(BusinessPeer::STATE);
			$criteria->addSelectColumn(BusinessPeer::POSTCODE);
			$criteria->addSelectColumn(BusinessPeer::COUNTRY);
			$criteria->addSelectColumn(BusinessPeer::TELEPHONE);
			$criteria->addSelectColumn(BusinessPeer::FAX);
			$criteria->addSelectColumn(BusinessPeer::IS_ACTIVE);
			$criteria->addSelectColumn(BusinessPeer::IS_PREMIUM);
			$criteria->addSelectColumn(BusinessPeer::DATE_CREATED);
			$criteria->addSelectColumn(BusinessPeer::DATE_EXPIRES);
			$criteria->addSelectColumn(BusinessPeer::DATE_MODIFIED);
			$criteria->addSelectColumn(BusinessPeer::REMOTE_ADDR_CREATED);
			$criteria->addSelectColumn(BusinessPeer::REMOTE_ADDR_MODIFIED);
			$criteria->addSelectColumn(BusinessPeer::PAYMENT_THRESHOLD);
			$criteria->addSelectColumn(BusinessPeer::TAX_ID_ENC);
			$criteria->addSelectColumn(BusinessPeer::TAX_ID_LAST_FOUR);
		} else {
			$criteria->addSelectColumn($alias . '.ID');
			$criteria->addSelectColumn($alias . '.EMAIL');
			$criteria->addSelectColumn($alias . '.COMPANY_DESCRIPTION');
			$criteria->addSelectColumn($alias . '.COMPANY_URL');
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
			$criteria->addSelectColumn($alias . '.IS_PREMIUM');
			$criteria->addSelectColumn($alias . '.DATE_CREATED');
			$criteria->addSelectColumn($alias . '.DATE_EXPIRES');
			$criteria->addSelectColumn($alias . '.DATE_MODIFIED');
			$criteria->addSelectColumn($alias . '.REMOTE_ADDR_CREATED');
			$criteria->addSelectColumn($alias . '.REMOTE_ADDR_MODIFIED');
			$criteria->addSelectColumn($alias . '.PAYMENT_THRESHOLD');
			$criteria->addSelectColumn($alias . '.TAX_ID_ENC');
			$criteria->addSelectColumn($alias . '.TAX_ID_LAST_FOUR');
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
		$criteria->setPrimaryTableName(BusinessPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			BusinessPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(BusinessPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     Business
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = BusinessPeer::doSelect($critcopy, $con);
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
		return BusinessPeer::populateObjects(BusinessPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(BusinessPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			BusinessPeer::addSelectColumns($criteria);
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
	 * @param      Business $value A Business object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(Business $obj, $key = null)
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
	 * @param      mixed $value A Business object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof Business) {
				$key = (string) $value->getId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Business object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     Business Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to business
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
		$cls = BusinessPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = BusinessPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = BusinessPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				BusinessPeer::addInstanceToPool($obj, $key);
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
	 * @return     array (Business object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = BusinessPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = BusinessPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + BusinessPeer::NUM_COLUMNS;
		} else {
			$cls = BusinessPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			BusinessPeer::addInstanceToPool($obj, $key);
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
	  $dbMap = Propel::getDatabaseMap(BaseBusinessPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseBusinessPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new BusinessTableMap());
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
		return $withPrefix ? BusinessPeer::CLASS_DEFAULT : BusinessPeer::OM_CLASS;
	}

	/**
	 * Method perform an INSERT on the database, given a Business or Criteria object.
	 *
	 * @param      mixed $values Criteria or Business object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(BusinessPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from Business object
		}

		if ($criteria->containsKey(BusinessPeer::ID) && $criteria->keyContainsValue(BusinessPeer::ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.BusinessPeer::ID.')');
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
	 * Method perform an UPDATE on the database, given a Business or Criteria object.
	 *
	 * @param      mixed $values Criteria or Business object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(BusinessPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(BusinessPeer::ID);
			$value = $criteria->remove(BusinessPeer::ID);
			if ($value) {
				$selectCriteria->add(BusinessPeer::ID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(BusinessPeer::TABLE_NAME);
			}

		} else { // $values is Business object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Method to DELETE all rows from the business table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(BusinessPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(BusinessPeer::TABLE_NAME, $con, BusinessPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			BusinessPeer::clearInstancePool();
			BusinessPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a Business or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or Business object or primary key or array of primary keys
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
			$con = Propel::getConnection(BusinessPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			BusinessPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof Business) { // it's a model object
			// invalidate the cache for this single object
			BusinessPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(BusinessPeer::ID, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				BusinessPeer::removeInstanceFromPool($singleval);
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
			BusinessPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given Business object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      Business $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(Business $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(BusinessPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(BusinessPeer::TABLE_NAME);

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

		return BasePeer::doValidate(BusinessPeer::DATABASE_NAME, BusinessPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     Business
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = BusinessPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(BusinessPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(BusinessPeer::DATABASE_NAME);
		$criteria->add(BusinessPeer::ID, $pk);

		$v = BusinessPeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(BusinessPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(BusinessPeer::DATABASE_NAME);
			$criteria->add(BusinessPeer::ID, $pks, Criteria::IN);
			$objs = BusinessPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseBusinessPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseBusinessPeer::buildTableMap();

