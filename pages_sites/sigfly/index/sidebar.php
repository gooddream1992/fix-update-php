<?php

// sidebar

$arrExcludeSidebar = array();
$arrExcludeSidebar[] = 'select';
$arrExcludeSidebar[] = 'sm_reports';

if (!in_array(PAGE_ROOT_C, $arrExcludeSidebar)) {

?>

        <h2>sigfly<br />
          <span>Register today!</span> </h2>
<?php 

}

?>