<?php



/**
 * This class defines the structure of the 'image' table.
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
class ImageTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'komideals.map.ImageTableMap';

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
		$this->setName('image');
		$this->setPhpName('Image');
		$this->setClassname('Image');
		$this->setPackage('komideals');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addForeignKey('USER_ID', 'UserId', 'INTEGER', 'user', 'ID', true, 10, 0);
		$this->addColumn('FILE_NAME', 'FileName', 'VARCHAR', true, 32, '');
		$this->addColumn('CONTENT_TYPE', 'ContentType', 'VARCHAR', true, 32, '');
		$this->addColumn('HEIGHT', 'Height', 'SMALLINT', true, 5, 0);
		$this->addColumn('WIDTH', 'Width', 'SMALLINT', true, 5, 0);
		$this->addColumn('CONTENT_SIZE', 'ContentSize', 'SMALLINT', true, 8, 0);
		$this->addColumn('CONTENT', 'Content', 'BLOB', true, null, null);
		$this->addColumn('DATE_CREATED', 'DateCreated', 'TIMESTAMP', true, null, null);
		$this->addColumn('DATE_VIEWED', 'DateViewed', 'TIMESTAMP', true, null, null);
		$this->addColumn('IS_ACTIVE', 'IsActive', 'TINYINT', true, 3, 0);
		$this->addColumn('IS_APPROVED', 'IsApproved', 'TINYINT', true, 3, 0);
		$this->addColumn('REMOTE_ADDR_CREATED', 'RemoteAddrCreated', 'VARCHAR', true, 15, '');
		$this->addColumn('REMOTE_ADDR_APPROVED', 'RemoteAddrApproved', 'VARCHAR', true, 15, '');
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('User', 'User', RelationMap::MANY_TO_ONE, array('user_id' => 'id', ), 'RESTRICT', 'RESTRICT');
	} // buildRelations()

} // ImageTableMap
