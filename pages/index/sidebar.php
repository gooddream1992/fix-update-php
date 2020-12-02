<?php

// sidebar

$arrExcludeSidebar = array();
$arrExcludeSidebar[] = 'select';
$arrExcludeSidebar[] = 'sm_reports';

if (!in_array(PAGE_ROOT_C, $arrExcludeSidebar)) {

?>

        <h2>Latest Affiliate Websites<br />
          <span>Become an affiliate today!</span> </h2>
        <img src="/images/dealn_it/aff_dealgrater.com.png" alt="DealGrater" width="266" height="134" />
        
        <p>DealGrater | <a href="http://dealgrater.com" target="_blank">http://dealgrater.com</a></p>

        <img src="/images/dealn_it/aff_dailycouponds.png" alt="Daily Couponds" width="266" height="134" />
        
        <p>Daily Couponds | <a href="http://dailycouponds.com" target="_blank">http://dailycouponds.com</a></p>

<?php 

}

