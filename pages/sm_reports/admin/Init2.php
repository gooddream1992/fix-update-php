<?


$crit = new Criteria();
$crit->setDistinct();
$crit->addJoin(UserPeer::ID , UserSecurityObjectPeer::USER_ID );
$crit->addAscendingOrderByColumn(UserPeer::EMAIL );

$AdminUsers = UserPeer::doSelect($crit);


