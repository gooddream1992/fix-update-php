<?php


/**
 * Base class that represents a row from the 'affiliate_payment' table.
 *
 * 
 *
 * @package    propel.generator.sigfly.om
 */
abstract class BaseAffiliatePayment extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'AffiliatePaymentPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        AffiliatePaymentPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the user_id field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $user_id;

	/**
	 * The value for the business_id field.
	 * @var        int
	 */
	protected $business_id;

	/**
	 * The value for the company_name field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $company_name;

	/**
	 * The value for the addressline1 field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $addressline1;

	/**
	 * The value for the addressline2 field.
	 * @var        string
	 */
	protected $addressline2;

	/**
	 * The value for the city field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $city;

	/**
	 * The value for the state field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $state;

	/**
	 * The value for the postcode field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $postcode;

	/**
	 * The value for the country field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $country;

	/**
	 * The value for the telephone field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $telephone;

	/**
	 * The value for the fax field.
	 * @var        string
	 */
	protected $fax;

	/**
	 * The value for the is_active field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $is_active;

	/**
	 * The value for the is_cleared field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $is_cleared;

	/**
	 * The value for the date_created field.
	 * @var        string
	 */
	protected $date_created;

	/**
	 * The value for the date_expires field.
	 * @var        string
	 */
	protected $date_expires;

	/**
	 * The value for the date_modified field.
	 * @var        string
	 */
	protected $date_modified;

	/**
	 * The value for the date_cleared field.
	 * @var        string
	 */
	protected $date_cleared;

	/**
	 * The value for the remote_addr_created field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $remote_addr_created;

	/**
	 * The value for the remote_addr_modified field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $remote_addr_modified;

	/**
	 * The value for the amount field.
	 * Note: this column has a database default value of: 0
	 * @var        double
	 */
	protected $amount;

	/**
	 * The value for the check_number field.
	 * @var        int
	 */
	protected $check_number;

	/**
	 * The value for the transaction_id field.
	 * @var        int
	 */
	protected $transaction_id;

	/**
	 * @var        User
	 */
	protected $aUser;

	/**
	 * @var        Business
	 */
	protected $aBusiness;

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
		$this->user_id = 0;
		$this->company_name = '';
		$this->addressline1 = '';
		$this->city = '';
		$this->state = '';
		$this->postcode = '';
		$this->country = '';
		$this->telephone = '';
		$this->is_active = 0;
		$this->is_cleared = 0;
		$this->remote_addr_created = '';
		$this->remote_addr_modified = '';
		$this->amount = 0;
	}

	/**
	 * Initializes internal state of BaseAffiliatePayment object.
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
	 * Get the [user_id] column value.
	 * 
	 * @return     int
	 */
	public function getUserId()
	{
		return $this->user_id;
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
	 * Get the [company_name] column value.
	 * 
	 * @return     string
	 */
	public function getCompanyName()
	{
		return $this->company_name;
	}

	/**
	 * Get the [addressline1] column value.
	 * 
	 * @return     string
	 */
	public function getAddressline1()
	{
		return $this->addressline1;
	}

	/**
	 * Get the [addressline2] column value.
	 * 
	 * @return     string
	 */
	public function getAddressline2()
	{
		return $this->addressline2;
	}

	/**
	 * Get the [city] column value.
	 * 
	 * @return     string
	 */
	public function getCity()
	{
		return $this->city;
	}

	/**
	 * Get the [state] column value.
	 * 
	 * @return     string
	 */
	public function getState()
	{
		return $this->state;
	}

	/**
	 * Get the [postcode] column value.
	 * 
	 * @return     string
	 */
	public function getPostcode()
	{
		return $this->postcode;
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
	 * Get the [telephone] column value.
	 * 
	 * @return     string
	 */
	public function getTelephone()
	{
		return $this->telephone;
	}

	/**
	 * Get the [fax] column value.
	 * 
	 * @return     string
	 */
	public function getFax()
	{
		return $this->fax;
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
	 * Get the [is_cleared] column value.
	 * 
	 * @return     int
	 */
	public function getIsCleared()
	{
		return $this->is_cleared;
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
	 * Get the [optionally formatted] temporal [date_expires] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDateExpires($format = 'Y-m-d H:i:s')
	{
		if ($this->date_expires === null) {
			return null;
		}


		if ($this->date_expires === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->date_expires);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_expires, true), $x);
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
	 * Get the [optionally formatted] temporal [date_cleared] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDateCleared($format = 'Y-m-d H:i:s')
	{
		if ($this->date_cleared === null) {
			return null;
		}


		if ($this->date_cleared === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->date_cleared);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_cleared, true), $x);
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
	 * Get the [remote_addr_created] column value.
	 * 
	 * @return     string
	 */
	public function getRemoteAddrCreated()
	{
		return $this->remote_addr_created;
	}

	/**
	 * Get the [remote_addr_modified] column value.
	 * 
	 * @return     string
	 */
	public function getRemoteAddrModified()
	{
		return $this->remote_addr_modified;
	}

	/**
	 * Get the [amount] column value.
	 * 
	 * @return     double
	 */
	public function getAmount()
	{
		return $this->amount;
	}

	/**
	 * Get the [check_number] column value.
	 * 
	 * @return     int
	 */
	public function getCheckNumber()
	{
		return $this->check_number;
	}

	/**
	 * Get the [transaction_id] column value.
	 * 
	 * @return     int
	 */
	public function getTransactionId()
	{
		return $this->transaction_id;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     AffiliatePayment The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = AffiliatePaymentPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [user_id] column.
	 * 
	 * @param      int $v new value
	 * @return     AffiliatePayment The current object (for fluent API support)
	 */
	public function setUserId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->user_id !== $v || $this->isNew()) {
			$this->user_id = $v;
			$this->modifiedColumns[] = AffiliatePaymentPeer::USER_ID;
		}

		if ($this->aUser !== null && $this->aUser->getId() !== $v) {
			$this->aUser = null;
		}

		return $this;
	} // setUserId()

	/**
	 * Set the value of [business_id] column.
	 * 
	 * @param      int $v new value
	 * @return     AffiliatePayment The current object (for fluent API support)
	 */
	public function setBusinessId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->business_id !== $v) {
			$this->business_id = $v;
			$this->modifiedColumns[] = AffiliatePaymentPeer::BUSINESS_ID;
		}

		if ($this->aBusiness !== null && $this->aBusiness->getId() !== $v) {
			$this->aBusiness = null;
		}

		return $this;
	} // setBusinessId()

	/**
	 * Set the value of [company_name] column.
	 * 
	 * @param      string $v new value
	 * @return     AffiliatePayment The current object (for fluent API support)
	 */
	public function setCompanyName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->company_name !== $v || $this->isNew()) {
			$this->company_name = $v;
			$this->modifiedColumns[] = AffiliatePaymentPeer::COMPANY_NAME;
		}

		return $this;
	} // setCompanyName()

	/**
	 * Set the value of [addressline1] column.
	 * 
	 * @param      string $v new value
	 * @return     AffiliatePayment The current object (for fluent API support)
	 */
	public function setAddressline1($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->addressline1 !== $v || $this->isNew()) {
			$this->addressline1 = $v;
			$this->modifiedColumns[] = AffiliatePaymentPeer::ADDRESSLINE1;
		}

		return $this;
	} // setAddressline1()

	/**
	 * Set the value of [addressline2] column.
	 * 
	 * @param      string $v new value
	 * @return     AffiliatePayment The current object (for fluent API support)
	 */
	public function setAddressline2($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->addressline2 !== $v) {
			$this->addressline2 = $v;
			$this->modifiedColumns[] = AffiliatePaymentPeer::ADDRESSLINE2;
		}

		return $this;
	} // setAddressline2()

	/**
	 * Set the value of [city] column.
	 * 
	 * @param      string $v new value
	 * @return     AffiliatePayment The current object (for fluent API support)
	 */
	public function setCity($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->city !== $v || $this->isNew()) {
			$this->city = $v;
			$this->modifiedColumns[] = AffiliatePaymentPeer::CITY;
		}

		return $this;
	} // setCity()

	/**
	 * Set the value of [state] column.
	 * 
	 * @param      string $v new value
	 * @return     AffiliatePayment The current object (for fluent API support)
	 */
	public function setState($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->state !== $v || $this->isNew()) {
			$this->state = $v;
			$this->modifiedColumns[] = AffiliatePaymentPeer::STATE;
		}

		return $this;
	} // setState()

	/**
	 * Set the value of [postcode] column.
	 * 
	 * @param      string $v new value
	 * @return     AffiliatePayment The current object (for fluent API support)
	 */
	public function setPostcode($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->postcode !== $v || $this->isNew()) {
			$this->postcode = $v;
			$this->modifiedColumns[] = AffiliatePaymentPeer::POSTCODE;
		}

		return $this;
	} // setPostcode()

	/**
	 * Set the value of [country] column.
	 * 
	 * @param      string $v new value
	 * @return     AffiliatePayment The current object (for fluent API support)
	 */
	public function setCountry($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->country !== $v || $this->isNew()) {
			$this->country = $v;
			$this->modifiedColumns[] = AffiliatePaymentPeer::COUNTRY;
		}

		return $this;
	} // setCountry()

	/**
	 * Set the value of [telephone] column.
	 * 
	 * @param      string $v new value
	 * @return     AffiliatePayment The current object (for fluent API support)
	 */
	public function setTelephone($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->telephone !== $v || $this->isNew()) {
			$this->telephone = $v;
			$this->modifiedColumns[] = AffiliatePaymentPeer::TELEPHONE;
		}

		return $this;
	} // setTelephone()

	/**
	 * Set the value of [fax] column.
	 * 
	 * @param      string $v new value
	 * @return     AffiliatePayment The current object (for fluent API support)
	 */
	public function setFax($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->fax !== $v) {
			$this->fax = $v;
			$this->modifiedColumns[] = AffiliatePaymentPeer::FAX;
		}

		return $this;
	} // setFax()

	/**
	 * Set the value of [is_active] column.
	 * 
	 * @param      int $v new value
	 * @return     AffiliatePayment The current object (for fluent API support)
	 */
	public function setIsActive($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->is_active !== $v || $this->isNew()) {
			$this->is_active = $v;
			$this->modifiedColumns[] = AffiliatePaymentPeer::IS_ACTIVE;
		}

		return $this;
	} // setIsActive()

	/**
	 * Set the value of [is_cleared] column.
	 * 
	 * @param      int $v new value
	 * @return     AffiliatePayment The current object (for fluent API support)
	 */
	public function setIsCleared($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->is_cleared !== $v || $this->isNew()) {
			$this->is_cleared = $v;
			$this->modifiedColumns[] = AffiliatePaymentPeer::IS_CLEARED;
		}

		return $this;
	} // setIsCleared()

	/**
	 * Sets the value of [date_created] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     AffiliatePayment The current object (for fluent API support)
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
				$this->modifiedColumns[] = AffiliatePaymentPeer::DATE_CREATED;
			}
		} // if either are not null

		return $this;
	} // setDateCreated()

	/**
	 * Sets the value of [date_expires] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     AffiliatePayment The current object (for fluent API support)
	 */
	public function setDateExpires($v)
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

		if ( $this->date_expires !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->date_expires !== null && $tmpDt = new DateTime($this->date_expires)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->date_expires = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = AffiliatePaymentPeer::DATE_EXPIRES;
			}
		} // if either are not null

		return $this;
	} // setDateExpires()

	/**
	 * Sets the value of [date_modified] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     AffiliatePayment The current object (for fluent API support)
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
				$this->modifiedColumns[] = AffiliatePaymentPeer::DATE_MODIFIED;
			}
		} // if either are not null

		return $this;
	} // setDateModified()

	/**
	 * Sets the value of [date_cleared] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     AffiliatePayment The current object (for fluent API support)
	 */
	public function setDateCleared($v)
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

		if ( $this->date_cleared !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->date_cleared !== null && $tmpDt = new DateTime($this->date_cleared)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->date_cleared = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = AffiliatePaymentPeer::DATE_CLEARED;
			}
		} // if either are not null

		return $this;
	} // setDateCleared()

	/**
	 * Set the value of [remote_addr_created] column.
	 * 
	 * @param      string $v new value
	 * @return     AffiliatePayment The current object (for fluent API support)
	 */
	public function setRemoteAddrCreated($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->remote_addr_created !== $v || $this->isNew()) {
			$this->remote_addr_created = $v;
			$this->modifiedColumns[] = AffiliatePaymentPeer::REMOTE_ADDR_CREATED;
		}

		return $this;
	} // setRemoteAddrCreated()

	/**
	 * Set the value of [remote_addr_modified] column.
	 * 
	 * @param      string $v new value
	 * @return     AffiliatePayment The current object (for fluent API support)
	 */
	public function setRemoteAddrModified($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->remote_addr_modified !== $v || $this->isNew()) {
			$this->remote_addr_modified = $v;
			$this->modifiedColumns[] = AffiliatePaymentPeer::REMOTE_ADDR_MODIFIED;
		}

		return $this;
	} // setRemoteAddrModified()

	/**
	 * Set the value of [amount] column.
	 * 
	 * @param      double $v new value
	 * @return     AffiliatePayment The current object (for fluent API support)
	 */
	public function setAmount($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->amount !== $v || $this->isNew()) {
			$this->amount = $v;
			$this->modifiedColumns[] = AffiliatePaymentPeer::AMOUNT;
		}

		return $this;
	} // setAmount()

	/**
	 * Set the value of [check_number] column.
	 * 
	 * @param      int $v new value
	 * @return     AffiliatePayment The current object (for fluent API support)
	 */
	public function setCheckNumber($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->check_number !== $v) {
			$this->check_number = $v;
			$this->modifiedColumns[] = AffiliatePaymentPeer::CHECK_NUMBER;
		}

		return $this;
	} // setCheckNumber()

	/**
	 * Set the value of [transaction_id] column.
	 * 
	 * @param      int $v new value
	 * @return     AffiliatePayment The current object (for fluent API support)
	 */
	public function setTransactionId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->transaction_id !== $v) {
			$this->transaction_id = $v;
			$this->modifiedColumns[] = AffiliatePaymentPeer::TRANSACTION_ID;
		}

		return $this;
	} // setTransactionId()

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
			if ($this->user_id !== 0) {
				return false;
			}

			if ($this->company_name !== '') {
				return false;
			}

			if ($this->addressline1 !== '') {
				return false;
			}

			if ($this->city !== '') {
				return false;
			}

			if ($this->state !== '') {
				return false;
			}

			if ($this->postcode !== '') {
				return false;
			}

			if ($this->country !== '') {
				return false;
			}

			if ($this->telephone !== '') {
				return false;
			}

			if ($this->is_active !== 0) {
				return false;
			}

			if ($this->is_cleared !== 0) {
				return false;
			}

			if ($this->remote_addr_created !== '') {
				return false;
			}

			if ($this->remote_addr_modified !== '') {
				return false;
			}

			if ($this->amount !== 0) {
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
			$this->user_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->business_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->company_name = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->addressline1 = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->addressline2 = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->city = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->state = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->postcode = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->country = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->telephone = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->fax = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->is_active = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
			$this->is_cleared = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
			$this->date_created = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
			$this->date_expires = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
			$this->date_modified = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
			$this->date_cleared = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
			$this->remote_addr_created = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
			$this->remote_addr_modified = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
			$this->amount = ($row[$startcol + 20] !== null) ? (double) $row[$startcol + 20] : null;
			$this->check_number = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
			$this->transaction_id = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 23; // 23 = AffiliatePaymentPeer::NUM_COLUMNS - AffiliatePaymentPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating AffiliatePayment object", $e);
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

		if ($this->aUser !== null && $this->user_id !== $this->aUser->getId()) {
			$this->aUser = null;
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
			$con = Propel::getConnection(AffiliatePaymentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = AffiliatePaymentPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?
			$this->aUser = null;
			$this->aBusiness = null;
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
			$con = Propel::getConnection(AffiliatePaymentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				AffiliatePaymentQuery::create()
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
			$con = Propel::getConnection(AffiliatePaymentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				AffiliatePaymentPeer::addInstanceToPool($this);
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

			if ($this->aUser !== null) {
				if ($this->aUser->isModified() || $this->aUser->isNew()) {
					$affectedRows += $this->aUser->save($con);
				}
				$this->setUser($this->aUser);
			}

			if ($this->aBusiness !== null) {
				if ($this->aBusiness->isModified() || $this->aBusiness->isNew()) {
					$affectedRows += $this->aBusiness->save($con);
				}
				$this->setBusiness($this->aBusiness);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = AffiliatePaymentPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(AffiliatePaymentPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.AffiliatePaymentPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows += 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows += AffiliatePaymentPeer::doUpdate($this, $con);
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

			if ($this->aUser !== null) {
				if (!$this->aUser->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aUser->getValidationFailures());
				}
			}

			if ($this->aBusiness !== null) {
				if (!$this->aBusiness->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aBusiness->getValidationFailures());
				}
			}


			if (($retval = AffiliatePaymentPeer::doValidate($this, $columns)) !== true) {
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
		$pos = AffiliatePaymentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getUserId();
				break;
			case 2:
				return $this->getBusinessId();
				break;
			case 3:
				return $this->getCompanyName();
				break;
			case 4:
				return $this->getAddressline1();
				break;
			case 5:
				return $this->getAddressline2();
				break;
			case 6:
				return $this->getCity();
				break;
			case 7:
				return $this->getState();
				break;
			case 8:
				return $this->getPostcode();
				break;
			case 9:
				return $this->getCountry();
				break;
			case 10:
				return $this->getTelephone();
				break;
			case 11:
				return $this->getFax();
				break;
			case 12:
				return $this->getIsActive();
				break;
			case 13:
				return $this->getIsCleared();
				break;
			case 14:
				return $this->getDateCreated();
				break;
			case 15:
				return $this->getDateExpires();
				break;
			case 16:
				return $this->getDateModified();
				break;
			case 17:
				return $this->getDateCleared();
				break;
			case 18:
				return $this->getRemoteAddrCreated();
				break;
			case 19:
				return $this->getRemoteAddrModified();
				break;
			case 20:
				return $this->getAmount();
				break;
			case 21:
				return $this->getCheckNumber();
				break;
			case 22:
				return $this->getTransactionId();
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
		$keys = AffiliatePaymentPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getUserId(),
			$keys[2] => $this->getBusinessId(),
			$keys[3] => $this->getCompanyName(),
			$keys[4] => $this->getAddressline1(),
			$keys[5] => $this->getAddressline2(),
			$keys[6] => $this->getCity(),
			$keys[7] => $this->getState(),
			$keys[8] => $this->getPostcode(),
			$keys[9] => $this->getCountry(),
			$keys[10] => $this->getTelephone(),
			$keys[11] => $this->getFax(),
			$keys[12] => $this->getIsActive(),
			$keys[13] => $this->getIsCleared(),
			$keys[14] => $this->getDateCreated(),
			$keys[15] => $this->getDateExpires(),
			$keys[16] => $this->getDateModified(),
			$keys[17] => $this->getDateCleared(),
			$keys[18] => $this->getRemoteAddrCreated(),
			$keys[19] => $this->getRemoteAddrModified(),
			$keys[20] => $this->getAmount(),
			$keys[21] => $this->getCheckNumber(),
			$keys[22] => $this->getTransactionId(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aUser) {
				$result['User'] = $this->aUser->toArray($keyType, $includeLazyLoadColumns, true);
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
		$pos = AffiliatePaymentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setUserId($value);
				break;
			case 2:
				$this->setBusinessId($value);
				break;
			case 3:
				$this->setCompanyName($value);
				break;
			case 4:
				$this->setAddressline1($value);
				break;
			case 5:
				$this->setAddressline2($value);
				break;
			case 6:
				$this->setCity($value);
				break;
			case 7:
				$this->setState($value);
				break;
			case 8:
				$this->setPostcode($value);
				break;
			case 9:
				$this->setCountry($value);
				break;
			case 10:
				$this->setTelephone($value);
				break;
			case 11:
				$this->setFax($value);
				break;
			case 12:
				$this->setIsActive($value);
				break;
			case 13:
				$this->setIsCleared($value);
				break;
			case 14:
				$this->setDateCreated($value);
				break;
			case 15:
				$this->setDateExpires($value);
				break;
			case 16:
				$this->setDateModified($value);
				break;
			case 17:
				$this->setDateCleared($value);
				break;
			case 18:
				$this->setRemoteAddrCreated($value);
				break;
			case 19:
				$this->setRemoteAddrModified($value);
				break;
			case 20:
				$this->setAmount($value);
				break;
			case 21:
				$this->setCheckNumber($value);
				break;
			case 22:
				$this->setTransactionId($value);
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
		$keys = AffiliatePaymentPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setUserId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setBusinessId($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setCompanyName($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setAddressline1($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setAddressline2($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCity($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setState($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setPostcode($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setCountry($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setTelephone($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setFax($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setIsActive($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setIsCleared($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setDateCreated($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setDateExpires($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setDateModified($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setDateCleared($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setRemoteAddrCreated($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setRemoteAddrModified($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setAmount($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setCheckNumber($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setTransactionId($arr[$keys[22]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(AffiliatePaymentPeer::DATABASE_NAME);

		if ($this->isColumnModified(AffiliatePaymentPeer::ID)) $criteria->add(AffiliatePaymentPeer::ID, $this->id);
		if ($this->isColumnModified(AffiliatePaymentPeer::USER_ID)) $criteria->add(AffiliatePaymentPeer::USER_ID, $this->user_id);
		if ($this->isColumnModified(AffiliatePaymentPeer::BUSINESS_ID)) $criteria->add(AffiliatePaymentPeer::BUSINESS_ID, $this->business_id);
		if ($this->isColumnModified(AffiliatePaymentPeer::COMPANY_NAME)) $criteria->add(AffiliatePaymentPeer::COMPANY_NAME, $this->company_name);
		if ($this->isColumnModified(AffiliatePaymentPeer::ADDRESSLINE1)) $criteria->add(AffiliatePaymentPeer::ADDRESSLINE1, $this->addressline1);
		if ($this->isColumnModified(AffiliatePaymentPeer::ADDRESSLINE2)) $criteria->add(AffiliatePaymentPeer::ADDRESSLINE2, $this->addressline2);
		if ($this->isColumnModified(AffiliatePaymentPeer::CITY)) $criteria->add(AffiliatePaymentPeer::CITY, $this->city);
		if ($this->isColumnModified(AffiliatePaymentPeer::STATE)) $criteria->add(AffiliatePaymentPeer::STATE, $this->state);
		if ($this->isColumnModified(AffiliatePaymentPeer::POSTCODE)) $criteria->add(AffiliatePaymentPeer::POSTCODE, $this->postcode);
		if ($this->isColumnModified(AffiliatePaymentPeer::COUNTRY)) $criteria->add(AffiliatePaymentPeer::COUNTRY, $this->country);
		if ($this->isColumnModified(AffiliatePaymentPeer::TELEPHONE)) $criteria->add(AffiliatePaymentPeer::TELEPHONE, $this->telephone);
		if ($this->isColumnModified(AffiliatePaymentPeer::FAX)) $criteria->add(AffiliatePaymentPeer::FAX, $this->fax);
		if ($this->isColumnModified(AffiliatePaymentPeer::IS_ACTIVE)) $criteria->add(AffiliatePaymentPeer::IS_ACTIVE, $this->is_active);
		if ($this->isColumnModified(AffiliatePaymentPeer::IS_CLEARED)) $criteria->add(AffiliatePaymentPeer::IS_CLEARED, $this->is_cleared);
		if ($this->isColumnModified(AffiliatePaymentPeer::DATE_CREATED)) $criteria->add(AffiliatePaymentPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(AffiliatePaymentPeer::DATE_EXPIRES)) $criteria->add(AffiliatePaymentPeer::DATE_EXPIRES, $this->date_expires);
		if ($this->isColumnModified(AffiliatePaymentPeer::DATE_MODIFIED)) $criteria->add(AffiliatePaymentPeer::DATE_MODIFIED, $this->date_modified);
		if ($this->isColumnModified(AffiliatePaymentPeer::DATE_CLEARED)) $criteria->add(AffiliatePaymentPeer::DATE_CLEARED, $this->date_cleared);
		if ($this->isColumnModified(AffiliatePaymentPeer::REMOTE_ADDR_CREATED)) $criteria->add(AffiliatePaymentPeer::REMOTE_ADDR_CREATED, $this->remote_addr_created);
		if ($this->isColumnModified(AffiliatePaymentPeer::REMOTE_ADDR_MODIFIED)) $criteria->add(AffiliatePaymentPeer::REMOTE_ADDR_MODIFIED, $this->remote_addr_modified);
		if ($this->isColumnModified(AffiliatePaymentPeer::AMOUNT)) $criteria->add(AffiliatePaymentPeer::AMOUNT, $this->amount);
		if ($this->isColumnModified(AffiliatePaymentPeer::CHECK_NUMBER)) $criteria->add(AffiliatePaymentPeer::CHECK_NUMBER, $this->check_number);
		if ($this->isColumnModified(AffiliatePaymentPeer::TRANSACTION_ID)) $criteria->add(AffiliatePaymentPeer::TRANSACTION_ID, $this->transaction_id);

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
		$criteria = new Criteria(AffiliatePaymentPeer::DATABASE_NAME);
		$criteria->add(AffiliatePaymentPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of AffiliatePayment (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setUserId($this->user_id);
		$copyObj->setBusinessId($this->business_id);
		$copyObj->setCompanyName($this->company_name);
		$copyObj->setAddressline1($this->addressline1);
		$copyObj->setAddressline2($this->addressline2);
		$copyObj->setCity($this->city);
		$copyObj->setState($this->state);
		$copyObj->setPostcode($this->postcode);
		$copyObj->setCountry($this->country);
		$copyObj->setTelephone($this->telephone);
		$copyObj->setFax($this->fax);
		$copyObj->setIsActive($this->is_active);
		$copyObj->setIsCleared($this->is_cleared);
		$copyObj->setDateCreated($this->date_created);
		$copyObj->setDateExpires($this->date_expires);
		$copyObj->setDateModified($this->date_modified);
		$copyObj->setDateCleared($this->date_cleared);
		$copyObj->setRemoteAddrCreated($this->remote_addr_created);
		$copyObj->setRemoteAddrModified($this->remote_addr_modified);
		$copyObj->setAmount($this->amount);
		$copyObj->setCheckNumber($this->check_number);
		$copyObj->setTransactionId($this->transaction_id);

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
	 * @return     AffiliatePayment Clone of current object.
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
	 * @return     AffiliatePaymentPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new AffiliatePaymentPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a User object.
	 *
	 * @param      User $v
	 * @return     AffiliatePayment The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setUser(User $v = null)
	{
		if ($v === null) {
			$this->setUserId(0);
		} else {
			$this->setUserId($v->getId());
		}

		$this->aUser = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the User object, it will not be re-added.
		if ($v !== null) {
			$v->addAffiliatePayment($this);
		}

		return $this;
	}


	/**
	 * Get the associated User object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     User The associated User object.
	 * @throws     PropelException
	 */
	public function getUser(PropelPDO $con = null)
	{
		if ($this->aUser === null && ($this->user_id !== null)) {
			$this->aUser = UserQuery::create()->findPk($this->user_id, $con);
			/* The following can be used additionally to
				 guarantee the related object contains a reference
				 to this object.  This level of coupling may, however, be
				 undesirable since it could result in an only partially populated collection
				 in the referenced object.
				 $this->aUser->addAffiliatePayments($this);
			 */
		}
		return $this->aUser;
	}

	/**
	 * Declares an association between this object and a Business object.
	 *
	 * @param      Business $v
	 * @return     AffiliatePayment The current object (for fluent API support)
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
			$v->addAffiliatePayment($this);
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
				 $this->aBusiness->addAffiliatePayments($this);
			 */
		}
		return $this->aBusiness;
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
	 * If this AffiliatePayment is new, it will return
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
					->filterByAffiliatePayment($this)
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
					->filterByAffiliatePayment($this)
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
			$l->setAffiliatePayment($this);
		}
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->user_id = null;
		$this->business_id = null;
		$this->company_name = null;
		$this->addressline1 = null;
		$this->addressline2 = null;
		$this->city = null;
		$this->state = null;
		$this->postcode = null;
		$this->country = null;
		$this->telephone = null;
		$this->fax = null;
		$this->is_active = null;
		$this->is_cleared = null;
		$this->date_created = null;
		$this->date_expires = null;
		$this->date_modified = null;
		$this->date_cleared = null;
		$this->remote_addr_created = null;
		$this->remote_addr_modified = null;
		$this->amount = null;
		$this->check_number = null;
		$this->transaction_id = null;
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
		$this->aUser = null;
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

} // BaseAffiliatePayment
