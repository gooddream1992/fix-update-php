<?

require_once 'jpgraph/jpgraph.php';
require_once 'jpgraph/jpgraph_line.php';
require_once 'jpgraph/jpgraph_date.php';

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

$strTrend = 'clicks'; // commission, sales, clicks
if (strlen($objSession->GetValue('stats_trend'))) {
	$strTrend = $objSession->GetValue('stats_trend');
}
if (array_key_exists('trend', $_GET)) {
	$strTrend = $_GET['trend'];
}

$strPeriod = 'last_days'; // this_period, last_period, last_days
if (strlen($objSession->GetValue('stats_period'))) {
	$strPeriod = $objSession->GetValue('stats_period');
}
if (array_key_exists('period', $_GET)) {
	$strPeriod = $_GET['period'];
}

$arrStats = $User->getStats($strRange, $strTrend, $strPeriod);

$data = array();
$xdata = array();
foreach ($arrStats['rows'] as $key => $obj) {
	switch ($strTrend) {
		case 'commission':
			$data[] = floatval($obj->commission_amount);
		break;
		
		default: // clicks, sales
			$data[] = $obj->cntid;
		break;
	}
	
	if ($strPeriod == 'hourly_trends') {
		$xdata[] = (int)$key;
	} else {
		$xdata[] = TimeCallback((int)$obj->date_timestamp);
	}
}
// must have default value
if (count($data) < 2) {
	$data = array_merge(array(0),$data);
	$xdata = array_merge(array(''),$xdata);
	$data[] = 0;
	$xdata[] = '';
}

//vdump($data);
//vdump($xdata);
//exit;

function TimeCallback($aVal) {
    return date("D\nM-j", $aVal);
}

// Create the new graph
$graph = new Graph(600,200);

// Slightly larger than normal margins at the bottom to have room for
// the x-axis labels
$graph->SetMargin(35,22,10,35);

// Fix the Y-scale to go between [0,100] and use date for the x-axis
if ($strPeriod == 'hourly_trends') {
	$scale = 'textlin';
} elseif (count($data) < 17) {
	$scale = 'textlin';
} else {
	$scale = 'linlin';
}
$graph->SetScale($scale);
//$graph->title->Set(sprintf("Clicks per day: Last %s Days", strtolower($strRange) == 'month'?30:7));
//$graph->title->SetFont(FF_VERDANA,FS_BOLD,12);
$graph->SetFrame(false);

/* @var $XAxis Axis */
$XAxis = $graph->xaxis;
/* @var $YAxis Axis */
$YAxis = $graph->yaxis;
/* @var $XGrid Grid */
$XGrid = $graph->xgrid;
/* @var $YGrid Grid */
$YGrid = $graph->ygrid;

// Set the angle for the labels to 90 degrees
//$graph->xaxis->SetLabelAngle(90);

$YAxis->HideZeroLabel();
//$graph->xaxis->HideZeroLabel();
$YGrid->SetFill(true,'#EFEFEF@0.7','#BBCCFF@0.8');
$XGrid->Show();

// It is possible to adjust the density for the X-axis as well
// The following call makes the dates a little more sparse
if (count($data) > 10) {
	$graph->SetTickDensity(TICKD_DENSE,TICKD_NORMAL);
} else {
	$graph->SetTickDensity(TICKD_DENSE,TICKD_VERYSPARSE);
}

$XAxis->SetTickLabels($xdata);
// The automatic format string for dates can be overridden
//$XAxis->SetLabelFormatCallback('TimeCallback');
//$XAxis->SetLabelFormat("D\nM-j");
//$graph->xaxis->scale->SetDateFormat('D');

// Adjust the start/end to a specific alignment
//$graph->xaxis->scale->SetTimeAlign(MINADJ_15);

$XAxis->SetFont(FF_VERDANA,FS_NORMAL,7);
$YAxis->SetFont(FF_VERDANA,FS_NORMAL,7);

$line = new LinePlot($data);

//$line->SetLegend('Year 2005');
//$line->SetFillColor('lightblue@0.5');
$graph->Add($line);
$graph->Stroke();


exit;
