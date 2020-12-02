<?php


/**
 * Base static class for performing query and update operations on the 'deal_feed_commission' table.
 *
 * 
 *
 * @package    propel.generator.komideals.om
 */
abstract class BaseDealFeedCommissionPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'komideals';

	/** the table name for this class */
	const TABLE_NAME = 'deal_feed_commission';

	/** the related Propel class for this table */
	const OM_CLASS = 'DealFeedCommission';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'komideals.DealFeedCommission';

	/** the related TableMap class for this table */
	const TM_CLASS = 'DealFeedCommissionTableMap';
	
	/** The total number of columns. */
	const NUM_COLUMNS = 23;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the ID field */
	const ID = 'deal_feed_commission.ID';

	/** the column name for the DEAL_FEED_ID field */
	const DEAL_FEED_ID = 'deal_feed_commission.DEAL_FEED_ID';

	/** the column name for the BUSINESS_ID field */
	const BUSINESS_ID = 'deal_feed_commission.BUSINESS_ID';

	/** the column name for the DATE_CREATED field */
	const DATE_CREATED = 'deal_feed_commission.DATE_CREATED';

	/** the column name for the ACTION_STATUS field */
	const ACTION_STATUS = 'deal_feed_commission.ACTION_STATUS';

	/** the column name for the ACTION_TYPE field */
	const ACTION_TYPE = 'deal_feed_commission.ACTION_TYPE';

	/** the column name for the AD_ID field */
	const AD_ID = 'deal_feed_commission.AD_ID';

	/** the column name for the ADVERTISER_ID field */
	const ADVERTISER_ID = 'deal_feed_commission.ADVERTISER_ID';

	/** the column name for the ADVERTISER_NAME field */
	const ADVERTISER_NAME = 'deal_feed_commission.ADVERTISER_NAME';

	/** the column name for the COMMISSION_AMOUNT field */
	const COMMISSION_AMOUNT = 'deal_feed_commission.COMMISSION_AMOUNT';

	/** the column name for the COUNTRY field */
	const COUNTRY = 'deal_feed_commission.COUNTRY';

	/** the column name for the EVENT_DATE field */
	const EVENT_DATE = 'deal_feed_commission.EVENT_DATE';

	/** the column name for the LOCKING_DATE field */
	const LOCKING_DATE = 'deal_feed_commission.LOCKING_DATE';

	/** the column name for the ORDER_ID field */
	const ORDER_ID = 'deal_feed_commission.ORDER_ID';

	/** the column name for the ORIGINAL field */
	const ORIGINAL = 'deal_feed_commission.ORIGINAL';

	/** the column name for the ORIGINAL_ACTION_ID field */
	const ORIGINAL_ACTION_ID = 'deal_feed_commission.ORIGINAL_ACTION_ID';

	/** the column name for the POSTING_DATE field */
	const POSTING_DATE = 'deal_feed_commission.POSTING_DATE';

	/** the column name for the S_ID field */
	const S_ID = 'deal_feed_commission.S_ID';

	/** the column name for the SALE_AMOUNT field */
	const SALE_AMOUNT = 'deal_feed_commission.SALE_AMOUNT';

	/** the column name for the TRANSACTION_ID field */
	const TRANSACTION_ID = 'deal_feed_commission.TRANSACTION_ID';

	/** the column name for the WEBSITE_ID field */
	const WEBSITE_ID = 'deal_feed_commission.WEBSITE_ID';

	/** the column name for the IS_PAID field */
	const IS_PAID = 'deal_feed_commission.IS_PAID';

	/** the column name for the PUBLISHER_S_ID field */
	const PUBLISHER_S_ID = 'deal_feed_commission.PUBLISHER_S_ID';

	/**
	 * An identiy map to hold any loaded instances of DealFeedCommission objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array DealFeedCommission[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'DealFeedId', 'BusinessId', 'DateCreated', 'ActionStatus', 'ActionType', 'AdId', 'AdvertiserId', 'AdvertiserName', 'CommissionAmount', 'Country', 'EventDate', 'LockingDate', 'OrderId', 'Original', 'OriginalActionId', 'PostingDate', 'SId', 'SaleAmount', 'TransactionId', 'WebsiteId', 'IsPaid', 'PublisherSId', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'dealFeedId', 'businessId', 'dateCreated', 'actionStatus', 'actionType', 'adId', 'advertiserId', 'advertiserName', 'commissionAmount', 'country', 'eventDate', 'lockingDate', 'orderId', 'original', 'originalActionId', 'postingDate', 'sId', 'saleAmount', 'transactionId', 'websiteId', 'isPaid', 'publisherSId', ),
		BasePeer::TYPE_COLNAME => array (self::ID, self::DEAL_FEED_ID, self::BUSINESS_ID, self::DATE_CREATED, self::ACTION_STATUS, self::ACTION_TYPE, self::AD_ID, self::ADVERTISER_ID, self::ADVERTISER_NAME, self::COMMISSION_AMOUNT, self::COUNTRY, self::EVENT_DATE, self::LOCKING_DATE, self::ORDER_ID, self::ORIGINAL, self::ORIGINAL_ACTION_ID, self::POSTING_DATE, self::S_ID, self::SALE_AMOUNT, self::TRANSACTION_ID, self::WEBSITE_ID, self::IS_PAID, self::PUBLISHER_S_ID, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID', 'DEAL_FEED_ID', 'BUSINESS_ID', 'DATE_CREATED', 'ACTION_STATUS', 'ACTION_TYPE', 'AD_ID', 'ADVERTISER_ID', 'ADVERTISER_NAME', 'COMMISSION_AMOUNT', 'COUNTRY', 'EVENT_DATE', 'LOCKING_DATE', 'ORDER_ID', 'ORIGINAL', 'ORIGINAL_ACTION_ID', 'POSTING_DATE', 'S_ID', 'SALE_AMOUNT', 'TRANSACTION_ID', 'WEBSITE_ID', 'IS_PAID', 'PUBLISHER_S_ID', ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'deal_feed_id', 'business_id', 'date_created', 'action_status', 'action_type', 'ad_id', 'advertiser_id', 'advertiser_name', 'commission_amount', 'country', 'event_date', 'locking_date', 'order_id', 'original', 'original_action_id', 'posting_date', 's_id', 'sale_amount', 'transaction_id', 'website_id', 'is_paid', 'publisher_s_id', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'DealFeedId' => 1, 'BusinessId' => 2, 'DateCreated' => 3, 'ActionStatus' => 4, 'ActionType' => 5, 'AdId' => 6, 'AdvertiserId' => 7, 'AdvertiserName' => 8, 'CommissionAmount' => 9, 'Country' => 10, 'EventDate' => 11, 'LockingDate' => 12, 'OrderId' => 13, 'Original' => 14, 'OriginalActionId' => 15, 'PostingDate' => 16, 'SId' => 17, 'SaleAmount' => 18, 'TransactionId' => 19, 'WebsiteId' => 20, 'IsPaid' => 21, 'PublisherSId' => 22, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'dealFeedId' => 1, 'businessId' => 2, 'dateCreated' => 3, 'actionStatus' => 4, 'actionType' => 5, 'adId' => 6, 'advertiserId' => 7, 'advertiserName' => 8, 'commissionAmount' => 9, 'country' => 10, 'eventDate' => 11, 'lockingDate' => 12, 'orderId' => 13, 'original' => 14, 'originalActionId' => 15, 'postingDate' => 16, 'sId' => 17, 'saleAmount' => 18, 'transactionId' => 19, 'websiteId' => 20, 'isPaid' => 21, 'publisherSId' => 22, ),
		BasePeer::TYPE_COLNAME => array (self::ID => 0, self::DEAL_FEED_ID => 1, self::BUSINESS_ID => 2, self::DATE_CREATED => 3, self::ACTION_STATUS => 4, self::ACTION_TYPE => 5, self::AD_ID => 6, self::ADVERTISER_ID => 7, self::ADVERTISER_NAME => 8, self::COMMISSION_AMOUNT => 9, self::COUNTRY => 10, self::EVENT_DATE => 11, self::LOCKING_DATE => 12, self::ORDER_ID => 13, self::ORIGINAL => 14, self::ORIGINAL_ACTION_ID => 15, self::POSTING_DATE => 16, self::S_ID => 17, self::SALE_AMOUNT => 18, self::TRANSACTION_ID => 19, self::WEBSITE_ID => 20, self::IS_PAID => 21, self::PUBLISHER_S_ID => 22, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'DEAL_FEED_ID' => 1, 'BUSINESS_ID' => 2, 'DATE_CREATED' => 3, 'ACTION_STATUS' => 4, 'ACTION_TYPE' => 5, 'AD_ID' => 6, 'ADVERTISER_ID' => 7, 'ADVERTISER_NAME' => 8, 'COMMISSION_AMOUNT' => 9, 'COUNTRY' => 10, 'EVENT_DATE' => 11, 'LOCKING_DATE' => 12, 'ORDER_ID' => 13, 'ORIGINAL' => 14, 'ORIGINAL_ACTION_ID' => 15, 'POSTING_DATE' => 16, 'S_ID' => 17, 'SALE_AMOUNT' => 18, 'TRANSACTION_ID' => 19, 'WEBSITE_ID' => 20, 'IS_PAID' => 21, 'PUBLISHER_S_ID' => 22, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'deal_feed_id' => 1, 'business_id' => 2, 'date_created' => 3, 'action_status' => 4, 'action_type' => 5, 'ad_id' => 6, 'advertiser_id' => 7, 'advertiser_name' => 8, 'commission_amount' => 9, 'country' => 10, 'event_date' => 11, 'locking_date' => 12, 'order_id' => 13, 'original' => 14, 'original_action_id' => 15, 'posting_date' => 16, 's_id' => 17, 'sale_amount' => 18, 'transaction_id' => 19, 'website_id' => 20, 'is_paid' => 21, 'publisher_s_id' => 22, ),
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
	 * @param      string $column The column name for current table. (i.e. DealFeedCommissionPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(DealFeedCommissionPeer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(DealFeedCommissionPeer::ID);
			$criteria->addSelectColumn(DealFeedCommissionPeer::DEAL_FEED_ID);
			$criteria->addSelectColumn(DealFeedCommissionPeer::BUSINESS_ID);
			$criteria->addSelectColumn(DealFeedCommissionPeer::DATE_CREATED);
			$criteria->addSelectColumn(DealFeedCommissionPeer::ACTION_STATUS);
			$criteria->addSelectColumn(DealFeedCommissionPeer::ACTION_TYPE);
			$criteria->addSelectColumn(DealFeedCommissionPeer::AD_ID);
			$criteria->addSelectColumn(DealFeedCommissionPeer::ADVERTISER_ID);
			$criteria->addSelectColumn(DealFeedCommissionPeer::ADVERTISER_NAME);
			$criteria->addSelectColumn(DealFeedCommissionPeer::COMMISSION_AMOUNT);
			$criteria->addSelectColumn(DealFeedCommissionPeer::COUNTRY);
			$criteria->addSelectColumn(DealFeedCommissionPeer::EVENT_DATE);
			$criteria->addSelectColumn(DealFeedCommissionPeer::LOCKING_DATE);
			$criteria->addSelectColumn(DealFeedCommissionPeer::ORDER_ID);
			$criteria->addSelectColumn(DealFeedCommissionPeer::ORIGINAL);
			$criteria->addSelectColumn(DealFeedCommissionPeer::ORIGINAL_ACTION_ID);
			$criteria->addSelectColumn(DealFeedCommissionPeer::POSTING_DATE);
			$criteria->addSelectColumn(DealFeedCommissionPeer::S_ID);
			$criteria->addSelectColumn(DealFeedCommissionPeer::SALE_AMOUNT);
			$criteria->addSelectColumn(DealFeedCommissionPeer::TRANSACTION_ID);
			$criteria->addSelectColumn(DealFeedCommissionPeer::WEBSITE_ID);
			$criteria->addSelectColumn(DealFeedCommissionPeer::IS_PAID);
			$criteria->addSelectColumn(DealFeedCommissionPeer::PUBLISHER_S_ID);
		} else {
			$criteria->addSelectColumn($alias . '.ID');
			$criteria->addSelectColumn($alias . '.DEAL_FEED_ID');
			$criteria->addSelectColumn($alias . '.BUSINESS_ID');
			$criteria->addSelectColumn($alias . '.DATE_CREATED');
			$criteria->addSelectColumn($alias . '.ACTION_STATUS');
			$criteria->addSelectColumn($alias . '.ACTION_TYPE');
			$criteria->addSelectColumn($alias . '.AD_ID');
			$criteria->addSelectColumn($alias . '.ADVERTISER_ID');
			$criteria->addSelectColumn($alias . '.ADVERTISER_NAME');
			$criteria->addSelectColumn($alias . '.COMMISSION_AMOUNT');
			$criteria->addSelectColumn($alias . '.COUNTRY');
			$criteria->addSelectColumn($alias . '.EVENT_DATE');
			$criteria->addSelectColumn($alias . '.LOCKING_DATE');
			$criteria->addSelectColumn($alias . '.ORDER_ID');
			$criteria->addSelectColumn($alias . '.ORIGINAL');
			$criteria->addSelectColumn($alias . '.ORIGINAL_ACTION_ID');
			$criteria->addSelectColumn($alias . '.POSTING_DATE');
			$criteria->addSelectColumn($alias . '.S_ID');
			$criteria->addSelectColumn($alias . '.SALE_AMOUNT');
			$criteria->addSelectColumn($alias . '.TRANSACTION_ID');
			$criteria->addSelectColumn($alias . '.WEBSITE_ID');
			$criteria->addSelectColumn($alias . '.IS_PAID');
			$criteria->addSelectColumn($alias . '.PUBLISHER_S_ID');
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
		$criteria->setPrimaryTableName(DealFeedCommissionPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			DealFeedCommissionPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(DealFeedCommissionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     DealFeedCommission
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = DealFeedCommissionPeer::doSelect($critcopy, $con);
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
		return DealFeedCommissionPeer::populateObjects(DealFeedCommissionPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(DealFeedCommissionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			DealFeedCommissionPeer::addSelectColumns($criteria);
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
	 * @param      DealFeedCommission $value A DealFeedCommission object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(DealFeedCommission $obj, $key = null)
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
	 * @param      mixed $value A DealFeedCommission object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof DealFeedCommission) {
				$key = (string) $value->getId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or DealFeedCommission object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     DealFeedCommission Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to deal_feed_commission
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
		$cls = DealFeedCommissionPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = DealFeedCommissionPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = DealFeedCommissionPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				DealFeedCommissionPeer::addInstanceToPool($obj, $key);
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
	 * @return     array (DealFeedCommission object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = DealFeedCommissionPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = DealFeedCommissionPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + DealFeedCommissionPeer::NUM_COLUMNS;
		} else {
			$cls = DealFeedCommissionPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			DealFeedCommissionPeer::addInstanceToPool($obj, $key);
		}
		return array($obj, $col);
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
		$criteria->setPrimaryTableName(DealFeedCommissionPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			DealFeedCommissionPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(DealFeedCommissionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(DealFeedCommissionPeer::BUSINESS_ID, BusinessPeer::ID, $join_behavior);

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
		$criteria->setPrimaryTableName(DealFeedCommissionPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			DealFeedCommissionPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(DealFeedCommissionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(DealFeedCommissionPeer::DEAL_FEED_ID, DealFeedPeer::ID, $join_behavior);

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
	 * Selects a collection of DealFeedCommission objects pre-filled with their Business objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of DealFeedCommission objects.
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

		DealFeedCommissionPeer::addSelectColumns($criteria);
		$startcol = (DealFeedCommissionPeer::NUM_COLUMNS - DealFeedCommissionPeer::NUM_LAZY_LOAD_COLUMNS);
		BusinessPeer::addSelectColumns($criteria);

		$criteria->addJoin(DealFeedCommissionPeer::BUSINESS_ID, BusinessPeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = DealFeedCommissionPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = DealFeedCommissionPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = DealFeedCommissionPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				DealFeedCommissionPeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (DealFeedCommission) to $obj2 (Business)
				$obj2->addDealFeedCommission($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of DealFeedCommission objects pre-filled with their DealFeed objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of DealFeedCommission objects.
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

		DealFeedCommissionPeer::addSelectColumns($criteria);
		$startcol = (DealFeedCommissionPeer::NUM_COLUMNS - DealFeedCommissionPeer::NUM_LAZY_LOAD_COLUMNS);
		DealFeedPeer::addSelectColumns($criteria);

		$criteria->addJoin(DealFeedCommissionPeer::DEAL_FEED_ID, DealFeedPeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = DealFeedCommissionPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = DealFeedCommissionPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = DealFeedCommissionPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				DealFeedCommissionPeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (DealFeedCommission) to $obj2 (DealFeed)
				$obj2->addDealFeedCommission($obj1);

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
		$criteria->setPrimaryTableName(DealFeedCommissionPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			DealFeedCommissionPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(DealFeedCommissionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(DealFeedCommissionPeer::BUSINESS_ID, BusinessPeer::ID, $join_behavior);

		$criteria->addJoin(DealFeedCommissionPeer::DEAL_FEED_ID, DealFeedPeer::ID, $join_behavior);

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
	 * Selects a collection of DealFeedCommission objects pre-filled with all related objects.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of DealFeedCommission objects.
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

		DealFeedCommissionPeer::addSelectColumns($criteria);
		$startcol2 = (DealFeedCommissionPeer::NUM_COLUMNS - DealFeedCommissionPeer::NUM_LAZY_LOAD_COLUMNS);

		BusinessPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + (BusinessPeer::NUM_COLUMNS - BusinessPeer::NUM_LAZY_LOAD_COLUMNS);

		DealFeedPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + (DealFeedPeer::NUM_COLUMNS - DealFeedPeer::NUM_LAZY_LOAD_COLUMNS);

		$criteria->addJoin(DealFeedCommissionPeer::BUSINESS_ID, BusinessPeer::ID, $join_behavior);

		$criteria->addJoin(DealFeedCommissionPeer::DEAL_FEED_ID, DealFeedPeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = DealFeedCommissionPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = DealFeedCommissionPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = DealFeedCommissionPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				DealFeedCommissionPeer::addInstanceToPool($obj1, $key1);
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
				} // if obj2 loaded

				// Add the $obj1 (DealFeedCommission) to the collection in $obj2 (Business)
				$obj2->addDealFeedCommission($obj1);
			} // if joined row not null

			// Add objects for joined DealFeed rows

			$key3 = DealFeedPeer::getPrimaryKeyHashFromRow($row, $startcol3);
			if ($key3 !== null) {
				$obj3 = DealFeedPeer::getInstanceFromPool($key3);
				if (!$obj3) {

					$cls = DealFeedPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					DealFeedPeer::addInstanceToPool($obj3, $key3);
				} // if obj3 loaded

				// Add the $obj1 (DealFeedCommission) to the collection in $obj3 (DealFeed)
				$obj3->addDealFeedCommission($obj1);
			} // if joined row not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
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
		$criteria->setPrimaryTableName(DealFeedCommissionPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			DealFeedCommissionPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(DealFeedCommissionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(DealFeedCommissionPeer::DEAL_FEED_ID, DealFeedPeer::ID, $join_behavior);

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
		$criteria->setPrimaryTableName(DealFeedCommissionPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			DealFeedCommissionPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(DealFeedCommissionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(DealFeedCommissionPeer::BUSINESS_ID, BusinessPeer::ID, $join_behavior);

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
	 * Selects a collection of DealFeedCommission objects pre-filled with all related objects except Business.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of DealFeedCommission objects.
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

		DealFeedCommissionPeer::addSelectColumns($criteria);
		$startcol2 = (DealFeedCommissionPeer::NUM_COLUMNS - DealFeedCommissionPeer::NUM_LAZY_LOAD_COLUMNS);

		DealFeedPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + (DealFeedPeer::NUM_COLUMNS - DealFeedPeer::NUM_LAZY_LOAD_COLUMNS);

		$criteria->addJoin(DealFeedCommissionPeer::DEAL_FEED_ID, DealFeedPeer::ID, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = DealFeedCommissionPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = DealFeedCommissionPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = DealFeedCommissionPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				DealFeedCommissionPeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (DealFeedCommission) to the collection in $obj2 (DealFeed)
				$obj2->addDealFeedCommission($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of DealFeedCommission objects pre-filled with all related objects except DealFeed.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of DealFeedCommission objects.
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

		DealFeedCommissionPeer::addSelectColumns($criteria);
		$startcol2 = (DealFeedCommissionPeer::NUM_COLUMNS - DealFeedCommissionPeer::NUM_LAZY_LOAD_COLUMNS);

		BusinessPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + (BusinessPeer::NUM_COLUMNS - BusinessPeer::NUM_LAZY_LOAD_COLUMNS);

		$criteria->addJoin(DealFeedCommissionPeer::BUSINESS_ID, BusinessPeer::ID, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = DealFeedCommissionPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = DealFeedCommissionPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = DealFeedCommissionPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				DealFeedCommissionPeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (DealFeedCommission) to the collection in $obj2 (Business)
				$obj2->addDealFeedCommission($obj1);

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
	  $dbMap = Propel::getDatabaseMap(BaseDealFeedCommissionPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseDealFeedCommissionPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new DealFeedCommissionTableMap());
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
		return $withPrefix ? DealFeedCommissionPeer::CLASS_DEFAULT : DealFeedCommissionPeer::OM_CLASS;
	}

	/**
	 * Method perform an INSERT on the database, given a DealFeedCommission or Criteria object.
	 *
	 * @param      mixed $values Criteria or DealFeedCommission object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(DealFeedCommissionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from DealFeedCommission object
		}

		if ($criteria->containsKey(DealFeedCommissionPeer::ID) && $criteria->keyContainsValue(DealFeedCommissionPeer::ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.DealFeedCommissionPeer::ID.')');
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
	 * Method perform an UPDATE on the database, given a DealFeedCommission or Criteria object.
	 *
	 * @param      mixed $values Criteria or DealFeedCommission object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(DealFeedCommissionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(DealFeedCommissionPeer::ID);
			$value = $criteria->remove(DealFeedCommissionPeer::ID);
			if ($value) {
				$selectCriteria->add(DealFeedCommissionPeer::ID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(DealFeedCommissionPeer::TABLE_NAME);
			}

		} else { // $values is DealFeedCommission object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Method to DELETE all rows from the deal_feed_commission table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(DealFeedCommissionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(DealFeedCommissionPeer::TABLE_NAME, $con, DealFeedCommissionPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			DealFeedCommissionPeer::clearInstancePool();
			DealFeedCommissionPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a DealFeedCommission or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or DealFeedCommission object or primary key or array of primary keys
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
			$con = Propel::getConnection(DealFeedCommissionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			DealFeedCommissionPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof DealFeedCommission) { // it's a model object
			// invalidate the cache for this single object
			DealFeedCommissionPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(DealFeedCommissionPeer::ID, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				DealFeedCommissionPeer::removeInstanceFromPool($singleval);
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
			DealFeedCommissionPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given DealFeedCommission object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      DealFeedCommission $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(DealFeedCommission $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(DealFeedCommissionPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(DealFeedCommissionPeer::TABLE_NAME);

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

		return BasePeer::doValidate(DealFeedCommissionPeer::DATABASE_NAME, DealFeedCommissionPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     DealFeedCommission
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = DealFeedCommissionPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(DealFeedCommissionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(DealFeedCommissionPeer::DATABASE_NAME);
		$criteria->add(DealFeedCommissionPeer::ID, $pk);

		$v = DealFeedCommissionPeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(DealFeedCommissionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(DealFeedCommissionPeer::DATABASE_NAME);
			$criteria->add(DealFeedCommissionPeer::ID, $pks, Criteria::IN);
			$objs = DealFeedCommissionPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseDealFeedCommissionPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseDealFeedCommissionPeer::buildTableMap();

