<div align="left"><?

printf("<a href=\"%s?page=%s&n=%d&referer\">REFERER</a> %s<br>\n\n", $_SERVER['SCRIPT_NAME'], $page, rand(1000000, 9999999), date("Y-m-d H:i:s"));

phpinfo();

?></div>