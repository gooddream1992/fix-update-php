<?

// init2
// set cookie, always do so to re-set expiration time
if (!array_key_exists('debug', $_COOKIE)) {
	setcookie( 'debug', '1', time()+(4*3600), '/', COOKIE_DOMAIN_C );
	$_COOKIE['debug'] = '1';
} else {
	setcookie( 'debug', NULL, 0, '/', COOKIE_DOMAIN_C );
	unset($_COOKIE['debug']);
}

