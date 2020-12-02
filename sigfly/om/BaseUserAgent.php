<?php


/**
 * Base class that represents a row from the 'user_agent' table.
 *
 * 
 *
 * @package    propel.generator.sigfly.om
 */
abstract class BaseUserAgent extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'UserAgentPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        UserAgentPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the user_agent field.
	 * @var        string
	 */
	protected $user_agent;

	/**
	 * The value for the parent field.
	 * @var        string
	 */
	protected $parent;

	/**
	 * The value for the platform field.
	 * @var        string
	 */
	protected $platform;

	/**
	 * The value for the win32 field.
	 * @var        int
	 */
	protected $win32;

	/**
	 * The value for the browser field.
	 * @var        string
	 */
	protected $browser;

	/**
	 * The value for the version field.
	 * @var        double
	 */
	protected $version;

	/**
	 * The value for the majorver field.
	 * @var        int
	 */
	protected $majorver;

	/**
	 * The value for the minorver field.
	 * @var        int
	 */
	protected $minorver;

	/**
	 * The value for the frames field.
	 * @var        int
	 */
	protected $frames;

	/**
	 * The value for the iframes field.
	 * @var        int
	 */
	protected $iframes;

	/**
	 * The value for the tables field.
	 * @var        int
	 */
	protected $tables;

	/**
	 * The value for the cookies field.
	 * @var        int
	 */
	protected $cookies;

	/**
	 * The value for the javaapplets field.
	 * @var        int
	 */
	protected $javaapplets;

	/**
	 * The value for the javascript field.
	 * @var        int
	 */
	protected $javascript;

	/**
	 * The value for the cssversion field.
	 * @var        int
	 */
	protected $cssversion;

	/**
	 * The value for the supportscss field.
	 * @var        int
	 */
	protected $supportscss;

	/**
	 * The value for the alpha field.
	 * @var        int
	 */
	protected $alpha;

	/**
	 * The value for the beta field.
	 * @var        int
	 */
	protected $beta;

	/**
	 * The value for the win16 field.
	 * @var        int
	 */
	protected $win16;

	/**
	 * The value for the win64 field.
	 * @var        int
	 */
	protected $win64;

	/**
	 * The value for the backgroundsounds field.
	 * @var        int
	 */
	protected $backgroundsounds;

	/**
	 * The value for the cdf field.
	 * @var        int
	 */
	protected $cdf;

	/**
	 * The value for the vbscript field.
	 * @var        int
	 */
	protected $vbscript;

	/**
	 * The value for the activexcontrols field.
	 * @var        int
	 */
	protected $activexcontrols;

	/**
	 * The value for the isbanned field.
	 * @var        int
	 */
	protected $isbanned;

	/**
	 * The value for the ismobiledevice field.
	 * @var        int
	 */
	protected $ismobiledevice;

	/**
	 * The value for the issyndicationreader field.
	 * @var        int
	 */
	protected $issyndicationreader;

	/**
	 * The value for the crawler field.
	 * @var        int
	 */
	protected $crawler;

	/**
	 * The value for the aol field.
	 * @var        int
	 */
	protected $aol;

	/**
	 * The value for the aolversion field.
	 * @var        int
	 */
	protected $aolversion;

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
	 * Get the [user_agent] column value.
	 * 
	 * @return     string
	 */
	public function getUserAgent()
	{
		return $this->user_agent;
	}

	/**
	 * Get the [parent] column value.
	 * 
	 * @return     string
	 */
	public function getParent()
	{
		return $this->parent;
	}

	/**
	 * Get the [platform] column value.
	 * 
	 * @return     string
	 */
	public function getPlatform()
	{
		return $this->platform;
	}

	/**
	 * Get the [win32] column value.
	 * 
	 * @return     int
	 */
	public function getWin32()
	{
		return $this->win32;
	}

	/**
	 * Get the [browser] column value.
	 * 
	 * @return     string
	 */
	public function getBrowser()
	{
		return $this->browser;
	}

	/**
	 * Get the [version] column value.
	 * 
	 * @return     double
	 */
	public function getVersion()
	{
		return $this->version;
	}

	/**
	 * Get the [majorver] column value.
	 * 
	 * @return     int
	 */
	public function getMajorver()
	{
		return $this->majorver;
	}

	/**
	 * Get the [minorver] column value.
	 * 
	 * @return     int
	 */
	public function getMinorver()
	{
		return $this->minorver;
	}

	/**
	 * Get the [frames] column value.
	 * 
	 * @return     int
	 */
	public function getFrames()
	{
		return $this->frames;
	}

	/**
	 * Get the [iframes] column value.
	 * 
	 * @return     int
	 */
	public function getIframes()
	{
		return $this->iframes;
	}

	/**
	 * Get the [tables] column value.
	 * 
	 * @return     int
	 */
	public function getTables()
	{
		return $this->tables;
	}

	/**
	 * Get the [cookies] column value.
	 * 
	 * @return     int
	 */
	public function getCookies()
	{
		return $this->cookies;
	}

	/**
	 * Get the [javaapplets] column value.
	 * 
	 * @return     int
	 */
	public function getJavaapplets()
	{
		return $this->javaapplets;
	}

	/**
	 * Get the [javascript] column value.
	 * 
	 * @return     int
	 */
	public function getJavascript()
	{
		return $this->javascript;
	}

	/**
	 * Get the [cssversion] column value.
	 * 
	 * @return     int
	 */
	public function getCssversion()
	{
		return $this->cssversion;
	}

	/**
	 * Get the [supportscss] column value.
	 * 
	 * @return     int
	 */
	public function getSupportscss()
	{
		return $this->supportscss;
	}

	/**
	 * Get the [alpha] column value.
	 * 
	 * @return     int
	 */
	public function getAlpha()
	{
		return $this->alpha;
	}

	/**
	 * Get the [beta] column value.
	 * 
	 * @return     int
	 */
	public function getBeta()
	{
		return $this->beta;
	}

	/**
	 * Get the [win16] column value.
	 * 
	 * @return     int
	 */
	public function getWin16()
	{
		return $this->win16;
	}

	/**
	 * Get the [win64] column value.
	 * 
	 * @return     int
	 */
	public function getWin64()
	{
		return $this->win64;
	}

	/**
	 * Get the [backgroundsounds] column value.
	 * 
	 * @return     int
	 */
	public function getBackgroundsounds()
	{
		return $this->backgroundsounds;
	}

	/**
	 * Get the [cdf] column value.
	 * 
	 * @return     int
	 */
	public function getCdf()
	{
		return $this->cdf;
	}

	/**
	 * Get the [vbscript] column value.
	 * 
	 * @return     int
	 */
	public function getVbscript()
	{
		return $this->vbscript;
	}

	/**
	 * Get the [activexcontrols] column value.
	 * 
	 * @return     int
	 */
	public function getActivexcontrols()
	{
		return $this->activexcontrols;
	}

	/**
	 * Get the [isbanned] column value.
	 * 
	 * @return     int
	 */
	public function getIsbanned()
	{
		return $this->isbanned;
	}

	/**
	 * Get the [ismobiledevice] column value.
	 * 
	 * @return     int
	 */
	public function getIsmobiledevice()
	{
		return $this->ismobiledevice;
	}

	/**
	 * Get the [issyndicationreader] column value.
	 * 
	 * @return     int
	 */
	public function getIssyndicationreader()
	{
		return $this->issyndicationreader;
	}

	/**
	 * Get the [crawler] column value.
	 * 
	 * @return     int
	 */
	public function getCrawler()
	{
		return $this->crawler;
	}

	/**
	 * Get the [aol] column value.
	 * 
	 * @return     int
	 */
	public function getAol()
	{
		return $this->aol;
	}

	/**
	 * Get the [aolversion] column value.
	 * 
	 * @return     int
	 */
	public function getAolversion()
	{
		return $this->aolversion;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     UserAgent The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = UserAgentPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [user_agent] column.
	 * 
	 * @param      string $v new value
	 * @return     UserAgent The current object (for fluent API support)
	 */
	public function setUserAgent($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->user_agent !== $v) {
			$this->user_agent = $v;
			$this->modifiedColumns[] = UserAgentPeer::USER_AGENT;
		}

		return $this;
	} // setUserAgent()

	/**
	 * Set the value of [parent] column.
	 * 
	 * @param      string $v new value
	 * @return     UserAgent The current object (for fluent API support)
	 */
	public function setParent($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->parent !== $v) {
			$this->parent = $v;
			$this->modifiedColumns[] = UserAgentPeer::PARENT;
		}

		return $this;
	} // setParent()

	/**
	 * Set the value of [platform] column.
	 * 
	 * @param      string $v new value
	 * @return     UserAgent The current object (for fluent API support)
	 */
	public function setPlatform($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->platform !== $v) {
			$this->platform = $v;
			$this->modifiedColumns[] = UserAgentPeer::PLATFORM;
		}

		return $this;
	} // setPlatform()

	/**
	 * Set the value of [win32] column.
	 * 
	 * @param      int $v new value
	 * @return     UserAgent The current object (for fluent API support)
	 */
	public function setWin32($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->win32 !== $v) {
			$this->win32 = $v;
			$this->modifiedColumns[] = UserAgentPeer::WIN32;
		}

		return $this;
	} // setWin32()

	/**
	 * Set the value of [browser] column.
	 * 
	 * @param      string $v new value
	 * @return     UserAgent The current object (for fluent API support)
	 */
	public function setBrowser($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->browser !== $v) {
			$this->browser = $v;
			$this->modifiedColumns[] = UserAgentPeer::BROWSER;
		}

		return $this;
	} // setBrowser()

	/**
	 * Set the value of [version] column.
	 * 
	 * @param      double $v new value
	 * @return     UserAgent The current object (for fluent API support)
	 */
	public function setVersion($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->version !== $v) {
			$this->version = $v;
			$this->modifiedColumns[] = UserAgentPeer::VERSION;
		}

		return $this;
	} // setVersion()

	/**
	 * Set the value of [majorver] column.
	 * 
	 * @param      int $v new value
	 * @return     UserAgent The current object (for fluent API support)
	 */
	public function setMajorver($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->majorver !== $v) {
			$this->majorver = $v;
			$this->modifiedColumns[] = UserAgentPeer::MAJORVER;
		}

		return $this;
	} // setMajorver()

	/**
	 * Set the value of [minorver] column.
	 * 
	 * @param      int $v new value
	 * @return     UserAgent The current object (for fluent API support)
	 */
	public function setMinorver($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->minorver !== $v) {
			$this->minorver = $v;
			$this->modifiedColumns[] = UserAgentPeer::MINORVER;
		}

		return $this;
	} // setMinorver()

	/**
	 * Set the value of [frames] column.
	 * 
	 * @param      int $v new value
	 * @return     UserAgent The current object (for fluent API support)
	 */
	public function setFrames($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->frames !== $v) {
			$this->frames = $v;
			$this->modifiedColumns[] = UserAgentPeer::FRAMES;
		}

		return $this;
	} // setFrames()

	/**
	 * Set the value of [iframes] column.
	 * 
	 * @param      int $v new value
	 * @return     UserAgent The current object (for fluent API support)
	 */
	public function setIframes($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->iframes !== $v) {
			$this->iframes = $v;
			$this->modifiedColumns[] = UserAgentPeer::IFRAMES;
		}

		return $this;
	} // setIframes()

	/**
	 * Set the value of [tables] column.
	 * 
	 * @param      int $v new value
	 * @return     UserAgent The current object (for fluent API support)
	 */
	public function setTables($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->tables !== $v) {
			$this->tables = $v;
			$this->modifiedColumns[] = UserAgentPeer::TABLES;
		}

		return $this;
	} // setTables()

	/**
	 * Set the value of [cookies] column.
	 * 
	 * @param      int $v new value
	 * @return     UserAgent The current object (for fluent API support)
	 */
	public function setCookies($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->cookies !== $v) {
			$this->cookies = $v;
			$this->modifiedColumns[] = UserAgentPeer::COOKIES;
		}

		return $this;
	} // setCookies()

	/**
	 * Set the value of [javaapplets] column.
	 * 
	 * @param      int $v new value
	 * @return     UserAgent The current object (for fluent API support)
	 */
	public function setJavaapplets($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->javaapplets !== $v) {
			$this->javaapplets = $v;
			$this->modifiedColumns[] = UserAgentPeer::JAVAAPPLETS;
		}

		return $this;
	} // setJavaapplets()

	/**
	 * Set the value of [javascript] column.
	 * 
	 * @param      int $v new value
	 * @return     UserAgent The current object (for fluent API support)
	 */
	public function setJavascript($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->javascript !== $v) {
			$this->javascript = $v;
			$this->modifiedColumns[] = UserAgentPeer::JAVASCRIPT;
		}

		return $this;
	} // setJavascript()

	/**
	 * Set the value of [cssversion] column.
	 * 
	 * @param      int $v new value
	 * @return     UserAgent The current object (for fluent API support)
	 */
	public function setCssversion($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->cssversion !== $v) {
			$this->cssversion = $v;
			$this->modifiedColumns[] = UserAgentPeer::CSSVERSION;
		}

		return $this;
	} // setCssversion()

	/**
	 * Set the value of [supportscss] column.
	 * 
	 * @param      int $v new value
	 * @return     UserAgent The current object (for fluent API support)
	 */
	public function setSupportscss($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->supportscss !== $v) {
			$this->supportscss = $v;
			$this->modifiedColumns[] = UserAgentPeer::SUPPORTSCSS;
		}

		return $this;
	} // setSupportscss()

	/**
	 * Set the value of [alpha] column.
	 * 
	 * @param      int $v new value
	 * @return     UserAgent The current object (for fluent API support)
	 */
	public function setAlpha($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->alpha !== $v) {
			$this->alpha = $v;
			$this->modifiedColumns[] = UserAgentPeer::ALPHA;
		}

		return $this;
	} // setAlpha()

	/**
	 * Set the value of [beta] column.
	 * 
	 * @param      int $v new value
	 * @return     UserAgent The current object (for fluent API support)
	 */
	public function setBeta($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->beta !== $v) {
			$this->beta = $v;
			$this->modifiedColumns[] = UserAgentPeer::BETA;
		}

		return $this;
	} // setBeta()

	/**
	 * Set the value of [win16] column.
	 * 
	 * @param      int $v new value
	 * @return     UserAgent The current object (for fluent API support)
	 */
	public function setWin16($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->win16 !== $v) {
			$this->win16 = $v;
			$this->modifiedColumns[] = UserAgentPeer::WIN16;
		}

		return $this;
	} // setWin16()

	/**
	 * Set the value of [win64] column.
	 * 
	 * @param      int $v new value
	 * @return     UserAgent The current object (for fluent API support)
	 */
	public function setWin64($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->win64 !== $v) {
			$this->win64 = $v;
			$this->modifiedColumns[] = UserAgentPeer::WIN64;
		}

		return $this;
	} // setWin64()

	/**
	 * Set the value of [backgroundsounds] column.
	 * 
	 * @param      int $v new value
	 * @return     UserAgent The current object (for fluent API support)
	 */
	public function setBackgroundsounds($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->backgroundsounds !== $v) {
			$this->backgroundsounds = $v;
			$this->modifiedColumns[] = UserAgentPeer::BACKGROUNDSOUNDS;
		}

		return $this;
	} // setBackgroundsounds()

	/**
	 * Set the value of [cdf] column.
	 * 
	 * @param      int $v new value
	 * @return     UserAgent The current object (for fluent API support)
	 */
	public function setCdf($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->cdf !== $v) {
			$this->cdf = $v;
			$this->modifiedColumns[] = UserAgentPeer::CDF;
		}

		return $this;
	} // setCdf()

	/**
	 * Set the value of [vbscript] column.
	 * 
	 * @param      int $v new value
	 * @return     UserAgent The current object (for fluent API support)
	 */
	public function setVbscript($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->vbscript !== $v) {
			$this->vbscript = $v;
			$this->modifiedColumns[] = UserAgentPeer::VBSCRIPT;
		}

		return $this;
	} // setVbscript()

	/**
	 * Set the value of [activexcontrols] column.
	 * 
	 * @param      int $v new value
	 * @return     UserAgent The current object (for fluent API support)
	 */
	public function setActivexcontrols($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->activexcontrols !== $v) {
			$this->activexcontrols = $v;
			$this->modifiedColumns[] = UserAgentPeer::ACTIVEXCONTROLS;
		}

		return $this;
	} // setActivexcontrols()

	/**
	 * Set the value of [isbanned] column.
	 * 
	 * @param      int $v new value
	 * @return     UserAgent The current object (for fluent API support)
	 */
	public function setIsbanned($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->isbanned !== $v) {
			$this->isbanned = $v;
			$this->modifiedColumns[] = UserAgentPeer::ISBANNED;
		}

		return $this;
	} // setIsbanned()

	/**
	 * Set the value of [ismobiledevice] column.
	 * 
	 * @param      int $v new value
	 * @return     UserAgent The current object (for fluent API support)
	 */
	public function setIsmobiledevice($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->ismobiledevice !== $v) {
			$this->ismobiledevice = $v;
			$this->modifiedColumns[] = UserAgentPeer::ISMOBILEDEVICE;
		}

		return $this;
	} // setIsmobiledevice()

	/**
	 * Set the value of [issyndicationreader] column.
	 * 
	 * @param      int $v new value
	 * @return     UserAgent The current object (for fluent API support)
	 */
	public function setIssyndicationreader($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->issyndicationreader !== $v) {
			$this->issyndicationreader = $v;
			$this->modifiedColumns[] = UserAgentPeer::ISSYNDICATIONREADER;
		}

		return $this;
	} // setIssyndicationreader()

	/**
	 * Set the value of [crawler] column.
	 * 
	 * @param      int $v new value
	 * @return     UserAgent The current object (for fluent API support)
	 */
	public function setCrawler($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->crawler !== $v) {
			$this->crawler = $v;
			$this->modifiedColumns[] = UserAgentPeer::CRAWLER;
		}

		return $this;
	} // setCrawler()

	/**
	 * Set the value of [aol] column.
	 * 
	 * @param      int $v new value
	 * @return     UserAgent The current object (for fluent API support)
	 */
	public function setAol($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->aol !== $v) {
			$this->aol = $v;
			$this->modifiedColumns[] = UserAgentPeer::AOL;
		}

		return $this;
	} // setAol()

	/**
	 * Set the value of [aolversion] column.
	 * 
	 * @param      int $v new value
	 * @return     UserAgent The current object (for fluent API support)
	 */
	public function setAolversion($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->aolversion !== $v) {
			$this->aolversion = $v;
			$this->modifiedColumns[] = UserAgentPeer::AOLVERSION;
		}

		return $this;
	} // setAolversion()

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
			$this->user_agent = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->parent = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->platform = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->win32 = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->browser = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->version = ($row[$startcol + 6] !== null) ? (double) $row[$startcol + 6] : null;
			$this->majorver = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
			$this->minorver = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
			$this->frames = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
			$this->iframes = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
			$this->tables = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
			$this->cookies = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
			$this->javaapplets = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
			$this->javascript = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
			$this->cssversion = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
			$this->supportscss = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
			$this->alpha = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
			$this->beta = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
			$this->win16 = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
			$this->win64 = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
			$this->backgroundsounds = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
			$this->cdf = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
			$this->vbscript = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
			$this->activexcontrols = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
			$this->isbanned = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
			$this->ismobiledevice = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
			$this->issyndicationreader = ($row[$startcol + 27] !== null) ? (int) $row[$startcol + 27] : null;
			$this->crawler = ($row[$startcol + 28] !== null) ? (int) $row[$startcol + 28] : null;
			$this->aol = ($row[$startcol + 29] !== null) ? (int) $row[$startcol + 29] : null;
			$this->aolversion = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 31; // 31 = UserAgentPeer::NUM_COLUMNS - UserAgentPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating UserAgent object", $e);
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
			$con = Propel::getConnection(UserAgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = UserAgentPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(UserAgentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				UserAgentQuery::create()
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
			$con = Propel::getConnection(UserAgentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				UserAgentPeer::addInstanceToPool($this);
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
				$this->modifiedColumns[] = UserAgentPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(UserAgentPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.UserAgentPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows = UserAgentPeer::doUpdate($this, $con);
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


			if (($retval = UserAgentPeer::doValidate($this, $columns)) !== true) {
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
		$pos = UserAgentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getUserAgent();
				break;
			case 2:
				return $this->getParent();
				break;
			case 3:
				return $this->getPlatform();
				break;
			case 4:
				return $this->getWin32();
				break;
			case 5:
				return $this->getBrowser();
				break;
			case 6:
				return $this->getVersion();
				break;
			case 7:
				return $this->getMajorver();
				break;
			case 8:
				return $this->getMinorver();
				break;
			case 9:
				return $this->getFrames();
				break;
			case 10:
				return $this->getIframes();
				break;
			case 11:
				return $this->getTables();
				break;
			case 12:
				return $this->getCookies();
				break;
			case 13:
				return $this->getJavaapplets();
				break;
			case 14:
				return $this->getJavascript();
				break;
			case 15:
				return $this->getCssversion();
				break;
			case 16:
				return $this->getSupportscss();
				break;
			case 17:
				return $this->getAlpha();
				break;
			case 18:
				return $this->getBeta();
				break;
			case 19:
				return $this->getWin16();
				break;
			case 20:
				return $this->getWin64();
				break;
			case 21:
				return $this->getBackgroundsounds();
				break;
			case 22:
				return $this->getCdf();
				break;
			case 23:
				return $this->getVbscript();
				break;
			case 24:
				return $this->getActivexcontrols();
				break;
			case 25:
				return $this->getIsbanned();
				break;
			case 26:
				return $this->getIsmobiledevice();
				break;
			case 27:
				return $this->getIssyndicationreader();
				break;
			case 28:
				return $this->getCrawler();
				break;
			case 29:
				return $this->getAol();
				break;
			case 30:
				return $this->getAolversion();
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
		$keys = UserAgentPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getUserAgent(),
			$keys[2] => $this->getParent(),
			$keys[3] => $this->getPlatform(),
			$keys[4] => $this->getWin32(),
			$keys[5] => $this->getBrowser(),
			$keys[6] => $this->getVersion(),
			$keys[7] => $this->getMajorver(),
			$keys[8] => $this->getMinorver(),
			$keys[9] => $this->getFrames(),
			$keys[10] => $this->getIframes(),
			$keys[11] => $this->getTables(),
			$keys[12] => $this->getCookies(),
			$keys[13] => $this->getJavaapplets(),
			$keys[14] => $this->getJavascript(),
			$keys[15] => $this->getCssversion(),
			$keys[16] => $this->getSupportscss(),
			$keys[17] => $this->getAlpha(),
			$keys[18] => $this->getBeta(),
			$keys[19] => $this->getWin16(),
			$keys[20] => $this->getWin64(),
			$keys[21] => $this->getBackgroundsounds(),
			$keys[22] => $this->getCdf(),
			$keys[23] => $this->getVbscript(),
			$keys[24] => $this->getActivexcontrols(),
			$keys[25] => $this->getIsbanned(),
			$keys[26] => $this->getIsmobiledevice(),
			$keys[27] => $this->getIssyndicationreader(),
			$keys[28] => $this->getCrawler(),
			$keys[29] => $this->getAol(),
			$keys[30] => $this->getAolversion(),
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
		$pos = UserAgentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setUserAgent($value);
				break;
			case 2:
				$this->setParent($value);
				break;
			case 3:
				$this->setPlatform($value);
				break;
			case 4:
				$this->setWin32($value);
				break;
			case 5:
				$this->setBrowser($value);
				break;
			case 6:
				$this->setVersion($value);
				break;
			case 7:
				$this->setMajorver($value);
				break;
			case 8:
				$this->setMinorver($value);
				break;
			case 9:
				$this->setFrames($value);
				break;
			case 10:
				$this->setIframes($value);
				break;
			case 11:
				$this->setTables($value);
				break;
			case 12:
				$this->setCookies($value);
				break;
			case 13:
				$this->setJavaapplets($value);
				break;
			case 14:
				$this->setJavascript($value);
				break;
			case 15:
				$this->setCssversion($value);
				break;
			case 16:
				$this->setSupportscss($value);
				break;
			case 17:
				$this->setAlpha($value);
				break;
			case 18:
				$this->setBeta($value);
				break;
			case 19:
				$this->setWin16($value);
				break;
			case 20:
				$this->setWin64($value);
				break;
			case 21:
				$this->setBackgroundsounds($value);
				break;
			case 22:
				$this->setCdf($value);
				break;
			case 23:
				$this->setVbscript($value);
				break;
			case 24:
				$this->setActivexcontrols($value);
				break;
			case 25:
				$this->setIsbanned($value);
				break;
			case 26:
				$this->setIsmobiledevice($value);
				break;
			case 27:
				$this->setIssyndicationreader($value);
				break;
			case 28:
				$this->setCrawler($value);
				break;
			case 29:
				$this->setAol($value);
				break;
			case 30:
				$this->setAolversion($value);
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
		$keys = UserAgentPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setUserAgent($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setParent($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setPlatform($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setWin32($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setBrowser($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setVersion($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setMajorver($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setMinorver($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setFrames($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setIframes($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setTables($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setCookies($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setJavaapplets($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setJavascript($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setCssversion($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setSupportscss($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setAlpha($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setBeta($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setWin16($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setWin64($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setBackgroundsounds($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setCdf($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setVbscript($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setActivexcontrols($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setIsbanned($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setIsmobiledevice($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setIssyndicationreader($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setCrawler($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setAol($arr[$keys[29]]);
		if (array_key_exists($keys[30], $arr)) $this->setAolversion($arr[$keys[30]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(UserAgentPeer::DATABASE_NAME);

		if ($this->isColumnModified(UserAgentPeer::ID)) $criteria->add(UserAgentPeer::ID, $this->id);
		if ($this->isColumnModified(UserAgentPeer::USER_AGENT)) $criteria->add(UserAgentPeer::USER_AGENT, $this->user_agent);
		if ($this->isColumnModified(UserAgentPeer::PARENT)) $criteria->add(UserAgentPeer::PARENT, $this->parent);
		if ($this->isColumnModified(UserAgentPeer::PLATFORM)) $criteria->add(UserAgentPeer::PLATFORM, $this->platform);
		if ($this->isColumnModified(UserAgentPeer::WIN32)) $criteria->add(UserAgentPeer::WIN32, $this->win32);
		if ($this->isColumnModified(UserAgentPeer::BROWSER)) $criteria->add(UserAgentPeer::BROWSER, $this->browser);
		if ($this->isColumnModified(UserAgentPeer::VERSION)) $criteria->add(UserAgentPeer::VERSION, $this->version);
		if ($this->isColumnModified(UserAgentPeer::MAJORVER)) $criteria->add(UserAgentPeer::MAJORVER, $this->majorver);
		if ($this->isColumnModified(UserAgentPeer::MINORVER)) $criteria->add(UserAgentPeer::MINORVER, $this->minorver);
		if ($this->isColumnModified(UserAgentPeer::FRAMES)) $criteria->add(UserAgentPeer::FRAMES, $this->frames);
		if ($this->isColumnModified(UserAgentPeer::IFRAMES)) $criteria->add(UserAgentPeer::IFRAMES, $this->iframes);
		if ($this->isColumnModified(UserAgentPeer::TABLES)) $criteria->add(UserAgentPeer::TABLES, $this->tables);
		if ($this->isColumnModified(UserAgentPeer::COOKIES)) $criteria->add(UserAgentPeer::COOKIES, $this->cookies);
		if ($this->isColumnModified(UserAgentPeer::JAVAAPPLETS)) $criteria->add(UserAgentPeer::JAVAAPPLETS, $this->javaapplets);
		if ($this->isColumnModified(UserAgentPeer::JAVASCRIPT)) $criteria->add(UserAgentPeer::JAVASCRIPT, $this->javascript);
		if ($this->isColumnModified(UserAgentPeer::CSSVERSION)) $criteria->add(UserAgentPeer::CSSVERSION, $this->cssversion);
		if ($this->isColumnModified(UserAgentPeer::SUPPORTSCSS)) $criteria->add(UserAgentPeer::SUPPORTSCSS, $this->supportscss);
		if ($this->isColumnModified(UserAgentPeer::ALPHA)) $criteria->add(UserAgentPeer::ALPHA, $this->alpha);
		if ($this->isColumnModified(UserAgentPeer::BETA)) $criteria->add(UserAgentPeer::BETA, $this->beta);
		if ($this->isColumnModified(UserAgentPeer::WIN16)) $criteria->add(UserAgentPeer::WIN16, $this->win16);
		if ($this->isColumnModified(UserAgentPeer::WIN64)) $criteria->add(UserAgentPeer::WIN64, $this->win64);
		if ($this->isColumnModified(UserAgentPeer::BACKGROUNDSOUNDS)) $criteria->add(UserAgentPeer::BACKGROUNDSOUNDS, $this->backgroundsounds);
		if ($this->isColumnModified(UserAgentPeer::CDF)) $criteria->add(UserAgentPeer::CDF, $this->cdf);
		if ($this->isColumnModified(UserAgentPeer::VBSCRIPT)) $criteria->add(UserAgentPeer::VBSCRIPT, $this->vbscript);
		if ($this->isColumnModified(UserAgentPeer::ACTIVEXCONTROLS)) $criteria->add(UserAgentPeer::ACTIVEXCONTROLS, $this->activexcontrols);
		if ($this->isColumnModified(UserAgentPeer::ISBANNED)) $criteria->add(UserAgentPeer::ISBANNED, $this->isbanned);
		if ($this->isColumnModified(UserAgentPeer::ISMOBILEDEVICE)) $criteria->add(UserAgentPeer::ISMOBILEDEVICE, $this->ismobiledevice);
		if ($this->isColumnModified(UserAgentPeer::ISSYNDICATIONREADER)) $criteria->add(UserAgentPeer::ISSYNDICATIONREADER, $this->issyndicationreader);
		if ($this->isColumnModified(UserAgentPeer::CRAWLER)) $criteria->add(UserAgentPeer::CRAWLER, $this->crawler);
		if ($this->isColumnModified(UserAgentPeer::AOL)) $criteria->add(UserAgentPeer::AOL, $this->aol);
		if ($this->isColumnModified(UserAgentPeer::AOLVERSION)) $criteria->add(UserAgentPeer::AOLVERSION, $this->aolversion);

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
		$criteria = new Criteria(UserAgentPeer::DATABASE_NAME);
		$criteria->add(UserAgentPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of UserAgent (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{
		$copyObj->setUserAgent($this->user_agent);
		$copyObj->setParent($this->parent);
		$copyObj->setPlatform($this->platform);
		$copyObj->setWin32($this->win32);
		$copyObj->setBrowser($this->browser);
		$copyObj->setVersion($this->version);
		$copyObj->setMajorver($this->majorver);
		$copyObj->setMinorver($this->minorver);
		$copyObj->setFrames($this->frames);
		$copyObj->setIframes($this->iframes);
		$copyObj->setTables($this->tables);
		$copyObj->setCookies($this->cookies);
		$copyObj->setJavaapplets($this->javaapplets);
		$copyObj->setJavascript($this->javascript);
		$copyObj->setCssversion($this->cssversion);
		$copyObj->setSupportscss($this->supportscss);
		$copyObj->setAlpha($this->alpha);
		$copyObj->setBeta($this->beta);
		$copyObj->setWin16($this->win16);
		$copyObj->setWin64($this->win64);
		$copyObj->setBackgroundsounds($this->backgroundsounds);
		$copyObj->setCdf($this->cdf);
		$copyObj->setVbscript($this->vbscript);
		$copyObj->setActivexcontrols($this->activexcontrols);
		$copyObj->setIsbanned($this->isbanned);
		$copyObj->setIsmobiledevice($this->ismobiledevice);
		$copyObj->setIssyndicationreader($this->issyndicationreader);
		$copyObj->setCrawler($this->crawler);
		$copyObj->setAol($this->aol);
		$copyObj->setAolversion($this->aolversion);

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
	 * @return     UserAgent Clone of current object.
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
	 * @return     UserAgentPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new UserAgentPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->user_agent = null;
		$this->parent = null;
		$this->platform = null;
		$this->win32 = null;
		$this->browser = null;
		$this->version = null;
		$this->majorver = null;
		$this->minorver = null;
		$this->frames = null;
		$this->iframes = null;
		$this->tables = null;
		$this->cookies = null;
		$this->javaapplets = null;
		$this->javascript = null;
		$this->cssversion = null;
		$this->supportscss = null;
		$this->alpha = null;
		$this->beta = null;
		$this->win16 = null;
		$this->win64 = null;
		$this->backgroundsounds = null;
		$this->cdf = null;
		$this->vbscript = null;
		$this->activexcontrols = null;
		$this->isbanned = null;
		$this->ismobiledevice = null;
		$this->issyndicationreader = null;
		$this->crawler = null;
		$this->aol = null;
		$this->aolversion = null;
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

} // BaseUserAgent
