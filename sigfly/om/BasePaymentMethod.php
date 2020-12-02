<?php


/**
 * Base class that represents a row from the 'payment_method' table.
 *
 * 
 *
 * @package    propel.generator.sigfly.om
 */
abstract class BasePaymentMethod extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'PaymentMethodPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        PaymentMethodPeer
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
	 * The value for the type field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $type;

	/**
	 * The value for the number_enc field.
	 * @var        resource
	 */
	protected $number_enc;

	/**
	 * The value for the number_last_four field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $number_last_four;

	/**
	 * The value for the ccv field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $ccv;

	/**
	 * The value for the name field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $name;

	/**
	 * The value for the addressline1 field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $addressline1;

	/**
	 * The value for the addressline2 field.
	 * Note: this column has a database default value of: ''
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
	 * The value for the expiration_month field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $expiration_month;

	/**
	 * The value for the expiration_year field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $expiration_year;

	/**
	 * The value for the telephone_day field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $telephone_day;

	/**
	 * The value for the telephone_eve field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $telephone_eve;

	/**
	 * The value for the is_active field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $is_active;

	/**
	 * The value for the date_created field.
	 * @var        string
	 */
	protected $date_created;

	/**
	 * The value for the remote_addr field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $remote_addr;

	/**
	 * @var        User
	 */
	protected $aUser;

	/**
	 * @var        array Payment[] Collection to store aggregation of Payment objects.
	 */
	protected $collPayments;

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
		$this->type = '';
		$this->number_last_four = '';
		$this->ccv = '';
		$this->name = '';
		$this->addressline1 = '';
		$this->addressline2 = '';
		$this->city = '';
		$this->state = '';
		$this->postcode = '';
		$this->expiration_month = 0;
		$this->expiration_year = 0;
		$this->telephone_day = '';
		$this->telephone_eve = '';
		$this->is_active = 0;
		$this->remote_addr = '';
	}

	/**
	 * Initializes internal state of BasePaymentMethod object.
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
	 * Get the [type] column value.
	 * 
	 * @return     string
	 */
	public function getType()
	{
		return $this->type;
	}

	/**
	 * Get the [number_enc] column value.
	 * 
	 * @return     resource
	 */
	public function getNumberEnc()
	{
		return $this->number_enc;
	}

	/**
	 * Get the [number_last_four] column value.
	 * 
	 * @return     string
	 */
	public function getNumberLastFour()
	{
		return $this->number_last_four;
	}

	/**
	 * Get the [ccv] column value.
	 * 
	 * @return     string
	 */
	public function getCcv()
	{
		return $this->ccv;
	}

	/**
	 * Get the [name] column value.
	 * 
	 * @return     string
	 */
	public function getName()
	{
		return $this->name;
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
	 * Get the [expiration_month] column value.
	 * 
	 * @return     int
	 */
	public function getExpirationMonth()
	{
		return $this->expiration_month;
	}

	/**
	 * Get the [expiration_year] column value.
	 * 
	 * @return     int
	 */
	public function getExpirationYear()
	{
		return $this->expiration_year;
	}

	/**
	 * Get the [telephone_day] column value.
	 * 
	 * @return     string
	 */
	public function getTelephoneDay()
	{
		return $this->telephone_day;
	}

	/**
	 * Get the [telephone_eve] column value.
	 * 
	 * @return     string
	 */
	public function getTelephoneEve()
	{
		return $this->telephone_eve;
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
	 * Get the [remote_addr] column value.
	 * 
	 * @return     string
	 */
	public function getRemoteAddr()
	{
		return $this->remote_addr;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     PaymentMethod The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = PaymentMethodPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [user_id] column.
	 * 
	 * @param      int $v new value
	 * @return     PaymentMethod The current object (for fluent API support)
	 */
	public function setUserId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->user_id !== $v || $this->isNew()) {
			$this->user_id = $v;
			$this->modifiedColumns[] = PaymentMethodPeer::USER_ID;
		}

		if ($this->aUser !== null && $this->aUser->getId() !== $v) {
			$this->aUser = null;
		}

		return $this;
	} // setUserId()

	/**
	 * Set the value of [type] column.
	 * 
	 * @param      string $v new value
	 * @return     PaymentMethod The current object (for fluent API support)
	 */
	public function setType($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->type !== $v || $this->isNew()) {
			$this->type = $v;
			$this->modifiedColumns[] = PaymentMethodPeer::TYPE;
		}

		return $this;
	} // setType()

	/**
	 * Set the value of [number_enc] column.
	 * 
	 * @param      resource $v new value
	 * @return     PaymentMethod The current object (for fluent API support)
	 */
	public function setNumberEnc($v)
	{
		// Because BLOB columns are streams in PDO we have to assume that they are
		// always modified when a new value is passed in.  For example, the contents
		// of the stream itself may have changed externally.
		if (!is_resource($v) && $v !== null) {
			$this->number_enc = fopen('php://memory', 'r+');
			fwrite($this->number_enc, $v);
			rewind($this->number_enc);
		} else { // it's already a stream
			$this->number_enc = $v;
		}
		$this->modifiedColumns[] = PaymentMethodPeer::NUMBER_ENC;

		return $this;
	} // setNumberEnc()

	/**
	 * Set the value of [number_last_four] column.
	 * 
	 * @param      string $v new value
	 * @return     PaymentMethod The current object (for fluent API support)
	 */
	public function setNumberLastFour($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->number_last_four !== $v || $this->isNew()) {
			$this->number_last_four = $v;
			$this->modifiedColumns[] = PaymentMethodPeer::NUMBER_LAST_FOUR;
		}

		return $this;
	} // setNumberLastFour()

	/**
	 * Set the value of [ccv] column.
	 * 
	 * @param      string $v new value
	 * @return     PaymentMethod The current object (for fluent API support)
	 */
	public function setCcv($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->ccv !== $v || $this->isNew()) {
			$this->ccv = $v;
			$this->modifiedColumns[] = PaymentMethodPeer::CCV;
		}

		return $this;
	} // setCcv()

	/**
	 * Set the value of [name] column.
	 * 
	 * @param      string $v new value
	 * @return     PaymentMethod The current object (for fluent API support)
	 */
	public function setName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->name !== $v || $this->isNew()) {
			$this->name = $v;
			$this->modifiedColumns[] = PaymentMethodPeer::NAME;
		}

		return $this;
	} // setName()

	/**
	 * Set the value of [addressline1] column.
	 * 
	 * @param      string $v new value
	 * @return     PaymentMethod The current object (for fluent API support)
	 */
	public function setAddressline1($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->addressline1 !== $v || $this->isNew()) {
			$this->addressline1 = $v;
			$this->modifiedColumns[] = PaymentMethodPeer::ADDRESSLINE1;
		}

		return $this;
	} // setAddressline1()

	/**
	 * Set the value of [addressline2] column.
	 * 
	 * @param      string $v new value
	 * @return     PaymentMethod The current object (for fluent API support)
	 */
	public function setAddressline2($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->addressline2 !== $v || $this->isNew()) {
			$this->addressline2 = $v;
			$this->modifiedColumns[] = PaymentMethodPeer::ADDRESSLINE2;
		}

		return $this;
	} // setAddressline2()

	/**
	 * Set the value of [city] column.
	 * 
	 * @param      string $v new value
	 * @return     PaymentMethod The current object (for fluent API support)
	 */
	public function setCity($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->city !== $v || $this->isNew()) {
			$this->city = $v;
			$this->modifiedColumns[] = PaymentMethodPeer::CITY;
		}

		return $this;
	} // setCity()

	/**
	 * Set the value of [state] column.
	 * 
	 * @param      string $v new value
	 * @return     PaymentMethod The current object (for fluent API support)
	 */
	public function setState($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->state !== $v || $this->isNew()) {
			$this->state = $v;
			$this->modifiedColumns[] = PaymentMethodPeer::STATE;
		}

		return $this;
	} // setState()

	/**
	 * Set the value of [postcode] column.
	 * 
	 * @param      string $v new value
	 * @return     PaymentMethod The current object (for fluent API support)
	 */
	public function setPostcode($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->postcode !== $v || $this->isNew()) {
			$this->postcode = $v;
			$this->modifiedColumns[] = PaymentMethodPeer::POSTCODE;
		}

		return $this;
	} // setPostcode()

	/**
	 * Set the value of [expiration_month] column.
	 * 
	 * @param      int $v new value
	 * @return     PaymentMethod The current object (for fluent API support)
	 */
	public function setExpirationMonth($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->expiration_month !== $v || $this->isNew()) {
			$this->expiration_month = $v;
			$this->modifiedColumns[] = PaymentMethodPeer::EXPIRATION_MONTH;
		}

		return $this;
	} // setExpirationMonth()

	/**
	 * Set the value of [expiration_year] column.
	 * 
	 * @param      int $v new value
	 * @return     PaymentMethod The current object (for fluent API support)
	 */
	public function setExpirationYear($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->expiration_year !== $v || $this->isNew()) {
			$this->expiration_year = $v;
			$this->modifiedColumns[] = PaymentMethodPeer::EXPIRATION_YEAR;
		}

		return $this;
	} // setExpirationYear()

	/**
	 * Set the value of [telephone_day] column.
	 * 
	 * @param      string $v new value
	 * @return     PaymentMethod The current object (for fluent API support)
	 */
	public function setTelephoneDay($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->telephone_day !== $v || $this->isNew()) {
			$this->telephone_day = $v;
			$this->modifiedColumns[] = PaymentMethodPeer::TELEPHONE_DAY;
		}

		return $this;
	} // setTelephoneDay()

	/**
	 * Set the value of [telephone_eve] column.
	 * 
	 * @param      string $v new value
	 * @return     PaymentMethod The current object (for fluent API support)
	 */
	public function setTelephoneEve($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->telephone_eve !== $v || $this->isNew()) {
			$this->telephone_eve = $v;
			$this->modifiedColumns[] = PaymentMethodPeer::TELEPHONE_EVE;
		}

		return $this;
	} // setTelephoneEve()

	/**
	 * Set the value of [is_active] column.
	 * 
	 * @param      int $v new value
	 * @return     PaymentMethod The current object (for fluent API support)
	 */
	public function setIsActive($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->is_active !== $v || $this->isNew()) {
			$this->is_active = $v;
			$this->modifiedColumns[] = PaymentMethodPeer::IS_ACTIVE;
		}

		return $this;
	} // setIsActive()

	/**
	 * Sets the value of [date_created] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     PaymentMethod The current object (for fluent API support)
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
				$this->modifiedColumns[] = PaymentMethodPeer::DATE_CREATED;
			}
		} // if either are not null

		return $this;
	} // setDateCreated()

	/**
	 * Set the value of [remote_addr] column.
	 * 
	 * @param      string $v new value
	 * @return     PaymentMethod The current object (for fluent API support)
	 */
	public function setRemoteAddr($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->remote_addr !== $v || $this->isNew()) {
			$this->remote_addr = $v;
			$this->modifiedColumns[] = PaymentMethodPeer::REMOTE_ADDR;
		}

		return $this;
	} // setRemoteAddr()

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

			if ($this->type !== '') {
				return false;
			}

			if ($this->number_last_four !== '') {
				return false;
			}

			if ($this->ccv !== '') {
				return false;
			}

			if ($this->name !== '') {
				return false;
			}

			if ($this->addressline1 !== '') {
				return false;
			}

			if ($this->addressline2 !== '') {
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

			if ($this->expiration_month !== 0) {
				return false;
			}

			if ($this->expiration_year !== 0) {
				return false;
			}

			if ($this->telephone_day !== '') {
				return false;
			}

			if ($this->telephone_eve !== '') {
				return false;
			}

			if ($this->is_active !== 0) {
				return false;
			}

			if ($this->remote_addr !== '') {
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
			$this->type = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			if ($row[$startcol + 3] !== null) {
				$this->number_enc = fopen('php://memory', 'r+');
				fwrite($this->number_enc, $row[$startcol + 3]);
				rewind($this->number_enc);
			} else {
				$this->number_enc = null;
			}
			$this->number_last_four = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->ccv = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->name = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->addressline1 = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->addressline2 = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->city = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->state = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->postcode = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->expiration_month = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
			$this->expiration_year = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
			$this->telephone_day = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
			$this->telephone_eve = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
			$this->is_active = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
			$this->date_created = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
			$this->remote_addr = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 19; // 19 = PaymentMethodPeer::NUM_COLUMNS - PaymentMethodPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating PaymentMethod object", $e);
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
			$con = Propel::getConnection(PaymentMethodPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = PaymentMethodPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?
			$this->aUser = null;
			$this->collPayments = null;
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
			$con = Propel::getConnection(PaymentMethodPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				PaymentMethodQuery::create()
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
			$con = Propel::getConnection(PaymentMethodPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				PaymentMethodPeer::addInstanceToPool($this);
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

			if ($this->isNew() ) {
				$this->modifiedColumns[] = PaymentMethodPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(PaymentMethodPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.PaymentMethodPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows += 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows += PaymentMethodPeer::doUpdate($this, $con);
				}

				// Rewind the number_enc LOB column, since PDO does not rewind after inserting value.
				if ($this->number_enc !== null && is_resource($this->number_enc)) {
					rewind($this->number_enc);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collPayments !== null) {
				foreach ($this->collPayments as $referrerFK) {
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


			if (($retval = PaymentMethodPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collPayments !== null) {
					foreach ($this->collPayments as $referrerFK) {
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
		$pos = PaymentMethodPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getType();
				break;
			case 3:
				return $this->getNumberEnc();
				break;
			case 4:
				return $this->getNumberLastFour();
				break;
			case 5:
				return $this->getCcv();
				break;
			case 6:
				return $this->getName();
				break;
			case 7:
				return $this->getAddressline1();
				break;
			case 8:
				return $this->getAddressline2();
				break;
			case 9:
				return $this->getCity();
				break;
			case 10:
				return $this->getState();
				break;
			case 11:
				return $this->getPostcode();
				break;
			case 12:
				return $this->getExpirationMonth();
				break;
			case 13:
				return $this->getExpirationYear();
				break;
			case 14:
				return $this->getTelephoneDay();
				break;
			case 15:
				return $this->getTelephoneEve();
				break;
			case 16:
				return $this->getIsActive();
				break;
			case 17:
				return $this->getDateCreated();
				break;
			case 18:
				return $this->getRemoteAddr();
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
		$keys = PaymentMethodPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getUserId(),
			$keys[2] => $this->getType(),
			$keys[3] => $this->getNumberEnc(),
			$keys[4] => $this->getNumberLastFour(),
			$keys[5] => $this->getCcv(),
			$keys[6] => $this->getName(),
			$keys[7] => $this->getAddressline1(),
			$keys[8] => $this->getAddressline2(),
			$keys[9] => $this->getCity(),
			$keys[10] => $this->getState(),
			$keys[11] => $this->getPostcode(),
			$keys[12] => $this->getExpirationMonth(),
			$keys[13] => $this->getExpirationYear(),
			$keys[14] => $this->getTelephoneDay(),
			$keys[15] => $this->getTelephoneEve(),
			$keys[16] => $this->getIsActive(),
			$keys[17] => $this->getDateCreated(),
			$keys[18] => $this->getRemoteAddr(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aUser) {
				$result['User'] = $this->aUser->toArray($keyType, $includeLazyLoadColumns, true);
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
		$pos = PaymentMethodPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setType($value);
				break;
			case 3:
				$this->setNumberEnc($value);
				break;
			case 4:
				$this->setNumberLastFour($value);
				break;
			case 5:
				$this->setCcv($value);
				break;
			case 6:
				$this->setName($value);
				break;
			case 7:
				$this->setAddressline1($value);
				break;
			case 8:
				$this->setAddressline2($value);
				break;
			case 9:
				$this->setCity($value);
				break;
			case 10:
				$this->setState($value);
				break;
			case 11:
				$this->setPostcode($value);
				break;
			case 12:
				$this->setExpirationMonth($value);
				break;
			case 13:
				$this->setExpirationYear($value);
				break;
			case 14:
				$this->setTelephoneDay($value);
				break;
			case 15:
				$this->setTelephoneEve($value);
				break;
			case 16:
				$this->setIsActive($value);
				break;
			case 17:
				$this->setDateCreated($value);
				break;
			case 18:
				$this->setRemoteAddr($value);
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
		$keys = PaymentMethodPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setUserId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setType($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setNumberEnc($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setNumberLastFour($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCcv($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setName($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setAddressline1($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setAddressline2($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setCity($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setState($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setPostcode($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setExpirationMonth($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setExpirationYear($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setTelephoneDay($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setTelephoneEve($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setIsActive($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setDateCreated($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setRemoteAddr($arr[$keys[18]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(PaymentMethodPeer::DATABASE_NAME);

		if ($this->isColumnModified(PaymentMethodPeer::ID)) $criteria->add(PaymentMethodPeer::ID, $this->id);
		if ($this->isColumnModified(PaymentMethodPeer::USER_ID)) $criteria->add(PaymentMethodPeer::USER_ID, $this->user_id);
		if ($this->isColumnModified(PaymentMethodPeer::TYPE)) $criteria->add(PaymentMethodPeer::TYPE, $this->type);
		if ($this->isColumnModified(PaymentMethodPeer::NUMBER_ENC)) $criteria->add(PaymentMethodPeer::NUMBER_ENC, $this->number_enc);
		if ($this->isColumnModified(PaymentMethodPeer::NUMBER_LAST_FOUR)) $criteria->add(PaymentMethodPeer::NUMBER_LAST_FOUR, $this->number_last_four);
		if ($this->isColumnModified(PaymentMethodPeer::CCV)) $criteria->add(PaymentMethodPeer::CCV, $this->ccv);
		if ($this->isColumnModified(PaymentMethodPeer::NAME)) $criteria->add(PaymentMethodPeer::NAME, $this->name);
		if ($this->isColumnModified(PaymentMethodPeer::ADDRESSLINE1)) $criteria->add(PaymentMethodPeer::ADDRESSLINE1, $this->addressline1);
		if ($this->isColumnModified(PaymentMethodPeer::ADDRESSLINE2)) $criteria->add(PaymentMethodPeer::ADDRESSLINE2, $this->addressline2);
		if ($this->isColumnModified(PaymentMethodPeer::CITY)) $criteria->add(PaymentMethodPeer::CITY, $this->city);
		if ($this->isColumnModified(PaymentMethodPeer::STATE)) $criteria->add(PaymentMethodPeer::STATE, $this->state);
		if ($this->isColumnModified(PaymentMethodPeer::POSTCODE)) $criteria->add(PaymentMethodPeer::POSTCODE, $this->postcode);
		if ($this->isColumnModified(PaymentMethodPeer::EXPIRATION_MONTH)) $criteria->add(PaymentMethodPeer::EXPIRATION_MONTH, $this->expiration_month);
		if ($this->isColumnModified(PaymentMethodPeer::EXPIRATION_YEAR)) $criteria->add(PaymentMethodPeer::EXPIRATION_YEAR, $this->expiration_year);
		if ($this->isColumnModified(PaymentMethodPeer::TELEPHONE_DAY)) $criteria->add(PaymentMethodPeer::TELEPHONE_DAY, $this->telephone_day);
		if ($this->isColumnModified(PaymentMethodPeer::TELEPHONE_EVE)) $criteria->add(PaymentMethodPeer::TELEPHONE_EVE, $this->telephone_eve);
		if ($this->isColumnModified(PaymentMethodPeer::IS_ACTIVE)) $criteria->add(PaymentMethodPeer::IS_ACTIVE, $this->is_active);
		if ($this->isColumnModified(PaymentMethodPeer::DATE_CREATED)) $criteria->add(PaymentMethodPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(PaymentMethodPeer::REMOTE_ADDR)) $criteria->add(PaymentMethodPeer::REMOTE_ADDR, $this->remote_addr);

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
		$criteria = new Criteria(PaymentMethodPeer::DATABASE_NAME);
		$criteria->add(PaymentMethodPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of PaymentMethod (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setUserId($this->user_id);
		$copyObj->setType($this->type);
		$copyObj->setNumberEnc($this->number_enc);
		$copyObj->setNumberLastFour($this->number_last_four);
		$copyObj->setCcv($this->ccv);
		$copyObj->setName($this->name);
		$copyObj->setAddressline1($this->addressline1);
		$copyObj->setAddressline2($this->addressline2);
		$copyObj->setCity($this->city);
		$copyObj->setState($this->state);
		$copyObj->setPostcode($this->postcode);
		$copyObj->setExpirationMonth($this->expiration_month);
		$copyObj->setExpirationYear($this->expiration_year);
		$copyObj->setTelephoneDay($this->telephone_day);
		$copyObj->setTelephoneEve($this->telephone_eve);
		$copyObj->setIsActive($this->is_active);
		$copyObj->setDateCreated($this->date_created);
		$copyObj->setRemoteAddr($this->remote_addr);

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getPayments() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addPayment($relObj->copy($deepCopy));
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
	 * @return     PaymentMethod Clone of current object.
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
	 * @return     PaymentMethodPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new PaymentMethodPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a User object.
	 *
	 * @param      User $v
	 * @return     PaymentMethod The current object (for fluent API support)
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
			$v->addPaymentMethod($this);
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
				 $this->aUser->addPaymentMethods($this);
			 */
		}
		return $this->aUser;
	}

	/**
	 * Clears out the collPayments collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addPayments()
	 */
	public function clearPayments()
	{
		$this->collPayments = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collPayments collection.
	 *
	 * By default this just sets the collPayments collection to an empty array (like clearcollPayments());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initPayments()
	{
		$this->collPayments = new PropelObjectCollection();
		$this->collPayments->setModel('Payment');
	}

	/**
	 * Gets an array of Payment objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this PaymentMethod is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Payment[] List of Payment objects
	 * @throws     PropelException
	 */
	public function getPayments($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collPayments || null !== $criteria) {
			if ($this->isNew() && null === $this->collPayments) {
				// return empty collection
				$this->initPayments();
			} else {
				$collPayments = PaymentQuery::create(null, $criteria)
					->filterByPaymentMethod($this)
					->find($con);
				if (null !== $criteria) {
					return $collPayments;
				}
				$this->collPayments = $collPayments;
			}
		}
		return $this->collPayments;
	}

	/**
	 * Returns the number of related Payment objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Payment objects.
	 * @throws     PropelException
	 */
	public function countPayments(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collPayments || null !== $criteria) {
			if ($this->isNew() && null === $this->collPayments) {
				return 0;
			} else {
				$query = PaymentQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByPaymentMethod($this)
					->count($con);
			}
		} else {
			return count($this->collPayments);
		}
	}

	/**
	 * Method called to associate a Payment object to this object
	 * through the Payment foreign key attribute.
	 *
	 * @param      Payment $l Payment
	 * @return     void
	 * @throws     PropelException
	 */
	public function addPayment(Payment $l)
	{
		if ($this->collPayments === null) {
			$this->initPayments();
		}
		if (!$this->collPayments->contains($l)) { // only add it if the **same** object is not already associated
			$this->collPayments[]= $l;
			$l->setPaymentMethod($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this PaymentMethod is new, it will return
	 * an empty collection; or if this PaymentMethod has previously
	 * been saved, it will retrieve related Payments from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in PaymentMethod.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Payment[] List of Payment objects
	 */
	public function getPaymentsJoinPurchaseOrder($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = PaymentQuery::create(null, $criteria);
		$query->joinWith('PurchaseOrder', $join_behavior);

		return $this->getPayments($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this PaymentMethod is new, it will return
	 * an empty collection; or if this PaymentMethod has previously
	 * been saved, it will retrieve related Payments from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in PaymentMethod.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Payment[] List of Payment objects
	 */
	public function getPaymentsJoinUser($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = PaymentQuery::create(null, $criteria);
		$query->joinWith('User', $join_behavior);

		return $this->getPayments($query, $con);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->user_id = null;
		$this->type = null;
		$this->number_enc = null;
		$this->number_last_four = null;
		$this->ccv = null;
		$this->name = null;
		$this->addressline1 = null;
		$this->addressline2 = null;
		$this->city = null;
		$this->state = null;
		$this->postcode = null;
		$this->expiration_month = null;
		$this->expiration_year = null;
		$this->telephone_day = null;
		$this->telephone_eve = null;
		$this->is_active = null;
		$this->date_created = null;
		$this->remote_addr = null;
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
			if ($this->collPayments) {
				foreach ((array) $this->collPayments as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		$this->collPayments = null;
		$this->aUser = null;
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

} // BasePaymentMethod
