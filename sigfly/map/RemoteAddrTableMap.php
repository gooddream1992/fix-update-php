<?php



/**
 * This class defines the structure of the 'remote_addr' table.
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
class RemoteAddrTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'sigfly.map.RemoteAddrTableMap';

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
		$this->setName('remote_addr');
		$this->setPhpName('RemoteAddr');
		$this->setClassname('RemoteAddr');
		$this->setPackage('sigfly');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addColumn('REMOTE_ADDR', 'RemoteAddr', 'VARCHAR', true, 32, null);
		$this->addColumn('COUNTRY_CODE', 'CountryCode', 'VARCHAR', true, 2, null);
		$this->addColumn('STATE_CODE', 'StateCode', 'VARCHAR', true, 2, null);
		$this->addColumn('CITY', 'City', 'VARCHAR', true, 45, null);
		$this->addColumn('POSTAL_CODE', 'PostalCode', 'VARCHAR', true, 7, null);
		$this->addColumn('LATITUDE', 'Latitude', 'FLOAT', true, null, null);
		$this->addColumn('LONGITUDE', 'Longitude', 'FLOAT', true, null, null);
		$this->addColumn('METRO_CODE', 'MetroCode', 'VARCHAR', true, 3, null);
		$this->addColumn('AREA_CODE', 'AreaCode', 'VARCHAR', true, 3, null);
		$this->addColumn('ISP', 'Isp', 'VARCHAR', true, 45, null);
		$this->addColumn('ORG', 'Org', 'VARCHAR', true, 45, null);
		$this->addColumn('DATE_CREATED', 'DateCreated', 'TIMESTAMP', true, null, null);
		$this->addColumn('DATE_MODIFIED', 'DateModified', 'TIMESTAMP', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // RemoteAddrTableMap
