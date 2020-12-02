<?php


/**
 * Base class that represents a query for the 'pricing_detail_default' table.
 *
 * 
 *
 * @method     PricingDetailDefaultQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     PricingDetailDefaultQuery orderByPricingModelId($order = Criteria::ASC) Order by the pricing_model_id column
 * @method     PricingDetailDefaultQuery orderByQuantity($order = Criteria::ASC) Order by the quantity column
 * @method     PricingDetailDefaultQuery orderByAmount($order = Criteria::ASC) Order by the amount column
 *
 * @method     PricingDetailDefaultQuery groupById() Group by the id column
 * @method     PricingDetailDefaultQuery groupByPricingModelId() Group by the pricing_model_id column
 * @method     PricingDetailDefaultQuery groupByQuantity() Group by the quantity column
 * @method     PricingDetailDefaultQuery groupByAmount() Group by the amount column
 *
 * @method     PricingDetailDefaultQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PricingDetailDefaultQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PricingDetailDefaultQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     PricingDetailDefaultQuery leftJoinPricingModel($relationAlias = null) Adds a LEFT JOIN clause to the query using the PricingModel relation
 * @method     PricingDetailDefaultQuery rightJoinPricingModel($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PricingModel relation
 * @method     PricingDetailDefaultQuery innerJoinPricingModel($relationAlias = null) Adds a INNER JOIN clause to the query using the PricingModel relation
 *
 * @method     PricingDetailDefault findOne(PropelPDO $con = null) Return the first PricingDetailDefault matching the query
 * @method     PricingDetailDefault findOneOrCreate(PropelPDO $con = null) Return the first PricingDetailDefault matching the query, or a new PricingDetailDefault object populated from the query conditions when no match is found
 *
 * @method     PricingDetailDefault findOneById(int $id) Return the first PricingDetailDefault filtered by the id column
 * @method     PricingDetailDefault findOneByPricingModelId(int $pricing_model_id) Return the first PricingDetailDefault filtered by the pricing_model_id column
 * @method     PricingDetailDefault findOneByQuantity(int $quantity) Return the first PricingDetailDefault filtered by the quantity column
 * @method     PricingDetailDefault findOneByAmount(double $amount) Return the first PricingDetailDefault filtered by the amount column
 *
 * @method     array findById(int $id) Return PricingDetailDefault objects filtered by the id column
 * @method     array findByPricingModelId(int $pricing_model_id) Return PricingDetailDefault objects filtered by the pricing_model_id column
 * @method     array findByQuantity(int $quantity) Return PricingDetailDefault objects filtered by the quantity column
 * @method     array findByAmount(double $amount) Return PricingDetailDefault objects filtered by the amount column
 *
 * @package    propel.generator.sigfly.om
 */
abstract class BasePricingDetailDefaultQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BasePricingDetailDefaultQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'sigfly', $modelName = 'PricingDetailDefault', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new PricingDetailDefaultQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    PricingDetailDefaultQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof PricingDetailDefaultQuery) {
			return $criteria;
		}
		$query = new PricingDetailDefaultQuery();
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
	 * @return    PricingDetailDefault|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = PricingDetailDefaultPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    PricingDetailDefaultQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(PricingDetailDefaultPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    PricingDetailDefaultQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(PricingDetailDefaultPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PricingDetailDefaultQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(PricingDetailDefaultPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the pricing_model_id column
	 * 
	 * @param     int|array $pricingModelId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PricingDetailDefaultQuery The current query, for fluid interface
	 */
	public function filterByPricingModelId($pricingModelId = null, $comparison = null)
	{
		if (is_array($pricingModelId)) {
			$useMinMax = false;
			if (isset($pricingModelId['min'])) {
				$this->addUsingAlias(PricingDetailDefaultPeer::PRICING_MODEL_ID, $pricingModelId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($pricingModelId['max'])) {
				$this->addUsingAlias(PricingDetailDefaultPeer::PRICING_MODEL_ID, $pricingModelId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PricingDetailDefaultPeer::PRICING_MODEL_ID, $pricingModelId, $comparison);
	}

	/**
	 * Filter the query on the quantity column
	 * 
	 * @param     int|array $quantity The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PricingDetailDefaultQuery The current query, for fluid interface
	 */
	public function filterByQuantity($quantity = null, $comparison = null)
	{
		if (is_array($quantity)) {
			$useMinMax = false;
			if (isset($quantity['min'])) {
				$this->addUsingAlias(PricingDetailDefaultPeer::QUANTITY, $quantity['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($quantity['max'])) {
				$this->addUsingAlias(PricingDetailDefaultPeer::QUANTITY, $quantity['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PricingDetailDefaultPeer::QUANTITY, $quantity, $comparison);
	}

	/**
	 * Filter the query on the amount column
	 * 
	 * @param     double|array $amount The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PricingDetailDefaultQuery The current query, for fluid interface
	 */
	public function filterByAmount($amount = null, $comparison = null)
	{
		if (is_array($amount)) {
			$useMinMax = false;
			if (isset($amount['min'])) {
				$this->addUsingAlias(PricingDetailDefaultPeer::AMOUNT, $amount['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($amount['max'])) {
				$this->addUsingAlias(PricingDetailDefaultPeer::AMOUNT, $amount['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PricingDetailDefaultPeer::AMOUNT, $amount, $comparison);
	}

	/**
	 * Filter the query by a related PricingModel object
	 *
	 * @param     PricingModel $pricingModel  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PricingDetailDefaultQuery The current query, for fluid interface
	 */
	public function filterByPricingModel($pricingModel, $comparison = null)
	{
		return $this
			->addUsingAlias(PricingDetailDefaultPeer::PRICING_MODEL_ID, $pricingModel->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the PricingModel relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PricingDetailDefaultQuery The current query, for fluid interface
	 */
	public function joinPricingModel($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('PricingModel');
		
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
			$this->addJoinObject($join, 'PricingModel');
		}
		
		return $this;
	}

	/**
	 * Use the PricingModel relation PricingModel object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PricingModelQuery A secondary query class using the current class as primary query
	 */
	public function usePricingModelQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinPricingModel($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'PricingModel', 'PricingModelQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     PricingDetailDefault $pricingDetailDefault Object to remove from the list of results
	 *
	 * @return    PricingDetailDefaultQuery The current query, for fluid interface
	 */
	public function prune($pricingDetailDefault = null)
	{
		if ($pricingDetailDefault) {
			$this->addUsingAlias(PricingDetailDefaultPeer::ID, $pricingDetailDefault->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BasePricingDetailDefaultQuery
