<?php

global $objSession;

// sidebar

if (PAGE_C == 'select') {

?>

	<h2>Your Affiliate ID is <?php echo $objSession->getUser()->getDefaultBusiness()->getId(); ?></h2>
	
	<p>Keep this number handy.</p>
	
	<p>Your affiliate ID is needed to track your commissions and referral stats. 
	You will need this ID number when installing the WordPress plugin.</p>


<?php 

}

if (PAGE_C == 'select' || strpos(PAGE_C, 'stats')) {

?>

	<ul>
	  <li><a href="/select-stats-detail-clicks.htm">View click detail</a></li>
	  <li><a href="/select-stats-detail-commission.htm">View commission detail</a></li>
	</ul>

<?php 

	if (PAGE_C != 'select') {
?>

		<ul>
		  <li><a href="/select.htm">Back to stats overview</a></li>
		</ul>

<?php 
	}

}

?>