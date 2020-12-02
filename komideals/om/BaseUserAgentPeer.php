<?php


/**
 * Base static class for performing query and update operations on the 'user_agent' table.
 *
 * 
 *
 * @package    propel.generator.komideals.om
 */
abstract class BaseUserAgentPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'komideals';

	/** the table name for this class */
	const TABLE_NAME = 'user_agent';

	/** the related Propel class for this table */
	const OM_CLASS = 'UserAgent';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'komideals.UserAgent';

	/** the related TableMap class for this table */
	const TM_CLASS = 'UserAgentTableMap';
	
	/** The total number of columns. */
	const NUM_COLUMNS = 31;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the ID field */
	const ID = 'user_agent.ID';

	/** the column name for the USER_AGENT field */
	const USER_AGENT = 'user_agent.USER_AGENT';

	/** the column name for the PARENT field */
	const PARENT = 'user_agent.PARENT';

	/** the column name for the PLATFORM field */
	const PLATFORM = 'user_agent.PLATFORM';

	/** the column name for the WIN32 field */
	const WIN32 = 'user_agent.WIN32';

	/** the column name for the BROWSER field */
	const BROWSER = 'user_agent.BROWSER';

	/** the column name for the VERSION field */
	const VERSION = 'user_agent.VERSION';

	/** the column name for the MAJORVER field */
	const MAJORVER = 'user_agent.MAJORVER';

	/** the column name for the MINORVER field */
	const MINORVER = 'user_agent.MINORVER';

	/** the column name for the FRAMES field */
	const FRAMES = 'user_agent.FRAMES';

	/** the column name for the IFRAMES field */
	const IFRAMES = 'user_agent.IFRAMES';

	/** the column name for the TABLES field */
	const TABLES = 'user_agent.TABLES';

	/** the column name for the COOKIES field */
	const COOKIES = 'user_agent.COOKIES';

	/** the column name for the JAVAAPPLETS field */
	const JAVAAPPLETS = 'user_agent.JAVAAPPLETS';

	/** the column name for the JAVASCRIPT field */
	const JAVASCRIPT = 'user_agent.JAVASCRIPT';

	/** the column name for the CSSVERSION field */
	const CSSVERSION = 'user_agent.CSSVERSION';

	/** the column name for the SUPPORTSCSS field */
	const SUPPORTSCSS = 'user_agent.SUPPORTSCSS';

	/** the column name for the ALPHA field */
	const ALPHA = 'user_agent.ALPHA';

	/** the column name for the BETA field */
	const BETA = 'user_agent.BETA';

	/** the column name for the WIN16 field */
	const WIN16 = 'user_agent.WIN16';

	/** the column name for the WIN64 field */
	const WIN64 = 'user_agent.WIN64';

	/** the column name for the BACKGROUNDSOUNDS field */
	const BACKGROUNDSOUNDS = 'user_agent.BACKGROUNDSOUNDS';

	/** the column name for the CDF field */
	const CDF = 'user_agent.CDF';

	/** the column name for the VBSCRIPT field */
	const VBSCRIPT = 'user_agent.VBSCRIPT';

	/** the column name for the ACTIVEXCONTROLS field */
	const ACTIVEXCONTROLS = 'user_agent.ACTIVEXCONTROLS';

	/** the column name for the ISBANNED field */
	const ISBANNED = 'user_agent.ISBANNED';

	/** the column name for the ISMOBILEDEVICE field */
	const ISMOBILEDEVICE = 'user_agent.ISMOBILEDEVICE';

	/** the column name for the ISSYNDICATIONREADER field */
	const ISSYNDICATIONREADER = 'user_agent.ISSYNDICATIONREADER';

	/** the column name for the CRAWLER field */
	const CRAWLER = 'user_agent.CRAWLER';

	/** the column name for the AOL field */
	const AOL = 'user_agent.AOL';

	/** the column name for the AOLVERSION field */
	const AOLVERSION = 'user_agent.AOLVERSION';

	/**
	 * An identiy map to hold any loaded instances of UserAgent objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array UserAgent[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'UserAgent', 'Parent', 'Platform', 'Win32', 'Browser', 'Version', 'Majorver', 'Minorver', 'Frames', 'Iframes', 'Tables', 'Cookies', 'Javaapplets', 'Javascript', 'Cssversion', 'Supportscss', 'Alpha', 'Beta', 'Win16', 'Win64', 'Backgroundsounds', 'Cdf', 'Vbscript', 'Activexcontrols', 'Isbanned', 'Ismobiledevice', 'Issyndicationreader', 'Crawler', 'Aol', 'Aolversion', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'userAgent', 'parent', 'platform', 'win32', 'browser', 'version', 'majorver', 'minorver', 'frames', 'iframes', 'tables', 'cookies', 'javaapplets', 'javascript', 'cssversion', 'supportscss', 'alpha', 'beta', 'win16', 'win64', 'backgroundsounds', 'cdf', 'vbscript', 'activexcontrols', 'isbanned', 'ismobiledevice', 'issyndicationreader', 'crawler', 'aol', 'aolversion', ),
		BasePeer::TYPE_COLNAME => array (self::ID, self::USER_AGENT, self::PARENT, self::PLATFORM, self::WIN32, self::BROWSER, self::VERSION, self::MAJORVER, self::MINORVER, self::FRAMES, self::IFRAMES, self::TABLES, self::COOKIES, self::JAVAAPPLETS, self::JAVASCRIPT, self::CSSVERSION, self::SUPPORTSCSS, self::ALPHA, self::BETA, self::WIN16, self::WIN64, self::BACKGROUNDSOUNDS, self::CDF, self::VBSCRIPT, self::ACTIVEXCONTROLS, self::ISBANNED, self::ISMOBILEDEVICE, self::ISSYNDICATIONREADER, self::CRAWLER, self::AOL, self::AOLVERSION, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID', 'USER_AGENT', 'PARENT', 'PLATFORM', 'WIN32', 'BROWSER', 'VERSION', 'MAJORVER', 'MINORVER', 'FRAMES', 'IFRAMES', 'TABLES', 'COOKIES', 'JAVAAPPLETS', 'JAVASCRIPT', 'CSSVERSION', 'SUPPORTSCSS', 'ALPHA', 'BETA', 'WIN16', 'WIN64', 'BACKGROUNDSOUNDS', 'CDF', 'VBSCRIPT', 'ACTIVEXCONTROLS', 'ISBANNED', 'ISMOBILEDEVICE', 'ISSYNDICATIONREADER', 'CRAWLER', 'AOL', 'AOLVERSION', ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'user_agent', 'parent', 'platform', 'win32', 'browser', 'version', 'majorver', 'minorver', 'frames', 'iframes', 'tables', 'cookies', 'javaapplets', 'javascript', 'cssversion', 'supportscss', 'alpha', 'beta', 'win16', 'win64', 'backgroundsounds', 'cdf', 'vbscript', 'activexcontrols', 'isbanned', 'ismobiledevice', 'issyndicationreader', 'crawler', 'aol', 'aolversion', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'UserAgent' => 1, 'Parent' => 2, 'Platform' => 3, 'Win32' => 4, 'Browser' => 5, 'Version' => 6, 'Majorver' => 7, 'Minorver' => 8, 'Frames' => 9, 'Iframes' => 10, 'Tables' => 11, 'Cookies' => 12, 'Javaapplets' => 13, 'Javascript' => 14, 'Cssversion' => 15, 'Supportscss' => 16, 'Alpha' => 17, 'Beta' => 18, 'Win16' => 19, 'Win64' => 20, 'Backgroundsounds' => 21, 'Cdf' => 22, 'Vbscript' => 23, 'Activexcontrols' => 24, 'Isbanned' => 25, 'Ismobiledevice' => 26, 'Issyndicationreader' => 27, 'Crawler' => 28, 'Aol' => 29, 'Aolversion' => 30, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'userAgent' => 1, 'parent' => 2, 'platform' => 3, 'win32' => 4, 'browser' => 5, 'version' => 6, 'majorver' => 7, 'minorver' => 8, 'frames' => 9, 'iframes' => 10, 'tables' => 11, 'cookies' => 12, 'javaapplets' => 13, 'javascript' => 14, 'cssversion' => 15, 'supportscss' => 16, 'alpha' => 17, 'beta' => 18, 'win16' => 19, 'win64' => 20, 'backgroundsounds' => 21, 'cdf' => 22, 'vbscript' => 23, 'activexcontrols' => 24, 'isbanned' => 25, 'ismobiledevice' => 26, 'issyndicationreader' => 27, 'crawler' => 28, 'aol' => 29, 'aolversion' => 30, ),
		BasePeer::TYPE_COLNAME => array (self::ID => 0, self::USER_AGENT => 1, self::PARENT => 2, self::PLATFORM => 3, self::WIN32 => 4, self::BROWSER => 5, self::VERSION => 6, self::MAJORVER => 7, self::MINORVER => 8, self::FRAMES => 9, self::IFRAMES => 10, self::TABLES => 11, self::COOKIES => 12, self::JAVAAPPLETS => 13, self::JAVASCRIPT => 14, self::CSSVERSION => 15, self::SUPPORTSCSS => 16, self::ALPHA => 17, self::BETA => 18, self::WIN16 => 19, self::WIN64 => 20, self::BACKGROUNDSOUNDS => 21, self::CDF => 22, self::VBSCRIPT => 23, self::ACTIVEXCONTROLS => 24, self::ISBANNED => 25, self::ISMOBILEDEVICE => 26, self::ISSYNDICATIONREADER => 27, self::CRAWLER => 28, self::AOL => 29, self::AOLVERSION => 30, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'USER_AGENT' => 1, 'PARENT' => 2, 'PLATFORM' => 3, 'WIN32' => 4, 'BROWSER' => 5, 'VERSION' => 6, 'MAJORVER' => 7, 'MINORVER' => 8, 'FRAMES' => 9, 'IFRAMES' => 10, 'TABLES' => 11, 'COOKIES' => 12, 'JAVAAPPLETS' => 13, 'JAVASCRIPT' => 14, 'CSSVERSION' => 15, 'SUPPORTSCSS' => 16, 'ALPHA' => 17, 'BETA' => 18, 'WIN16' => 19, 'WIN64' => 20, 'BACKGROUNDSOUNDS' => 21, 'CDF' => 22, 'VBSCRIPT' => 23, 'ACTIVEXCONTROLS' => 24, 'ISBANNED' => 25, 'ISMOBILEDEVICE' => 26, 'ISSYNDICATIONREADER' => 27, 'CRAWLER' => 28, 'AOL' => 29, 'AOLVERSION' => 30, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'user_agent' => 1, 'parent' => 2, 'platform' => 3, 'win32' => 4, 'browser' => 5, 'version' => 6, 'majorver' => 7, 'minorver' => 8, 'frames' => 9, 'iframes' => 10, 'tables' => 11, 'cookies' => 12, 'javaapplets' => 13, 'javascript' => 14, 'cssversion' => 15, 'supportscss' => 16, 'alpha' => 17, 'beta' => 18, 'win16' => 19, 'win64' => 20, 'backgroundsounds' => 21, 'cdf' => 22, 'vbscript' => 23, 'activexcontrols' => 24, 'isbanned' => 25, 'ismobiledevice' => 26, 'issyndicationreader' => 27, 'crawler' => 28, 'aol' => 29, 'aolversion' => 30, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, )
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
	 * @param      string $column The column name for current table. (i.e. UserAgentPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(UserAgentPeer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(UserAgentPeer::ID);
			$criteria->addSelectColumn(UserAgentPeer::USER_AGENT);
			$criteria->addSelectColumn(UserAgentPeer::PARENT);
			$criteria->addSelectColumn(UserAgentPeer::PLATFORM);
			$criteria->addSelectColumn(UserAgentPeer::WIN32);
			$criteria->addSelectColumn(UserAgentPeer::BROWSER);
			$criteria->addSelectColumn(UserAgentPeer::VERSION);
			$criteria->addSelectColumn(UserAgentPeer::MAJORVER);
			$criteria->addSelectColumn(UserAgentPeer::MINORVER);
			$criteria->addSelectColumn(UserAgentPeer::FRAMES);
			$criteria->addSelectColumn(UserAgentPeer::IFRAMES);
			$criteria->addSelectColumn(UserAgentPeer::TABLES);
			$criteria->addSelectColumn(UserAgentPeer::COOKIES);
			$criteria->addSelectColumn(UserAgentPeer::JAVAAPPLETS);
			$criteria->addSelectColumn(UserAgentPeer::JAVASCRIPT);
			$criteria->addSelectColumn(UserAgentPeer::CSSVERSION);
			$criteria->addSelectColumn(UserAgentPeer::SUPPORTSCSS);
			$criteria->addSelectColumn(UserAgentPeer::ALPHA);
			$criteria->addSelectColumn(UserAgentPeer::BETA);
			$criteria->addSelectColumn(UserAgentPeer::WIN16);
			$criteria->addSelectColumn(UserAgentPeer::WIN64);
			$criteria->addSelectColumn(UserAgentPeer::BACKGROUNDSOUNDS);
			$criteria->addSelectColumn(UserAgentPeer::CDF);
			$criteria->addSelectColumn(UserAgentPeer::VBSCRIPT);
			$criteria->addSelectColumn(UserAgentPeer::ACTIVEXCONTROLS);
			$criteria->addSelectColumn(UserAgentPeer::ISBANNED);
			$criteria->addSelectColumn(UserAgentPeer::ISMOBILEDEVICE);
			$criteria->addSelectColumn(UserAgentPeer::ISSYNDICATIONREADER);
			$criteria->addSelectColumn(UserAgentPeer::CRAWLER);
			$criteria->addSelectColumn(UserAgentPeer::AOL);
			$criteria->addSelectColumn(UserAgentPeer::AOLVERSION);
		} else {
			$criteria->addSelectColumn($alias . '.ID');
			$criteria->addSelectColumn($alias . '.USER_AGENT');
			$criteria->addSelectColumn($alias . '.PARENT');
			$criteria->addSelectColumn($alias . '.PLATFORM');
			$criteria->addSelectColumn($alias . '.WIN32');
			$criteria->addSelectColumn($alias . '.BROWSER');
			$criteria->addSelectColumn($alias . '.VERSION');
			$criteria->addSelectColumn($alias . '.MAJORVER');
			$criteria->addSelectColumn($alias . '.MINORVER');
			$criteria->addSelectColumn($alias . '.FRAMES');
			$criteria->addSelectColumn($alias . '.IFRAMES');
			$criteria->addSelectColumn($alias . '.TABLES');
			$criteria->addSelectColumn($alias . '.COOKIES');
			$criteria->addSelectColumn($alias . '.JAVAAPPLETS');
			$criteria->addSelectColumn($alias . '.JAVASCRIPT');
			$criteria->addSelectColumn($alias . '.CSSVERSION');
			$criteria->addSelectColumn($alias . '.SUPPORTSCSS');
			$criteria->addSelectColumn($alias . '.ALPHA');
			$criteria->addSelectColumn($alias . '.BETA');
			$criteria->addSelectColumn($alias . '.WIN16');
			$criteria->addSelectColumn($alias . '.WIN64');
			$criteria->addSelectColumn($alias . '.BACKGROUNDSOUNDS');
			$criteria->addSelectColumn($alias . '.CDF');
			$criteria->addSelectColumn($alias . '.VBSCRIPT');
			$criteria->addSelectColumn($alias . '.ACTIVEXCONTROLS');
			$criteria->addSelectColumn($alias . '.ISBANNED');
			$criteria->addSelectColumn($alias . '.ISMOBILEDEVICE');
			$criteria->addSelectColumn($alias . '.ISSYNDICATIONREADER');
			$criteria->addSelectColumn($alias . '.CRAWLER');
			$criteria->addSelectColumn($alias . '.AOL');
			$criteria->addSelectColumn($alias . '.AOLVERSION');
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
		$criteria->setPrimaryTableName(UserAgentPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			UserAgentPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(UserAgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     UserAgent
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = UserAgentPeer::doSelect($critcopy, $con);
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
		return UserAgentPeer::populateObjects(UserAgentPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(UserAgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			UserAgentPeer::addSelectColumns($criteria);
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
	 * @param      UserAgent $value A UserAgent object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(UserAgent $obj, $key = null)
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
	 * @param      mixed $value A UserAgent object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof UserAgent) {
				$key = (string) $value->getId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or UserAgent object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     UserAgent Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to user_agent
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
		$cls = UserAgentPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = UserAgentPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = UserAgentPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				UserAgentPeer::addInstanceToPool($obj, $key);
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
	 * @return     array (UserAgent object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = UserAgentPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = UserAgentPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + UserAgentPeer::NUM_COLUMNS;
		} else {
			$cls = UserAgentPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			UserAgentPeer::addInstanceToPool($obj, $key);
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
	  $dbMap = Propel::getDatabaseMap(BaseUserAgentPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseUserAgentPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new UserAgentTableMap());
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
		return $withPrefix ? UserAgentPeer::CLASS_DEFAULT : UserAgentPeer::OM_CLASS;
	}

	/**
	 * Method perform an INSERT on the database, given a UserAgent or Criteria object.
	 *
	 * @param      mixed $values Criteria or UserAgent object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(UserAgentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from UserAgent object
		}

		if ($criteria->containsKey(UserAgentPeer::ID) && $criteria->keyContainsValue(UserAgentPeer::ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.UserAgentPeer::ID.')');
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
	 * Method perform an UPDATE on the database, given a UserAgent or Criteria object.
	 *
	 * @param      mixed $values Criteria or UserAgent object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(UserAgentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(UserAgentPeer::ID);
			$value = $criteria->remove(UserAgentPeer::ID);
			if ($value) {
				$selectCriteria->add(UserAgentPeer::ID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(UserAgentPeer::TABLE_NAME);
			}

		} else { // $values is UserAgent object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Method to DELETE all rows from the user_agent table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(UserAgentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(UserAgentPeer::TABLE_NAME, $con, UserAgentPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			UserAgentPeer::clearInstancePool();
			UserAgentPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a UserAgent or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or UserAgent object or primary key or array of primary keys
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
			$con = Propel::getConnection(UserAgentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			UserAgentPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof UserAgent) { // it's a model object
			// invalidate the cache for this single object
			UserAgentPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(UserAgentPeer::ID, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				UserAgentPeer::removeInstanceFromPool($singleval);
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
			UserAgentPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given UserAgent object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      UserAgent $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(UserAgent $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(UserAgentPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(UserAgentPeer::TABLE_NAME);

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

		return BasePeer::doValidate(UserAgentPeer::DATABASE_NAME, UserAgentPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     UserAgent
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = UserAgentPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(UserAgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(UserAgentPeer::DATABASE_NAME);
		$criteria->add(UserAgentPeer::ID, $pk);

		$v = UserAgentPeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(UserAgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(UserAgentPeer::DATABASE_NAME);
			$criteria->add(UserAgentPeer::ID, $pks, Criteria::IN);
			$objs = UserAgentPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseUserAgentPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseUserAgentPeer::buildTableMap();

