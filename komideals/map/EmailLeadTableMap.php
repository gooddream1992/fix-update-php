<?php



/**
 * This class defines the structure of the 'email_lead' table.
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
class EmailLeadTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'komideals.map.EmailLeadTableMap';

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
		$this->setName('email_lead');
		$this->setPhpName('EmailLead');
		$this->setClassname('EmailLead');
		$this->setPackage('komideals');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addColumn('EMAIL', 'Email', 'VARCHAR', true, 128, null);
		$this->addColumn('ZIPCODE', 'Zipcode', 'VARCHAR', true, 9, null);
		$this->addColumn('DATE_CREATED', 'DateCreated', 'TIMESTAMP', true, null, null);
		$this->addColumn('REMOTE_ADDR', 'RemoteAddr', 'VARCHAR', true, 15, null);
		$this->addColumn('IS_ACTIVE', 'IsActive', 'TINYINT', true, 3, null);
		$this->addColumn('AFFILIATE_ID', 'AffiliateId', 'INTEGER', true, 10, null);
		$this->addColumn('LATITUDE', 'Latitude', 'DOUBLE', true, null, null);
		$this->addColumn('LONGITUDE', 'Longitude', 'DOUBLE', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // EmailLeadTableMap
