<?php


/**
 * Base class that represents a row from the 'payment' table.
 *
 * 
 *
 * @package    propel.generator.komideals.om
 */
abstract class BasePayment extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'PaymentPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        PaymentPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the code field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $code;

	/**
	 * The value for the oid field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $oid;

	/**
	 * The value for the quantity field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $quantity;

	/**
	 * The value for the amount field.
	 * Note: this column has a database default value of: 0
	 * @var        double
	 */
	protected $amount;

	/**
	 * The value for the comment field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $comment;

	/**
	 * The value for the user_id field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $user_id;

	/**
	 * The value for the payment_method_id field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $payment_method_id;

	/**
	 * The value for the purchase_order_id field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $purchase_order_id;

	/**
	 * The value for the is_declined field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $is_declined;

	/**
	 * The value for the is_paid field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $is_paid;

	/**
	 * The value for the is_recurring field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $is_recurring;

	/**
	 * The value for the is_active field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $is_active;

	/**
	 * The value for the date_paid field.
	 * @var        string
	 */
	protected $date_paid;

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
	 * @var        PurchaseOrder
	 */
	protected $aPurchaseOrder;

	/**
	 * @var        User
	 */
	protected $aUser;

	/**
	 * @var        PaymentMethod
	 */
	protected $aPaymentMethod;

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
		$this->code = '';
		$this->oid = '';
		$this->quantity = 0;
		$this->amount = 0;
		$this->comment = '';
		$this->user_id = 0;
		$this->payment_method_id = 0;
		$this->purchase_order_id = 0;
		$this->is_declined = 0;
		$this->is_paid = 0;
		$this->is_recurring = 0;
		$this->is_active = 0;
		$this->remote_addr = '';
	}

	/**
	 * Initializes internal state of BasePayment object.
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
	 * Get the [code] column value.
	 * 
	 * @return     string
	 */
	public function getCode()
	{
		return $this->code;
	}

	/**
	 * Get the [oid] column value.
	 * 
	 * @return     string
	 */
	public function getOid()
	{
		return $this->oid;
	}

	/**
	 * Get the [quantity] column value.
	 * 
	 * @return     int
	 */
	public function getQuantity()
	{
		return $this->quantity;
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
	 * Get the [comment] column value.
	 * 
	 * @return     string
	 */
	public function getComment()
	{
		return $this->comment;
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
	 * Get the [payment_method_id] column value.
	 * 
	 * @return     int
	 */
	public function getPaymentMethodId()
	{
		return $this->payment_method_id;
	}

	/**
	 * Get the [purchase_order_id] column value.
	 * 
	 * @return     int
	 */
	public function getPurchaseOrderId()
	{
		return $this->purchase_order_id;
	}

	/**
	 * Get the [is_declined] column value.
	 * 
	 * @return     int
	 */
	public function getIsDeclined()
	{
		return $this->is_declined;
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
	 * Get the [is_recurring] column value.
	 * 
	 * @return     int
	 */
	public function getIsRecurring()
	{
		return $this->is_recurring;
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
	 * Get the [optionally formatted] temporal [date_paid] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDatePaid($format = 'Y-m-d H:i:s')
	{
		if ($this->date_paid === null) {
			return null;
		}


		if ($this->date_paid === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->date_paid);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_paid, true), $x);
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
	 * @return     Payment The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = PaymentPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [code] column.
	 * 
	 * @param      string $v new value
	 * @return     Payment The current object (for fluent API support)
	 */
	public function setCode($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->code !== $v || $this->isNew()) {
			$this->code = $v;
			$this->modifiedColumns[] = PaymentPeer::CODE;
		}

		return $this;
	} // setCode()

	/**
	 * Set the value of [oid] column.
	 * 
	 * @param      string $v new value
	 * @return     Payment The current object (for fluent API support)
	 */
	public function setOid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->oid !== $v || $this->isNew()) {
			$this->oid = $v;
			$this->modifiedColumns[] = PaymentPeer::OID;
		}

		return $this;
	} // setOid()

	/**
	 * Set the value of [quantity] column.
	 * 
	 * @param      int $v new value
	 * @return     Payment The current object (for fluent API support)
	 */
	public function setQuantity($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->quantity !== $v || $this->isNew()) {
			$this->quantity = $v;
			$this->modifiedColumns[] = PaymentPeer::QUANTITY;
		}

		return $this;
	} // setQuantity()

	/**
	 * Set the value of [amount] column.
	 * 
	 * @param      double $v new value
	 * @return     Payment The current object (for fluent API support)
	 */
	public function setAmount($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->amount !== $v || $this->isNew()) {
			$this->amount = $v;
			$this->modifiedColumns[] = PaymentPeer::AMOUNT;
		}

		return $this;
	} // setAmount()

	/**
	 * Set the value of [comment] column.
	 * 
	 * @param      string $v new value
	 * @return     Payment The current object (for fluent API support)
	 */
	public function setComment($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->comment !== $v || $this->isNew()) {
			$this->comment = $v;
			$this->modifiedColumns[] = PaymentPeer::COMMENT;
		}

		return $this;
	} // setComment()

	/**
	 * Set the value of [user_id] column.
	 * 
	 * @param      int $v new value
	 * @return     Payment The current object (for fluent API support)
	 */
	public function setUserId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->user_id !== $v || $this->isNew()) {
			$this->user_id = $v;
			$this->modifiedColumns[] = PaymentPeer::USER_ID;
		}

		if ($this->aUser !== null && $this->aUser->getId() !== $v) {
			$this->aUser = null;
		}

		return $this;
	} // setUserId()

	/**
	 * Set the value of [payment_method_id] column.
	 * 
	 * @param      int $v new value
	 * @return     Payment The current object (for fluent API support)
	 */
	public function setPaymentMethodId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->payment_method_id !== $v || $this->isNew()) {
			$this->payment_method_id = $v;
			$this->modifiedColumns[] = PaymentPeer::PAYMENT_METHOD_ID;
		}

		if ($this->aPaymentMethod !== null && $this->aPaymentMethod->getId() !== $v) {
			$this->aPaymentMethod = null;
		}

		return $this;
	} // setPaymentMethodId()

	/**
	 * Set the value of [purchase_order_id] column.
	 * 
	 * @param      int $v new value
	 * @return     Payment The current object (for fluent API support)
	 */
	public function setPurchaseOrderId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->purchase_order_id !== $v || $this->isNew()) {
			$this->purchase_order_id = $v;
			$this->modifiedColumns[] = PaymentPeer::PURCHASE_ORDER_ID;
		}

		if ($this->aPurchaseOrder !== null && $this->aPurchaseOrder->getId() !== $v) {
			$this->aPurchaseOrder = null;
		}

		return $this;
	} // setPurchaseOrderId()

	/**
	 * Set the value of [is_declined] column.
	 * 
	 * @param      int $v new value
	 * @return     Payment The current object (for fluent API support)
	 */
	public function setIsDeclined($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->is_declined !== $v || $this->isNew()) {
			$this->is_declined = $v;
			$this->modifiedColumns[] = PaymentPeer::IS_DECLINED;
		}

		return $this;
	} // setIsDeclined()

	/**
	 * Set the value of [is_paid] column.
	 * 
	 * @param      int $v new value
	 * @return     Payment The current object (for fluent API support)
	 */
	public function setIsPaid($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->is_paid !== $v || $this->isNew()) {
			$this->is_paid = $v;
			$this->modifiedColumns[] = PaymentPeer::IS_PAID;
		}

		return $this;
	} // setIsPaid()

	/**
	 * Set the value of [is_recurring] column.
	 * 
	 * @param      int $v new value
	 * @return     Payment The current object (for fluent API support)
	 */
	public function setIsRecurring($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->is_recurring !== $v || $this->isNew()) {
			$this->is_recurring = $v;
			$this->modifiedColumns[] = PaymentPeer::IS_RECURRING;
		}

		return $this;
	} // setIsRecurring()

	/**
	 * Set the value of [is_active] column.
	 * 
	 * @param      int $v new value
	 * @return     Payment The current object (for fluent API support)
	 */
	public function setIsActive($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->is_active !== $v || $this->isNew()) {
			$this->is_active = $v;
			$this->modifiedColumns[] = PaymentPeer::IS_ACTIVE;
		}

		return $this;
	} // setIsActive()

	/**
	 * Sets the value of [date_paid] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Payment The current object (for fluent API support)
	 */
	public function setDatePaid($v)
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

		if ( $this->date_paid !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->date_paid !== null && $tmpDt = new DateTime($this->date_paid)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->date_paid = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = PaymentPeer::DATE_PAID;
			}
		} // if either are not null

		return $this;
	} // setDatePaid()

	/**
	 * Sets the value of [date_created] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Payment The current object (for fluent API support)
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
				$this->modifiedColumns[] = PaymentPeer::DATE_CREATED;
			}
		} // if either are not null

		return $this;
	} // setDateCreated()

	/**
	 * Set the value of [remote_addr] column.
	 * 
	 * @param      string $v new value
	 * @return     Payment The current object (for fluent API support)
	 */
	public function setRemoteAddr($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->remote_addr !== $v || $this->isNew()) {
			$this->remote_addr = $v;
			$this->modifiedColumns[] = PaymentPeer::REMOTE_ADDR;
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
			if ($this->code !== '') {
				return false;
			}

			if ($this->oid !== '') {
				return false;
			}

			if ($this->quantity !== 0) {
				return false;
			}

			if ($this->amount !== 0) {
				return false;
			}

			if ($this->comment !== '') {
				return false;
			}

			if ($this->user_id !== 0) {
				return false;
			}

			if ($this->payment_method_id !== 0) {
				return false;
			}

			if ($this->purchase_order_id !== 0) {
				return false;
			}

			if ($this->is_declined !== 0) {
				return false;
			}

			if ($this->is_paid !== 0) {
				return false;
			}

			if ($this->is_recurring !== 0) {
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
			$this->code = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->oid = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->quantity = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->amount = ($row[$startcol + 4] !== null) ? (double) $row[$startcol + 4] : null;
			$this->comment = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->user_id = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			$this->payment_method_id = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
			$this->purchase_order_id = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
			$this->is_declined = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
			$this->is_paid = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
			$this->is_recurring = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
			$this->is_active = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
			$this->date_paid = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
			$this->date_created = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
			$this->remote_addr = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 16; // 16 = PaymentPeer::NUM_COLUMNS - PaymentPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating Payment object", $e);
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
		if ($this->aPaymentMethod !== null && $this->payment_method_id !== $this->aPaymentMethod->getId()) {
			$this->aPaymentMethod = null;
		}
		if ($this->aPurchaseOrder !== null && $this->purchase_order_id !== $this->aPurchaseOrder->getId()) {
			$this->aPurchaseOrder = null;
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
			$con = Propel::getConnection(PaymentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = PaymentPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?
			$this->aPurchaseOrder = null;
			$this->aUser = null;
			$this->aPaymentMethod = null;
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
			$con = Propel::getConnection(PaymentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				PaymentQuery::create()
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
			$con = Propel::getConnection(PaymentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				PaymentPeer::addInstanceToPool($this);
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

			if ($this->aPurchaseOrder !== null) {
				if ($this->aPurchaseOrder->isModified() || $this->aPurchaseOrder->isNew()) {
					$affectedRows += $this->aPurchaseOrder->save($con);
				}
				$this->setPurchaseOrder($this->aPurchaseOrder);
			}

			if ($this->aUser !== null) {
				if ($this->aUser->isModified() || $this->aUser->isNew()) {
					$affectedRows += $this->aUser->save($con);
				}
				$this->setUser($this->aUser);
			}

			if ($this->aPaymentMethod !== null) {
				if ($this->aPaymentMethod->isModified() || $this->aPaymentMethod->isNew()) {
					$affectedRows += $this->aPaymentMethod->save($con);
				}
				$this->setPaymentMethod($this->aPaymentMethod);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = PaymentPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(PaymentPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.PaymentPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows += 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows += PaymentPeer::doUpdate($this, $con);
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

			if ($this->aPurchaseOrder !== null) {
				if (!$this->aPurchaseOrder->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aPurchaseOrder->getValidationFailures());
				}
			}

			if ($this->aUser !== null) {
				if (!$this->aUser->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aUser->getValidationFailures());
				}
			}

			if ($this->aPaymentMethod !== null) {
				if (!$this->aPaymentMethod->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aPaymentMethod->getValidationFailures());
				}
			}


			if (($retval = PaymentPeer::doValidate($this, $columns)) !== true) {
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
		$pos = PaymentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getCode();
				break;
			case 2:
				return $this->getOid();
				break;
			case 3:
				return $this->getQuantity();
				break;
			case 4:
				return $this->getAmount();
				break;
			case 5:
				return $this->getComment();
				break;
			case 6:
				return $this->getUserId();
				break;
			case 7:
				return $this->getPaymentMethodId();
				break;
			case 8:
				return $this->getPurchaseOrderId();
				break;
			case 9:
				return $this->getIsDeclined();
				break;
			case 10:
				return $this->getIsPaid();
				break;
			case 11:
				return $this->getIsRecurring();
				break;
			case 12:
				return $this->getIsActive();
				break;
			case 13:
				return $this->getDatePaid();
				break;
			case 14:
				return $this->getDateCreated();
				break;
			case 15:
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
		$keys = PaymentPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getCode(),
			$keys[2] => $this->getOid(),
			$keys[3] => $this->getQuantity(),
			$keys[4] => $this->getAmount(),
			$keys[5] => $this->getComment(),
			$keys[6] => $this->getUserId(),
			$keys[7] => $this->getPaymentMethodId(),
			$keys[8] => $this->getPurchaseOrderId(),
			$keys[9] => $this->getIsDeclined(),
			$keys[10] => $this->getIsPaid(),
			$keys[11] => $this->getIsRecurring(),
			$keys[12] => $this->getIsActive(),
			$keys[13] => $this->getDatePaid(),
			$keys[14] => $this->getDateCreated(),
			$keys[15] => $this->getRemoteAddr(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aPurchaseOrder) {
				$result['PurchaseOrder'] = $this->aPurchaseOrder->toArray($keyType, $includeLazyLoadColumns, true);
			}
			if (null !== $this->aUser) {
				$result['User'] = $this->aUser->toArray($keyType, $includeLazyLoadColumns, true);
			}
			if (null !== $this->aPaymentMethod) {
				$result['PaymentMethod'] = $this->aPaymentMethod->toArray($keyType, $includeLazyLoadColumns, true);
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
		$pos = PaymentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setCode($value);
				break;
			case 2:
				$this->setOid($value);
				break;
			case 3:
				$this->setQuantity($value);
				break;
			case 4:
				$this->setAmount($value);
				break;
			case 5:
				$this->setComment($value);
				break;
			case 6:
				$this->setUserId($value);
				break;
			case 7:
				$this->setPaymentMethodId($value);
				break;
			case 8:
				$this->setPurchaseOrderId($value);
				break;
			case 9:
				$this->setIsDeclined($value);
				break;
			case 10:
				$this->setIsPaid($value);
				break;
			case 11:
				$this->setIsRecurring($value);
				break;
			case 12:
				$this->setIsActive($value);
				break;
			case 13:
				$this->setDatePaid($value);
				break;
			case 14:
				$this->setDateCreated($value);
				break;
			case 15:
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
		$keys = PaymentPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setCode($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setOid($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setQuantity($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setAmount($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setComment($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setUserId($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setPaymentMethodId($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setPurchaseOrderId($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setIsDeclined($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setIsPaid($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setIsRecurring($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setIsActive($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setDatePaid($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setDateCreated($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setRemoteAddr($arr[$keys[15]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(PaymentPeer::DATABASE_NAME);

		if ($this->isColumnModified(PaymentPeer::ID)) $criteria->add(PaymentPeer::ID, $this->id);
		if ($this->isColumnModified(PaymentPeer::CODE)) $criteria->add(PaymentPeer::CODE, $this->code);
		if ($this->isColumnModified(PaymentPeer::OID)) $criteria->add(PaymentPeer::OID, $this->oid);
		if ($this->isColumnModified(PaymentPeer::QUANTITY)) $criteria->add(PaymentPeer::QUANTITY, $this->quantity);
		if ($this->isColumnModified(PaymentPeer::AMOUNT)) $criteria->add(PaymentPeer::AMOUNT, $this->amount);
		if ($this->isColumnModified(PaymentPeer::COMMENT)) $criteria->add(PaymentPeer::COMMENT, $this->comment);
		if ($this->isColumnModified(PaymentPeer::USER_ID)) $criteria->add(PaymentPeer::USER_ID, $this->user_id);
		if ($this->isColumnModified(PaymentPeer::PAYMENT_METHOD_ID)) $criteria->add(PaymentPeer::PAYMENT_METHOD_ID, $this->payment_method_id);
		if ($this->isColumnModified(PaymentPeer::PURCHASE_ORDER_ID)) $criteria->add(PaymentPeer::PURCHASE_ORDER_ID, $this->purchase_order_id);
		if ($this->isColumnModified(PaymentPeer::IS_DECLINED)) $criteria->add(PaymentPeer::IS_DECLINED, $this->is_declined);
		if ($this->isColumnModified(PaymentPeer::IS_PAID)) $criteria->add(PaymentPeer::IS_PAID, $this->is_paid);
		if ($this->isColumnModified(PaymentPeer::IS_RECURRING)) $criteria->add(PaymentPeer::IS_RECURRING, $this->is_recurring);
		if ($this->isColumnModified(PaymentPeer::IS_ACTIVE)) $criteria->add(PaymentPeer::IS_ACTIVE, $this->is_active);
		if ($this->isColumnModified(PaymentPeer::DATE_PAID)) $criteria->add(PaymentPeer::DATE_PAID, $this->date_paid);
		if ($this->isColumnModified(PaymentPeer::DATE_CREATED)) $criteria->add(PaymentPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(PaymentPeer::REMOTE_ADDR)) $criteria->add(PaymentPeer::REMOTE_ADDR, $this->remote_addr);

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
		$criteria = new Criteria(PaymentPeer::DATABASE_NAME);
		$criteria->add(PaymentPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of Payment (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setCode($this->code);
		$copyObj->setOid($this->oid);
		$copyObj->setQuantity($this->quantity);
		$copyObj->setAmount($this->amount);
		$copyObj->setComment($this->comment);
		$copyObj->setUserId($this->user_id);
		$copyObj->setPaymentMethodId($this->payment_method_id);
		$copyObj->setPurchaseOrderId($this->purchase_order_id);
		$copyObj->setIsDeclined($this->is_declined);
		$copyObj->setIsPaid($this->is_paid);
		$copyObj->setIsRecurring($this->is_recurring);
		$copyObj->setIsActive($this->is_active);
		$copyObj->setDatePaid($this->date_paid);
		$copyObj->setDateCreated($this->date_created);
		$copyObj->setRemoteAddr($this->remote_addr);

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
	 * @return     Payment Clone of current object.
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
	 * @return     PaymentPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new PaymentPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a PurchaseOrder object.
	 *
	 * @param      PurchaseOrder $v
	 * @return     Payment The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setPurchaseOrder(PurchaseOrder $v = null)
	{
		if ($v === null) {
			$this->setPurchaseOrderId(0);
		} else {
			$this->setPurchaseOrderId($v->getId());
		}

		$this->aPurchaseOrder = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the PurchaseOrder object, it will not be re-added.
		if ($v !== null) {
			$v->addPayment($this);
		}

		return $this;
	}


	/**
	 * Get the associated PurchaseOrder object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     PurchaseOrder The associated PurchaseOrder object.
	 * @throws     PropelException
	 */
	public function getPurchaseOrder(PropelPDO $con = null)
	{
		if ($this->aPurchaseOrder === null && ($this->purchase_order_id !== null)) {
			$this->aPurchaseOrder = PurchaseOrderQuery::create()->findPk($this->purchase_order_id, $con);
			/* The following can be used additionally to
				 guarantee the related object contains a reference
				 to this object.  This level of coupling may, however, be
				 undesirable since it could result in an only partially populated collection
				 in the referenced object.
				 $this->aPurchaseOrder->addPayments($this);
			 */
		}
		return $this->aPurchaseOrder;
	}

	/**
	 * Declares an association between this object and a User object.
	 *
	 * @param      User $v
	 * @return     Payment The current object (for fluent API support)
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
			$v->addPayment($this);
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
				 $this->aUser->addPayments($this);
			 */
		}
		return $this->aUser;
	}

	/**
	 * Declares an association between this object and a PaymentMethod object.
	 *
	 * @param      PaymentMethod $v
	 * @return     Payment The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setPaymentMethod(PaymentMethod $v = null)
	{
		if ($v === null) {
			$this->setPaymentMethodId(0);
		} else {
			$this->setPaymentMethodId($v->getId());
		}

		$this->aPaymentMethod = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the PaymentMethod object, it will not be re-added.
		if ($v !== null) {
			$v->addPayment($this);
		}

		return $this;
	}


	/**
	 * Get the associated PaymentMethod object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     PaymentMethod The associated PaymentMethod object.
	 * @throws     PropelException
	 */
	public function getPaymentMethod(PropelPDO $con = null)
	{
		if ($this->aPaymentMethod === null && ($this->payment_method_id !== null)) {
			$this->aPaymentMethod = PaymentMethodQuery::create()->findPk($this->payment_method_id, $con);
			/* The following can be used additionally to
				 guarantee the related object contains a reference
				 to this object.  This level of coupling may, however, be
				 undesirable since it could result in an only partially populated collection
				 in the referenced object.
				 $this->aPaymentMethod->addPayments($this);
			 */
		}
		return $this->aPaymentMethod;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->code = null;
		$this->oid = null;
		$this->quantity = null;
		$this->amount = null;
		$this->comment = null;
		$this->user_id = null;
		$this->payment_method_id = null;
		$this->purchase_order_id = null;
		$this->is_declined = null;
		$this->is_paid = null;
		$this->is_recurring = null;
		$this->is_active = null;
		$this->date_paid = null;
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
		} // if ($deep)

		$this->aPurchaseOrder = null;
		$this->aUser = null;
		$this->aPaymentMethod = null;
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

} // BasePayment
