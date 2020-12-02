<?php



/**
 * This class defines the structure of the 'deal_feed_commission' table.
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
class DealFeedCommissionTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'komideals.map.DealFeedCommissionTableMap';

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
		$this->setName('deal_feed_commission');
		$this->setPhpName('DealFeedCommission');
		$this->setClassname('DealFeedCommission');
		$this->setPackage('komideals');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addForeignKey('DEAL_FEED_ID', 'DealFeedId', 'INTEGER', 'deal_feed', 'ID', true, 10, null);
		$this->addForeignKey('BUSINESS_ID', 'BusinessId', 'INTEGER', 'business', 'ID', true, 10, null);
		$this->addColumn('DATE_CREATED', 'DateCreated', 'TIMESTAMP', true, null, null);
		$this->addColumn('ACTION_STATUS', 'ActionStatus', 'VARCHAR', true, 45, null);
		$this->addColumn('ACTION_TYPE', 'ActionType', 'VARCHAR', true, 45, null);
		$this->addColumn('AD_ID', 'AdId', 'INTEGER', true, 10, null);
		$this->addColumn('ADVERTISER_ID', 'AdvertiserId', 'INTEGER', true, 10, null);
		$this->addColumn('ADVERTISER_NAME', 'AdvertiserName', 'VARCHAR', true, 45, null);
		$this->addColumn('COMMISSION_AMOUNT', 'CommissionAmount', 'FLOAT', true, null, null);
		$this->addColumn('COUNTRY', 'Country', 'VARCHAR', true, 45, null);
		$this->addColumn('EVENT_DATE', 'EventDate', 'TIMESTAMP', true, null, null);
		$this->addColumn('LOCKING_DATE', 'LockingDate', 'TIMESTAMP', true, null, null);
		$this->addColumn('ORDER_ID', 'OrderId', 'BIGINT', true, 19, null);
		$this->addColumn('ORIGINAL', 'Original', 'TINYINT', true, 3, null);
		$this->addColumn('ORIGINAL_ACTION_ID', 'OriginalActionId', 'BIGINT', true, 19, null);
		$this->addColumn('POSTING_DATE', 'PostingDate', 'TIMESTAMP', true, null, null);
		$this->addColumn('S_ID', 'SId', 'VARCHAR', true, 64, null);
		$this->addColumn('SALE_AMOUNT', 'SaleAmount', 'FLOAT', true, null, null);
		$this->addColumn('TRANSACTION_ID', 'TransactionId', 'BIGINT', true, 19, null);
		$this->addColumn('WEBSITE_ID', 'WebsiteId', 'INTEGER', true, 10, null);
		$this->addColumn('IS_PAID', 'IsPaid', 'TINYINT', true, 3, 0);
		$this->addColumn('PUBLISHER_S_ID', 'PublisherSId', 'VARCHAR', true, 32, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Business', 'Business', RelationMap::MANY_TO_ONE, array('business_id' => 'id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('DealFeed', 'DealFeed', RelationMap::MANY_TO_ONE, array('deal_feed_id' => 'id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('AffiliatePaymentDetail', 'AffiliatePaymentDetail', RelationMap::ONE_TO_MANY, array('id' => 'deal_feed_commission_id', ), 'RESTRICT', 'RESTRICT');
	} // buildRelations()

} // DealFeedCommissionTableMap
