<?php



/**
 * This class defines the structure of the 'ZIPCode' table.
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
class ZipcodeTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'komideals.map.ZipcodeTableMap';

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
		$this->setName('ZIPCode');
		$this->setPhpName('Zipcode');
		$this->setClassname('Zipcode');
		$this->setPackage('komideals');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addColumn('ZIPCODE', 'Zipcode', 'VARCHAR', false, 8, null);
		$this->addColumn('ZIPCODETYPE', 'Zipcodetype', 'CHAR', false, 1, null);
		$this->addColumn('CITY', 'City', 'VARCHAR', false, 28, null);
		$this->addColumn('CITYTYPE', 'Citytype', 'CHAR', false, 1, null);
		$this->addColumn('COUNTY', 'County', 'VARCHAR', false, 25, null);
		$this->addColumn('COUNTYFIPS', 'Countyfips', 'VARCHAR', false, 5, null);
		$this->addColumn('STATE', 'State', 'VARCHAR', false, 30, null);
		$this->addColumn('STATECODE', 'Statecode', 'CHAR', false, 2, null);
		$this->addColumn('STATEFIPS', 'Statefips', 'CHAR', false, 2, null);
		$this->addColumn('MSA', 'Msa', 'VARCHAR', false, 4, null);
		$this->addColumn('AREACODE', 'Areacode', 'CHAR', false, 3, null);
		$this->addColumn('TIMEZONE', 'Timezone', 'VARCHAR', false, 10, null);
		$this->addColumn('GMTOFFSET', 'Gmtoffset', 'TINYINT', false, 4, null);
		$this->addColumn('DST', 'Dst', 'CHAR', false, 1, null);
		$this->addColumn('LATITUDE', 'Latitude', 'DOUBLE', false, null, null);
		$this->addColumn('LONGITUDE', 'Longitude', 'DOUBLE', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // ZipcodeTableMap
