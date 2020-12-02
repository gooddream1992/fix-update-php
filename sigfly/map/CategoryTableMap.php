<?php



/**
 * This class defines the structure of the 'category' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.sigfly.map
 */
class CategoryTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'sigfly.map.CategoryTableMap';

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
		$this->setName('category');
		$this->setPhpName('Category');
		$this->setClassname('Category');
		$this->setPackage('sigfly');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addForeignKey('PARENT_ID', 'ParentId', 'INTEGER', 'category', 'ID', true, 10, 0);
		$this->addColumn('CATEGORY_NAME', 'CategoryName', 'VARCHAR', true, 32, '0');
		$this->addColumn('DATE_CREATED', 'DateCreated', 'TIMESTAMP', true, null, null);
		$this->addColumn('IS_ACTIVE', 'IsActive', 'TINYINT', true, 3, 0);
		$this->addColumn('SLUG', 'Slug', 'VARCHAR', true, 32, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('CategoryRelatedByParentId', 'Category', RelationMap::MANY_TO_ONE, array('parent_id' => 'id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('CategoryRelatedById', 'Category', RelationMap::ONE_TO_MANY, array('id' => 'parent_id', ), 'RESTRICT', 'RESTRICT');
	} // buildRelations()

} // CategoryTableMap
