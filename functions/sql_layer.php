<?php

/*
$Header: /www.luvoo.com/functions/sql_layer.php 3     6/20/04 10:46p Joe $
*/

// ------------------------------------------- //
// Do not let someone run this script directly //
// It is included in global_vars.php. 	       //
// ------------------------------------------- //
if (ereg(strtolower('sql_layer.php'), $PHP_SELF)) {
	header( sprintf("Location: http://%s/index.php", $_SERVER["HTTP_HOST"]) );
	exit();
}

// -------------------------------------------------------------- //
// Allowable database server types
//
// MySQL
// mSQL
// MSSQL
// PostgreSQL
// PostgreSQL_local When postmaster start without "-i" option.
// ODBC
// ODBC_Adabas
// Interbase
// Sybase
// -------------------------------------------------------------- //


// function to try, more than once, to connect, this
// is because the imagecacheconn seems to have problems connecting.
// if the function fails, we whould probably notify somebody....
// we'll get to this sooner or later.
function sql_connect_x( $server, $username, $password, $db, $type) {
	global $sql_connect_x_count;

	if(!$conn = sql_connect( $server, $username, $password, $db, $type )) {
		$sql_connect_x_count++;
		if($sql_connect_x_count < 10) {
			$conn = sql_connect_x( $server, $username, $password, $db, $type );
		} else {
			$sql_connect_x_count = 0;
		}
	}
	return $conn;

}


class ResultSet_1 {
	var $result;
	var $total_rows;
	var $fetched_rows;

	function set_result( $res ) {
		$this->result = $res;
	}

	function get_result() {
		return $this->result;
	}

	function set_total_rows( $rows ) {
		$this->total_rows = $rows;
	}

	function get_total_rows() {
		return $this->total_rows;
	}

	function set_fetched_rows( $rows ) {
		$this->fetched_rows = $rows;
	}

	function get_fetched_rows() {
		return $this->fetched_rows;
	}

	function increment_fetched_rows() {
		$this->fetched_rows = $this->fetched_rows + 1;
	}
}


/*
 * sql_connect($host, $user, $password, $db)
 * returns the connection ID
 */

function sql_connect($host, $user, $password, $db, $dbtype) {

	switch ($dbtype) {

		case "MSSQL":
			$dbi=mssql_connect($host, $user, $password);
			mssql_select_db($db);
			break;
		case "MySQL":
			$dbi=mysql_connect($host, $user, $password);
			mysql_select_db($db);
			break;

		case "mSQL":
			$dbi=msql_connect($host);
			msql_select_db($db);
			break;

		case "PostgreSQL":
			$dbi=pg_connect("host=$host user=$user password=$password port=5432 dbname=$db");
			break;

		case "PostgreSQL_local":
			$dbi=pg_connect("user=$user password=$password dbname=$db");
			break;

		case "ODBC":
			$dbi=odbc_connect($db,$user,$password);
			break;

		case "ODBC_Adabas":
			$dbi=odbc_connect($host.":".$db,$user,$password);
			break;

		case "Interbase":
			$dbi=ibase_connect($host.":".$db,$user,$password);
			break;

		case "Sybase":
			$dbi=sybase_connect($host, $user, $password);
			sybase_select_db($db,$dbi);
			break;

		default:
			break;
	}

	// --------------------------------------------------------- //
	// Set a dynamic constant whose name reflects the resource   //
	// id number and whose value is equal to the database type   //
	// --------------------------------------------------------- //
	define(sprintf("%s%d_C","RESOURCE",(integer)$dbi)   ,$dbtype);


	return $dbi;

}

function sql_pconnect($host, $user, $password, $db, $dbtype) {

	switch ($dbtype) {

		case "MSSQL":
			$dbi=mssql_pconnect($host, $user, $password);
			mssql_select_db($db);
			break;
		case "MySQL":
			$dbi=mysql_pconnect($host, $user, $password);
			mysql_select_db($db);
			break;

		case "mSQL":
			$dbi=msql_pconnect($host);
			msql_select_db($db);
			break;

		case "PostgreSQL":
			$dbi=pg_pconnect("host=$host user=$user password=$password port=5432 dbname=$db");
			break;

		case "PostgreSQL_local":
			$dbi=pg_pconnect("user=$user password=$password dbname=$db");
			break;

		case "ODBC":
			$dbi=odbc_pconnect($db,$user,$password);
			break;

		case "ODBC_Adabas":
			$dbi=odbc_pconnect($host.":".$db,$user,$password);
			break;

		case "Interbase":
			$dbi=ibase_pconnect($host.":".$db,$user,$password);
			break;

		case "Sybase":
			$dbi=sybase_pconnect($host, $user, $password);
			sybase_select_db($db,$dbi);
			break;

		default:
			break;
	}

	// --------------------------------------------------------- //
	// Set a dynamic constant whose name reflects the resource   //
	// id number and whose value is equal to the database type   //
	// --------------------------------------------------------- //
	define(sprintf("%s%d_C","RESOURCE",(integer)$dbi)   ,$dbtype);

	return $dbi;

}


function sql_logout($id)
{

$dbtype = constant(sprintf("%s%d_C","RESOURCE",$id));

switch ($dbtype) {

    case "MSSQL":
        $dbi=mssql_close($id);
        return $dbi;
    break;;
    case "MySQL":
        $dbi=mysql_close($id);
        return $dbi;
    break;;

    case "mSQL":
         $dbi=msql_close($id);
         return $dbi;
    break;;

    case "PostgreSQL":
    case "PostgreSQL_local":
         $dbi=pg_close($id);
         return $dbi;
    break;;

    case "ODBC":
    case "ODBC_Adabas":
         $dbi=odbc_close($id);
         return $dbi;
    break;;

    case "Interbase":
         $dbi=ibase_close($id);
         return $dbi;
    break;;

    case "Sybase":
        $dbi=sybase_close($id);
        return $dbi;
    break;;

    default:
    break;;
    }
}


/*
 * sql_rollbackTrans($id)
 * Rolls back all transactions (including nested ones)
 */

function sql_rollbackTrans($id) {
	$dbtype = constant(sprintf("%s%d_C","RESOURCE",$id));
	switch($dbtype) {
		case "MSSQL":
			$res = mssql_query("ROLLBACK TRAN",$id);
			return $res;
		break;
		case "MySQL":
    		case "PostgreSQL":
    		case "PostgreSQL_local":
    		case "ODBC":
		case "mSQL":
    		case "Interbase":
    		case "ODBC_Adabas":
    		case "Sybase":
			// some of these should be implemented
			// at a later time, espacially if we
			// do transactions with one of them
			return false;
		break;
	}


}


/*
 * sql_rollbackTrans($id)
 * Commits all transactions (including nested ones)
 */
function sql_commitTrans($id) {
	if (!$id) {
		return false;
	}

	$dbtype = constant(sprintf("%s%d_C","RESOURCE",$id));

	switch($dbtype) {
		case "MSSQL":
			$res = mssql_query("COMMIT TRAN",$id);
			return $res;
		break;
		case "MySQL":
    		case "PostgreSQL":
    		case "PostgreSQL_local":
    		case "ODBC":
		case "mSQL":
    		case "Interbase":
    		case "ODBC_Adabas":
    		case "Sybase":
			// some of these should be implemented
			// at a later time, espacially if we
			// do transactions with one of them
			return false;
		break;
	}
}

/*
 * sql_rollbackTrans($id,$obj_name)
 * Starts a transaction with names $obj_name
 */
function sql_startTrans($id,$obj_name,$serialize = true) {

	if (!$id || !strlen($obj_name)) {
		return false;
	}


	$dbtype = constant(sprintf("%s%d_C","RESOURCE",$id));

	switch($dbtype) {
		case "MSSQL":
			if ($serialize) {
				if(!($res = mssql_query("SET XACT_ABORT ON")))
					return $res;
				if(!($res = mssql_query(sprintf(sprintf("BEGIN TRAN %s",$obj_name)))))
					return $res;
				if(!($res = mssql_query("SET TRANSACTION ISOLATION LEVEL SERIALIZABLE")))
					return $res;
			}
			else {
				$res = mssql_query(sprintf("SET XACT_ABORT ON; BEGIN TRAN %s",$obj_name));
			}
			return $res;
		break;
		case "MySQL":
    		case "PostgreSQL":
    		case "PostgreSQL_local":
    		case "ODBC":
		case "mSQL":
    		case "Interbase":
    		case "ODBC_Adabas":
    		case "Sybase":
			// some of these should be implemented
			// at a later time, espacially if we
			// do transactions with one of them
			return false;
		break;
	}


}


/*
 * sql_query($query, $id)
 * executes an SQL statement, returns a result identifier
 */

function sql_query($query, $id, $file = "", $line = 0)
{

global $siteInformation; // array for holding query information.
global $sqlQueries; // array for holding query information.
global $_SERVER; // used to pre/append comment to query for debugging.
global $_GET; // used for query debugging.
global $_POST; // used for query debugging
$sqlStartTime = getmicrotime();  /* start: show query execution time */

//$sql_debug = true;

// include query in debug regardless.  nice to have when query crashes.
$sqlQueries_currentCount = count($sqlQueries);
$sqlQueries[$sqlQueries_currentCount]['sql'] = $query;
if(strlen($file) || $line) $sqlQueries[$sqlQueries_currentCount]['location'] = sprintf("File: %s, Line: %d", $file , $line);

// add comment to query to define from where query is coming
$query = sprintf("/* http%s://%s%s%s */\n%s",
	($_SERVER["HTTPS"]=="on")?"s":"",
	$_SERVER["HTTP_HOST"],
	$_SERVER['REQUEST_URI'],
	(strlen($_POST['page']) > 0)? '&page='.urlencode($_POST['page']) : '',
	$query);

$dbtype = @constant(sprintf("%s%d_C",'RESOURCE',$id));
if(!$dbtype && str_replace('dev','',$_SERVER['HTTP_HOST']) != $_SERVER['HTTP_HOST']) {
	echo 'Error: No resource defined. SQL query: '.str_replace(',',', ',$query).'<BR>';
}

if( isset($sql_debug) ) echo 'SQL query: '.str_replace(',',', ',$query).'<BR>';
switch ($dbtype) {

    case "MSSQL":
        $res=@mssql_query($query, $id);
    break;;
    case "MySQL":
        $res=@mysql_query($query, $id);
    break;;

    case "mSQL":
        $res=@msql_query($query, $id);
    break;;

    case "PostgreSQL":
    case "PostgreSQL_local":
	$pg = 1;
        $res=pg_exec($id,$query);
	$result_set = new ResultSet_1;
	$result_set->set_result( $res );
	$result_set->set_total_rows( sql_num_rows( $result_set ) );
	$result_set->set_fetched_rows( 0 );
    break;;

    case "ODBC":
    case "ODBC_Adabas":
        $res=@odbc_exec($id,$query);
    break;;

    case "Interbase":
        $res=@ibase_query($id,$query);
    break;;

    case "Sybase":
        $res=@sybase_query($query, $id);
    break;;

    default:
    break;;

    }

    if( !defined(sprintf("%s%d_C","RESOURCE",(integer)$res)) )
	define(sprintf("%s%d_C","RESOURCE",(integer)$res)   ,$dbtype);

    if($res) {

	$sqlEndTime = getmicrotime();  /* end: show query execution time */
	$sqlTimeDiff = abs($sqlEndTime - $sqlStartTime);

	$sqlQueries[$sqlQueries_currentCount]['dbtype'] = $dbtype;
	if(eregi("select ",$query)) $sqlQueries[$sqlQueries_currentCount]['count'] = sql_num_rows($res);
	$sqlQueries[$sqlQueries_currentCount]['time'] = $sqlTimeDiff;
    } else {
    	$strSqlErrorMessage = '(No Error Message Available)';

    	switch ($dbtype) {

	    case "MSSQL":
	        $strSqlErrorMessage = @mssql_get_last_message();
	    break;;
	    case "MySQL":
		$strSqlErrorMessage = @mysql_error($id);
	    break;;

	    case "mSQL":
	    case "PostgreSQL":
	    case "PostgreSQL_local":
	    case "ODBC":
	    case "ODBC_Adabas":
	    case "Interbase":
	    case "Sybase":
	    default:
	    break;;

        }
		$siteInfoErrorMessage = 'Error: '. $strSqlErrorMessage .' ... Coult not run query: '. str_replace(',',', ',$query);
		$siteInformation[] = $siteInfoErrorMessage;
		@error_log(substr($siteInfoErrorMessage, 0, 2048), 0);
    }
    // save only the last 20 entries
	if(count($sqlQueries) > 20 && !isset($_GET["unset_query_limit"])) {

		$sqlQueries = array_slice ($sqlQueries, -20, 20);
		$siteInformation['err'] = '"Query limit reached.  <br>Only showing the last 20 queries.  <br>Append unset_query_limit=1 to url to see all queries, <br>and only use this in a dev environment.';
	}

    if ( isset($pg) ) {
  	  return $result_set;
    } else {
 	   return $res;
    }
}

/*
 * sql_num_rows($res)
 * given a result identifier, returns the number of affected rows
 */

function sql_num_rows($res)
{

$dbtype = constant(sprintf("%s%d_C","RESOURCE",$res));

switch ($dbtype) {

    case "MSSQL":
        $rows=@mssql_num_rows($res);
        return $rows;
    break;;
    case "MySQL":
        $rows=@mysql_num_rows($res);
        return $rows;
    break;;

    case "mSQL":
        $rows=@msql_num_rows($res);
        return $rows;
    break;;

    case "PostgreSQL":
    case "PostgreSQL_local":
        $rows=@pg_numrows( $res->get_result() );
        return $rows;
    break;;

    case "ODBC":
    case "ODBC_Adabas":
        $rows=@odbc_num_rows($res);
        return $rows;
    break;;

    case "Interbase":
	echo "<BR>Error! PHP dosen't support ibase_numrows!<BR>";
        return $rows;
    break;;

    case "Sybase":
        $rows=@sybase_num_rows($res);
        return $rows;
    break;;

    default:
    break;;
    }
}

/*
 * sql_fetch_row($res,$row)
 * given a result identifier, returns an array with the resulting row
 * Needs also a row number for compatibility with PostgreSQL
 */

function sql_fetch_row(&$res){

$dbtype = constant(sprintf("%s%d_C","RESOURCE",$res));

switch ($dbtype) {

    case "MSSQL":
        $row = mssql_fetch_row($res);
        return $row;
    break;;
    case "MySQL":
        $row = mysql_fetch_row($res);
        return $row;
    break;;

    case "mSQL":
        $row = msql_fetch_row($res);
        return $row;
    break;;

    case "PostgreSQL":
    case "PostgreSQL_local":
	if( $res->get_total_rows() > $res->get_fetched_rows() ) {
		$row = pg_fetch_row($res->get_result(), $res->get_fetched_rows() );
		$res->increment_fetched_rows();
		return $row;
	} else {
		return false;
	}
    break;;

    case "ODBC":
    case "ODBC_Adabas":
        $row = array();
        $cols = odbc_fetch_row($res);
        return $row;
    break;;

    case "Interbase":
        $row = ibase_fetch_row($res);
        return $row;
    break;;

    case "Sybase":
        $row = sybase_fetch_row($res);
        return $row;
    break;;

    default:
    break;;
    }
    $constantName = sprintf("%s%d_C","RESOURCE",(integer)$res);
    define($constantName,$dbtype);
    //printf("<br>%s = %s",$constantName,constant($constantName));
}

/*
 * sql_fetch_array($res,$row)
 * given a result identifier, returns an associative array
 * with the resulting row using field names as keys.
 * Needs also a row number for compatibility with PostgreSQL.
 */

function sql_fetch_array(&$res){

$dbtype = constant(sprintf("%s%d_C","RESOURCE",$res));

switch ($dbtype)
    {
    case "MSSQL":
        $row = array();
        $row = mssql_fetch_array($res);
        return $row;
    break;;
    case "MySQL":
        $row = array();
        $row = mysql_fetch_array($res);
        return $row;
    break;;

    case "mSQL":
        $row = array();
        $row = msql_fetch_array($res);
        return $row;
    break;;

    case "PostgreSQL":
    case "PostgreSQL_local":
	if( $res->get_total_rows > $res->get_fetched_rows() ) {
		$row = array();
		$row = pg_fetch_array($res->get_result(), $res->get_fetched_rows() );
		$res->increment_fetched_rows();
		return $row;
	} else {
		return false;
	}
    break;;

    case "ODBC":
    case "ODBC_Adabas":
        $row = array();
        $row = odbc_fetch_array($res);
        return $row;
    break;;

    case "Interbase":
	$orow=ibase_fetch_object($res);
	$row=get_object_vars($orow);
        return $row;
    break;;

    case "Sybase":
        $row = sybase_fetch_array($res);
        return $row;
    break;;

    }
}

function SQL_fetch_object(&$res)
{

$dbtype = constant(sprintf("%s%d_C","RESOURCE",$res));

switch ($dbtype)
    {
    case "MSSQL":
        $row = mssql_fetch_object($res);
	if($row) return $row;
	else return false;
    break;;
    case "MySQL":
        $row = mysql_fetch_object($res);
	if($row) return $row;
	else return false;
    break;;

    case "mSQL":
        $row = msql_fetch_object($res);
	if($row) return $row;
	else return false;
    break;;

    case "PostgreSQL":
    case "PostgreSQL_local":
	if( $res->get_total_rows > $res->get_fetched_rows() ) {
		$row = pg_fetch_object( $res->get_result(), $res->get_fetched_rows() );
		$res->increment_fetched_rows();
		if($row) return $row;
		else return false;
	} else {
		return false;
	}
    break;;

    case "ODBC":
    case "ODBC_Adabas":
        $row = mssql_fetch_object($res);
	if($row) return $row;
	else return false;
    break;;

    case "Interbase":
        $orow = ibase_fetch_object($res);
	if($orow)
	{
	    $arow=get_object_vars($orow);
	    while(list($name,$key)=each($arow))
	    {
		$name=strtolower($name);
		$row->$name=$key;
	    }
    	    return $row;
	}else return false;
    break;;

    case "Sybase":
        $row = sybase_fetch_object($res);
        return $row;
    break;;

    }
}


function sql_insert_id( $ResourceId ) {

global $siteInformation; // array for holding query information.

	// ------------------------------------------------------------
	// returns value from indentity field...
	// created from previous insert on given connection resource.
	// 0 if failed or not available.
	// ------------------------------------------------------------
	//echo $ResourceId;
	$dbtype   = constant( sprintf("RESOURCE%d_C", $ResourceId) );
	$InsertId = 0;

	switch ($dbtype) {
		case 'MSSQL':
			if ($res = sql_query("SELECT @@IDENTITY AS 'identity'", $ResourceId)) {

				if($obj = sql_fetch_object($res)) {
					$InsertId = $obj->identity;
				} else {
					$siteInformation[] = 'Could not fetch object on Identity query.';
				}
			} else {
				$siteInformation[] = 'Could not run Identity query; database error.';
			}
			break;

		case 'MySQL':
		case 'PostgreSQL':
		case 'PostgreSQL_local':
		case 'ODBC':
		case 'mSQL':
		case 'Interbase':
		case 'ODBC_Adabas':
		case 'Sybase':
			// some of these should be implemented at a later time
			$siteInformation[] = 'This function is not suppoted by '.$dbtype.'.';
		default:
			$siteInformation[] = 'This function is not suppoted by no dbtype.';
	}

	return (int) $InsertId;
}

?>