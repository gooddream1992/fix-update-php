<?

// comment amount_per_month months

// save
try {
	/* @var $WorkingUser User */
	
	$WorkingUser->makeCCPayment($_POST['comment'], $_POST['amount_per_month'] * $_POST['months'], $_POST['months']);
	$WorkingUser->save();
		
	$arrStatus[] = 'Payment made and recorded in the database.';

} catch (Exception $e) {
	$arrErrors[] = $e->getMessage();
}



