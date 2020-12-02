<?php 

global $page_title;
global $UseLayout;
global $add_to_head;

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
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
		<meta name="Description" content="Dealn.it features a daily deal on the best stuff to do, see, eat, and buy in Orange County and a variety of other cities across the United States.">

		<script SRC="/includes/js/local_scripts.js" language="JavaScript"></script>
		<script SRC="/includes/js/jquery-1.4.2.min.js" language="JavaScript"></script>
		<script SRC="/includes/js/jquery-ui-1.8.5.custom.min.js" language="JavaScript"></script>
		<script SRC="/includes/js/jquery.corner.js" language="JavaScript"></script>
		
		<link rel="stylesheet" type="text/css" href="/includes/css/komifeed/komifeed.css">

<?

if(!strpos($UseLayout, 'rameset')) {
	echo '<script>
		if (window!=top) {top.location.href=location.href;}
	</script>';
}

echo $add_to_head; 

?>
	</head>

