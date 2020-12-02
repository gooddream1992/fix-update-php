<?php 

global $dLimit;
global $group;
global $collDivisions;

if (count($collDivisions)) {
	$arrTitles = array();
	$counter = 0;
	$loop_count = 0;
	$start_count = ($group-1) * $dLimit;
	
	foreach ($collDivisions as $key => $objDivision) {
		
		if ($loop_count++ < $start_count)
			continue;
		
		if (++$counter > $dLimit)
			break 1;
		
		printf("<p><a href=\"/region/%s\">%s</a></p>\n", $objDivision->slug, $objDivision->division_name);
	}
	
	$strLink = str_replace('&group='.$_GET['group'], '', $_SERVER['REQUEST_URI']);
	$strLink = str_replace('?group='.$_GET['group'], '', $strLink);
	
	echo '<br><br><h2 class="title">Additional Pages:</h2><br>';
	PageLinks($group, ceil(count($collDivisions)/$dLimit), $strLink);
} else {
	echo '<br>No Regions found.';
}

