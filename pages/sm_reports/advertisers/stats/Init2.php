<?

/* @var $WorkingUser User */
/* @var $DefaultAdGroup AdGroup */

$WorkingUser = UserPeer::retrieveByPK((int)$_GET['id']);

if($WorkingUser === null) {
	$urlLocation = sprintf("%s?page=%s&rand=%d&bad_id", $_SERVER['SCRIPT_NAME'], PAGE_PARENT_C, rand(100000, 999999));
	header('Location: '. $urlLocation);
	exit;
}

$arrAdStats = $WorkingUser->getArrAdStats();

// get the header for the table rows..
$arrHead = array();
foreach ($arrAdStats as $arrHeadRaw) {
	foreach ($arrHeadRaw as $strHeadName => $n) {
		$arrHead[] = $strHeadName;
	}
	break;
}

reset($arrAdStats);

