<?php

global $page;

	// config defaults
	// ------------------------------------------------------------
	// setup values
	// ------------------------------------------------------------
	$includesdir  = './includes/';
	$functionsdir = './functions/';
	$logindir     = './login/';
	$classesdir   = './classes/';
	$UseLayout  = 'default';
	
	if (strpos($_SERVER['HTTP_HOST'], 'ivedeals')) {
		
		define('PROPEL_CONF_FILE_C', '/usr/share/pear/data/propel_generator/projects/komideals/build/conf/komideals-conf.php');
		set_include_path('/usr/share/pear/data/propel_generator/projects/komideals/build/classes/komideals/' . PATH_SEPARATOR . get_include_path());
		
		$page_title = ucfirst($_SERVER['HTTP_HOST']);
		
		if (!array_key_exists('sid', $_GET))
			$_GET['sid'] = 'fivedeals';
	
	} elseif (strpos($_SERVER['HTTP_HOST'], 'roupally')) {
		
		define('PROPEL_CONF_FILE_C', '/usr/share/pear/data/propel_generator/projects/komideals/build/conf/komideals-conf.php');
		set_include_path('/usr/share/pear/data/propel_generator/projects/komideals/build/classes/komideals/' . PATH_SEPARATOR . get_include_path());
		
		$page_title = ucfirst($_SERVER['HTTP_HOST']);
		
		if (!array_key_exists('sid', $_GET))
			$_GET['sid'] = 'groupally';
		
	} elseif (strpos($_SERVER['HTTP_HOST'], 'igfly')) {
		
		define('PROPEL_CONF_FILE_C', '/usr/share/pear/data/propel_generator/projects/sigfly/build/conf/sigfly-conf.php');
		set_include_path('/usr/share/pear/data/propel_generator/projects/sigfly/build/classes/sigfly/' . PATH_SEPARATOR . get_include_path());
		
		$page_title = 'Sigfly - Global Signatures';
		
	} else {
		define('PROPEL_CONF_FILE_C', '/usr/share/pear/data/propel_generator/projects/komideals/build/conf/komideals-conf.php');
		set_include_path('/usr/share/pear/data/propel_generator/projects/komideals/build/classes/komideals/' . PATH_SEPARATOR . get_include_path());
		
		$page_title = 'Dealn.it - Social Buying at its Best';
	}
	
	if(isset($page)) $page_title. ': ' .$page;
	
	$arrCMSIncludesDir = array (
		'sigfly' => 'sigfly/',
		'fivedeals' => 'fivedeals/',
//		'groupally' => 'groupally/',
//		'lify' => 'dailyfeed/',
	);

	