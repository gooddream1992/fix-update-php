<?


// save and charge cc
try {
	
	$PaymentMethod->setFieldsFromArray($_POST);
	
	if(!$PaymentMethod->validate_method()) {
		throw new Exception('Credit Card did not validate.');
	}
	$PaymentMethod->save();
//	$PaymentMethod->setFormMessage('Payment information parsed ok.  When ready, you would normally be automatically sent to &quot;create ads&quot; page.');

	$objSession->getUser()->setFieldsFromDefaultPaymentMethod();
	$objSession->getUser()->save();

	$urlLocation = sprintf("/%s-create_ad_text.htm", str_replace('/', '-', PAGE_PARENT_C));
	header('Location: '. $urlLocation);
	exit;

} catch (Exception $e) {
	$PaymentMethod->setFormError($e->getMessage());
}
