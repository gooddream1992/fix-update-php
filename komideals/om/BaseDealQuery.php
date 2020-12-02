<?php


/**
 * Base class that represents a query for the 'deal' table.
 *
 * 
 *
 * @method     DealQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     DealQuery orderByBusinessId($order = Criteria::ASC) Order by the business_id column
 * @method     DealQuery orderByDateStart($order = Criteria::ASC) Order by the date_start column
 * @method     DealQuery orderByDateEnd($order = Criteria::ASC) Order by the date_end column
 * @method     DealQuery orderByIsActive($order = Criteria::ASC) Order by the is_active column
 * @method     DealQuery orderByPrice($order = Criteria::ASC) Order by the price column
 * @method     DealQuery orderByValue($order = Criteria::ASC) Order by the value column
 * @method     DealQuery orderByDetails($order = Criteria::ASC) Order by the details column
 * @method     DealQuery orderByDateTipped($order = Criteria::ASC) Order by the date_tipped column
 * @method     DealQuery orderByIsTipped($order = Criteria::ASC) Order by the is_tipped column
 * @method     DealQuery orderByPricingModelId($order = Criteria::ASC) Order by the pricing_model_id column
 * @method     DealQuery orderByTippingPoint($order = Criteria::ASC) Order by the tipping_point column
 * @method     DealQuery orderByCategoryId($order = Criteria::ASC) Order by the category_id column
 *
 * @method     DealQuery groupById() Group by the id column
 * @method     DealQuery groupByBusinessId() Group by the business_id column
 * @method     DealQuery groupByDateStart() Group by the date_start column
 * @method     DealQuery groupByDateEnd() Group by the date_end column
 * @method     DealQuery groupByIsActive() Group by the is_active column
 * @method     DealQuery groupByPrice() Group by the price column
 * @method     DealQuery groupByValue() Group by the value column
 * @method     DealQuery groupByDetails() Group by the details column
 * @method     DealQuery groupByDateTipped() Group by the date_tipped column
 * @method     DealQuery groupByIsTipped() Group by the is_tipped column
 * @method     DealQuery groupByPricingModelId() Group by the pricing_model_id column
 * @method     DealQuery groupByTippingPoint() Group by the tipping_point column
 * @method     DealQuery groupByCategoryId() Group by the category_id column
 *
 * @method     DealQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     DealQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     DealQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     DealQuery leftJoinCategory($relationAlias = null) Adds a LEFT JOIN clause to the query using the Category relation
 * @method     DealQuery rightJoinCategory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Category relation
 * @method     DealQuery innerJoinCategory($relationAlias = null) Adds a INNER JOIN clause to the query using the Category relation
 *
 * @method     DealQuery leftJoinPricingModel($relationAlias = null) Adds a LEFT JOIN clause to the query using the PricingModel relation
 * @method     DealQuery rightJoinPricingModel($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PricingModel relation
 * @method     DealQuery innerJoinPricingModel($relationAlias = null) Adds a INNER JOIN clause to the query using the PricingModel relation
 *
 * @method     DealQuery leftJoinBusiness($relationAlias = null) Adds a LEFT JOIN clause to the query using the Business relation
 * @method     DealQuery rightJoinBusiness($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Business relation
 * @method     DealQuery innerJoinBusiness($relationAlias = null) Adds a INNER JOIN clause to the query using the Business relation
 *
 * @method     DealQuery leftJoinPricingDetail($relationAlias = null) Adds a LEFT JOIN clause to the query using the PricingDetail relation
 * @method     DealQuery rightJoinPricingDetail($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PricingDetail relation
 * @method     DealQuery innerJoinPricingDetail($relationAlias = null) Adds a INNER JOIN clause to the query using the PricingDetail relation
 *
 * @method     DealQuery leftJoinPurchaseDetail($relationAlias = null) Adds a LEFT JOIN clause to the query using the PurchaseDetail relation
 * @method     DealQuery rightJoinPurchaseDetail($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PurchaseDetail relation
 * @method     DealQuery innerJoinPurchaseDetail($relationAlias = null) Adds a INNER JOIN clause to the query using the PurchaseDetail relation
 *
 * @method     Deal findOne(PropelPDO $con = null) Return the first Deal matching the query
 * @method     Deal findOneOrCreate(PropelPDO $con = null) Return the first Deal matching the query, or a new Deal object populated from the query conditions when no match is found
 *
 * @method     Deal findOneById(int $id) Return the first Deal filtered by the id column
 * @method     Deal findOneByBusinessId(int $business_id) Return the first Deal filtered by the business_id column
 * @method     Deal findOneByDateStart(string $date_start) Return the first Deal filtered by the date_start column
 * @method     Deal findOneByDateEnd(string $date_end) Return the first Deal filtered by the date_end column
 * @method     Deal findOneByIsActive(int $is_active) Return the first Deal filtered by the is_active column
 * @method     Deal findOneByPrice(double $price) Return the first Deal filtered by the price column
 * @method     Deal findOneByValue(double $value) Return the first Deal filtered by the value column
 * @method     Deal findOneByDetails(string $details) Return the first Deal filtered by the details column
 * @method     Deal findOneByDateTipped(string $date_tipped) Return the first Deal filtered by the date_tipped column
 * @method     Deal findOneByIsTipped(int $is_tipped) Return the first Deal filtered by the is_tipped column
 * @method     Deal findOneByPricingModelId(int $pricing_model_id) Return the first Deal filtered by the pricing_model_id column
 * @method     Deal findOneByTippingPoint(int $tipping_point) Return the first Deal filtered by the tipping_point column
 * @method     Deal findOneByCategoryId(int $category_id) Return the first Deal filtered by the category_id column
 *
 * @method     array findById(int $id) Return Deal objects filtered by the id column
 * @method     array findByBusinessId(int $business_id) Return Deal objects filtered by the business_id column
 * @method     array findByDateStart(string $date_start) Return Deal objects filtered by the date_start column
 * @method     array findByDateEnd(string $date_end) Return Deal objects filtered by the date_end column
 * @method     array findByIsActive(int $is_active) Return Deal objects filtered by the is_active column
 * @method     array findByPrice(double $price) Return Deal objects filtered by the price column
 * @method     array findByValue(double $value) Return Deal objects filtered by the value column
 * @method     array findByDetails(string $details) Return Deal objects filtered by the details column
 * @method     array findByDateTipped(string $date_tipped) Return Deal objects filtered by the date_tipped column
 * @method     array findByIsTipped(int $is_tipped) Return Deal objects filtered by the is_tipped column
 * @method     array findByPricingModelId(int $pricing_model_id) Return Deal objects filtered by the pricing_model_id column
 * @method     array findByTippingPoint(int $tipping_point) Return Deal objects filtered by the tipping_point column
 * @method     array findByCategoryId(int $category_id) Return Deal objects filtered by the category_id column
 *
 * @package    propel.generator.komideals.om
 */
abstract class BaseDealQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseDealQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'komideals', $modelName = 'Deal', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new DealQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    DealQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof DealQuery) {
			return $criteria;
		}
		$query = new DealQuery();
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
	 * @return    Deal|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = DealPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    DealQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(DealPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    DealQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(DealPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(DealPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the business_id column
	 * 
	 * @param     int|array $businessId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealQuery The current query, for fluid interface
	 */
	public function filterByBusinessId($businessId = null, $comparison = null)
	{
		if (is_array($businessId)) {
			$useMinMax = false;
			if (isset($businessId['min'])) {
				$this->addUsingAlias(DealPeer::BUSINESS_ID, $businessId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($businessId['max'])) {
				$this->addUsingAlias(DealPeer::BUSINESS_ID, $businessId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealPeer::BUSINESS_ID, $businessId, $comparison);
	}

	/**
	 * Filter the query on the date_start column
	 * 
	 * @param     string|array $dateStart The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealQuery The current query, for fluid interface
	 */
	public function filterByDateStart($dateStart = null, $comparison = null)
	{
		if (is_array($dateStart)) {
			$useMinMax = false;
			if (isset($dateStart['min'])) {
				$this->addUsingAlias(DealPeer::DATE_START, $dateStart['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateStart['max'])) {
				$this->addUsingAlias(DealPeer::DATE_START, $dateStart['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealPeer::DATE_START, $dateStart, $comparison);
	}

	/**
	 * Filter the query on the date_end column
	 * 
	 * @param     string|array $dateEnd The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealQuery The current query, for fluid interface
	 */
	public function filterByDateEnd($dateEnd = null, $comparison = null)
	{
		if (is_array($dateEnd)) {
			$useMinMax = false;
			if (isset($dateEnd['min'])) {
				$this->addUsingAlias(DealPeer::DATE_END, $dateEnd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateEnd['max'])) {
				$this->addUsingAlias(DealPeer::DATE_END, $dateEnd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealPeer::DATE_END, $dateEnd, $comparison);
	}

	/**
	 * Filter the query on the is_active column
	 * 
	 * @param     int|array $isActive The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealQuery The current query, for fluid interface
	 */
	public function filterByIsActive($isActive = null, $comparison = null)
	{
		if (is_array($isActive)) {
			$useMinMax = false;
			if (isset($isActive['min'])) {
				$this->addUsingAlias(DealPeer::IS_ACTIVE, $isActive['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isActive['max'])) {
				$this->addUsingAlias(DealPeer::IS_ACTIVE, $isActive['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealPeer::IS_ACTIVE, $isActive, $comparison);
	}

	/**
	 * Filter the query on the price column
	 * 
	 * @param     double|array $price The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealQuery The current query, for fluid interface
	 */
	public function filterByPrice($price = null, $comparison = null)
	{
		if (is_array($price)) {
			$useMinMax = false;
			if (isset($price['min'])) {
				$this->addUsingAlias(DealPeer::PRICE, $price['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($price['max'])) {
				$this->addUsingAlias(DealPeer::PRICE, $price['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealPeer::PRICE, $price, $comparison);
	}

	/**
	 * Filter the query on the value column
	 * 
	 * @param     double|array $value The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealQuery The current query, for fluid interface
	 */
	public function filterByValue($value = null, $comparison = null)
	{
		if (is_array($value)) {
			$useMinMax = false;
			if (isset($value['min'])) {
				$this->addUsingAlias(DealPeer::VALUE, $value['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($value['max'])) {
				$this->addUsingAlias(DealPeer::VALUE, $value['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealPeer::VALUE, $value, $comparison);
	}

	/**
	 * Filter the query on the details column
	 * 
	 * @param     string $details The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealQuery The current query, for fluid interface
	 */
	public function filterByDetails($details = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($details)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $details)) {
				$details = str_replace('*', '%', $details);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DealPeer::DETAILS, $details, $comparison);
	}

	/**
	 * Filter the query on the date_tipped column
	 * 
	 * @param     string|array $dateTipped The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealQuery The current query, for fluid interface
	 */
	public function filterByDateTipped($dateTipped = null, $comparison = null)
	{
		if (is_array($dateTipped)) {
			$useMinMax = false;
			if (isset($dateTipped['min'])) {
				$this->addUsingAlias(DealPeer::DATE_TIPPED, $dateTipped['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateTipped['max'])) {
				$this->addUsingAlias(DealPeer::DATE_TIPPED, $dateTipped['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealPeer::DATE_TIPPED, $dateTipped, $comparison);
	}

	/**
	 * Filter the query on the is_tipped column
	 * 
	 * @param     int|array $isTipped The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealQuery The current query, for fluid interface
	 */
	public function filterByIsTipped($isTipped = null, $comparison = null)
	{
		if (is_array($isTipped)) {
			$useMinMax = false;
			if (isset($isTipped['min'])) {
				$this->addUsingAlias(DealPeer::IS_TIPPED, $isTipped['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isTipped['max'])) {
				$this->addUsingAlias(DealPeer::IS_TIPPED, $isTipped['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealPeer::IS_TIPPED, $isTipped, $comparison);
	}

	/**
	 * Filter the query on the pricing_model_id column
	 * 
	 * @param     int|array $pricingModelId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealQuery The current query, for fluid interface
	 */
	public function filterByPricingModelId($pricingModelId = null, $comparison = null)
	{
		if (is_array($pricingModelId)) {
			$useMinMax = false;
			if (isset($pricingModelId['min'])) {
				$this->addUsingAlias(DealPeer::PRICING_MODEL_ID, $pricingModelId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($pricingModelId['max'])) {
				$this->addUsingAlias(DealPeer::PRICING_MODEL_ID, $pricingModelId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealPeer::PRICING_MODEL_ID, $pricingModelId, $comparison);
	}

	/**
	 * Filter the query on the tipping_point column
	 * 
	 * @param     int|array $tippingPoint The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealQuery The current query, for fluid interface
	 */
	public function filterByTippingPoint($tippingPoint = null, $comparison = null)
	{
		if (is_array($tippingPoint)) {
			$useMinMax = false;
			if (isset($tippingPoint['min'])) {
				$this->addUsingAlias(DealPeer::TIPPING_POINT, $tippingPoint['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($tippingPoint['max'])) {
				$this->addUsingAlias(DealPeer::TIPPING_POINT, $tippingPoint['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealPeer::TIPPING_POINT, $tippingPoint, $comparison);
	}

	/**
	 * Filter the query on the category_id column
	 * 
	 * @param     int|array $categoryId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealQuery The current query, for fluid interface
	 */
	public function filterByCategoryId($categoryId = null, $comparison = null)
	{
		if (is_array($categoryId)) {
			$useMinMax = false;
			if (isset($categoryId['min'])) {
				$this->addUsingAlias(DealPeer::CATEGORY_ID, $categoryId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($categoryId['max'])) {
				$this->addUsingAlias(DealPeer::CATEGORY_ID, $categoryId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealPeer::CATEGORY_ID, $categoryId, $comparison);
	}

	/**
	 * Filter the query by a related Category object
	 *
	 * @param     Category $category  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealQuery The current query, for fluid interface
	 */
	public function filterByCategory($category, $comparison = null)
	{
		return $this
			->addUsingAlias(DealPeer::CATEGORY_ID, $category->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Category relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealQuery The current query, for fluid interface
	 */
	public function joinCategory($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Category');
		
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
			$this->addJoinObject($join, 'Category');
		}
		
		return $this;
	}

	/**
	 * Use the Category relation Category object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CategoryQuery A secondary query class using the current class as primary query
	 */
	public function useCategoryQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinCategory($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Category', 'CategoryQuery');
	}

	/**
	 * Filter the query by a related PricingModel object
	 *
	 * @param     PricingModel $pricingModel  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealQuery The current query, for fluid interface
	 */
	public function filterByPricingModel($pricingModel, $comparison = null)
	{
		return $this
			->addUsingAlias(DealPeer::PRICING_MODEL_ID, $pricingModel->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the PricingModel relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealQuery The current query, for fluid interface
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
	 * Filter the query by a related Business object
	 *
	 * @param     Business $business  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealQuery The current query, for fluid interface
	 */
	public function filterByBusiness($business, $comparison = null)
	{
		return $this
			->addUsingAlias(DealPeer::BUSINESS_ID, $business->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Business relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealQuery The current query, for fluid interface
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
	 * Filter the query by a related PricingDetail object
	 *
	 * @param     PricingDetail $pricingDetail  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealQuery The current query, for fluid interface
	 */
	public function filterByPricingDetail($pricingDetail, $comparison = null)
	{
		return $this
			->addUsingAlias(DealPeer::ID, $pricingDetail->getDealId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the PricingDetail relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealQuery The current query, for fluid interface
	 */
	public function joinPricingDetail($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('PricingDetail');
		
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
			$this->addJoinObject($join, 'PricingDetail');
		}
		
		return $this;
	}

	/**
	 * Use the PricingDetail relation PricingDetail object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PricingDetailQuery A secondary query class using the current class as primary query
	 */
	public function usePricingDetailQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinPricingDetail($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'PricingDetail', 'PricingDetailQuery');
	}

	/**
	 * Filter the query by a related PurchaseDetail object
	 *
	 * @param     PurchaseDetail $purchaseDetail  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealQuery The current query, for fluid interface
	 */
	public function filterByPurchaseDetail($purchaseDetail, $comparison = null)
	{
		return $this
			->addUsingAlias(DealPeer::ID, $purchaseDetail->getDealId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the PurchaseDetail relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealQuery The current query, for fluid interface
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
	 * Exclude object from result
	 *
	 * @param     Deal $deal Object to remove from the list of results
	 *
	 * @return    DealQuery The current query, for fluid interface
	 */
	public function prune($deal = null)
	{
		if ($deal) {
			$this->addUsingAlias(DealPeer::ID, $deal->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseDealQuery
