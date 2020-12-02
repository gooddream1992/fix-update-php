<?php


/**
 * Base class that represents a query for the 'deal_feed_commission' table.
 *
 * 
 *
 * @method     DealFeedCommissionQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     DealFeedCommissionQuery orderByDealFeedId($order = Criteria::ASC) Order by the deal_feed_id column
 * @method     DealFeedCommissionQuery orderByBusinessId($order = Criteria::ASC) Order by the business_id column
 * @method     DealFeedCommissionQuery orderByDateCreated($order = Criteria::ASC) Order by the date_created column
 * @method     DealFeedCommissionQuery orderByActionStatus($order = Criteria::ASC) Order by the action_status column
 * @method     DealFeedCommissionQuery orderByActionType($order = Criteria::ASC) Order by the action_type column
 * @method     DealFeedCommissionQuery orderByAdId($order = Criteria::ASC) Order by the ad_id column
 * @method     DealFeedCommissionQuery orderByAdvertiserId($order = Criteria::ASC) Order by the advertiser_id column
 * @method     DealFeedCommissionQuery orderByAdvertiserName($order = Criteria::ASC) Order by the advertiser_name column
 * @method     DealFeedCommissionQuery orderByCommissionAmount($order = Criteria::ASC) Order by the commission_amount column
 * @method     DealFeedCommissionQuery orderByCountry($order = Criteria::ASC) Order by the country column
 * @method     DealFeedCommissionQuery orderByEventDate($order = Criteria::ASC) Order by the event_date column
 * @method     DealFeedCommissionQuery orderByLockingDate($order = Criteria::ASC) Order by the locking_date column
 * @method     DealFeedCommissionQuery orderByOrderId($order = Criteria::ASC) Order by the order_id column
 * @method     DealFeedCommissionQuery orderByOriginal($order = Criteria::ASC) Order by the original column
 * @method     DealFeedCommissionQuery orderByOriginalActionId($order = Criteria::ASC) Order by the original_action_id column
 * @method     DealFeedCommissionQuery orderByPostingDate($order = Criteria::ASC) Order by the posting_date column
 * @method     DealFeedCommissionQuery orderBySId($order = Criteria::ASC) Order by the s_id column
 * @method     DealFeedCommissionQuery orderBySaleAmount($order = Criteria::ASC) Order by the sale_amount column
 * @method     DealFeedCommissionQuery orderByTransactionId($order = Criteria::ASC) Order by the transaction_id column
 * @method     DealFeedCommissionQuery orderByWebsiteId($order = Criteria::ASC) Order by the website_id column
 * @method     DealFeedCommissionQuery orderByIsPaid($order = Criteria::ASC) Order by the is_paid column
 * @method     DealFeedCommissionQuery orderByPublisherSId($order = Criteria::ASC) Order by the publisher_s_id column
 *
 * @method     DealFeedCommissionQuery groupById() Group by the id column
 * @method     DealFeedCommissionQuery groupByDealFeedId() Group by the deal_feed_id column
 * @method     DealFeedCommissionQuery groupByBusinessId() Group by the business_id column
 * @method     DealFeedCommissionQuery groupByDateCreated() Group by the date_created column
 * @method     DealFeedCommissionQuery groupByActionStatus() Group by the action_status column
 * @method     DealFeedCommissionQuery groupByActionType() Group by the action_type column
 * @method     DealFeedCommissionQuery groupByAdId() Group by the ad_id column
 * @method     DealFeedCommissionQuery groupByAdvertiserId() Group by the advertiser_id column
 * @method     DealFeedCommissionQuery groupByAdvertiserName() Group by the advertiser_name column
 * @method     DealFeedCommissionQuery groupByCommissionAmount() Group by the commission_amount column
 * @method     DealFeedCommissionQuery groupByCountry() Group by the country column
 * @method     DealFeedCommissionQuery groupByEventDate() Group by the event_date column
 * @method     DealFeedCommissionQuery groupByLockingDate() Group by the locking_date column
 * @method     DealFeedCommissionQuery groupByOrderId() Group by the order_id column
 * @method     DealFeedCommissionQuery groupByOriginal() Group by the original column
 * @method     DealFeedCommissionQuery groupByOriginalActionId() Group by the original_action_id column
 * @method     DealFeedCommissionQuery groupByPostingDate() Group by the posting_date column
 * @method     DealFeedCommissionQuery groupBySId() Group by the s_id column
 * @method     DealFeedCommissionQuery groupBySaleAmount() Group by the sale_amount column
 * @method     DealFeedCommissionQuery groupByTransactionId() Group by the transaction_id column
 * @method     DealFeedCommissionQuery groupByWebsiteId() Group by the website_id column
 * @method     DealFeedCommissionQuery groupByIsPaid() Group by the is_paid column
 * @method     DealFeedCommissionQuery groupByPublisherSId() Group by the publisher_s_id column
 *
 * @method     DealFeedCommissionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     DealFeedCommissionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     DealFeedCommissionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     DealFeedCommissionQuery leftJoinBusiness($relationAlias = null) Adds a LEFT JOIN clause to the query using the Business relation
 * @method     DealFeedCommissionQuery rightJoinBusiness($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Business relation
 * @method     DealFeedCommissionQuery innerJoinBusiness($relationAlias = null) Adds a INNER JOIN clause to the query using the Business relation
 *
 * @method     DealFeedCommissionQuery leftJoinDealFeed($relationAlias = null) Adds a LEFT JOIN clause to the query using the DealFeed relation
 * @method     DealFeedCommissionQuery rightJoinDealFeed($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DealFeed relation
 * @method     DealFeedCommissionQuery innerJoinDealFeed($relationAlias = null) Adds a INNER JOIN clause to the query using the DealFeed relation
 *
 * @method     DealFeedCommissionQuery leftJoinAffiliatePaymentDetail($relationAlias = null) Adds a LEFT JOIN clause to the query using the AffiliatePaymentDetail relation
 * @method     DealFeedCommissionQuery rightJoinAffiliatePaymentDetail($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AffiliatePaymentDetail relation
 * @method     DealFeedCommissionQuery innerJoinAffiliatePaymentDetail($relationAlias = null) Adds a INNER JOIN clause to the query using the AffiliatePaymentDetail relation
 *
 * @method     DealFeedCommission findOne(PropelPDO $con = null) Return the first DealFeedCommission matching the query
 * @method     DealFeedCommission findOneOrCreate(PropelPDO $con = null) Return the first DealFeedCommission matching the query, or a new DealFeedCommission object populated from the query conditions when no match is found
 *
 * @method     DealFeedCommission findOneById(int $id) Return the first DealFeedCommission filtered by the id column
 * @method     DealFeedCommission findOneByDealFeedId(int $deal_feed_id) Return the first DealFeedCommission filtered by the deal_feed_id column
 * @method     DealFeedCommission findOneByBusinessId(int $business_id) Return the first DealFeedCommission filtered by the business_id column
 * @method     DealFeedCommission findOneByDateCreated(string $date_created) Return the first DealFeedCommission filtered by the date_created column
 * @method     DealFeedCommission findOneByActionStatus(string $action_status) Return the first DealFeedCommission filtered by the action_status column
 * @method     DealFeedCommission findOneByActionType(string $action_type) Return the first DealFeedCommission filtered by the action_type column
 * @method     DealFeedCommission findOneByAdId(int $ad_id) Return the first DealFeedCommission filtered by the ad_id column
 * @method     DealFeedCommission findOneByAdvertiserId(int $advertiser_id) Return the first DealFeedCommission filtered by the advertiser_id column
 * @method     DealFeedCommission findOneByAdvertiserName(string $advertiser_name) Return the first DealFeedCommission filtered by the advertiser_name column
 * @method     DealFeedCommission findOneByCommissionAmount(double $commission_amount) Return the first DealFeedCommission filtered by the commission_amount column
 * @method     DealFeedCommission findOneByCountry(string $country) Return the first DealFeedCommission filtered by the country column
 * @method     DealFeedCommission findOneByEventDate(string $event_date) Return the first DealFeedCommission filtered by the event_date column
 * @method     DealFeedCommission findOneByLockingDate(string $locking_date) Return the first DealFeedCommission filtered by the locking_date column
 * @method     DealFeedCommission findOneByOrderId(string $order_id) Return the first DealFeedCommission filtered by the order_id column
 * @method     DealFeedCommission findOneByOriginal(int $original) Return the first DealFeedCommission filtered by the original column
 * @method     DealFeedCommission findOneByOriginalActionId(string $original_action_id) Return the first DealFeedCommission filtered by the original_action_id column
 * @method     DealFeedCommission findOneByPostingDate(string $posting_date) Return the first DealFeedCommission filtered by the posting_date column
 * @method     DealFeedCommission findOneBySId(string $s_id) Return the first DealFeedCommission filtered by the s_id column
 * @method     DealFeedCommission findOneBySaleAmount(double $sale_amount) Return the first DealFeedCommission filtered by the sale_amount column
 * @method     DealFeedCommission findOneByTransactionId(string $transaction_id) Return the first DealFeedCommission filtered by the transaction_id column
 * @method     DealFeedCommission findOneByWebsiteId(int $website_id) Return the first DealFeedCommission filtered by the website_id column
 * @method     DealFeedCommission findOneByIsPaid(int $is_paid) Return the first DealFeedCommission filtered by the is_paid column
 * @method     DealFeedCommission findOneByPublisherSId(string $publisher_s_id) Return the first DealFeedCommission filtered by the publisher_s_id column
 *
 * @method     array findById(int $id) Return DealFeedCommission objects filtered by the id column
 * @method     array findByDealFeedId(int $deal_feed_id) Return DealFeedCommission objects filtered by the deal_feed_id column
 * @method     array findByBusinessId(int $business_id) Return DealFeedCommission objects filtered by the business_id column
 * @method     array findByDateCreated(string $date_created) Return DealFeedCommission objects filtered by the date_created column
 * @method     array findByActionStatus(string $action_status) Return DealFeedCommission objects filtered by the action_status column
 * @method     array findByActionType(string $action_type) Return DealFeedCommission objects filtered by the action_type column
 * @method     array findByAdId(int $ad_id) Return DealFeedCommission objects filtered by the ad_id column
 * @method     array findByAdvertiserId(int $advertiser_id) Return DealFeedCommission objects filtered by the advertiser_id column
 * @method     array findByAdvertiserName(string $advertiser_name) Return DealFeedCommission objects filtered by the advertiser_name column
 * @method     array findByCommissionAmount(double $commission_amount) Return DealFeedCommission objects filtered by the commission_amount column
 * @method     array findByCountry(string $country) Return DealFeedCommission objects filtered by the country column
 * @method     array findByEventDate(string $event_date) Return DealFeedCommission objects filtered by the event_date column
 * @method     array findByLockingDate(string $locking_date) Return DealFeedCommission objects filtered by the locking_date column
 * @method     array findByOrderId(string $order_id) Return DealFeedCommission objects filtered by the order_id column
 * @method     array findByOriginal(int $original) Return DealFeedCommission objects filtered by the original column
 * @method     array findByOriginalActionId(string $original_action_id) Return DealFeedCommission objects filtered by the original_action_id column
 * @method     array findByPostingDate(string $posting_date) Return DealFeedCommission objects filtered by the posting_date column
 * @method     array findBySId(string $s_id) Return DealFeedCommission objects filtered by the s_id column
 * @method     array findBySaleAmount(double $sale_amount) Return DealFeedCommission objects filtered by the sale_amount column
 * @method     array findByTransactionId(string $transaction_id) Return DealFeedCommission objects filtered by the transaction_id column
 * @method     array findByWebsiteId(int $website_id) Return DealFeedCommission objects filtered by the website_id column
 * @method     array findByIsPaid(int $is_paid) Return DealFeedCommission objects filtered by the is_paid column
 * @method     array findByPublisherSId(string $publisher_s_id) Return DealFeedCommission objects filtered by the publisher_s_id column
 *
 * @package    propel.generator.komideals.om
 */
abstract class BaseDealFeedCommissionQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseDealFeedCommissionQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'komideals', $modelName = 'DealFeedCommission', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new DealFeedCommissionQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    DealFeedCommissionQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof DealFeedCommissionQuery) {
			return $criteria;
		}
		$query = new DealFeedCommissionQuery();
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
	 * @return    DealFeedCommission|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = DealFeedCommissionPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    DealFeedCommissionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(DealFeedCommissionPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    DealFeedCommissionQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(DealFeedCommissionPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedCommissionQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(DealFeedCommissionPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the deal_feed_id column
	 * 
	 * @param     int|array $dealFeedId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedCommissionQuery The current query, for fluid interface
	 */
	public function filterByDealFeedId($dealFeedId = null, $comparison = null)
	{
		if (is_array($dealFeedId)) {
			$useMinMax = false;
			if (isset($dealFeedId['min'])) {
				$this->addUsingAlias(DealFeedCommissionPeer::DEAL_FEED_ID, $dealFeedId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dealFeedId['max'])) {
				$this->addUsingAlias(DealFeedCommissionPeer::DEAL_FEED_ID, $dealFeedId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedCommissionPeer::DEAL_FEED_ID, $dealFeedId, $comparison);
	}

	/**
	 * Filter the query on the business_id column
	 * 
	 * @param     int|array $businessId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedCommissionQuery The current query, for fluid interface
	 */
	public function filterByBusinessId($businessId = null, $comparison = null)
	{
		if (is_array($businessId)) {
			$useMinMax = false;
			if (isset($businessId['min'])) {
				$this->addUsingAlias(DealFeedCommissionPeer::BUSINESS_ID, $businessId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($businessId['max'])) {
				$this->addUsingAlias(DealFeedCommissionPeer::BUSINESS_ID, $businessId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedCommissionPeer::BUSINESS_ID, $businessId, $comparison);
	}

	/**
	 * Filter the query on the date_created column
	 * 
	 * @param     string|array $dateCreated The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedCommissionQuery The current query, for fluid interface
	 */
	public function filterByDateCreated($dateCreated = null, $comparison = null)
	{
		if (is_array($dateCreated)) {
			$useMinMax = false;
			if (isset($dateCreated['min'])) {
				$this->addUsingAlias(DealFeedCommissionPeer::DATE_CREATED, $dateCreated['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateCreated['max'])) {
				$this->addUsingAlias(DealFeedCommissionPeer::DATE_CREATED, $dateCreated['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedCommissionPeer::DATE_CREATED, $dateCreated, $comparison);
	}

	/**
	 * Filter the query on the action_status column
	 * 
	 * @param     string $actionStatus The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedCommissionQuery The current query, for fluid interface
	 */
	public function filterByActionStatus($actionStatus = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($actionStatus)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $actionStatus)) {
				$actionStatus = str_replace('*', '%', $actionStatus);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DealFeedCommissionPeer::ACTION_STATUS, $actionStatus, $comparison);
	}

	/**
	 * Filter the query on the action_type column
	 * 
	 * @param     string $actionType The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedCommissionQuery The current query, for fluid interface
	 */
	public function filterByActionType($actionType = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($actionType)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $actionType)) {
				$actionType = str_replace('*', '%', $actionType);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DealFeedCommissionPeer::ACTION_TYPE, $actionType, $comparison);
	}

	/**
	 * Filter the query on the ad_id column
	 * 
	 * @param     int|array $adId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedCommissionQuery The current query, for fluid interface
	 */
	public function filterByAdId($adId = null, $comparison = null)
	{
		if (is_array($adId)) {
			$useMinMax = false;
			if (isset($adId['min'])) {
				$this->addUsingAlias(DealFeedCommissionPeer::AD_ID, $adId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($adId['max'])) {
				$this->addUsingAlias(DealFeedCommissionPeer::AD_ID, $adId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedCommissionPeer::AD_ID, $adId, $comparison);
	}

	/**
	 * Filter the query on the advertiser_id column
	 * 
	 * @param     int|array $advertiserId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedCommissionQuery The current query, for fluid interface
	 */
	public function filterByAdvertiserId($advertiserId = null, $comparison = null)
	{
		if (is_array($advertiserId)) {
			$useMinMax = false;
			if (isset($advertiserId['min'])) {
				$this->addUsingAlias(DealFeedCommissionPeer::ADVERTISER_ID, $advertiserId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($advertiserId['max'])) {
				$this->addUsingAlias(DealFeedCommissionPeer::ADVERTISER_ID, $advertiserId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedCommissionPeer::ADVERTISER_ID, $advertiserId, $comparison);
	}

	/**
	 * Filter the query on the advertiser_name column
	 * 
	 * @param     string $advertiserName The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedCommissionQuery The current query, for fluid interface
	 */
	public function filterByAdvertiserName($advertiserName = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($advertiserName)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $advertiserName)) {
				$advertiserName = str_replace('*', '%', $advertiserName);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DealFeedCommissionPeer::ADVERTISER_NAME, $advertiserName, $comparison);
	}

	/**
	 * Filter the query on the commission_amount column
	 * 
	 * @param     double|array $commissionAmount The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedCommissionQuery The current query, for fluid interface
	 */
	public function filterByCommissionAmount($commissionAmount = null, $comparison = null)
	{
		if (is_array($commissionAmount)) {
			$useMinMax = false;
			if (isset($commissionAmount['min'])) {
				$this->addUsingAlias(DealFeedCommissionPeer::COMMISSION_AMOUNT, $commissionAmount['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($commissionAmount['max'])) {
				$this->addUsingAlias(DealFeedCommissionPeer::COMMISSION_AMOUNT, $commissionAmount['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedCommissionPeer::COMMISSION_AMOUNT, $commissionAmount, $comparison);
	}

	/**
	 * Filter the query on the country column
	 * 
	 * @param     string $country The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedCommissionQuery The current query, for fluid interface
	 */
	public function filterByCountry($country = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($country)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $country)) {
				$country = str_replace('*', '%', $country);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DealFeedCommissionPeer::COUNTRY, $country, $comparison);
	}

	/**
	 * Filter the query on the event_date column
	 * 
	 * @param     string|array $eventDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedCommissionQuery The current query, for fluid interface
	 */
	public function filterByEventDate($eventDate = null, $comparison = null)
	{
		if (is_array($eventDate)) {
			$useMinMax = false;
			if (isset($eventDate['min'])) {
				$this->addUsingAlias(DealFeedCommissionPeer::EVENT_DATE, $eventDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($eventDate['max'])) {
				$this->addUsingAlias(DealFeedCommissionPeer::EVENT_DATE, $eventDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedCommissionPeer::EVENT_DATE, $eventDate, $comparison);
	}

	/**
	 * Filter the query on the locking_date column
	 * 
	 * @param     string|array $lockingDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedCommissionQuery The current query, for fluid interface
	 */
	public function filterByLockingDate($lockingDate = null, $comparison = null)
	{
		if (is_array($lockingDate)) {
			$useMinMax = false;
			if (isset($lockingDate['min'])) {
				$this->addUsingAlias(DealFeedCommissionPeer::LOCKING_DATE, $lockingDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lockingDate['max'])) {
				$this->addUsingAlias(DealFeedCommissionPeer::LOCKING_DATE, $lockingDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedCommissionPeer::LOCKING_DATE, $lockingDate, $comparison);
	}

	/**
	 * Filter the query on the order_id column
	 * 
	 * @param     string|array $orderId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedCommissionQuery The current query, for fluid interface
	 */
	public function filterByOrderId($orderId = null, $comparison = null)
	{
		if (is_array($orderId)) {
			$useMinMax = false;
			if (isset($orderId['min'])) {
				$this->addUsingAlias(DealFeedCommissionPeer::ORDER_ID, $orderId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($orderId['max'])) {
				$this->addUsingAlias(DealFeedCommissionPeer::ORDER_ID, $orderId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedCommissionPeer::ORDER_ID, $orderId, $comparison);
	}

	/**
	 * Filter the query on the original column
	 * 
	 * @param     int|array $original The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedCommissionQuery The current query, for fluid interface
	 */
	public function filterByOriginal($original = null, $comparison = null)
	{
		if (is_array($original)) {
			$useMinMax = false;
			if (isset($original['min'])) {
				$this->addUsingAlias(DealFeedCommissionPeer::ORIGINAL, $original['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($original['max'])) {
				$this->addUsingAlias(DealFeedCommissionPeer::ORIGINAL, $original['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedCommissionPeer::ORIGINAL, $original, $comparison);
	}

	/**
	 * Filter the query on the original_action_id column
	 * 
	 * @param     string|array $originalActionId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedCommissionQuery The current query, for fluid interface
	 */
	public function filterByOriginalActionId($originalActionId = null, $comparison = null)
	{
		if (is_array($originalActionId)) {
			$useMinMax = false;
			if (isset($originalActionId['min'])) {
				$this->addUsingAlias(DealFeedCommissionPeer::ORIGINAL_ACTION_ID, $originalActionId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($originalActionId['max'])) {
				$this->addUsingAlias(DealFeedCommissionPeer::ORIGINAL_ACTION_ID, $originalActionId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedCommissionPeer::ORIGINAL_ACTION_ID, $originalActionId, $comparison);
	}

	/**
	 * Filter the query on the posting_date column
	 * 
	 * @param     string|array $postingDate The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedCommissionQuery The current query, for fluid interface
	 */
	public function filterByPostingDate($postingDate = null, $comparison = null)
	{
		if (is_array($postingDate)) {
			$useMinMax = false;
			if (isset($postingDate['min'])) {
				$this->addUsingAlias(DealFeedCommissionPeer::POSTING_DATE, $postingDate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($postingDate['max'])) {
				$this->addUsingAlias(DealFeedCommissionPeer::POSTING_DATE, $postingDate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedCommissionPeer::POSTING_DATE, $postingDate, $comparison);
	}

	/**
	 * Filter the query on the s_id column
	 * 
	 * @param     string $sId The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedCommissionQuery The current query, for fluid interface
	 */
	public function filterBySId($sId = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($sId)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $sId)) {
				$sId = str_replace('*', '%', $sId);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DealFeedCommissionPeer::S_ID, $sId, $comparison);
	}

	/**
	 * Filter the query on the sale_amount column
	 * 
	 * @param     double|array $saleAmount The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedCommissionQuery The current query, for fluid interface
	 */
	public function filterBySaleAmount($saleAmount = null, $comparison = null)
	{
		if (is_array($saleAmount)) {
			$useMinMax = false;
			if (isset($saleAmount['min'])) {
				$this->addUsingAlias(DealFeedCommissionPeer::SALE_AMOUNT, $saleAmount['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($saleAmount['max'])) {
				$this->addUsingAlias(DealFeedCommissionPeer::SALE_AMOUNT, $saleAmount['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedCommissionPeer::SALE_AMOUNT, $saleAmount, $comparison);
	}

	/**
	 * Filter the query on the transaction_id column
	 * 
	 * @param     string|array $transactionId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedCommissionQuery The current query, for fluid interface
	 */
	public function filterByTransactionId($transactionId = null, $comparison = null)
	{
		if (is_array($transactionId)) {
			$useMinMax = false;
			if (isset($transactionId['min'])) {
				$this->addUsingAlias(DealFeedCommissionPeer::TRANSACTION_ID, $transactionId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($transactionId['max'])) {
				$this->addUsingAlias(DealFeedCommissionPeer::TRANSACTION_ID, $transactionId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedCommissionPeer::TRANSACTION_ID, $transactionId, $comparison);
	}

	/**
	 * Filter the query on the website_id column
	 * 
	 * @param     int|array $websiteId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedCommissionQuery The current query, for fluid interface
	 */
	public function filterByWebsiteId($websiteId = null, $comparison = null)
	{
		if (is_array($websiteId)) {
			$useMinMax = false;
			if (isset($websiteId['min'])) {
				$this->addUsingAlias(DealFeedCommissionPeer::WEBSITE_ID, $websiteId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($websiteId['max'])) {
				$this->addUsingAlias(DealFeedCommissionPeer::WEBSITE_ID, $websiteId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedCommissionPeer::WEBSITE_ID, $websiteId, $comparison);
	}

	/**
	 * Filter the query on the is_paid column
	 * 
	 * @param     int|array $isPaid The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedCommissionQuery The current query, for fluid interface
	 */
	public function filterByIsPaid($isPaid = null, $comparison = null)
	{
		if (is_array($isPaid)) {
			$useMinMax = false;
			if (isset($isPaid['min'])) {
				$this->addUsingAlias(DealFeedCommissionPeer::IS_PAID, $isPaid['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isPaid['max'])) {
				$this->addUsingAlias(DealFeedCommissionPeer::IS_PAID, $isPaid['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedCommissionPeer::IS_PAID, $isPaid, $comparison);
	}

	/**
	 * Filter the query on the publisher_s_id column
	 * 
	 * @param     string $publisherSId The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedCommissionQuery The current query, for fluid interface
	 */
	public function filterByPublisherSId($publisherSId = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($publisherSId)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $publisherSId)) {
				$publisherSId = str_replace('*', '%', $publisherSId);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DealFeedCommissionPeer::PUBLISHER_S_ID, $publisherSId, $comparison);
	}

	/**
	 * Filter the query by a related Business object
	 *
	 * @param     Business $business  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedCommissionQuery The current query, for fluid interface
	 */
	public function filterByBusiness($business, $comparison = null)
	{
		return $this
			->addUsingAlias(DealFeedCommissionPeer::BUSINESS_ID, $business->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Business relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedCommissionQuery The current query, for fluid interface
	 */
	public function joinBusiness($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Business');
		
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
			$this->addJoinObject($join, 'Business');
		}
		
		return $this;
	}

	/**
	 * Use the Business relation Business object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    BusinessQuery A secondary query class using the current class as primary query
	 */
	public function useBusinessQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinBusiness($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Business', 'BusinessQuery');
	}

	/**
	 * Filter the query by a related DealFeed object
	 *
	 * @param     DealFeed $dealFeed  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedCommissionQuery The current query, for fluid interface
	 */
	public function filterByDealFeed($dealFeed, $comparison = null)
	{
		return $this
			->addUsingAlias(DealFeedCommissionPeer::DEAL_FEED_ID, $dealFeed->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the DealFeed relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedCommissionQuery The current query, for fluid interface
	 */
	public function joinDealFeed($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('DealFeed');
		
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
			$this->addJoinObject($join, 'DealFeed');
		}
		
		return $this;
	}

	/**
	 * Use the DealFeed relation DealFeed object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedQuery A secondary query class using the current class as primary query
	 */
	public function useDealFeedQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinDealFeed($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'DealFeed', 'DealFeedQuery');
	}

	/**
	 * Filter the query by a related AffiliatePaymentDetail object
	 *
	 * @param     AffiliatePaymentDetail $affiliatePaymentDetail  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedCommissionQuery The current query, for fluid interface
	 */
	public function filterByAffiliatePaymentDetail($affiliatePaymentDetail, $comparison = null)
	{
		return $this
			->addUsingAlias(DealFeedCommissionPeer::ID, $affiliatePaymentDetail->getDealFeedCommissionId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the AffiliatePaymentDetail relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedCommissionQuery The current query, for fluid interface
	 */
	public function joinAffiliatePaymentDetail($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('AffiliatePaymentDetail');
		
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
			$this->addJoinObject($join, 'AffiliatePaymentDetail');
		}
		
		return $this;
	}

	/**
	 * Use the AffiliatePaymentDetail relation AffiliatePaymentDetail object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    AffiliatePaymentDetailQuery A secondary query class using the current class as primary query
	 */
	public function useAffiliatePaymentDetailQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinAffiliatePaymentDetail($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'AffiliatePaymentDetail', 'AffiliatePaymentDetailQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     DealFeedCommission $dealFeedCommission Object to remove from the list of results
	 *
	 * @return    DealFeedCommissionQuery The current query, for fluid interface
	 */
	public function prune($dealFeedCommission = null)
	{
		if ($dealFeedCommission) {
			$this->addUsingAlias(DealFeedCommissionPeer::ID, $dealFeedCommission->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseDealFeedCommissionQuery
