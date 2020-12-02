<?php

//set_time_limit(3000);

define('LOG_FILENAME_C','/tmp/cj-commission');
write_app_log("starting script...\n");
$dealnumber = 0;
require_once 'komideals/DealFeedCommissionQuery.php';


//$ini = ini_set("soap.wsdl_cache_enabled","0");

$dDaysToProcess = 7;
write_app_log("  Processing Dealn.It...\n");
DealFeedCommissionPeer::processCommissionJunctionStats(COMMISSION_JUNCTION_API_KEY_C, $dDaysToProcess);
write_app_log("  Processing KomiDeals...\n");
DealFeedCommissionPeer::processCommissionJunctionStats(COMMISSION_JUNCTION_API_KEY_2_C, $dDaysToProcess);

write_app_log("script done.\n");
printf("<br>script done... %s\n", date("Y-m-d H:i:s"));

exit;

