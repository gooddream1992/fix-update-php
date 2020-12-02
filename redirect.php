<?php
// set the error reporting level for this script
error_reporting(E_USER_ERROR | E_USER_WARNING | E_USER_NOTICE);

$Key = "SMOrigDomain=";

$QureyString= $_SERVER['QUERY_STRING'];

$Index = strpos($QureyString, $Key);

$OrigDomain = substr($QureyString, $Index + strlen($Key));
$OrigDomain = urldecode($OrigDomain);

$Parameter = substr($QureyString, 0, $Index - 1);
$Parameter = urldecode($Parameter);

$QueryArray = preg_split("/[&]/",$Parameter,-1,PREG_SPLIT_NO_EMPTY);
for ($i=0;$i<count($QueryArray);$i++) {
    $Item = $QueryArray[$i];
    $Item = trim($Item);
    if ( substr($Item,0,2) == "q=" ) {
        $OrigQuery = substr($Item,2);
        break;
    }
    else if ( substr($Item,0,2) == "p=" ) {
        $OrigQuery = substr($Item,2);
        break;
    }
}


$NewDomain = $OrigDomain;
if ( preg_match("/google/",$OrigDomain) )
    $NewDomain = "http://search.msn.com/results.aspx?q=";
else if ( preg_match("/msn/",$OrigDomain) )
    $NewDomain = "http://search.yahoo.com/search?p=";
else if ( preg_match("/live\.com/",$OrigDomain) )
    $NewDomain = "http://search.yahoo.com/search?p="; // MSN toolbar
else if ( preg_match("/yahoo/",$OrigDomain) )
    $NewDomain = "http://www.google.com/search?q=";
else if ( preg_match("/localhost/",$OrigDomain) )
    $NewDomain = "http://search.yahoo.com/search?p=";

$NewURL = "$NewDomain$OrigQuery";
header("Location: $NewURL");

?>