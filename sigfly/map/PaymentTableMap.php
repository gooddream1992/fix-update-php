<?php



/**
 * This class defines the structure of the 'payment' table.
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
class PaymentTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'sigfly.map.PaymentTableMap';

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
		$this->setName('payment');
		$this->setPhpName('Payment');
		$this->setClassname('Payment');
		$this->setPackage('sigfly');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addColumn('CODE', 'Code', 'VARCHAR', true, 128, '');
		$this->addColumn('OID', 'Oid', 'VARCHAR', true, 128, '');
		$this->addColumn('QUANTITY', 'Quantity', 'SMALLINT', true, 6, 0);
		$this->addColumn('AMOUNT', 'Amount', 'DOUBLE', true, null, 0);
		$this->addColumn('COMMENT', 'Comment', 'VARCHAR', true, 255, '');
		$this->addForeignKey('USER_ID', 'UserId', 'INTEGER', 'user', 'ID', true, 10, 0);
		$this->addForeignKey('PAYMENT_METHOD_ID', 'PaymentMethodId', 'INTEGER', 'payment_method', 'ID', true, 10, 0);
		$this->addForeignKey('PURCHASE_ORDER_ID', 'PurchaseOrderId', 'INTEGER', 'purchase_order', 'ID', true, 10, 0);
		$this->addColumn('IS_DECLINED', 'IsDeclined', 'TINYINT', true, 3, 0);
		$this->addColumn('IS_PAID', 'IsPaid', 'TINYINT', true, 3, 0);
		$this->addColumn('IS_RECURRING', 'IsRecurring', 'TINYINT', true, 3, 0);
		$this->addColumn('IS_ACTIVE', 'IsActive', 'TINYINT', true, 3, 0);
		$this->addColumn('DATE_PAID', 'DatePaid', 'TIMESTAMP', true, null, null);
		$this->addColumn('DATE_CREATED', 'DateCreated', 'TIMESTAMP', true, null, null);
		$this->addColumn('REMOTE_ADDR', 'RemoteAddr', 'VARCHAR', true, 15, '');
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('PurchaseOrder', 'PurchaseOrder', RelationMap::MANY_TO_ONE, array('purchase_order_id' => 'id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('User', 'User', RelationMap::MANY_TO_ONE, array('user_id' => 'id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('PaymentMethod', 'PaymentMethod', RelationMap::MANY_TO_ONE, array('payment_method_id' => 'id', ), 'RESTRICT', 'RESTRICT');
	} // buildRelations()

} // PaymentTableMap
