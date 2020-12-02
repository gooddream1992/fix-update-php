<?php


/**
 * Base class that represents a row from the 'email_list' table.
 *
 * 
 *
 * @package    propel.generator.komideals.om
 */
abstract class BaseEmailList extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'EmailListPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        EmailListPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the is_active field.
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
	 * @var        string
	 */
	protected $remote_addr;

	/**
	 * The value for the email field.
	 * @var        string
	 */
	protected $email;

	/**
	 * The value for the fname field.
	 * @var        string
	 */
	protected $fname;

	/**
	 * The value for the lname field.
	 * @var        string
	 */
	protected $lname;

	/**
	 * The value for the telephone field.
	 * @var        string
	 */
	protected $telephone;

	/**
	 * The value for the address1 field.
	 * @var        string
	 */
	protected $address1;

	/**
	 * The value for the address2 field.
	 * @var        string
	 */
	protected $address2;

	/**
	 * The value for the city field.
	 * @var        string
	 */
	protected $city;

	/**
	 * The value for the state field.
	 * @var        string
	 */
	protected $state;

	/**
	 * The value for the zipcode field.
	 * @var        string
	 */
	protected $zipcode;

	/**
	 * The value for the lat field.
	 * @var        double
	 */
	protected $lat;

	/**
	 * The value for the lng field.
	 * @var        double
	 */
	protected $lng;

	/**
	 * The value for the source field.
	 * @var        string
	 */
	protected $source;

	/**
	 * The value for the country field.
	 * @var        string
	 */
	protected $country;

	/**
	 * The value for the gender field.
	 * @var        string
	 */
	protected $gender;

	/**
	 * The value for the doby field.
	 * @var        string
	 */
	protected $doby;

	/**
	 * The value for the dobm field.
	 * @var        string
	 */
	protected $dobm;

	/**
	 * The value for the dob field.
	 * @var        string
	 */
	protected $dob;

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
	 * Get the [id] column value.
	 * 
	 * @return     int
	 */
	public function getId()
	{
		return $this->id;
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
	 * Get the [email] column value.
	 * 
	 * @return     string
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * Get the [fname] column value.
	 * 
	 * @return     string
	 */
	public function getFname()
	{
		return $this->fname;
	}

	/**
	 * Get the [lname] column value.
	 * 
	 * @return     string
	 */
	public function getLname()
	{
		return $this->lname;
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
	 * Get the [address1] column value.
	 * 
	 * @return     string
	 */
	public function getAddress1()
	{
		return $this->address1;
	}

	/**
	 * Get the [address2] column value.
	 * 
	 * @return     string
	 */
	public function getAddress2()
	{
		return $this->address2;
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
	 * Get the [zipcode] column value.
	 * 
	 * @return     string
	 */
	public function getZipcode()
	{
		return $this->zipcode;
	}

	/**
	 * Get the [lat] column value.
	 * 
	 * @return     double
	 */
	public function getLat()
	{
		return $this->lat;
	}

	/**
	 * Get the [lng] column value.
	 * 
	 * @return     double
	 */
	public function getLng()
	{
		return $this->lng;
	}

	/**
	 * Get the [source] column value.
	 * 
	 * @return     string
	 */
	public function getSource()
	{
		return $this->source;
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
	 * Get the [gender] column value.
	 * 
	 * @return     string
	 */
	public function getGender()
	{
		return $this->gender;
	}

	/**
	 * Get the [doby] column value.
	 * 
	 * @return     string
	 */
	public function getDoby()
	{
		return $this->doby;
	}

	/**
	 * Get the [dobm] column value.
	 * 
	 * @return     string
	 */
	public function getDobm()
	{
		return $this->dobm;
	}

	/**
	 * Get the [dob] column value.
	 * 
	 * @return     string
	 */
	public function getDob()
	{
		return $this->dob;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     EmailList The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = EmailListPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [is_active] column.
	 * 
	 * @param      int $v new value
	 * @return     EmailList The current object (for fluent API support)
	 */
	public function setIsActive($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->is_active !== $v) {
			$this->is_active = $v;
			$this->modifiedColumns[] = EmailListPeer::IS_ACTIVE;
		}

		return $this;
	} // setIsActive()

	/**
	 * Sets the value of [date_created] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     EmailList The current object (for fluent API support)
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
				$this->modifiedColumns[] = EmailListPeer::DATE_CREATED;
			}
		} // if either are not null

		return $this;
	} // setDateCreated()

	/**
	 * Set the value of [remote_addr] column.
	 * 
	 * @param      string $v new value
	 * @return     EmailList The current object (for fluent API support)
	 */
	public function setRemoteAddr($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->remote_addr !== $v) {
			$this->remote_addr = $v;
			$this->modifiedColumns[] = EmailListPeer::REMOTE_ADDR;
		}

		return $this;
	} // setRemoteAddr()

	/**
	 * Set the value of [email] column.
	 * 
	 * @param      string $v new value
	 * @return     EmailList The current object (for fluent API support)
	 */
	public function setEmail($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->email !== $v) {
			$this->email = $v;
			$this->modifiedColumns[] = EmailListPeer::EMAIL;
		}

		return $this;
	} // setEmail()

	/**
	 * Set the value of [fname] column.
	 * 
	 * @param      string $v new value
	 * @return     EmailList The current object (for fluent API support)
	 */
	public function setFname($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->fname !== $v) {
			$this->fname = $v;
			$this->modifiedColumns[] = EmailListPeer::FNAME;
		}

		return $this;
	} // setFname()

	/**
	 * Set the value of [lname] column.
	 * 
	 * @param      string $v new value
	 * @return     EmailList The current object (for fluent API support)
	 */
	public function setLname($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->lname !== $v) {
			$this->lname = $v;
			$this->modifiedColumns[] = EmailListPeer::LNAME;
		}

		return $this;
	} // setLname()

	/**
	 * Set the value of [telephone] column.
	 * 
	 * @param      string $v new value
	 * @return     EmailList The current object (for fluent API support)
	 */
	public function setTelephone($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->telephone !== $v) {
			$this->telephone = $v;
			$this->modifiedColumns[] = EmailListPeer::TELEPHONE;
		}

		return $this;
	} // setTelephone()

	/**
	 * Set the value of [address1] column.
	 * 
	 * @param      string $v new value
	 * @return     EmailList The current object (for fluent API support)
	 */
	public function setAddress1($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->address1 !== $v) {
			$this->address1 = $v;
			$this->modifiedColumns[] = EmailListPeer::ADDRESS1;
		}

		return $this;
	} // setAddress1()

	/**
	 * Set the value of [address2] column.
	 * 
	 * @param      string $v new value
	 * @return     EmailList The current object (for fluent API support)
	 */
	public function setAddress2($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->address2 !== $v) {
			$this->address2 = $v;
			$this->modifiedColumns[] = EmailListPeer::ADDRESS2;
		}

		return $this;
	} // setAddress2()

	/**
	 * Set the value of [city] column.
	 * 
	 * @param      string $v new value
	 * @return     EmailList The current object (for fluent API support)
	 */
	public function setCity($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->city !== $v) {
			$this->city = $v;
			$this->modifiedColumns[] = EmailListPeer::CITY;
		}

		return $this;
	} // setCity()

	/**
	 * Set the value of [state] column.
	 * 
	 * @param      string $v new value
	 * @return     EmailList The current object (for fluent API support)
	 */
	public function setState($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->state !== $v) {
			$this->state = $v;
			$this->modifiedColumns[] = EmailListPeer::STATE;
		}

		return $this;
	} // setState()

	/**
	 * Set the value of [zipcode] column.
	 * 
	 * @param      string $v new value
	 * @return     EmailList The current object (for fluent API support)
	 */
	public function setZipcode($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->zipcode !== $v) {
			$this->zipcode = $v;
			$this->modifiedColumns[] = EmailListPeer::ZIPCODE;
		}

		return $this;
	} // setZipcode()

	/**
	 * Set the value of [lat] column.
	 * 
	 * @param      double $v new value
	 * @return     EmailList The current object (for fluent API support)
	 */
	public function setLat($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->lat !== $v) {
			$this->lat = $v;
			$this->modifiedColumns[] = EmailListPeer::LAT;
		}

		return $this;
	} // setLat()

	/**
	 * Set the value of [lng] column.
	 * 
	 * @param      double $v new value
	 * @return     EmailList The current object (for fluent API support)
	 */
	public function setLng($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->lng !== $v) {
			$this->lng = $v;
			$this->modifiedColumns[] = EmailListPeer::LNG;
		}

		return $this;
	} // setLng()

	/**
	 * Set the value of [source] column.
	 * 
	 * @param      string $v new value
	 * @return     EmailList The current object (for fluent API support)
	 */
	public function setSource($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->source !== $v) {
			$this->source = $v;
			$this->modifiedColumns[] = EmailListPeer::SOURCE;
		}

		return $this;
	} // setSource()

	/**
	 * Set the value of [country] column.
	 * 
	 * @param      string $v new value
	 * @return     EmailList The current object (for fluent API support)
	 */
	public function setCountry($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->country !== $v) {
			$this->country = $v;
			$this->modifiedColumns[] = EmailListPeer::COUNTRY;
		}

		return $this;
	} // setCountry()

	/**
	 * Set the value of [gender] column.
	 * 
	 * @param      string $v new value
	 * @return     EmailList The current object (for fluent API support)
	 */
	public function setGender($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->gender !== $v) {
			$this->gender = $v;
			$this->modifiedColumns[] = EmailListPeer::GENDER;
		}

		return $this;
	} // setGender()

	/**
	 * Set the value of [doby] column.
	 * 
	 * @param      string $v new value
	 * @return     EmailList The current object (for fluent API support)
	 */
	public function setDoby($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->doby !== $v) {
			$this->doby = $v;
			$this->modifiedColumns[] = EmailListPeer::DOBY;
		}

		return $this;
	} // setDoby()

	/**
	 * Set the value of [dobm] column.
	 * 
	 * @param      string $v new value
	 * @return     EmailList The current object (for fluent API support)
	 */
	public function setDobm($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->dobm !== $v) {
			$this->dobm = $v;
			$this->modifiedColumns[] = EmailListPeer::DOBM;
		}

		return $this;
	} // setDobm()

	/**
	 * Set the value of [dob] column.
	 * 
	 * @param      string $v new value
	 * @return     EmailList The current object (for fluent API support)
	 */
	public function setDob($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->dob !== $v) {
			$this->dob = $v;
			$this->modifiedColumns[] = EmailListPeer::DOB;
		}

		return $this;
	} // setDob()

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
			$this->is_active = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->date_created = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->remote_addr = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->email = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->fname = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->lname = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->telephone = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->address1 = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->address2 = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->city = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->state = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->zipcode = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->lat = ($row[$startcol + 13] !== null) ? (double) $row[$startcol + 13] : null;
			$this->lng = ($row[$startcol + 14] !== null) ? (double) $row[$startcol + 14] : null;
			$this->source = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
			$this->country = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
			$this->gender = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
			$this->doby = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
			$this->dobm = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
			$this->dob = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 21; // 21 = EmailListPeer::NUM_COLUMNS - EmailListPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating EmailList object", $e);
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
			$con = Propel::getConnection(EmailListPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = EmailListPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?
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
			$con = Propel::getConnection(EmailListPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				EmailListQuery::create()
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
			$con = Propel::getConnection(EmailListPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				EmailListPeer::addInstanceToPool($this);
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
				$this->modifiedColumns[] = EmailListPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(EmailListPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.EmailListPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows = EmailListPeer::doUpdate($this, $con);
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


			if (($retval = EmailListPeer::doValidate($this, $columns)) !== true) {
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
		$pos = EmailListPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getIsActive();
				break;
			case 2:
				return $this->getDateCreated();
				break;
			case 3:
				return $this->getRemoteAddr();
				break;
			case 4:
				return $this->getEmail();
				break;
			case 5:
				return $this->getFname();
				break;
			case 6:
				return $this->getLname();
				break;
			case 7:
				return $this->getTelephone();
				break;
			case 8:
				return $this->getAddress1();
				break;
			case 9:
				return $this->getAddress2();
				break;
			case 10:
				return $this->getCity();
				break;
			case 11:
				return $this->getState();
				break;
			case 12:
				return $this->getZipcode();
				break;
			case 13:
				return $this->getLat();
				break;
			case 14:
				return $this->getLng();
				break;
			case 15:
				return $this->getSource();
				break;
			case 16:
				return $this->getCountry();
				break;
			case 17:
				return $this->getGender();
				break;
			case 18:
				return $this->getDoby();
				break;
			case 19:
				return $this->getDobm();
				break;
			case 20:
				return $this->getDob();
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
		$keys = EmailListPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getIsActive(),
			$keys[2] => $this->getDateCreated(),
			$keys[3] => $this->getRemoteAddr(),
			$keys[4] => $this->getEmail(),
			$keys[5] => $this->getFname(),
			$keys[6] => $this->getLname(),
			$keys[7] => $this->getTelephone(),
			$keys[8] => $this->getAddress1(),
			$keys[9] => $this->getAddress2(),
			$keys[10] => $this->getCity(),
			$keys[11] => $this->getState(),
			$keys[12] => $this->getZipcode(),
			$keys[13] => $this->getLat(),
			$keys[14] => $this->getLng(),
			$keys[15] => $this->getSource(),
			$keys[16] => $this->getCountry(),
			$keys[17] => $this->getGender(),
			$keys[18] => $this->getDoby(),
			$keys[19] => $this->getDobm(),
			$keys[20] => $this->getDob(),
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
		$pos = EmailListPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setIsActive($value);
				break;
			case 2:
				$this->setDateCreated($value);
				break;
			case 3:
				$this->setRemoteAddr($value);
				break;
			case 4:
				$this->setEmail($value);
				break;
			case 5:
				$this->setFname($value);
				break;
			case 6:
				$this->setLname($value);
				break;
			case 7:
				$this->setTelephone($value);
				break;
			case 8:
				$this->setAddress1($value);
				break;
			case 9:
				$this->setAddress2($value);
				break;
			case 10:
				$this->setCity($value);
				break;
			case 11:
				$this->setState($value);
				break;
			case 12:
				$this->setZipcode($value);
				break;
			case 13:
				$this->setLat($value);
				break;
			case 14:
				$this->setLng($value);
				break;
			case 15:
				$this->setSource($value);
				break;
			case 16:
				$this->setCountry($value);
				break;
			case 17:
				$this->setGender($value);
				break;
			case 18:
				$this->setDoby($value);
				break;
			case 19:
				$this->setDobm($value);
				break;
			case 20:
				$this->setDob($value);
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
		$keys = EmailListPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setIsActive($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDateCreated($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setRemoteAddr($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setEmail($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setFname($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setLname($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setTelephone($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setAddress1($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setAddress2($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setCity($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setState($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setZipcode($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setLat($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setLng($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setSource($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setCountry($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setGender($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setDoby($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setDobm($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setDob($arr[$keys[20]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(EmailListPeer::DATABASE_NAME);

		if ($this->isColumnModified(EmailListPeer::ID)) $criteria->add(EmailListPeer::ID, $this->id);
		if ($this->isColumnModified(EmailListPeer::IS_ACTIVE)) $criteria->add(EmailListPeer::IS_ACTIVE, $this->is_active);
		if ($this->isColumnModified(EmailListPeer::DATE_CREATED)) $criteria->add(EmailListPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(EmailListPeer::REMOTE_ADDR)) $criteria->add(EmailListPeer::REMOTE_ADDR, $this->remote_addr);
		if ($this->isColumnModified(EmailListPeer::EMAIL)) $criteria->add(EmailListPeer::EMAIL, $this->email);
		if ($this->isColumnModified(EmailListPeer::FNAME)) $criteria->add(EmailListPeer::FNAME, $this->fname);
		if ($this->isColumnModified(EmailListPeer::LNAME)) $criteria->add(EmailListPeer::LNAME, $this->lname);
		if ($this->isColumnModified(EmailListPeer::TELEPHONE)) $criteria->add(EmailListPeer::TELEPHONE, $this->telephone);
		if ($this->isColumnModified(EmailListPeer::ADDRESS1)) $criteria->add(EmailListPeer::ADDRESS1, $this->address1);
		if ($this->isColumnModified(EmailListPeer::ADDRESS2)) $criteria->add(EmailListPeer::ADDRESS2, $this->address2);
		if ($this->isColumnModified(EmailListPeer::CITY)) $criteria->add(EmailListPeer::CITY, $this->city);
		if ($this->isColumnModified(EmailListPeer::STATE)) $criteria->add(EmailListPeer::STATE, $this->state);
		if ($this->isColumnModified(EmailListPeer::ZIPCODE)) $criteria->add(EmailListPeer::ZIPCODE, $this->zipcode);
		if ($this->isColumnModified(EmailListPeer::LAT)) $criteria->add(EmailListPeer::LAT, $this->lat);
		if ($this->isColumnModified(EmailListPeer::LNG)) $criteria->add(EmailListPeer::LNG, $this->lng);
		if ($this->isColumnModified(EmailListPeer::SOURCE)) $criteria->add(EmailListPeer::SOURCE, $this->source);
		if ($this->isColumnModified(EmailListPeer::COUNTRY)) $criteria->add(EmailListPeer::COUNTRY, $this->country);
		if ($this->isColumnModified(EmailListPeer::GENDER)) $criteria->add(EmailListPeer::GENDER, $this->gender);
		if ($this->isColumnModified(EmailListPeer::DOBY)) $criteria->add(EmailListPeer::DOBY, $this->doby);
		if ($this->isColumnModified(EmailListPeer::DOBM)) $criteria->add(EmailListPeer::DOBM, $this->dobm);
		if ($this->isColumnModified(EmailListPeer::DOB)) $criteria->add(EmailListPeer::DOB, $this->dob);

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
		$criteria = new Criteria(EmailListPeer::DATABASE_NAME);
		$criteria->add(EmailListPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of EmailList (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setIsActive($this->is_active);
		$copyObj->setDateCreated($this->date_created);
		$copyObj->setRemoteAddr($this->remote_addr);
		$copyObj->setEmail($this->email);
		$copyObj->setFname($this->fname);
		$copyObj->setLname($this->lname);
		$copyObj->setTelephone($this->telephone);
		$copyObj->setAddress1($this->address1);
		$copyObj->setAddress2($this->address2);
		$copyObj->setCity($this->city);
		$copyObj->setState($this->state);
		$copyObj->setZipcode($this->zipcode);
		$copyObj->setLat($this->lat);
		$copyObj->setLng($this->lng);
		$copyObj->setSource($this->source);
		$copyObj->setCountry($this->country);
		$copyObj->setGender($this->gender);
		$copyObj->setDoby($this->doby);
		$copyObj->setDobm($this->dobm);
		$copyObj->setDob($this->dob);

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
	 * @return     EmailList Clone of current object.
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
	 * @return     EmailListPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new EmailListPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->is_active = null;
		$this->date_created = null;
		$this->remote_addr = null;
		$this->email = null;
		$this->fname = null;
		$this->lname = null;
		$this->telephone = null;
		$this->address1 = null;
		$this->address2 = null;
		$this->city = null;
		$this->state = null;
		$this->zipcode = null;
		$this->lat = null;
		$this->lng = null;
		$this->source = null;
		$this->country = null;
		$this->gender = null;
		$this->doby = null;
		$this->dobm = null;
		$this->dob = null;
		$this->alreadyInSave = false;
		$this->alreadyInValidation = false;
		$this->clearAllReferences();
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

} // BaseEmailList
