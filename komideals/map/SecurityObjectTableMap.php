<?php



/**
 * This class defines the structure of the 'security_object' table.
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
class SecurityObjectTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'komideals.map.SecurityObjectTableMap';

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
		$this->setName('security_object');
		$this->setPhpName('SecurityObject');
		$this->setClassname('SecurityObject');
		$this->setPackage('komideals');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addColumn('NAME', 'Name', 'VARCHAR', true, 127, '');
		$this->addColumn('DESCRIPTION', 'Description', 'VARCHAR', true, 127, '');
		$this->addColumn('IS_DISPLAYED', 'IsDisplayed', 'TINYINT', true, 4, 0);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('UserSecurityObject', 'UserSecurityObject', RelationMap::ONE_TO_MANY, array('id' => 'security_object_id', ), 'RESTRICT', 'RESTRICT');
	} // buildRelations()

} // SecurityObjectTableMap
