<?php


/**
 * Base class that represents a query for the 'deal_feed_thread' table.
 *
 * 
 *
 * @method     DealFeedThreadQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     DealFeedThreadQuery orderByDealFeedId($order = Criteria::ASC) Order by the deal_feed_id column
 * @method     DealFeedThreadQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     DealFeedThreadQuery orderByContent($order = Criteria::ASC) Order by the content column
 * @method     DealFeedThreadQuery orderByDateCreated($order = Criteria::ASC) Order by the date_created column
 * @method     DealFeedThreadQuery orderByIsActive($order = Criteria::ASC) Order by the is_active column
 * @method     DealFeedThreadQuery orderByParentId($order = Criteria::ASC) Order by the parent_id column
 * @method     DealFeedThreadQuery orderByPermalink($order = Criteria::ASC) Order by the permalink column
 *
 * @method     DealFeedThreadQuery groupById() Group by the id column
 * @method     DealFeedThreadQuery groupByDealFeedId() Group by the deal_feed_id column
 * @method     DealFeedThreadQuery groupByUserId() Group by the user_id column
 * @method     DealFeedThreadQuery groupByContent() Group by the content column
 * @method     DealFeedThreadQuery groupByDateCreated() Group by the date_created column
 * @method     DealFeedThreadQuery groupByIsActive() Group by the is_active column
 * @method     DealFeedThreadQuery groupByParentId() Group by the parent_id column
 * @method     DealFeedThreadQuery groupByPermalink() Group by the permalink column
 *
 * @method     DealFeedThreadQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     DealFeedThreadQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     DealFeedThreadQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     DealFeedThreadQuery leftJoinDealFeed($relationAlias = null) Adds a LEFT JOIN clause to the query using the DealFeed relation
 * @method     DealFeedThreadQuery rightJoinDealFeed($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DealFeed relation
 * @method     DealFeedThreadQuery innerJoinDealFeed($relationAlias = null) Adds a INNER JOIN clause to the query using the DealFeed relation
 *
 * @method     DealFeedThreadQuery leftJoinUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the User relation
 * @method     DealFeedThreadQuery rightJoinUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the User relation
 * @method     DealFeedThreadQuery innerJoinUser($relationAlias = null) Adds a INNER JOIN clause to the query using the User relation
 *
 * @method     DealFeedThreadQuery leftJoinDealFeedThreadRelatedByParentId($relationAlias = null) Adds a LEFT JOIN clause to the query using the DealFeedThreadRelatedByParentId relation
 * @method     DealFeedThreadQuery rightJoinDealFeedThreadRelatedByParentId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DealFeedThreadRelatedByParentId relation
 * @method     DealFeedThreadQuery innerJoinDealFeedThreadRelatedByParentId($relationAlias = null) Adds a INNER JOIN clause to the query using the DealFeedThreadRelatedByParentId relation
 *
 * @method     DealFeedThreadQuery leftJoinDealFeedThreadRelatedById($relationAlias = null) Adds a LEFT JOIN clause to the query using the DealFeedThreadRelatedById relation
 * @method     DealFeedThreadQuery rightJoinDealFeedThreadRelatedById($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DealFeedThreadRelatedById relation
 * @method     DealFeedThreadQuery innerJoinDealFeedThreadRelatedById($relationAlias = null) Adds a INNER JOIN clause to the query using the DealFeedThreadRelatedById relation
 *
 * @method     DealFeedThread findOne(PropelPDO $con = null) Return the first DealFeedThread matching the query
 * @method     DealFeedThread findOneOrCreate(PropelPDO $con = null) Return the first DealFeedThread matching the query, or a new DealFeedThread object populated from the query conditions when no match is found
 *
 * @method     DealFeedThread findOneById(int $id) Return the first DealFeedThread filtered by the id column
 * @method     DealFeedThread findOneByDealFeedId(int $deal_feed_id) Return the first DealFeedThread filtered by the deal_feed_id column
 * @method     DealFeedThread findOneByUserId(int $user_id) Return the first DealFeedThread filtered by the user_id column
 * @method     DealFeedThread findOneByContent(string $content) Return the first DealFeedThread filtered by the content column
 * @method     DealFeedThread findOneByDateCreated(string $date_created) Return the first DealFeedThread filtered by the date_created column
 * @method     DealFeedThread findOneByIsActive(int $is_active) Return the first DealFeedThread filtered by the is_active column
 * @method     DealFeedThread findOneByParentId(int $parent_id) Return the first DealFeedThread filtered by the parent_id column
 * @method     DealFeedThread findOneByPermalink(string $permalink) Return the first DealFeedThread filtered by the permalink column
 *
 * @method     array findById(int $id) Return DealFeedThread objects filtered by the id column
 * @method     array findByDealFeedId(int $deal_feed_id) Return DealFeedThread objects filtered by the deal_feed_id column
 * @method     array findByUserId(int $user_id) Return DealFeedThread objects filtered by the user_id column
 * @method     array findByContent(string $content) Return DealFeedThread objects filtered by the content column
 * @method     array findByDateCreated(string $date_created) Return DealFeedThread objects filtered by the date_created column
 * @method     array findByIsActive(int $is_active) Return DealFeedThread objects filtered by the is_active column
 * @method     array findByParentId(int $parent_id) Return DealFeedThread objects filtered by the parent_id column
 * @method     array findByPermalink(string $permalink) Return DealFeedThread objects filtered by the permalink column
 *
 * @package    propel.generator.komideals.om
 */
abstract class BaseDealFeedThreadQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseDealFeedThreadQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'komideals', $modelName = 'DealFeedThread', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new DealFeedThreadQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    DealFeedThreadQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof DealFeedThreadQuery) {
			return $criteria;
		}
		$query = new DealFeedThreadQuery();
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
	 * @return    DealFeedThread|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = DealFeedThreadPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    DealFeedThreadQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(DealFeedThreadPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    DealFeedThreadQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(DealFeedThreadPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedThreadQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(DealFeedThreadPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the deal_feed_id column
	 * 
	 * @param     int|array $dealFeedId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedThreadQuery The current query, for fluid interface
	 */
	public function filterByDealFeedId($dealFeedId = null, $comparison = null)
	{
		if (is_array($dealFeedId)) {
			$useMinMax = false;
			if (isset($dealFeedId['min'])) {
				$this->addUsingAlias(DealFeedThreadPeer::DEAL_FEED_ID, $dealFeedId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dealFeedId['max'])) {
				$this->addUsingAlias(DealFeedThreadPeer::DEAL_FEED_ID, $dealFeedId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedThreadPeer::DEAL_FEED_ID, $dealFeedId, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedThreadQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(DealFeedThreadPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(DealFeedThreadPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedThreadPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the content column
	 * 
	 * @param     string $content The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedThreadQuery The current query, for fluid interface
	 */
	public function filterByContent($content = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($content)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $content)) {
				$content = str_replace('*', '%', $content);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DealFeedThreadPeer::CONTENT, $content, $comparison);
	}

	/**
	 * Filter the query on the date_created column
	 * 
	 * @param     string|array $dateCreated The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedThreadQuery The current query, for fluid interface
	 */
	public function filterByDateCreated($dateCreated = null, $comparison = null)
	{
		if (is_array($dateCreated)) {
			$useMinMax = false;
			if (isset($dateCreated['min'])) {
				$this->addUsingAlias(DealFeedThreadPeer::DATE_CREATED, $dateCreated['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateCreated['max'])) {
				$this->addUsingAlias(DealFeedThreadPeer::DATE_CREATED, $dateCreated['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedThreadPeer::DATE_CREATED, $dateCreated, $comparison);
	}

	/**
	 * Filter the query on the is_active column
	 * 
	 * @param     int|array $isActive The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedThreadQuery The current query, for fluid interface
	 */
	public function filterByIsActive($isActive = null, $comparison = null)
	{
		if (is_array($isActive)) {
			$useMinMax = false;
			if (isset($isActive['min'])) {
				$this->addUsingAlias(DealFeedThreadPeer::IS_ACTIVE, $isActive['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isActive['max'])) {
				$this->addUsingAlias(DealFeedThreadPeer::IS_ACTIVE, $isActive['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedThreadPeer::IS_ACTIVE, $isActive, $comparison);
	}

	/**
	 * Filter the query on the parent_id column
	 * 
	 * @param     int|array $parentId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedThreadQuery The current query, for fluid interface
	 */
	public function filterByParentId($parentId = null, $comparison = null)
	{
		if (is_array($parentId)) {
			$useMinMax = false;
			if (isset($parentId['min'])) {
				$this->addUsingAlias(DealFeedThreadPeer::PARENT_ID, $parentId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($parentId['max'])) {
				$this->addUsingAlias(DealFeedThreadPeer::PARENT_ID, $parentId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedThreadPeer::PARENT_ID, $parentId, $comparison);
	}

	/**
	 * Filter the query on the permalink column
	 * 
	 * @param     string $permalink The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedThreadQuery The current query, for fluid interface
	 */
	public function filterByPermalink($permalink = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($permalink)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $permalink)) {
				$permalink = str_replace('*', '%', $permalink);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DealFeedThreadPeer::PERMALINK, $permalink, $comparison);
	}

	/**
	 * Filter the query by a related DealFeed object
	 *
	 * @param     DealFeed $dealFeed  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedThreadQuery The current query, for fluid interface
	 */
	public function filterByDealFeed($dealFeed, $comparison = null)
	{
		return $this
			->addUsingAlias(DealFeedThreadPeer::DEAL_FEED_ID, $dealFeed->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the DealFeed relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedThreadQuery The current query, for fluid interface
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
	 * Filter the query by a related User object
	 *
	 * @param     User $user  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedThreadQuery The current query, for fluid interface
	 */
	public function filterByUser($user, $comparison = null)
	{
		return $this
			->addUsingAlias(DealFeedThreadPeer::USER_ID, $user->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the User relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedThreadQuery The current query, for fluid interface
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
	 * Filter the query by a related DealFeedThread object
	 *
	 * @param     DealFeedThread $dealFeedThread  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedThreadQuery The current query, for fluid interface
	 */
	public function filterByDealFeedThreadRelatedByParentId($dealFeedThread, $comparison = null)
	{
		return $this
			->addUsingAlias(DealFeedThreadPeer::PARENT_ID, $dealFeedThread->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the DealFeedThreadRelatedByParentId relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedThreadQuery The current query, for fluid interface
	 */
	public function joinDealFeedThreadRelatedByParentId($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('DealFeedThreadRelatedByParentId');
		
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
			$this->addJoinObject($join, 'DealFeedThreadRelatedByParentId');
		}
		
		return $this;
	}

	/**
	 * Use the DealFeedThreadRelatedByParentId relation DealFeedThread object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedThreadQuery A secondary query class using the current class as primary query
	 */
	public function useDealFeedThreadRelatedByParentIdQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinDealFeedThreadRelatedByParentId($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'DealFeedThreadRelatedByParentId', 'DealFeedThreadQuery');
	}

	/**
	 * Filter the query by a related DealFeedThread object
	 *
	 * @param     DealFeedThread $dealFeedThread  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedThreadQuery The current query, for fluid interface
	 */
	public function filterByDealFeedThreadRelatedById($dealFeedThread, $comparison = null)
	{
		return $this
			->addUsingAlias(DealFeedThreadPeer::ID, $dealFeedThread->getParentId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the DealFeedThreadRelatedById relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedThreadQuery The current query, for fluid interface
	 */
	public function joinDealFeedThreadRelatedById($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('DealFeedThreadRelatedById');
		
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
			$this->addJoinObject($join, 'DealFeedThreadRelatedById');
		}
		
		return $this;
	}

	/**
	 * Use the DealFeedThreadRelatedById relation DealFeedThread object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedThreadQuery A secondary query class using the current class as primary query
	 */
	public function useDealFeedThreadRelatedByIdQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinDealFeedThreadRelatedById($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'DealFeedThreadRelatedById', 'DealFeedThreadQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     DealFeedThread $dealFeedThread Object to remove from the list of results
	 *
	 * @return    DealFeedThreadQuery The current query, for fluid interface
	 */
	public function prune($dealFeedThread = null)
	{
		if ($dealFeedThread) {
			$this->addUsingAlias(DealFeedThreadPeer::ID, $dealFeedThread->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseDealFeedThreadQuery
