<?php


/**
 * Base class that represents a query for the 'deal_feed_division' table.
 *
 * 
 *
 * @method     DealFeedDivisionQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     DealFeedDivisionQuery orderByParentId($order = Criteria::ASC) Order by the parent_id column
 * @method     DealFeedDivisionQuery orderByDivisionName($order = Criteria::ASC) Order by the division_name column
 * @method     DealFeedDivisionQuery orderByDateCreated($order = Criteria::ASC) Order by the date_created column
 * @method     DealFeedDivisionQuery orderByIsActive($order = Criteria::ASC) Order by the is_active column
 * @method     DealFeedDivisionQuery orderBySlug($order = Criteria::ASC) Order by the slug column
 * @method     DealFeedDivisionQuery orderByLatitude($order = Criteria::ASC) Order by the latitude column
 * @method     DealFeedDivisionQuery orderByLongitude($order = Criteria::ASC) Order by the longitude column
 *
 * @method     DealFeedDivisionQuery groupById() Group by the id column
 * @method     DealFeedDivisionQuery groupByParentId() Group by the parent_id column
 * @method     DealFeedDivisionQuery groupByDivisionName() Group by the division_name column
 * @method     DealFeedDivisionQuery groupByDateCreated() Group by the date_created column
 * @method     DealFeedDivisionQuery groupByIsActive() Group by the is_active column
 * @method     DealFeedDivisionQuery groupBySlug() Group by the slug column
 * @method     DealFeedDivisionQuery groupByLatitude() Group by the latitude column
 * @method     DealFeedDivisionQuery groupByLongitude() Group by the longitude column
 *
 * @method     DealFeedDivisionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     DealFeedDivisionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     DealFeedDivisionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     DealFeedDivisionQuery leftJoinDealFeedDivisionRelatedByParentId($relationAlias = null) Adds a LEFT JOIN clause to the query using the DealFeedDivisionRelatedByParentId relation
 * @method     DealFeedDivisionQuery rightJoinDealFeedDivisionRelatedByParentId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DealFeedDivisionRelatedByParentId relation
 * @method     DealFeedDivisionQuery innerJoinDealFeedDivisionRelatedByParentId($relationAlias = null) Adds a INNER JOIN clause to the query using the DealFeedDivisionRelatedByParentId relation
 *
 * @method     DealFeedDivisionQuery leftJoinDealFeed($relationAlias = null) Adds a LEFT JOIN clause to the query using the DealFeed relation
 * @method     DealFeedDivisionQuery rightJoinDealFeed($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DealFeed relation
 * @method     DealFeedDivisionQuery innerJoinDealFeed($relationAlias = null) Adds a INNER JOIN clause to the query using the DealFeed relation
 *
 * @method     DealFeedDivisionQuery leftJoinDealFeedDivisionRelatedById($relationAlias = null) Adds a LEFT JOIN clause to the query using the DealFeedDivisionRelatedById relation
 * @method     DealFeedDivisionQuery rightJoinDealFeedDivisionRelatedById($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DealFeedDivisionRelatedById relation
 * @method     DealFeedDivisionQuery innerJoinDealFeedDivisionRelatedById($relationAlias = null) Adds a INNER JOIN clause to the query using the DealFeedDivisionRelatedById relation
 *
 * @method     DealFeedDivision findOne(PropelPDO $con = null) Return the first DealFeedDivision matching the query
 * @method     DealFeedDivision findOneOrCreate(PropelPDO $con = null) Return the first DealFeedDivision matching the query, or a new DealFeedDivision object populated from the query conditions when no match is found
 *
 * @method     DealFeedDivision findOneById(int $id) Return the first DealFeedDivision filtered by the id column
 * @method     DealFeedDivision findOneByParentId(int $parent_id) Return the first DealFeedDivision filtered by the parent_id column
 * @method     DealFeedDivision findOneByDivisionName(string $division_name) Return the first DealFeedDivision filtered by the division_name column
 * @method     DealFeedDivision findOneByDateCreated(string $date_created) Return the first DealFeedDivision filtered by the date_created column
 * @method     DealFeedDivision findOneByIsActive(int $is_active) Return the first DealFeedDivision filtered by the is_active column
 * @method     DealFeedDivision findOneBySlug(string $slug) Return the first DealFeedDivision filtered by the slug column
 * @method     DealFeedDivision findOneByLatitude(double $latitude) Return the first DealFeedDivision filtered by the latitude column
 * @method     DealFeedDivision findOneByLongitude(double $longitude) Return the first DealFeedDivision filtered by the longitude column
 *
 * @method     array findById(int $id) Return DealFeedDivision objects filtered by the id column
 * @method     array findByParentId(int $parent_id) Return DealFeedDivision objects filtered by the parent_id column
 * @method     array findByDivisionName(string $division_name) Return DealFeedDivision objects filtered by the division_name column
 * @method     array findByDateCreated(string $date_created) Return DealFeedDivision objects filtered by the date_created column
 * @method     array findByIsActive(int $is_active) Return DealFeedDivision objects filtered by the is_active column
 * @method     array findBySlug(string $slug) Return DealFeedDivision objects filtered by the slug column
 * @method     array findByLatitude(double $latitude) Return DealFeedDivision objects filtered by the latitude column
 * @method     array findByLongitude(double $longitude) Return DealFeedDivision objects filtered by the longitude column
 *
 * @package    propel.generator.komideals.om
 */
abstract class BaseDealFeedDivisionQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseDealFeedDivisionQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'komideals', $modelName = 'DealFeedDivision', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new DealFeedDivisionQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    DealFeedDivisionQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof DealFeedDivisionQuery) {
			return $criteria;
		}
		$query = new DealFeedDivisionQuery();
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
	 * @return    DealFeedDivision|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = DealFeedDivisionPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    DealFeedDivisionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(DealFeedDivisionPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    DealFeedDivisionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(DealFeedDivisionPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedDivisionQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(DealFeedDivisionPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the parent_id column
	 * 
	 * @param     int|array $parentId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedDivisionQuery The current query, for fluid interface
	 */
	public function filterByParentId($parentId = null, $comparison = null)
	{
		if (is_array($parentId)) {
			$useMinMax = false;
			if (isset($parentId['min'])) {
				$this->addUsingAlias(DealFeedDivisionPeer::PARENT_ID, $parentId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($parentId['max'])) {
				$this->addUsingAlias(DealFeedDivisionPeer::PARENT_ID, $parentId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedDivisionPeer::PARENT_ID, $parentId, $comparison);
	}

	/**
	 * Filter the query on the division_name column
	 * 
	 * @param     string $divisionName The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedDivisionQuery The current query, for fluid interface
	 */
	public function filterByDivisionName($divisionName = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($divisionName)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $divisionName)) {
				$divisionName = str_replace('*', '%', $divisionName);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DealFeedDivisionPeer::DIVISION_NAME, $divisionName, $comparison);
	}

	/**
	 * Filter the query on the date_created column
	 * 
	 * @param     string|array $dateCreated The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedDivisionQuery The current query, for fluid interface
	 */
	public function filterByDateCreated($dateCreated = null, $comparison = null)
	{
		if (is_array($dateCreated)) {
			$useMinMax = false;
			if (isset($dateCreated['min'])) {
				$this->addUsingAlias(DealFeedDivisionPeer::DATE_CREATED, $dateCreated['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateCreated['max'])) {
				$this->addUsingAlias(DealFeedDivisionPeer::DATE_CREATED, $dateCreated['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedDivisionPeer::DATE_CREATED, $dateCreated, $comparison);
	}

	/**
	 * Filter the query on the is_active column
	 * 
	 * @param     int|array $isActive The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedDivisionQuery The current query, for fluid interface
	 */
	public function filterByIsActive($isActive = null, $comparison = null)
	{
		if (is_array($isActive)) {
			$useMinMax = false;
			if (isset($isActive['min'])) {
				$this->addUsingAlias(DealFeedDivisionPeer::IS_ACTIVE, $isActive['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isActive['max'])) {
				$this->addUsingAlias(DealFeedDivisionPeer::IS_ACTIVE, $isActive['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedDivisionPeer::IS_ACTIVE, $isActive, $comparison);
	}

	/**
	 * Filter the query on the slug column
	 * 
	 * @param     string $slug The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedDivisionQuery The current query, for fluid interface
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
		return $this->addUsingAlias(DealFeedDivisionPeer::SLUG, $slug, $comparison);
	}

	/**
	 * Filter the query on the latitude column
	 * 
	 * @param     double|array $latitude The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedDivisionQuery The current query, for fluid interface
	 */
	public function filterByLatitude($latitude = null, $comparison = null)
	{
		if (is_array($latitude)) {
			$useMinMax = false;
			if (isset($latitude['min'])) {
				$this->addUsingAlias(DealFeedDivisionPeer::LATITUDE, $latitude['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($latitude['max'])) {
				$this->addUsingAlias(DealFeedDivisionPeer::LATITUDE, $latitude['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedDivisionPeer::LATITUDE, $latitude, $comparison);
	}

	/**
	 * Filter the query on the longitude column
	 * 
	 * @param     double|array $longitude The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedDivisionQuery The current query, for fluid interface
	 */
	public function filterByLongitude($longitude = null, $comparison = null)
	{
		if (is_array($longitude)) {
			$useMinMax = false;
			if (isset($longitude['min'])) {
				$this->addUsingAlias(DealFeedDivisionPeer::LONGITUDE, $longitude['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($longitude['max'])) {
				$this->addUsingAlias(DealFeedDivisionPeer::LONGITUDE, $longitude['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedDivisionPeer::LONGITUDE, $longitude, $comparison);
	}

	/**
	 * Filter the query by a related DealFeedDivision object
	 *
	 * @param     DealFeedDivision $dealFeedDivision  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedDivisionQuery The current query, for fluid interface
	 */
	public function filterByDealFeedDivisionRelatedByParentId($dealFeedDivision, $comparison = null)
	{
		return $this
			->addUsingAlias(DealFeedDivisionPeer::PARENT_ID, $dealFeedDivision->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the DealFeedDivisionRelatedByParentId relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedDivisionQuery The current query, for fluid interface
	 */
	public function joinDealFeedDivisionRelatedByParentId($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('DealFeedDivisionRelatedByParentId');
		
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
			$this->addJoinObject($join, 'DealFeedDivisionRelatedByParentId');
		}
		
		return $this;
	}

	/**
	 * Use the DealFeedDivisionRelatedByParentId relation DealFeedDivision object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedDivisionQuery A secondary query class using the current class as primary query
	 */
	public function useDealFeedDivisionRelatedByParentIdQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinDealFeedDivisionRelatedByParentId($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'DealFeedDivisionRelatedByParentId', 'DealFeedDivisionQuery');
	}

	/**
	 * Filter the query by a related DealFeed object
	 *
	 * @param     DealFeed $dealFeed  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedDivisionQuery The current query, for fluid interface
	 */
	public function filterByDealFeed($dealFeed, $comparison = null)
	{
		return $this
			->addUsingAlias(DealFeedDivisionPeer::ID, $dealFeed->getDealFeedDivisionId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the DealFeed relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedDivisionQuery The current query, for fluid interface
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
	 * Filter the query by a related DealFeedDivision object
	 *
	 * @param     DealFeedDivision $dealFeedDivision  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedDivisionQuery The current query, for fluid interface
	 */
	public function filterByDealFeedDivisionRelatedById($dealFeedDivision, $comparison = null)
	{
		return $this
			->addUsingAlias(DealFeedDivisionPeer::ID, $dealFeedDivision->getParentId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the DealFeedDivisionRelatedById relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedDivisionQuery The current query, for fluid interface
	 */
	public function joinDealFeedDivisionRelatedById($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('DealFeedDivisionRelatedById');
		
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
			$this->addJoinObject($join, 'DealFeedDivisionRelatedById');
		}
		
		return $this;
	}

	/**
	 * Use the DealFeedDivisionRelatedById relation DealFeedDivision object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedDivisionQuery A secondary query class using the current class as primary query
	 */
	public function useDealFeedDivisionRelatedByIdQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinDealFeedDivisionRelatedById($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'DealFeedDivisionRelatedById', 'DealFeedDivisionQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     DealFeedDivision $dealFeedDivision Object to remove from the list of results
	 *
	 * @return    DealFeedDivisionQuery The current query, for fluid interface
	 */
	public function prune($dealFeedDivision = null)
	{
		if ($dealFeedDivision) {
			$this->addUsingAlias(DealFeedDivisionPeer::ID, $dealFeedDivision->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseDealFeedDivisionQuery
