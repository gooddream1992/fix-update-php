<?php


/**
 * Base class that represents a query for the 'user_agent' table.
 *
 * 
 *
 * @method     UserAgentQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     UserAgentQuery orderByUserAgent($order = Criteria::ASC) Order by the user_agent column
 * @method     UserAgentQuery orderByParent($order = Criteria::ASC) Order by the parent column
 * @method     UserAgentQuery orderByPlatform($order = Criteria::ASC) Order by the platform column
 * @method     UserAgentQuery orderByWin32($order = Criteria::ASC) Order by the win32 column
 * @method     UserAgentQuery orderByBrowser($order = Criteria::ASC) Order by the browser column
 * @method     UserAgentQuery orderByVersion($order = Criteria::ASC) Order by the version column
 * @method     UserAgentQuery orderByMajorver($order = Criteria::ASC) Order by the majorver column
 * @method     UserAgentQuery orderByMinorver($order = Criteria::ASC) Order by the minorver column
 * @method     UserAgentQuery orderByFrames($order = Criteria::ASC) Order by the frames column
 * @method     UserAgentQuery orderByIframes($order = Criteria::ASC) Order by the iframes column
 * @method     UserAgentQuery orderByTables($order = Criteria::ASC) Order by the tables column
 * @method     UserAgentQuery orderByCookies($order = Criteria::ASC) Order by the cookies column
 * @method     UserAgentQuery orderByJavaapplets($order = Criteria::ASC) Order by the javaapplets column
 * @method     UserAgentQuery orderByJavascript($order = Criteria::ASC) Order by the javascript column
 * @method     UserAgentQuery orderByCssversion($order = Criteria::ASC) Order by the cssversion column
 * @method     UserAgentQuery orderBySupportscss($order = Criteria::ASC) Order by the supportscss column
 * @method     UserAgentQuery orderByAlpha($order = Criteria::ASC) Order by the alpha column
 * @method     UserAgentQuery orderByBeta($order = Criteria::ASC) Order by the beta column
 * @method     UserAgentQuery orderByWin16($order = Criteria::ASC) Order by the win16 column
 * @method     UserAgentQuery orderByWin64($order = Criteria::ASC) Order by the win64 column
 * @method     UserAgentQuery orderByBackgroundsounds($order = Criteria::ASC) Order by the backgroundsounds column
 * @method     UserAgentQuery orderByCdf($order = Criteria::ASC) Order by the cdf column
 * @method     UserAgentQuery orderByVbscript($order = Criteria::ASC) Order by the vbscript column
 * @method     UserAgentQuery orderByActivexcontrols($order = Criteria::ASC) Order by the activexcontrols column
 * @method     UserAgentQuery orderByIsbanned($order = Criteria::ASC) Order by the isbanned column
 * @method     UserAgentQuery orderByIsmobiledevice($order = Criteria::ASC) Order by the ismobiledevice column
 * @method     UserAgentQuery orderByIssyndicationreader($order = Criteria::ASC) Order by the issyndicationreader column
 * @method     UserAgentQuery orderByCrawler($order = Criteria::ASC) Order by the crawler column
 * @method     UserAgentQuery orderByAol($order = Criteria::ASC) Order by the aol column
 * @method     UserAgentQuery orderByAolversion($order = Criteria::ASC) Order by the aolversion column
 *
 * @method     UserAgentQuery groupById() Group by the id column
 * @method     UserAgentQuery groupByUserAgent() Group by the user_agent column
 * @method     UserAgentQuery groupByParent() Group by the parent column
 * @method     UserAgentQuery groupByPlatform() Group by the platform column
 * @method     UserAgentQuery groupByWin32() Group by the win32 column
 * @method     UserAgentQuery groupByBrowser() Group by the browser column
 * @method     UserAgentQuery groupByVersion() Group by the version column
 * @method     UserAgentQuery groupByMajorver() Group by the majorver column
 * @method     UserAgentQuery groupByMinorver() Group by the minorver column
 * @method     UserAgentQuery groupByFrames() Group by the frames column
 * @method     UserAgentQuery groupByIframes() Group by the iframes column
 * @method     UserAgentQuery groupByTables() Group by the tables column
 * @method     UserAgentQuery groupByCookies() Group by the cookies column
 * @method     UserAgentQuery groupByJavaapplets() Group by the javaapplets column
 * @method     UserAgentQuery groupByJavascript() Group by the javascript column
 * @method     UserAgentQuery groupByCssversion() Group by the cssversion column
 * @method     UserAgentQuery groupBySupportscss() Group by the supportscss column
 * @method     UserAgentQuery groupByAlpha() Group by the alpha column
 * @method     UserAgentQuery groupByBeta() Group by the beta column
 * @method     UserAgentQuery groupByWin16() Group by the win16 column
 * @method     UserAgentQuery groupByWin64() Group by the win64 column
 * @method     UserAgentQuery groupByBackgroundsounds() Group by the backgroundsounds column
 * @method     UserAgentQuery groupByCdf() Group by the cdf column
 * @method     UserAgentQuery groupByVbscript() Group by the vbscript column
 * @method     UserAgentQuery groupByActivexcontrols() Group by the activexcontrols column
 * @method     UserAgentQuery groupByIsbanned() Group by the isbanned column
 * @method     UserAgentQuery groupByIsmobiledevice() Group by the ismobiledevice column
 * @method     UserAgentQuery groupByIssyndicationreader() Group by the issyndicationreader column
 * @method     UserAgentQuery groupByCrawler() Group by the crawler column
 * @method     UserAgentQuery groupByAol() Group by the aol column
 * @method     UserAgentQuery groupByAolversion() Group by the aolversion column
 *
 * @method     UserAgentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     UserAgentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     UserAgentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     UserAgent findOne(PropelPDO $con = null) Return the first UserAgent matching the query
 * @method     UserAgent findOneOrCreate(PropelPDO $con = null) Return the first UserAgent matching the query, or a new UserAgent object populated from the query conditions when no match is found
 *
 * @method     UserAgent findOneById(int $id) Return the first UserAgent filtered by the id column
 * @method     UserAgent findOneByUserAgent(string $user_agent) Return the first UserAgent filtered by the user_agent column
 * @method     UserAgent findOneByParent(string $parent) Return the first UserAgent filtered by the parent column
 * @method     UserAgent findOneByPlatform(string $platform) Return the first UserAgent filtered by the platform column
 * @method     UserAgent findOneByWin32(int $win32) Return the first UserAgent filtered by the win32 column
 * @method     UserAgent findOneByBrowser(string $browser) Return the first UserAgent filtered by the browser column
 * @method     UserAgent findOneByVersion(double $version) Return the first UserAgent filtered by the version column
 * @method     UserAgent findOneByMajorver(int $majorver) Return the first UserAgent filtered by the majorver column
 * @method     UserAgent findOneByMinorver(int $minorver) Return the first UserAgent filtered by the minorver column
 * @method     UserAgent findOneByFrames(int $frames) Return the first UserAgent filtered by the frames column
 * @method     UserAgent findOneByIframes(int $iframes) Return the first UserAgent filtered by the iframes column
 * @method     UserAgent findOneByTables(int $tables) Return the first UserAgent filtered by the tables column
 * @method     UserAgent findOneByCookies(int $cookies) Return the first UserAgent filtered by the cookies column
 * @method     UserAgent findOneByJavaapplets(int $javaapplets) Return the first UserAgent filtered by the javaapplets column
 * @method     UserAgent findOneByJavascript(int $javascript) Return the first UserAgent filtered by the javascript column
 * @method     UserAgent findOneByCssversion(int $cssversion) Return the first UserAgent filtered by the cssversion column
 * @method     UserAgent findOneBySupportscss(int $supportscss) Return the first UserAgent filtered by the supportscss column
 * @method     UserAgent findOneByAlpha(int $alpha) Return the first UserAgent filtered by the alpha column
 * @method     UserAgent findOneByBeta(int $beta) Return the first UserAgent filtered by the beta column
 * @method     UserAgent findOneByWin16(int $win16) Return the first UserAgent filtered by the win16 column
 * @method     UserAgent findOneByWin64(int $win64) Return the first UserAgent filtered by the win64 column
 * @method     UserAgent findOneByBackgroundsounds(int $backgroundsounds) Return the first UserAgent filtered by the backgroundsounds column
 * @method     UserAgent findOneByCdf(int $cdf) Return the first UserAgent filtered by the cdf column
 * @method     UserAgent findOneByVbscript(int $vbscript) Return the first UserAgent filtered by the vbscript column
 * @method     UserAgent findOneByActivexcontrols(int $activexcontrols) Return the first UserAgent filtered by the activexcontrols column
 * @method     UserAgent findOneByIsbanned(int $isbanned) Return the first UserAgent filtered by the isbanned column
 * @method     UserAgent findOneByIsmobiledevice(int $ismobiledevice) Return the first UserAgent filtered by the ismobiledevice column
 * @method     UserAgent findOneByIssyndicationreader(int $issyndicationreader) Return the first UserAgent filtered by the issyndicationreader column
 * @method     UserAgent findOneByCrawler(int $crawler) Return the first UserAgent filtered by the crawler column
 * @method     UserAgent findOneByAol(int $aol) Return the first UserAgent filtered by the aol column
 * @method     UserAgent findOneByAolversion(int $aolversion) Return the first UserAgent filtered by the aolversion column
 *
 * @method     array findById(int $id) Return UserAgent objects filtered by the id column
 * @method     array findByUserAgent(string $user_agent) Return UserAgent objects filtered by the user_agent column
 * @method     array findByParent(string $parent) Return UserAgent objects filtered by the parent column
 * @method     array findByPlatform(string $platform) Return UserAgent objects filtered by the platform column
 * @method     array findByWin32(int $win32) Return UserAgent objects filtered by the win32 column
 * @method     array findByBrowser(string $browser) Return UserAgent objects filtered by the browser column
 * @method     array findByVersion(double $version) Return UserAgent objects filtered by the version column
 * @method     array findByMajorver(int $majorver) Return UserAgent objects filtered by the majorver column
 * @method     array findByMinorver(int $minorver) Return UserAgent objects filtered by the minorver column
 * @method     array findByFrames(int $frames) Return UserAgent objects filtered by the frames column
 * @method     array findByIframes(int $iframes) Return UserAgent objects filtered by the iframes column
 * @method     array findByTables(int $tables) Return UserAgent objects filtered by the tables column
 * @method     array findByCookies(int $cookies) Return UserAgent objects filtered by the cookies column
 * @method     array findByJavaapplets(int $javaapplets) Return UserAgent objects filtered by the javaapplets column
 * @method     array findByJavascript(int $javascript) Return UserAgent objects filtered by the javascript column
 * @method     array findByCssversion(int $cssversion) Return UserAgent objects filtered by the cssversion column
 * @method     array findBySupportscss(int $supportscss) Return UserAgent objects filtered by the supportscss column
 * @method     array findByAlpha(int $alpha) Return UserAgent objects filtered by the alpha column
 * @method     array findByBeta(int $beta) Return UserAgent objects filtered by the beta column
 * @method     array findByWin16(int $win16) Return UserAgent objects filtered by the win16 column
 * @method     array findByWin64(int $win64) Return UserAgent objects filtered by the win64 column
 * @method     array findByBackgroundsounds(int $backgroundsounds) Return UserAgent objects filtered by the backgroundsounds column
 * @method     array findByCdf(int $cdf) Return UserAgent objects filtered by the cdf column
 * @method     array findByVbscript(int $vbscript) Return UserAgent objects filtered by the vbscript column
 * @method     array findByActivexcontrols(int $activexcontrols) Return UserAgent objects filtered by the activexcontrols column
 * @method     array findByIsbanned(int $isbanned) Return UserAgent objects filtered by the isbanned column
 * @method     array findByIsmobiledevice(int $ismobiledevice) Return UserAgent objects filtered by the ismobiledevice column
 * @method     array findByIssyndicationreader(int $issyndicationreader) Return UserAgent objects filtered by the issyndicationreader column
 * @method     array findByCrawler(int $crawler) Return UserAgent objects filtered by the crawler column
 * @method     array findByAol(int $aol) Return UserAgent objects filtered by the aol column
 * @method     array findByAolversion(int $aolversion) Return UserAgent objects filtered by the aolversion column
 *
 * @package    propel.generator.sigfly.om
 */
abstract class BaseUserAgentQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseUserAgentQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'sigfly', $modelName = 'UserAgent', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new UserAgentQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    UserAgentQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof UserAgentQuery) {
			return $criteria;
		}
		$query = new UserAgentQuery();
		if (null !== $modelAlias) {
			$query->setModelAlias($modelAlias);
		}
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

	/**
	 * Find object by primary key
	 * Use instance pooling to avoid a database query if the object exists
	 * <code>
	 * $obj  = $c->findPk(12, $con);
	 * </code>
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    UserAgent|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = UserAgentPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
			// the object is alredy in the instance pool
			return $obj;
		} else {
			// the object has not been requested yet, or the formatter is not an object formatter
			$criteria = $this->isKeepQuery() ? clone $this : $this;
			$stmt = $criteria
				->filterByPrimaryKey($key)
				->getSelectStatement($con);
			return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
		}
	}

	/**
	 * Find objects by primary key
	 * <code>
	 * $objs = $c->findPks(array(12, 56, 832), $con);
	 * </code>
	 * @param     array $keys Primary keys to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
	 */
	public function findPks($keys, $con = null)
	{	
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		return $this
			->filterByPrimaryKeys($keys)
			->find($con);
	}

	/**
	 * Filter the query by primary key
	 *
	 * @param     mixed $key Primary key to use for the query
	 *
	 * @return    UserAgentQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(UserAgentPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    UserAgentQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(UserAgentPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserAgentQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(UserAgentPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the user_agent column
	 * 
	 * @param     string $userAgent The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserAgentQuery The current query, for fluid interface
	 */
	public function filterByUserAgent($userAgent = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($userAgent)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $userAgent)) {
				$userAgent = str_replace('*', '%', $userAgent);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserAgentPeer::USER_AGENT, $userAgent, $comparison);
	}

	/**
	 * Filter the query on the parent column
	 * 
	 * @param     string $parent The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserAgentQuery The current query, for fluid interface
	 */
	public function filterByParent($parent = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($parent)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $parent)) {
				$parent = str_replace('*', '%', $parent);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserAgentPeer::PARENT, $parent, $comparison);
	}

	/**
	 * Filter the query on the platform column
	 * 
	 * @param     string $platform The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserAgentQuery The current query, for fluid interface
	 */
	public function filterByPlatform($platform = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($platform)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $platform)) {
				$platform = str_replace('*', '%', $platform);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserAgentPeer::PLATFORM, $platform, $comparison);
	}

	/**
	 * Filter the query on the win32 column
	 * 
	 * @param     int|array $win32 The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserAgentQuery The current query, for fluid interface
	 */
	public function filterByWin32($win32 = null, $comparison = null)
	{
		if (is_array($win32)) {
			$useMinMax = false;
			if (isset($win32['min'])) {
				$this->addUsingAlias(UserAgentPeer::WIN32, $win32['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($win32['max'])) {
				$this->addUsingAlias(UserAgentPeer::WIN32, $win32['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserAgentPeer::WIN32, $win32, $comparison);
	}

	/**
	 * Filter the query on the browser column
	 * 
	 * @param     string $browser The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserAgentQuery The current query, for fluid interface
	 */
	public function filterByBrowser($browser = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($browser)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $browser)) {
				$browser = str_replace('*', '%', $browser);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(UserAgentPeer::BROWSER, $browser, $comparison);
	}

	/**
	 * Filter the query on the version column
	 * 
	 * @param     double|array $version The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserAgentQuery The current query, for fluid interface
	 */
	public function filterByVersion($version = null, $comparison = null)
	{
		if (is_array($version)) {
			$useMinMax = false;
			if (isset($version['min'])) {
				$this->addUsingAlias(UserAgentPeer::VERSION, $version['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($version['max'])) {
				$this->addUsingAlias(UserAgentPeer::VERSION, $version['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserAgentPeer::VERSION, $version, $comparison);
	}

	/**
	 * Filter the query on the majorver column
	 * 
	 * @param     int|array $majorver The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserAgentQuery The current query, for fluid interface
	 */
	public function filterByMajorver($majorver = null, $comparison = null)
	{
		if (is_array($majorver)) {
			$useMinMax = false;
			if (isset($majorver['min'])) {
				$this->addUsingAlias(UserAgentPeer::MAJORVER, $majorver['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($majorver['max'])) {
				$this->addUsingAlias(UserAgentPeer::MAJORVER, $majorver['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserAgentPeer::MAJORVER, $majorver, $comparison);
	}

	/**
	 * Filter the query on the minorver column
	 * 
	 * @param     int|array $minorver The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserAgentQuery The current query, for fluid interface
	 */
	public function filterByMinorver($minorver = null, $comparison = null)
	{
		if (is_array($minorver)) {
			$useMinMax = false;
			if (isset($minorver['min'])) {
				$this->addUsingAlias(UserAgentPeer::MINORVER, $minorver['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($minorver['max'])) {
				$this->addUsingAlias(UserAgentPeer::MINORVER, $minorver['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserAgentPeer::MINORVER, $minorver, $comparison);
	}

	/**
	 * Filter the query on the frames column
	 * 
	 * @param     int|array $frames The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserAgentQuery The current query, for fluid interface
	 */
	public function filterByFrames($frames = null, $comparison = null)
	{
		if (is_array($frames)) {
			$useMinMax = false;
			if (isset($frames['min'])) {
				$this->addUsingAlias(UserAgentPeer::FRAMES, $frames['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($frames['max'])) {
				$this->addUsingAlias(UserAgentPeer::FRAMES, $frames['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserAgentPeer::FRAMES, $frames, $comparison);
	}

	/**
	 * Filter the query on the iframes column
	 * 
	 * @param     int|array $iframes The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserAgentQuery The current query, for fluid interface
	 */
	public function filterByIframes($iframes = null, $comparison = null)
	{
		if (is_array($iframes)) {
			$useMinMax = false;
			if (isset($iframes['min'])) {
				$this->addUsingAlias(UserAgentPeer::IFRAMES, $iframes['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($iframes['max'])) {
				$this->addUsingAlias(UserAgentPeer::IFRAMES, $iframes['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserAgentPeer::IFRAMES, $iframes, $comparison);
	}

	/**
	 * Filter the query on the tables column
	 * 
	 * @param     int|array $tables The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserAgentQuery The current query, for fluid interface
	 */
	public function filterByTables($tables = null, $comparison = null)
	{
		if (is_array($tables)) {
			$useMinMax = false;
			if (isset($tables['min'])) {
				$this->addUsingAlias(UserAgentPeer::TABLES, $tables['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($tables['max'])) {
				$this->addUsingAlias(UserAgentPeer::TABLES, $tables['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserAgentPeer::TABLES, $tables, $comparison);
	}

	/**
	 * Filter the query on the cookies column
	 * 
	 * @param     int|array $cookies The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserAgentQuery The current query, for fluid interface
	 */
	public function filterByCookies($cookies = null, $comparison = null)
	{
		if (is_array($cookies)) {
			$useMinMax = false;
			if (isset($cookies['min'])) {
				$this->addUsingAlias(UserAgentPeer::COOKIES, $cookies['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($cookies['max'])) {
				$this->addUsingAlias(UserAgentPeer::COOKIES, $cookies['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserAgentPeer::COOKIES, $cookies, $comparison);
	}

	/**
	 * Filter the query on the javaapplets column
	 * 
	 * @param     int|array $javaapplets The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserAgentQuery The current query, for fluid interface
	 */
	public function filterByJavaapplets($javaapplets = null, $comparison = null)
	{
		if (is_array($javaapplets)) {
			$useMinMax = false;
			if (isset($javaapplets['min'])) {
				$this->addUsingAlias(UserAgentPeer::JAVAAPPLETS, $javaapplets['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($javaapplets['max'])) {
				$this->addUsingAlias(UserAgentPeer::JAVAAPPLETS, $javaapplets['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserAgentPeer::JAVAAPPLETS, $javaapplets, $comparison);
	}

	/**
	 * Filter the query on the javascript column
	 * 
	 * @param     int|array $javascript The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserAgentQuery The current query, for fluid interface
	 */
	public function filterByJavascript($javascript = null, $comparison = null)
	{
		if (is_array($javascript)) {
			$useMinMax = false;
			if (isset($javascript['min'])) {
				$this->addUsingAlias(UserAgentPeer::JAVASCRIPT, $javascript['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($javascript['max'])) {
				$this->addUsingAlias(UserAgentPeer::JAVASCRIPT, $javascript['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserAgentPeer::JAVASCRIPT, $javascript, $comparison);
	}

	/**
	 * Filter the query on the cssversion column
	 * 
	 * @param     int|array $cssversion The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserAgentQuery The current query, for fluid interface
	 */
	public function filterByCssversion($cssversion = null, $comparison = null)
	{
		if (is_array($cssversion)) {
			$useMinMax = false;
			if (isset($cssversion['min'])) {
				$this->addUsingAlias(UserAgentPeer::CSSVERSION, $cssversion['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($cssversion['max'])) {
				$this->addUsingAlias(UserAgentPeer::CSSVERSION, $cssversion['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserAgentPeer::CSSVERSION, $cssversion, $comparison);
	}

	/**
	 * Filter the query on the supportscss column
	 * 
	 * @param     int|array $supportscss The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserAgentQuery The current query, for fluid interface
	 */
	public function filterBySupportscss($supportscss = null, $comparison = null)
	{
		if (is_array($supportscss)) {
			$useMinMax = false;
			if (isset($supportscss['min'])) {
				$this->addUsingAlias(UserAgentPeer::SUPPORTSCSS, $supportscss['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($supportscss['max'])) {
				$this->addUsingAlias(UserAgentPeer::SUPPORTSCSS, $supportscss['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserAgentPeer::SUPPORTSCSS, $supportscss, $comparison);
	}

	/**
	 * Filter the query on the alpha column
	 * 
	 * @param     int|array $alpha The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserAgentQuery The current query, for fluid interface
	 */
	public function filterByAlpha($alpha = null, $comparison = null)
	{
		if (is_array($alpha)) {
			$useMinMax = false;
			if (isset($alpha['min'])) {
				$this->addUsingAlias(UserAgentPeer::ALPHA, $alpha['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($alpha['max'])) {
				$this->addUsingAlias(UserAgentPeer::ALPHA, $alpha['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserAgentPeer::ALPHA, $alpha, $comparison);
	}

	/**
	 * Filter the query on the beta column
	 * 
	 * @param     int|array $beta The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserAgentQuery The current query, for fluid interface
	 */
	public function filterByBeta($beta = null, $comparison = null)
	{
		if (is_array($beta)) {
			$useMinMax = false;
			if (isset($beta['min'])) {
				$this->addUsingAlias(UserAgentPeer::BETA, $beta['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($beta['max'])) {
				$this->addUsingAlias(UserAgentPeer::BETA, $beta['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserAgentPeer::BETA, $beta, $comparison);
	}

	/**
	 * Filter the query on the win16 column
	 * 
	 * @param     int|array $win16 The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserAgentQuery The current query, for fluid interface
	 */
	public function filterByWin16($win16 = null, $comparison = null)
	{
		if (is_array($win16)) {
			$useMinMax = false;
			if (isset($win16['min'])) {
				$this->addUsingAlias(UserAgentPeer::WIN16, $win16['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($win16['max'])) {
				$this->addUsingAlias(UserAgentPeer::WIN16, $win16['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserAgentPeer::WIN16, $win16, $comparison);
	}

	/**
	 * Filter the query on the win64 column
	 * 
	 * @param     int|array $win64 The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserAgentQuery The current query, for fluid interface
	 */
	public function filterByWin64($win64 = null, $comparison = null)
	{
		if (is_array($win64)) {
			$useMinMax = false;
			if (isset($win64['min'])) {
				$this->addUsingAlias(UserAgentPeer::WIN64, $win64['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($win64['max'])) {
				$this->addUsingAlias(UserAgentPeer::WIN64, $win64['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserAgentPeer::WIN64, $win64, $comparison);
	}

	/**
	 * Filter the query on the backgroundsounds column
	 * 
	 * @param     int|array $backgroundsounds The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserAgentQuery The current query, for fluid interface
	 */
	public function filterByBackgroundsounds($backgroundsounds = null, $comparison = null)
	{
		if (is_array($backgroundsounds)) {
			$useMinMax = false;
			if (isset($backgroundsounds['min'])) {
				$this->addUsingAlias(UserAgentPeer::BACKGROUNDSOUNDS, $backgroundsounds['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($backgroundsounds['max'])) {
				$this->addUsingAlias(UserAgentPeer::BACKGROUNDSOUNDS, $backgroundsounds['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserAgentPeer::BACKGROUNDSOUNDS, $backgroundsounds, $comparison);
	}

	/**
	 * Filter the query on the cdf column
	 * 
	 * @param     int|array $cdf The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserAgentQuery The current query, for fluid interface
	 */
	public function filterByCdf($cdf = null, $comparison = null)
	{
		if (is_array($cdf)) {
			$useMinMax = false;
			if (isset($cdf['min'])) {
				$this->addUsingAlias(UserAgentPeer::CDF, $cdf['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($cdf['max'])) {
				$this->addUsingAlias(UserAgentPeer::CDF, $cdf['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserAgentPeer::CDF, $cdf, $comparison);
	}

	/**
	 * Filter the query on the vbscript column
	 * 
	 * @param     int|array $vbscript The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserAgentQuery The current query, for fluid interface
	 */
	public function filterByVbscript($vbscript = null, $comparison = null)
	{
		if (is_array($vbscript)) {
			$useMinMax = false;
			if (isset($vbscript['min'])) {
				$this->addUsingAlias(UserAgentPeer::VBSCRIPT, $vbscript['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($vbscript['max'])) {
				$this->addUsingAlias(UserAgentPeer::VBSCRIPT, $vbscript['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserAgentPeer::VBSCRIPT, $vbscript, $comparison);
	}

	/**
	 * Filter the query on the activexcontrols column
	 * 
	 * @param     int|array $activexcontrols The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserAgentQuery The current query, for fluid interface
	 */
	public function filterByActivexcontrols($activexcontrols = null, $comparison = null)
	{
		if (is_array($activexcontrols)) {
			$useMinMax = false;
			if (isset($activexcontrols['min'])) {
				$this->addUsingAlias(UserAgentPeer::ACTIVEXCONTROLS, $activexcontrols['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($activexcontrols['max'])) {
				$this->addUsingAlias(UserAgentPeer::ACTIVEXCONTROLS, $activexcontrols['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserAgentPeer::ACTIVEXCONTROLS, $activexcontrols, $comparison);
	}

	/**
	 * Filter the query on the isbanned column
	 * 
	 * @param     int|array $isbanned The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserAgentQuery The current query, for fluid interface
	 */
	public function filterByIsbanned($isbanned = null, $comparison = null)
	{
		if (is_array($isbanned)) {
			$useMinMax = false;
			if (isset($isbanned['min'])) {
				$this->addUsingAlias(UserAgentPeer::ISBANNED, $isbanned['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isbanned['max'])) {
				$this->addUsingAlias(UserAgentPeer::ISBANNED, $isbanned['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserAgentPeer::ISBANNED, $isbanned, $comparison);
	}

	/**
	 * Filter the query on the ismobiledevice column
	 * 
	 * @param     int|array $ismobiledevice The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserAgentQuery The current query, for fluid interface
	 */
	public function filterByIsmobiledevice($ismobiledevice = null, $comparison = null)
	{
		if (is_array($ismobiledevice)) {
			$useMinMax = false;
			if (isset($ismobiledevice['min'])) {
				$this->addUsingAlias(UserAgentPeer::ISMOBILEDEVICE, $ismobiledevice['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($ismobiledevice['max'])) {
				$this->addUsingAlias(UserAgentPeer::ISMOBILEDEVICE, $ismobiledevice['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserAgentPeer::ISMOBILEDEVICE, $ismobiledevice, $comparison);
	}

	/**
	 * Filter the query on the issyndicationreader column
	 * 
	 * @param     int|array $issyndicationreader The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserAgentQuery The current query, for fluid interface
	 */
	public function filterByIssyndicationreader($issyndicationreader = null, $comparison = null)
	{
		if (is_array($issyndicationreader)) {
			$useMinMax = false;
			if (isset($issyndicationreader['min'])) {
				$this->addUsingAlias(UserAgentPeer::ISSYNDICATIONREADER, $issyndicationreader['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($issyndicationreader['max'])) {
				$this->addUsingAlias(UserAgentPeer::ISSYNDICATIONREADER, $issyndicationreader['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserAgentPeer::ISSYNDICATIONREADER, $issyndicationreader, $comparison);
	}

	/**
	 * Filter the query on the crawler column
	 * 
	 * @param     int|array $crawler The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserAgentQuery The current query, for fluid interface
	 */
	public function filterByCrawler($crawler = null, $comparison = null)
	{
		if (is_array($crawler)) {
			$useMinMax = false;
			if (isset($crawler['min'])) {
				$this->addUsingAlias(UserAgentPeer::CRAWLER, $crawler['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($crawler['max'])) {
				$this->addUsingAlias(UserAgentPeer::CRAWLER, $crawler['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserAgentPeer::CRAWLER, $crawler, $comparison);
	}

	/**
	 * Filter the query on the aol column
	 * 
	 * @param     int|array $aol The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserAgentQuery The current query, for fluid interface
	 */
	public function filterByAol($aol = null, $comparison = null)
	{
		if (is_array($aol)) {
			$useMinMax = false;
			if (isset($aol['min'])) {
				$this->addUsingAlias(UserAgentPeer::AOL, $aol['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($aol['max'])) {
				$this->addUsingAlias(UserAgentPeer::AOL, $aol['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserAgentPeer::AOL, $aol, $comparison);
	}

	/**
	 * Filter the query on the aolversion column
	 * 
	 * @param     int|array $aolversion The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    UserAgentQuery The current query, for fluid interface
	 */
	public function filterByAolversion($aolversion = null, $comparison = null)
	{
		if (is_array($aolversion)) {
			$useMinMax = false;
			if (isset($aolversion['min'])) {
				$this->addUsingAlias(UserAgentPeer::AOLVERSION, $aolversion['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($aolversion['max'])) {
				$this->addUsingAlias(UserAgentPeer::AOLVERSION, $aolversion['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(UserAgentPeer::AOLVERSION, $aolversion, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     UserAgent $userAgent Object to remove from the list of results
	 *
	 * @return    UserAgentQuery The current query, for fluid interface
	 */
	public function prune($userAgent = null)
	{
		if ($userAgent) {
			$this->addUsingAlias(UserAgentPeer::ID, $userAgent->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseUserAgentQuery
