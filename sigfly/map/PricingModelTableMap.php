<?php



/**
 * This class defines the structure of the 'pricing_model' table.
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
class PricingModelTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'sigfly.map.PricingModelTableMap';

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
		$this->setName('pricing_model');
		$this->setPhpName('PricingModel');
		$this->setClassname('PricingModel');
		$this->setPackage('sigfly');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addColumn('MODEL_NAME', 'ModelName', 'VARCHAR', true, 32, '');
		$this->addColumn('DATE_CREATED', 'DateCreated', 'TIMESTAMP', true, null, null);
		$this->addColumn('DATE_MODIFIED', 'DateModified', 'TIMESTAMP', true, null, null);
		$this->addColumn('IS_ACTIVE', 'IsActive', 'TINYINT', true, 3, 0);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('PricingDetailDefault', 'PricingDetailDefault', RelationMap::ONE_TO_MANY, array('id' => 'pricing_model_id', ), 'RESTRICT', 'RESTRICT');
	} // buildRelations()

} // PricingModelTableMap
