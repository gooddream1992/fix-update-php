<?php


/**
 * Base class that represents a row from the 'image' table.
 *
 * 
 *
 * @package    propel.generator.komideals.om
 */
abstract class BaseImage extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'ImagePeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        ImagePeer
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
	 * The value for the file_name field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $file_name;

	/**
	 * The value for the content_type field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $content_type;

	/**
	 * The value for the height field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $height;

	/**
	 * The value for the width field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $width;

	/**
	 * The value for the content_size field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $content_size;

	/**
	 * The value for the content field.
	 * @var        resource
	 */
	protected $content;

	/**
	 * The value for the date_created field.
	 * @var        string
	 */
	protected $date_created;

	/**
	 * The value for the date_viewed field.
	 * @var        string
	 */
	protected $date_viewed;

	/**
	 * The value for the is_active field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $is_active;

	/**
	 * The value for the is_approved field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $is_approved;

	/**
	 * The value for the remote_addr_created field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $remote_addr_created;

	/**
	 * The value for the remote_addr_approved field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $remote_addr_approved;

	/**
	 * @var        User
	 */
	protected $aUser;

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
		$this->file_name = '';
		$this->content_type = '';
		$this->height = 0;
		$this->width = 0;
		$this->content_size = 0;
		$this->is_active = 0;
		$this->is_approved = 0;
		$this->remote_addr_created = '';
		$this->remote_addr_approved = '';
	}

	/**
	 * Initializes internal state of BaseImage object.
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
	 * Get the [file_name] column value.
	 * 
	 * @return     string
	 */
	public function getFileName()
	{
		return $this->file_name;
	}

	/**
	 * Get the [content_type] column value.
	 * 
	 * @return     string
	 */
	public function getContentType()
	{
		return $this->content_type;
	}

	/**
	 * Get the [height] column value.
	 * 
	 * @return     int
	 */
	public function getHeight()
	{
		return $this->height;
	}

	/**
	 * Get the [width] column value.
	 * 
	 * @return     int
	 */
	public function getWidth()
	{
		return $this->width;
	}

	/**
	 * Get the [content_size] column value.
	 * 
	 * @return     int
	 */
	public function getContentSize()
	{
		return $this->content_size;
	}

	/**
	 * Get the [content] column value.
	 * 
	 * @return     resource
	 */
	public function getContent()
	{
		return $this->content;
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
	 * Get the [optionally formatted] temporal [date_viewed] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getDateViewed($format = 'Y-m-d H:i:s')
	{
		if ($this->date_viewed === null) {
			return null;
		}


		if ($this->date_viewed === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->date_viewed);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_viewed, true), $x);
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
	 * Get the [is_active] column value.
	 * 
	 * @return     int
	 */
	public function getIsActive()
	{
		return $this->is_active;
	}

	/**
	 * Get the [is_approved] column value.
	 * 
	 * @return     int
	 */
	public function getIsApproved()
	{
		return $this->is_approved;
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
	 * Get the [remote_addr_approved] column value.
	 * 
	 * @return     string
	 */
	public function getRemoteAddrApproved()
	{
		return $this->remote_addr_approved;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     Image The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = ImagePeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [user_id] column.
	 * 
	 * @param      int $v new value
	 * @return     Image The current object (for fluent API support)
	 */
	public function setUserId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->user_id !== $v || $this->isNew()) {
			$this->user_id = $v;
			$this->modifiedColumns[] = ImagePeer::USER_ID;
		}

		if ($this->aUser !== null && $this->aUser->getId() !== $v) {
			$this->aUser = null;
		}

		return $this;
	} // setUserId()

	/**
	 * Set the value of [file_name] column.
	 * 
	 * @param      string $v new value
	 * @return     Image The current object (for fluent API support)
	 */
	public function setFileName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->file_name !== $v || $this->isNew()) {
			$this->file_name = $v;
			$this->modifiedColumns[] = ImagePeer::FILE_NAME;
		}

		return $this;
	} // setFileName()

	/**
	 * Set the value of [content_type] column.
	 * 
	 * @param      string $v new value
	 * @return     Image The current object (for fluent API support)
	 */
	public function setContentType($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->content_type !== $v || $this->isNew()) {
			$this->content_type = $v;
			$this->modifiedColumns[] = ImagePeer::CONTENT_TYPE;
		}

		return $this;
	} // setContentType()

	/**
	 * Set the value of [height] column.
	 * 
	 * @param      int $v new value
	 * @return     Image The current object (for fluent API support)
	 */
	public function setHeight($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->height !== $v || $this->isNew()) {
			$this->height = $v;
			$this->modifiedColumns[] = ImagePeer::HEIGHT;
		}

		return $this;
	} // setHeight()

	/**
	 * Set the value of [width] column.
	 * 
	 * @param      int $v new value
	 * @return     Image The current object (for fluent API support)
	 */
	public function setWidth($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->width !== $v || $this->isNew()) {
			$this->width = $v;
			$this->modifiedColumns[] = ImagePeer::WIDTH;
		}

		return $this;
	} // setWidth()

	/**
	 * Set the value of [content_size] column.
	 * 
	 * @param      int $v new value
	 * @return     Image The current object (for fluent API support)
	 */
	public function setContentSize($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->content_size !== $v || $this->isNew()) {
			$this->content_size = $v;
			$this->modifiedColumns[] = ImagePeer::CONTENT_SIZE;
		}

		return $this;
	} // setContentSize()

	/**
	 * Set the value of [content] column.
	 * 
	 * @param      resource $v new value
	 * @return     Image The current object (for fluent API support)
	 */
	public function setContent($v)
	{
		// Because BLOB columns are streams in PDO we have to assume that they are
		// always modified when a new value is passed in.  For example, the contents
		// of the stream itself may have changed externally.
		if (!is_resource($v) && $v !== null) {
			$this->content = fopen('php://memory', 'r+');
			fwrite($this->content, $v);
			rewind($this->content);
		} else { // it's already a stream
			$this->content = $v;
		}
		$this->modifiedColumns[] = ImagePeer::CONTENT;

		return $this;
	} // setContent()

	/**
	 * Sets the value of [date_created] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Image The current object (for fluent API support)
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
				$this->modifiedColumns[] = ImagePeer::DATE_CREATED;
			}
		} // if either are not null

		return $this;
	} // setDateCreated()

	/**
	 * Sets the value of [date_viewed] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Image The current object (for fluent API support)
	 */
	public function setDateViewed($v)
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

		if ( $this->date_viewed !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->date_viewed !== null && $tmpDt = new DateTime($this->date_viewed)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->date_viewed = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = ImagePeer::DATE_VIEWED;
			}
		} // if either are not null

		return $this;
	} // setDateViewed()

	/**
	 * Set the value of [is_active] column.
	 * 
	 * @param      int $v new value
	 * @return     Image The current object (for fluent API support)
	 */
	public function setIsActive($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->is_active !== $v || $this->isNew()) {
			$this->is_active = $v;
			$this->modifiedColumns[] = ImagePeer::IS_ACTIVE;
		}

		return $this;
	} // setIsActive()

	/**
	 * Set the value of [is_approved] column.
	 * 
	 * @param      int $v new value
	 * @return     Image The current object (for fluent API support)
	 */
	public function setIsApproved($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->is_approved !== $v || $this->isNew()) {
			$this->is_approved = $v;
			$this->modifiedColumns[] = ImagePeer::IS_APPROVED;
		}

		return $this;
	} // setIsApproved()

	/**
	 * Set the value of [remote_addr_created] column.
	 * 
	 * @param      string $v new value
	 * @return     Image The current object (for fluent API support)
	 */
	public function setRemoteAddrCreated($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->remote_addr_created !== $v || $this->isNew()) {
			$this->remote_addr_created = $v;
			$this->modifiedColumns[] = ImagePeer::REMOTE_ADDR_CREATED;
		}

		return $this;
	} // setRemoteAddrCreated()

	/**
	 * Set the value of [remote_addr_approved] column.
	 * 
	 * @param      string $v new value
	 * @return     Image The current object (for fluent API support)
	 */
	public function setRemoteAddrApproved($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->remote_addr_approved !== $v || $this->isNew()) {
			$this->remote_addr_approved = $v;
			$this->modifiedColumns[] = ImagePeer::REMOTE_ADDR_APPROVED;
		}

		return $this;
	} // setRemoteAddrApproved()

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

			if ($this->file_name !== '') {
				return false;
			}

			if ($this->content_type !== '') {
				return false;
			}

			if ($this->height !== 0) {
				return false;
			}

			if ($this->width !== 0) {
				return false;
			}

			if ($this->content_size !== 0) {
				return false;
			}

			if ($this->is_active !== 0) {
				return false;
			}

			if ($this->is_approved !== 0) {
				return false;
			}

			if ($this->remote_addr_created !== '') {
				return false;
			}

			if ($this->remote_addr_approved !== '') {
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
			$this->file_name = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->content_type = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->height = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->width = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->content_size = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			if ($row[$startcol + 7] !== null) {
				$this->content = fopen('php://memory', 'r+');
				fwrite($this->content, $row[$startcol + 7]);
				rewind($this->content);
			} else {
				$this->content = null;
			}
			$this->date_created = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->date_viewed = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->is_active = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
			$this->is_approved = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
			$this->remote_addr_created = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->remote_addr_approved = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 14; // 14 = ImagePeer::NUM_COLUMNS - ImagePeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating Image object", $e);
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
			$con = Propel::getConnection(ImagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = ImagePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?
			$this->aUser = null;
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
			$con = Propel::getConnection(ImagePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				ImageQuery::create()
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
			$con = Propel::getConnection(ImagePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				ImagePeer::addInstanceToPool($this);
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
				$this->modifiedColumns[] = ImagePeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(ImagePeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.ImagePeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows += 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows += ImagePeer::doUpdate($this, $con);
				}

				// Rewind the content LOB column, since PDO does not rewind after inserting value.
				if ($this->content !== null && is_resource($this->content)) {
					rewind($this->content);
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

			if ($this->aUser !== null) {
				if (!$this->aUser->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aUser->getValidationFailures());
				}
			}


			if (($retval = ImagePeer::doValidate($this, $columns)) !== true) {
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
		$pos = ImagePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getFileName();
				break;
			case 3:
				return $this->getContentType();
				break;
			case 4:
				return $this->getHeight();
				break;
			case 5:
				return $this->getWidth();
				break;
			case 6:
				return $this->getContentSize();
				break;
			case 7:
				return $this->getContent();
				break;
			case 8:
				return $this->getDateCreated();
				break;
			case 9:
				return $this->getDateViewed();
				break;
			case 10:
				return $this->getIsActive();
				break;
			case 11:
				return $this->getIsApproved();
				break;
			case 12:
				return $this->getRemoteAddrCreated();
				break;
			case 13:
				return $this->getRemoteAddrApproved();
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
		$keys = ImagePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getUserId(),
			$keys[2] => $this->getFileName(),
			$keys[3] => $this->getContentType(),
			$keys[4] => $this->getHeight(),
			$keys[5] => $this->getWidth(),
			$keys[6] => $this->getContentSize(),
			$keys[7] => $this->getContent(),
			$keys[8] => $this->getDateCreated(),
			$keys[9] => $this->getDateViewed(),
			$keys[10] => $this->getIsActive(),
			$keys[11] => $this->getIsApproved(),
			$keys[12] => $this->getRemoteAddrCreated(),
			$keys[13] => $this->getRemoteAddrApproved(),
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
		$pos = ImagePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setFileName($value);
				break;
			case 3:
				$this->setContentType($value);
				break;
			case 4:
				$this->setHeight($value);
				break;
			case 5:
				$this->setWidth($value);
				break;
			case 6:
				$this->setContentSize($value);
				break;
			case 7:
				$this->setContent($value);
				break;
			case 8:
				$this->setDateCreated($value);
				break;
			case 9:
				$this->setDateViewed($value);
				break;
			case 10:
				$this->setIsActive($value);
				break;
			case 11:
				$this->setIsApproved($value);
				break;
			case 12:
				$this->setRemoteAddrCreated($value);
				break;
			case 13:
				$this->setRemoteAddrApproved($value);
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
		$keys = ImagePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setUserId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setFileName($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setContentType($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setHeight($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setWidth($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setContentSize($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setContent($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setDateCreated($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setDateViewed($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setIsActive($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setIsApproved($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setRemoteAddrCreated($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setRemoteAddrApproved($arr[$keys[13]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(ImagePeer::DATABASE_NAME);

		if ($this->isColumnModified(ImagePeer::ID)) $criteria->add(ImagePeer::ID, $this->id);
		if ($this->isColumnModified(ImagePeer::USER_ID)) $criteria->add(ImagePeer::USER_ID, $this->user_id);
		if ($this->isColumnModified(ImagePeer::FILE_NAME)) $criteria->add(ImagePeer::FILE_NAME, $this->file_name);
		if ($this->isColumnModified(ImagePeer::CONTENT_TYPE)) $criteria->add(ImagePeer::CONTENT_TYPE, $this->content_type);
		if ($this->isColumnModified(ImagePeer::HEIGHT)) $criteria->add(ImagePeer::HEIGHT, $this->height);
		if ($this->isColumnModified(ImagePeer::WIDTH)) $criteria->add(ImagePeer::WIDTH, $this->width);
		if ($this->isColumnModified(ImagePeer::CONTENT_SIZE)) $criteria->add(ImagePeer::CONTENT_SIZE, $this->content_size);
		if ($this->isColumnModified(ImagePeer::CONTENT)) $criteria->add(ImagePeer::CONTENT, $this->content);
		if ($this->isColumnModified(ImagePeer::DATE_CREATED)) $criteria->add(ImagePeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(ImagePeer::DATE_VIEWED)) $criteria->add(ImagePeer::DATE_VIEWED, $this->date_viewed);
		if ($this->isColumnModified(ImagePeer::IS_ACTIVE)) $criteria->add(ImagePeer::IS_ACTIVE, $this->is_active);
		if ($this->isColumnModified(ImagePeer::IS_APPROVED)) $criteria->add(ImagePeer::IS_APPROVED, $this->is_approved);
		if ($this->isColumnModified(ImagePeer::REMOTE_ADDR_CREATED)) $criteria->add(ImagePeer::REMOTE_ADDR_CREATED, $this->remote_addr_created);
		if ($this->isColumnModified(ImagePeer::REMOTE_ADDR_APPROVED)) $criteria->add(ImagePeer::REMOTE_ADDR_APPROVED, $this->remote_addr_approved);

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
		$criteria = new Criteria(ImagePeer::DATABASE_NAME);
		$criteria->add(ImagePeer::ID, $this->id);

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
	 * @param      object $copyObj An object of Image (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setUserId($this->user_id);
		$copyObj->setFileName($this->file_name);
		$copyObj->setContentType($this->content_type);
		$copyObj->setHeight($this->height);
		$copyObj->setWidth($this->width);
		$copyObj->setContentSize($this->content_size);
		$copyObj->setContent($this->content);
		$copyObj->setDateCreated($this->date_created);
		$copyObj->setDateViewed($this->date_viewed);
		$copyObj->setIsActive($this->is_active);
		$copyObj->setIsApproved($this->is_approved);
		$copyObj->setRemoteAddrCreated($this->remote_addr_created);
		$copyObj->setRemoteAddrApproved($this->remote_addr_approved);

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
	 * @return     Image Clone of current object.
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
	 * @return     ImagePeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new ImagePeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a User object.
	 *
	 * @param      User $v
	 * @return     Image The current object (for fluent API support)
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
			$v->addImage($this);
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
				 $this->aUser->addImages($this);
			 */
		}
		return $this->aUser;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->user_id = null;
		$this->file_name = null;
		$this->content_type = null;
		$this->height = null;
		$this->width = null;
		$this->content_size = null;
		$this->content = null;
		$this->date_created = null;
		$this->date_viewed = null;
		$this->is_active = null;
		$this->is_approved = null;
		$this->remote_addr_created = null;
		$this->remote_addr_approved = null;
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

} // BaseImage
