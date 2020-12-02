<?php



/**
 * This class defines the structure of the 'deal_feed' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.komideals.map
 */
class DealFeedTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'komideals.map.DealFeedTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
	  // attributes
		$this->setName('deal_feed');
		$this->setPhpName('DealFeed');
		$this->setClassname('DealFeed');
		$this->setPackage('komideals');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addForeignKey('BUSINESS_ID', 'BusinessId', 'INTEGER', 'business', 'ID', true, 10, 0);
		$this->addColumn('DATE_START', 'DateStart', 'TIMESTAMP', true, null, null);
		$this->addColumn('DATE_END', 'DateEnd', 'TIMESTAMP', true, null, null);
		$this->addColumn('PRICE', 'Price', 'DOUBLE', true, null, 0);
		$this->addColumn('RETAIL_VALUE', 'RetailValue', 'DOUBLE', true, null, 0);
		$this->addColumn('DETAILS', 'Details', 'LONGVARCHAR', true, null, null);
		$this->addColumn('CLICK_URL', 'ClickUrl', 'VARCHAR', true, 256, '');
		$this->addColumn('IS_ACTIVE', 'IsActive', 'TINYINT', true, 3, 0);
		$this->addColumn('IS_TIPPED', 'IsTipped', 'TINYINT', true, 3, 0);
		$this->addColumn('DATE_TIPPED', 'DateTipped', 'TIMESTAMP', true, null, null);
		$this->addColumn('TIPPING_POINT', 'TippingPoint', 'INTEGER', true, 10, 0);
		$this->addForeignKey('CATEGORY_ID', 'CategoryId', 'INTEGER', 'category', 'ID', true, 10, 0);
		$this->addColumn('LATITUDE', 'Latitude', 'DOUBLE', true, null, null);
		$this->addColumn('LONGITUDE', 'Longitude', 'DOUBLE', true, null, null);
		$this->addColumn('PERMALINK', 'Permalink', 'VARCHAR', true, 256, null);
		$this->addColumn('PHOTO_SMALL', 'PhotoSmall', 'VARCHAR', true, 256, null);
		$this->addColumn('PHOTO_MEDIUM', 'PhotoMedium', 'VARCHAR', true, 256, null);
		$this->addColumn('PHOTO', 'Photo', 'VARCHAR', true, 256, null);
		$this->addColumn('SUBJECT', 'Subject', 'VARCHAR', true, 256, null);
		$this->addColumn('TITLE', 'Title', 'VARCHAR', true, 256, null);
		$this->addColumn('COMMENT_NUMBER', 'CommentNumber', 'INTEGER', true, 10, null);
		$this->addColumn('DISCUSSION_URL', 'DiscussionUrl', 'VARCHAR', true, 256, null);
		$this->addColumn('NUMBER_SOLD', 'NumberSold', 'INTEGER', true, 10, null);
		$this->addColumn('TIPPED_AT', 'TippedAt', 'VARCHAR', true, 256, null);
		$this->addColumn('LOCATION_NOTE', 'LocationNote', 'VARCHAR', true, 256, null);
		$this->addColumn('IS_ONLINE', 'IsOnline', 'TINYINT', true, 3, null);
		$this->addColumn('WEBSITE_URL', 'WebsiteUrl', 'VARCHAR', true, 256, null);
		$this->addColumn('DATE_CREATED', 'DateCreated', 'TIMESTAMP', true, null, null);
		$this->addColumn('DATE_MODIFIED', 'DateModified', 'TIMESTAMP', true, null, null);
		$this->addForeignKey('DEAL_FEED_SOURCE_ID', 'DealFeedSourceId', 'INTEGER', 'deal_feed_source', 'ID', true, 10, null);
		$this->addForeignKey('DEAL_FEED_DIVISION_ID', 'DealFeedDivisionId', 'INTEGER', 'deal_feed_division', 'ID', true, 10, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('DealFeedDivision', 'DealFeedDivision', RelationMap::MANY_TO_ONE, array('deal_feed_division_id' => 'id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('Category', 'Category', RelationMap::MANY_TO_ONE, array('category_id' => 'id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('Business', 'Business', RelationMap::MANY_TO_ONE, array('business_id' => 'id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('DealFeedSource', 'DealFeedSource', RelationMap::MANY_TO_ONE, array('deal_feed_source_id' => 'id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('DealFeedBlogPost', 'DealFeedBlogPost', RelationMap::ONE_TO_MANY, array('id' => 'deal_feed_id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('DealFeedClick', 'DealFeedClick', RelationMap::ONE_TO_MANY, array('id' => 'deal_feed_id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('DealFeedCommission', 'DealFeedCommission', RelationMap::ONE_TO_MANY, array('id' => 'deal_feed_id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('DealFeedDetail', 'DealFeedDetail', RelationMap::ONE_TO_MANY, array('id' => 'deal_feed_id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('DealFeedHighlight', 'DealFeedHighlight', RelationMap::ONE_TO_MANY, array('id' => 'deal_feed_id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('DealFeedLocation', 'DealFeedLocation', RelationMap::ONE_TO_MANY, array('id' => 'deal_feed_id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('DealFeedStat', 'DealFeedStat', RelationMap::ONE_TO_MANY, array('id' => 'deal_feed_id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('DealFeedTaxonomyDmoz', 'DealFeedTaxonomyDmoz', RelationMap::ONE_TO_MANY, array('id' => 'deal_feed_id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('DealFeedThread', 'DealFeedThread', RelationMap::ONE_TO_MANY, array('id' => 'deal_feed_id', ), 'RESTRICT', 'RESTRICT');
	} // buildRelations()

} // DealFeedTableMap
