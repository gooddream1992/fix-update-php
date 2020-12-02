<?

// save
try {
	
	$Note = $WorkingUser->addNote($objSession->getUser(), $_POST['notes']);
	/* @var $Note UserNote */
	
	if($_POST['send_email'] == '1') {
		
		$first_name = strlen(trim($WorkingUser->getFname()))? trim($WorkingUser->getFname()): trim($WorkingUser->getEmail());
		$toEmail = sprintf("\"%s\" <%s>", $first_name, trim($WorkingUser->getEmail()));
		$fromEmail = sprintf("\"%s\" <%s>", $_POST['email_from'], $_POST['email_from']);
		$headers = sprintf("From: %s\nCC: %s\nErrors-To: %s\nReply-To: %s", $fromEmail, $fromEmail, $fromEmail, $fromEmail);
		@mail($toEmail, $WorkingUser->doReplaceFields($_POST['email_subject']), $WorkingUser->doReplaceFields($_POST['notes']), $headers);
	
		$Note->setNotes(sprintf("From: %s\nSubject: %s\n\nMessage: %s", $_POST['email_from'], $_POST['email_subject'], $_POST['notes']));
	}
	$Note->setNotes($WorkingUser->doReplaceFields($Note->getNotes()));
	$WorkingUser->save();
	
	$urlLocation = sprintf("%s?page=%s&rand=%d&good_save", $_SERVER['SCRIPT_NAME'], PAGE_PARENT_C, rand(10000000, 99999999));
	header('Location: '. ((strlen($back_page)) ? $back_page : $urlLocation));
	exit;

} catch (Exception $e) {
	JS_alert($e->getMessage());
}



