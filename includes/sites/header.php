<?php 

global $page_title;
global $UseLayout;
global $add_to_head;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://opengraphprotocol.org/schema/" class=''>
	<head>
	
		<title><?php if(strlen($page_title)) {echo $page_title;} else {echo $_SERVER['HTTP_HOST'];};?></title>

		<meta content="text/html; charset=utf-8" http-equiv="Content-Type"> 
		<meta content="en-us" http-equiv="Content-Language">
		<META NAME="robots" CONTENT="all">
		<META NAME="rating" CONTENT="General">
		<META NAME="category" CONTENT="Business & Economy">
		<META NAME="author" CONTENT="Dealn.it, Inc.">
		<META HTTP-EQUIV="imagetoolbar" CONTENT="no">
		<meta property="fb:page_id" content="182256118479876" />
		<?php /*
		<meta name="Description" content="Dealn.it features a daily deal on the best stuff to do, see, eat, and buy in Orange County and a variety of other cities across the United States.">
		*/ ?>
		<script SRC="/includes/js/local_scripts.js" language="JavaScript"></script>
		<script SRC="/includes/js/jquery-1.4.2.min.js" language="JavaScript"></script>
		<script SRC="/includes/js/jquery-ui-1.8.5.custom.min.js" language="JavaScript"></script>
		<script SRC="/includes/js/jquery.corner.js" language="JavaScript"></script>
		
		<link href="/includes/css/dealn_it/style.css" rel="stylesheet" type="text/css" />
		<?php  /*
		<!-- Cufon -->
		<script type="text/javascript" src="/includes/js/dealn_it/cufon-yui.js"></script>
		<script type="text/javascript" src="/includes/js/dealn_it/myradpro.font.js"></script>
		<script type="text/javascript">
		Cufon.replace('h1')('h2')('h3')('h4')('div.menu li')('table th');
		</script> */ ?>

<?

//if(!strpos($UseLayout, 'rameset')) {
//	echo '<script>
//		if (window!=top) {top.location.href=location.href;}
//	</script>';
//}

echo $add_to_head; 

?>
	</head>

