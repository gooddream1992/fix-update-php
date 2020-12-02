<?php


/**
 * Base class that represents a query for the 'ZIPCode' table.
 *
 * 
 *
 * @method     ZipcodeQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ZipcodeQuery orderByZipcode($order = Criteria::ASC) Order by the ZIPCode column
 * @method     ZipcodeQuery orderByZipcodetype($order = Criteria::ASC) Order by the ZIPCodeType column
 * @method     ZipcodeQuery orderByCity($order = Criteria::ASC) Order by the City column
 * @method     ZipcodeQuery orderByCitytype($order = Criteria::ASC) Order by the CityType column
 * @method     ZipcodeQuery orderByCounty($order = Criteria::ASC) Order by the County column
 * @method     ZipcodeQuery orderByCountyfips($order = Criteria::ASC) Order by the CountyFIPS column
 * @method     ZipcodeQuery orderByState($order = Criteria::ASC) Order by the State column
 * @method     ZipcodeQuery orderByStatecode($order = Criteria::ASC) Order by the StateCode column
 * @method     ZipcodeQuery orderByStatefips($order = Criteria::ASC) Order by the StateFIPS column
 * @method     ZipcodeQuery orderByMsa($order = Criteria::ASC) Order by the MSA column
 * @method     ZipcodeQuery orderByAreacode($order = Criteria::ASC) Order by the AreaCode column
 * @method     ZipcodeQuery orderByTimezone($order = Criteria::ASC) Order by the TimeZone column
 * @method     ZipcodeQuery orderByGmtoffset($order = Criteria::ASC) Order by the GMTOffset column
 * @method     ZipcodeQuery orderByDst($order = Criteria::ASC) Order by the DST column
 * @method     ZipcodeQuery orderByLatitude($order = Criteria::ASC) Order by the Latitude column
 * @method     ZipcodeQuery orderByLongitude($order = Criteria::ASC) Order by the Longitude column
 *
 * @method     ZipcodeQuery groupById() Group by the id column
 * @method     ZipcodeQuery groupByZipcode() Group by the ZIPCode column
 * @method     ZipcodeQuery groupByZipcodetype() Group by the ZIPCodeType column
 * @method     ZipcodeQuery groupByCity() Group by the City column
 * @method     ZipcodeQuery groupByCitytype() Group by the CityType column
 * @method     ZipcodeQuery groupByCounty() Group by the County column
 * @method     ZipcodeQuery groupByCountyfips() Group by the CountyFIPS column
 * @method     ZipcodeQuery groupByState() Group by the State column
 * @method     ZipcodeQuery groupByStatecode() Group by the StateCode column
 * @method     ZipcodeQuery groupByStatefips() Group by the StateFIPS column
 * @method     ZipcodeQuery groupByMsa() Group by the MSA column
 * @method     ZipcodeQuery groupByAreacode() Group by the AreaCode column
 * @method     ZipcodeQuery groupByTimezone() Group by the TimeZone column
 * @method     ZipcodeQuery groupByGmtoffset() Group by the GMTOffset column
 * @method     ZipcodeQuery groupByDst() Group by the DST column
 * @method     ZipcodeQuery groupByLatitude() Group by the Latitude column
 * @method     ZipcodeQuery groupByLongitude() Group by the Longitude column
 *
 * @method     ZipcodeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ZipcodeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ZipcodeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Zipcode findOne(PropelPDO $con = null) Return the first Zipcode matching the query
 * @method     Zipcode findOneOrCreate(PropelPDO $con = null) Return the first Zipcode matching the query, or a new Zipcode object populated from the query conditions when no match is found
 *
 * @method     Zipcode findOneById(int $id) Return the first Zipcode filtered by the id column
 * @method     Zipcode findOneByZipcode(string $ZIPCode) Return the first Zipcode filtered by the ZIPCode column
 * @method     Zipcode findOneByZipcodetype(string $ZIPCodeType) Return the first Zipcode filtered by the ZIPCodeType column
 * @method     Zipcode findOneByCity(string $City) Return the first Zipcode filtered by the City column
 * @method     Zipcode findOneByCitytype(string $CityType) Return the first Zipcode filtered by the CityType column
 * @method     Zipcode findOneByCounty(string $County) Return the first Zipcode filtered by the County column
 * @method     Zipcode findOneByCountyfips(string $CountyFIPS) Return the first Zipcode filtered by the CountyFIPS column
 * @method     Zipcode findOneByState(string $State) Return the first Zipcode filtered by the State column
 * @method     Zipcode findOneByStatecode(string $StateCode) Return the first Zipcode filtered by the StateCode column
 * @method     Zipcode findOneByStatefips(string $StateFIPS) Return the first Zipcode filtered by the StateFIPS column
 * @method     Zipcode findOneByMsa(string $MSA) Return the first Zipcode filtered by the MSA column
 * @method     Zipcode findOneByAreacode(string $AreaCode) Return the first Zipcode filtered by the AreaCode column
 * @method     Zipcode findOneByTimezone(string $TimeZone) Return the first Zipcode filtered by the TimeZone column
 * @method     Zipcode findOneByGmtoffset(int $GMTOffset) Return the first Zipcode filtered by the GMTOffset column
 * @method     Zipcode findOneByDst(string $DST) Return the first Zipcode filtered by the DST column
 * @method     Zipcode findOneByLatitude(double $Latitude) Return the first Zipcode filtered by the Latitude column
 * @method     Zipcode findOneByLongitude(double $Longitude) Return the first Zipcode filtered by the Longitude column
 *
 * @method     array findById(int $id) Return Zipcode objects filtered by the id column
 * @method     array findByZipcode(string $ZIPCode) Return Zipcode objects filtered by the ZIPCode column
 * @method     array findByZipcodetype(string $ZIPCodeType) Return Zipcode objects filtered by the ZIPCodeType column
 * @method     array findByCity(string $City) Return Zipcode objects filtered by the City column
 * @method     array findByCitytype(string $CityType) Return Zipcode objects filtered by the CityType column
 * @method     array findByCounty(string $County) Return Zipcode objects filtered by the County column
 * @method     array findByCountyfips(string $CountyFIPS) Return Zipcode objects filtered by the CountyFIPS column
 * @method     array findByState(string $State) Return Zipcode objects filtered by the State column
 * @method     array findByStatecode(string $StateCode) Return Zipcode objects filtered by the StateCode column
 * @method     array findByStatefips(string $StateFIPS) Return Zipcode objects filtered by the StateFIPS column
 * @method     array findByMsa(string $MSA) Return Zipcode objects filtered by the MSA column
 * @method     array findByAreacode(string $AreaCode) Return Zipcode objects filtered by the AreaCode column
 * @method     array findByTimezone(string $TimeZone) Return Zipcode objects filtered by the TimeZone column
 * @method     array findByGmtoffset(int $GMTOffset) Return Zipcode objects filtered by the GMTOffset column
 * @method     array findByDst(string $DST) Return Zipcode objects filtered by the DST column
 * @method     array findByLatitude(double $Latitude) Return Zipcode objects filtered by the Latitude column
 * @method     array findByLongitude(double $Longitude) Return Zipcode objects filtered by the Longitude column
 *
 * @package    propel.generator.komideals.om
 */
abstract class BaseZipcodeQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseZipcodeQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'komideals', $modelName = 'Zipcode', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ZipcodeQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ZipcodeQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ZipcodeQuery) {
			return $criteria;
		}
		$query = new ZipcodeQuery();
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
	 * @return    Zipcode|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = ZipcodePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    ZipcodeQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(ZipcodePeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ZipcodeQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(ZipcodePeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ZipcodeQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ZipcodePeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the ZIPCode column
	 * 
	 * @param     string $zipcode The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ZipcodeQuery The current query, for fluid interface
	 */
	public function filterByZipcode($zipcode = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($zipcode)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $zipcode)) {
				$zipcode = str_replace('*', '%', $zipcode);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ZipcodePeer::ZIPCODE, $zipcode, $comparison);
	}

	/**
	 * Filter the query on the ZIPCodeType column
	 * 
	 * @param     string $zipcodetype The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ZipcodeQuery The current query, for fluid interface
	 */
	public function filterByZipcodetype($zipcodetype = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($zipcodetype)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $zipcodetype)) {
				$zipcodetype = str_replace('*', '%', $zipcodetype);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ZipcodePeer::ZIPCODETYPE, $zipcodetype, $comparison);
	}

	/**
	 * Filter the query on the City column
	 * 
	 * @param     string $city The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ZipcodeQuery The current query, for fluid interface
	 */
	public function filterByCity($city = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($city)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $city)) {
				$city = str_replace('*', '%', $city);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ZipcodePeer::CITY, $city, $comparison);
	}

	/**
	 * Filter the query on the CityType column
	 * 
	 * @param     string $citytype The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ZipcodeQuery The current query, for fluid interface
	 */
	public function filterByCitytype($citytype = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($citytype)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $citytype)) {
				$citytype = str_replace('*', '%', $citytype);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ZipcodePeer::CITYTYPE, $citytype, $comparison);
	}

	/**
	 * Filter the query on the County column
	 * 
	 * @param     string $county The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ZipcodeQuery The current query, for fluid interface
	 */
	public function filterByCounty($county = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($county)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $county)) {
				$county = str_replace('*', '%', $county);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ZipcodePeer::COUNTY, $county, $comparison);
	}

	/**
	 * Filter the query on the CountyFIPS column
	 * 
	 * @param     string $countyfips The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ZipcodeQuery The current query, for fluid interface
	 */
	public function filterByCountyfips($countyfips = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($countyfips)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $countyfips)) {
				$countyfips = str_replace('*', '%', $countyfips);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ZipcodePeer::COUNTYFIPS, $countyfips, $comparison);
	}

	/**
	 * Filter the query on the State column
	 * 
	 * @param     string $state The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ZipcodeQuery The current query, for fluid interface
	 */
	public function filterByState($state = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($state)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $state)) {
				$state = str_replace('*', '%', $state);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ZipcodePeer::STATE, $state, $comparison);
	}

	/**
	 * Filter the query on the StateCode column
	 * 
	 * @param     string $statecode The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ZipcodeQuery The current query, for fluid interface
	 */
	public function filterByStatecode($statecode = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($statecode)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $statecode)) {
				$statecode = str_replace('*', '%', $statecode);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ZipcodePeer::STATECODE, $statecode, $comparison);
	}

	/**
	 * Filter the query on the StateFIPS column
	 * 
	 * @param     string $statefips The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ZipcodeQuery The current query, for fluid interface
	 */
	public function filterByStatefips($statefips = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($statefips)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $statefips)) {
				$statefips = str_replace('*', '%', $statefips);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ZipcodePeer::STATEFIPS, $statefips, $comparison);
	}

	/**
	 * Filter the query on the MSA column
	 * 
	 * @param     string $msa The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ZipcodeQuery The current query, for fluid interface
	 */
	public function filterByMsa($msa = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($msa)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $msa)) {
				$msa = str_replace('*', '%', $msa);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ZipcodePeer::MSA, $msa, $comparison);
	}

	/**
	 * Filter the query on the AreaCode column
	 * 
	 * @param     string $areacode The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ZipcodeQuery The current query, for fluid interface
	 */
	public function filterByAreacode($areacode = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($areacode)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $areacode)) {
				$areacode = str_replace('*', '%', $areacode);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ZipcodePeer::AREACODE, $areacode, $comparison);
	}

	/**
	 * Filter the query on the TimeZone column
	 * 
	 * @param     string $timezone The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ZipcodeQuery The current query, for fluid interface
	 */
	public function filterByTimezone($timezone = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($timezone)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $timezone)) {
				$timezone = str_replace('*', '%', $timezone);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ZipcodePeer::TIMEZONE, $timezone, $comparison);
	}

	/**
	 * Filter the query on the GMTOffset column
	 * 
	 * @param     int|array $gmtoffset The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ZipcodeQuery The current query, for fluid interface
	 */
	public function filterByGmtoffset($gmtoffset = null, $comparison = null)
	{
		if (is_array($gmtoffset)) {
			$useMinMax = false;
			if (isset($gmtoffset['min'])) {
				$this->addUsingAlias(ZipcodePeer::GMTOFFSET, $gmtoffset['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($gmtoffset['max'])) {
				$this->addUsingAlias(ZipcodePeer::GMTOFFSET, $gmtoffset['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ZipcodePeer::GMTOFFSET, $gmtoffset, $comparison);
	}

	/**
	 * Filter the query on the DST column
	 * 
	 * @param     string $dst The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ZipcodeQuery The current query, for fluid interface
	 */
	public function filterByDst($dst = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($dst)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $dst)) {
				$dst = str_replace('*', '%', $dst);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ZipcodePeer::DST, $dst, $comparison);
	}

	/**
	 * Filter the query on the Latitude column
	 * 
	 * @param     double|array $latitude The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ZipcodeQuery The current query, for fluid interface
	 */
	public function filterByLatitude($latitude = null, $comparison = null)
	{
		if (is_array($latitude)) {
			$useMinMax = false;
			if (isset($latitude['min'])) {
				$this->addUsingAlias(ZipcodePeer::LATITUDE, $latitude['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($latitude['max'])) {
				$this->addUsingAlias(ZipcodePeer::LATITUDE, $latitude['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ZipcodePeer::LATITUDE, $latitude, $comparison);
	}

	/**
	 * Filter the query on the Longitude column
	 * 
	 * @param     double|array $longitude The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ZipcodeQuery The current query, for fluid interface
	 */
	public function filterByLongitude($longitude = null, $comparison = null)
	{
		if (is_array($longitude)) {
			$useMinMax = false;
			if (isset($longitude['min'])) {
				$this->addUsingAlias(ZipcodePeer::LONGITUDE, $longitude['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($longitude['max'])) {
				$this->addUsingAlias(ZipcodePeer::LONGITUDE, $longitude['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ZipcodePeer::LONGITUDE, $longitude, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Zipcode $zipcode Object to remove from the list of results
	 *
	 * @return    ZipcodeQuery The current query, for fluid interface
	 */
	public function prune($zipcode = null)
	{
		if ($zipcode) {
			$this->addUsingAlias(ZipcodePeer::ID, $zipcode->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseZipcodeQuery
