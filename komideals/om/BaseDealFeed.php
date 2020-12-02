<?php


/**
 * Base class that represents a row from the 'deal_feed' table.
 *
 * 
 *
 * @package    propel.generator.komideals.om
 */
abstract class BaseDealFeed extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'DealFeedPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        DealFeedPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the business_id field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $business_id;

	/**
	 * The value for the date_start field.
	 * @var        string
	 */
	protected $date_start;

	/**
	 * The value for the date_end field.
	 * @var        string
	 */
	protected $date_end;

	/**
	 * The value for the price field.
	 * Note: this column has a database default value of: 0
	 * @var        double
	 */
	protected $price;

	/**
	 * The value for the retail_value field.
	 * Note: this column has a database default value of: 0
	 * @var        double
	 */
	protected $retail_value;

	/**
	 * The value for the details field.
	 * @var        string
	 */
	protected $details;

	/**
	 * The value for the click_url field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $click_url;

	/**
	 * The value for the is_active field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $is_active;

	/**
	 * The value for the is_tipped field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $is_tipped;

	/**
	 * The value for the date_tipped field.
	 * @var        string
	 */
	protected $date_tipped;

	/**
	 * The value for the tipping_point field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $tipping_point;

	/**
	 * The value for the category_id field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $category_id;

	/**
	 * The value for the latitude field.
	 * @var        double
	 */
	protected $latitude;

	/**
	 * The value for the longitude field.
	 * @var        double
	 */
	protected $longitude;

	/**
	 * The value for the permalink field.
	 * @var        string
	 */
	protected $permalink;

	/**
	 * The value for the photo_small field.
	 * @var        string
	 */
	protected $photo_small;

	/**
	 * The value for the photo_medium field.
	 * @var        string
	 */
	protected $photo_medium;

	/**
	 * The value for the photo field.
	 * @var        string
	 */
	protected $photo;

	/**
	 * The value for the subject field.
	 * @var        string
	 */
	protected $subject;

	/**
	 * The value for the title field.
	 * @var        string
	 */
	protected $title;

	/**
	 * The value for the comment_number field.
	 * @var        int
	 */
	protected $comment_number;

	/**
	 * The value for the discussion_url field.
	 * @var        string
	 */
	protected $discussion_url;

	/**
	 * The value for the number_sold field.
	 * @var        int
	 */
	protected $number_sold;

	/**
	 * The value for the tipped_at field.
	 * @var        string
	 */
	protected $tipped_at;

	/**
	 * The value for the location_note field.
	 * @var        string
	 */
	protected $location_note;

	/**
	 * The value for the is_online field.
	 * @var        int
	 */
	protected $is_online;

	/**
	 * The value for the website_url field.
	 * @var        string
	 */
	protected $website_url;

	/**
	 * The value for the date_created field.
	 * @var        string
	 */
	protected $date_created;

	/**
	 * The value for the date_modified field.
	 * @var        string
	 */
	protected $date_modified;

	/**
	 * The value for the deal_feed_source_id field.
	 * @var        int
	 */
	protected $deal_feed_source_id;

	/**
	 * The value for the deal_feed_division_id field.
	 * @var        int
	 */
	protected $deal_feed_division_id;

	/**
	 * @var        DealFeedDivision
	 */
	protected $aDealFeedDivision;

	/**
	 * @var        Category
	 */
	protected $aCategory;

	/**
	 * @var        Business
	 */
	protected $aBusiness;

	/**
	 * @var        DealFeedSource
	 */
	protected $aDealFeedSource;

	/**
	 * @var        array DealFeedBlogPost[] Collection to store aggregation of DealFeedBlogPost objects.
	 */
	protected $collDealFeedBlogPosts;

	/**
	 * @var        array DealFeedClick[] Collection to store aggregation of DealFeedClick objects.
	 */
	protected $collDealFeedClicks;

	/**
	 * @var        array DealFeedCommission[] Collection to store aggregation of DealFeedCommission objects.
	 */
	protected $collDealFeedCommissions;

	/**
	 * @var        array DealFeedDetail[] Collection to store aggregation of DealFeedDetail objects.
	 */
	protected $collDealFeedDetails;

	/**
	 * @var        array DealFeedHighlight[] Collection to store aggregation of DealFeedHighlight objects.
	 */
	protected $collDealFeedHighlights;

	/**
	 * @var        array DealFeedLocation[] Collection to store aggregation of DealFeedLocation objects.
	 */
	protected $collDealFeedLocations;

	/**
	 * @var        array DealFeedStat[] Collection to store aggregation of DealFeedStat objects.
	 */
	protected $collDealFeedStats;

	/**
	 * @var        array DealFeedTaxonomyDmoz[] Collection to store aggregation of DealFeedTaxonomyDmoz objects.
	 */
	protected $collDealFeedTaxonomyDmozs;

	/**
	 * @var        array DealFeedThread[] Collection to store aggregation of DealFeedThread objects.
	 */
	protected $collDealFeedThreads;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	/**
	 * Applies default values to this object.
	 * This method should be called from the object's constructor (or
	 * equivalent initialization method).
	 * @see        __construct()
	 */
	public function applyDefaultValues()
	{
		$this->business_id = 0;
		$this->price = 0;
		$this->retail_value = 0;
		$this->click_url = '';
		$this->is_active = 0;
		$this->is_tipped = 0;
		$this->tipping_point = 0;
		$this->category_id = 0;
	}

	/**
	 * Initializes internal state of BaseDealFeed object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [id] column value.
	 * 
	 * @return     int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the [business_id] column value.
	 * 
	 * @return     int
	 */
	public function getBusinessId()
	{
		return $this->business_id;
	}

	/**
	 * Get the [optionally formatted] temporal [date_start] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDateStart($format = 'Y-m-d H:i:s')
	{
		if ($this->date_start === null) {
			return null;
		}


		if ($this->date_start === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->date_start);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_start, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [optionally formatted] temporal [date_end] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDateEnd($format = 'Y-m-d H:i:s')
	{
		if ($this->date_end === null) {
			return null;
		}


		if ($this->date_end === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->date_end);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_end, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [price] column value.
	 * 
	 * @return     double
	 */
	public function getPrice()
	{
		return $this->price;
	}

	/**
	 * Get the [retail_value] column value.
	 * 
	 * @return     double
	 */
	public function getRetailValue()
	{
		return $this->retail_value;
	}

	/**
	 * Get the [details] column value.
	 * 
	 * @return     string
	 */
	public function getDetails()
	{
		return $this->details;
	}

	/**
	 * Get the [click_url] column value.
	 * 
	 * @return     string
	 */
	public function getClickUrl()
	{
		return $this->click_url;
	}

	/**
	 * Get the [is_active] column value.
	 * 
	 * @return     int
	 */
	public function getIsActive()
	{
		return $this->is_active;
	}

	/**
	 * Get the [is_tipped] column value.
	 * 
	 * @return     int
	 */
	public function getIsTipped()
	{
		return $this->is_tipped;
	}

	/**
	 * Get the [optionally formatted] temporal [date_tipped] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDateTipped($format = 'Y-m-d H:i:s')
	{
		if ($this->date_tipped === null) {
			return null;
		}


		if ($this->date_tipped === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->date_tipped);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_tipped, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [tipping_point] column value.
	 * 
	 * @return     int
	 */
	public function getTippingPoint()
	{
		return $this->tipping_point;
	}

	/**
	 * Get the [category_id] column value.
	 * 
	 * @return     int
	 */
	public function getCategoryId()
	{
		return $this->category_id;
	}

	/**
	 * Get the [latitude] column value.
	 * 
	 * @return     double
	 */
	public function getLatitude()
	{
		return $this->latitude;
	}

	/**
	 * Get the [longitude] column value.
	 * 
	 * @return     double
	 */
	public function getLongitude()
	{
		return $this->longitude;
	}

	/**
	 * Get the [permalink] column value.
	 * 
	 * @return     string
	 */
	public function getPermalink()
	{
		return $this->permalink;
	}

	/**
	 * Get the [photo_small] column value.
	 * 
	 * @return     string
	 */
	public function getPhotoSmall()
	{
		return $this->photo_small;
	}

	/**
	 * Get the [photo_medium] column value.
	 * 
	 * @return     string
	 */
	public function getPhotoMedium()
	{
		return $this->photo_medium;
	}

	/**
	 * Get the [photo] column value.
	 * 
	 * @return     string
	 */
	public function getPhoto()
	{
		return $this->photo;
	}

	/**
	 * Get the [subject] column value.
	 * 
	 * @return     string
	 */
	public function getSubject()
	{
		return $this->subject;
	}

	/**
	 * Get the [title] column value.
	 * 
	 * @return     string
	 */
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * Get the [comment_number] column value.
	 * 
	 * @return     int
	 */
	public function getCommentNumber()
	{
		return $this->comment_number;
	}

	/**
	 * Get the [discussion_url] column value.
	 * 
	 * @return     string
	 */
	public function getDiscussionUrl()
	{
		return $this->discussion_url;
	}

	/**
	 * Get the [number_sold] column value.
	 * 
	 * @return     int
	 */
	public function getNumberSold()
	{
		return $this->number_sold;
	}

	/**
	 * Get the [tipped_at] column value.
	 * 
	 * @return     string
	 */
	public function getTippedAt()
	{
		return $this->tipped_at;
	}

	/**
	 * Get the [location_note] column value.
	 * 
	 * @return     string
	 */
	public function getLocationNote()
	{
		return $this->location_note;
	}

	/**
	 * Get the [is_online] column value.
	 * 
	 * @return     int
	 */
	public function getIsOnline()
	{
		return $this->is_online;
	}

	/**
	 * Get the [website_url] column value.
	 * 
	 * @return     string
	 */
	public function getWebsiteUrl()
	{
		return $this->website_url;
	}

	/**
	 * Get the [optionally formatted] temporal [date_created] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDateCreated($format = 'Y-m-d H:i:s')
	{
		if ($this->date_created === null) {
			return null;
		}


		if ($this->date_created === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->date_created);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_created, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [optionally formatted] temporal [date_modified] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDateModified($format = 'Y-m-d H:i:s')
	{
		if ($this->date_modified === null) {
			return null;
		}


		if ($this->date_modified === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->date_modified);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_modified, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [deal_feed_source_id] column value.
	 * 
	 * @return     int
	 */
	public function getDealFeedSourceId()
	{
		return $this->deal_feed_source_id;
	}

	/**
	 * Get the [deal_feed_division_id] column value.
	 * 
	 * @return     int
	 */
	public function getDealFeedDivisionId()
	{
		return $this->deal_feed_division_id;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     DealFeed The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = DealFeedPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [business_id] column.
	 * 
	 * @param      int $v new value
	 * @return     DealFeed The current object (for fluent API support)
	 */
	public function setBusinessId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->business_id !== $v || $this->isNew()) {
			$this->business_id = $v;
			$this->modifiedColumns[] = DealFeedPeer::BUSINESS_ID;
		}

		if ($this->aBusiness !== null && $this->aBusiness->getId() !== $v) {
			$this->aBusiness = null;
		}

		return $this;
	} // setBusinessId()

	/**
	 * Sets the value of [date_start] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     DealFeed The current object (for fluent API support)
	 */
	public function setDateStart($v)
	{
		// we treat '' as NULL for temporal objects because DateTime('') == DateTime('now')
		// -- which is unexpected, to say the least.
		if ($v === null || $v === '') {
			$dt = null;
		} elseif ($v instanceof DateTime) {
			$dt = $v;
		} else {
			// some string/numeric value passed; we normalize that so that we can
			// validate it.
			try {
				if (is_numeric($v)) { // if it's a unix timestamp
					$dt = new DateTime('@'.$v, new DateTimeZone('UTC'));
					// We have to explicitly specify and then change the time zone because of a
					// DateTime bug: http://bugs.php.net/bug.php?id=43003
					$dt->setTimeZone(new DateTimeZone(date_default_timezone_get()));
				} else {
					$dt = new DateTime($v);
				}
			} catch (Exception $x) {
				throw new PropelException('Error parsing date/time value: ' . var_export($v, true), $x);
			}
		}

		if ( $this->date_start !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->date_start !== null && $tmpDt = new DateTime($this->date_start)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->date_start = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = DealFeedPeer::DATE_START;
			}
		} // if either are not null

		return $this;
	} // setDateStart()

	/**
	 * Sets the value of [date_end] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     DealFeed The current object (for fluent API support)
	 */
	public function setDateEnd($v)
	{
		// we treat '' as NULL for temporal objects because DateTime('') == DateTime('now')
		// -- which is unexpected, to say the least.
		if ($v === null || $v === '') {
			$dt = null;
		} elseif ($v instanceof DateTime) {
			$dt = $v;
		} else {
			// some string/numeric value passed; we normalize that so that we can
			// validate it.
			try {
				if (is_numeric($v)) { // if it's a unix timestamp
					$dt = new DateTime('@'.$v, new DateTimeZone('UTC'));
					// We have to explicitly specify and then change the time zone because of a
					// DateTime bug: http://bugs.php.net/bug.php?id=43003
					$dt->setTimeZone(new DateTimeZone(date_default_timezone_get()));
				} else {
					$dt = new DateTime($v);
				}
			} catch (Exception $x) {
				throw new PropelException('Error parsing date/time value: ' . var_export($v, true), $x);
			}
		}

		if ( $this->date_end !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->date_end !== null && $tmpDt = new DateTime($this->date_end)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->date_end = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = DealFeedPeer::DATE_END;
			}
		} // if either are not null

		return $this;
	} // setDateEnd()

	/**
	 * Set the value of [price] column.
	 * 
	 * @param      double $v new value
	 * @return     DealFeed The current object (for fluent API support)
	 */
	public function setPrice($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->price !== $v || $this->isNew()) {
			$this->price = $v;
			$this->modifiedColumns[] = DealFeedPeer::PRICE;
		}

		return $this;
	} // setPrice()

	/**
	 * Set the value of [retail_value] column.
	 * 
	 * @param      double $v new value
	 * @return     DealFeed The current object (for fluent API support)
	 */
	public function setRetailValue($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->retail_value !== $v || $this->isNew()) {
			$this->retail_value = $v;
			$this->modifiedColumns[] = DealFeedPeer::RETAIL_VALUE;
		}

		return $this;
	} // setRetailValue()

	/**
	 * Set the value of [details] column.
	 * 
	 * @param      string $v new value
	 * @return     DealFeed The current object (for fluent API support)
	 */
	public function setDetails($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->details !== $v) {
			$this->details = $v;
			$this->modifiedColumns[] = DealFeedPeer::DETAILS;
		}

		return $this;
	} // setDetails()

	/**
	 * Set the value of [click_url] column.
	 * 
	 * @param      string $v new value
	 * @return     DealFeed The current object (for fluent API support)
	 */
	public function setClickUrl($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->click_url !== $v || $this->isNew()) {
			$this->click_url = $v;
			$this->modifiedColumns[] = DealFeedPeer::CLICK_URL;
		}

		return $this;
	} // setClickUrl()

	/**
	 * Set the value of [is_active] column.
	 * 
	 * @param      int $v new value
	 * @return     DealFeed The current object (for fluent API support)
	 */
	public function setIsActive($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->is_active !== $v || $this->isNew()) {
			$this->is_active = $v;
			$this->modifiedColumns[] = DealFeedPeer::IS_ACTIVE;
		}

		return $this;
	} // setIsActive()

	/**
	 * Set the value of [is_tipped] column.
	 * 
	 * @param      int $v new value
	 * @return     DealFeed The current object (for fluent API support)
	 */
	public function setIsTipped($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->is_tipped !== $v || $this->isNew()) {
			$this->is_tipped = $v;
			$this->modifiedColumns[] = DealFeedPeer::IS_TIPPED;
		}

		return $this;
	} // setIsTipped()

	/**
	 * Sets the value of [date_tipped] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     DealFeed The current object (for fluent API support)
	 */
	public function setDateTipped($v)
	{
		// we treat '' as NULL for temporal objects because DateTime('') == DateTime('now')
		// -- which is unexpected, to say the least.
		if ($v === null || $v === '') {
			$dt = null;
		} elseif ($v instanceof DateTime) {
			$dt = $v;
		} else {
			// some string/numeric value passed; we normalize that so that we can
			// validate it.
			try {
				if (is_numeric($v)) { // if it's a unix timestamp
					$dt = new DateTime('@'.$v, new DateTimeZone('UTC'));
					// We have to explicitly specify and then change the time zone because of a
					// DateTime bug: http://bugs.php.net/bug.php?id=43003
					$dt->setTimeZone(new DateTimeZone(date_default_timezone_get()));
				} else {
					$dt = new DateTime($v);
				}
			} catch (Exception $x) {
				throw new PropelException('Error parsing date/time value: ' . var_export($v, true), $x);
			}
		}

		if ( $this->date_tipped !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->date_tipped !== null && $tmpDt = new DateTime($this->date_tipped)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->date_tipped = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = DealFeedPeer::DATE_TIPPED;
			}
		} // if either are not null

		return $this;
	} // setDateTipped()

	/**
	 * Set the value of [tipping_point] column.
	 * 
	 * @param      int $v new value
	 * @return     DealFeed The current object (for fluent API support)
	 */
	public function setTippingPoint($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->tipping_point !== $v || $this->isNew()) {
			$this->tipping_point = $v;
			$this->modifiedColumns[] = DealFeedPeer::TIPPING_POINT;
		}

		return $this;
	} // setTippingPoint()

	/**
	 * Set the value of [category_id] column.
	 * 
	 * @param      int $v new value
	 * @return     DealFeed The current object (for fluent API support)
	 */
	public function setCategoryId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->category_id !== $v || $this->isNew()) {
			$this->category_id = $v;
			$this->modifiedColumns[] = DealFeedPeer::CATEGORY_ID;
		}

		if ($this->aCategory !== null && $this->aCategory->getId() !== $v) {
			$this->aCategory = null;
		}

		return $this;
	} // setCategoryId()

	/**
	 * Set the value of [latitude] column.
	 * 
	 * @param      double $v new value
	 * @return     DealFeed The current object (for fluent API support)
	 */
	public function setLatitude($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->latitude !== $v) {
			$this->latitude = $v;
			$this->modifiedColumns[] = DealFeedPeer::LATITUDE;
		}

		return $this;
	} // setLatitude()

	/**
	 * Set the value of [longitude] column.
	 * 
	 * @param      double $v new value
	 * @return     DealFeed The current object (for fluent API support)
	 */
	public function setLongitude($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->longitude !== $v) {
			$this->longitude = $v;
			$this->modifiedColumns[] = DealFeedPeer::LONGITUDE;
		}

		return $this;
	} // setLongitude()

	/**
	 * Set the value of [permalink] column.
	 * 
	 * @param      string $v new value
	 * @return     DealFeed The current object (for fluent API support)
	 */
	public function setPermalink($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->permalink !== $v) {
			$this->permalink = $v;
			$this->modifiedColumns[] = DealFeedPeer::PERMALINK;
		}

		return $this;
	} // setPermalink()

	/**
	 * Set the value of [photo_small] column.
	 * 
	 * @param      string $v new value
	 * @return     DealFeed The current object (for fluent API support)
	 */
	public function setPhotoSmall($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->photo_small !== $v) {
			$this->photo_small = $v;
			$this->modifiedColumns[] = DealFeedPeer::PHOTO_SMALL;
		}

		return $this;
	} // setPhotoSmall()

	/**
	 * Set the value of [photo_medium] column.
	 * 
	 * @param      string $v new value
	 * @return     DealFeed The current object (for fluent API support)
	 */
	public function setPhotoMedium($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->photo_medium !== $v) {
			$this->photo_medium = $v;
			$this->modifiedColumns[] = DealFeedPeer::PHOTO_MEDIUM;
		}

		return $this;
	} // setPhotoMedium()

	/**
	 * Set the value of [photo] column.
	 * 
	 * @param      string $v new value
	 * @return     DealFeed The current object (for fluent API support)
	 */
	public function setPhoto($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->photo !== $v) {
			$this->photo = $v;
			$this->modifiedColumns[] = DealFeedPeer::PHOTO;
		}

		return $this;
	} // setPhoto()

	/**
	 * Set the value of [subject] column.
	 * 
	 * @param      string $v new value
	 * @return     DealFeed The current object (for fluent API support)
	 */
	public function setSubject($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->subject !== $v) {
			$this->subject = $v;
			$this->modifiedColumns[] = DealFeedPeer::SUBJECT;
		}

		return $this;
	} // setSubject()

	/**
	 * Set the value of [title] column.
	 * 
	 * @param      string $v new value
	 * @return     DealFeed The current object (for fluent API support)
	 */
	public function setTitle($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->title !== $v) {
			$this->title = $v;
			$this->modifiedColumns[] = DealFeedPeer::TITLE;
		}

		return $this;
	} // setTitle()

	/**
	 * Set the value of [comment_number] column.
	 * 
	 * @param      int $v new value
	 * @return     DealFeed The current object (for fluent API support)
	 */
	public function setCommentNumber($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->comment_number !== $v) {
			$this->comment_number = $v;
			$this->modifiedColumns[] = DealFeedPeer::COMMENT_NUMBER;
		}

		return $this;
	} // setCommentNumber()

	/**
	 * Set the value of [discussion_url] column.
	 * 
	 * @param      string $v new value
	 * @return     DealFeed The current object (for fluent API support)
	 */
	public function setDiscussionUrl($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->discussion_url !== $v) {
			$this->discussion_url = $v;
			$this->modifiedColumns[] = DealFeedPeer::DISCUSSION_URL;
		}

		return $this;
	} // setDiscussionUrl()

	/**
	 * Set the value of [number_sold] column.
	 * 
	 * @param      int $v new value
	 * @return     DealFeed The current object (for fluent API support)
	 */
	public function setNumberSold($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->number_sold !== $v) {
			$this->number_sold = $v;
			$this->modifiedColumns[] = DealFeedPeer::NUMBER_SOLD;
		}

		return $this;
	} // setNumberSold()

	/**
	 * Set the value of [tipped_at] column.
	 * 
	 * @param      string $v new value
	 * @return     DealFeed The current object (for fluent API support)
	 */
	public function setTippedAt($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tipped_at !== $v) {
			$this->tipped_at = $v;
			$this->modifiedColumns[] = DealFeedPeer::TIPPED_AT;
		}

		return $this;
	} // setTippedAt()

	/**
	 * Set the value of [location_note] column.
	 * 
	 * @param      string $v new value
	 * @return     DealFeed The current object (for fluent API support)
	 */
	public function setLocationNote($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->location_note !== $v) {
			$this->location_note = $v;
			$this->modifiedColumns[] = DealFeedPeer::LOCATION_NOTE;
		}

		return $this;
	} // setLocationNote()

	/**
	 * Set the value of [is_online] column.
	 * 
	 * @param      int $v new value
	 * @return     DealFeed The current object (for fluent API support)
	 */
	public function setIsOnline($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->is_online !== $v) {
			$this->is_online = $v;
			$this->modifiedColumns[] = DealFeedPeer::IS_ONLINE;
		}

		return $this;
	} // setIsOnline()

	/**
	 * Set the value of [website_url] column.
	 * 
	 * @param      string $v new value
	 * @return     DealFeed The current object (for fluent API support)
	 */
	public function setWebsiteUrl($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->website_url !== $v) {
			$this->website_url = $v;
			$this->modifiedColumns[] = DealFeedPeer::WEBSITE_URL;
		}

		return $this;
	} // setWebsiteUrl()

	/**
	 * Sets the value of [date_created] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     DealFeed The current object (for fluent API support)
	 */
	public function setDateCreated($v)
	{
		// we treat '' as NULL for temporal objects because DateTime('') == DateTime('now')
		// -- which is unexpected, to say the least.
		if ($v === null || $v === '') {
			$dt = null;
		} elseif ($v instanceof DateTime) {
			$dt = $v;
		} else {
			// some string/numeric value passed; we normalize that so that we can
			// validate it.
			try {
				if (is_numeric($v)) { // if it's a unix timestamp
					$dt = new DateTime('@'.$v, new DateTimeZone('UTC'));
					// We have to explicitly specify and then change the time zone because of a
					// DateTime bug: http://bugs.php.net/bug.php?id=43003
					$dt->setTimeZone(new DateTimeZone(date_default_timezone_get()));
				} else {
					$dt = new DateTime($v);
				}
			} catch (Exception $x) {
				throw new PropelException('Error parsing date/time value: ' . var_export($v, true), $x);
			}
		}

		if ( $this->date_created !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->date_created !== null && $tmpDt = new DateTime($this->date_created)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->date_created = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = DealFeedPeer::DATE_CREATED;
			}
		} // if either are not null

		return $this;
	} // setDateCreated()

	/**
	 * Sets the value of [date_modified] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     DealFeed The current object (for fluent API support)
	 */
	public function setDateModified($v)
	{
		// we treat '' as NULL for temporal objects because DateTime('') == DateTime('now')
		// -- which is unexpected, to say the least.
		if ($v === null || $v === '') {
			$dt = null;
		} elseif ($v instanceof DateTime) {
			$dt = $v;
		} else {
			// some string/numeric value passed; we normalize that so that we can
			// validate it.
			try {
				if (is_numeric($v)) { // if it's a unix timestamp
					$dt = new DateTime('@'.$v, new DateTimeZone('UTC'));
					// We have to explicitly specify and then change the time zone because of a
					// DateTime bug: http://bugs.php.net/bug.php?id=43003
					$dt->setTimeZone(new DateTimeZone(date_default_timezone_get()));
				} else {
					$dt = new DateTime($v);
				}
			} catch (Exception $x) {
				throw new PropelException('Error parsing date/time value: ' . var_export($v, true), $x);
			}
		}

		if ( $this->date_modified !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->date_modified !== null && $tmpDt = new DateTime($this->date_modified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->date_modified = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = DealFeedPeer::DATE_MODIFIED;
			}
		} // if either are not null

		return $this;
	} // setDateModified()

	/**
	 * Set the value of [deal_feed_source_id] column.
	 * 
	 * @param      int $v new value
	 * @return     DealFeed The current object (for fluent API support)
	 */
	public function setDealFeedSourceId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->deal_feed_source_id !== $v) {
			$this->deal_feed_source_id = $v;
			$this->modifiedColumns[] = DealFeedPeer::DEAL_FEED_SOURCE_ID;
		}

		if ($this->aDealFeedSource !== null && $this->aDealFeedSource->getId() !== $v) {
			$this->aDealFeedSource = null;
		}

		return $this;
	} // setDealFeedSourceId()

	/**
	 * Set the value of [deal_feed_division_id] column.
	 * 
	 * @param      int $v new value
	 * @return     DealFeed The current object (for fluent API support)
	 */
	public function setDealFeedDivisionId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->deal_feed_division_id !== $v) {
			$this->deal_feed_division_id = $v;
			$this->modifiedColumns[] = DealFeedPeer::DEAL_FEED_DIVISION_ID;
		}

		if ($this->aDealFeedDivision !== null && $this->aDealFeedDivision->getId() !== $v) {
			$this->aDealFeedDivision = null;
		}

		return $this;
	} // setDealFeedDivisionId()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
			if ($this->business_id !== 0) {
				return false;
			}

			if ($this->price !== 0) {
				return false;
			}

			if ($this->retail_value !== 0) {
				return false;
			}

			if ($this->click_url !== '') {
				return false;
			}

			if ($this->is_active !== 0) {
				return false;
			}

			if ($this->is_tipped !== 0) {
				return false;
			}

			if ($this->tipping_point !== 0) {
				return false;
			}

			if ($this->category_id !== 0) {
				return false;
			}

		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->business_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->date_start = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->date_end = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->price = ($row[$startcol + 4] !== null) ? (double) $row[$startcol + 4] : null;
			$this->retail_value = ($row[$startcol + 5] !== null) ? (double) $row[$startcol + 5] : null;
			$this->details = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->click_url = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->is_active = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
			$this->is_tipped = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
			$this->date_tipped = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->tipping_point = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
			$this->category_id = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
			$this->latitude = ($row[$startcol + 13] !== null) ? (double) $row[$startcol + 13] : null;
			$this->longitude = ($row[$startcol + 14] !== null) ? (double) $row[$startcol + 14] : null;
			$this->permalink = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
			$this->photo_small = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
			$this->photo_medium = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
			$this->photo = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
			$this->subject = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
			$this->title = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
			$this->comment_number = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
			$this->discussion_url = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
			$this->number_sold = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
			$this->tipped_at = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
			$this->location_note = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
			$this->is_online = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
			$this->website_url = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
			$this->date_created = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
			$this->date_modified = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
			$this->deal_feed_source_id = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
			$this->deal_feed_division_id = ($row[$startcol + 31] !== null) ? (int) $row[$startcol + 31] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 32; // 32 = DealFeedPeer::NUM_COLUMNS - DealFeedPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating DealFeed object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

		if ($this->aBusiness !== null && $this->business_id !== $this->aBusiness->getId()) {
			$this->aBusiness = null;
		}
		if ($this->aCategory !== null && $this->category_id !== $this->aCategory->getId()) {
			$this->aCategory = null;
		}
		if ($this->aDealFeedSource !== null && $this->deal_feed_source_id !== $this->aDealFeedSource->getId()) {
			$this->aDealFeedSource = null;
		}
		if ($this->aDealFeedDivision !== null && $this->deal_feed_division_id !== $this->aDealFeedDivision->getId()) {
			$this->aDealFeedDivision = null;
		}
	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(DealFeedPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = DealFeedPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?
			$this->aDealFeedDivision = null;
			$this->aCategory = null;
			$this->aBusiness = null;
			$this->aDealFeedSource = null;
			$this->collDealFeedBlogPosts = null;
			$this->collDealFeedClicks = null;
			$this->collDealFeedCommissions = null;
			$this->collDealFeedDetails = null;
			$this->collDealFeedHighlights = null;
			$this->collDealFeedLocations = null;
			$this->collDealFeedStats = null;
			$this->collDealFeedTaxonomyDmozs = null;
			$this->collDealFeedThreads = null;
		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(DealFeedPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				DealFeedQuery::create()
					->filterByPrimaryKey($this->getPrimaryKey())
					->delete($con);
				$this->postDelete($con);
				$con->commit();
				$this->setDeleted(true);
			} else {
				$con->commit();
			}
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(DealFeedPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
			} else {
				$ret = $ret && $this->preUpdate($con);
			}
			if ($ret) {
				$affectedRows = $this->doSave($con);
				if ($isInsert) {
					$this->postInsert($con);
				} else {
					$this->postUpdate($con);
				}
				$this->postSave($con);
				DealFeedPeer::addInstanceToPool($this);
			} else {
				$affectedRows = 0;
			}
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			// We call the save method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aDealFeedDivision !== null) {
				if ($this->aDealFeedDivision->isModified() || $this->aDealFeedDivision->isNew()) {
					$affectedRows += $this->aDealFeedDivision->save($con);
				}
				$this->setDealFeedDivision($this->aDealFeedDivision);
			}

			if ($this->aCategory !== null) {
				if ($this->aCategory->isModified() || $this->aCategory->isNew()) {
					$affectedRows += $this->aCategory->save($con);
				}
				$this->setCategory($this->aCategory);
			}

			if ($this->aBusiness !== null) {
				if ($this->aBusiness->isModified() || $this->aBusiness->isNew()) {
					$affectedRows += $this->aBusiness->save($con);
				}
				$this->setBusiness($this->aBusiness);
			}

			if ($this->aDealFeedSource !== null) {
				if ($this->aDealFeedSource->isModified() || $this->aDealFeedSource->isNew()) {
					$affectedRows += $this->aDealFeedSource->save($con);
				}
				$this->setDealFeedSource($this->aDealFeedSource);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = DealFeedPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(DealFeedPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.DealFeedPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows += 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows += DealFeedPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collDealFeedBlogPosts !== null) {
				foreach ($this->collDealFeedBlogPosts as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collDealFeedClicks !== null) {
				foreach ($this->collDealFeedClicks as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collDealFeedCommissions !== null) {
				foreach ($this->collDealFeedCommissions as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collDealFeedDetails !== null) {
				foreach ($this->collDealFeedDetails as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collDealFeedHighlights !== null) {
				foreach ($this->collDealFeedHighlights as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collDealFeedLocations !== null) {
				foreach ($this->collDealFeedLocations as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collDealFeedStats !== null) {
				foreach ($this->collDealFeedStats as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collDealFeedTaxonomyDmozs !== null) {
				foreach ($this->collDealFeedTaxonomyDmozs as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collDealFeedThreads !== null) {
				foreach ($this->collDealFeedThreads as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			// We call the validate method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aDealFeedDivision !== null) {
				if (!$this->aDealFeedDivision->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aDealFeedDivision->getValidationFailures());
				}
			}

			if ($this->aCategory !== null) {
				if (!$this->aCategory->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aCategory->getValidationFailures());
				}
			}

			if ($this->aBusiness !== null) {
				if (!$this->aBusiness->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aBusiness->getValidationFailures());
				}
			}

			if ($this->aDealFeedSource !== null) {
				if (!$this->aDealFeedSource->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aDealFeedSource->getValidationFailures());
				}
			}


			if (($retval = DealFeedPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collDealFeedBlogPosts !== null) {
					foreach ($this->collDealFeedBlogPosts as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collDealFeedClicks !== null) {
					foreach ($this->collDealFeedClicks as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collDealFeedCommissions !== null) {
					foreach ($this->collDealFeedCommissions as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collDealFeedDetails !== null) {
					foreach ($this->collDealFeedDetails as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collDealFeedHighlights !== null) {
					foreach ($this->collDealFeedHighlights as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collDealFeedLocations !== null) {
					foreach ($this->collDealFeedLocations as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collDealFeedStats !== null) {
					foreach ($this->collDealFeedStats as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collDealFeedTaxonomyDmozs !== null) {
					foreach ($this->collDealFeedTaxonomyDmozs as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collDealFeedThreads !== null) {
					foreach ($this->collDealFeedThreads as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}


			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = DealFeedPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getBusinessId();
				break;
			case 2:
				return $this->getDateStart();
				break;
			case 3:
				return $this->getDateEnd();
				break;
			case 4:
				return $this->getPrice();
				break;
			case 5:
				return $this->getRetailValue();
				break;
			case 6:
				return $this->getDetails();
				break;
			case 7:
				return $this->getClickUrl();
				break;
			case 8:
				return $this->getIsActive();
				break;
			case 9:
				return $this->getIsTipped();
				break;
			case 10:
				return $this->getDateTipped();
				break;
			case 11:
				return $this->getTippingPoint();
				break;
			case 12:
				return $this->getCategoryId();
				break;
			case 13:
				return $this->getLatitude();
				break;
			case 14:
				return $this->getLongitude();
				break;
			case 15:
				return $this->getPermalink();
				break;
			case 16:
				return $this->getPhotoSmall();
				break;
			case 17:
				return $this->getPhotoMedium();
				break;
			case 18:
				return $this->getPhoto();
				break;
			case 19:
				return $this->getSubject();
				break;
			case 20:
				return $this->getTitle();
				break;
			case 21:
				return $this->getCommentNumber();
				break;
			case 22:
				return $this->getDiscussionUrl();
				break;
			case 23:
				return $this->getNumberSold();
				break;
			case 24:
				return $this->getTippedAt();
				break;
			case 25:
				return $this->getLocationNote();
				break;
			case 26:
				return $this->getIsOnline();
				break;
			case 27:
				return $this->getWebsiteUrl();
				break;
			case 28:
				return $this->getDateCreated();
				break;
			case 29:
				return $this->getDateModified();
				break;
			case 30:
				return $this->getDealFeedSourceId();
				break;
			case 31:
				return $this->getDealFeedDivisionId();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 *                    Defaults to BasePeer::TYPE_PHPNAME.
	 * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
	 * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
	 *
	 * @return    array an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $includeForeignObjects = false)
	{
		$keys = DealFeedPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getBusinessId(),
			$keys[2] => $this->getDateStart(),
			$keys[3] => $this->getDateEnd(),
			$keys[4] => $this->getPrice(),
			$keys[5] => $this->getRetailValue(),
			$keys[6] => $this->getDetails(),
			$keys[7] => $this->getClickUrl(),
			$keys[8] => $this->getIsActive(),
			$keys[9] => $this->getIsTipped(),
			$keys[10] => $this->getDateTipped(),
			$keys[11] => $this->getTippingPoint(),
			$keys[12] => $this->getCategoryId(),
			$keys[13] => $this->getLatitude(),
			$keys[14] => $this->getLongitude(),
			$keys[15] => $this->getPermalink(),
			$keys[16] => $this->getPhotoSmall(),
			$keys[17] => $this->getPhotoMedium(),
			$keys[18] => $this->getPhoto(),
			$keys[19] => $this->getSubject(),
			$keys[20] => $this->getTitle(),
			$keys[21] => $this->getCommentNumber(),
			$keys[22] => $this->getDiscussionUrl(),
			$keys[23] => $this->getNumberSold(),
			$keys[24] => $this->getTippedAt(),
			$keys[25] => $this->getLocationNote(),
			$keys[26] => $this->getIsOnline(),
			$keys[27] => $this->getWebsiteUrl(),
			$keys[28] => $this->getDateCreated(),
			$keys[29] => $this->getDateModified(),
			$keys[30] => $this->getDealFeedSourceId(),
			$keys[31] => $this->getDealFeedDivisionId(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aDealFeedDivision) {
				$result['DealFeedDivision'] = $this->aDealFeedDivision->toArray($keyType, $includeLazyLoadColumns, true);
			}
			if (null !== $this->aCategory) {
				$result['Category'] = $this->aCategory->toArray($keyType, $includeLazyLoadColumns, true);
			}
			if (null !== $this->aBusiness) {
				$result['Business'] = $this->aBusiness->toArray($keyType, $includeLazyLoadColumns, true);
			}
			if (null !== $this->aDealFeedSource) {
				$result['DealFeedSource'] = $this->aDealFeedSource->toArray($keyType, $includeLazyLoadColumns, true);
			}
		}
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = DealFeedPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setBusinessId($value);
				break;
			case 2:
				$this->setDateStart($value);
				break;
			case 3:
				$this->setDateEnd($value);
				break;
			case 4:
				$this->setPrice($value);
				break;
			case 5:
				$this->setRetailValue($value);
				break;
			case 6:
				$this->setDetails($value);
				break;
			case 7:
				$this->setClickUrl($value);
				break;
			case 8:
				$this->setIsActive($value);
				break;
			case 9:
				$this->setIsTipped($value);
				break;
			case 10:
				$this->setDateTipped($value);
				break;
			case 11:
				$this->setTippingPoint($value);
				break;
			case 12:
				$this->setCategoryId($value);
				break;
			case 13:
				$this->setLatitude($value);
				break;
			case 14:
				$this->setLongitude($value);
				break;
			case 15:
				$this->setPermalink($value);
				break;
			case 16:
				$this->setPhotoSmall($value);
				break;
			case 17:
				$this->setPhotoMedium($value);
				break;
			case 18:
				$this->setPhoto($value);
				break;
			case 19:
				$this->setSubject($value);
				break;
			case 20:
				$this->setTitle($value);
				break;
			case 21:
				$this->setCommentNumber($value);
				break;
			case 22:
				$this->setDiscussionUrl($value);
				break;
			case 23:
				$this->setNumberSold($value);
				break;
			case 24:
				$this->setTippedAt($value);
				break;
			case 25:
				$this->setLocationNote($value);
				break;
			case 26:
				$this->setIsOnline($value);
				break;
			case 27:
				$this->setWebsiteUrl($value);
				break;
			case 28:
				$this->setDateCreated($value);
				break;
			case 29:
				$this->setDateModified($value);
				break;
			case 30:
				$this->setDealFeedSourceId($value);
				break;
			case 31:
				$this->setDealFeedDivisionId($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = DealFeedPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setBusinessId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDateStart($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDateEnd($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setPrice($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setRetailValue($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setDetails($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setClickUrl($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setIsActive($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setIsTipped($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setDateTipped($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setTippingPoint($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setCategoryId($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setLatitude($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setLongitude($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setPermalink($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setPhotoSmall($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setPhotoMedium($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setPhoto($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setSubject($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setTitle($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setCommentNumber($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setDiscussionUrl($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setNumberSold($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setTippedAt($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setLocationNote($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setIsOnline($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setWebsiteUrl($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setDateCreated($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setDateModified($arr[$keys[29]]);
		if (array_key_exists($keys[30], $arr)) $this->setDealFeedSourceId($arr[$keys[30]]);
		if (array_key_exists($keys[31], $arr)) $this->setDealFeedDivisionId($arr[$keys[31]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(DealFeedPeer::DATABASE_NAME);

		if ($this->isColumnModified(DealFeedPeer::ID)) $criteria->add(DealFeedPeer::ID, $this->id);
		if ($this->isColumnModified(DealFeedPeer::BUSINESS_ID)) $criteria->add(DealFeedPeer::BUSINESS_ID, $this->business_id);
		if ($this->isColumnModified(DealFeedPeer::DATE_START)) $criteria->add(DealFeedPeer::DATE_START, $this->date_start);
		if ($this->isColumnModified(DealFeedPeer::DATE_END)) $criteria->add(DealFeedPeer::DATE_END, $this->date_end);
		if ($this->isColumnModified(DealFeedPeer::PRICE)) $criteria->add(DealFeedPeer::PRICE, $this->price);
		if ($this->isColumnModified(DealFeedPeer::RETAIL_VALUE)) $criteria->add(DealFeedPeer::RETAIL_VALUE, $this->retail_value);
		if ($this->isColumnModified(DealFeedPeer::DETAILS)) $criteria->add(DealFeedPeer::DETAILS, $this->details);
		if ($this->isColumnModified(DealFeedPeer::CLICK_URL)) $criteria->add(DealFeedPeer::CLICK_URL, $this->click_url);
		if ($this->isColumnModified(DealFeedPeer::IS_ACTIVE)) $criteria->add(DealFeedPeer::IS_ACTIVE, $this->is_active);
		if ($this->isColumnModified(DealFeedPeer::IS_TIPPED)) $criteria->add(DealFeedPeer::IS_TIPPED, $this->is_tipped);
		if ($this->isColumnModified(DealFeedPeer::DATE_TIPPED)) $criteria->add(DealFeedPeer::DATE_TIPPED, $this->date_tipped);
		if ($this->isColumnModified(DealFeedPeer::TIPPING_POINT)) $criteria->add(DealFeedPeer::TIPPING_POINT, $this->tipping_point);
		if ($this->isColumnModified(DealFeedPeer::CATEGORY_ID)) $criteria->add(DealFeedPeer::CATEGORY_ID, $this->category_id);
		if ($this->isColumnModified(DealFeedPeer::LATITUDE)) $criteria->add(DealFeedPeer::LATITUDE, $this->latitude);
		if ($this->isColumnModified(DealFeedPeer::LONGITUDE)) $criteria->add(DealFeedPeer::LONGITUDE, $this->longitude);
		if ($this->isColumnModified(DealFeedPeer::PERMALINK)) $criteria->add(DealFeedPeer::PERMALINK, $this->permalink);
		if ($this->isColumnModified(DealFeedPeer::PHOTO_SMALL)) $criteria->add(DealFeedPeer::PHOTO_SMALL, $this->photo_small);
		if ($this->isColumnModified(DealFeedPeer::PHOTO_MEDIUM)) $criteria->add(DealFeedPeer::PHOTO_MEDIUM, $this->photo_medium);
		if ($this->isColumnModified(DealFeedPeer::PHOTO)) $criteria->add(DealFeedPeer::PHOTO, $this->photo);
		if ($this->isColumnModified(DealFeedPeer::SUBJECT)) $criteria->add(DealFeedPeer::SUBJECT, $this->subject);
		if ($this->isColumnModified(DealFeedPeer::TITLE)) $criteria->add(DealFeedPeer::TITLE, $this->title);
		if ($this->isColumnModified(DealFeedPeer::COMMENT_NUMBER)) $criteria->add(DealFeedPeer::COMMENT_NUMBER, $this->comment_number);
		if ($this->isColumnModified(DealFeedPeer::DISCUSSION_URL)) $criteria->add(DealFeedPeer::DISCUSSION_URL, $this->discussion_url);
		if ($this->isColumnModified(DealFeedPeer::NUMBER_SOLD)) $criteria->add(DealFeedPeer::NUMBER_SOLD, $this->number_sold);
		if ($this->isColumnModified(DealFeedPeer::TIPPED_AT)) $criteria->add(DealFeedPeer::TIPPED_AT, $this->tipped_at);
		if ($this->isColumnModified(DealFeedPeer::LOCATION_NOTE)) $criteria->add(DealFeedPeer::LOCATION_NOTE, $this->location_note);
		if ($this->isColumnModified(DealFeedPeer::IS_ONLINE)) $criteria->add(DealFeedPeer::IS_ONLINE, $this->is_online);
		if ($this->isColumnModified(DealFeedPeer::WEBSITE_URL)) $criteria->add(DealFeedPeer::WEBSITE_URL, $this->website_url);
		if ($this->isColumnModified(DealFeedPeer::DATE_CREATED)) $criteria->add(DealFeedPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(DealFeedPeer::DATE_MODIFIED)) $criteria->add(DealFeedPeer::DATE_MODIFIED, $this->date_modified);
		if ($this->isColumnModified(DealFeedPeer::DEAL_FEED_SOURCE_ID)) $criteria->add(DealFeedPeer::DEAL_FEED_SOURCE_ID, $this->deal_feed_source_id);
		if ($this->isColumnModified(DealFeedPeer::DEAL_FEED_DIVISION_ID)) $criteria->add(DealFeedPeer::DEAL_FEED_DIVISION_ID, $this->deal_feed_division_id);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(DealFeedPeer::DATABASE_NAME);
		$criteria->add(DealFeedPeer::ID, $this->id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	/**
	 * Generic method to set the primary key (id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getId();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of DealFeed (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setBusinessId($this->business_id);
		$copyObj->setDateStart($this->date_start);
		$copyObj->setDateEnd($this->date_end);
		$copyObj->setPrice($this->price);
		$copyObj->setRetailValue($this->retail_value);
		$copyObj->setDetails($this->details);
		$copyObj->setClickUrl($this->click_url);
		$copyObj->setIsActive($this->is_active);
		$copyObj->setIsTipped($this->is_tipped);
		$copyObj->setDateTipped($this->date_tipped);
		$copyObj->setTippingPoint($this->tipping_point);
		$copyObj->setCategoryId($this->category_id);
		$copyObj->setLatitude($this->latitude);
		$copyObj->setLongitude($this->longitude);
		$copyObj->setPermalink($this->permalink);
		$copyObj->setPhotoSmall($this->photo_small);
		$copyObj->setPhotoMedium($this->photo_medium);
		$copyObj->setPhoto($this->photo);
		$copyObj->setSubject($this->subject);
		$copyObj->setTitle($this->title);
		$copyObj->setCommentNumber($this->comment_number);
		$copyObj->setDiscussionUrl($this->discussion_url);
		$copyObj->setNumberSold($this->number_sold);
		$copyObj->setTippedAt($this->tipped_at);
		$copyObj->setLocationNote($this->location_note);
		$copyObj->setIsOnline($this->is_online);
		$copyObj->setWebsiteUrl($this->website_url);
		$copyObj->setDateCreated($this->date_created);
		$copyObj->setDateModified($this->date_modified);
		$copyObj->setDealFeedSourceId($this->deal_feed_source_id);
		$copyObj->setDealFeedDivisionId($this->deal_feed_division_id);

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getDealFeedBlogPosts() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addDealFeedBlogPost($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getDealFeedClicks() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addDealFeedClick($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getDealFeedCommissions() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addDealFeedCommission($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getDealFeedDetails() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addDealFeedDetail($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getDealFeedHighlights() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addDealFeedHighlight($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getDealFeedLocations() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addDealFeedLocation($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getDealFeedStats() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addDealFeedStat($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getDealFeedTaxonomyDmozs() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addDealFeedTaxonomyDmoz($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getDealFeedThreads() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addDealFeedThread($relObj->copy($deepCopy));
				}
			}

		} // if ($deepCopy)


		$copyObj->setNew(true);
		$copyObj->setId(NULL); // this is a auto-increment column, so set to default value
	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     DealFeed Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     DealFeedPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new DealFeedPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a DealFeedDivision object.
	 *
	 * @param      DealFeedDivision $v
	 * @return     DealFeed The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setDealFeedDivision(DealFeedDivision $v = null)
	{
		if ($v === null) {
			$this->setDealFeedDivisionId(NULL);
		} else {
			$this->setDealFeedDivisionId($v->getId());
		}

		$this->aDealFeedDivision = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the DealFeedDivision object, it will not be re-added.
		if ($v !== null) {
			$v->addDealFeed($this);
		}

		return $this;
	}


	/**
	 * Get the associated DealFeedDivision object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     DealFeedDivision The associated DealFeedDivision object.
	 * @throws     PropelException
	 */
	public function getDealFeedDivision(PropelPDO $con = null)
	{
		if ($this->aDealFeedDivision === null && ($this->deal_feed_division_id !== null)) {
			$this->aDealFeedDivision = DealFeedDivisionQuery::create()->findPk($this->deal_feed_division_id, $con);
			/* The following can be used additionally to
				 guarantee the related object contains a reference
				 to this object.  This level of coupling may, however, be
				 undesirable since it could result in an only partially populated collection
				 in the referenced object.
				 $this->aDealFeedDivision->addDealFeeds($this);
			 */
		}
		return $this->aDealFeedDivision;
	}

	/**
	 * Declares an association between this object and a Category object.
	 *
	 * @param      Category $v
	 * @return     DealFeed The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setCategory(Category $v = null)
	{
		if ($v === null) {
			$this->setCategoryId(0);
		} else {
			$this->setCategoryId($v->getId());
		}

		$this->aCategory = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Category object, it will not be re-added.
		if ($v !== null) {
			$v->addDealFeed($this);
		}

		return $this;
	}


	/**
	 * Get the associated Category object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Category The associated Category object.
	 * @throws     PropelException
	 */
	public function getCategory(PropelPDO $con = null)
	{
		if ($this->aCategory === null && ($this->category_id !== null)) {
			$this->aCategory = CategoryQuery::create()->findPk($this->category_id, $con);
			/* The following can be used additionally to
				 guarantee the related object contains a reference
				 to this object.  This level of coupling may, however, be
				 undesirable since it could result in an only partially populated collection
				 in the referenced object.
				 $this->aCategory->addDealFeeds($this);
			 */
		}
		return $this->aCategory;
	}

	/**
	 * Declares an association between this object and a Business object.
	 *
	 * @param      Business $v
	 * @return     DealFeed The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setBusiness(Business $v = null)
	{
		if ($v === null) {
			$this->setBusinessId(0);
		} else {
			$this->setBusinessId($v->getId());
		}

		$this->aBusiness = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Business object, it will not be re-added.
		if ($v !== null) {
			$v->addDealFeed($this);
		}

		return $this;
	}


	/**
	 * Get the associated Business object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     Business The associated Business object.
	 * @throws     PropelException
	 */
	public function getBusiness(PropelPDO $con = null)
	{
		if ($this->aBusiness === null && ($this->business_id !== null)) {
			$this->aBusiness = BusinessQuery::create()->findPk($this->business_id, $con);
			/* The following can be used additionally to
				 guarantee the related object contains a reference
				 to this object.  This level of coupling may, however, be
				 undesirable since it could result in an only partially populated collection
				 in the referenced object.
				 $this->aBusiness->addDealFeeds($this);
			 */
		}
		return $this->aBusiness;
	}

	/**
	 * Declares an association between this object and a DealFeedSource object.
	 *
	 * @param      DealFeedSource $v
	 * @return     DealFeed The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setDealFeedSource(DealFeedSource $v = null)
	{
		if ($v === null) {
			$this->setDealFeedSourceId(NULL);
		} else {
			$this->setDealFeedSourceId($v->getId());
		}

		$this->aDealFeedSource = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the DealFeedSource object, it will not be re-added.
		if ($v !== null) {
			$v->addDealFeed($this);
		}

		return $this;
	}


	/**
	 * Get the associated DealFeedSource object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     DealFeedSource The associated DealFeedSource object.
	 * @throws     PropelException
	 */
	public function getDealFeedSource(PropelPDO $con = null)
	{
		if ($this->aDealFeedSource === null && ($this->deal_feed_source_id !== null)) {
			$this->aDealFeedSource = DealFeedSourceQuery::create()->findPk($this->deal_feed_source_id, $con);
			/* The following can be used additionally to
				 guarantee the related object contains a reference
				 to this object.  This level of coupling may, however, be
				 undesirable since it could result in an only partially populated collection
				 in the referenced object.
				 $this->aDealFeedSource->addDealFeeds($this);
			 */
		}
		return $this->aDealFeedSource;
	}

	/**
	 * Clears out the collDealFeedBlogPosts collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addDealFeedBlogPosts()
	 */
	public function clearDealFeedBlogPosts()
	{
		$this->collDealFeedBlogPosts = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collDealFeedBlogPosts collection.
	 *
	 * By default this just sets the collDealFeedBlogPosts collection to an empty array (like clearcollDealFeedBlogPosts());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initDealFeedBlogPosts()
	{
		$this->collDealFeedBlogPosts = new PropelObjectCollection();
		$this->collDealFeedBlogPosts->setModel('DealFeedBlogPost');
	}

	/**
	 * Gets an array of DealFeedBlogPost objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this DealFeed is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array DealFeedBlogPost[] List of DealFeedBlogPost objects
	 * @throws     PropelException
	 */
	public function getDealFeedBlogPosts($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collDealFeedBlogPosts || null !== $criteria) {
			if ($this->isNew() && null === $this->collDealFeedBlogPosts) {
				// return empty collection
				$this->initDealFeedBlogPosts();
			} else {
				$collDealFeedBlogPosts = DealFeedBlogPostQuery::create(null, $criteria)
					->filterByDealFeed($this)
					->find($con);
				if (null !== $criteria) {
					return $collDealFeedBlogPosts;
				}
				$this->collDealFeedBlogPosts = $collDealFeedBlogPosts;
			}
		}
		return $this->collDealFeedBlogPosts;
	}

	/**
	 * Returns the number of related DealFeedBlogPost objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related DealFeedBlogPost objects.
	 * @throws     PropelException
	 */
	public function countDealFeedBlogPosts(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collDealFeedBlogPosts || null !== $criteria) {
			if ($this->isNew() && null === $this->collDealFeedBlogPosts) {
				return 0;
			} else {
				$query = DealFeedBlogPostQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByDealFeed($this)
					->count($con);
			}
		} else {
			return count($this->collDealFeedBlogPosts);
		}
	}

	/**
	 * Method called to associate a DealFeedBlogPost object to this object
	 * through the DealFeedBlogPost foreign key attribute.
	 *
	 * @param      DealFeedBlogPost $l DealFeedBlogPost
	 * @return     void
	 * @throws     PropelException
	 */
	public function addDealFeedBlogPost(DealFeedBlogPost $l)
	{
		if ($this->collDealFeedBlogPosts === null) {
			$this->initDealFeedBlogPosts();
		}
		if (!$this->collDealFeedBlogPosts->contains($l)) { // only add it if the **same** object is not already associated
			$this->collDealFeedBlogPosts[]= $l;
			$l->setDealFeed($this);
		}
	}

	/**
	 * Clears out the collDealFeedClicks collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addDealFeedClicks()
	 */
	public function clearDealFeedClicks()
	{
		$this->collDealFeedClicks = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collDealFeedClicks collection.
	 *
	 * By default this just sets the collDealFeedClicks collection to an empty array (like clearcollDealFeedClicks());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initDealFeedClicks()
	{
		$this->collDealFeedClicks = new PropelObjectCollection();
		$this->collDealFeedClicks->setModel('DealFeedClick');
	}

	/**
	 * Gets an array of DealFeedClick objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this DealFeed is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array DealFeedClick[] List of DealFeedClick objects
	 * @throws     PropelException
	 */
	public function getDealFeedClicks($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collDealFeedClicks || null !== $criteria) {
			if ($this->isNew() && null === $this->collDealFeedClicks) {
				// return empty collection
				$this->initDealFeedClicks();
			} else {
				$collDealFeedClicks = DealFeedClickQuery::create(null, $criteria)
					->filterByDealFeed($this)
					->find($con);
				if (null !== $criteria) {
					return $collDealFeedClicks;
				}
				$this->collDealFeedClicks = $collDealFeedClicks;
			}
		}
		return $this->collDealFeedClicks;
	}

	/**
	 * Returns the number of related DealFeedClick objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related DealFeedClick objects.
	 * @throws     PropelException
	 */
	public function countDealFeedClicks(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collDealFeedClicks || null !== $criteria) {
			if ($this->isNew() && null === $this->collDealFeedClicks) {
				return 0;
			} else {
				$query = DealFeedClickQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByDealFeed($this)
					->count($con);
			}
		} else {
			return count($this->collDealFeedClicks);
		}
	}

	/**
	 * Method called to associate a DealFeedClick object to this object
	 * through the DealFeedClick foreign key attribute.
	 *
	 * @param      DealFeedClick $l DealFeedClick
	 * @return     void
	 * @throws     PropelException
	 */
	public function addDealFeedClick(DealFeedClick $l)
	{
		if ($this->collDealFeedClicks === null) {
			$this->initDealFeedClicks();
		}
		if (!$this->collDealFeedClicks->contains($l)) { // only add it if the **same** object is not already associated
			$this->collDealFeedClicks[]= $l;
			$l->setDealFeed($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this DealFeed is new, it will return
	 * an empty collection; or if this DealFeed has previously
	 * been saved, it will retrieve related DealFeedClicks from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in DealFeed.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array DealFeedClick[] List of DealFeedClick objects
	 */
	public function getDealFeedClicksJoinBusiness($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = DealFeedClickQuery::create(null, $criteria);
		$query->joinWith('Business', $join_behavior);

		return $this->getDealFeedClicks($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this DealFeed is new, it will return
	 * an empty collection; or if this DealFeed has previously
	 * been saved, it will retrieve related DealFeedClicks from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in DealFeed.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array DealFeedClick[] List of DealFeedClick objects
	 */
	public function getDealFeedClicksJoinUserAgent($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = DealFeedClickQuery::create(null, $criteria);
		$query->joinWith('UserAgent', $join_behavior);

		return $this->getDealFeedClicks($query, $con);
	}

	/**
	 * Clears out the collDealFeedCommissions collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addDealFeedCommissions()
	 */
	public function clearDealFeedCommissions()
	{
		$this->collDealFeedCommissions = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collDealFeedCommissions collection.
	 *
	 * By default this just sets the collDealFeedCommissions collection to an empty array (like clearcollDealFeedCommissions());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initDealFeedCommissions()
	{
		$this->collDealFeedCommissions = new PropelObjectCollection();
		$this->collDealFeedCommissions->setModel('DealFeedCommission');
	}

	/**
	 * Gets an array of DealFeedCommission objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this DealFeed is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array DealFeedCommission[] List of DealFeedCommission objects
	 * @throws     PropelException
	 */
	public function getDealFeedCommissions($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collDealFeedCommissions || null !== $criteria) {
			if ($this->isNew() && null === $this->collDealFeedCommissions) {
				// return empty collection
				$this->initDealFeedCommissions();
			} else {
				$collDealFeedCommissions = DealFeedCommissionQuery::create(null, $criteria)
					->filterByDealFeed($this)
					->find($con);
				if (null !== $criteria) {
					return $collDealFeedCommissions;
				}
				$this->collDealFeedCommissions = $collDealFeedCommissions;
			}
		}
		return $this->collDealFeedCommissions;
	}

	/**
	 * Returns the number of related DealFeedCommission objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related DealFeedCommission objects.
	 * @throws     PropelException
	 */
	public function countDealFeedCommissions(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collDealFeedCommissions || null !== $criteria) {
			if ($this->isNew() && null === $this->collDealFeedCommissions) {
				return 0;
			} else {
				$query = DealFeedCommissionQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByDealFeed($this)
					->count($con);
			}
		} else {
			return count($this->collDealFeedCommissions);
		}
	}

	/**
	 * Method called to associate a DealFeedCommission object to this object
	 * through the DealFeedCommission foreign key attribute.
	 *
	 * @param      DealFeedCommission $l DealFeedCommission
	 * @return     void
	 * @throws     PropelException
	 */
	public function addDealFeedCommission(DealFeedCommission $l)
	{
		if ($this->collDealFeedCommissions === null) {
			$this->initDealFeedCommissions();
		}
		if (!$this->collDealFeedCommissions->contains($l)) { // only add it if the **same** object is not already associated
			$this->collDealFeedCommissions[]= $l;
			$l->setDealFeed($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this DealFeed is new, it will return
	 * an empty collection; or if this DealFeed has previously
	 * been saved, it will retrieve related DealFeedCommissions from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in DealFeed.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array DealFeedCommission[] List of DealFeedCommission objects
	 */
	public function getDealFeedCommissionsJoinBusiness($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = DealFeedCommissionQuery::create(null, $criteria);
		$query->joinWith('Business', $join_behavior);

		return $this->getDealFeedCommissions($query, $con);
	}

	/**
	 * Clears out the collDealFeedDetails collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addDealFeedDetails()
	 */
	public function clearDealFeedDetails()
	{
		$this->collDealFeedDetails = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collDealFeedDetails collection.
	 *
	 * By default this just sets the collDealFeedDetails collection to an empty array (like clearcollDealFeedDetails());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initDealFeedDetails()
	{
		$this->collDealFeedDetails = new PropelObjectCollection();
		$this->collDealFeedDetails->setModel('DealFeedDetail');
	}

	/**
	 * Gets an array of DealFeedDetail objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this DealFeed is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array DealFeedDetail[] List of DealFeedDetail objects
	 * @throws     PropelException
	 */
	public function getDealFeedDetails($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collDealFeedDetails || null !== $criteria) {
			if ($this->isNew() && null === $this->collDealFeedDetails) {
				// return empty collection
				$this->initDealFeedDetails();
			} else {
				$collDealFeedDetails = DealFeedDetailQuery::create(null, $criteria)
					->filterByDealFeed($this)
					->find($con);
				if (null !== $criteria) {
					return $collDealFeedDetails;
				}
				$this->collDealFeedDetails = $collDealFeedDetails;
			}
		}
		return $this->collDealFeedDetails;
	}

	/**
	 * Returns the number of related DealFeedDetail objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related DealFeedDetail objects.
	 * @throws     PropelException
	 */
	public function countDealFeedDetails(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collDealFeedDetails || null !== $criteria) {
			if ($this->isNew() && null === $this->collDealFeedDetails) {
				return 0;
			} else {
				$query = DealFeedDetailQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByDealFeed($this)
					->count($con);
			}
		} else {
			return count($this->collDealFeedDetails);
		}
	}

	/**
	 * Method called to associate a DealFeedDetail object to this object
	 * through the DealFeedDetail foreign key attribute.
	 *
	 * @param      DealFeedDetail $l DealFeedDetail
	 * @return     void
	 * @throws     PropelException
	 */
	public function addDealFeedDetail(DealFeedDetail $l)
	{
		if ($this->collDealFeedDetails === null) {
			$this->initDealFeedDetails();
		}
		if (!$this->collDealFeedDetails->contains($l)) { // only add it if the **same** object is not already associated
			$this->collDealFeedDetails[]= $l;
			$l->setDealFeed($this);
		}
	}

	/**
	 * Clears out the collDealFeedHighlights collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addDealFeedHighlights()
	 */
	public function clearDealFeedHighlights()
	{
		$this->collDealFeedHighlights = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collDealFeedHighlights collection.
	 *
	 * By default this just sets the collDealFeedHighlights collection to an empty array (like clearcollDealFeedHighlights());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initDealFeedHighlights()
	{
		$this->collDealFeedHighlights = new PropelObjectCollection();
		$this->collDealFeedHighlights->setModel('DealFeedHighlight');
	}

	/**
	 * Gets an array of DealFeedHighlight objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this DealFeed is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array DealFeedHighlight[] List of DealFeedHighlight objects
	 * @throws     PropelException
	 */
	public function getDealFeedHighlights($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collDealFeedHighlights || null !== $criteria) {
			if ($this->isNew() && null === $this->collDealFeedHighlights) {
				// return empty collection
				$this->initDealFeedHighlights();
			} else {
				$collDealFeedHighlights = DealFeedHighlightQuery::create(null, $criteria)
					->filterByDealFeed($this)
					->find($con);
				if (null !== $criteria) {
					return $collDealFeedHighlights;
				}
				$this->collDealFeedHighlights = $collDealFeedHighlights;
			}
		}
		return $this->collDealFeedHighlights;
	}

	/**
	 * Returns the number of related DealFeedHighlight objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related DealFeedHighlight objects.
	 * @throws     PropelException
	 */
	public function countDealFeedHighlights(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collDealFeedHighlights || null !== $criteria) {
			if ($this->isNew() && null === $this->collDealFeedHighlights) {
				return 0;
			} else {
				$query = DealFeedHighlightQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByDealFeed($this)
					->count($con);
			}
		} else {
			return count($this->collDealFeedHighlights);
		}
	}

	/**
	 * Method called to associate a DealFeedHighlight object to this object
	 * through the DealFeedHighlight foreign key attribute.
	 *
	 * @param      DealFeedHighlight $l DealFeedHighlight
	 * @return     void
	 * @throws     PropelException
	 */
	public function addDealFeedHighlight(DealFeedHighlight $l)
	{
		if ($this->collDealFeedHighlights === null) {
			$this->initDealFeedHighlights();
		}
		if (!$this->collDealFeedHighlights->contains($l)) { // only add it if the **same** object is not already associated
			$this->collDealFeedHighlights[]= $l;
			$l->setDealFeed($this);
		}
	}

	/**
	 * Clears out the collDealFeedLocations collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addDealFeedLocations()
	 */
	public function clearDealFeedLocations()
	{
		$this->collDealFeedLocations = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collDealFeedLocations collection.
	 *
	 * By default this just sets the collDealFeedLocations collection to an empty array (like clearcollDealFeedLocations());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initDealFeedLocations()
	{
		$this->collDealFeedLocations = new PropelObjectCollection();
		$this->collDealFeedLocations->setModel('DealFeedLocation');
	}

	/**
	 * Gets an array of DealFeedLocation objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this DealFeed is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array DealFeedLocation[] List of DealFeedLocation objects
	 * @throws     PropelException
	 */
	public function getDealFeedLocations($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collDealFeedLocations || null !== $criteria) {
			if ($this->isNew() && null === $this->collDealFeedLocations) {
				// return empty collection
				$this->initDealFeedLocations();
			} else {
				$collDealFeedLocations = DealFeedLocationQuery::create(null, $criteria)
					->filterByDealFeed($this)
					->find($con);
				if (null !== $criteria) {
					return $collDealFeedLocations;
				}
				$this->collDealFeedLocations = $collDealFeedLocations;
			}
		}
		return $this->collDealFeedLocations;
	}

	/**
	 * Returns the number of related DealFeedLocation objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related DealFeedLocation objects.
	 * @throws     PropelException
	 */
	public function countDealFeedLocations(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collDealFeedLocations || null !== $criteria) {
			if ($this->isNew() && null === $this->collDealFeedLocations) {
				return 0;
			} else {
				$query = DealFeedLocationQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByDealFeed($this)
					->count($con);
			}
		} else {
			return count($this->collDealFeedLocations);
		}
	}

	/**
	 * Method called to associate a DealFeedLocation object to this object
	 * through the DealFeedLocation foreign key attribute.
	 *
	 * @param      DealFeedLocation $l DealFeedLocation
	 * @return     void
	 * @throws     PropelException
	 */
	public function addDealFeedLocation(DealFeedLocation $l)
	{
		if ($this->collDealFeedLocations === null) {
			$this->initDealFeedLocations();
		}
		if (!$this->collDealFeedLocations->contains($l)) { // only add it if the **same** object is not already associated
			$this->collDealFeedLocations[]= $l;
			$l->setDealFeed($this);
		}
	}

	/**
	 * Clears out the collDealFeedStats collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addDealFeedStats()
	 */
	public function clearDealFeedStats()
	{
		$this->collDealFeedStats = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collDealFeedStats collection.
	 *
	 * By default this just sets the collDealFeedStats collection to an empty array (like clearcollDealFeedStats());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initDealFeedStats()
	{
		$this->collDealFeedStats = new PropelObjectCollection();
		$this->collDealFeedStats->setModel('DealFeedStat');
	}

	/**
	 * Gets an array of DealFeedStat objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this DealFeed is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array DealFeedStat[] List of DealFeedStat objects
	 * @throws     PropelException
	 */
	public function getDealFeedStats($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collDealFeedStats || null !== $criteria) {
			if ($this->isNew() && null === $this->collDealFeedStats) {
				// return empty collection
				$this->initDealFeedStats();
			} else {
				$collDealFeedStats = DealFeedStatQuery::create(null, $criteria)
					->filterByDealFeed($this)
					->find($con);
				if (null !== $criteria) {
					return $collDealFeedStats;
				}
				$this->collDealFeedStats = $collDealFeedStats;
			}
		}
		return $this->collDealFeedStats;
	}

	/**
	 * Returns the number of related DealFeedStat objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related DealFeedStat objects.
	 * @throws     PropelException
	 */
	public function countDealFeedStats(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collDealFeedStats || null !== $criteria) {
			if ($this->isNew() && null === $this->collDealFeedStats) {
				return 0;
			} else {
				$query = DealFeedStatQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByDealFeed($this)
					->count($con);
			}
		} else {
			return count($this->collDealFeedStats);
		}
	}

	/**
	 * Method called to associate a DealFeedStat object to this object
	 * through the DealFeedStat foreign key attribute.
	 *
	 * @param      DealFeedStat $l DealFeedStat
	 * @return     void
	 * @throws     PropelException
	 */
	public function addDealFeedStat(DealFeedStat $l)
	{
		if ($this->collDealFeedStats === null) {
			$this->initDealFeedStats();
		}
		if (!$this->collDealFeedStats->contains($l)) { // only add it if the **same** object is not already associated
			$this->collDealFeedStats[]= $l;
			$l->setDealFeed($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this DealFeed is new, it will return
	 * an empty collection; or if this DealFeed has previously
	 * been saved, it will retrieve related DealFeedStats from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in DealFeed.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array DealFeedStat[] List of DealFeedStat objects
	 */
	public function getDealFeedStatsJoinBusiness($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = DealFeedStatQuery::create(null, $criteria);
		$query->joinWith('Business', $join_behavior);

		return $this->getDealFeedStats($query, $con);
	}

	/**
	 * Clears out the collDealFeedTaxonomyDmozs collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addDealFeedTaxonomyDmozs()
	 */
	public function clearDealFeedTaxonomyDmozs()
	{
		$this->collDealFeedTaxonomyDmozs = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collDealFeedTaxonomyDmozs collection.
	 *
	 * By default this just sets the collDealFeedTaxonomyDmozs collection to an empty array (like clearcollDealFeedTaxonomyDmozs());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initDealFeedTaxonomyDmozs()
	{
		$this->collDealFeedTaxonomyDmozs = new PropelObjectCollection();
		$this->collDealFeedTaxonomyDmozs->setModel('DealFeedTaxonomyDmoz');
	}

	/**
	 * Gets an array of DealFeedTaxonomyDmoz objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this DealFeed is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array DealFeedTaxonomyDmoz[] List of DealFeedTaxonomyDmoz objects
	 * @throws     PropelException
	 */
	public function getDealFeedTaxonomyDmozs($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collDealFeedTaxonomyDmozs || null !== $criteria) {
			if ($this->isNew() && null === $this->collDealFeedTaxonomyDmozs) {
				// return empty collection
				$this->initDealFeedTaxonomyDmozs();
			} else {
				$collDealFeedTaxonomyDmozs = DealFeedTaxonomyDmozQuery::create(null, $criteria)
					->filterByDealFeed($this)
					->find($con);
				if (null !== $criteria) {
					return $collDealFeedTaxonomyDmozs;
				}
				$this->collDealFeedTaxonomyDmozs = $collDealFeedTaxonomyDmozs;
			}
		}
		return $this->collDealFeedTaxonomyDmozs;
	}

	/**
	 * Returns the number of related DealFeedTaxonomyDmoz objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related DealFeedTaxonomyDmoz objects.
	 * @throws     PropelException
	 */
	public function countDealFeedTaxonomyDmozs(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collDealFeedTaxonomyDmozs || null !== $criteria) {
			if ($this->isNew() && null === $this->collDealFeedTaxonomyDmozs) {
				return 0;
			} else {
				$query = DealFeedTaxonomyDmozQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByDealFeed($this)
					->count($con);
			}
		} else {
			return count($this->collDealFeedTaxonomyDmozs);
		}
	}

	/**
	 * Method called to associate a DealFeedTaxonomyDmoz object to this object
	 * through the DealFeedTaxonomyDmoz foreign key attribute.
	 *
	 * @param      DealFeedTaxonomyDmoz $l DealFeedTaxonomyDmoz
	 * @return     void
	 * @throws     PropelException
	 */
	public function addDealFeedTaxonomyDmoz(DealFeedTaxonomyDmoz $l)
	{
		if ($this->collDealFeedTaxonomyDmozs === null) {
			$this->initDealFeedTaxonomyDmozs();
		}
		if (!$this->collDealFeedTaxonomyDmozs->contains($l)) { // only add it if the **same** object is not already associated
			$this->collDealFeedTaxonomyDmozs[]= $l;
			$l->setDealFeed($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this DealFeed is new, it will return
	 * an empty collection; or if this DealFeed has previously
	 * been saved, it will retrieve related DealFeedTaxonomyDmozs from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in DealFeed.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array DealFeedTaxonomyDmoz[] List of DealFeedTaxonomyDmoz objects
	 */
	public function getDealFeedTaxonomyDmozsJoinTaxonomyDmoz($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = DealFeedTaxonomyDmozQuery::create(null, $criteria);
		$query->joinWith('TaxonomyDmoz', $join_behavior);

		return $this->getDealFeedTaxonomyDmozs($query, $con);
	}

	/**
	 * Clears out the collDealFeedThreads collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addDealFeedThreads()
	 */
	public function clearDealFeedThreads()
	{
		$this->collDealFeedThreads = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collDealFeedThreads collection.
	 *
	 * By default this just sets the collDealFeedThreads collection to an empty array (like clearcollDealFeedThreads());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initDealFeedThreads()
	{
		$this->collDealFeedThreads = new PropelObjectCollection();
		$this->collDealFeedThreads->setModel('DealFeedThread');
	}

	/**
	 * Gets an array of DealFeedThread objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this DealFeed is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array DealFeedThread[] List of DealFeedThread objects
	 * @throws     PropelException
	 */
	public function getDealFeedThreads($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collDealFeedThreads || null !== $criteria) {
			if ($this->isNew() && null === $this->collDealFeedThreads) {
				// return empty collection
				$this->initDealFeedThreads();
			} else {
				$collDealFeedThreads = DealFeedThreadQuery::create(null, $criteria)
					->filterByDealFeed($this)
					->find($con);
				if (null !== $criteria) {
					return $collDealFeedThreads;
				}
				$this->collDealFeedThreads = $collDealFeedThreads;
			}
		}
		return $this->collDealFeedThreads;
	}

	/**
	 * Returns the number of related DealFeedThread objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related DealFeedThread objects.
	 * @throws     PropelException
	 */
	public function countDealFeedThreads(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collDealFeedThreads || null !== $criteria) {
			if ($this->isNew() && null === $this->collDealFeedThreads) {
				return 0;
			} else {
				$query = DealFeedThreadQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByDealFeed($this)
					->count($con);
			}
		} else {
			return count($this->collDealFeedThreads);
		}
	}

	/**
	 * Method called to associate a DealFeedThread object to this object
	 * through the DealFeedThread foreign key attribute.
	 *
	 * @param      DealFeedThread $l DealFeedThread
	 * @return     void
	 * @throws     PropelException
	 */
	public function addDealFeedThread(DealFeedThread $l)
	{
		if ($this->collDealFeedThreads === null) {
			$this->initDealFeedThreads();
		}
		if (!$this->collDealFeedThreads->contains($l)) { // only add it if the **same** object is not already associated
			$this->collDealFeedThreads[]= $l;
			$l->setDealFeed($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this DealFeed is new, it will return
	 * an empty collection; or if this DealFeed has previously
	 * been saved, it will retrieve related DealFeedThreads from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in DealFeed.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array DealFeedThread[] List of DealFeedThread objects
	 */
	public function getDealFeedThreadsJoinUser($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = DealFeedThreadQuery::create(null, $criteria);
		$query->joinWith('User', $join_behavior);

		return $this->getDealFeedThreads($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this DealFeed is new, it will return
	 * an empty collection; or if this DealFeed has previously
	 * been saved, it will retrieve related DealFeedThreads from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in DealFeed.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array DealFeedThread[] List of DealFeedThread objects
	 */
	public function getDealFeedThreadsJoinDealFeedThreadRelatedByParentId($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = DealFeedThreadQuery::create(null, $criteria);
		$query->joinWith('DealFeedThreadRelatedByParentId', $join_behavior);

		return $this->getDealFeedThreads($query, $con);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->business_id = null;
		$this->date_start = null;
		$this->date_end = null;
		$this->price = null;
		$this->retail_value = null;
		$this->details = null;
		$this->click_url = null;
		$this->is_active = null;
		$this->is_tipped = null;
		$this->date_tipped = null;
		$this->tipping_point = null;
		$this->category_id = null;
		$this->latitude = null;
		$this->longitude = null;
		$this->permalink = null;
		$this->photo_small = null;
		$this->photo_medium = null;
		$this->photo = null;
		$this->subject = null;
		$this->title = null;
		$this->comment_number = null;
		$this->discussion_url = null;
		$this->number_sold = null;
		$this->tipped_at = null;
		$this->location_note = null;
		$this->is_online = null;
		$this->website_url = null;
		$this->date_created = null;
		$this->date_modified = null;
		$this->deal_feed_source_id = null;
		$this->deal_feed_division_id = null;
		$this->alreadyInSave = false;
		$this->alreadyInValidation = false;
		$this->clearAllReferences();
		$this->applyDefaultValues();
		$this->resetModified();
		$this->setNew(true);
		$this->setDeleted(false);
	}

	/**
	 * Resets all collections of referencing foreign keys.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect objects
	 * with circular references.  This is currently necessary when using Propel in certain
	 * daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all associated objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
			if ($this->collDealFeedBlogPosts) {
				foreach ((array) $this->collDealFeedBlogPosts as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collDealFeedClicks) {
				foreach ((array) $this->collDealFeedClicks as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collDealFeedCommissions) {
				foreach ((array) $this->collDealFeedCommissions as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collDealFeedDetails) {
				foreach ((array) $this->collDealFeedDetails as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collDealFeedHighlights) {
				foreach ((array) $this->collDealFeedHighlights as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collDealFeedLocations) {
				foreach ((array) $this->collDealFeedLocations as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collDealFeedStats) {
				foreach ((array) $this->collDealFeedStats as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collDealFeedTaxonomyDmozs) {
				foreach ((array) $this->collDealFeedTaxonomyDmozs as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collDealFeedThreads) {
				foreach ((array) $this->collDealFeedThreads as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		$this->collDealFeedBlogPosts = null;
		$this->collDealFeedClicks = null;
		$this->collDealFeedCommissions = null;
		$this->collDealFeedDetails = null;
		$this->collDealFeedHighlights = null;
		$this->collDealFeedLocations = null;
		$this->collDealFeedStats = null;
		$this->collDealFeedTaxonomyDmozs = null;
		$this->collDealFeedThreads = null;
		$this->aDealFeedDivision = null;
		$this->aCategory = null;
		$this->aBusiness = null;
		$this->aDealFeedSource = null;
	}

	/**
	 * Catches calls to virtual methods
	 */
	public function __call($name, $params)
	{
		if (preg_match('/get(\w+)/', $name, $matches)) {
			$virtualColumn = $matches[1];
			if ($this->hasVirtualColumn($virtualColumn)) {
				return $this->getVirtualColumn($virtualColumn);
			}
			// no lcfirst in php<5.3...
			$virtualColumn[0] = strtolower($virtualColumn[0]);
			if ($this->hasVirtualColumn($virtualColumn)) {
				return $this->getVirtualColumn($virtualColumn);
			}
		}
		return parent::__call($name, $params);
	}

} // BaseDealFeed
