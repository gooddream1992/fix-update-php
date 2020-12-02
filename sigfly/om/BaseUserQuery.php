<?php


/**
 * Base class that represents a query for the 'user' table.
 *
 * 
 *
 * @method     UserQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     UserQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     UserQuery orderByPasswordHash($order = Criteria::ASC) Order by the password_hash column
 * @method     UserQuery orderByPasswordResetHash($order = Criteria::ASC) Order by the password_reset_hash column
 * @method     UserQuery orderByCompanyDescription($order = Criteria::ASC) Order by the company_description column
 * @method     UserQuery orderByCompanyUrl($order = Criteria::ASC) Order by the company_url column
 * @method     UserQuery orderByCompanyName($order = Criteria::ASC) Order by the company_name column
 * @method     UserQuery orderByJobTitle($order = Criteria::ASC) Order by the job_title column
 * @method     UserQuery orderByGender($order = Criteria::ASC) Order by the gender column
 * @method     UserQuery orderByFname($order = Criteria::ASC) Order by the fname column
 * @method     UserQuery orderByLname($order = Criteria::ASC) Order by the lname column
 * @method     UserQuery orderByAddressline1($order = Criteria::ASC) Order by the addressline1 column
 * @method     UserQuery orderByAddressline2($order = Criteria::ASC) Order by the addressline2 column
 * @method     UserQuery orderByCity($order = Criteria::ASC) Order by the city column
 * @method     UserQuery orderByState($order = Criteria::ASC) Order by the state column
 * @method     UserQuery orderByPostcode($order = Criteria::ASC) Order by the postcode column
 * @method     UserQuery orderByCountry($order = Criteria::ASC) Order by the country column
 * @method     UserQuery orderByTelephone($order = Criteria::ASC) Order by the telephone column
 * @method     UserQuery orderByFax($order = Criteria::ASC) Order by the fax column
 * @method     UserQuery orderByIsActive($order = Criteria::ASC) Order by the is_active column
 * @method     UserQuery orderByIsAffiliate($order = Criteria::ASC) Order by the is_affiliate column
 * @method     UserQuery orderByReferralId($order = Criteria::ASC) Order by the referral_id column
 * @method     UserQuery orderByReferral($order = Criteria::ASC) Order by the referral column
 * @method     UserQuery orderByAdvertisingTimeline($order = Criteria::ASC) Order by the advertising_timeline column
 * @method     UserQuery orderByMonthlyBudget($order = Criteria::ASC) Order by the monthly_budget column
 * @method     UserQuery orderByPrimaryTarget($order = Criteria::ASC) Order by the primary_target column
 * @method     UserQuery orderByAdvertisingObjective($order = Criteria::ASC) Order by the advertising_objective column
 * @method     UserQuery orderByAdditionalInformation($order = Criteria::ASC) Order by the additional_information column
 * @method     UserQuery orderByIsEmailVerified($order = Criteria::ASC) Order by the is_email_verified column
 * @method     UserQuery orderByIsPremium($order = Criteria::ASC) Order by the is_premium column
 * @method     UserQuery orderByLastLoginDate($order = Criteria::ASC) Order by the last_login_date column
 * @method     UserQuery orderByDateCreated($order = Criteria::ASC) Order by the date_created column
 * @method     UserQuery orderByDateExpires($order = Criteria::ASC) Order by the date_expires column
 * @method     UserQuery orderByDateModified($order = Criteria::ASC) Order by the date_modified column
 * @method     UserQuery orderByRemoteAddrCreated($order = Criteria::ASC) Order by the remote_addr_created column
 * @method     UserQuery orderByRemoteAddrModified($order = Criteria::ASC) Order by the remote_addr_modified column
 *
 * @method     UserQuery groupById() Group by the id column
 * @method     UserQuery groupByEmail() Group by the email column
 * @method     UserQuery groupByPasswordHash() Group by the password_hash column
 * @method     UserQuery groupByPasswordResetHash() Group by the password_reset_hash column
 * @method     UserQuery groupByCompanyDescription() Group by the company_description column
 * @method     UserQuery groupByCompanyUrl() Group by the company_url column
 * @method     UserQuery groupByCompanyName() Group by the company_name column
 * @method     UserQuery groupByJobTitle() Group by the job_title column
 * @method     UserQuery groupByGender() Group by the gender column
 * @method     UserQuery groupByFname() Group by the fname column
 * @method     UserQuery groupByLname() Group by the lname column
 * @method     UserQuery groupByAddressline1() Group by the addressline1 column
 * @method     UserQuery groupByAddressline2() Group by the addressline2 column
 * @method     UserQuery groupByCity() Group by the city column
 * @method     UserQuery groupByState() Group by the state column
 * @method     UserQuery groupByPostcode() Group by the postcode column
 * @method     UserQuery groupByCountry() Group by the country column
 * @method     UserQuery groupByTelephone() Group by the telephone column
 * @method     UserQuery groupByFax() Group by the fax column
 * @method     UserQuery groupByIsActive() Group by the is_active column
 * @method     UserQuery groupByIsAffiliate() Group by the is_affiliate column
 * @method     UserQuery groupByReferralId() Group by the referral_id column
 * @method     UserQuery groupByReferral() Group by the referral column
 * @method     UserQuery groupByAdvertisingTimeline() Group by the advertising_timeline column
 * @method     UserQuery groupByMonthlyBudget() Group by the monthly_budget column
 * @method     UserQuery groupByPrimaryTarget() Group by the primary_target column
 * @method     UserQuery groupByAdvertisingObjective() Group by the advertising_objective column
 * @method     UserQuery groupByAdditionalInformation() Group by the additional_information column
 * @method     UserQuery groupByIsEmailVerified() Group by the is_email_verified column
 * @method     UserQuery groupByIsPremium() Group by the is_premium column
 * @method     UserQuery groupByLastLoginDate() Group by the last_login_date column
 * @method     UserQuery groupByDateCreated() Group by the date_created column
 * @method     UserQuery groupByDateExpires() Group by the date_expires column
 * @method     UserQuery groupByDateModified() Group by the date_modified column
 * @method     UserQuery groupByRemoteAddrCreated() Group by the remote_addr_created column
 * @method     UserQuery groupByRemoteAddrModified() Group by the remote_addr_modified column
 *
 * @method     UserQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     UserQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     UserQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     UserQuery leftJoinAffiliatePayment($relationAlias = null) Adds a LEFT JOIN clause to the query using the AffiliatePayment relation
 * @method     UserQuery rightJoinAffiliatePayment($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AffiliatePayment relation
 * @method     UserQuery innerJoinAffiliatePayment($relationAlias = null) Adds a INNER JOIN clause to the query using the AffiliatePayment relation
 *
 * @method     UserQuery leftJoinBusinessUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the BusinessUser relation
 * @method     UserQuery rightJoinBusinessUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the BusinessUser relation
 * @method     UserQuery innerJoinBusinessUser($relationAlias = null) Adds a INNER JOIN clause to the query using the BusinessUser relation
 *
 * @method     UserQuery leftJoinCredit($relationAlias = null) Adds a LEFT JOIN clause to the query using the Credit relation
 * @method     UserQuery rightJoinCredit($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Credit relation
 * @method     UserQuery innerJoinCredit($relationAlias = null) Adds a INNER JOIN clause to the query using the Credit relation
 *
 * @method     UserQuery leftJoinImage($relationAlias = null) Adds a LEFT JOIN clause to the query using the Image relation
 * @method     UserQuery rightJoinImage($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Image relation
 * @method     UserQuery innerJoinImage($relationAlias = null) Adds a INNER JOIN clause to the query using the Image relation
 *
 * @method     UserQuery leftJoinPayment($relationAlias = null) Adds a LEFT JOIN clause to the query using the Payment relation
 * @method     UserQuery rightJoinPayment($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Payment relation
 * @method     UserQuery innerJoinPayment($relationAlias = null) Adds a INNER JOIN clause to the query using the Payment relation
 *
 * @method     UserQuery leftJoinPaymentMethod($relationAlias = null) Adds a LEFT JOIN clause to the query using the PaymentMethod relation
 * @method     UserQuery rightJoinPaymentMethod($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PaymentMethod relation
 * @method     UserQuery innerJoinPaymentMethod($relationAlias = null) Adds a INNER JOIN clause to the query using the PaymentMethod relation
 *
 * @method     UserQuery leftJoinPurchaseOrder($relationAlias = null) Adds a LEFT JOIN clause to the query using the PurchaseOrder relation
 * @method     UserQuery rightJoinPurchaseOrder($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PurchaseOrder relation
 * @method     UserQuery innerJoinPurchaseOrder($relationAlias = null) Adds a INNER JOIN clause to the query using the PurchaseOrder relation
 *
 * @method     UserQuery leftJoinUserNoteRelatedByUserId($relationAlias = null) Adds a LEFT JOIN clause to the query using the UserNoteRelatedByUserId relation
 * @method     UserQuery rightJoinUserNoteRelatedByUserId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UserNoteRelatedByUserId relation
 * @method     UserQuery innerJoinUserNoteRelatedByUserId($relationAlias = null) Adds a INNER JOIN clause to the query using the UserNoteRelatedByUserId relation
 *
 * @method     UserQuery leftJoinUserNoteRelatedByAdminId($relationAlias = null) Adds a LEFT JOIN clause to the query using the UserNoteRelatedByAdminId relation
 * @method     UserQuery rightJoinUserNoteRelatedByAdminId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UserNoteRelatedByAdminId relation
 * @method     UserQuery innerJoinUserNoteRelatedByAdminId($relationAlias = null) Adds a INNER JOIN clause to the query using the UserNoteRelatedByAdminId relation
 *
 * @method     UserQuery leftJoinUserSecurityObjectRelatedByUserId($relationAlias = null) Adds a LEFT JOIN clause to the query using the UserSecurityObjectRelatedByUserId relation
 * @method     UserQuery rightJoinUserSecurityObjectRelatedByUserId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UserSecurityObjectRelatedByUserId relation
 * @method     UserQuery innerJoinUserSecurityObjectRelatedByUserId($relationAlias = null) Adds a INNER JOIN clause to the query using the UserSecurityObjectRelatedByUserId relation
 *
 * @method     UserQuery leftJoinUserSecurityObjectRelatedByAssignedByUserId($relationAlias = null) Adds a LEFT JOIN clause to the query using the UserSecurityObjectRelatedByAssignedByUserId relation
 * @method     UserQuery rightJoinUserSecurityObjectRelatedByAssignedByUserId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UserSecurityObjectRelatedByAssignedByUserId relation
 * @method     UserQuery innerJoinUserSecurityObjectRelatedByAssignedByUserId($relationAlias = null) Adds a INNER JOIN clause to the query using the UserSecurityObjectRelatedByAssignedByUserId relation
 *
 * @method     UserQuery leftJoinUserThread($relationAlias = null) Adds a LEFT JOIN clause to the query using the UserThread relation
 * @method     UserQuery rightJoinUserThread($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UserThread relation
 * @method     UserQuery innerJoinUserThread($relationAlias = null) Adds a INNER JOIN clause to the query using the UserThread relation
 *
 * @method     UserQuery leftJoinUserTopic($relationAlias = null) Adds a LEFT JOIN clause to the query using the UserTopic relation
 * @method     UserQuery rightJoinUserTopic($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UserTopic relation
 * @method     UserQuery innerJoinUserTopic($relationAlias = null) Adds a INNER JOIN clause to the query using the UserTopic relation
 *
 * @method     User findOne(PropelPDO $con = null) Return the first User matching the query
 * @method     User findOneOrCreate(PropelPDO $con = null) Return the first User matching the query, or a new User object populated from the query conditions when no match is found
 *
 * @method     User findOneById(int $id) Return the first User filtered by the id column
 * @method     User findOneByEmail(string $email) Return the first User filtered by the email column
 * @method     User findOneByPasswordHash(string $password_hash) Return the first User filtered by the password_hash column
 * @method     User findOneByPasswordResetHash(string $password_reset_hash) Return the first User filtered by the password_reset_hash column
 * @method     User findOneByCompanyDescription(string $company_description) Return the first User filtered by the company_description column
 * @method     User findOneByCompanyUrl(string $company_url) Return the first User filtered by the company_url column
 * @method     User findOneByCompanyName(string $company_name) Return the first User filtered by the company_name column
 * @method     User findOneByJobTitle(string $job_title) Return the first User filtered by the job_title column
 * @method     User findOneByGender(string $gender) Return the first User filtered by the gender column
 * @method     User findOneByFname(string $fname) Return the first User filtered by the fname column
 * @method     User findOneByLname(string $lname) Return the first User filtered by the lname column
 * @method     User findOneByAddressline1(string $addressline1) Return the first User filtered by the addressline1 column
 * @method     User findOneByAddressline2(string $addressline2) Return the first User filtered by the addressline2 column
 * @method     User findOneByCity(string $city) Return the first User filtered by the city column
 * @method     User findOneByState(string $state) Return the first User filtered by the state column
 * @method     User findOneByPostcode(string $postcode) Return the first User filtered by the postcode column
 * @method     User findOneByCountry(string $country) Return the first User filtered by the country column
 * @method     User findOneByTelephone(string $telephone) Return the first User filtered by the telephone column
 * @method     User findOneByFax(string $fax) Return the first User filtered by the fax column
 * @method     User findOneByIsActive(int $is_active) Return the first User filtered by the is_active column
 * @method     User findOneByIsAffiliate(int $is_affiliate) Return the first User filtered by the is_affiliate column
 * @method     User findOneByReferralId(int $referral_id) Return the first User filtered by the referral_id column
 * @method     User findOneByReferral(string $referral) Return the first User filtered by the referral column
 * @method     User findOneByAdvertisingTimeline(string $advertising_timeline) Return the first User filtered by the advertising_timeline column
 * @method     User findOneByMonthlyBudget(string $monthly_budget) Return the first User filtered by the monthly_budget column
 * @method     User findOneByPrimaryTarget(string $primary_target) Return the first User filtered by the primary_target column
 * @method     User findOneByAdvertisingObjective(string $advertising_objective) Return the first User filtered by the advertising_objective column
 * @method     User findOneByAdditionalInformation(string $additional_information) Return the first User filtered by the additional_information column
 * @method     User findOneByIsEmailVerified(int $is_email_verified) Return the first User filtered by the is_email_verified column
 * @method     User findOneByIsPremium(int $is_premium) Return the first User filtered by the is_premium column
 * @method     User findOneByLastLoginDate(string $last_login_date) Return the first User filtered by the last_login_date column
 * @method     User findOneByDateCreated(string $date_created) Return the first User filtered by the date_created column
 * @method     User findOneByDateExpires(string $date_expires) Return the first User filtered by the date_expires column
 * @method     User findOneByDateModified(string $date_modified) Return the first User filtered by the date_modified column
 * @method     User findOneByRemoteAddrCreated(string $remote_addr_created) Return the first User filtered by the remote_addr_created column
 * @method     User findOneByRemoteAddrModified(string $remote_addr_modified) Return the first User filtered by the remote_addr_modified column
 *
 * @method     array findById(int $id) Return User objects filtered by the id column
 * @method     array findByEmail(string $email) Return User objects filtered by the email column
 * @method     array findByPasswordHash(string $password_hash) Return User objects filtered by the password_hash column
 * @method     array findByPasswordResetHash(string $password_reset_hash) Return User objects filtered by the password_reset_hash column
 * @method     array findByCompanyDescription(string $company_description) Return User objects filtered by the company_description column
 * @method     array findByCompanyUrl(string $company_url) Return User objects filtered by the company_url column
 * @method     array findByCompanyName(string $company_name) Return User objects filtered by the company_name column
 * @method     array findByJobTitle(string $job_title) Return User objects filtered by the job_title column
 * @method     array findByGender(string $gender) Return User objects filtered by the gender column
 * @method     array findByFname(string $fname) Return User objects filtered by the fname column
 * @method     array findByLname(string $lname) Return User objects filtered by the lname column
 * @method     array findByAddressline1(string $addressline1) Return User objects filtered by the addressline1 column
 * @method     array findByAddressline2(string $addressline2) Return User objects filtered by the addressline2 column
 * @method     array findByCity(string $city) Return User objects filtered by the city column
 * @method     array findByState(string $state) Return User objects filtered by the state column
 * @method     array findByPostcode(string $postcode) Return User objects filtered by the postcode column
 * @method     array findByCountry(string $country) Return User objects filtered by the country column
 * @method     array findByTelephone(string $telephone) Return User objects filtered by the telephone column
 * @method     array findByFax(string $fax) Return User objects filtered by the fax column
 * @method     array findByIsActive(int $is_active) Return User objects filtered by the is_active column
 * @method     array findByIsAffiliate(int $is_affiliate) Return User objects filtered by the is_affiliate column
 * @method     array findByReferralId(int $referral_id) Return User objects filtered by the referral_id column
 * @method     array findByReferral(string $referral) Return User objects filtered by the referral column
 * @method     array findByAdvertisingTimeline(string $advertising_timeline) Return User objects filtered by the advertising_timeline column
 * @method     array findByMonthlyBudget(string $monthly_budget) Return User objects filtered by the monthly_budget column
 * @method     array findByPrimaryTarget(string $primary_target) Return User objects filtered by the primary_target column
 * @method     array findByAdvertisingObjective(string $advertising_objective) Return User objects filtered by the advertising_objective column
 * @method     array findByAdditionalInformation(string $additional_information) Return User objects filtered by the additional_information column
 * @method     array findByIsEmailVerified(int $is_email_verified) Return User objects filtered by the is_email_verified column
 * @method     array findByIsPremium(int $is_premium) Return User objects filtered by the is_premium column
 * @method     array findByLastLoginDate(string $last_login_date) Return User objects filtered by the last_login_date column
 * @method     array findByDateCreated(string $date_created) Return User objects filtered by the date_created column
 * @method     array findByDateExpires(string $date_expires) Return User objects filtered by the date_expires column
 * @method     array findByDateModified(string $date_modified) Return User objects filtered by the date_modified column
 * @method     array findByRemoteAddrCreated(string $remote_addr_created) Return User objects filtered by the remote_addr_created column
 * @method     array findByRemoteAddrModified(string $remote_addr_modified) Return User objects filtered by the remote_addr_modified column
 *
 * @package    propel.generator.sigfly.om
 */
abstract class BaseUserQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseUserQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'sigfly', $modelName = 'User', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new UserQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    UserQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof UserQuery) {
			return $criteria;
		}
		$query = new UserQuery();
		if (null !== $modelAlias) {
			$query->setModelAlias($modelAlias);
		}
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

	/**
	 * Find object by primary key
	 * Use instance pooling to avoid a database query if the object exists
	 * <code>
	 * $obj  = $c->findPk(12, $con);
	 * </code>
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    User|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = UserPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
			// the object is alredy in the instance pool
			return $obj;
		} else {
			// the object has not been requested yet, or the formatter is not an object formatter
			$criteria = $this->isKeepQuery() ? clone $this : $this;
			$stmt = $criteria
				->filterByPrimaryKey($key)
				->getSelectStatement($con);
			return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
		}
	}

	/**
	 * Find objects by primary key
	 * <code>
	 * $objs = $c->findPks(array(12, 56, 832), $con);
	 * </code>
	 * @param     array $keys Primary keys to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
	 */
	public function findPks($keys, $con = null)
	{	
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		return $this
			->filterByPrimaryKeys($keys)
			->find($con);
	}

	/**
	 * Filter the query by primary key
	 *
	 * @param     mixed $key Primary key to use for the query
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(UserPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(UserPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(UserPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the email column
	 * 
	 * @param     string $email The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByEmail($email = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($email)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $email)) {
				$email = str_replace('*', '%', $email);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::EMAIL, $email, $comparison);
	}

	/**
	 * Filter the query on the password_hash column
	 * 
	 * @param     string $passwordHash The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByPasswordHash($passwordHash = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($passwordHash)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $passwordHash)) {
				$passwordHash = str_replace('*', '%', $passwordHash);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::PASSWORD_HASH, $passwordHash, $comparison);
	}

	/**
	 * Filter the query on the password_reset_hash column
	 * 
	 * @param     string $passwordResetHash The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByPasswordResetHash($passwordResetHash = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($passwordResetHash)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $passwordResetHash)) {
				$passwordResetHash = str_replace('*', '%', $passwordResetHash);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::PASSWORD_RESET_HASH, $passwordResetHash, $comparison);
	}

	/**
	 * Filter the query on the company_description column
	 * 
	 * @param     string $companyDescription The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByCompanyDescription($companyDescription = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($companyDescription)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $companyDescription)) {
				$companyDescription = str_replace('*', '%', $companyDescription);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::COMPANY_DESCRIPTION, $companyDescription, $comparison);
	}

	/**
	 * Filter the query on the company_url column
	 * 
	 * @param     string $companyUrl The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByCompanyUrl($companyUrl = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($companyUrl)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $companyUrl)) {
				$companyUrl = str_replace('*', '%', $companyUrl);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::COMPANY_URL, $companyUrl, $comparison);
	}

	/**
	 * Filter the query on the company_name column
	 * 
	 * @param     string $companyName The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByCompanyName($companyName = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($companyName)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $companyName)) {
				$companyName = str_replace('*', '%', $companyName);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::COMPANY_NAME, $companyName, $comparison);
	}

	/**
	 * Filter the query on the job_title column
	 * 
	 * @param     string $jobTitle The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByJobTitle($jobTitle = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($jobTitle)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $jobTitle)) {
				$jobTitle = str_replace('*', '%', $jobTitle);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::JOB_TITLE, $jobTitle, $comparison);
	}

	/**
	 * Filter the query on the gender column
	 * 
	 * @param     string $gender The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByGender($gender = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($gender)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $gender)) {
				$gender = str_replace('*', '%', $gender);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::GENDER, $gender, $comparison);
	}

	/**
	 * Filter the query on the fname column
	 * 
	 * @param     string $fname The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByFname($fname = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($fname)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $fname)) {
				$fname = str_replace('*', '%', $fname);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::FNAME, $fname, $comparison);
	}

	/**
	 * Filter the query on the lname column
	 * 
	 * @param     string $lname The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByLname($lname = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($lname)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $lname)) {
				$lname = str_replace('*', '%', $lname);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::LNAME, $lname, $comparison);
	}

	/**
	 * Filter the query on the addressline1 column
	 * 
	 * @param     string $addressline1 The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByAddressline1($addressline1 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($addressline1)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $addressline1)) {
				$addressline1 = str_replace('*', '%', $addressline1);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::ADDRESSLINE1, $addressline1, $comparison);
	}

	/**
	 * Filter the query on the addressline2 column
	 * 
	 * @param     string $addressline2 The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByAddressline2($addressline2 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($addressline2)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $addressline2)) {
				$addressline2 = str_replace('*', '%', $addressline2);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::ADDRESSLINE2, $addressline2, $comparison);
	}

	/**
	 * Filter the query on the city column
	 * 
	 * @param     string $city The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByCity($city = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($city)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $city)) {
				$city = str_replace('*', '%', $city);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::CITY, $city, $comparison);
	}

	/**
	 * Filter the query on the state column
	 * 
	 * @param     string $state The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByState($state = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($state)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $state)) {
				$state = str_replace('*', '%', $state);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::STATE, $state, $comparison);
	}

	/**
	 * Filter the query on the postcode column
	 * 
	 * @param     string $postcode The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByPostcode($postcode = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($postcode)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $postcode)) {
				$postcode = str_replace('*', '%', $postcode);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::POSTCODE, $postcode, $comparison);
	}

	/**
	 * Filter the query on the country column
	 * 
	 * @param     string $country The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByCountry($country = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($country)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $country)) {
				$country = str_replace('*', '%', $country);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::COUNTRY, $country, $comparison);
	}

	/**
	 * Filter the query on the telephone column
	 * 
	 * @param     string $telephone The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByTelephone($telephone = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($telephone)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $telephone)) {
				$telephone = str_replace('*', '%', $telephone);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::TELEPHONE, $telephone, $comparison);
	}

	/**
	 * Filter the query on the fax column
	 * 
	 * @param     string $fax The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByFax($fax = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($fax)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $fax)) {
				$fax = str_replace('*', '%', $fax);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::FAX, $fax, $comparison);
	}

	/**
	 * Filter the query on the is_active column
	 * 
	 * @param     int|array $isActive The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByIsActive($isActive = null, $comparison = null)
	{
		if (is_array($isActive)) {
			$useMinMax = false;
			if (isset($isActive['min'])) {
				$this->addUsingAlias(UserPeer::IS_ACTIVE, $isActive['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isActive['max'])) {
				$this->addUsingAlias(UserPeer::IS_ACTIVE, $isActive['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserPeer::IS_ACTIVE, $isActive, $comparison);
	}

	/**
	 * Filter the query on the is_affiliate column
	 * 
	 * @param     int|array $isAffiliate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByIsAffiliate($isAffiliate = null, $comparison = null)
	{
		if (is_array($isAffiliate)) {
			$useMinMax = false;
			if (isset($isAffiliate['min'])) {
				$this->addUsingAlias(UserPeer::IS_AFFILIATE, $isAffiliate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isAffiliate['max'])) {
				$this->addUsingAlias(UserPeer::IS_AFFILIATE, $isAffiliate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserPeer::IS_AFFILIATE, $isAffiliate, $comparison);
	}

	/**
	 * Filter the query on the referral_id column
	 * 
	 * @param     int|array $referralId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByReferralId($referralId = null, $comparison = null)
	{
		if (is_array($referralId)) {
			$useMinMax = false;
			if (isset($referralId['min'])) {
				$this->addUsingAlias(UserPeer::REFERRAL_ID, $referralId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($referralId['max'])) {
				$this->addUsingAlias(UserPeer::REFERRAL_ID, $referralId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserPeer::REFERRAL_ID, $referralId, $comparison);
	}

	/**
	 * Filter the query on the referral column
	 * 
	 * @param     string $referral The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByReferral($referral = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($referral)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $referral)) {
				$referral = str_replace('*', '%', $referral);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::REFERRAL, $referral, $comparison);
	}

	/**
	 * Filter the query on the advertising_timeline column
	 * 
	 * @param     string $advertisingTimeline The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByAdvertisingTimeline($advertisingTimeline = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($advertisingTimeline)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $advertisingTimeline)) {
				$advertisingTimeline = str_replace('*', '%', $advertisingTimeline);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::ADVERTISING_TIMELINE, $advertisingTimeline, $comparison);
	}

	/**
	 * Filter the query on the monthly_budget column
	 * 
	 * @param     string $monthlyBudget The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByMonthlyBudget($monthlyBudget = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($monthlyBudget)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $monthlyBudget)) {
				$monthlyBudget = str_replace('*', '%', $monthlyBudget);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::MONTHLY_BUDGET, $monthlyBudget, $comparison);
	}

	/**
	 * Filter the query on the primary_target column
	 * 
	 * @param     string $primaryTarget The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByPrimaryTarget($primaryTarget = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($primaryTarget)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $primaryTarget)) {
				$primaryTarget = str_replace('*', '%', $primaryTarget);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::PRIMARY_TARGET, $primaryTarget, $comparison);
	}

	/**
	 * Filter the query on the advertising_objective column
	 * 
	 * @param     string $advertisingObjective The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByAdvertisingObjective($advertisingObjective = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($advertisingObjective)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $advertisingObjective)) {
				$advertisingObjective = str_replace('*', '%', $advertisingObjective);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::ADVERTISING_OBJECTIVE, $advertisingObjective, $comparison);
	}

	/**
	 * Filter the query on the additional_information column
	 * 
	 * @param     string $additionalInformation The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByAdditionalInformation($additionalInformation = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($additionalInformation)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $additionalInformation)) {
				$additionalInformation = str_replace('*', '%', $additionalInformation);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::ADDITIONAL_INFORMATION, $additionalInformation, $comparison);
	}

	/**
	 * Filter the query on the is_email_verified column
	 * 
	 * @param     int|array $isEmailVerified The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByIsEmailVerified($isEmailVerified = null, $comparison = null)
	{
		if (is_array($isEmailVerified)) {
			$useMinMax = false;
			if (isset($isEmailVerified['min'])) {
				$this->addUsingAlias(UserPeer::IS_EMAIL_VERIFIED, $isEmailVerified['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isEmailVerified['max'])) {
				$this->addUsingAlias(UserPeer::IS_EMAIL_VERIFIED, $isEmailVerified['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserPeer::IS_EMAIL_VERIFIED, $isEmailVerified, $comparison);
	}

	/**
	 * Filter the query on the is_premium column
	 * 
	 * @param     int|array $isPremium The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByIsPremium($isPremium = null, $comparison = null)
	{
		if (is_array($isPremium)) {
			$useMinMax = false;
			if (isset($isPremium['min'])) {
				$this->addUsingAlias(UserPeer::IS_PREMIUM, $isPremium['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isPremium['max'])) {
				$this->addUsingAlias(UserPeer::IS_PREMIUM, $isPremium['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserPeer::IS_PREMIUM, $isPremium, $comparison);
	}

	/**
	 * Filter the query on the last_login_date column
	 * 
	 * @param     string|array $lastLoginDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByLastLoginDate($lastLoginDate = null, $comparison = null)
	{
		if (is_array($lastLoginDate)) {
			$useMinMax = false;
			if (isset($lastLoginDate['min'])) {
				$this->addUsingAlias(UserPeer::LAST_LOGIN_DATE, $lastLoginDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lastLoginDate['max'])) {
				$this->addUsingAlias(UserPeer::LAST_LOGIN_DATE, $lastLoginDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserPeer::LAST_LOGIN_DATE, $lastLoginDate, $comparison);
	}

	/**
	 * Filter the query on the date_created column
	 * 
	 * @param     string|array $dateCreated The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByDateCreated($dateCreated = null, $comparison = null)
	{
		if (is_array($dateCreated)) {
			$useMinMax = false;
			if (isset($dateCreated['min'])) {
				$this->addUsingAlias(UserPeer::DATE_CREATED, $dateCreated['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateCreated['max'])) {
				$this->addUsingAlias(UserPeer::DATE_CREATED, $dateCreated['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserPeer::DATE_CREATED, $dateCreated, $comparison);
	}

	/**
	 * Filter the query on the date_expires column
	 * 
	 * @param     string|array $dateExpires The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByDateExpires($dateExpires = null, $comparison = null)
	{
		if (is_array($dateExpires)) {
			$useMinMax = false;
			if (isset($dateExpires['min'])) {
				$this->addUsingAlias(UserPeer::DATE_EXPIRES, $dateExpires['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateExpires['max'])) {
				$this->addUsingAlias(UserPeer::DATE_EXPIRES, $dateExpires['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserPeer::DATE_EXPIRES, $dateExpires, $comparison);
	}

	/**
	 * Filter the query on the date_modified column
	 * 
	 * @param     string|array $dateModified The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByDateModified($dateModified = null, $comparison = null)
	{
		if (is_array($dateModified)) {
			$useMinMax = false;
			if (isset($dateModified['min'])) {
				$this->addUsingAlias(UserPeer::DATE_MODIFIED, $dateModified['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateModified['max'])) {
				$this->addUsingAlias(UserPeer::DATE_MODIFIED, $dateModified['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserPeer::DATE_MODIFIED, $dateModified, $comparison);
	}

	/**
	 * Filter the query on the remote_addr_created column
	 * 
	 * @param     string $remoteAddrCreated The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByRemoteAddrCreated($remoteAddrCreated = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($remoteAddrCreated)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $remoteAddrCreated)) {
				$remoteAddrCreated = str_replace('*', '%', $remoteAddrCreated);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::REMOTE_ADDR_CREATED, $remoteAddrCreated, $comparison);
	}

	/**
	 * Filter the query on the remote_addr_modified column
	 * 
	 * @param     string $remoteAddrModified The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByRemoteAddrModified($remoteAddrModified = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($remoteAddrModified)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $remoteAddrModified)) {
				$remoteAddrModified = str_replace('*', '%', $remoteAddrModified);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserPeer::REMOTE_ADDR_MODIFIED, $remoteAddrModified, $comparison);
	}

	/**
	 * Filter the query by a related AffiliatePayment object
	 *
	 * @param     AffiliatePayment $affiliatePayment  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByAffiliatePayment($affiliatePayment, $comparison = null)
	{
		return $this
			->addUsingAlias(UserPeer::ID, $affiliatePayment->getUserId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the AffiliatePayment relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function joinAffiliatePayment($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('AffiliatePayment');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'AffiliatePayment');
		}
		
		return $this;
	}

	/**
	 * Use the AffiliatePayment relation AffiliatePayment object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    AffiliatePaymentQuery A secondary query class using the current class as primary query
	 */
	public function useAffiliatePaymentQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinAffiliatePayment($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'AffiliatePayment', 'AffiliatePaymentQuery');
	}

	/**
	 * Filter the query by a related BusinessUser object
	 *
	 * @param     BusinessUser $businessUser  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByBusinessUser($businessUser, $comparison = null)
	{
		return $this
			->addUsingAlias(UserPeer::ID, $businessUser->getUserId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the BusinessUser relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function joinBusinessUser($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('BusinessUser');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'BusinessUser');
		}
		
		return $this;
	}

	/**
	 * Use the BusinessUser relation BusinessUser object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    BusinessUserQuery A secondary query class using the current class as primary query
	 */
	public function useBusinessUserQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinBusinessUser($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'BusinessUser', 'BusinessUserQuery');
	}

	/**
	 * Filter the query by a related Credit object
	 *
	 * @param     Credit $credit  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByCredit($credit, $comparison = null)
	{
		return $this
			->addUsingAlias(UserPeer::ID, $credit->getUserId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Credit relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function joinCredit($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Credit');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'Credit');
		}
		
		return $this;
	}

	/**
	 * Use the Credit relation Credit object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CreditQuery A secondary query class using the current class as primary query
	 */
	public function useCreditQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinCredit($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Credit', 'CreditQuery');
	}

	/**
	 * Filter the query by a related Image object
	 *
	 * @param     Image $image  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByImage($image, $comparison = null)
	{
		return $this
			->addUsingAlias(UserPeer::ID, $image->getUserId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Image relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function joinImage($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Image');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'Image');
		}
		
		return $this;
	}

	/**
	 * Use the Image relation Image object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ImageQuery A secondary query class using the current class as primary query
	 */
	public function useImageQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinImage($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Image', 'ImageQuery');
	}

	/**
	 * Filter the query by a related Payment object
	 *
	 * @param     Payment $payment  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByPayment($payment, $comparison = null)
	{
		return $this
			->addUsingAlias(UserPeer::ID, $payment->getUserId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Payment relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function joinPayment($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Payment');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'Payment');
		}
		
		return $this;
	}

	/**
	 * Use the Payment relation Payment object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PaymentQuery A secondary query class using the current class as primary query
	 */
	public function usePaymentQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinPayment($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Payment', 'PaymentQuery');
	}

	/**
	 * Filter the query by a related PaymentMethod object
	 *
	 * @param     PaymentMethod $paymentMethod  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByPaymentMethod($paymentMethod, $comparison = null)
	{
		return $this
			->addUsingAlias(UserPeer::ID, $paymentMethod->getUserId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the PaymentMethod relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function joinPaymentMethod($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('PaymentMethod');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'PaymentMethod');
		}
		
		return $this;
	}

	/**
	 * Use the PaymentMethod relation PaymentMethod object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PaymentMethodQuery A secondary query class using the current class as primary query
	 */
	public function usePaymentMethodQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinPaymentMethod($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'PaymentMethod', 'PaymentMethodQuery');
	}

	/**
	 * Filter the query by a related PurchaseOrder object
	 *
	 * @param     PurchaseOrder $purchaseOrder  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByPurchaseOrder($purchaseOrder, $comparison = null)
	{
		return $this
			->addUsingAlias(UserPeer::ID, $purchaseOrder->getUserId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the PurchaseOrder relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function joinPurchaseOrder($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('PurchaseOrder');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'PurchaseOrder');
		}
		
		return $this;
	}

	/**
	 * Use the PurchaseOrder relation PurchaseOrder object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PurchaseOrderQuery A secondary query class using the current class as primary query
	 */
	public function usePurchaseOrderQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinPurchaseOrder($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'PurchaseOrder', 'PurchaseOrderQuery');
	}

	/**
	 * Filter the query by a related UserNote object
	 *
	 * @param     UserNote $userNote  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByUserNoteRelatedByUserId($userNote, $comparison = null)
	{
		return $this
			->addUsingAlias(UserPeer::ID, $userNote->getUserId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the UserNoteRelatedByUserId relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function joinUserNoteRelatedByUserId($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('UserNoteRelatedByUserId');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'UserNoteRelatedByUserId');
		}
		
		return $this;
	}

	/**
	 * Use the UserNoteRelatedByUserId relation UserNote object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserNoteQuery A secondary query class using the current class as primary query
	 */
	public function useUserNoteRelatedByUserIdQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinUserNoteRelatedByUserId($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'UserNoteRelatedByUserId', 'UserNoteQuery');
	}

	/**
	 * Filter the query by a related UserNote object
	 *
	 * @param     UserNote $userNote  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByUserNoteRelatedByAdminId($userNote, $comparison = null)
	{
		return $this
			->addUsingAlias(UserPeer::ID, $userNote->getAdminId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the UserNoteRelatedByAdminId relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function joinUserNoteRelatedByAdminId($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('UserNoteRelatedByAdminId');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'UserNoteRelatedByAdminId');
		}
		
		return $this;
	}

	/**
	 * Use the UserNoteRelatedByAdminId relation UserNote object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserNoteQuery A secondary query class using the current class as primary query
	 */
	public function useUserNoteRelatedByAdminIdQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinUserNoteRelatedByAdminId($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'UserNoteRelatedByAdminId', 'UserNoteQuery');
	}

	/**
	 * Filter the query by a related UserSecurityObject object
	 *
	 * @param     UserSecurityObject $userSecurityObject  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByUserSecurityObjectRelatedByUserId($userSecurityObject, $comparison = null)
	{
		return $this
			->addUsingAlias(UserPeer::ID, $userSecurityObject->getUserId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the UserSecurityObjectRelatedByUserId relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function joinUserSecurityObjectRelatedByUserId($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('UserSecurityObjectRelatedByUserId');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'UserSecurityObjectRelatedByUserId');
		}
		
		return $this;
	}

	/**
	 * Use the UserSecurityObjectRelatedByUserId relation UserSecurityObject object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserSecurityObjectQuery A secondary query class using the current class as primary query
	 */
	public function useUserSecurityObjectRelatedByUserIdQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinUserSecurityObjectRelatedByUserId($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'UserSecurityObjectRelatedByUserId', 'UserSecurityObjectQuery');
	}

	/**
	 * Filter the query by a related UserSecurityObject object
	 *
	 * @param     UserSecurityObject $userSecurityObject  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByUserSecurityObjectRelatedByAssignedByUserId($userSecurityObject, $comparison = null)
	{
		return $this
			->addUsingAlias(UserPeer::ID, $userSecurityObject->getAssignedByUserId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the UserSecurityObjectRelatedByAssignedByUserId relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function joinUserSecurityObjectRelatedByAssignedByUserId($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('UserSecurityObjectRelatedByAssignedByUserId');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'UserSecurityObjectRelatedByAssignedByUserId');
		}
		
		return $this;
	}

	/**
	 * Use the UserSecurityObjectRelatedByAssignedByUserId relation UserSecurityObject object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserSecurityObjectQuery A secondary query class using the current class as primary query
	 */
	public function useUserSecurityObjectRelatedByAssignedByUserIdQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinUserSecurityObjectRelatedByAssignedByUserId($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'UserSecurityObjectRelatedByAssignedByUserId', 'UserSecurityObjectQuery');
	}

	/**
	 * Filter the query by a related UserThread object
	 *
	 * @param     UserThread $userThread  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByUserThread($userThread, $comparison = null)
	{
		return $this
			->addUsingAlias(UserPeer::ID, $userThread->getUserId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the UserThread relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function joinUserThread($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('UserThread');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'UserThread');
		}
		
		return $this;
	}

	/**
	 * Use the UserThread relation UserThread object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserThreadQuery A secondary query class using the current class as primary query
	 */
	public function useUserThreadQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinUserThread($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'UserThread', 'UserThreadQuery');
	}

	/**
	 * Filter the query by a related UserTopic object
	 *
	 * @param     UserTopic $userTopic  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function filterByUserTopic($userTopic, $comparison = null)
	{
		return $this
			->addUsingAlias(UserPeer::ID, $userTopic->getUserId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the UserTopic relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function joinUserTopic($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('UserTopic');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'UserTopic');
		}
		
		return $this;
	}

	/**
	 * Use the UserTopic relation UserTopic object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserTopicQuery A secondary query class using the current class as primary query
	 */
	public function useUserTopicQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinUserTopic($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'UserTopic', 'UserTopicQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     User $user Object to remove from the list of results
	 *
	 * @return    UserQuery The current query, for fluid interface
	 */
	public function prune($user = null)
	{
		if ($user) {
			$this->addUsingAlias(UserPeer::ID, $user->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseUserQuery
