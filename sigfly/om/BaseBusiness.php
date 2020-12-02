<?php


/**
 * Base class that represents a row from the 'business' table.
 *
 * 
 *
 * @package    propel.generator.sigfly.om
 */
abstract class BaseBusiness extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'BusinessPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        BusinessPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the email field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $email;

	/**
	 * The value for the company_description field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $company_description;

	/**
	 * The value for the company_url field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $company_url;

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
	 * The value for the is_premium field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $is_premium;

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
	 * The value for the payment_threshold field.
	 * Note: this column has a database default value of: 0
	 * @var        double
	 */
	protected $payment_threshold;

	/**
	 * The value for the tax_id_enc field.
	 * @var        resource
	 */
	protected $tax_id_enc;

	/**
	 * The value for the tax_id_last_four field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $tax_id_last_four;

	/**
	 * @var        array AffiliatePayment[] Collection to store aggregation of AffiliatePayment objects.
	 */
	protected $collAffiliatePayments;

	/**
	 * @var        array BusinessUser[] Collection to store aggregation of BusinessUser objects.
	 */
	protected $collBusinessUsers;

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
		$this->email = '';
		$this->company_description = '';
		$this->company_url = '';
		$this->company_name = '';
		$this->addressline1 = '';
		$this->city = '';
		$this->state = '';
		$this->postcode = '';
		$this->country = '';
		$this->telephone = '';
		$this->is_active = 0;
		$this->is_premium = 0;
		$this->remote_addr_created = '';
		$this->remote_addr_modified = '';
		$this->payment_threshold = 0;
		$this->tax_id_last_four = '';
	}

	/**
	 * Initializes internal state of BaseBusiness object.
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
	 * Get the [email] column value.
	 * 
	 * @return     string
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * Get the [company_description] column value.
	 * 
	 * @return     string
	 */
	public function getCompanyDescription()
	{
		return $this->company_description;
	}

	/**
	 * Get the [company_url] column value.
	 * 
	 * @return     string
	 */
	public function getCompanyUrl()
	{
		return $this->company_url;
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
	 * Get the [is_premium] column value.
	 * 
	 * @return     int
	 */
	public function getIsPremium()
	{
		return $this->is_premium;
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
	 * Get the [payment_threshold] column value.
	 * 
	 * @return     double
	 */
	public function getPaymentThreshold()
	{
		return $this->payment_threshold;
	}

	/**
	 * Get the [tax_id_enc] column value.
	 * 
	 * @return     resource
	 */
	public function getTaxIdEnc()
	{
		return $this->tax_id_enc;
	}

	/**
	 * Get the [tax_id_last_four] column value.
	 * 
	 * @return     string
	 */
	public function getTaxIdLastFour()
	{
		return $this->tax_id_last_four;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     Business The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = BusinessPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [email] column.
	 * 
	 * @param      string $v new value
	 * @return     Business The current object (for fluent API support)
	 */
	public function setEmail($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->email !== $v || $this->isNew()) {
			$this->email = $v;
			$this->modifiedColumns[] = BusinessPeer::EMAIL;
		}

		return $this;
	} // setEmail()

	/**
	 * Set the value of [company_description] column.
	 * 
	 * @param      string $v new value
	 * @return     Business The current object (for fluent API support)
	 */
	public function setCompanyDescription($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->company_description !== $v || $this->isNew()) {
			$this->company_description = $v;
			$this->modifiedColumns[] = BusinessPeer::COMPANY_DESCRIPTION;
		}

		return $this;
	} // setCompanyDescription()

	/**
	 * Set the value of [company_url] column.
	 * 
	 * @param      string $v new value
	 * @return     Business The current object (for fluent API support)
	 */
	public function setCompanyUrl($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->company_url !== $v || $this->isNew()) {
			$this->company_url = $v;
			$this->modifiedColumns[] = BusinessPeer::COMPANY_URL;
		}

		return $this;
	} // setCompanyUrl()

	/**
	 * Set the value of [company_name] column.
	 * 
	 * @param      string $v new value
	 * @return     Business The current object (for fluent API support)
	 */
	public function setCompanyName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->company_name !== $v || $this->isNew()) {
			$this->company_name = $v;
			$this->modifiedColumns[] = BusinessPeer::COMPANY_NAME;
		}

		return $this;
	} // setCompanyName()

	/**
	 * Set the value of [addressline1] column.
	 * 
	 * @param      string $v new value
	 * @return     Business The current object (for fluent API support)
	 */
	public function setAddressline1($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->addressline1 !== $v || $this->isNew()) {
			$this->addressline1 = $v;
			$this->modifiedColumns[] = BusinessPeer::ADDRESSLINE1;
		}

		return $this;
	} // setAddressline1()

	/**
	 * Set the value of [addressline2] column.
	 * 
	 * @param      string $v new value
	 * @return     Business The current object (for fluent API support)
	 */
	public function setAddressline2($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->addressline2 !== $v) {
			$this->addressline2 = $v;
			$this->modifiedColumns[] = BusinessPeer::ADDRESSLINE2;
		}

		return $this;
	} // setAddressline2()

	/**
	 * Set the value of [city] column.
	 * 
	 * @param      string $v new value
	 * @return     Business The current object (for fluent API support)
	 */
	public function setCity($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->city !== $v || $this->isNew()) {
			$this->city = $v;
			$this->modifiedColumns[] = BusinessPeer::CITY;
		}

		return $this;
	} // setCity()

	/**
	 * Set the value of [state] column.
	 * 
	 * @param      string $v new value
	 * @return     Business The current object (for fluent API support)
	 */
	public function setState($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->state !== $v || $this->isNew()) {
			$this->state = $v;
			$this->modifiedColumns[] = BusinessPeer::STATE;
		}

		return $this;
	} // setState()

	/**
	 * Set the value of [postcode] column.
	 * 
	 * @param      string $v new value
	 * @return     Business The current object (for fluent API support)
	 */
	public function setPostcode($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->postcode !== $v || $this->isNew()) {
			$this->postcode = $v;
			$this->modifiedColumns[] = BusinessPeer::POSTCODE;
		}

		return $this;
	} // setPostcode()

	/**
	 * Set the value of [country] column.
	 * 
	 * @param      string $v new value
	 * @return     Business The current object (for fluent API support)
	 */
	public function setCountry($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->country !== $v || $this->isNew()) {
			$this->country = $v;
			$this->modifiedColumns[] = BusinessPeer::COUNTRY;
		}

		return $this;
	} // setCountry()

	/**
	 * Set the value of [telephone] column.
	 * 
	 * @param      string $v new value
	 * @return     Business The current object (for fluent API support)
	 */
	public function setTelephone($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->telephone !== $v || $this->isNew()) {
			$this->telephone = $v;
			$this->modifiedColumns[] = BusinessPeer::TELEPHONE;
		}

		return $this;
	} // setTelephone()

	/**
	 * Set the value of [fax] column.
	 * 
	 * @param      string $v new value
	 * @return     Business The current object (for fluent API support)
	 */
	public function setFax($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->fax !== $v) {
			$this->fax = $v;
			$this->modifiedColumns[] = BusinessPeer::FAX;
		}

		return $this;
	} // setFax()

	/**
	 * Set the value of [is_active] column.
	 * 
	 * @param      int $v new value
	 * @return     Business The current object (for fluent API support)
	 */
	public function setIsActive($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->is_active !== $v || $this->isNew()) {
			$this->is_active = $v;
			$this->modifiedColumns[] = BusinessPeer::IS_ACTIVE;
		}

		return $this;
	} // setIsActive()

	/**
	 * Set the value of [is_premium] column.
	 * 
	 * @param      int $v new value
	 * @return     Business The current object (for fluent API support)
	 */
	public function setIsPremium($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->is_premium !== $v || $this->isNew()) {
			$this->is_premium = $v;
			$this->modifiedColumns[] = BusinessPeer::IS_PREMIUM;
		}

		return $this;
	} // setIsPremium()

	/**
	 * Sets the value of [date_created] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Business The current object (for fluent API support)
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
				$this->modifiedColumns[] = BusinessPeer::DATE_CREATED;
			}
		} // if either are not null

		return $this;
	} // setDateCreated()

	/**
	 * Sets the value of [date_expires] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Business The current object (for fluent API support)
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
				$this->modifiedColumns[] = BusinessPeer::DATE_EXPIRES;
			}
		} // if either are not null

		return $this;
	} // setDateExpires()

	/**
	 * Sets the value of [date_modified] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Business The current object (for fluent API support)
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
				$this->modifiedColumns[] = BusinessPeer::DATE_MODIFIED;
			}
		} // if either are not null

		return $this;
	} // setDateModified()

	/**
	 * Set the value of [remote_addr_created] column.
	 * 
	 * @param      string $v new value
	 * @return     Business The current object (for fluent API support)
	 */
	public function setRemoteAddrCreated($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->remote_addr_created !== $v || $this->isNew()) {
			$this->remote_addr_created = $v;
			$this->modifiedColumns[] = BusinessPeer::REMOTE_ADDR_CREATED;
		}

		return $this;
	} // setRemoteAddrCreated()

	/**
	 * Set the value of [remote_addr_modified] column.
	 * 
	 * @param      string $v new value
	 * @return     Business The current object (for fluent API support)
	 */
	public function setRemoteAddrModified($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->remote_addr_modified !== $v || $this->isNew()) {
			$this->remote_addr_modified = $v;
			$this->modifiedColumns[] = BusinessPeer::REMOTE_ADDR_MODIFIED;
		}

		return $this;
	} // setRemoteAddrModified()

	/**
	 * Set the value of [payment_threshold] column.
	 * 
	 * @param      double $v new value
	 * @return     Business The current object (for fluent API support)
	 */
	public function setPaymentThreshold($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->payment_threshold !== $v || $this->isNew()) {
			$this->payment_threshold = $v;
			$this->modifiedColumns[] = BusinessPeer::PAYMENT_THRESHOLD;
		}

		return $this;
	} // setPaymentThreshold()

	/**
	 * Set the value of [tax_id_enc] column.
	 * 
	 * @param      resource $v new value
	 * @return     Business The current object (for fluent API support)
	 */
	public function setTaxIdEnc($v)
	{
		// Because BLOB columns are streams in PDO we have to assume that they are
		// always modified when a new value is passed in.  For example, the contents
		// of the stream itself may have changed externally.
		if (!is_resource($v) && $v !== null) {
			$this->tax_id_enc = fopen('php://memory', 'r+');
			fwrite($this->tax_id_enc, $v);
			rewind($this->tax_id_enc);
		} else { // it's already a stream
			$this->tax_id_enc = $v;
		}
		$this->modifiedColumns[] = BusinessPeer::TAX_ID_ENC;

		return $this;
	} // setTaxIdEnc()

	/**
	 * Set the value of [tax_id_last_four] column.
	 * 
	 * @param      string $v new value
	 * @return     Business The current object (for fluent API support)
	 */
	public function setTaxIdLastFour($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->tax_id_last_four !== $v || $this->isNew()) {
			$this->tax_id_last_four = $v;
			$this->modifiedColumns[] = BusinessPeer::TAX_ID_LAST_FOUR;
		}

		return $this;
	} // setTaxIdLastFour()

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
			if ($this->email !== '') {
				return false;
			}

			if ($this->company_description !== '') {
				return false;
			}

			if ($this->company_url !== '') {
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

			if ($this->is_premium !== 0) {
				return false;
			}

			if ($this->remote_addr_created !== '') {
				return false;
			}

			if ($this->remote_addr_modified !== '') {
				return false;
			}

			if ($this->payment_threshold !== 0) {
				return false;
			}

			if ($this->tax_id_last_four !== '') {
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
			$this->email = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->company_description = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->company_url = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->company_name = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->addressline1 = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->addressline2 = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->city = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->state = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->postcode = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->country = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->telephone = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->fax = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->is_active = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
			$this->is_premium = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
			$this->date_created = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
			$this->date_expires = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
			$this->date_modified = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
			$this->remote_addr_created = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
			$this->remote_addr_modified = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
			$this->payment_threshold = ($row[$startcol + 20] !== null) ? (double) $row[$startcol + 20] : null;
			if ($row[$startcol + 21] !== null) {
				$this->tax_id_enc = fopen('php://memory', 'r+');
				fwrite($this->tax_id_enc, $row[$startcol + 21]);
				rewind($this->tax_id_enc);
			} else {
				$this->tax_id_enc = null;
			}
			$this->tax_id_last_four = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 23; // 23 = BusinessPeer::NUM_COLUMNS - BusinessPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating Business object", $e);
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
			$con = Propel::getConnection(BusinessPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = BusinessPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?
			$this->collAffiliatePayments = null;
			$this->collBusinessUsers = null;
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
			$con = Propel::getConnection(BusinessPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				BusinessQuery::create()
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
			$con = Propel::getConnection(BusinessPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				BusinessPeer::addInstanceToPool($this);
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

			if ($this->isNew() ) {
				$this->modifiedColumns[] = BusinessPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(BusinessPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.BusinessPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows = BusinessPeer::doUpdate($this, $con);
				}

				// Rewind the tax_id_enc LOB column, since PDO does not rewind after inserting value.
				if ($this->tax_id_enc !== null && is_resource($this->tax_id_enc)) {
					rewind($this->tax_id_enc);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collAffiliatePayments !== null) {
				foreach ($this->collAffiliatePayments as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collBusinessUsers !== null) {
				foreach ($this->collBusinessUsers as $referrerFK) {
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


			if (($retval = BusinessPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collAffiliatePayments !== null) {
					foreach ($this->collAffiliatePayments as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collBusinessUsers !== null) {
					foreach ($this->collBusinessUsers as $referrerFK) {
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
		$pos = BusinessPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getEmail();
				break;
			case 2:
				return $this->getCompanyDescription();
				break;
			case 3:
				return $this->getCompanyUrl();
				break;
			case 4:
				return $this->getCompanyName();
				break;
			case 5:
				return $this->getAddressline1();
				break;
			case 6:
				return $this->getAddressline2();
				break;
			case 7:
				return $this->getCity();
				break;
			case 8:
				return $this->getState();
				break;
			case 9:
				return $this->getPostcode();
				break;
			case 10:
				return $this->getCountry();
				break;
			case 11:
				return $this->getTelephone();
				break;
			case 12:
				return $this->getFax();
				break;
			case 13:
				return $this->getIsActive();
				break;
			case 14:
				return $this->getIsPremium();
				break;
			case 15:
				return $this->getDateCreated();
				break;
			case 16:
				return $this->getDateExpires();
				break;
			case 17:
				return $this->getDateModified();
				break;
			case 18:
				return $this->getRemoteAddrCreated();
				break;
			case 19:
				return $this->getRemoteAddrModified();
				break;
			case 20:
				return $this->getPaymentThreshold();
				break;
			case 21:
				return $this->getTaxIdEnc();
				break;
			case 22:
				return $this->getTaxIdLastFour();
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
	 *
	 * @return    array an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true)
	{
		$keys = BusinessPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getEmail(),
			$keys[2] => $this->getCompanyDescription(),
			$keys[3] => $this->getCompanyUrl(),
			$keys[4] => $this->getCompanyName(),
			$keys[5] => $this->getAddressline1(),
			$keys[6] => $this->getAddressline2(),
			$keys[7] => $this->getCity(),
			$keys[8] => $this->getState(),
			$keys[9] => $this->getPostcode(),
			$keys[10] => $this->getCountry(),
			$keys[11] => $this->getTelephone(),
			$keys[12] => $this->getFax(),
			$keys[13] => $this->getIsActive(),
			$keys[14] => $this->getIsPremium(),
			$keys[15] => $this->getDateCreated(),
			$keys[16] => $this->getDateExpires(),
			$keys[17] => $this->getDateModified(),
			$keys[18] => $this->getRemoteAddrCreated(),
			$keys[19] => $this->getRemoteAddrModified(),
			$keys[20] => $this->getPaymentThreshold(),
			$keys[21] => $this->getTaxIdEnc(),
			$keys[22] => $this->getTaxIdLastFour(),
		);
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
		$pos = BusinessPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setEmail($value);
				break;
			case 2:
				$this->setCompanyDescription($value);
				break;
			case 3:
				$this->setCompanyUrl($value);
				break;
			case 4:
				$this->setCompanyName($value);
				break;
			case 5:
				$this->setAddressline1($value);
				break;
			case 6:
				$this->setAddressline2($value);
				break;
			case 7:
				$this->setCity($value);
				break;
			case 8:
				$this->setState($value);
				break;
			case 9:
				$this->setPostcode($value);
				break;
			case 10:
				$this->setCountry($value);
				break;
			case 11:
				$this->setTelephone($value);
				break;
			case 12:
				$this->setFax($value);
				break;
			case 13:
				$this->setIsActive($value);
				break;
			case 14:
				$this->setIsPremium($value);
				break;
			case 15:
				$this->setDateCreated($value);
				break;
			case 16:
				$this->setDateExpires($value);
				break;
			case 17:
				$this->setDateModified($value);
				break;
			case 18:
				$this->setRemoteAddrCreated($value);
				break;
			case 19:
				$this->setRemoteAddrModified($value);
				break;
			case 20:
				$this->setPaymentThreshold($value);
				break;
			case 21:
				$this->setTaxIdEnc($value);
				break;
			case 22:
				$this->setTaxIdLastFour($value);
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
		$keys = BusinessPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setEmail($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setCompanyDescription($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setCompanyUrl($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCompanyName($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setAddressline1($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setAddressline2($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setCity($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setState($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setPostcode($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setCountry($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setTelephone($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setFax($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setIsActive($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setIsPremium($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setDateCreated($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setDateExpires($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setDateModified($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setRemoteAddrCreated($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setRemoteAddrModified($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setPaymentThreshold($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setTaxIdEnc($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setTaxIdLastFour($arr[$keys[22]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(BusinessPeer::DATABASE_NAME);

		if ($this->isColumnModified(BusinessPeer::ID)) $criteria->add(BusinessPeer::ID, $this->id);
		if ($this->isColumnModified(BusinessPeer::EMAIL)) $criteria->add(BusinessPeer::EMAIL, $this->email);
		if ($this->isColumnModified(BusinessPeer::COMPANY_DESCRIPTION)) $criteria->add(BusinessPeer::COMPANY_DESCRIPTION, $this->company_description);
		if ($this->isColumnModified(BusinessPeer::COMPANY_URL)) $criteria->add(BusinessPeer::COMPANY_URL, $this->company_url);
		if ($this->isColumnModified(BusinessPeer::COMPANY_NAME)) $criteria->add(BusinessPeer::COMPANY_NAME, $this->company_name);
		if ($this->isColumnModified(BusinessPeer::ADDRESSLINE1)) $criteria->add(BusinessPeer::ADDRESSLINE1, $this->addressline1);
		if ($this->isColumnModified(BusinessPeer::ADDRESSLINE2)) $criteria->add(BusinessPeer::ADDRESSLINE2, $this->addressline2);
		if ($this->isColumnModified(BusinessPeer::CITY)) $criteria->add(BusinessPeer::CITY, $this->city);
		if ($this->isColumnModified(BusinessPeer::STATE)) $criteria->add(BusinessPeer::STATE, $this->state);
		if ($this->isColumnModified(BusinessPeer::POSTCODE)) $criteria->add(BusinessPeer::POSTCODE, $this->postcode);
		if ($this->isColumnModified(BusinessPeer::COUNTRY)) $criteria->add(BusinessPeer::COUNTRY, $this->country);
		if ($this->isColumnModified(BusinessPeer::TELEPHONE)) $criteria->add(BusinessPeer::TELEPHONE, $this->telephone);
		if ($this->isColumnModified(BusinessPeer::FAX)) $criteria->add(BusinessPeer::FAX, $this->fax);
		if ($this->isColumnModified(BusinessPeer::IS_ACTIVE)) $criteria->add(BusinessPeer::IS_ACTIVE, $this->is_active);
		if ($this->isColumnModified(BusinessPeer::IS_PREMIUM)) $criteria->add(BusinessPeer::IS_PREMIUM, $this->is_premium);
		if ($this->isColumnModified(BusinessPeer::DATE_CREATED)) $criteria->add(BusinessPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(BusinessPeer::DATE_EXPIRES)) $criteria->add(BusinessPeer::DATE_EXPIRES, $this->date_expires);
		if ($this->isColumnModified(BusinessPeer::DATE_MODIFIED)) $criteria->add(BusinessPeer::DATE_MODIFIED, $this->date_modified);
		if ($this->isColumnModified(BusinessPeer::REMOTE_ADDR_CREATED)) $criteria->add(BusinessPeer::REMOTE_ADDR_CREATED, $this->remote_addr_created);
		if ($this->isColumnModified(BusinessPeer::REMOTE_ADDR_MODIFIED)) $criteria->add(BusinessPeer::REMOTE_ADDR_MODIFIED, $this->remote_addr_modified);
		if ($this->isColumnModified(BusinessPeer::PAYMENT_THRESHOLD)) $criteria->add(BusinessPeer::PAYMENT_THRESHOLD, $this->payment_threshold);
		if ($this->isColumnModified(BusinessPeer::TAX_ID_ENC)) $criteria->add(BusinessPeer::TAX_ID_ENC, $this->tax_id_enc);
		if ($this->isColumnModified(BusinessPeer::TAX_ID_LAST_FOUR)) $criteria->add(BusinessPeer::TAX_ID_LAST_FOUR, $this->tax_id_last_four);

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
		$criteria = new Criteria(BusinessPeer::DATABASE_NAME);
		$criteria->add(BusinessPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of Business (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setEmail($this->email);
		$copyObj->setCompanyDescription($this->company_description);
		$copyObj->setCompanyUrl($this->company_url);
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
		$copyObj->setIsPremium($this->is_premium);
		$copyObj->setDateCreated($this->date_created);
		$copyObj->setDateExpires($this->date_expires);
		$copyObj->setDateModified($this->date_modified);
		$copyObj->setRemoteAddrCreated($this->remote_addr_created);
		$copyObj->setRemoteAddrModified($this->remote_addr_modified);
		$copyObj->setPaymentThreshold($this->payment_threshold);
		$copyObj->setTaxIdEnc($this->tax_id_enc);
		$copyObj->setTaxIdLastFour($this->tax_id_last_four);

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getAffiliatePayments() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addAffiliatePayment($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getBusinessUsers() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addBusinessUser($relObj->copy($deepCopy));
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
	 * @return     Business Clone of current object.
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
	 * @return     BusinessPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new BusinessPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears out the collAffiliatePayments collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addAffiliatePayments()
	 */
	public function clearAffiliatePayments()
	{
		$this->collAffiliatePayments = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collAffiliatePayments collection.
	 *
	 * By default this just sets the collAffiliatePayments collection to an empty array (like clearcollAffiliatePayments());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initAffiliatePayments()
	{
		$this->collAffiliatePayments = new PropelObjectCollection();
		$this->collAffiliatePayments->setModel('AffiliatePayment');
	}

	/**
	 * Gets an array of AffiliatePayment objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Business is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array AffiliatePayment[] List of AffiliatePayment objects
	 * @throws     PropelException
	 */
	public function getAffiliatePayments($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collAffiliatePayments || null !== $criteria) {
			if ($this->isNew() && null === $this->collAffiliatePayments) {
				// return empty collection
				$this->initAffiliatePayments();
			} else {
				$collAffiliatePayments = AffiliatePaymentQuery::create(null, $criteria)
					->filterByBusiness($this)
					->find($con);
				if (null !== $criteria) {
					return $collAffiliatePayments;
				}
				$this->collAffiliatePayments = $collAffiliatePayments;
			}
		}
		return $this->collAffiliatePayments;
	}

	/**
	 * Returns the number of related AffiliatePayment objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related AffiliatePayment objects.
	 * @throws     PropelException
	 */
	public function countAffiliatePayments(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collAffiliatePayments || null !== $criteria) {
			if ($this->isNew() && null === $this->collAffiliatePayments) {
				return 0;
			} else {
				$query = AffiliatePaymentQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByBusiness($this)
					->count($con);
			}
		} else {
			return count($this->collAffiliatePayments);
		}
	}

	/**
	 * Method called to associate a AffiliatePayment object to this object
	 * through the AffiliatePayment foreign key attribute.
	 *
	 * @param      AffiliatePayment $l AffiliatePayment
	 * @return     void
	 * @throws     PropelException
	 */
	public function addAffiliatePayment(AffiliatePayment $l)
	{
		if ($this->collAffiliatePayments === null) {
			$this->initAffiliatePayments();
		}
		if (!$this->collAffiliatePayments->contains($l)) { // only add it if the **same** object is not already associated
			$this->collAffiliatePayments[]= $l;
			$l->setBusiness($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Business is new, it will return
	 * an empty collection; or if this Business has previously
	 * been saved, it will retrieve related AffiliatePayments from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Business.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array AffiliatePayment[] List of AffiliatePayment objects
	 */
	public function getAffiliatePaymentsJoinUser($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = AffiliatePaymentQuery::create(null, $criteria);
		$query->joinWith('User', $join_behavior);

		return $this->getAffiliatePayments($query, $con);
	}

	/**
	 * Clears out the collBusinessUsers collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addBusinessUsers()
	 */
	public function clearBusinessUsers()
	{
		$this->collBusinessUsers = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collBusinessUsers collection.
	 *
	 * By default this just sets the collBusinessUsers collection to an empty array (like clearcollBusinessUsers());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initBusinessUsers()
	{
		$this->collBusinessUsers = new PropelObjectCollection();
		$this->collBusinessUsers->setModel('BusinessUser');
	}

	/**
	 * Gets an array of BusinessUser objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Business is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array BusinessUser[] List of BusinessUser objects
	 * @throws     PropelException
	 */
	public function getBusinessUsers($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collBusinessUsers || null !== $criteria) {
			if ($this->isNew() && null === $this->collBusinessUsers) {
				// return empty collection
				$this->initBusinessUsers();
			} else {
				$collBusinessUsers = BusinessUserQuery::create(null, $criteria)
					->filterByBusiness($this)
					->find($con);
				if (null !== $criteria) {
					return $collBusinessUsers;
				}
				$this->collBusinessUsers = $collBusinessUsers;
			}
		}
		return $this->collBusinessUsers;
	}

	/**
	 * Returns the number of related BusinessUser objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related BusinessUser objects.
	 * @throws     PropelException
	 */
	public function countBusinessUsers(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collBusinessUsers || null !== $criteria) {
			if ($this->isNew() && null === $this->collBusinessUsers) {
				return 0;
			} else {
				$query = BusinessUserQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByBusiness($this)
					->count($con);
			}
		} else {
			return count($this->collBusinessUsers);
		}
	}

	/**
	 * Method called to associate a BusinessUser object to this object
	 * through the BusinessUser foreign key attribute.
	 *
	 * @param      BusinessUser $l BusinessUser
	 * @return     void
	 * @throws     PropelException
	 */
	public function addBusinessUser(BusinessUser $l)
	{
		if ($this->collBusinessUsers === null) {
			$this->initBusinessUsers();
		}
		if (!$this->collBusinessUsers->contains($l)) { // only add it if the **same** object is not already associated
			$this->collBusinessUsers[]= $l;
			$l->setBusiness($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Business is new, it will return
	 * an empty collection; or if this Business has previously
	 * been saved, it will retrieve related BusinessUsers from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Business.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array BusinessUser[] List of BusinessUser objects
	 */
	public function getBusinessUsersJoinUser($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = BusinessUserQuery::create(null, $criteria);
		$query->joinWith('User', $join_behavior);

		return $this->getBusinessUsers($query, $con);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->email = null;
		$this->company_description = null;
		$this->company_url = null;
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
		$this->is_premium = null;
		$this->date_created = null;
		$this->date_expires = null;
		$this->date_modified = null;
		$this->remote_addr_created = null;
		$this->remote_addr_modified = null;
		$this->payment_threshold = null;
		$this->tax_id_enc = null;
		$this->tax_id_last_four = null;
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
			if ($this->collAffiliatePayments) {
				foreach ((array) $this->collAffiliatePayments as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collBusinessUsers) {
				foreach ((array) $this->collBusinessUsers as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		$this->collAffiliatePayments = null;
		$this->collBusinessUsers = null;
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

} // BaseBusiness
