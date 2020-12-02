<?php


/**
 * Base class that represents a query for the 'email_list' table.
 *
 * 
 *
 * @method     EmailListQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     EmailListQuery orderByIsActive($order = Criteria::ASC) Order by the is_active column
 * @method     EmailListQuery orderByDateCreated($order = Criteria::ASC) Order by the date_created column
 * @method     EmailListQuery orderByRemoteAddr($order = Criteria::ASC) Order by the remote_addr column
 * @method     EmailListQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     EmailListQuery orderByFname($order = Criteria::ASC) Order by the fname column
 * @method     EmailListQuery orderByLname($order = Criteria::ASC) Order by the lname column
 * @method     EmailListQuery orderByTelephone($order = Criteria::ASC) Order by the telephone column
 * @method     EmailListQuery orderByAddress1($order = Criteria::ASC) Order by the address1 column
 * @method     EmailListQuery orderByAddress2($order = Criteria::ASC) Order by the address2 column
 * @method     EmailListQuery orderByCity($order = Criteria::ASC) Order by the city column
 * @method     EmailListQuery orderByState($order = Criteria::ASC) Order by the state column
 * @method     EmailListQuery orderByZipcode($order = Criteria::ASC) Order by the ZIPCode column
 * @method     EmailListQuery orderByLat($order = Criteria::ASC) Order by the lat column
 * @method     EmailListQuery orderByLng($order = Criteria::ASC) Order by the lng column
 * @method     EmailListQuery orderBySource($order = Criteria::ASC) Order by the source column
 * @method     EmailListQuery orderByCountry($order = Criteria::ASC) Order by the country column
 * @method     EmailListQuery orderByGender($order = Criteria::ASC) Order by the gender column
 * @method     EmailListQuery orderByDoby($order = Criteria::ASC) Order by the doby column
 * @method     EmailListQuery orderByDobm($order = Criteria::ASC) Order by the dobm column
 * @method     EmailListQuery orderByDob($order = Criteria::ASC) Order by the dob column
 *
 * @method     EmailListQuery groupById() Group by the id column
 * @method     EmailListQuery groupByIsActive() Group by the is_active column
 * @method     EmailListQuery groupByDateCreated() Group by the date_created column
 * @method     EmailListQuery groupByRemoteAddr() Group by the remote_addr column
 * @method     EmailListQuery groupByEmail() Group by the email column
 * @method     EmailListQuery groupByFname() Group by the fname column
 * @method     EmailListQuery groupByLname() Group by the lname column
 * @method     EmailListQuery groupByTelephone() Group by the telephone column
 * @method     EmailListQuery groupByAddress1() Group by the address1 column
 * @method     EmailListQuery groupByAddress2() Group by the address2 column
 * @method     EmailListQuery groupByCity() Group by the city column
 * @method     EmailListQuery groupByState() Group by the state column
 * @method     EmailListQuery groupByZipcode() Group by the ZIPCode column
 * @method     EmailListQuery groupByLat() Group by the lat column
 * @method     EmailListQuery groupByLng() Group by the lng column
 * @method     EmailListQuery groupBySource() Group by the source column
 * @method     EmailListQuery groupByCountry() Group by the country column
 * @method     EmailListQuery groupByGender() Group by the gender column
 * @method     EmailListQuery groupByDoby() Group by the doby column
 * @method     EmailListQuery groupByDobm() Group by the dobm column
 * @method     EmailListQuery groupByDob() Group by the dob column
 *
 * @method     EmailListQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     EmailListQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     EmailListQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     EmailList findOne(PropelPDO $con = null) Return the first EmailList matching the query
 * @method     EmailList findOneOrCreate(PropelPDO $con = null) Return the first EmailList matching the query, or a new EmailList object populated from the query conditions when no match is found
 *
 * @method     EmailList findOneById(int $id) Return the first EmailList filtered by the id column
 * @method     EmailList findOneByIsActive(int $is_active) Return the first EmailList filtered by the is_active column
 * @method     EmailList findOneByDateCreated(string $date_created) Return the first EmailList filtered by the date_created column
 * @method     EmailList findOneByRemoteAddr(string $remote_addr) Return the first EmailList filtered by the remote_addr column
 * @method     EmailList findOneByEmail(string $email) Return the first EmailList filtered by the email column
 * @method     EmailList findOneByFname(string $fname) Return the first EmailList filtered by the fname column
 * @method     EmailList findOneByLname(string $lname) Return the first EmailList filtered by the lname column
 * @method     EmailList findOneByTelephone(string $telephone) Return the first EmailList filtered by the telephone column
 * @method     EmailList findOneByAddress1(string $address1) Return the first EmailList filtered by the address1 column
 * @method     EmailList findOneByAddress2(string $address2) Return the first EmailList filtered by the address2 column
 * @method     EmailList findOneByCity(string $city) Return the first EmailList filtered by the city column
 * @method     EmailList findOneByState(string $state) Return the first EmailList filtered by the state column
 * @method     EmailList findOneByZipcode(string $ZIPCode) Return the first EmailList filtered by the ZIPCode column
 * @method     EmailList findOneByLat(double $lat) Return the first EmailList filtered by the lat column
 * @method     EmailList findOneByLng(double $lng) Return the first EmailList filtered by the lng column
 * @method     EmailList findOneBySource(string $source) Return the first EmailList filtered by the source column
 * @method     EmailList findOneByCountry(string $country) Return the first EmailList filtered by the country column
 * @method     EmailList findOneByGender(string $gender) Return the first EmailList filtered by the gender column
 * @method     EmailList findOneByDoby(string $doby) Return the first EmailList filtered by the doby column
 * @method     EmailList findOneByDobm(string $dobm) Return the first EmailList filtered by the dobm column
 * @method     EmailList findOneByDob(string $dob) Return the first EmailList filtered by the dob column
 *
 * @method     array findById(int $id) Return EmailList objects filtered by the id column
 * @method     array findByIsActive(int $is_active) Return EmailList objects filtered by the is_active column
 * @method     array findByDateCreated(string $date_created) Return EmailList objects filtered by the date_created column
 * @method     array findByRemoteAddr(string $remote_addr) Return EmailList objects filtered by the remote_addr column
 * @method     array findByEmail(string $email) Return EmailList objects filtered by the email column
 * @method     array findByFname(string $fname) Return EmailList objects filtered by the fname column
 * @method     array findByLname(string $lname) Return EmailList objects filtered by the lname column
 * @method     array findByTelephone(string $telephone) Return EmailList objects filtered by the telephone column
 * @method     array findByAddress1(string $address1) Return EmailList objects filtered by the address1 column
 * @method     array findByAddress2(string $address2) Return EmailList objects filtered by the address2 column
 * @method     array findByCity(string $city) Return EmailList objects filtered by the city column
 * @method     array findByState(string $state) Return EmailList objects filtered by the state column
 * @method     array findByZipcode(string $ZIPCode) Return EmailList objects filtered by the ZIPCode column
 * @method     array findByLat(double $lat) Return EmailList objects filtered by the lat column
 * @method     array findByLng(double $lng) Return EmailList objects filtered by the lng column
 * @method     array findBySource(string $source) Return EmailList objects filtered by the source column
 * @method     array findByCountry(string $country) Return EmailList objects filtered by the country column
 * @method     array findByGender(string $gender) Return EmailList objects filtered by the gender column
 * @method     array findByDoby(string $doby) Return EmailList objects filtered by the doby column
 * @method     array findByDobm(string $dobm) Return EmailList objects filtered by the dobm column
 * @method     array findByDob(string $dob) Return EmailList objects filtered by the dob column
 *
 * @package    propel.generator.komideals.om
 */
abstract class BaseEmailListQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseEmailListQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'komideals', $modelName = 'EmailList', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new EmailListQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    EmailListQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof EmailListQuery) {
			return $criteria;
		}
		$query = new EmailListQuery();
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
	 * @return    EmailList|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = EmailListPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    EmailListQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(EmailListPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    EmailListQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(EmailListPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EmailListQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(EmailListPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the is_active column
	 * 
	 * @param     int|array $isActive The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EmailListQuery The current query, for fluid interface
	 */
	public function filterByIsActive($isActive = null, $comparison = null)
	{
		if (is_array($isActive)) {
			$useMinMax = false;
			if (isset($isActive['min'])) {
				$this->addUsingAlias(EmailListPeer::IS_ACTIVE, $isActive['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isActive['max'])) {
				$this->addUsingAlias(EmailListPeer::IS_ACTIVE, $isActive['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(EmailListPeer::IS_ACTIVE, $isActive, $comparison);
	}

	/**
	 * Filter the query on the date_created column
	 * 
	 * @param     string|array $dateCreated The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EmailListQuery The current query, for fluid interface
	 */
	public function filterByDateCreated($dateCreated = null, $comparison = null)
	{
		if (is_array($dateCreated)) {
			$useMinMax = false;
			if (isset($dateCreated['min'])) {
				$this->addUsingAlias(EmailListPeer::DATE_CREATED, $dateCreated['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateCreated['max'])) {
				$this->addUsingAlias(EmailListPeer::DATE_CREATED, $dateCreated['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(EmailListPeer::DATE_CREATED, $dateCreated, $comparison);
	}

	/**
	 * Filter the query on the remote_addr column
	 * 
	 * @param     string $remoteAddr The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EmailListQuery The current query, for fluid interface
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
		return $this->addUsingAlias(EmailListPeer::REMOTE_ADDR, $remoteAddr, $comparison);
	}

	/**
	 * Filter the query on the email column
	 * 
	 * @param     string $email The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EmailListQuery The current query, for fluid interface
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
		return $this->addUsingAlias(EmailListPeer::EMAIL, $email, $comparison);
	}

	/**
	 * Filter the query on the fname column
	 * 
	 * @param     string $fname The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EmailListQuery The current query, for fluid interface
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
		return $this->addUsingAlias(EmailListPeer::FNAME, $fname, $comparison);
	}

	/**
	 * Filter the query on the lname column
	 * 
	 * @param     string $lname The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EmailListQuery The current query, for fluid interface
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
		return $this->addUsingAlias(EmailListPeer::LNAME, $lname, $comparison);
	}

	/**
	 * Filter the query on the telephone column
	 * 
	 * @param     string $telephone The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EmailListQuery The current query, for fluid interface
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
		return $this->addUsingAlias(EmailListPeer::TELEPHONE, $telephone, $comparison);
	}

	/**
	 * Filter the query on the address1 column
	 * 
	 * @param     string $address1 The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EmailListQuery The current query, for fluid interface
	 */
	public function filterByAddress1($address1 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($address1)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $address1)) {
				$address1 = str_replace('*', '%', $address1);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(EmailListPeer::ADDRESS1, $address1, $comparison);
	}

	/**
	 * Filter the query on the address2 column
	 * 
	 * @param     string $address2 The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EmailListQuery The current query, for fluid interface
	 */
	public function filterByAddress2($address2 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($address2)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $address2)) {
				$address2 = str_replace('*', '%', $address2);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(EmailListPeer::ADDRESS2, $address2, $comparison);
	}

	/**
	 * Filter the query on the city column
	 * 
	 * @param     string $city The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EmailListQuery The current query, for fluid interface
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
		return $this->addUsingAlias(EmailListPeer::CITY, $city, $comparison);
	}

	/**
	 * Filter the query on the state column
	 * 
	 * @param     string $state The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EmailListQuery The current query, for fluid interface
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
		return $this->addUsingAlias(EmailListPeer::STATE, $state, $comparison);
	}

	/**
	 * Filter the query on the ZIPCode column
	 * 
	 * @param     string $zipcode The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EmailListQuery The current query, for fluid interface
	 */
	public function filterByZipcode($zipcode = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($zipcode)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $zipcode)) {
				$zipcode = str_replace('*', '%', $zipcode);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(EmailListPeer::ZIPCODE, $zipcode, $comparison);
	}

	/**
	 * Filter the query on the lat column
	 * 
	 * @param     double|array $lat The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EmailListQuery The current query, for fluid interface
	 */
	public function filterByLat($lat = null, $comparison = null)
	{
		if (is_array($lat)) {
			$useMinMax = false;
			if (isset($lat['min'])) {
				$this->addUsingAlias(EmailListPeer::LAT, $lat['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lat['max'])) {
				$this->addUsingAlias(EmailListPeer::LAT, $lat['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(EmailListPeer::LAT, $lat, $comparison);
	}

	/**
	 * Filter the query on the lng column
	 * 
	 * @param     double|array $lng The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EmailListQuery The current query, for fluid interface
	 */
	public function filterByLng($lng = null, $comparison = null)
	{
		if (is_array($lng)) {
			$useMinMax = false;
			if (isset($lng['min'])) {
				$this->addUsingAlias(EmailListPeer::LNG, $lng['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lng['max'])) {
				$this->addUsingAlias(EmailListPeer::LNG, $lng['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(EmailListPeer::LNG, $lng, $comparison);
	}

	/**
	 * Filter the query on the source column
	 * 
	 * @param     string $source The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EmailListQuery The current query, for fluid interface
	 */
	public function filterBySource($source = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($source)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $source)) {
				$source = str_replace('*', '%', $source);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(EmailListPeer::SOURCE, $source, $comparison);
	}

	/**
	 * Filter the query on the country column
	 * 
	 * @param     string $country The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EmailListQuery The current query, for fluid interface
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
		return $this->addUsingAlias(EmailListPeer::COUNTRY, $country, $comparison);
	}

	/**
	 * Filter the query on the gender column
	 * 
	 * @param     string $gender The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EmailListQuery The current query, for fluid interface
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
		return $this->addUsingAlias(EmailListPeer::GENDER, $gender, $comparison);
	}

	/**
	 * Filter the query on the doby column
	 * 
	 * @param     string $doby The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EmailListQuery The current query, for fluid interface
	 */
	public function filterByDoby($doby = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($doby)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $doby)) {
				$doby = str_replace('*', '%', $doby);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(EmailListPeer::DOBY, $doby, $comparison);
	}

	/**
	 * Filter the query on the dobm column
	 * 
	 * @param     string $dobm The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EmailListQuery The current query, for fluid interface
	 */
	public function filterByDobm($dobm = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($dobm)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $dobm)) {
				$dobm = str_replace('*', '%', $dobm);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(EmailListPeer::DOBM, $dobm, $comparison);
	}

	/**
	 * Filter the query on the dob column
	 * 
	 * @param     string $dob The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EmailListQuery The current query, for fluid interface
	 */
	public function filterByDob($dob = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($dob)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $dob)) {
				$dob = str_replace('*', '%', $dob);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(EmailListPeer::DOB, $dob, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     EmailList $emailList Object to remove from the list of results
	 *
	 * @return    EmailListQuery The current query, for fluid interface
	 */
	public function prune($emailList = null)
	{
		if ($emailList) {
			$this->addUsingAlias(EmailListPeer::ID, $emailList->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseEmailListQuery
