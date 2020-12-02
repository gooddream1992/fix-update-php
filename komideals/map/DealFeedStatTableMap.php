<?php



/**
 * This class defines the structure of the 'deal_feed_stat' table.
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
class DealFeedStatTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'komideals.map.DealFeedStatTableMap';

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
		$this->setName('deal_feed_stat');
		$this->setPhpName('DealFeedStat');
		$this->setClassname('DealFeedStat');
		$this->setPackage('komideals');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addForeignKey('DEAL_FEED_ID', 'DealFeedId', 'INTEGER', 'deal_feed', 'ID', true, 10, 0);
		$this->addForeignKey('BUSINESS_ID', 'BusinessId', 'INTEGER', 'business', 'ID', true, 10, null);
		$this->addColumn('DATE', 'Date', 'DATE', true, null, null);
		$this->addColumn('H0000', 'H0000', 'SMALLINT', true, 8, null);
		$this->addColumn('H0100', 'H0100', 'SMALLINT', true, 8, null);
		$this->addColumn('H0200', 'H0200', 'SMALLINT', true, 8, null);
		$this->addColumn('H0300', 'H0300', 'SMALLINT', true, 8, null);
		$this->addColumn('H0400', 'H0400', 'SMALLINT', true, 8, null);
		$this->addColumn('H0500', 'H0500', 'SMALLINT', true, 8, null);
		$this->addColumn('H0600', 'H0600', 'SMALLINT', true, 8, null);
		$this->addColumn('H0700', 'H0700', 'SMALLINT', true, 8, null);
		$this->addColumn('H0800', 'H0800', 'SMALLINT', true, 8, null);
		$this->addColumn('H0900', 'H0900', 'SMALLINT', true, 8, null);
		$this->addColumn('H1000', 'H1000', 'SMALLINT', true, 8, null);
		$this->addColumn('H1100', 'H1100', 'SMALLINT', true, 8, null);
		$this->addColumn('H1200', 'H1200', 'SMALLINT', true, 8, null);
		$this->addColumn('H1300', 'H1300', 'SMALLINT', true, 8, null);
		$this->addColumn('H1400', 'H1400', 'SMALLINT', true, 8, null);
		$this->addColumn('H1500', 'H1500', 'SMALLINT', true, 8, null);
		$this->addColumn('H1600', 'H1600', 'SMALLINT', true, 8, null);
		$this->addColumn('H1700', 'H1700', 'SMALLINT', true, 8, null);
		$this->addColumn('H1800', 'H1800', 'SMALLINT', true, 8, null);
		$this->addColumn('H1900', 'H1900', 'SMALLINT', true, 8, null);
		$this->addColumn('H2000', 'H2000', 'SMALLINT', true, 8, null);
		$this->addColumn('H2100', 'H2100', 'SMALLINT', true, 8, null);
		$this->addColumn('H2200', 'H2200', 'SMALLINT', true, 8, null);
		$this->addColumn('H2300', 'H2300', 'SMALLINT', true, 8, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('DealFeed', 'DealFeed', RelationMap::MANY_TO_ONE, array('deal_feed_id' => 'id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('Business', 'Business', RelationMap::MANY_TO_ONE, array('business_id' => 'id', ), 'RESTRICT', 'RESTRICT');
	} // buildRelations()

} // DealFeedStatTableMap
