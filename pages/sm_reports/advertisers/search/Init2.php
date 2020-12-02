<?

if(strlen($_GET['s']) == 0) {
	$urlLocation = sprintf("%s?page=%s&rand=%d", $_SERVER['SCRIPT_NAME'], PAGE_PARENT_C, rand(1000,9999));
	header('Location: ' . $urlLocation);
	exit;
}

$limit = 20;
$group = ($_GET['group'] > 0)? $_GET['group']: 1;

$likeVal = '%'.$_GET['s'].'%';

// init2
$crit = new Criteria();
$c1 = $crit->getNewCriterion(UserPeer::ID , $_GET['s'], Criteria::EQUAL );
$c2 = $crit->getNewCriterion(UserPeer::EMAIL , $likeVal, Criteria::LIKE );
$c3 = $crit->getNewCriterion(UserPeer::COMPANY_DESCRIPTION , $likeVal, Criteria::LIKE );
$c4 = $crit->getNewCriterion(UserPeer::COMPANY_NAME , $likeVal, Criteria::LIKE );
$c5 = $crit->getNewCriterion(UserPeer::FNAME , $likeVal, Criteria::LIKE );
$c6 = $crit->getNewCriterion(UserPeer::LNAME , $likeVal, Criteria::LIKE );
$c7 = $crit->getNewCriterion(UserPeer::ADDRESSLINE1 , $likeVal, Criteria::LIKE );
$c8 = $crit->getNewCriterion(UserPeer::CITY , $likeVal, Criteria::LIKE );
$c9 = $crit->getNewCriterion(UserPeer::WILSHIRE_USERNAME , $likeVal, Criteria::LIKE );
$c10 = $crit->getNewCriterion(UserPeer::TELEPHONE , $likeVal, Criteria::LIKE );

$c11 = $crit->getNewCriterion(UserPeer::COMPANY_URL , $likeVal, Criteria::LIKE );



$c10->addOr($c9);
$c10->addOr($c8);
$c10->addOr($c7);
$c10->addOr($c6);
$c10->addOr($c5);
$c10->addOr($c4);
$c10->addOr($c3);
$c10->addOr($c2);
$c10->addOr($c1);
$c10->addOr($c11);

$crit->add($c10);

$UsersCount = UserPeer::doCount($crit);
$numpages = ceil($UsersCount/$limit);

if($numpages == 0) {
	$numpages = 1;
}

if($group > $numpages) {
	$group = $numpages;
}


$crit->addAscendingOrderByColumn(UserPeer::EMAIL );

$crit->setOffset(($group-1)*$limit);
$crit->setLimit($limit);

$UsersSearch = UserPeer::doSelect($crit);

