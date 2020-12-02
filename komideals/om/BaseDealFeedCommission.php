<?php


/**
 * Base class that represents a row from the 'deal_feed_commission' table.
 *
 * 
 *
 * @package    propel.generator.komideals.om
 */
abstract class BaseDealFeedCommission extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'DealFeedCommissionPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        DealFeedCommissionPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the deal_feed_id field.
	 * @var        int
	 */
	protected $deal_feed_id;

	/**
	 * The value for the business_id field.
	 * @var        int
	 */
	protected $business_id;

	/**
	 * The value for the date_created field.
	 * @var        string
	 */
	protected $date_created;

	/**
	 * The value for the action_status field.
	 * @var        string
	 */
	protected $action_status;

	/**
	 * The value for the action_type field.
	 * @var        string
	 */
	protected $action_type;

	/**
	 * The value for the ad_id field.
	 * @var        int
	 */
	protected $ad_id;

	/**
	 * The value for the advertiser_id field.
	 * @var        int
	 */
	protected $advertiser_id;

	/**
	 * The value for the advertiser_name field.
	 * @var        string
	 */
	protected $advertiser_name;

	/**
	 * The value for the commission_amount field.
	 * @var        double
	 */
	protected $commission_amount;

	/**
	 * The value for the country field.
	 * @var        string
	 */
	protected $country;

	/**
	 * The value for the event_date field.
	 * @var        string
	 */
	protected $event_date;

	/**
	 * The value for the locking_date field.
	 * @var        string
	 */
	protected $locking_date;

	/**
	 * The value for the order_id field.
	 * @var        string
	 */
	protected $order_id;

	/**
	 * The value for the original field.
	 * @var        int
	 */
	protected $original;

	/**
	 * The value for the original_action_id field.
	 * @var        string
	 */
	protected $original_action_id;

	/**
	 * The value for the posting_date field.
	 * @var        string
	 */
	protected $posting_date;

	/**
	 * The value for the s_id field.
	 * @var        string
	 */
	protected $s_id;

	/**
	 * The value for the sale_amount field.
	 * @var        double
	 */
	protected $sale_amount;

	/**
	 * The value for the transaction_id field.
	 * @var        string
	 */
	protected $transaction_id;

	/**
	 * The value for the website_id field.
	 * @var        int
	 */
	protected $website_id;

	/**
	 * The value for the is_paid field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $is_paid;

	/**
	 * The value for the publisher_s_id field.
	 * @var        string
	 */
	protected $publisher_s_id;

	/**
	 * @var        Business
	 */
	protected $aBusiness;

	/**
	 * @var        DealFeed
	 */
	protected $aDealFeed;

	/**
	 * @var        array AffiliatePaymentDetail[] Collection to store aggregation of AffiliatePaymentDetail objects.
	 */
	protected $collAffiliatePaymentDetails;

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
		$this->is_paid = 0;
	}

	/**
	 * Initializes internal state of BaseDealFeedCommission object.
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
	 * Get the [deal_feed_id] column value.
	 * 
	 * @return     int
	 */
	public function getDealFeedId()
	{
		return $this->deal_feed_id;
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
	 * Get the [action_status] column value.
	 * 
	 * @return     string
	 */
	public function getActionStatus()
	{
		return $this->action_status;
	}

	/**
	 * Get the [action_type] column value.
	 * 
	 * @return     string
	 */
	public function getActionType()
	{
		return $this->action_type;
	}

	/**
	 * Get the [ad_id] column value.
	 * 
	 * @return     int
	 */
	public function getAdId()
	{
		return $this->ad_id;
	}

	/**
	 * Get the [advertiser_id] column value.
	 * 
	 * @return     int
	 */
	public function getAdvertiserId()
	{
		return $this->advertiser_id;
	}

	/**
	 * Get the [advertiser_name] column value.
	 * 
	 * @return     string
	 */
	public function getAdvertiserName()
	{
		return $this->advertiser_name;
	}

	/**
	 * Get the [commission_amount] column value.
	 * 
	 * @return     double
	 */
	public function getCommissionAmount()
	{
		return $this->commission_amount;
	}

	/**
	 * Get the [country] column value.
	 * 
	 * @return     string
	 */
	public function getCountry()
	{
		return $this->country;
	}

	/**
	 * Get the [optionally formatted] temporal [event_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getEventDate($format = 'Y-m-d H:i:s')
	{
		if ($this->event_date === null) {
			return null;
		}


		if ($this->event_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->event_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->event_date, true), $x);
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
	 * Get the [optionally formatted] temporal [locking_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getLockingDate($format = 'Y-m-d H:i:s')
	{
		if ($this->locking_date === null) {
			return null;
		}


		if ($this->locking_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->locking_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->locking_date, true), $x);
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
	 * Get the [order_id] column value.
	 * 
	 * @return     string
	 */
	public function getOrderId()
	{
		return $this->order_id;
	}

	/**
	 * Get the [original] column value.
	 * 
	 * @return     int
	 */
	public function getOriginal()
	{
		return $this->original;
	}

	/**
	 * Get the [original_action_id] column value.
	 * 
	 * @return     string
	 */
	public function getOriginalActionId()
	{
		return $this->original_action_id;
	}

	/**
	 * Get the [optionally formatted] temporal [posting_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getPostingDate($format = 'Y-m-d H:i:s')
	{
		if ($this->posting_date === null) {
			return null;
		}


		if ($this->posting_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->posting_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->posting_date, true), $x);
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
	 * Get the [s_id] column value.
	 * 
	 * @return     string
	 */
	public function getSId()
	{
		return $this->s_id;
	}

	/**
	 * Get the [sale_amount] column value.
	 * 
	 * @return     double
	 */
	public function getSaleAmount()
	{
		return $this->sale_amount;
	}

	/**
	 * Get the [transaction_id] column value.
	 * 
	 * @return     string
	 */
	public function getTransactionId()
	{
		return $this->transaction_id;
	}

	/**
	 * Get the [website_id] column value.
	 * 
	 * @return     int
	 */
	public function getWebsiteId()
	{
		return $this->website_id;
	}

	/**
	 * Get the [is_paid] column value.
	 * 
	 * @return     int
	 */
	public function getIsPaid()
	{
		return $this->is_paid;
	}

	/**
	 * Get the [publisher_s_id] column value.
	 * 
	 * @return     string
	 */
	public function getPublisherSId()
	{
		return $this->publisher_s_id;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     DealFeedCommission The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = DealFeedCommissionPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [deal_feed_id] column.
	 * 
	 * @param      int $v new value
	 * @return     DealFeedCommission The current object (for fluent API support)
	 */
	public function setDealFeedId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->deal_feed_id !== $v) {
			$this->deal_feed_id = $v;
			$this->modifiedColumns[] = DealFeedCommissionPeer::DEAL_FEED_ID;
		}

		if ($this->aDealFeed !== null && $this->aDealFeed->getId() !== $v) {
			$this->aDealFeed = null;
		}

		return $this;
	} // setDealFeedId()

	/**
	 * Set the value of [business_id] column.
	 * 
	 * @param      int $v new value
	 * @return     DealFeedCommission The current object (for fluent API support)
	 */
	public function setBusinessId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->business_id !== $v) {
			$this->business_id = $v;
			$this->modifiedColumns[] = DealFeedCommissionPeer::BUSINESS_ID;
		}

		if ($this->aBusiness !== null && $this->aBusiness->getId() !== $v) {
			$this->aBusiness = null;
		}

		return $this;
	} // setBusinessId()

	/**
	 * Sets the value of [date_created] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     DealFeedCommission The current object (for fluent API support)
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
				$this->modifiedColumns[] = DealFeedCommissionPeer::DATE_CREATED;
			}
		} // if either are not null

		return $this;
	} // setDateCreated()

	/**
	 * Set the value of [action_status] column.
	 * 
	 * @param      string $v new value
	 * @return     DealFeedCommission The current object (for fluent API support)
	 */
	public function setActionStatus($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->action_status !== $v) {
			$this->action_status = $v;
			$this->modifiedColumns[] = DealFeedCommissionPeer::ACTION_STATUS;
		}

		return $this;
	} // setActionStatus()

	/**
	 * Set the value of [action_type] column.
	 * 
	 * @param      string $v new value
	 * @return     DealFeedCommission The current object (for fluent API support)
	 */
	public function setActionType($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->action_type !== $v) {
			$this->action_type = $v;
			$this->modifiedColumns[] = DealFeedCommissionPeer::ACTION_TYPE;
		}

		return $this;
	} // setActionType()

	/**
	 * Set the value of [ad_id] column.
	 * 
	 * @param      int $v new value
	 * @return     DealFeedCommission The current object (for fluent API support)
	 */
	public function setAdId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->ad_id !== $v) {
			$this->ad_id = $v;
			$this->modifiedColumns[] = DealFeedCommissionPeer::AD_ID;
		}

		return $this;
	} // setAdId()

	/**
	 * Set the value of [advertiser_id] column.
	 * 
	 * @param      int $v new value
	 * @return     DealFeedCommission The current object (for fluent API support)
	 */
	public function setAdvertiserId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->advertiser_id !== $v) {
			$this->advertiser_id = $v;
			$this->modifiedColumns[] = DealFeedCommissionPeer::ADVERTISER_ID;
		}

		return $this;
	} // setAdvertiserId()

	/**
	 * Set the value of [advertiser_name] column.
	 * 
	 * @param      string $v new value
	 * @return     DealFeedCommission The current object (for fluent API support)
	 */
	public function setAdvertiserName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->advertiser_name !== $v) {
			$this->advertiser_name = $v;
			$this->modifiedColumns[] = DealFeedCommissionPeer::ADVERTISER_NAME;
		}

		return $this;
	} // setAdvertiserName()

	/**
	 * Set the value of [commission_amount] column.
	 * 
	 * @param      double $v new value
	 * @return     DealFeedCommission The current object (for fluent API support)
	 */
	public function setCommissionAmount($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->commission_amount !== $v) {
			$this->commission_amount = $v;
			$this->modifiedColumns[] = DealFeedCommissionPeer::COMMISSION_AMOUNT;
		}

		return $this;
	} // setCommissionAmount()

	/**
	 * Set the value of [country] column.
	 * 
	 * @param      string $v new value
	 * @return     DealFeedCommission The current object (for fluent API support)
	 */
	public function setCountry($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->country !== $v) {
			$this->country = $v;
			$this->modifiedColumns[] = DealFeedCommissionPeer::COUNTRY;
		}

		return $this;
	} // setCountry()

	/**
	 * Sets the value of [event_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     DealFeedCommission The current object (for fluent API support)
	 */
	public function setEventDate($v)
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

		if ( $this->event_date !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->event_date !== null && $tmpDt = new DateTime($this->event_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->event_date = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = DealFeedCommissionPeer::EVENT_DATE;
			}
		} // if either are not null

		return $this;
	} // setEventDate()

	/**
	 * Sets the value of [locking_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     DealFeedCommission The current object (for fluent API support)
	 */
	public function setLockingDate($v)
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

		if ( $this->locking_date !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->locking_date !== null && $tmpDt = new DateTime($this->locking_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->locking_date = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = DealFeedCommissionPeer::LOCKING_DATE;
			}
		} // if either are not null

		return $this;
	} // setLockingDate()

	/**
	 * Set the value of [order_id] column.
	 * 
	 * @param      string $v new value
	 * @return     DealFeedCommission The current object (for fluent API support)
	 */
	public function setOrderId($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->order_id !== $v) {
			$this->order_id = $v;
			$this->modifiedColumns[] = DealFeedCommissionPeer::ORDER_ID;
		}

		return $this;
	} // setOrderId()

	/**
	 * Set the value of [original] column.
	 * 
	 * @param      int $v new value
	 * @return     DealFeedCommission The current object (for fluent API support)
	 */
	public function setOriginal($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->original !== $v) {
			$this->original = $v;
			$this->modifiedColumns[] = DealFeedCommissionPeer::ORIGINAL;
		}

		return $this;
	} // setOriginal()

	/**
	 * Set the value of [original_action_id] column.
	 * 
	 * @param      string $v new value
	 * @return     DealFeedCommission The current object (for fluent API support)
	 */
	public function setOriginalActionId($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->original_action_id !== $v) {
			$this->original_action_id = $v;
			$this->modifiedColumns[] = DealFeedCommissionPeer::ORIGINAL_ACTION_ID;
		}

		return $this;
	} // setOriginalActionId()

	/**
	 * Sets the value of [posting_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     DealFeedCommission The current object (for fluent API support)
	 */
	public function setPostingDate($v)
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

		if ( $this->posting_date !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->posting_date !== null && $tmpDt = new DateTime($this->posting_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->posting_date = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = DealFeedCommissionPeer::POSTING_DATE;
			}
		} // if either are not null

		return $this;
	} // setPostingDate()

	/**
	 * Set the value of [s_id] column.
	 * 
	 * @param      string $v new value
	 * @return     DealFeedCommission The current object (for fluent API support)
	 */
	public function setSId($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->s_id !== $v) {
			$this->s_id = $v;
			$this->modifiedColumns[] = DealFeedCommissionPeer::S_ID;
		}

		return $this;
	} // setSId()

	/**
	 * Set the value of [sale_amount] column.
	 * 
	 * @param      double $v new value
	 * @return     DealFeedCommission The current object (for fluent API support)
	 */
	public function setSaleAmount($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->sale_amount !== $v) {
			$this->sale_amount = $v;
			$this->modifiedColumns[] = DealFeedCommissionPeer::SALE_AMOUNT;
		}

		return $this;
	} // setSaleAmount()

	/**
	 * Set the value of [transaction_id] column.
	 * 
	 * @param      string $v new value
	 * @return     DealFeedCommission The current object (for fluent API support)
	 */
	public function setTransactionId($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->transaction_id !== $v) {
			$this->transaction_id = $v;
			$this->modifiedColumns[] = DealFeedCommissionPeer::TRANSACTION_ID;
		}

		return $this;
	} // setTransactionId()

	/**
	 * Set the value of [website_id] column.
	 * 
	 * @param      int $v new value
	 * @return     DealFeedCommission The current object (for fluent API support)
	 */
	public function setWebsiteId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->website_id !== $v) {
			$this->website_id = $v;
			$this->modifiedColumns[] = DealFeedCommissionPeer::WEBSITE_ID;
		}

		return $this;
	} // setWebsiteId()

	/**
	 * Set the value of [is_paid] column.
	 * 
	 * @param      int $v new value
	 * @return     DealFeedCommission The current object (for fluent API support)
	 */
	public function setIsPaid($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->is_paid !== $v || $this->isNew()) {
			$this->is_paid = $v;
			$this->modifiedColumns[] = DealFeedCommissionPeer::IS_PAID;
		}

		return $this;
	} // setIsPaid()

	/**
	 * Set the value of [publisher_s_id] column.
	 * 
	 * @param      string $v new value
	 * @return     DealFeedCommission The current object (for fluent API support)
	 */
	public function setPublisherSId($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->publisher_s_id !== $v) {
			$this->publisher_s_id = $v;
			$this->modifiedColumns[] = DealFeedCommissionPeer::PUBLISHER_S_ID;
		}

		return $this;
	} // setPublisherSId()

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
			if ($this->is_paid !== 0) {
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
			$this->deal_feed_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->business_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->date_created = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->action_status = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->action_type = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->ad_id = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			$this->advertiser_id = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
			$this->advertiser_name = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->commission_amount = ($row[$startcol + 9] !== null) ? (double) $row[$startcol + 9] : null;
			$this->country = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->event_date = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->locking_date = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->order_id = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
			$this->original = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
			$this->original_action_id = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
			$this->posting_date = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
			$this->s_id = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
			$this->sale_amount = ($row[$startcol + 18] !== null) ? (double) $row[$startcol + 18] : null;
			$this->transaction_id = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
			$this->website_id = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
			$this->is_paid = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
			$this->publisher_s_id = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 23; // 23 = DealFeedCommissionPeer::NUM_COLUMNS - DealFeedCommissionPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating DealFeedCommission object", $e);
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

		if ($this->aDealFeed !== null && $this->deal_feed_id !== $this->aDealFeed->getId()) {
			$this->aDealFeed = null;
		}
		if ($this->aBusiness !== null && $this->business_id !== $this->aBusiness->getId()) {
			$this->aBusiness = null;
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
			$con = Propel::getConnection(DealFeedCommissionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = DealFeedCommissionPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?
			$this->aBusiness = null;
			$this->aDealFeed = null;
			$this->collAffiliatePaymentDetails = null;
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
			$con = Propel::getConnection(DealFeedCommissionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				DealFeedCommissionQuery::create()
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
			$con = Propel::getConnection(DealFeedCommissionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				DealFeedCommissionPeer::addInstanceToPool($this);
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

			if ($this->aBusiness !== null) {
				if ($this->aBusiness->isModified() || $this->aBusiness->isNew()) {
					$affectedRows += $this->aBusiness->save($con);
				}
				$this->setBusiness($this->aBusiness);
			}

			if ($this->aDealFeed !== null) {
				if ($this->aDealFeed->isModified() || $this->aDealFeed->isNew()) {
					$affectedRows += $this->aDealFeed->save($con);
				}
				$this->setDealFeed($this->aDealFeed);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = DealFeedCommissionPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(DealFeedCommissionPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.DealFeedCommissionPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows += 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows += DealFeedCommissionPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collAffiliatePaymentDetails !== null) {
				foreach ($this->collAffiliatePaymentDetails as $referrerFK) {
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

			if ($this->aBusiness !== null) {
				if (!$this->aBusiness->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aBusiness->getValidationFailures());
				}
			}

			if ($this->aDealFeed !== null) {
				if (!$this->aDealFeed->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aDealFeed->getValidationFailures());
				}
			}


			if (($retval = DealFeedCommissionPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collAffiliatePaymentDetails !== null) {
					foreach ($this->collAffiliatePaymentDetails as $referrerFK) {
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
		$pos = DealFeedCommissionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getDealFeedId();
				break;
			case 2:
				return $this->getBusinessId();
				break;
			case 3:
				return $this->getDateCreated();
				break;
			case 4:
				return $this->getActionStatus();
				break;
			case 5:
				return $this->getActionType();
				break;
			case 6:
				return $this->getAdId();
				break;
			case 7:
				return $this->getAdvertiserId();
				break;
			case 8:
				return $this->getAdvertiserName();
				break;
			case 9:
				return $this->getCommissionAmount();
				break;
			case 10:
				return $this->getCountry();
				break;
			case 11:
				return $this->getEventDate();
				break;
			case 12:
				return $this->getLockingDate();
				break;
			case 13:
				return $this->getOrderId();
				break;
			case 14:
				return $this->getOriginal();
				break;
			case 15:
				return $this->getOriginalActionId();
				break;
			case 16:
				return $this->getPostingDate();
				break;
			case 17:
				return $this->getSId();
				break;
			case 18:
				return $this->getSaleAmount();
				break;
			case 19:
				return $this->getTransactionId();
				break;
			case 20:
				return $this->getWebsiteId();
				break;
			case 21:
				return $this->getIsPaid();
				break;
			case 22:
				return $this->getPublisherSId();
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
		$keys = DealFeedCommissionPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getDealFeedId(),
			$keys[2] => $this->getBusinessId(),
			$keys[3] => $this->getDateCreated(),
			$keys[4] => $this->getActionStatus(),
			$keys[5] => $this->getActionType(),
			$keys[6] => $this->getAdId(),
			$keys[7] => $this->getAdvertiserId(),
			$keys[8] => $this->getAdvertiserName(),
			$keys[9] => $this->getCommissionAmount(),
			$keys[10] => $this->getCountry(),
			$keys[11] => $this->getEventDate(),
			$keys[12] => $this->getLockingDate(),
			$keys[13] => $this->getOrderId(),
			$keys[14] => $this->getOriginal(),
			$keys[15] => $this->getOriginalActionId(),
			$keys[16] => $this->getPostingDate(),
			$keys[17] => $this->getSId(),
			$keys[18] => $this->getSaleAmount(),
			$keys[19] => $this->getTransactionId(),
			$keys[20] => $this->getWebsiteId(),
			$keys[21] => $this->getIsPaid(),
			$keys[22] => $this->getPublisherSId(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aBusiness) {
				$result['Business'] = $this->aBusiness->toArray($keyType, $includeLazyLoadColumns, true);
			}
			if (null !== $this->aDealFeed) {
				$result['DealFeed'] = $this->aDealFeed->toArray($keyType, $includeLazyLoadColumns, true);
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
		$pos = DealFeedCommissionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setDealFeedId($value);
				break;
			case 2:
				$this->setBusinessId($value);
				break;
			case 3:
				$this->setDateCreated($value);
				break;
			case 4:
				$this->setActionStatus($value);
				break;
			case 5:
				$this->setActionType($value);
				break;
			case 6:
				$this->setAdId($value);
				break;
			case 7:
				$this->setAdvertiserId($value);
				break;
			case 8:
				$this->setAdvertiserName($value);
				break;
			case 9:
				$this->setCommissionAmount($value);
				break;
			case 10:
				$this->setCountry($value);
				break;
			case 11:
				$this->setEventDate($value);
				break;
			case 12:
				$this->setLockingDate($value);
				break;
			case 13:
				$this->setOrderId($value);
				break;
			case 14:
				$this->setOriginal($value);
				break;
			case 15:
				$this->setOriginalActionId($value);
				break;
			case 16:
				$this->setPostingDate($value);
				break;
			case 17:
				$this->setSId($value);
				break;
			case 18:
				$this->setSaleAmount($value);
				break;
			case 19:
				$this->setTransactionId($value);
				break;
			case 20:
				$this->setWebsiteId($value);
				break;
			case 21:
				$this->setIsPaid($value);
				break;
			case 22:
				$this->setPublisherSId($value);
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
		$keys = DealFeedCommissionPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDealFeedId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setBusinessId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDateCreated($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setActionStatus($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setActionType($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setAdId($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setAdvertiserId($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setAdvertiserName($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setCommissionAmount($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setCountry($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setEventDate($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setLockingDate($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setOrderId($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setOriginal($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setOriginalActionId($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setPostingDate($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setSId($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setSaleAmount($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setTransactionId($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setWebsiteId($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setIsPaid($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setPublisherSId($arr[$keys[22]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(DealFeedCommissionPeer::DATABASE_NAME);

		if ($this->isColumnModified(DealFeedCommissionPeer::ID)) $criteria->add(DealFeedCommissionPeer::ID, $this->id);
		if ($this->isColumnModified(DealFeedCommissionPeer::DEAL_FEED_ID)) $criteria->add(DealFeedCommissionPeer::DEAL_FEED_ID, $this->deal_feed_id);
		if ($this->isColumnModified(DealFeedCommissionPeer::BUSINESS_ID)) $criteria->add(DealFeedCommissionPeer::BUSINESS_ID, $this->business_id);
		if ($this->isColumnModified(DealFeedCommissionPeer::DATE_CREATED)) $criteria->add(DealFeedCommissionPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(DealFeedCommissionPeer::ACTION_STATUS)) $criteria->add(DealFeedCommissionPeer::ACTION_STATUS, $this->action_status);
		if ($this->isColumnModified(DealFeedCommissionPeer::ACTION_TYPE)) $criteria->add(DealFeedCommissionPeer::ACTION_TYPE, $this->action_type);
		if ($this->isColumnModified(DealFeedCommissionPeer::AD_ID)) $criteria->add(DealFeedCommissionPeer::AD_ID, $this->ad_id);
		if ($this->isColumnModified(DealFeedCommissionPeer::ADVERTISER_ID)) $criteria->add(DealFeedCommissionPeer::ADVERTISER_ID, $this->advertiser_id);
		if ($this->isColumnModified(DealFeedCommissionPeer::ADVERTISER_NAME)) $criteria->add(DealFeedCommissionPeer::ADVERTISER_NAME, $this->advertiser_name);
		if ($this->isColumnModified(DealFeedCommissionPeer::COMMISSION_AMOUNT)) $criteria->add(DealFeedCommissionPeer::COMMISSION_AMOUNT, $this->commission_amount);
		if ($this->isColumnModified(DealFeedCommissionPeer::COUNTRY)) $criteria->add(DealFeedCommissionPeer::COUNTRY, $this->country);
		if ($this->isColumnModified(DealFeedCommissionPeer::EVENT_DATE)) $criteria->add(DealFeedCommissionPeer::EVENT_DATE, $this->event_date);
		if ($this->isColumnModified(DealFeedCommissionPeer::LOCKING_DATE)) $criteria->add(DealFeedCommissionPeer::LOCKING_DATE, $this->locking_date);
		if ($this->isColumnModified(DealFeedCommissionPeer::ORDER_ID)) $criteria->add(DealFeedCommissionPeer::ORDER_ID, $this->order_id);
		if ($this->isColumnModified(DealFeedCommissionPeer::ORIGINAL)) $criteria->add(DealFeedCommissionPeer::ORIGINAL, $this->original);
		if ($this->isColumnModified(DealFeedCommissionPeer::ORIGINAL_ACTION_ID)) $criteria->add(DealFeedCommissionPeer::ORIGINAL_ACTION_ID, $this->original_action_id);
		if ($this->isColumnModified(DealFeedCommissionPeer::POSTING_DATE)) $criteria->add(DealFeedCommissionPeer::POSTING_DATE, $this->posting_date);
		if ($this->isColumnModified(DealFeedCommissionPeer::S_ID)) $criteria->add(DealFeedCommissionPeer::S_ID, $this->s_id);
		if ($this->isColumnModified(DealFeedCommissionPeer::SALE_AMOUNT)) $criteria->add(DealFeedCommissionPeer::SALE_AMOUNT, $this->sale_amount);
		if ($this->isColumnModified(DealFeedCommissionPeer::TRANSACTION_ID)) $criteria->add(DealFeedCommissionPeer::TRANSACTION_ID, $this->transaction_id);
		if ($this->isColumnModified(DealFeedCommissionPeer::WEBSITE_ID)) $criteria->add(DealFeedCommissionPeer::WEBSITE_ID, $this->website_id);
		if ($this->isColumnModified(DealFeedCommissionPeer::IS_PAID)) $criteria->add(DealFeedCommissionPeer::IS_PAID, $this->is_paid);
		if ($this->isColumnModified(DealFeedCommissionPeer::PUBLISHER_S_ID)) $criteria->add(DealFeedCommissionPeer::PUBLISHER_S_ID, $this->publisher_s_id);

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
		$criteria = new Criteria(DealFeedCommissionPeer::DATABASE_NAME);
		$criteria->add(DealFeedCommissionPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of DealFeedCommission (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setDealFeedId($this->deal_feed_id);
		$copyObj->setBusinessId($this->business_id);
		$copyObj->setDateCreated($this->date_created);
		$copyObj->setActionStatus($this->action_status);
		$copyObj->setActionType($this->action_type);
		$copyObj->setAdId($this->ad_id);
		$copyObj->setAdvertiserId($this->advertiser_id);
		$copyObj->setAdvertiserName($this->advertiser_name);
		$copyObj->setCommissionAmount($this->commission_amount);
		$copyObj->setCountry($this->country);
		$copyObj->setEventDate($this->event_date);
		$copyObj->setLockingDate($this->locking_date);
		$copyObj->setOrderId($this->order_id);
		$copyObj->setOriginal($this->original);
		$copyObj->setOriginalActionId($this->original_action_id);
		$copyObj->setPostingDate($this->posting_date);
		$copyObj->setSId($this->s_id);
		$copyObj->setSaleAmount($this->sale_amount);
		$copyObj->setTransactionId($this->transaction_id);
		$copyObj->setWebsiteId($this->website_id);
		$copyObj->setIsPaid($this->is_paid);
		$copyObj->setPublisherSId($this->publisher_s_id);

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getAffiliatePaymentDetails() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addAffiliatePaymentDetail($relObj->copy($deepCopy));
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
	 * @return     DealFeedCommission Clone of current object.
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
	 * @return     DealFeedCommissionPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new DealFeedCommissionPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Business object.
	 *
	 * @param      Business $v
	 * @return     DealFeedCommission The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setBusiness(Business $v = null)
	{
		if ($v === null) {
			$this->setBusinessId(NULL);
		} else {
			$this->setBusinessId($v->getId());
		}

		$this->aBusiness = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Business object, it will not be re-added.
		if ($v !== null) {
			$v->addDealFeedCommission($this);
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
				 $this->aBusiness->addDealFeedCommissions($this);
			 */
		}
		return $this->aBusiness;
	}

	/**
	 * Declares an association between this object and a DealFeed object.
	 *
	 * @param      DealFeed $v
	 * @return     DealFeedCommission The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setDealFeed(DealFeed $v = null)
	{
		if ($v === null) {
			$this->setDealFeedId(NULL);
		} else {
			$this->setDealFeedId($v->getId());
		}

		$this->aDealFeed = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the DealFeed object, it will not be re-added.
		if ($v !== null) {
			$v->addDealFeedCommission($this);
		}

		return $this;
	}


	/**
	 * Get the associated DealFeed object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     DealFeed The associated DealFeed object.
	 * @throws     PropelException
	 */
	public function getDealFeed(PropelPDO $con = null)
	{
		if ($this->aDealFeed === null && ($this->deal_feed_id !== null)) {
			$this->aDealFeed = DealFeedQuery::create()->findPk($this->deal_feed_id, $con);
			/* The following can be used additionally to
				 guarantee the related object contains a reference
				 to this object.  This level of coupling may, however, be
				 undesirable since it could result in an only partially populated collection
				 in the referenced object.
				 $this->aDealFeed->addDealFeedCommissions($this);
			 */
		}
		return $this->aDealFeed;
	}

	/**
	 * Clears out the collAffiliatePaymentDetails collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addAffiliatePaymentDetails()
	 */
	public function clearAffiliatePaymentDetails()
	{
		$this->collAffiliatePaymentDetails = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collAffiliatePaymentDetails collection.
	 *
	 * By default this just sets the collAffiliatePaymentDetails collection to an empty array (like clearcollAffiliatePaymentDetails());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initAffiliatePaymentDetails()
	{
		$this->collAffiliatePaymentDetails = new PropelObjectCollection();
		$this->collAffiliatePaymentDetails->setModel('AffiliatePaymentDetail');
	}

	/**
	 * Gets an array of AffiliatePaymentDetail objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this DealFeedCommission is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array AffiliatePaymentDetail[] List of AffiliatePaymentDetail objects
	 * @throws     PropelException
	 */
	public function getAffiliatePaymentDetails($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collAffiliatePaymentDetails || null !== $criteria) {
			if ($this->isNew() && null === $this->collAffiliatePaymentDetails) {
				// return empty collection
				$this->initAffiliatePaymentDetails();
			} else {
				$collAffiliatePaymentDetails = AffiliatePaymentDetailQuery::create(null, $criteria)
					->filterByDealFeedCommission($this)
					->find($con);
				if (null !== $criteria) {
					return $collAffiliatePaymentDetails;
				}
				$this->collAffiliatePaymentDetails = $collAffiliatePaymentDetails;
			}
		}
		return $this->collAffiliatePaymentDetails;
	}

	/**
	 * Returns the number of related AffiliatePaymentDetail objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related AffiliatePaymentDetail objects.
	 * @throws     PropelException
	 */
	public function countAffiliatePaymentDetails(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collAffiliatePaymentDetails || null !== $criteria) {
			if ($this->isNew() && null === $this->collAffiliatePaymentDetails) {
				return 0;
			} else {
				$query = AffiliatePaymentDetailQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByDealFeedCommission($this)
					->count($con);
			}
		} else {
			return count($this->collAffiliatePaymentDetails);
		}
	}

	/**
	 * Method called to associate a AffiliatePaymentDetail object to this object
	 * through the AffiliatePaymentDetail foreign key attribute.
	 *
	 * @param      AffiliatePaymentDetail $l AffiliatePaymentDetail
	 * @return     void
	 * @throws     PropelException
	 */
	public function addAffiliatePaymentDetail(AffiliatePaymentDetail $l)
	{
		if ($this->collAffiliatePaymentDetails === null) {
			$this->initAffiliatePaymentDetails();
		}
		if (!$this->collAffiliatePaymentDetails->contains($l)) { // only add it if the **same** object is not already associated
			$this->collAffiliatePaymentDetails[]= $l;
			$l->setDealFeedCommission($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this DealFeedCommission is new, it will return
	 * an empty collection; or if this DealFeedCommission has previously
	 * been saved, it will retrieve related AffiliatePaymentDetails from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in DealFeedCommission.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array AffiliatePaymentDetail[] List of AffiliatePaymentDetail objects
	 */
	public function getAffiliatePaymentDetailsJoinAffiliatePayment($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = AffiliatePaymentDetailQuery::create(null, $criteria);
		$query->joinWith('AffiliatePayment', $join_behavior);

		return $this->getAffiliatePaymentDetails($query, $con);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->deal_feed_id = null;
		$this->business_id = null;
		$this->date_created = null;
		$this->action_status = null;
		$this->action_type = null;
		$this->ad_id = null;
		$this->advertiser_id = null;
		$this->advertiser_name = null;
		$this->commission_amount = null;
		$this->country = null;
		$this->event_date = null;
		$this->locking_date = null;
		$this->order_id = null;
		$this->original = null;
		$this->original_action_id = null;
		$this->posting_date = null;
		$this->s_id = null;
		$this->sale_amount = null;
		$this->transaction_id = null;
		$this->website_id = null;
		$this->is_paid = null;
		$this->publisher_s_id = null;
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
			if ($this->collAffiliatePaymentDetails) {
				foreach ((array) $this->collAffiliatePaymentDetails as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		$this->collAffiliatePaymentDetails = null;
		$this->aBusiness = null;
		$this->aDealFeed = null;
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

} // BaseDealFeedCommission
