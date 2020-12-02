<?php


/**
 * Base class that represents a row from the 'ZIPCode' table.
 *
 * 
 *
 * @package    propel.generator.sigfly.om
 */
abstract class BaseZipcode extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'ZipcodePeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        ZipcodePeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the zipcode field.
	 * @var        string
	 */
	protected $zipcode;

	/**
	 * The value for the zipcodetype field.
	 * @var        string
	 */
	protected $zipcodetype;

	/**
	 * The value for the city field.
	 * @var        string
	 */
	protected $city;

	/**
	 * The value for the citytype field.
	 * @var        string
	 */
	protected $citytype;

	/**
	 * The value for the county field.
	 * @var        string
	 */
	protected $county;

	/**
	 * The value for the countyfips field.
	 * @var        string
	 */
	protected $countyfips;

	/**
	 * The value for the state field.
	 * @var        string
	 */
	protected $state;

	/**
	 * The value for the statecode field.
	 * @var        string
	 */
	protected $statecode;

	/**
	 * The value for the statefips field.
	 * @var        string
	 */
	protected $statefips;

	/**
	 * The value for the msa field.
	 * @var        string
	 */
	protected $msa;

	/**
	 * The value for the areacode field.
	 * @var        string
	 */
	protected $areacode;

	/**
	 * The value for the timezone field.
	 * @var        string
	 */
	protected $timezone;

	/**
	 * The value for the gmtoffset field.
	 * @var        int
	 */
	protected $gmtoffset;

	/**
	 * The value for the dst field.
	 * @var        string
	 */
	protected $dst;

	/**
	 * The value for the latitude field.
	 * @var        double
	 */
	protected $latitude;

	/**
	 * The value for the longitude field.
	 * @var        double
	 */
	protected $longitude;

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
	 * Get the [zipcode] column value.
	 * 
	 * @return     string
	 */
	public function getZipcode()
	{
		return $this->zipcode;
	}

	/**
	 * Get the [zipcodetype] column value.
	 * 
	 * @return     string
	 */
	public function getZipcodetype()
	{
		return $this->zipcodetype;
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
	 * Get the [citytype] column value.
	 * 
	 * @return     string
	 */
	public function getCitytype()
	{
		return $this->citytype;
	}

	/**
	 * Get the [county] column value.
	 * 
	 * @return     string
	 */
	public function getCounty()
	{
		return $this->county;
	}

	/**
	 * Get the [countyfips] column value.
	 * 
	 * @return     string
	 */
	public function getCountyfips()
	{
		return $this->countyfips;
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
	 * Get the [statecode] column value.
	 * 
	 * @return     string
	 */
	public function getStatecode()
	{
		return $this->statecode;
	}

	/**
	 * Get the [statefips] column value.
	 * 
	 * @return     string
	 */
	public function getStatefips()
	{
		return $this->statefips;
	}

	/**
	 * Get the [msa] column value.
	 * 
	 * @return     string
	 */
	public function getMsa()
	{
		return $this->msa;
	}

	/**
	 * Get the [areacode] column value.
	 * 
	 * @return     string
	 */
	public function getAreacode()
	{
		return $this->areacode;
	}

	/**
	 * Get the [timezone] column value.
	 * 
	 * @return     string
	 */
	public function getTimezone()
	{
		return $this->timezone;
	}

	/**
	 * Get the [gmtoffset] column value.
	 * 
	 * @return     int
	 */
	public function getGmtoffset()
	{
		return $this->gmtoffset;
	}

	/**
	 * Get the [dst] column value.
	 * 
	 * @return     string
	 */
	public function getDst()
	{
		return $this->dst;
	}

	/**
	 * Get the [latitude] column value.
	 * 
	 * @return     double
	 */
	public function getLatitude()
	{
		return $this->latitude;
	}

	/**
	 * Get the [longitude] column value.
	 * 
	 * @return     double
	 */
	public function getLongitude()
	{
		return $this->longitude;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     Zipcode The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = ZipcodePeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [zipcode] column.
	 * 
	 * @param      string $v new value
	 * @return     Zipcode The current object (for fluent API support)
	 */
	public function setZipcode($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->zipcode !== $v) {
			$this->zipcode = $v;
			$this->modifiedColumns[] = ZipcodePeer::ZIPCODE;
		}

		return $this;
	} // setZipcode()

	/**
	 * Set the value of [zipcodetype] column.
	 * 
	 * @param      string $v new value
	 * @return     Zipcode The current object (for fluent API support)
	 */
	public function setZipcodetype($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->zipcodetype !== $v) {
			$this->zipcodetype = $v;
			$this->modifiedColumns[] = ZipcodePeer::ZIPCODETYPE;
		}

		return $this;
	} // setZipcodetype()

	/**
	 * Set the value of [city] column.
	 * 
	 * @param      string $v new value
	 * @return     Zipcode The current object (for fluent API support)
	 */
	public function setCity($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->city !== $v) {
			$this->city = $v;
			$this->modifiedColumns[] = ZipcodePeer::CITY;
		}

		return $this;
	} // setCity()

	/**
	 * Set the value of [citytype] column.
	 * 
	 * @param      string $v new value
	 * @return     Zipcode The current object (for fluent API support)
	 */
	public function setCitytype($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->citytype !== $v) {
			$this->citytype = $v;
			$this->modifiedColumns[] = ZipcodePeer::CITYTYPE;
		}

		return $this;
	} // setCitytype()

	/**
	 * Set the value of [county] column.
	 * 
	 * @param      string $v new value
	 * @return     Zipcode The current object (for fluent API support)
	 */
	public function setCounty($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->county !== $v) {
			$this->county = $v;
			$this->modifiedColumns[] = ZipcodePeer::COUNTY;
		}

		return $this;
	} // setCounty()

	/**
	 * Set the value of [countyfips] column.
	 * 
	 * @param      string $v new value
	 * @return     Zipcode The current object (for fluent API support)
	 */
	public function setCountyfips($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->countyfips !== $v) {
			$this->countyfips = $v;
			$this->modifiedColumns[] = ZipcodePeer::COUNTYFIPS;
		}

		return $this;
	} // setCountyfips()

	/**
	 * Set the value of [state] column.
	 * 
	 * @param      string $v new value
	 * @return     Zipcode The current object (for fluent API support)
	 */
	public function setState($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->state !== $v) {
			$this->state = $v;
			$this->modifiedColumns[] = ZipcodePeer::STATE;
		}

		return $this;
	} // setState()

	/**
	 * Set the value of [statecode] column.
	 * 
	 * @param      string $v new value
	 * @return     Zipcode The current object (for fluent API support)
	 */
	public function setStatecode($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->statecode !== $v) {
			$this->statecode = $v;
			$this->modifiedColumns[] = ZipcodePeer::STATECODE;
		}

		return $this;
	} // setStatecode()

	/**
	 * Set the value of [statefips] column.
	 * 
	 * @param      string $v new value
	 * @return     Zipcode The current object (for fluent API support)
	 */
	public function setStatefips($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->statefips !== $v) {
			$this->statefips = $v;
			$this->modifiedColumns[] = ZipcodePeer::STATEFIPS;
		}

		return $this;
	} // setStatefips()

	/**
	 * Set the value of [msa] column.
	 * 
	 * @param      string $v new value
	 * @return     Zipcode The current object (for fluent API support)
	 */
	public function setMsa($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->msa !== $v) {
			$this->msa = $v;
			$this->modifiedColumns[] = ZipcodePeer::MSA;
		}

		return $this;
	} // setMsa()

	/**
	 * Set the value of [areacode] column.
	 * 
	 * @param      string $v new value
	 * @return     Zipcode The current object (for fluent API support)
	 */
	public function setAreacode($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->areacode !== $v) {
			$this->areacode = $v;
			$this->modifiedColumns[] = ZipcodePeer::AREACODE;
		}

		return $this;
	} // setAreacode()

	/**
	 * Set the value of [timezone] column.
	 * 
	 * @param      string $v new value
	 * @return     Zipcode The current object (for fluent API support)
	 */
	public function setTimezone($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->timezone !== $v) {
			$this->timezone = $v;
			$this->modifiedColumns[] = ZipcodePeer::TIMEZONE;
		}

		return $this;
	} // setTimezone()

	/**
	 * Set the value of [gmtoffset] column.
	 * 
	 * @param      int $v new value
	 * @return     Zipcode The current object (for fluent API support)
	 */
	public function setGmtoffset($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->gmtoffset !== $v) {
			$this->gmtoffset = $v;
			$this->modifiedColumns[] = ZipcodePeer::GMTOFFSET;
		}

		return $this;
	} // setGmtoffset()

	/**
	 * Set the value of [dst] column.
	 * 
	 * @param      string $v new value
	 * @return     Zipcode The current object (for fluent API support)
	 */
	public function setDst($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->dst !== $v) {
			$this->dst = $v;
			$this->modifiedColumns[] = ZipcodePeer::DST;
		}

		return $this;
	} // setDst()

	/**
	 * Set the value of [latitude] column.
	 * 
	 * @param      double $v new value
	 * @return     Zipcode The current object (for fluent API support)
	 */
	public function setLatitude($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->latitude !== $v) {
			$this->latitude = $v;
			$this->modifiedColumns[] = ZipcodePeer::LATITUDE;
		}

		return $this;
	} // setLatitude()

	/**
	 * Set the value of [longitude] column.
	 * 
	 * @param      double $v new value
	 * @return     Zipcode The current object (for fluent API support)
	 */
	public function setLongitude($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->longitude !== $v) {
			$this->longitude = $v;
			$this->modifiedColumns[] = ZipcodePeer::LONGITUDE;
		}

		return $this;
	} // setLongitude()

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
			$this->zipcode = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->zipcodetype = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->city = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->citytype = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->county = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->countyfips = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->state = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->statecode = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->statefips = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->msa = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->areacode = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->timezone = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->gmtoffset = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
			$this->dst = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
			$this->latitude = ($row[$startcol + 15] !== null) ? (double) $row[$startcol + 15] : null;
			$this->longitude = ($row[$startcol + 16] !== null) ? (double) $row[$startcol + 16] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 17; // 17 = ZipcodePeer::NUM_COLUMNS - ZipcodePeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating Zipcode object", $e);
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
			$con = Propel::getConnection(ZipcodePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = ZipcodePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(ZipcodePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				ZipcodeQuery::create()
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
			$con = Propel::getConnection(ZipcodePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				ZipcodePeer::addInstanceToPool($this);
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
				$this->modifiedColumns[] = ZipcodePeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(ZipcodePeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.ZipcodePeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows = ZipcodePeer::doUpdate($this, $con);
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


			if (($retval = ZipcodePeer::doValidate($this, $columns)) !== true) {
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
		$pos = ZipcodePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getZipcode();
				break;
			case 2:
				return $this->getZipcodetype();
				break;
			case 3:
				return $this->getCity();
				break;
			case 4:
				return $this->getCitytype();
				break;
			case 5:
				return $this->getCounty();
				break;
			case 6:
				return $this->getCountyfips();
				break;
			case 7:
				return $this->getState();
				break;
			case 8:
				return $this->getStatecode();
				break;
			case 9:
				return $this->getStatefips();
				break;
			case 10:
				return $this->getMsa();
				break;
			case 11:
				return $this->getAreacode();
				break;
			case 12:
				return $this->getTimezone();
				break;
			case 13:
				return $this->getGmtoffset();
				break;
			case 14:
				return $this->getDst();
				break;
			case 15:
				return $this->getLatitude();
				break;
			case 16:
				return $this->getLongitude();
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
		$keys = ZipcodePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getZipcode(),
			$keys[2] => $this->getZipcodetype(),
			$keys[3] => $this->getCity(),
			$keys[4] => $this->getCitytype(),
			$keys[5] => $this->getCounty(),
			$keys[6] => $this->getCountyfips(),
			$keys[7] => $this->getState(),
			$keys[8] => $this->getStatecode(),
			$keys[9] => $this->getStatefips(),
			$keys[10] => $this->getMsa(),
			$keys[11] => $this->getAreacode(),
			$keys[12] => $this->getTimezone(),
			$keys[13] => $this->getGmtoffset(),
			$keys[14] => $this->getDst(),
			$keys[15] => $this->getLatitude(),
			$keys[16] => $this->getLongitude(),
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
		$pos = ZipcodePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setZipcode($value);
				break;
			case 2:
				$this->setZipcodetype($value);
				break;
			case 3:
				$this->setCity($value);
				break;
			case 4:
				$this->setCitytype($value);
				break;
			case 5:
				$this->setCounty($value);
				break;
			case 6:
				$this->setCountyfips($value);
				break;
			case 7:
				$this->setState($value);
				break;
			case 8:
				$this->setStatecode($value);
				break;
			case 9:
				$this->setStatefips($value);
				break;
			case 10:
				$this->setMsa($value);
				break;
			case 11:
				$this->setAreacode($value);
				break;
			case 12:
				$this->setTimezone($value);
				break;
			case 13:
				$this->setGmtoffset($value);
				break;
			case 14:
				$this->setDst($value);
				break;
			case 15:
				$this->setLatitude($value);
				break;
			case 16:
				$this->setLongitude($value);
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
		$keys = ZipcodePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setZipcode($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setZipcodetype($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setCity($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCitytype($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCounty($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCountyfips($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setState($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setStatecode($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setStatefips($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setMsa($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setAreacode($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setTimezone($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setGmtoffset($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setDst($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setLatitude($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setLongitude($arr[$keys[16]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(ZipcodePeer::DATABASE_NAME);

		if ($this->isColumnModified(ZipcodePeer::ID)) $criteria->add(ZipcodePeer::ID, $this->id);
		if ($this->isColumnModified(ZipcodePeer::ZIPCODE)) $criteria->add(ZipcodePeer::ZIPCODE, $this->zipcode);
		if ($this->isColumnModified(ZipcodePeer::ZIPCODETYPE)) $criteria->add(ZipcodePeer::ZIPCODETYPE, $this->zipcodetype);
		if ($this->isColumnModified(ZipcodePeer::CITY)) $criteria->add(ZipcodePeer::CITY, $this->city);
		if ($this->isColumnModified(ZipcodePeer::CITYTYPE)) $criteria->add(ZipcodePeer::CITYTYPE, $this->citytype);
		if ($this->isColumnModified(ZipcodePeer::COUNTY)) $criteria->add(ZipcodePeer::COUNTY, $this->county);
		if ($this->isColumnModified(ZipcodePeer::COUNTYFIPS)) $criteria->add(ZipcodePeer::COUNTYFIPS, $this->countyfips);
		if ($this->isColumnModified(ZipcodePeer::STATE)) $criteria->add(ZipcodePeer::STATE, $this->state);
		if ($this->isColumnModified(ZipcodePeer::STATECODE)) $criteria->add(ZipcodePeer::STATECODE, $this->statecode);
		if ($this->isColumnModified(ZipcodePeer::STATEFIPS)) $criteria->add(ZipcodePeer::STATEFIPS, $this->statefips);
		if ($this->isColumnModified(ZipcodePeer::MSA)) $criteria->add(ZipcodePeer::MSA, $this->msa);
		if ($this->isColumnModified(ZipcodePeer::AREACODE)) $criteria->add(ZipcodePeer::AREACODE, $this->areacode);
		if ($this->isColumnModified(ZipcodePeer::TIMEZONE)) $criteria->add(ZipcodePeer::TIMEZONE, $this->timezone);
		if ($this->isColumnModified(ZipcodePeer::GMTOFFSET)) $criteria->add(ZipcodePeer::GMTOFFSET, $this->gmtoffset);
		if ($this->isColumnModified(ZipcodePeer::DST)) $criteria->add(ZipcodePeer::DST, $this->dst);
		if ($this->isColumnModified(ZipcodePeer::LATITUDE)) $criteria->add(ZipcodePeer::LATITUDE, $this->latitude);
		if ($this->isColumnModified(ZipcodePeer::LONGITUDE)) $criteria->add(ZipcodePeer::LONGITUDE, $this->longitude);

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
		$criteria = new Criteria(ZipcodePeer::DATABASE_NAME);
		$criteria->add(ZipcodePeer::ID, $this->id);

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
	 * @param      object $copyObj An object of Zipcode (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setZipcode($this->zipcode);
		$copyObj->setZipcodetype($this->zipcodetype);
		$copyObj->setCity($this->city);
		$copyObj->setCitytype($this->citytype);
		$copyObj->setCounty($this->county);
		$copyObj->setCountyfips($this->countyfips);
		$copyObj->setState($this->state);
		$copyObj->setStatecode($this->statecode);
		$copyObj->setStatefips($this->statefips);
		$copyObj->setMsa($this->msa);
		$copyObj->setAreacode($this->areacode);
		$copyObj->setTimezone($this->timezone);
		$copyObj->setGmtoffset($this->gmtoffset);
		$copyObj->setDst($this->dst);
		$copyObj->setLatitude($this->latitude);
		$copyObj->setLongitude($this->longitude);

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
	 * @return     Zipcode Clone of current object.
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
	 * @return     ZipcodePeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new ZipcodePeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->zipcode = null;
		$this->zipcodetype = null;
		$this->city = null;
		$this->citytype = null;
		$this->county = null;
		$this->countyfips = null;
		$this->state = null;
		$this->statecode = null;
		$this->statefips = null;
		$this->msa = null;
		$this->areacode = null;
		$this->timezone = null;
		$this->gmtoffset = null;
		$this->dst = null;
		$this->latitude = null;
		$this->longitude = null;
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

} // BaseZipcode
