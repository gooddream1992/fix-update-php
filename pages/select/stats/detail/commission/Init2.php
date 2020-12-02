<?

/* @var $User User */
global $objSession;



$collCommissions = DealFeedCommissionQuery::create()
	->filterByBusinessId($objSession->getUser()->getDefaultBusiness()->getId())
	->filterByEventDate(time()-(86400*30), Criteria::GREATER_THAN)
	->orderByEventDate(Criteria::DESC)
	->find();
	
if (array_key_exists('download', $_GET)) {
	// output clicks in csv format and exit

	header('Content-type: text/csv');
	header(sprintf('Content-disposition: attachment;filename=commission_detail_%s.csv', date("Y-m-d-H-i-s")));
	
	echo "'commission_id',";
	echo "'date',";
	echo "'type',";

	echo "'commission',";
	echo "'sale',";
	echo "'deal_title',";
	
	echo "'deal_id',";
	echo "'sub_id'\n";
	
	foreach ($collCommissions as $objCommission) {
		/* @var $objCommission DealFeedCommission */

		$strDateFormat = "Y-m-d H:i:s";
		
		// advanced sale / advanced lead
		$strActionType = $objCommission->getActionType();
		$strActionType = trim(str_replace('advanced', '', $strActionType));
		
		printf( "'%s',", $objCommission->getId());
		printf( "'%s',", $objCommission->getEventDate($strDateFormat));
		printf( "'%s',", $strActionType);
		
		printf( "'%s',", $objCommission->getCommissionAmount());
		printf( "'%s',", $objCommission->getSaleAmount());
		printf( "'%s',", $objCommission->getDealFeed()->getTitle());
		
		printf( "'%s',", $objCommission->getDealFeed()->getId());
		printf( "'%s'\n", $objCommission->getPublisherSId());

	}
	
	
	exit;
}