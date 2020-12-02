<?php


/**
 * Base class that represents a query for the 'category' table.
 *
 * 
 *
 * @method     CategoryQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     CategoryQuery orderByParentId($order = Criteria::ASC) Order by the parent_id column
 * @method     CategoryQuery orderByCategoryName($order = Criteria::ASC) Order by the category_name column
 * @method     CategoryQuery orderByDateCreated($order = Criteria::ASC) Order by the date_created column
 * @method     CategoryQuery orderByIsActive($order = Criteria::ASC) Order by the is_active column
 * @method     CategoryQuery orderBySlug($order = Criteria::ASC) Order by the slug column
 *
 * @method     CategoryQuery groupById() Group by the id column
 * @method     CategoryQuery groupByParentId() Group by the parent_id column
 * @method     CategoryQuery groupByCategoryName() Group by the category_name column
 * @method     CategoryQuery groupByDateCreated() Group by the date_created column
 * @method     CategoryQuery groupByIsActive() Group by the is_active column
 * @method     CategoryQuery groupBySlug() Group by the slug column
 *
 * @method     CategoryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     CategoryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     CategoryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     CategoryQuery leftJoinCategoryRelatedByParentId($relationAlias = null) Adds a LEFT JOIN clause to the query using the CategoryRelatedByParentId relation
 * @method     CategoryQuery rightJoinCategoryRelatedByParentId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CategoryRelatedByParentId relation
 * @method     CategoryQuery innerJoinCategoryRelatedByParentId($relationAlias = null) Adds a INNER JOIN clause to the query using the CategoryRelatedByParentId relation
 *
 * @method     CategoryQuery leftJoinCategoryRelatedById($relationAlias = null) Adds a LEFT JOIN clause to the query using the CategoryRelatedById relation
 * @method     CategoryQuery rightJoinCategoryRelatedById($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CategoryRelatedById relation
 * @method     CategoryQuery innerJoinCategoryRelatedById($relationAlias = null) Adds a INNER JOIN clause to the query using the CategoryRelatedById relation
 *
 * @method     CategoryQuery leftJoinDeal($relationAlias = null) Adds a LEFT JOIN clause to the query using the Deal relation
 * @method     CategoryQuery rightJoinDeal($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Deal relation
 * @method     CategoryQuery innerJoinDeal($relationAlias = null) Adds a INNER JOIN clause to the query using the Deal relation
 *
 * @method     CategoryQuery leftJoinDealFeed($relationAlias = null) Adds a LEFT JOIN clause to the query using the DealFeed relation
 * @method     CategoryQuery rightJoinDealFeed($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DealFeed relation
 * @method     CategoryQuery innerJoinDealFeed($relationAlias = null) Adds a INNER JOIN clause to the query using the DealFeed relation
 *
 * @method     Category findOne(PropelPDO $con = null) Return the first Category matching the query
 * @method     Category findOneOrCreate(PropelPDO $con = null) Return the first Category matching the query, or a new Category object populated from the query conditions when no match is found
 *
 * @method     Category findOneById(int $id) Return the first Category filtered by the id column
 * @method     Category findOneByParentId(int $parent_id) Return the first Category filtered by the parent_id column
 * @method     Category findOneByCategoryName(string $category_name) Return the first Category filtered by the category_name column
 * @method     Category findOneByDateCreated(string $date_created) Return the first Category filtered by the date_created column
 * @method     Category findOneByIsActive(int $is_active) Return the first Category filtered by the is_active column
 * @method     Category findOneBySlug(string $slug) Return the first Category filtered by the slug column
 *
 * @method     array findById(int $id) Return Category objects filtered by the id column
 * @method     array findByParentId(int $parent_id) Return Category objects filtered by the parent_id column
 * @method     array findByCategoryName(string $category_name) Return Category objects filtered by the category_name column
 * @method     array findByDateCreated(string $date_created) Return Category objects filtered by the date_created column
 * @method     array findByIsActive(int $is_active) Return Category objects filtered by the is_active column
 * @method     array findBySlug(string $slug) Return Category objects filtered by the slug column
 *
 * @package    propel.generator.komideals.om
 */
abstract class BaseCategoryQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseCategoryQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'komideals', $modelName = 'Category', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new CategoryQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    CategoryQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof CategoryQuery) {
			return $criteria;
		}
		$query = new CategoryQuery();
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
	 * @return    Category|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = CategoryPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    CategoryQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(CategoryPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    CategoryQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(CategoryPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CategoryQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(CategoryPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the parent_id column
	 * 
	 * @param     int|array $parentId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CategoryQuery The current query, for fluid interface
	 */
	public function filterByParentId($parentId = null, $comparison = null)
	{
		if (is_array($parentId)) {
			$useMinMax = false;
			if (isset($parentId['min'])) {
				$this->addUsingAlias(CategoryPeer::PARENT_ID, $parentId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($parentId['max'])) {
				$this->addUsingAlias(CategoryPeer::PARENT_ID, $parentId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CategoryPeer::PARENT_ID, $parentId, $comparison);
	}

	/**
	 * Filter the query on the category_name column
	 * 
	 * @param     string $categoryName The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CategoryQuery The current query, for fluid interface
	 */
	public function filterByCategoryName($categoryName = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($categoryName)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $categoryName)) {
				$categoryName = str_replace('*', '%', $categoryName);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(CategoryPeer::CATEGORY_NAME, $categoryName, $comparison);
	}

	/**
	 * Filter the query on the date_created column
	 * 
	 * @param     string|array $dateCreated The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CategoryQuery The current query, for fluid interface
	 */
	public function filterByDateCreated($dateCreated = null, $comparison = null)
	{
		if (is_array($dateCreated)) {
			$useMinMax = false;
			if (isset($dateCreated['min'])) {
				$this->addUsingAlias(CategoryPeer::DATE_CREATED, $dateCreated['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateCreated['max'])) {
				$this->addUsingAlias(CategoryPeer::DATE_CREATED, $dateCreated['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CategoryPeer::DATE_CREATED, $dateCreated, $comparison);
	}

	/**
	 * Filter the query on the is_active column
	 * 
	 * @param     int|array $isActive The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CategoryQuery The current query, for fluid interface
	 */
	public function filterByIsActive($isActive = null, $comparison = null)
	{
		if (is_array($isActive)) {
			$useMinMax = false;
			if (isset($isActive['min'])) {
				$this->addUsingAlias(CategoryPeer::IS_ACTIVE, $isActive['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isActive['max'])) {
				$this->addUsingAlias(CategoryPeer::IS_ACTIVE, $isActive['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(CategoryPeer::IS_ACTIVE, $isActive, $comparison);
	}

	/**
	 * Filter the query on the slug column
	 * 
	 * @param     string $slug The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CategoryQuery The current query, for fluid interface
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
		return $this->addUsingAlias(CategoryPeer::SLUG, $slug, $comparison);
	}

	/**
	 * Filter the query by a related Category object
	 *
	 * @param     Category $category  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CategoryQuery The current query, for fluid interface
	 */
	public function filterByCategoryRelatedByParentId($category, $comparison = null)
	{
		return $this
			->addUsingAlias(CategoryPeer::PARENT_ID, $category->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the CategoryRelatedByParentId relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CategoryQuery The current query, for fluid interface
	 */
	public function joinCategoryRelatedByParentId($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('CategoryRelatedByParentId');
		
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
			$this->addJoinObject($join, 'CategoryRelatedByParentId');
		}
		
		return $this;
	}

	/**
	 * Use the CategoryRelatedByParentId relation Category object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CategoryQuery A secondary query class using the current class as primary query
	 */
	public function useCategoryRelatedByParentIdQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinCategoryRelatedByParentId($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'CategoryRelatedByParentId', 'CategoryQuery');
	}

	/**
	 * Filter the query by a related Category object
	 *
	 * @param     Category $category  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CategoryQuery The current query, for fluid interface
	 */
	public function filterByCategoryRelatedById($category, $comparison = null)
	{
		return $this
			->addUsingAlias(CategoryPeer::ID, $category->getParentId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the CategoryRelatedById relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CategoryQuery The current query, for fluid interface
	 */
	public function joinCategoryRelatedById($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('CategoryRelatedById');
		
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
			$this->addJoinObject($join, 'CategoryRelatedById');
		}
		
		return $this;
	}

	/**
	 * Use the CategoryRelatedById relation Category object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CategoryQuery A secondary query class using the current class as primary query
	 */
	public function useCategoryRelatedByIdQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinCategoryRelatedById($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'CategoryRelatedById', 'CategoryQuery');
	}

	/**
	 * Filter the query by a related Deal object
	 *
	 * @param     Deal $deal  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CategoryQuery The current query, for fluid interface
	 */
	public function filterByDeal($deal, $comparison = null)
	{
		return $this
			->addUsingAlias(CategoryPeer::ID, $deal->getCategoryId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Deal relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CategoryQuery The current query, for fluid interface
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
	 * Filter the query by a related DealFeed object
	 *
	 * @param     DealFeed $dealFeed  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    CategoryQuery The current query, for fluid interface
	 */
	public function filterByDealFeed($dealFeed, $comparison = null)
	{
		return $this
			->addUsingAlias(CategoryPeer::ID, $dealFeed->getCategoryId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the DealFeed relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CategoryQuery The current query, for fluid interface
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
	 * @param     Category $category Object to remove from the list of results
	 *
	 * @return    CategoryQuery The current query, for fluid interface
	 */
	public function prune($category = null)
	{
		if ($category) {
			$this->addUsingAlias(CategoryPeer::ID, $category->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseCategoryQuery
