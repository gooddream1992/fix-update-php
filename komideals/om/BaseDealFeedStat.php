<?php


/**
 * Base class that represents a row from the 'deal_feed_stat' table.
 *
 * 
 *
 * @package    propel.generator.komideals.om
 */
abstract class BaseDealFeedStat extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'DealFeedStatPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        DealFeedStatPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the deal_feed_id field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $deal_feed_id;

	/**
	 * The value for the business_id field.
	 * @var        int
	 */
	protected $business_id;

	/**
	 * The value for the date field.
	 * @var        string
	 */
	protected $date;

	/**
	 * The value for the h0000 field.
	 * @var        int
	 */
	protected $h0000;

	/**
	 * The value for the h0100 field.
	 * @var        int
	 */
	protected $h0100;

	/**
	 * The value for the h0200 field.
	 * @var        int
	 */
	protected $h0200;

	/**
	 * The value for the h0300 field.
	 * @var        int
	 */
	protected $h0300;

	/**
	 * The value for the h0400 field.
	 * @var        int
	 */
	protected $h0400;

	/**
	 * The value for the h0500 field.
	 * @var        int
	 */
	protected $h0500;

	/**
	 * The value for the h0600 field.
	 * @var        int
	 */
	protected $h0600;

	/**
	 * The value for the h0700 field.
	 * @var        int
	 */
	protected $h0700;

	/**
	 * The value for the h0800 field.
	 * @var        int
	 */
	protected $h0800;

	/**
	 * The value for the h0900 field.
	 * @var        int
	 */
	protected $h0900;

	/**
	 * The value for the h1000 field.
	 * @var        int
	 */
	protected $h1000;

	/**
	 * The value for the h1100 field.
	 * @var        int
	 */
	protected $h1100;

	/**
	 * The value for the h1200 field.
	 * @var        int
	 */
	protected $h1200;

	/**
	 * The value for the h1300 field.
	 * @var        int
	 */
	protected $h1300;

	/**
	 * The value for the h1400 field.
	 * @var        int
	 */
	protected $h1400;

	/**
	 * The value for the h1500 field.
	 * @var        int
	 */
	protected $h1500;

	/**
	 * The value for the h1600 field.
	 * @var        int
	 */
	protected $h1600;

	/**
	 * The value for the h1700 field.
	 * @var        int
	 */
	protected $h1700;

	/**
	 * The value for the h1800 field.
	 * @var        int
	 */
	protected $h1800;

	/**
	 * The value for the h1900 field.
	 * @var        int
	 */
	protected $h1900;

	/**
	 * The value for the h2000 field.
	 * @var        int
	 */
	protected $h2000;

	/**
	 * The value for the h2100 field.
	 * @var        int
	 */
	protected $h2100;

	/**
	 * The value for the h2200 field.
	 * @var        int
	 */
	protected $h2200;

	/**
	 * The value for the h2300 field.
	 * @var        int
	 */
	protected $h2300;

	/**
	 * @var        DealFeed
	 */
	protected $aDealFeed;

	/**
	 * @var        Business
	 */
	protected $aBusiness;

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
		$this->deal_feed_id = 0;
	}

	/**
	 * Initializes internal state of BaseDealFeedStat object.
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
	 * Get the [optionally formatted] temporal [date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDate($format = '%x')
	{
		if ($this->date === null) {
			return null;
		}


		if ($this->date === '0000-00-00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date, true), $x);
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
	 * Get the [h0000] column value.
	 * 
	 * @return     int
	 */
	public function getH0000()
	{
		return $this->h0000;
	}

	/**
	 * Get the [h0100] column value.
	 * 
	 * @return     int
	 */
	public function getH0100()
	{
		return $this->h0100;
	}

	/**
	 * Get the [h0200] column value.
	 * 
	 * @return     int
	 */
	public function getH0200()
	{
		return $this->h0200;
	}

	/**
	 * Get the [h0300] column value.
	 * 
	 * @return     int
	 */
	public function getH0300()
	{
		return $this->h0300;
	}

	/**
	 * Get the [h0400] column value.
	 * 
	 * @return     int
	 */
	public function getH0400()
	{
		return $this->h0400;
	}

	/**
	 * Get the [h0500] column value.
	 * 
	 * @return     int
	 */
	public function getH0500()
	{
		return $this->h0500;
	}

	/**
	 * Get the [h0600] column value.
	 * 
	 * @return     int
	 */
	public function getH0600()
	{
		return $this->h0600;
	}

	/**
	 * Get the [h0700] column value.
	 * 
	 * @return     int
	 */
	public function getH0700()
	{
		return $this->h0700;
	}

	/**
	 * Get the [h0800] column value.
	 * 
	 * @return     int
	 */
	public function getH0800()
	{
		return $this->h0800;
	}

	/**
	 * Get the [h0900] column value.
	 * 
	 * @return     int
	 */
	public function getH0900()
	{
		return $this->h0900;
	}

	/**
	 * Get the [h1000] column value.
	 * 
	 * @return     int
	 */
	public function getH1000()
	{
		return $this->h1000;
	}

	/**
	 * Get the [h1100] column value.
	 * 
	 * @return     int
	 */
	public function getH1100()
	{
		return $this->h1100;
	}

	/**
	 * Get the [h1200] column value.
	 * 
	 * @return     int
	 */
	public function getH1200()
	{
		return $this->h1200;
	}

	/**
	 * Get the [h1300] column value.
	 * 
	 * @return     int
	 */
	public function getH1300()
	{
		return $this->h1300;
	}

	/**
	 * Get the [h1400] column value.
	 * 
	 * @return     int
	 */
	public function getH1400()
	{
		return $this->h1400;
	}

	/**
	 * Get the [h1500] column value.
	 * 
	 * @return     int
	 */
	public function getH1500()
	{
		return $this->h1500;
	}

	/**
	 * Get the [h1600] column value.
	 * 
	 * @return     int
	 */
	public function getH1600()
	{
		return $this->h1600;
	}

	/**
	 * Get the [h1700] column value.
	 * 
	 * @return     int
	 */
	public function getH1700()
	{
		return $this->h1700;
	}

	/**
	 * Get the [h1800] column value.
	 * 
	 * @return     int
	 */
	public function getH1800()
	{
		return $this->h1800;
	}

	/**
	 * Get the [h1900] column value.
	 * 
	 * @return     int
	 */
	public function getH1900()
	{
		return $this->h1900;
	}

	/**
	 * Get the [h2000] column value.
	 * 
	 * @return     int
	 */
	public function getH2000()
	{
		return $this->h2000;
	}

	/**
	 * Get the [h2100] column value.
	 * 
	 * @return     int
	 */
	public function getH2100()
	{
		return $this->h2100;
	}

	/**
	 * Get the [h2200] column value.
	 * 
	 * @return     int
	 */
	public function getH2200()
	{
		return $this->h2200;
	}

	/**
	 * Get the [h2300] column value.
	 * 
	 * @return     int
	 */
	public function getH2300()
	{
		return $this->h2300;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     DealFeedStat The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = DealFeedStatPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [deal_feed_id] column.
	 * 
	 * @param      int $v new value
	 * @return     DealFeedStat The current object (for fluent API support)
	 */
	public function setDealFeedId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->deal_feed_id !== $v || $this->isNew()) {
			$this->deal_feed_id = $v;
			$this->modifiedColumns[] = DealFeedStatPeer::DEAL_FEED_ID;
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
	 * @return     DealFeedStat The current object (for fluent API support)
	 */
	public function setBusinessId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->business_id !== $v) {
			$this->business_id = $v;
			$this->modifiedColumns[] = DealFeedStatPeer::BUSINESS_ID;
		}

		if ($this->aBusiness !== null && $this->aBusiness->getId() !== $v) {
			$this->aBusiness = null;
		}

		return $this;
	} // setBusinessId()

	/**
	 * Sets the value of [date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     DealFeedStat The current object (for fluent API support)
	 */
	public function setDate($v)
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

		if ( $this->date !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->date !== null && $tmpDt = new DateTime($this->date)) ? $tmpDt->format('Y-m-d') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->date = ($dt ? $dt->format('Y-m-d') : null);
				$this->modifiedColumns[] = DealFeedStatPeer::DATE;
			}
		} // if either are not null

		return $this;
	} // setDate()

	/**
	 * Set the value of [h0000] column.
	 * 
	 * @param      int $v new value
	 * @return     DealFeedStat The current object (for fluent API support)
	 */
	public function setH0000($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->h0000 !== $v) {
			$this->h0000 = $v;
			$this->modifiedColumns[] = DealFeedStatPeer::H0000;
		}

		return $this;
	} // setH0000()

	/**
	 * Set the value of [h0100] column.
	 * 
	 * @param      int $v new value
	 * @return     DealFeedStat The current object (for fluent API support)
	 */
	public function setH0100($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->h0100 !== $v) {
			$this->h0100 = $v;
			$this->modifiedColumns[] = DealFeedStatPeer::H0100;
		}

		return $this;
	} // setH0100()

	/**
	 * Set the value of [h0200] column.
	 * 
	 * @param      int $v new value
	 * @return     DealFeedStat The current object (for fluent API support)
	 */
	public function setH0200($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->h0200 !== $v) {
			$this->h0200 = $v;
			$this->modifiedColumns[] = DealFeedStatPeer::H0200;
		}

		return $this;
	} // setH0200()

	/**
	 * Set the value of [h0300] column.
	 * 
	 * @param      int $v new value
	 * @return     DealFeedStat The current object (for fluent API support)
	 */
	public function setH0300($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->h0300 !== $v) {
			$this->h0300 = $v;
			$this->modifiedColumns[] = DealFeedStatPeer::H0300;
		}

		return $this;
	} // setH0300()

	/**
	 * Set the value of [h0400] column.
	 * 
	 * @param      int $v new value
	 * @return     DealFeedStat The current object (for fluent API support)
	 */
	public function setH0400($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->h0400 !== $v) {
			$this->h0400 = $v;
			$this->modifiedColumns[] = DealFeedStatPeer::H0400;
		}

		return $this;
	} // setH0400()

	/**
	 * Set the value of [h0500] column.
	 * 
	 * @param      int $v new value
	 * @return     DealFeedStat The current object (for fluent API support)
	 */
	public function setH0500($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->h0500 !== $v) {
			$this->h0500 = $v;
			$this->modifiedColumns[] = DealFeedStatPeer::H0500;
		}

		return $this;
	} // setH0500()

	/**
	 * Set the value of [h0600] column.
	 * 
	 * @param      int $v new value
	 * @return     DealFeedStat The current object (for fluent API support)
	 */
	public function setH0600($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->h0600 !== $v) {
			$this->h0600 = $v;
			$this->modifiedColumns[] = DealFeedStatPeer::H0600;
		}

		return $this;
	} // setH0600()

	/**
	 * Set the value of [h0700] column.
	 * 
	 * @param      int $v new value
	 * @return     DealFeedStat The current object (for fluent API support)
	 */
	public function setH0700($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->h0700 !== $v) {
			$this->h0700 = $v;
			$this->modifiedColumns[] = DealFeedStatPeer::H0700;
		}

		return $this;
	} // setH0700()

	/**
	 * Set the value of [h0800] column.
	 * 
	 * @param      int $v new value
	 * @return     DealFeedStat The current object (for fluent API support)
	 */
	public function setH0800($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->h0800 !== $v) {
			$this->h0800 = $v;
			$this->modifiedColumns[] = DealFeedStatPeer::H0800;
		}

		return $this;
	} // setH0800()

	/**
	 * Set the value of [h0900] column.
	 * 
	 * @param      int $v new value
	 * @return     DealFeedStat The current object (for fluent API support)
	 */
	public function setH0900($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->h0900 !== $v) {
			$this->h0900 = $v;
			$this->modifiedColumns[] = DealFeedStatPeer::H0900;
		}

		return $this;
	} // setH0900()

	/**
	 * Set the value of [h1000] column.
	 * 
	 * @param      int $v new value
	 * @return     DealFeedStat The current object (for fluent API support)
	 */
	public function setH1000($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->h1000 !== $v) {
			$this->h1000 = $v;
			$this->modifiedColumns[] = DealFeedStatPeer::H1000;
		}

		return $this;
	} // setH1000()

	/**
	 * Set the value of [h1100] column.
	 * 
	 * @param      int $v new value
	 * @return     DealFeedStat The current object (for fluent API support)
	 */
	public function setH1100($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->h1100 !== $v) {
			$this->h1100 = $v;
			$this->modifiedColumns[] = DealFeedStatPeer::H1100;
		}

		return $this;
	} // setH1100()

	/**
	 * Set the value of [h1200] column.
	 * 
	 * @param      int $v new value
	 * @return     DealFeedStat The current object (for fluent API support)
	 */
	public function setH1200($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->h1200 !== $v) {
			$this->h1200 = $v;
			$this->modifiedColumns[] = DealFeedStatPeer::H1200;
		}

		return $this;
	} // setH1200()

	/**
	 * Set the value of [h1300] column.
	 * 
	 * @param      int $v new value
	 * @return     DealFeedStat The current object (for fluent API support)
	 */
	public function setH1300($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->h1300 !== $v) {
			$this->h1300 = $v;
			$this->modifiedColumns[] = DealFeedStatPeer::H1300;
		}

		return $this;
	} // setH1300()

	/**
	 * Set the value of [h1400] column.
	 * 
	 * @param      int $v new value
	 * @return     DealFeedStat The current object (for fluent API support)
	 */
	public function setH1400($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->h1400 !== $v) {
			$this->h1400 = $v;
			$this->modifiedColumns[] = DealFeedStatPeer::H1400;
		}

		return $this;
	} // setH1400()

	/**
	 * Set the value of [h1500] column.
	 * 
	 * @param      int $v new value
	 * @return     DealFeedStat The current object (for fluent API support)
	 */
	public function setH1500($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->h1500 !== $v) {
			$this->h1500 = $v;
			$this->modifiedColumns[] = DealFeedStatPeer::H1500;
		}

		return $this;
	} // setH1500()

	/**
	 * Set the value of [h1600] column.
	 * 
	 * @param      int $v new value
	 * @return     DealFeedStat The current object (for fluent API support)
	 */
	public function setH1600($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->h1600 !== $v) {
			$this->h1600 = $v;
			$this->modifiedColumns[] = DealFeedStatPeer::H1600;
		}

		return $this;
	} // setH1600()

	/**
	 * Set the value of [h1700] column.
	 * 
	 * @param      int $v new value
	 * @return     DealFeedStat The current object (for fluent API support)
	 */
	public function setH1700($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->h1700 !== $v) {
			$this->h1700 = $v;
			$this->modifiedColumns[] = DealFeedStatPeer::H1700;
		}

		return $this;
	} // setH1700()

	/**
	 * Set the value of [h1800] column.
	 * 
	 * @param      int $v new value
	 * @return     DealFeedStat The current object (for fluent API support)
	 */
	public function setH1800($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->h1800 !== $v) {
			$this->h1800 = $v;
			$this->modifiedColumns[] = DealFeedStatPeer::H1800;
		}

		return $this;
	} // setH1800()

	/**
	 * Set the value of [h1900] column.
	 * 
	 * @param      int $v new value
	 * @return     DealFeedStat The current object (for fluent API support)
	 */
	public function setH1900($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->h1900 !== $v) {
			$this->h1900 = $v;
			$this->modifiedColumns[] = DealFeedStatPeer::H1900;
		}

		return $this;
	} // setH1900()

	/**
	 * Set the value of [h2000] column.
	 * 
	 * @param      int $v new value
	 * @return     DealFeedStat The current object (for fluent API support)
	 */
	public function setH2000($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->h2000 !== $v) {
			$this->h2000 = $v;
			$this->modifiedColumns[] = DealFeedStatPeer::H2000;
		}

		return $this;
	} // setH2000()

	/**
	 * Set the value of [h2100] column.
	 * 
	 * @param      int $v new value
	 * @return     DealFeedStat The current object (for fluent API support)
	 */
	public function setH2100($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->h2100 !== $v) {
			$this->h2100 = $v;
			$this->modifiedColumns[] = DealFeedStatPeer::H2100;
		}

		return $this;
	} // setH2100()

	/**
	 * Set the value of [h2200] column.
	 * 
	 * @param      int $v new value
	 * @return     DealFeedStat The current object (for fluent API support)
	 */
	public function setH2200($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->h2200 !== $v) {
			$this->h2200 = $v;
			$this->modifiedColumns[] = DealFeedStatPeer::H2200;
		}

		return $this;
	} // setH2200()

	/**
	 * Set the value of [h2300] column.
	 * 
	 * @param      int $v new value
	 * @return     DealFeedStat The current object (for fluent API support)
	 */
	public function setH2300($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->h2300 !== $v) {
			$this->h2300 = $v;
			$this->modifiedColumns[] = DealFeedStatPeer::H2300;
		}

		return $this;
	} // setH2300()

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
			if ($this->deal_feed_id !== 0) {
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
			$this->date = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->h0000 = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->h0100 = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->h0200 = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			$this->h0300 = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
			$this->h0400 = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
			$this->h0500 = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
			$this->h0600 = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
			$this->h0700 = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
			$this->h0800 = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
			$this->h0900 = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
			$this->h1000 = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
			$this->h1100 = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
			$this->h1200 = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
			$this->h1300 = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
			$this->h1400 = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
			$this->h1500 = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
			$this->h1600 = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
			$this->h1700 = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
			$this->h1800 = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
			$this->h1900 = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
			$this->h2000 = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
			$this->h2100 = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
			$this->h2200 = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
			$this->h2300 = ($row[$startcol + 27] !== null) ? (int) $row[$startcol + 27] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 28; // 28 = DealFeedStatPeer::NUM_COLUMNS - DealFeedStatPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating DealFeedStat object", $e);
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
			$con = Propel::getConnection(DealFeedStatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = DealFeedStatPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?
			$this->aDealFeed = null;
			$this->aBusiness = null;
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
			$con = Propel::getConnection(DealFeedStatPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				DealFeedStatQuery::create()
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
			$con = Propel::getConnection(DealFeedStatPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				DealFeedStatPeer::addInstanceToPool($this);
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

			if ($this->aDealFeed !== null) {
				if ($this->aDealFeed->isModified() || $this->aDealFeed->isNew()) {
					$affectedRows += $this->aDealFeed->save($con);
				}
				$this->setDealFeed($this->aDealFeed);
			}

			if ($this->aBusiness !== null) {
				if ($this->aBusiness->isModified() || $this->aBusiness->isNew()) {
					$affectedRows += $this->aBusiness->save($con);
				}
				$this->setBusiness($this->aBusiness);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = DealFeedStatPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(DealFeedStatPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.DealFeedStatPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows += 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows += DealFeedStatPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
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

			if ($this->aDealFeed !== null) {
				if (!$this->aDealFeed->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aDealFeed->getValidationFailures());
				}
			}

			if ($this->aBusiness !== null) {
				if (!$this->aBusiness->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aBusiness->getValidationFailures());
				}
			}


			if (($retval = DealFeedStatPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
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
		$pos = DealFeedStatPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getDate();
				break;
			case 4:
				return $this->getH0000();
				break;
			case 5:
				return $this->getH0100();
				break;
			case 6:
				return $this->getH0200();
				break;
			case 7:
				return $this->getH0300();
				break;
			case 8:
				return $this->getH0400();
				break;
			case 9:
				return $this->getH0500();
				break;
			case 10:
				return $this->getH0600();
				break;
			case 11:
				return $this->getH0700();
				break;
			case 12:
				return $this->getH0800();
				break;
			case 13:
				return $this->getH0900();
				break;
			case 14:
				return $this->getH1000();
				break;
			case 15:
				return $this->getH1100();
				break;
			case 16:
				return $this->getH1200();
				break;
			case 17:
				return $this->getH1300();
				break;
			case 18:
				return $this->getH1400();
				break;
			case 19:
				return $this->getH1500();
				break;
			case 20:
				return $this->getH1600();
				break;
			case 21:
				return $this->getH1700();
				break;
			case 22:
				return $this->getH1800();
				break;
			case 23:
				return $this->getH1900();
				break;
			case 24:
				return $this->getH2000();
				break;
			case 25:
				return $this->getH2100();
				break;
			case 26:
				return $this->getH2200();
				break;
			case 27:
				return $this->getH2300();
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
		$keys = DealFeedStatPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getDealFeedId(),
			$keys[2] => $this->getBusinessId(),
			$keys[3] => $this->getDate(),
			$keys[4] => $this->getH0000(),
			$keys[5] => $this->getH0100(),
			$keys[6] => $this->getH0200(),
			$keys[7] => $this->getH0300(),
			$keys[8] => $this->getH0400(),
			$keys[9] => $this->getH0500(),
			$keys[10] => $this->getH0600(),
			$keys[11] => $this->getH0700(),
			$keys[12] => $this->getH0800(),
			$keys[13] => $this->getH0900(),
			$keys[14] => $this->getH1000(),
			$keys[15] => $this->getH1100(),
			$keys[16] => $this->getH1200(),
			$keys[17] => $this->getH1300(),
			$keys[18] => $this->getH1400(),
			$keys[19] => $this->getH1500(),
			$keys[20] => $this->getH1600(),
			$keys[21] => $this->getH1700(),
			$keys[22] => $this->getH1800(),
			$keys[23] => $this->getH1900(),
			$keys[24] => $this->getH2000(),
			$keys[25] => $this->getH2100(),
			$keys[26] => $this->getH2200(),
			$keys[27] => $this->getH2300(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aDealFeed) {
				$result['DealFeed'] = $this->aDealFeed->toArray($keyType, $includeLazyLoadColumns, true);
			}
			if (null !== $this->aBusiness) {
				$result['Business'] = $this->aBusiness->toArray($keyType, $includeLazyLoadColumns, true);
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
		$pos = DealFeedStatPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setDate($value);
				break;
			case 4:
				$this->setH0000($value);
				break;
			case 5:
				$this->setH0100($value);
				break;
			case 6:
				$this->setH0200($value);
				break;
			case 7:
				$this->setH0300($value);
				break;
			case 8:
				$this->setH0400($value);
				break;
			case 9:
				$this->setH0500($value);
				break;
			case 10:
				$this->setH0600($value);
				break;
			case 11:
				$this->setH0700($value);
				break;
			case 12:
				$this->setH0800($value);
				break;
			case 13:
				$this->setH0900($value);
				break;
			case 14:
				$this->setH1000($value);
				break;
			case 15:
				$this->setH1100($value);
				break;
			case 16:
				$this->setH1200($value);
				break;
			case 17:
				$this->setH1300($value);
				break;
			case 18:
				$this->setH1400($value);
				break;
			case 19:
				$this->setH1500($value);
				break;
			case 20:
				$this->setH1600($value);
				break;
			case 21:
				$this->setH1700($value);
				break;
			case 22:
				$this->setH1800($value);
				break;
			case 23:
				$this->setH1900($value);
				break;
			case 24:
				$this->setH2000($value);
				break;
			case 25:
				$this->setH2100($value);
				break;
			case 26:
				$this->setH2200($value);
				break;
			case 27:
				$this->setH2300($value);
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
		$keys = DealFeedStatPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDealFeedId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setBusinessId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDate($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setH0000($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setH0100($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setH0200($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setH0300($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setH0400($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setH0500($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setH0600($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setH0700($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setH0800($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setH0900($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setH1000($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setH1100($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setH1200($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setH1300($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setH1400($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setH1500($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setH1600($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setH1700($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setH1800($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setH1900($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setH2000($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setH2100($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setH2200($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setH2300($arr[$keys[27]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(DealFeedStatPeer::DATABASE_NAME);

		if ($this->isColumnModified(DealFeedStatPeer::ID)) $criteria->add(DealFeedStatPeer::ID, $this->id);
		if ($this->isColumnModified(DealFeedStatPeer::DEAL_FEED_ID)) $criteria->add(DealFeedStatPeer::DEAL_FEED_ID, $this->deal_feed_id);
		if ($this->isColumnModified(DealFeedStatPeer::BUSINESS_ID)) $criteria->add(DealFeedStatPeer::BUSINESS_ID, $this->business_id);
		if ($this->isColumnModified(DealFeedStatPeer::DATE)) $criteria->add(DealFeedStatPeer::DATE, $this->date);
		if ($this->isColumnModified(DealFeedStatPeer::H0000)) $criteria->add(DealFeedStatPeer::H0000, $this->h0000);
		if ($this->isColumnModified(DealFeedStatPeer::H0100)) $criteria->add(DealFeedStatPeer::H0100, $this->h0100);
		if ($this->isColumnModified(DealFeedStatPeer::H0200)) $criteria->add(DealFeedStatPeer::H0200, $this->h0200);
		if ($this->isColumnModified(DealFeedStatPeer::H0300)) $criteria->add(DealFeedStatPeer::H0300, $this->h0300);
		if ($this->isColumnModified(DealFeedStatPeer::H0400)) $criteria->add(DealFeedStatPeer::H0400, $this->h0400);
		if ($this->isColumnModified(DealFeedStatPeer::H0500)) $criteria->add(DealFeedStatPeer::H0500, $this->h0500);
		if ($this->isColumnModified(DealFeedStatPeer::H0600)) $criteria->add(DealFeedStatPeer::H0600, $this->h0600);
		if ($this->isColumnModified(DealFeedStatPeer::H0700)) $criteria->add(DealFeedStatPeer::H0700, $this->h0700);
		if ($this->isColumnModified(DealFeedStatPeer::H0800)) $criteria->add(DealFeedStatPeer::H0800, $this->h0800);
		if ($this->isColumnModified(DealFeedStatPeer::H0900)) $criteria->add(DealFeedStatPeer::H0900, $this->h0900);
		if ($this->isColumnModified(DealFeedStatPeer::H1000)) $criteria->add(DealFeedStatPeer::H1000, $this->h1000);
		if ($this->isColumnModified(DealFeedStatPeer::H1100)) $criteria->add(DealFeedStatPeer::H1100, $this->h1100);
		if ($this->isColumnModified(DealFeedStatPeer::H1200)) $criteria->add(DealFeedStatPeer::H1200, $this->h1200);
		if ($this->isColumnModified(DealFeedStatPeer::H1300)) $criteria->add(DealFeedStatPeer::H1300, $this->h1300);
		if ($this->isColumnModified(DealFeedStatPeer::H1400)) $criteria->add(DealFeedStatPeer::H1400, $this->h1400);
		if ($this->isColumnModified(DealFeedStatPeer::H1500)) $criteria->add(DealFeedStatPeer::H1500, $this->h1500);
		if ($this->isColumnModified(DealFeedStatPeer::H1600)) $criteria->add(DealFeedStatPeer::H1600, $this->h1600);
		if ($this->isColumnModified(DealFeedStatPeer::H1700)) $criteria->add(DealFeedStatPeer::H1700, $this->h1700);
		if ($this->isColumnModified(DealFeedStatPeer::H1800)) $criteria->add(DealFeedStatPeer::H1800, $this->h1800);
		if ($this->isColumnModified(DealFeedStatPeer::H1900)) $criteria->add(DealFeedStatPeer::H1900, $this->h1900);
		if ($this->isColumnModified(DealFeedStatPeer::H2000)) $criteria->add(DealFeedStatPeer::H2000, $this->h2000);
		if ($this->isColumnModified(DealFeedStatPeer::H2100)) $criteria->add(DealFeedStatPeer::H2100, $this->h2100);
		if ($this->isColumnModified(DealFeedStatPeer::H2200)) $criteria->add(DealFeedStatPeer::H2200, $this->h2200);
		if ($this->isColumnModified(DealFeedStatPeer::H2300)) $criteria->add(DealFeedStatPeer::H2300, $this->h2300);

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
		$criteria = new Criteria(DealFeedStatPeer::DATABASE_NAME);
		$criteria->add(DealFeedStatPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of DealFeedStat (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setDealFeedId($this->deal_feed_id);
		$copyObj->setBusinessId($this->business_id);
		$copyObj->setDate($this->date);
		$copyObj->setH0000($this->h0000);
		$copyObj->setH0100($this->h0100);
		$copyObj->setH0200($this->h0200);
		$copyObj->setH0300($this->h0300);
		$copyObj->setH0400($this->h0400);
		$copyObj->setH0500($this->h0500);
		$copyObj->setH0600($this->h0600);
		$copyObj->setH0700($this->h0700);
		$copyObj->setH0800($this->h0800);
		$copyObj->setH0900($this->h0900);
		$copyObj->setH1000($this->h1000);
		$copyObj->setH1100($this->h1100);
		$copyObj->setH1200($this->h1200);
		$copyObj->setH1300($this->h1300);
		$copyObj->setH1400($this->h1400);
		$copyObj->setH1500($this->h1500);
		$copyObj->setH1600($this->h1600);
		$copyObj->setH1700($this->h1700);
		$copyObj->setH1800($this->h1800);
		$copyObj->setH1900($this->h1900);
		$copyObj->setH2000($this->h2000);
		$copyObj->setH2100($this->h2100);
		$copyObj->setH2200($this->h2200);
		$copyObj->setH2300($this->h2300);

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
	 * @return     DealFeedStat Clone of current object.
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
	 * @return     DealFeedStatPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new DealFeedStatPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a DealFeed object.
	 *
	 * @param      DealFeed $v
	 * @return     DealFeedStat The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setDealFeed(DealFeed $v = null)
	{
		if ($v === null) {
			$this->setDealFeedId(0);
		} else {
			$this->setDealFeedId($v->getId());
		}

		$this->aDealFeed = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the DealFeed object, it will not be re-added.
		if ($v !== null) {
			$v->addDealFeedStat($this);
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
				 $this->aDealFeed->addDealFeedStats($this);
			 */
		}
		return $this->aDealFeed;
	}

	/**
	 * Declares an association between this object and a Business object.
	 *
	 * @param      Business $v
	 * @return     DealFeedStat The current object (for fluent API support)
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
			$v->addDealFeedStat($this);
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
				 $this->aBusiness->addDealFeedStats($this);
			 */
		}
		return $this->aBusiness;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->deal_feed_id = null;
		$this->business_id = null;
		$this->date = null;
		$this->h0000 = null;
		$this->h0100 = null;
		$this->h0200 = null;
		$this->h0300 = null;
		$this->h0400 = null;
		$this->h0500 = null;
		$this->h0600 = null;
		$this->h0700 = null;
		$this->h0800 = null;
		$this->h0900 = null;
		$this->h1000 = null;
		$this->h1100 = null;
		$this->h1200 = null;
		$this->h1300 = null;
		$this->h1400 = null;
		$this->h1500 = null;
		$this->h1600 = null;
		$this->h1700 = null;
		$this->h1800 = null;
		$this->h1900 = null;
		$this->h2000 = null;
		$this->h2100 = null;
		$this->h2200 = null;
		$this->h2300 = null;
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
		} // if ($deep)

		$this->aDealFeed = null;
		$this->aBusiness = null;
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

} // BaseDealFeedStat
