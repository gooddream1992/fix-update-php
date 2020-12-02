<?php

//set_time_limit(3000);

define('LOG_FILENAME_C','/tmp/ls-commission');
write_app_log("starting script...\n");
$dealnumber = 0;


$dDaysToProcess = 7;
write_app_log("  Processing Dealn.It...\n");
DealFeedCommissionPeer::processLivingSocialStats(LIVINGSOCIAL_API_KEY_C, $dDaysToProcess);

write_app_log("script done.\n");
printf("<br>script done... %s\n", date("Y-m-d H:i:s"));

exit;

