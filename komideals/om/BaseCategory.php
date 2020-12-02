<?php


/**
 * Base class that represents a row from the 'category' table.
 *
 * 
 *
 * @package    propel.generator.komideals.om
 */
abstract class BaseCategory extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'CategoryPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        CategoryPeer
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
	 * The value for the category_name field.
	 * Note: this column has a database default value of: '0'
	 * @var        string
	 */
	protected $category_name;

	/**
	 * The value for the date_created field.
	 * @var        string
	 */
	protected $date_created;

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
	 * @var        Category
	 */
	protected $aCategoryRelatedByParentId;

	/**
	 * @var        array Category[] Collection to store aggregation of Category objects.
	 */
	protected $collCategorysRelatedById;

	/**
	 * @var        array Deal[] Collection to store aggregation of Deal objects.
	 */
	protected $collDeals;

	/**
	 * @var        array DealFeed[] Collection to store aggregation of DealFeed objects.
	 */
	protected $collDealFeeds;

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
		$this->category_name = '0';
		$this->is_active = 0;
	}

	/**
	 * Initializes internal state of BaseCategory object.
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
	 * Get the [category_name] column value.
	 * 
	 * @return     string
	 */
	public function getCategoryName()
	{
		return $this->category_name;
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
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     Category The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = CategoryPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [parent_id] column.
	 * 
	 * @param      int $v new value
	 * @return     Category The current object (for fluent API support)
	 */
	public function setParentId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->parent_id !== $v || $this->isNew()) {
			$this->parent_id = $v;
			$this->modifiedColumns[] = CategoryPeer::PARENT_ID;
		}

		if ($this->aCategoryRelatedByParentId !== null && $this->aCategoryRelatedByParentId->getId() !== $v) {
			$this->aCategoryRelatedByParentId = null;
		}

		return $this;
	} // setParentId()

	/**
	 * Set the value of [category_name] column.
	 * 
	 * @param      string $v new value
	 * @return     Category The current object (for fluent API support)
	 */
	public function setCategoryName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->category_name !== $v || $this->isNew()) {
			$this->category_name = $v;
			$this->modifiedColumns[] = CategoryPeer::CATEGORY_NAME;
		}

		return $this;
	} // setCategoryName()

	/**
	 * Sets the value of [date_created] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     Category The current object (for fluent API support)
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
				$this->modifiedColumns[] = CategoryPeer::DATE_CREATED;
			}
		} // if either are not null

		return $this;
	} // setDateCreated()

	/**
	 * Set the value of [is_active] column.
	 * 
	 * @param      int $v new value
	 * @return     Category The current object (for fluent API support)
	 */
	public function setIsActive($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->is_active !== $v || $this->isNew()) {
			$this->is_active = $v;
			$this->modifiedColumns[] = CategoryPeer::IS_ACTIVE;
		}

		return $this;
	} // setIsActive()

	/**
	 * Set the value of [slug] column.
	 * 
	 * @param      string $v new value
	 * @return     Category The current object (for fluent API support)
	 */
	public function setSlug($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->slug !== $v) {
			$this->slug = $v;
			$this->modifiedColumns[] = CategoryPeer::SLUG;
		}

		return $this;
	} // setSlug()

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

			if ($this->category_name !== '0') {
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
			$this->category_name = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->date_created = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->is_active = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->slug = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 6; // 6 = CategoryPeer::NUM_COLUMNS - CategoryPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating Category object", $e);
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

		if ($this->aCategoryRelatedByParentId !== null && $this->parent_id !== $this->aCategoryRelatedByParentId->getId()) {
			$this->aCategoryRelatedByParentId = null;
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
			$con = Propel::getConnection(CategoryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = CategoryPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?
			$this->aCategoryRelatedByParentId = null;
			$this->collCategorysRelatedById = null;
			$this->collDeals = null;
			$this->collDealFeeds = null;
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
			$con = Propel::getConnection(CategoryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				CategoryQuery::create()
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
			$con = Propel::getConnection(CategoryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				CategoryPeer::addInstanceToPool($this);
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

			if ($this->aCategoryRelatedByParentId !== null) {
				if ($this->aCategoryRelatedByParentId->isModified() || $this->aCategoryRelatedByParentId->isNew()) {
					$affectedRows += $this->aCategoryRelatedByParentId->save($con);
				}
				$this->setCategoryRelatedByParentId($this->aCategoryRelatedByParentId);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = CategoryPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(CategoryPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.CategoryPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows += 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows += CategoryPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collCategorysRelatedById !== null) {
				foreach ($this->collCategorysRelatedById as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collDeals !== null) {
				foreach ($this->collDeals as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collDealFeeds !== null) {
				foreach ($this->collDealFeeds as $referrerFK) {
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

			if ($this->aCategoryRelatedByParentId !== null) {
				if (!$this->aCategoryRelatedByParentId->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aCategoryRelatedByParentId->getValidationFailures());
				}
			}


			if (($retval = CategoryPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collCategorysRelatedById !== null) {
					foreach ($this->collCategorysRelatedById as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collDeals !== null) {
					foreach ($this->collDeals as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collDealFeeds !== null) {
					foreach ($this->collDealFeeds as $referrerFK) {
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
		$pos = CategoryPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getCategoryName();
				break;
			case 3:
				return $this->getDateCreated();
				break;
			case 4:
				return $this->getIsActive();
				break;
			case 5:
				return $this->getSlug();
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
		$keys = CategoryPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getParentId(),
			$keys[2] => $this->getCategoryName(),
			$keys[3] => $this->getDateCreated(),
			$keys[4] => $this->getIsActive(),
			$keys[5] => $this->getSlug(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aCategoryRelatedByParentId) {
				$result['CategoryRelatedByParentId'] = $this->aCategoryRelatedByParentId->toArray($keyType, $includeLazyLoadColumns, true);
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
		$pos = CategoryPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setCategoryName($value);
				break;
			case 3:
				$this->setDateCreated($value);
				break;
			case 4:
				$this->setIsActive($value);
				break;
			case 5:
				$this->setSlug($value);
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
		$keys = CategoryPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setParentId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setCategoryName($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDateCreated($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setIsActive($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setSlug($arr[$keys[5]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(CategoryPeer::DATABASE_NAME);

		if ($this->isColumnModified(CategoryPeer::ID)) $criteria->add(CategoryPeer::ID, $this->id);
		if ($this->isColumnModified(CategoryPeer::PARENT_ID)) $criteria->add(CategoryPeer::PARENT_ID, $this->parent_id);
		if ($this->isColumnModified(CategoryPeer::CATEGORY_NAME)) $criteria->add(CategoryPeer::CATEGORY_NAME, $this->category_name);
		if ($this->isColumnModified(CategoryPeer::DATE_CREATED)) $criteria->add(CategoryPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(CategoryPeer::IS_ACTIVE)) $criteria->add(CategoryPeer::IS_ACTIVE, $this->is_active);
		if ($this->isColumnModified(CategoryPeer::SLUG)) $criteria->add(CategoryPeer::SLUG, $this->slug);

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
		$criteria = new Criteria(CategoryPeer::DATABASE_NAME);
		$criteria->add(CategoryPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of Category (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setParentId($this->parent_id);
		$copyObj->setCategoryName($this->category_name);
		$copyObj->setDateCreated($this->date_created);
		$copyObj->setIsActive($this->is_active);
		$copyObj->setSlug($this->slug);

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getCategorysRelatedById() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addCategoryRelatedById($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getDeals() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addDeal($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getDealFeeds() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addDealFeed($relObj->copy($deepCopy));
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
	 * @return     Category Clone of current object.
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
	 * @return     CategoryPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new CategoryPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a Category object.
	 *
	 * @param      Category $v
	 * @return     Category The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setCategoryRelatedByParentId(Category $v = null)
	{
		if ($v === null) {
			$this->setParentId(0);
		} else {
			$this->setParentId($v->getId());
		}

		$this->aCategoryRelatedByParentId = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the Category object, it will not be re-added.
		if ($v !== null) {
			$v->addCategoryRelatedById($this);
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
	public function getCategoryRelatedByParentId(PropelPDO $con = null)
	{
		if ($this->aCategoryRelatedByParentId === null && ($this->parent_id !== null)) {
			$this->aCategoryRelatedByParentId = CategoryQuery::create()->findPk($this->parent_id, $con);
			/* The following can be used additionally to
				 guarantee the related object contains a reference
				 to this object.  This level of coupling may, however, be
				 undesirable since it could result in an only partially populated collection
				 in the referenced object.
				 $this->aCategoryRelatedByParentId->addCategorysRelatedById($this);
			 */
		}
		return $this->aCategoryRelatedByParentId;
	}

	/**
	 * Clears out the collCategorysRelatedById collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addCategorysRelatedById()
	 */
	public function clearCategorysRelatedById()
	{
		$this->collCategorysRelatedById = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collCategorysRelatedById collection.
	 *
	 * By default this just sets the collCategorysRelatedById collection to an empty array (like clearcollCategorysRelatedById());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initCategorysRelatedById()
	{
		$this->collCategorysRelatedById = new PropelObjectCollection();
		$this->collCategorysRelatedById->setModel('Category');
	}

	/**
	 * Gets an array of Category objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Category is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Category[] List of Category objects
	 * @throws     PropelException
	 */
	public function getCategorysRelatedById($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collCategorysRelatedById || null !== $criteria) {
			if ($this->isNew() && null === $this->collCategorysRelatedById) {
				// return empty collection
				$this->initCategorysRelatedById();
			} else {
				$collCategorysRelatedById = CategoryQuery::create(null, $criteria)
					->filterByCategoryRelatedByParentId($this)
					->find($con);
				if (null !== $criteria) {
					return $collCategorysRelatedById;
				}
				$this->collCategorysRelatedById = $collCategorysRelatedById;
			}
		}
		return $this->collCategorysRelatedById;
	}

	/**
	 * Returns the number of related Category objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Category objects.
	 * @throws     PropelException
	 */
	public function countCategorysRelatedById(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collCategorysRelatedById || null !== $criteria) {
			if ($this->isNew() && null === $this->collCategorysRelatedById) {
				return 0;
			} else {
				$query = CategoryQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByCategoryRelatedByParentId($this)
					->count($con);
			}
		} else {
			return count($this->collCategorysRelatedById);
		}
	}

	/**
	 * Method called to associate a Category object to this object
	 * through the Category foreign key attribute.
	 *
	 * @param      Category $l Category
	 * @return     void
	 * @throws     PropelException
	 */
	public function addCategoryRelatedById(Category $l)
	{
		if ($this->collCategorysRelatedById === null) {
			$this->initCategorysRelatedById();
		}
		if (!$this->collCategorysRelatedById->contains($l)) { // only add it if the **same** object is not already associated
			$this->collCategorysRelatedById[]= $l;
			$l->setCategoryRelatedByParentId($this);
		}
	}

	/**
	 * Clears out the collDeals collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addDeals()
	 */
	public function clearDeals()
	{
		$this->collDeals = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collDeals collection.
	 *
	 * By default this just sets the collDeals collection to an empty array (like clearcollDeals());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initDeals()
	{
		$this->collDeals = new PropelObjectCollection();
		$this->collDeals->setModel('Deal');
	}

	/**
	 * Gets an array of Deal objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Category is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Deal[] List of Deal objects
	 * @throws     PropelException
	 */
	public function getDeals($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collDeals || null !== $criteria) {
			if ($this->isNew() && null === $this->collDeals) {
				// return empty collection
				$this->initDeals();
			} else {
				$collDeals = DealQuery::create(null, $criteria)
					->filterByCategory($this)
					->find($con);
				if (null !== $criteria) {
					return $collDeals;
				}
				$this->collDeals = $collDeals;
			}
		}
		return $this->collDeals;
	}

	/**
	 * Returns the number of related Deal objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Deal objects.
	 * @throws     PropelException
	 */
	public function countDeals(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collDeals || null !== $criteria) {
			if ($this->isNew() && null === $this->collDeals) {
				return 0;
			} else {
				$query = DealQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByCategory($this)
					->count($con);
			}
		} else {
			return count($this->collDeals);
		}
	}

	/**
	 * Method called to associate a Deal object to this object
	 * through the Deal foreign key attribute.
	 *
	 * @param      Deal $l Deal
	 * @return     void
	 * @throws     PropelException
	 */
	public function addDeal(Deal $l)
	{
		if ($this->collDeals === null) {
			$this->initDeals();
		}
		if (!$this->collDeals->contains($l)) { // only add it if the **same** object is not already associated
			$this->collDeals[]= $l;
			$l->setCategory($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Category is new, it will return
	 * an empty collection; or if this Category has previously
	 * been saved, it will retrieve related Deals from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Category.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Deal[] List of Deal objects
	 */
	public function getDealsJoinPricingModel($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = DealQuery::create(null, $criteria);
		$query->joinWith('PricingModel', $join_behavior);

		return $this->getDeals($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Category is new, it will return
	 * an empty collection; or if this Category has previously
	 * been saved, it will retrieve related Deals from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Category.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Deal[] List of Deal objects
	 */
	public function getDealsJoinBusiness($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = DealQuery::create(null, $criteria);
		$query->joinWith('Business', $join_behavior);

		return $this->getDeals($query, $con);
	}

	/**
	 * Clears out the collDealFeeds collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addDealFeeds()
	 */
	public function clearDealFeeds()
	{
		$this->collDealFeeds = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collDealFeeds collection.
	 *
	 * By default this just sets the collDealFeeds collection to an empty array (like clearcollDealFeeds());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initDealFeeds()
	{
		$this->collDealFeeds = new PropelObjectCollection();
		$this->collDealFeeds->setModel('DealFeed');
	}

	/**
	 * Gets an array of DealFeed objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this Category is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array DealFeed[] List of DealFeed objects
	 * @throws     PropelException
	 */
	public function getDealFeeds($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collDealFeeds || null !== $criteria) {
			if ($this->isNew() && null === $this->collDealFeeds) {
				// return empty collection
				$this->initDealFeeds();
			} else {
				$collDealFeeds = DealFeedQuery::create(null, $criteria)
					->filterByCategory($this)
					->find($con);
				if (null !== $criteria) {
					return $collDealFeeds;
				}
				$this->collDealFeeds = $collDealFeeds;
			}
		}
		return $this->collDealFeeds;
	}

	/**
	 * Returns the number of related DealFeed objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related DealFeed objects.
	 * @throws     PropelException
	 */
	public function countDealFeeds(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collDealFeeds || null !== $criteria) {
			if ($this->isNew() && null === $this->collDealFeeds) {
				return 0;
			} else {
				$query = DealFeedQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByCategory($this)
					->count($con);
			}
		} else {
			return count($this->collDealFeeds);
		}
	}

	/**
	 * Method called to associate a DealFeed object to this object
	 * through the DealFeed foreign key attribute.
	 *
	 * @param      DealFeed $l DealFeed
	 * @return     void
	 * @throws     PropelException
	 */
	public function addDealFeed(DealFeed $l)
	{
		if ($this->collDealFeeds === null) {
			$this->initDealFeeds();
		}
		if (!$this->collDealFeeds->contains($l)) { // only add it if the **same** object is not already associated
			$this->collDealFeeds[]= $l;
			$l->setCategory($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Category is new, it will return
	 * an empty collection; or if this Category has previously
	 * been saved, it will retrieve related DealFeeds from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Category.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array DealFeed[] List of DealFeed objects
	 */
	public function getDealFeedsJoinDealFeedDivision($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = DealFeedQuery::create(null, $criteria);
		$query->joinWith('DealFeedDivision', $join_behavior);

		return $this->getDealFeeds($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Category is new, it will return
	 * an empty collection; or if this Category has previously
	 * been saved, it will retrieve related DealFeeds from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Category.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array DealFeed[] List of DealFeed objects
	 */
	public function getDealFeedsJoinBusiness($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = DealFeedQuery::create(null, $criteria);
		$query->joinWith('Business', $join_behavior);

		return $this->getDealFeeds($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this Category is new, it will return
	 * an empty collection; or if this Category has previously
	 * been saved, it will retrieve related DealFeeds from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in Category.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array DealFeed[] List of DealFeed objects
	 */
	public function getDealFeedsJoinDealFeedSource($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = DealFeedQuery::create(null, $criteria);
		$query->joinWith('DealFeedSource', $join_behavior);

		return $this->getDealFeeds($query, $con);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->parent_id = null;
		$this->category_name = null;
		$this->date_created = null;
		$this->is_active = null;
		$this->slug = null;
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
			if ($this->collCategorysRelatedById) {
				foreach ((array) $this->collCategorysRelatedById as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collDeals) {
				foreach ((array) $this->collDeals as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collDealFeeds) {
				foreach ((array) $this->collDealFeeds as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		$this->collCategorysRelatedById = null;
		$this->collDeals = null;
		$this->collDealFeeds = null;
		$this->aCategoryRelatedByParentId = null;
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

} // BaseCategory
