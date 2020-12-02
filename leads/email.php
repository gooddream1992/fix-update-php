<?php 

set_time_limit(6000);

define("RX_EMAIL_ADDRESS_C", "^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$");

function validateEmailByRegex($email) {
	if(!ereg(RX_EMAIL_ADDRESS_C, $email)) {
			return FALSE;
	}
	return TRUE;
}
function find_type($filename) {
	global $filetype;
	$filetype = 'csv';
	
	$fp = fopen($filename, 'r');
	
	$arr1 = fgetcsv($fp, 1024);
	
	$line = fgets($fp, 1024);
	$arr2 = split("\t", $line);
	
	// take longer array
	if (count($arr2) > count($arr1)) {
		$filetype = 'tab';
	}
	fclose($fp);
	return true;
}
function get_line($fp) {
	global $filetype;
	
	switch ($filetype) {
		case 'csv':
			$arr = fgetcsv($fp, 1024);
		break;
		
		case 'tab':
			$line = fgets($fp, 1024);
			if ($line === FALSE) {
				return false;
			}
			$arr = split("\t", $line);
		break;
		
		default:
			return false;
		break;
	}
	return $arr;
}

if (strlen($_GET['action'])) {
	rename($_GET['filename'], $_GET['action'].'/'.$_GET['filename']);
}

$d = dir(".");
$counter = 0;
$flushcounter = 0;
$arrFiles = array();
$fpemail = fopen('email/email.txt', 'a');

while (false !== ($entry = $d->read())) {
	
	if (!is_file($entry)) {
		continue;
	}
	if ('php' == substr($entry, -3, 3)) {
		continue;
	}
	$arrFiles[] = $entry;
	
}
foreach ($arrFiles as $entry) {

	find_type($entry);
	echo $filetype.'_'.$entry;
	flush();
	$fp = fopen($entry, 'r');
	$badlinecounter = 0;
	while (false !== ($arrLine = get_line($fp))) {
		if (!is_array($arrLine) || count($arrLine) < 2) {
			if ($badlinecounter++ > 1000) {
				break 1;
			};
		}
		foreach ($arrLine as $value) {
			if (validateEmailByRegex(trim($value))) {
				fwrite($fpemail, trim(trim($value), '"')."\n");
				echo '.';
				if ($flushcounter++ > 10000) {
					echo "<br>\n".$filetype.'_'.$entry;
					$flushcounter = 0;
				}
				flush();
			}
		}
	}
	fclose($fp);
	rename($entry, 'save/'.$entry);
	echo "<br>\n";
	flush();
}
$d->close();
fclose($fpemail);


