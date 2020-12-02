<?php 

include_once 'komideals/User.php';
include_once 'komideals/EmailLead.php';
echo date("Y-m-d H:i:s");

function getEmailMessage($strEmail) {
	global $objSession;
	/* @var $objSession UserSession */
	
	$strEmail = trim($strEmail);
	if (!strlen($strEmail)) {
		return 'alert("Please enter your email.");';
	}
	$bEmailStatus = UserPeer::validateEmailByRegex($strEmail);
	if (!$bEmailStatus) {
		return 'alert("Please enter a valid email.");';
	}
	$objSession->SetSessionVar('global_email', $_GET['data']);
	$objEmailLead = EmailLeadQuery::create()->findOneByEmail($strEmail);
	if (!$objEmailLead instanceof EmailLead) {
		$objEmailLead = new EmailLead();
		$objEmailLead->setEmail($strEmail);
		$objEmailLead->setZipcode($objSession->GetValue('global_zip'));
		$objEmailLead->save();
	}
	
	return 'window.parent.submitThisForm();';
}
function saveEmailZip($strEmail, $strPostalCode, $strIp=NULL) {
	global $objSession;
	/* @var $objSession UserSession */
	
	$strEmail = trim($strEmail);
	$strPostalCode = trim($strPostalCode);
	if ($strIp) {
		$strIp = trim($strIp);
	}
	
	if (!strlen($strEmail)) {
		return FALSE;
	}
	if (strlen($strPostalCode)) {
		$objSession->SetSessionVar('global_zip', $strPostalCode);
	}
	$bEmailStatus = UserPeer::validateEmailByRegex($strEmail);
	if (!$bEmailStatus) {
		return FALSE;
	}
	$objSession->SetSessionVar('global_email', $strEmail);
	$objEmailLead = EmailLeadQuery::create()->findOneByEmail($strEmail);
	if (!$objEmailLead instanceof EmailLead) {
		$objEmailLead = new EmailLead();
		$objEmailLead->setEmail($strEmail);
		$objEmailLead->setZipcode($strPostalCode);
		
		$objEmailLead->save();
		if ($strIp && strlen($strIp)) {
			$objEmailLead->setRemoteAddr($strIp);
			$objEmailLead->save();
		}
	}
	return TRUE;
	
}

if ($_GET['elmid'] == 'blog_data') {
	// emlid=blog_data&email_address=joe%40joe.com&postal_code=90210
	// emlid=blog_data&email_address=joe%40joe3.com&postal_code=90210
	saveEmailZip($_GET['email_address'], $_GET['postal_code'], $_GET['ip']);
}

if (strlen(trim($_GET['data'])) && $_GET['elmid'] == 'save_zip') {
	$objSession->SetSessionVar('global_zip', trim($_GET['data']));
}


if ($_GET['elmid'] == 'save_email') {
	$strMessage = getEmailMessage($_GET['data']);
	echo "<script language='JavaScript'>
	$strMessage
	</script>";
}

