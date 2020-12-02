<?php



/**
 * This class defines the structure of the 'deal_thread' table.
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
class DealThreadTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'komideals.map.DealThreadTableMap';

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
		$this->setName('deal_thread');
		$this->setPhpName('DealThread');
		$this->setClassname('DealThread');
		$this->setPackage('komideals');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addForeignKey('DEAL_ID', 'DealId', 'INTEGER', 'deal', 'ID', true, 10, 0);
		$this->addForeignKey('USER_ID', 'UserId', 'INTEGER', 'user', 'ID', true, 10, 0);
		$this->addColumn('CONTENT', 'Content', 'LONGVARCHAR', true, null, null);
		$this->addColumn('DATE_CREATED', 'DateCreated', 'TIMESTAMP', true, null, null);
		$this->addColumn('IS_ACTIVE', 'IsActive', 'TINYINT', true, 3, 0);
		$this->addForeignKey('PARENT_ID', 'ParentId', 'INTEGER', 'deal_thread', 'ID', true, 10, 0);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Deal', 'Deal', RelationMap::MANY_TO_ONE, array('deal_id' => 'id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('User', 'User', RelationMap::MANY_TO_ONE, array('user_id' => 'id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('DealThreadRelatedByParentId', 'DealThread', RelationMap::MANY_TO_ONE, array('parent_id' => 'id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('DealThreadRelatedById', 'DealThread', RelationMap::ONE_TO_MANY, array('id' => 'parent_id', ), 'RESTRICT', 'RESTRICT');
	} // buildRelations()

} // DealThreadTableMap
