<?


function get_url_file(User $User) {	
	
//	return file_get_contents($User->getCompanyUrl());
	// 
	
	// INIT CURL
	$ch = curl_init();
	
	// SET URL FOR THE POST FORM LOGIN
	curl_setopt($ch, CURLOPT_URL, $User->getCompanyUrl());
	
	# Setting CURLOPT_RETURNTRANSFER variable to 1 will force cURL
	# not to print out the results of its query.
	# Instead, it will return the results as a string return value
	# from curl_exec() instead of the usual true/false.
	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt ($ch, CURLOPT_MAXREDIRS, 10);
	
	// EXECUTE 1st REQUEST (FORM LOGIN)
	$store = curl_exec ($ch);
	
	// CLOSE CURL
	curl_close ($ch); 
	unset($ch);
	
	return $store;
}

$crit = new Criteria();
$crit->addAscendingOrderByColumn(UserPeer::COMPANY_URL );

$collUsers = UserPeer::doSelect($crit);

foreach ($collUsers as $testUser) {
	/* @var $testUser User */
	printf("<hr>Working on user: %d %s\n", $testUser->getId(), $testUser->getCompanyUrl());
	$contents = get_url_file($testUser);
	
	if(str_replace('specificclick', '', $contents) == $contents) {
		printf("<br><form><textarea cols=150 rows=5 wrap=\"nowrap\">%s</textarea></form>\n\n\n", htmlspecialchars($contents));
		flush();
		continue;
	}
	
	printf("<br>User: <a href=\"/sm_reports-users-notes.htm?id=%d&template_id=7\" target=_blank>email link</a>\n", $testUser->getId());
	
	if(str_replace("expiry;\nelse", '', $contents) != $contents) {
		printf(" <font color=red>found bad string (nix)</font>\n");
	}
	if(str_replace("expiry;\r\nelse", '', $contents) != $contents) {
		printf(" <font color=red>found bad string (win)</font>\n");
	}
	if(str_replace('+expiry; else', '', $contents) != $contents) {
		printf(" <font color=green>found good string</font>\n");
	}
	
	printf("<br><form><textarea cols=150 rows=50 wrap=\"nowrap\">%s</textarea></form>\n\n\n", htmlspecialchars($contents));
	flush();
	
}

