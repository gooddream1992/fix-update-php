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

<?

echo $add_to_head; 

?>
	</head>

