<?php



/**
 * This class defines the structure of the 'payment_method' table.
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
class PaymentMethodTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'komideals.map.PaymentMethodTableMap';

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
		$this->setName('payment_method');
		$this->setPhpName('PaymentMethod');
		$this->setClassname('PaymentMethod');
		$this->setPackage('komideals');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addForeignKey('USER_ID', 'UserId', 'INTEGER', 'user', 'ID', true, 10, 0);
		$this->addColumn('TYPE', 'Type', 'CHAR', true, 1, '');
		$this->addColumn('NUMBER_ENC', 'NumberEnc', 'BLOB', true, null, null);
		$this->addColumn('NUMBER_LAST_FOUR', 'NumberLastFour', 'VARCHAR', true, 4, '');
		$this->addColumn('CCV', 'Ccv', 'VARCHAR', true, 4, '');
		$this->addColumn('NAME', 'Name', 'VARCHAR', true, 50, '');
		$this->addColumn('ADDRESSLINE1', 'Addressline1', 'VARCHAR', true, 60, '');
		$this->addColumn('ADDRESSLINE2', 'Addressline2', 'VARCHAR', true, 60, '');
		$this->addColumn('CITY', 'City', 'VARCHAR', true, 25, '');
		$this->addColumn('STATE', 'State', 'CHAR', true, 2, '');
		$this->addColumn('POSTCODE', 'Postcode', 'VARCHAR', true, 5, '');
		$this->addColumn('EXPIRATION_MONTH', 'ExpirationMonth', 'TINYINT', true, 3, 0);
		$this->addColumn('EXPIRATION_YEAR', 'ExpirationYear', 'SMALLINT', true, 5, 0);
		$this->addColumn('TELEPHONE_DAY', 'TelephoneDay', 'VARCHAR', true, 11, '');
		$this->addColumn('TELEPHONE_EVE', 'TelephoneEve', 'VARCHAR', true, 11, '');
		$this->addColumn('IS_ACTIVE', 'IsActive', 'TINYINT', true, 3, 0);
		$this->addColumn('DATE_CREATED', 'DateCreated', 'TIMESTAMP', true, null, null);
		$this->addColumn('REMOTE_ADDR', 'RemoteAddr', 'VARCHAR', true, 15, '');
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('User', 'User', RelationMap::MANY_TO_ONE, array('user_id' => 'id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('Payment', 'Payment', RelationMap::ONE_TO_MANY, array('id' => 'payment_method_id', ), 'RESTRICT', 'RESTRICT');
	} // buildRelations()

} // PaymentMethodTableMap
