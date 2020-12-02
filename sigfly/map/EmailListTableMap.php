<?php



/**
 * This class defines the structure of the 'email_list' table.
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
class EmailListTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'sigfly.map.EmailListTableMap';

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
		$this->setName('email_list');
		$this->setPhpName('EmailList');
		$this->setClassname('EmailList');
		$this->setPackage('sigfly');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addColumn('IS_ACTIVE', 'IsActive', 'TINYINT', true, 3, null);
		$this->addColumn('DATE_CREATED', 'DateCreated', 'TIMESTAMP', true, null, null);
		$this->addColumn('REMOTE_ADDR', 'RemoteAddr', 'VARCHAR', true, 15, null);
		$this->addColumn('EMAIL', 'Email', 'VARCHAR', true, 128, null);
		$this->addColumn('FNAME', 'Fname', 'VARCHAR', true, 45, null);
		$this->addColumn('LNAME', 'Lname', 'VARCHAR', true, 45, null);
		$this->addColumn('TELEPHONE', 'Telephone', 'VARCHAR', true, 45, null);
		$this->addColumn('ADDRESS1', 'Address1', 'VARCHAR', true, 45, null);
		$this->addColumn('ADDRESS2', 'Address2', 'VARCHAR', true, 45, null);
		$this->addColumn('CITY', 'City', 'VARCHAR', true, 45, null);
		$this->addColumn('STATE', 'State', 'VARCHAR', true, 45, null);
		$this->addColumn('ZIPCODE', 'Zipcode', 'VARCHAR', true, 16, null);
		$this->addColumn('LAT', 'Lat', 'DOUBLE', true, null, null);
		$this->addColumn('LNG', 'Lng', 'DOUBLE', true, null, null);
		$this->addColumn('SOURCE', 'Source', 'VARCHAR', true, 32, null);
		$this->addColumn('COUNTRY', 'Country', 'VARCHAR', true, 16, null);
		$this->addColumn('GENDER', 'Gender', 'VARCHAR', true, 16, null);
		$this->addColumn('DOBY', 'Doby', 'VARCHAR', true, 4, null);
		$this->addColumn('DOBM', 'Dobm', 'VARCHAR', true, 16, null);
		$this->addColumn('DOB', 'Dob', 'VARCHAR', true, 45, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // EmailListTableMap
