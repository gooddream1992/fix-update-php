<?php



/**
 * This class defines the structure of the 'deal' table.
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
class DealTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'komideals.map.DealTableMap';

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
		$this->setName('deal');
		$this->setPhpName('Deal');
		$this->setClassname('Deal');
		$this->setPackage('komideals');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addForeignKey('BUSINESS_ID', 'BusinessId', 'INTEGER', 'business', 'ID', true, 10, 0);
		$this->addColumn('DATE_START', 'DateStart', 'TIMESTAMP', true, null, null);
		$this->addColumn('DATE_END', 'DateEnd', 'TIMESTAMP', true, null, null);
		$this->addColumn('IS_ACTIVE', 'IsActive', 'TINYINT', true, 3, 0);
		$this->addColumn('PRICE', 'Price', 'DOUBLE', true, null, 0);
		$this->addColumn('VALUE', 'Value', 'DOUBLE', true, null, 0);
		$this->addColumn('DETAILS', 'Details', 'LONGVARCHAR', true, null, null);
		$this->addColumn('DATE_TIPPED', 'DateTipped', 'TIMESTAMP', true, null, null);
		$this->addColumn('IS_TIPPED', 'IsTipped', 'TINYINT', true, 3, 0);
		$this->addForeignKey('PRICING_MODEL_ID', 'PricingModelId', 'INTEGER', 'pricing_model', 'ID', true, 10, 0);
		$this->addColumn('TIPPING_POINT', 'TippingPoint', 'INTEGER', true, 10, 0);
		$this->addForeignKey('CATEGORY_ID', 'CategoryId', 'INTEGER', 'category', 'ID', true, 10, 0);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Category', 'Category', RelationMap::MANY_TO_ONE, array('category_id' => 'id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('PricingModel', 'PricingModel', RelationMap::MANY_TO_ONE, array('pricing_model_id' => 'id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('Business', 'Business', RelationMap::MANY_TO_ONE, array('business_id' => 'id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('PricingDetail', 'PricingDetail', RelationMap::ONE_TO_MANY, array('id' => 'deal_id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('PurchaseDetail', 'PurchaseDetail', RelationMap::ONE_TO_MANY, array('id' => 'deal_id', ), 'RESTRICT', 'RESTRICT');
	} // buildRelations()

} // DealTableMap
