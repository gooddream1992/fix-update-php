<?php


/**
 * Base class that represents a query for the 'pricing_detail' table.
 *
 * 
 *
 * @method     PricingDetailQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     PricingDetailQuery orderByDealId($order = Criteria::ASC) Order by the deal_id column
 * @method     PricingDetailQuery orderByQuantity($order = Criteria::ASC) Order by the quantity column
 * @method     PricingDetailQuery orderByAmount($order = Criteria::ASC) Order by the amount column
 *
 * @method     PricingDetailQuery groupById() Group by the id column
 * @method     PricingDetailQuery groupByDealId() Group by the deal_id column
 * @method     PricingDetailQuery groupByQuantity() Group by the quantity column
 * @method     PricingDetailQuery groupByAmount() Group by the amount column
 *
 * @method     PricingDetailQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PricingDetailQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PricingDetailQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     PricingDetailQuery leftJoinDeal($relationAlias = null) Adds a LEFT JOIN clause to the query using the Deal relation
 * @method     PricingDetailQuery rightJoinDeal($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Deal relation
 * @method     PricingDetailQuery innerJoinDeal($relationAlias = null) Adds a INNER JOIN clause to the query using the Deal relation
 *
 * @method     PricingDetail findOne(PropelPDO $con = null) Return the first PricingDetail matching the query
 * @method     PricingDetail findOneOrCreate(PropelPDO $con = null) Return the first PricingDetail matching the query, or a new PricingDetail object populated from the query conditions when no match is found
 *
 * @method     PricingDetail findOneById(int $id) Return the first PricingDetail filtered by the id column
 * @method     PricingDetail findOneByDealId(int $deal_id) Return the first PricingDetail filtered by the deal_id column
 * @method     PricingDetail findOneByQuantity(int $quantity) Return the first PricingDetail filtered by the quantity column
 * @method     PricingDetail findOneByAmount(double $amount) Return the first PricingDetail filtered by the amount column
 *
 * @method     array findById(int $id) Return PricingDetail objects filtered by the id column
 * @method     array findByDealId(int $deal_id) Return PricingDetail objects filtered by the deal_id column
 * @method     array findByQuantity(int $quantity) Return PricingDetail objects filtered by the quantity column
 * @method     array findByAmount(double $amount) Return PricingDetail objects filtered by the amount column
 *
 * @package    propel.generator.komideals.om
 */
abstract class BasePricingDetailQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BasePricingDetailQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'komideals', $modelName = 'PricingDetail', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new PricingDetailQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    PricingDetailQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof PricingDetailQuery) {
			return $criteria;
		}
		$query = new PricingDetailQuery();
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
	 * @return    PricingDetail|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = PricingDetailPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    PricingDetailQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(PricingDetailPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    PricingDetailQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(PricingDetailPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PricingDetailQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(PricingDetailPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the deal_id column
	 * 
	 * @param     int|array $dealId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PricingDetailQuery The current query, for fluid interface
	 */
	public function filterByDealId($dealId = null, $comparison = null)
	{
		if (is_array($dealId)) {
			$useMinMax = false;
			if (isset($dealId['min'])) {
				$this->addUsingAlias(PricingDetailPeer::DEAL_ID, $dealId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dealId['max'])) {
				$this->addUsingAlias(PricingDetailPeer::DEAL_ID, $dealId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PricingDetailPeer::DEAL_ID, $dealId, $comparison);
	}

	/**
	 * Filter the query on the quantity column
	 * 
	 * @param     int|array $quantity The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PricingDetailQuery The current query, for fluid interface
	 */
	public function filterByQuantity($quantity = null, $comparison = null)
	{
		if (is_array($quantity)) {
			$useMinMax = false;
			if (isset($quantity['min'])) {
				$this->addUsingAlias(PricingDetailPeer::QUANTITY, $quantity['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($quantity['max'])) {
				$this->addUsingAlias(PricingDetailPeer::QUANTITY, $quantity['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PricingDetailPeer::QUANTITY, $quantity, $comparison);
	}

	/**
	 * Filter the query on the amount column
	 * 
	 * @param     double|array $amount The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PricingDetailQuery The current query, for fluid interface
	 */
	public function filterByAmount($amount = null, $comparison = null)
	{
		if (is_array($amount)) {
			$useMinMax = false;
			if (isset($amount['min'])) {
				$this->addUsingAlias(PricingDetailPeer::AMOUNT, $amount['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($amount['max'])) {
				$this->addUsingAlias(PricingDetailPeer::AMOUNT, $amount['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PricingDetailPeer::AMOUNT, $amount, $comparison);
	}

	/**
	 * Filter the query by a related Deal object
	 *
	 * @param     Deal $deal  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PricingDetailQuery The current query, for fluid interface
	 */
	public function filterByDeal($deal, $comparison = null)
	{
		return $this
			->addUsingAlias(PricingDetailPeer::DEAL_ID, $deal->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Deal relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PricingDetailQuery The current query, for fluid interface
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
	 * Exclude object from result
	 *
	 * @param     PricingDetail $pricingDetail Object to remove from the list of results
	 *
	 * @return    PricingDetailQuery The current query, for fluid interface
	 */
	public function prune($pricingDetail = null)
	{
		if ($pricingDetail) {
			$this->addUsingAlias(PricingDetailPeer::ID, $pricingDetail->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BasePricingDetailQuery
