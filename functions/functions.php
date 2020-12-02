<?PHP

global $functionsdir;

// autoloads classes when using: $obj = new ClassName();
//if(!function_exists("__autoload")) {
//	function __autoload($class_name) {
//	   require_once $class_name . '.php';
//	}
//}

// autoload all php files in the autoload directory
$autoloaddir = $functionsdir . '/autoload/';
if (is_dir($autoloaddir)) {
	$dh = opendir($autoloaddir);
	if ($dh) {
		while (($file = readdir($dh)) !== false) {
			if (is_file($autoloaddir . $file) && substr($file, -4, 4) == '.php') {
				include_once $autoloaddir . $file;
			}
		}
		closedir($dh);
	}
}

if(!function_exists("cache_flush_custom")) {
	function cache_flush_custom($days=30) {
		$arrFiles = array();
		
		$cacheFilesCmd = sprintf("find %s -type f", CACHE_PATH_C);
//		$cacheFilesCmd = sprintf("find %s -ctime %d -type f", CACHE_PATH_C, $days);
		$cacheFilesRaw = `$cacheFilesCmd`;
		
		$cacheFilesArr = explode("\n", $cacheFilesRaw);
		
		foreach ($cacheFilesArr as $file) {
			if (!is_file($file)) {
				continue;
			}
		
			$data_raw = file_get_contents($file);
			$filectime = filemtime($file);
			$oldestmtime = time()-($days*86400);
		
			$status = TRUE;
			$data = unserialize($data_raw);
			
			// has expired
			if ($data['ttl'] != 0 && $data['ttl'] < time()) {
				$status = FALSE;
			}
			
			// older than max age
			if ($oldestmtime > $filectime) {
				$status = FALSE;
			}
			
			if (!$status) {
				unlink($file);
//				printf("%s \n<br>", date("Y-m-d H:i:s", $filectime));
				$arrFiles[] = $file;
				
			}
		}
		return $arrFiles;
	}
}

if(!function_exists("cache_store_custom")) {
	function cache_store_custom($cacheKey, $cacheValue, $ttl=0) {
		
		$data = array();
		$data['value'] = $cacheValue;
		$data['ttl'] = 0;
		if ($ttl > 0) {
			$data['ttl'] = time() + $ttl;
		}
		$data_raw = serialize($data);
		
		// start file caching mod
		$md5key = md5($cacheKey);
		$cache_directory = sprintf("%s%s/%s/%s/%s", CACHE_PATH_C, $md5key{0}, $md5key{1}, $md5key{2}, $md5key{3});
		$cache_file = $cache_directory.'/'.$md5key;
		if(!is_dir($cache_directory)) {
			mkdir($cache_directory, 0755, true);
		}
		return file_put_contents($cache_file, $data_raw);
		// end file cachine mod
		
//		return @apc_store($cacheKey, $data_raw, $ttl);
	}
}

if(!function_exists("cache_fetch_custom")) {
	function cache_fetch_custom($cacheKey, &$status=NULL) {
		
//		$data_raw = apc_fetch($cacheKey, $status);

		// start file caching mod
		$md5key = md5($cacheKey);
		$cache_directory = sprintf("%s%s/%s/%s/%s", CACHE_PATH_C, $md5key{0}, $md5key{1}, $md5key{2}, $md5key{3});
		$cache_file = $cache_directory.'/'.$md5key;
		$status = TRUE;
		if (!is_file($cache_file)) {
			$status = FALSE;
		} else {
			$data_raw = file_get_contents($cache_file);
		}
		// end file caching mod
		
		$data = array();
		if ($status) {
			$data = unserialize($data_raw);
			if ($data['ttl'] != 0 && $data['ttl'] < time()) {
				$status = FALSE;
			}
		}
		if (is_array($data) && array_key_exists('value', $data)) {
			return $data['value'];
		} else {
			return $data_raw;
		}
	}
}

if(!function_exists("get_deal_data")) {
	/**
	 * function to fetch deal info
	 * @param string $url
	 * @return mixed, Array of deal info, or False on error.
	 * @global $dealnumber the deal number you are working on. used for logging
	 * @global $arrDoneDeals used to keep track of retrieved deals to prevent work duplication
	 */
	function get_deal_data ($url) {
		global $dealnumber;
		global $arrDoneDeals;
		
		$baseUrl = 'http://ec2-50-18-127-66.us-west-1.compute.amazonaws.com/api.php?url=';
		
		if ($arrDoneDeals[$url] == $url) {
			
			$check1Start = CheckPointTime('get_deal_data start ' . $url);
			// touch file
			$contents = file_get_contents($baseUrl.urlencode($url));
		
			$check1End = CheckPointTime('get_deal_data end ' . $url);
			write_app_log("SKIPPING deal page (already done this request). ".$url."\n");
			write_app_log($check1End-$check1Start . ' get_deal_data touch ' . $url . "\n");
			
			return false;
		}
		
		$check2Start = CheckPointTime('get_deal_data start ' . $url);
		$contents = file_get_contents($baseUrl.urlencode($url));
		
		$check2End = CheckPointTime('get_deal_data end ' . $url);
		write_app_log($check2End-$check2Start . ' get_deal_data ' . $url . "\n");
		
		$data = unserialize($contents);
		
		if ($data == 'queued' || $data == 'locked') {
			// allow retrieving later, don't set arrDoneDeals
			write_app_log("SKIPPING deal page: $data $url \n");
			return false;
		}
		
		$arrDoneDeals[$url] = $url;
		$dealnumber++;
		
		if (is_array($data)) {
			
			// site(s) temporarily down
			if (FALSE !== array_search('dailycouponds.com', $data['deal']['post_to_blogs']))
				unset($data['deal']['post_to_blogs'][array_search('dailycouponds.com', $data['deal']['post_to_blogs'])]);
				
			if (FALSE !== array_search('koreamdeals.com', $data['deal']['post_to_blogs']))
				unset($data['deal']['post_to_blogs'][array_search('koreamdeals.com', $data['deal']['post_to_blogs'])]);
				
			if (FALSE !== array_search('komidaily.com', $data['deal']['post_to_blogs']))
				unset($data['deal']['post_to_blogs'][array_search('komidaily.com', $data['deal']['post_to_blogs'])]);
				
			if (FALSE !== array_search('komideals.com', $data['deal']['post_to_blogs']))
				unset($data['deal']['post_to_blogs'][array_search('komideals.com', $data['deal']['post_to_blogs'])]);
				
			if (FALSE !== array_search('deals2inbox.com', $data['deal']['post_to_blogs']))
				unset($data['deal']['post_to_blogs'][array_search('deals2inbox.com', $data['deal']['post_to_blogs'])]);
			
			return $data;
		}
		return false;
	}
}
if(!function_exists("dec2any")) {
	function dec2any( $num, $base=62, $index=false ) {
	    if (! $base ) {
	        $base = strlen( $index );
	    } else if (! $index ) {
	        $index = substr( "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ" ,0 ,$base );
	    }
	    $out = "";
	    for ( $t = floor( log10( $num ) / log10( $base ) ); $t >= 0; $t-- ) {
	        $a = floor( $num / pow( $base, $t ) );
	        $out = $out . substr( $index, $a, 1 );
	        $num = $num - ( $a * pow( $base, $t ) );
	    }
	    return $out;
	}
}
if(!function_exists("any2dec")) {
	function any2dec( $num, $base=62, $index=false ) {
	    if (! $base ) {
	        $base = strlen( $index );
	    } else if (! $index ) {
	        $index = substr( "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 0, $base );
	    }
	    $out = 0;
	    $len = strlen( $num ) - 1;
	    for ( $t = 0; $t <= $len; $t++ ) {
	        $out = $out + strpos( $index, substr( $num, $t, 1 ) ) * pow( $base, $len - $t );
	    }
	    return $out;
	}
}

if(!function_exists("format_slug")) {
	function format_slug($slug) {
		$slug = strtolower(eregi_replace("[^0-9a-zA-Z]", "-", $slug));
		$slug = preg_replace('|-+|', '-', $slug);
		$slug = trim($slug, '-');
		
		return $slug;
	}
}

if(!function_exists("site_include")) {
	function site_include($file=NULL) {
		global $functionsdir;
		global $includesdir;
		global $arrCMSIncludesDir;
	
		$wanted  = $includesdir . 'sites/' . $file;
		
		foreach ($arrCMSIncludesDir as $strHostPart => $strDir) {
			if (str_replace($strHostPart, '', strtolower($_SERVER['HTTP_HOST'])) != strtolower($_SERVER['HTTP_HOST'])) {
				$wanted  = $includesdir . 'sites/' . $strDir . $file;
			}
		}
		$default = $includesdir . $file;
		
		if(is_file($wanted)) {
			include_once($wanted);
			return TRUE;
		}
		
		if(is_file($default)) {
			include_once($default);
			return TRUE;
		}
		
		return FALSE;
	}
}

if(!function_exists("breadcrumbs")) {
	function breadcrumbs() {
		$retArr = array();
		$thisArr = array();
		
		$pageArr = explode('/', PAGE_C);
		
		$retArr[] = "<a class=\"breadcrumb\" href=\"/index.htm\" title=\"Go to Index\">Index</a>";
		
		foreach ($pageArr as $page) {
			$thisArr[] = $page;
			$formattedPage = ucwords(str_replace('_', ' ', $page));
			$retArr[] = sprintf("<a class=\"breadcrumb\" href=\"/%s.htm\" title=\"Go to %s\">%s</a>", implode('-', $thisArr), $formattedPage, $formattedPage);
		}
		
		$retString = sprintf("<span class=\"breadcrumb\">%s</span>", implode('&nbsp;&gt;&gt;&nbsp;', $retArr));
		return $retString;
	}
}
	
if(!function_exists("html_tabs")) {
	function html_tabs($tabs) {
		$string = '';
//		$tabs['name]=>array( is_active, is_caution, href, icon );
		
		$string .= "\n<div id=\"topmenucontainer\">\n";
		$string .= "<ul id=\"topmenu\">\n";
		
		foreach ($tabs as $name => $array) {
//			<li>...</li>

//			<a class="tabactive" href="[href]">[name]</a>
//			<span class="tab">[name]</span>
//			<a class="tab" href="[href]">[name]</a>
//			<span class="tabcaution">[name]</span>
//			<a class="tabcaution" href="[href]">[name]</a>
//			
//			<img class="icon" src="icon" width="16" height="16" alt="[name]" />

			$class = 'tab';
			if($array['is_active']) $class = 'tabactive';
			if($array['is_caution']) $class = 'tabcaution';
			
			$type = 'span';
			$href = '';
			$icon = '';
			
			if(strlen($array['href'])) {
				$type = 'a';
				$href = sprintf(" href=\"%s\" ", $array['href']);
			}
			if(strlen($array['icon'])) {
				$icon = sprintf("<img class=\"icon\" src=\"%s\" width=\"16\" height=\"16\" alt=\"%s\" />", $array['icon'], htmlspecialchars($name));
			}

			$string .= sprintf("<li><%s class=\"%s\"%s>%s%s</%s></li>\n", $type, $class, $href, $icon, htmlspecialchars($name), $type);
		}

		$string .= "</ul>\n";
		$string .= "<div class=\"clearfloat\"></div></div>\n";

		return $string;
	}
}

if(!function_exists("tabs_get_started")) {
	function tabs_get_started($page) {
//		$tabs['name]=>array( is_active, is_caution, href, icon );

//		1. Register
//		2. Add Payment Method
//		3. Create Ads
//		4. Review Account
//		5. Sign Up

		$array = array();
		$pages = array();
		$txt = array();
		
		$txt[1] = '1. Register';
//		$txt[2] = '2. Add Credit Card';
		$txt[2] = '2. Billing Options';
//		$txt[2] = '2. Payment Method';
		$txt[3] = '3. Create Text Ads';
		$txt[4] = '4. Upload Banners';
		$txt[5] = '5. Review Account';
		$txt[6] = '6. You\'re Done';
		
		$pages['get_started'] = $txt[1];
		$pages['get_started/info'] = $txt[2];
		$pages['get_started/create_ad_text'] = $txt[3];
		$pages['get_started/create_ad_banner'] = $txt[4];
		$pages['get_started/review'] = $txt[5];
		$pages['get_started/final'] = $txt[6];
		
		$array[$txt[1]] = array('is_active'=>($pages[$page] == $txt[1]), 'is_caution'=>false, 'href'=>'', 'icon'=>'/images/img/b_usradd.png');
		$array[$txt[2]] = array('is_active'=>($pages[$page] == $txt[2]), 'is_caution'=>false, 'href'=>'', 'icon'=>'/images/img/s_passwd.png');
		$array[$txt[3]] = array('is_active'=>($pages[$page] == $txt[3]), 'is_caution'=>false, 'href'=>'', 'icon'=>'/images/img/s_process.png');
		$array[$txt[4]] = array('is_active'=>($pages[$page] == $txt[4]), 'is_caution'=>false, 'href'=>'', 'icon'=>'/images/img/s_process.png');
		$array[$txt[5]] = array('is_active'=>($pages[$page] == $txt[5]), 'is_caution'=>false, 'href'=>'', 'icon'=>'/images/img/b_view.png');
		$array[$txt[6]] = array('is_active'=>($pages[$page] == $txt[6]), 'is_caution'=>false, 'href'=>'', 'icon'=>'/images/img/b_usrcheck.png');
		
//		vdump($array);
		
		return html_tabs($array);
		
	}
}

if(!function_exists("tabs_select_main")) {
	function tabs_select_main($page) {
//		$tabs['name]=>array( is_active, is_caution, href, icon );

		$array = array();
		$pages = array();
		$txt = array();
		
		// only get 2
		$arrPages = explode('/', $page);
		$thisPage = $arrPages[0];
		if(count($arrPages)> 1) $thisPage .= '/' . $arrPages[1];
		
		$txt[1] = ' Control Panel ';
		$txt[2] = ' Account Settings ';
		$txt[3] = ' Billing & Accounting ';
		$txt[4] = ' Affiliate Stats ';
//		$txt[4] = ' Ad Groups & Banners ';
		$txt[5] = ' Download Plugins & Widgets ';
		
		$pages['select'] = $txt[1];
		$pages['select/account'] = $txt[2];
		$pages['select/accounting'] = $txt[3];
		$pages['select/stats'] = $txt[4];
//		$pages['select/group'] = $txt[4];
		$pages['select/download'] = $txt[5];
		
		$array[$txt[1]] = array('is_active'=>($pages[$page] == $txt[1]), 'is_caution'=>false, 'href'=>'/select.htm', 'icon'=>'/images/img/b_home.png');
		$array[$txt[2]] = array('is_active'=>($pages[$page] == $txt[2]), 'is_caution'=>false, 'href'=>'/select-account.htm', 'icon'=>'/images/img/b_usrcheck.png');
		$array[$txt[3]] = array('is_active'=>($pages[$page] == $txt[3]), 'is_caution'=>false, 'href'=>'/select-accounting.htm', 'icon'=>'/images/img/s_passwd.png');
		$array[$txt[4]] = array('is_active'=>($pages[$page] == $txt[4]), 'is_caution'=>false, 'href'=>'/select-stats.htm', 'icon'=>'/images/img/s_process.png');
//		$array[$txt[4]] = array('is_active'=>($pages[$page] == $txt[4]), 'is_caution'=>false, 'href'=>'/select-group.htm', 'icon'=>'/images/img/s_process.png');
		$array[$txt[5]] = array('is_active'=>($pages[$page] == $txt[5]), 'is_caution'=>false, 'href'=>'/select-download.htm', 'icon'=>'/images/img/b_save.png');
		
//		vdump($array);
		
		return html_tabs($array);
		
	}
}

if(!function_exists("clean_for_insert")) {
	function clean_for_insert($string, $maxlen) {
		$string = substr($string, 0, $maxlen);
		$string = mysql_escape_string($string);
		
		return $string;
	}
}

if(!function_exists("sm_include")) {
	function sm_include($part) {
		global $includesdir;
		global $page;
		
		$wanted  = sprintf("%sblocks/%s/%s_%s.php", $includesdir, $page, $part, strtolower($_SERVER['HTTP_HOST']));
		$default = sprintf("%sblocks/%s/%s_%s.php", $includesdir, $page, $part, 'default');
		
		if(is_file($wanted)) {
			include_once($wanted);
			return true;
		}
		
		if(is_file($default)) {
			include_once($default);
			return true;
		}
		
		return false;
	}
}

if(!function_exists("hex2bin")) {
	function hex2bin($data) {

		$len = strlen($data);
		for($i=0;$i<$len;$i+=2) {
			$newdata .= pack("C",hexdec(substr($data,$i,2)));
		}
		return $newdata;
	}
}

/*
function hex2bin($data) {
	$len = strlen($data);
	return pack("H" . $len, $data);
}
*/

if(!function_exists("getmicrotime")) {
	function getmicrotime(){
		$mtime = microtime();
		$mtime = explode(" ",$mtime);
		$mtime = $mtime[1] + $mtime[0];
		return ($mtime);
	}
}

if(!function_exists("strip_noisewords")) {
	function strip_noisewords($data) {

		$noisewords = array(

				" a ",
				" be ",
				" of ",
				" very ",
				" about ",
				" because ",
				" or ",
				" was ",
				" all ",
				" but ",
				" so ",
				" were ",
				" also ",
				" by ",
				" than ",
				" although ",
				" for ",
				" that ",
				" an ",
				" here ",
				" the ",
				" and ",
				" if ",
				" then ",
				" another ",
				" in ",
				" there ",
				" any ",
				" into ",
				" this ",
				" are ",
				" is ",
				" as ",
				" it ",
				" to ",
				" at ",
				" its ",
				" too ",
				" though ",
				"\\. ",
				", ",
				" s "

				);

		$chr13 = sprintf("%c", 13);

		$data = ereg_replace("\n"," ",$data);
		$data = ereg_replace("\""," ",$data);
		$data = ereg_replace("'"," ",$data);
		$data = ereg_replace($chr13," ",$data);
		$data = strip_tags($data);
		$data = strtolower($data);
		$data = ereg_replace("!"," ",$data);
		$data = ereg_replace("\\?"," ",$data);
		$data = ereg_replace(";"," ",$data);
		$data = ereg_replace("\\*"," ",$data);
		$data = ereg_replace("([\\(\\)])"," ",$data);
		$data = ereg_replace("\\["," ",$data);
		$data = ereg_replace("\\]"," ",$data);

		$in = 0;
		$total = count($noisewords);

		while($in < $total) {
			$data = ereg_replace($noisewords[$in],"  ",$data);
			$in++;
		}

		while(ereg("  ",$data)) {
			$data = ereg_replace("  "," ",$data);
		}
		$data = trim($data);

		return $data;
	}
}

// ==================================================
// prints page links
// ==================================================
if(!function_exists("PageLinks")) {
	/**
	 * Outputs links for pagination

	 * @param integer $page
	 * @param integer $numpages
	 * @param string $link
	 * 
	 * @return nothing
	 */
	function PageLinks( $page = 1, $numpages = 1, $link = "/" )
	{
		// --------------------------------------------------
		// def vals
		// --------------------------------------------------
		$nPageNum    = intval( $page );
		$nTotalPages = intval( $numpages );
		$strLink     = $link;
	
		// --------------------------------------------------
		// def group string for link
		// --------------------------------------------------
		if( ereg( "\\?[a-zA-Z0-9]", $strLink ) )
			$strGroup = "&group=";
		elseif( ereg( "\\?$", $strLink ) )
			$strGroup = "group=";
		else
			$strGroup = "?group=";
	
		// --------------------------------------------------
		// links before current page
		// --------------------------------------------------
		if( $nPageNum > 1 )
		{
			printf( '<a href="%s%s%s">previous&nbsp;page</a> &nbsp;', $strLink, $strGroup, $nPageNum - 1 );
		
			for( $i = 1; $i < $nPageNum; $i++ )
			{
				if( $i >= $nPageNum - 5 )
					printf( '<a href="%s%s%s">%s</a> ', $strLink, $strGroup, $i, $i );
				elseif( $i == 1 )
					printf( '<a href="%s%s%s">%s</a> ', $strLink, $strGroup, $i, $i );
				elseif( intval( $i / 10 ) == $i / 10 )
					printf( '<a href="%s%s%s">%s</a> ', $strLink, $strGroup, $i, $i );
			}
		}
	
		// --------------------------------------------------
		// echo this page number
		// --------------------------------------------------
		if ($nPageNum > 0) {
			printf( "<b>%s</b> ", $nPageNum );
		}
	
		// --------------------------------------------------
		// links after current page
		// --------------------------------------------------
		if( $nPageNum < $nTotalPages )
		{
			for( $i = $nPageNum + 1; $i <= $nTotalPages; $i++ )
			{
				if( $i <= $nPageNum + 5 )
					printf( '<a href="%s%s%s">%s</a> ', $strLink, $strGroup, $i, $i );
				elseif( intval( $i / 10 ) == $i / 10 )
					printf( '<a href="%s%s%s">%s</a> ', $strLink, $strGroup, $i, $i );
				elseif( $i == $nTotalPages )
					printf( '<a href="%s%s%s">%s</a> ', $strLink, $strGroup, $i, $i );
			}
		
			printf( ' <a href="%s%s%s">next&nbsp;page</a> &nbsp;', $strLink, $strGroup, $nPageNum + 1 );
		}
	}
}

if(!function_exists("escapemssql")) {
	function escapemssql($data) {
		$data = str_replace("'","''",stripslashes(trim($data)));
		return $data;
	}
}

if(!function_exists("CheckPointTime")) {
	function CheckPointTime($message = 'no message sent to function') {
	global $starttime, $siteInformation;

		if(!$starttime) {
			$starttime = getmicrotime();
			$message .= ' ... starttime set.';
		}
		
		$thisTime = abs(getmicrotime() - $starttime)*1000;
			
		$siteInformation[] = sprintf("CheckPointTime: %.0f ms: %s", $thisTime, $message);
		
		return $thisTime;
	}
}

if(!function_exists("JS_alert")) {
	function JS_alert($text) {
		printf("<script language=javascript>alert(\"%s\")</script>\n\n",$text);

		if (!get_cfg_var("safe_mode")) {
			set_time_limit(500);
		}

		flush();
	}
}

// this override for mktime was created to cope with the date limits on the 2.4.* kernel
// somehow it doesn't like any date less than 1970 gmt (i.e. epoch < 0)
function fix_mktime($hour, $minute, $second, $month, $day, $year) {

	if($year > 1900 && $year < 1970) {
		// needs fixing
		$diff = abs(1970 - $year); // 1960 = 10

		$time = mktime($hour, $minute, $second, $month, $day, 1970) - ($diff * 365.25 * 86400);

		return $time;

	} else {

		return mktime($hour, $minute, $second, $month, $day, $year);
	}

}


function vdump($variable) {
	
	echo "\n<pre>\n";
	var_dump($variable);
	echo "\n</pre>\n";
}

if(!function_exists("curl_process_url")) {
	function curl_process_url($url, $dMaxAge = 86400, $arrHeaders = array()) {
		
		$tmpfile = '/tmp/curl/curl_result_'.md5($url);
		$cookiefile = $tmpfile.'_cookie';
		
		// use cache file if available... and isn't expired
		if (is_file($tmpfile) && is_readable($tmpfile) && filemtime($tmpfile) > time()-$dMaxAge) {
			$info = unserialize(file_get_contents($tmpfile));
			$info['cache_timestamp'] = date("Y-m-d H:i:s", filemtime($tmpfile));
			$info['is_cached'] = true;
			
		} else {
		
			$ch = curl_init();
			
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//			curl_setopt($ch, CURLOPT_HEADER, 1);
			
			curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
			curl_setopt ($ch, CURLOPT_MAXREDIRS, 10);
			curl_setopt ($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
			curl_setopt ($ch, CURLOPT_REFERER, $url);

			curl_setopt ($ch, CURLOPT_COOKIEJAR, $cookiefile);
			curl_setopt ($ch, CURLOPT_COOKIEFILE, $cookiefile);
			
			if (is_array($arrHeaders) && count($arrHeaders)) {
				curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeaders);
			}
		
			$result = curl_exec ($ch);
			$info = curl_getinfo($ch);
			
			curl_close ($ch);
			
			$info['result'] = $result;
			
			file_put_contents($tmpfile, serialize($info));
			$info['cache_timestamp'] = date("Y-m-d H:i:s");
			$info['is_cached'] = FALSE;
		}
		
		return $info;
	}
}

function google_geocode($strAddress) {
//	http://maps.googleapis.com/maps/api/geocode/json?address=1600+Amphitheatre+Parkway,+Mountain+View,+CA&sensor=false

	$url = 'http://maps.googleapis.com/maps/api/geocode/json?address='.urlencode($strAddress).'&sensor=false';
	$info = curl_process_url($url);
	$result = json_decode($info['result']);
	$result = $result->results[0];
	
	return $result;
}

if(!function_exists("get_file_xml")) {
	function get_file_xml($first = null) {
		$kanoodle_url = 'http://context1.kanoodle.com/cgi-bin/context.cgi?id=85510696&db=context&first='. (int)$first .'&cgroup='. urlencode($_GET['cgroup']) .'&searchip='. $_SERVER['REMOTE_ADDR'] . '&query=' . urlencode('general network:premium') . '&numresults=5';
	//	$file = @file_get_contents('context_test.xml');
	//	$file = @file_get_contents($kanoodle_url);
	
		$ch = curl_init();
		curl_setopt ($ch, CURLOPT_URL, $kanoodle_url);
		curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt ($ch, CURLOPT_MAXREDIRS, 10);
	//	curl_setopt ($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.12) Gecko/20050915 Firefox/1.0.7');
		curl_setopt ($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
	//	curl_setopt ($ch, CURLOPT_HEADER, true);
		
		$file = curl_exec ($ch);
		$info = curl_getinfo($ch);
		
		curl_close ($ch);
			
	//	printf("// <a href=\"%s\">%s</a>\n", $kanoodle_url, $kanoodle_url);
		
	//	$file = str_replace("><", ">\n<", $file);
		$file = str_replace("<record>", "\n<record>", $file);
		$file = str_replace("<title>", "\n<title>", $file);
		$file = str_replace("<url>", "\n<url>", $file);
		$file = str_replace("<description>", "\n<description>", $file);
		$file = str_replace("<bidprice>", "\n<bidprice>", $file);
		$file = str_replace("<clickurl>", "\n<clickurl>", $file);
		$file = str_replace("</record>", "\n</record>", $file);
		$file = str_replace("</response>", "\n</response>", $file);
	//	vdump($file);
		
		$converter = new assoc_array2xml();
		$converter->setRecordKeyName('record');
		$converter->setRecordElementNames(array('title', 'url', 'description', 'bidprice', 'clickurl'));
		
		$array = $converter->xml2array($file);
		
	//	vdump($array);
	//	exit;
		
	//	return($array[2][0]);
		return($array[2][rand(0, count($array[2])-1)]);
		
	}
}

if(!function_exists("zemanta_suggest")) {
	function zemanta_suggest($text, $dMaxAge = 86400, $bReturnEntireResult = FALSE) {
		
		
		$tmpfile = '/tmp/curl/curl_zemanta_result_'.md5($text);
		
		// use cache file if available... and isn't expired
		if (is_file($tmpfile) && is_readable($tmpfile) && filemtime($tmpfile) > time()-$dMaxAge) {
			$info = unserialize(file_get_contents($tmpfile));
			$info['cache_timestamp'] = date("Y-m-d H:i:s", filemtime($tmpfile));
			$info['is_cached'] = true;
			
		} else {
		
			$zemanta_key = 'tfdwbzeygada6vuh2uj77a3k';
			$server = 'http://api.zemanta.com/services/rest/0.0/';
			$format = 'json';
			$method = 'zemanta.suggest';
			
			/* It is easier to deal with arrays */
			$args = array(
				'method'=> $method,
				'api_key'=> $zemanta_key,
				'text'=> $text,
				'format'=> $format,
				'return_categories'=> 'dmoz',
				'articles_max_age_days'=> 14,
				'articles_limit'=> 10,
			);
			
			/* Here we build the data we want to POST to Zementa */
			$data = '';
			foreach($args as $key=>$value) {
				$data .= ($data != '')?'&':'';
				$data .= urlencode($key).'='.urlencode($value);
			}
			
			/* Initialisation of curl */
			$ch = curl_init();
			/* Setup of the url*/
			curl_setopt($ch, CURLOPT_URL, $server);
			/* We want a post request */
			curl_setopt($ch, CURLOPT_POST, 1);
			/* Here we give to curl the data we want to send to Zementa*/
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			/* We setup the response method of curl */
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			/* Execute curl and fetch the result */
			$result = curl_exec ($ch);
			$info = curl_getinfo($ch);
			/* Close curl connection */
			curl_close ($ch);
			
			/* pack result into info array */
			$info['result'] = $result;
			
			/* cache data */
			file_put_contents($tmpfile, serialize($info));
			$info['cache_timestamp'] = date("Y-m-d H:i:s");
			$info['is_cached'] = FALSE;
		}
		
		if ($bReturnEntireResult) {
			return $info;
		}
		
		$objResult = json_decode($info['result']);
		if ($objResult instanceof stdClass) {
			$objResult->cache_timestamp = $info['cache_timestamp'];
			$objResult->is_cached = $info['is_cached'];
		}
		
		return $objResult;
	}
}

if(!function_exists("suggest_keywords")) {
	function suggest_keywords($content, $bReturnEntireResult = FALSE) {
		
		// remove line breaks
		$content = str_replace("\n", ' ', $content);
		// trim leading prnewswire tags
//		$content = substr($content, strpos($content, '- ')-strlen($content));
		// remove urls
		$content = eregi_replace('http([^ ]*) ', ' ', $content);
		
		$yql = 'select * from search.termextract where context="'.addslashes($content).'"';
		$url = 'http://query.yahooapis.com/v1/public/yql?format=json&q='.urlencode($yql);

//		$url = "http://api.search.yahoo.com/ContentAnalysisService/V1/termExtraction"; defunct as of dec-2010
		$ch = curl_init();
		
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
		$result = curl_exec ($ch);
		curl_close ($ch);
		
		if ($bReturnEntireResult) {
			return $result;
		}
		
		$objResult = json_decode($result);
//		$objResult->query->results->Result[] = 'yahoo test';
		
		return $objResult->query->results->Result;
	}
}

if(!function_exists("geo_ip")) {
	function geo_ip($ip, $dMaxAge = NULL) {
		
		$data = array();
		$ip = trim($ip);
		// orig license: byvj70xvWqyS
		// alt license: PeAyF1sgrZYw
		// dealn paid license: http://geoip3.maxmind.com/f?l=hVObmD42uJkM&i=24.24.24.24
		$url = 'http://maxmind.com:8010/f?l=hVObmD42uJkM&i='.urlencode($ip);
		
		if ($dMaxAge === NULL)
			$dMaxAge = 30*86400; // cache for 30 days
		
		$info = curl_process_url($url, $dMaxAge);
		
		if ($info['http_code'] == 200) {
			// build line

//		0	# Country Code
//		1	# State/Region
//		2	# City Name
//		3	# Postal Code
//		4	# Latitude
//		5	# Longitude
//		6	# Metro Code
//		7	# Area Code

			// US,CA,Irvine,,33.692200,-117.786697,803,949,"Cox Communications","Cox Communications"
			// US,CA,Fountain Valley,92708,33.709999,-117.947800,803,714,"Road Runner","Road Runner"
			$result = trim($info['result']);
			
			// MAX_REQUESTS_PER_LICENSE is a bad response
			
			$arrResult = explode(',', $result);
			
			$data['country_code'] = $arrResult[0];
			$data['state_code'] = $arrResult[1];
			$data['city'] = $arrResult[2];
			$data['postal_code'] = $arrResult[3];
			$data['latitude'] = $arrResult[4];
			$data['longitude'] = $arrResult[5];
			$data['metro_code'] = $arrResult[6];
			$data['area_code'] = $arrResult[7];
			$data['isp'] = trim($arrResult[8], '"');
			$data['org'] = trim($arrResult[9], '"');
		} else {
			// bad result
			$data['error'] = sprintf("%s,bad data or nothing returned.", $ip);
		}
		
		return $data;
	}
}

if(!function_exists("write_app_log")) {
	function write_app_log($string) {
		global $strUniqueId;
		global $dealnumber;
		
		$filename = '/tmp/global_log';
		if(defined('LOG_FILENAME_C')) {
			$filename = LOG_FILENAME_C;
		}
		
		$fp = fopen($filename, 'a');
		
		if (!strlen($strUniqueId))
			$strUniqueId = date("H:i:s");
			
		if (!strlen($dealnumber))
			$dealnumber = 0;
		
		$output = sprintf("%s %5s %s %2s %11s %s"
			, date("Y-m-d H:i:s")
			, posix_getpid()
			, $strUniqueId
			, $dealnumber
			, number_format(memory_get_usage(), 0)
			, $string
			);
		fwrite($fp, $output);
		fclose($fp);
	}
}

