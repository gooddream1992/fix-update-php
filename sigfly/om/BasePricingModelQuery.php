<?php


/**
 * Base class that represents a query for the 'pricing_model' table.
 *
 * 
 *
 * @method     PricingModelQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     PricingModelQuery orderByModelName($order = Criteria::ASC) Order by the model_name column
 * @method     PricingModelQuery orderByDateCreated($order = Criteria::ASC) Order by the date_created column
 * @method     PricingModelQuery orderByDateModified($order = Criteria::ASC) Order by the date_modified column
 * @method     PricingModelQuery orderByIsActive($order = Criteria::ASC) Order by the is_active column
 *
 * @method     PricingModelQuery groupById() Group by the id column
 * @method     PricingModelQuery groupByModelName() Group by the model_name column
 * @method     PricingModelQuery groupByDateCreated() Group by the date_created column
 * @method     PricingModelQuery groupByDateModified() Group by the date_modified column
 * @method     PricingModelQuery groupByIsActive() Group by the is_active column
 *
 * @method     PricingModelQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PricingModelQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PricingModelQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     PricingModelQuery leftJoinPricingDetailDefault($relationAlias = null) Adds a LEFT JOIN clause to the query using the PricingDetailDefault relation
 * @method     PricingModelQuery rightJoinPricingDetailDefault($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PricingDetailDefault relation
 * @method     PricingModelQuery innerJoinPricingDetailDefault($relationAlias = null) Adds a INNER JOIN clause to the query using the PricingDetailDefault relation
 *
 * @method     PricingModel findOne(PropelPDO $con = null) Return the first PricingModel matching the query
 * @method     PricingModel findOneOrCreate(PropelPDO $con = null) Return the first PricingModel matching the query, or a new PricingModel object populated from the query conditions when no match is found
 *
 * @method     PricingModel findOneById(int $id) Return the first PricingModel filtered by the id column
 * @method     PricingModel findOneByModelName(string $model_name) Return the first PricingModel filtered by the model_name column
 * @method     PricingModel findOneByDateCreated(string $date_created) Return the first PricingModel filtered by the date_created column
 * @method     PricingModel findOneByDateModified(string $date_modified) Return the first PricingModel filtered by the date_modified column
 * @method     PricingModel findOneByIsActive(int $is_active) Return the first PricingModel filtered by the is_active column
 *
 * @method     array findById(int $id) Return PricingModel objects filtered by the id column
 * @method     array findByModelName(string $model_name) Return PricingModel objects filtered by the model_name column
 * @method     array findByDateCreated(string $date_created) Return PricingModel objects filtered by the date_created column
 * @method     array findByDateModified(string $date_modified) Return PricingModel objects filtered by the date_modified column
 * @method     array findByIsActive(int $is_active) Return PricingModel objects filtered by the is_active column
 *
 * @package    propel.generator.sigfly.om
 */
abstract class BasePricingModelQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BasePricingModelQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'sigfly', $modelName = 'PricingModel', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new PricingModelQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    PricingModelQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof PricingModelQuery) {
			return $criteria;
		}
		$query = new PricingModelQuery();
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
	 * @return    PricingModel|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = PricingModelPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    PricingModelQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(PricingModelPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    PricingModelQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(PricingModelPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PricingModelQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(PricingModelPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the model_name column
	 * 
	 * @param     string $modelName The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PricingModelQuery The current query, for fluid interface
	 */
	public function filterByModelName($modelName = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($modelName)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $modelName)) {
				$modelName = str_replace('*', '%', $modelName);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PricingModelPeer::MODEL_NAME, $modelName, $comparison);
	}

	/**
	 * Filter the query on the date_created column
	 * 
	 * @param     string|array $dateCreated The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PricingModelQuery The current query, for fluid interface
	 */
	public function filterByDateCreated($dateCreated = null, $comparison = null)
	{
		if (is_array($dateCreated)) {
			$useMinMax = false;
			if (isset($dateCreated['min'])) {
				$this->addUsingAlias(PricingModelPeer::DATE_CREATED, $dateCreated['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateCreated['max'])) {
				$this->addUsingAlias(PricingModelPeer::DATE_CREATED, $dateCreated['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PricingModelPeer::DATE_CREATED, $dateCreated, $comparison);
	}

	/**
	 * Filter the query on the date_modified column
	 * 
	 * @param     string|array $dateModified The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PricingModelQuery The current query, for fluid interface
	 */
	public function filterByDateModified($dateModified = null, $comparison = null)
	{
		if (is_array($dateModified)) {
			$useMinMax = false;
			if (isset($dateModified['min'])) {
				$this->addUsingAlias(PricingModelPeer::DATE_MODIFIED, $dateModified['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateModified['max'])) {
				$this->addUsingAlias(PricingModelPeer::DATE_MODIFIED, $dateModified['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PricingModelPeer::DATE_MODIFIED, $dateModified, $comparison);
	}

	/**
	 * Filter the query on the is_active column
	 * 
	 * @param     int|array $isActive The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PricingModelQuery The current query, for fluid interface
	 */
	public function filterByIsActive($isActive = null, $comparison = null)
	{
		if (is_array($isActive)) {
			$useMinMax = false;
			if (isset($isActive['min'])) {
				$this->addUsingAlias(PricingModelPeer::IS_ACTIVE, $isActive['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isActive['max'])) {
				$this->addUsingAlias(PricingModelPeer::IS_ACTIVE, $isActive['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PricingModelPeer::IS_ACTIVE, $isActive, $comparison);
	}

	/**
	 * Filter the query by a related PricingDetailDefault object
	 *
	 * @param     PricingDetailDefault $pricingDetailDefault  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PricingModelQuery The current query, for fluid interface
	 */
	public function filterByPricingDetailDefault($pricingDetailDefault, $comparison = null)
	{
		return $this
			->addUsingAlias(PricingModelPeer::ID, $pricingDetailDefault->getPricingModelId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the PricingDetailDefault relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PricingModelQuery The current query, for fluid interface
	 */
	public function joinPricingDetailDefault($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('PricingDetailDefault');
		
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
			$this->addJoinObject($join, 'PricingDetailDefault');
		}
		
		return $this;
	}

	/**
	 * Use the PricingDetailDefault relation PricingDetailDefault object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PricingDetailDefaultQuery A secondary query class using the current class as primary query
	 */
	public function usePricingDetailDefaultQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinPricingDetailDefault($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'PricingDetailDefault', 'PricingDetailDefaultQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     PricingModel $pricingModel Object to remove from the list of results
	 *
	 * @return    PricingModelQuery The current query, for fluid interface
	 */
	public function prune($pricingModel = null)
	{
		if ($pricingModel) {
			$this->addUsingAlias(PricingModelPeer::ID, $pricingModel->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BasePricingModelQuery
