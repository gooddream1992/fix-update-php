<?php


/**
 * Base class that represents a query for the 'email_template' table.
 *
 * 
 *
 * @method     EmailTemplateQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     EmailTemplateQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     EmailTemplateQuery orderBySubject($order = Criteria::ASC) Order by the subject column
 * @method     EmailTemplateQuery orderByBody($order = Criteria::ASC) Order by the body column
 *
 * @method     EmailTemplateQuery groupById() Group by the id column
 * @method     EmailTemplateQuery groupByName() Group by the name column
 * @method     EmailTemplateQuery groupBySubject() Group by the subject column
 * @method     EmailTemplateQuery groupByBody() Group by the body column
 *
 * @method     EmailTemplateQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     EmailTemplateQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     EmailTemplateQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     EmailTemplate findOne(PropelPDO $con = null) Return the first EmailTemplate matching the query
 * @method     EmailTemplate findOneOrCreate(PropelPDO $con = null) Return the first EmailTemplate matching the query, or a new EmailTemplate object populated from the query conditions when no match is found
 *
 * @method     EmailTemplate findOneById(int $id) Return the first EmailTemplate filtered by the id column
 * @method     EmailTemplate findOneByName(string $name) Return the first EmailTemplate filtered by the name column
 * @method     EmailTemplate findOneBySubject(string $subject) Return the first EmailTemplate filtered by the subject column
 * @method     EmailTemplate findOneByBody(string $body) Return the first EmailTemplate filtered by the body column
 *
 * @method     array findById(int $id) Return EmailTemplate objects filtered by the id column
 * @method     array findByName(string $name) Return EmailTemplate objects filtered by the name column
 * @method     array findBySubject(string $subject) Return EmailTemplate objects filtered by the subject column
 * @method     array findByBody(string $body) Return EmailTemplate objects filtered by the body column
 *
 * @package    propel.generator.komideals.om
 */
abstract class BaseEmailTemplateQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseEmailTemplateQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'komideals', $modelName = 'EmailTemplate', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new EmailTemplateQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    EmailTemplateQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof EmailTemplateQuery) {
			return $criteria;
		}
		$query = new EmailTemplateQuery();
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
	 * @return    EmailTemplate|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = EmailTemplatePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    EmailTemplateQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(EmailTemplatePeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    EmailTemplateQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(EmailTemplatePeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EmailTemplateQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(EmailTemplatePeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the name column
	 * 
	 * @param     string $name The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EmailTemplateQuery The current query, for fluid interface
	 */
	public function filterByName($name = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($name)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $name)) {
				$name = str_replace('*', '%', $name);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(EmailTemplatePeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the subject column
	 * 
	 * @param     string $subject The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EmailTemplateQuery The current query, for fluid interface
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
		return $this->addUsingAlias(EmailTemplatePeer::SUBJECT, $subject, $comparison);
	}

	/**
	 * Filter the query on the body column
	 * 
	 * @param     string $body The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    EmailTemplateQuery The current query, for fluid interface
	 */
	public function filterByBody($body = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($body)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $body)) {
				$body = str_replace('*', '%', $body);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(EmailTemplatePeer::BODY, $body, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     EmailTemplate $emailTemplate Object to remove from the list of results
	 *
	 * @return    EmailTemplateQuery The current query, for fluid interface
	 */
	public function prune($emailTemplate = null)
	{
		if ($emailTemplate) {
			$this->addUsingAlias(EmailTemplatePeer::ID, $emailTemplate->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseEmailTemplateQuery
