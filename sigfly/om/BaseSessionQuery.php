<?php


/**
 * Base class that represents a query for the 'session' table.
 *
 * 
 *
 * @method     SessionQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     SessionQuery orderBySid($order = Criteria::ASC) Order by the sid column
 * @method     SessionQuery orderByVariable($order = Criteria::ASC) Order by the variable column
 * @method     SessionQuery orderByValue($order = Criteria::ASC) Order by the value column
 * @method     SessionQuery orderByTimestamp($order = Criteria::ASC) Order by the timestamp column
 *
 * @method     SessionQuery groupById() Group by the id column
 * @method     SessionQuery groupBySid() Group by the sid column
 * @method     SessionQuery groupByVariable() Group by the variable column
 * @method     SessionQuery groupByValue() Group by the value column
 * @method     SessionQuery groupByTimestamp() Group by the timestamp column
 *
 * @method     SessionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     SessionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     SessionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Session findOne(PropelPDO $con = null) Return the first Session matching the query
 * @method     Session findOneOrCreate(PropelPDO $con = null) Return the first Session matching the query, or a new Session object populated from the query conditions when no match is found
 *
 * @method     Session findOneById(int $id) Return the first Session filtered by the id column
 * @method     Session findOneBySid(string $sid) Return the first Session filtered by the sid column
 * @method     Session findOneByVariable(string $variable) Return the first Session filtered by the variable column
 * @method     Session findOneByValue(string $value) Return the first Session filtered by the value column
 * @method     Session findOneByTimestamp(string $timestamp) Return the first Session filtered by the timestamp column
 *
 * @method     array findById(int $id) Return Session objects filtered by the id column
 * @method     array findBySid(string $sid) Return Session objects filtered by the sid column
 * @method     array findByVariable(string $variable) Return Session objects filtered by the variable column
 * @method     array findByValue(string $value) Return Session objects filtered by the value column
 * @method     array findByTimestamp(string $timestamp) Return Session objects filtered by the timestamp column
 *
 * @package    propel.generator.sigfly.om
 */
abstract class BaseSessionQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseSessionQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'sigfly', $modelName = 'Session', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new SessionQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    SessionQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof SessionQuery) {
			return $criteria;
		}
		$query = new SessionQuery();
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
	 * @return    Session|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = SessionPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    SessionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(SessionPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    SessionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(SessionPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SessionQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(SessionPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the sid column
	 * 
	 * @param     string $sid The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SessionQuery The current query, for fluid interface
	 */
	public function filterBySid($sid = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($sid)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $sid)) {
				$sid = str_replace('*', '%', $sid);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SessionPeer::SID, $sid, $comparison);
	}

	/**
	 * Filter the query on the variable column
	 * 
	 * @param     string $variable The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SessionQuery The current query, for fluid interface
	 */
	public function filterByVariable($variable = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($variable)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $variable)) {
				$variable = str_replace('*', '%', $variable);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SessionPeer::VARIABLE, $variable, $comparison);
	}

	/**
	 * Filter the query on the value column
	 * 
	 * @param     string $value The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SessionQuery The current query, for fluid interface
	 */
	public function filterByValue($value = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($value)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $value)) {
				$value = str_replace('*', '%', $value);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(SessionPeer::VALUE, $value, $comparison);
	}

	/**
	 * Filter the query on the timestamp column
	 * 
	 * @param     string|array $timestamp The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    SessionQuery The current query, for fluid interface
	 */
	public function filterByTimestamp($timestamp = null, $comparison = null)
	{
		if (is_array($timestamp)) {
			$useMinMax = false;
			if (isset($timestamp['min'])) {
				$this->addUsingAlias(SessionPeer::TIMESTAMP, $timestamp['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($timestamp['max'])) {
				$this->addUsingAlias(SessionPeer::TIMESTAMP, $timestamp['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(SessionPeer::TIMESTAMP, $timestamp, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Session $session Object to remove from the list of results
	 *
	 * @return    SessionQuery The current query, for fluid interface
	 */
	public function prune($session = null)
	{
		if ($session) {
			$this->addUsingAlias(SessionPeer::ID, $session->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseSessionQuery
