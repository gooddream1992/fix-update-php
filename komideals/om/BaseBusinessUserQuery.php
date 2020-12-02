<?php


/**
 * Base class that represents a query for the 'business_user' table.
 *
 * 
 *
 * @method     BusinessUserQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     BusinessUserQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     BusinessUserQuery orderByDateCreated($order = Criteria::ASC) Order by the date_created column
 * @method     BusinessUserQuery orderByIsActive($order = Criteria::ASC) Order by the is_active column
 * @method     BusinessUserQuery orderByIsAdmin($order = Criteria::ASC) Order by the is_admin column
 * @method     BusinessUserQuery orderByBusinessId($order = Criteria::ASC) Order by the business_id column
 *
 * @method     BusinessUserQuery groupById() Group by the id column
 * @method     BusinessUserQuery groupByUserId() Group by the user_id column
 * @method     BusinessUserQuery groupByDateCreated() Group by the date_created column
 * @method     BusinessUserQuery groupByIsActive() Group by the is_active column
 * @method     BusinessUserQuery groupByIsAdmin() Group by the is_admin column
 * @method     BusinessUserQuery groupByBusinessId() Group by the business_id column
 *
 * @method     BusinessUserQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     BusinessUserQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     BusinessUserQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     BusinessUserQuery leftJoinBusiness($relationAlias = null) Adds a LEFT JOIN clause to the query using the Business relation
 * @method     BusinessUserQuery rightJoinBusiness($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Business relation
 * @method     BusinessUserQuery innerJoinBusiness($relationAlias = null) Adds a INNER JOIN clause to the query using the Business relation
 *
 * @method     BusinessUserQuery leftJoinUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the User relation
 * @method     BusinessUserQuery rightJoinUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the User relation
 * @method     BusinessUserQuery innerJoinUser($relationAlias = null) Adds a INNER JOIN clause to the query using the User relation
 *
 * @method     BusinessUser findOne(PropelPDO $con = null) Return the first BusinessUser matching the query
 * @method     BusinessUser findOneOrCreate(PropelPDO $con = null) Return the first BusinessUser matching the query, or a new BusinessUser object populated from the query conditions when no match is found
 *
 * @method     BusinessUser findOneById(int $id) Return the first BusinessUser filtered by the id column
 * @method     BusinessUser findOneByUserId(int $user_id) Return the first BusinessUser filtered by the user_id column
 * @method     BusinessUser findOneByDateCreated(string $date_created) Return the first BusinessUser filtered by the date_created column
 * @method     BusinessUser findOneByIsActive(int $is_active) Return the first BusinessUser filtered by the is_active column
 * @method     BusinessUser findOneByIsAdmin(int $is_admin) Return the first BusinessUser filtered by the is_admin column
 * @method     BusinessUser findOneByBusinessId(int $business_id) Return the first BusinessUser filtered by the business_id column
 *
 * @method     array findById(int $id) Return BusinessUser objects filtered by the id column
 * @method     array findByUserId(int $user_id) Return BusinessUser objects filtered by the user_id column
 * @method     array findByDateCreated(string $date_created) Return BusinessUser objects filtered by the date_created column
 * @method     array findByIsActive(int $is_active) Return BusinessUser objects filtered by the is_active column
 * @method     array findByIsAdmin(int $is_admin) Return BusinessUser objects filtered by the is_admin column
 * @method     array findByBusinessId(int $business_id) Return BusinessUser objects filtered by the business_id column
 *
 * @package    propel.generator.komideals.om
 */
abstract class BaseBusinessUserQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseBusinessUserQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'komideals', $modelName = 'BusinessUser', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new BusinessUserQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    BusinessUserQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof BusinessUserQuery) {
			return $criteria;
		}
		$query = new BusinessUserQuery();
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
	 * @return    BusinessUser|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = BusinessUserPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    BusinessUserQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(BusinessUserPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    BusinessUserQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(BusinessUserPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BusinessUserQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(BusinessUserPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BusinessUserQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(BusinessUserPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(BusinessUserPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BusinessUserPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the date_created column
	 * 
	 * @param     string|array $dateCreated The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BusinessUserQuery The current query, for fluid interface
	 */
	public function filterByDateCreated($dateCreated = null, $comparison = null)
	{
		if (is_array($dateCreated)) {
			$useMinMax = false;
			if (isset($dateCreated['min'])) {
				$this->addUsingAlias(BusinessUserPeer::DATE_CREATED, $dateCreated['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateCreated['max'])) {
				$this->addUsingAlias(BusinessUserPeer::DATE_CREATED, $dateCreated['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BusinessUserPeer::DATE_CREATED, $dateCreated, $comparison);
	}

	/**
	 * Filter the query on the is_active column
	 * 
	 * @param     int|array $isActive The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BusinessUserQuery The current query, for fluid interface
	 */
	public function filterByIsActive($isActive = null, $comparison = null)
	{
		if (is_array($isActive)) {
			$useMinMax = false;
			if (isset($isActive['min'])) {
				$this->addUsingAlias(BusinessUserPeer::IS_ACTIVE, $isActive['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isActive['max'])) {
				$this->addUsingAlias(BusinessUserPeer::IS_ACTIVE, $isActive['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BusinessUserPeer::IS_ACTIVE, $isActive, $comparison);
	}

	/**
	 * Filter the query on the is_admin column
	 * 
	 * @param     int|array $isAdmin The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BusinessUserQuery The current query, for fluid interface
	 */
	public function filterByIsAdmin($isAdmin = null, $comparison = null)
	{
		if (is_array($isAdmin)) {
			$useMinMax = false;
			if (isset($isAdmin['min'])) {
				$this->addUsingAlias(BusinessUserPeer::IS_ADMIN, $isAdmin['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isAdmin['max'])) {
				$this->addUsingAlias(BusinessUserPeer::IS_ADMIN, $isAdmin['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BusinessUserPeer::IS_ADMIN, $isAdmin, $comparison);
	}

	/**
	 * Filter the query on the business_id column
	 * 
	 * @param     int|array $businessId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BusinessUserQuery The current query, for fluid interface
	 */
	public function filterByBusinessId($businessId = null, $comparison = null)
	{
		if (is_array($businessId)) {
			$useMinMax = false;
			if (isset($businessId['min'])) {
				$this->addUsingAlias(BusinessUserPeer::BUSINESS_ID, $businessId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($businessId['max'])) {
				$this->addUsingAlias(BusinessUserPeer::BUSINESS_ID, $businessId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BusinessUserPeer::BUSINESS_ID, $businessId, $comparison);
	}

	/**
	 * Filter the query by a related Business object
	 *
	 * @param     Business $business  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BusinessUserQuery The current query, for fluid interface
	 */
	public function filterByBusiness($business, $comparison = null)
	{
		return $this
			->addUsingAlias(BusinessUserPeer::BUSINESS_ID, $business->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Business relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    BusinessUserQuery The current query, for fluid interface
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
	 * Filter the query by a related User object
	 *
	 * @param     User $user  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BusinessUserQuery The current query, for fluid interface
	 */
	public function filterByUser($user, $comparison = null)
	{
		return $this
			->addUsingAlias(BusinessUserPeer::USER_ID, $user->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the User relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    BusinessUserQuery The current query, for fluid interface
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
	 * Exclude object from result
	 *
	 * @param     BusinessUser $businessUser Object to remove from the list of results
	 *
	 * @return    BusinessUserQuery The current query, for fluid interface
	 */
	public function prune($businessUser = null)
	{
		if ($businessUser) {
			$this->addUsingAlias(BusinessUserPeer::ID, $businessUser->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseBusinessUserQuery
