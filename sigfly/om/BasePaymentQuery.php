<?php


/**
 * Base class that represents a query for the 'payment' table.
 *
 * 
 *
 * @method     PaymentQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     PaymentQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method     PaymentQuery orderByOid($order = Criteria::ASC) Order by the OID column
 * @method     PaymentQuery orderByQuantity($order = Criteria::ASC) Order by the quantity column
 * @method     PaymentQuery orderByAmount($order = Criteria::ASC) Order by the amount column
 * @method     PaymentQuery orderByComment($order = Criteria::ASC) Order by the comment column
 * @method     PaymentQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     PaymentQuery orderByPaymentMethodId($order = Criteria::ASC) Order by the payment_method_id column
 * @method     PaymentQuery orderByPurchaseOrderId($order = Criteria::ASC) Order by the purchase_order_id column
 * @method     PaymentQuery orderByIsDeclined($order = Criteria::ASC) Order by the is_declined column
 * @method     PaymentQuery orderByIsPaid($order = Criteria::ASC) Order by the is_paid column
 * @method     PaymentQuery orderByIsRecurring($order = Criteria::ASC) Order by the is_recurring column
 * @method     PaymentQuery orderByIsActive($order = Criteria::ASC) Order by the is_active column
 * @method     PaymentQuery orderByDatePaid($order = Criteria::ASC) Order by the date_paid column
 * @method     PaymentQuery orderByDateCreated($order = Criteria::ASC) Order by the date_created column
 * @method     PaymentQuery orderByRemoteAddr($order = Criteria::ASC) Order by the remote_addr column
 *
 * @method     PaymentQuery groupById() Group by the id column
 * @method     PaymentQuery groupByCode() Group by the code column
 * @method     PaymentQuery groupByOid() Group by the OID column
 * @method     PaymentQuery groupByQuantity() Group by the quantity column
 * @method     PaymentQuery groupByAmount() Group by the amount column
 * @method     PaymentQuery groupByComment() Group by the comment column
 * @method     PaymentQuery groupByUserId() Group by the user_id column
 * @method     PaymentQuery groupByPaymentMethodId() Group by the payment_method_id column
 * @method     PaymentQuery groupByPurchaseOrderId() Group by the purchase_order_id column
 * @method     PaymentQuery groupByIsDeclined() Group by the is_declined column
 * @method     PaymentQuery groupByIsPaid() Group by the is_paid column
 * @method     PaymentQuery groupByIsRecurring() Group by the is_recurring column
 * @method     PaymentQuery groupByIsActive() Group by the is_active column
 * @method     PaymentQuery groupByDatePaid() Group by the date_paid column
 * @method     PaymentQuery groupByDateCreated() Group by the date_created column
 * @method     PaymentQuery groupByRemoteAddr() Group by the remote_addr column
 *
 * @method     PaymentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PaymentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PaymentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     PaymentQuery leftJoinPurchaseOrder($relationAlias = null) Adds a LEFT JOIN clause to the query using the PurchaseOrder relation
 * @method     PaymentQuery rightJoinPurchaseOrder($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PurchaseOrder relation
 * @method     PaymentQuery innerJoinPurchaseOrder($relationAlias = null) Adds a INNER JOIN clause to the query using the PurchaseOrder relation
 *
 * @method     PaymentQuery leftJoinUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the User relation
 * @method     PaymentQuery rightJoinUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the User relation
 * @method     PaymentQuery innerJoinUser($relationAlias = null) Adds a INNER JOIN clause to the query using the User relation
 *
 * @method     PaymentQuery leftJoinPaymentMethod($relationAlias = null) Adds a LEFT JOIN clause to the query using the PaymentMethod relation
 * @method     PaymentQuery rightJoinPaymentMethod($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PaymentMethod relation
 * @method     PaymentQuery innerJoinPaymentMethod($relationAlias = null) Adds a INNER JOIN clause to the query using the PaymentMethod relation
 *
 * @method     Payment findOne(PropelPDO $con = null) Return the first Payment matching the query
 * @method     Payment findOneOrCreate(PropelPDO $con = null) Return the first Payment matching the query, or a new Payment object populated from the query conditions when no match is found
 *
 * @method     Payment findOneById(int $id) Return the first Payment filtered by the id column
 * @method     Payment findOneByCode(string $code) Return the first Payment filtered by the code column
 * @method     Payment findOneByOid(string $OID) Return the first Payment filtered by the OID column
 * @method     Payment findOneByQuantity(int $quantity) Return the first Payment filtered by the quantity column
 * @method     Payment findOneByAmount(double $amount) Return the first Payment filtered by the amount column
 * @method     Payment findOneByComment(string $comment) Return the first Payment filtered by the comment column
 * @method     Payment findOneByUserId(int $user_id) Return the first Payment filtered by the user_id column
 * @method     Payment findOneByPaymentMethodId(int $payment_method_id) Return the first Payment filtered by the payment_method_id column
 * @method     Payment findOneByPurchaseOrderId(int $purchase_order_id) Return the first Payment filtered by the purchase_order_id column
 * @method     Payment findOneByIsDeclined(int $is_declined) Return the first Payment filtered by the is_declined column
 * @method     Payment findOneByIsPaid(int $is_paid) Return the first Payment filtered by the is_paid column
 * @method     Payment findOneByIsRecurring(int $is_recurring) Return the first Payment filtered by the is_recurring column
 * @method     Payment findOneByIsActive(int $is_active) Return the first Payment filtered by the is_active column
 * @method     Payment findOneByDatePaid(string $date_paid) Return the first Payment filtered by the date_paid column
 * @method     Payment findOneByDateCreated(string $date_created) Return the first Payment filtered by the date_created column
 * @method     Payment findOneByRemoteAddr(string $remote_addr) Return the first Payment filtered by the remote_addr column
 *
 * @method     array findById(int $id) Return Payment objects filtered by the id column
 * @method     array findByCode(string $code) Return Payment objects filtered by the code column
 * @method     array findByOid(string $OID) Return Payment objects filtered by the OID column
 * @method     array findByQuantity(int $quantity) Return Payment objects filtered by the quantity column
 * @method     array findByAmount(double $amount) Return Payment objects filtered by the amount column
 * @method     array findByComment(string $comment) Return Payment objects filtered by the comment column
 * @method     array findByUserId(int $user_id) Return Payment objects filtered by the user_id column
 * @method     array findByPaymentMethodId(int $payment_method_id) Return Payment objects filtered by the payment_method_id column
 * @method     array findByPurchaseOrderId(int $purchase_order_id) Return Payment objects filtered by the purchase_order_id column
 * @method     array findByIsDeclined(int $is_declined) Return Payment objects filtered by the is_declined column
 * @method     array findByIsPaid(int $is_paid) Return Payment objects filtered by the is_paid column
 * @method     array findByIsRecurring(int $is_recurring) Return Payment objects filtered by the is_recurring column
 * @method     array findByIsActive(int $is_active) Return Payment objects filtered by the is_active column
 * @method     array findByDatePaid(string $date_paid) Return Payment objects filtered by the date_paid column
 * @method     array findByDateCreated(string $date_created) Return Payment objects filtered by the date_created column
 * @method     array findByRemoteAddr(string $remote_addr) Return Payment objects filtered by the remote_addr column
 *
 * @package    propel.generator.sigfly.om
 */
abstract class BasePaymentQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BasePaymentQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'sigfly', $modelName = 'Payment', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new PaymentQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    PaymentQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof PaymentQuery) {
			return $criteria;
		}
		$query = new PaymentQuery();
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
	 * @return    Payment|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = PaymentPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    PaymentQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(PaymentPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    PaymentQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(PaymentPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * @param     int|array $id The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(PaymentPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the code column
	 * 
	 * @param     string $code The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentQuery The current query, for fluid interface
	 */
	public function filterByCode($code = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($code)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $code)) {
				$code = str_replace('*', '%', $code);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PaymentPeer::CODE, $code, $comparison);
	}

	/**
	 * Filter the query on the OID column
	 * 
	 * @param     string $oid The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentQuery The current query, for fluid interface
	 */
	public function filterByOid($oid = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($oid)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $oid)) {
				$oid = str_replace('*', '%', $oid);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PaymentPeer::OID, $oid, $comparison);
	}

	/**
	 * Filter the query on the quantity column
	 * 
	 * @param     int|array $quantity The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentQuery The current query, for fluid interface
	 */
	public function filterByQuantity($quantity = null, $comparison = null)
	{
		if (is_array($quantity)) {
			$useMinMax = false;
			if (isset($quantity['min'])) {
				$this->addUsingAlias(PaymentPeer::QUANTITY, $quantity['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($quantity['max'])) {
				$this->addUsingAlias(PaymentPeer::QUANTITY, $quantity['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PaymentPeer::QUANTITY, $quantity, $comparison);
	}

	/**
	 * Filter the query on the amount column
	 * 
	 * @param     double|array $amount The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentQuery The current query, for fluid interface
	 */
	public function filterByAmount($amount = null, $comparison = null)
	{
		if (is_array($amount)) {
			$useMinMax = false;
			if (isset($amount['min'])) {
				$this->addUsingAlias(PaymentPeer::AMOUNT, $amount['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($amount['max'])) {
				$this->addUsingAlias(PaymentPeer::AMOUNT, $amount['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PaymentPeer::AMOUNT, $amount, $comparison);
	}

	/**
	 * Filter the query on the comment column
	 * 
	 * @param     string $comment The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentQuery The current query, for fluid interface
	 */
	public function filterByComment($comment = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($comment)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $comment)) {
				$comment = str_replace('*', '%', $comment);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PaymentPeer::COMMENT, $comment, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(PaymentPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(PaymentPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PaymentPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the payment_method_id column
	 * 
	 * @param     int|array $paymentMethodId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentQuery The current query, for fluid interface
	 */
	public function filterByPaymentMethodId($paymentMethodId = null, $comparison = null)
	{
		if (is_array($paymentMethodId)) {
			$useMinMax = false;
			if (isset($paymentMethodId['min'])) {
				$this->addUsingAlias(PaymentPeer::PAYMENT_METHOD_ID, $paymentMethodId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($paymentMethodId['max'])) {
				$this->addUsingAlias(PaymentPeer::PAYMENT_METHOD_ID, $paymentMethodId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PaymentPeer::PAYMENT_METHOD_ID, $paymentMethodId, $comparison);
	}

	/**
	 * Filter the query on the purchase_order_id column
	 * 
	 * @param     int|array $purchaseOrderId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentQuery The current query, for fluid interface
	 */
	public function filterByPurchaseOrderId($purchaseOrderId = null, $comparison = null)
	{
		if (is_array($purchaseOrderId)) {
			$useMinMax = false;
			if (isset($purchaseOrderId['min'])) {
				$this->addUsingAlias(PaymentPeer::PURCHASE_ORDER_ID, $purchaseOrderId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($purchaseOrderId['max'])) {
				$this->addUsingAlias(PaymentPeer::PURCHASE_ORDER_ID, $purchaseOrderId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PaymentPeer::PURCHASE_ORDER_ID, $purchaseOrderId, $comparison);
	}

	/**
	 * Filter the query on the is_declined column
	 * 
	 * @param     int|array $isDeclined The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentQuery The current query, for fluid interface
	 */
	public function filterByIsDeclined($isDeclined = null, $comparison = null)
	{
		if (is_array($isDeclined)) {
			$useMinMax = false;
			if (isset($isDeclined['min'])) {
				$this->addUsingAlias(PaymentPeer::IS_DECLINED, $isDeclined['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isDeclined['max'])) {
				$this->addUsingAlias(PaymentPeer::IS_DECLINED, $isDeclined['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PaymentPeer::IS_DECLINED, $isDeclined, $comparison);
	}

	/**
	 * Filter the query on the is_paid column
	 * 
	 * @param     int|array $isPaid The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentQuery The current query, for fluid interface
	 */
	public function filterByIsPaid($isPaid = null, $comparison = null)
	{
		if (is_array($isPaid)) {
			$useMinMax = false;
			if (isset($isPaid['min'])) {
				$this->addUsingAlias(PaymentPeer::IS_PAID, $isPaid['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isPaid['max'])) {
				$this->addUsingAlias(PaymentPeer::IS_PAID, $isPaid['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PaymentPeer::IS_PAID, $isPaid, $comparison);
	}

	/**
	 * Filter the query on the is_recurring column
	 * 
	 * @param     int|array $isRecurring The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentQuery The current query, for fluid interface
	 */
	public function filterByIsRecurring($isRecurring = null, $comparison = null)
	{
		if (is_array($isRecurring)) {
			$useMinMax = false;
			if (isset($isRecurring['min'])) {
				$this->addUsingAlias(PaymentPeer::IS_RECURRING, $isRecurring['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isRecurring['max'])) {
				$this->addUsingAlias(PaymentPeer::IS_RECURRING, $isRecurring['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PaymentPeer::IS_RECURRING, $isRecurring, $comparison);
	}

	/**
	 * Filter the query on the is_active column
	 * 
	 * @param     int|array $isActive The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentQuery The current query, for fluid interface
	 */
	public function filterByIsActive($isActive = null, $comparison = null)
	{
		if (is_array($isActive)) {
			$useMinMax = false;
			if (isset($isActive['min'])) {
				$this->addUsingAlias(PaymentPeer::IS_ACTIVE, $isActive['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($isActive['max'])) {
				$this->addUsingAlias(PaymentPeer::IS_ACTIVE, $isActive['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PaymentPeer::IS_ACTIVE, $isActive, $comparison);
	}

	/**
	 * Filter the query on the date_paid column
	 * 
	 * @param     string|array $datePaid The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentQuery The current query, for fluid interface
	 */
	public function filterByDatePaid($datePaid = null, $comparison = null)
	{
		if (is_array($datePaid)) {
			$useMinMax = false;
			if (isset($datePaid['min'])) {
				$this->addUsingAlias(PaymentPeer::DATE_PAID, $datePaid['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($datePaid['max'])) {
				$this->addUsingAlias(PaymentPeer::DATE_PAID, $datePaid['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PaymentPeer::DATE_PAID, $datePaid, $comparison);
	}

	/**
	 * Filter the query on the date_created column
	 * 
	 * @param     string|array $dateCreated The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentQuery The current query, for fluid interface
	 */
	public function filterByDateCreated($dateCreated = null, $comparison = null)
	{
		if (is_array($dateCreated)) {
			$useMinMax = false;
			if (isset($dateCreated['min'])) {
				$this->addUsingAlias(PaymentPeer::DATE_CREATED, $dateCreated['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dateCreated['max'])) {
				$this->addUsingAlias(PaymentPeer::DATE_CREATED, $dateCreated['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PaymentPeer::DATE_CREATED, $dateCreated, $comparison);
	}

	/**
	 * Filter the query on the remote_addr column
	 * 
	 * @param     string $remoteAddr The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentQuery The current query, for fluid interface
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
		return $this->addUsingAlias(PaymentPeer::REMOTE_ADDR, $remoteAddr, $comparison);
	}

	/**
	 * Filter the query by a related PurchaseOrder object
	 *
	 * @param     PurchaseOrder $purchaseOrder  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentQuery The current query, for fluid interface
	 */
	public function filterByPurchaseOrder($purchaseOrder, $comparison = null)
	{
		return $this
			->addUsingAlias(PaymentPeer::PURCHASE_ORDER_ID, $purchaseOrder->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the PurchaseOrder relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PaymentQuery The current query, for fluid interface
	 */
	public function joinPurchaseOrder($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('PurchaseOrder');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'PurchaseOrder');
		}
		
		return $this;
	}

	/**
	 * Use the PurchaseOrder relation PurchaseOrder object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PurchaseOrderQuery A secondary query class using the current class as primary query
	 */
	public function usePurchaseOrderQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinPurchaseOrder($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'PurchaseOrder', 'PurchaseOrderQuery');
	}

	/**
	 * Filter the query by a related User object
	 *
	 * @param     User $user  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentQuery The current query, for fluid interface
	 */
	public function filterByUser($user, $comparison = null)
	{
		return $this
			->addUsingAlias(PaymentPeer::USER_ID, $user->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the User relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PaymentQuery The current query, for fluid interface
	 */
	public function joinUser($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('User');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'User');
		}
		
		return $this;
	}

	/**
	 * Use the User relation User object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    UserQuery A secondary query class using the current class as primary query
	 */
	public function useUserQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinUser($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'User', 'UserQuery');
	}

	/**
	 * Filter the query by a related PaymentMethod object
	 *
	 * @param     PaymentMethod $paymentMethod  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PaymentQuery The current query, for fluid interface
	 */
	public function filterByPaymentMethod($paymentMethod, $comparison = null)
	{
		return $this
			->addUsingAlias(PaymentPeer::PAYMENT_METHOD_ID, $paymentMethod->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the PaymentMethod relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PaymentQuery The current query, for fluid interface
	 */
	public function joinPaymentMethod($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('PaymentMethod');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'PaymentMethod');
		}
		
		return $this;
	}

	/**
	 * Use the PaymentMethod relation PaymentMethod object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PaymentMethodQuery A secondary query class using the current class as primary query
	 */
	public function usePaymentMethodQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinPaymentMethod($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'PaymentMethod', 'PaymentMethodQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Payment $payment Object to remove from the list of results
	 *
	 * @return    PaymentQuery The current query, for fluid interface
	 */
	public function prune($payment = null)
	{
		if ($payment) {
			$this->addUsingAlias(PaymentPeer::ID, $payment->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BasePaymentQuery
