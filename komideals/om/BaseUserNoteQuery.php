<?php


/**
 * Base class that represents a query for the 'user_note' table.
 *
 * 
 *
 * @method     UserNoteQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     UserNoteQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     UserNoteQuery orderByAdminId($order = Criteria::ASC) Order by the admin_id column
 * @method     UserNoteQuery orderByNotes($order = Criteria::ASC) Order by the notes column
 * @method     UserNoteQuery orderByDateCreated($order = Criteria::ASC) Order by the date_created column
 *
 * @method     UserNoteQuery groupById() Group by the id column
 * @method     UserNoteQuery groupByUserId() Group by the user_id column
 * @method     UserNoteQuery groupByAdminId() Group by the admin_id column
 * @method     UserNoteQuery groupByNotes() Group by the notes column
 * @method     UserNoteQuery groupByDateCreated() Group by the date_created column
 *
 * @method     UserNoteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     UserNoteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     UserNoteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     UserNoteQuery leftJoinUserRelatedByUserId($relationAlias = null) Adds a LEFT JOIN clause to the query using the UserRelatedByUserId relation
 * @method     UserNoteQuery rightJoinUserRelatedByUserId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UserRelatedByUserId relation
 * @method     UserNoteQuery innerJoinUserRelatedByUserId($relationAlias = null) Adds a INNER JOIN clause to the query using the UserRelatedByUserId relation
 *
 * @method     UserNoteQuery leftJoinUserRelatedByAdminId($relationAlias = null) Adds a LEFT JOIN clause to the query using the UserRelatedByAdminId relation
 * @method     UserNoteQuery rightJoinUserRelatedByAdminId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UserRelatedByAdminId relation
 * @method     UserNoteQuery innerJoinUserRelatedByAdminId($relationAlias = null) Adds a INNER JOIN clause to the query using the UserRelatedByAdminId relation
 *
 * @method     UserNote findOne(PropelPDO $con = null) Return the first UserNote matching the query
 * @method     UserNote findOneOrCreate(PropelPDO $con = null) Return the first UserNote matching the query, or a new UserNote object populated from the query conditions when no match is found
 *
 * @method     UserNote findOneById(int $id) Return the first UserNote filtered by the id column
 * @method     UserNote findOneByUserId(int $user_id) Return the first UserNote filtered by the user_id column
 * @method     UserNote findOneByAdminId(int $admin_id) Return the first UserNote filtered by the admin_id column
 * @method     UserNote findOneByNotes(string $notes) Return the first UserNote filtered by the notes column
 * @method     UserNote findOneByDateCreated(string $date_created) Return the first UserNote filtered by the date_created column
 *
 * @method     array findById(int $id) Return UserNote objects filtered by the id column
 * @method     array findByUserId(int $user_id) Return UserNote objects filtered by the user_id column
 * @method     array findByAdminId(int $admin_id) Return UserNote objects filtered by the admin_id column
 * @method     array findByNotes(string $notes) Return UserNote objects filtered by the notes column
 * @method     array findByDateCreated(string $date_created) Return UserNote objects filtered by the date_created column
 *
 * @package    propel.generator.komideals.om
 */
abstract class BaseUserNoteQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseUserNoteQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'komideals', $modelName = 'UserNote', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new UserNoteQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    UserNoteQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof UserNoteQuery) {
			return $criteria;
		}
		$query = new UserNoteQuery();
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
	 * @return    UserNote|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = UserNotePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    UserNoteQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(UserNotePeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    UserNoteQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(UserNotePeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserNoteQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(UserNotePeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserNoteQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(UserNotePeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(UserNotePeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserNotePeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the admin_id column
	 * 
	 * @param     int|array $adminId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserNoteQuery The current query, for fluid interface
	 */
	public function filterByAdminId($adminId = null, $comparison = null)
	{
		if (is_array($adminId)) {
			$useMinMax = false;
			if (isset($adminId['min'])) {
				$this->addUsingAlias(UserNotePeer::ADMIN_ID, $adminId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($adminId['max'])) {
				$this->addUsingAlias(UserNotePeer::ADMIN_ID, $adminId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserNotePeer::ADMIN_ID, $adminId, $comparison);
	}

	/**
	 * Filter the query on the notes column
	 * 
	 * @param     string $notes The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserNoteQuery The current query, for fluid interface
	 */
	public function filterByNotes($notes = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($notes)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $notes)) {
				$notes = str_replace('*', '%', $notes);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserNotePeer::NOTES, $notes, $comparison);
	}

	/**
	 * Filter the query on the date_created column
	 * 
	 * @param     string|array $dateCreated The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserNoteQuery The current query, for fluid interface
	 */
	public function filterByDateCreated($dateCreated = null, $comparison = null)
	{
		if (is_array($dateCreated)) {
			$useMinMax = false;
			if (isset($dateCreated['min'])) {
				$this->addUsingAlias(UserNotePeer::DATE_CREATED, $dateCreated['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateCreated['max'])) {
				$this->addUsingAlias(UserNotePeer::DATE_CREATED, $dateCreated['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserNotePeer::DATE_CREATED, $dateCreated, $comparison);
	}

	/**
	 * Filter the query by a related User object
	 *
	 * @param     User $user  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserNoteQuery The current query, for fluid interface
	 */
	public function filterByUserRelatedByUserId($user, $comparison = null)
	{
		return $this
			->addUsingAlias(UserNotePeer::USER_ID, $user->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the UserRelatedByUserId relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserNoteQuery The current query, for fluid interface
	 */
	public function joinUserRelatedByUserId($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('UserRelatedByUserId');
		
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
			$this->addJoinObject($join, 'UserRelatedByUserId');
		}
		
		return $this;
	}

	/**
	 * Use the UserRelatedByUserId relation User object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserQuery A secondary query class using the current class as primary query
	 */
	public function useUserRelatedByUserIdQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinUserRelatedByUserId($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'UserRelatedByUserId', 'UserQuery');
	}

	/**
	 * Filter the query by a related User object
	 *
	 * @param     User $user  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserNoteQuery The current query, for fluid interface
	 */
	public function filterByUserRelatedByAdminId($user, $comparison = null)
	{
		return $this
			->addUsingAlias(UserNotePeer::ADMIN_ID, $user->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the UserRelatedByAdminId relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserNoteQuery The current query, for fluid interface
	 */
	public function joinUserRelatedByAdminId($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('UserRelatedByAdminId');
		
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
			$this->addJoinObject($join, 'UserRelatedByAdminId');
		}
		
		return $this;
	}

	/**
	 * Use the UserRelatedByAdminId relation User object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserQuery A secondary query class using the current class as primary query
	 */
	public function useUserRelatedByAdminIdQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinUserRelatedByAdminId($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'UserRelatedByAdminId', 'UserQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     UserNote $userNote Object to remove from the list of results
	 *
	 * @return    UserNoteQuery The current query, for fluid interface
	 */
	public function prune($userNote = null)
	{
		if ($userNote) {
			$this->addUsingAlias(UserNotePeer::ID, $userNote->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseUserNoteQuery
