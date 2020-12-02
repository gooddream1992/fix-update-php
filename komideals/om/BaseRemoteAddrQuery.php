<?php


/**
 * Base class that represents a query for the 'remote_addr' table.
 *
 * 
 *
 * @method     RemoteAddrQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     RemoteAddrQuery orderByRemoteAddr($order = Criteria::ASC) Order by the remote_addr column
 * @method     RemoteAddrQuery orderByCountryCode($order = Criteria::ASC) Order by the country_code column
 * @method     RemoteAddrQuery orderByStateCode($order = Criteria::ASC) Order by the state_code column
 * @method     RemoteAddrQuery orderByCity($order = Criteria::ASC) Order by the city column
 * @method     RemoteAddrQuery orderByPostalCode($order = Criteria::ASC) Order by the postal_code column
 * @method     RemoteAddrQuery orderByLatitude($order = Criteria::ASC) Order by the latitude column
 * @method     RemoteAddrQuery orderByLongitude($order = Criteria::ASC) Order by the longitude column
 * @method     RemoteAddrQuery orderByMetroCode($order = Criteria::ASC) Order by the metro_code column
 * @method     RemoteAddrQuery orderByAreaCode($order = Criteria::ASC) Order by the area_code column
 * @method     RemoteAddrQuery orderByIsp($order = Criteria::ASC) Order by the isp column
 * @method     RemoteAddrQuery orderByOrg($order = Criteria::ASC) Order by the org column
 * @method     RemoteAddrQuery orderByDateCreated($order = Criteria::ASC) Order by the date_created column
 * @method     RemoteAddrQuery orderByDateModified($order = Criteria::ASC) Order by the date_modified column
 *
 * @method     RemoteAddrQuery groupById() Group by the id column
 * @method     RemoteAddrQuery groupByRemoteAddr() Group by the remote_addr column
 * @method     RemoteAddrQuery groupByCountryCode() Group by the country_code column
 * @method     RemoteAddrQuery groupByStateCode() Group by the state_code column
 * @method     RemoteAddrQuery groupByCity() Group by the city column
 * @method     RemoteAddrQuery groupByPostalCode() Group by the postal_code column
 * @method     RemoteAddrQuery groupByLatitude() Group by the latitude column
 * @method     RemoteAddrQuery groupByLongitude() Group by the longitude column
 * @method     RemoteAddrQuery groupByMetroCode() Group by the metro_code column
 * @method     RemoteAddrQuery groupByAreaCode() Group by the area_code column
 * @method     RemoteAddrQuery groupByIsp() Group by the isp column
 * @method     RemoteAddrQuery groupByOrg() Group by the org column
 * @method     RemoteAddrQuery groupByDateCreated() Group by the date_created column
 * @method     RemoteAddrQuery groupByDateModified() Group by the date_modified column
 *
 * @method     RemoteAddrQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     RemoteAddrQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     RemoteAddrQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     RemoteAddr findOne(PropelPDO $con = null) Return the first RemoteAddr matching the query
 * @method     RemoteAddr findOneOrCreate(PropelPDO $con = null) Return the first RemoteAddr matching the query, or a new RemoteAddr object populated from the query conditions when no match is found
 *
 * @method     RemoteAddr findOneById(int $id) Return the first RemoteAddr filtered by the id column
 * @method     RemoteAddr findOneByRemoteAddr(string $remote_addr) Return the first RemoteAddr filtered by the remote_addr column
 * @method     RemoteAddr findOneByCountryCode(string $country_code) Return the first RemoteAddr filtered by the country_code column
 * @method     RemoteAddr findOneByStateCode(string $state_code) Return the first RemoteAddr filtered by the state_code column
 * @method     RemoteAddr findOneByCity(string $city) Return the first RemoteAddr filtered by the city column
 * @method     RemoteAddr findOneByPostalCode(string $postal_code) Return the first RemoteAddr filtered by the postal_code column
 * @method     RemoteAddr findOneByLatitude(double $latitude) Return the first RemoteAddr filtered by the latitude column
 * @method     RemoteAddr findOneByLongitude(double $longitude) Return the first RemoteAddr filtered by the longitude column
 * @method     RemoteAddr findOneByMetroCode(string $metro_code) Return the first RemoteAddr filtered by the metro_code column
 * @method     RemoteAddr findOneByAreaCode(string $area_code) Return the first RemoteAddr filtered by the area_code column
 * @method     RemoteAddr findOneByIsp(string $isp) Return the first RemoteAddr filtered by the isp column
 * @method     RemoteAddr findOneByOrg(string $org) Return the first RemoteAddr filtered by the org column
 * @method     RemoteAddr findOneByDateCreated(string $date_created) Return the first RemoteAddr filtered by the date_created column
 * @method     RemoteAddr findOneByDateModified(string $date_modified) Return the first RemoteAddr filtered by the date_modified column
 *
 * @method     array findById(int $id) Return RemoteAddr objects filtered by the id column
 * @method     array findByRemoteAddr(string $remote_addr) Return RemoteAddr objects filtered by the remote_addr column
 * @method     array findByCountryCode(string $country_code) Return RemoteAddr objects filtered by the country_code column
 * @method     array findByStateCode(string $state_code) Return RemoteAddr objects filtered by the state_code column
 * @method     array findByCity(string $city) Return RemoteAddr objects filtered by the city column
 * @method     array findByPostalCode(string $postal_code) Return RemoteAddr objects filtered by the postal_code column
 * @method     array findByLatitude(double $latitude) Return RemoteAddr objects filtered by the latitude column
 * @method     array findByLongitude(double $longitude) Return RemoteAddr objects filtered by the longitude column
 * @method     array findByMetroCode(string $metro_code) Return RemoteAddr objects filtered by the metro_code column
 * @method     array findByAreaCode(string $area_code) Return RemoteAddr objects filtered by the area_code column
 * @method     array findByIsp(string $isp) Return RemoteAddr objects filtered by the isp column
 * @method     array findByOrg(string $org) Return RemoteAddr objects filtered by the org column
 * @method     array findByDateCreated(string $date_created) Return RemoteAddr objects filtered by the date_created column
 * @method     array findByDateModified(string $date_modified) Return RemoteAddr objects filtered by the date_modified column
 *
 * @package    propel.generator.komideals.om
 */
abstract class BaseRemoteAddrQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseRemoteAddrQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'komideals', $modelName = 'RemoteAddr', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new RemoteAddrQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    RemoteAddrQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof RemoteAddrQuery) {
			return $criteria;
		}
		$query = new RemoteAddrQuery();
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
	 * @return    RemoteAddr|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = RemoteAddrPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    RemoteAddrQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(RemoteAddrPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    RemoteAddrQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(RemoteAddrPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RemoteAddrQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(RemoteAddrPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the remote_addr column
	 * 
	 * @param     string $remoteAddr The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RemoteAddrQuery The current query, for fluid interface
	 */
	public function filterByRemoteAddr($remoteAddr = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($remoteAddr)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $remoteAddr)) {
				$remoteAddr = str_replace('*', '%', $remoteAddr);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(RemoteAddrPeer::REMOTE_ADDR, $remoteAddr, $comparison);
	}

	/**
	 * Filter the query on the country_code column
	 * 
	 * @param     string $countryCode The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RemoteAddrQuery The current query, for fluid interface
	 */
	public function filterByCountryCode($countryCode = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($countryCode)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $countryCode)) {
				$countryCode = str_replace('*', '%', $countryCode);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(RemoteAddrPeer::COUNTRY_CODE, $countryCode, $comparison);
	}

	/**
	 * Filter the query on the state_code column
	 * 
	 * @param     string $stateCode The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RemoteAddrQuery The current query, for fluid interface
	 */
	public function filterByStateCode($stateCode = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($stateCode)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $stateCode)) {
				$stateCode = str_replace('*', '%', $stateCode);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(RemoteAddrPeer::STATE_CODE, $stateCode, $comparison);
	}

	/**
	 * Filter the query on the city column
	 * 
	 * @param     string $city The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RemoteAddrQuery The current query, for fluid interface
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
		return $this->addUsingAlias(RemoteAddrPeer::CITY, $city, $comparison);
	}

	/**
	 * Filter the query on the postal_code column
	 * 
	 * @param     string $postalCode The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RemoteAddrQuery The current query, for fluid interface
	 */
	public function filterByPostalCode($postalCode = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($postalCode)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $postalCode)) {
				$postalCode = str_replace('*', '%', $postalCode);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(RemoteAddrPeer::POSTAL_CODE, $postalCode, $comparison);
	}

	/**
	 * Filter the query on the latitude column
	 * 
	 * @param     double|array $latitude The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RemoteAddrQuery The current query, for fluid interface
	 */
	public function filterByLatitude($latitude = null, $comparison = null)
	{
		if (is_array($latitude)) {
			$useMinMax = false;
			if (isset($latitude['min'])) {
				$this->addUsingAlias(RemoteAddrPeer::LATITUDE, $latitude['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($latitude['max'])) {
				$this->addUsingAlias(RemoteAddrPeer::LATITUDE, $latitude['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(RemoteAddrPeer::LATITUDE, $latitude, $comparison);
	}

	/**
	 * Filter the query on the longitude column
	 * 
	 * @param     double|array $longitude The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RemoteAddrQuery The current query, for fluid interface
	 */
	public function filterByLongitude($longitude = null, $comparison = null)
	{
		if (is_array($longitude)) {
			$useMinMax = false;
			if (isset($longitude['min'])) {
				$this->addUsingAlias(RemoteAddrPeer::LONGITUDE, $longitude['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($longitude['max'])) {
				$this->addUsingAlias(RemoteAddrPeer::LONGITUDE, $longitude['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(RemoteAddrPeer::LONGITUDE, $longitude, $comparison);
	}

	/**
	 * Filter the query on the metro_code column
	 * 
	 * @param     string $metroCode The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RemoteAddrQuery The current query, for fluid interface
	 */
	public function filterByMetroCode($metroCode = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($metroCode)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $metroCode)) {
				$metroCode = str_replace('*', '%', $metroCode);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(RemoteAddrPeer::METRO_CODE, $metroCode, $comparison);
	}

	/**
	 * Filter the query on the area_code column
	 * 
	 * @param     string $areaCode The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RemoteAddrQuery The current query, for fluid interface
	 */
	public function filterByAreaCode($areaCode = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($areaCode)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $areaCode)) {
				$areaCode = str_replace('*', '%', $areaCode);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(RemoteAddrPeer::AREA_CODE, $areaCode, $comparison);
	}

	/**
	 * Filter the query on the isp column
	 * 
	 * @param     string $isp The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RemoteAddrQuery The current query, for fluid interface
	 */
	public function filterByIsp($isp = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($isp)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $isp)) {
				$isp = str_replace('*', '%', $isp);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(RemoteAddrPeer::ISP, $isp, $comparison);
	}

	/**
	 * Filter the query on the org column
	 * 
	 * @param     string $org The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RemoteAddrQuery The current query, for fluid interface
	 */
	public function filterByOrg($org = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($org)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $org)) {
				$org = str_replace('*', '%', $org);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(RemoteAddrPeer::ORG, $org, $comparison);
	}

	/**
	 * Filter the query on the date_created column
	 * 
	 * @param     string|array $dateCreated The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RemoteAddrQuery The current query, for fluid interface
	 */
	public function filterByDateCreated($dateCreated = null, $comparison = null)
	{
		if (is_array($dateCreated)) {
			$useMinMax = false;
			if (isset($dateCreated['min'])) {
				$this->addUsingAlias(RemoteAddrPeer::DATE_CREATED, $dateCreated['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateCreated['max'])) {
				$this->addUsingAlias(RemoteAddrPeer::DATE_CREATED, $dateCreated['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(RemoteAddrPeer::DATE_CREATED, $dateCreated, $comparison);
	}

	/**
	 * Filter the query on the date_modified column
	 * 
	 * @param     string|array $dateModified The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RemoteAddrQuery The current query, for fluid interface
	 */
	public function filterByDateModified($dateModified = null, $comparison = null)
	{
		if (is_array($dateModified)) {
			$useMinMax = false;
			if (isset($dateModified['min'])) {
				$this->addUsingAlias(RemoteAddrPeer::DATE_MODIFIED, $dateModified['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateModified['max'])) {
				$this->addUsingAlias(RemoteAddrPeer::DATE_MODIFIED, $dateModified['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(RemoteAddrPeer::DATE_MODIFIED, $dateModified, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     RemoteAddr $remoteAddr Object to remove from the list of results
	 *
	 * @return    RemoteAddrQuery The current query, for fluid interface
	 */
	public function prune($remoteAddr = null)
	{
		if ($remoteAddr) {
			$this->addUsingAlias(RemoteAddrPeer::ID, $remoteAddr->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseRemoteAddrQuery
