<?

$dir = './replace_data/';

if(!strlen($_COOKIE['user_id_rpl'])) {
	$rand = rand(100000000, 999999999);
	$_COOKIE['user_id_rpl'] = $rand;
	setcookie( 'user_id_rpl', $rand, time()+60*60*24*30, '/');
}


//require_once './crc32.php';
require_once './md5.php';
require_once './substr.php';
require_once './var_dump.php';

// test div 1e118a8a872145df6643dd8d7d7d1379
// 1,3,est 1c52bdae8bad70e82da799843bb4e831
// substr(string, 0, position_start) = prefix
// substr(string, 1+start+length) = end

//var arr = new Array();
//arr["position"] = 1;
//arr["length"] = 3;
//arr["key"] = '';
//arr["value"] = '<font color=#ff0000>estiest</font>';

//md5(var): b16263b70248cf9445cf7501c486a8f5
//substr: fan
//md5(substr): 50bd8c21bfafa6e4e962f6a948b1ef92
//start: 12
//length: 3

$file = $dir . (int)$_COOKIE['user_id_rpl'];
//if(!is_file($file)) exit;

$contents = file_get_contents($dir . (int)$_COOKIE['user_id_rpl']);

//if(!strlen($contents)) exit;

$var = unserialize($contents);

printf("var collChanges = new Array();\n");
printf("var arrIds = new Array();\n");

foreach($var as $key => $arrData) { 

	$domain = parse_url($arrData['base_uri'], PHP_URL_HOST);
	$length = $arrData['focus_offset'] - $arrData['anchor_offset'];

//	$arrData['node_length'];
//	$arrData['node_value_md5'];
//	$arrData['selection_value_md5'];
//	$arrData['anchor_offset'];
//	$arrData['focus_offset'];
//	$arrData['replace_with'];
//	$arrData['base_uri'];
//	$arrData['referer'];

	$safe_key = str_replace('-', '', $key);

	printf("var arr%s = new Array();\n", $safe_key);
	printf("arr%s['position'] = %d;\n", $safe_key, $arrData['anchor_offset']);
	printf("arr%s['selection_length'] = %d;\n", $safe_key, $length);
	printf("arr%s['key'] = '%s';\n", $safe_key, $arrData['selection_value_md5']);
	printf("arr%s['server_key'] = '%s';\n", $safe_key, $key);
	printf("arr%s['replace_with'] = '%s';\n", $safe_key, htmlspecialchars($arrData['replace_with']));

	printf("arrIds[%d] = 1;\n", $arrData['node_length']);

	printf("if(typeof collChanges['%s'] == 'undefined') collChanges['%s'] = new Array();\n", $arrData['node_value_md5'], $arrData['node_value_md5']);

	printf("collChanges['%s'].push(arr%s);\n", $arrData['node_value_md5'], $safe_key);
}

?>

az = document.getElementsByTagName('*');
bodyseen = false;

//alert('<?=date("Y-m-d H:i:s");?> done: '+i);

for(var i=0;i<az.length;i++) {

	if(az[i].tagName == 'BODY') {
		bodyseen = true;
		continue;
	}

        if(az[i].tagName == 'SCRIPT') continue;
	if(bodyseen == false) continue;

	azstr = az[i].innerHTML;

	if(azstr.length == 0) continue;

	if(typeof arrIds[azstr.length] == 'undefined') {
		continue;
	}

	arrChanges = collChanges[MD5(azstr)];
	if(typeof arrChanges == 'undefined') {
		continue;
	}

	for(var j=0;j<arrChanges.length;j++) {

		objChanges = arrChanges[j];
		if(typeof objChanges == 'undefined') {
			continue;
		}

		// check to see if what were removing is correct
		oldstr = substr(azstr, objChanges["position"], objChanges["selection_length"]);
		if(MD5(oldstr) != objChanges["key"]) {
			continue;
		}

		// remove part, assemble first+middle+last
		prestr = substr(azstr, 0, objChanges["position"]);
		poststr = substr(azstr, objChanges["position"]+objChanges["selection_length"]);

		newstr = prestr + '<a href=http://174.139.1.210/test/delete.php?server_key='+objChanges["server_key"]+' title=\'Remove this change.\'><font color=red><strong>' + objChanges["replace_with"] + '</strong></font></a>' + poststr;

		// write new string
		az[i].innerHTML = newstr;
	}
};

//alert('<?=date("Y-m-d H:i:s");?> done: '+i);


