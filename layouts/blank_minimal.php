<?php

global $getpage;

	site_include( 'header_minimal.php' );

	// page body tag
	site_include( 'bodytag.php' );

	// current page
	include($getpage);
	
?>
</body>
</html>