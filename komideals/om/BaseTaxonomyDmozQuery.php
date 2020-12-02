<?php


/**
 * Base class that represents a query for the 'taxonomy_dmoz' table.
 *
 * 
 *
 * @method     TaxonomyDmozQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     TaxonomyDmozQuery orderByParentId($order = Criteria::ASC) Order by the parent_id column
 * @method     TaxonomyDmozQuery orderByTaxonomyName($order = Criteria::ASC) Order by the taxonomy_name column
 * @method     TaxonomyDmozQuery orderByDateCreated($order = Criteria::ASC) Order by the date_created column
 * @method     TaxonomyDmozQuery orderByDateModified($order = Criteria::ASC) Order by the date_modified column
 * @method     TaxonomyDmozQuery orderByIsActive($order = Criteria::ASC) Order by the is_active column
 * @method     TaxonomyDmozQuery orderBySlug($order = Criteria::ASC) Order by the slug column
 * @method     TaxonomyDmozQuery orderBySlugPart($order = Criteria::ASC) Order by the slug_part column
 *
 * @method     TaxonomyDmozQuery groupById() Group by the id column
 * @method     TaxonomyDmozQuery groupByParentId() Group by the parent_id column
 * @method     TaxonomyDmozQuery groupByTaxonomyName() Group by the taxonomy_name column
 * @method     TaxonomyDmozQuery groupByDateCreated() Group by the date_created column
 * @method     TaxonomyDmozQuery groupByDateModified() Group by the date_modified column
 * @method     TaxonomyDmozQuery groupByIsActive() Group by the is_active column
 * @method     TaxonomyDmozQuery groupBySlug() Group by the slug column
 * @method     TaxonomyDmozQuery groupBySlugPart() Group by the slug_part column
 *
 * @method     TaxonomyDmozQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     TaxonomyDmozQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     TaxonomyDmozQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     TaxonomyDmozQuery leftJoinTaxonomyDmozRelatedByParentId($relationAlias = null) Adds a LEFT JOIN clause to the query using the TaxonomyDmozRelatedByParentId relation
 * @method     TaxonomyDmozQuery rightJoinTaxonomyDmozRelatedByParentId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TaxonomyDmozRelatedByParentId relation
 * @method     TaxonomyDmozQuery innerJoinTaxonomyDmozRelatedByParentId($relationAlias = null) Adds a INNER JOIN clause to the query using the TaxonomyDmozRelatedByParentId relation
 *
 * @method     TaxonomyDmozQuery leftJoinDealFeedTaxonomyDmoz($relationAlias = null) Adds a LEFT JOIN clause to the query using the DealFeedTaxonomyDmoz relation
 * @method     TaxonomyDmozQuery rightJoinDealFeedTaxonomyDmoz($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DealFeedTaxonomyDmoz relation
 * @method     TaxonomyDmozQuery innerJoinDealFeedTaxonomyDmoz($relationAlias = null) Adds a INNER JOIN clause to the query using the DealFeedTaxonomyDmoz relation
 *
 * @method     TaxonomyDmozQuery leftJoinTaxonomyDmozRelatedById($relationAlias = null) Adds a LEFT JOIN clause to the query using the TaxonomyDmozRelatedById relation
 * @method     TaxonomyDmozQuery rightJoinTaxonomyDmozRelatedById($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TaxonomyDmozRelatedById relation
 * @method     TaxonomyDmozQuery innerJoinTaxonomyDmozRelatedById($relationAlias = null) Adds a INNER JOIN clause to the query using the TaxonomyDmozRelatedById relation
 *
 * @method     TaxonomyDmoz findOne(PropelPDO $con = null) Return the first TaxonomyDmoz matching the query
 * @method     TaxonomyDmoz findOneOrCreate(PropelPDO $con = null) Return the first TaxonomyDmoz matching the query, or a new TaxonomyDmoz object populated from the query conditions when no match is found
 *
 * @method     TaxonomyDmoz findOneById(int $id) Return the first TaxonomyDmoz filtered by the id column
 * @method     TaxonomyDmoz findOneByParentId(int $parent_id) Return the first TaxonomyDmoz filtered by the parent_id column
 * @method     TaxonomyDmoz findOneByTaxonomyName(string $taxonomy_name) Return the first TaxonomyDmoz filtered by the taxonomy_name column
 * @method     TaxonomyDmoz findOneByDateCreated(string $date_created) Return the first TaxonomyDmoz filtered by the date_created column
 * @method     TaxonomyDmoz findOneByDateModified(string $date_modified) Return the first TaxonomyDmoz filtered by the date_modified column
 * @method     TaxonomyDmoz findOneByIsActive(int $is_active) Return the first TaxonomyDmoz filtered by the is_active column
 * @method     TaxonomyDmoz findOneBySlug(string $slug) Return the first TaxonomyDmoz filtered by the slug column
 * @method     TaxonomyDmoz findOneBySlugPart(string $slug_part) Return the first TaxonomyDmoz filtered by the slug_part column
 *
 * @method     array findById(int $id) Return TaxonomyDmoz objects filtered by the id column
 * @method     array findByParentId(int $parent_id) Return TaxonomyDmoz objects filtered by the parent_id column
 * @method     array findByTaxonomyName(string $taxonomy_name) Return TaxonomyDmoz objects filtered by the taxonomy_name column
 * @method     array findByDateCreated(string $date_created) Return TaxonomyDmoz objects filtered by the date_created column
 * @method     array findByDateModified(string $date_modified) Return TaxonomyDmoz objects filtered by the date_modified column
 * @method     array findByIsActive(int $is_active) Return TaxonomyDmoz objects filtered by the is_active column
 * @method     array findBySlug(string $slug) Return TaxonomyDmoz objects filtered by the slug column
 * @method     array findBySlugPart(string $slug_part) Return TaxonomyDmoz objects filtered by the slug_part column
 *
 * @package    propel.generator.komideals.om
 */
abstract class BaseTaxonomyDmozQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseTaxonomyDmozQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'komideals', $modelName = 'TaxonomyDmoz', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new TaxonomyDmozQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    TaxonomyDmozQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof TaxonomyDmozQuery) {
			return $criteria;
		}
		$query = new TaxonomyDmozQuery();
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
	 * @return    TaxonomyDmoz|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = TaxonomyDmozPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    TaxonomyDmozQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(TaxonomyDmozPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    TaxonomyDmozQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(TaxonomyDmozPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TaxonomyDmozQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(TaxonomyDmozPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the parent_id column
	 * 
	 * @param     int|array $parentId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TaxonomyDmozQuery The current query, for fluid interface
	 */
	public function filterByParentId($parentId = null, $comparison = null)
	{
		if (is_array($parentId)) {
			$useMinMax = false;
			if (isset($parentId['min'])) {
				$this->addUsingAlias(TaxonomyDmozPeer::PARENT_ID, $parentId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($parentId['max'])) {
				$this->addUsingAlias(TaxonomyDmozPeer::PARENT_ID, $parentId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TaxonomyDmozPeer::PARENT_ID, $parentId, $comparison);
	}

	/**
	 * Filter the query on the taxonomy_name column
	 * 
	 * @param     string $taxonomyName The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TaxonomyDmozQuery The current query, for fluid interface
	 */
	public function filterByTaxonomyName($taxonomyName = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($taxonomyName)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $taxonomyName)) {
				$taxonomyName = str_replace('*', '%', $taxonomyName);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(TaxonomyDmozPeer::TAXONOMY_NAME, $taxonomyName, $comparison);
	}

	/**
	 * Filter the query on the date_created column
	 * 
	 * @param     string|array $dateCreated The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TaxonomyDmozQuery The current query, for fluid interface
	 */
	public function filterByDateCreated($dateCreated = null, $comparison = null)
	{
		if (is_array($dateCreated)) {
			$useMinMax = false;
			if (isset($dateCreated['min'])) {
				$this->addUsingAlias(TaxonomyDmozPeer::DATE_CREATED, $dateCreated['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateCreated['max'])) {
				$this->addUsingAlias(TaxonomyDmozPeer::DATE_CREATED, $dateCreated['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TaxonomyDmozPeer::DATE_CREATED, $dateCreated, $comparison);
	}

	/**
	 * Filter the query on the date_modified column
	 * 
	 * @param     string|array $dateModified The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TaxonomyDmozQuery The current query, for fluid interface
	 */
	public function filterByDateModified($dateModified = null, $comparison = null)
	{
		if (is_array($dateModified)) {
			$useMinMax = false;
			if (isset($dateModified['min'])) {
				$this->addUsingAlias(TaxonomyDmozPeer::DATE_MODIFIED, $dateModified['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateModified['max'])) {
				$this->addUsingAlias(TaxonomyDmozPeer::DATE_MODIFIED, $dateModified['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TaxonomyDmozPeer::DATE_MODIFIED, $dateModified, $comparison);
	}

	/**
	 * Filter the query on the is_active column
	 * 
	 * @param     int|array $isActive The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TaxonomyDmozQuery The current query, for fluid interface
	 */
	public function filterByIsActive($isActive = null, $comparison = null)
	{
		if (is_array($isActive)) {
			$useMinMax = false;
			if (isset($isActive['min'])) {
				$this->addUsingAlias(TaxonomyDmozPeer::IS_ACTIVE, $isActive['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isActive['max'])) {
				$this->addUsingAlias(TaxonomyDmozPeer::IS_ACTIVE, $isActive['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(TaxonomyDmozPeer::IS_ACTIVE, $isActive, $comparison);
	}

	/**
	 * Filter the query on the slug column
	 * 
	 * @param     string $slug The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TaxonomyDmozQuery The current query, for fluid interface
	 */
	public function filterBySlug($slug = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($slug)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $slug)) {
				$slug = str_replace('*', '%', $slug);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(TaxonomyDmozPeer::SLUG, $slug, $comparison);
	}

	/**
	 * Filter the query on the slug_part column
	 * 
	 * @param     string $slugPart The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TaxonomyDmozQuery The current query, for fluid interface
	 */
	public function filterBySlugPart($slugPart = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($slugPart)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $slugPart)) {
				$slugPart = str_replace('*', '%', $slugPart);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(TaxonomyDmozPeer::SLUG_PART, $slugPart, $comparison);
	}

	/**
	 * Filter the query by a related TaxonomyDmoz object
	 *
	 * @param     TaxonomyDmoz $taxonomyDmoz  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TaxonomyDmozQuery The current query, for fluid interface
	 */
	public function filterByTaxonomyDmozRelatedByParentId($taxonomyDmoz, $comparison = null)
	{
		return $this
			->addUsingAlias(TaxonomyDmozPeer::PARENT_ID, $taxonomyDmoz->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the TaxonomyDmozRelatedByParentId relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TaxonomyDmozQuery The current query, for fluid interface
	 */
	public function joinTaxonomyDmozRelatedByParentId($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('TaxonomyDmozRelatedByParentId');
		
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
			$this->addJoinObject($join, 'TaxonomyDmozRelatedByParentId');
		}
		
		return $this;
	}

	/**
	 * Use the TaxonomyDmozRelatedByParentId relation TaxonomyDmoz object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TaxonomyDmozQuery A secondary query class using the current class as primary query
	 */
	public function useTaxonomyDmozRelatedByParentIdQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinTaxonomyDmozRelatedByParentId($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'TaxonomyDmozRelatedByParentId', 'TaxonomyDmozQuery');
	}

	/**
	 * Filter the query by a related DealFeedTaxonomyDmoz object
	 *
	 * @param     DealFeedTaxonomyDmoz $dealFeedTaxonomyDmoz  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TaxonomyDmozQuery The current query, for fluid interface
	 */
	public function filterByDealFeedTaxonomyDmoz($dealFeedTaxonomyDmoz, $comparison = null)
	{
		return $this
			->addUsingAlias(TaxonomyDmozPeer::ID, $dealFeedTaxonomyDmoz->getTaxonomyDmozId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the DealFeedTaxonomyDmoz relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TaxonomyDmozQuery The current query, for fluid interface
	 */
	public function joinDealFeedTaxonomyDmoz($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('DealFeedTaxonomyDmoz');
		
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
			$this->addJoinObject($join, 'DealFeedTaxonomyDmoz');
		}
		
		return $this;
	}

	/**
	 * Use the DealFeedTaxonomyDmoz relation DealFeedTaxonomyDmoz object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedTaxonomyDmozQuery A secondary query class using the current class as primary query
	 */
	public function useDealFeedTaxonomyDmozQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinDealFeedTaxonomyDmoz($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'DealFeedTaxonomyDmoz', 'DealFeedTaxonomyDmozQuery');
	}

	/**
	 * Filter the query by a related TaxonomyDmoz object
	 *
	 * @param     TaxonomyDmoz $taxonomyDmoz  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    TaxonomyDmozQuery The current query, for fluid interface
	 */
	public function filterByTaxonomyDmozRelatedById($taxonomyDmoz, $comparison = null)
	{
		return $this
			->addUsingAlias(TaxonomyDmozPeer::ID, $taxonomyDmoz->getParentId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the TaxonomyDmozRelatedById relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TaxonomyDmozQuery The current query, for fluid interface
	 */
	public function joinTaxonomyDmozRelatedById($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('TaxonomyDmozRelatedById');
		
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
			$this->addJoinObject($join, 'TaxonomyDmozRelatedById');
		}
		
		return $this;
	}

	/**
	 * Use the TaxonomyDmozRelatedById relation TaxonomyDmoz object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TaxonomyDmozQuery A secondary query class using the current class as primary query
	 */
	public function useTaxonomyDmozRelatedByIdQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinTaxonomyDmozRelatedById($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'TaxonomyDmozRelatedById', 'TaxonomyDmozQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     TaxonomyDmoz $taxonomyDmoz Object to remove from the list of results
	 *
	 * @return    TaxonomyDmozQuery The current query, for fluid interface
	 */
	public function prune($taxonomyDmoz = null)
	{
		if ($taxonomyDmoz) {
			$this->addUsingAlias(TaxonomyDmozPeer::ID, $taxonomyDmoz->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseTaxonomyDmozQuery
