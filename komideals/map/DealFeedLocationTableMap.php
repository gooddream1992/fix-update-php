<?php



/**
 * This class defines the structure of the 'deal_feed_location' table.
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
class DealFeedLocationTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'komideals.map.DealFeedLocationTableMap';

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
		$this->setName('deal_feed_location');
		$this->setPhpName('DealFeedLocation');
		$this->setClassname('DealFeedLocation');
		$this->setPackage('komideals');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addForeignKey('DEAL_FEED_ID', 'DealFeedId', 'INTEGER', 'deal_feed', 'ID', true, 10, 0);
		$this->addColumn('DATE_CREATED', 'DateCreated', 'TIMESTAMP', true, null, null);
		$this->addColumn('IS_ACTIVE', 'IsActive', 'TINYINT', true, 3, 0);
		$this->addColumn('LOCATION_NAME', 'LocationName', 'VARCHAR', true, 64, null);
		$this->addColumn('ADDRESSLINE1', 'Addressline1', 'VARCHAR', true, 60, null);
		$this->addColumn('ADDRESSLINE2', 'Addressline2', 'VARCHAR', true, 60, null);
		$this->addColumn('POSTCODE', 'Postcode', 'VARCHAR', true, 10, null);
		$this->addColumn('TELEPHONE', 'Telephone', 'VARCHAR', true, 16, null);
		$this->addColumn('LATITUDE', 'Latitude', 'DOUBLE', true, null, null);
		$this->addColumn('LONGITUDE', 'Longitude', 'DOUBLE', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('DealFeed', 'DealFeed', RelationMap::MANY_TO_ONE, array('deal_feed_id' => 'id', ), 'RESTRICT', 'RESTRICT');
	} // buildRelations()

} // DealFeedLocationTableMap
