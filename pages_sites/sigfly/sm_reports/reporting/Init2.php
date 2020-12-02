<?


function con_populate_date_array(&$array, $string, $sql) {
	
	$con = Propel::getConnection();
	$stmt = $con->createStatement();
	$rs = $stmt->executeQuery($sql, ResultSet::FETCHMODE_ASSOC );
	/* @var $rs ResultSet */
	
	while ($rs->next()) {
		$row = $rs->getRow();
		
		$array[$row['date_created']][$string] = $row[$string];
	//	array(2) {
	//	  ["date_created"]=>
	//	  string(10) "2006-04-06"
	//	  ["signup"]=>
	//	  string(1) "7"
	//	}
	}
	
}

$sql_signup = "
SELECT DATE(date_created) AS date_created, COUNT( DISTINCT id) AS signup
FROM user
WHERE date_created > '2006-04-01 00:00:01'
GROUP BY DATE(date_created)
ORDER BY date_created ASC
";
con_populate_date_array($arr_data, 'signup', $sql_signup);

$sql_cc = "
SELECT DATE(u.date_created) AS date_created, COUNT( DISTINCT u.id) AS cc
FROM user u, payment_method p
WHERE u.id = p.user_id
AND u.date_created > '2006-04-01 00:00:01'
GROUP BY DATE(u.date_created)
ORDER BY u.date_created ASC
";
con_populate_date_array($arr_data, 'cc', $sql_cc);

$sql_creative_all = "
SELECT DATE(u.date_created) AS date_created, COUNT( DISTINCT u.id) AS creative_all
FROM user u, ad_group g, ad_media_banner b, ad_media_text t
WHERE u.id = g.user_id
AND g.id = b.group_id
AND g.id = t.group_id
AND u.date_created > '2006-04-01 00:00:01'
GROUP BY DATE(u.date_created)
ORDER BY u.date_created ASC
";
con_populate_date_array($arr_data, 'creative_all', $sql_creative_all);

$sql_creative_text = "
SELECT DATE(u.date_created) AS date_created, COUNT( DISTINCT u.id) AS creative_text
FROM user u, ad_group g, ad_media_text t
WHERE u.id = g.user_id
AND g.id = t.group_id
AND u.date_created > '2006-04-01 00:00:01'
GROUP BY DATE(u.date_created)
ORDER BY u.date_created ASC
";
con_populate_date_array($arr_data, 'creative_text', $sql_creative_text);

$sql_creative_banner = "
SELECT DATE(u.date_created) AS date_created, COUNT( DISTINCT u.id) AS creative_banner
FROM user u, ad_group g, ad_media_banner b
WHERE u.id = g.user_id
AND g.id = b.group_id
AND u.date_created > '2006-04-01 00:00:01'
GROUP BY DATE(u.date_created)
ORDER BY u.date_created ASC
";
con_populate_date_array($arr_data, 'creative_banner', $sql_creative_banner);

$sql_imps = "
SELECT DATE(u.date_created) AS date_created, COUNT( DISTINCT u.id) AS imps
FROM user u, ad_stat a
WHERE u.id = a.user_id
AND u.date_created > '2006-04-01 00:00:01'
GROUP BY DATE(u.date_created)
ORDER BY u.date_created ASC
";
con_populate_date_array($arr_data, 'imps', $sql_imps);


//date(date_created) as date_created 
//sum(if(field is null, 1,0)) as field
//from 
//users u, 
//ad_group g, 
//payment_method pay,
//
//group by date(date_created)
//order by date_created

?>