<?

global $getpage;

site_include( 'header.php' );
site_include( 'bodytag.php' ); 

?>

					<!-- (head) -->
					<?php site_include( 'head_html.php' ); ?>
					<!-- (content) -->
					<?php include($getpage); ?>
					<!-- (foot) -->
					<?php site_include( 'foot_html.php' ); ?>

</body>
</html>
