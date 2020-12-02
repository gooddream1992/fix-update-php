<?php


/**
 * Base class that represents a query for the 'deal_feed_source' table.
 *
 * 
 *
 * @method     DealFeedSourceQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     DealFeedSourceQuery orderByContent($order = Criteria::ASC) Order by the content column
 * @method     DealFeedSourceQuery orderByDateCreated($order = Criteria::ASC) Order by the date_created column
 * @method     DealFeedSourceQuery orderByIsActive($order = Criteria::ASC) Order by the is_active column
 * @method     DealFeedSourceQuery orderByClickUrl($order = Criteria::ASC) Order by the click_url column
 * @method     DealFeedSourceQuery orderByPublisherId($order = Criteria::ASC) Order by the publisher_id column
 *
 * @method     DealFeedSourceQuery groupById() Group by the id column
 * @method     DealFeedSourceQuery groupByContent() Group by the content column
 * @method     DealFeedSourceQuery groupByDateCreated() Group by the date_created column
 * @method     DealFeedSourceQuery groupByIsActive() Group by the is_active column
 * @method     DealFeedSourceQuery groupByClickUrl() Group by the click_url column
 * @method     DealFeedSourceQuery groupByPublisherId() Group by the publisher_id column
 *
 * @method     DealFeedSourceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     DealFeedSourceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     DealFeedSourceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     DealFeedSourceQuery leftJoinDealFeed($relationAlias = null) Adds a LEFT JOIN clause to the query using the DealFeed relation
 * @method     DealFeedSourceQuery rightJoinDealFeed($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DealFeed relation
 * @method     DealFeedSourceQuery innerJoinDealFeed($relationAlias = null) Adds a INNER JOIN clause to the query using the DealFeed relation
 *
 * @method     DealFeedSource findOne(PropelPDO $con = null) Return the first DealFeedSource matching the query
 * @method     DealFeedSource findOneOrCreate(PropelPDO $con = null) Return the first DealFeedSource matching the query, or a new DealFeedSource object populated from the query conditions when no match is found
 *
 * @method     DealFeedSource findOneById(int $id) Return the first DealFeedSource filtered by the id column
 * @method     DealFeedSource findOneByContent(string $content) Return the first DealFeedSource filtered by the content column
 * @method     DealFeedSource findOneByDateCreated(string $date_created) Return the first DealFeedSource filtered by the date_created column
 * @method     DealFeedSource findOneByIsActive(int $is_active) Return the first DealFeedSource filtered by the is_active column
 * @method     DealFeedSource findOneByClickUrl(string $click_url) Return the first DealFeedSource filtered by the click_url column
 * @method     DealFeedSource findOneByPublisherId(string $publisher_id) Return the first DealFeedSource filtered by the publisher_id column
 *
 * @method     array findById(int $id) Return DealFeedSource objects filtered by the id column
 * @method     array findByContent(string $content) Return DealFeedSource objects filtered by the content column
 * @method     array findByDateCreated(string $date_created) Return DealFeedSource objects filtered by the date_created column
 * @method     array findByIsActive(int $is_active) Return DealFeedSource objects filtered by the is_active column
 * @method     array findByClickUrl(string $click_url) Return DealFeedSource objects filtered by the click_url column
 * @method     array findByPublisherId(string $publisher_id) Return DealFeedSource objects filtered by the publisher_id column
 *
 * @package    propel.generator.komideals.om
 */
abstract class BaseDealFeedSourceQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseDealFeedSourceQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'komideals', $modelName = 'DealFeedSource', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new DealFeedSourceQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    DealFeedSourceQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof DealFeedSourceQuery) {
			return $criteria;
		}
		$query = new DealFeedSourceQuery();
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
	 * @return    DealFeedSource|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = DealFeedSourcePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    DealFeedSourceQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(DealFeedSourcePeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    DealFeedSourceQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(DealFeedSourcePeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedSourceQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(DealFeedSourcePeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the content column
	 * 
	 * @param     string $content The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedSourceQuery The current query, for fluid interface
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
		return $this->addUsingAlias(DealFeedSourcePeer::CONTENT, $content, $comparison);
	}

	/**
	 * Filter the query on the date_created column
	 * 
	 * @param     string|array $dateCreated The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedSourceQuery The current query, for fluid interface
	 */
	public function filterByDateCreated($dateCreated = null, $comparison = null)
	{
		if (is_array($dateCreated)) {
			$useMinMax = false;
			if (isset($dateCreated['min'])) {
				$this->addUsingAlias(DealFeedSourcePeer::DATE_CREATED, $dateCreated['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateCreated['max'])) {
				$this->addUsingAlias(DealFeedSourcePeer::DATE_CREATED, $dateCreated['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedSourcePeer::DATE_CREATED, $dateCreated, $comparison);
	}

	/**
	 * Filter the query on the is_active column
	 * 
	 * @param     int|array $isActive The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedSourceQuery The current query, for fluid interface
	 */
	public function filterByIsActive($isActive = null, $comparison = null)
	{
		if (is_array($isActive)) {
			$useMinMax = false;
			if (isset($isActive['min'])) {
				$this->addUsingAlias(DealFeedSourcePeer::IS_ACTIVE, $isActive['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isActive['max'])) {
				$this->addUsingAlias(DealFeedSourcePeer::IS_ACTIVE, $isActive['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedSourcePeer::IS_ACTIVE, $isActive, $comparison);
	}

	/**
	 * Filter the query on the click_url column
	 * 
	 * @param     string $clickUrl The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedSourceQuery The current query, for fluid interface
	 */
	public function filterByClickUrl($clickUrl = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($clickUrl)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $clickUrl)) {
				$clickUrl = str_replace('*', '%', $clickUrl);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DealFeedSourcePeer::CLICK_URL, $clickUrl, $comparison);
	}

	/**
	 * Filter the query on the publisher_id column
	 * 
	 * @param     string $publisherId The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedSourceQuery The current query, for fluid interface
	 */
	public function filterByPublisherId($publisherId = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($publisherId)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $publisherId)) {
				$publisherId = str_replace('*', '%', $publisherId);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DealFeedSourcePeer::PUBLISHER_ID, $publisherId, $comparison);
	}

	/**
	 * Filter the query by a related DealFeed object
	 *
	 * @param     DealFeed $dealFeed  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedSourceQuery The current query, for fluid interface
	 */
	public function filterByDealFeed($dealFeed, $comparison = null)
	{
		return $this
			->addUsingAlias(DealFeedSourcePeer::ID, $dealFeed->getDealFeedSourceId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the DealFeed relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedSourceQuery The current query, for fluid interface
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
	 * @param     DealFeedSource $dealFeedSource Object to remove from the list of results
	 *
	 * @return    DealFeedSourceQuery The current query, for fluid interface
	 */
	public function prune($dealFeedSource = null)
	{
		if ($dealFeedSource) {
			$this->addUsingAlias(DealFeedSourcePeer::ID, $dealFeedSource->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseDealFeedSourceQuery
