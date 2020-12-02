<?php


/**
 * Base class that represents a query for the 'credit' table.
 *
 * 
 *
 * @method     CreditQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     CreditQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     CreditQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     CreditQuery orderByDateCreated($order = Criteria::ASC) Order by the date_created column
 * @method     CreditQuery orderByDateExpires($order = Criteria::ASC) Order by the date_expires column
 * @method     CreditQuery orderByIsActive($order = Criteria::ASC) Order by the is_active column
 * @method     CreditQuery orderByIsUsed($order = Criteria::ASC) Order by the is_used column
 * @method     CreditQuery orderByAmount($order = Criteria::ASC) Order by the amount column
 * @method     CreditQuery orderByUsedReferenceTable($order = Criteria::ASC) Order by the used_reference_table column
 * @method     CreditQuery orderByUsedReferenceId($order = Criteria::ASC) Order by the used_reference_id column
 *
 * @method     CreditQuery groupById() Group by the id column
 * @method     CreditQuery groupByUserId() Group by the user_id column
 * @method     CreditQuery groupByDescription() Group by the description column
 * @method     CreditQuery groupByDateCreated() Group by the date_created column
 * @method     CreditQuery groupByDateExpires() Group by the date_expires column
 * @method     CreditQuery groupByIsActive() Group by the is_active column
 * @method     CreditQuery groupByIsUsed() Group by the is_used column
 * @method     CreditQuery groupByAmount() Group by the amount column
 * @method     CreditQuery groupByUsedReferenceTable() Group by the used_reference_table column
 * @method     CreditQuery groupByUsedReferenceId() Group by the used_reference_id column
 *
 * @method     CreditQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CreditQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CreditQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CreditQuery leftJoinUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the User relation
 * @method     CreditQuery rightJoinUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the User relation
 * @method     CreditQuery innerJoinUser($relationAlias = null) Adds a INNER JOIN clause to the query using the User relation
 *
 * @method     CreditQuery leftJoinPurchaseOrderChange($relationAlias = null) Adds a LEFT JOIN clause to the query using the PurchaseOrderChange relation
 * @method     CreditQuery rightJoinPurchaseOrderChange($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PurchaseOrderChange relation
 * @method     CreditQuery innerJoinPurchaseOrderChange($relationAlias = null) Adds a INNER JOIN clause to the query using the PurchaseOrderChange relation
 *
 * @method     Credit findOne(PropelPDO $con = null) Return the first Credit matching the query
 * @method     Credit findOneOrCreate(PropelPDO $con = null) Return the first Credit matching the query, or a new Credit object populated from the query conditions when no match is found
 *
 * @method     Credit findOneById(int $id) Return the first Credit filtered by the id column
 * @method     Credit findOneByUserId(int $user_id) Return the first Credit filtered by the user_id column
 * @method     Credit findOneByDescription(string $description) Return the first Credit filtered by the description column
 * @method     Credit findOneByDateCreated(string $date_created) Return the first Credit filtered by the date_created column
 * @method     Credit findOneByDateExpires(string $date_expires) Return the first Credit filtered by the date_expires column
 * @method     Credit findOneByIsActive(int $is_active) Return the first Credit filtered by the is_active column
 * @method     Credit findOneByIsUsed(int $is_used) Return the first Credit filtered by the is_used column
 * @method     Credit findOneByAmount(double $amount) Return the first Credit filtered by the amount column
 * @method     Credit findOneByUsedReferenceTable(string $used_reference_table) Return the first Credit filtered by the used_reference_table column
 * @method     Credit findOneByUsedReferenceId(int $used_reference_id) Return the first Credit filtered by the used_reference_id column
 *
 * @method     array findById(int $id) Return Credit objects filtered by the id column
 * @method     array findByUserId(int $user_id) Return Credit objects filtered by the user_id column
 * @method     array findByDescription(string $description) Return Credit objects filtered by the description column
 * @method     array findByDateCreated(string $date_created) Return Credit objects filtered by the date_created column
 * @method     array findByDateExpires(string $date_expires) Return Credit objects filtered by the date_expires column
 * @method     array findByIsActive(int $is_active) Return Credit objects filtered by the is_active column
 * @method     array findByIsUsed(int $is_used) Return Credit objects filtered by the is_used column
 * @method     array findByAmount(double $amount) Return Credit objects filtered by the amount column
 * @method     array findByUsedReferenceTable(string $used_reference_table) Return Credit objects filtered by the used_reference_table column
 * @method     array findByUsedReferenceId(int $used_reference_id) Return Credit objects filtered by the used_reference_id column
 *
 * @package    propel.generator.sigfly.om
 */
abstract class BaseCreditQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseCreditQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'sigfly', $modelName = 'Credit', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new CreditQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    CreditQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof CreditQuery) {
			return $criteria;
		}
		$query = new CreditQuery();
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
	 * @return    Credit|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = CreditPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    CreditQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(CreditPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    CreditQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(CreditPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CreditQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(CreditPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CreditQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(CreditPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(CreditPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CreditPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the description column
	 * 
	 * @param     string $description The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CreditQuery The current query, for fluid interface
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
		return $this->addUsingAlias(CreditPeer::DESCRIPTION, $description, $comparison);
	}

	/**
	 * Filter the query on the date_created column
	 * 
	 * @param     string|array $dateCreated The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CreditQuery The current query, for fluid interface
	 */
	public function filterByDateCreated($dateCreated = null, $comparison = null)
	{
		if (is_array($dateCreated)) {
			$useMinMax = false;
			if (isset($dateCreated['min'])) {
				$this->addUsingAlias(CreditPeer::DATE_CREATED, $dateCreated['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateCreated['max'])) {
				$this->addUsingAlias(CreditPeer::DATE_CREATED, $dateCreated['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CreditPeer::DATE_CREATED, $dateCreated, $comparison);
	}

	/**
	 * Filter the query on the date_expires column
	 * 
	 * @param     string|array $dateExpires The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CreditQuery The current query, for fluid interface
	 */
	public function filterByDateExpires($dateExpires = null, $comparison = null)
	{
		if (is_array($dateExpires)) {
			$useMinMax = false;
			if (isset($dateExpires['min'])) {
				$this->addUsingAlias(CreditPeer::DATE_EXPIRES, $dateExpires['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateExpires['max'])) {
				$this->addUsingAlias(CreditPeer::DATE_EXPIRES, $dateExpires['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CreditPeer::DATE_EXPIRES, $dateExpires, $comparison);
	}

	/**
	 * Filter the query on the is_active column
	 * 
	 * @param     int|array $isActive The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CreditQuery The current query, for fluid interface
	 */
	public function filterByIsActive($isActive = null, $comparison = null)
	{
		if (is_array($isActive)) {
			$useMinMax = false;
			if (isset($isActive['min'])) {
				$this->addUsingAlias(CreditPeer::IS_ACTIVE, $isActive['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isActive['max'])) {
				$this->addUsingAlias(CreditPeer::IS_ACTIVE, $isActive['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CreditPeer::IS_ACTIVE, $isActive, $comparison);
	}

	/**
	 * Filter the query on the is_used column
	 * 
	 * @param     int|array $isUsed The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CreditQuery The current query, for fluid interface
	 */
	public function filterByIsUsed($isUsed = null, $comparison = null)
	{
		if (is_array($isUsed)) {
			$useMinMax = false;
			if (isset($isUsed['min'])) {
				$this->addUsingAlias(CreditPeer::IS_USED, $isUsed['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isUsed['max'])) {
				$this->addUsingAlias(CreditPeer::IS_USED, $isUsed['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CreditPeer::IS_USED, $isUsed, $comparison);
	}

	/**
	 * Filter the query on the amount column
	 * 
	 * @param     double|array $amount The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CreditQuery The current query, for fluid interface
	 */
	public function filterByAmount($amount = null, $comparison = null)
	{
		if (is_array($amount)) {
			$useMinMax = false;
			if (isset($amount['min'])) {
				$this->addUsingAlias(CreditPeer::AMOUNT, $amount['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($amount['max'])) {
				$this->addUsingAlias(CreditPeer::AMOUNT, $amount['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CreditPeer::AMOUNT, $amount, $comparison);
	}

	/**
	 * Filter the query on the used_reference_table column
	 * 
	 * @param     string $usedReferenceTable The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CreditQuery The current query, for fluid interface
	 */
	public function filterByUsedReferenceTable($usedReferenceTable = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($usedReferenceTable)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $usedReferenceTable)) {
				$usedReferenceTable = str_replace('*', '%', $usedReferenceTable);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CreditPeer::USED_REFERENCE_TABLE, $usedReferenceTable, $comparison);
	}

	/**
	 * Filter the query on the used_reference_id column
	 * 
	 * @param     int|array $usedReferenceId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CreditQuery The current query, for fluid interface
	 */
	public function filterByUsedReferenceId($usedReferenceId = null, $comparison = null)
	{
		if (is_array($usedReferenceId)) {
			$useMinMax = false;
			if (isset($usedReferenceId['min'])) {
				$this->addUsingAlias(CreditPeer::USED_REFERENCE_ID, $usedReferenceId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($usedReferenceId['max'])) {
				$this->addUsingAlias(CreditPeer::USED_REFERENCE_ID, $usedReferenceId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CreditPeer::USED_REFERENCE_ID, $usedReferenceId, $comparison);
	}

	/**
	 * Filter the query by a related User object
	 *
	 * @param     User $user  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CreditQuery The current query, for fluid interface
	 */
	public function filterByUser($user, $comparison = null)
	{
		return $this
			->addUsingAlias(CreditPeer::USER_ID, $user->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the User relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CreditQuery The current query, for fluid interface
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
	 * Filter the query by a related PurchaseOrderChange object
	 *
	 * @param     PurchaseOrderChange $purchaseOrderChange  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CreditQuery The current query, for fluid interface
	 */
	public function filterByPurchaseOrderChange($purchaseOrderChange, $comparison = null)
	{
		return $this
			->addUsingAlias(CreditPeer::ID, $purchaseOrderChange->getCreditId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the PurchaseOrderChange relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CreditQuery The current query, for fluid interface
	 */
	public function joinPurchaseOrderChange($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('PurchaseOrderChange');
		
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
			$this->addJoinObject($join, 'PurchaseOrderChange');
		}
		
		return $this;
	}

	/**
	 * Use the PurchaseOrderChange relation PurchaseOrderChange object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PurchaseOrderChangeQuery A secondary query class using the current class as primary query
	 */
	public function usePurchaseOrderChangeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinPurchaseOrderChange($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'PurchaseOrderChange', 'PurchaseOrderChangeQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Credit $credit Object to remove from the list of results
	 *
	 * @return    CreditQuery The current query, for fluid interface
	 */
	public function prune($credit = null)
	{
		if ($credit) {
			$this->addUsingAlias(CreditPeer::ID, $credit->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseCreditQuery
