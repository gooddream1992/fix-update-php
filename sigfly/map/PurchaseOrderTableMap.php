<?php



/**
 * This class defines the structure of the 'purchase_order' table.
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
class PurchaseOrderTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'sigfly.map.PurchaseOrderTableMap';

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
		$this->setName('purchase_order');
		$this->setPhpName('PurchaseOrder');
		$this->setClassname('PurchaseOrder');
		$this->setPackage('sigfly');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addForeignKey('USER_ID', 'UserId', 'INTEGER', 'user', 'ID', true, 10, 0);
		$this->addColumn('DESCRIPTION', 'Description', 'VARCHAR', true, 256, '');
		$this->addColumn('DATE_CREATED', 'DateCreated', 'TIMESTAMP', true, null, null);
		$this->addColumn('DATE_PAID', 'DatePaid', 'TIMESTAMP', true, null, null);
		$this->addColumn('IS_ACTIVE', 'IsActive', 'TINYINT', true, 3, 0);
		$this->addColumn('IS_PAID', 'IsPaid', 'TINYINT', true, 3, 0);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('User', 'User', RelationMap::MANY_TO_ONE, array('user_id' => 'id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('Payment', 'Payment', RelationMap::ONE_TO_MANY, array('id' => 'purchase_order_id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('PurchaseDetail', 'PurchaseDetail', RelationMap::ONE_TO_MANY, array('id' => 'purchase_order_id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('PurchaseOrderChange', 'PurchaseOrderChange', RelationMap::ONE_TO_MANY, array('id' => 'purchase_order_id', ), 'RESTRICT', 'RESTRICT');
	} // buildRelations()

} // PurchaseOrderTableMap
