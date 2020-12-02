<?

/* @var $User User */
global $objSession;



$collClicks = DealFeedClickQuery::create()
	->filterByBusinessId($objSession->getUser()->getDefaultBusiness()->getId())
	->filterByDateCreated(time()-(86400*30), Criteria::GREATER_THAN)
	->useUserAgentQuery()
		->filterByParent('', Criteria::NOT_EQUAL)
		->filterByCrawler('1', Criteria::NOT_EQUAL)
	->endUse()
	->orderByDateCreated(Criteria::DESC)
	->find();
	
if (array_key_exists('download', $_GET)) {
	// output clicks in csv format and exit

	header('Content-type: text/csv');
	header(sprintf('Content-disposition: attachment;filename=click_detail_%s.csv', date("Y-m-d-H-i-s")));
	
	echo "'click_id',";
	echo "'date',";
	echo "'remote_addr',";
	echo "'user_agent',";
	echo "'http_referer',";
	echo "'deal_title',";
	echo "'deal_id',";
	echo "'sub_id'\n";

	foreach ($collClicks as $objClick) {
		/* @var $objClick DealFeedClick */
	
		$strDateFormat = "Y-m-d H:i:s";
		
		printf( "'%s',", $objClick->getId());
		printf( "'%s',", $objClick->getDateCreated($strDateFormat));
		printf( "'%s',", $objClick->getRemoteAddr());
		printf( "'%s',", $objClick->getUserAgent()->getUserAgent());
		printf( "'%s',", $objClick->getHttpReferer());
		printf( "'%s',", $objClick->getDealFeed()->getTitle());
		printf( "'%s',", $objClick->getDealFeed()->getId());
		printf( "'%s'\n", $objClick->getSid());

	}
	
	
	exit;
}