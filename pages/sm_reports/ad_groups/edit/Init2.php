<?

$WorkingAdGroup = AdGroupPeer::retrieveByPK($_GET['id']);

if($WorkingAdGroup === null) {
	$urlLocation = sprintf("/%s.htm?rand=%d&bad_id", str_replace('/', '-', PAGE_PARENT_C), rand(100000, 999999));
	header('Location: '. $urlLocation);
	exit;
}

// init2
//$_GET['id'];
//$_GET['back_page'];
//$_GET['approve'] = (int)AdMedia Id;
//$_GET['type'] = 'text':'banner'

if ($_GET['approve']) {
	switch ($_GET['type']) {
		case 'text':
			$approveAdMedia = AdMediaTextPeer::retrieveByPK($_GET['approve']);
			break;
			
		case 'banner':
			$approveAdMedia = AdMediaBannerPeer::retrieveByPK($_GET['approve']);
			break;
	
		default:
			break;
	}
	if($approveAdMedia && $approveAdMedia->getIsProcessed() != 1) {
		$approveAdMedia->setProcessingDone();
		$approveAdMedia->save();
	}
}

if($_GET['show_all'] == '1') {

	$AdMediaTexts = $WorkingAdGroup->getAdMediaTexts();
	$AdMediaBanners = $WorkingAdGroup->getAdMediaBannersJoinMediaType();

} else {
	
	$AdMediaTexts = $WorkingAdGroup->getAdMediaTextsNeedProcessing();
	$AdMediaBanners = $WorkingAdGroup->getAdMediaBannersNeedProcessingJoinMediaType();
	
}

if( ! count($AdMediaBanners) && ! count($AdMediaTexts)) {
	if ($WorkingAdGroup->getIsProcessed() != 1) {
		$WorkingAdGroup->setProcessingDone();
		$WorkingAdGroup->save();
	}
	$urlLocation = sprintf("/%s.htm?rand=%d&queue_empty=1&show_all=%d", str_replace('/', '-', PAGE_PARENT_C), rand(100000, 999999), $_GET['show_all']);
	header('Location: '. $urlLocation);
	exit;
}

