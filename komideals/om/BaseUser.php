<?php


/**
 * Base class that represents a row from the 'user' table.
 *
 * 
 *
 * @package    propel.generator.komideals.om
 */
abstract class BaseUser extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'UserPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        UserPeer
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
	 * The value for the password_hash field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $password_hash;

	/**
	 * The value for the password_reset_hash field.
	 * @var        string
	 */
	protected $password_reset_hash;

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
	 * The value for the job_title field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $job_title;

	/**
	 * The value for the gender field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $gender;

	/**
	 * The value for the fname field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $fname;

	/**
	 * The value for the lname field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $lname;

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
	 * The value for the is_affiliate field.
	 * @var        int
	 */
	protected $is_affiliate;

	/**
	 * The value for the referral_id field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $referral_id;

	/**
	 * The value for the referral field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $referral;

	/**
	 * The value for the advertising_timeline field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $advertising_timeline;

	/**
	 * The value for the monthly_budget field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $monthly_budget;

	/**
	 * The value for the primary_target field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $primary_target;

	/**
	 * The value for the advertising_objective field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $advertising_objective;

	/**
	 * The value for the additional_information field.
	 * @var        string
	 */
	protected $additional_information;

	/**
	 * The value for the is_email_verified field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $is_email_verified;

	/**
	 * The value for the is_premium field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $is_premium;

	/**
	 * The value for the last_login_date field.
	 * @var        string
	 */
	protected $last_login_date;

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
	 * @var        array AffiliatePayment[] Collection to store aggregation of AffiliatePayment objects.
	 */
	protected $collAffiliatePayments;

	/**
	 * @var        array BusinessUser[] Collection to store aggregation of BusinessUser objects.
	 */
	protected $collBusinessUsers;

	/**
	 * @var        array Credit[] Collection to store aggregation of Credit objects.
	 */
	protected $collCredits;

	/**
	 * @var        array DealFeedThread[] Collection to store aggregation of DealFeedThread objects.
	 */
	protected $collDealFeedThreads;

	/**
	 * @var        array Image[] Collection to store aggregation of Image objects.
	 */
	protected $collImages;

	/**
	 * @var        array Payment[] Collection to store aggregation of Payment objects.
	 */
	protected $collPayments;

	/**
	 * @var        array PaymentMethod[] Collection to store aggregation of PaymentMethod objects.
	 */
	protected $collPaymentMethods;

	/**
	 * @var        array PurchaseOrder[] Collection to store aggregation of PurchaseOrder objects.
	 */
	protected $collPurchaseOrders;

	/**
	 * @var        array UserNote[] Collection to store aggregation of UserNote objects.
	 */
	protected $collUserNotesRelatedByUserId;

	/**
	 * @var        array UserNote[] Collection to store aggregation of UserNote objects.
	 */
	protected $collUserNotesRelatedByAdminId;

	/**
	 * @var        array UserSecurityObject[] Collection to store aggregation of UserSecurityObject objects.
	 */
	protected $collUserSecurityObjectsRelatedByUserId;

	/**
	 * @var        array UserSecurityObject[] Collection to store aggregation of UserSecurityObject objects.
	 */
	protected $collUserSecurityObjectsRelatedByAssignedByUserId;

	/**
	 * @var        array UserThread[] Collection to store aggregation of UserThread objects.
	 */
	protected $collUserThreads;

	/**
	 * @var        array UserTopic[] Collection to store aggregation of UserTopic objects.
	 */
	protected $collUserTopics;

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
		$this->password_hash = '';
		$this->company_description = '';
		$this->company_url = '';
		$this->company_name = '';
		$this->job_title = '';
		$this->gender = '';
		$this->fname = '';
		$this->lname = '';
		$this->addressline1 = '';
		$this->city = '';
		$this->state = '';
		$this->postcode = '';
		$this->country = '';
		$this->telephone = '';
		$this->is_active = 0;
		$this->referral_id = 0;
		$this->referral = '';
		$this->advertising_timeline = '';
		$this->monthly_budget = '';
		$this->primary_target = '';
		$this->advertising_objective = '';
		$this->is_email_verified = 0;
		$this->is_premium = 0;
		$this->remote_addr_created = '';
		$this->remote_addr_modified = '';
	}

	/**
	 * Initializes internal state of BaseUser object.
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
	 * Get the [password_hash] column value.
	 * 
	 * @return     string
	 */
	public function getPasswordHash()
	{
		return $this->password_hash;
	}

	/**
	 * Get the [password_reset_hash] column value.
	 * 
	 * @return     string
	 */
	public function getPasswordResetHash()
	{
		return $this->password_reset_hash;
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
	 * Get the [job_title] column value.
	 * 
	 * @return     string
	 */
	public function getJobTitle()
	{
		return $this->job_title;
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
	 * Get the [is_affiliate] column value.
	 * 
	 * @return     int
	 */
	public function getIsAffiliate()
	{
		return $this->is_affiliate;
	}

	/**
	 * Get the [referral_id] column value.
	 * 
	 * @return     int
	 */
	public function getReferralId()
	{
		return $this->referral_id;
	}

	/**
	 * Get the [referral] column value.
	 * 
	 * @return     string
	 */
	public function getReferral()
	{
		return $this->referral;
	}

	/**
	 * Get the [advertising_timeline] column value.
	 * 
	 * @return     string
	 */
	public function getAdvertisingTimeline()
	{
		return $this->advertising_timeline;
	}

	/**
	 * Get the [monthly_budget] column value.
	 * 
	 * @return     string
	 */
	public function getMonthlyBudget()
	{
		return $this->monthly_budget;
	}

	/**
	 * Get the [primary_target] column value.
	 * 
	 * @return     string
	 */
	public function getPrimaryTarget()
	{
		return $this->primary_target;
	}

	/**
	 * Get the [advertising_objective] column value.
	 * 
	 * @return     string
	 */
	public function getAdvertisingObjective()
	{
		return $this->advertising_objective;
	}

	/**
	 * Get the [additional_information] column value.
	 * 
	 * @return     string
	 */
	public function getAdditionalInformation()
	{
		return $this->additional_information;
	}

	/**
	 * Get the [is_email_verified] column value.
	 * 
	 * @return     int
	 */
	public function getIsEmailVerified()
	{
		return $this->is_email_verified;
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
	 * Get the [optionally formatted] temporal [last_login_date] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getLastLoginDate($format = 'Y-m-d H:i:s')
	{
		if ($this->last_login_date === null) {
			return null;
		}


		if ($this->last_login_date === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->last_login_date);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->last_login_date, true), $x);
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
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = UserPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [email] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setEmail($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->email !== $v || $this->isNew()) {
			$this->email = $v;
			$this->modifiedColumns[] = UserPeer::EMAIL;
		}

		return $this;
	} // setEmail()

	/**
	 * Set the value of [password_hash] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setPasswordHash($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->password_hash !== $v || $this->isNew()) {
			$this->password_hash = $v;
			$this->modifiedColumns[] = UserPeer::PASSWORD_HASH;
		}

		return $this;
	} // setPasswordHash()

	/**
	 * Set the value of [password_reset_hash] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setPasswordResetHash($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->password_reset_hash !== $v) {
			$this->password_reset_hash = $v;
			$this->modifiedColumns[] = UserPeer::PASSWORD_RESET_HASH;
		}

		return $this;
	} // setPasswordResetHash()

	/**
	 * Set the value of [company_description] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setCompanyDescription($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->company_description !== $v || $this->isNew()) {
			$this->company_description = $v;
			$this->modifiedColumns[] = UserPeer::COMPANY_DESCRIPTION;
		}

		return $this;
	} // setCompanyDescription()

	/**
	 * Set the value of [company_url] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setCompanyUrl($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->company_url !== $v || $this->isNew()) {
			$this->company_url = $v;
			$this->modifiedColumns[] = UserPeer::COMPANY_URL;
		}

		return $this;
	} // setCompanyUrl()

	/**
	 * Set the value of [company_name] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setCompanyName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->company_name !== $v || $this->isNew()) {
			$this->company_name = $v;
			$this->modifiedColumns[] = UserPeer::COMPANY_NAME;
		}

		return $this;
	} // setCompanyName()

	/**
	 * Set the value of [job_title] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setJobTitle($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->job_title !== $v || $this->isNew()) {
			$this->job_title = $v;
			$this->modifiedColumns[] = UserPeer::JOB_TITLE;
		}

		return $this;
	} // setJobTitle()

	/**
	 * Set the value of [gender] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setGender($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->gender !== $v || $this->isNew()) {
			$this->gender = $v;
			$this->modifiedColumns[] = UserPeer::GENDER;
		}

		return $this;
	} // setGender()

	/**
	 * Set the value of [fname] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setFname($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->fname !== $v || $this->isNew()) {
			$this->fname = $v;
			$this->modifiedColumns[] = UserPeer::FNAME;
		}

		return $this;
	} // setFname()

	/**
	 * Set the value of [lname] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setLname($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->lname !== $v || $this->isNew()) {
			$this->lname = $v;
			$this->modifiedColumns[] = UserPeer::LNAME;
		}

		return $this;
	} // setLname()

	/**
	 * Set the value of [addressline1] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setAddressline1($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->addressline1 !== $v || $this->isNew()) {
			$this->addressline1 = $v;
			$this->modifiedColumns[] = UserPeer::ADDRESSLINE1;
		}

		return $this;
	} // setAddressline1()

	/**
	 * Set the value of [addressline2] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setAddressline2($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->addressline2 !== $v) {
			$this->addressline2 = $v;
			$this->modifiedColumns[] = UserPeer::ADDRESSLINE2;
		}

		return $this;
	} // setAddressline2()

	/**
	 * Set the value of [city] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setCity($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->city !== $v || $this->isNew()) {
			$this->city = $v;
			$this->modifiedColumns[] = UserPeer::CITY;
		}

		return $this;
	} // setCity()

	/**
	 * Set the value of [state] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setState($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->state !== $v || $this->isNew()) {
			$this->state = $v;
			$this->modifiedColumns[] = UserPeer::STATE;
		}

		return $this;
	} // setState()

	/**
	 * Set the value of [postcode] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setPostcode($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->postcode !== $v || $this->isNew()) {
			$this->postcode = $v;
			$this->modifiedColumns[] = UserPeer::POSTCODE;
		}

		return $this;
	} // setPostcode()

	/**
	 * Set the value of [country] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setCountry($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->country !== $v || $this->isNew()) {
			$this->country = $v;
			$this->modifiedColumns[] = UserPeer::COUNTRY;
		}

		return $this;
	} // setCountry()

	/**
	 * Set the value of [telephone] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setTelephone($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->telephone !== $v || $this->isNew()) {
			$this->telephone = $v;
			$this->modifiedColumns[] = UserPeer::TELEPHONE;
		}

		return $this;
	} // setTelephone()

	/**
	 * Set the value of [fax] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setFax($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->fax !== $v) {
			$this->fax = $v;
			$this->modifiedColumns[] = UserPeer::FAX;
		}

		return $this;
	} // setFax()

	/**
	 * Set the value of [is_active] column.
	 * 
	 * @param      int $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setIsActive($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->is_active !== $v || $this->isNew()) {
			$this->is_active = $v;
			$this->modifiedColumns[] = UserPeer::IS_ACTIVE;
		}

		return $this;
	} // setIsActive()

	/**
	 * Set the value of [is_affiliate] column.
	 * 
	 * @param      int $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setIsAffiliate($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->is_affiliate !== $v) {
			$this->is_affiliate = $v;
			$this->modifiedColumns[] = UserPeer::IS_AFFILIATE;
		}

		return $this;
	} // setIsAffiliate()

	/**
	 * Set the value of [referral_id] column.
	 * 
	 * @param      int $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setReferralId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->referral_id !== $v || $this->isNew()) {
			$this->referral_id = $v;
			$this->modifiedColumns[] = UserPeer::REFERRAL_ID;
		}

		return $this;
	} // setReferralId()

	/**
	 * Set the value of [referral] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setReferral($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->referral !== $v || $this->isNew()) {
			$this->referral = $v;
			$this->modifiedColumns[] = UserPeer::REFERRAL;
		}

		return $this;
	} // setReferral()

	/**
	 * Set the value of [advertising_timeline] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setAdvertisingTimeline($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->advertising_timeline !== $v || $this->isNew()) {
			$this->advertising_timeline = $v;
			$this->modifiedColumns[] = UserPeer::ADVERTISING_TIMELINE;
		}

		return $this;
	} // setAdvertisingTimeline()

	/**
	 * Set the value of [monthly_budget] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setMonthlyBudget($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->monthly_budget !== $v || $this->isNew()) {
			$this->monthly_budget = $v;
			$this->modifiedColumns[] = UserPeer::MONTHLY_BUDGET;
		}

		return $this;
	} // setMonthlyBudget()

	/**
	 * Set the value of [primary_target] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setPrimaryTarget($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->primary_target !== $v || $this->isNew()) {
			$this->primary_target = $v;
			$this->modifiedColumns[] = UserPeer::PRIMARY_TARGET;
		}

		return $this;
	} // setPrimaryTarget()

	/**
	 * Set the value of [advertising_objective] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setAdvertisingObjective($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->advertising_objective !== $v || $this->isNew()) {
			$this->advertising_objective = $v;
			$this->modifiedColumns[] = UserPeer::ADVERTISING_OBJECTIVE;
		}

		return $this;
	} // setAdvertisingObjective()

	/**
	 * Set the value of [additional_information] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setAdditionalInformation($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->additional_information !== $v) {
			$this->additional_information = $v;
			$this->modifiedColumns[] = UserPeer::ADDITIONAL_INFORMATION;
		}

		return $this;
	} // setAdditionalInformation()

	/**
	 * Set the value of [is_email_verified] column.
	 * 
	 * @param      int $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setIsEmailVerified($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->is_email_verified !== $v || $this->isNew()) {
			$this->is_email_verified = $v;
			$this->modifiedColumns[] = UserPeer::IS_EMAIL_VERIFIED;
		}

		return $this;
	} // setIsEmailVerified()

	/**
	 * Set the value of [is_premium] column.
	 * 
	 * @param      int $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setIsPremium($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->is_premium !== $v || $this->isNew()) {
			$this->is_premium = $v;
			$this->modifiedColumns[] = UserPeer::IS_PREMIUM;
		}

		return $this;
	} // setIsPremium()

	/**
	 * Sets the value of [last_login_date] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     User The current object (for fluent API support)
	 */
	public function setLastLoginDate($v)
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

		if ( $this->last_login_date !== null || $dt !== null ) {
			// (nested ifs are a little easier to read in this case)

			$currNorm = ($this->last_login_date !== null && $tmpDt = new DateTime($this->last_login_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newNorm = ($dt !== null) ? $dt->format('Y-m-d H:i:s') : null;

			if ( ($currNorm !== $newNorm) // normalized values don't match 
					)
			{
				$this->last_login_date = ($dt ? $dt->format('Y-m-d H:i:s') : null);
				$this->modifiedColumns[] = UserPeer::LAST_LOGIN_DATE;
			}
		} // if either are not null

		return $this;
	} // setLastLoginDate()

	/**
	 * Sets the value of [date_created] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     User The current object (for fluent API support)
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
				$this->modifiedColumns[] = UserPeer::DATE_CREATED;
			}
		} // if either are not null

		return $this;
	} // setDateCreated()

	/**
	 * Sets the value of [date_expires] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     User The current object (for fluent API support)
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
				$this->modifiedColumns[] = UserPeer::DATE_EXPIRES;
			}
		} // if either are not null

		return $this;
	} // setDateExpires()

	/**
	 * Sets the value of [date_modified] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.  Empty string will
	 *						be treated as NULL for temporal objects.
	 * @return     User The current object (for fluent API support)
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
				$this->modifiedColumns[] = UserPeer::DATE_MODIFIED;
			}
		} // if either are not null

		return $this;
	} // setDateModified()

	/**
	 * Set the value of [remote_addr_created] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setRemoteAddrCreated($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->remote_addr_created !== $v || $this->isNew()) {
			$this->remote_addr_created = $v;
			$this->modifiedColumns[] = UserPeer::REMOTE_ADDR_CREATED;
		}

		return $this;
	} // setRemoteAddrCreated()

	/**
	 * Set the value of [remote_addr_modified] column.
	 * 
	 * @param      string $v new value
	 * @return     User The current object (for fluent API support)
	 */
	public function setRemoteAddrModified($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->remote_addr_modified !== $v || $this->isNew()) {
			$this->remote_addr_modified = $v;
			$this->modifiedColumns[] = UserPeer::REMOTE_ADDR_MODIFIED;
		}

		return $this;
	} // setRemoteAddrModified()

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

			if ($this->password_hash !== '') {
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

			if ($this->job_title !== '') {
				return false;
			}

			if ($this->gender !== '') {
				return false;
			}

			if ($this->fname !== '') {
				return false;
			}

			if ($this->lname !== '') {
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

			if ($this->referral_id !== 0) {
				return false;
			}

			if ($this->referral !== '') {
				return false;
			}

			if ($this->advertising_timeline !== '') {
				return false;
			}

			if ($this->monthly_budget !== '') {
				return false;
			}

			if ($this->primary_target !== '') {
				return false;
			}

			if ($this->advertising_objective !== '') {
				return false;
			}

			if ($this->is_email_verified !== 0) {
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
			$this->password_hash = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->password_reset_hash = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->company_description = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->company_url = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->company_name = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->job_title = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->gender = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->fname = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->lname = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->addressline1 = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->addressline2 = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->city = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
			$this->state = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
			$this->postcode = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
			$this->country = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
			$this->telephone = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
			$this->fax = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
			$this->is_active = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
			$this->is_affiliate = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
			$this->referral_id = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
			$this->referral = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
			$this->advertising_timeline = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
			$this->monthly_budget = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
			$this->primary_target = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
			$this->advertising_objective = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
			$this->additional_information = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
			$this->is_email_verified = ($row[$startcol + 28] !== null) ? (int) $row[$startcol + 28] : null;
			$this->is_premium = ($row[$startcol + 29] !== null) ? (int) $row[$startcol + 29] : null;
			$this->last_login_date = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
			$this->date_created = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
			$this->date_expires = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
			$this->date_modified = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
			$this->remote_addr_created = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
			$this->remote_addr_modified = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 36; // 36 = UserPeer::NUM_COLUMNS - UserPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating User object", $e);
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
			$con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = UserPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?
			$this->collAffiliatePayments = null;
			$this->collBusinessUsers = null;
			$this->collCredits = null;
			$this->collDealFeedThreads = null;
			$this->collImages = null;
			$this->collPayments = null;
			$this->collPaymentMethods = null;
			$this->collPurchaseOrders = null;
			$this->collUserNotesRelatedByUserId = null;
			$this->collUserNotesRelatedByAdminId = null;
			$this->collUserSecurityObjectsRelatedByUserId = null;
			$this->collUserSecurityObjectsRelatedByAssignedByUserId = null;
			$this->collUserThreads = null;
			$this->collUserTopics = null;
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
			$con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				UserQuery::create()
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
			$con = Propel::getConnection(UserPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				UserPeer::addInstanceToPool($this);
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
				$this->modifiedColumns[] = UserPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(UserPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.UserPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows = UserPeer::doUpdate($this, $con);
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

			if ($this->collCredits !== null) {
				foreach ($this->collCredits as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collDealFeedThreads !== null) {
				foreach ($this->collDealFeedThreads as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collImages !== null) {
				foreach ($this->collImages as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collPayments !== null) {
				foreach ($this->collPayments as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collPaymentMethods !== null) {
				foreach ($this->collPaymentMethods as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collPurchaseOrders !== null) {
				foreach ($this->collPurchaseOrders as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collUserNotesRelatedByUserId !== null) {
				foreach ($this->collUserNotesRelatedByUserId as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collUserNotesRelatedByAdminId !== null) {
				foreach ($this->collUserNotesRelatedByAdminId as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collUserSecurityObjectsRelatedByUserId !== null) {
				foreach ($this->collUserSecurityObjectsRelatedByUserId as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collUserSecurityObjectsRelatedByAssignedByUserId !== null) {
				foreach ($this->collUserSecurityObjectsRelatedByAssignedByUserId as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collUserThreads !== null) {
				foreach ($this->collUserThreads as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collUserTopics !== null) {
				foreach ($this->collUserTopics as $referrerFK) {
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


			if (($retval = UserPeer::doValidate($this, $columns)) !== true) {
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

				if ($this->collCredits !== null) {
					foreach ($this->collCredits as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collDealFeedThreads !== null) {
					foreach ($this->collDealFeedThreads as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collImages !== null) {
					foreach ($this->collImages as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collPayments !== null) {
					foreach ($this->collPayments as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collPaymentMethods !== null) {
					foreach ($this->collPaymentMethods as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collPurchaseOrders !== null) {
					foreach ($this->collPurchaseOrders as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collUserNotesRelatedByUserId !== null) {
					foreach ($this->collUserNotesRelatedByUserId as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collUserNotesRelatedByAdminId !== null) {
					foreach ($this->collUserNotesRelatedByAdminId as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collUserSecurityObjectsRelatedByUserId !== null) {
					foreach ($this->collUserSecurityObjectsRelatedByUserId as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collUserSecurityObjectsRelatedByAssignedByUserId !== null) {
					foreach ($this->collUserSecurityObjectsRelatedByAssignedByUserId as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collUserThreads !== null) {
					foreach ($this->collUserThreads as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collUserTopics !== null) {
					foreach ($this->collUserTopics as $referrerFK) {
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
		$pos = UserPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getPasswordHash();
				break;
			case 3:
				return $this->getPasswordResetHash();
				break;
			case 4:
				return $this->getCompanyDescription();
				break;
			case 5:
				return $this->getCompanyUrl();
				break;
			case 6:
				return $this->getCompanyName();
				break;
			case 7:
				return $this->getJobTitle();
				break;
			case 8:
				return $this->getGender();
				break;
			case 9:
				return $this->getFname();
				break;
			case 10:
				return $this->getLname();
				break;
			case 11:
				return $this->getAddressline1();
				break;
			case 12:
				return $this->getAddressline2();
				break;
			case 13:
				return $this->getCity();
				break;
			case 14:
				return $this->getState();
				break;
			case 15:
				return $this->getPostcode();
				break;
			case 16:
				return $this->getCountry();
				break;
			case 17:
				return $this->getTelephone();
				break;
			case 18:
				return $this->getFax();
				break;
			case 19:
				return $this->getIsActive();
				break;
			case 20:
				return $this->getIsAffiliate();
				break;
			case 21:
				return $this->getReferralId();
				break;
			case 22:
				return $this->getReferral();
				break;
			case 23:
				return $this->getAdvertisingTimeline();
				break;
			case 24:
				return $this->getMonthlyBudget();
				break;
			case 25:
				return $this->getPrimaryTarget();
				break;
			case 26:
				return $this->getAdvertisingObjective();
				break;
			case 27:
				return $this->getAdditionalInformation();
				break;
			case 28:
				return $this->getIsEmailVerified();
				break;
			case 29:
				return $this->getIsPremium();
				break;
			case 30:
				return $this->getLastLoginDate();
				break;
			case 31:
				return $this->getDateCreated();
				break;
			case 32:
				return $this->getDateExpires();
				break;
			case 33:
				return $this->getDateModified();
				break;
			case 34:
				return $this->getRemoteAddrCreated();
				break;
			case 35:
				return $this->getRemoteAddrModified();
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
		$keys = UserPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getEmail(),
			$keys[2] => $this->getPasswordHash(),
			$keys[3] => $this->getPasswordResetHash(),
			$keys[4] => $this->getCompanyDescription(),
			$keys[5] => $this->getCompanyUrl(),
			$keys[6] => $this->getCompanyName(),
			$keys[7] => $this->getJobTitle(),
			$keys[8] => $this->getGender(),
			$keys[9] => $this->getFname(),
			$keys[10] => $this->getLname(),
			$keys[11] => $this->getAddressline1(),
			$keys[12] => $this->getAddressline2(),
			$keys[13] => $this->getCity(),
			$keys[14] => $this->getState(),
			$keys[15] => $this->getPostcode(),
			$keys[16] => $this->getCountry(),
			$keys[17] => $this->getTelephone(),
			$keys[18] => $this->getFax(),
			$keys[19] => $this->getIsActive(),
			$keys[20] => $this->getIsAffiliate(),
			$keys[21] => $this->getReferralId(),
			$keys[22] => $this->getReferral(),
			$keys[23] => $this->getAdvertisingTimeline(),
			$keys[24] => $this->getMonthlyBudget(),
			$keys[25] => $this->getPrimaryTarget(),
			$keys[26] => $this->getAdvertisingObjective(),
			$keys[27] => $this->getAdditionalInformation(),
			$keys[28] => $this->getIsEmailVerified(),
			$keys[29] => $this->getIsPremium(),
			$keys[30] => $this->getLastLoginDate(),
			$keys[31] => $this->getDateCreated(),
			$keys[32] => $this->getDateExpires(),
			$keys[33] => $this->getDateModified(),
			$keys[34] => $this->getRemoteAddrCreated(),
			$keys[35] => $this->getRemoteAddrModified(),
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
		$pos = UserPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setPasswordHash($value);
				break;
			case 3:
				$this->setPasswordResetHash($value);
				break;
			case 4:
				$this->setCompanyDescription($value);
				break;
			case 5:
				$this->setCompanyUrl($value);
				break;
			case 6:
				$this->setCompanyName($value);
				break;
			case 7:
				$this->setJobTitle($value);
				break;
			case 8:
				$this->setGender($value);
				break;
			case 9:
				$this->setFname($value);
				break;
			case 10:
				$this->setLname($value);
				break;
			case 11:
				$this->setAddressline1($value);
				break;
			case 12:
				$this->setAddressline2($value);
				break;
			case 13:
				$this->setCity($value);
				break;
			case 14:
				$this->setState($value);
				break;
			case 15:
				$this->setPostcode($value);
				break;
			case 16:
				$this->setCountry($value);
				break;
			case 17:
				$this->setTelephone($value);
				break;
			case 18:
				$this->setFax($value);
				break;
			case 19:
				$this->setIsActive($value);
				break;
			case 20:
				$this->setIsAffiliate($value);
				break;
			case 21:
				$this->setReferralId($value);
				break;
			case 22:
				$this->setReferral($value);
				break;
			case 23:
				$this->setAdvertisingTimeline($value);
				break;
			case 24:
				$this->setMonthlyBudget($value);
				break;
			case 25:
				$this->setPrimaryTarget($value);
				break;
			case 26:
				$this->setAdvertisingObjective($value);
				break;
			case 27:
				$this->setAdditionalInformation($value);
				break;
			case 28:
				$this->setIsEmailVerified($value);
				break;
			case 29:
				$this->setIsPremium($value);
				break;
			case 30:
				$this->setLastLoginDate($value);
				break;
			case 31:
				$this->setDateCreated($value);
				break;
			case 32:
				$this->setDateExpires($value);
				break;
			case 33:
				$this->setDateModified($value);
				break;
			case 34:
				$this->setRemoteAddrCreated($value);
				break;
			case 35:
				$this->setRemoteAddrModified($value);
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
		$keys = UserPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setEmail($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setPasswordHash($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setPasswordResetHash($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setCompanyDescription($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCompanyUrl($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCompanyName($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setJobTitle($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setGender($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setFname($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setLname($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setAddressline1($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setAddressline2($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setCity($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setState($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setPostcode($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setCountry($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setTelephone($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setFax($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setIsActive($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setIsAffiliate($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setReferralId($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setReferral($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setAdvertisingTimeline($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setMonthlyBudget($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setPrimaryTarget($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setAdvertisingObjective($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setAdditionalInformation($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setIsEmailVerified($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setIsPremium($arr[$keys[29]]);
		if (array_key_exists($keys[30], $arr)) $this->setLastLoginDate($arr[$keys[30]]);
		if (array_key_exists($keys[31], $arr)) $this->setDateCreated($arr[$keys[31]]);
		if (array_key_exists($keys[32], $arr)) $this->setDateExpires($arr[$keys[32]]);
		if (array_key_exists($keys[33], $arr)) $this->setDateModified($arr[$keys[33]]);
		if (array_key_exists($keys[34], $arr)) $this->setRemoteAddrCreated($arr[$keys[34]]);
		if (array_key_exists($keys[35], $arr)) $this->setRemoteAddrModified($arr[$keys[35]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(UserPeer::DATABASE_NAME);

		if ($this->isColumnModified(UserPeer::ID)) $criteria->add(UserPeer::ID, $this->id);
		if ($this->isColumnModified(UserPeer::EMAIL)) $criteria->add(UserPeer::EMAIL, $this->email);
		if ($this->isColumnModified(UserPeer::PASSWORD_HASH)) $criteria->add(UserPeer::PASSWORD_HASH, $this->password_hash);
		if ($this->isColumnModified(UserPeer::PASSWORD_RESET_HASH)) $criteria->add(UserPeer::PASSWORD_RESET_HASH, $this->password_reset_hash);
		if ($this->isColumnModified(UserPeer::COMPANY_DESCRIPTION)) $criteria->add(UserPeer::COMPANY_DESCRIPTION, $this->company_description);
		if ($this->isColumnModified(UserPeer::COMPANY_URL)) $criteria->add(UserPeer::COMPANY_URL, $this->company_url);
		if ($this->isColumnModified(UserPeer::COMPANY_NAME)) $criteria->add(UserPeer::COMPANY_NAME, $this->company_name);
		if ($this->isColumnModified(UserPeer::JOB_TITLE)) $criteria->add(UserPeer::JOB_TITLE, $this->job_title);
		if ($this->isColumnModified(UserPeer::GENDER)) $criteria->add(UserPeer::GENDER, $this->gender);
		if ($this->isColumnModified(UserPeer::FNAME)) $criteria->add(UserPeer::FNAME, $this->fname);
		if ($this->isColumnModified(UserPeer::LNAME)) $criteria->add(UserPeer::LNAME, $this->lname);
		if ($this->isColumnModified(UserPeer::ADDRESSLINE1)) $criteria->add(UserPeer::ADDRESSLINE1, $this->addressline1);
		if ($this->isColumnModified(UserPeer::ADDRESSLINE2)) $criteria->add(UserPeer::ADDRESSLINE2, $this->addressline2);
		if ($this->isColumnModified(UserPeer::CITY)) $criteria->add(UserPeer::CITY, $this->city);
		if ($this->isColumnModified(UserPeer::STATE)) $criteria->add(UserPeer::STATE, $this->state);
		if ($this->isColumnModified(UserPeer::POSTCODE)) $criteria->add(UserPeer::POSTCODE, $this->postcode);
		if ($this->isColumnModified(UserPeer::COUNTRY)) $criteria->add(UserPeer::COUNTRY, $this->country);
		if ($this->isColumnModified(UserPeer::TELEPHONE)) $criteria->add(UserPeer::TELEPHONE, $this->telephone);
		if ($this->isColumnModified(UserPeer::FAX)) $criteria->add(UserPeer::FAX, $this->fax);
		if ($this->isColumnModified(UserPeer::IS_ACTIVE)) $criteria->add(UserPeer::IS_ACTIVE, $this->is_active);
		if ($this->isColumnModified(UserPeer::IS_AFFILIATE)) $criteria->add(UserPeer::IS_AFFILIATE, $this->is_affiliate);
		if ($this->isColumnModified(UserPeer::REFERRAL_ID)) $criteria->add(UserPeer::REFERRAL_ID, $this->referral_id);
		if ($this->isColumnModified(UserPeer::REFERRAL)) $criteria->add(UserPeer::REFERRAL, $this->referral);
		if ($this->isColumnModified(UserPeer::ADVERTISING_TIMELINE)) $criteria->add(UserPeer::ADVERTISING_TIMELINE, $this->advertising_timeline);
		if ($this->isColumnModified(UserPeer::MONTHLY_BUDGET)) $criteria->add(UserPeer::MONTHLY_BUDGET, $this->monthly_budget);
		if ($this->isColumnModified(UserPeer::PRIMARY_TARGET)) $criteria->add(UserPeer::PRIMARY_TARGET, $this->primary_target);
		if ($this->isColumnModified(UserPeer::ADVERTISING_OBJECTIVE)) $criteria->add(UserPeer::ADVERTISING_OBJECTIVE, $this->advertising_objective);
		if ($this->isColumnModified(UserPeer::ADDITIONAL_INFORMATION)) $criteria->add(UserPeer::ADDITIONAL_INFORMATION, $this->additional_information);
		if ($this->isColumnModified(UserPeer::IS_EMAIL_VERIFIED)) $criteria->add(UserPeer::IS_EMAIL_VERIFIED, $this->is_email_verified);
		if ($this->isColumnModified(UserPeer::IS_PREMIUM)) $criteria->add(UserPeer::IS_PREMIUM, $this->is_premium);
		if ($this->isColumnModified(UserPeer::LAST_LOGIN_DATE)) $criteria->add(UserPeer::LAST_LOGIN_DATE, $this->last_login_date);
		if ($this->isColumnModified(UserPeer::DATE_CREATED)) $criteria->add(UserPeer::DATE_CREATED, $this->date_created);
		if ($this->isColumnModified(UserPeer::DATE_EXPIRES)) $criteria->add(UserPeer::DATE_EXPIRES, $this->date_expires);
		if ($this->isColumnModified(UserPeer::DATE_MODIFIED)) $criteria->add(UserPeer::DATE_MODIFIED, $this->date_modified);
		if ($this->isColumnModified(UserPeer::REMOTE_ADDR_CREATED)) $criteria->add(UserPeer::REMOTE_ADDR_CREATED, $this->remote_addr_created);
		if ($this->isColumnModified(UserPeer::REMOTE_ADDR_MODIFIED)) $criteria->add(UserPeer::REMOTE_ADDR_MODIFIED, $this->remote_addr_modified);

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
		$criteria = new Criteria(UserPeer::DATABASE_NAME);
		$criteria->add(UserPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of User (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setEmail($this->email);
		$copyObj->setPasswordHash($this->password_hash);
		$copyObj->setPasswordResetHash($this->password_reset_hash);
		$copyObj->setCompanyDescription($this->company_description);
		$copyObj->setCompanyUrl($this->company_url);
		$copyObj->setCompanyName($this->company_name);
		$copyObj->setJobTitle($this->job_title);
		$copyObj->setGender($this->gender);
		$copyObj->setFname($this->fname);
		$copyObj->setLname($this->lname);
		$copyObj->setAddressline1($this->addressline1);
		$copyObj->setAddressline2($this->addressline2);
		$copyObj->setCity($this->city);
		$copyObj->setState($this->state);
		$copyObj->setPostcode($this->postcode);
		$copyObj->setCountry($this->country);
		$copyObj->setTelephone($this->telephone);
		$copyObj->setFax($this->fax);
		$copyObj->setIsActive($this->is_active);
		$copyObj->setIsAffiliate($this->is_affiliate);
		$copyObj->setReferralId($this->referral_id);
		$copyObj->setReferral($this->referral);
		$copyObj->setAdvertisingTimeline($this->advertising_timeline);
		$copyObj->setMonthlyBudget($this->monthly_budget);
		$copyObj->setPrimaryTarget($this->primary_target);
		$copyObj->setAdvertisingObjective($this->advertising_objective);
		$copyObj->setAdditionalInformation($this->additional_information);
		$copyObj->setIsEmailVerified($this->is_email_verified);
		$copyObj->setIsPremium($this->is_premium);
		$copyObj->setLastLoginDate($this->last_login_date);
		$copyObj->setDateCreated($this->date_created);
		$copyObj->setDateExpires($this->date_expires);
		$copyObj->setDateModified($this->date_modified);
		$copyObj->setRemoteAddrCreated($this->remote_addr_created);
		$copyObj->setRemoteAddrModified($this->remote_addr_modified);

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

			foreach ($this->getCredits() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addCredit($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getDealFeedThreads() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addDealFeedThread($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getImages() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addImage($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getPayments() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addPayment($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getPaymentMethods() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addPaymentMethod($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getPurchaseOrders() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addPurchaseOrder($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getUserNotesRelatedByUserId() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addUserNoteRelatedByUserId($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getUserNotesRelatedByAdminId() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addUserNoteRelatedByAdminId($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getUserSecurityObjectsRelatedByUserId() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addUserSecurityObjectRelatedByUserId($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getUserSecurityObjectsRelatedByAssignedByUserId() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addUserSecurityObjectRelatedByAssignedByUserId($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getUserThreads() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addUserThread($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getUserTopics() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addUserTopic($relObj->copy($deepCopy));
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
	 * @return     User Clone of current object.
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
	 * @return     UserPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new UserPeer();
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
	 * If this User is new, it will return
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
					->filterByUser($this)
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
					->filterByUser($this)
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
			$l->setUser($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this User is new, it will return
	 * an empty collection; or if this User has previously
	 * been saved, it will retrieve related AffiliatePayments from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in User.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array AffiliatePayment[] List of AffiliatePayment objects
	 */
	public function getAffiliatePaymentsJoinBusiness($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = AffiliatePaymentQuery::create(null, $criteria);
		$query->joinWith('Business', $join_behavior);

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
	 * If this User is new, it will return
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
					->filterByUser($this)
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
					->filterByUser($this)
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
			$l->setUser($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this User is new, it will return
	 * an empty collection; or if this User has previously
	 * been saved, it will retrieve related BusinessUsers from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in User.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array BusinessUser[] List of BusinessUser objects
	 */
	public function getBusinessUsersJoinBusiness($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = BusinessUserQuery::create(null, $criteria);
		$query->joinWith('Business', $join_behavior);

		return $this->getBusinessUsers($query, $con);
	}

	/**
	 * Clears out the collCredits collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addCredits()
	 */
	public function clearCredits()
	{
		$this->collCredits = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collCredits collection.
	 *
	 * By default this just sets the collCredits collection to an empty array (like clearcollCredits());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initCredits()
	{
		$this->collCredits = new PropelObjectCollection();
		$this->collCredits->setModel('Credit');
	}

	/**
	 * Gets an array of Credit objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this User is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Credit[] List of Credit objects
	 * @throws     PropelException
	 */
	public function getCredits($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collCredits || null !== $criteria) {
			if ($this->isNew() && null === $this->collCredits) {
				// return empty collection
				$this->initCredits();
			} else {
				$collCredits = CreditQuery::create(null, $criteria)
					->filterByUser($this)
					->find($con);
				if (null !== $criteria) {
					return $collCredits;
				}
				$this->collCredits = $collCredits;
			}
		}
		return $this->collCredits;
	}

	/**
	 * Returns the number of related Credit objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Credit objects.
	 * @throws     PropelException
	 */
	public function countCredits(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collCredits || null !== $criteria) {
			if ($this->isNew() && null === $this->collCredits) {
				return 0;
			} else {
				$query = CreditQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByUser($this)
					->count($con);
			}
		} else {
			return count($this->collCredits);
		}
	}

	/**
	 * Method called to associate a Credit object to this object
	 * through the Credit foreign key attribute.
	 *
	 * @param      Credit $l Credit
	 * @return     void
	 * @throws     PropelException
	 */
	public function addCredit(Credit $l)
	{
		if ($this->collCredits === null) {
			$this->initCredits();
		}
		if (!$this->collCredits->contains($l)) { // only add it if the **same** object is not already associated
			$this->collCredits[]= $l;
			$l->setUser($this);
		}
	}

	/**
	 * Clears out the collDealFeedThreads collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addDealFeedThreads()
	 */
	public function clearDealFeedThreads()
	{
		$this->collDealFeedThreads = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collDealFeedThreads collection.
	 *
	 * By default this just sets the collDealFeedThreads collection to an empty array (like clearcollDealFeedThreads());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initDealFeedThreads()
	{
		$this->collDealFeedThreads = new PropelObjectCollection();
		$this->collDealFeedThreads->setModel('DealFeedThread');
	}

	/**
	 * Gets an array of DealFeedThread objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this User is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array DealFeedThread[] List of DealFeedThread objects
	 * @throws     PropelException
	 */
	public function getDealFeedThreads($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collDealFeedThreads || null !== $criteria) {
			if ($this->isNew() && null === $this->collDealFeedThreads) {
				// return empty collection
				$this->initDealFeedThreads();
			} else {
				$collDealFeedThreads = DealFeedThreadQuery::create(null, $criteria)
					->filterByUser($this)
					->find($con);
				if (null !== $criteria) {
					return $collDealFeedThreads;
				}
				$this->collDealFeedThreads = $collDealFeedThreads;
			}
		}
		return $this->collDealFeedThreads;
	}

	/**
	 * Returns the number of related DealFeedThread objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related DealFeedThread objects.
	 * @throws     PropelException
	 */
	public function countDealFeedThreads(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collDealFeedThreads || null !== $criteria) {
			if ($this->isNew() && null === $this->collDealFeedThreads) {
				return 0;
			} else {
				$query = DealFeedThreadQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByUser($this)
					->count($con);
			}
		} else {
			return count($this->collDealFeedThreads);
		}
	}

	/**
	 * Method called to associate a DealFeedThread object to this object
	 * through the DealFeedThread foreign key attribute.
	 *
	 * @param      DealFeedThread $l DealFeedThread
	 * @return     void
	 * @throws     PropelException
	 */
	public function addDealFeedThread(DealFeedThread $l)
	{
		if ($this->collDealFeedThreads === null) {
			$this->initDealFeedThreads();
		}
		if (!$this->collDealFeedThreads->contains($l)) { // only add it if the **same** object is not already associated
			$this->collDealFeedThreads[]= $l;
			$l->setUser($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this User is new, it will return
	 * an empty collection; or if this User has previously
	 * been saved, it will retrieve related DealFeedThreads from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in User.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array DealFeedThread[] List of DealFeedThread objects
	 */
	public function getDealFeedThreadsJoinDealFeed($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = DealFeedThreadQuery::create(null, $criteria);
		$query->joinWith('DealFeed', $join_behavior);

		return $this->getDealFeedThreads($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this User is new, it will return
	 * an empty collection; or if this User has previously
	 * been saved, it will retrieve related DealFeedThreads from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in User.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array DealFeedThread[] List of DealFeedThread objects
	 */
	public function getDealFeedThreadsJoinDealFeedThreadRelatedByParentId($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = DealFeedThreadQuery::create(null, $criteria);
		$query->joinWith('DealFeedThreadRelatedByParentId', $join_behavior);

		return $this->getDealFeedThreads($query, $con);
	}

	/**
	 * Clears out the collImages collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addImages()
	 */
	public function clearImages()
	{
		$this->collImages = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collImages collection.
	 *
	 * By default this just sets the collImages collection to an empty array (like clearcollImages());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initImages()
	{
		$this->collImages = new PropelObjectCollection();
		$this->collImages->setModel('Image');
	}

	/**
	 * Gets an array of Image objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this User is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array Image[] List of Image objects
	 * @throws     PropelException
	 */
	public function getImages($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collImages || null !== $criteria) {
			if ($this->isNew() && null === $this->collImages) {
				// return empty collection
				$this->initImages();
			} else {
				$collImages = ImageQuery::create(null, $criteria)
					->filterByUser($this)
					->find($con);
				if (null !== $criteria) {
					return $collImages;
				}
				$this->collImages = $collImages;
			}
		}
		return $this->collImages;
	}

	/**
	 * Returns the number of related Image objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related Image objects.
	 * @throws     PropelException
	 */
	public function countImages(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collImages || null !== $criteria) {
			if ($this->isNew() && null === $this->collImages) {
				return 0;
			} else {
				$query = ImageQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByUser($this)
					->count($con);
			}
		} else {
			return count($this->collImages);
		}
	}

	/**
	 * Method called to associate a Image object to this object
	 * through the Image foreign key attribute.
	 *
	 * @param      Image $l Image
	 * @return     void
	 * @throws     PropelException
	 */
	public function addImage(Image $l)
	{
		if ($this->collImages === null) {
			$this->initImages();
		}
		if (!$this->collImages->contains($l)) { // only add it if the **same** object is not already associated
			$this->collImages[]= $l;
			$l->setUser($this);
		}
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
	 * If this User is new, it will return
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
					->filterByUser($this)
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
					->filterByUser($this)
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
			$l->setUser($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this User is new, it will return
	 * an empty collection; or if this User has previously
	 * been saved, it will retrieve related Payments from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in User.
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
	 * Otherwise if this User is new, it will return
	 * an empty collection; or if this User has previously
	 * been saved, it will retrieve related Payments from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in User.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array Payment[] List of Payment objects
	 */
	public function getPaymentsJoinPaymentMethod($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = PaymentQuery::create(null, $criteria);
		$query->joinWith('PaymentMethod', $join_behavior);

		return $this->getPayments($query, $con);
	}

	/**
	 * Clears out the collPaymentMethods collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addPaymentMethods()
	 */
	public function clearPaymentMethods()
	{
		$this->collPaymentMethods = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collPaymentMethods collection.
	 *
	 * By default this just sets the collPaymentMethods collection to an empty array (like clearcollPaymentMethods());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initPaymentMethods()
	{
		$this->collPaymentMethods = new PropelObjectCollection();
		$this->collPaymentMethods->setModel('PaymentMethod');
	}

	/**
	 * Gets an array of PaymentMethod objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this User is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array PaymentMethod[] List of PaymentMethod objects
	 * @throws     PropelException
	 */
	public function getPaymentMethods($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collPaymentMethods || null !== $criteria) {
			if ($this->isNew() && null === $this->collPaymentMethods) {
				// return empty collection
				$this->initPaymentMethods();
			} else {
				$collPaymentMethods = PaymentMethodQuery::create(null, $criteria)
					->filterByUser($this)
					->find($con);
				if (null !== $criteria) {
					return $collPaymentMethods;
				}
				$this->collPaymentMethods = $collPaymentMethods;
			}
		}
		return $this->collPaymentMethods;
	}

	/**
	 * Returns the number of related PaymentMethod objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related PaymentMethod objects.
	 * @throws     PropelException
	 */
	public function countPaymentMethods(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collPaymentMethods || null !== $criteria) {
			if ($this->isNew() && null === $this->collPaymentMethods) {
				return 0;
			} else {
				$query = PaymentMethodQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByUser($this)
					->count($con);
			}
		} else {
			return count($this->collPaymentMethods);
		}
	}

	/**
	 * Method called to associate a PaymentMethod object to this object
	 * through the PaymentMethod foreign key attribute.
	 *
	 * @param      PaymentMethod $l PaymentMethod
	 * @return     void
	 * @throws     PropelException
	 */
	public function addPaymentMethod(PaymentMethod $l)
	{
		if ($this->collPaymentMethods === null) {
			$this->initPaymentMethods();
		}
		if (!$this->collPaymentMethods->contains($l)) { // only add it if the **same** object is not already associated
			$this->collPaymentMethods[]= $l;
			$l->setUser($this);
		}
	}

	/**
	 * Clears out the collPurchaseOrders collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addPurchaseOrders()
	 */
	public function clearPurchaseOrders()
	{
		$this->collPurchaseOrders = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collPurchaseOrders collection.
	 *
	 * By default this just sets the collPurchaseOrders collection to an empty array (like clearcollPurchaseOrders());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initPurchaseOrders()
	{
		$this->collPurchaseOrders = new PropelObjectCollection();
		$this->collPurchaseOrders->setModel('PurchaseOrder');
	}

	/**
	 * Gets an array of PurchaseOrder objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this User is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array PurchaseOrder[] List of PurchaseOrder objects
	 * @throws     PropelException
	 */
	public function getPurchaseOrders($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collPurchaseOrders || null !== $criteria) {
			if ($this->isNew() && null === $this->collPurchaseOrders) {
				// return empty collection
				$this->initPurchaseOrders();
			} else {
				$collPurchaseOrders = PurchaseOrderQuery::create(null, $criteria)
					->filterByUser($this)
					->find($con);
				if (null !== $criteria) {
					return $collPurchaseOrders;
				}
				$this->collPurchaseOrders = $collPurchaseOrders;
			}
		}
		return $this->collPurchaseOrders;
	}

	/**
	 * Returns the number of related PurchaseOrder objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related PurchaseOrder objects.
	 * @throws     PropelException
	 */
	public function countPurchaseOrders(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collPurchaseOrders || null !== $criteria) {
			if ($this->isNew() && null === $this->collPurchaseOrders) {
				return 0;
			} else {
				$query = PurchaseOrderQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByUser($this)
					->count($con);
			}
		} else {
			return count($this->collPurchaseOrders);
		}
	}

	/**
	 * Method called to associate a PurchaseOrder object to this object
	 * through the PurchaseOrder foreign key attribute.
	 *
	 * @param      PurchaseOrder $l PurchaseOrder
	 * @return     void
	 * @throws     PropelException
	 */
	public function addPurchaseOrder(PurchaseOrder $l)
	{
		if ($this->collPurchaseOrders === null) {
			$this->initPurchaseOrders();
		}
		if (!$this->collPurchaseOrders->contains($l)) { // only add it if the **same** object is not already associated
			$this->collPurchaseOrders[]= $l;
			$l->setUser($this);
		}
	}

	/**
	 * Clears out the collUserNotesRelatedByUserId collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addUserNotesRelatedByUserId()
	 */
	public function clearUserNotesRelatedByUserId()
	{
		$this->collUserNotesRelatedByUserId = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collUserNotesRelatedByUserId collection.
	 *
	 * By default this just sets the collUserNotesRelatedByUserId collection to an empty array (like clearcollUserNotesRelatedByUserId());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initUserNotesRelatedByUserId()
	{
		$this->collUserNotesRelatedByUserId = new PropelObjectCollection();
		$this->collUserNotesRelatedByUserId->setModel('UserNote');
	}

	/**
	 * Gets an array of UserNote objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this User is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array UserNote[] List of UserNote objects
	 * @throws     PropelException
	 */
	public function getUserNotesRelatedByUserId($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collUserNotesRelatedByUserId || null !== $criteria) {
			if ($this->isNew() && null === $this->collUserNotesRelatedByUserId) {
				// return empty collection
				$this->initUserNotesRelatedByUserId();
			} else {
				$collUserNotesRelatedByUserId = UserNoteQuery::create(null, $criteria)
					->filterByUserRelatedByUserId($this)
					->find($con);
				if (null !== $criteria) {
					return $collUserNotesRelatedByUserId;
				}
				$this->collUserNotesRelatedByUserId = $collUserNotesRelatedByUserId;
			}
		}
		return $this->collUserNotesRelatedByUserId;
	}

	/**
	 * Returns the number of related UserNote objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related UserNote objects.
	 * @throws     PropelException
	 */
	public function countUserNotesRelatedByUserId(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collUserNotesRelatedByUserId || null !== $criteria) {
			if ($this->isNew() && null === $this->collUserNotesRelatedByUserId) {
				return 0;
			} else {
				$query = UserNoteQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByUserRelatedByUserId($this)
					->count($con);
			}
		} else {
			return count($this->collUserNotesRelatedByUserId);
		}
	}

	/**
	 * Method called to associate a UserNote object to this object
	 * through the UserNote foreign key attribute.
	 *
	 * @param      UserNote $l UserNote
	 * @return     void
	 * @throws     PropelException
	 */
	public function addUserNoteRelatedByUserId(UserNote $l)
	{
		if ($this->collUserNotesRelatedByUserId === null) {
			$this->initUserNotesRelatedByUserId();
		}
		if (!$this->collUserNotesRelatedByUserId->contains($l)) { // only add it if the **same** object is not already associated
			$this->collUserNotesRelatedByUserId[]= $l;
			$l->setUserRelatedByUserId($this);
		}
	}

	/**
	 * Clears out the collUserNotesRelatedByAdminId collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addUserNotesRelatedByAdminId()
	 */
	public function clearUserNotesRelatedByAdminId()
	{
		$this->collUserNotesRelatedByAdminId = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collUserNotesRelatedByAdminId collection.
	 *
	 * By default this just sets the collUserNotesRelatedByAdminId collection to an empty array (like clearcollUserNotesRelatedByAdminId());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initUserNotesRelatedByAdminId()
	{
		$this->collUserNotesRelatedByAdminId = new PropelObjectCollection();
		$this->collUserNotesRelatedByAdminId->setModel('UserNote');
	}

	/**
	 * Gets an array of UserNote objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this User is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array UserNote[] List of UserNote objects
	 * @throws     PropelException
	 */
	public function getUserNotesRelatedByAdminId($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collUserNotesRelatedByAdminId || null !== $criteria) {
			if ($this->isNew() && null === $this->collUserNotesRelatedByAdminId) {
				// return empty collection
				$this->initUserNotesRelatedByAdminId();
			} else {
				$collUserNotesRelatedByAdminId = UserNoteQuery::create(null, $criteria)
					->filterByUserRelatedByAdminId($this)
					->find($con);
				if (null !== $criteria) {
					return $collUserNotesRelatedByAdminId;
				}
				$this->collUserNotesRelatedByAdminId = $collUserNotesRelatedByAdminId;
			}
		}
		return $this->collUserNotesRelatedByAdminId;
	}

	/**
	 * Returns the number of related UserNote objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related UserNote objects.
	 * @throws     PropelException
	 */
	public function countUserNotesRelatedByAdminId(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collUserNotesRelatedByAdminId || null !== $criteria) {
			if ($this->isNew() && null === $this->collUserNotesRelatedByAdminId) {
				return 0;
			} else {
				$query = UserNoteQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByUserRelatedByAdminId($this)
					->count($con);
			}
		} else {
			return count($this->collUserNotesRelatedByAdminId);
		}
	}

	/**
	 * Method called to associate a UserNote object to this object
	 * through the UserNote foreign key attribute.
	 *
	 * @param      UserNote $l UserNote
	 * @return     void
	 * @throws     PropelException
	 */
	public function addUserNoteRelatedByAdminId(UserNote $l)
	{
		if ($this->collUserNotesRelatedByAdminId === null) {
			$this->initUserNotesRelatedByAdminId();
		}
		if (!$this->collUserNotesRelatedByAdminId->contains($l)) { // only add it if the **same** object is not already associated
			$this->collUserNotesRelatedByAdminId[]= $l;
			$l->setUserRelatedByAdminId($this);
		}
	}

	/**
	 * Clears out the collUserSecurityObjectsRelatedByUserId collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addUserSecurityObjectsRelatedByUserId()
	 */
	public function clearUserSecurityObjectsRelatedByUserId()
	{
		$this->collUserSecurityObjectsRelatedByUserId = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collUserSecurityObjectsRelatedByUserId collection.
	 *
	 * By default this just sets the collUserSecurityObjectsRelatedByUserId collection to an empty array (like clearcollUserSecurityObjectsRelatedByUserId());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initUserSecurityObjectsRelatedByUserId()
	{
		$this->collUserSecurityObjectsRelatedByUserId = new PropelObjectCollection();
		$this->collUserSecurityObjectsRelatedByUserId->setModel('UserSecurityObject');
	}

	/**
	 * Gets an array of UserSecurityObject objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this User is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array UserSecurityObject[] List of UserSecurityObject objects
	 * @throws     PropelException
	 */
	public function getUserSecurityObjectsRelatedByUserId($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collUserSecurityObjectsRelatedByUserId || null !== $criteria) {
			if ($this->isNew() && null === $this->collUserSecurityObjectsRelatedByUserId) {
				// return empty collection
				$this->initUserSecurityObjectsRelatedByUserId();
			} else {
				$collUserSecurityObjectsRelatedByUserId = UserSecurityObjectQuery::create(null, $criteria)
					->filterByUserRelatedByUserId($this)
					->find($con);
				if (null !== $criteria) {
					return $collUserSecurityObjectsRelatedByUserId;
				}
				$this->collUserSecurityObjectsRelatedByUserId = $collUserSecurityObjectsRelatedByUserId;
			}
		}
		return $this->collUserSecurityObjectsRelatedByUserId;
	}

	/**
	 * Returns the number of related UserSecurityObject objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related UserSecurityObject objects.
	 * @throws     PropelException
	 */
	public function countUserSecurityObjectsRelatedByUserId(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collUserSecurityObjectsRelatedByUserId || null !== $criteria) {
			if ($this->isNew() && null === $this->collUserSecurityObjectsRelatedByUserId) {
				return 0;
			} else {
				$query = UserSecurityObjectQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByUserRelatedByUserId($this)
					->count($con);
			}
		} else {
			return count($this->collUserSecurityObjectsRelatedByUserId);
		}
	}

	/**
	 * Method called to associate a UserSecurityObject object to this object
	 * through the UserSecurityObject foreign key attribute.
	 *
	 * @param      UserSecurityObject $l UserSecurityObject
	 * @return     void
	 * @throws     PropelException
	 */
	public function addUserSecurityObjectRelatedByUserId(UserSecurityObject $l)
	{
		if ($this->collUserSecurityObjectsRelatedByUserId === null) {
			$this->initUserSecurityObjectsRelatedByUserId();
		}
		if (!$this->collUserSecurityObjectsRelatedByUserId->contains($l)) { // only add it if the **same** object is not already associated
			$this->collUserSecurityObjectsRelatedByUserId[]= $l;
			$l->setUserRelatedByUserId($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this User is new, it will return
	 * an empty collection; or if this User has previously
	 * been saved, it will retrieve related UserSecurityObjectsRelatedByUserId from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in User.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array UserSecurityObject[] List of UserSecurityObject objects
	 */
	public function getUserSecurityObjectsRelatedByUserIdJoinSecurityObject($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = UserSecurityObjectQuery::create(null, $criteria);
		$query->joinWith('SecurityObject', $join_behavior);

		return $this->getUserSecurityObjectsRelatedByUserId($query, $con);
	}

	/**
	 * Clears out the collUserSecurityObjectsRelatedByAssignedByUserId collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addUserSecurityObjectsRelatedByAssignedByUserId()
	 */
	public function clearUserSecurityObjectsRelatedByAssignedByUserId()
	{
		$this->collUserSecurityObjectsRelatedByAssignedByUserId = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collUserSecurityObjectsRelatedByAssignedByUserId collection.
	 *
	 * By default this just sets the collUserSecurityObjectsRelatedByAssignedByUserId collection to an empty array (like clearcollUserSecurityObjectsRelatedByAssignedByUserId());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initUserSecurityObjectsRelatedByAssignedByUserId()
	{
		$this->collUserSecurityObjectsRelatedByAssignedByUserId = new PropelObjectCollection();
		$this->collUserSecurityObjectsRelatedByAssignedByUserId->setModel('UserSecurityObject');
	}

	/**
	 * Gets an array of UserSecurityObject objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this User is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array UserSecurityObject[] List of UserSecurityObject objects
	 * @throws     PropelException
	 */
	public function getUserSecurityObjectsRelatedByAssignedByUserId($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collUserSecurityObjectsRelatedByAssignedByUserId || null !== $criteria) {
			if ($this->isNew() && null === $this->collUserSecurityObjectsRelatedByAssignedByUserId) {
				// return empty collection
				$this->initUserSecurityObjectsRelatedByAssignedByUserId();
			} else {
				$collUserSecurityObjectsRelatedByAssignedByUserId = UserSecurityObjectQuery::create(null, $criteria)
					->filterByUserRelatedByAssignedByUserId($this)
					->find($con);
				if (null !== $criteria) {
					return $collUserSecurityObjectsRelatedByAssignedByUserId;
				}
				$this->collUserSecurityObjectsRelatedByAssignedByUserId = $collUserSecurityObjectsRelatedByAssignedByUserId;
			}
		}
		return $this->collUserSecurityObjectsRelatedByAssignedByUserId;
	}

	/**
	 * Returns the number of related UserSecurityObject objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related UserSecurityObject objects.
	 * @throws     PropelException
	 */
	public function countUserSecurityObjectsRelatedByAssignedByUserId(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collUserSecurityObjectsRelatedByAssignedByUserId || null !== $criteria) {
			if ($this->isNew() && null === $this->collUserSecurityObjectsRelatedByAssignedByUserId) {
				return 0;
			} else {
				$query = UserSecurityObjectQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByUserRelatedByAssignedByUserId($this)
					->count($con);
			}
		} else {
			return count($this->collUserSecurityObjectsRelatedByAssignedByUserId);
		}
	}

	/**
	 * Method called to associate a UserSecurityObject object to this object
	 * through the UserSecurityObject foreign key attribute.
	 *
	 * @param      UserSecurityObject $l UserSecurityObject
	 * @return     void
	 * @throws     PropelException
	 */
	public function addUserSecurityObjectRelatedByAssignedByUserId(UserSecurityObject $l)
	{
		if ($this->collUserSecurityObjectsRelatedByAssignedByUserId === null) {
			$this->initUserSecurityObjectsRelatedByAssignedByUserId();
		}
		if (!$this->collUserSecurityObjectsRelatedByAssignedByUserId->contains($l)) { // only add it if the **same** object is not already associated
			$this->collUserSecurityObjectsRelatedByAssignedByUserId[]= $l;
			$l->setUserRelatedByAssignedByUserId($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this User is new, it will return
	 * an empty collection; or if this User has previously
	 * been saved, it will retrieve related UserSecurityObjectsRelatedByAssignedByUserId from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in User.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array UserSecurityObject[] List of UserSecurityObject objects
	 */
	public function getUserSecurityObjectsRelatedByAssignedByUserIdJoinSecurityObject($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = UserSecurityObjectQuery::create(null, $criteria);
		$query->joinWith('SecurityObject', $join_behavior);

		return $this->getUserSecurityObjectsRelatedByAssignedByUserId($query, $con);
	}

	/**
	 * Clears out the collUserThreads collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addUserThreads()
	 */
	public function clearUserThreads()
	{
		$this->collUserThreads = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collUserThreads collection.
	 *
	 * By default this just sets the collUserThreads collection to an empty array (like clearcollUserThreads());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initUserThreads()
	{
		$this->collUserThreads = new PropelObjectCollection();
		$this->collUserThreads->setModel('UserThread');
	}

	/**
	 * Gets an array of UserThread objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this User is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array UserThread[] List of UserThread objects
	 * @throws     PropelException
	 */
	public function getUserThreads($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collUserThreads || null !== $criteria) {
			if ($this->isNew() && null === $this->collUserThreads) {
				// return empty collection
				$this->initUserThreads();
			} else {
				$collUserThreads = UserThreadQuery::create(null, $criteria)
					->filterByUser($this)
					->find($con);
				if (null !== $criteria) {
					return $collUserThreads;
				}
				$this->collUserThreads = $collUserThreads;
			}
		}
		return $this->collUserThreads;
	}

	/**
	 * Returns the number of related UserThread objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related UserThread objects.
	 * @throws     PropelException
	 */
	public function countUserThreads(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collUserThreads || null !== $criteria) {
			if ($this->isNew() && null === $this->collUserThreads) {
				return 0;
			} else {
				$query = UserThreadQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByUser($this)
					->count($con);
			}
		} else {
			return count($this->collUserThreads);
		}
	}

	/**
	 * Method called to associate a UserThread object to this object
	 * through the UserThread foreign key attribute.
	 *
	 * @param      UserThread $l UserThread
	 * @return     void
	 * @throws     PropelException
	 */
	public function addUserThread(UserThread $l)
	{
		if ($this->collUserThreads === null) {
			$this->initUserThreads();
		}
		if (!$this->collUserThreads->contains($l)) { // only add it if the **same** object is not already associated
			$this->collUserThreads[]= $l;
			$l->setUser($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this User is new, it will return
	 * an empty collection; or if this User has previously
	 * been saved, it will retrieve related UserThreads from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in User.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array UserThread[] List of UserThread objects
	 */
	public function getUserThreadsJoinUserTopic($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = UserThreadQuery::create(null, $criteria);
		$query->joinWith('UserTopic', $join_behavior);

		return $this->getUserThreads($query, $con);
	}

	/**
	 * Clears out the collUserTopics collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addUserTopics()
	 */
	public function clearUserTopics()
	{
		$this->collUserTopics = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collUserTopics collection.
	 *
	 * By default this just sets the collUserTopics collection to an empty array (like clearcollUserTopics());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initUserTopics()
	{
		$this->collUserTopics = new PropelObjectCollection();
		$this->collUserTopics->setModel('UserTopic');
	}

	/**
	 * Gets an array of UserTopic objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this User is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array UserTopic[] List of UserTopic objects
	 * @throws     PropelException
	 */
	public function getUserTopics($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collUserTopics || null !== $criteria) {
			if ($this->isNew() && null === $this->collUserTopics) {
				// return empty collection
				$this->initUserTopics();
			} else {
				$collUserTopics = UserTopicQuery::create(null, $criteria)
					->filterByUser($this)
					->find($con);
				if (null !== $criteria) {
					return $collUserTopics;
				}
				$this->collUserTopics = $collUserTopics;
			}
		}
		return $this->collUserTopics;
	}

	/**
	 * Returns the number of related UserTopic objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related UserTopic objects.
	 * @throws     PropelException
	 */
	public function countUserTopics(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collUserTopics || null !== $criteria) {
			if ($this->isNew() && null === $this->collUserTopics) {
				return 0;
			} else {
				$query = UserTopicQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByUser($this)
					->count($con);
			}
		} else {
			return count($this->collUserTopics);
		}
	}

	/**
	 * Method called to associate a UserTopic object to this object
	 * through the UserTopic foreign key attribute.
	 *
	 * @param      UserTopic $l UserTopic
	 * @return     void
	 * @throws     PropelException
	 */
	public function addUserTopic(UserTopic $l)
	{
		if ($this->collUserTopics === null) {
			$this->initUserTopics();
		}
		if (!$this->collUserTopics->contains($l)) { // only add it if the **same** object is not already associated
			$this->collUserTopics[]= $l;
			$l->setUser($this);
		}
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->email = null;
		$this->password_hash = null;
		$this->password_reset_hash = null;
		$this->company_description = null;
		$this->company_url = null;
		$this->company_name = null;
		$this->job_title = null;
		$this->gender = null;
		$this->fname = null;
		$this->lname = null;
		$this->addressline1 = null;
		$this->addressline2 = null;
		$this->city = null;
		$this->state = null;
		$this->postcode = null;
		$this->country = null;
		$this->telephone = null;
		$this->fax = null;
		$this->is_active = null;
		$this->is_affiliate = null;
		$this->referral_id = null;
		$this->referral = null;
		$this->advertising_timeline = null;
		$this->monthly_budget = null;
		$this->primary_target = null;
		$this->advertising_objective = null;
		$this->additional_information = null;
		$this->is_email_verified = null;
		$this->is_premium = null;
		$this->last_login_date = null;
		$this->date_created = null;
		$this->date_expires = null;
		$this->date_modified = null;
		$this->remote_addr_created = null;
		$this->remote_addr_modified = null;
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
			if ($this->collCredits) {
				foreach ((array) $this->collCredits as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collDealFeedThreads) {
				foreach ((array) $this->collDealFeedThreads as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collImages) {
				foreach ((array) $this->collImages as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collPayments) {
				foreach ((array) $this->collPayments as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collPaymentMethods) {
				foreach ((array) $this->collPaymentMethods as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collPurchaseOrders) {
				foreach ((array) $this->collPurchaseOrders as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collUserNotesRelatedByUserId) {
				foreach ((array) $this->collUserNotesRelatedByUserId as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collUserNotesRelatedByAdminId) {
				foreach ((array) $this->collUserNotesRelatedByAdminId as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collUserSecurityObjectsRelatedByUserId) {
				foreach ((array) $this->collUserSecurityObjectsRelatedByUserId as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collUserSecurityObjectsRelatedByAssignedByUserId) {
				foreach ((array) $this->collUserSecurityObjectsRelatedByAssignedByUserId as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collUserThreads) {
				foreach ((array) $this->collUserThreads as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collUserTopics) {
				foreach ((array) $this->collUserTopics as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		$this->collAffiliatePayments = null;
		$this->collBusinessUsers = null;
		$this->collCredits = null;
		$this->collDealFeedThreads = null;
		$this->collImages = null;
		$this->collPayments = null;
		$this->collPaymentMethods = null;
		$this->collPurchaseOrders = null;
		$this->collUserNotesRelatedByUserId = null;
		$this->collUserNotesRelatedByAdminId = null;
		$this->collUserSecurityObjectsRelatedByUserId = null;
		$this->collUserSecurityObjectsRelatedByAssignedByUserId = null;
		$this->collUserThreads = null;
		$this->collUserTopics = null;
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

} // BaseUser
