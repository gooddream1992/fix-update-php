<?php



/**
 * This class defines the structure of the 'deal_feed_division' table.
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
class DealFeedDivisionTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'komideals.map.DealFeedDivisionTableMap';

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
		$this->setName('deal_feed_division');
		$this->setPhpName('DealFeedDivision');
		$this->setClassname('DealFeedDivision');
		$this->setPackage('komideals');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addForeignKey('PARENT_ID', 'ParentId', 'INTEGER', 'deal_feed_division', 'ID', true, 10, 0);
		$this->addColumn('DIVISION_NAME', 'DivisionName', 'VARCHAR', true, 64, '0');
		$this->addColumn('DATE_CREATED', 'DateCreated', 'TIMESTAMP', true, null, null);
		$this->addColumn('IS_ACTIVE', 'IsActive', 'TINYINT', true, 3, 0);
		$this->addColumn('SLUG', 'Slug', 'VARCHAR', true, 64, null);
		$this->addColumn('LATITUDE', 'Latitude', 'DOUBLE', true, null, 0);
		$this->addColumn('LONGITUDE', 'Longitude', 'DOUBLE', true, null, 0);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('DealFeedDivisionRelatedByParentId', 'DealFeedDivision', RelationMap::MANY_TO_ONE, array('parent_id' => 'id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('DealFeed', 'DealFeed', RelationMap::ONE_TO_MANY, array('id' => 'deal_feed_division_id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('DealFeedDivisionRelatedById', 'DealFeedDivision', RelationMap::ONE_TO_MANY, array('id' => 'parent_id', ), 'RESTRICT', 'RESTRICT');
	} // buildRelations()

} // DealFeedDivisionTableMap
