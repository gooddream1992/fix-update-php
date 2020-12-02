<?php 

global $dLimit;
global $group;
global $collCategories;

if (count($collCategories)) {
	$arrTitles = array();
	$counter = 0;
	$loop_count = 0;
	$start_count = ($group-1) * $dLimit;
	
	foreach ($collCategories as $key => $objCategory) {
		
		if ($loop_count++ < $start_count)
			continue;
		
		if (++$counter > $dLimit)
			break 1;
		
		printf("<p><a href=\"/category/%s\">%s</a></p>\n", $objCategory->slug_part, $objCategory->taxonomy_name);
	}
	
	$strLink = str_replace('&group='.$_GET['group'], '', $_SERVER['REQUEST_URI']);
	$strLink = str_replace('?group='.$_GET['group'], '', $strLink);
	
	echo '<br><br><h2 class="title">Additional Pages:</h2><br>';
	PageLinks($group, ceil(count($collCategories)/$dLimit), $strLink);
} else {
	echo '<br>No categories found.';
}

