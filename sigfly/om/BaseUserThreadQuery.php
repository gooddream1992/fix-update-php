<?php


/**
 * Base class that represents a query for the 'user_thread' table.
 *
 * 
 *
 * @method     UserThreadQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     UserThreadQuery orderByTopicId($order = Criteria::ASC) Order by the topic_id column
 * @method     UserThreadQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     UserThreadQuery orderByContent($order = Criteria::ASC) Order by the content column
 * @method     UserThreadQuery orderByDateCreated($order = Criteria::ASC) Order by the date_created column
 * @method     UserThreadQuery orderByIsActive($order = Criteria::ASC) Order by the is_active column
 *
 * @method     UserThreadQuery groupById() Group by the id column
 * @method     UserThreadQuery groupByTopicId() Group by the topic_id column
 * @method     UserThreadQuery groupByUserId() Group by the user_id column
 * @method     UserThreadQuery groupByContent() Group by the content column
 * @method     UserThreadQuery groupByDateCreated() Group by the date_created column
 * @method     UserThreadQuery groupByIsActive() Group by the is_active column
 *
 * @method     UserThreadQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     UserThreadQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     UserThreadQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     UserThreadQuery leftJoinUserTopic($relationAlias = null) Adds a LEFT JOIN clause to the query using the UserTopic relation
 * @method     UserThreadQuery rightJoinUserTopic($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UserTopic relation
 * @method     UserThreadQuery innerJoinUserTopic($relationAlias = null) Adds a INNER JOIN clause to the query using the UserTopic relation
 *
 * @method     UserThreadQuery leftJoinUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the User relation
 * @method     UserThreadQuery rightJoinUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the User relation
 * @method     UserThreadQuery innerJoinUser($relationAlias = null) Adds a INNER JOIN clause to the query using the User relation
 *
 * @method     UserThread findOne(PropelPDO $con = null) Return the first UserThread matching the query
 * @method     UserThread findOneOrCreate(PropelPDO $con = null) Return the first UserThread matching the query, or a new UserThread object populated from the query conditions when no match is found
 *
 * @method     UserThread findOneById(int $id) Return the first UserThread filtered by the id column
 * @method     UserThread findOneByTopicId(int $topic_id) Return the first UserThread filtered by the topic_id column
 * @method     UserThread findOneByUserId(int $user_id) Return the first UserThread filtered by the user_id column
 * @method     UserThread findOneByContent(string $content) Return the first UserThread filtered by the content column
 * @method     UserThread findOneByDateCreated(string $date_created) Return the first UserThread filtered by the date_created column
 * @method     UserThread findOneByIsActive(int $is_active) Return the first UserThread filtered by the is_active column
 *
 * @method     array findById(int $id) Return UserThread objects filtered by the id column
 * @method     array findByTopicId(int $topic_id) Return UserThread objects filtered by the topic_id column
 * @method     array findByUserId(int $user_id) Return UserThread objects filtered by the user_id column
 * @method     array findByContent(string $content) Return UserThread objects filtered by the content column
 * @method     array findByDateCreated(string $date_created) Return UserThread objects filtered by the date_created column
 * @method     array findByIsActive(int $is_active) Return UserThread objects filtered by the is_active column
 *
 * @package    propel.generator.sigfly.om
 */
abstract class BaseUserThreadQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseUserThreadQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'sigfly', $modelName = 'UserThread', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new UserThreadQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    UserThreadQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof UserThreadQuery) {
			return $criteria;
		}
		$query = new UserThreadQuery();
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
	 * @return    UserThread|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = UserThreadPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    UserThreadQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(UserThreadPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    UserThreadQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(UserThreadPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserThreadQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(UserThreadPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the topic_id column
	 * 
	 * @param     int|array $topicId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserThreadQuery The current query, for fluid interface
	 */
	public function filterByTopicId($topicId = null, $comparison = null)
	{
		if (is_array($topicId)) {
			$useMinMax = false;
			if (isset($topicId['min'])) {
				$this->addUsingAlias(UserThreadPeer::TOPIC_ID, $topicId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($topicId['max'])) {
				$this->addUsingAlias(UserThreadPeer::TOPIC_ID, $topicId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserThreadPeer::TOPIC_ID, $topicId, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserThreadQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(UserThreadPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(UserThreadPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserThreadPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the content column
	 * 
	 * @param     string $content The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserThreadQuery The current query, for fluid interface
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
		return $this->addUsingAlias(UserThreadPeer::CONTENT, $content, $comparison);
	}

	/**
	 * Filter the query on the date_created column
	 * 
	 * @param     string|array $dateCreated The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserThreadQuery The current query, for fluid interface
	 */
	public function filterByDateCreated($dateCreated = null, $comparison = null)
	{
		if (is_array($dateCreated)) {
			$useMinMax = false;
			if (isset($dateCreated['min'])) {
				$this->addUsingAlias(UserThreadPeer::DATE_CREATED, $dateCreated['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateCreated['max'])) {
				$this->addUsingAlias(UserThreadPeer::DATE_CREATED, $dateCreated['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserThreadPeer::DATE_CREATED, $dateCreated, $comparison);
	}

	/**
	 * Filter the query on the is_active column
	 * 
	 * @param     int|array $isActive The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserThreadQuery The current query, for fluid interface
	 */
	public function filterByIsActive($isActive = null, $comparison = null)
	{
		if (is_array($isActive)) {
			$useMinMax = false;
			if (isset($isActive['min'])) {
				$this->addUsingAlias(UserThreadPeer::IS_ACTIVE, $isActive['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isActive['max'])) {
				$this->addUsingAlias(UserThreadPeer::IS_ACTIVE, $isActive['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserThreadPeer::IS_ACTIVE, $isActive, $comparison);
	}

	/**
	 * Filter the query by a related UserTopic object
	 *
	 * @param     UserTopic $userTopic  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserThreadQuery The current query, for fluid interface
	 */
	public function filterByUserTopic($userTopic, $comparison = null)
	{
		return $this
			->addUsingAlias(UserThreadPeer::TOPIC_ID, $userTopic->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the UserTopic relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserThreadQuery The current query, for fluid interface
	 */
	public function joinUserTopic($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('UserTopic');
		
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
			$this->addJoinObject($join, 'UserTopic');
		}
		
		return $this;
	}

	/**
	 * Use the UserTopic relation UserTopic object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserTopicQuery A secondary query class using the current class as primary query
	 */
	public function useUserTopicQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinUserTopic($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'UserTopic', 'UserTopicQuery');
	}

	/**
	 * Filter the query by a related User object
	 *
	 * @param     User $user  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserThreadQuery The current query, for fluid interface
	 */
	public function filterByUser($user, $comparison = null)
	{
		return $this
			->addUsingAlias(UserThreadPeer::USER_ID, $user->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the User relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserThreadQuery The current query, for fluid interface
	 */
	public function joinUser($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('User');
		
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
			$this->addJoinObject($join, 'User');
		}
		
		return $this;
	}

	/**
	 * Use the User relation User object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserQuery A secondary query class using the current class as primary query
	 */
	public function useUserQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinUser($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'User', 'UserQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     UserThread $userThread Object to remove from the list of results
	 *
	 * @return    UserThreadQuery The current query, for fluid interface
	 */
	public function prune($userThread = null)
	{
		if ($userThread) {
			$this->addUsingAlias(UserThreadPeer::ID, $userThread->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseUserThreadQuery
