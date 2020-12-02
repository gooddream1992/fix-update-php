<?php


/**
 * Base class that represents a query for the 'user_topic' table.
 *
 * 
 *
 * @method     UserTopicQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     UserTopicQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     UserTopicQuery orderBySubject($order = Criteria::ASC) Order by the subject column
 * @method     UserTopicQuery orderByContent($order = Criteria::ASC) Order by the content column
 * @method     UserTopicQuery orderByDateCreated($order = Criteria::ASC) Order by the date_created column
 * @method     UserTopicQuery orderByIsActive($order = Criteria::ASC) Order by the is_active column
 * @method     UserTopicQuery orderByIsAnswered($order = Criteria::ASC) Order by the is_answered column
 *
 * @method     UserTopicQuery groupById() Group by the id column
 * @method     UserTopicQuery groupByUserId() Group by the user_id column
 * @method     UserTopicQuery groupBySubject() Group by the subject column
 * @method     UserTopicQuery groupByContent() Group by the content column
 * @method     UserTopicQuery groupByDateCreated() Group by the date_created column
 * @method     UserTopicQuery groupByIsActive() Group by the is_active column
 * @method     UserTopicQuery groupByIsAnswered() Group by the is_answered column
 *
 * @method     UserTopicQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     UserTopicQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     UserTopicQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     UserTopicQuery leftJoinUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the User relation
 * @method     UserTopicQuery rightJoinUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the User relation
 * @method     UserTopicQuery innerJoinUser($relationAlias = null) Adds a INNER JOIN clause to the query using the User relation
 *
 * @method     UserTopicQuery leftJoinUserThread($relationAlias = null) Adds a LEFT JOIN clause to the query using the UserThread relation
 * @method     UserTopicQuery rightJoinUserThread($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UserThread relation
 * @method     UserTopicQuery innerJoinUserThread($relationAlias = null) Adds a INNER JOIN clause to the query using the UserThread relation
 *
 * @method     UserTopic findOne(PropelPDO $con = null) Return the first UserTopic matching the query
 * @method     UserTopic findOneOrCreate(PropelPDO $con = null) Return the first UserTopic matching the query, or a new UserTopic object populated from the query conditions when no match is found
 *
 * @method     UserTopic findOneById(int $id) Return the first UserTopic filtered by the id column
 * @method     UserTopic findOneByUserId(int $user_id) Return the first UserTopic filtered by the user_id column
 * @method     UserTopic findOneBySubject(string $subject) Return the first UserTopic filtered by the subject column
 * @method     UserTopic findOneByContent(string $content) Return the first UserTopic filtered by the content column
 * @method     UserTopic findOneByDateCreated(string $date_created) Return the first UserTopic filtered by the date_created column
 * @method     UserTopic findOneByIsActive(int $is_active) Return the first UserTopic filtered by the is_active column
 * @method     UserTopic findOneByIsAnswered(int $is_answered) Return the first UserTopic filtered by the is_answered column
 *
 * @method     array findById(int $id) Return UserTopic objects filtered by the id column
 * @method     array findByUserId(int $user_id) Return UserTopic objects filtered by the user_id column
 * @method     array findBySubject(string $subject) Return UserTopic objects filtered by the subject column
 * @method     array findByContent(string $content) Return UserTopic objects filtered by the content column
 * @method     array findByDateCreated(string $date_created) Return UserTopic objects filtered by the date_created column
 * @method     array findByIsActive(int $is_active) Return UserTopic objects filtered by the is_active column
 * @method     array findByIsAnswered(int $is_answered) Return UserTopic objects filtered by the is_answered column
 *
 * @package    propel.generator.komideals.om
 */
abstract class BaseUserTopicQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseUserTopicQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'komideals', $modelName = 'UserTopic', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new UserTopicQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    UserTopicQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof UserTopicQuery) {
			return $criteria;
		}
		$query = new UserTopicQuery();
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
	 * @return    UserTopic|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = UserTopicPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    UserTopicQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(UserTopicPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    UserTopicQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(UserTopicPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserTopicQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(UserTopicPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserTopicQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(UserTopicPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(UserTopicPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserTopicPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the subject column
	 * 
	 * @param     string $subject The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserTopicQuery The current query, for fluid interface
	 */
	public function filterBySubject($subject = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($subject)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $subject)) {
				$subject = str_replace('*', '%', $subject);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserTopicPeer::SUBJECT, $subject, $comparison);
	}

	/**
	 * Filter the query on the content column
	 * 
	 * @param     string $content The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserTopicQuery The current query, for fluid interface
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
		return $this->addUsingAlias(UserTopicPeer::CONTENT, $content, $comparison);
	}

	/**
	 * Filter the query on the date_created column
	 * 
	 * @param     string|array $dateCreated The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserTopicQuery The current query, for fluid interface
	 */
	public function filterByDateCreated($dateCreated = null, $comparison = null)
	{
		if (is_array($dateCreated)) {
			$useMinMax = false;
			if (isset($dateCreated['min'])) {
				$this->addUsingAlias(UserTopicPeer::DATE_CREATED, $dateCreated['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateCreated['max'])) {
				$this->addUsingAlias(UserTopicPeer::DATE_CREATED, $dateCreated['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserTopicPeer::DATE_CREATED, $dateCreated, $comparison);
	}

	/**
	 * Filter the query on the is_active column
	 * 
	 * @param     int|array $isActive The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserTopicQuery The current query, for fluid interface
	 */
	public function filterByIsActive($isActive = null, $comparison = null)
	{
		if (is_array($isActive)) {
			$useMinMax = false;
			if (isset($isActive['min'])) {
				$this->addUsingAlias(UserTopicPeer::IS_ACTIVE, $isActive['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isActive['max'])) {
				$this->addUsingAlias(UserTopicPeer::IS_ACTIVE, $isActive['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserTopicPeer::IS_ACTIVE, $isActive, $comparison);
	}

	/**
	 * Filter the query on the is_answered column
	 * 
	 * @param     int|array $isAnswered The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserTopicQuery The current query, for fluid interface
	 */
	public function filterByIsAnswered($isAnswered = null, $comparison = null)
	{
		if (is_array($isAnswered)) {
			$useMinMax = false;
			if (isset($isAnswered['min'])) {
				$this->addUsingAlias(UserTopicPeer::IS_ANSWERED, $isAnswered['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isAnswered['max'])) {
				$this->addUsingAlias(UserTopicPeer::IS_ANSWERED, $isAnswered['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserTopicPeer::IS_ANSWERED, $isAnswered, $comparison);
	}

	/**
	 * Filter the query by a related User object
	 *
	 * @param     User $user  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserTopicQuery The current query, for fluid interface
	 */
	public function filterByUser($user, $comparison = null)
	{
		return $this
			->addUsingAlias(UserTopicPeer::USER_ID, $user->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the User relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserTopicQuery The current query, for fluid interface
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
	 * Filter the query by a related UserThread object
	 *
	 * @param     UserThread $userThread  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserTopicQuery The current query, for fluid interface
	 */
	public function filterByUserThread($userThread, $comparison = null)
	{
		return $this
			->addUsingAlias(UserTopicPeer::ID, $userThread->getTopicId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the UserThread relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserTopicQuery The current query, for fluid interface
	 */
	public function joinUserThread($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('UserThread');
		
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
			$this->addJoinObject($join, 'UserThread');
		}
		
		return $this;
	}

	/**
	 * Use the UserThread relation UserThread object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserThreadQuery A secondary query class using the current class as primary query
	 */
	public function useUserThreadQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinUserThread($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'UserThread', 'UserThreadQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     UserTopic $userTopic Object to remove from the list of results
	 *
	 * @return    UserTopicQuery The current query, for fluid interface
	 */
	public function prune($userTopic = null)
	{
		if ($userTopic) {
			$this->addUsingAlias(UserTopicPeer::ID, $userTopic->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseUserTopicQuery
