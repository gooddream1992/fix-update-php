<?php

set_time_limit(3000);

define('LOG_FILENAME_C','/tmp/domain_log');
write_app_log("starting script...\n");
$dealnumber = 0;

require_once 'komideals/Domain.php';

//$a = array();
//$a[] = 'a';
//$a[] = 'b';
//$a[] = 'c';
//$a[] = 'd';
//$a[] = 'e';
//$a[] = 'f';
//$a[] = 'g';
//$a[] = 'h';
//$a[] = 'i';
//$a[] = 'j';
//$a[] = 'k';
//$a[] = 'l';
//$a[] = 'm';
//$a[] = 'n';
//$a[] = 'o';
//$a[] = 'p';
//$a[] = 'q';
//$a[] = 'r';
//$a[] = 's';
//$a[] = 't';
//$a[] = 'u';
//$a[] = 'v';
//$a[] = 'w';
//$a[] = 'x';
//$a[] = 'y';
//$a[] = 'z';
//
//$b = $c = $d = $a;
//
$allArr = array();
//
//foreach ($a as $aval) {
//	foreach ($b as $bval) {
//		foreach ($c as $cval) {
//			foreach ($d as $dval) {
//				$allArr[] = $aval.$bval.$cval.$dval;
//			}
//		}
//	}
//}


shuffle($allArr);
$ext = 'it';

foreach ($allArr as $val) {
	$dealnumber++;
	$objDomain = DomainQuery::create()->filterByDomainName($val)->filterByDomainExtension($ext)->findOne();
	if (!$objDomain instanceof Domain) {
		$objDomain = new Domain();
		$cmdline = sprintf("whois %s.%s", $val, $ext);
		write_app_log("  whois on: ".$val."\n");
		$result = `$cmdline`;
		
		$objDomain->setDomainName($val);
		$objDomain->setDomainExtension($ext);
		$objDomain->setResult($result);
		$objDomain->save();
		write_app_log("    info saved.\n");
		
		$micro_seconds = rand(10000, 999999);
		write_app_log(" ... sleep ".$micro_seconds." ...\n");
		usleep($micro_seconds);
	}
}

printf("<br>script done... %s\n", date("Y-m-d H:i:s"));












