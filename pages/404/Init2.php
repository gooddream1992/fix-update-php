<?

// init2

$redirectArray = array(); // old => new

$redirectArray['/demo.html'] = '/about-demo.htm';
$redirectArray['/started.html'] = '/get_started.htm';
$redirectArray['/contact.html'] = '/about-contact_us.htm';
$redirectArray['/privacy.html'] = '/about-privacy_policy.htm';

if (strlen($redirectArray[strtolower($_SERVER['SCRIPT_URL'])])) {
//	header('HTTP/1.1 301 Moved Permanently');
	header('Location: '. $redirectArray[strtolower($_SERVER['SCRIPT_URL'])], true, 301);
	exit;	
}

