<?php


/**
 * Base class that represents a query for the 'payment_method' table.
 *
 * 
 *
 * @method     PaymentMethodQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     PaymentMethodQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     PaymentMethodQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method     PaymentMethodQuery orderByNumberEnc($order = Criteria::ASC) Order by the number_enc column
 * @method     PaymentMethodQuery orderByNumberLastFour($order = Criteria::ASC) Order by the number_last_four column
 * @method     PaymentMethodQuery orderByCcv($order = Criteria::ASC) Order by the ccv column
 * @method     PaymentMethodQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     PaymentMethodQuery orderByAddressline1($order = Criteria::ASC) Order by the addressline1 column
 * @method     PaymentMethodQuery orderByAddressline2($order = Criteria::ASC) Order by the addressline2 column
 * @method     PaymentMethodQuery orderByCity($order = Criteria::ASC) Order by the city column
 * @method     PaymentMethodQuery orderByState($order = Criteria::ASC) Order by the state column
 * @method     PaymentMethodQuery orderByPostcode($order = Criteria::ASC) Order by the postcode column
 * @method     PaymentMethodQuery orderByExpirationMonth($order = Criteria::ASC) Order by the expiration_month column
 * @method     PaymentMethodQuery orderByExpirationYear($order = Criteria::ASC) Order by the expiration_year column
 * @method     PaymentMethodQuery orderByTelephoneDay($order = Criteria::ASC) Order by the telephone_day column
 * @method     PaymentMethodQuery orderByTelephoneEve($order = Criteria::ASC) Order by the telephone_eve column
 * @method     PaymentMethodQuery orderByIsActive($order = Criteria::ASC) Order by the is_active column
 * @method     PaymentMethodQuery orderByDateCreated($order = Criteria::ASC) Order by the date_created column
 * @method     PaymentMethodQuery orderByRemoteAddr($order = Criteria::ASC) Order by the remote_addr column
 *
 * @method     PaymentMethodQuery groupById() Group by the id column
 * @method     PaymentMethodQuery groupByUserId() Group by the user_id column
 * @method     PaymentMethodQuery groupByType() Group by the type column
 * @method     PaymentMethodQuery groupByNumberEnc() Group by the number_enc column
 * @method     PaymentMethodQuery groupByNumberLastFour() Group by the number_last_four column
 * @method     PaymentMethodQuery groupByCcv() Group by the ccv column
 * @method     PaymentMethodQuery groupByName() Group by the name column
 * @method     PaymentMethodQuery groupByAddressline1() Group by the addressline1 column
 * @method     PaymentMethodQuery groupByAddressline2() Group by the addressline2 column
 * @method     PaymentMethodQuery groupByCity() Group by the city column
 * @method     PaymentMethodQuery groupByState() Group by the state column
 * @method     PaymentMethodQuery groupByPostcode() Group by the postcode column
 * @method     PaymentMethodQuery groupByExpirationMonth() Group by the expiration_month column
 * @method     PaymentMethodQuery groupByExpirationYear() Group by the expiration_year column
 * @method     PaymentMethodQuery groupByTelephoneDay() Group by the telephone_day column
 * @method     PaymentMethodQuery groupByTelephoneEve() Group by the telephone_eve column
 * @method     PaymentMethodQuery groupByIsActive() Group by the is_active column
 * @method     PaymentMethodQuery groupByDateCreated() Group by the date_created column
 * @method     PaymentMethodQuery groupByRemoteAddr() Group by the remote_addr column
 *
 * @method     PaymentMethodQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PaymentMethodQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PaymentMethodQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     PaymentMethodQuery leftJoinUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the User relation
 * @method     PaymentMethodQuery rightJoinUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the User relation
 * @method     PaymentMethodQuery innerJoinUser($relationAlias = null) Adds a INNER JOIN clause to the query using the User relation
 *
 * @method     PaymentMethodQuery leftJoinPayment($relationAlias = null) Adds a LEFT JOIN clause to the query using the Payment relation
 * @method     PaymentMethodQuery rightJoinPayment($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Payment relation
 * @method     PaymentMethodQuery innerJoinPayment($relationAlias = null) Adds a INNER JOIN clause to the query using the Payment relation
 *
 * @method     PaymentMethod findOne(PropelPDO $con = null) Return the first PaymentMethod matching the query
 * @method     PaymentMethod findOneOrCreate(PropelPDO $con = null) Return the first PaymentMethod matching the query, or a new PaymentMethod object populated from the query conditions when no match is found
 *
 * @method     PaymentMethod findOneById(int $id) Return the first PaymentMethod filtered by the id column
 * @method     PaymentMethod findOneByUserId(int $user_id) Return the first PaymentMethod filtered by the user_id column
 * @method     PaymentMethod findOneByType(string $type) Return the first PaymentMethod filtered by the type column
 * @method     PaymentMethod findOneByNumberEnc(resource $number_enc) Return the first PaymentMethod filtered by the number_enc column
 * @method     PaymentMethod findOneByNumberLastFour(string $number_last_four) Return the first PaymentMethod filtered by the number_last_four column
 * @method     PaymentMethod findOneByCcv(string $ccv) Return the first PaymentMethod filtered by the ccv column
 * @method     PaymentMethod findOneByName(string $name) Return the first PaymentMethod filtered by the name column
 * @method     PaymentMethod findOneByAddressline1(string $addressline1) Return the first PaymentMethod filtered by the addressline1 column
 * @method     PaymentMethod findOneByAddressline2(string $addressline2) Return the first PaymentMethod filtered by the addressline2 column
 * @method     PaymentMethod findOneByCity(string $city) Return the first PaymentMethod filtered by the city column
 * @method     PaymentMethod findOneByState(string $state) Return the first PaymentMethod filtered by the state column
 * @method     PaymentMethod findOneByPostcode(string $postcode) Return the first PaymentMethod filtered by the postcode column
 * @method     PaymentMethod findOneByExpirationMonth(int $expiration_month) Return the first PaymentMethod filtered by the expiration_month column
 * @method     PaymentMethod findOneByExpirationYear(int $expiration_year) Return the first PaymentMethod filtered by the expiration_year column
 * @method     PaymentMethod findOneByTelephoneDay(string $telephone_day) Return the first PaymentMethod filtered by the telephone_day column
 * @method     PaymentMethod findOneByTelephoneEve(string $telephone_eve) Return the first PaymentMethod filtered by the telephone_eve column
 * @method     PaymentMethod findOneByIsActive(int $is_active) Return the first PaymentMethod filtered by the is_active column
 * @method     PaymentMethod findOneByDateCreated(string $date_created) Return the first PaymentMethod filtered by the date_created column
 * @method     PaymentMethod findOneByRemoteAddr(string $remote_addr) Return the first PaymentMethod filtered by the remote_addr column
 *
 * @method     array findById(int $id) Return PaymentMethod objects filtered by the id column
 * @method     array findByUserId(int $user_id) Return PaymentMethod objects filtered by the user_id column
 * @method     array findByType(string $type) Return PaymentMethod objects filtered by the type column
 * @method     array findByNumberEnc(resource $number_enc) Return PaymentMethod objects filtered by the number_enc column
 * @method     array findByNumberLastFour(string $number_last_four) Return PaymentMethod objects filtered by the number_last_four column
 * @method     array findByCcv(string $ccv) Return PaymentMethod objects filtered by the ccv column
 * @method     array findByName(string $name) Return PaymentMethod objects filtered by the name column
 * @method     array findByAddressline1(string $addressline1) Return PaymentMethod objects filtered by the addressline1 column
 * @method     array findByAddressline2(string $addressline2) Return PaymentMethod objects filtered by the addressline2 column
 * @method     array findByCity(string $city) Return PaymentMethod objects filtered by the city column
 * @method     array findByState(string $state) Return PaymentMethod objects filtered by the state column
 * @method     array findByPostcode(string $postcode) Return PaymentMethod objects filtered by the postcode column
 * @method     array findByExpirationMonth(int $expiration_month) Return PaymentMethod objects filtered by the expiration_month column
 * @method     array findByExpirationYear(int $expiration_year) Return PaymentMethod objects filtered by the expiration_year column
 * @method     array findByTelephoneDay(string $telephone_day) Return PaymentMethod objects filtered by the telephone_day column
 * @method     array findByTelephoneEve(string $telephone_eve) Return PaymentMethod objects filtered by the telephone_eve column
 * @method     array findByIsActive(int $is_active) Return PaymentMethod objects filtered by the is_active column
 * @method     array findByDateCreated(string $date_created) Return PaymentMethod objects filtered by the date_created column
 * @method     array findByRemoteAddr(string $remote_addr) Return PaymentMethod objects filtered by the remote_addr column
 *
 * @package    propel.generator.sigfly.om
 */
abstract class BasePaymentMethodQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BasePaymentMethodQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'sigfly', $modelName = 'PaymentMethod', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new PaymentMethodQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    PaymentMethodQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof PaymentMethodQuery) {
			return $criteria;
		}
		$query = new PaymentMethodQuery();
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
	 * @return    PaymentMethod|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = PaymentMethodPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    PaymentMethodQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(PaymentMethodPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    PaymentMethodQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(PaymentMethodPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentMethodQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(PaymentMethodPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentMethodQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(PaymentMethodPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(PaymentMethodPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PaymentMethodPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the type column
	 * 
	 * @param     string $type The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentMethodQuery The current query, for fluid interface
	 */
	public function filterByType($type = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($type)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $type)) {
				$type = str_replace('*', '%', $type);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PaymentMethodPeer::TYPE, $type, $comparison);
	}

	/**
	 * Filter the query on the number_enc column
	 * 
	 * @param     mixed $numberEnc The value to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentMethodQuery The current query, for fluid interface
	 */
	public function filterByNumberEnc($numberEnc = null, $comparison = null)
	{
		return $this->addUsingAlias(PaymentMethodPeer::NUMBER_ENC, $numberEnc, $comparison);
	}

	/**
	 * Filter the query on the number_last_four column
	 * 
	 * @param     string $numberLastFour The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentMethodQuery The current query, for fluid interface
	 */
	public function filterByNumberLastFour($numberLastFour = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($numberLastFour)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $numberLastFour)) {
				$numberLastFour = str_replace('*', '%', $numberLastFour);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PaymentMethodPeer::NUMBER_LAST_FOUR, $numberLastFour, $comparison);
	}

	/**
	 * Filter the query on the ccv column
	 * 
	 * @param     string $ccv The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentMethodQuery The current query, for fluid interface
	 */
	public function filterByCcv($ccv = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($ccv)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $ccv)) {
				$ccv = str_replace('*', '%', $ccv);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PaymentMethodPeer::CCV, $ccv, $comparison);
	}

	/**
	 * Filter the query on the name column
	 * 
	 * @param     string $name The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentMethodQuery The current query, for fluid interface
	 */
	public function filterByName($name = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($name)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $name)) {
				$name = str_replace('*', '%', $name);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PaymentMethodPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the addressline1 column
	 * 
	 * @param     string $addressline1 The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentMethodQuery The current query, for fluid interface
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
		return $this->addUsingAlias(PaymentMethodPeer::ADDRESSLINE1, $addressline1, $comparison);
	}

	/**
	 * Filter the query on the addressline2 column
	 * 
	 * @param     string $addressline2 The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentMethodQuery The current query, for fluid interface
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
		return $this->addUsingAlias(PaymentMethodPeer::ADDRESSLINE2, $addressline2, $comparison);
	}

	/**
	 * Filter the query on the city column
	 * 
	 * @param     string $city The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentMethodQuery The current query, for fluid interface
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
		return $this->addUsingAlias(PaymentMethodPeer::CITY, $city, $comparison);
	}

	/**
	 * Filter the query on the state column
	 * 
	 * @param     string $state The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentMethodQuery The current query, for fluid interface
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
		return $this->addUsingAlias(PaymentMethodPeer::STATE, $state, $comparison);
	}

	/**
	 * Filter the query on the postcode column
	 * 
	 * @param     string $postcode The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentMethodQuery The current query, for fluid interface
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
		return $this->addUsingAlias(PaymentMethodPeer::POSTCODE, $postcode, $comparison);
	}

	/**
	 * Filter the query on the expiration_month column
	 * 
	 * @param     int|array $expirationMonth The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentMethodQuery The current query, for fluid interface
	 */
	public function filterByExpirationMonth($expirationMonth = null, $comparison = null)
	{
		if (is_array($expirationMonth)) {
			$useMinMax = false;
			if (isset($expirationMonth['min'])) {
				$this->addUsingAlias(PaymentMethodPeer::EXPIRATION_MONTH, $expirationMonth['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($expirationMonth['max'])) {
				$this->addUsingAlias(PaymentMethodPeer::EXPIRATION_MONTH, $expirationMonth['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PaymentMethodPeer::EXPIRATION_MONTH, $expirationMonth, $comparison);
	}

	/**
	 * Filter the query on the expiration_year column
	 * 
	 * @param     int|array $expirationYear The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentMethodQuery The current query, for fluid interface
	 */
	public function filterByExpirationYear($expirationYear = null, $comparison = null)
	{
		if (is_array($expirationYear)) {
			$useMinMax = false;
			if (isset($expirationYear['min'])) {
				$this->addUsingAlias(PaymentMethodPeer::EXPIRATION_YEAR, $expirationYear['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($expirationYear['max'])) {
				$this->addUsingAlias(PaymentMethodPeer::EXPIRATION_YEAR, $expirationYear['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PaymentMethodPeer::EXPIRATION_YEAR, $expirationYear, $comparison);
	}

	/**
	 * Filter the query on the telephone_day column
	 * 
	 * @param     string $telephoneDay The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentMethodQuery The current query, for fluid interface
	 */
	public function filterByTelephoneDay($telephoneDay = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($telephoneDay)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $telephoneDay)) {
				$telephoneDay = str_replace('*', '%', $telephoneDay);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PaymentMethodPeer::TELEPHONE_DAY, $telephoneDay, $comparison);
	}

	/**
	 * Filter the query on the telephone_eve column
	 * 
	 * @param     string $telephoneEve The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentMethodQuery The current query, for fluid interface
	 */
	public function filterByTelephoneEve($telephoneEve = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($telephoneEve)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $telephoneEve)) {
				$telephoneEve = str_replace('*', '%', $telephoneEve);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PaymentMethodPeer::TELEPHONE_EVE, $telephoneEve, $comparison);
	}

	/**
	 * Filter the query on the is_active column
	 * 
	 * @param     int|array $isActive The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentMethodQuery The current query, for fluid interface
	 */
	public function filterByIsActive($isActive = null, $comparison = null)
	{
		if (is_array($isActive)) {
			$useMinMax = false;
			if (isset($isActive['min'])) {
				$this->addUsingAlias(PaymentMethodPeer::IS_ACTIVE, $isActive['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isActive['max'])) {
				$this->addUsingAlias(PaymentMethodPeer::IS_ACTIVE, $isActive['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PaymentMethodPeer::IS_ACTIVE, $isActive, $comparison);
	}

	/**
	 * Filter the query on the date_created column
	 * 
	 * @param     string|array $dateCreated The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentMethodQuery The current query, for fluid interface
	 */
	public function filterByDateCreated($dateCreated = null, $comparison = null)
	{
		if (is_array($dateCreated)) {
			$useMinMax = false;
			if (isset($dateCreated['min'])) {
				$this->addUsingAlias(PaymentMethodPeer::DATE_CREATED, $dateCreated['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateCreated['max'])) {
				$this->addUsingAlias(PaymentMethodPeer::DATE_CREATED, $dateCreated['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PaymentMethodPeer::DATE_CREATED, $dateCreated, $comparison);
	}

	/**
	 * Filter the query on the remote_addr column
	 * 
	 * @param     string $remoteAddr The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentMethodQuery The current query, for fluid interface
	 */
	public function filterByRemoteAddr($remoteAddr = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($remoteAddr)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $remoteAddr)) {
				$remoteAddr = str_replace('*', '%', $remoteAddr);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PaymentMethodPeer::REMOTE_ADDR, $remoteAddr, $comparison);
	}

	/**
	 * Filter the query by a related User object
	 *
	 * @param     User $user  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentMethodQuery The current query, for fluid interface
	 */
	public function filterByUser($user, $comparison = null)
	{
		return $this
			->addUsingAlias(PaymentMethodPeer::USER_ID, $user->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the User relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PaymentMethodQuery The current query, for fluid interface
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
	 * Filter the query by a related Payment object
	 *
	 * @param     Payment $payment  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentMethodQuery The current query, for fluid interface
	 */
	public function filterByPayment($payment, $comparison = null)
	{
		return $this
			->addUsingAlias(PaymentMethodPeer::ID, $payment->getPaymentMethodId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Payment relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PaymentMethodQuery The current query, for fluid interface
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
	 * Exclude object from result
	 *
	 * @param     PaymentMethod $paymentMethod Object to remove from the list of results
	 *
	 * @return    PaymentMethodQuery The current query, for fluid interface
	 */
	public function prune($paymentMethod = null)
	{
		if ($paymentMethod) {
			$this->addUsingAlias(PaymentMethodPeer::ID, $paymentMethod->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BasePaymentMethodQuery
