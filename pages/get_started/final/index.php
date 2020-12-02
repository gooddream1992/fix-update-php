<?

printf("<p>Your customer account number is: %05d-%d", $objSession->getUser()->getId(), $objSession->getUser()->getDateCreated('Ys'));

printf("<p><strong>Your affiliate ID is: %d.</strong> Your affiliate ID is needed to track your commissions and referral stats. You will need this ID number when installing the WordPress plugin.", $objSession->getUser()->getDefaultBusiness()->getId());

?>

<p>Please retain these numbers for your records.

<p>You have completed the account creation phase.  Please check your email for 
account verification instructions.  You need to verify your email account 
before you can login at <?=ucfirst(DOMAIN_C);?> to check your click and commission
statistics or to modify your account information.


	<p>Please check your email now.


