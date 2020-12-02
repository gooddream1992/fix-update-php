<?

global $objSession;

// validate  get

//	company_name
//	company_url
//	email1
//	email2
//	password1
//	password2
//	referral
//	v
//	tos_agreement

$arrError = array();

if(!strlen($_POST['fname'])) {
	$arrError['fname'] = 'Please enter your first name.';
}
if(!strlen($_POST['lname'])) {
	$arrError['lname'] = 'Please enter your last name.';
}
if(!strlen($_POST['company_name'])) {
	$arrError['company_name'] = 'Please enter your company name.  Use your name if you do not have a company name.';
}
if(!strlen($_POST['company_url'])) {
	$arrError['company_url'] = 'Please enter your website URL.';
}

// no longer requiring 2nd email field
//if($_POST['email1'] !== $_POST['email2']) {
//	$arrError['email1'] = 'Email in position one does not match your second entry.';
//	$arrError['email2'] = 'Email in position two does not match your first entry.';
//}

if(!strlen($_POST['email1'])) {
	$arrError['email1'] = 'Please enter your email address in the first position.';
}
//if(!strlen($_POST['telephone'])) {
//	$arrError['telephone'] = 'Please enter your telephone number.';
//}

// no longer requiring 2nd email field
//if(!strlen($_POST['email2'])) {
//	$arrError['email2'] = 'Please enter your email address in the second position for verification.';
//}

if($_POST['password1'] !== $_POST['password2']) {
	$arrError['password1'] = 'Password in position one does not match your second entry.';
	$arrError['password2'] = 'Password in position two does not match your first entry.';
}

if(!strlen($_POST['password1'])) {
	$arrError['password1'] = 'Please enter your password in the first position.';
}

if(!strlen($_POST['password2'])) {
	$arrError['password2'] = 'Please enter your password in the second position for verification.';
}

if($_POST['tos_agreement'] !== '1') {
	$arrError['tos_agreement'] = 'You must agreee to the Terms and Conditions. Please check the box indicating that you agree to the Terms and Conditions.';
}

if(!count($arrError)) {
	
	try {
		UserPeer::checkEmail($_POST['email1']);
		
		$User = new User();
		$User->setEmail($_POST['email1']);
		$User->setPassword($_POST['password1']);
		$User->setCompanyName($_POST['company_name']);
		$User->setCompanyUrl($_POST['company_url']);
		
		$User->setFname($_POST['fname']);
		$User->setLname($_POST['lname']);
//		$User->setTelephone($_POST['telephone']);
		
		$User->setDateExpires(time()+(86400*30));
		
		if(defined('V_C')) { // from var 'v' sent in get param anywhere on site.
			$User->setReferral(V_C);
			
		} elseif(strlen($_POST['referral'])) {
			$User->setReferral($_POST['referral']);
		}
		
//		if(defined('UID_C')) { // from var 'uid' sent in get param anywhere on site.
//			$User->setReferralUid(UID_C);
//		}
		
		$User->save();
		
		// marry user to session
		$objSession->setUser($User);
		
		if($objSession->GetValue('session_email_sent-'.md5($User->getEmail())) != '1') {
			$User->sendActivationEmail();
			// save the fact that we sent an email to this user for this session
			$objSession->SetSessionVar('session_email_sent-'.md5($User->getEmail()), '1');
		}
		
		$location = sprintf("/%s-final.htm", PAGE_PARENT_C);
//		$location = sprintf("/%s-info.htm", str_replace('/', '-', PAGE_C));
		header('Location: '. $location);
		exit;
		
	} catch (Exception $e) {
		
		$arrError[] = $e->getMessage();
	}
}

