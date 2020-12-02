<?php


/**
 * Base class that represents a query for the 'deal_feed_view' table.
 *
 * 
 *
 * @method     DealFeedViewQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     DealFeedViewQuery orderByBusinessId($order = Criteria::ASC) Order by the business_id column
 * @method     DealFeedViewQuery orderByDateCreated($order = Criteria::ASC) Order by the date_created column
 * @method     DealFeedViewQuery orderByUserAgentId($order = Criteria::ASC) Order by the user_agent_id column
 * @method     DealFeedViewQuery orderByHttpReferer($order = Criteria::ASC) Order by the http_referer column
 * @method     DealFeedViewQuery orderByRemoteAddr($order = Criteria::ASC) Order by the remote_addr column
 * @method     DealFeedViewQuery orderBySid($order = Criteria::ASC) Order by the sid column
 * @method     DealFeedViewQuery orderByHttpReferer2($order = Criteria::ASC) Order by the http_referer2 column
 *
 * @method     DealFeedViewQuery groupById() Group by the id column
 * @method     DealFeedViewQuery groupByBusinessId() Group by the business_id column
 * @method     DealFeedViewQuery groupByDateCreated() Group by the date_created column
 * @method     DealFeedViewQuery groupByUserAgentId() Group by the user_agent_id column
 * @method     DealFeedViewQuery groupByHttpReferer() Group by the http_referer column
 * @method     DealFeedViewQuery groupByRemoteAddr() Group by the remote_addr column
 * @method     DealFeedViewQuery groupBySid() Group by the sid column
 * @method     DealFeedViewQuery groupByHttpReferer2() Group by the http_referer2 column
 *
 * @method     DealFeedViewQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     DealFeedViewQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     DealFeedViewQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     DealFeedViewQuery leftJoinBusiness($relationAlias = null) Adds a LEFT JOIN clause to the query using the Business relation
 * @method     DealFeedViewQuery rightJoinBusiness($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Business relation
 * @method     DealFeedViewQuery innerJoinBusiness($relationAlias = null) Adds a INNER JOIN clause to the query using the Business relation
 *
 * @method     DealFeedViewQuery leftJoinUserAgent($relationAlias = null) Adds a LEFT JOIN clause to the query using the UserAgent relation
 * @method     DealFeedViewQuery rightJoinUserAgent($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UserAgent relation
 * @method     DealFeedViewQuery innerJoinUserAgent($relationAlias = null) Adds a INNER JOIN clause to the query using the UserAgent relation
 *
 * @method     DealFeedView findOne(PropelPDO $con = null) Return the first DealFeedView matching the query
 * @method     DealFeedView findOneOrCreate(PropelPDO $con = null) Return the first DealFeedView matching the query, or a new DealFeedView object populated from the query conditions when no match is found
 *
 * @method     DealFeedView findOneById(int $id) Return the first DealFeedView filtered by the id column
 * @method     DealFeedView findOneByBusinessId(int $business_id) Return the first DealFeedView filtered by the business_id column
 * @method     DealFeedView findOneByDateCreated(string $date_created) Return the first DealFeedView filtered by the date_created column
 * @method     DealFeedView findOneByUserAgentId(int $user_agent_id) Return the first DealFeedView filtered by the user_agent_id column
 * @method     DealFeedView findOneByHttpReferer(string $http_referer) Return the first DealFeedView filtered by the http_referer column
 * @method     DealFeedView findOneByRemoteAddr(string $remote_addr) Return the first DealFeedView filtered by the remote_addr column
 * @method     DealFeedView findOneBySid(string $sid) Return the first DealFeedView filtered by the sid column
 * @method     DealFeedView findOneByHttpReferer2(string $http_referer2) Return the first DealFeedView filtered by the http_referer2 column
 *
 * @method     array findById(int $id) Return DealFeedView objects filtered by the id column
 * @method     array findByBusinessId(int $business_id) Return DealFeedView objects filtered by the business_id column
 * @method     array findByDateCreated(string $date_created) Return DealFeedView objects filtered by the date_created column
 * @method     array findByUserAgentId(int $user_agent_id) Return DealFeedView objects filtered by the user_agent_id column
 * @method     array findByHttpReferer(string $http_referer) Return DealFeedView objects filtered by the http_referer column
 * @method     array findByRemoteAddr(string $remote_addr) Return DealFeedView objects filtered by the remote_addr column
 * @method     array findBySid(string $sid) Return DealFeedView objects filtered by the sid column
 * @method     array findByHttpReferer2(string $http_referer2) Return DealFeedView objects filtered by the http_referer2 column
 *
 * @package    propel.generator.komideals.om
 */
abstract class BaseDealFeedViewQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseDealFeedViewQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'komideals', $modelName = 'DealFeedView', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new DealFeedViewQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    DealFeedViewQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof DealFeedViewQuery) {
			return $criteria;
		}
		$query = new DealFeedViewQuery();
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
	 * @return    DealFeedView|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = DealFeedViewPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    DealFeedViewQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(DealFeedViewPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    DealFeedViewQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(DealFeedViewPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedViewQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(DealFeedViewPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the business_id column
	 * 
	 * @param     int|array $businessId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedViewQuery The current query, for fluid interface
	 */
	public function filterByBusinessId($businessId = null, $comparison = null)
	{
		if (is_array($businessId)) {
			$useMinMax = false;
			if (isset($businessId['min'])) {
				$this->addUsingAlias(DealFeedViewPeer::BUSINESS_ID, $businessId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($businessId['max'])) {
				$this->addUsingAlias(DealFeedViewPeer::BUSINESS_ID, $businessId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedViewPeer::BUSINESS_ID, $businessId, $comparison);
	}

	/**
	 * Filter the query on the date_created column
	 * 
	 * @param     string|array $dateCreated The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedViewQuery The current query, for fluid interface
	 */
	public function filterByDateCreated($dateCreated = null, $comparison = null)
	{
		if (is_array($dateCreated)) {
			$useMinMax = false;
			if (isset($dateCreated['min'])) {
				$this->addUsingAlias(DealFeedViewPeer::DATE_CREATED, $dateCreated['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateCreated['max'])) {
				$this->addUsingAlias(DealFeedViewPeer::DATE_CREATED, $dateCreated['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedViewPeer::DATE_CREATED, $dateCreated, $comparison);
	}

	/**
	 * Filter the query on the user_agent_id column
	 * 
	 * @param     int|array $userAgentId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedViewQuery The current query, for fluid interface
	 */
	public function filterByUserAgentId($userAgentId = null, $comparison = null)
	{
		if (is_array($userAgentId)) {
			$useMinMax = false;
			if (isset($userAgentId['min'])) {
				$this->addUsingAlias(DealFeedViewPeer::USER_AGENT_ID, $userAgentId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userAgentId['max'])) {
				$this->addUsingAlias(DealFeedViewPeer::USER_AGENT_ID, $userAgentId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedViewPeer::USER_AGENT_ID, $userAgentId, $comparison);
	}

	/**
	 * Filter the query on the http_referer column
	 * 
	 * @param     string $httpReferer The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedViewQuery The current query, for fluid interface
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
		return $this->addUsingAlias(DealFeedViewPeer::HTTP_REFERER, $httpReferer, $comparison);
	}

	/**
	 * Filter the query on the remote_addr column
	 * 
	 * @param     string $remoteAddr The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedViewQuery The current query, for fluid interface
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
		return $this->addUsingAlias(DealFeedViewPeer::REMOTE_ADDR, $remoteAddr, $comparison);
	}

	/**
	 * Filter the query on the sid column
	 * 
	 * @param     string $sid The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedViewQuery The current query, for fluid interface
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
		return $this->addUsingAlias(DealFeedViewPeer::SID, $sid, $comparison);
	}

	/**
	 * Filter the query on the http_referer2 column
	 * 
	 * @param     string $httpReferer2 The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedViewQuery The current query, for fluid interface
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
		return $this->addUsingAlias(DealFeedViewPeer::HTTP_REFERER2, $httpReferer2, $comparison);
	}

	/**
	 * Filter the query by a related Business object
	 *
	 * @param     Business $business  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedViewQuery The current query, for fluid interface
	 */
	public function filterByBusiness($business, $comparison = null)
	{
		return $this
			->addUsingAlias(DealFeedViewPeer::BUSINESS_ID, $business->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Business relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedViewQuery The current query, for fluid interface
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
	 * @return    DealFeedViewQuery The current query, for fluid interface
	 */
	public function filterByUserAgent($userAgent, $comparison = null)
	{
		return $this
			->addUsingAlias(DealFeedViewPeer::USER_AGENT_ID, $userAgent->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the UserAgent relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedViewQuery The current query, for fluid interface
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
	 * @param     DealFeedView $dealFeedView Object to remove from the list of results
	 *
	 * @return    DealFeedViewQuery The current query, for fluid interface
	 */
	public function prune($dealFeedView = null)
	{
		if ($dealFeedView) {
			$this->addUsingAlias(DealFeedViewPeer::ID, $dealFeedView->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseDealFeedViewQuery
