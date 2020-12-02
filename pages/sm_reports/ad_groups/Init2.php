<?

$queued_limit = 10;

if($_GET['show_all']) {
	
	$limit = 20;
	$group = ($_GET['group'] > 0)? $_GET['group']: 1;
	
	// init2
	$crit = new Criteria();
	$crit->setDistinct();
	$crit->addJoin(AdGroupPeer::USER_ID , UserPeer::ID );
	
	
	$AdGroupCount = AdGroupPeer::doCount($crit);
	$numpages = ceil($AdGroupCount/$limit);
	
	if($numpages == 0) {
		$numpages = 1;
	}
	
	if($group > $numpages) {
		$group = $numpages;
	}
	
	
	$crit->addAscendingOrderByColumn(UserPeer::EMAIL );
	
	$crit->setOffset(($group-1)*$limit);
	$crit->setLimit($limit);
	
	$AdGroupsAll = AdGroupPeer::doSelect($crit);
	
	$queued_limit = 0;
}

$AdGroupsNeedPixel = AdGroupPeer::getGroupsNeedingPixel($queued_limit);
$AdGroupsNeedProcessing = AdGroupPeer::getGroupsNeedingProcessing($queued_limit);

