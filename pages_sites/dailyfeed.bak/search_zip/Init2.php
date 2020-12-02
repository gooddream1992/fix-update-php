<?php 

require_once 'komideals/DealFeed.php';
require_once 'komideals/Zipcode.php';

$strZipcode = '';
if ($objSession->GetValue('global_zip')) {
	$strZipcode = $objSession->GetValue('global_zip');
}
if (strlen($_GET['zipcode'])==5) {
	$strZipcode = $_GET['zipcode'];
}
if (!strlen($strZipcode)) {
	// force them to enter zip via the cute form
	header('Location: /',true);
	exit;
}

if (!strlen($objSession->GetValue('global_email'))) {
	// force them to enter their email via the cute form
	header('Location: /',true);
	exit;
}


$objZipcode = ZipcodeQuery::create()->filterByCitytype('D')->findOneByZipcode($strZipcode);

if ($objZipcode instanceof Zipcode) {
	$page_title = $objZipcode->getCity() .', '. $objZipcode->getState() .' ' .$page_title;
}

