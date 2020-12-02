<?

phpinfo();
exit;
/*
Latitude: 41.883190 33.7115
Longitude: -87.627940 -117.949

SELECT 3963.191 * ACOS( (SIN(PI()*33.7115/180)*SIN(PI()*Latitude/180)) +
 (COS(PI()*33.7115/180)*cos(PI()*Latitude/180)*COS(PI()*Longitude/180-PI()*-117.949/180))) AS Distance,
 City, County, State, AreaCode, ZIPCode FROM ZIPCode 
WHERE County = 'Orange' AND CityType = 'D'

ORDER BY 3963.191 * ACOS(
 (SIN(PI()*33.7115/180)*SIN(PI()*Latitude/180)) +
 (COS(PI()*33.7115/180)*cos(PI()*Latitude/180)*COS(PI()*Longitude/180-PI()*-117.949/180))
)
limit 250
*/

 date_default_timezone_set('America/Los_Angeles');

if(strlen($_GET['data'])) {
//	$file = file_get_contents('http://www.google.com/search?q='.rand(1,999999));
//	echo $file;
	printf("
	
<script language=\"JavaScript\">
var strData;
strDataReceived = \"User reported %s at server time %s\";
window.parent.onDataReceived(strDataReceived);
</script>

	", $_GET['data'], date("Y-m-d H:i:s"));
	exit;
}

echo date("Y-m-d H:i:s");
include_once 'functions/functions.php';

//		 checking that click url has a valid host and returns something when it is requested
//		$ch = curl_init();
//		curl_setopt ($ch, CURLOPT_URL, 'domain.com/select.htm');
//		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
//		curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
//		curl_setopt ($ch, CURLOPT_MAXREDIRS, 10);
//		curl_setopt ($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.12) Gecko/20050915 Firefox/1.0.7');
//		curl_setopt ($ch, CURLOPT_HEADER, true);
//		$click_url_contents = curl_exec ($ch);
//		$info = curl_getinfo($ch);
//		curl_close ($ch);
//		
//		vdump($info['url']);
		

?>
<script language="JavaScript">
function stopError() {return true;}
window.onerror = stopError;
function sendData(strData, elmid) {
	var random = Math.floor(Math.random() * 1000000000);
	var url = "http://<?=$_SERVER['SERVER_NAME'];?><?=$_SERVER['SCRIPT_NAME'];?>?data=" + escape(strData) + random + '&rnd=' + random;
	document.getElementById(elmid).src = url;
	//alert(url);
}
function onDataReceived(strDataReceived) {
	alert("Data Received:" + strDataReceived);
}

function smCallback() {
	var random = Math.floor(Math.random() * 1000000000);
	sendData('callBack ' +random, 'dynScript1');
//	setTimeout('smCallback()', 2000);
}
//setTimeout('smCallback()', 2000);
</script>
<a href="#" onclick="sendData('Clicked1 ','dynScript');">dynScript1</a>
<a href="#" onclick="sendData('Clicked2 ','dynScript');">dynScript2</a>
<a href="#" onclick="sendData('Clicked3 ','dynScript');">dynScript3</a>
<a href="#" onclick="sendData('Clicked4 ','dynScript');">dynScript4</a>
<!--
<a href="/test.php?<?=rand(0, 9999999);?>" onclick="sendData('Clicked');">click to test</a>
<script>
setTimeout('top.location.href=\'test.php\';', 2000);
</script>
-->
<iframe frameborder="0" height="0" width="0" id="dynScript"></iframe>
