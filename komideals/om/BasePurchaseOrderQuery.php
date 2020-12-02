<?php


/**
 * Base class that represents a query for the 'purchase_order' table.
 *
 * 
 *
 * @method     PurchaseOrderQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     PurchaseOrderQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     PurchaseOrderQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     PurchaseOrderQuery orderByDateCreated($order = Criteria::ASC) Order by the date_created column
 * @method     PurchaseOrderQuery orderByDatePaid($order = Criteria::ASC) Order by the date_paid column
 * @method     PurchaseOrderQuery orderByIsActive($order = Criteria::ASC) Order by the is_active column
 * @method     PurchaseOrderQuery orderByIsPaid($order = Criteria::ASC) Order by the is_paid column
 *
 * @method     PurchaseOrderQuery groupById() Group by the id column
 * @method     PurchaseOrderQuery groupByUserId() Group by the user_id column
 * @method     PurchaseOrderQuery groupByDescription() Group by the description column
 * @method     PurchaseOrderQuery groupByDateCreated() Group by the date_created column
 * @method     PurchaseOrderQuery groupByDatePaid() Group by the date_paid column
 * @method     PurchaseOrderQuery groupByIsActive() Group by the is_active column
 * @method     PurchaseOrderQuery groupByIsPaid() Group by the is_paid column
 *
 * @method     PurchaseOrderQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PurchaseOrderQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PurchaseOrderQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     PurchaseOrderQuery leftJoinUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the User relation
 * @method     PurchaseOrderQuery rightJoinUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the User relation
 * @method     PurchaseOrderQuery innerJoinUser($relationAlias = null) Adds a INNER JOIN clause to the query using the User relation
 *
 * @method     PurchaseOrderQuery leftJoinPayment($relationAlias = null) Adds a LEFT JOIN clause to the query using the Payment relation
 * @method     PurchaseOrderQuery rightJoinPayment($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Payment relation
 * @method     PurchaseOrderQuery innerJoinPayment($relationAlias = null) Adds a INNER JOIN clause to the query using the Payment relation
 *
 * @method     PurchaseOrderQuery leftJoinPurchaseDetail($relationAlias = null) Adds a LEFT JOIN clause to the query using the PurchaseDetail relation
 * @method     PurchaseOrderQuery rightJoinPurchaseDetail($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PurchaseDetail relation
 * @method     PurchaseOrderQuery innerJoinPurchaseDetail($relationAlias = null) Adds a INNER JOIN clause to the query using the PurchaseDetail relation
 *
 * @method     PurchaseOrderQuery leftJoinPurchaseOrderChange($relationAlias = null) Adds a LEFT JOIN clause to the query using the PurchaseOrderChange relation
 * @method     PurchaseOrderQuery rightJoinPurchaseOrderChange($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PurchaseOrderChange relation
 * @method     PurchaseOrderQuery innerJoinPurchaseOrderChange($relationAlias = null) Adds a INNER JOIN clause to the query using the PurchaseOrderChange relation
 *
 * @method     PurchaseOrder findOne(PropelPDO $con = null) Return the first PurchaseOrder matching the query
 * @method     PurchaseOrder findOneOrCreate(PropelPDO $con = null) Return the first PurchaseOrder matching the query, or a new PurchaseOrder object populated from the query conditions when no match is found
 *
 * @method     PurchaseOrder findOneById(int $id) Return the first PurchaseOrder filtered by the id column
 * @method     PurchaseOrder findOneByUserId(int $user_id) Return the first PurchaseOrder filtered by the user_id column
 * @method     PurchaseOrder findOneByDescription(string $description) Return the first PurchaseOrder filtered by the description column
 * @method     PurchaseOrder findOneByDateCreated(string $date_created) Return the first PurchaseOrder filtered by the date_created column
 * @method     PurchaseOrder findOneByDatePaid(string $date_paid) Return the first PurchaseOrder filtered by the date_paid column
 * @method     PurchaseOrder findOneByIsActive(int $is_active) Return the first PurchaseOrder filtered by the is_active column
 * @method     PurchaseOrder findOneByIsPaid(int $is_paid) Return the first PurchaseOrder filtered by the is_paid column
 *
 * @method     array findById(int $id) Return PurchaseOrder objects filtered by the id column
 * @method     array findByUserId(int $user_id) Return PurchaseOrder objects filtered by the user_id column
 * @method     array findByDescription(string $description) Return PurchaseOrder objects filtered by the description column
 * @method     array findByDateCreated(string $date_created) Return PurchaseOrder objects filtered by the date_created column
 * @method     array findByDatePaid(string $date_paid) Return PurchaseOrder objects filtered by the date_paid column
 * @method     array findByIsActive(int $is_active) Return PurchaseOrder objects filtered by the is_active column
 * @method     array findByIsPaid(int $is_paid) Return PurchaseOrder objects filtered by the is_paid column
 *
 * @package    propel.generator.komideals.om
 */
abstract class BasePurchaseOrderQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BasePurchaseOrderQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'komideals', $modelName = 'PurchaseOrder', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new PurchaseOrderQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    PurchaseOrderQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof PurchaseOrderQuery) {
			return $criteria;
		}
		$query = new PurchaseOrderQuery();
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
	 * @return    PurchaseOrder|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = PurchaseOrderPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    PurchaseOrderQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(PurchaseOrderPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    PurchaseOrderQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(PurchaseOrderPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PurchaseOrderQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(PurchaseOrderPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PurchaseOrderQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(PurchaseOrderPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(PurchaseOrderPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PurchaseOrderPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the description column
	 * 
	 * @param     string $description The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PurchaseOrderQuery The current query, for fluid interface
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
		return $this->addUsingAlias(PurchaseOrderPeer::DESCRIPTION, $description, $comparison);
	}

	/**
	 * Filter the query on the date_created column
	 * 
	 * @param     string|array $dateCreated The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PurchaseOrderQuery The current query, for fluid interface
	 */
	public function filterByDateCreated($dateCreated = null, $comparison = null)
	{
		if (is_array($dateCreated)) {
			$useMinMax = false;
			if (isset($dateCreated['min'])) {
				$this->addUsingAlias(PurchaseOrderPeer::DATE_CREATED, $dateCreated['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateCreated['max'])) {
				$this->addUsingAlias(PurchaseOrderPeer::DATE_CREATED, $dateCreated['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PurchaseOrderPeer::DATE_CREATED, $dateCreated, $comparison);
	}

	/**
	 * Filter the query on the date_paid column
	 * 
	 * @param     string|array $datePaid The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PurchaseOrderQuery The current query, for fluid interface
	 */
	public function filterByDatePaid($datePaid = null, $comparison = null)
	{
		if (is_array($datePaid)) {
			$useMinMax = false;
			if (isset($datePaid['min'])) {
				$this->addUsingAlias(PurchaseOrderPeer::DATE_PAID, $datePaid['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($datePaid['max'])) {
				$this->addUsingAlias(PurchaseOrderPeer::DATE_PAID, $datePaid['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PurchaseOrderPeer::DATE_PAID, $datePaid, $comparison);
	}

	/**
	 * Filter the query on the is_active column
	 * 
	 * @param     int|array $isActive The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PurchaseOrderQuery The current query, for fluid interface
	 */
	public function filterByIsActive($isActive = null, $comparison = null)
	{
		if (is_array($isActive)) {
			$useMinMax = false;
			if (isset($isActive['min'])) {
				$this->addUsingAlias(PurchaseOrderPeer::IS_ACTIVE, $isActive['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isActive['max'])) {
				$this->addUsingAlias(PurchaseOrderPeer::IS_ACTIVE, $isActive['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PurchaseOrderPeer::IS_ACTIVE, $isActive, $comparison);
	}

	/**
	 * Filter the query on the is_paid column
	 * 
	 * @param     int|array $isPaid The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PurchaseOrderQuery The current query, for fluid interface
	 */
	public function filterByIsPaid($isPaid = null, $comparison = null)
	{
		if (is_array($isPaid)) {
			$useMinMax = false;
			if (isset($isPaid['min'])) {
				$this->addUsingAlias(PurchaseOrderPeer::IS_PAID, $isPaid['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isPaid['max'])) {
				$this->addUsingAlias(PurchaseOrderPeer::IS_PAID, $isPaid['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PurchaseOrderPeer::IS_PAID, $isPaid, $comparison);
	}

	/**
	 * Filter the query by a related User object
	 *
	 * @param     User $user  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PurchaseOrderQuery The current query, for fluid interface
	 */
	public function filterByUser($user, $comparison = null)
	{
		return $this
			->addUsingAlias(PurchaseOrderPeer::USER_ID, $user->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the User relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PurchaseOrderQuery The current query, for fluid interface
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
	 * Filter the query by a related Payment object
	 *
	 * @param     Payment $payment  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PurchaseOrderQuery The current query, for fluid interface
	 */
	public function filterByPayment($payment, $comparison = null)
	{
		return $this
			->addUsingAlias(PurchaseOrderPeer::ID, $payment->getPurchaseOrderId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Payment relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PurchaseOrderQuery The current query, for fluid interface
	 */
	public function joinPayment($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Payment');
		
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
			$this->addJoinObject($join, 'Payment');
		}
		
		return $this;
	}

	/**
	 * Use the Payment relation Payment object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PaymentQuery A secondary query class using the current class as primary query
	 */
	public function usePaymentQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinPayment($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Payment', 'PaymentQuery');
	}

	/**
	 * Filter the query by a related PurchaseDetail object
	 *
	 * @param     PurchaseDetail $purchaseDetail  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PurchaseOrderQuery The current query, for fluid interface
	 */
	public function filterByPurchaseDetail($purchaseDetail, $comparison = null)
	{
		return $this
			->addUsingAlias(PurchaseOrderPeer::ID, $purchaseDetail->getPurchaseOrderId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the PurchaseDetail relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PurchaseOrderQuery The current query, for fluid interface
	 */
	public function joinPurchaseDetail($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('PurchaseDetail');
		
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
			$this->addJoinObject($join, 'PurchaseDetail');
		}
		
		return $this;
	}

	/**
	 * Use the PurchaseDetail relation PurchaseDetail object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PurchaseDetailQuery A secondary query class using the current class as primary query
	 */
	public function usePurchaseDetailQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinPurchaseDetail($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'PurchaseDetail', 'PurchaseDetailQuery');
	}

	/**
	 * Filter the query by a related PurchaseOrderChange object
	 *
	 * @param     PurchaseOrderChange $purchaseOrderChange  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PurchaseOrderQuery The current query, for fluid interface
	 */
	public function filterByPurchaseOrderChange($purchaseOrderChange, $comparison = null)
	{
		return $this
			->addUsingAlias(PurchaseOrderPeer::ID, $purchaseOrderChange->getPurchaseOrderId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the PurchaseOrderChange relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PurchaseOrderQuery The current query, for fluid interface
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
	 * @param     PurchaseOrder $purchaseOrder Object to remove from the list of results
	 *
	 * @return    PurchaseOrderQuery The current query, for fluid interface
	 */
	public function prune($purchaseOrder = null)
	{
		if ($purchaseOrder) {
			$this->addUsingAlias(PurchaseOrderPeer::ID, $purchaseOrder->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BasePurchaseOrderQuery
