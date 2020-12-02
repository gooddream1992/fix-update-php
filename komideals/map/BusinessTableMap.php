<?php



/**
 * This class defines the structure of the 'business' table.
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
class BusinessTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'komideals.map.BusinessTableMap';

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
		$this->setName('business');
		$this->setPhpName('Business');
		$this->setClassname('Business');
		$this->setPackage('komideals');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addColumn('EMAIL', 'Email', 'VARCHAR', true, 128, '');
		$this->addColumn('COMPANY_DESCRIPTION', 'CompanyDescription', 'VARCHAR', true, 128, '');
		$this->addColumn('COMPANY_URL', 'CompanyUrl', 'VARCHAR', true, 256, '');
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
		$this->addColumn('IS_PREMIUM', 'IsPremium', 'TINYINT', true, 3, 0);
		$this->addColumn('DATE_CREATED', 'DateCreated', 'TIMESTAMP', true, null, null);
		$this->addColumn('DATE_EXPIRES', 'DateExpires', 'TIMESTAMP', true, null, null);
		$this->addColumn('DATE_MODIFIED', 'DateModified', 'TIMESTAMP', true, null, null);
		$this->addColumn('REMOTE_ADDR_CREATED', 'RemoteAddrCreated', 'VARCHAR', true, 15, '');
		$this->addColumn('REMOTE_ADDR_MODIFIED', 'RemoteAddrModified', 'VARCHAR', true, 15, '');
		$this->addColumn('PAYMENT_THRESHOLD', 'PaymentThreshold', 'DOUBLE', true, null, 0);
		$this->addColumn('TAX_ID_ENC', 'TaxIdEnc', 'BLOB', true, null, null);
		$this->addColumn('TAX_ID_LAST_FOUR', 'TaxIdLastFour', 'VARCHAR', true, 4, '');
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('AffiliatePayment', 'AffiliatePayment', RelationMap::ONE_TO_MANY, array('id' => 'business_id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('BusinessUser', 'BusinessUser', RelationMap::ONE_TO_MANY, array('id' => 'business_id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('Deal', 'Deal', RelationMap::ONE_TO_MANY, array('id' => 'business_id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('DealFeed', 'DealFeed', RelationMap::ONE_TO_MANY, array('id' => 'business_id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('DealFeedClick', 'DealFeedClick', RelationMap::ONE_TO_MANY, array('id' => 'business_id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('DealFeedCommission', 'DealFeedCommission', RelationMap::ONE_TO_MANY, array('id' => 'business_id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('DealFeedStat', 'DealFeedStat', RelationMap::ONE_TO_MANY, array('id' => 'business_id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('DealFeedView', 'DealFeedView', RelationMap::ONE_TO_MANY, array('id' => 'business_id', ), 'RESTRICT', 'RESTRICT');
	} // buildRelations()

} // BusinessTableMap
