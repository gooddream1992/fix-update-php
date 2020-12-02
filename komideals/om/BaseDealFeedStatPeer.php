<?php


/**
 * Base static class for performing query and update operations on the 'deal_feed_stat' table.
 *
 * 
 *
 * @package    propel.generator.komideals.om
 */
abstract class BaseDealFeedStatPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'komideals';

	/** the table name for this class */
	const TABLE_NAME = 'deal_feed_stat';

	/** the related Propel class for this table */
	const OM_CLASS = 'DealFeedStat';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'komideals.DealFeedStat';

	/** the related TableMap class for this table */
	const TM_CLASS = 'DealFeedStatTableMap';
	
	/** The total number of columns. */
	const NUM_COLUMNS = 28;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the ID field */
	const ID = 'deal_feed_stat.ID';

	/** the column name for the DEAL_FEED_ID field */
	const DEAL_FEED_ID = 'deal_feed_stat.DEAL_FEED_ID';

	/** the column name for the BUSINESS_ID field */
	const BUSINESS_ID = 'deal_feed_stat.BUSINESS_ID';

	/** the column name for the DATE field */
	const DATE = 'deal_feed_stat.DATE';

	/** the column name for the H0000 field */
	const H0000 = 'deal_feed_stat.H0000';

	/** the column name for the H0100 field */
	const H0100 = 'deal_feed_stat.H0100';

	/** the column name for the H0200 field */
	const H0200 = 'deal_feed_stat.H0200';

	/** the column name for the H0300 field */
	const H0300 = 'deal_feed_stat.H0300';

	/** the column name for the H0400 field */
	const H0400 = 'deal_feed_stat.H0400';

	/** the column name for the H0500 field */
	const H0500 = 'deal_feed_stat.H0500';

	/** the column name for the H0600 field */
	const H0600 = 'deal_feed_stat.H0600';

	/** the column name for the H0700 field */
	const H0700 = 'deal_feed_stat.H0700';

	/** the column name for the H0800 field */
	const H0800 = 'deal_feed_stat.H0800';

	/** the column name for the H0900 field */
	const H0900 = 'deal_feed_stat.H0900';

	/** the column name for the H1000 field */
	const H1000 = 'deal_feed_stat.H1000';

	/** the column name for the H1100 field */
	const H1100 = 'deal_feed_stat.H1100';

	/** the column name for the H1200 field */
	const H1200 = 'deal_feed_stat.H1200';

	/** the column name for the H1300 field */
	const H1300 = 'deal_feed_stat.H1300';

	/** the column name for the H1400 field */
	const H1400 = 'deal_feed_stat.H1400';

	/** the column name for the H1500 field */
	const H1500 = 'deal_feed_stat.H1500';

	/** the column name for the H1600 field */
	const H1600 = 'deal_feed_stat.H1600';

	/** the column name for the H1700 field */
	const H1700 = 'deal_feed_stat.H1700';

	/** the column name for the H1800 field */
	const H1800 = 'deal_feed_stat.H1800';

	/** the column name for the H1900 field */
	const H1900 = 'deal_feed_stat.H1900';

	/** the column name for the H2000 field */
	const H2000 = 'deal_feed_stat.H2000';

	/** the column name for the H2100 field */
	const H2100 = 'deal_feed_stat.H2100';

	/** the column name for the H2200 field */
	const H2200 = 'deal_feed_stat.H2200';

	/** the column name for the H2300 field */
	const H2300 = 'deal_feed_stat.H2300';

	/**
	 * An identiy map to hold any loaded instances of DealFeedStat objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array DealFeedStat[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'DealFeedId', 'BusinessId', 'Date', 'H0000', 'H0100', 'H0200', 'H0300', 'H0400', 'H0500', 'H0600', 'H0700', 'H0800', 'H0900', 'H1000', 'H1100', 'H1200', 'H1300', 'H1400', 'H1500', 'H1600', 'H1700', 'H1800', 'H1900', 'H2000', 'H2100', 'H2200', 'H2300', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'dealFeedId', 'businessId', 'date', 'h0000', 'h0100', 'h0200', 'h0300', 'h0400', 'h0500', 'h0600', 'h0700', 'h0800', 'h0900', 'h1000', 'h1100', 'h1200', 'h1300', 'h1400', 'h1500', 'h1600', 'h1700', 'h1800', 'h1900', 'h2000', 'h2100', 'h2200', 'h2300', ),
		BasePeer::TYPE_COLNAME => array (self::ID, self::DEAL_FEED_ID, self::BUSINESS_ID, self::DATE, self::H0000, self::H0100, self::H0200, self::H0300, self::H0400, self::H0500, self::H0600, self::H0700, self::H0800, self::H0900, self::H1000, self::H1100, self::H1200, self::H1300, self::H1400, self::H1500, self::H1600, self::H1700, self::H1800, self::H1900, self::H2000, self::H2100, self::H2200, self::H2300, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID', 'DEAL_FEED_ID', 'BUSINESS_ID', 'DATE', 'H0000', 'H0100', 'H0200', 'H0300', 'H0400', 'H0500', 'H0600', 'H0700', 'H0800', 'H0900', 'H1000', 'H1100', 'H1200', 'H1300', 'H1400', 'H1500', 'H1600', 'H1700', 'H1800', 'H1900', 'H2000', 'H2100', 'H2200', 'H2300', ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'deal_feed_id', 'business_id', 'date', 'h0000', 'h0100', 'h0200', 'h0300', 'h0400', 'h0500', 'h0600', 'h0700', 'h0800', 'h0900', 'h1000', 'h1100', 'h1200', 'h1300', 'h1400', 'h1500', 'h1600', 'h1700', 'h1800', 'h1900', 'h2000', 'h2100', 'h2200', 'h2300', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'DealFeedId' => 1, 'BusinessId' => 2, 'Date' => 3, 'H0000' => 4, 'H0100' => 5, 'H0200' => 6, 'H0300' => 7, 'H0400' => 8, 'H0500' => 9, 'H0600' => 10, 'H0700' => 11, 'H0800' => 12, 'H0900' => 13, 'H1000' => 14, 'H1100' => 15, 'H1200' => 16, 'H1300' => 17, 'H1400' => 18, 'H1500' => 19, 'H1600' => 20, 'H1700' => 21, 'H1800' => 22, 'H1900' => 23, 'H2000' => 24, 'H2100' => 25, 'H2200' => 26, 'H2300' => 27, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'dealFeedId' => 1, 'businessId' => 2, 'date' => 3, 'h0000' => 4, 'h0100' => 5, 'h0200' => 6, 'h0300' => 7, 'h0400' => 8, 'h0500' => 9, 'h0600' => 10, 'h0700' => 11, 'h0800' => 12, 'h0900' => 13, 'h1000' => 14, 'h1100' => 15, 'h1200' => 16, 'h1300' => 17, 'h1400' => 18, 'h1500' => 19, 'h1600' => 20, 'h1700' => 21, 'h1800' => 22, 'h1900' => 23, 'h2000' => 24, 'h2100' => 25, 'h2200' => 26, 'h2300' => 27, ),
		BasePeer::TYPE_COLNAME => array (self::ID => 0, self::DEAL_FEED_ID => 1, self::BUSINESS_ID => 2, self::DATE => 3, self::H0000 => 4, self::H0100 => 5, self::H0200 => 6, self::H0300 => 7, self::H0400 => 8, self::H0500 => 9, self::H0600 => 10, self::H0700 => 11, self::H0800 => 12, self::H0900 => 13, self::H1000 => 14, self::H1100 => 15, self::H1200 => 16, self::H1300 => 17, self::H1400 => 18, self::H1500 => 19, self::H1600 => 20, self::H1700 => 21, self::H1800 => 22, self::H1900 => 23, self::H2000 => 24, self::H2100 => 25, self::H2200 => 26, self::H2300 => 27, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'DEAL_FEED_ID' => 1, 'BUSINESS_ID' => 2, 'DATE' => 3, 'H0000' => 4, 'H0100' => 5, 'H0200' => 6, 'H0300' => 7, 'H0400' => 8, 'H0500' => 9, 'H0600' => 10, 'H0700' => 11, 'H0800' => 12, 'H0900' => 13, 'H1000' => 14, 'H1100' => 15, 'H1200' => 16, 'H1300' => 17, 'H1400' => 18, 'H1500' => 19, 'H1600' => 20, 'H1700' => 21, 'H1800' => 22, 'H1900' => 23, 'H2000' => 24, 'H2100' => 25, 'H2200' => 26, 'H2300' => 27, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'deal_feed_id' => 1, 'business_id' => 2, 'date' => 3, 'h0000' => 4, 'h0100' => 5, 'h0200' => 6, 'h0300' => 7, 'h0400' => 8, 'h0500' => 9, 'h0600' => 10, 'h0700' => 11, 'h0800' => 12, 'h0900' => 13, 'h1000' => 14, 'h1100' => 15, 'h1200' => 16, 'h1300' => 17, 'h1400' => 18, 'h1500' => 19, 'h1600' => 20, 'h1700' => 21, 'h1800' => 22, 'h1900' => 23, 'h2000' => 24, 'h2100' => 25, 'h2200' => 26, 'h2300' => 27, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, )
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
	 * @param      string $column The column name for current table. (i.e. DealFeedStatPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(DealFeedStatPeer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(DealFeedStatPeer::ID);
			$criteria->addSelectColumn(DealFeedStatPeer::DEAL_FEED_ID);
			$criteria->addSelectColumn(DealFeedStatPeer::BUSINESS_ID);
			$criteria->addSelectColumn(DealFeedStatPeer::DATE);
			$criteria->addSelectColumn(DealFeedStatPeer::H0000);
			$criteria->addSelectColumn(DealFeedStatPeer::H0100);
			$criteria->addSelectColumn(DealFeedStatPeer::H0200);
			$criteria->addSelectColumn(DealFeedStatPeer::H0300);
			$criteria->addSelectColumn(DealFeedStatPeer::H0400);
			$criteria->addSelectColumn(DealFeedStatPeer::H0500);
			$criteria->addSelectColumn(DealFeedStatPeer::H0600);
			$criteria->addSelectColumn(DealFeedStatPeer::H0700);
			$criteria->addSelectColumn(DealFeedStatPeer::H0800);
			$criteria->addSelectColumn(DealFeedStatPeer::H0900);
			$criteria->addSelectColumn(DealFeedStatPeer::H1000);
			$criteria->addSelectColumn(DealFeedStatPeer::H1100);
			$criteria->addSelectColumn(DealFeedStatPeer::H1200);
			$criteria->addSelectColumn(DealFeedStatPeer::H1300);
			$criteria->addSelectColumn(DealFeedStatPeer::H1400);
			$criteria->addSelectColumn(DealFeedStatPeer::H1500);
			$criteria->addSelectColumn(DealFeedStatPeer::H1600);
			$criteria->addSelectColumn(DealFeedStatPeer::H1700);
			$criteria->addSelectColumn(DealFeedStatPeer::H1800);
			$criteria->addSelectColumn(DealFeedStatPeer::H1900);
			$criteria->addSelectColumn(DealFeedStatPeer::H2000);
			$criteria->addSelectColumn(DealFeedStatPeer::H2100);
			$criteria->addSelectColumn(DealFeedStatPeer::H2200);
			$criteria->addSelectColumn(DealFeedStatPeer::H2300);
		} else {
			$criteria->addSelectColumn($alias . '.ID');
			$criteria->addSelectColumn($alias . '.DEAL_FEED_ID');
			$criteria->addSelectColumn($alias . '.BUSINESS_ID');
			$criteria->addSelectColumn($alias . '.DATE');
			$criteria->addSelectColumn($alias . '.H0000');
			$criteria->addSelectColumn($alias . '.H0100');
			$criteria->addSelectColumn($alias . '.H0200');
			$criteria->addSelectColumn($alias . '.H0300');
			$criteria->addSelectColumn($alias . '.H0400');
			$criteria->addSelectColumn($alias . '.H0500');
			$criteria->addSelectColumn($alias . '.H0600');
			$criteria->addSelectColumn($alias . '.H0700');
			$criteria->addSelectColumn($alias . '.H0800');
			$criteria->addSelectColumn($alias . '.H0900');
			$criteria->addSelectColumn($alias . '.H1000');
			$criteria->addSelectColumn($alias . '.H1100');
			$criteria->addSelectColumn($alias . '.H1200');
			$criteria->addSelectColumn($alias . '.H1300');
			$criteria->addSelectColumn($alias . '.H1400');
			$criteria->addSelectColumn($alias . '.H1500');
			$criteria->addSelectColumn($alias . '.H1600');
			$criteria->addSelectColumn($alias . '.H1700');
			$criteria->addSelectColumn($alias . '.H1800');
			$criteria->addSelectColumn($alias . '.H1900');
			$criteria->addSelectColumn($alias . '.H2000');
			$criteria->addSelectColumn($alias . '.H2100');
			$criteria->addSelectColumn($alias . '.H2200');
			$criteria->addSelectColumn($alias . '.H2300');
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
		$criteria->setPrimaryTableName(DealFeedStatPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			DealFeedStatPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(DealFeedStatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     DealFeedStat
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = DealFeedStatPeer::doSelect($critcopy, $con);
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
		return DealFeedStatPeer::populateObjects(DealFeedStatPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(DealFeedStatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			DealFeedStatPeer::addSelectColumns($criteria);
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
	 * @param      DealFeedStat $value A DealFeedStat object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(DealFeedStat $obj, $key = null)
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
	 * @param      mixed $value A DealFeedStat object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof DealFeedStat) {
				$key = (string) $value->getId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or DealFeedStat object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     DealFeedStat Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to deal_feed_stat
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
		$cls = DealFeedStatPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = DealFeedStatPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = DealFeedStatPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				DealFeedStatPeer::addInstanceToPool($obj, $key);
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
	 * @return     array (DealFeedStat object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = DealFeedStatPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = DealFeedStatPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + DealFeedStatPeer::NUM_COLUMNS;
		} else {
			$cls = DealFeedStatPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			DealFeedStatPeer::addInstanceToPool($obj, $key);
		}
		return array($obj, $col);
	}

	/**
	 * Returns the number of rows matching criteria, joining the related DealFeed table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinDealFeed(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(DealFeedStatPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			DealFeedStatPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(DealFeedStatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(DealFeedStatPeer::DEAL_FEED_ID, DealFeedPeer::ID, $join_behavior);

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
		$criteria->setPrimaryTableName(DealFeedStatPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			DealFeedStatPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(DealFeedStatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(DealFeedStatPeer::BUSINESS_ID, BusinessPeer::ID, $join_behavior);

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
	 * Selects a collection of DealFeedStat objects pre-filled with their DealFeed objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of DealFeedStat objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinDealFeed(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		DealFeedStatPeer::addSelectColumns($criteria);
		$startcol = (DealFeedStatPeer::NUM_COLUMNS - DealFeedStatPeer::NUM_LAZY_LOAD_COLUMNS);
		DealFeedPeer::addSelectColumns($criteria);

		$criteria->addJoin(DealFeedStatPeer::DEAL_FEED_ID, DealFeedPeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = DealFeedStatPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = DealFeedStatPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = DealFeedStatPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				DealFeedStatPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = DealFeedPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = DealFeedPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = DealFeedPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					DealFeedPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (DealFeedStat) to $obj2 (DealFeed)
				$obj2->addDealFeedStat($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of DealFeedStat objects pre-filled with their Business objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of DealFeedStat objects.
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

		DealFeedStatPeer::addSelectColumns($criteria);
		$startcol = (DealFeedStatPeer::NUM_COLUMNS - DealFeedStatPeer::NUM_LAZY_LOAD_COLUMNS);
		BusinessPeer::addSelectColumns($criteria);

		$criteria->addJoin(DealFeedStatPeer::BUSINESS_ID, BusinessPeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = DealFeedStatPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = DealFeedStatPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = DealFeedStatPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				DealFeedStatPeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (DealFeedStat) to $obj2 (Business)
				$obj2->addDealFeedStat($obj1);

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
		$criteria->setPrimaryTableName(DealFeedStatPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			DealFeedStatPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(DealFeedStatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(DealFeedStatPeer::DEAL_FEED_ID, DealFeedPeer::ID, $join_behavior);

		$criteria->addJoin(DealFeedStatPeer::BUSINESS_ID, BusinessPeer::ID, $join_behavior);

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
	 * Selects a collection of DealFeedStat objects pre-filled with all related objects.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of DealFeedStat objects.
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

		DealFeedStatPeer::addSelectColumns($criteria);
		$startcol2 = (DealFeedStatPeer::NUM_COLUMNS - DealFeedStatPeer::NUM_LAZY_LOAD_COLUMNS);

		DealFeedPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + (DealFeedPeer::NUM_COLUMNS - DealFeedPeer::NUM_LAZY_LOAD_COLUMNS);

		BusinessPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + (BusinessPeer::NUM_COLUMNS - BusinessPeer::NUM_LAZY_LOAD_COLUMNS);

		$criteria->addJoin(DealFeedStatPeer::DEAL_FEED_ID, DealFeedPeer::ID, $join_behavior);

		$criteria->addJoin(DealFeedStatPeer::BUSINESS_ID, BusinessPeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = DealFeedStatPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = DealFeedStatPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = DealFeedStatPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				DealFeedStatPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

			// Add objects for joined DealFeed rows

			$key2 = DealFeedPeer::getPrimaryKeyHashFromRow($row, $startcol2);
			if ($key2 !== null) {
				$obj2 = DealFeedPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = DealFeedPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					DealFeedPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 loaded

				// Add the $obj1 (DealFeedStat) to the collection in $obj2 (DealFeed)
				$obj2->addDealFeedStat($obj1);
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

				// Add the $obj1 (DealFeedStat) to the collection in $obj3 (Business)
				$obj3->addDealFeedStat($obj1);
			} // if joined row not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related DealFeed table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptDealFeed(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(DealFeedStatPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			DealFeedStatPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(DealFeedStatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(DealFeedStatPeer::BUSINESS_ID, BusinessPeer::ID, $join_behavior);

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
		$criteria->setPrimaryTableName(DealFeedStatPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			DealFeedStatPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(DealFeedStatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(DealFeedStatPeer::DEAL_FEED_ID, DealFeedPeer::ID, $join_behavior);

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
	 * Selects a collection of DealFeedStat objects pre-filled with all related objects except DealFeed.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of DealFeedStat objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptDealFeed(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		DealFeedStatPeer::addSelectColumns($criteria);
		$startcol2 = (DealFeedStatPeer::NUM_COLUMNS - DealFeedStatPeer::NUM_LAZY_LOAD_COLUMNS);

		BusinessPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + (BusinessPeer::NUM_COLUMNS - BusinessPeer::NUM_LAZY_LOAD_COLUMNS);

		$criteria->addJoin(DealFeedStatPeer::BUSINESS_ID, BusinessPeer::ID, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = DealFeedStatPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = DealFeedStatPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = DealFeedStatPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				DealFeedStatPeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (DealFeedStat) to the collection in $obj2 (Business)
				$obj2->addDealFeedStat($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of DealFeedStat objects pre-filled with all related objects except Business.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of DealFeedStat objects.
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

		DealFeedStatPeer::addSelectColumns($criteria);
		$startcol2 = (DealFeedStatPeer::NUM_COLUMNS - DealFeedStatPeer::NUM_LAZY_LOAD_COLUMNS);

		DealFeedPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + (DealFeedPeer::NUM_COLUMNS - DealFeedPeer::NUM_LAZY_LOAD_COLUMNS);

		$criteria->addJoin(DealFeedStatPeer::DEAL_FEED_ID, DealFeedPeer::ID, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = DealFeedStatPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = DealFeedStatPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = DealFeedStatPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				DealFeedStatPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined DealFeed rows

				$key2 = DealFeedPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = DealFeedPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = DealFeedPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					DealFeedPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (DealFeedStat) to the collection in $obj2 (DealFeed)
				$obj2->addDealFeedStat($obj1);

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
	  $dbMap = Propel::getDatabaseMap(BaseDealFeedStatPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseDealFeedStatPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new DealFeedStatTableMap());
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
		return $withPrefix ? DealFeedStatPeer::CLASS_DEFAULT : DealFeedStatPeer::OM_CLASS;
	}

	/**
	 * Method perform an INSERT on the database, given a DealFeedStat or Criteria object.
	 *
	 * @param      mixed $values Criteria or DealFeedStat object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(DealFeedStatPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from DealFeedStat object
		}

		if ($criteria->containsKey(DealFeedStatPeer::ID) && $criteria->keyContainsValue(DealFeedStatPeer::ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.DealFeedStatPeer::ID.')');
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
	 * Method perform an UPDATE on the database, given a DealFeedStat or Criteria object.
	 *
	 * @param      mixed $values Criteria or DealFeedStat object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(DealFeedStatPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(DealFeedStatPeer::ID);
			$value = $criteria->remove(DealFeedStatPeer::ID);
			if ($value) {
				$selectCriteria->add(DealFeedStatPeer::ID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(DealFeedStatPeer::TABLE_NAME);
			}

		} else { // $values is DealFeedStat object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Method to DELETE all rows from the deal_feed_stat table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(DealFeedStatPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(DealFeedStatPeer::TABLE_NAME, $con, DealFeedStatPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			DealFeedStatPeer::clearInstancePool();
			DealFeedStatPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a DealFeedStat or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or DealFeedStat object or primary key or array of primary keys
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
			$con = Propel::getConnection(DealFeedStatPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			DealFeedStatPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof DealFeedStat) { // it's a model object
			// invalidate the cache for this single object
			DealFeedStatPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(DealFeedStatPeer::ID, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				DealFeedStatPeer::removeInstanceFromPool($singleval);
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
			DealFeedStatPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given DealFeedStat object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      DealFeedStat $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(DealFeedStat $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(DealFeedStatPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(DealFeedStatPeer::TABLE_NAME);

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

		return BasePeer::doValidate(DealFeedStatPeer::DATABASE_NAME, DealFeedStatPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     DealFeedStat
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = DealFeedStatPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(DealFeedStatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(DealFeedStatPeer::DATABASE_NAME);
		$criteria->add(DealFeedStatPeer::ID, $pk);

		$v = DealFeedStatPeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(DealFeedStatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(DealFeedStatPeer::DATABASE_NAME);
			$criteria->add(DealFeedStatPeer::ID, $pks, Criteria::IN);
			$objs = DealFeedStatPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseDealFeedStatPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseDealFeedStatPeer::buildTableMap();

