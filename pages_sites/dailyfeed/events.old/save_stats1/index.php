<?

require_once 'komideals/UserPeer.php';
require_once 'komideals/AdStatPeer.php';
$loginErrors = array();
$intResultLimit = 50;

function get_stats_file(User $User) {
global $loginErrors;

	// avoid curl call if no/invalid login info
	// because w/no info, login doesn't return error
	if (strlen($User->getWilshireUsername()) < 2) {
		return false;
	}
	
	$cookie_jar = '/tmp/wilshire_cookie_jar_' . $User->getId();
	
	$post_fields = array();
	$post_fields[] = 'login=' . $User->getWilshireUsername();
	$post_fields[] = 'password=' . $User->getWilshirePassword();
	
	
	// INIT CURL
	$ch = curl_init();
	
	// SET URL FOR THE POST FORM LOGIN
	curl_setopt($ch, CURLOPT_URL, 'https://reporting.specificclick.net/Interface/admin/login.asp');
	
	// ENABLE HTTP POST
	curl_setopt ($ch, CURLOPT_POST, 1);
	
	// SET POST PARAMETERS : FORM VALUES FOR EACH FIELD
	curl_setopt ($ch, CURLOPT_POSTFIELDS, implode('&', $post_fields));
	
	// IMITATE CLASSIC BROWSER'S BEHAVIOUR : HANDLE COOKIES
	curl_setopt ($ch, CURLOPT_COOKIEJAR, $cookie_jar);
	
	# Setting CURLOPT_RETURNTRANSFER variable to 1 will force cURL
	# not to print out the results of its query.
	# Instead, it will return the results as a string return value
	# from curl_exec() instead of the usual true/false.
	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
	
	// EXECUTE 1st REQUEST (FORM LOGIN)
	$store = curl_exec ($ch);
	$info = curl_getinfo($ch);
	vdump($info);
	
	if(str_replace('Wrong login/password', '', $store) != $store) {
//		ignore this user
		$loginErrors[] = 'Login error for user id: '. $User->getId();
		return false;
	}
	
	$get_fields = array();
	$get_fields[] = 'h_panel=';
	$get_fields[] = 'h_agencyId=';
	$get_fields[] = 'h_showDays=';
	$get_fields[] = 'h_advertiserId=';
	$get_fields[] = 'h_aorderId=';
	$get_fields[] = 'h_publisherId=';
	$get_fields[] = 'h_packageId=';
	$get_fields[] = 'h_acampId=';
	$get_fields[] = 'h_creativeId=';
	$get_fields[] = 'h_pcampId=';
	$get_fields[] = 'h_locationId=';
	$get_fields[] = 'h_fromDate=';
	$get_fields[] = 'h_toDate=';
	$get_fields[] = 'h_sort=';
//	$get_fields[] = 'h_sort=-convrate';
	$get_fields[] = 'h_action=1';
	$get_fields[] = 'aorderId=';
	$get_fields[] = 'month_fm=' . date("m");
	$get_fields[] = 'day_fm=' . date("d");
	$get_fields[] = 'year_fm=' . (date("Y")-1); // start last year
	$get_fields[] = 'month_to=' . date("m");
	$get_fields[] = 'day_to=' . (date("d")-1); // end yesterday
	$get_fields[] = 'year_to=' . date("Y");
	
	// SET FILE TO DOWNLOAD
	curl_setopt($ch, CURLOPT_URL, 'https://reporting.specificclick.net/Interface/admin/reports/advertiser/ReportByDays.asp?' . implode('&', $get_fields));
	
	// bad, bad, bad... always trust certificate regardless of authenticity
	curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, false);
	
	// EXECUTE 2nd REQUEST (FILE DOWNLOAD)
	$content = curl_exec ($ch);
	$info = curl_getinfo($ch);
	
	// CLOSE CURL
	curl_close ($ch); 
	unset($ch);
	
	vdump($info);
	echo "<br>Content: ".$content; exit;
	
	return $content;
}

function clean_file($strText) {
	
	// remove comments <!-- something <td>nothing</td> -->
	// --------------------------------------------------
	$strText = preg_replace("(<!(?:--[\s\S]*?--\s*)?>)", '', $strText);
	
	// remove double tabs
	// --------------------------------------------------
	while (ereg("\t\t", $strText))
		$strText = str_replace("\t\t", "\t", $strText);
	
	// remove double spaces
	// --------------------------------------------------
	while (ereg("  ", $strText))
		$strText = str_replace("  ", " ", $strText);
	
	// remove wasted leading tabs
	// --------------------------------------------------
	while (ereg("\n\t", $strText))
		$strText = str_replace("\n\t", "\n", $strText);
	
	// remove wasted leading spaces
	// --------------------------------------------------
	while (ereg("\n ", $strText))
		$strText = str_replace("\n ", "\n", $strText);
	
	// change carriage returns/new lines to chr(10)
	// --------------------------------------------------
	while (ereg("\r\n", $strText))
		$strText = str_replace("\r\n", "\n", $strText);
	
	// remove double new lines
	// --------------------------------------------------
	while (ereg("\n\n", $strText))
		$strText = str_replace("\n\n", "\n", $strText);
		
	
	return $strText;
}

function save_stats_for_user(User $ThisUser) {
	$contents = get_stats_file($ThisUser);

	if(!$contents) {
		echo "<br>No contents...";
		return false;
	}
	$contents = clean_file($contents);
	
	$start_string = '<tr class=reportData>';
	$end_string = '<tr class=reportTotal>';
	$contents = substr($contents, strpos($contents, $start_string));
	$contents = substr($contents, 0, strpos($contents, $end_string));
	
	$contents = str_replace($start_string, '', $contents);
	$contents = str_replace('</tr>', '', $contents);
	$arr = explode("\n\n", trim($contents));
	
	$arr2 = array();
	while (list($key, $part) = each($arr)) {
		$part = strip_tags($part);
		$partArr = explode("\n", trim($part));
		
		// 9 elements
		$partArr2 = array();
		$partArr2['date'] = trim($partArr[0]);
		$partArr2['aords'] = trim($partArr[1]);
		$partArr2['acamps'] = trim($partArr[2]);
		$partArr2['creats'] = trim($partArr[3]);
		$partArr2['imps'] = trim($partArr[4]);
		$partArr2['clicks'] = trim($partArr[5]);
		$partArr2['actions'] = trim($partArr[6]);
		
		$partArr2['aords'] = ereg_replace("[^0-9]", '', $partArr2['aords']);
		$partArr2['acamps'] = ereg_replace("[^0-9]", '', $partArr2['acamps']);
		$partArr2['creats'] = ereg_replace("[^0-9]", '', $partArr2['creats']);
		$partArr2['imps'] = ereg_replace("[^0-9]", '', $partArr2['imps']);
		$partArr2['clicks'] = ereg_replace("[^0-9]", '', $partArr2['clicks']);
		$partArr2['actions'] = ereg_replace("[^0-9]", '', $partArr2['actions']);
		
	// these are extrapolated and don't need to be saved into database.
	//	$partArr2['click_rate'] = trim($partArr[7]);
	//	$partArr2['conversion_rate'] = trim($partArr[8]);
		
		$dateArr = explode('-', $partArr2['date']);
		$thisTime = mktime(0, 0, 1, $dateArr[1], $dateArr[2], $dateArr[0]);
		
		if ((int)$thisTime < 1) {
			
			echo "\n<br>skipping (bad thisTime)... " . $partArr2['date'];
			continue;
		}
		
		$crit = new Criteria();
		$crit->add(AdStatPeer::DATE_CREATED , $thisTime, Criteria::EQUAL );
		$crit->add(AdStatPeer::USER_ID , $ThisUser->getId(), Criteria::EQUAL );
		
		// only save if not existing
		if(!$existingAdStat = AdStatPeer::doSelectOne($crit)) {
			$AdStat = new AdStat();
			$AdStat->setDateCreated($thisTime);
			$AdStat->setAords($partArr2['aords']);
			$AdStat->setAcamps($partArr2['acamps']);
			$AdStat->setCreats($partArr2['creats']);
			$AdStat->setImps($partArr2['imps']);
			$AdStat->setClicks($partArr2['clicks']);
			$AdStat->setActions($partArr2['actions']);
			$AdStat->setUser($ThisUser);
			echo "\n<br>-- saving . . . " . $partArr2['date'];
//			$AdStat->save();
		} else {
			echo "\n<br>skipping (already saved)... " . $partArr2['date'];
		}
	
		$arr2[] = $partArr2;
	}
	
//	vdump($arr2);
}

$crit = new Criteria();
//$crit->add(UserPeer::DATE_STATS_PROCESSED , time()-(8*60*60), Criteria::LESS_THAN );
$crit->add(UserPeer::IS_ACTIVE , '1', Criteria::EQUAL );
$crit->add(UserPeer::WILSHIRE_PASSWORD , null, Criteria::ISNOTNULL );
$crit->add(UserPeer::WILSHIRE_USERNAME , null, Criteria::ISNOTNULL );

if ($intResultLimit > 0) {
	$crit->setLimit($intResultLimit);
	printf("\n<br>Result limit in effect (%d)... <br>", $intResultLimit);
}


$collUsers = UserPeer::doSelect($crit);
printf("\n<br>Results found (%d)... <br>", count($collUsers));

foreach ($collUsers as $ThisUser) {
	/* @var $ThisUser User */
	set_time_limit(600);
	echo "<br>saving stats for ". $ThisUser->getEmail();
	save_stats_for_user($ThisUser);
	
	$ThisUser->setDateStatsProcessed(time());
//	$ThisUser->save();
}

if(count($loginErrors)) {
	// notify somebody about login errors:
	vdump($loginErrors);
	
	$subject = "Stats processing error report";
	$strEmail = sprintf("Stats processing error report for %s:\n\n", date("Y-m-d H:i:s"));
	$strEmail .= implode("\n", $loginErrors);
	
	$toEmail = sprintf("\"%s\" <%s>", 'Joe', 'joe@'.DOMAIN_C);
	$fromEmail = sprintf("\"%s\" <NO-REPLY@%s>", ucfirst(DOMAIN_C), DOMAIN_C);
	
	$headers = sprintf("From: %s\nErrors-To: %s\nReply-To: %s", $fromEmail, $fromEmail, $fromEmail);

	@mail($toEmail, $subject, $strEmail, $headers);
}

