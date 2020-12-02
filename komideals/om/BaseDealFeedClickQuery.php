<?php


/**
 * Base class that represents a query for the 'deal_feed_click' table.
 *
 * 
 *
 * @method     DealFeedClickQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     DealFeedClickQuery orderByDealFeedId($order = Criteria::ASC) Order by the deal_feed_id column
 * @method     DealFeedClickQuery orderByBusinessId($order = Criteria::ASC) Order by the business_id column
 * @method     DealFeedClickQuery orderByDateCreated($order = Criteria::ASC) Order by the date_created column
 * @method     DealFeedClickQuery orderByUserAgentId($order = Criteria::ASC) Order by the user_agent_id column
 * @method     DealFeedClickQuery orderByHttpReferer($order = Criteria::ASC) Order by the http_referer column
 * @method     DealFeedClickQuery orderByRemoteAddr($order = Criteria::ASC) Order by the remote_addr column
 * @method     DealFeedClickQuery orderBySid($order = Criteria::ASC) Order by the sid column
 * @method     DealFeedClickQuery orderByHttpReferer2($order = Criteria::ASC) Order by the http_referer2 column
 *
 * @method     DealFeedClickQuery groupById() Group by the id column
 * @method     DealFeedClickQuery groupByDealFeedId() Group by the deal_feed_id column
 * @method     DealFeedClickQuery groupByBusinessId() Group by the business_id column
 * @method     DealFeedClickQuery groupByDateCreated() Group by the date_created column
 * @method     DealFeedClickQuery groupByUserAgentId() Group by the user_agent_id column
 * @method     DealFeedClickQuery groupByHttpReferer() Group by the http_referer column
 * @method     DealFeedClickQuery groupByRemoteAddr() Group by the remote_addr column
 * @method     DealFeedClickQuery groupBySid() Group by the sid column
 * @method     DealFeedClickQuery groupByHttpReferer2() Group by the http_referer2 column
 *
 * @method     DealFeedClickQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     DealFeedClickQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     DealFeedClickQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     DealFeedClickQuery leftJoinDealFeed($relationAlias = null) Adds a LEFT JOIN clause to the query using the DealFeed relation
 * @method     DealFeedClickQuery rightJoinDealFeed($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DealFeed relation
 * @method     DealFeedClickQuery innerJoinDealFeed($relationAlias = null) Adds a INNER JOIN clause to the query using the DealFeed relation
 *
 * @method     DealFeedClickQuery leftJoinBusiness($relationAlias = null) Adds a LEFT JOIN clause to the query using the Business relation
 * @method     DealFeedClickQuery rightJoinBusiness($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Business relation
 * @method     DealFeedClickQuery innerJoinBusiness($relationAlias = null) Adds a INNER JOIN clause to the query using the Business relation
 *
 * @method     DealFeedClickQuery leftJoinUserAgent($relationAlias = null) Adds a LEFT JOIN clause to the query using the UserAgent relation
 * @method     DealFeedClickQuery rightJoinUserAgent($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UserAgent relation
 * @method     DealFeedClickQuery innerJoinUserAgent($relationAlias = null) Adds a INNER JOIN clause to the query using the UserAgent relation
 *
 * @method     DealFeedClick findOne(PropelPDO $con = null) Return the first DealFeedClick matching the query
 * @method     DealFeedClick findOneOrCreate(PropelPDO $con = null) Return the first DealFeedClick matching the query, or a new DealFeedClick object populated from the query conditions when no match is found
 *
 * @method     DealFeedClick findOneById(int $id) Return the first DealFeedClick filtered by the id column
 * @method     DealFeedClick findOneByDealFeedId(int $deal_feed_id) Return the first DealFeedClick filtered by the deal_feed_id column
 * @method     DealFeedClick findOneByBusinessId(int $business_id) Return the first DealFeedClick filtered by the business_id column
 * @method     DealFeedClick findOneByDateCreated(string $date_created) Return the first DealFeedClick filtered by the date_created column
 * @method     DealFeedClick findOneByUserAgentId(int $user_agent_id) Return the first DealFeedClick filtered by the user_agent_id column
 * @method     DealFeedClick findOneByHttpReferer(string $http_referer) Return the first DealFeedClick filtered by the http_referer column
 * @method     DealFeedClick findOneByRemoteAddr(string $remote_addr) Return the first DealFeedClick filtered by the remote_addr column
 * @method     DealFeedClick findOneBySid(string $sid) Return the first DealFeedClick filtered by the sid column
 * @method     DealFeedClick findOneByHttpReferer2(string $http_referer2) Return the first DealFeedClick filtered by the http_referer2 column
 *
 * @method     array findById(int $id) Return DealFeedClick objects filtered by the id column
 * @method     array findByDealFeedId(int $deal_feed_id) Return DealFeedClick objects filtered by the deal_feed_id column
 * @method     array findByBusinessId(int $business_id) Return DealFeedClick objects filtered by the business_id column
 * @method     array findByDateCreated(string $date_created) Return DealFeedClick objects filtered by the date_created column
 * @method     array findByUserAgentId(int $user_agent_id) Return DealFeedClick objects filtered by the user_agent_id column
 * @method     array findByHttpReferer(string $http_referer) Return DealFeedClick objects filtered by the http_referer column
 * @method     array findByRemoteAddr(string $remote_addr) Return DealFeedClick objects filtered by the remote_addr column
 * @method     array findBySid(string $sid) Return DealFeedClick objects filtered by the sid column
 * @method     array findByHttpReferer2(string $http_referer2) Return DealFeedClick objects filtered by the http_referer2 column
 *
 * @package    propel.generator.komideals.om
 */
abstract class BaseDealFeedClickQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseDealFeedClickQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'komideals', $modelName = 'DealFeedClick', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new DealFeedClickQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    DealFeedClickQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof DealFeedClickQuery) {
			return $criteria;
		}
		$query = new DealFeedClickQuery();
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
	 * @return    DealFeedClick|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = DealFeedClickPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    DealFeedClickQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(DealFeedClickPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    DealFeedClickQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(DealFeedClickPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedClickQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(DealFeedClickPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the deal_feed_id column
	 * 
	 * @param     int|array $dealFeedId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedClickQuery The current query, for fluid interface
	 */
	public function filterByDealFeedId($dealFeedId = null, $comparison = null)
	{
		if (is_array($dealFeedId)) {
			$useMinMax = false;
			if (isset($dealFeedId['min'])) {
				$this->addUsingAlias(DealFeedClickPeer::DEAL_FEED_ID, $dealFeedId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dealFeedId['max'])) {
				$this->addUsingAlias(DealFeedClickPeer::DEAL_FEED_ID, $dealFeedId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedClickPeer::DEAL_FEED_ID, $dealFeedId, $comparison);
	}

	/**
	 * Filter the query on the business_id column
	 * 
	 * @param     int|array $businessId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedClickQuery The current query, for fluid interface
	 */
	public function filterByBusinessId($businessId = null, $comparison = null)
	{
		if (is_array($businessId)) {
			$useMinMax = false;
			if (isset($businessId['min'])) {
				$this->addUsingAlias(DealFeedClickPeer::BUSINESS_ID, $businessId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($businessId['max'])) {
				$this->addUsingAlias(DealFeedClickPeer::BUSINESS_ID, $businessId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedClickPeer::BUSINESS_ID, $businessId, $comparison);
	}

	/**
	 * Filter the query on the date_created column
	 * 
	 * @param     string|array $dateCreated The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedClickQuery The current query, for fluid interface
	 */
	public function filterByDateCreated($dateCreated = null, $comparison = null)
	{
		if (is_array($dateCreated)) {
			$useMinMax = false;
			if (isset($dateCreated['min'])) {
				$this->addUsingAlias(DealFeedClickPeer::DATE_CREATED, $dateCreated['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateCreated['max'])) {
				$this->addUsingAlias(DealFeedClickPeer::DATE_CREATED, $dateCreated['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedClickPeer::DATE_CREATED, $dateCreated, $comparison);
	}

	/**
	 * Filter the query on the user_agent_id column
	 * 
	 * @param     int|array $userAgentId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedClickQuery The current query, for fluid interface
	 */
	public function filterByUserAgentId($userAgentId = null, $comparison = null)
	{
		if (is_array($userAgentId)) {
			$useMinMax = false;
			if (isset($userAgentId['min'])) {
				$this->addUsingAlias(DealFeedClickPeer::USER_AGENT_ID, $userAgentId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userAgentId['max'])) {
				$this->addUsingAlias(DealFeedClickPeer::USER_AGENT_ID, $userAgentId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedClickPeer::USER_AGENT_ID, $userAgentId, $comparison);
	}

	/**
	 * Filter the query on the http_referer column
	 * 
	 * @param     string $httpReferer The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedClickQuery The current query, for fluid interface
	 */
	public function filterByHttpReferer($httpReferer = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($httpReferer)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $httpReferer)) {
				$httpReferer = str_replace('*', '%', $httpReferer);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DealFeedClickPeer::HTTP_REFERER, $httpReferer, $comparison);
	}

	/**
	 * Filter the query on the remote_addr column
	 * 
	 * @param     string $remoteAddr The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedClickQuery The current query, for fluid interface
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
		return $this->addUsingAlias(DealFeedClickPeer::REMOTE_ADDR, $remoteAddr, $comparison);
	}

	/**
	 * Filter the query on the sid column
	 * 
	 * @param     string $sid The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedClickQuery The current query, for fluid interface
	 */
	public function filterBySid($sid = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($sid)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $sid)) {
				$sid = str_replace('*', '%', $sid);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DealFeedClickPeer::SID, $sid, $comparison);
	}

	/**
	 * Filter the query on the http_referer2 column
	 * 
	 * @param     string $httpReferer2 The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedClickQuery The current query, for fluid interface
	 */
	public function filterByHttpReferer2($httpReferer2 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($httpReferer2)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $httpReferer2)) {
				$httpReferer2 = str_replace('*', '%', $httpReferer2);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DealFeedClickPeer::HTTP_REFERER2, $httpReferer2, $comparison);
	}

	/**
	 * Filter the query by a related DealFeed object
	 *
	 * @param     DealFeed $dealFeed  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedClickQuery The current query, for fluid interface
	 */
	public function filterByDealFeed($dealFeed, $comparison = null)
	{
		return $this
			->addUsingAlias(DealFeedClickPeer::DEAL_FEED_ID, $dealFeed->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the DealFeed relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedClickQuery The current query, for fluid interface
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
	 * @return    DealFeedClickQuery The current query, for fluid interface
	 */
	public function filterByBusiness($business, $comparison = null)
	{
		return $this
			->addUsingAlias(DealFeedClickPeer::BUSINESS_ID, $business->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Business relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedClickQuery The current query, for fluid interface
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
	 * Filter the query by a related UserAgent object
	 *
	 * @param     UserAgent $userAgent  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedClickQuery The current query, for fluid interface
	 */
	public function filterByUserAgent($userAgent, $comparison = null)
	{
		return $this
			->addUsingAlias(DealFeedClickPeer::USER_AGENT_ID, $userAgent->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the UserAgent relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedClickQuery The current query, for fluid interface
	 */
	public function joinUserAgent($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('UserAgent');
		
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
			$this->addJoinObject($join, 'UserAgent');
		}
		
		return $this;
	}

	/**
	 * Use the UserAgent relation UserAgent object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserAgentQuery A secondary query class using the current class as primary query
	 */
	public function useUserAgentQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinUserAgent($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'UserAgent', 'UserAgentQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     DealFeedClick $dealFeedClick Object to remove from the list of results
	 *
	 * @return    DealFeedClickQuery The current query, for fluid interface
	 */
	public function prune($dealFeedClick = null)
	{
		if ($dealFeedClick) {
			$this->addUsingAlias(DealFeedClickPeer::ID, $dealFeedClick->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseDealFeedClickQuery
