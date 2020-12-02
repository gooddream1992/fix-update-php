<?php


/**
 * Base class that represents a query for the 'deal_feed_highlight' table.
 *
 * 
 *
 * @method     DealFeedHighlightQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     DealFeedHighlightQuery orderByDealFeedId($order = Criteria::ASC) Order by the deal_feed_id column
 * @method     DealFeedHighlightQuery orderByContent($order = Criteria::ASC) Order by the content column
 * @method     DealFeedHighlightQuery orderByDateCreated($order = Criteria::ASC) Order by the date_created column
 * @method     DealFeedHighlightQuery orderByIsActive($order = Criteria::ASC) Order by the is_active column
 *
 * @method     DealFeedHighlightQuery groupById() Group by the id column
 * @method     DealFeedHighlightQuery groupByDealFeedId() Group by the deal_feed_id column
 * @method     DealFeedHighlightQuery groupByContent() Group by the content column
 * @method     DealFeedHighlightQuery groupByDateCreated() Group by the date_created column
 * @method     DealFeedHighlightQuery groupByIsActive() Group by the is_active column
 *
 * @method     DealFeedHighlightQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     DealFeedHighlightQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     DealFeedHighlightQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     DealFeedHighlightQuery leftJoinDealFeed($relationAlias = null) Adds a LEFT JOIN clause to the query using the DealFeed relation
 * @method     DealFeedHighlightQuery rightJoinDealFeed($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DealFeed relation
 * @method     DealFeedHighlightQuery innerJoinDealFeed($relationAlias = null) Adds a INNER JOIN clause to the query using the DealFeed relation
 *
 * @method     DealFeedHighlight findOne(PropelPDO $con = null) Return the first DealFeedHighlight matching the query
 * @method     DealFeedHighlight findOneOrCreate(PropelPDO $con = null) Return the first DealFeedHighlight matching the query, or a new DealFeedHighlight object populated from the query conditions when no match is found
 *
 * @method     DealFeedHighlight findOneById(int $id) Return the first DealFeedHighlight filtered by the id column
 * @method     DealFeedHighlight findOneByDealFeedId(int $deal_feed_id) Return the first DealFeedHighlight filtered by the deal_feed_id column
 * @method     DealFeedHighlight findOneByContent(string $content) Return the first DealFeedHighlight filtered by the content column
 * @method     DealFeedHighlight findOneByDateCreated(string $date_created) Return the first DealFeedHighlight filtered by the date_created column
 * @method     DealFeedHighlight findOneByIsActive(int $is_active) Return the first DealFeedHighlight filtered by the is_active column
 *
 * @method     array findById(int $id) Return DealFeedHighlight objects filtered by the id column
 * @method     array findByDealFeedId(int $deal_feed_id) Return DealFeedHighlight objects filtered by the deal_feed_id column
 * @method     array findByContent(string $content) Return DealFeedHighlight objects filtered by the content column
 * @method     array findByDateCreated(string $date_created) Return DealFeedHighlight objects filtered by the date_created column
 * @method     array findByIsActive(int $is_active) Return DealFeedHighlight objects filtered by the is_active column
 *
 * @package    propel.generator.komideals.om
 */
abstract class BaseDealFeedHighlightQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseDealFeedHighlightQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'komideals', $modelName = 'DealFeedHighlight', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new DealFeedHighlightQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    DealFeedHighlightQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof DealFeedHighlightQuery) {
			return $criteria;
		}
		$query = new DealFeedHighlightQuery();
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
	 * @return    DealFeedHighlight|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = DealFeedHighlightPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    DealFeedHighlightQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(DealFeedHighlightPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    DealFeedHighlightQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(DealFeedHighlightPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedHighlightQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(DealFeedHighlightPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the deal_feed_id column
	 * 
	 * @param     int|array $dealFeedId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedHighlightQuery The current query, for fluid interface
	 */
	public function filterByDealFeedId($dealFeedId = null, $comparison = null)
	{
		if (is_array($dealFeedId)) {
			$useMinMax = false;
			if (isset($dealFeedId['min'])) {
				$this->addUsingAlias(DealFeedHighlightPeer::DEAL_FEED_ID, $dealFeedId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dealFeedId['max'])) {
				$this->addUsingAlias(DealFeedHighlightPeer::DEAL_FEED_ID, $dealFeedId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedHighlightPeer::DEAL_FEED_ID, $dealFeedId, $comparison);
	}

	/**
	 * Filter the query on the content column
	 * 
	 * @param     string $content The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedHighlightQuery The current query, for fluid interface
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
		return $this->addUsingAlias(DealFeedHighlightPeer::CONTENT, $content, $comparison);
	}

	/**
	 * Filter the query on the date_created column
	 * 
	 * @param     string|array $dateCreated The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedHighlightQuery The current query, for fluid interface
	 */
	public function filterByDateCreated($dateCreated = null, $comparison = null)
	{
		if (is_array($dateCreated)) {
			$useMinMax = false;
			if (isset($dateCreated['min'])) {
				$this->addUsingAlias(DealFeedHighlightPeer::DATE_CREATED, $dateCreated['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateCreated['max'])) {
				$this->addUsingAlias(DealFeedHighlightPeer::DATE_CREATED, $dateCreated['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedHighlightPeer::DATE_CREATED, $dateCreated, $comparison);
	}

	/**
	 * Filter the query on the is_active column
	 * 
	 * @param     int|array $isActive The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedHighlightQuery The current query, for fluid interface
	 */
	public function filterByIsActive($isActive = null, $comparison = null)
	{
		if (is_array($isActive)) {
			$useMinMax = false;
			if (isset($isActive['min'])) {
				$this->addUsingAlias(DealFeedHighlightPeer::IS_ACTIVE, $isActive['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isActive['max'])) {
				$this->addUsingAlias(DealFeedHighlightPeer::IS_ACTIVE, $isActive['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedHighlightPeer::IS_ACTIVE, $isActive, $comparison);
	}

	/**
	 * Filter the query by a related DealFeed object
	 *
	 * @param     DealFeed $dealFeed  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedHighlightQuery The current query, for fluid interface
	 */
	public function filterByDealFeed($dealFeed, $comparison = null)
	{
		return $this
			->addUsingAlias(DealFeedHighlightPeer::DEAL_FEED_ID, $dealFeed->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the DealFeed relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedHighlightQuery The current query, for fluid interface
	 */
	public function joinDealFeed($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('DealFeed');
		
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
			$this->addJoinObject($join, 'DealFeed');
		}
		
		return $this;
	}

	/**
	 * Use the DealFeed relation DealFeed object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedQuery A secondary query class using the current class as primary query
	 */
	public function useDealFeedQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinDealFeed($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'DealFeed', 'DealFeedQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     DealFeedHighlight $dealFeedHighlight Object to remove from the list of results
	 *
	 * @return    DealFeedHighlightQuery The current query, for fluid interface
	 */
	public function prune($dealFeedHighlight = null)
	{
		if ($dealFeedHighlight) {
			$this->addUsingAlias(DealFeedHighlightPeer::ID, $dealFeedHighlight->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseDealFeedHighlightQuery
