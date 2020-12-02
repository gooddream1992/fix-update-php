<?php


/**
 * Base class that represents a query for the 'deal_thread' table.
 *
 * 
 *
 * @method     DealThreadQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     DealThreadQuery orderByDealId($order = Criteria::ASC) Order by the deal_id column
 * @method     DealThreadQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     DealThreadQuery orderByContent($order = Criteria::ASC) Order by the content column
 * @method     DealThreadQuery orderByDateCreated($order = Criteria::ASC) Order by the date_created column
 * @method     DealThreadQuery orderByIsActive($order = Criteria::ASC) Order by the is_active column
 * @method     DealThreadQuery orderByParentId($order = Criteria::ASC) Order by the parent_id column
 *
 * @method     DealThreadQuery groupById() Group by the id column
 * @method     DealThreadQuery groupByDealId() Group by the deal_id column
 * @method     DealThreadQuery groupByUserId() Group by the user_id column
 * @method     DealThreadQuery groupByContent() Group by the content column
 * @method     DealThreadQuery groupByDateCreated() Group by the date_created column
 * @method     DealThreadQuery groupByIsActive() Group by the is_active column
 * @method     DealThreadQuery groupByParentId() Group by the parent_id column
 *
 * @method     DealThreadQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     DealThreadQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     DealThreadQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     DealThreadQuery leftJoinDeal($relationAlias = null) Adds a LEFT JOIN clause to the query using the Deal relation
 * @method     DealThreadQuery rightJoinDeal($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Deal relation
 * @method     DealThreadQuery innerJoinDeal($relationAlias = null) Adds a INNER JOIN clause to the query using the Deal relation
 *
 * @method     DealThreadQuery leftJoinUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the User relation
 * @method     DealThreadQuery rightJoinUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the User relation
 * @method     DealThreadQuery innerJoinUser($relationAlias = null) Adds a INNER JOIN clause to the query using the User relation
 *
 * @method     DealThreadQuery leftJoinDealThreadRelatedByParentId($relationAlias = null) Adds a LEFT JOIN clause to the query using the DealThreadRelatedByParentId relation
 * @method     DealThreadQuery rightJoinDealThreadRelatedByParentId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DealThreadRelatedByParentId relation
 * @method     DealThreadQuery innerJoinDealThreadRelatedByParentId($relationAlias = null) Adds a INNER JOIN clause to the query using the DealThreadRelatedByParentId relation
 *
 * @method     DealThreadQuery leftJoinDealThreadRelatedById($relationAlias = null) Adds a LEFT JOIN clause to the query using the DealThreadRelatedById relation
 * @method     DealThreadQuery rightJoinDealThreadRelatedById($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DealThreadRelatedById relation
 * @method     DealThreadQuery innerJoinDealThreadRelatedById($relationAlias = null) Adds a INNER JOIN clause to the query using the DealThreadRelatedById relation
 *
 * @method     DealThread findOne(PropelPDO $con = null) Return the first DealThread matching the query
 * @method     DealThread findOneOrCreate(PropelPDO $con = null) Return the first DealThread matching the query, or a new DealThread object populated from the query conditions when no match is found
 *
 * @method     DealThread findOneById(int $id) Return the first DealThread filtered by the id column
 * @method     DealThread findOneByDealId(int $deal_id) Return the first DealThread filtered by the deal_id column
 * @method     DealThread findOneByUserId(int $user_id) Return the first DealThread filtered by the user_id column
 * @method     DealThread findOneByContent(string $content) Return the first DealThread filtered by the content column
 * @method     DealThread findOneByDateCreated(string $date_created) Return the first DealThread filtered by the date_created column
 * @method     DealThread findOneByIsActive(int $is_active) Return the first DealThread filtered by the is_active column
 * @method     DealThread findOneByParentId(int $parent_id) Return the first DealThread filtered by the parent_id column
 *
 * @method     array findById(int $id) Return DealThread objects filtered by the id column
 * @method     array findByDealId(int $deal_id) Return DealThread objects filtered by the deal_id column
 * @method     array findByUserId(int $user_id) Return DealThread objects filtered by the user_id column
 * @method     array findByContent(string $content) Return DealThread objects filtered by the content column
 * @method     array findByDateCreated(string $date_created) Return DealThread objects filtered by the date_created column
 * @method     array findByIsActive(int $is_active) Return DealThread objects filtered by the is_active column
 * @method     array findByParentId(int $parent_id) Return DealThread objects filtered by the parent_id column
 *
 * @package    propel.generator.komideals.om
 */
abstract class BaseDealThreadQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseDealThreadQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'komideals', $modelName = 'DealThread', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new DealThreadQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    DealThreadQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof DealThreadQuery) {
			return $criteria;
		}
		$query = new DealThreadQuery();
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
	 * @return    DealThread|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = DealThreadPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    DealThreadQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(DealThreadPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    DealThreadQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(DealThreadPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealThreadQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(DealThreadPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the deal_id column
	 * 
	 * @param     int|array $dealId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealThreadQuery The current query, for fluid interface
	 */
	public function filterByDealId($dealId = null, $comparison = null)
	{
		if (is_array($dealId)) {
			$useMinMax = false;
			if (isset($dealId['min'])) {
				$this->addUsingAlias(DealThreadPeer::DEAL_ID, $dealId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dealId['max'])) {
				$this->addUsingAlias(DealThreadPeer::DEAL_ID, $dealId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealThreadPeer::DEAL_ID, $dealId, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealThreadQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(DealThreadPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(DealThreadPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealThreadPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the content column
	 * 
	 * @param     string $content The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealThreadQuery The current query, for fluid interface
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
		return $this->addUsingAlias(DealThreadPeer::CONTENT, $content, $comparison);
	}

	/**
	 * Filter the query on the date_created column
	 * 
	 * @param     string|array $dateCreated The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealThreadQuery The current query, for fluid interface
	 */
	public function filterByDateCreated($dateCreated = null, $comparison = null)
	{
		if (is_array($dateCreated)) {
			$useMinMax = false;
			if (isset($dateCreated['min'])) {
				$this->addUsingAlias(DealThreadPeer::DATE_CREATED, $dateCreated['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateCreated['max'])) {
				$this->addUsingAlias(DealThreadPeer::DATE_CREATED, $dateCreated['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealThreadPeer::DATE_CREATED, $dateCreated, $comparison);
	}

	/**
	 * Filter the query on the is_active column
	 * 
	 * @param     int|array $isActive The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealThreadQuery The current query, for fluid interface
	 */
	public function filterByIsActive($isActive = null, $comparison = null)
	{
		if (is_array($isActive)) {
			$useMinMax = false;
			if (isset($isActive['min'])) {
				$this->addUsingAlias(DealThreadPeer::IS_ACTIVE, $isActive['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isActive['max'])) {
				$this->addUsingAlias(DealThreadPeer::IS_ACTIVE, $isActive['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealThreadPeer::IS_ACTIVE, $isActive, $comparison);
	}

	/**
	 * Filter the query on the parent_id column
	 * 
	 * @param     int|array $parentId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealThreadQuery The current query, for fluid interface
	 */
	public function filterByParentId($parentId = null, $comparison = null)
	{
		if (is_array($parentId)) {
			$useMinMax = false;
			if (isset($parentId['min'])) {
				$this->addUsingAlias(DealThreadPeer::PARENT_ID, $parentId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($parentId['max'])) {
				$this->addUsingAlias(DealThreadPeer::PARENT_ID, $parentId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealThreadPeer::PARENT_ID, $parentId, $comparison);
	}

	/**
	 * Filter the query by a related Deal object
	 *
	 * @param     Deal $deal  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealThreadQuery The current query, for fluid interface
	 */
	public function filterByDeal($deal, $comparison = null)
	{
		return $this
			->addUsingAlias(DealThreadPeer::DEAL_ID, $deal->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Deal relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealThreadQuery The current query, for fluid interface
	 */
	public function joinDeal($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Deal');
		
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
			$this->addJoinObject($join, 'Deal');
		}
		
		return $this;
	}

	/**
	 * Use the Deal relation Deal object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealQuery A secondary query class using the current class as primary query
	 */
	public function useDealQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinDeal($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Deal', 'DealQuery');
	}

	/**
	 * Filter the query by a related User object
	 *
	 * @param     User $user  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealThreadQuery The current query, for fluid interface
	 */
	public function filterByUser($user, $comparison = null)
	{
		return $this
			->addUsingAlias(DealThreadPeer::USER_ID, $user->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the User relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealThreadQuery The current query, for fluid interface
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
	 * Filter the query by a related DealThread object
	 *
	 * @param     DealThread $dealThread  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealThreadQuery The current query, for fluid interface
	 */
	public function filterByDealThreadRelatedByParentId($dealThread, $comparison = null)
	{
		return $this
			->addUsingAlias(DealThreadPeer::PARENT_ID, $dealThread->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the DealThreadRelatedByParentId relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealThreadQuery The current query, for fluid interface
	 */
	public function joinDealThreadRelatedByParentId($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('DealThreadRelatedByParentId');
		
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
			$this->addJoinObject($join, 'DealThreadRelatedByParentId');
		}
		
		return $this;
	}

	/**
	 * Use the DealThreadRelatedByParentId relation DealThread object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealThreadQuery A secondary query class using the current class as primary query
	 */
	public function useDealThreadRelatedByParentIdQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinDealThreadRelatedByParentId($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'DealThreadRelatedByParentId', 'DealThreadQuery');
	}

	/**
	 * Filter the query by a related DealThread object
	 *
	 * @param     DealThread $dealThread  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealThreadQuery The current query, for fluid interface
	 */
	public function filterByDealThreadRelatedById($dealThread, $comparison = null)
	{
		return $this
			->addUsingAlias(DealThreadPeer::ID, $dealThread->getParentId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the DealThreadRelatedById relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealThreadQuery The current query, for fluid interface
	 */
	public function joinDealThreadRelatedById($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('DealThreadRelatedById');
		
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
			$this->addJoinObject($join, 'DealThreadRelatedById');
		}
		
		return $this;
	}

	/**
	 * Use the DealThreadRelatedById relation DealThread object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealThreadQuery A secondary query class using the current class as primary query
	 */
	public function useDealThreadRelatedByIdQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinDealThreadRelatedById($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'DealThreadRelatedById', 'DealThreadQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     DealThread $dealThread Object to remove from the list of results
	 *
	 * @return    DealThreadQuery The current query, for fluid interface
	 */
	public function prune($dealThread = null)
	{
		if ($dealThread) {
			$this->addUsingAlias(DealThreadPeer::ID, $dealThread->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseDealThreadQuery
