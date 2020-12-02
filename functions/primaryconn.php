<?	/*	Template file to connect to default database server	*/

if( !defined( "PRIMARYCONN_C" )) {
	define("PRIMARYCONN_C",  @sql_connect(PRIMARY_SERVER_C,PRIMARY_USERNAME_C,PRIMARY_PASSWORD_C, PRIMARY_DB_C, PRIMARY_DBTYPE_C));
	if( !PRIMARYCONN_C ) {
		$error .= "\n<li>Critical error: Cannot establish a connection with the database server! Please try again later.";
	}
}

	$siteInformation[] = "Connected with PRIMARY conn";
?>
