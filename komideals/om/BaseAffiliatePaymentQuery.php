<?php


/**
 * Base class that represents a query for the 'affiliate_payment' table.
 *
 * 
 *
 * @method     AffiliatePaymentQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     AffiliatePaymentQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     AffiliatePaymentQuery orderByBusinessId($order = Criteria::ASC) Order by the business_id column
 * @method     AffiliatePaymentQuery orderByCompanyName($order = Criteria::ASC) Order by the company_name column
 * @method     AffiliatePaymentQuery orderByAddressline1($order = Criteria::ASC) Order by the addressline1 column
 * @method     AffiliatePaymentQuery orderByAddressline2($order = Criteria::ASC) Order by the addressline2 column
 * @method     AffiliatePaymentQuery orderByCity($order = Criteria::ASC) Order by the city column
 * @method     AffiliatePaymentQuery orderByState($order = Criteria::ASC) Order by the state column
 * @method     AffiliatePaymentQuery orderByPostcode($order = Criteria::ASC) Order by the postcode column
 * @method     AffiliatePaymentQuery orderByCountry($order = Criteria::ASC) Order by the country column
 * @method     AffiliatePaymentQuery orderByTelephone($order = Criteria::ASC) Order by the telephone column
 * @method     AffiliatePaymentQuery orderByFax($order = Criteria::ASC) Order by the fax column
 * @method     AffiliatePaymentQuery orderByIsActive($order = Criteria::ASC) Order by the is_active column
 * @method     AffiliatePaymentQuery orderByIsCleared($order = Criteria::ASC) Order by the is_cleared column
 * @method     AffiliatePaymentQuery orderByDateCreated($order = Criteria::ASC) Order by the date_created column
 * @method     AffiliatePaymentQuery orderByDateExpires($order = Criteria::ASC) Order by the date_expires column
 * @method     AffiliatePaymentQuery orderByDateModified($order = Criteria::ASC) Order by the date_modified column
 * @method     AffiliatePaymentQuery orderByDateCleared($order = Criteria::ASC) Order by the date_cleared column
 * @method     AffiliatePaymentQuery orderByRemoteAddrCreated($order = Criteria::ASC) Order by the remote_addr_created column
 * @method     AffiliatePaymentQuery orderByRemoteAddrModified($order = Criteria::ASC) Order by the remote_addr_modified column
 * @method     AffiliatePaymentQuery orderByAmount($order = Criteria::ASC) Order by the amount column
 * @method     AffiliatePaymentQuery orderByCheckNumber($order = Criteria::ASC) Order by the check_number column
 * @method     AffiliatePaymentQuery orderByTransactionId($order = Criteria::ASC) Order by the transaction_id column
 *
 * @method     AffiliatePaymentQuery groupById() Group by the id column
 * @method     AffiliatePaymentQuery groupByUserId() Group by the user_id column
 * @method     AffiliatePaymentQuery groupByBusinessId() Group by the business_id column
 * @method     AffiliatePaymentQuery groupByCompanyName() Group by the company_name column
 * @method     AffiliatePaymentQuery groupByAddressline1() Group by the addressline1 column
 * @method     AffiliatePaymentQuery groupByAddressline2() Group by the addressline2 column
 * @method     AffiliatePaymentQuery groupByCity() Group by the city column
 * @method     AffiliatePaymentQuery groupByState() Group by the state column
 * @method     AffiliatePaymentQuery groupByPostcode() Group by the postcode column
 * @method     AffiliatePaymentQuery groupByCountry() Group by the country column
 * @method     AffiliatePaymentQuery groupByTelephone() Group by the telephone column
 * @method     AffiliatePaymentQuery groupByFax() Group by the fax column
 * @method     AffiliatePaymentQuery groupByIsActive() Group by the is_active column
 * @method     AffiliatePaymentQuery groupByIsCleared() Group by the is_cleared column
 * @method     AffiliatePaymentQuery groupByDateCreated() Group by the date_created column
 * @method     AffiliatePaymentQuery groupByDateExpires() Group by the date_expires column
 * @method     AffiliatePaymentQuery groupByDateModified() Group by the date_modified column
 * @method     AffiliatePaymentQuery groupByDateCleared() Group by the date_cleared column
 * @method     AffiliatePaymentQuery groupByRemoteAddrCreated() Group by the remote_addr_created column
 * @method     AffiliatePaymentQuery groupByRemoteAddrModified() Group by the remote_addr_modified column
 * @method     AffiliatePaymentQuery groupByAmount() Group by the amount column
 * @method     AffiliatePaymentQuery groupByCheckNumber() Group by the check_number column
 * @method     AffiliatePaymentQuery groupByTransactionId() Group by the transaction_id column
 *
 * @method     AffiliatePaymentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     AffiliatePaymentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     AffiliatePaymentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     AffiliatePaymentQuery leftJoinUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the User relation
 * @method     AffiliatePaymentQuery rightJoinUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the User relation
 * @method     AffiliatePaymentQuery innerJoinUser($relationAlias = null) Adds a INNER JOIN clause to the query using the User relation
 *
 * @method     AffiliatePaymentQuery leftJoinBusiness($relationAlias = null) Adds a LEFT JOIN clause to the query using the Business relation
 * @method     AffiliatePaymentQuery rightJoinBusiness($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Business relation
 * @method     AffiliatePaymentQuery innerJoinBusiness($relationAlias = null) Adds a INNER JOIN clause to the query using the Business relation
 *
 * @method     AffiliatePaymentQuery leftJoinAffiliatePaymentDetail($relationAlias = null) Adds a LEFT JOIN clause to the query using the AffiliatePaymentDetail relation
 * @method     AffiliatePaymentQuery rightJoinAffiliatePaymentDetail($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AffiliatePaymentDetail relation
 * @method     AffiliatePaymentQuery innerJoinAffiliatePaymentDetail($relationAlias = null) Adds a INNER JOIN clause to the query using the AffiliatePaymentDetail relation
 *
 * @method     AffiliatePayment findOne(PropelPDO $con = null) Return the first AffiliatePayment matching the query
 * @method     AffiliatePayment findOneOrCreate(PropelPDO $con = null) Return the first AffiliatePayment matching the query, or a new AffiliatePayment object populated from the query conditions when no match is found
 *
 * @method     AffiliatePayment findOneById(int $id) Return the first AffiliatePayment filtered by the id column
 * @method     AffiliatePayment findOneByUserId(int $user_id) Return the first AffiliatePayment filtered by the user_id column
 * @method     AffiliatePayment findOneByBusinessId(int $business_id) Return the first AffiliatePayment filtered by the business_id column
 * @method     AffiliatePayment findOneByCompanyName(string $company_name) Return the first AffiliatePayment filtered by the company_name column
 * @method     AffiliatePayment findOneByAddressline1(string $addressline1) Return the first AffiliatePayment filtered by the addressline1 column
 * @method     AffiliatePayment findOneByAddressline2(string $addressline2) Return the first AffiliatePayment filtered by the addressline2 column
 * @method     AffiliatePayment findOneByCity(string $city) Return the first AffiliatePayment filtered by the city column
 * @method     AffiliatePayment findOneByState(string $state) Return the first AffiliatePayment filtered by the state column
 * @method     AffiliatePayment findOneByPostcode(string $postcode) Return the first AffiliatePayment filtered by the postcode column
 * @method     AffiliatePayment findOneByCountry(string $country) Return the first AffiliatePayment filtered by the country column
 * @method     AffiliatePayment findOneByTelephone(string $telephone) Return the first AffiliatePayment filtered by the telephone column
 * @method     AffiliatePayment findOneByFax(string $fax) Return the first AffiliatePayment filtered by the fax column
 * @method     AffiliatePayment findOneByIsActive(int $is_active) Return the first AffiliatePayment filtered by the is_active column
 * @method     AffiliatePayment findOneByIsCleared(int $is_cleared) Return the first AffiliatePayment filtered by the is_cleared column
 * @method     AffiliatePayment findOneByDateCreated(string $date_created) Return the first AffiliatePayment filtered by the date_created column
 * @method     AffiliatePayment findOneByDateExpires(string $date_expires) Return the first AffiliatePayment filtered by the date_expires column
 * @method     AffiliatePayment findOneByDateModified(string $date_modified) Return the first AffiliatePayment filtered by the date_modified column
 * @method     AffiliatePayment findOneByDateCleared(string $date_cleared) Return the first AffiliatePayment filtered by the date_cleared column
 * @method     AffiliatePayment findOneByRemoteAddrCreated(string $remote_addr_created) Return the first AffiliatePayment filtered by the remote_addr_created column
 * @method     AffiliatePayment findOneByRemoteAddrModified(string $remote_addr_modified) Return the first AffiliatePayment filtered by the remote_addr_modified column
 * @method     AffiliatePayment findOneByAmount(double $amount) Return the first AffiliatePayment filtered by the amount column
 * @method     AffiliatePayment findOneByCheckNumber(int $check_number) Return the first AffiliatePayment filtered by the check_number column
 * @method     AffiliatePayment findOneByTransactionId(int $transaction_id) Return the first AffiliatePayment filtered by the transaction_id column
 *
 * @method     array findById(int $id) Return AffiliatePayment objects filtered by the id column
 * @method     array findByUserId(int $user_id) Return AffiliatePayment objects filtered by the user_id column
 * @method     array findByBusinessId(int $business_id) Return AffiliatePayment objects filtered by the business_id column
 * @method     array findByCompanyName(string $company_name) Return AffiliatePayment objects filtered by the company_name column
 * @method     array findByAddressline1(string $addressline1) Return AffiliatePayment objects filtered by the addressline1 column
 * @method     array findByAddressline2(string $addressline2) Return AffiliatePayment objects filtered by the addressline2 column
 * @method     array findByCity(string $city) Return AffiliatePayment objects filtered by the city column
 * @method     array findByState(string $state) Return AffiliatePayment objects filtered by the state column
 * @method     array findByPostcode(string $postcode) Return AffiliatePayment objects filtered by the postcode column
 * @method     array findByCountry(string $country) Return AffiliatePayment objects filtered by the country column
 * @method     array findByTelephone(string $telephone) Return AffiliatePayment objects filtered by the telephone column
 * @method     array findByFax(string $fax) Return AffiliatePayment objects filtered by the fax column
 * @method     array findByIsActive(int $is_active) Return AffiliatePayment objects filtered by the is_active column
 * @method     array findByIsCleared(int $is_cleared) Return AffiliatePayment objects filtered by the is_cleared column
 * @method     array findByDateCreated(string $date_created) Return AffiliatePayment objects filtered by the date_created column
 * @method     array findByDateExpires(string $date_expires) Return AffiliatePayment objects filtered by the date_expires column
 * @method     array findByDateModified(string $date_modified) Return AffiliatePayment objects filtered by the date_modified column
 * @method     array findByDateCleared(string $date_cleared) Return AffiliatePayment objects filtered by the date_cleared column
 * @method     array findByRemoteAddrCreated(string $remote_addr_created) Return AffiliatePayment objects filtered by the remote_addr_created column
 * @method     array findByRemoteAddrModified(string $remote_addr_modified) Return AffiliatePayment objects filtered by the remote_addr_modified column
 * @method     array findByAmount(double $amount) Return AffiliatePayment objects filtered by the amount column
 * @method     array findByCheckNumber(int $check_number) Return AffiliatePayment objects filtered by the check_number column
 * @method     array findByTransactionId(int $transaction_id) Return AffiliatePayment objects filtered by the transaction_id column
 *
 * @package    propel.generator.komideals.om
 */
abstract class BaseAffiliatePaymentQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseAffiliatePaymentQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'komideals', $modelName = 'AffiliatePayment', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new AffiliatePaymentQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    AffiliatePaymentQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof AffiliatePaymentQuery) {
			return $criteria;
		}
		$query = new AffiliatePaymentQuery();
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
	 * @return    AffiliatePayment|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = AffiliatePaymentPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    AffiliatePaymentQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(AffiliatePaymentPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    AffiliatePaymentQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(AffiliatePaymentPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AffiliatePaymentQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(AffiliatePaymentPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AffiliatePaymentQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(AffiliatePaymentPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(AffiliatePaymentPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AffiliatePaymentPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the business_id column
	 * 
	 * @param     int|array $businessId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AffiliatePaymentQuery The current query, for fluid interface
	 */
	public function filterByBusinessId($businessId = null, $comparison = null)
	{
		if (is_array($businessId)) {
			$useMinMax = false;
			if (isset($businessId['min'])) {
				$this->addUsingAlias(AffiliatePaymentPeer::BUSINESS_ID, $businessId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($businessId['max'])) {
				$this->addUsingAlias(AffiliatePaymentPeer::BUSINESS_ID, $businessId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AffiliatePaymentPeer::BUSINESS_ID, $businessId, $comparison);
	}

	/**
	 * Filter the query on the company_name column
	 * 
	 * @param     string $companyName The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AffiliatePaymentQuery The current query, for fluid interface
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
		return $this->addUsingAlias(AffiliatePaymentPeer::COMPANY_NAME, $companyName, $comparison);
	}

	/**
	 * Filter the query on the addressline1 column
	 * 
	 * @param     string $addressline1 The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AffiliatePaymentQuery The current query, for fluid interface
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
		return $this->addUsingAlias(AffiliatePaymentPeer::ADDRESSLINE1, $addressline1, $comparison);
	}

	/**
	 * Filter the query on the addressline2 column
	 * 
	 * @param     string $addressline2 The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AffiliatePaymentQuery The current query, for fluid interface
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
		return $this->addUsingAlias(AffiliatePaymentPeer::ADDRESSLINE2, $addressline2, $comparison);
	}

	/**
	 * Filter the query on the city column
	 * 
	 * @param     string $city The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AffiliatePaymentQuery The current query, for fluid interface
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
		return $this->addUsingAlias(AffiliatePaymentPeer::CITY, $city, $comparison);
	}

	/**
	 * Filter the query on the state column
	 * 
	 * @param     string $state The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AffiliatePaymentQuery The current query, for fluid interface
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
		return $this->addUsingAlias(AffiliatePaymentPeer::STATE, $state, $comparison);
	}

	/**
	 * Filter the query on the postcode column
	 * 
	 * @param     string $postcode The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AffiliatePaymentQuery The current query, for fluid interface
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
		return $this->addUsingAlias(AffiliatePaymentPeer::POSTCODE, $postcode, $comparison);
	}

	/**
	 * Filter the query on the country column
	 * 
	 * @param     string $country The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AffiliatePaymentQuery The current query, for fluid interface
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
		return $this->addUsingAlias(AffiliatePaymentPeer::COUNTRY, $country, $comparison);
	}

	/**
	 * Filter the query on the telephone column
	 * 
	 * @param     string $telephone The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AffiliatePaymentQuery The current query, for fluid interface
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
		return $this->addUsingAlias(AffiliatePaymentPeer::TELEPHONE, $telephone, $comparison);
	}

	/**
	 * Filter the query on the fax column
	 * 
	 * @param     string $fax The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AffiliatePaymentQuery The current query, for fluid interface
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
		return $this->addUsingAlias(AffiliatePaymentPeer::FAX, $fax, $comparison);
	}

	/**
	 * Filter the query on the is_active column
	 * 
	 * @param     int|array $isActive The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AffiliatePaymentQuery The current query, for fluid interface
	 */
	public function filterByIsActive($isActive = null, $comparison = null)
	{
		if (is_array($isActive)) {
			$useMinMax = false;
			if (isset($isActive['min'])) {
				$this->addUsingAlias(AffiliatePaymentPeer::IS_ACTIVE, $isActive['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isActive['max'])) {
				$this->addUsingAlias(AffiliatePaymentPeer::IS_ACTIVE, $isActive['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AffiliatePaymentPeer::IS_ACTIVE, $isActive, $comparison);
	}

	/**
	 * Filter the query on the is_cleared column
	 * 
	 * @param     int|array $isCleared The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AffiliatePaymentQuery The current query, for fluid interface
	 */
	public function filterByIsCleared($isCleared = null, $comparison = null)
	{
		if (is_array($isCleared)) {
			$useMinMax = false;
			if (isset($isCleared['min'])) {
				$this->addUsingAlias(AffiliatePaymentPeer::IS_CLEARED, $isCleared['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isCleared['max'])) {
				$this->addUsingAlias(AffiliatePaymentPeer::IS_CLEARED, $isCleared['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AffiliatePaymentPeer::IS_CLEARED, $isCleared, $comparison);
	}

	/**
	 * Filter the query on the date_created column
	 * 
	 * @param     string|array $dateCreated The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AffiliatePaymentQuery The current query, for fluid interface
	 */
	public function filterByDateCreated($dateCreated = null, $comparison = null)
	{
		if (is_array($dateCreated)) {
			$useMinMax = false;
			if (isset($dateCreated['min'])) {
				$this->addUsingAlias(AffiliatePaymentPeer::DATE_CREATED, $dateCreated['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateCreated['max'])) {
				$this->addUsingAlias(AffiliatePaymentPeer::DATE_CREATED, $dateCreated['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AffiliatePaymentPeer::DATE_CREATED, $dateCreated, $comparison);
	}

	/**
	 * Filter the query on the date_expires column
	 * 
	 * @param     string|array $dateExpires The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AffiliatePaymentQuery The current query, for fluid interface
	 */
	public function filterByDateExpires($dateExpires = null, $comparison = null)
	{
		if (is_array($dateExpires)) {
			$useMinMax = false;
			if (isset($dateExpires['min'])) {
				$this->addUsingAlias(AffiliatePaymentPeer::DATE_EXPIRES, $dateExpires['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateExpires['max'])) {
				$this->addUsingAlias(AffiliatePaymentPeer::DATE_EXPIRES, $dateExpires['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AffiliatePaymentPeer::DATE_EXPIRES, $dateExpires, $comparison);
	}

	/**
	 * Filter the query on the date_modified column
	 * 
	 * @param     string|array $dateModified The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AffiliatePaymentQuery The current query, for fluid interface
	 */
	public function filterByDateModified($dateModified = null, $comparison = null)
	{
		if (is_array($dateModified)) {
			$useMinMax = false;
			if (isset($dateModified['min'])) {
				$this->addUsingAlias(AffiliatePaymentPeer::DATE_MODIFIED, $dateModified['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateModified['max'])) {
				$this->addUsingAlias(AffiliatePaymentPeer::DATE_MODIFIED, $dateModified['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AffiliatePaymentPeer::DATE_MODIFIED, $dateModified, $comparison);
	}

	/**
	 * Filter the query on the date_cleared column
	 * 
	 * @param     string|array $dateCleared The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AffiliatePaymentQuery The current query, for fluid interface
	 */
	public function filterByDateCleared($dateCleared = null, $comparison = null)
	{
		if (is_array($dateCleared)) {
			$useMinMax = false;
			if (isset($dateCleared['min'])) {
				$this->addUsingAlias(AffiliatePaymentPeer::DATE_CLEARED, $dateCleared['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateCleared['max'])) {
				$this->addUsingAlias(AffiliatePaymentPeer::DATE_CLEARED, $dateCleared['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AffiliatePaymentPeer::DATE_CLEARED, $dateCleared, $comparison);
	}

	/**
	 * Filter the query on the remote_addr_created column
	 * 
	 * @param     string $remoteAddrCreated The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AffiliatePaymentQuery The current query, for fluid interface
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
		return $this->addUsingAlias(AffiliatePaymentPeer::REMOTE_ADDR_CREATED, $remoteAddrCreated, $comparison);
	}

	/**
	 * Filter the query on the remote_addr_modified column
	 * 
	 * @param     string $remoteAddrModified The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AffiliatePaymentQuery The current query, for fluid interface
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
		return $this->addUsingAlias(AffiliatePaymentPeer::REMOTE_ADDR_MODIFIED, $remoteAddrModified, $comparison);
	}

	/**
	 * Filter the query on the amount column
	 * 
	 * @param     double|array $amount The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AffiliatePaymentQuery The current query, for fluid interface
	 */
	public function filterByAmount($amount = null, $comparison = null)
	{
		if (is_array($amount)) {
			$useMinMax = false;
			if (isset($amount['min'])) {
				$this->addUsingAlias(AffiliatePaymentPeer::AMOUNT, $amount['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($amount['max'])) {
				$this->addUsingAlias(AffiliatePaymentPeer::AMOUNT, $amount['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AffiliatePaymentPeer::AMOUNT, $amount, $comparison);
	}

	/**
	 * Filter the query on the check_number column
	 * 
	 * @param     int|array $checkNumber The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AffiliatePaymentQuery The current query, for fluid interface
	 */
	public function filterByCheckNumber($checkNumber = null, $comparison = null)
	{
		if (is_array($checkNumber)) {
			$useMinMax = false;
			if (isset($checkNumber['min'])) {
				$this->addUsingAlias(AffiliatePaymentPeer::CHECK_NUMBER, $checkNumber['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($checkNumber['max'])) {
				$this->addUsingAlias(AffiliatePaymentPeer::CHECK_NUMBER, $checkNumber['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AffiliatePaymentPeer::CHECK_NUMBER, $checkNumber, $comparison);
	}

	/**
	 * Filter the query on the transaction_id column
	 * 
	 * @param     int|array $transactionId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AffiliatePaymentQuery The current query, for fluid interface
	 */
	public function filterByTransactionId($transactionId = null, $comparison = null)
	{
		if (is_array($transactionId)) {
			$useMinMax = false;
			if (isset($transactionId['min'])) {
				$this->addUsingAlias(AffiliatePaymentPeer::TRANSACTION_ID, $transactionId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($transactionId['max'])) {
				$this->addUsingAlias(AffiliatePaymentPeer::TRANSACTION_ID, $transactionId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AffiliatePaymentPeer::TRANSACTION_ID, $transactionId, $comparison);
	}

	/**
	 * Filter the query by a related User object
	 *
	 * @param     User $user  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AffiliatePaymentQuery The current query, for fluid interface
	 */
	public function filterByUser($user, $comparison = null)
	{
		return $this
			->addUsingAlias(AffiliatePaymentPeer::USER_ID, $user->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the User relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    AffiliatePaymentQuery The current query, for fluid interface
	 */
	public function joinUser($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('User');
		
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
			$this->addJoinObject($join, 'User');
		}
		
		return $this;
	}

	/**
	 * Use the User relation User object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserQuery A secondary query class using the current class as primary query
	 */
	public function useUserQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinUser($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'User', 'UserQuery');
	}

	/**
	 * Filter the query by a related Business object
	 *
	 * @param     Business $business  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AffiliatePaymentQuery The current query, for fluid interface
	 */
	public function filterByBusiness($business, $comparison = null)
	{
		return $this
			->addUsingAlias(AffiliatePaymentPeer::BUSINESS_ID, $business->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Business relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    AffiliatePaymentQuery The current query, for fluid interface
	 */
	public function joinBusiness($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Business');
		
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
			$this->addJoinObject($join, 'Business');
		}
		
		return $this;
	}

	/**
	 * Use the Business relation Business object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    BusinessQuery A secondary query class using the current class as primary query
	 */
	public function useBusinessQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinBusiness($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Business', 'BusinessQuery');
	}

	/**
	 * Filter the query by a related AffiliatePaymentDetail object
	 *
	 * @param     AffiliatePaymentDetail $affiliatePaymentDetail  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AffiliatePaymentQuery The current query, for fluid interface
	 */
	public function filterByAffiliatePaymentDetail($affiliatePaymentDetail, $comparison = null)
	{
		return $this
			->addUsingAlias(AffiliatePaymentPeer::ID, $affiliatePaymentDetail->getAffiliatePaymentId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the AffiliatePaymentDetail relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    AffiliatePaymentQuery The current query, for fluid interface
	 */
	public function joinAffiliatePaymentDetail($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('AffiliatePaymentDetail');
		
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
			$this->addJoinObject($join, 'AffiliatePaymentDetail');
		}
		
		return $this;
	}

	/**
	 * Use the AffiliatePaymentDetail relation AffiliatePaymentDetail object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    AffiliatePaymentDetailQuery A secondary query class using the current class as primary query
	 */
	public function useAffiliatePaymentDetailQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinAffiliatePaymentDetail($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'AffiliatePaymentDetail', 'AffiliatePaymentDetailQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     AffiliatePayment $affiliatePayment Object to remove from the list of results
	 *
	 * @return    AffiliatePaymentQuery The current query, for fluid interface
	 */
	public function prune($affiliatePayment = null)
	{
		if ($affiliatePayment) {
			$this->addUsingAlias(AffiliatePaymentPeer::ID, $affiliatePayment->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseAffiliatePaymentQuery
