
<p>Your customer account number is: 

<?

printf("%05d-%d", $objSession->getUser()->getId(), $objSession->getUser()->getDateCreated('Ys'));

?>

<p>Please retain this number for your records.

<p>You have completed the account creation phase.  Please check your email for 
account verification instructions.  You need to verify your email account 
before you can login at <?=ucfirst(DOMAIN_C);?> to check your click and commission
statistics or to modify your account information.


<?php if (V_C == '1297') { ?>
	
	<p><a target=_blank href="/select-ad_center_link.htm"><img src="/images/ad_center/final_page_button.jpg" 
		border="0" height="148" width="260" alt="Click here to sign up for Microsoft adCenter and get $50 in free clicks.* See promotion details below."></a>
	<p>Please check your email after creating your Microsoft adCenter account.
	After your Microsoft adCenter account is created and verified, we will apply 6 free months to your account.
	
	<p><span class="regularText" style="line-height: 12px; font-weight: bold">
	*Promotional Guidelines: Offer valid only through June 30, 2007 (midnight Pacific Time), while supplies last. Promotional credit is valid only for new 
	advertisers opening a new account with Microsoft adCenter. The $50 promotional credit does not apply to the one-time, nonrefundable $5 activation 
	fee required to open a new account. Promotional credit not redeemed in click spend will expire 90 days after sign-up. Advertisers will be charged for 
	advertising that exceeds the $50 promotional credit. Advertisers will need to suspend their ads if they do not wish to receive additional charges beyond 
	the free credit amount or for clicks 90 days after sign-up, whichever occurs first. Promotional credit good only to residents in the 50 United States and 
	Washington, D.C. Limit: one promotional credit per customer. Promotional credit may not be combined with any other offer or discount, separated, 
	redeemed for cash, transferred, sold, or bartered. There is a minimum bid requirement of $0.05 per click through. Search listings are subject to editorial 
	review. See Advertiser Terms and Conditions for more details at sign-up. Other terms and conditions may apply.
	</span></p>
	
<?php } else { ?>
	<p>Please check your email now.
<?php } ?>


