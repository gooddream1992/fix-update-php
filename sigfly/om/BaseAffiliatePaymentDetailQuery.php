<?php


/**
 * Base class that represents a query for the 'affiliate_payment_detail' table.
 *
 * 
 *
 * @method     AffiliatePaymentDetailQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     AffiliatePaymentDetailQuery orderByAffiliatePaymentId($order = Criteria::ASC) Order by the affiliate_payment_id column
 * @method     AffiliatePaymentDetailQuery orderByDealFeedCommissionId($order = Criteria::ASC) Order by the deal_feed_commission_id column
 * @method     AffiliatePaymentDetailQuery orderByDateCreated($order = Criteria::ASC) Order by the date_created column
 *
 * @method     AffiliatePaymentDetailQuery groupById() Group by the id column
 * @method     AffiliatePaymentDetailQuery groupByAffiliatePaymentId() Group by the affiliate_payment_id column
 * @method     AffiliatePaymentDetailQuery groupByDealFeedCommissionId() Group by the deal_feed_commission_id column
 * @method     AffiliatePaymentDetailQuery groupByDateCreated() Group by the date_created column
 *
 * @method     AffiliatePaymentDetailQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     AffiliatePaymentDetailQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     AffiliatePaymentDetailQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     AffiliatePaymentDetailQuery leftJoinAffiliatePayment($relationAlias = null) Adds a LEFT JOIN clause to the query using the AffiliatePayment relation
 * @method     AffiliatePaymentDetailQuery rightJoinAffiliatePayment($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AffiliatePayment relation
 * @method     AffiliatePaymentDetailQuery innerJoinAffiliatePayment($relationAlias = null) Adds a INNER JOIN clause to the query using the AffiliatePayment relation
 *
 * @method     AffiliatePaymentDetail findOne(PropelPDO $con = null) Return the first AffiliatePaymentDetail matching the query
 * @method     AffiliatePaymentDetail findOneOrCreate(PropelPDO $con = null) Return the first AffiliatePaymentDetail matching the query, or a new AffiliatePaymentDetail object populated from the query conditions when no match is found
 *
 * @method     AffiliatePaymentDetail findOneById(int $id) Return the first AffiliatePaymentDetail filtered by the id column
 * @method     AffiliatePaymentDetail findOneByAffiliatePaymentId(int $affiliate_payment_id) Return the first AffiliatePaymentDetail filtered by the affiliate_payment_id column
 * @method     AffiliatePaymentDetail findOneByDealFeedCommissionId(int $deal_feed_commission_id) Return the first AffiliatePaymentDetail filtered by the deal_feed_commission_id column
 * @method     AffiliatePaymentDetail findOneByDateCreated(string $date_created) Return the first AffiliatePaymentDetail filtered by the date_created column
 *
 * @method     array findById(int $id) Return AffiliatePaymentDetail objects filtered by the id column
 * @method     array findByAffiliatePaymentId(int $affiliate_payment_id) Return AffiliatePaymentDetail objects filtered by the affiliate_payment_id column
 * @method     array findByDealFeedCommissionId(int $deal_feed_commission_id) Return AffiliatePaymentDetail objects filtered by the deal_feed_commission_id column
 * @method     array findByDateCreated(string $date_created) Return AffiliatePaymentDetail objects filtered by the date_created column
 *
 * @package    propel.generator.sigfly.om
 */
abstract class BaseAffiliatePaymentDetailQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseAffiliatePaymentDetailQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'sigfly', $modelName = 'AffiliatePaymentDetail', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new AffiliatePaymentDetailQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    AffiliatePaymentDetailQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof AffiliatePaymentDetailQuery) {
			return $criteria;
		}
		$query = new AffiliatePaymentDetailQuery();
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
	 * @return    AffiliatePaymentDetail|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = AffiliatePaymentDetailPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    AffiliatePaymentDetailQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(AffiliatePaymentDetailPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    AffiliatePaymentDetailQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(AffiliatePaymentDetailPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AffiliatePaymentDetailQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(AffiliatePaymentDetailPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the affiliate_payment_id column
	 * 
	 * @param     int|array $affiliatePaymentId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AffiliatePaymentDetailQuery The current query, for fluid interface
	 */
	public function filterByAffiliatePaymentId($affiliatePaymentId = null, $comparison = null)
	{
		if (is_array($affiliatePaymentId)) {
			$useMinMax = false;
			if (isset($affiliatePaymentId['min'])) {
				$this->addUsingAlias(AffiliatePaymentDetailPeer::AFFILIATE_PAYMENT_ID, $affiliatePaymentId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($affiliatePaymentId['max'])) {
				$this->addUsingAlias(AffiliatePaymentDetailPeer::AFFILIATE_PAYMENT_ID, $affiliatePaymentId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AffiliatePaymentDetailPeer::AFFILIATE_PAYMENT_ID, $affiliatePaymentId, $comparison);
	}

	/**
	 * Filter the query on the deal_feed_commission_id column
	 * 
	 * @param     int|array $dealFeedCommissionId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AffiliatePaymentDetailQuery The current query, for fluid interface
	 */
	public function filterByDealFeedCommissionId($dealFeedCommissionId = null, $comparison = null)
	{
		if (is_array($dealFeedCommissionId)) {
			$useMinMax = false;
			if (isset($dealFeedCommissionId['min'])) {
				$this->addUsingAlias(AffiliatePaymentDetailPeer::DEAL_FEED_COMMISSION_ID, $dealFeedCommissionId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dealFeedCommissionId['max'])) {
				$this->addUsingAlias(AffiliatePaymentDetailPeer::DEAL_FEED_COMMISSION_ID, $dealFeedCommissionId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AffiliatePaymentDetailPeer::DEAL_FEED_COMMISSION_ID, $dealFeedCommissionId, $comparison);
	}

	/**
	 * Filter the query on the date_created column
	 * 
	 * @param     string|array $dateCreated The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AffiliatePaymentDetailQuery The current query, for fluid interface
	 */
	public function filterByDateCreated($dateCreated = null, $comparison = null)
	{
		if (is_array($dateCreated)) {
			$useMinMax = false;
			if (isset($dateCreated['min'])) {
				$this->addUsingAlias(AffiliatePaymentDetailPeer::DATE_CREATED, $dateCreated['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateCreated['max'])) {
				$this->addUsingAlias(AffiliatePaymentDetailPeer::DATE_CREATED, $dateCreated['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AffiliatePaymentDetailPeer::DATE_CREATED, $dateCreated, $comparison);
	}

	/**
	 * Filter the query by a related AffiliatePayment object
	 *
	 * @param     AffiliatePayment $affiliatePayment  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AffiliatePaymentDetailQuery The current query, for fluid interface
	 */
	public function filterByAffiliatePayment($affiliatePayment, $comparison = null)
	{
		return $this
			->addUsingAlias(AffiliatePaymentDetailPeer::AFFILIATE_PAYMENT_ID, $affiliatePayment->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the AffiliatePayment relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    AffiliatePaymentDetailQuery The current query, for fluid interface
	 */
	public function joinAffiliatePayment($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('AffiliatePayment');
		
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
			$this->addJoinObject($join, 'AffiliatePayment');
		}
		
		return $this;
	}

	/**
	 * Use the AffiliatePayment relation AffiliatePayment object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    AffiliatePaymentQuery A secondary query class using the current class as primary query
	 */
	public function useAffiliatePaymentQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinAffiliatePayment($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'AffiliatePayment', 'AffiliatePaymentQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     AffiliatePaymentDetail $affiliatePaymentDetail Object to remove from the list of results
	 *
	 * @return    AffiliatePaymentDetailQuery The current query, for fluid interface
	 */
	public function prune($affiliatePaymentDetail = null)
	{
		if ($affiliatePaymentDetail) {
			$this->addUsingAlias(AffiliatePaymentDetailPeer::ID, $affiliatePaymentDetail->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseAffiliatePaymentDetailQuery
