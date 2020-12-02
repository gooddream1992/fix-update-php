<?

$dir = './replace_data/';

if(!strlen($_COOKIE['user_id_rpl'])) {
	$rand = rand(100000000, 999999999);
	$_COOKIE['user_id_rpl'] = $rand;
	setcookie( 'user_id_rpl', $rand, time()+60*60*24*30, '/');
}

//	http://174.139.1.210/test/save.php?
//	node_length=15
//	&node_value_md5=b47f09e853519aaeed34e13de139b8f8
//	&selection_value_md5=503cbf10fade2f0d34d7447fef311c7a
//	&anchor_offset=0
//	&focus_offset=7
//	&replace_with=kljh
//	&base_uri=http%3A%2F%2F174.139.1.210%2Ftest%2Fcopy.php%3Fjoele1823%3Dadsf%262d2%3Dadsf%23jklh
//	&referer=

$domain = parse_url($_GET['base_uri'], PHP_URL_HOST);
$length = $_GET['focus_offset'] - $_GET['anchor_offset'];

$contents = file_get_contents($dir . (int)$_COOKIE['user_id_rpl']);

$var = unserialize($contents);

$arrData = array();
$arrData['node_length'] = $_GET['node_length'];
$arrData['node_value_md5'] = $_GET['node_value_md5'];
$arrData['selection_value_md5'] = $_GET['selection_value_md5'];
$arrData['anchor_offset'] = $_GET['anchor_offset'];
$arrData['focus_offset'] = $_GET['focus_offset'];
$arrData['replace_with'] = $_GET['replace_with'];
$arrData['base_uri'] = $_GET['base_uri'];
$arrData['referer'] = $_GET['referer'];

$key = $arrData['node_value_md5'] . $arrData['selection_value_md5'] .'-'. $arrData['anchor_offset'] .'-'. $arrData['focus_offset'];

$var[$key] = $arrData;

file_put_contents($dir . (int)$_COOKIE['user_id_rpl'], serialize($var));

printf("<script>alert('%s %s %s');</script>\n", $domain, $length, $key);


