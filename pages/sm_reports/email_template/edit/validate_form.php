<?


if(!strlen($_POST['email_name'])) {
	$arrError['email_name'] = 'You must enter something for the Name of the email.';
}

if(!strlen($_POST['email_subject'])) {
	$arrError['email_subject'] = 'You must enter something for the Subject of the email.';
}

if(!strlen($_POST['email_body'])) {
	$arrError['email_body'] = 'You must enter something for the Body of the email.';
}

$EmailTemplate->setName($_POST['email_name']);
$EmailTemplate->setSubject($_POST['email_subject']);
$EmailTemplate->setBody($_POST['email_body']);
		
if(!count($arrError)) {
	
	try {
		
		$EmailTemplate->save();
		$arrStatus[] = 'Information Saved';
		
	} catch (Exception $e) {
		
		$arrError[] = $e->getMessage();
	}
}

