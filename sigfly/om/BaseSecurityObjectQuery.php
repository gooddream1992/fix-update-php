<?php


/**
 * Base class that represents a query for the 'security_object' table.
 *
 * 
 *
 * @method     SecurityObjectQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     SecurityObjectQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     SecurityObjectQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     SecurityObjectQuery orderByIsDisplayed($order = Criteria::ASC) Order by the is_displayed column
 *
 * @method     SecurityObjectQuery groupById() Group by the id column
 * @method     SecurityObjectQuery groupByName() Group by the name column
 * @method     SecurityObjectQuery groupByDescription() Group by the description column
 * @method     SecurityObjectQuery groupByIsDisplayed() Group by the is_displayed column
 *
 * @method     SecurityObjectQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     SecurityObjectQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     SecurityObjectQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     SecurityObjectQuery leftJoinUserSecurityObject($relationAlias = null) Adds a LEFT JOIN clause to the query using the UserSecurityObject relation
 * @method     SecurityObjectQuery rightJoinUserSecurityObject($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UserSecurityObject relation
 * @method     SecurityObjectQuery innerJoinUserSecurityObject($relationAlias = null) Adds a INNER JOIN clause to the query using the UserSecurityObject relation
 *
 * @method     SecurityObject findOne(PropelPDO $con = null) Return the first SecurityObject matching the query
 * @method     SecurityObject findOneOrCreate(PropelPDO $con = null) Return the first SecurityObject matching the query, or a new SecurityObject object populated from the query conditions when no match is found
 *
 * @method     SecurityObject findOneById(int $id) Return the first SecurityObject filtered by the id column
 * @method     SecurityObject findOneByName(string $name) Return the first SecurityObject filtered by the name column
 * @method     SecurityObject findOneByDescription(string $description) Return the first SecurityObject filtered by the description column
 * @method     SecurityObject findOneByIsDisplayed(int $is_displayed) Return the first SecurityObject filtered by the is_displayed column
 *
 * @method     array findById(int $id) Return SecurityObject objects filtered by the id column
 * @method     array findByName(string $name) Return SecurityObject objects filtered by the name column
 * @method     array findByDescription(string $description) Return SecurityObject objects filtered by the description column
 * @method     array findByIsDisplayed(int $is_displayed) Return SecurityObject objects filtered by the is_displayed column
 *
 * @package    propel.generator.sigfly.om
 */
abstract class BaseSecurityObjectQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseSecurityObjectQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'sigfly', $modelName = 'SecurityObject', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new SecurityObjectQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    SecurityObjectQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof SecurityObjectQuery) {
			return $criteria;
		}
		$query = new SecurityObjectQuery();
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
	 * @return    SecurityObject|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = SecurityObjectPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    SecurityObjectQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(SecurityObjectPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    SecurityObjectQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(SecurityObjectPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SecurityObjectQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(SecurityObjectPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the name column
	 * 
	 * @param     string $name The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SecurityObjectQuery The current query, for fluid interface
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
		return $this->addUsingAlias(SecurityObjectPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the description column
	 * 
	 * @param     string $description The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SecurityObjectQuery The current query, for fluid interface
	 */
	public function filterByDescription($description = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($description)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $description)) {
				$description = str_replace('*', '%', $description);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SecurityObjectPeer::DESCRIPTION, $description, $comparison);
	}

	/**
	 * Filter the query on the is_displayed column
	 * 
	 * @param     int|array $isDisplayed The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SecurityObjectQuery The current query, for fluid interface
	 */
	public function filterByIsDisplayed($isDisplayed = null, $comparison = null)
	{
		if (is_array($isDisplayed)) {
			$useMinMax = false;
			if (isset($isDisplayed['min'])) {
				$this->addUsingAlias(SecurityObjectPeer::IS_DISPLAYED, $isDisplayed['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isDisplayed['max'])) {
				$this->addUsingAlias(SecurityObjectPeer::IS_DISPLAYED, $isDisplayed['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SecurityObjectPeer::IS_DISPLAYED, $isDisplayed, $comparison);
	}

	/**
	 * Filter the query by a related UserSecurityObject object
	 *
	 * @param     UserSecurityObject $userSecurityObject  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SecurityObjectQuery The current query, for fluid interface
	 */
	public function filterByUserSecurityObject($userSecurityObject, $comparison = null)
	{
		return $this
			->addUsingAlias(SecurityObjectPeer::ID, $userSecurityObject->getSecurityObjectId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the UserSecurityObject relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    SecurityObjectQuery The current query, for fluid interface
	 */
	public function joinUserSecurityObject($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('UserSecurityObject');
		
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
			$this->addJoinObject($join, 'UserSecurityObject');
		}
		
		return $this;
	}

	/**
	 * Use the UserSecurityObject relation UserSecurityObject object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserSecurityObjectQuery A secondary query class using the current class as primary query
	 */
	public function useUserSecurityObjectQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinUserSecurityObject($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'UserSecurityObject', 'UserSecurityObjectQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     SecurityObject $securityObject Object to remove from the list of results
	 *
	 * @return    SecurityObjectQuery The current query, for fluid interface
	 */
	public function prune($securityObject = null)
	{
		if ($securityObject) {
			$this->addUsingAlias(SecurityObjectPeer::ID, $securityObject->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseSecurityObjectQuery
