<?	/*	Template file to connect to default database server	*/

if( !defined( "SESSIONCONN_C" )) {
	define("SESSIONCONN_C",  @sql_connect(SESSION_SERVER_C,SESSION_USERNAME_C,SESSION_PASSWORD_C, SESSION_DB_C, SESSION_DBTYPE_C));
	if( !SESSIONCONN_C ) {
		$error .= "\n<li>Critical error: Cannot establish a connection with the database server! Please try again later.";
	} else {
		$sessionconn = SESSIONCONN_C;
	}
}

	$siteInformation[] = "Connected with session conn";
?>