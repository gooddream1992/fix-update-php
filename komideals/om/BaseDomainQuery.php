<?php


/**
 * Base class that represents a query for the 'domain' table.
 *
 * 
 *
 * @method     DomainQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     DomainQuery orderByDomainName($order = Criteria::ASC) Order by the domain_name column
 * @method     DomainQuery orderByDomainExtension($order = Criteria::ASC) Order by the domain_extension column
 * @method     DomainQuery orderByResult($order = Criteria::ASC) Order by the result column
 * @method     DomainQuery orderByDateCreated($order = Criteria::ASC) Order by the date_created column
 * @method     DomainQuery orderByDateModified($order = Criteria::ASC) Order by the date_modified column
 *
 * @method     DomainQuery groupById() Group by the id column
 * @method     DomainQuery groupByDomainName() Group by the domain_name column
 * @method     DomainQuery groupByDomainExtension() Group by the domain_extension column
 * @method     DomainQuery groupByResult() Group by the result column
 * @method     DomainQuery groupByDateCreated() Group by the date_created column
 * @method     DomainQuery groupByDateModified() Group by the date_modified column
 *
 * @method     DomainQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     DomainQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     DomainQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Domain findOne(PropelPDO $con = null) Return the first Domain matching the query
 * @method     Domain findOneOrCreate(PropelPDO $con = null) Return the first Domain matching the query, or a new Domain object populated from the query conditions when no match is found
 *
 * @method     Domain findOneById(int $id) Return the first Domain filtered by the id column
 * @method     Domain findOneByDomainName(string $domain_name) Return the first Domain filtered by the domain_name column
 * @method     Domain findOneByDomainExtension(string $domain_extension) Return the first Domain filtered by the domain_extension column
 * @method     Domain findOneByResult(string $result) Return the first Domain filtered by the result column
 * @method     Domain findOneByDateCreated(string $date_created) Return the first Domain filtered by the date_created column
 * @method     Domain findOneByDateModified(string $date_modified) Return the first Domain filtered by the date_modified column
 *
 * @method     array findById(int $id) Return Domain objects filtered by the id column
 * @method     array findByDomainName(string $domain_name) Return Domain objects filtered by the domain_name column
 * @method     array findByDomainExtension(string $domain_extension) Return Domain objects filtered by the domain_extension column
 * @method     array findByResult(string $result) Return Domain objects filtered by the result column
 * @method     array findByDateCreated(string $date_created) Return Domain objects filtered by the date_created column
 * @method     array findByDateModified(string $date_modified) Return Domain objects filtered by the date_modified column
 *
 * @package    propel.generator.komideals.om
 */
abstract class BaseDomainQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseDomainQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'komideals', $modelName = 'Domain', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new DomainQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    DomainQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof DomainQuery) {
			return $criteria;
		}
		$query = new DomainQuery();
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
	 * @return    Domain|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = DomainPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    DomainQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(DomainPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    DomainQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(DomainPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DomainQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(DomainPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the domain_name column
	 * 
	 * @param     string $domainName The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DomainQuery The current query, for fluid interface
	 */
	public function filterByDomainName($domainName = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($domainName)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $domainName)) {
				$domainName = str_replace('*', '%', $domainName);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DomainPeer::DOMAIN_NAME, $domainName, $comparison);
	}

	/**
	 * Filter the query on the domain_extension column
	 * 
	 * @param     string $domainExtension The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DomainQuery The current query, for fluid interface
	 */
	public function filterByDomainExtension($domainExtension = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($domainExtension)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $domainExtension)) {
				$domainExtension = str_replace('*', '%', $domainExtension);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DomainPeer::DOMAIN_EXTENSION, $domainExtension, $comparison);
	}

	/**
	 * Filter the query on the result column
	 * 
	 * @param     string $result The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DomainQuery The current query, for fluid interface
	 */
	public function filterByResult($result = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($result)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $result)) {
				$result = str_replace('*', '%', $result);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DomainPeer::RESULT, $result, $comparison);
	}

	/**
	 * Filter the query on the date_created column
	 * 
	 * @param     string|array $dateCreated The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DomainQuery The current query, for fluid interface
	 */
	public function filterByDateCreated($dateCreated = null, $comparison = null)
	{
		if (is_array($dateCreated)) {
			$useMinMax = false;
			if (isset($dateCreated['min'])) {
				$this->addUsingAlias(DomainPeer::DATE_CREATED, $dateCreated['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateCreated['max'])) {
				$this->addUsingAlias(DomainPeer::DATE_CREATED, $dateCreated['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DomainPeer::DATE_CREATED, $dateCreated, $comparison);
	}

	/**
	 * Filter the query on the date_modified column
	 * 
	 * @param     string|array $dateModified The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DomainQuery The current query, for fluid interface
	 */
	public function filterByDateModified($dateModified = null, $comparison = null)
	{
		if (is_array($dateModified)) {
			$useMinMax = false;
			if (isset($dateModified['min'])) {
				$this->addUsingAlias(DomainPeer::DATE_MODIFIED, $dateModified['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateModified['max'])) {
				$this->addUsingAlias(DomainPeer::DATE_MODIFIED, $dateModified['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DomainPeer::DATE_MODIFIED, $dateModified, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Domain $domain Object to remove from the list of results
	 *
	 * @return    DomainQuery The current query, for fluid interface
	 */
	public function prune($domain = null)
	{
		if ($domain) {
			$this->addUsingAlias(DomainPeer::ID, $domain->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseDomainQuery
