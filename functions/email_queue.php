<?	//	this function takes parameters similar to php's mail() function...
	//	it adds them to a database and delivers them to a queue.

function email_queue($email_to,$email_from,$user_id,$email_subject,$email_body,$extra_headers="") {
global $HTTP_SERVER_VARS;

	$sql = sprintf("INSERT INTO email_queue (email_to,			email_from,				user_id,	email_subject,				email_body,				extra_headers,				date_generated,	date_delivered,	is_sent,	remote_addr) ".
					"VALUES ('%s',				'%s',					%d,		'%s',					'%s',					'%s',					%d,		0,		0,		'%s') ",
						str_replace("'","''",$email_to),str_replace("'","''",$email_from),	$user_id,	str_replace("'","''",$email_subject),	str_replace("'","''",$email_body),	str_replace("'","''",$extra_headers),	time(),						$HTTP_SERVER_VARS["REMOTE_ADDR"]);
	if($nullres = sql_query($sql,PRIMARYCONN_C)) {
		return (TRUE);
	} else {
		return (FALSE);
	}
}

