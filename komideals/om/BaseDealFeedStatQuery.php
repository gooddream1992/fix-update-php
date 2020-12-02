<?php


/**
 * Base class that represents a query for the 'deal_feed_stat' table.
 *
 * 
 *
 * @method     DealFeedStatQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     DealFeedStatQuery orderByDealFeedId($order = Criteria::ASC) Order by the deal_feed_id column
 * @method     DealFeedStatQuery orderByBusinessId($order = Criteria::ASC) Order by the business_id column
 * @method     DealFeedStatQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method     DealFeedStatQuery orderByH0000($order = Criteria::ASC) Order by the h0000 column
 * @method     DealFeedStatQuery orderByH0100($order = Criteria::ASC) Order by the h0100 column
 * @method     DealFeedStatQuery orderByH0200($order = Criteria::ASC) Order by the h0200 column
 * @method     DealFeedStatQuery orderByH0300($order = Criteria::ASC) Order by the h0300 column
 * @method     DealFeedStatQuery orderByH0400($order = Criteria::ASC) Order by the h0400 column
 * @method     DealFeedStatQuery orderByH0500($order = Criteria::ASC) Order by the h0500 column
 * @method     DealFeedStatQuery orderByH0600($order = Criteria::ASC) Order by the h0600 column
 * @method     DealFeedStatQuery orderByH0700($order = Criteria::ASC) Order by the h0700 column
 * @method     DealFeedStatQuery orderByH0800($order = Criteria::ASC) Order by the h0800 column
 * @method     DealFeedStatQuery orderByH0900($order = Criteria::ASC) Order by the h0900 column
 * @method     DealFeedStatQuery orderByH1000($order = Criteria::ASC) Order by the h1000 column
 * @method     DealFeedStatQuery orderByH1100($order = Criteria::ASC) Order by the h1100 column
 * @method     DealFeedStatQuery orderByH1200($order = Criteria::ASC) Order by the h1200 column
 * @method     DealFeedStatQuery orderByH1300($order = Criteria::ASC) Order by the h1300 column
 * @method     DealFeedStatQuery orderByH1400($order = Criteria::ASC) Order by the h1400 column
 * @method     DealFeedStatQuery orderByH1500($order = Criteria::ASC) Order by the h1500 column
 * @method     DealFeedStatQuery orderByH1600($order = Criteria::ASC) Order by the h1600 column
 * @method     DealFeedStatQuery orderByH1700($order = Criteria::ASC) Order by the h1700 column
 * @method     DealFeedStatQuery orderByH1800($order = Criteria::ASC) Order by the h1800 column
 * @method     DealFeedStatQuery orderByH1900($order = Criteria::ASC) Order by the h1900 column
 * @method     DealFeedStatQuery orderByH2000($order = Criteria::ASC) Order by the h2000 column
 * @method     DealFeedStatQuery orderByH2100($order = Criteria::ASC) Order by the h2100 column
 * @method     DealFeedStatQuery orderByH2200($order = Criteria::ASC) Order by the h2200 column
 * @method     DealFeedStatQuery orderByH2300($order = Criteria::ASC) Order by the h2300 column
 *
 * @method     DealFeedStatQuery groupById() Group by the id column
 * @method     DealFeedStatQuery groupByDealFeedId() Group by the deal_feed_id column
 * @method     DealFeedStatQuery groupByBusinessId() Group by the business_id column
 * @method     DealFeedStatQuery groupByDate() Group by the date column
 * @method     DealFeedStatQuery groupByH0000() Group by the h0000 column
 * @method     DealFeedStatQuery groupByH0100() Group by the h0100 column
 * @method     DealFeedStatQuery groupByH0200() Group by the h0200 column
 * @method     DealFeedStatQuery groupByH0300() Group by the h0300 column
 * @method     DealFeedStatQuery groupByH0400() Group by the h0400 column
 * @method     DealFeedStatQuery groupByH0500() Group by the h0500 column
 * @method     DealFeedStatQuery groupByH0600() Group by the h0600 column
 * @method     DealFeedStatQuery groupByH0700() Group by the h0700 column
 * @method     DealFeedStatQuery groupByH0800() Group by the h0800 column
 * @method     DealFeedStatQuery groupByH0900() Group by the h0900 column
 * @method     DealFeedStatQuery groupByH1000() Group by the h1000 column
 * @method     DealFeedStatQuery groupByH1100() Group by the h1100 column
 * @method     DealFeedStatQuery groupByH1200() Group by the h1200 column
 * @method     DealFeedStatQuery groupByH1300() Group by the h1300 column
 * @method     DealFeedStatQuery groupByH1400() Group by the h1400 column
 * @method     DealFeedStatQuery groupByH1500() Group by the h1500 column
 * @method     DealFeedStatQuery groupByH1600() Group by the h1600 column
 * @method     DealFeedStatQuery groupByH1700() Group by the h1700 column
 * @method     DealFeedStatQuery groupByH1800() Group by the h1800 column
 * @method     DealFeedStatQuery groupByH1900() Group by the h1900 column
 * @method     DealFeedStatQuery groupByH2000() Group by the h2000 column
 * @method     DealFeedStatQuery groupByH2100() Group by the h2100 column
 * @method     DealFeedStatQuery groupByH2200() Group by the h2200 column
 * @method     DealFeedStatQuery groupByH2300() Group by the h2300 column
 *
 * @method     DealFeedStatQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     DealFeedStatQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     DealFeedStatQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     DealFeedStatQuery leftJoinDealFeed($relationAlias = null) Adds a LEFT JOIN clause to the query using the DealFeed relation
 * @method     DealFeedStatQuery rightJoinDealFeed($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DealFeed relation
 * @method     DealFeedStatQuery innerJoinDealFeed($relationAlias = null) Adds a INNER JOIN clause to the query using the DealFeed relation
 *
 * @method     DealFeedStatQuery leftJoinBusiness($relationAlias = null) Adds a LEFT JOIN clause to the query using the Business relation
 * @method     DealFeedStatQuery rightJoinBusiness($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Business relation
 * @method     DealFeedStatQuery innerJoinBusiness($relationAlias = null) Adds a INNER JOIN clause to the query using the Business relation
 *
 * @method     DealFeedStat findOne(PropelPDO $con = null) Return the first DealFeedStat matching the query
 * @method     DealFeedStat findOneOrCreate(PropelPDO $con = null) Return the first DealFeedStat matching the query, or a new DealFeedStat object populated from the query conditions when no match is found
 *
 * @method     DealFeedStat findOneById(int $id) Return the first DealFeedStat filtered by the id column
 * @method     DealFeedStat findOneByDealFeedId(int $deal_feed_id) Return the first DealFeedStat filtered by the deal_feed_id column
 * @method     DealFeedStat findOneByBusinessId(int $business_id) Return the first DealFeedStat filtered by the business_id column
 * @method     DealFeedStat findOneByDate(string $date) Return the first DealFeedStat filtered by the date column
 * @method     DealFeedStat findOneByH0000(int $h0000) Return the first DealFeedStat filtered by the h0000 column
 * @method     DealFeedStat findOneByH0100(int $h0100) Return the first DealFeedStat filtered by the h0100 column
 * @method     DealFeedStat findOneByH0200(int $h0200) Return the first DealFeedStat filtered by the h0200 column
 * @method     DealFeedStat findOneByH0300(int $h0300) Return the first DealFeedStat filtered by the h0300 column
 * @method     DealFeedStat findOneByH0400(int $h0400) Return the first DealFeedStat filtered by the h0400 column
 * @method     DealFeedStat findOneByH0500(int $h0500) Return the first DealFeedStat filtered by the h0500 column
 * @method     DealFeedStat findOneByH0600(int $h0600) Return the first DealFeedStat filtered by the h0600 column
 * @method     DealFeedStat findOneByH0700(int $h0700) Return the first DealFeedStat filtered by the h0700 column
 * @method     DealFeedStat findOneByH0800(int $h0800) Return the first DealFeedStat filtered by the h0800 column
 * @method     DealFeedStat findOneByH0900(int $h0900) Return the first DealFeedStat filtered by the h0900 column
 * @method     DealFeedStat findOneByH1000(int $h1000) Return the first DealFeedStat filtered by the h1000 column
 * @method     DealFeedStat findOneByH1100(int $h1100) Return the first DealFeedStat filtered by the h1100 column
 * @method     DealFeedStat findOneByH1200(int $h1200) Return the first DealFeedStat filtered by the h1200 column
 * @method     DealFeedStat findOneByH1300(int $h1300) Return the first DealFeedStat filtered by the h1300 column
 * @method     DealFeedStat findOneByH1400(int $h1400) Return the first DealFeedStat filtered by the h1400 column
 * @method     DealFeedStat findOneByH1500(int $h1500) Return the first DealFeedStat filtered by the h1500 column
 * @method     DealFeedStat findOneByH1600(int $h1600) Return the first DealFeedStat filtered by the h1600 column
 * @method     DealFeedStat findOneByH1700(int $h1700) Return the first DealFeedStat filtered by the h1700 column
 * @method     DealFeedStat findOneByH1800(int $h1800) Return the first DealFeedStat filtered by the h1800 column
 * @method     DealFeedStat findOneByH1900(int $h1900) Return the first DealFeedStat filtered by the h1900 column
 * @method     DealFeedStat findOneByH2000(int $h2000) Return the first DealFeedStat filtered by the h2000 column
 * @method     DealFeedStat findOneByH2100(int $h2100) Return the first DealFeedStat filtered by the h2100 column
 * @method     DealFeedStat findOneByH2200(int $h2200) Return the first DealFeedStat filtered by the h2200 column
 * @method     DealFeedStat findOneByH2300(int $h2300) Return the first DealFeedStat filtered by the h2300 column
 *
 * @method     array findById(int $id) Return DealFeedStat objects filtered by the id column
 * @method     array findByDealFeedId(int $deal_feed_id) Return DealFeedStat objects filtered by the deal_feed_id column
 * @method     array findByBusinessId(int $business_id) Return DealFeedStat objects filtered by the business_id column
 * @method     array findByDate(string $date) Return DealFeedStat objects filtered by the date column
 * @method     array findByH0000(int $h0000) Return DealFeedStat objects filtered by the h0000 column
 * @method     array findByH0100(int $h0100) Return DealFeedStat objects filtered by the h0100 column
 * @method     array findByH0200(int $h0200) Return DealFeedStat objects filtered by the h0200 column
 * @method     array findByH0300(int $h0300) Return DealFeedStat objects filtered by the h0300 column
 * @method     array findByH0400(int $h0400) Return DealFeedStat objects filtered by the h0400 column
 * @method     array findByH0500(int $h0500) Return DealFeedStat objects filtered by the h0500 column
 * @method     array findByH0600(int $h0600) Return DealFeedStat objects filtered by the h0600 column
 * @method     array findByH0700(int $h0700) Return DealFeedStat objects filtered by the h0700 column
 * @method     array findByH0800(int $h0800) Return DealFeedStat objects filtered by the h0800 column
 * @method     array findByH0900(int $h0900) Return DealFeedStat objects filtered by the h0900 column
 * @method     array findByH1000(int $h1000) Return DealFeedStat objects filtered by the h1000 column
 * @method     array findByH1100(int $h1100) Return DealFeedStat objects filtered by the h1100 column
 * @method     array findByH1200(int $h1200) Return DealFeedStat objects filtered by the h1200 column
 * @method     array findByH1300(int $h1300) Return DealFeedStat objects filtered by the h1300 column
 * @method     array findByH1400(int $h1400) Return DealFeedStat objects filtered by the h1400 column
 * @method     array findByH1500(int $h1500) Return DealFeedStat objects filtered by the h1500 column
 * @method     array findByH1600(int $h1600) Return DealFeedStat objects filtered by the h1600 column
 * @method     array findByH1700(int $h1700) Return DealFeedStat objects filtered by the h1700 column
 * @method     array findByH1800(int $h1800) Return DealFeedStat objects filtered by the h1800 column
 * @method     array findByH1900(int $h1900) Return DealFeedStat objects filtered by the h1900 column
 * @method     array findByH2000(int $h2000) Return DealFeedStat objects filtered by the h2000 column
 * @method     array findByH2100(int $h2100) Return DealFeedStat objects filtered by the h2100 column
 * @method     array findByH2200(int $h2200) Return DealFeedStat objects filtered by the h2200 column
 * @method     array findByH2300(int $h2300) Return DealFeedStat objects filtered by the h2300 column
 *
 * @package    propel.generator.komideals.om
 */
abstract class BaseDealFeedStatQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseDealFeedStatQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'komideals', $modelName = 'DealFeedStat', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new DealFeedStatQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    DealFeedStatQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof DealFeedStatQuery) {
			return $criteria;
		}
		$query = new DealFeedStatQuery();
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
	 * @return    DealFeedStat|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = DealFeedStatPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    DealFeedStatQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(DealFeedStatPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    DealFeedStatQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(DealFeedStatPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedStatQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(DealFeedStatPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the deal_feed_id column
	 * 
	 * @param     int|array $dealFeedId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedStatQuery The current query, for fluid interface
	 */
	public function filterByDealFeedId($dealFeedId = null, $comparison = null)
	{
		if (is_array($dealFeedId)) {
			$useMinMax = false;
			if (isset($dealFeedId['min'])) {
				$this->addUsingAlias(DealFeedStatPeer::DEAL_FEED_ID, $dealFeedId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dealFeedId['max'])) {
				$this->addUsingAlias(DealFeedStatPeer::DEAL_FEED_ID, $dealFeedId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedStatPeer::DEAL_FEED_ID, $dealFeedId, $comparison);
	}

	/**
	 * Filter the query on the business_id column
	 * 
	 * @param     int|array $businessId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedStatQuery The current query, for fluid interface
	 */
	public function filterByBusinessId($businessId = null, $comparison = null)
	{
		if (is_array($businessId)) {
			$useMinMax = false;
			if (isset($businessId['min'])) {
				$this->addUsingAlias(DealFeedStatPeer::BUSINESS_ID, $businessId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($businessId['max'])) {
				$this->addUsingAlias(DealFeedStatPeer::BUSINESS_ID, $businessId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedStatPeer::BUSINESS_ID, $businessId, $comparison);
	}

	/**
	 * Filter the query on the date column
	 * 
	 * @param     string|array $date The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedStatQuery The current query, for fluid interface
	 */
	public function filterByDate($date = null, $comparison = null)
	{
		if (is_array($date)) {
			$useMinMax = false;
			if (isset($date['min'])) {
				$this->addUsingAlias(DealFeedStatPeer::DATE, $date['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($date['max'])) {
				$this->addUsingAlias(DealFeedStatPeer::DATE, $date['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedStatPeer::DATE, $date, $comparison);
	}

	/**
	 * Filter the query on the h0000 column
	 * 
	 * @param     int|array $h0000 The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedStatQuery The current query, for fluid interface
	 */
	public function filterByH0000($h0000 = null, $comparison = null)
	{
		if (is_array($h0000)) {
			$useMinMax = false;
			if (isset($h0000['min'])) {
				$this->addUsingAlias(DealFeedStatPeer::H0000, $h0000['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($h0000['max'])) {
				$this->addUsingAlias(DealFeedStatPeer::H0000, $h0000['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedStatPeer::H0000, $h0000, $comparison);
	}

	/**
	 * Filter the query on the h0100 column
	 * 
	 * @param     int|array $h0100 The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedStatQuery The current query, for fluid interface
	 */
	public function filterByH0100($h0100 = null, $comparison = null)
	{
		if (is_array($h0100)) {
			$useMinMax = false;
			if (isset($h0100['min'])) {
				$this->addUsingAlias(DealFeedStatPeer::H0100, $h0100['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($h0100['max'])) {
				$this->addUsingAlias(DealFeedStatPeer::H0100, $h0100['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedStatPeer::H0100, $h0100, $comparison);
	}

	/**
	 * Filter the query on the h0200 column
	 * 
	 * @param     int|array $h0200 The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedStatQuery The current query, for fluid interface
	 */
	public function filterByH0200($h0200 = null, $comparison = null)
	{
		if (is_array($h0200)) {
			$useMinMax = false;
			if (isset($h0200['min'])) {
				$this->addUsingAlias(DealFeedStatPeer::H0200, $h0200['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($h0200['max'])) {
				$this->addUsingAlias(DealFeedStatPeer::H0200, $h0200['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedStatPeer::H0200, $h0200, $comparison);
	}

	/**
	 * Filter the query on the h0300 column
	 * 
	 * @param     int|array $h0300 The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedStatQuery The current query, for fluid interface
	 */
	public function filterByH0300($h0300 = null, $comparison = null)
	{
		if (is_array($h0300)) {
			$useMinMax = false;
			if (isset($h0300['min'])) {
				$this->addUsingAlias(DealFeedStatPeer::H0300, $h0300['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($h0300['max'])) {
				$this->addUsingAlias(DealFeedStatPeer::H0300, $h0300['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedStatPeer::H0300, $h0300, $comparison);
	}

	/**
	 * Filter the query on the h0400 column
	 * 
	 * @param     int|array $h0400 The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedStatQuery The current query, for fluid interface
	 */
	public function filterByH0400($h0400 = null, $comparison = null)
	{
		if (is_array($h0400)) {
			$useMinMax = false;
			if (isset($h0400['min'])) {
				$this->addUsingAlias(DealFeedStatPeer::H0400, $h0400['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($h0400['max'])) {
				$this->addUsingAlias(DealFeedStatPeer::H0400, $h0400['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedStatPeer::H0400, $h0400, $comparison);
	}

	/**
	 * Filter the query on the h0500 column
	 * 
	 * @param     int|array $h0500 The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedStatQuery The current query, for fluid interface
	 */
	public function filterByH0500($h0500 = null, $comparison = null)
	{
		if (is_array($h0500)) {
			$useMinMax = false;
			if (isset($h0500['min'])) {
				$this->addUsingAlias(DealFeedStatPeer::H0500, $h0500['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($h0500['max'])) {
				$this->addUsingAlias(DealFeedStatPeer::H0500, $h0500['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedStatPeer::H0500, $h0500, $comparison);
	}

	/**
	 * Filter the query on the h0600 column
	 * 
	 * @param     int|array $h0600 The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedStatQuery The current query, for fluid interface
	 */
	public function filterByH0600($h0600 = null, $comparison = null)
	{
		if (is_array($h0600)) {
			$useMinMax = false;
			if (isset($h0600['min'])) {
				$this->addUsingAlias(DealFeedStatPeer::H0600, $h0600['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($h0600['max'])) {
				$this->addUsingAlias(DealFeedStatPeer::H0600, $h0600['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedStatPeer::H0600, $h0600, $comparison);
	}

	/**
	 * Filter the query on the h0700 column
	 * 
	 * @param     int|array $h0700 The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedStatQuery The current query, for fluid interface
	 */
	public function filterByH0700($h0700 = null, $comparison = null)
	{
		if (is_array($h0700)) {
			$useMinMax = false;
			if (isset($h0700['min'])) {
				$this->addUsingAlias(DealFeedStatPeer::H0700, $h0700['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($h0700['max'])) {
				$this->addUsingAlias(DealFeedStatPeer::H0700, $h0700['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedStatPeer::H0700, $h0700, $comparison);
	}

	/**
	 * Filter the query on the h0800 column
	 * 
	 * @param     int|array $h0800 The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedStatQuery The current query, for fluid interface
	 */
	public function filterByH0800($h0800 = null, $comparison = null)
	{
		if (is_array($h0800)) {
			$useMinMax = false;
			if (isset($h0800['min'])) {
				$this->addUsingAlias(DealFeedStatPeer::H0800, $h0800['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($h0800['max'])) {
				$this->addUsingAlias(DealFeedStatPeer::H0800, $h0800['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedStatPeer::H0800, $h0800, $comparison);
	}

	/**
	 * Filter the query on the h0900 column
	 * 
	 * @param     int|array $h0900 The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedStatQuery The current query, for fluid interface
	 */
	public function filterByH0900($h0900 = null, $comparison = null)
	{
		if (is_array($h0900)) {
			$useMinMax = false;
			if (isset($h0900['min'])) {
				$this->addUsingAlias(DealFeedStatPeer::H0900, $h0900['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($h0900['max'])) {
				$this->addUsingAlias(DealFeedStatPeer::H0900, $h0900['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedStatPeer::H0900, $h0900, $comparison);
	}

	/**
	 * Filter the query on the h1000 column
	 * 
	 * @param     int|array $h1000 The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedStatQuery The current query, for fluid interface
	 */
	public function filterByH1000($h1000 = null, $comparison = null)
	{
		if (is_array($h1000)) {
			$useMinMax = false;
			if (isset($h1000['min'])) {
				$this->addUsingAlias(DealFeedStatPeer::H1000, $h1000['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($h1000['max'])) {
				$this->addUsingAlias(DealFeedStatPeer::H1000, $h1000['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedStatPeer::H1000, $h1000, $comparison);
	}

	/**
	 * Filter the query on the h1100 column
	 * 
	 * @param     int|array $h1100 The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedStatQuery The current query, for fluid interface
	 */
	public function filterByH1100($h1100 = null, $comparison = null)
	{
		if (is_array($h1100)) {
			$useMinMax = false;
			if (isset($h1100['min'])) {
				$this->addUsingAlias(DealFeedStatPeer::H1100, $h1100['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($h1100['max'])) {
				$this->addUsingAlias(DealFeedStatPeer::H1100, $h1100['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedStatPeer::H1100, $h1100, $comparison);
	}

	/**
	 * Filter the query on the h1200 column
	 * 
	 * @param     int|array $h1200 The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedStatQuery The current query, for fluid interface
	 */
	public function filterByH1200($h1200 = null, $comparison = null)
	{
		if (is_array($h1200)) {
			$useMinMax = false;
			if (isset($h1200['min'])) {
				$this->addUsingAlias(DealFeedStatPeer::H1200, $h1200['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($h1200['max'])) {
				$this->addUsingAlias(DealFeedStatPeer::H1200, $h1200['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedStatPeer::H1200, $h1200, $comparison);
	}

	/**
	 * Filter the query on the h1300 column
	 * 
	 * @param     int|array $h1300 The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedStatQuery The current query, for fluid interface
	 */
	public function filterByH1300($h1300 = null, $comparison = null)
	{
		if (is_array($h1300)) {
			$useMinMax = false;
			if (isset($h1300['min'])) {
				$this->addUsingAlias(DealFeedStatPeer::H1300, $h1300['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($h1300['max'])) {
				$this->addUsingAlias(DealFeedStatPeer::H1300, $h1300['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedStatPeer::H1300, $h1300, $comparison);
	}

	/**
	 * Filter the query on the h1400 column
	 * 
	 * @param     int|array $h1400 The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedStatQuery The current query, for fluid interface
	 */
	public function filterByH1400($h1400 = null, $comparison = null)
	{
		if (is_array($h1400)) {
			$useMinMax = false;
			if (isset($h1400['min'])) {
				$this->addUsingAlias(DealFeedStatPeer::H1400, $h1400['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($h1400['max'])) {
				$this->addUsingAlias(DealFeedStatPeer::H1400, $h1400['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedStatPeer::H1400, $h1400, $comparison);
	}

	/**
	 * Filter the query on the h1500 column
	 * 
	 * @param     int|array $h1500 The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedStatQuery The current query, for fluid interface
	 */
	public function filterByH1500($h1500 = null, $comparison = null)
	{
		if (is_array($h1500)) {
			$useMinMax = false;
			if (isset($h1500['min'])) {
				$this->addUsingAlias(DealFeedStatPeer::H1500, $h1500['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($h1500['max'])) {
				$this->addUsingAlias(DealFeedStatPeer::H1500, $h1500['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedStatPeer::H1500, $h1500, $comparison);
	}

	/**
	 * Filter the query on the h1600 column
	 * 
	 * @param     int|array $h1600 The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedStatQuery The current query, for fluid interface
	 */
	public function filterByH1600($h1600 = null, $comparison = null)
	{
		if (is_array($h1600)) {
			$useMinMax = false;
			if (isset($h1600['min'])) {
				$this->addUsingAlias(DealFeedStatPeer::H1600, $h1600['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($h1600['max'])) {
				$this->addUsingAlias(DealFeedStatPeer::H1600, $h1600['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedStatPeer::H1600, $h1600, $comparison);
	}

	/**
	 * Filter the query on the h1700 column
	 * 
	 * @param     int|array $h1700 The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedStatQuery The current query, for fluid interface
	 */
	public function filterByH1700($h1700 = null, $comparison = null)
	{
		if (is_array($h1700)) {
			$useMinMax = false;
			if (isset($h1700['min'])) {
				$this->addUsingAlias(DealFeedStatPeer::H1700, $h1700['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($h1700['max'])) {
				$this->addUsingAlias(DealFeedStatPeer::H1700, $h1700['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedStatPeer::H1700, $h1700, $comparison);
	}

	/**
	 * Filter the query on the h1800 column
	 * 
	 * @param     int|array $h1800 The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedStatQuery The current query, for fluid interface
	 */
	public function filterByH1800($h1800 = null, $comparison = null)
	{
		if (is_array($h1800)) {
			$useMinMax = false;
			if (isset($h1800['min'])) {
				$this->addUsingAlias(DealFeedStatPeer::H1800, $h1800['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($h1800['max'])) {
				$this->addUsingAlias(DealFeedStatPeer::H1800, $h1800['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedStatPeer::H1800, $h1800, $comparison);
	}

	/**
	 * Filter the query on the h1900 column
	 * 
	 * @param     int|array $h1900 The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedStatQuery The current query, for fluid interface
	 */
	public function filterByH1900($h1900 = null, $comparison = null)
	{
		if (is_array($h1900)) {
			$useMinMax = false;
			if (isset($h1900['min'])) {
				$this->addUsingAlias(DealFeedStatPeer::H1900, $h1900['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($h1900['max'])) {
				$this->addUsingAlias(DealFeedStatPeer::H1900, $h1900['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedStatPeer::H1900, $h1900, $comparison);
	}

	/**
	 * Filter the query on the h2000 column
	 * 
	 * @param     int|array $h2000 The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedStatQuery The current query, for fluid interface
	 */
	public function filterByH2000($h2000 = null, $comparison = null)
	{
		if (is_array($h2000)) {
			$useMinMax = false;
			if (isset($h2000['min'])) {
				$this->addUsingAlias(DealFeedStatPeer::H2000, $h2000['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($h2000['max'])) {
				$this->addUsingAlias(DealFeedStatPeer::H2000, $h2000['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedStatPeer::H2000, $h2000, $comparison);
	}

	/**
	 * Filter the query on the h2100 column
	 * 
	 * @param     int|array $h2100 The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedStatQuery The current query, for fluid interface
	 */
	public function filterByH2100($h2100 = null, $comparison = null)
	{
		if (is_array($h2100)) {
			$useMinMax = false;
			if (isset($h2100['min'])) {
				$this->addUsingAlias(DealFeedStatPeer::H2100, $h2100['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($h2100['max'])) {
				$this->addUsingAlias(DealFeedStatPeer::H2100, $h2100['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedStatPeer::H2100, $h2100, $comparison);
	}

	/**
	 * Filter the query on the h2200 column
	 * 
	 * @param     int|array $h2200 The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedStatQuery The current query, for fluid interface
	 */
	public function filterByH2200($h2200 = null, $comparison = null)
	{
		if (is_array($h2200)) {
			$useMinMax = false;
			if (isset($h2200['min'])) {
				$this->addUsingAlias(DealFeedStatPeer::H2200, $h2200['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($h2200['max'])) {
				$this->addUsingAlias(DealFeedStatPeer::H2200, $h2200['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedStatPeer::H2200, $h2200, $comparison);
	}

	/**
	 * Filter the query on the h2300 column
	 * 
	 * @param     int|array $h2300 The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedStatQuery The current query, for fluid interface
	 */
	public function filterByH2300($h2300 = null, $comparison = null)
	{
		if (is_array($h2300)) {
			$useMinMax = false;
			if (isset($h2300['min'])) {
				$this->addUsingAlias(DealFeedStatPeer::H2300, $h2300['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($h2300['max'])) {
				$this->addUsingAlias(DealFeedStatPeer::H2300, $h2300['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedStatPeer::H2300, $h2300, $comparison);
	}

	/**
	 * Filter the query by a related DealFeed object
	 *
	 * @param     DealFeed $dealFeed  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedStatQuery The current query, for fluid interface
	 */
	public function filterByDealFeed($dealFeed, $comparison = null)
	{
		return $this
			->addUsingAlias(DealFeedStatPeer::DEAL_FEED_ID, $dealFeed->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the DealFeed relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedStatQuery The current query, for fluid interface
	 */
	public function joinDealFeed($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('DealFeed');
		
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
			$this->addJoinObject($join, 'DealFeed');
		}
		
		return $this;
	}

	/**
	 * Use the DealFeed relation DealFeed object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedQuery A secondary query class using the current class as primary query
	 */
	public function useDealFeedQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinDealFeed($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'DealFeed', 'DealFeedQuery');
	}

	/**
	 * Filter the query by a related Business object
	 *
	 * @param     Business $business  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedStatQuery The current query, for fluid interface
	 */
	public function filterByBusiness($business, $comparison = null)
	{
		return $this
			->addUsingAlias(DealFeedStatPeer::BUSINESS_ID, $business->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Business relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedStatQuery The current query, for fluid interface
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
	 * Exclude object from result
	 *
	 * @param     DealFeedStat $dealFeedStat Object to remove from the list of results
	 *
	 * @return    DealFeedStatQuery The current query, for fluid interface
	 */
	public function prune($dealFeedStat = null)
	{
		if ($dealFeedStat) {
			$this->addUsingAlias(DealFeedStatPeer::ID, $dealFeedStat->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseDealFeedStatQuery
