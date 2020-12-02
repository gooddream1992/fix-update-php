<?php


/**
 * Base class that represents a query for the 'deal_feed' table.
 *
 * 
 *
 * @method     DealFeedQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     DealFeedQuery orderByBusinessId($order = Criteria::ASC) Order by the business_id column
 * @method     DealFeedQuery orderByDateStart($order = Criteria::ASC) Order by the date_start column
 * @method     DealFeedQuery orderByDateEnd($order = Criteria::ASC) Order by the date_end column
 * @method     DealFeedQuery orderByPrice($order = Criteria::ASC) Order by the price column
 * @method     DealFeedQuery orderByRetailValue($order = Criteria::ASC) Order by the retail_value column
 * @method     DealFeedQuery orderByDetails($order = Criteria::ASC) Order by the details column
 * @method     DealFeedQuery orderByClickUrl($order = Criteria::ASC) Order by the click_url column
 * @method     DealFeedQuery orderByIsActive($order = Criteria::ASC) Order by the is_active column
 * @method     DealFeedQuery orderByIsTipped($order = Criteria::ASC) Order by the is_tipped column
 * @method     DealFeedQuery orderByDateTipped($order = Criteria::ASC) Order by the date_tipped column
 * @method     DealFeedQuery orderByTippingPoint($order = Criteria::ASC) Order by the tipping_point column
 * @method     DealFeedQuery orderByCategoryId($order = Criteria::ASC) Order by the category_id column
 * @method     DealFeedQuery orderByLatitude($order = Criteria::ASC) Order by the latitude column
 * @method     DealFeedQuery orderByLongitude($order = Criteria::ASC) Order by the longitude column
 * @method     DealFeedQuery orderByPermalink($order = Criteria::ASC) Order by the permalink column
 * @method     DealFeedQuery orderByPhotoSmall($order = Criteria::ASC) Order by the photo_small column
 * @method     DealFeedQuery orderByPhotoMedium($order = Criteria::ASC) Order by the photo_medium column
 * @method     DealFeedQuery orderByPhoto($order = Criteria::ASC) Order by the photo column
 * @method     DealFeedQuery orderBySubject($order = Criteria::ASC) Order by the subject column
 * @method     DealFeedQuery orderByTitle($order = Criteria::ASC) Order by the title column
 * @method     DealFeedQuery orderByCommentNumber($order = Criteria::ASC) Order by the comment_number column
 * @method     DealFeedQuery orderByDiscussionUrl($order = Criteria::ASC) Order by the discussion_url column
 * @method     DealFeedQuery orderByNumberSold($order = Criteria::ASC) Order by the number_sold column
 * @method     DealFeedQuery orderByTippedAt($order = Criteria::ASC) Order by the tipped_at column
 * @method     DealFeedQuery orderByLocationNote($order = Criteria::ASC) Order by the location_note column
 * @method     DealFeedQuery orderByIsOnline($order = Criteria::ASC) Order by the is_online column
 * @method     DealFeedQuery orderByWebsiteUrl($order = Criteria::ASC) Order by the website_url column
 * @method     DealFeedQuery orderByDateCreated($order = Criteria::ASC) Order by the date_created column
 * @method     DealFeedQuery orderByDateModified($order = Criteria::ASC) Order by the date_modified column
 * @method     DealFeedQuery orderByDealFeedSourceId($order = Criteria::ASC) Order by the deal_feed_source_id column
 * @method     DealFeedQuery orderByDealFeedDivisionId($order = Criteria::ASC) Order by the deal_feed_division_id column
 *
 * @method     DealFeedQuery groupById() Group by the id column
 * @method     DealFeedQuery groupByBusinessId() Group by the business_id column
 * @method     DealFeedQuery groupByDateStart() Group by the date_start column
 * @method     DealFeedQuery groupByDateEnd() Group by the date_end column
 * @method     DealFeedQuery groupByPrice() Group by the price column
 * @method     DealFeedQuery groupByRetailValue() Group by the retail_value column
 * @method     DealFeedQuery groupByDetails() Group by the details column
 * @method     DealFeedQuery groupByClickUrl() Group by the click_url column
 * @method     DealFeedQuery groupByIsActive() Group by the is_active column
 * @method     DealFeedQuery groupByIsTipped() Group by the is_tipped column
 * @method     DealFeedQuery groupByDateTipped() Group by the date_tipped column
 * @method     DealFeedQuery groupByTippingPoint() Group by the tipping_point column
 * @method     DealFeedQuery groupByCategoryId() Group by the category_id column
 * @method     DealFeedQuery groupByLatitude() Group by the latitude column
 * @method     DealFeedQuery groupByLongitude() Group by the longitude column
 * @method     DealFeedQuery groupByPermalink() Group by the permalink column
 * @method     DealFeedQuery groupByPhotoSmall() Group by the photo_small column
 * @method     DealFeedQuery groupByPhotoMedium() Group by the photo_medium column
 * @method     DealFeedQuery groupByPhoto() Group by the photo column
 * @method     DealFeedQuery groupBySubject() Group by the subject column
 * @method     DealFeedQuery groupByTitle() Group by the title column
 * @method     DealFeedQuery groupByCommentNumber() Group by the comment_number column
 * @method     DealFeedQuery groupByDiscussionUrl() Group by the discussion_url column
 * @method     DealFeedQuery groupByNumberSold() Group by the number_sold column
 * @method     DealFeedQuery groupByTippedAt() Group by the tipped_at column
 * @method     DealFeedQuery groupByLocationNote() Group by the location_note column
 * @method     DealFeedQuery groupByIsOnline() Group by the is_online column
 * @method     DealFeedQuery groupByWebsiteUrl() Group by the website_url column
 * @method     DealFeedQuery groupByDateCreated() Group by the date_created column
 * @method     DealFeedQuery groupByDateModified() Group by the date_modified column
 * @method     DealFeedQuery groupByDealFeedSourceId() Group by the deal_feed_source_id column
 * @method     DealFeedQuery groupByDealFeedDivisionId() Group by the deal_feed_division_id column
 *
 * @method     DealFeedQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     DealFeedQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     DealFeedQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     DealFeedQuery leftJoinDealFeedDivision($relationAlias = null) Adds a LEFT JOIN clause to the query using the DealFeedDivision relation
 * @method     DealFeedQuery rightJoinDealFeedDivision($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DealFeedDivision relation
 * @method     DealFeedQuery innerJoinDealFeedDivision($relationAlias = null) Adds a INNER JOIN clause to the query using the DealFeedDivision relation
 *
 * @method     DealFeedQuery leftJoinCategory($relationAlias = null) Adds a LEFT JOIN clause to the query using the Category relation
 * @method     DealFeedQuery rightJoinCategory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Category relation
 * @method     DealFeedQuery innerJoinCategory($relationAlias = null) Adds a INNER JOIN clause to the query using the Category relation
 *
 * @method     DealFeedQuery leftJoinBusiness($relationAlias = null) Adds a LEFT JOIN clause to the query using the Business relation
 * @method     DealFeedQuery rightJoinBusiness($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Business relation
 * @method     DealFeedQuery innerJoinBusiness($relationAlias = null) Adds a INNER JOIN clause to the query using the Business relation
 *
 * @method     DealFeedQuery leftJoinDealFeedSource($relationAlias = null) Adds a LEFT JOIN clause to the query using the DealFeedSource relation
 * @method     DealFeedQuery rightJoinDealFeedSource($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DealFeedSource relation
 * @method     DealFeedQuery innerJoinDealFeedSource($relationAlias = null) Adds a INNER JOIN clause to the query using the DealFeedSource relation
 *
 * @method     DealFeedQuery leftJoinDealFeedBlogPost($relationAlias = null) Adds a LEFT JOIN clause to the query using the DealFeedBlogPost relation
 * @method     DealFeedQuery rightJoinDealFeedBlogPost($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DealFeedBlogPost relation
 * @method     DealFeedQuery innerJoinDealFeedBlogPost($relationAlias = null) Adds a INNER JOIN clause to the query using the DealFeedBlogPost relation
 *
 * @method     DealFeedQuery leftJoinDealFeedClick($relationAlias = null) Adds a LEFT JOIN clause to the query using the DealFeedClick relation
 * @method     DealFeedQuery rightJoinDealFeedClick($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DealFeedClick relation
 * @method     DealFeedQuery innerJoinDealFeedClick($relationAlias = null) Adds a INNER JOIN clause to the query using the DealFeedClick relation
 *
 * @method     DealFeedQuery leftJoinDealFeedCommission($relationAlias = null) Adds a LEFT JOIN clause to the query using the DealFeedCommission relation
 * @method     DealFeedQuery rightJoinDealFeedCommission($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DealFeedCommission relation
 * @method     DealFeedQuery innerJoinDealFeedCommission($relationAlias = null) Adds a INNER JOIN clause to the query using the DealFeedCommission relation
 *
 * @method     DealFeedQuery leftJoinDealFeedDetail($relationAlias = null) Adds a LEFT JOIN clause to the query using the DealFeedDetail relation
 * @method     DealFeedQuery rightJoinDealFeedDetail($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DealFeedDetail relation
 * @method     DealFeedQuery innerJoinDealFeedDetail($relationAlias = null) Adds a INNER JOIN clause to the query using the DealFeedDetail relation
 *
 * @method     DealFeedQuery leftJoinDealFeedHighlight($relationAlias = null) Adds a LEFT JOIN clause to the query using the DealFeedHighlight relation
 * @method     DealFeedQuery rightJoinDealFeedHighlight($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DealFeedHighlight relation
 * @method     DealFeedQuery innerJoinDealFeedHighlight($relationAlias = null) Adds a INNER JOIN clause to the query using the DealFeedHighlight relation
 *
 * @method     DealFeedQuery leftJoinDealFeedLocation($relationAlias = null) Adds a LEFT JOIN clause to the query using the DealFeedLocation relation
 * @method     DealFeedQuery rightJoinDealFeedLocation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DealFeedLocation relation
 * @method     DealFeedQuery innerJoinDealFeedLocation($relationAlias = null) Adds a INNER JOIN clause to the query using the DealFeedLocation relation
 *
 * @method     DealFeedQuery leftJoinDealFeedStat($relationAlias = null) Adds a LEFT JOIN clause to the query using the DealFeedStat relation
 * @method     DealFeedQuery rightJoinDealFeedStat($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DealFeedStat relation
 * @method     DealFeedQuery innerJoinDealFeedStat($relationAlias = null) Adds a INNER JOIN clause to the query using the DealFeedStat relation
 *
 * @method     DealFeedQuery leftJoinDealFeedTaxonomyDmoz($relationAlias = null) Adds a LEFT JOIN clause to the query using the DealFeedTaxonomyDmoz relation
 * @method     DealFeedQuery rightJoinDealFeedTaxonomyDmoz($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DealFeedTaxonomyDmoz relation
 * @method     DealFeedQuery innerJoinDealFeedTaxonomyDmoz($relationAlias = null) Adds a INNER JOIN clause to the query using the DealFeedTaxonomyDmoz relation
 *
 * @method     DealFeedQuery leftJoinDealFeedThread($relationAlias = null) Adds a LEFT JOIN clause to the query using the DealFeedThread relation
 * @method     DealFeedQuery rightJoinDealFeedThread($relationAlias = null) Adds a RIGHT JOIN clause to the query using the DealFeedThread relation
 * @method     DealFeedQuery innerJoinDealFeedThread($relationAlias = null) Adds a INNER JOIN clause to the query using the DealFeedThread relation
 *
 * @method     DealFeed findOne(PropelPDO $con = null) Return the first DealFeed matching the query
 * @method     DealFeed findOneOrCreate(PropelPDO $con = null) Return the first DealFeed matching the query, or a new DealFeed object populated from the query conditions when no match is found
 *
 * @method     DealFeed findOneById(int $id) Return the first DealFeed filtered by the id column
 * @method     DealFeed findOneByBusinessId(int $business_id) Return the first DealFeed filtered by the business_id column
 * @method     DealFeed findOneByDateStart(string $date_start) Return the first DealFeed filtered by the date_start column
 * @method     DealFeed findOneByDateEnd(string $date_end) Return the first DealFeed filtered by the date_end column
 * @method     DealFeed findOneByPrice(double $price) Return the first DealFeed filtered by the price column
 * @method     DealFeed findOneByRetailValue(double $retail_value) Return the first DealFeed filtered by the retail_value column
 * @method     DealFeed findOneByDetails(string $details) Return the first DealFeed filtered by the details column
 * @method     DealFeed findOneByClickUrl(string $click_url) Return the first DealFeed filtered by the click_url column
 * @method     DealFeed findOneByIsActive(int $is_active) Return the first DealFeed filtered by the is_active column
 * @method     DealFeed findOneByIsTipped(int $is_tipped) Return the first DealFeed filtered by the is_tipped column
 * @method     DealFeed findOneByDateTipped(string $date_tipped) Return the first DealFeed filtered by the date_tipped column
 * @method     DealFeed findOneByTippingPoint(int $tipping_point) Return the first DealFeed filtered by the tipping_point column
 * @method     DealFeed findOneByCategoryId(int $category_id) Return the first DealFeed filtered by the category_id column
 * @method     DealFeed findOneByLatitude(double $latitude) Return the first DealFeed filtered by the latitude column
 * @method     DealFeed findOneByLongitude(double $longitude) Return the first DealFeed filtered by the longitude column
 * @method     DealFeed findOneByPermalink(string $permalink) Return the first DealFeed filtered by the permalink column
 * @method     DealFeed findOneByPhotoSmall(string $photo_small) Return the first DealFeed filtered by the photo_small column
 * @method     DealFeed findOneByPhotoMedium(string $photo_medium) Return the first DealFeed filtered by the photo_medium column
 * @method     DealFeed findOneByPhoto(string $photo) Return the first DealFeed filtered by the photo column
 * @method     DealFeed findOneBySubject(string $subject) Return the first DealFeed filtered by the subject column
 * @method     DealFeed findOneByTitle(string $title) Return the first DealFeed filtered by the title column
 * @method     DealFeed findOneByCommentNumber(int $comment_number) Return the first DealFeed filtered by the comment_number column
 * @method     DealFeed findOneByDiscussionUrl(string $discussion_url) Return the first DealFeed filtered by the discussion_url column
 * @method     DealFeed findOneByNumberSold(int $number_sold) Return the first DealFeed filtered by the number_sold column
 * @method     DealFeed findOneByTippedAt(string $tipped_at) Return the first DealFeed filtered by the tipped_at column
 * @method     DealFeed findOneByLocationNote(string $location_note) Return the first DealFeed filtered by the location_note column
 * @method     DealFeed findOneByIsOnline(int $is_online) Return the first DealFeed filtered by the is_online column
 * @method     DealFeed findOneByWebsiteUrl(string $website_url) Return the first DealFeed filtered by the website_url column
 * @method     DealFeed findOneByDateCreated(string $date_created) Return the first DealFeed filtered by the date_created column
 * @method     DealFeed findOneByDateModified(string $date_modified) Return the first DealFeed filtered by the date_modified column
 * @method     DealFeed findOneByDealFeedSourceId(int $deal_feed_source_id) Return the first DealFeed filtered by the deal_feed_source_id column
 * @method     DealFeed findOneByDealFeedDivisionId(int $deal_feed_division_id) Return the first DealFeed filtered by the deal_feed_division_id column
 *
 * @method     array findById(int $id) Return DealFeed objects filtered by the id column
 * @method     array findByBusinessId(int $business_id) Return DealFeed objects filtered by the business_id column
 * @method     array findByDateStart(string $date_start) Return DealFeed objects filtered by the date_start column
 * @method     array findByDateEnd(string $date_end) Return DealFeed objects filtered by the date_end column
 * @method     array findByPrice(double $price) Return DealFeed objects filtered by the price column
 * @method     array findByRetailValue(double $retail_value) Return DealFeed objects filtered by the retail_value column
 * @method     array findByDetails(string $details) Return DealFeed objects filtered by the details column
 * @method     array findByClickUrl(string $click_url) Return DealFeed objects filtered by the click_url column
 * @method     array findByIsActive(int $is_active) Return DealFeed objects filtered by the is_active column
 * @method     array findByIsTipped(int $is_tipped) Return DealFeed objects filtered by the is_tipped column
 * @method     array findByDateTipped(string $date_tipped) Return DealFeed objects filtered by the date_tipped column
 * @method     array findByTippingPoint(int $tipping_point) Return DealFeed objects filtered by the tipping_point column
 * @method     array findByCategoryId(int $category_id) Return DealFeed objects filtered by the category_id column
 * @method     array findByLatitude(double $latitude) Return DealFeed objects filtered by the latitude column
 * @method     array findByLongitude(double $longitude) Return DealFeed objects filtered by the longitude column
 * @method     array findByPermalink(string $permalink) Return DealFeed objects filtered by the permalink column
 * @method     array findByPhotoSmall(string $photo_small) Return DealFeed objects filtered by the photo_small column
 * @method     array findByPhotoMedium(string $photo_medium) Return DealFeed objects filtered by the photo_medium column
 * @method     array findByPhoto(string $photo) Return DealFeed objects filtered by the photo column
 * @method     array findBySubject(string $subject) Return DealFeed objects filtered by the subject column
 * @method     array findByTitle(string $title) Return DealFeed objects filtered by the title column
 * @method     array findByCommentNumber(int $comment_number) Return DealFeed objects filtered by the comment_number column
 * @method     array findByDiscussionUrl(string $discussion_url) Return DealFeed objects filtered by the discussion_url column
 * @method     array findByNumberSold(int $number_sold) Return DealFeed objects filtered by the number_sold column
 * @method     array findByTippedAt(string $tipped_at) Return DealFeed objects filtered by the tipped_at column
 * @method     array findByLocationNote(string $location_note) Return DealFeed objects filtered by the location_note column
 * @method     array findByIsOnline(int $is_online) Return DealFeed objects filtered by the is_online column
 * @method     array findByWebsiteUrl(string $website_url) Return DealFeed objects filtered by the website_url column
 * @method     array findByDateCreated(string $date_created) Return DealFeed objects filtered by the date_created column
 * @method     array findByDateModified(string $date_modified) Return DealFeed objects filtered by the date_modified column
 * @method     array findByDealFeedSourceId(int $deal_feed_source_id) Return DealFeed objects filtered by the deal_feed_source_id column
 * @method     array findByDealFeedDivisionId(int $deal_feed_division_id) Return DealFeed objects filtered by the deal_feed_division_id column
 *
 * @package    propel.generator.komideals.om
 */
abstract class BaseDealFeedQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseDealFeedQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'komideals', $modelName = 'DealFeed', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new DealFeedQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    DealFeedQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof DealFeedQuery) {
			return $criteria;
		}
		$query = new DealFeedQuery();
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
	 * @return    DealFeed|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = DealFeedPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(DealFeedPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(DealFeedPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(DealFeedPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the business_id column
	 * 
	 * @param     int|array $businessId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function filterByBusinessId($businessId = null, $comparison = null)
	{
		if (is_array($businessId)) {
			$useMinMax = false;
			if (isset($businessId['min'])) {
				$this->addUsingAlias(DealFeedPeer::BUSINESS_ID, $businessId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($businessId['max'])) {
				$this->addUsingAlias(DealFeedPeer::BUSINESS_ID, $businessId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedPeer::BUSINESS_ID, $businessId, $comparison);
	}

	/**
	 * Filter the query on the date_start column
	 * 
	 * @param     string|array $dateStart The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function filterByDateStart($dateStart = null, $comparison = null)
	{
		if (is_array($dateStart)) {
			$useMinMax = false;
			if (isset($dateStart['min'])) {
				$this->addUsingAlias(DealFeedPeer::DATE_START, $dateStart['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateStart['max'])) {
				$this->addUsingAlias(DealFeedPeer::DATE_START, $dateStart['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedPeer::DATE_START, $dateStart, $comparison);
	}

	/**
	 * Filter the query on the date_end column
	 * 
	 * @param     string|array $dateEnd The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function filterByDateEnd($dateEnd = null, $comparison = null)
	{
		if (is_array($dateEnd)) {
			$useMinMax = false;
			if (isset($dateEnd['min'])) {
				$this->addUsingAlias(DealFeedPeer::DATE_END, $dateEnd['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateEnd['max'])) {
				$this->addUsingAlias(DealFeedPeer::DATE_END, $dateEnd['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedPeer::DATE_END, $dateEnd, $comparison);
	}

	/**
	 * Filter the query on the price column
	 * 
	 * @param     double|array $price The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function filterByPrice($price = null, $comparison = null)
	{
		if (is_array($price)) {
			$useMinMax = false;
			if (isset($price['min'])) {
				$this->addUsingAlias(DealFeedPeer::PRICE, $price['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($price['max'])) {
				$this->addUsingAlias(DealFeedPeer::PRICE, $price['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedPeer::PRICE, $price, $comparison);
	}

	/**
	 * Filter the query on the retail_value column
	 * 
	 * @param     double|array $retailValue The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function filterByRetailValue($retailValue = null, $comparison = null)
	{
		if (is_array($retailValue)) {
			$useMinMax = false;
			if (isset($retailValue['min'])) {
				$this->addUsingAlias(DealFeedPeer::RETAIL_VALUE, $retailValue['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($retailValue['max'])) {
				$this->addUsingAlias(DealFeedPeer::RETAIL_VALUE, $retailValue['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedPeer::RETAIL_VALUE, $retailValue, $comparison);
	}

	/**
	 * Filter the query on the details column
	 * 
	 * @param     string $details The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function filterByDetails($details = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($details)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $details)) {
				$details = str_replace('*', '%', $details);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DealFeedPeer::DETAILS, $details, $comparison);
	}

	/**
	 * Filter the query on the click_url column
	 * 
	 * @param     string $clickUrl The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function filterByClickUrl($clickUrl = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($clickUrl)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $clickUrl)) {
				$clickUrl = str_replace('*', '%', $clickUrl);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DealFeedPeer::CLICK_URL, $clickUrl, $comparison);
	}

	/**
	 * Filter the query on the is_active column
	 * 
	 * @param     int|array $isActive The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function filterByIsActive($isActive = null, $comparison = null)
	{
		if (is_array($isActive)) {
			$useMinMax = false;
			if (isset($isActive['min'])) {
				$this->addUsingAlias(DealFeedPeer::IS_ACTIVE, $isActive['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isActive['max'])) {
				$this->addUsingAlias(DealFeedPeer::IS_ACTIVE, $isActive['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedPeer::IS_ACTIVE, $isActive, $comparison);
	}

	/**
	 * Filter the query on the is_tipped column
	 * 
	 * @param     int|array $isTipped The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function filterByIsTipped($isTipped = null, $comparison = null)
	{
		if (is_array($isTipped)) {
			$useMinMax = false;
			if (isset($isTipped['min'])) {
				$this->addUsingAlias(DealFeedPeer::IS_TIPPED, $isTipped['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isTipped['max'])) {
				$this->addUsingAlias(DealFeedPeer::IS_TIPPED, $isTipped['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedPeer::IS_TIPPED, $isTipped, $comparison);
	}

	/**
	 * Filter the query on the date_tipped column
	 * 
	 * @param     string|array $dateTipped The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function filterByDateTipped($dateTipped = null, $comparison = null)
	{
		if (is_array($dateTipped)) {
			$useMinMax = false;
			if (isset($dateTipped['min'])) {
				$this->addUsingAlias(DealFeedPeer::DATE_TIPPED, $dateTipped['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateTipped['max'])) {
				$this->addUsingAlias(DealFeedPeer::DATE_TIPPED, $dateTipped['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedPeer::DATE_TIPPED, $dateTipped, $comparison);
	}

	/**
	 * Filter the query on the tipping_point column
	 * 
	 * @param     int|array $tippingPoint The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function filterByTippingPoint($tippingPoint = null, $comparison = null)
	{
		if (is_array($tippingPoint)) {
			$useMinMax = false;
			if (isset($tippingPoint['min'])) {
				$this->addUsingAlias(DealFeedPeer::TIPPING_POINT, $tippingPoint['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($tippingPoint['max'])) {
				$this->addUsingAlias(DealFeedPeer::TIPPING_POINT, $tippingPoint['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedPeer::TIPPING_POINT, $tippingPoint, $comparison);
	}

	/**
	 * Filter the query on the category_id column
	 * 
	 * @param     int|array $categoryId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function filterByCategoryId($categoryId = null, $comparison = null)
	{
		if (is_array($categoryId)) {
			$useMinMax = false;
			if (isset($categoryId['min'])) {
				$this->addUsingAlias(DealFeedPeer::CATEGORY_ID, $categoryId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($categoryId['max'])) {
				$this->addUsingAlias(DealFeedPeer::CATEGORY_ID, $categoryId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedPeer::CATEGORY_ID, $categoryId, $comparison);
	}

	/**
	 * Filter the query on the latitude column
	 * 
	 * @param     double|array $latitude The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function filterByLatitude($latitude = null, $comparison = null)
	{
		if (is_array($latitude)) {
			$useMinMax = false;
			if (isset($latitude['min'])) {
				$this->addUsingAlias(DealFeedPeer::LATITUDE, $latitude['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($latitude['max'])) {
				$this->addUsingAlias(DealFeedPeer::LATITUDE, $latitude['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedPeer::LATITUDE, $latitude, $comparison);
	}

	/**
	 * Filter the query on the longitude column
	 * 
	 * @param     double|array $longitude The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function filterByLongitude($longitude = null, $comparison = null)
	{
		if (is_array($longitude)) {
			$useMinMax = false;
			if (isset($longitude['min'])) {
				$this->addUsingAlias(DealFeedPeer::LONGITUDE, $longitude['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($longitude['max'])) {
				$this->addUsingAlias(DealFeedPeer::LONGITUDE, $longitude['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedPeer::LONGITUDE, $longitude, $comparison);
	}

	/**
	 * Filter the query on the permalink column
	 * 
	 * @param     string $permalink The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function filterByPermalink($permalink = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($permalink)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $permalink)) {
				$permalink = str_replace('*', '%', $permalink);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DealFeedPeer::PERMALINK, $permalink, $comparison);
	}

	/**
	 * Filter the query on the photo_small column
	 * 
	 * @param     string $photoSmall The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function filterByPhotoSmall($photoSmall = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($photoSmall)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $photoSmall)) {
				$photoSmall = str_replace('*', '%', $photoSmall);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DealFeedPeer::PHOTO_SMALL, $photoSmall, $comparison);
	}

	/**
	 * Filter the query on the photo_medium column
	 * 
	 * @param     string $photoMedium The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function filterByPhotoMedium($photoMedium = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($photoMedium)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $photoMedium)) {
				$photoMedium = str_replace('*', '%', $photoMedium);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DealFeedPeer::PHOTO_MEDIUM, $photoMedium, $comparison);
	}

	/**
	 * Filter the query on the photo column
	 * 
	 * @param     string $photo The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function filterByPhoto($photo = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($photo)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $photo)) {
				$photo = str_replace('*', '%', $photo);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DealFeedPeer::PHOTO, $photo, $comparison);
	}

	/**
	 * Filter the query on the subject column
	 * 
	 * @param     string $subject The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
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
		return $this->addUsingAlias(DealFeedPeer::SUBJECT, $subject, $comparison);
	}

	/**
	 * Filter the query on the title column
	 * 
	 * @param     string $title The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function filterByTitle($title = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($title)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $title)) {
				$title = str_replace('*', '%', $title);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DealFeedPeer::TITLE, $title, $comparison);
	}

	/**
	 * Filter the query on the comment_number column
	 * 
	 * @param     int|array $commentNumber The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function filterByCommentNumber($commentNumber = null, $comparison = null)
	{
		if (is_array($commentNumber)) {
			$useMinMax = false;
			if (isset($commentNumber['min'])) {
				$this->addUsingAlias(DealFeedPeer::COMMENT_NUMBER, $commentNumber['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($commentNumber['max'])) {
				$this->addUsingAlias(DealFeedPeer::COMMENT_NUMBER, $commentNumber['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedPeer::COMMENT_NUMBER, $commentNumber, $comparison);
	}

	/**
	 * Filter the query on the discussion_url column
	 * 
	 * @param     string $discussionUrl The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function filterByDiscussionUrl($discussionUrl = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($discussionUrl)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $discussionUrl)) {
				$discussionUrl = str_replace('*', '%', $discussionUrl);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DealFeedPeer::DISCUSSION_URL, $discussionUrl, $comparison);
	}

	/**
	 * Filter the query on the number_sold column
	 * 
	 * @param     int|array $numberSold The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function filterByNumberSold($numberSold = null, $comparison = null)
	{
		if (is_array($numberSold)) {
			$useMinMax = false;
			if (isset($numberSold['min'])) {
				$this->addUsingAlias(DealFeedPeer::NUMBER_SOLD, $numberSold['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($numberSold['max'])) {
				$this->addUsingAlias(DealFeedPeer::NUMBER_SOLD, $numberSold['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedPeer::NUMBER_SOLD, $numberSold, $comparison);
	}

	/**
	 * Filter the query on the tipped_at column
	 * 
	 * @param     string $tippedAt The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function filterByTippedAt($tippedAt = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($tippedAt)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $tippedAt)) {
				$tippedAt = str_replace('*', '%', $tippedAt);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DealFeedPeer::TIPPED_AT, $tippedAt, $comparison);
	}

	/**
	 * Filter the query on the location_note column
	 * 
	 * @param     string $locationNote The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function filterByLocationNote($locationNote = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($locationNote)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $locationNote)) {
				$locationNote = str_replace('*', '%', $locationNote);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DealFeedPeer::LOCATION_NOTE, $locationNote, $comparison);
	}

	/**
	 * Filter the query on the is_online column
	 * 
	 * @param     int|array $isOnline The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function filterByIsOnline($isOnline = null, $comparison = null)
	{
		if (is_array($isOnline)) {
			$useMinMax = false;
			if (isset($isOnline['min'])) {
				$this->addUsingAlias(DealFeedPeer::IS_ONLINE, $isOnline['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isOnline['max'])) {
				$this->addUsingAlias(DealFeedPeer::IS_ONLINE, $isOnline['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedPeer::IS_ONLINE, $isOnline, $comparison);
	}

	/**
	 * Filter the query on the website_url column
	 * 
	 * @param     string $websiteUrl The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function filterByWebsiteUrl($websiteUrl = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($websiteUrl)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $websiteUrl)) {
				$websiteUrl = str_replace('*', '%', $websiteUrl);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(DealFeedPeer::WEBSITE_URL, $websiteUrl, $comparison);
	}

	/**
	 * Filter the query on the date_created column
	 * 
	 * @param     string|array $dateCreated The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function filterByDateCreated($dateCreated = null, $comparison = null)
	{
		if (is_array($dateCreated)) {
			$useMinMax = false;
			if (isset($dateCreated['min'])) {
				$this->addUsingAlias(DealFeedPeer::DATE_CREATED, $dateCreated['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateCreated['max'])) {
				$this->addUsingAlias(DealFeedPeer::DATE_CREATED, $dateCreated['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedPeer::DATE_CREATED, $dateCreated, $comparison);
	}

	/**
	 * Filter the query on the date_modified column
	 * 
	 * @param     string|array $dateModified The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function filterByDateModified($dateModified = null, $comparison = null)
	{
		if (is_array($dateModified)) {
			$useMinMax = false;
			if (isset($dateModified['min'])) {
				$this->addUsingAlias(DealFeedPeer::DATE_MODIFIED, $dateModified['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateModified['max'])) {
				$this->addUsingAlias(DealFeedPeer::DATE_MODIFIED, $dateModified['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedPeer::DATE_MODIFIED, $dateModified, $comparison);
	}

	/**
	 * Filter the query on the deal_feed_source_id column
	 * 
	 * @param     int|array $dealFeedSourceId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function filterByDealFeedSourceId($dealFeedSourceId = null, $comparison = null)
	{
		if (is_array($dealFeedSourceId)) {
			$useMinMax = false;
			if (isset($dealFeedSourceId['min'])) {
				$this->addUsingAlias(DealFeedPeer::DEAL_FEED_SOURCE_ID, $dealFeedSourceId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dealFeedSourceId['max'])) {
				$this->addUsingAlias(DealFeedPeer::DEAL_FEED_SOURCE_ID, $dealFeedSourceId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedPeer::DEAL_FEED_SOURCE_ID, $dealFeedSourceId, $comparison);
	}

	/**
	 * Filter the query on the deal_feed_division_id column
	 * 
	 * @param     int|array $dealFeedDivisionId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function filterByDealFeedDivisionId($dealFeedDivisionId = null, $comparison = null)
	{
		if (is_array($dealFeedDivisionId)) {
			$useMinMax = false;
			if (isset($dealFeedDivisionId['min'])) {
				$this->addUsingAlias(DealFeedPeer::DEAL_FEED_DIVISION_ID, $dealFeedDivisionId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dealFeedDivisionId['max'])) {
				$this->addUsingAlias(DealFeedPeer::DEAL_FEED_DIVISION_ID, $dealFeedDivisionId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(DealFeedPeer::DEAL_FEED_DIVISION_ID, $dealFeedDivisionId, $comparison);
	}

	/**
	 * Filter the query by a related DealFeedDivision object
	 *
	 * @param     DealFeedDivision $dealFeedDivision  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function filterByDealFeedDivision($dealFeedDivision, $comparison = null)
	{
		return $this
			->addUsingAlias(DealFeedPeer::DEAL_FEED_DIVISION_ID, $dealFeedDivision->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the DealFeedDivision relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function joinDealFeedDivision($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('DealFeedDivision');
		
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
			$this->addJoinObject($join, 'DealFeedDivision');
		}
		
		return $this;
	}

	/**
	 * Use the DealFeedDivision relation DealFeedDivision object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedDivisionQuery A secondary query class using the current class as primary query
	 */
	public function useDealFeedDivisionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinDealFeedDivision($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'DealFeedDivision', 'DealFeedDivisionQuery');
	}

	/**
	 * Filter the query by a related Category object
	 *
	 * @param     Category $category  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function filterByCategory($category, $comparison = null)
	{
		return $this
			->addUsingAlias(DealFeedPeer::CATEGORY_ID, $category->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Category relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function joinCategory($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Category');
		
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
			$this->addJoinObject($join, 'Category');
		}
		
		return $this;
	}

	/**
	 * Use the Category relation Category object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    CategoryQuery A secondary query class using the current class as primary query
	 */
	public function useCategoryQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinCategory($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Category', 'CategoryQuery');
	}

	/**
	 * Filter the query by a related Business object
	 *
	 * @param     Business $business  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function filterByBusiness($business, $comparison = null)
	{
		return $this
			->addUsingAlias(DealFeedPeer::BUSINESS_ID, $business->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Business relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
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
	 * Filter the query by a related DealFeedSource object
	 *
	 * @param     DealFeedSource $dealFeedSource  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function filterByDealFeedSource($dealFeedSource, $comparison = null)
	{
		return $this
			->addUsingAlias(DealFeedPeer::DEAL_FEED_SOURCE_ID, $dealFeedSource->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the DealFeedSource relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function joinDealFeedSource($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('DealFeedSource');
		
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
			$this->addJoinObject($join, 'DealFeedSource');
		}
		
		return $this;
	}

	/**
	 * Use the DealFeedSource relation DealFeedSource object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedSourceQuery A secondary query class using the current class as primary query
	 */
	public function useDealFeedSourceQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinDealFeedSource($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'DealFeedSource', 'DealFeedSourceQuery');
	}

	/**
	 * Filter the query by a related DealFeedBlogPost object
	 *
	 * @param     DealFeedBlogPost $dealFeedBlogPost  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function filterByDealFeedBlogPost($dealFeedBlogPost, $comparison = null)
	{
		return $this
			->addUsingAlias(DealFeedPeer::ID, $dealFeedBlogPost->getDealFeedId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the DealFeedBlogPost relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function joinDealFeedBlogPost($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('DealFeedBlogPost');
		
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
			$this->addJoinObject($join, 'DealFeedBlogPost');
		}
		
		return $this;
	}

	/**
	 * Use the DealFeedBlogPost relation DealFeedBlogPost object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedBlogPostQuery A secondary query class using the current class as primary query
	 */
	public function useDealFeedBlogPostQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinDealFeedBlogPost($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'DealFeedBlogPost', 'DealFeedBlogPostQuery');
	}

	/**
	 * Filter the query by a related DealFeedClick object
	 *
	 * @param     DealFeedClick $dealFeedClick  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function filterByDealFeedClick($dealFeedClick, $comparison = null)
	{
		return $this
			->addUsingAlias(DealFeedPeer::ID, $dealFeedClick->getDealFeedId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the DealFeedClick relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function joinDealFeedClick($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('DealFeedClick');
		
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
			$this->addJoinObject($join, 'DealFeedClick');
		}
		
		return $this;
	}

	/**
	 * Use the DealFeedClick relation DealFeedClick object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedClickQuery A secondary query class using the current class as primary query
	 */
	public function useDealFeedClickQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinDealFeedClick($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'DealFeedClick', 'DealFeedClickQuery');
	}

	/**
	 * Filter the query by a related DealFeedCommission object
	 *
	 * @param     DealFeedCommission $dealFeedCommission  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function filterByDealFeedCommission($dealFeedCommission, $comparison = null)
	{
		return $this
			->addUsingAlias(DealFeedPeer::ID, $dealFeedCommission->getDealFeedId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the DealFeedCommission relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function joinDealFeedCommission($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('DealFeedCommission');
		
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
			$this->addJoinObject($join, 'DealFeedCommission');
		}
		
		return $this;
	}

	/**
	 * Use the DealFeedCommission relation DealFeedCommission object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedCommissionQuery A secondary query class using the current class as primary query
	 */
	public function useDealFeedCommissionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinDealFeedCommission($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'DealFeedCommission', 'DealFeedCommissionQuery');
	}

	/**
	 * Filter the query by a related DealFeedDetail object
	 *
	 * @param     DealFeedDetail $dealFeedDetail  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function filterByDealFeedDetail($dealFeedDetail, $comparison = null)
	{
		return $this
			->addUsingAlias(DealFeedPeer::ID, $dealFeedDetail->getDealFeedId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the DealFeedDetail relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function joinDealFeedDetail($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('DealFeedDetail');
		
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
			$this->addJoinObject($join, 'DealFeedDetail');
		}
		
		return $this;
	}

	/**
	 * Use the DealFeedDetail relation DealFeedDetail object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedDetailQuery A secondary query class using the current class as primary query
	 */
	public function useDealFeedDetailQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinDealFeedDetail($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'DealFeedDetail', 'DealFeedDetailQuery');
	}

	/**
	 * Filter the query by a related DealFeedHighlight object
	 *
	 * @param     DealFeedHighlight $dealFeedHighlight  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function filterByDealFeedHighlight($dealFeedHighlight, $comparison = null)
	{
		return $this
			->addUsingAlias(DealFeedPeer::ID, $dealFeedHighlight->getDealFeedId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the DealFeedHighlight relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function joinDealFeedHighlight($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('DealFeedHighlight');
		
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
			$this->addJoinObject($join, 'DealFeedHighlight');
		}
		
		return $this;
	}

	/**
	 * Use the DealFeedHighlight relation DealFeedHighlight object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedHighlightQuery A secondary query class using the current class as primary query
	 */
	public function useDealFeedHighlightQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinDealFeedHighlight($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'DealFeedHighlight', 'DealFeedHighlightQuery');
	}

	/**
	 * Filter the query by a related DealFeedLocation object
	 *
	 * @param     DealFeedLocation $dealFeedLocation  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function filterByDealFeedLocation($dealFeedLocation, $comparison = null)
	{
		return $this
			->addUsingAlias(DealFeedPeer::ID, $dealFeedLocation->getDealFeedId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the DealFeedLocation relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function joinDealFeedLocation($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('DealFeedLocation');
		
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
			$this->addJoinObject($join, 'DealFeedLocation');
		}
		
		return $this;
	}

	/**
	 * Use the DealFeedLocation relation DealFeedLocation object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedLocationQuery A secondary query class using the current class as primary query
	 */
	public function useDealFeedLocationQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinDealFeedLocation($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'DealFeedLocation', 'DealFeedLocationQuery');
	}

	/**
	 * Filter the query by a related DealFeedStat object
	 *
	 * @param     DealFeedStat $dealFeedStat  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function filterByDealFeedStat($dealFeedStat, $comparison = null)
	{
		return $this
			->addUsingAlias(DealFeedPeer::ID, $dealFeedStat->getDealFeedId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the DealFeedStat relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function joinDealFeedStat($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('DealFeedStat');
		
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
			$this->addJoinObject($join, 'DealFeedStat');
		}
		
		return $this;
	}

	/**
	 * Use the DealFeedStat relation DealFeedStat object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedStatQuery A secondary query class using the current class as primary query
	 */
	public function useDealFeedStatQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinDealFeedStat($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'DealFeedStat', 'DealFeedStatQuery');
	}

	/**
	 * Filter the query by a related DealFeedTaxonomyDmoz object
	 *
	 * @param     DealFeedTaxonomyDmoz $dealFeedTaxonomyDmoz  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function filterByDealFeedTaxonomyDmoz($dealFeedTaxonomyDmoz, $comparison = null)
	{
		return $this
			->addUsingAlias(DealFeedPeer::ID, $dealFeedTaxonomyDmoz->getDealFeedId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the DealFeedTaxonomyDmoz relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function joinDealFeedTaxonomyDmoz($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('DealFeedTaxonomyDmoz');
		
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
			$this->addJoinObject($join, 'DealFeedTaxonomyDmoz');
		}
		
		return $this;
	}

	/**
	 * Use the DealFeedTaxonomyDmoz relation DealFeedTaxonomyDmoz object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedTaxonomyDmozQuery A secondary query class using the current class as primary query
	 */
	public function useDealFeedTaxonomyDmozQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinDealFeedTaxonomyDmoz($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'DealFeedTaxonomyDmoz', 'DealFeedTaxonomyDmozQuery');
	}

	/**
	 * Filter the query by a related DealFeedThread object
	 *
	 * @param     DealFeedThread $dealFeedThread  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function filterByDealFeedThread($dealFeedThread, $comparison = null)
	{
		return $this
			->addUsingAlias(DealFeedPeer::ID, $dealFeedThread->getDealFeedId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the DealFeedThread relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function joinDealFeedThread($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('DealFeedThread');
		
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
			$this->addJoinObject($join, 'DealFeedThread');
		}
		
		return $this;
	}

	/**
	 * Use the DealFeedThread relation DealFeedThread object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    DealFeedThreadQuery A secondary query class using the current class as primary query
	 */
	public function useDealFeedThreadQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinDealFeedThread($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'DealFeedThread', 'DealFeedThreadQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     DealFeed $dealFeed Object to remove from the list of results
	 *
	 * @return    DealFeedQuery The current query, for fluid interface
	 */
	public function prune($dealFeed = null)
	{
		if ($dealFeed) {
			$this->addUsingAlias(DealFeedPeer::ID, $dealFeed->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseDealFeedQuery
