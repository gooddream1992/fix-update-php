<?php


/**
 * Base class that represents a query for the 'deal_feed_location' table.
 *
 * 
 *
 * @method     DealFeedLocationQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     DealFeedLocationQuery orderByDealFeedId($order = Criteria::ASC) Order by the deal_feed_id column
 * @method     DealFeedLocationQuery orderByDateCreated($order = Criteria::ASC) Order by the date_created column
 * @method     DealFeedLocationQuery orderByIsActive($order = Criteria::ASC) Order by the is_active column
 * @method     DealFeedLocationQuery orderByLocationName($order = Criteria::ASC) Order by the location_name column
 * @method     DealFeedLocationQuery orderByAddressline1($order = Criteria::ASC) Order by the addressline1 column
 * @method     DealFeedLocationQuery orderByAddressline2($order = Criteria::ASC) Order by the addressline2 column
 * @method     DealFeedLocationQuery orderByPostcode($order = Criteria::ASC) Order by the postcode column
 * @method     DealFeedLocationQuery orderByTelephone($order = Criteria::ASC) Order by the telephone column
 * @method     DealFeedLocationQuery orderByLatitude($order = Criteria::ASC) Order by the latitude column
 * @method     DealFeedLocationQuery orderByLongitude($order = Criteria::ASC) Order by the longitude column
 *
 * @method     DealFeedLocationQuery groupById() Group by the id column
 * @method     DealFeedLocationQuery groupByDealFeedId() Group by the deal_feed_id column
 * @method     DealFeedLocationQuery groupByDateCreated() Group by the date_created column
 * @method     DealFeedLocationQuery groupByIsActive() Group by the is_active column
 * @method     DealFeedLocationQuery groupByLocationName() Group by the location_name column
 * @method     DealFeedLocationQuery groupByAddressline1() Group by the addressline1 column
 * @method     DealFeedLocationQuery groupByAddressline2() Group by the addressline2 column
 * @method     DealFeedLocationQuery groupByPostcode() Group by the postcode column
 * @method     DealFeedLocationQuery groupByTelephone() Group by the telephone column
 * @method     DealFeedLocationQuery groupByLatitude() Group by the latitude column
 * @method     DealFeedLocationQuery groupByLongitude() Group by the longitude column
 *
 * @method     DealFeedLocationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     DealFeedLocationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     DealFeedLocationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     DealFeedLocationQuery leftJoinDealFeed($relationAlias = null) Adds a LEFT JOIN clause to the query using the DealFeed relation
 * @method     DealFeedLocationQuery rightJoinDealFeed($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DealFeed relation
 * @method     DealFeedLocationQuery innerJoinDealFeed($relationAlias = null) Adds a INNER JOIN clause to the query using the DealFeed relation
 *
 * @method     DealFeedLocation findOne(PropelPDO $con = null) Return the first DealFeedLocation matching the query
 * @method     DealFeedLocation findOneOrCreate(PropelPDO $con = null) Return the first DealFeedLocation matching the query, or a new DealFeedLocation object populated from the query conditions when no match is found
 *
 * @method     DealFeedLocation findOneById(int $id) Return the first DealFeedLocation filtered by the id column
 * @method     DealFeedLocation findOneByDealFeedId(int $deal_feed_id) Return the first DealFeedLocation filtered by the deal_feed_id column
 * @method     DealFeedLocation findOneByDateCreated(string $date_created) Return the first DealFeedLocation filtered by the date_created column
 * @method     DealFeedLocation findOneByIsActive(int $is_active) Return the first DealFeedLocation filtered by the is_active column
 * @method     DealFeedLocation findOneByLocationName(string $location_name) Return the first DealFeedLocation filtered by the location_name column
 * @method     DealFeedLocation findOneByAddressline1(string $addressline1) Return the first DealFeedLocation filtered by the addressline1 column
 * @method     DealFeedLocation findOneByAddressline2(string $addressline2) Return the first DealFeedLocation filtered by the addressline2 column
 * @method     DealFeedLocation findOneByPostcode(string $postcode) Return the first DealFeedLocation filtered by the postcode column
 * @method     DealFeedLocation findOneByTelephone(string $telephone) Return the first DealFeedLocation filtered by the telephone column
 * @method     DealFeedLocation findOneByLatitude(double $latitude) Return the first DealFeedLocation filtered by the latitude column
 * @method     DealFeedLocation findOneByLongitude(double $longitude) Return the first DealFeedLocation filtered by the longitude column
 *
 * @method     array findById(int $id) Return DealFeedLocation objects filtered by the id column
 * @method     array findByDealFeedId(int $deal_feed_id) Return DealFeedLocation objects filtered by the deal_feed_id column
 * @method     array findByDateCreated(string $date_created) Return DealFeedLocation objects filtered by the date_created column
 * @method     array findByIsActive(int $is_active) Return DealFeedLocation objects filtered by the is_active column
 * @method     array findByLocationName(string $location_name) Return DealFeedLocation objects filtered by the location_name column
 * @method     array findByAddressline1(string $addressline1) Return DealFeedLocation objects filtered by the addressline1 column
 * @method     array findByAddressline2(string $addressline2) Return DealFeedLocation objects filtered by the addressline2 column
 * @method     array findByPostcode(string $postcode) Return DealFeedLocation objects filtered by the postcode column
 * @method     array findByTelephone(string $telephone) Return DealFeedLocation objects filtered by the telephone column
 * @method     array findByLatitude(double $latitude) Return DealFeedLocation objects filtered by the latitude column
 * @method     array findByLongitude(double $longitude) Return DealFeedLocation objects filtered by the longitude column
 *
 * @package    propel.generator.komideals.om
 */
abstract class BaseDealFeedLocationQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseDealFeedLocationQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'komideals', $modelName = 'DealFeedLocation', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new DealFeedLocationQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    DealFeedLocationQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof DealFeedLocationQuery) {
			return $criteria;
		}
		$query = new DealFeedLocationQuery();
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
	 * @return    DealFeedLocation|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = DealFeedLocationPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    DealFeedLocationQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(DealFeedLocationPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    DealFeedLocationQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(DealFeedLocationPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedLocationQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(DealFeedLocationPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the deal_feed_id column
	 * 
	 * @param     int|array $dealFeedId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedLocationQuery The current query, for fluid interface
	 */
	public function filterByDealFeedId($dealFeedId = null, $comparison = null)
	{
		if (is_array($dealFeedId)) {
			$useMinMax = false;
			if (isset($dealFeedId['min'])) {
				$this->addUsingAlias(DealFeedLocationPeer::DEAL_FEED_ID, $dealFeedId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dealFeedId['max'])) {
				$this->addUsingAlias(DealFeedLocationPeer::DEAL_FEED_ID, $dealFeedId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedLocationPeer::DEAL_FEED_ID, $dealFeedId, $comparison);
	}

	/**
	 * Filter the query on the date_created column
	 * 
	 * @param     string|array $dateCreated The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedLocationQuery The current query, for fluid interface
	 */
	public function filterByDateCreated($dateCreated = null, $comparison = null)
	{
		if (is_array($dateCreated)) {
			$useMinMax = false;
			if (isset($dateCreated['min'])) {
				$this->addUsingAlias(DealFeedLocationPeer::DATE_CREATED, $dateCreated['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateCreated['max'])) {
				$this->addUsingAlias(DealFeedLocationPeer::DATE_CREATED, $dateCreated['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedLocationPeer::DATE_CREATED, $dateCreated, $comparison);
	}

	/**
	 * Filter the query on the is_active column
	 * 
	 * @param     int|array $isActive The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedLocationQuery The current query, for fluid interface
	 */
	public function filterByIsActive($isActive = null, $comparison = null)
	{
		if (is_array($isActive)) {
			$useMinMax = false;
			if (isset($isActive['min'])) {
				$this->addUsingAlias(DealFeedLocationPeer::IS_ACTIVE, $isActive['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isActive['max'])) {
				$this->addUsingAlias(DealFeedLocationPeer::IS_ACTIVE, $isActive['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedLocationPeer::IS_ACTIVE, $isActive, $comparison);
	}

	/**
	 * Filter the query on the location_name column
	 * 
	 * @param     string $locationName The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedLocationQuery The current query, for fluid interface
	 */
	public function filterByLocationName($locationName = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($locationName)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $locationName)) {
				$locationName = str_replace('*', '%', $locationName);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DealFeedLocationPeer::LOCATION_NAME, $locationName, $comparison);
	}

	/**
	 * Filter the query on the addressline1 column
	 * 
	 * @param     string $addressline1 The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedLocationQuery The current query, for fluid interface
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
		return $this->addUsingAlias(DealFeedLocationPeer::ADDRESSLINE1, $addressline1, $comparison);
	}

	/**
	 * Filter the query on the addressline2 column
	 * 
	 * @param     string $addressline2 The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedLocationQuery The current query, for fluid interface
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
		return $this->addUsingAlias(DealFeedLocationPeer::ADDRESSLINE2, $addressline2, $comparison);
	}

	/**
	 * Filter the query on the postcode column
	 * 
	 * @param     string $postcode The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedLocationQuery The current query, for fluid interface
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
		return $this->addUsingAlias(DealFeedLocationPeer::POSTCODE, $postcode, $comparison);
	}

	/**
	 * Filter the query on the telephone column
	 * 
	 * @param     string $telephone The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedLocationQuery The current query, for fluid interface
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
		return $this->addUsingAlias(DealFeedLocationPeer::TELEPHONE, $telephone, $comparison);
	}

	/**
	 * Filter the query on the latitude column
	 * 
	 * @param     double|array $latitude The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedLocationQuery The current query, for fluid interface
	 */
	public function filterByLatitude($latitude = null, $comparison = null)
	{
		if (is_array($latitude)) {
			$useMinMax = false;
			if (isset($latitude['min'])) {
				$this->addUsingAlias(DealFeedLocationPeer::LATITUDE, $latitude['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($latitude['max'])) {
				$this->addUsingAlias(DealFeedLocationPeer::LATITUDE, $latitude['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedLocationPeer::LATITUDE, $latitude, $comparison);
	}

	/**
	 * Filter the query on the longitude column
	 * 
	 * @param     double|array $longitude The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedLocationQuery The current query, for fluid interface
	 */
	public function filterByLongitude($longitude = null, $comparison = null)
	{
		if (is_array($longitude)) {
			$useMinMax = false;
			if (isset($longitude['min'])) {
				$this->addUsingAlias(DealFeedLocationPeer::LONGITUDE, $longitude['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($longitude['max'])) {
				$this->addUsingAlias(DealFeedLocationPeer::LONGITUDE, $longitude['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedLocationPeer::LONGITUDE, $longitude, $comparison);
	}

	/**
	 * Filter the query by a related DealFeed object
	 *
	 * @param     DealFeed $dealFeed  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedLocationQuery The current query, for fluid interface
	 */
	public function filterByDealFeed($dealFeed, $comparison = null)
	{
		return $this
			->addUsingAlias(DealFeedLocationPeer::DEAL_FEED_ID, $dealFeed->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the DealFeed relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedLocationQuery The current query, for fluid interface
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
	 * Exclude object from result
	 *
	 * @param     DealFeedLocation $dealFeedLocation Object to remove from the list of results
	 *
	 * @return    DealFeedLocationQuery The current query, for fluid interface
	 */
	public function prune($dealFeedLocation = null)
	{
		if ($dealFeedLocation) {
			$this->addUsingAlias(DealFeedLocationPeer::ID, $dealFeedLocation->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseDealFeedLocationQuery
