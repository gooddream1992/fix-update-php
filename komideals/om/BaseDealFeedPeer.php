<?php


/**
 * Base static class for performing query and update operations on the 'deal_feed' table.
 *
 * 
 *
 * @package    propel.generator.komideals.om
 */
abstract class BaseDealFeedPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'komideals';

	/** the table name for this class */
	const TABLE_NAME = 'deal_feed';

	/** the related Propel class for this table */
	const OM_CLASS = 'DealFeed';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'komideals.DealFeed';

	/** the related TableMap class for this table */
	const TM_CLASS = 'DealFeedTableMap';
	
	/** The total number of columns. */
	const NUM_COLUMNS = 32;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the ID field */
	const ID = 'deal_feed.ID';

	/** the column name for the BUSINESS_ID field */
	const BUSINESS_ID = 'deal_feed.BUSINESS_ID';

	/** the column name for the DATE_START field */
	const DATE_START = 'deal_feed.DATE_START';

	/** the column name for the DATE_END field */
	const DATE_END = 'deal_feed.DATE_END';

	/** the column name for the PRICE field */
	const PRICE = 'deal_feed.PRICE';

	/** the column name for the RETAIL_VALUE field */
	const RETAIL_VALUE = 'deal_feed.RETAIL_VALUE';

	/** the column name for the DETAILS field */
	const DETAILS = 'deal_feed.DETAILS';

	/** the column name for the CLICK_URL field */
	const CLICK_URL = 'deal_feed.CLICK_URL';

	/** the column name for the IS_ACTIVE field */
	const IS_ACTIVE = 'deal_feed.IS_ACTIVE';

	/** the column name for the IS_TIPPED field */
	const IS_TIPPED = 'deal_feed.IS_TIPPED';

	/** the column name for the DATE_TIPPED field */
	const DATE_TIPPED = 'deal_feed.DATE_TIPPED';

	/** the column name for the TIPPING_POINT field */
	const TIPPING_POINT = 'deal_feed.TIPPING_POINT';

	/** the column name for the CATEGORY_ID field */
	const CATEGORY_ID = 'deal_feed.CATEGORY_ID';

	/** the column name for the LATITUDE field */
	const LATITUDE = 'deal_feed.LATITUDE';

	/** the column name for the LONGITUDE field */
	const LONGITUDE = 'deal_feed.LONGITUDE';

	/** the column name for the PERMALINK field */
	const PERMALINK = 'deal_feed.PERMALINK';

	/** the column name for the PHOTO_SMALL field */
	const PHOTO_SMALL = 'deal_feed.PHOTO_SMALL';

	/** the column name for the PHOTO_MEDIUM field */
	const PHOTO_MEDIUM = 'deal_feed.PHOTO_MEDIUM';

	/** the column name for the PHOTO field */
	const PHOTO = 'deal_feed.PHOTO';

	/** the column name for the SUBJECT field */
	const SUBJECT = 'deal_feed.SUBJECT';

	/** the column name for the TITLE field */
	const TITLE = 'deal_feed.TITLE';

	/** the column name for the COMMENT_NUMBER field */
	const COMMENT_NUMBER = 'deal_feed.COMMENT_NUMBER';

	/** the column name for the DISCUSSION_URL field */
	const DISCUSSION_URL = 'deal_feed.DISCUSSION_URL';

	/** the column name for the NUMBER_SOLD field */
	const NUMBER_SOLD = 'deal_feed.NUMBER_SOLD';

	/** the column name for the TIPPED_AT field */
	const TIPPED_AT = 'deal_feed.TIPPED_AT';

	/** the column name for the LOCATION_NOTE field */
	const LOCATION_NOTE = 'deal_feed.LOCATION_NOTE';

	/** the column name for the IS_ONLINE field */
	const IS_ONLINE = 'deal_feed.IS_ONLINE';

	/** the column name for the WEBSITE_URL field */
	const WEBSITE_URL = 'deal_feed.WEBSITE_URL';

	/** the column name for the DATE_CREATED field */
	const DATE_CREATED = 'deal_feed.DATE_CREATED';

	/** the column name for the DATE_MODIFIED field */
	const DATE_MODIFIED = 'deal_feed.DATE_MODIFIED';

	/** the column name for the DEAL_FEED_SOURCE_ID field */
	const DEAL_FEED_SOURCE_ID = 'deal_feed.DEAL_FEED_SOURCE_ID';

	/** the column name for the DEAL_FEED_DIVISION_ID field */
	const DEAL_FEED_DIVISION_ID = 'deal_feed.DEAL_FEED_DIVISION_ID';

	/**
	 * An identiy map to hold any loaded instances of DealFeed objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array DealFeed[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'BusinessId', 'DateStart', 'DateEnd', 'Price', 'RetailValue', 'Details', 'ClickUrl', 'IsActive', 'IsTipped', 'DateTipped', 'TippingPoint', 'CategoryId', 'Latitude', 'Longitude', 'Permalink', 'PhotoSmall', 'PhotoMedium', 'Photo', 'Subject', 'Title', 'CommentNumber', 'DiscussionUrl', 'NumberSold', 'TippedAt', 'LocationNote', 'IsOnline', 'WebsiteUrl', 'DateCreated', 'DateModified', 'DealFeedSourceId', 'DealFeedDivisionId', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'businessId', 'dateStart', 'dateEnd', 'price', 'retailValue', 'details', 'clickUrl', 'isActive', 'isTipped', 'dateTipped', 'tippingPoint', 'categoryId', 'latitude', 'longitude', 'permalink', 'photoSmall', 'photoMedium', 'photo', 'subject', 'title', 'commentNumber', 'discussionUrl', 'numberSold', 'tippedAt', 'locationNote', 'isOnline', 'websiteUrl', 'dateCreated', 'dateModified', 'dealFeedSourceId', 'dealFeedDivisionId', ),
		BasePeer::TYPE_COLNAME => array (self::ID, self::BUSINESS_ID, self::DATE_START, self::DATE_END, self::PRICE, self::RETAIL_VALUE, self::DETAILS, self::CLICK_URL, self::IS_ACTIVE, self::IS_TIPPED, self::DATE_TIPPED, self::TIPPING_POINT, self::CATEGORY_ID, self::LATITUDE, self::LONGITUDE, self::PERMALINK, self::PHOTO_SMALL, self::PHOTO_MEDIUM, self::PHOTO, self::SUBJECT, self::TITLE, self::COMMENT_NUMBER, self::DISCUSSION_URL, self::NUMBER_SOLD, self::TIPPED_AT, self::LOCATION_NOTE, self::IS_ONLINE, self::WEBSITE_URL, self::DATE_CREATED, self::DATE_MODIFIED, self::DEAL_FEED_SOURCE_ID, self::DEAL_FEED_DIVISION_ID, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID', 'BUSINESS_ID', 'DATE_START', 'DATE_END', 'PRICE', 'RETAIL_VALUE', 'DETAILS', 'CLICK_URL', 'IS_ACTIVE', 'IS_TIPPED', 'DATE_TIPPED', 'TIPPING_POINT', 'CATEGORY_ID', 'LATITUDE', 'LONGITUDE', 'PERMALINK', 'PHOTO_SMALL', 'PHOTO_MEDIUM', 'PHOTO', 'SUBJECT', 'TITLE', 'COMMENT_NUMBER', 'DISCUSSION_URL', 'NUMBER_SOLD', 'TIPPED_AT', 'LOCATION_NOTE', 'IS_ONLINE', 'WEBSITE_URL', 'DATE_CREATED', 'DATE_MODIFIED', 'DEAL_FEED_SOURCE_ID', 'DEAL_FEED_DIVISION_ID', ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'business_id', 'date_start', 'date_end', 'price', 'retail_value', 'details', 'click_url', 'is_active', 'is_tipped', 'date_tipped', 'tipping_point', 'category_id', 'latitude', 'longitude', 'permalink', 'photo_small', 'photo_medium', 'photo', 'subject', 'title', 'comment_number', 'discussion_url', 'number_sold', 'tipped_at', 'location_note', 'is_online', 'website_url', 'date_created', 'date_modified', 'deal_feed_source_id', 'deal_feed_division_id', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'BusinessId' => 1, 'DateStart' => 2, 'DateEnd' => 3, 'Price' => 4, 'RetailValue' => 5, 'Details' => 6, 'ClickUrl' => 7, 'IsActive' => 8, 'IsTipped' => 9, 'DateTipped' => 10, 'TippingPoint' => 11, 'CategoryId' => 12, 'Latitude' => 13, 'Longitude' => 14, 'Permalink' => 15, 'PhotoSmall' => 16, 'PhotoMedium' => 17, 'Photo' => 18, 'Subject' => 19, 'Title' => 20, 'CommentNumber' => 21, 'DiscussionUrl' => 22, 'NumberSold' => 23, 'TippedAt' => 24, 'LocationNote' => 25, 'IsOnline' => 26, 'WebsiteUrl' => 27, 'DateCreated' => 28, 'DateModified' => 29, 'DealFeedSourceId' => 30, 'DealFeedDivisionId' => 31, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'businessId' => 1, 'dateStart' => 2, 'dateEnd' => 3, 'price' => 4, 'retailValue' => 5, 'details' => 6, 'clickUrl' => 7, 'isActive' => 8, 'isTipped' => 9, 'dateTipped' => 10, 'tippingPoint' => 11, 'categoryId' => 12, 'latitude' => 13, 'longitude' => 14, 'permalink' => 15, 'photoSmall' => 16, 'photoMedium' => 17, 'photo' => 18, 'subject' => 19, 'title' => 20, 'commentNumber' => 21, 'discussionUrl' => 22, 'numberSold' => 23, 'tippedAt' => 24, 'locationNote' => 25, 'isOnline' => 26, 'websiteUrl' => 27, 'dateCreated' => 28, 'dateModified' => 29, 'dealFeedSourceId' => 30, 'dealFeedDivisionId' => 31, ),
		BasePeer::TYPE_COLNAME => array (self::ID => 0, self::BUSINESS_ID => 1, self::DATE_START => 2, self::DATE_END => 3, self::PRICE => 4, self::RETAIL_VALUE => 5, self::DETAILS => 6, self::CLICK_URL => 7, self::IS_ACTIVE => 8, self::IS_TIPPED => 9, self::DATE_TIPPED => 10, self::TIPPING_POINT => 11, self::CATEGORY_ID => 12, self::LATITUDE => 13, self::LONGITUDE => 14, self::PERMALINK => 15, self::PHOTO_SMALL => 16, self::PHOTO_MEDIUM => 17, self::PHOTO => 18, self::SUBJECT => 19, self::TITLE => 20, self::COMMENT_NUMBER => 21, self::DISCUSSION_URL => 22, self::NUMBER_SOLD => 23, self::TIPPED_AT => 24, self::LOCATION_NOTE => 25, self::IS_ONLINE => 26, self::WEBSITE_URL => 27, self::DATE_CREATED => 28, self::DATE_MODIFIED => 29, self::DEAL_FEED_SOURCE_ID => 30, self::DEAL_FEED_DIVISION_ID => 31, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'BUSINESS_ID' => 1, 'DATE_START' => 2, 'DATE_END' => 3, 'PRICE' => 4, 'RETAIL_VALUE' => 5, 'DETAILS' => 6, 'CLICK_URL' => 7, 'IS_ACTIVE' => 8, 'IS_TIPPED' => 9, 'DATE_TIPPED' => 10, 'TIPPING_POINT' => 11, 'CATEGORY_ID' => 12, 'LATITUDE' => 13, 'LONGITUDE' => 14, 'PERMALINK' => 15, 'PHOTO_SMALL' => 16, 'PHOTO_MEDIUM' => 17, 'PHOTO' => 18, 'SUBJECT' => 19, 'TITLE' => 20, 'COMMENT_NUMBER' => 21, 'DISCUSSION_URL' => 22, 'NUMBER_SOLD' => 23, 'TIPPED_AT' => 24, 'LOCATION_NOTE' => 25, 'IS_ONLINE' => 26, 'WEBSITE_URL' => 27, 'DATE_CREATED' => 28, 'DATE_MODIFIED' => 29, 'DEAL_FEED_SOURCE_ID' => 30, 'DEAL_FEED_DIVISION_ID' => 31, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'business_id' => 1, 'date_start' => 2, 'date_end' => 3, 'price' => 4, 'retail_value' => 5, 'details' => 6, 'click_url' => 7, 'is_active' => 8, 'is_tipped' => 9, 'date_tipped' => 10, 'tipping_point' => 11, 'category_id' => 12, 'latitude' => 13, 'longitude' => 14, 'permalink' => 15, 'photo_small' => 16, 'photo_medium' => 17, 'photo' => 18, 'subject' => 19, 'title' => 20, 'comment_number' => 21, 'discussion_url' => 22, 'number_sold' => 23, 'tipped_at' => 24, 'location_note' => 25, 'is_online' => 26, 'website_url' => 27, 'date_created' => 28, 'date_modified' => 29, 'deal_feed_source_id' => 30, 'deal_feed_division_id' => 31, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, )
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
	 * @param      string $column The column name for current table. (i.e. DealFeedPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(DealFeedPeer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(DealFeedPeer::ID);
			$criteria->addSelectColumn(DealFeedPeer::BUSINESS_ID);
			$criteria->addSelectColumn(DealFeedPeer::DATE_START);
			$criteria->addSelectColumn(DealFeedPeer::DATE_END);
			$criteria->addSelectColumn(DealFeedPeer::PRICE);
			$criteria->addSelectColumn(DealFeedPeer::RETAIL_VALUE);
			$criteria->addSelectColumn(DealFeedPeer::DETAILS);
			$criteria->addSelectColumn(DealFeedPeer::CLICK_URL);
			$criteria->addSelectColumn(DealFeedPeer::IS_ACTIVE);
			$criteria->addSelectColumn(DealFeedPeer::IS_TIPPED);
			$criteria->addSelectColumn(DealFeedPeer::DATE_TIPPED);
			$criteria->addSelectColumn(DealFeedPeer::TIPPING_POINT);
			$criteria->addSelectColumn(DealFeedPeer::CATEGORY_ID);
			$criteria->addSelectColumn(DealFeedPeer::LATITUDE);
			$criteria->addSelectColumn(DealFeedPeer::LONGITUDE);
			$criteria->addSelectColumn(DealFeedPeer::PERMALINK);
			$criteria->addSelectColumn(DealFeedPeer::PHOTO_SMALL);
			$criteria->addSelectColumn(DealFeedPeer::PHOTO_MEDIUM);
			$criteria->addSelectColumn(DealFeedPeer::PHOTO);
			$criteria->addSelectColumn(DealFeedPeer::SUBJECT);
			$criteria->addSelectColumn(DealFeedPeer::TITLE);
			$criteria->addSelectColumn(DealFeedPeer::COMMENT_NUMBER);
			$criteria->addSelectColumn(DealFeedPeer::DISCUSSION_URL);
			$criteria->addSelectColumn(DealFeedPeer::NUMBER_SOLD);
			$criteria->addSelectColumn(DealFeedPeer::TIPPED_AT);
			$criteria->addSelectColumn(DealFeedPeer::LOCATION_NOTE);
			$criteria->addSelectColumn(DealFeedPeer::IS_ONLINE);
			$criteria->addSelectColumn(DealFeedPeer::WEBSITE_URL);
			$criteria->addSelectColumn(DealFeedPeer::DATE_CREATED);
			$criteria->addSelectColumn(DealFeedPeer::DATE_MODIFIED);
			$criteria->addSelectColumn(DealFeedPeer::DEAL_FEED_SOURCE_ID);
			$criteria->addSelectColumn(DealFeedPeer::DEAL_FEED_DIVISION_ID);
		} else {
			$criteria->addSelectColumn($alias . '.ID');
			$criteria->addSelectColumn($alias . '.BUSINESS_ID');
			$criteria->addSelectColumn($alias . '.DATE_START');
			$criteria->addSelectColumn($alias . '.DATE_END');
			$criteria->addSelectColumn($alias . '.PRICE');
			$criteria->addSelectColumn($alias . '.RETAIL_VALUE');
			$criteria->addSelectColumn($alias . '.DETAILS');
			$criteria->addSelectColumn($alias . '.CLICK_URL');
			$criteria->addSelectColumn($alias . '.IS_ACTIVE');
			$criteria->addSelectColumn($alias . '.IS_TIPPED');
			$criteria->addSelectColumn($alias . '.DATE_TIPPED');
			$criteria->addSelectColumn($alias . '.TIPPING_POINT');
			$criteria->addSelectColumn($alias . '.CATEGORY_ID');
			$criteria->addSelectColumn($alias . '.LATITUDE');
			$criteria->addSelectColumn($alias . '.LONGITUDE');
			$criteria->addSelectColumn($alias . '.PERMALINK');
			$criteria->addSelectColumn($alias . '.PHOTO_SMALL');
			$criteria->addSelectColumn($alias . '.PHOTO_MEDIUM');
			$criteria->addSelectColumn($alias . '.PHOTO');
			$criteria->addSelectColumn($alias . '.SUBJECT');
			$criteria->addSelectColumn($alias . '.TITLE');
			$criteria->addSelectColumn($alias . '.COMMENT_NUMBER');
			$criteria->addSelectColumn($alias . '.DISCUSSION_URL');
			$criteria->addSelectColumn($alias . '.NUMBER_SOLD');
			$criteria->addSelectColumn($alias . '.TIPPED_AT');
			$criteria->addSelectColumn($alias . '.LOCATION_NOTE');
			$criteria->addSelectColumn($alias . '.IS_ONLINE');
			$criteria->addSelectColumn($alias . '.WEBSITE_URL');
			$criteria->addSelectColumn($alias . '.DATE_CREATED');
			$criteria->addSelectColumn($alias . '.DATE_MODIFIED');
			$criteria->addSelectColumn($alias . '.DEAL_FEED_SOURCE_ID');
			$criteria->addSelectColumn($alias . '.DEAL_FEED_DIVISION_ID');
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
		$criteria->setPrimaryTableName(DealFeedPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			DealFeedPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(DealFeedPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     DealFeed
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = DealFeedPeer::doSelect($critcopy, $con);
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
		return DealFeedPeer::populateObjects(DealFeedPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(DealFeedPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			DealFeedPeer::addSelectColumns($criteria);
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
	 * @param      DealFeed $value A DealFeed object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(DealFeed $obj, $key = null)
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
	 * @param      mixed $value A DealFeed object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof DealFeed) {
				$key = (string) $value->getId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or DealFeed object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     DealFeed Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to deal_feed
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
		$cls = DealFeedPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = DealFeedPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = DealFeedPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				DealFeedPeer::addInstanceToPool($obj, $key);
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
	 * @return     array (DealFeed object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = DealFeedPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = DealFeedPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + DealFeedPeer::NUM_COLUMNS;
		} else {
			$cls = DealFeedPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			DealFeedPeer::addInstanceToPool($obj, $key);
		}
		return array($obj, $col);
	}

	/**
	 * Returns the number of rows matching criteria, joining the related DealFeedDivision table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinDealFeedDivision(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(DealFeedPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			DealFeedPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(DealFeedPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(DealFeedPeer::DEAL_FEED_DIVISION_ID, DealFeedDivisionPeer::ID, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related Category table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinCategory(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(DealFeedPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			DealFeedPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(DealFeedPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(DealFeedPeer::CATEGORY_ID, CategoryPeer::ID, $join_behavior);

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
		$criteria->setPrimaryTableName(DealFeedPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			DealFeedPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(DealFeedPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(DealFeedPeer::BUSINESS_ID, BusinessPeer::ID, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related DealFeedSource table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinDealFeedSource(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(DealFeedPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			DealFeedPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(DealFeedPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(DealFeedPeer::DEAL_FEED_SOURCE_ID, DealFeedSourcePeer::ID, $join_behavior);

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
	 * Selects a collection of DealFeed objects pre-filled with their DealFeedDivision objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of DealFeed objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinDealFeedDivision(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		DealFeedPeer::addSelectColumns($criteria);
		$startcol = (DealFeedPeer::NUM_COLUMNS - DealFeedPeer::NUM_LAZY_LOAD_COLUMNS);
		DealFeedDivisionPeer::addSelectColumns($criteria);

		$criteria->addJoin(DealFeedPeer::DEAL_FEED_DIVISION_ID, DealFeedDivisionPeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = DealFeedPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = DealFeedPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = DealFeedPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				DealFeedPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = DealFeedDivisionPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = DealFeedDivisionPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = DealFeedDivisionPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					DealFeedDivisionPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (DealFeed) to $obj2 (DealFeedDivision)
				$obj2->addDealFeed($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of DealFeed objects pre-filled with their Category objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of DealFeed objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinCategory(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		DealFeedPeer::addSelectColumns($criteria);
		$startcol = (DealFeedPeer::NUM_COLUMNS - DealFeedPeer::NUM_LAZY_LOAD_COLUMNS);
		CategoryPeer::addSelectColumns($criteria);

		$criteria->addJoin(DealFeedPeer::CATEGORY_ID, CategoryPeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = DealFeedPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = DealFeedPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = DealFeedPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				DealFeedPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = CategoryPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = CategoryPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = CategoryPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					CategoryPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (DealFeed) to $obj2 (Category)
				$obj2->addDealFeed($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of DealFeed objects pre-filled with their Business objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of DealFeed objects.
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

		DealFeedPeer::addSelectColumns($criteria);
		$startcol = (DealFeedPeer::NUM_COLUMNS - DealFeedPeer::NUM_LAZY_LOAD_COLUMNS);
		BusinessPeer::addSelectColumns($criteria);

		$criteria->addJoin(DealFeedPeer::BUSINESS_ID, BusinessPeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = DealFeedPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = DealFeedPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = DealFeedPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				DealFeedPeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (DealFeed) to $obj2 (Business)
				$obj2->addDealFeed($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of DealFeed objects pre-filled with their DealFeedSource objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of DealFeed objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinDealFeedSource(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		DealFeedPeer::addSelectColumns($criteria);
		$startcol = (DealFeedPeer::NUM_COLUMNS - DealFeedPeer::NUM_LAZY_LOAD_COLUMNS);
		DealFeedSourcePeer::addSelectColumns($criteria);

		$criteria->addJoin(DealFeedPeer::DEAL_FEED_SOURCE_ID, DealFeedSourcePeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = DealFeedPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = DealFeedPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = DealFeedPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				DealFeedPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = DealFeedSourcePeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = DealFeedSourcePeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = DealFeedSourcePeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					DealFeedSourcePeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (DealFeed) to $obj2 (DealFeedSource)
				$obj2->addDealFeed($obj1);

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
		$criteria->setPrimaryTableName(DealFeedPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			DealFeedPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(DealFeedPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(DealFeedPeer::DEAL_FEED_DIVISION_ID, DealFeedDivisionPeer::ID, $join_behavior);

		$criteria->addJoin(DealFeedPeer::CATEGORY_ID, CategoryPeer::ID, $join_behavior);

		$criteria->addJoin(DealFeedPeer::BUSINESS_ID, BusinessPeer::ID, $join_behavior);

		$criteria->addJoin(DealFeedPeer::DEAL_FEED_SOURCE_ID, DealFeedSourcePeer::ID, $join_behavior);

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
	 * Selects a collection of DealFeed objects pre-filled with all related objects.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of DealFeed objects.
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

		DealFeedPeer::addSelectColumns($criteria);
		$startcol2 = (DealFeedPeer::NUM_COLUMNS - DealFeedPeer::NUM_LAZY_LOAD_COLUMNS);

		DealFeedDivisionPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + (DealFeedDivisionPeer::NUM_COLUMNS - DealFeedDivisionPeer::NUM_LAZY_LOAD_COLUMNS);

		CategoryPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + (CategoryPeer::NUM_COLUMNS - CategoryPeer::NUM_LAZY_LOAD_COLUMNS);

		BusinessPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + (BusinessPeer::NUM_COLUMNS - BusinessPeer::NUM_LAZY_LOAD_COLUMNS);

		DealFeedSourcePeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + (DealFeedSourcePeer::NUM_COLUMNS - DealFeedSourcePeer::NUM_LAZY_LOAD_COLUMNS);

		$criteria->addJoin(DealFeedPeer::DEAL_FEED_DIVISION_ID, DealFeedDivisionPeer::ID, $join_behavior);

		$criteria->addJoin(DealFeedPeer::CATEGORY_ID, CategoryPeer::ID, $join_behavior);

		$criteria->addJoin(DealFeedPeer::BUSINESS_ID, BusinessPeer::ID, $join_behavior);

		$criteria->addJoin(DealFeedPeer::DEAL_FEED_SOURCE_ID, DealFeedSourcePeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = DealFeedPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = DealFeedPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = DealFeedPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				DealFeedPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

			// Add objects for joined DealFeedDivision rows

			$key2 = DealFeedDivisionPeer::getPrimaryKeyHashFromRow($row, $startcol2);
			if ($key2 !== null) {
				$obj2 = DealFeedDivisionPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = DealFeedDivisionPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					DealFeedDivisionPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 loaded

				// Add the $obj1 (DealFeed) to the collection in $obj2 (DealFeedDivision)
				$obj2->addDealFeed($obj1);
			} // if joined row not null

			// Add objects for joined Category rows

			$key3 = CategoryPeer::getPrimaryKeyHashFromRow($row, $startcol3);
			if ($key3 !== null) {
				$obj3 = CategoryPeer::getInstanceFromPool($key3);
				if (!$obj3) {

					$cls = CategoryPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					CategoryPeer::addInstanceToPool($obj3, $key3);
				} // if obj3 loaded

				// Add the $obj1 (DealFeed) to the collection in $obj3 (Category)
				$obj3->addDealFeed($obj1);
			} // if joined row not null

			// Add objects for joined Business rows

			$key4 = BusinessPeer::getPrimaryKeyHashFromRow($row, $startcol4);
			if ($key4 !== null) {
				$obj4 = BusinessPeer::getInstanceFromPool($key4);
				if (!$obj4) {

					$cls = BusinessPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					BusinessPeer::addInstanceToPool($obj4, $key4);
				} // if obj4 loaded

				// Add the $obj1 (DealFeed) to the collection in $obj4 (Business)
				$obj4->addDealFeed($obj1);
			} // if joined row not null

			// Add objects for joined DealFeedSource rows

			$key5 = DealFeedSourcePeer::getPrimaryKeyHashFromRow($row, $startcol5);
			if ($key5 !== null) {
				$obj5 = DealFeedSourcePeer::getInstanceFromPool($key5);
				if (!$obj5) {

					$cls = DealFeedSourcePeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					DealFeedSourcePeer::addInstanceToPool($obj5, $key5);
				} // if obj5 loaded

				// Add the $obj1 (DealFeed) to the collection in $obj5 (DealFeedSource)
				$obj5->addDealFeed($obj1);
			} // if joined row not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related DealFeedDivision table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptDealFeedDivision(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(DealFeedPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			DealFeedPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(DealFeedPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(DealFeedPeer::CATEGORY_ID, CategoryPeer::ID, $join_behavior);

		$criteria->addJoin(DealFeedPeer::BUSINESS_ID, BusinessPeer::ID, $join_behavior);

		$criteria->addJoin(DealFeedPeer::DEAL_FEED_SOURCE_ID, DealFeedSourcePeer::ID, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related Category table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptCategory(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(DealFeedPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			DealFeedPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(DealFeedPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(DealFeedPeer::DEAL_FEED_DIVISION_ID, DealFeedDivisionPeer::ID, $join_behavior);

		$criteria->addJoin(DealFeedPeer::BUSINESS_ID, BusinessPeer::ID, $join_behavior);

		$criteria->addJoin(DealFeedPeer::DEAL_FEED_SOURCE_ID, DealFeedSourcePeer::ID, $join_behavior);

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
		$criteria->setPrimaryTableName(DealFeedPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			DealFeedPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(DealFeedPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(DealFeedPeer::DEAL_FEED_DIVISION_ID, DealFeedDivisionPeer::ID, $join_behavior);

		$criteria->addJoin(DealFeedPeer::CATEGORY_ID, CategoryPeer::ID, $join_behavior);

		$criteria->addJoin(DealFeedPeer::DEAL_FEED_SOURCE_ID, DealFeedSourcePeer::ID, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related DealFeedSource table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptDealFeedSource(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(DealFeedPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			DealFeedPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(DealFeedPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(DealFeedPeer::DEAL_FEED_DIVISION_ID, DealFeedDivisionPeer::ID, $join_behavior);

		$criteria->addJoin(DealFeedPeer::CATEGORY_ID, CategoryPeer::ID, $join_behavior);

		$criteria->addJoin(DealFeedPeer::BUSINESS_ID, BusinessPeer::ID, $join_behavior);

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
	 * Selects a collection of DealFeed objects pre-filled with all related objects except DealFeedDivision.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of DealFeed objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptDealFeedDivision(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		DealFeedPeer::addSelectColumns($criteria);
		$startcol2 = (DealFeedPeer::NUM_COLUMNS - DealFeedPeer::NUM_LAZY_LOAD_COLUMNS);

		CategoryPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + (CategoryPeer::NUM_COLUMNS - CategoryPeer::NUM_LAZY_LOAD_COLUMNS);

		BusinessPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + (BusinessPeer::NUM_COLUMNS - BusinessPeer::NUM_LAZY_LOAD_COLUMNS);

		DealFeedSourcePeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + (DealFeedSourcePeer::NUM_COLUMNS - DealFeedSourcePeer::NUM_LAZY_LOAD_COLUMNS);

		$criteria->addJoin(DealFeedPeer::CATEGORY_ID, CategoryPeer::ID, $join_behavior);

		$criteria->addJoin(DealFeedPeer::BUSINESS_ID, BusinessPeer::ID, $join_behavior);

		$criteria->addJoin(DealFeedPeer::DEAL_FEED_SOURCE_ID, DealFeedSourcePeer::ID, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = DealFeedPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = DealFeedPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = DealFeedPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				DealFeedPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined Category rows

				$key2 = CategoryPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = CategoryPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = CategoryPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					CategoryPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (DealFeed) to the collection in $obj2 (Category)
				$obj2->addDealFeed($obj1);

			} // if joined row is not null

				// Add objects for joined Business rows

				$key3 = BusinessPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = BusinessPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = BusinessPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					BusinessPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (DealFeed) to the collection in $obj3 (Business)
				$obj3->addDealFeed($obj1);

			} // if joined row is not null

				// Add objects for joined DealFeedSource rows

				$key4 = DealFeedSourcePeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = DealFeedSourcePeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = DealFeedSourcePeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					DealFeedSourcePeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (DealFeed) to the collection in $obj4 (DealFeedSource)
				$obj4->addDealFeed($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of DealFeed objects pre-filled with all related objects except Category.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of DealFeed objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptCategory(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		DealFeedPeer::addSelectColumns($criteria);
		$startcol2 = (DealFeedPeer::NUM_COLUMNS - DealFeedPeer::NUM_LAZY_LOAD_COLUMNS);

		DealFeedDivisionPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + (DealFeedDivisionPeer::NUM_COLUMNS - DealFeedDivisionPeer::NUM_LAZY_LOAD_COLUMNS);

		BusinessPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + (BusinessPeer::NUM_COLUMNS - BusinessPeer::NUM_LAZY_LOAD_COLUMNS);

		DealFeedSourcePeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + (DealFeedSourcePeer::NUM_COLUMNS - DealFeedSourcePeer::NUM_LAZY_LOAD_COLUMNS);

		$criteria->addJoin(DealFeedPeer::DEAL_FEED_DIVISION_ID, DealFeedDivisionPeer::ID, $join_behavior);

		$criteria->addJoin(DealFeedPeer::BUSINESS_ID, BusinessPeer::ID, $join_behavior);

		$criteria->addJoin(DealFeedPeer::DEAL_FEED_SOURCE_ID, DealFeedSourcePeer::ID, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = DealFeedPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = DealFeedPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = DealFeedPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				DealFeedPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined DealFeedDivision rows

				$key2 = DealFeedDivisionPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = DealFeedDivisionPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = DealFeedDivisionPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					DealFeedDivisionPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (DealFeed) to the collection in $obj2 (DealFeedDivision)
				$obj2->addDealFeed($obj1);

			} // if joined row is not null

				// Add objects for joined Business rows

				$key3 = BusinessPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = BusinessPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = BusinessPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					BusinessPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (DealFeed) to the collection in $obj3 (Business)
				$obj3->addDealFeed($obj1);

			} // if joined row is not null

				// Add objects for joined DealFeedSource rows

				$key4 = DealFeedSourcePeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = DealFeedSourcePeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = DealFeedSourcePeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					DealFeedSourcePeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (DealFeed) to the collection in $obj4 (DealFeedSource)
				$obj4->addDealFeed($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of DealFeed objects pre-filled with all related objects except Business.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of DealFeed objects.
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

		DealFeedPeer::addSelectColumns($criteria);
		$startcol2 = (DealFeedPeer::NUM_COLUMNS - DealFeedPeer::NUM_LAZY_LOAD_COLUMNS);

		DealFeedDivisionPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + (DealFeedDivisionPeer::NUM_COLUMNS - DealFeedDivisionPeer::NUM_LAZY_LOAD_COLUMNS);

		CategoryPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + (CategoryPeer::NUM_COLUMNS - CategoryPeer::NUM_LAZY_LOAD_COLUMNS);

		DealFeedSourcePeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + (DealFeedSourcePeer::NUM_COLUMNS - DealFeedSourcePeer::NUM_LAZY_LOAD_COLUMNS);

		$criteria->addJoin(DealFeedPeer::DEAL_FEED_DIVISION_ID, DealFeedDivisionPeer::ID, $join_behavior);

		$criteria->addJoin(DealFeedPeer::CATEGORY_ID, CategoryPeer::ID, $join_behavior);

		$criteria->addJoin(DealFeedPeer::DEAL_FEED_SOURCE_ID, DealFeedSourcePeer::ID, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = DealFeedPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = DealFeedPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = DealFeedPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				DealFeedPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined DealFeedDivision rows

				$key2 = DealFeedDivisionPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = DealFeedDivisionPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = DealFeedDivisionPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					DealFeedDivisionPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (DealFeed) to the collection in $obj2 (DealFeedDivision)
				$obj2->addDealFeed($obj1);

			} // if joined row is not null

				// Add objects for joined Category rows

				$key3 = CategoryPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = CategoryPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = CategoryPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					CategoryPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (DealFeed) to the collection in $obj3 (Category)
				$obj3->addDealFeed($obj1);

			} // if joined row is not null

				// Add objects for joined DealFeedSource rows

				$key4 = DealFeedSourcePeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = DealFeedSourcePeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = DealFeedSourcePeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					DealFeedSourcePeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (DealFeed) to the collection in $obj4 (DealFeedSource)
				$obj4->addDealFeed($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of DealFeed objects pre-filled with all related objects except DealFeedSource.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of DealFeed objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptDealFeedSource(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		DealFeedPeer::addSelectColumns($criteria);
		$startcol2 = (DealFeedPeer::NUM_COLUMNS - DealFeedPeer::NUM_LAZY_LOAD_COLUMNS);

		DealFeedDivisionPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + (DealFeedDivisionPeer::NUM_COLUMNS - DealFeedDivisionPeer::NUM_LAZY_LOAD_COLUMNS);

		CategoryPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + (CategoryPeer::NUM_COLUMNS - CategoryPeer::NUM_LAZY_LOAD_COLUMNS);

		BusinessPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + (BusinessPeer::NUM_COLUMNS - BusinessPeer::NUM_LAZY_LOAD_COLUMNS);

		$criteria->addJoin(DealFeedPeer::DEAL_FEED_DIVISION_ID, DealFeedDivisionPeer::ID, $join_behavior);

		$criteria->addJoin(DealFeedPeer::CATEGORY_ID, CategoryPeer::ID, $join_behavior);

		$criteria->addJoin(DealFeedPeer::BUSINESS_ID, BusinessPeer::ID, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = DealFeedPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = DealFeedPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = DealFeedPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				DealFeedPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined DealFeedDivision rows

				$key2 = DealFeedDivisionPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = DealFeedDivisionPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = DealFeedDivisionPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					DealFeedDivisionPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (DealFeed) to the collection in $obj2 (DealFeedDivision)
				$obj2->addDealFeed($obj1);

			} // if joined row is not null

				// Add objects for joined Category rows

				$key3 = CategoryPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = CategoryPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = CategoryPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					CategoryPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (DealFeed) to the collection in $obj3 (Category)
				$obj3->addDealFeed($obj1);

			} // if joined row is not null

				// Add objects for joined Business rows

				$key4 = BusinessPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = BusinessPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = BusinessPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					BusinessPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (DealFeed) to the collection in $obj4 (Business)
				$obj4->addDealFeed($obj1);

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
	  $dbMap = Propel::getDatabaseMap(BaseDealFeedPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseDealFeedPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new DealFeedTableMap());
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
		return $withPrefix ? DealFeedPeer::CLASS_DEFAULT : DealFeedPeer::OM_CLASS;
	}

	/**
	 * Method perform an INSERT on the database, given a DealFeed or Criteria object.
	 *
	 * @param      mixed $values Criteria or DealFeed object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(DealFeedPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from DealFeed object
		}

		if ($criteria->containsKey(DealFeedPeer::ID) && $criteria->keyContainsValue(DealFeedPeer::ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.DealFeedPeer::ID.')');
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
	 * Method perform an UPDATE on the database, given a DealFeed or Criteria object.
	 *
	 * @param      mixed $values Criteria or DealFeed object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(DealFeedPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(DealFeedPeer::ID);
			$value = $criteria->remove(DealFeedPeer::ID);
			if ($value) {
				$selectCriteria->add(DealFeedPeer::ID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(DealFeedPeer::TABLE_NAME);
			}

		} else { // $values is DealFeed object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Method to DELETE all rows from the deal_feed table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(DealFeedPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(DealFeedPeer::TABLE_NAME, $con, DealFeedPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			DealFeedPeer::clearInstancePool();
			DealFeedPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a DealFeed or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or DealFeed object or primary key or array of primary keys
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
			$con = Propel::getConnection(DealFeedPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			DealFeedPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof DealFeed) { // it's a model object
			// invalidate the cache for this single object
			DealFeedPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(DealFeedPeer::ID, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				DealFeedPeer::removeInstanceFromPool($singleval);
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
			DealFeedPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given DealFeed object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      DealFeed $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(DealFeed $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(DealFeedPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(DealFeedPeer::TABLE_NAME);

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

		return BasePeer::doValidate(DealFeedPeer::DATABASE_NAME, DealFeedPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     DealFeed
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = DealFeedPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(DealFeedPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(DealFeedPeer::DATABASE_NAME);
		$criteria->add(DealFeedPeer::ID, $pk);

		$v = DealFeedPeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(DealFeedPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(DealFeedPeer::DATABASE_NAME);
			$criteria->add(DealFeedPeer::ID, $pks, Criteria::IN);
			$objs = DealFeedPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseDealFeedPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseDealFeedPeer::buildTableMap();

