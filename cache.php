<?

$cache_root = '/mnt/data/http_cache/';

//phpinfo();
//#!/usr/bin/php
//<?

//echo "testing:\n";

// $_SERVER["REQUEST_URI"] = /test.php/http://www.google.com/?test1=something
$url = $_SERVER["REQUEST_URI"];

// $_SERVER["SCRIPT_NAME"] = /test.php
$url = str_replace($_SERVER["SCRIPT_NAME"].'/', '', $url);

if(!strlen($url)) die(time());

$md5url = md5($url);
$cache_directory = sprintf("%s%s/%s/%s/%s/%s/%s/%s/%s", $cache_root, $md5url{0}, $md5url{1}, $md5url{2}, $md5url{3}, $md5url{4}, $md5url{5}, $md5url{6}, $md5url{7});
$cache_file = $cache_directory.'/'.$md5url;

if(is_file($cache_file)) {
	$info = unserialize(file_get_contents($cache_file));
	header('Content-Type: '.$info['content_type'], true);
	echo $info['data'];
	exit;
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
//curl_setopt($ch, CURLOPT_URL, 'http://www.cafepress.com/sugarbelleshop');

curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt ($ch, CURLOPT_MAXREDIRS, 10);
curl_setopt ($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.12) Gecko/20050915 Firefox/1.0.7');
//curl_setopt ($ch, CURLOPT_HEADER, true);

$click_url_contents = curl_exec ($ch);
$info = curl_getinfo($ch);
curl_close ($ch);

$info['data'] = $click_url_contents;
$info['time'] = time();

// write file
if(!is_dir($cache_directory)) {
	mkdir($cache_directory, 0777, true);
}

file_put_contents($cache_file, serialize($info));

// send data back to user...
header('Content-Type: '.$info['content_type'], true);
echo $info['data'];
exit;


