<?php 

set_time_limit(6000);
date_default_timezone_set('America/Los_Angeles');

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
$dir = "/var/www/leads/";
$d = dir($dir);
$counter = 0;
$arrFiles = array();

while (false !== ($entry = $d->read())) {
	
	$entry = $dir.$entry;
	
	if (!is_file($entry)) {
		continue;
	}
	if ('php' == substr($entry, -3, 3)) {
		continue;
	}
	find_type($entry);
	$fp = fopen($entry, 'r');
	$arrLine = get_line($fp);
	fclose($fp);
	$arrFiles[md5(serialize($arrLine))][] = $entry;
}
$d->close();

foreach ($arrFiles as $arrGroup) {

	foreach ($arrGroup as $entry) {
//		if ($counter++ > 10) {
//			continue;
//		}
		
		find_type($entry);
		
		echo "<hr><form>
		<input type=hidden name=file value=\"$entry\">
		";
		$fp = fopen($entry, 'r');
		
		// get line depending on name/delimiter
		$arrLine = get_line($fp);
		$arrLine2 = get_line($fp);
		$arrLine3 = get_line($fp);
		$arrLine4 = get_line($fp);
		
		// find email
		$strEmail = '';
		foreach ($arrLine as $strWord) {
			if (validateEmailByRegex($strWord)) {
				$strEmail = $strWord;
			}
		}
		
		// count lines of smaller files...
		$lines = 'NA';
		if (filesize($entry) < 60000000) {
			$lines = `wc -l < "$entry"`;
		}
		printf("%s <a href=%s?action=delete&filename=%s>delete</a> ", $filetype, $_SERVER['SCRIPT_NAME'], urlencode($entry));
		printf("<a href=%s?action=save&filename=%s>save</a> ", $_SERVER['SCRIPT_NAME'], urlencode($entry));
		printf("<strong>%s</strong>, <em>%s</em> <font color=red><strong>%s bytes</strong></font>, %s lines<br>\n", $entry, date("Y-m-d H:i:s", filemtime($entry)), number_format(filesize($entry)), $lines);
		
		printf("<table border=1 cellpadding=2 cellspacing=0>\n<tr>\n");
		printf("<td><input type=radio name=\"radio_%s\" value=1></td>\n", htmlspecialchars($entry));
		foreach ($arrLine as $key => $strWord) {
			printf("<td><input type=\text\" name=t1%d value=\"\"></td>\n", $key);
		}
		printf("</tr>\n<tr>\n");
		printf("<td><input type=radio name=\"radio_%s\" value=2></td>\n", htmlspecialchars($entry));
		foreach ($arrLine as $key => $strWord) {
			printf("<td><input type=\text\" name=t2%d value=\"%s\"></td>\n", $key, htmlspecialchars($strWord));
		}
		printf("</tr>\n<tr>\n");
		printf("<td>&nbsp;</td>\n");
		foreach ($arrLine2 as $key => $strWord) {
			printf("<td>%s</td>\n", htmlspecialchars($strWord));
		}
		printf("</tr>\n<tr>\n");
		printf("<td>&nbsp;</td>\n");
		foreach ($arrLine3 as $key => $strWord) {
			printf("<td>%s</td>\n", htmlspecialchars($strWord));
		}
		printf("</tr>\n<tr>\n");
		printf("<td>&nbsp;</td>\n");
		foreach ($arrLine4 as $key => $strWord) {
			printf("<td>%s</td>\n", htmlspecialchars($strWord));
		}
		printf("</tr>\n");
		printf("</table>\n");
		printf("</form>\n");
		
		fclose($fp);
	}
	// end after first itteration
	break;
}

//var_dump($arrFiles);
