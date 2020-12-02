<?php



/**
 * This class defines the structure of the 'affiliate_payment_detail' table.
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
class AffiliatePaymentDetailTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'sigfly.map.AffiliatePaymentDetailTableMap';

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
		$this->setName('affiliate_payment_detail');
		$this->setPhpName('AffiliatePaymentDetail');
		$this->setClassname('AffiliatePaymentDetail');
		$this->setPackage('sigfly');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addForeignKey('AFFILIATE_PAYMENT_ID', 'AffiliatePaymentId', 'INTEGER', 'affiliate_payment', 'ID', true, 10, null);
		$this->addColumn('DEAL_FEED_COMMISSION_ID', 'DealFeedCommissionId', 'INTEGER', true, 10, null);
		$this->addColumn('DATE_CREATED', 'DateCreated', 'TIMESTAMP', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('AffiliatePayment', 'AffiliatePayment', RelationMap::MANY_TO_ONE, array('affiliate_payment_id' => 'id', ), 'RESTRICT', 'RESTRICT');
	} // buildRelations()

} // AffiliatePaymentDetailTableMap
