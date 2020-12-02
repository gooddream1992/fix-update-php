<?php


/**
 * Base class that represents a query for the 'deal_feed_taxonomy_dmoz' table.
 *
 * 
 *
 * @method     DealFeedTaxonomyDmozQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     DealFeedTaxonomyDmozQuery orderByDateCreated($order = Criteria::ASC) Order by the date_created column
 * @method     DealFeedTaxonomyDmozQuery orderByDateModified($order = Criteria::ASC) Order by the date_modified column
 * @method     DealFeedTaxonomyDmozQuery orderByConfidence($order = Criteria::ASC) Order by the confidence column
 * @method     DealFeedTaxonomyDmozQuery orderByIsActive($order = Criteria::ASC) Order by the is_active column
 * @method     DealFeedTaxonomyDmozQuery orderByDealFeedId($order = Criteria::ASC) Order by the deal_feed_id column
 * @method     DealFeedTaxonomyDmozQuery orderByTaxonomyDmozId($order = Criteria::ASC) Order by the taxonomy_dmoz_id column
 *
 * @method     DealFeedTaxonomyDmozQuery groupById() Group by the id column
 * @method     DealFeedTaxonomyDmozQuery groupByDateCreated() Group by the date_created column
 * @method     DealFeedTaxonomyDmozQuery groupByDateModified() Group by the date_modified column
 * @method     DealFeedTaxonomyDmozQuery groupByConfidence() Group by the confidence column
 * @method     DealFeedTaxonomyDmozQuery groupByIsActive() Group by the is_active column
 * @method     DealFeedTaxonomyDmozQuery groupByDealFeedId() Group by the deal_feed_id column
 * @method     DealFeedTaxonomyDmozQuery groupByTaxonomyDmozId() Group by the taxonomy_dmoz_id column
 *
 * @method     DealFeedTaxonomyDmozQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     DealFeedTaxonomyDmozQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     DealFeedTaxonomyDmozQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     DealFeedTaxonomyDmozQuery leftJoinDealFeed($relationAlias = null) Adds a LEFT JOIN clause to the query using the DealFeed relation
 * @method     DealFeedTaxonomyDmozQuery rightJoinDealFeed($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DealFeed relation
 * @method     DealFeedTaxonomyDmozQuery innerJoinDealFeed($relationAlias = null) Adds a INNER JOIN clause to the query using the DealFeed relation
 *
 * @method     DealFeedTaxonomyDmozQuery leftJoinTaxonomyDmoz($relationAlias = null) Adds a LEFT JOIN clause to the query using the TaxonomyDmoz relation
 * @method     DealFeedTaxonomyDmozQuery rightJoinTaxonomyDmoz($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TaxonomyDmoz relation
 * @method     DealFeedTaxonomyDmozQuery innerJoinTaxonomyDmoz($relationAlias = null) Adds a INNER JOIN clause to the query using the TaxonomyDmoz relation
 *
 * @method     DealFeedTaxonomyDmoz findOne(PropelPDO $con = null) Return the first DealFeedTaxonomyDmoz matching the query
 * @method     DealFeedTaxonomyDmoz findOneOrCreate(PropelPDO $con = null) Return the first DealFeedTaxonomyDmoz matching the query, or a new DealFeedTaxonomyDmoz object populated from the query conditions when no match is found
 *
 * @method     DealFeedTaxonomyDmoz findOneById(int $id) Return the first DealFeedTaxonomyDmoz filtered by the id column
 * @method     DealFeedTaxonomyDmoz findOneByDateCreated(string $date_created) Return the first DealFeedTaxonomyDmoz filtered by the date_created column
 * @method     DealFeedTaxonomyDmoz findOneByDateModified(string $date_modified) Return the first DealFeedTaxonomyDmoz filtered by the date_modified column
 * @method     DealFeedTaxonomyDmoz findOneByConfidence(double $confidence) Return the first DealFeedTaxonomyDmoz filtered by the confidence column
 * @method     DealFeedTaxonomyDmoz findOneByIsActive(int $is_active) Return the first DealFeedTaxonomyDmoz filtered by the is_active column
 * @method     DealFeedTaxonomyDmoz findOneByDealFeedId(int $deal_feed_id) Return the first DealFeedTaxonomyDmoz filtered by the deal_feed_id column
 * @method     DealFeedTaxonomyDmoz findOneByTaxonomyDmozId(int $taxonomy_dmoz_id) Return the first DealFeedTaxonomyDmoz filtered by the taxonomy_dmoz_id column
 *
 * @method     array findById(int $id) Return DealFeedTaxonomyDmoz objects filtered by the id column
 * @method     array findByDateCreated(string $date_created) Return DealFeedTaxonomyDmoz objects filtered by the date_created column
 * @method     array findByDateModified(string $date_modified) Return DealFeedTaxonomyDmoz objects filtered by the date_modified column
 * @method     array findByConfidence(double $confidence) Return DealFeedTaxonomyDmoz objects filtered by the confidence column
 * @method     array findByIsActive(int $is_active) Return DealFeedTaxonomyDmoz objects filtered by the is_active column
 * @method     array findByDealFeedId(int $deal_feed_id) Return DealFeedTaxonomyDmoz objects filtered by the deal_feed_id column
 * @method     array findByTaxonomyDmozId(int $taxonomy_dmoz_id) Return DealFeedTaxonomyDmoz objects filtered by the taxonomy_dmoz_id column
 *
 * @package    propel.generator.komideals.om
 */
abstract class BaseDealFeedTaxonomyDmozQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseDealFeedTaxonomyDmozQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'komideals', $modelName = 'DealFeedTaxonomyDmoz', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new DealFeedTaxonomyDmozQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    DealFeedTaxonomyDmozQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof DealFeedTaxonomyDmozQuery) {
			return $criteria;
		}
		$query = new DealFeedTaxonomyDmozQuery();
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
	 * @return    DealFeedTaxonomyDmoz|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = DealFeedTaxonomyDmozPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    DealFeedTaxonomyDmozQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(DealFeedTaxonomyDmozPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    DealFeedTaxonomyDmozQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(DealFeedTaxonomyDmozPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedTaxonomyDmozQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(DealFeedTaxonomyDmozPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the date_created column
	 * 
	 * @param     string|array $dateCreated The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedTaxonomyDmozQuery The current query, for fluid interface
	 */
	public function filterByDateCreated($dateCreated = null, $comparison = null)
	{
		if (is_array($dateCreated)) {
			$useMinMax = false;
			if (isset($dateCreated['min'])) {
				$this->addUsingAlias(DealFeedTaxonomyDmozPeer::DATE_CREATED, $dateCreated['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateCreated['max'])) {
				$this->addUsingAlias(DealFeedTaxonomyDmozPeer::DATE_CREATED, $dateCreated['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedTaxonomyDmozPeer::DATE_CREATED, $dateCreated, $comparison);
	}

	/**
	 * Filter the query on the date_modified column
	 * 
	 * @param     string|array $dateModified The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedTaxonomyDmozQuery The current query, for fluid interface
	 */
	public function filterByDateModified($dateModified = null, $comparison = null)
	{
		if (is_array($dateModified)) {
			$useMinMax = false;
			if (isset($dateModified['min'])) {
				$this->addUsingAlias(DealFeedTaxonomyDmozPeer::DATE_MODIFIED, $dateModified['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateModified['max'])) {
				$this->addUsingAlias(DealFeedTaxonomyDmozPeer::DATE_MODIFIED, $dateModified['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedTaxonomyDmozPeer::DATE_MODIFIED, $dateModified, $comparison);
	}

	/**
	 * Filter the query on the confidence column
	 * 
	 * @param     double|array $confidence The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedTaxonomyDmozQuery The current query, for fluid interface
	 */
	public function filterByConfidence($confidence = null, $comparison = null)
	{
		if (is_array($confidence)) {
			$useMinMax = false;
			if (isset($confidence['min'])) {
				$this->addUsingAlias(DealFeedTaxonomyDmozPeer::CONFIDENCE, $confidence['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($confidence['max'])) {
				$this->addUsingAlias(DealFeedTaxonomyDmozPeer::CONFIDENCE, $confidence['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedTaxonomyDmozPeer::CONFIDENCE, $confidence, $comparison);
	}

	/**
	 * Filter the query on the is_active column
	 * 
	 * @param     int|array $isActive The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedTaxonomyDmozQuery The current query, for fluid interface
	 */
	public function filterByIsActive($isActive = null, $comparison = null)
	{
		if (is_array($isActive)) {
			$useMinMax = false;
			if (isset($isActive['min'])) {
				$this->addUsingAlias(DealFeedTaxonomyDmozPeer::IS_ACTIVE, $isActive['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isActive['max'])) {
				$this->addUsingAlias(DealFeedTaxonomyDmozPeer::IS_ACTIVE, $isActive['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedTaxonomyDmozPeer::IS_ACTIVE, $isActive, $comparison);
	}

	/**
	 * Filter the query on the deal_feed_id column
	 * 
	 * @param     int|array $dealFeedId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedTaxonomyDmozQuery The current query, for fluid interface
	 */
	public function filterByDealFeedId($dealFeedId = null, $comparison = null)
	{
		if (is_array($dealFeedId)) {
			$useMinMax = false;
			if (isset($dealFeedId['min'])) {
				$this->addUsingAlias(DealFeedTaxonomyDmozPeer::DEAL_FEED_ID, $dealFeedId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dealFeedId['max'])) {
				$this->addUsingAlias(DealFeedTaxonomyDmozPeer::DEAL_FEED_ID, $dealFeedId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedTaxonomyDmozPeer::DEAL_FEED_ID, $dealFeedId, $comparison);
	}

	/**
	 * Filter the query on the taxonomy_dmoz_id column
	 * 
	 * @param     int|array $taxonomyDmozId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedTaxonomyDmozQuery The current query, for fluid interface
	 */
	public function filterByTaxonomyDmozId($taxonomyDmozId = null, $comparison = null)
	{
		if (is_array($taxonomyDmozId)) {
			$useMinMax = false;
			if (isset($taxonomyDmozId['min'])) {
				$this->addUsingAlias(DealFeedTaxonomyDmozPeer::TAXONOMY_DMOZ_ID, $taxonomyDmozId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($taxonomyDmozId['max'])) {
				$this->addUsingAlias(DealFeedTaxonomyDmozPeer::TAXONOMY_DMOZ_ID, $taxonomyDmozId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedTaxonomyDmozPeer::TAXONOMY_DMOZ_ID, $taxonomyDmozId, $comparison);
	}

	/**
	 * Filter the query by a related DealFeed object
	 *
	 * @param     DealFeed $dealFeed  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedTaxonomyDmozQuery The current query, for fluid interface
	 */
	public function filterByDealFeed($dealFeed, $comparison = null)
	{
		return $this
			->addUsingAlias(DealFeedTaxonomyDmozPeer::DEAL_FEED_ID, $dealFeed->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the DealFeed relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedTaxonomyDmozQuery The current query, for fluid interface
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
	 * Filter the query by a related TaxonomyDmoz object
	 *
	 * @param     TaxonomyDmoz $taxonomyDmoz  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedTaxonomyDmozQuery The current query, for fluid interface
	 */
	public function filterByTaxonomyDmoz($taxonomyDmoz, $comparison = null)
	{
		return $this
			->addUsingAlias(DealFeedTaxonomyDmozPeer::TAXONOMY_DMOZ_ID, $taxonomyDmoz->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the TaxonomyDmoz relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedTaxonomyDmozQuery The current query, for fluid interface
	 */
	public function joinTaxonomyDmoz($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('TaxonomyDmoz');
		
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
			$this->addJoinObject($join, 'TaxonomyDmoz');
		}
		
		return $this;
	}

	/**
	 * Use the TaxonomyDmoz relation TaxonomyDmoz object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TaxonomyDmozQuery A secondary query class using the current class as primary query
	 */
	public function useTaxonomyDmozQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinTaxonomyDmoz($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'TaxonomyDmoz', 'TaxonomyDmozQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     DealFeedTaxonomyDmoz $dealFeedTaxonomyDmoz Object to remove from the list of results
	 *
	 * @return    DealFeedTaxonomyDmozQuery The current query, for fluid interface
	 */
	public function prune($dealFeedTaxonomyDmoz = null)
	{
		if ($dealFeedTaxonomyDmoz) {
			$this->addUsingAlias(DealFeedTaxonomyDmozPeer::ID, $dealFeedTaxonomyDmoz->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseDealFeedTaxonomyDmozQuery
