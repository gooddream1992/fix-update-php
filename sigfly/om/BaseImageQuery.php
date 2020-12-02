<?php


/**
 * Base class that represents a query for the 'image' table.
 *
 * 
 *
 * @method     ImageQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ImageQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     ImageQuery orderByFileName($order = Criteria::ASC) Order by the file_name column
 * @method     ImageQuery orderByContentType($order = Criteria::ASC) Order by the content_type column
 * @method     ImageQuery orderByHeight($order = Criteria::ASC) Order by the height column
 * @method     ImageQuery orderByWidth($order = Criteria::ASC) Order by the width column
 * @method     ImageQuery orderByContentSize($order = Criteria::ASC) Order by the content_size column
 * @method     ImageQuery orderByContent($order = Criteria::ASC) Order by the content column
 * @method     ImageQuery orderByDateCreated($order = Criteria::ASC) Order by the date_created column
 * @method     ImageQuery orderByDateViewed($order = Criteria::ASC) Order by the date_viewed column
 * @method     ImageQuery orderByIsActive($order = Criteria::ASC) Order by the is_active column
 * @method     ImageQuery orderByIsApproved($order = Criteria::ASC) Order by the is_approved column
 * @method     ImageQuery orderByRemoteAddrCreated($order = Criteria::ASC) Order by the remote_addr_created column
 * @method     ImageQuery orderByRemoteAddrApproved($order = Criteria::ASC) Order by the remote_addr_approved column
 *
 * @method     ImageQuery groupById() Group by the id column
 * @method     ImageQuery groupByUserId() Group by the user_id column
 * @method     ImageQuery groupByFileName() Group by the file_name column
 * @method     ImageQuery groupByContentType() Group by the content_type column
 * @method     ImageQuery groupByHeight() Group by the height column
 * @method     ImageQuery groupByWidth() Group by the width column
 * @method     ImageQuery groupByContentSize() Group by the content_size column
 * @method     ImageQuery groupByContent() Group by the content column
 * @method     ImageQuery groupByDateCreated() Group by the date_created column
 * @method     ImageQuery groupByDateViewed() Group by the date_viewed column
 * @method     ImageQuery groupByIsActive() Group by the is_active column
 * @method     ImageQuery groupByIsApproved() Group by the is_approved column
 * @method     ImageQuery groupByRemoteAddrCreated() Group by the remote_addr_created column
 * @method     ImageQuery groupByRemoteAddrApproved() Group by the remote_addr_approved column
 *
 * @method     ImageQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ImageQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ImageQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ImageQuery leftJoinUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the User relation
 * @method     ImageQuery rightJoinUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the User relation
 * @method     ImageQuery innerJoinUser($relationAlias = null) Adds a INNER JOIN clause to the query using the User relation
 *
 * @method     Image findOne(PropelPDO $con = null) Return the first Image matching the query
 * @method     Image findOneOrCreate(PropelPDO $con = null) Return the first Image matching the query, or a new Image object populated from the query conditions when no match is found
 *
 * @method     Image findOneById(int $id) Return the first Image filtered by the id column
 * @method     Image findOneByUserId(int $user_id) Return the first Image filtered by the user_id column
 * @method     Image findOneByFileName(string $file_name) Return the first Image filtered by the file_name column
 * @method     Image findOneByContentType(string $content_type) Return the first Image filtered by the content_type column
 * @method     Image findOneByHeight(int $height) Return the first Image filtered by the height column
 * @method     Image findOneByWidth(int $width) Return the first Image filtered by the width column
 * @method     Image findOneByContentSize(int $content_size) Return the first Image filtered by the content_size column
 * @method     Image findOneByContent(resource $content) Return the first Image filtered by the content column
 * @method     Image findOneByDateCreated(string $date_created) Return the first Image filtered by the date_created column
 * @method     Image findOneByDateViewed(string $date_viewed) Return the first Image filtered by the date_viewed column
 * @method     Image findOneByIsActive(int $is_active) Return the first Image filtered by the is_active column
 * @method     Image findOneByIsApproved(int $is_approved) Return the first Image filtered by the is_approved column
 * @method     Image findOneByRemoteAddrCreated(string $remote_addr_created) Return the first Image filtered by the remote_addr_created column
 * @method     Image findOneByRemoteAddrApproved(string $remote_addr_approved) Return the first Image filtered by the remote_addr_approved column
 *
 * @method     array findById(int $id) Return Image objects filtered by the id column
 * @method     array findByUserId(int $user_id) Return Image objects filtered by the user_id column
 * @method     array findByFileName(string $file_name) Return Image objects filtered by the file_name column
 * @method     array findByContentType(string $content_type) Return Image objects filtered by the content_type column
 * @method     array findByHeight(int $height) Return Image objects filtered by the height column
 * @method     array findByWidth(int $width) Return Image objects filtered by the width column
 * @method     array findByContentSize(int $content_size) Return Image objects filtered by the content_size column
 * @method     array findByContent(resource $content) Return Image objects filtered by the content column
 * @method     array findByDateCreated(string $date_created) Return Image objects filtered by the date_created column
 * @method     array findByDateViewed(string $date_viewed) Return Image objects filtered by the date_viewed column
 * @method     array findByIsActive(int $is_active) Return Image objects filtered by the is_active column
 * @method     array findByIsApproved(int $is_approved) Return Image objects filtered by the is_approved column
 * @method     array findByRemoteAddrCreated(string $remote_addr_created) Return Image objects filtered by the remote_addr_created column
 * @method     array findByRemoteAddrApproved(string $remote_addr_approved) Return Image objects filtered by the remote_addr_approved column
 *
 * @package    propel.generator.sigfly.om
 */
abstract class BaseImageQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseImageQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'sigfly', $modelName = 'Image', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ImageQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ImageQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ImageQuery) {
			return $criteria;
		}
		$query = new ImageQuery();
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
	 * @return    Image|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = ImagePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    ImageQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(ImagePeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ImageQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(ImagePeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ImageQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ImagePeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ImageQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(ImagePeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(ImagePeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ImagePeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the file_name column
	 * 
	 * @param     string $fileName The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ImageQuery The current query, for fluid interface
	 */
	public function filterByFileName($fileName = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($fileName)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $fileName)) {
				$fileName = str_replace('*', '%', $fileName);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ImagePeer::FILE_NAME, $fileName, $comparison);
	}

	/**
	 * Filter the query on the content_type column
	 * 
	 * @param     string $contentType The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ImageQuery The current query, for fluid interface
	 */
	public function filterByContentType($contentType = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($contentType)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $contentType)) {
				$contentType = str_replace('*', '%', $contentType);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ImagePeer::CONTENT_TYPE, $contentType, $comparison);
	}

	/**
	 * Filter the query on the height column
	 * 
	 * @param     int|array $height The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ImageQuery The current query, for fluid interface
	 */
	public function filterByHeight($height = null, $comparison = null)
	{
		if (is_array($height)) {
			$useMinMax = false;
			if (isset($height['min'])) {
				$this->addUsingAlias(ImagePeer::HEIGHT, $height['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($height['max'])) {
				$this->addUsingAlias(ImagePeer::HEIGHT, $height['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ImagePeer::HEIGHT, $height, $comparison);
	}

	/**
	 * Filter the query on the width column
	 * 
	 * @param     int|array $width The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ImageQuery The current query, for fluid interface
	 */
	public function filterByWidth($width = null, $comparison = null)
	{
		if (is_array($width)) {
			$useMinMax = false;
			if (isset($width['min'])) {
				$this->addUsingAlias(ImagePeer::WIDTH, $width['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($width['max'])) {
				$this->addUsingAlias(ImagePeer::WIDTH, $width['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ImagePeer::WIDTH, $width, $comparison);
	}

	/**
	 * Filter the query on the content_size column
	 * 
	 * @param     int|array $contentSize The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ImageQuery The current query, for fluid interface
	 */
	public function filterByContentSize($contentSize = null, $comparison = null)
	{
		if (is_array($contentSize)) {
			$useMinMax = false;
			if (isset($contentSize['min'])) {
				$this->addUsingAlias(ImagePeer::CONTENT_SIZE, $contentSize['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($contentSize['max'])) {
				$this->addUsingAlias(ImagePeer::CONTENT_SIZE, $contentSize['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ImagePeer::CONTENT_SIZE, $contentSize, $comparison);
	}

	/**
	 * Filter the query on the content column
	 * 
	 * @param     mixed $content The value to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ImageQuery The current query, for fluid interface
	 */
	public function filterByContent($content = null, $comparison = null)
	{
		return $this->addUsingAlias(ImagePeer::CONTENT, $content, $comparison);
	}

	/**
	 * Filter the query on the date_created column
	 * 
	 * @param     string|array $dateCreated The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ImageQuery The current query, for fluid interface
	 */
	public function filterByDateCreated($dateCreated = null, $comparison = null)
	{
		if (is_array($dateCreated)) {
			$useMinMax = false;
			if (isset($dateCreated['min'])) {
				$this->addUsingAlias(ImagePeer::DATE_CREATED, $dateCreated['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateCreated['max'])) {
				$this->addUsingAlias(ImagePeer::DATE_CREATED, $dateCreated['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ImagePeer::DATE_CREATED, $dateCreated, $comparison);
	}

	/**
	 * Filter the query on the date_viewed column
	 * 
	 * @param     string|array $dateViewed The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ImageQuery The current query, for fluid interface
	 */
	public function filterByDateViewed($dateViewed = null, $comparison = null)
	{
		if (is_array($dateViewed)) {
			$useMinMax = false;
			if (isset($dateViewed['min'])) {
				$this->addUsingAlias(ImagePeer::DATE_VIEWED, $dateViewed['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateViewed['max'])) {
				$this->addUsingAlias(ImagePeer::DATE_VIEWED, $dateViewed['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ImagePeer::DATE_VIEWED, $dateViewed, $comparison);
	}

	/**
	 * Filter the query on the is_active column
	 * 
	 * @param     int|array $isActive The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ImageQuery The current query, for fluid interface
	 */
	public function filterByIsActive($isActive = null, $comparison = null)
	{
		if (is_array($isActive)) {
			$useMinMax = false;
			if (isset($isActive['min'])) {
				$this->addUsingAlias(ImagePeer::IS_ACTIVE, $isActive['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isActive['max'])) {
				$this->addUsingAlias(ImagePeer::IS_ACTIVE, $isActive['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ImagePeer::IS_ACTIVE, $isActive, $comparison);
	}

	/**
	 * Filter the query on the is_approved column
	 * 
	 * @param     int|array $isApproved The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ImageQuery The current query, for fluid interface
	 */
	public function filterByIsApproved($isApproved = null, $comparison = null)
	{
		if (is_array($isApproved)) {
			$useMinMax = false;
			if (isset($isApproved['min'])) {
				$this->addUsingAlias(ImagePeer::IS_APPROVED, $isApproved['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isApproved['max'])) {
				$this->addUsingAlias(ImagePeer::IS_APPROVED, $isApproved['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ImagePeer::IS_APPROVED, $isApproved, $comparison);
	}

	/**
	 * Filter the query on the remote_addr_created column
	 * 
	 * @param     string $remoteAddrCreated The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ImageQuery The current query, for fluid interface
	 */
	public function filterByRemoteAddrCreated($remoteAddrCreated = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($remoteAddrCreated)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $remoteAddrCreated)) {
				$remoteAddrCreated = str_replace('*', '%', $remoteAddrCreated);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ImagePeer::REMOTE_ADDR_CREATED, $remoteAddrCreated, $comparison);
	}

	/**
	 * Filter the query on the remote_addr_approved column
	 * 
	 * @param     string $remoteAddrApproved The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ImageQuery The current query, for fluid interface
	 */
	public function filterByRemoteAddrApproved($remoteAddrApproved = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($remoteAddrApproved)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $remoteAddrApproved)) {
				$remoteAddrApproved = str_replace('*', '%', $remoteAddrApproved);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ImagePeer::REMOTE_ADDR_APPROVED, $remoteAddrApproved, $comparison);
	}

	/**
	 * Filter the query by a related User object
	 *
	 * @param     User $user  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ImageQuery The current query, for fluid interface
	 */
	public function filterByUser($user, $comparison = null)
	{
		return $this
			->addUsingAlias(ImagePeer::USER_ID, $user->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the User relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ImageQuery The current query, for fluid interface
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
	 * @param     Image $image Object to remove from the list of results
	 *
	 * @return    ImageQuery The current query, for fluid interface
	 */
	public function prune($image = null)
	{
		if ($image) {
			$this->addUsingAlias(ImagePeer::ID, $image->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseImageQuery
