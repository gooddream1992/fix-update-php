<div align="left">
<ul>

<?

while (list($smPageName, $smPageTitle) = each($siteMapPages)) {
	printf("<li><a href=\"/%s.htm\">%s</a> &gt;&gt; %s</li>\n", str_replace('/', '-', $smPageName), $smPageName, htmlspecialchars($smPageTitle));
}


?>

</ul>
</div>