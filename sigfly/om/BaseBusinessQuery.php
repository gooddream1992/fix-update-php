<?php


/**
 * Base class that represents a query for the 'business' table.
 *
 * 
 *
 * @method     BusinessQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     BusinessQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     BusinessQuery orderByCompanyDescription($order = Criteria::ASC) Order by the company_description column
 * @method     BusinessQuery orderByCompanyUrl($order = Criteria::ASC) Order by the company_url column
 * @method     BusinessQuery orderByCompanyName($order = Criteria::ASC) Order by the company_name column
 * @method     BusinessQuery orderByAddressline1($order = Criteria::ASC) Order by the addressline1 column
 * @method     BusinessQuery orderByAddressline2($order = Criteria::ASC) Order by the addressline2 column
 * @method     BusinessQuery orderByCity($order = Criteria::ASC) Order by the city column
 * @method     BusinessQuery orderByState($order = Criteria::ASC) Order by the state column
 * @method     BusinessQuery orderByPostcode($order = Criteria::ASC) Order by the postcode column
 * @method     BusinessQuery orderByCountry($order = Criteria::ASC) Order by the country column
 * @method     BusinessQuery orderByTelephone($order = Criteria::ASC) Order by the telephone column
 * @method     BusinessQuery orderByFax($order = Criteria::ASC) Order by the fax column
 * @method     BusinessQuery orderByIsActive($order = Criteria::ASC) Order by the is_active column
 * @method     BusinessQuery orderByIsPremium($order = Criteria::ASC) Order by the is_premium column
 * @method     BusinessQuery orderByDateCreated($order = Criteria::ASC) Order by the date_created column
 * @method     BusinessQuery orderByDateExpires($order = Criteria::ASC) Order by the date_expires column
 * @method     BusinessQuery orderByDateModified($order = Criteria::ASC) Order by the date_modified column
 * @method     BusinessQuery orderByRemoteAddrCreated($order = Criteria::ASC) Order by the remote_addr_created column
 * @method     BusinessQuery orderByRemoteAddrModified($order = Criteria::ASC) Order by the remote_addr_modified column
 * @method     BusinessQuery orderByPaymentThreshold($order = Criteria::ASC) Order by the payment_threshold column
 * @method     BusinessQuery orderByTaxIdEnc($order = Criteria::ASC) Order by the tax_id_enc column
 * @method     BusinessQuery orderByTaxIdLastFour($order = Criteria::ASC) Order by the tax_id_last_four column
 *
 * @method     BusinessQuery groupById() Group by the id column
 * @method     BusinessQuery groupByEmail() Group by the email column
 * @method     BusinessQuery groupByCompanyDescription() Group by the company_description column
 * @method     BusinessQuery groupByCompanyUrl() Group by the company_url column
 * @method     BusinessQuery groupByCompanyName() Group by the company_name column
 * @method     BusinessQuery groupByAddressline1() Group by the addressline1 column
 * @method     BusinessQuery groupByAddressline2() Group by the addressline2 column
 * @method     BusinessQuery groupByCity() Group by the city column
 * @method     BusinessQuery groupByState() Group by the state column
 * @method     BusinessQuery groupByPostcode() Group by the postcode column
 * @method     BusinessQuery groupByCountry() Group by the country column
 * @method     BusinessQuery groupByTelephone() Group by the telephone column
 * @method     BusinessQuery groupByFax() Group by the fax column
 * @method     BusinessQuery groupByIsActive() Group by the is_active column
 * @method     BusinessQuery groupByIsPremium() Group by the is_premium column
 * @method     BusinessQuery groupByDateCreated() Group by the date_created column
 * @method     BusinessQuery groupByDateExpires() Group by the date_expires column
 * @method     BusinessQuery groupByDateModified() Group by the date_modified column
 * @method     BusinessQuery groupByRemoteAddrCreated() Group by the remote_addr_created column
 * @method     BusinessQuery groupByRemoteAddrModified() Group by the remote_addr_modified column
 * @method     BusinessQuery groupByPaymentThreshold() Group by the payment_threshold column
 * @method     BusinessQuery groupByTaxIdEnc() Group by the tax_id_enc column
 * @method     BusinessQuery groupByTaxIdLastFour() Group by the tax_id_last_four column
 *
 * @method     BusinessQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     BusinessQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     BusinessQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     BusinessQuery leftJoinAffiliatePayment($relationAlias = null) Adds a LEFT JOIN clause to the query using the AffiliatePayment relation
 * @method     BusinessQuery rightJoinAffiliatePayment($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AffiliatePayment relation
 * @method     BusinessQuery innerJoinAffiliatePayment($relationAlias = null) Adds a INNER JOIN clause to the query using the AffiliatePayment relation
 *
 * @method     BusinessQuery leftJoinBusinessUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the BusinessUser relation
 * @method     BusinessQuery rightJoinBusinessUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the BusinessUser relation
 * @method     BusinessQuery innerJoinBusinessUser($relationAlias = null) Adds a INNER JOIN clause to the query using the BusinessUser relation
 *
 * @method     Business findOne(PropelPDO $con = null) Return the first Business matching the query
 * @method     Business findOneOrCreate(PropelPDO $con = null) Return the first Business matching the query, or a new Business object populated from the query conditions when no match is found
 *
 * @method     Business findOneById(int $id) Return the first Business filtered by the id column
 * @method     Business findOneByEmail(string $email) Return the first Business filtered by the email column
 * @method     Business findOneByCompanyDescription(string $company_description) Return the first Business filtered by the company_description column
 * @method     Business findOneByCompanyUrl(string $company_url) Return the first Business filtered by the company_url column
 * @method     Business findOneByCompanyName(string $company_name) Return the first Business filtered by the company_name column
 * @method     Business findOneByAddressline1(string $addressline1) Return the first Business filtered by the addressline1 column
 * @method     Business findOneByAddressline2(string $addressline2) Return the first Business filtered by the addressline2 column
 * @method     Business findOneByCity(string $city) Return the first Business filtered by the city column
 * @method     Business findOneByState(string $state) Return the first Business filtered by the state column
 * @method     Business findOneByPostcode(string $postcode) Return the first Business filtered by the postcode column
 * @method     Business findOneByCountry(string $country) Return the first Business filtered by the country column
 * @method     Business findOneByTelephone(string $telephone) Return the first Business filtered by the telephone column
 * @method     Business findOneByFax(string $fax) Return the first Business filtered by the fax column
 * @method     Business findOneByIsActive(int $is_active) Return the first Business filtered by the is_active column
 * @method     Business findOneByIsPremium(int $is_premium) Return the first Business filtered by the is_premium column
 * @method     Business findOneByDateCreated(string $date_created) Return the first Business filtered by the date_created column
 * @method     Business findOneByDateExpires(string $date_expires) Return the first Business filtered by the date_expires column
 * @method     Business findOneByDateModified(string $date_modified) Return the first Business filtered by the date_modified column
 * @method     Business findOneByRemoteAddrCreated(string $remote_addr_created) Return the first Business filtered by the remote_addr_created column
 * @method     Business findOneByRemoteAddrModified(string $remote_addr_modified) Return the first Business filtered by the remote_addr_modified column
 * @method     Business findOneByPaymentThreshold(double $payment_threshold) Return the first Business filtered by the payment_threshold column
 * @method     Business findOneByTaxIdEnc(resource $tax_id_enc) Return the first Business filtered by the tax_id_enc column
 * @method     Business findOneByTaxIdLastFour(string $tax_id_last_four) Return the first Business filtered by the tax_id_last_four column
 *
 * @method     array findById(int $id) Return Business objects filtered by the id column
 * @method     array findByEmail(string $email) Return Business objects filtered by the email column
 * @method     array findByCompanyDescription(string $company_description) Return Business objects filtered by the company_description column
 * @method     array findByCompanyUrl(string $company_url) Return Business objects filtered by the company_url column
 * @method     array findByCompanyName(string $company_name) Return Business objects filtered by the company_name column
 * @method     array findByAddressline1(string $addressline1) Return Business objects filtered by the addressline1 column
 * @method     array findByAddressline2(string $addressline2) Return Business objects filtered by the addressline2 column
 * @method     array findByCity(string $city) Return Business objects filtered by the city column
 * @method     array findByState(string $state) Return Business objects filtered by the state column
 * @method     array findByPostcode(string $postcode) Return Business objects filtered by the postcode column
 * @method     array findByCountry(string $country) Return Business objects filtered by the country column
 * @method     array findByTelephone(string $telephone) Return Business objects filtered by the telephone column
 * @method     array findByFax(string $fax) Return Business objects filtered by the fax column
 * @method     array findByIsActive(int $is_active) Return Business objects filtered by the is_active column
 * @method     array findByIsPremium(int $is_premium) Return Business objects filtered by the is_premium column
 * @method     array findByDateCreated(string $date_created) Return Business objects filtered by the date_created column
 * @method     array findByDateExpires(string $date_expires) Return Business objects filtered by the date_expires column
 * @method     array findByDateModified(string $date_modified) Return Business objects filtered by the date_modified column
 * @method     array findByRemoteAddrCreated(string $remote_addr_created) Return Business objects filtered by the remote_addr_created column
 * @method     array findByRemoteAddrModified(string $remote_addr_modified) Return Business objects filtered by the remote_addr_modified column
 * @method     array findByPaymentThreshold(double $payment_threshold) Return Business objects filtered by the payment_threshold column
 * @method     array findByTaxIdEnc(resource $tax_id_enc) Return Business objects filtered by the tax_id_enc column
 * @method     array findByTaxIdLastFour(string $tax_id_last_four) Return Business objects filtered by the tax_id_last_four column
 *
 * @package    propel.generator.sigfly.om
 */
abstract class BaseBusinessQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseBusinessQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'sigfly', $modelName = 'Business', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new BusinessQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    BusinessQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof BusinessQuery) {
			return $criteria;
		}
		$query = new BusinessQuery();
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
	 * @return    Business|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = BusinessPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    BusinessQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(BusinessPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    BusinessQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(BusinessPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BusinessQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(BusinessPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the email column
	 * 
	 * @param     string $email The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BusinessQuery The current query, for fluid interface
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
		return $this->addUsingAlias(BusinessPeer::EMAIL, $email, $comparison);
	}

	/**
	 * Filter the query on the company_description column
	 * 
	 * @param     string $companyDescription The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BusinessQuery The current query, for fluid interface
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
		return $this->addUsingAlias(BusinessPeer::COMPANY_DESCRIPTION, $companyDescription, $comparison);
	}

	/**
	 * Filter the query on the company_url column
	 * 
	 * @param     string $companyUrl The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BusinessQuery The current query, for fluid interface
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
		return $this->addUsingAlias(BusinessPeer::COMPANY_URL, $companyUrl, $comparison);
	}

	/**
	 * Filter the query on the company_name column
	 * 
	 * @param     string $companyName The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BusinessQuery The current query, for fluid interface
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
		return $this->addUsingAlias(BusinessPeer::COMPANY_NAME, $companyName, $comparison);
	}

	/**
	 * Filter the query on the addressline1 column
	 * 
	 * @param     string $addressline1 The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BusinessQuery The current query, for fluid interface
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
		return $this->addUsingAlias(BusinessPeer::ADDRESSLINE1, $addressline1, $comparison);
	}

	/**
	 * Filter the query on the addressline2 column
	 * 
	 * @param     string $addressline2 The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BusinessQuery The current query, for fluid interface
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
		return $this->addUsingAlias(BusinessPeer::ADDRESSLINE2, $addressline2, $comparison);
	}

	/**
	 * Filter the query on the city column
	 * 
	 * @param     string $city The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BusinessQuery The current query, for fluid interface
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
		return $this->addUsingAlias(BusinessPeer::CITY, $city, $comparison);
	}

	/**
	 * Filter the query on the state column
	 * 
	 * @param     string $state The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BusinessQuery The current query, for fluid interface
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
		return $this->addUsingAlias(BusinessPeer::STATE, $state, $comparison);
	}

	/**
	 * Filter the query on the postcode column
	 * 
	 * @param     string $postcode The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BusinessQuery The current query, for fluid interface
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
		return $this->addUsingAlias(BusinessPeer::POSTCODE, $postcode, $comparison);
	}

	/**
	 * Filter the query on the country column
	 * 
	 * @param     string $country The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BusinessQuery The current query, for fluid interface
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
		return $this->addUsingAlias(BusinessPeer::COUNTRY, $country, $comparison);
	}

	/**
	 * Filter the query on the telephone column
	 * 
	 * @param     string $telephone The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BusinessQuery The current query, for fluid interface
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
		return $this->addUsingAlias(BusinessPeer::TELEPHONE, $telephone, $comparison);
	}

	/**
	 * Filter the query on the fax column
	 * 
	 * @param     string $fax The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BusinessQuery The current query, for fluid interface
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
		return $this->addUsingAlias(BusinessPeer::FAX, $fax, $comparison);
	}

	/**
	 * Filter the query on the is_active column
	 * 
	 * @param     int|array $isActive The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BusinessQuery The current query, for fluid interface
	 */
	public function filterByIsActive($isActive = null, $comparison = null)
	{
		if (is_array($isActive)) {
			$useMinMax = false;
			if (isset($isActive['min'])) {
				$this->addUsingAlias(BusinessPeer::IS_ACTIVE, $isActive['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isActive['max'])) {
				$this->addUsingAlias(BusinessPeer::IS_ACTIVE, $isActive['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BusinessPeer::IS_ACTIVE, $isActive, $comparison);
	}

	/**
	 * Filter the query on the is_premium column
	 * 
	 * @param     int|array $isPremium The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BusinessQuery The current query, for fluid interface
	 */
	public function filterByIsPremium($isPremium = null, $comparison = null)
	{
		if (is_array($isPremium)) {
			$useMinMax = false;
			if (isset($isPremium['min'])) {
				$this->addUsingAlias(BusinessPeer::IS_PREMIUM, $isPremium['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isPremium['max'])) {
				$this->addUsingAlias(BusinessPeer::IS_PREMIUM, $isPremium['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BusinessPeer::IS_PREMIUM, $isPremium, $comparison);
	}

	/**
	 * Filter the query on the date_created column
	 * 
	 * @param     string|array $dateCreated The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BusinessQuery The current query, for fluid interface
	 */
	public function filterByDateCreated($dateCreated = null, $comparison = null)
	{
		if (is_array($dateCreated)) {
			$useMinMax = false;
			if (isset($dateCreated['min'])) {
				$this->addUsingAlias(BusinessPeer::DATE_CREATED, $dateCreated['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateCreated['max'])) {
				$this->addUsingAlias(BusinessPeer::DATE_CREATED, $dateCreated['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BusinessPeer::DATE_CREATED, $dateCreated, $comparison);
	}

	/**
	 * Filter the query on the date_expires column
	 * 
	 * @param     string|array $dateExpires The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BusinessQuery The current query, for fluid interface
	 */
	public function filterByDateExpires($dateExpires = null, $comparison = null)
	{
		if (is_array($dateExpires)) {
			$useMinMax = false;
			if (isset($dateExpires['min'])) {
				$this->addUsingAlias(BusinessPeer::DATE_EXPIRES, $dateExpires['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateExpires['max'])) {
				$this->addUsingAlias(BusinessPeer::DATE_EXPIRES, $dateExpires['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BusinessPeer::DATE_EXPIRES, $dateExpires, $comparison);
	}

	/**
	 * Filter the query on the date_modified column
	 * 
	 * @param     string|array $dateModified The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BusinessQuery The current query, for fluid interface
	 */
	public function filterByDateModified($dateModified = null, $comparison = null)
	{
		if (is_array($dateModified)) {
			$useMinMax = false;
			if (isset($dateModified['min'])) {
				$this->addUsingAlias(BusinessPeer::DATE_MODIFIED, $dateModified['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateModified['max'])) {
				$this->addUsingAlias(BusinessPeer::DATE_MODIFIED, $dateModified['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BusinessPeer::DATE_MODIFIED, $dateModified, $comparison);
	}

	/**
	 * Filter the query on the remote_addr_created column
	 * 
	 * @param     string $remoteAddrCreated The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BusinessQuery The current query, for fluid interface
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
		return $this->addUsingAlias(BusinessPeer::REMOTE_ADDR_CREATED, $remoteAddrCreated, $comparison);
	}

	/**
	 * Filter the query on the remote_addr_modified column
	 * 
	 * @param     string $remoteAddrModified The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BusinessQuery The current query, for fluid interface
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
		return $this->addUsingAlias(BusinessPeer::REMOTE_ADDR_MODIFIED, $remoteAddrModified, $comparison);
	}

	/**
	 * Filter the query on the payment_threshold column
	 * 
	 * @param     double|array $paymentThreshold The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BusinessQuery The current query, for fluid interface
	 */
	public function filterByPaymentThreshold($paymentThreshold = null, $comparison = null)
	{
		if (is_array($paymentThreshold)) {
			$useMinMax = false;
			if (isset($paymentThreshold['min'])) {
				$this->addUsingAlias(BusinessPeer::PAYMENT_THRESHOLD, $paymentThreshold['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($paymentThreshold['max'])) {
				$this->addUsingAlias(BusinessPeer::PAYMENT_THRESHOLD, $paymentThreshold['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BusinessPeer::PAYMENT_THRESHOLD, $paymentThreshold, $comparison);
	}

	/**
	 * Filter the query on the tax_id_enc column
	 * 
	 * @param     mixed $taxIdEnc The value to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BusinessQuery The current query, for fluid interface
	 */
	public function filterByTaxIdEnc($taxIdEnc = null, $comparison = null)
	{
		return $this->addUsingAlias(BusinessPeer::TAX_ID_ENC, $taxIdEnc, $comparison);
	}

	/**
	 * Filter the query on the tax_id_last_four column
	 * 
	 * @param     string $taxIdLastFour The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BusinessQuery The current query, for fluid interface
	 */
	public function filterByTaxIdLastFour($taxIdLastFour = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($taxIdLastFour)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $taxIdLastFour)) {
				$taxIdLastFour = str_replace('*', '%', $taxIdLastFour);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(BusinessPeer::TAX_ID_LAST_FOUR, $taxIdLastFour, $comparison);
	}

	/**
	 * Filter the query by a related AffiliatePayment object
	 *
	 * @param     AffiliatePayment $affiliatePayment  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BusinessQuery The current query, for fluid interface
	 */
	public function filterByAffiliatePayment($affiliatePayment, $comparison = null)
	{
		return $this
			->addUsingAlias(BusinessPeer::ID, $affiliatePayment->getBusinessId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the AffiliatePayment relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    BusinessQuery The current query, for fluid interface
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
	 * @return    BusinessQuery The current query, for fluid interface
	 */
	public function filterByBusinessUser($businessUser, $comparison = null)
	{
		return $this
			->addUsingAlias(BusinessPeer::ID, $businessUser->getBusinessId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the BusinessUser relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    BusinessQuery The current query, for fluid interface
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
	 * Exclude object from result
	 *
	 * @param     Business $business Object to remove from the list of results
	 *
	 * @return    BusinessQuery The current query, for fluid interface
	 */
	public function prune($business = null)
	{
		if ($business) {
			$this->addUsingAlias(BusinessPeer::ID, $business->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseBusinessQuery
