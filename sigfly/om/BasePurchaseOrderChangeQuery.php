<?php


/**
 * Base class that represents a query for the 'purchase_order_change' table.
 *
 * 
 *
 * @method     PurchaseOrderChangeQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     PurchaseOrderChangeQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     PurchaseOrderChangeQuery orderByDateCreated($order = Criteria::ASC) Order by the date_created column
 * @method     PurchaseOrderChangeQuery orderByIsActive($order = Criteria::ASC) Order by the is_active column
 * @method     PurchaseOrderChangeQuery orderByPurchaseOrderId($order = Criteria::ASC) Order by the purchase_order_id column
 * @method     PurchaseOrderChangeQuery orderByCreditId($order = Criteria::ASC) Order by the credit_id column
 *
 * @method     PurchaseOrderChangeQuery groupById() Group by the id column
 * @method     PurchaseOrderChangeQuery groupByDescription() Group by the description column
 * @method     PurchaseOrderChangeQuery groupByDateCreated() Group by the date_created column
 * @method     PurchaseOrderChangeQuery groupByIsActive() Group by the is_active column
 * @method     PurchaseOrderChangeQuery groupByPurchaseOrderId() Group by the purchase_order_id column
 * @method     PurchaseOrderChangeQuery groupByCreditId() Group by the credit_id column
 *
 * @method     PurchaseOrderChangeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PurchaseOrderChangeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PurchaseOrderChangeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     PurchaseOrderChangeQuery leftJoinCredit($relationAlias = null) Adds a LEFT JOIN clause to the query using the Credit relation
 * @method     PurchaseOrderChangeQuery rightJoinCredit($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Credit relation
 * @method     PurchaseOrderChangeQuery innerJoinCredit($relationAlias = null) Adds a INNER JOIN clause to the query using the Credit relation
 *
 * @method     PurchaseOrderChangeQuery leftJoinPurchaseOrder($relationAlias = null) Adds a LEFT JOIN clause to the query using the PurchaseOrder relation
 * @method     PurchaseOrderChangeQuery rightJoinPurchaseOrder($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PurchaseOrder relation
 * @method     PurchaseOrderChangeQuery innerJoinPurchaseOrder($relationAlias = null) Adds a INNER JOIN clause to the query using the PurchaseOrder relation
 *
 * @method     PurchaseOrderChange findOne(PropelPDO $con = null) Return the first PurchaseOrderChange matching the query
 * @method     PurchaseOrderChange findOneOrCreate(PropelPDO $con = null) Return the first PurchaseOrderChange matching the query, or a new PurchaseOrderChange object populated from the query conditions when no match is found
 *
 * @method     PurchaseOrderChange findOneById(int $id) Return the first PurchaseOrderChange filtered by the id column
 * @method     PurchaseOrderChange findOneByDescription(string $description) Return the first PurchaseOrderChange filtered by the description column
 * @method     PurchaseOrderChange findOneByDateCreated(string $date_created) Return the first PurchaseOrderChange filtered by the date_created column
 * @method     PurchaseOrderChange findOneByIsActive(int $is_active) Return the first PurchaseOrderChange filtered by the is_active column
 * @method     PurchaseOrderChange findOneByPurchaseOrderId(int $purchase_order_id) Return the first PurchaseOrderChange filtered by the purchase_order_id column
 * @method     PurchaseOrderChange findOneByCreditId(int $credit_id) Return the first PurchaseOrderChange filtered by the credit_id column
 *
 * @method     array findById(int $id) Return PurchaseOrderChange objects filtered by the id column
 * @method     array findByDescription(string $description) Return PurchaseOrderChange objects filtered by the description column
 * @method     array findByDateCreated(string $date_created) Return PurchaseOrderChange objects filtered by the date_created column
 * @method     array findByIsActive(int $is_active) Return PurchaseOrderChange objects filtered by the is_active column
 * @method     array findByPurchaseOrderId(int $purchase_order_id) Return PurchaseOrderChange objects filtered by the purchase_order_id column
 * @method     array findByCreditId(int $credit_id) Return PurchaseOrderChange objects filtered by the credit_id column
 *
 * @package    propel.generator.sigfly.om
 */
abstract class BasePurchaseOrderChangeQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BasePurchaseOrderChangeQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'sigfly', $modelName = 'PurchaseOrderChange', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new PurchaseOrderChangeQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    PurchaseOrderChangeQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof PurchaseOrderChangeQuery) {
			return $criteria;
		}
		$query = new PurchaseOrderChangeQuery();
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
	 * @return    PurchaseOrderChange|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = PurchaseOrderChangePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    PurchaseOrderChangeQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(PurchaseOrderChangePeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    PurchaseOrderChangeQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(PurchaseOrderChangePeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PurchaseOrderChangeQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(PurchaseOrderChangePeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the description column
	 * 
	 * @param     string $description The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PurchaseOrderChangeQuery The current query, for fluid interface
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
		return $this->addUsingAlias(PurchaseOrderChangePeer::DESCRIPTION, $description, $comparison);
	}

	/**
	 * Filter the query on the date_created column
	 * 
	 * @param     string|array $dateCreated The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PurchaseOrderChangeQuery The current query, for fluid interface
	 */
	public function filterByDateCreated($dateCreated = null, $comparison = null)
	{
		if (is_array($dateCreated)) {
			$useMinMax = false;
			if (isset($dateCreated['min'])) {
				$this->addUsingAlias(PurchaseOrderChangePeer::DATE_CREATED, $dateCreated['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateCreated['max'])) {
				$this->addUsingAlias(PurchaseOrderChangePeer::DATE_CREATED, $dateCreated['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PurchaseOrderChangePeer::DATE_CREATED, $dateCreated, $comparison);
	}

	/**
	 * Filter the query on the is_active column
	 * 
	 * @param     int|array $isActive The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PurchaseOrderChangeQuery The current query, for fluid interface
	 */
	public function filterByIsActive($isActive = null, $comparison = null)
	{
		if (is_array($isActive)) {
			$useMinMax = false;
			if (isset($isActive['min'])) {
				$this->addUsingAlias(PurchaseOrderChangePeer::IS_ACTIVE, $isActive['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isActive['max'])) {
				$this->addUsingAlias(PurchaseOrderChangePeer::IS_ACTIVE, $isActive['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PurchaseOrderChangePeer::IS_ACTIVE, $isActive, $comparison);
	}

	/**
	 * Filter the query on the purchase_order_id column
	 * 
	 * @param     int|array $purchaseOrderId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PurchaseOrderChangeQuery The current query, for fluid interface
	 */
	public function filterByPurchaseOrderId($purchaseOrderId = null, $comparison = null)
	{
		if (is_array($purchaseOrderId)) {
			$useMinMax = false;
			if (isset($purchaseOrderId['min'])) {
				$this->addUsingAlias(PurchaseOrderChangePeer::PURCHASE_ORDER_ID, $purchaseOrderId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($purchaseOrderId['max'])) {
				$this->addUsingAlias(PurchaseOrderChangePeer::PURCHASE_ORDER_ID, $purchaseOrderId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PurchaseOrderChangePeer::PURCHASE_ORDER_ID, $purchaseOrderId, $comparison);
	}

	/**
	 * Filter the query on the credit_id column
	 * 
	 * @param     int|array $creditId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PurchaseOrderChangeQuery The current query, for fluid interface
	 */
	public function filterByCreditId($creditId = null, $comparison = null)
	{
		if (is_array($creditId)) {
			$useMinMax = false;
			if (isset($creditId['min'])) {
				$this->addUsingAlias(PurchaseOrderChangePeer::CREDIT_ID, $creditId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($creditId['max'])) {
				$this->addUsingAlias(PurchaseOrderChangePeer::CREDIT_ID, $creditId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PurchaseOrderChangePeer::CREDIT_ID, $creditId, $comparison);
	}

	/**
	 * Filter the query by a related Credit object
	 *
	 * @param     Credit $credit  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PurchaseOrderChangeQuery The current query, for fluid interface
	 */
	public function filterByCredit($credit, $comparison = null)
	{
		return $this
			->addUsingAlias(PurchaseOrderChangePeer::CREDIT_ID, $credit->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Credit relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PurchaseOrderChangeQuery The current query, for fluid interface
	 */
	public function joinCredit($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Credit');
		
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
			$this->addJoinObject($join, 'Credit');
		}
		
		return $this;
	}

	/**
	 * Use the Credit relation Credit object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CreditQuery A secondary query class using the current class as primary query
	 */
	public function useCreditQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinCredit($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Credit', 'CreditQuery');
	}

	/**
	 * Filter the query by a related PurchaseOrder object
	 *
	 * @param     PurchaseOrder $purchaseOrder  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PurchaseOrderChangeQuery The current query, for fluid interface
	 */
	public function filterByPurchaseOrder($purchaseOrder, $comparison = null)
	{
		return $this
			->addUsingAlias(PurchaseOrderChangePeer::PURCHASE_ORDER_ID, $purchaseOrder->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the PurchaseOrder relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PurchaseOrderChangeQuery The current query, for fluid interface
	 */
	public function joinPurchaseOrder($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('PurchaseOrder');
		
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
			$this->addJoinObject($join, 'PurchaseOrder');
		}
		
		return $this;
	}

	/**
	 * Use the PurchaseOrder relation PurchaseOrder object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PurchaseOrderQuery A secondary query class using the current class as primary query
	 */
	public function usePurchaseOrderQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinPurchaseOrder($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'PurchaseOrder', 'PurchaseOrderQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     PurchaseOrderChange $purchaseOrderChange Object to remove from the list of results
	 *
	 * @return    PurchaseOrderChangeQuery The current query, for fluid interface
	 */
	public function prune($purchaseOrderChange = null)
	{
		if ($purchaseOrderChange) {
			$this->addUsingAlias(PurchaseOrderChangePeer::ID, $purchaseOrderChange->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BasePurchaseOrderChangeQuery
