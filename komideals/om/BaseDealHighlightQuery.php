<?php


/**
 * Base class that represents a query for the 'deal_highlight' table.
 *
 * 
 *
 * @method     DealHighlightQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     DealHighlightQuery orderByDealId($order = Criteria::ASC) Order by the deal_id column
 * @method     DealHighlightQuery orderByContent($order = Criteria::ASC) Order by the content column
 * @method     DealHighlightQuery orderByDateCreated($order = Criteria::ASC) Order by the date_created column
 * @method     DealHighlightQuery orderByIsActive($order = Criteria::ASC) Order by the is_active column
 *
 * @method     DealHighlightQuery groupById() Group by the id column
 * @method     DealHighlightQuery groupByDealId() Group by the deal_id column
 * @method     DealHighlightQuery groupByContent() Group by the content column
 * @method     DealHighlightQuery groupByDateCreated() Group by the date_created column
 * @method     DealHighlightQuery groupByIsActive() Group by the is_active column
 *
 * @method     DealHighlightQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     DealHighlightQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     DealHighlightQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     DealHighlightQuery leftJoinDeal($relationAlias = null) Adds a LEFT JOIN clause to the query using the Deal relation
 * @method     DealHighlightQuery rightJoinDeal($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Deal relation
 * @method     DealHighlightQuery innerJoinDeal($relationAlias = null) Adds a INNER JOIN clause to the query using the Deal relation
 *
 * @method     DealHighlight findOne(PropelPDO $con = null) Return the first DealHighlight matching the query
 * @method     DealHighlight findOneOrCreate(PropelPDO $con = null) Return the first DealHighlight matching the query, or a new DealHighlight object populated from the query conditions when no match is found
 *
 * @method     DealHighlight findOneById(int $id) Return the first DealHighlight filtered by the id column
 * @method     DealHighlight findOneByDealId(int $deal_id) Return the first DealHighlight filtered by the deal_id column
 * @method     DealHighlight findOneByContent(string $content) Return the first DealHighlight filtered by the content column
 * @method     DealHighlight findOneByDateCreated(string $date_created) Return the first DealHighlight filtered by the date_created column
 * @method     DealHighlight findOneByIsActive(int $is_active) Return the first DealHighlight filtered by the is_active column
 *
 * @method     array findById(int $id) Return DealHighlight objects filtered by the id column
 * @method     array findByDealId(int $deal_id) Return DealHighlight objects filtered by the deal_id column
 * @method     array findByContent(string $content) Return DealHighlight objects filtered by the content column
 * @method     array findByDateCreated(string $date_created) Return DealHighlight objects filtered by the date_created column
 * @method     array findByIsActive(int $is_active) Return DealHighlight objects filtered by the is_active column
 *
 * @package    propel.generator.komideals.om
 */
abstract class BaseDealHighlightQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseDealHighlightQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'komideals', $modelName = 'DealHighlight', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new DealHighlightQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    DealHighlightQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof DealHighlightQuery) {
			return $criteria;
		}
		$query = new DealHighlightQuery();
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
	 * @return    DealHighlight|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = DealHighlightPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    DealHighlightQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(DealHighlightPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    DealHighlightQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(DealHighlightPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealHighlightQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(DealHighlightPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the deal_id column
	 * 
	 * @param     int|array $dealId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealHighlightQuery The current query, for fluid interface
	 */
	public function filterByDealId($dealId = null, $comparison = null)
	{
		if (is_array($dealId)) {
			$useMinMax = false;
			if (isset($dealId['min'])) {
				$this->addUsingAlias(DealHighlightPeer::DEAL_ID, $dealId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dealId['max'])) {
				$this->addUsingAlias(DealHighlightPeer::DEAL_ID, $dealId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealHighlightPeer::DEAL_ID, $dealId, $comparison);
	}

	/**
	 * Filter the query on the content column
	 * 
	 * @param     string $content The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealHighlightQuery The current query, for fluid interface
	 */
	public function filterByContent($content = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($content)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $content)) {
				$content = str_replace('*', '%', $content);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DealHighlightPeer::CONTENT, $content, $comparison);
	}

	/**
	 * Filter the query on the date_created column
	 * 
	 * @param     string|array $dateCreated The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealHighlightQuery The current query, for fluid interface
	 */
	public function filterByDateCreated($dateCreated = null, $comparison = null)
	{
		if (is_array($dateCreated)) {
			$useMinMax = false;
			if (isset($dateCreated['min'])) {
				$this->addUsingAlias(DealHighlightPeer::DATE_CREATED, $dateCreated['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateCreated['max'])) {
				$this->addUsingAlias(DealHighlightPeer::DATE_CREATED, $dateCreated['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealHighlightPeer::DATE_CREATED, $dateCreated, $comparison);
	}

	/**
	 * Filter the query on the is_active column
	 * 
	 * @param     int|array $isActive The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealHighlightQuery The current query, for fluid interface
	 */
	public function filterByIsActive($isActive = null, $comparison = null)
	{
		if (is_array($isActive)) {
			$useMinMax = false;
			if (isset($isActive['min'])) {
				$this->addUsingAlias(DealHighlightPeer::IS_ACTIVE, $isActive['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isActive['max'])) {
				$this->addUsingAlias(DealHighlightPeer::IS_ACTIVE, $isActive['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealHighlightPeer::IS_ACTIVE, $isActive, $comparison);
	}

	/**
	 * Filter the query by a related Deal object
	 *
	 * @param     Deal $deal  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealHighlightQuery The current query, for fluid interface
	 */
	public function filterByDeal($deal, $comparison = null)
	{
		return $this
			->addUsingAlias(DealHighlightPeer::DEAL_ID, $deal->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Deal relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealHighlightQuery The current query, for fluid interface
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
	 * @param     DealHighlight $dealHighlight Object to remove from the list of results
	 *
	 * @return    DealHighlightQuery The current query, for fluid interface
	 */
	public function prune($dealHighlight = null)
	{
		if ($dealHighlight) {
			$this->addUsingAlias(DealHighlightPeer::ID, $dealHighlight->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseDealHighlightQuery
