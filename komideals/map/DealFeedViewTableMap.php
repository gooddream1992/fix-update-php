<?php



/**
 * This class defines the structure of the 'deal_feed_view' table.
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
class DealFeedViewTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'komideals.map.DealFeedViewTableMap';

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
		$this->setName('deal_feed_view');
		$this->setPhpName('DealFeedView');
		$this->setClassname('DealFeedView');
		$this->setPackage('komideals');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addForeignKey('BUSINESS_ID', 'BusinessId', 'INTEGER', 'business', 'ID', true, 10, null);
		$this->addColumn('DATE_CREATED', 'DateCreated', 'TIMESTAMP', true, null, null);
		$this->addForeignKey('USER_AGENT_ID', 'UserAgentId', 'INTEGER', 'user_agent', 'ID', true, 10, null);
		$this->addColumn('HTTP_REFERER', 'HttpReferer', 'VARCHAR', true, 1024, null);
		$this->addColumn('REMOTE_ADDR', 'RemoteAddr', 'VARCHAR', true, 32, null);
		$this->addColumn('SID', 'Sid', 'VARCHAR', true, 32, '');
		$this->addColumn('HTTP_REFERER2', 'HttpReferer2', 'VARCHAR', true, 1024, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Business', 'Business', RelationMap::MANY_TO_ONE, array('business_id' => 'id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('UserAgent', 'UserAgent', RelationMap::MANY_TO_ONE, array('user_agent_id' => 'id', ), 'RESTRICT', 'RESTRICT');
	} // buildRelations()

} // DealFeedViewTableMap
