<?php


/**
 * Base class that represents a query for the 'email_lead' table.
 *
 * 
 *
 * @method     EmailLeadQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     EmailLeadQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     EmailLeadQuery orderByZipcode($order = Criteria::ASC) Order by the ZIPCode column
 * @method     EmailLeadQuery orderByDateCreated($order = Criteria::ASC) Order by the date_created column
 * @method     EmailLeadQuery orderByRemoteAddr($order = Criteria::ASC) Order by the remote_addr column
 * @method     EmailLeadQuery orderByIsActive($order = Criteria::ASC) Order by the is_active column
 * @method     EmailLeadQuery orderByAffiliateId($order = Criteria::ASC) Order by the affiliate_id column
 *
 * @method     EmailLeadQuery groupById() Group by the id column
 * @method     EmailLeadQuery groupByEmail() Group by the email column
 * @method     EmailLeadQuery groupByZipcode() Group by the ZIPCode column
 * @method     EmailLeadQuery groupByDateCreated() Group by the date_created column
 * @method     EmailLeadQuery groupByRemoteAddr() Group by the remote_addr column
 * @method     EmailLeadQuery groupByIsActive() Group by the is_active column
 * @method     EmailLeadQuery groupByAffiliateId() Group by the affiliate_id column
 *
 * @method     EmailLeadQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     EmailLeadQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     EmailLeadQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     EmailLead findOne(PropelPDO $con = null) Return the first EmailLead matching the query
 * @method     EmailLead findOneOrCreate(PropelPDO $con = null) Return the first EmailLead matching the query, or a new EmailLead object populated from the query conditions when no match is found
 *
 * @method     EmailLead findOneById(int $id) Return the first EmailLead filtered by the id column
 * @method     EmailLead findOneByEmail(string $email) Return the first EmailLead filtered by the email column
 * @method     EmailLead findOneByZipcode(string $ZIPCode) Return the first EmailLead filtered by the ZIPCode column
 * @method     EmailLead findOneByDateCreated(string $date_created) Return the first EmailLead filtered by the date_created column
 * @method     EmailLead findOneByRemoteAddr(string $remote_addr) Return the first EmailLead filtered by the remote_addr column
 * @method     EmailLead findOneByIsActive(int $is_active) Return the first EmailLead filtered by the is_active column
 * @method     EmailLead findOneByAffiliateId(int $affiliate_id) Return the first EmailLead filtered by the affiliate_id column
 *
 * @method     array findById(int $id) Return EmailLead objects filtered by the id column
 * @method     array findByEmail(string $email) Return EmailLead objects filtered by the email column
 * @method     array findByZipcode(string $ZIPCode) Return EmailLead objects filtered by the ZIPCode column
 * @method     array findByDateCreated(string $date_created) Return EmailLead objects filtered by the date_created column
 * @method     array findByRemoteAddr(string $remote_addr) Return EmailLead objects filtered by the remote_addr column
 * @method     array findByIsActive(int $is_active) Return EmailLead objects filtered by the is_active column
 * @method     array findByAffiliateId(int $affiliate_id) Return EmailLead objects filtered by the affiliate_id column
 *
 * @package    propel.generator.sigfly.om
 */
abstract class BaseEmailLeadQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseEmailLeadQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'sigfly', $modelName = 'EmailLead', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new EmailLeadQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    EmailLeadQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof EmailLeadQuery) {
			return $criteria;
		}
		$query = new EmailLeadQuery();
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
	 * @return    EmailLead|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = EmailLeadPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    EmailLeadQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(EmailLeadPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    EmailLeadQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(EmailLeadPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EmailLeadQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(EmailLeadPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the email column
	 * 
	 * @param     string $email The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EmailLeadQuery The current query, for fluid interface
	 */
	public function filterByEmail($email = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($email)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $email)) {
				$email = str_replace('*', '%', $email);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(EmailLeadPeer::EMAIL, $email, $comparison);
	}

	/**
	 * Filter the query on the ZIPCode column
	 * 
	 * @param     string $zipcode The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EmailLeadQuery The current query, for fluid interface
	 */
	public function filterByZipcode($zipcode = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($zipcode)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $zipcode)) {
				$zipcode = str_replace('*', '%', $zipcode);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(EmailLeadPeer::ZIPCODE, $zipcode, $comparison);
	}

	/**
	 * Filter the query on the date_created column
	 * 
	 * @param     string|array $dateCreated The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EmailLeadQuery The current query, for fluid interface
	 */
	public function filterByDateCreated($dateCreated = null, $comparison = null)
	{
		if (is_array($dateCreated)) {
			$useMinMax = false;
			if (isset($dateCreated['min'])) {
				$this->addUsingAlias(EmailLeadPeer::DATE_CREATED, $dateCreated['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateCreated['max'])) {
				$this->addUsingAlias(EmailLeadPeer::DATE_CREATED, $dateCreated['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(EmailLeadPeer::DATE_CREATED, $dateCreated, $comparison);
	}

	/**
	 * Filter the query on the remote_addr column
	 * 
	 * @param     string $remoteAddr The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EmailLeadQuery The current query, for fluid interface
	 */
	public function filterByRemoteAddr($remoteAddr = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($remoteAddr)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $remoteAddr)) {
				$remoteAddr = str_replace('*', '%', $remoteAddr);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(EmailLeadPeer::REMOTE_ADDR, $remoteAddr, $comparison);
	}

	/**
	 * Filter the query on the is_active column
	 * 
	 * @param     int|array $isActive The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EmailLeadQuery The current query, for fluid interface
	 */
	public function filterByIsActive($isActive = null, $comparison = null)
	{
		if (is_array($isActive)) {
			$useMinMax = false;
			if (isset($isActive['min'])) {
				$this->addUsingAlias(EmailLeadPeer::IS_ACTIVE, $isActive['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isActive['max'])) {
				$this->addUsingAlias(EmailLeadPeer::IS_ACTIVE, $isActive['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(EmailLeadPeer::IS_ACTIVE, $isActive, $comparison);
	}

	/**
	 * Filter the query on the affiliate_id column
	 * 
	 * @param     int|array $affiliateId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EmailLeadQuery The current query, for fluid interface
	 */
	public function filterByAffiliateId($affiliateId = null, $comparison = null)
	{
		if (is_array($affiliateId)) {
			$useMinMax = false;
			if (isset($affiliateId['min'])) {
				$this->addUsingAlias(EmailLeadPeer::AFFILIATE_ID, $affiliateId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($affiliateId['max'])) {
				$this->addUsingAlias(EmailLeadPeer::AFFILIATE_ID, $affiliateId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(EmailLeadPeer::AFFILIATE_ID, $affiliateId, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     EmailLead $emailLead Object to remove from the list of results
	 *
	 * @return    EmailLeadQuery The current query, for fluid interface
	 */
	public function prune($emailLead = null)
	{
		if ($emailLead) {
			$this->addUsingAlias(EmailLeadPeer::ID, $emailLead->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseEmailLeadQuery
