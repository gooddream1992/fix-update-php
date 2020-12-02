<?

// get site map info:

function make_snapshot($sessiondate,$path) {
global $startdir, $siteMapPages;

//	printf("<br><font color=blue>Working dir: '%s'</font>\n", str_replace($startdir, '', $path));

	$handle=opendir($path.'/.');
	while ($file = readdir($handle)) {

		$fullfilename = $path.'/'.$file;
		$ignore = false;
		
		if(str_replace('sm_reports', '', $path) != $path && $_GET['sm_reports'] != '1') $ignore = true;
		if(str_replace('.orig', '', $path) != $path) $ignore = true;
		if(str_replace('phpinfo', '', $path) != $path) $ignore = true;
		if(str_replace('404', '', $path) != $path) $ignore = true;
		if(str_replace('get_started/', '', $path) != $path) $ignore = true;
		if(str_replace('image/view', '', $path) != $path) $ignore = true;
		if(str_replace('help/account_inactive', '', $path) != $path) $ignore = true;
		if(str_replace('data', '', $path) != $path) $ignore = true;
		if(str_replace('events/', '', $path) != $path) $ignore = true;
		
		if($file == 'defaults.php' && $ignore === false) {
			$arrFile = file($fullfilename);
			while (list($lineNum, $lineText) = each($arrFile)) {
				if(str_replace('page_title', '', $lineText) != $lineText) {
					eval($lineText);
				}
				if(str_replace('$h1', '', $lineText) != $lineText) {
					eval($lineText);
				}
			}
			$thisTitle = '';
			
			if(strlen($page_title)) $thisTitle = $page_title;
			if(strlen($h1)) $thisTitle = $h1;
			if(!strlen($thisTitle)) $thisTitle = '---------------'; //ucfirst(DOMAIN_C);
			
			$siteMapPages[str_replace($startdir . '/', '', $path)] = $thisTitle;
		}

		if(is_dir($fullfilename)) {
			$print = 0;
			if($file != '.' && $file != '..') {
				make_snapshot($sessiondate,$fullfilename);
			}
		}
		if (!get_cfg_var('safe_mode')) set_time_limit(30);
	}
	closedir($handle);
}

$siteMapPages = array();
$startdir = '/var/www/vhosts/'.$_SERVER['HTTP_HOST'].'/pages_sites/dailyfeed';
make_snapshot(time(), $startdir);

ksort($siteMapPages);




