<?

/* @var $User User */
global $objSession;

$User = $objSession->getUser();

$strRange = 'week'; // week, month
if (strlen($objSession->GetValue('stats_range'))) {
	$strRange = $objSession->GetValue('stats_range');
}
if (array_key_exists('range', $_GET)) {
	$strRange = $_GET['range'];
}
$objSession->SetSessionVar('stats_range', $strRange);

$strTrend = 'clicks'; // commission, sales, clicks
if (strlen($objSession->GetValue('stats_trend'))) {
	$strTrend = $objSession->GetValue('stats_trend');
}
if (array_key_exists('trend', $_GET)) {
	$strTrend = $_GET['trend'];
}
$objSession->SetSessionVar('stats_trend', $strTrend);

$strPeriod = 'last_days'; // this_period, last_period, last_days
if (strlen($objSession->GetValue('stats_period'))) {
	$strPeriod = $objSession->GetValue('stats_period');
}
if (array_key_exists('period', $_GET)) {
	$strPeriod = $_GET['period'];
}
$objSession->SetSessionVar('stats_period', $strPeriod);



$arrCkStats['this_period'] = $User->getStats($strRange, 'clicks', 'this_period');
$arrCkStats['last_period'] = $User->getStats($strRange, 'clicks', 'last_period');
$arrCkStats['last_days'] = $User->getStats($strRange, 'clicks', 'last_days');
//$arrCkStats['hourly_trends'] = DealFeedClickQuery::getClickStatsHourlyTrends($User, $strRange);
$arrCmStats['this_period'] = $User->getStats($strRange, 'commission', 'this_period');
$arrCmStats['last_period'] = $User->getStats($strRange, 'commission', 'last_period');
$arrCmStats['last_days'] = $User->getStats($strRange, 'commission', 'last_days');
//$arrCmStats['hourly_trends'] = DealFeedCommissionQuery::getCommissionStatsHourlyTrends($User, $strRange);

//vdump($arrCmStats);
//vdump($arrCkStats);
