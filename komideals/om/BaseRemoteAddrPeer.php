<?php


/**
 * Base static class for performing query and update operations on the 'remote_addr' table.
 *
 * 
 *
 * @package    propel.generator.komideals.om
 */
abstract class BaseRemoteAddrPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'komideals';

	/** the table name for this class */
	const TABLE_NAME = 'remote_addr';

	/** the related Propel class for this table */
	const OM_CLASS = 'RemoteAddr';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'komideals.RemoteAddr';

	/** the related TableMap class for this table */
	const TM_CLASS = 'RemoteAddrTableMap';
	
	/** The total number of columns. */
	const NUM_COLUMNS = 14;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the ID field */
	const ID = 'remote_addr.ID';

	/** the column name for the REMOTE_ADDR field */
	const REMOTE_ADDR = 'remote_addr.REMOTE_ADDR';

	/** the column name for the COUNTRY_CODE field */
	const COUNTRY_CODE = 'remote_addr.COUNTRY_CODE';

	/** the column name for the STATE_CODE field */
	const STATE_CODE = 'remote_addr.STATE_CODE';

	/** the column name for the CITY field */
	const CITY = 'remote_addr.CITY';

	/** the column name for the POSTAL_CODE field */
	const POSTAL_CODE = 'remote_addr.POSTAL_CODE';

	/** the column name for the LATITUDE field */
	const LATITUDE = 'remote_addr.LATITUDE';

	/** the column name for the LONGITUDE field */
	const LONGITUDE = 'remote_addr.LONGITUDE';

	/** the column name for the METRO_CODE field */
	const METRO_CODE = 'remote_addr.METRO_CODE';

	/** the column name for the AREA_CODE field */
	const AREA_CODE = 'remote_addr.AREA_CODE';

	/** the column name for the ISP field */
	const ISP = 'remote_addr.ISP';

	/** the column name for the ORG field */
	const ORG = 'remote_addr.ORG';

	/** the column name for the DATE_CREATED field */
	const DATE_CREATED = 'remote_addr.DATE_CREATED';

	/** the column name for the DATE_MODIFIED field */
	const DATE_MODIFIED = 'remote_addr.DATE_MODIFIED';

	/**
	 * An identiy map to hold any loaded instances of RemoteAddr objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array RemoteAddr[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'RemoteAddr', 'CountryCode', 'StateCode', 'City', 'PostalCode', 'Latitude', 'Longitude', 'MetroCode', 'AreaCode', 'Isp', 'Org', 'DateCreated', 'DateModified', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'remoteAddr', 'countryCode', 'stateCode', 'city', 'postalCode', 'latitude', 'longitude', 'metroCode', 'areaCode', 'isp', 'org', 'dateCreated', 'dateModified', ),
		BasePeer::TYPE_COLNAME => array (self::ID, self::REMOTE_ADDR, self::COUNTRY_CODE, self::STATE_CODE, self::CITY, self::POSTAL_CODE, self::LATITUDE, self::LONGITUDE, self::METRO_CODE, self::AREA_CODE, self::ISP, self::ORG, self::DATE_CREATED, self::DATE_MODIFIED, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID', 'REMOTE_ADDR', 'COUNTRY_CODE', 'STATE_CODE', 'CITY', 'POSTAL_CODE', 'LATITUDE', 'LONGITUDE', 'METRO_CODE', 'AREA_CODE', 'ISP', 'ORG', 'DATE_CREATED', 'DATE_MODIFIED', ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'remote_addr', 'country_code', 'state_code', 'city', 'postal_code', 'latitude', 'longitude', 'metro_code', 'area_code', 'isp', 'org', 'date_created', 'date_modified', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'RemoteAddr' => 1, 'CountryCode' => 2, 'StateCode' => 3, 'City' => 4, 'PostalCode' => 5, 'Latitude' => 6, 'Longitude' => 7, 'MetroCode' => 8, 'AreaCode' => 9, 'Isp' => 10, 'Org' => 11, 'DateCreated' => 12, 'DateModified' => 13, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'remoteAddr' => 1, 'countryCode' => 2, 'stateCode' => 3, 'city' => 4, 'postalCode' => 5, 'latitude' => 6, 'longitude' => 7, 'metroCode' => 8, 'areaCode' => 9, 'isp' => 10, 'org' => 11, 'dateCreated' => 12, 'dateModified' => 13, ),
		BasePeer::TYPE_COLNAME => array (self::ID => 0, self::REMOTE_ADDR => 1, self::COUNTRY_CODE => 2, self::STATE_CODE => 3, self::CITY => 4, self::POSTAL_CODE => 5, self::LATITUDE => 6, self::LONGITUDE => 7, self::METRO_CODE => 8, self::AREA_CODE => 9, self::ISP => 10, self::ORG => 11, self::DATE_CREATED => 12, self::DATE_MODIFIED => 13, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'REMOTE_ADDR' => 1, 'COUNTRY_CODE' => 2, 'STATE_CODE' => 3, 'CITY' => 4, 'POSTAL_CODE' => 5, 'LATITUDE' => 6, 'LONGITUDE' => 7, 'METRO_CODE' => 8, 'AREA_CODE' => 9, 'ISP' => 10, 'ORG' => 11, 'DATE_CREATED' => 12, 'DATE_MODIFIED' => 13, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'remote_addr' => 1, 'country_code' => 2, 'state_code' => 3, 'city' => 4, 'postal_code' => 5, 'latitude' => 6, 'longitude' => 7, 'metro_code' => 8, 'area_code' => 9, 'isp' => 10, 'org' => 11, 'date_created' => 12, 'date_modified' => 13, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
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
	 * @param      string $column The column name for current table. (i.e. RemoteAddrPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(RemoteAddrPeer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(RemoteAddrPeer::ID);
			$criteria->addSelectColumn(RemoteAddrPeer::REMOTE_ADDR);
			$criteria->addSelectColumn(RemoteAddrPeer::COUNTRY_CODE);
			$criteria->addSelectColumn(RemoteAddrPeer::STATE_CODE);
			$criteria->addSelectColumn(RemoteAddrPeer::CITY);
			$criteria->addSelectColumn(RemoteAddrPeer::POSTAL_CODE);
			$criteria->addSelectColumn(RemoteAddrPeer::LATITUDE);
			$criteria->addSelectColumn(RemoteAddrPeer::LONGITUDE);
			$criteria->addSelectColumn(RemoteAddrPeer::METRO_CODE);
			$criteria->addSelectColumn(RemoteAddrPeer::AREA_CODE);
			$criteria->addSelectColumn(RemoteAddrPeer::ISP);
			$criteria->addSelectColumn(RemoteAddrPeer::ORG);
			$criteria->addSelectColumn(RemoteAddrPeer::DATE_CREATED);
			$criteria->addSelectColumn(RemoteAddrPeer::DATE_MODIFIED);
		} else {
			$criteria->addSelectColumn($alias . '.ID');
			$criteria->addSelectColumn($alias . '.REMOTE_ADDR');
			$criteria->addSelectColumn($alias . '.COUNTRY_CODE');
			$criteria->addSelectColumn($alias . '.STATE_CODE');
			$criteria->addSelectColumn($alias . '.CITY');
			$criteria->addSelectColumn($alias . '.POSTAL_CODE');
			$criteria->addSelectColumn($alias . '.LATITUDE');
			$criteria->addSelectColumn($alias . '.LONGITUDE');
			$criteria->addSelectColumn($alias . '.METRO_CODE');
			$criteria->addSelectColumn($alias . '.AREA_CODE');
			$criteria->addSelectColumn($alias . '.ISP');
			$criteria->addSelectColumn($alias . '.ORG');
			$criteria->addSelectColumn($alias . '.DATE_CREATED');
			$criteria->addSelectColumn($alias . '.DATE_MODIFIED');
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
		$criteria->setPrimaryTableName(RemoteAddrPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			RemoteAddrPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(RemoteAddrPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     RemoteAddr
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = RemoteAddrPeer::doSelect($critcopy, $con);
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
		return RemoteAddrPeer::populateObjects(RemoteAddrPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(RemoteAddrPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			RemoteAddrPeer::addSelectColumns($criteria);
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
	 * @param      RemoteAddr $value A RemoteAddr object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(RemoteAddr $obj, $key = null)
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
	 * @param      mixed $value A RemoteAddr object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof RemoteAddr) {
				$key = (string) $value->getId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or RemoteAddr object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     RemoteAddr Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to remote_addr
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
		$cls = RemoteAddrPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = RemoteAddrPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = RemoteAddrPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				RemoteAddrPeer::addInstanceToPool($obj, $key);
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
	 * @return     array (RemoteAddr object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = RemoteAddrPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = RemoteAddrPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + RemoteAddrPeer::NUM_COLUMNS;
		} else {
			$cls = RemoteAddrPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			RemoteAddrPeer::addInstanceToPool($obj, $key);
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
	  $dbMap = Propel::getDatabaseMap(BaseRemoteAddrPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseRemoteAddrPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new RemoteAddrTableMap());
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
		return $withPrefix ? RemoteAddrPeer::CLASS_DEFAULT : RemoteAddrPeer::OM_CLASS;
	}

	/**
	 * Method perform an INSERT on the database, given a RemoteAddr or Criteria object.
	 *
	 * @param      mixed $values Criteria or RemoteAddr object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(RemoteAddrPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from RemoteAddr object
		}

		if ($criteria->containsKey(RemoteAddrPeer::ID) && $criteria->keyContainsValue(RemoteAddrPeer::ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.RemoteAddrPeer::ID.')');
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
	 * Method perform an UPDATE on the database, given a RemoteAddr or Criteria object.
	 *
	 * @param      mixed $values Criteria or RemoteAddr object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(RemoteAddrPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(RemoteAddrPeer::ID);
			$value = $criteria->remove(RemoteAddrPeer::ID);
			if ($value) {
				$selectCriteria->add(RemoteAddrPeer::ID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(RemoteAddrPeer::TABLE_NAME);
			}

		} else { // $values is RemoteAddr object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Method to DELETE all rows from the remote_addr table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(RemoteAddrPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(RemoteAddrPeer::TABLE_NAME, $con, RemoteAddrPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			RemoteAddrPeer::clearInstancePool();
			RemoteAddrPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a RemoteAddr or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or RemoteAddr object or primary key or array of primary keys
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
			$con = Propel::getConnection(RemoteAddrPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			RemoteAddrPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof RemoteAddr) { // it's a model object
			// invalidate the cache for this single object
			RemoteAddrPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(RemoteAddrPeer::ID, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				RemoteAddrPeer::removeInstanceFromPool($singleval);
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
			RemoteAddrPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given RemoteAddr object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      RemoteAddr $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(RemoteAddr $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(RemoteAddrPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(RemoteAddrPeer::TABLE_NAME);

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

		return BasePeer::doValidate(RemoteAddrPeer::DATABASE_NAME, RemoteAddrPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     RemoteAddr
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = RemoteAddrPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(RemoteAddrPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(RemoteAddrPeer::DATABASE_NAME);
		$criteria->add(RemoteAddrPeer::ID, $pk);

		$v = RemoteAddrPeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(RemoteAddrPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(RemoteAddrPeer::DATABASE_NAME);
			$criteria->add(RemoteAddrPeer::ID, $pks, Criteria::IN);
			$objs = RemoteAddrPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseRemoteAddrPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseRemoteAddrPeer::buildTableMap();

