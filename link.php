<?php

// $_SERVER["REQUEST_URI"] = /test.php/http://www.google.com/?test1=something
$url = $_SERVER["REQUEST_URI"];

// $_SERVER["SCRIPT_NAME"] = /test.php
$url = str_replace($_SERVER["SCRIPT_NAME"].'/', '', $url);

if(!strlen($url)) die(time());

?>
<html><body marginheight="0" marginwidth="0">
<iframe width="100%" height="100%" src="<?=$url;?>" 
frameborder="0" marginheight="0" marginwidth="0"
hspace="0" vspace="0"
></iframe>
</body>
</html>

