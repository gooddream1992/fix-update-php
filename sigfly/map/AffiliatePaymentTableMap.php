<?php



/**
 * This class defines the structure of the 'affiliate_payment' table.
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
class AffiliatePaymentTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'sigfly.map.AffiliatePaymentTableMap';

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
		$this->setName('affiliate_payment');
		$this->setPhpName('AffiliatePayment');
		$this->setClassname('AffiliatePayment');
		$this->setPackage('sigfly');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addForeignKey('USER_ID', 'UserId', 'INTEGER', 'user', 'ID', true, 10, 0);
		$this->addForeignKey('BUSINESS_ID', 'BusinessId', 'INTEGER', 'business', 'ID', true, 10, null);
		$this->addColumn('COMPANY_NAME', 'CompanyName', 'VARCHAR', true, 64, '');
		$this->addColumn('ADDRESSLINE1', 'Addressline1', 'VARCHAR', true, 60, '');
		$this->addColumn('ADDRESSLINE2', 'Addressline2', 'VARCHAR', false, 60, null);
		$this->addColumn('CITY', 'City', 'VARCHAR', true, 25, '');
		$this->addColumn('STATE', 'State', 'CHAR', true, 2, '');
		$this->addColumn('POSTCODE', 'Postcode', 'VARCHAR', true, 10, '');
		$this->addColumn('COUNTRY', 'Country', 'VARCHAR', true, 32, '');
		$this->addColumn('TELEPHONE', 'Telephone', 'VARCHAR', true, 16, '');
		$this->addColumn('FAX', 'Fax', 'VARCHAR', false, 16, null);
		$this->addColumn('IS_ACTIVE', 'IsActive', 'TINYINT', true, 3, 0);
		$this->addColumn('IS_CLEARED', 'IsCleared', 'INTEGER', true, 10, 0);
		$this->addColumn('DATE_CREATED', 'DateCreated', 'TIMESTAMP', true, null, null);
		$this->addColumn('DATE_EXPIRES', 'DateExpires', 'TIMESTAMP', true, null, null);
		$this->addColumn('DATE_MODIFIED', 'DateModified', 'TIMESTAMP', true, null, null);
		$this->addColumn('DATE_CLEARED', 'DateCleared', 'TIMESTAMP', true, null, null);
		$this->addColumn('REMOTE_ADDR_CREATED', 'RemoteAddrCreated', 'VARCHAR', true, 15, '');
		$this->addColumn('REMOTE_ADDR_MODIFIED', 'RemoteAddrModified', 'VARCHAR', true, 15, '');
		$this->addColumn('AMOUNT', 'Amount', 'DOUBLE', true, null, 0);
		$this->addColumn('CHECK_NUMBER', 'CheckNumber', 'INTEGER', true, 10, null);
		$this->addColumn('TRANSACTION_ID', 'TransactionId', 'INTEGER', true, 10, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('User', 'User', RelationMap::MANY_TO_ONE, array('user_id' => 'id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('Business', 'Business', RelationMap::MANY_TO_ONE, array('business_id' => 'id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('AffiliatePaymentDetail', 'AffiliatePaymentDetail', RelationMap::ONE_TO_MANY, array('id' => 'affiliate_payment_id', ), 'RESTRICT', 'RESTRICT');
	} // buildRelations()

} // AffiliatePaymentTableMap
