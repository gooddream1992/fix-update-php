<?php



/**
 * This class defines the structure of the 'user' table.
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
class UserTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'sigfly.map.UserTableMap';

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
		$this->setName('user');
		$this->setPhpName('User');
		$this->setClassname('User');
		$this->setPackage('sigfly');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10, null);
		$this->addColumn('EMAIL', 'Email', 'VARCHAR', true, 128, '');
		$this->addColumn('PASSWORD_HASH', 'PasswordHash', 'VARCHAR', true, 32, '');
		$this->addColumn('PASSWORD_RESET_HASH', 'PasswordResetHash', 'VARCHAR', false, 32, null);
		$this->addColumn('COMPANY_DESCRIPTION', 'CompanyDescription', 'VARCHAR', true, 128, '');
		$this->addColumn('COMPANY_URL', 'CompanyUrl', 'VARCHAR', true, 64, '');
		$this->addColumn('COMPANY_NAME', 'CompanyName', 'VARCHAR', true, 64, '');
		$this->addColumn('JOB_TITLE', 'JobTitle', 'VARCHAR', true, 64, '');
		$this->addColumn('GENDER', 'Gender', 'CHAR', true, 1, '');
		$this->addColumn('FNAME', 'Fname', 'VARCHAR', true, 25, '');
		$this->addColumn('LNAME', 'Lname', 'VARCHAR', true, 25, '');
		$this->addColumn('ADDRESSLINE1', 'Addressline1', 'VARCHAR', true, 60, '');
		$this->addColumn('ADDRESSLINE2', 'Addressline2', 'VARCHAR', false, 60, null);
		$this->addColumn('CITY', 'City', 'VARCHAR', true, 25, '');
		$this->addColumn('STATE', 'State', 'CHAR', true, 2, '');
		$this->addColumn('POSTCODE', 'Postcode', 'VARCHAR', true, 10, '');
		$this->addColumn('COUNTRY', 'Country', 'VARCHAR', true, 32, '');
		$this->addColumn('TELEPHONE', 'Telephone', 'VARCHAR', true, 16, '');
		$this->addColumn('FAX', 'Fax', 'VARCHAR', false, 16, null);
		$this->addColumn('IS_ACTIVE', 'IsActive', 'TINYINT', true, 3, 0);
		$this->addColumn('IS_AFFILIATE', 'IsAffiliate', 'TINYINT', true, 3, null);
		$this->addColumn('REFERRAL_ID', 'ReferralId', 'INTEGER', true, 10, 0);
		$this->addColumn('REFERRAL', 'Referral', 'VARCHAR', true, 32, '');
		$this->addColumn('ADVERTISING_TIMELINE', 'AdvertisingTimeline', 'VARCHAR', true, 32, '');
		$this->addColumn('MONTHLY_BUDGET', 'MonthlyBudget', 'VARCHAR', true, 32, '');
		$this->addColumn('PRIMARY_TARGET', 'PrimaryTarget', 'VARCHAR', true, 32, '');
		$this->addColumn('ADVERTISING_OBJECTIVE', 'AdvertisingObjective', 'VARCHAR', true, 32, '');
		$this->addColumn('ADDITIONAL_INFORMATION', 'AdditionalInformation', 'LONGVARCHAR', true, null, null);
		$this->addColumn('IS_EMAIL_VERIFIED', 'IsEmailVerified', 'TINYINT', true, 3, 0);
		$this->addColumn('IS_PREMIUM', 'IsPremium', 'TINYINT', true, 3, 0);
		$this->addColumn('LAST_LOGIN_DATE', 'LastLoginDate', 'TIMESTAMP', true, null, null);
		$this->addColumn('DATE_CREATED', 'DateCreated', 'TIMESTAMP', true, null, null);
		$this->addColumn('DATE_EXPIRES', 'DateExpires', 'TIMESTAMP', true, null, null);
		$this->addColumn('DATE_MODIFIED', 'DateModified', 'TIMESTAMP', true, null, null);
		$this->addColumn('REMOTE_ADDR_CREATED', 'RemoteAddrCreated', 'VARCHAR', true, 15, '');
		$this->addColumn('REMOTE_ADDR_MODIFIED', 'RemoteAddrModified', 'VARCHAR', true, 15, '');
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('AffiliatePayment', 'AffiliatePayment', RelationMap::ONE_TO_MANY, array('id' => 'user_id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('BusinessUser', 'BusinessUser', RelationMap::ONE_TO_MANY, array('id' => 'user_id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('Credit', 'Credit', RelationMap::ONE_TO_MANY, array('id' => 'user_id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('Image', 'Image', RelationMap::ONE_TO_MANY, array('id' => 'user_id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('Payment', 'Payment', RelationMap::ONE_TO_MANY, array('id' => 'user_id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('PaymentMethod', 'PaymentMethod', RelationMap::ONE_TO_MANY, array('id' => 'user_id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('PurchaseOrder', 'PurchaseOrder', RelationMap::ONE_TO_MANY, array('id' => 'user_id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('UserNoteRelatedByUserId', 'UserNote', RelationMap::ONE_TO_MANY, array('id' => 'user_id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('UserNoteRelatedByAdminId', 'UserNote', RelationMap::ONE_TO_MANY, array('id' => 'admin_id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('UserSecurityObjectRelatedByUserId', 'UserSecurityObject', RelationMap::ONE_TO_MANY, array('id' => 'user_id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('UserSecurityObjectRelatedByAssignedByUserId', 'UserSecurityObject', RelationMap::ONE_TO_MANY, array('id' => 'assigned_by_user_id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('UserThread', 'UserThread', RelationMap::ONE_TO_MANY, array('id' => 'user_id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('UserTopic', 'UserTopic', RelationMap::ONE_TO_MANY, array('id' => 'user_id', ), 'RESTRICT', 'RESTRICT');
	} // buildRelations()

} // UserTableMap
