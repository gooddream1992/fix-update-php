<?php


/**
 * Base class that represents a query for the 'blog' table.
 *
 * 
 *
 * @method     BlogQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     BlogQuery orderByHttpHost($order = Criteria::ASC) Order by the http_host column
 * @method     BlogQuery orderByDateCreated($order = Criteria::ASC) Order by the date_created column
 * @method     BlogQuery orderByDateModified($order = Criteria::ASC) Order by the date_modified column
 * @method     BlogQuery orderByIsActive($order = Criteria::ASC) Order by the is_active column
 * @method     BlogQuery orderByUsername($order = Criteria::ASC) Order by the username column
 * @method     BlogQuery orderByPassword($order = Criteria::ASC) Order by the password column
 * @method     BlogQuery orderByXmlrpcScript($order = Criteria::ASC) Order by the xmlrpc_script column
 *
 * @method     BlogQuery groupById() Group by the id column
 * @method     BlogQuery groupByHttpHost() Group by the http_host column
 * @method     BlogQuery groupByDateCreated() Group by the date_created column
 * @method     BlogQuery groupByDateModified() Group by the date_modified column
 * @method     BlogQuery groupByIsActive() Group by the is_active column
 * @method     BlogQuery groupByUsername() Group by the username column
 * @method     BlogQuery groupByPassword() Group by the password column
 * @method     BlogQuery groupByXmlrpcScript() Group by the xmlrpc_script column
 *
 * @method     BlogQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     BlogQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     BlogQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Blog findOne(PropelPDO $con = null) Return the first Blog matching the query
 * @method     Blog findOneOrCreate(PropelPDO $con = null) Return the first Blog matching the query, or a new Blog object populated from the query conditions when no match is found
 *
 * @method     Blog findOneById(int $id) Return the first Blog filtered by the id column
 * @method     Blog findOneByHttpHost(string $http_host) Return the first Blog filtered by the http_host column
 * @method     Blog findOneByDateCreated(string $date_created) Return the first Blog filtered by the date_created column
 * @method     Blog findOneByDateModified(string $date_modified) Return the first Blog filtered by the date_modified column
 * @method     Blog findOneByIsActive(int $is_active) Return the first Blog filtered by the is_active column
 * @method     Blog findOneByUsername(string $username) Return the first Blog filtered by the username column
 * @method     Blog findOneByPassword(string $password) Return the first Blog filtered by the password column
 * @method     Blog findOneByXmlrpcScript(string $xmlrpc_script) Return the first Blog filtered by the xmlrpc_script column
 *
 * @method     array findById(int $id) Return Blog objects filtered by the id column
 * @method     array findByHttpHost(string $http_host) Return Blog objects filtered by the http_host column
 * @method     array findByDateCreated(string $date_created) Return Blog objects filtered by the date_created column
 * @method     array findByDateModified(string $date_modified) Return Blog objects filtered by the date_modified column
 * @method     array findByIsActive(int $is_active) Return Blog objects filtered by the is_active column
 * @method     array findByUsername(string $username) Return Blog objects filtered by the username column
 * @method     array findByPassword(string $password) Return Blog objects filtered by the password column
 * @method     array findByXmlrpcScript(string $xmlrpc_script) Return Blog objects filtered by the xmlrpc_script column
 *
 * @package    propel.generator.sigfly.om
 */
abstract class BaseBlogQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseBlogQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'sigfly', $modelName = 'Blog', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new BlogQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    BlogQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof BlogQuery) {
			return $criteria;
		}
		$query = new BlogQuery();
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
	 * @return    Blog|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = BlogPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    BlogQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(BlogPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    BlogQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(BlogPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(BlogPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the http_host column
	 * 
	 * @param     string $httpHost The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogQuery The current query, for fluid interface
	 */
	public function filterByHttpHost($httpHost = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($httpHost)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $httpHost)) {
				$httpHost = str_replace('*', '%', $httpHost);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(BlogPeer::HTTP_HOST, $httpHost, $comparison);
	}

	/**
	 * Filter the query on the date_created column
	 * 
	 * @param     string|array $dateCreated The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogQuery The current query, for fluid interface
	 */
	public function filterByDateCreated($dateCreated = null, $comparison = null)
	{
		if (is_array($dateCreated)) {
			$useMinMax = false;
			if (isset($dateCreated['min'])) {
				$this->addUsingAlias(BlogPeer::DATE_CREATED, $dateCreated['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateCreated['max'])) {
				$this->addUsingAlias(BlogPeer::DATE_CREATED, $dateCreated['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BlogPeer::DATE_CREATED, $dateCreated, $comparison);
	}

	/**
	 * Filter the query on the date_modified column
	 * 
	 * @param     string|array $dateModified The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogQuery The current query, for fluid interface
	 */
	public function filterByDateModified($dateModified = null, $comparison = null)
	{
		if (is_array($dateModified)) {
			$useMinMax = false;
			if (isset($dateModified['min'])) {
				$this->addUsingAlias(BlogPeer::DATE_MODIFIED, $dateModified['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateModified['max'])) {
				$this->addUsingAlias(BlogPeer::DATE_MODIFIED, $dateModified['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BlogPeer::DATE_MODIFIED, $dateModified, $comparison);
	}

	/**
	 * Filter the query on the is_active column
	 * 
	 * @param     int|array $isActive The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogQuery The current query, for fluid interface
	 */
	public function filterByIsActive($isActive = null, $comparison = null)
	{
		if (is_array($isActive)) {
			$useMinMax = false;
			if (isset($isActive['min'])) {
				$this->addUsingAlias(BlogPeer::IS_ACTIVE, $isActive['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isActive['max'])) {
				$this->addUsingAlias(BlogPeer::IS_ACTIVE, $isActive['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(BlogPeer::IS_ACTIVE, $isActive, $comparison);
	}

	/**
	 * Filter the query on the username column
	 * 
	 * @param     string $username The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogQuery The current query, for fluid interface
	 */
	public function filterByUsername($username = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($username)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $username)) {
				$username = str_replace('*', '%', $username);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(BlogPeer::USERNAME, $username, $comparison);
	}

	/**
	 * Filter the query on the password column
	 * 
	 * @param     string $password The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogQuery The current query, for fluid interface
	 */
	public function filterByPassword($password = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($password)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $password)) {
				$password = str_replace('*', '%', $password);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(BlogPeer::PASSWORD, $password, $comparison);
	}

	/**
	 * Filter the query on the xmlrpc_script column
	 * 
	 * @param     string $xmlrpcScript The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    BlogQuery The current query, for fluid interface
	 */
	public function filterByXmlrpcScript($xmlrpcScript = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($xmlrpcScript)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $xmlrpcScript)) {
				$xmlrpcScript = str_replace('*', '%', $xmlrpcScript);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(BlogPeer::XMLRPC_SCRIPT, $xmlrpcScript, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Blog $blog Object to remove from the list of results
	 *
	 * @return    BlogQuery The current query, for fluid interface
	 */
	public function prune($blog = null)
	{
		if ($blog) {
			$this->addUsingAlias(BlogPeer::ID, $blog->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseBlogQuery
