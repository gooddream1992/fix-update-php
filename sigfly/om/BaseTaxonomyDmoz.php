<?php


/**
 * Base class that represents a row from the 'taxonomy_dmoz' table.
 *
 * 
 *
 * @package    propel.generator.sigfly.om
 */
abstract class BaseTaxonomyDmoz extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'TaxonomyDmozPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        TaxonomyDmozPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the parent_id field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $parent_id;

	/**
	 * The value for the taxonomy_name field.
	 * Note: this column has a database default value of: '0'
	 * @var        string
	 */
	protected $taxonomy_name;

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
	 * The value for the is_active field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $is_active;

	/**
	 * The value for the slug field.
	 * @var        string
	 */
	protected $slug;

	/**
	 * The value for the slug_part field.
	 * @var        string
	 */
	protected $slug_part;

	/**
	 * @var        TaxonomyDmoz
	 */
	protected $aTaxonomyDmozRelatedByParentId;

	/**
	 * @var        array TaxonomyDmoz[] Collection to store aggregation of TaxonomyDmoz objects.
	 */
	protected $collTaxonomyDmozsRelatedById;

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
		$this->parent_id = 0;
		$this->taxonomy_name = '0';
		$this->is_active = 0;
	}

	/**
	 * Initializes internal state of BaseTaxonomyDmoz object.
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
	 * Get the [parent_id] column value.
	 * 
	 * @return     int
	 */
	public function getParentId()
	{
		return $this->parent_id;
	}

	/**
	 * Get the [taxonomy_name] column value.
	 * 
	 * @return     string
	 */
	public function getTaxonomyName()
	{
		return $this->taxonomy_name;
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
	 * Get the [is_active] column value.
	 * 
	 * @return     int
	 */
	public function getIsActive()
	{
		return $this->is_active;
	}

	/**
	 * Get the [slug] column value.
	 * 
	 * @return     string
	 */
	public function getSlug()
	{
		return $this->slug;
	}

	/**
	 * Get the [slug_part] column value.
	 * 
	 * @return     string
	 */
	public function getSlugPart()
	{
		return $this->slug_part;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     TaxonomyDmoz The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = TaxonomyDmozPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [parent_id] column.
	 * 
	 * @param      int $v new value
	 * @return     TaxonomyDmoz The current object (for fluent API support)
	 */
	public function setParentId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->parent_id !== $v || $this->isNew()) {
			$this->parent_id = $v;
			$this->modifiedColumns[] = TaxonomyDmozPeer::PARENT_ID;
		}

		if ($this->aTaxonomyDmozRelatedByParentId !== null && $this->aTaxonomyDmozRelatedByParentId->getId() !== $v) {
			$this->aTaxonomyDmozRelatedByParentId = null;
		}

		return $this;
	} // setParentId()

	/**
	 * Set the value of [taxonomy_name] column.
	 * 
	 * @param      string $v new value
	 * @return     TaxonomyDmoz The current object (for fluent API support)
	 */
	public function setTaxonomyName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->taxonomy_name !== $v || $this->isNew()) {
			$this->taxonomy_name = $v;
			$this->modifiedColumns[] = TaxonomyDmozPeer::TAXONOMY_NAME;
		}

		return $this;
	} // setTaxonomyName()

	/**
	 * Sets the value of [date_created] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     TaxonomyDmoz The current object (for fluent API support)
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
				$this->modifiedColumns[] = TaxonomyDmozPeer::DATE_CREATED;
			}
		} // if either are not null

		return $this;
	} // setDateCreated()

	/**
	 * Sets the value of [date_modified] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     TaxonomyDmoz The current object (for fluent API support)
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
				$this->modifiedColumns[] = TaxonomyDmozPeer::DATE_MODIFIED;
			}
		} // if either are not null

		return $this;
	} // setDateModified()

	/**
	 * Set the value of [is_active] column.
	 * 
	 * @param      int $v new value
	 * @return     TaxonomyDmoz The current object (for fluent API support)
	 */
	public function setIsActive($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->is_active !== $v || $this->isNew()) {
			$this->is_active = $v;
			$this->modifiedColumns[] = TaxonomyDmozPeer::IS_ACTIVE;
		}

		return $this;
	} // setIsActive()

	/**
	 * Set the value of [slug] column.
	 * 
	 * @param      string $v new value
	 * @return     TaxonomyDmoz The current object (for fluent API support)
	 */
	public function setSlug($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->slug !== $v) {
			$this->slug = $v;
			$this->modifiedColumns[] = TaxonomyDmozPeer::SLUG;
		}

		return $this;
	} // setSlug()

	/**
	 * Set the value of [slug_part] column.
	 * 
	 * @param      string $v new value
	 * @return     TaxonomyDmoz The current object (for fluent API support)
	 */
	public function setSlugPart($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->slug_part !== $v) {
			$this->slug_part = $v;
			$this->modifiedColumns[] = TaxonomyDmozPeer::SLUG_PART;
		}

		return $this;
	} // setSlugPart()

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
			if ($this->parent_id !== 0) {
				return false;
			}

			if ($this->taxonomy_name !== '0') {
				return false;
			}

			if ($this->is_active !== 0) {
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
			$this->parent_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->taxonomy_name = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->date_created = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->date_modified = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->is_active = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->slug = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->slug_part = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 8; // 8 = TaxonomyDmozPeer::NUM_COLUMNS - TaxonomyDmozPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating TaxonomyDmoz object", $e);
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

		if ($this->aTaxonomyDmozRelatedByParentId !== null && $this->parent_id !== $this->aTaxonomyDmozRelatedByParentId->getId()) {
			$this->aTaxonomyDmozRelatedByParentId = null;
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
			$con = Propel::getConnection(TaxonomyDmozPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = TaxonomyDmozPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?
			$this->aTaxonomyDmozRelatedByParentId = null;
			$this->collTaxonomyDmozsRelatedById = null;
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
			$con = Propel::getConnection(TaxonomyDmozPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				TaxonomyDmozQuery::create()
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
			$con = Propel::getConnection(TaxonomyDmozPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				TaxonomyDmozPeer::addInstanceToPool($this);
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

			if ($this->aTaxonomyDmozRelatedByParentId !== null) {
				if ($this->aTaxonomyDmozRelatedByParentId->isModified() || $this->aTaxonomyDmozRelatedByParentId->isNew()) {
					$affectedRows += $this->aTaxonomyDmozRelatedByParentId->save($con);
				}
				$this->setTaxonomyDmozRelatedByParentId($this->aTaxonomyDmozRelatedByParentId);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = TaxonomyDmozPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(TaxonomyDmozPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.TaxonomyDmozPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows += 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows += TaxonomyDmozPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collTaxonomyDmozsRelatedById !== null) {
				foreach ($this->collTaxonomyDmozsRelatedById as $referrerFK) {
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

			if ($this->aTaxonomyDmozRelatedByParentId !== null) {
				if (!$this->aTaxonomyDmozRelatedByParentId->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aTaxonomyDmozRelatedByParentId->getValidationFailures());
				}
			}


			if (($retval = TaxonomyDmozPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collTaxonomyDmozsRelatedById !== null) {
					foreach ($this->collTaxonomyDmozsRelatedById as $referrerFK) {
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
		$pos = TaxonomyDmozPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getParentId();
				break;
			case 2:
				return $this->getTaxonomyName();
				break;
			case 3:
				return $this->getDateCreated();
				break;
			case 4:
				return $this->getDateModified();
				break;
			case 5:
				return $this->getIsActive();
				break;
			case 6:
				return $this->getSlug();
				break;
			case 7:
				return $this->getSlugPart();
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
		$keys = TaxonomyDmozPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getParentId(),
			$keys[2] => $this->getTaxonomyName(),
			$keys[3] => $this->getDateCreated(),
			$keys[4] => $this->getDateModified(),
			$keys[5] => $this->getIsActive(),
			$keys[6] => $this->getSlug(),
			$keys[7] => $this->getSlugPart(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aTaxonomyDmozRelatedByParentId) {
				$result['TaxonomyDmozRelatedByParentId'] = $this->aTaxonomyDmozRelatedByParentId->toArray($keyType, $includeLazyLoadColumns, true);
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
		$pos = TaxonomyDmozPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setParentId($value);
				break;
			case 2:
				$this->setTaxonomyName($value);
				break;
			case 3:
				$this->setDateCreated($value);
				break;
			case 4:
				$this->setDateModified($value);
				break;
			case 5:
				$this->setIsActive($value);
				break;
			case 6:
				$this->setSlug($value);
				break;
			case 7:
				$this->setSlugPart($value);
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
		$keys = TaxonomyDmozPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setParentId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setTaxonomyName($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDateCreated($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDateModified($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setIsActive($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setSlug($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setSlugPart($arr[$keys[7]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(TaxonomyDmozPeer::DATABASE_NAME);

		if ($this->isColumnModified(TaxonomyDmozPeer::ID)) $criteria->add(TaxonomyDmozPeer::ID, $this->id);
		if ($this->isColumnModified(TaxonomyDmozPeer::PARENT_ID)) $criteria->add(TaxonomyDmozPeer::PARENT_ID, $this->parent_id);
		if ($this->isColumnModified(TaxonomyDmozPeer::TAXONOMY_NAME)) $criteria->add(TaxonomyDmozPeer::TAXONOMY_NAME, $this->taxonomy_name);
		if ($this->isColumnModified(TaxonomyDmozPeer::DATE_CREATED)) $criteria->add(TaxonomyDmozPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(TaxonomyDmozPeer::DATE_MODIFIED)) $criteria->add(TaxonomyDmozPeer::DATE_MODIFIED, $this->date_modified);
		if ($this->isColumnModified(TaxonomyDmozPeer::IS_ACTIVE)) $criteria->add(TaxonomyDmozPeer::IS_ACTIVE, $this->is_active);
		if ($this->isColumnModified(TaxonomyDmozPeer::SLUG)) $criteria->add(TaxonomyDmozPeer::SLUG, $this->slug);
		if ($this->isColumnModified(TaxonomyDmozPeer::SLUG_PART)) $criteria->add(TaxonomyDmozPeer::SLUG_PART, $this->slug_part);

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
		$criteria = new Criteria(TaxonomyDmozPeer::DATABASE_NAME);
		$criteria->add(TaxonomyDmozPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of TaxonomyDmoz (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setParentId($this->parent_id);
		$copyObj->setTaxonomyName($this->taxonomy_name);
		$copyObj->setDateCreated($this->date_created);
		$copyObj->setDateModified($this->date_modified);
		$copyObj->setIsActive($this->is_active);
		$copyObj->setSlug($this->slug);
		$copyObj->setSlugPart($this->slug_part);

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getTaxonomyDmozsRelatedById() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addTaxonomyDmozRelatedById($relObj->copy($deepCopy));
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
	 * @return     TaxonomyDmoz Clone of current object.
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
	 * @return     TaxonomyDmozPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new TaxonomyDmozPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a TaxonomyDmoz object.
	 *
	 * @param      TaxonomyDmoz $v
	 * @return     TaxonomyDmoz The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setTaxonomyDmozRelatedByParentId(TaxonomyDmoz $v = null)
	{
		if ($v === null) {
			$this->setParentId(0);
		} else {
			$this->setParentId($v->getId());
		}

		$this->aTaxonomyDmozRelatedByParentId = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the TaxonomyDmoz object, it will not be re-added.
		if ($v !== null) {
			$v->addTaxonomyDmozRelatedById($this);
		}

		return $this;
	}


	/**
	 * Get the associated TaxonomyDmoz object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     TaxonomyDmoz The associated TaxonomyDmoz object.
	 * @throws     PropelException
	 */
	public function getTaxonomyDmozRelatedByParentId(PropelPDO $con = null)
	{
		if ($this->aTaxonomyDmozRelatedByParentId === null && ($this->parent_id !== null)) {
			$this->aTaxonomyDmozRelatedByParentId = TaxonomyDmozQuery::create()->findPk($this->parent_id, $con);
			/* The following can be used additionally to
				 guarantee the related object contains a reference
				 to this object.  This level of coupling may, however, be
				 undesirable since it could result in an only partially populated collection
				 in the referenced object.
				 $this->aTaxonomyDmozRelatedByParentId->addTaxonomyDmozsRelatedById($this);
			 */
		}
		return $this->aTaxonomyDmozRelatedByParentId;
	}

	/**
	 * Clears out the collTaxonomyDmozsRelatedById collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addTaxonomyDmozsRelatedById()
	 */
	public function clearTaxonomyDmozsRelatedById()
	{
		$this->collTaxonomyDmozsRelatedById = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collTaxonomyDmozsRelatedById collection.
	 *
	 * By default this just sets the collTaxonomyDmozsRelatedById collection to an empty array (like clearcollTaxonomyDmozsRelatedById());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initTaxonomyDmozsRelatedById()
	{
		$this->collTaxonomyDmozsRelatedById = new PropelObjectCollection();
		$this->collTaxonomyDmozsRelatedById->setModel('TaxonomyDmoz');
	}

	/**
	 * Gets an array of TaxonomyDmoz objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this TaxonomyDmoz is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array TaxonomyDmoz[] List of TaxonomyDmoz objects
	 * @throws     PropelException
	 */
	public function getTaxonomyDmozsRelatedById($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collTaxonomyDmozsRelatedById || null !== $criteria) {
			if ($this->isNew() && null === $this->collTaxonomyDmozsRelatedById) {
				// return empty collection
				$this->initTaxonomyDmozsRelatedById();
			} else {
				$collTaxonomyDmozsRelatedById = TaxonomyDmozQuery::create(null, $criteria)
					->filterByTaxonomyDmozRelatedByParentId($this)
					->find($con);
				if (null !== $criteria) {
					return $collTaxonomyDmozsRelatedById;
				}
				$this->collTaxonomyDmozsRelatedById = $collTaxonomyDmozsRelatedById;
			}
		}
		return $this->collTaxonomyDmozsRelatedById;
	}

	/**
	 * Returns the number of related TaxonomyDmoz objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related TaxonomyDmoz objects.
	 * @throws     PropelException
	 */
	public function countTaxonomyDmozsRelatedById(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collTaxonomyDmozsRelatedById || null !== $criteria) {
			if ($this->isNew() && null === $this->collTaxonomyDmozsRelatedById) {
				return 0;
			} else {
				$query = TaxonomyDmozQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByTaxonomyDmozRelatedByParentId($this)
					->count($con);
			}
		} else {
			return count($this->collTaxonomyDmozsRelatedById);
		}
	}

	/**
	 * Method called to associate a TaxonomyDmoz object to this object
	 * through the TaxonomyDmoz foreign key attribute.
	 *
	 * @param      TaxonomyDmoz $l TaxonomyDmoz
	 * @return     void
	 * @throws     PropelException
	 */
	public function addTaxonomyDmozRelatedById(TaxonomyDmoz $l)
	{
		if ($this->collTaxonomyDmozsRelatedById === null) {
			$this->initTaxonomyDmozsRelatedById();
		}
		if (!$this->collTaxonomyDmozsRelatedById->contains($l)) { // only add it if the **same** object is not already associated
			$this->collTaxonomyDmozsRelatedById[]= $l;
			$l->setTaxonomyDmozRelatedByParentId($this);
		}
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->parent_id = null;
		$this->taxonomy_name = null;
		$this->date_created = null;
		$this->date_modified = null;
		$this->is_active = null;
		$this->slug = null;
		$this->slug_part = null;
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
			if ($this->collTaxonomyDmozsRelatedById) {
				foreach ((array) $this->collTaxonomyDmozsRelatedById as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		$this->collTaxonomyDmozsRelatedById = null;
		$this->aTaxonomyDmozRelatedByParentId = null;
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

} // BaseTaxonomyDmoz
