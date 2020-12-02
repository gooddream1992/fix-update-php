<?php 

$curlDir = '/tmp/curl/';
$arrFiles = array();
$days = 30;

$handle=opendir($curlDir);
while ($file = readdir($handle)) {
	if (!is_file($curlDir.$file)) {
		continue;
	}
	$filectime = filemtime($curlDir.$file);
	$oldestmtime = time()-($days*86400);
	
	if ($oldestmtime > $filectime) {
		unlink($curlDir.$file);
		printf("%s \n<br>", date("Y-m-d H:i:s", $filectime));
		$arrFiles[] = $file;
		
	}
}

vdump("Curl files deleted: ".count($arrFiles));

// now delete web cache files...
$arrFiles = cache_flush_custom();

vdump("Web cache files deleted: ".count($arrFiles));

