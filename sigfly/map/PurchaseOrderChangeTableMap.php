<?php



/**
 * This class defines the structure of the 'purchase_order_change' table.
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
class PurchaseOrderChangeTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'sigfly.map.PurchaseOrderChangeTableMap';

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
		$this->setName('purchase_order_change');
		$this->setPhpName('PurchaseOrderChange');
		$this->setClassname('PurchaseOrderChange');
		$this->setPackage('sigfly');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addColumn('DESCRIPTION', 'Description', 'VARCHAR', true, 256, '');
		$this->addColumn('DATE_CREATED', 'DateCreated', 'TIMESTAMP', true, null, null);
		$this->addColumn('IS_ACTIVE', 'IsActive', 'TINYINT', true, 3, 0);
		$this->addForeignKey('PURCHASE_ORDER_ID', 'PurchaseOrderId', 'INTEGER', 'purchase_order', 'ID', true, 10, 0);
		$this->addForeignKey('CREDIT_ID', 'CreditId', 'INTEGER', 'credit', 'ID', true, 10, 0);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Credit', 'Credit', RelationMap::MANY_TO_ONE, array('credit_id' => 'id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('PurchaseOrder', 'PurchaseOrder', RelationMap::MANY_TO_ONE, array('purchase_order_id' => 'id', ), 'RESTRICT', 'RESTRICT');
	} // buildRelations()

} // PurchaseOrderChangeTableMap
