<?php

// sidebar

$arrExcludeSidebar = array();
$arrExcludeSidebar[] = 'select';
$arrExcludeSidebar[] = 'sm_reports';

if (!in_array(PAGE_ROOT_C, $arrExcludeSidebar)) {

?>

        <h2>FiveDeals<br />
          <span>Awesome Daily Deals for You</span> </h2>
<?php 

}

?>