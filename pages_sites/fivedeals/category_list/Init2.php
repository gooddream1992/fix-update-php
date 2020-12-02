<?php 

global $objSession;

$group = 1;
if (array_key_exists('group', $_GET)) {
	$group = (int)$_GET['group'];
	if ($group == 0)
		$group = 1;
}

$dLimit = 0;
if (array_key_exists('limit', $_GET)) {
	$dLimit = (int)$_GET['limit'];
}
if (array_key_exists('limit', $_GET)) {
	$dLimit = (int)$_GET['limit'];
}
if ($dLimit == 0) {
	$dLimit = 50;
}

$collCategories = DealFeedQuery::retrieveActiveCategories('', 1000, 'name');

