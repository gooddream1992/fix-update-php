<?php



/**
 * This class defines the structure of the 'user_security_object' table.
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
class UserSecurityObjectTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'komideals.map.UserSecurityObjectTableMap';

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
		$this->setName('user_security_object');
		$this->setPhpName('UserSecurityObject');
		$this->setClassname('UserSecurityObject');
		$this->setPackage('komideals');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addForeignKey('USER_ID', 'UserId', 'INTEGER', 'user', 'ID', true, 10, 0);
		$this->addForeignKey('ASSIGNED_BY_USER_ID', 'AssignedByUserId', 'INTEGER', 'user', 'ID', true, 10, 0);
		$this->addForeignKey('SECURITY_OBJECT_ID', 'SecurityObjectId', 'INTEGER', 'security_object', 'ID', true, 10, 0);
		$this->addColumn('DATE_CREATED', 'DateCreated', 'TIMESTAMP', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('UserRelatedByUserId', 'User', RelationMap::MANY_TO_ONE, array('user_id' => 'id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('UserRelatedByAssignedByUserId', 'User', RelationMap::MANY_TO_ONE, array('assigned_by_user_id' => 'id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('SecurityObject', 'SecurityObject', RelationMap::MANY_TO_ONE, array('security_object_id' => 'id', ), 'RESTRICT', 'RESTRICT');
	} // buildRelations()

} // UserSecurityObjectTableMap
