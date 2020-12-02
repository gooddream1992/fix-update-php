<?php


/**
 * Base class that represents a query for the 'user_security_object' table.
 *
 * 
 *
 * @method     UserSecurityObjectQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     UserSecurityObjectQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     UserSecurityObjectQuery orderByAssignedByUserId($order = Criteria::ASC) Order by the assigned_by_user_id column
 * @method     UserSecurityObjectQuery orderBySecurityObjectId($order = Criteria::ASC) Order by the security_object_id column
 * @method     UserSecurityObjectQuery orderByDateCreated($order = Criteria::ASC) Order by the date_created column
 *
 * @method     UserSecurityObjectQuery groupById() Group by the id column
 * @method     UserSecurityObjectQuery groupByUserId() Group by the user_id column
 * @method     UserSecurityObjectQuery groupByAssignedByUserId() Group by the assigned_by_user_id column
 * @method     UserSecurityObjectQuery groupBySecurityObjectId() Group by the security_object_id column
 * @method     UserSecurityObjectQuery groupByDateCreated() Group by the date_created column
 *
 * @method     UserSecurityObjectQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     UserSecurityObjectQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     UserSecurityObjectQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     UserSecurityObjectQuery leftJoinUserRelatedByUserId($relationAlias = null) Adds a LEFT JOIN clause to the query using the UserRelatedByUserId relation
 * @method     UserSecurityObjectQuery rightJoinUserRelatedByUserId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UserRelatedByUserId relation
 * @method     UserSecurityObjectQuery innerJoinUserRelatedByUserId($relationAlias = null) Adds a INNER JOIN clause to the query using the UserRelatedByUserId relation
 *
 * @method     UserSecurityObjectQuery leftJoinUserRelatedByAssignedByUserId($relationAlias = null) Adds a LEFT JOIN clause to the query using the UserRelatedByAssignedByUserId relation
 * @method     UserSecurityObjectQuery rightJoinUserRelatedByAssignedByUserId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UserRelatedByAssignedByUserId relation
 * @method     UserSecurityObjectQuery innerJoinUserRelatedByAssignedByUserId($relationAlias = null) Adds a INNER JOIN clause to the query using the UserRelatedByAssignedByUserId relation
 *
 * @method     UserSecurityObjectQuery leftJoinSecurityObject($relationAlias = null) Adds a LEFT JOIN clause to the query using the SecurityObject relation
 * @method     UserSecurityObjectQuery rightJoinSecurityObject($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SecurityObject relation
 * @method     UserSecurityObjectQuery innerJoinSecurityObject($relationAlias = null) Adds a INNER JOIN clause to the query using the SecurityObject relation
 *
 * @method     UserSecurityObject findOne(PropelPDO $con = null) Return the first UserSecurityObject matching the query
 * @method     UserSecurityObject findOneOrCreate(PropelPDO $con = null) Return the first UserSecurityObject matching the query, or a new UserSecurityObject object populated from the query conditions when no match is found
 *
 * @method     UserSecurityObject findOneById(int $id) Return the first UserSecurityObject filtered by the id column
 * @method     UserSecurityObject findOneByUserId(int $user_id) Return the first UserSecurityObject filtered by the user_id column
 * @method     UserSecurityObject findOneByAssignedByUserId(int $assigned_by_user_id) Return the first UserSecurityObject filtered by the assigned_by_user_id column
 * @method     UserSecurityObject findOneBySecurityObjectId(int $security_object_id) Return the first UserSecurityObject filtered by the security_object_id column
 * @method     UserSecurityObject findOneByDateCreated(string $date_created) Return the first UserSecurityObject filtered by the date_created column
 *
 * @method     array findById(int $id) Return UserSecurityObject objects filtered by the id column
 * @method     array findByUserId(int $user_id) Return UserSecurityObject objects filtered by the user_id column
 * @method     array findByAssignedByUserId(int $assigned_by_user_id) Return UserSecurityObject objects filtered by the assigned_by_user_id column
 * @method     array findBySecurityObjectId(int $security_object_id) Return UserSecurityObject objects filtered by the security_object_id column
 * @method     array findByDateCreated(string $date_created) Return UserSecurityObject objects filtered by the date_created column
 *
 * @package    propel.generator.komideals.om
 */
abstract class BaseUserSecurityObjectQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseUserSecurityObjectQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'komideals', $modelName = 'UserSecurityObject', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new UserSecurityObjectQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    UserSecurityObjectQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof UserSecurityObjectQuery) {
			return $criteria;
		}
		$query = new UserSecurityObjectQuery();
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
	 * @return    UserSecurityObject|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = UserSecurityObjectPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    UserSecurityObjectQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(UserSecurityObjectPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    UserSecurityObjectQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(UserSecurityObjectPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserSecurityObjectQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(UserSecurityObjectPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserSecurityObjectQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(UserSecurityObjectPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(UserSecurityObjectPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserSecurityObjectPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the assigned_by_user_id column
	 * 
	 * @param     int|array $assignedByUserId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserSecurityObjectQuery The current query, for fluid interface
	 */
	public function filterByAssignedByUserId($assignedByUserId = null, $comparison = null)
	{
		if (is_array($assignedByUserId)) {
			$useMinMax = false;
			if (isset($assignedByUserId['min'])) {
				$this->addUsingAlias(UserSecurityObjectPeer::ASSIGNED_BY_USER_ID, $assignedByUserId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($assignedByUserId['max'])) {
				$this->addUsingAlias(UserSecurityObjectPeer::ASSIGNED_BY_USER_ID, $assignedByUserId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserSecurityObjectPeer::ASSIGNED_BY_USER_ID, $assignedByUserId, $comparison);
	}

	/**
	 * Filter the query on the security_object_id column
	 * 
	 * @param     int|array $securityObjectId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserSecurityObjectQuery The current query, for fluid interface
	 */
	public function filterBySecurityObjectId($securityObjectId = null, $comparison = null)
	{
		if (is_array($securityObjectId)) {
			$useMinMax = false;
			if (isset($securityObjectId['min'])) {
				$this->addUsingAlias(UserSecurityObjectPeer::SECURITY_OBJECT_ID, $securityObjectId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($securityObjectId['max'])) {
				$this->addUsingAlias(UserSecurityObjectPeer::SECURITY_OBJECT_ID, $securityObjectId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserSecurityObjectPeer::SECURITY_OBJECT_ID, $securityObjectId, $comparison);
	}

	/**
	 * Filter the query on the date_created column
	 * 
	 * @param     string|array $dateCreated The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserSecurityObjectQuery The current query, for fluid interface
	 */
	public function filterByDateCreated($dateCreated = null, $comparison = null)
	{
		if (is_array($dateCreated)) {
			$useMinMax = false;
			if (isset($dateCreated['min'])) {
				$this->addUsingAlias(UserSecurityObjectPeer::DATE_CREATED, $dateCreated['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateCreated['max'])) {
				$this->addUsingAlias(UserSecurityObjectPeer::DATE_CREATED, $dateCreated['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserSecurityObjectPeer::DATE_CREATED, $dateCreated, $comparison);
	}

	/**
	 * Filter the query by a related User object
	 *
	 * @param     User $user  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserSecurityObjectQuery The current query, for fluid interface
	 */
	public function filterByUserRelatedByUserId($user, $comparison = null)
	{
		return $this
			->addUsingAlias(UserSecurityObjectPeer::USER_ID, $user->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the UserRelatedByUserId relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserSecurityObjectQuery The current query, for fluid interface
	 */
	public function joinUserRelatedByUserId($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('UserRelatedByUserId');
		
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
			$this->addJoinObject($join, 'UserRelatedByUserId');
		}
		
		return $this;
	}

	/**
	 * Use the UserRelatedByUserId relation User object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserQuery A secondary query class using the current class as primary query
	 */
	public function useUserRelatedByUserIdQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinUserRelatedByUserId($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'UserRelatedByUserId', 'UserQuery');
	}

	/**
	 * Filter the query by a related User object
	 *
	 * @param     User $user  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserSecurityObjectQuery The current query, for fluid interface
	 */
	public function filterByUserRelatedByAssignedByUserId($user, $comparison = null)
	{
		return $this
			->addUsingAlias(UserSecurityObjectPeer::ASSIGNED_BY_USER_ID, $user->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the UserRelatedByAssignedByUserId relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserSecurityObjectQuery The current query, for fluid interface
	 */
	public function joinUserRelatedByAssignedByUserId($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('UserRelatedByAssignedByUserId');
		
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
			$this->addJoinObject($join, 'UserRelatedByAssignedByUserId');
		}
		
		return $this;
	}

	/**
	 * Use the UserRelatedByAssignedByUserId relation User object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserQuery A secondary query class using the current class as primary query
	 */
	public function useUserRelatedByAssignedByUserIdQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinUserRelatedByAssignedByUserId($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'UserRelatedByAssignedByUserId', 'UserQuery');
	}

	/**
	 * Filter the query by a related SecurityObject object
	 *
	 * @param     SecurityObject $securityObject  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserSecurityObjectQuery The current query, for fluid interface
	 */
	public function filterBySecurityObject($securityObject, $comparison = null)
	{
		return $this
			->addUsingAlias(UserSecurityObjectPeer::SECURITY_OBJECT_ID, $securityObject->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the SecurityObject relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserSecurityObjectQuery The current query, for fluid interface
	 */
	public function joinSecurityObject($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('SecurityObject');
		
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
			$this->addJoinObject($join, 'SecurityObject');
		}
		
		return $this;
	}

	/**
	 * Use the SecurityObject relation SecurityObject object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    SecurityObjectQuery A secondary query class using the current class as primary query
	 */
	public function useSecurityObjectQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinSecurityObject($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'SecurityObject', 'SecurityObjectQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     UserSecurityObject $userSecurityObject Object to remove from the list of results
	 *
	 * @return    UserSecurityObjectQuery The current query, for fluid interface
	 */
	public function prune($userSecurityObject = null)
	{
		if ($userSecurityObject) {
			$this->addUsingAlias(UserSecurityObjectPeer::ID, $userSecurityObject->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseUserSecurityObjectQuery
