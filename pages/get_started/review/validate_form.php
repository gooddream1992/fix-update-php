<?
	
$urlLocation = sprintf("/%s-final.htm", str_replace('/', '-', PAGE_PARENT_C));
header('Location: '. $urlLocation);
exit;
	

