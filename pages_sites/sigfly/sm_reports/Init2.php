<?

$User = $objSession->getUser();
/* @var $User User */

$countUsersExpired = UserPeer::countExpired();

