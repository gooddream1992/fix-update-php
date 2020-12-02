<?

	// --------------------------------------------------

	// php_cache module / for use with caching database

	//

	// based on CFCACHE except storing cache to db

	//

	// $Timeout = time() + seconds

	//   - timestamp of when you want cache kept until

	// --------------------------------------------------



/*	// commented out cause we're using custom get method

	// --------------------------------------------------

	// include required functions if not already defined

	// --------------------------------------------------

	if( ! function_exists( "php_http" ) )

		include( sprintf( "%sphp_http.php", $functionsdir ) );

 */

	

	function php_cache( $Timeout="", $Action="CACHE", $Protocol="http://", $Directory="", $Expireurl="" ) {

		

		// ------------------------------------------------------------

		// setup

		// ------------------------------------------------------------

		$MaxCacheLag = 300;

		

		// --------------------------------------------------

		// scope globals

		// --------------------------------------------------

		global $PATH_TRANSLATED;

		global $QUERY_STRING;

		global $HTTP_HOST;

		global $SCRIPT_NAME;

		global $cacheconn;

		global $functionsdir;

		global $PHPNoCache;

		global $HTTP_COOKIE_VARS;

		global $HTTP_SERVER_VARS;

		global $sqlQueries;

		global $siteInformation;

		global $cachePath;

		global $webServers;

		global $starttime;  // variable to keep track of the time at which the script started.



		if( ! isset( $cacheconn ) )

			include_once( sprintf( "%scacheconn.php", $functionsdir ) );



		$QUERY_STRING = str_replace( "?cache_flush=1", "", $QUERY_STRING );

		$QUERY_STRING = str_replace( "&cache_flush=1", "", $QUERY_STRING );

		$HTTP_SERVER_VARS["QUERY_STRING"] = str_replace( "?cache_flush=1", "", $HTTP_SERVER_VARS["QUERY_STRING"] );

		$HTTP_SERVER_VARS["QUERY_STRING"] = str_replace( "&cache_flush=1", "", $HTTP_SERVER_VARS["QUERY_STRING"] );

		

		// --------------------------------------------------

		// Is caching enabled for this request?

		// --------------------------------------------------

		if( ! isset( $PHPNoCache ) ) {

			

			// ------------------------------------------------------------

			// Yes, set default values

			// ------------------------------------------------------------

			$strCachingHostClause = sprintf( "cachingHost = '%s' ", $HTTP_HOST );

			

			// ------------------------------------------------------------

			// get grouping dependent on the host...

			// if current host not in these groups, it's in its own group

			// ------------------------------------------------------------

			$CacheGroups = array(

				array(	"nothing"  // default array so nothing matches the zero index.

				),

				array(

					"bb0.bidway.com",

					"bb0.auctiondiner.com",

					"bb1.bidway.com",

					"bb1.auctiondiner.com",

					"bb2.bidway.com",

					"bb2.auctiondiner.com",

					"bb3.bidway.com",

					"bb3.auctiondiner.com",

					"bb4.bidway.com",

					"bb4.auctiondiner.com",

					"bb5.bidway.com",

					"bb5.auctiondiner.com",

					"bb6.bidway.com",

					"bb6.auctiondiner.com",

					"bb7.bidway.com",

					"bb7.auctiondiner.com",

					"bb8.bidway.com",

					"bb8.auctiondiner.com",

					"bb9.bidway.com",

					"bb9.auctiondiner.com",

					"bb10.bidway.com",

					"bb10.auctiondiner.com",

					"bb11.bidway.com",

					"bb11.auctiondiner.com",

					"bb12.bidway.com",

					"bb12.auctiondiner.com",

					"bb13.bidway.com",

					"bb13.auctiondiner.com",

					"bb14.bidway.com",

					"bb14.auctiondiner.com",

					"bb15.bidway.com",

					"bb15.auctiondiner.com",

					"bb16.bidway.com",

					"bb16.auctiondiner.com",

					"bb17.bidway.com",

					"bb17.auctiondiner.com",

					"bb18.bidway.com",

					"bb18.auctiondiner.com",

					"bb19.bidway.com",

					"bb19.auctiondiner.com",

					"bb20.bidway.com",

					"bb20.auctiondiner.com",

					"bb21.bidway.com",

					"bb21.auctiondiner.com",

					"www.bidway.com",

					"www.auctiondiner.com",

					"www2.bidway.com",

					"www2.auctiondiner.com",

					"secure.bidway.com",

					"secure.auctiondiner.com"

				),

				array(

					"montgomeryalabama.bidway.com",

					"montgomeryalabama.auctiondiner.com"

				),

				array(

					"huntsvillealabama.bidway.com",

					"huntsvillealabama.auctiondiner.com"

				),

				array(

					"birminghamalabama.bidway.com",

					"birminghamalabama.auctiondiner.com"

				),

				array(

					"phoenixarizona.bidway.com",

					"phoenixarizona.auctiondiner.com"

				),

				array(

					"tucsonarizona.bidway.com",

					"tucsonarizona.auctiondiner.com"

				),

				array(

					"flagstaffarizona.bidway.com",

					"flagstaffarizona.auctiondiner.com"

				),

				array(

					"littlerockarkansas.bidway.com",

					"littlerockarkansas.auctiondiner.com"

				),

				array(

					"losangelescalifornia.bidway.com",

					"losangelescalifornia.auctiondiner.com"

				),

				array(

					"sandiegocalifornia.bidway.com",

					"sandiegocalifornia.auctiondiner.com"

				),

				array(

					"inlandempirecalifornia.bidway.com",

					"inlandempirecalifornia.auctiondiner.com"

				),

				array(

					"fresnocalifornia.bidway.com",

					"fresnocalifornia.auctiondiner.com"

				),

				array(

					"sanfranciscocalifornia.bidway.com",

					"sanfranciscocalifornia.auctiondiner.com"

				),

				array(

					"sacramentocalifornia.bidway.com",

					"sacramentocalifornia.auctiondiner.com"

				),

				array(

					"sanjosecalifornia.bidway.com",

					"sanjosecalifornia.auctiondiner.com"

				),

				array(

					"denvercolorado.bidway.com",

					"denvercolorado.auctiondiner.com"

				),

				array(

					"coloradospringscolorado.bidway.com",

					"coloradospringscolorado.auctiondiner.com"

				),

				array(

					"hartfordconnecticut.bidway.com",

					"hartfordconnecticut.auctiondiner.com"

				),

				array(

					"newhavenconnecticut.bidway.com",

					"newhavenconnecticut.auctiondiner.com"

				),

				array(

					"stamfordconnecticut.bidway.com",

					"stamfordconnecticut.auctiondiner.com"

				),

				array(

					"wilmingtondelaware.bidway.com",

					"wilmingtondelaware.auctiondiner.com"

				),

				array(

					"miamiflorida.bidway.com",

					"miamiflorida.auctiondiner.com"

				),

				array(

					"orlandoflorida.bidway.com",

					"orlandoflorida.auctiondiner.com"

				),

				array(

					"tampaflorida.bidway.com",

					"tampaflorida.auctiondiner.com"

				),

				array(

					"jacksonvilleflorida.bidway.com",

					"jacksonvilleflorida.auctiondiner.com"

				),

				array(

					"tallahasseeflorida.bidway.com",

					"tallahasseeflorida.auctiondiner.com"

				),

				array(

					"atlantageorgia.bidway.com",

					"atlantageorgia.auctiondiner.com"

				),

				array(

					"macongeorgia.bidway.com",

					"macongeorgia.auctiondiner.com"

				),

				array(

					"augustageorgia.bidway.com",

					"augustageorgia.auctiondiner.com"

				),

				array(

					"columbusgeorgia.bidway.com",

					"columbusgeorgia.auctiondiner.com"

				),

				array(

					"honoluluhawaii.bidway.com",

					"honoluluhawaii.auctiondiner.com"

				),

				array(

					"boiseidaho.bidway.com",

					"boiseidaho.auctiondiner.com"

				),

				array(

					"chicagoillinois.bidway.com",

					"chicagoillinois.auctiondiner.com"

				),

				array(

					"springfieldillinois.bidway.com",

					"springfieldillinois.auctiondiner.com"

				),

				array(

					"indianapolisindiana.bidway.com",

					"indianapolisindiana.auctiondiner.com"

				),

				array(

					"ftwayneindiana.bidway.com",

					"ftwayneindiana.auctiondiner.com"

				),

				array(

					"desmoinesiowa.bidway.com",

					"desmoinesiowa.auctiondiner.com"

				),

				array(

					"cedarrapidsiowa.bidway.com",

					"cedarrapidsiowa.auctiondiner.com"

				),

				array(

					"davenportiowa.bidway.com",

					"davenportiowa.auctiondiner.com"

				),

				array(

					"kansascitykansas.bidway.com",

					"kansascitykansas.auctiondiner.com"

				),

				array(

					"wichitakansas.bidway.com",

					"wichitakansas.auctiondiner.com"

				),

				array(

					"louisvillekentucky.bidway.com",

					"louisvillekentucky.auctiondiner.com"

				),

				array(

					"lexingtonkentucky.bidway.com",

					"lexingtonkentucky.auctiondiner.com"

				),

				array(

					"neworleanslouisiana.bidway.com",

					"neworleanslouisiana.auctiondiner.com"

				),

				array(

					"lafayettelouisiana.bidway.com",

					"lafayettelouisiana.auctiondiner.com"

				),

				array(

					"batonrougelouisiana.bidway.com",

					"batonrougelouisiana.auctiondiner.com"

				),

				array(

					"shreveportlouisiana.bidway.com",

					"shreveportlouisiana.auctiondiner.com"

				),

				array(

					"portlandmaine.bidway.com",

					"portlandmaine.auctiondiner.com"

				),

				array(

					"augustamaine.bidway.com",

					"augustamaine.auctiondiner.com"

				),

				array(

					"baltimoremaryland.bidway.com",

					"baltimoremaryland.auctiondiner.com"

				),

				array(

					"bostonmassachusetts.bidway.com",

					"bostonmassachusetts.auctiondiner.com"

				),

				array(

					"springfieldmassachusetts.bidway.com",

					"springfieldmassachusetts.auctiondiner.com"

				),

				array(

					"detroitmichigan.bidway.com",

					"detroitmichigan.auctiondiner.com"

				),

				array(

					"grandrapidsmichigan.bidway.com",

					"grandrapidsmichigan.auctiondiner.com"

				),

				array(

					"lansingmichigan.bidway.com",

					"lansingmichigan.auctiondiner.com"

				),

				array(

					"minneapolisminnesota.bidway.com",

					"minneapolisminnesota.auctiondiner.com"

				),

				array(

					"stpaulminnesota.bidway.com",

					"stpaulminnesota.auctiondiner.com"

				),

				array(

					"duluthminnesota.bidway.com",

					"duluthminnesota.auctiondiner.com"

				),

				array(

					"jacksonmississippi.bidway.com",

					"jacksonmississippi.auctiondiner.com"

				),

				array(

					"meridianmississippi.bidway.com",

					"meridianmississippi.auctiondiner.com"

				),

				array(

					"stlouismissouri.bidway.com",

					"stlouismissouri.auctiondiner.com"

				),

				array(

					"springfieldmissouri.bidway.com",

					"springfieldmissouri.auctiondiner.com"

				),

				array(

					"jeffersoncitymissouri.bidway.com",

					"jeffersoncitymissouri.auctiondiner.com"

				),

				array(

					"billingsmontana.bidway.com",

					"billingsmontana.auctiondiner.com"

				),

				array(

					"missoulamontana.bidway.com",

					"missoulamontana.auctiondiner.com"

				),

				array(

					"omahanebraska.bidway.com",

					"omahanebraska.auctiondiner.com"

				),

				array(

					"lincolnnebraska.bidway.com",

					"lincolnnebraska.auctiondiner.com"

				),

				array(

					"lasvegasnevada.bidway.com",

					"lasvegasnevada.auctiondiner.com"

				),

				array(

					"renonevada.bidway.com",

					"renonevada.auctiondiner.com"

				),

				array(

					"carsoncitynevada.bidway.com",

					"carsoncitynevada.auctiondiner.com"

				),

				array(

					"manchesternewhampshire.bidway.com",

					"manchesternewhampshire.auctiondiner.com"

				),

				array(

					"concordnewhampshire.bidway.com",

					"concordnewhampshire.auctiondiner.com"

				),

				array(

					"newarknewjersey.bidway.com",

					"newarknewjersey.auctiondiner.com"

				),

				array(

					"trentonnewjersey.bidway.com",

					"trentonnewjersey.auctiondiner.com"

				),

				array(

					"santafenewmexico.bidway.com",

					"santafenewmexico.auctiondiner.com"

				),

				array(

					"albuquerquenewmexico.bidway.com",

					"albuquerquenewmexico.auctiondiner.com"

				),

				array(

					"buffalonewyork.bidway.com",

					"buffalonewyork.auctiondiner.com"

				),

				array(

					"rochesternewyork.bidway.com",

					"rochesternewyork.auctiondiner.com"

				),

				array(

					"albanynewyork.bidway.com",

					"albanynewyork.auctiondiner.com"

				),

				array(

					"syracusenewyork.bidway.com",

					"syracusenewyork.auctiondiner.com"

				),

				array(

					"newyorkcitynewyork.bidway.com",

					"newyorkcitynewyork.auctiondiner.com"

				),

				array(

					"charlottenorthcarolina.bidway.com",

					"charlottenorthcarolina.auctiondiner.com"

				),

				array(

					"winstonnorthcarolina.bidway.com",

					"winstonnorthcarolina.auctiondiner.com"

				),

				array(

					"salemnorthcarolina.bidway.com",

					"salemnorthcarolina.auctiondiner.com"

				),

				array(

					"bismarknorthdakota.bidway.com",

					"bismarknorthdakota.auctiondiner.com"

				),

				array(

					"clevelandohio.bidway.com",

					"clevelandohio.auctiondiner.com"

				),

				array(

					"columbusohio.bidway.com",

					"columbusohio.auctiondiner.com"

				),

				array(

					"cincinnatiohio.bidway.com",

					"cincinnatiohio.auctiondiner.com"

				),

				array(

					"toledoohio.bidway.com",

					"toledoohio.auctiondiner.com"

				),

				array(

					"daytonohio.bidway.com",

					"daytonohio.auctiondiner.com"

				),

				array(

					"tulsaoklahoma.bidway.com",

					"tulsaoklahoma.auctiondiner.com"

				),

				array(

					"oklahomacityoklahoma.bidway.com",

					"oklahomacityoklahoma.auctiondiner.com"

				),

				array(

					"portlandoregon.bidway.com",

					"portlandoregon.auctiondiner.com"

				),

				array(

					"salemoregon.bidway.com",

					"salemoregon.auctiondiner.com"

				),

				array(

					"eugeneoregon.bidway.com",

					"eugeneoregon.auctiondiner.com"

				),

				array(

					"pittsburghpennsylvania.bidway.com",

					"pittsburghpennsylvania.auctiondiner.com"

				),

				array(

					"harrisburgpennsylvania.bidway.com",

					"harrisburgpennsylvania.auctiondiner.com"

				),

				array(

					"philadelphiapennsylvania.bidway.com",

					"philadelphiapennsylvania.auctiondiner.com"

				),

				array(

					"providencerhodeisland.bidway.com",

					"providencerhodeisland.auctiondiner.com"

				),

				array(

					"columbiasouthcarolina.bidway.com",

					"columbiasouthcarolina.auctiondiner.com"

				),

				array(

					"charlestonsouthcarolina.bidway.com",

					"charlestonsouthcarolina.auctiondiner.com"

				),

				array(

					"siouxfallssouthdakota.bidway.com",

					"siouxfallssouthdakota.auctiondiner.com"

				),

				array(

					"pierresouthdakota.bidway.com",

					"pierresouthdakota.auctiondiner.com"

				),

				array(

					"memphistennessee.bidway.com",

					"memphistennessee.auctiondiner.com"

				),

				array(

					"nashvilletennessee.bidway.com",

					"nashvilletennessee.auctiondiner.com"

				),

				array(

					"chattanoogatennessee.bidway.com",

					"chattanoogatennessee.auctiondiner.com"

				),

				array(

					"knoxvilletennessee.bidway.com",

					"knoxvilletennessee.auctiondiner.com"

				),

				array(

					"dallastexas.bidway.com",

					"dallastexas.auctiondiner.com"

				),

				array(

					"ftworthtexas.bidway.com",

					"ftworthtexas.auctiondiner.com"

				),

				array(

					"houstontexas.bidway.com",

					"houstontexas.auctiondiner.com"

				),

				array(

					"sanantoniotexas.bidway.com",

					"sanantoniotexas.auctiondiner.com"

				),

				array(

					"corpuschristitexas.bidway.com",

					"corpuschristitexas.auctiondiner.com"

				),

				array(

					"amarillotexas.bidway.com",

					"amarillotexas.auctiondiner.com"

				),

				array(

					"laredotexas.bidway.com",

					"laredotexas.auctiondiner.com"

				),

				array(

					"saltlakecityutah.bidway.com",

					"saltlakecityutah.auctiondiner.com"

				),

				array(

					"provoutah.bidway.com",

					"provoutah.auctiondiner.com"

				),

				array(

					"burlingtonvermont.bidway.com",

					"burlingtonvermont.auctiondiner.com"

				),

				array(

					"montpeliervermont.bidway.com",

					"montpeliervermont.auctiondiner.com"

				),

				array(

					"richmondvirginia.bidway.com",

					"richmondvirginia.auctiondiner.com"

				),

				array(

					"norfolkvirginia.bidway.com",

					"norfolkvirginia.auctiondiner.com"

				),

				array(

					"seattlewashington.bidway.com",

					"seattlewashington.auctiondiner.com"

				),

				array(

					"spokanewashington.bidway.com",

					"spokanewashington.auctiondiner.com"

				),

				array(

					"charlestonwestvirginia.bidway.com",

					"charlestonwestvirginia.auctiondiner.com"

				),

				array(

					"milwaukeewisconsin.bidway.com",

					"milwaukeewisconsin.auctiondiner.com"

				),

				array(

					"madisonwisconsin.bidway.com",

					"madisonwisconsin.auctiondiner.com"

				),

				array(

					"chyennewyoming.bidway.com",

					"chyennewyoming.auctiondiner.com"

				),

				array(

					"casperwyoming.bidway.com",

					"casperwyoming.auctiondiner.com"

				),

				array(

					"washingtondcwashingtondc.bidway.com",

					"washingtondcwashingtondc.auctiondiner.com"

				),

				array(

					"orangecountycalifornia.bidway.com",

					"orangecountycalifornia.auctiondiner.com"

				),

				array(

					"anchoragealaska.bidway.com",

					"anchoragealaska.auctiondiner.com"

				),

				array(

					"grandjunctioncolorado.bidway.com",

					"grandjunctioncolorado.auctiondiner.com"

				),

				array(

					"mobilealabama.bidway.com",

					"mobilealabama.auctiondiner.com"

				),

				array(

					"palmdalecalifornia.bidway.com",

					"palmdalecalifornia.auctiondiner.com"

				),

				array(

					"wausauwisconsin.bidway.com",

					"wausauwisconsin.auctiondiner.com"

				),

				array(

					"monticelloillinois.bidway.com",

					"monticelloillinois.auctiondiner.com"

				),

				array(

					"elpasotexas.bidway.com",

					"elpasotexas.auctiondiner.com"

				),

				array(

					"juneaualaska.bidway.com",

					"juneaualaska.auctiondiner.com"

				),

				array(

					"bridgeportconnecticut.bidway.com",

					"bridgeportconnecticut.auctiondiner.com"

				),

				array(

					"decaturillinois.bidway.com",

					"decaturillinois.auctiondiner.com"

				),

				array(

					"topekakansas.bidway.com",

					"topekakansas.auctiondiner.com"

				),

				array(

					"helenamontana.bidway.com",

					"helenamontana.auctiondiner.com"

				),

				array(

					"grandforksnorthdakota.bidway.com",

					"grandforksnorthdakota.auctiondiner.com"

				),

				array(

					"olympiawashington.bidway.com",

					"olympiawashington.auctiondiner.com"

				),

				array(

					"reykjavikiceland.bidway.com",

					"reykjavikiceland.auctiondiner.com"

				),

				array(

					"ftmorgancolorado.bidway.com",

					"ftmorgancolorado.auctiondiner.com"

				),

				array(

					"atlanticcitynewjersey.bidway.com",

					"atlanticcitynewjersey.auctiondiner.com"

				),

				array(

					"austintexas.bidway.com",

					"austintexas.auctiondiner.com"

				),

				array(

					"ricelakewisconsin.bidway.com",

					"ricelakewisconsin.auctiondiner.com"

				),

				array(

					"salemillinois.bidway.com",

					"salemillinois.auctiondiner.com"

				),

				array(

					"bouldercolorado.bidway.com",

					"bouldercolorado.auctiondiner.com"

				),

				array(

					"doverdelaware.bidway.com",

					"doverdelaware.auctiondiner.com"

				),

				array(

					"southbendindiana.bidway.com",

					"southbendindiana.auctiondiner.com"

				),

				array(

					"frankfortkentucky.bidway.com",

					"frankfortkentucky.auctiondiner.com"

				),

				array(

					"annapolismaryland.bidway.com",

					"annapolismaryland.auctiondiner.com"

				),

				array(

					"raleighnorthcarolina.bidway.com",

					"raleighnorthcarolina.auctiondiner.com"

				),

				array(

					"alexandriavirginia.bidway.com",

					"alexandriavirginia.auctiondiner.com"

				),

				array(

					"otherareasiceland.bidway.com",

					"otherareasiceland.auctiondiner.com"

				),

				array(

					"portsmouthnewhampshire.bidway.com",

					"portsmouthnewhampshire.auctiondiner.com"

				),

				array(

					"australia.bidway.com",

					"australia.auctiondiner.com",

					"www.bidbayaustralia.com",

					"bidbayaustralia.com"

				)

			);

			

			reset( $CacheGroups );

			while( list( $TmpGroupIdx, $TmpGroupVals ) = each( $CacheGroups ) ) {



				$serverName = $HTTP_HOST;

				if($serverName == "")

					$serverName = $HTTP_SERVER_VARS["SERVER_NAME"];



				if($serverName == "")

					$serverName = "www.auctiondiner.com";





				if( in_array( strtolower( $serverName ), $TmpGroupVals ) ) {

					$strCachingHostClause = sprintf( "cachingHost IN( '%s' ) ", implode( "','", $TmpGroupVals ) );

					$siteInformation[] = $strCachingHostClause;

					break;

				}

			}

			

			// --------------------------------------------------

			// def vals

			// --------------------------------------------------

			$bDspCachedCopy = 1;

			

			// --------------------------------------------------

			// def full qual path of script

			// --------------------------------------------------

			// ** CACHING WAS CHANGED TO USE SCRIPT NAME INSTEAD, THIS ALLOWS FOR WEB DIRS TO DIFFER **

			//if( strlen( trim( $PATH_TRANSLATED ) ) )

			//	$strPathTranslated = $PATH_TRANSLATED;

			//else

			//	$strPathTranslated = $HTTP_SERVER_VARS["PATH_TRANSLATED"];

			

			// --------------------------------------------------

			// Get template path, file name, and INI file name

			// --------------------------------------------------

			// $strPath         = dirname( $strPathTranslated );

			// $strTemplateName = basename( $strPathTranslated );



			// what's this do?

			$strPath         = ereg_replace( "(.*)/\\$", "\\1/", dirname( $SCRIPT_NAME ) );



			// change windowz slashes to unix slashes to make caching

			// and clustering platform-independent...

			$strPath         = str_replace( "\\", "/", $strPath );



			$strTemplateName = basename( $SCRIPT_NAME );

			

			// --------------------------------------------------

			// Set base URL

			// --------------------------------------------------

			if( $QUERY_STRING == "" )

				$strBaseURL = $strTemplateName;

			else

				$strBaseURL = $strTemplateName . "?" . $QUERY_STRING;





			// --------------------------------------------------

			// Setup disk caching info...

			// --------------------------------------------------

			$cacheScriptPath = $strPath;



			if( $HTTP_SERVER_VARS["SERVER_SOFTWARE"] != "Apache" ) {

				$cacheScriptPath = str_replace( "/", "\\", $strPath );

			}



			// setup unique cache file name based on array index (from above) or http_host

			$preCacheFileName = "";

			if((int)$TmpGroupIdx == 0) $preCacheFileName = strtolower($HTTP_HOST);



			$cacheFileName = str_replace("\\","-",$cacheScriptPath . $preCacheFileName . intval($TmpGroupIdx) . $strBaseURL . ".txt");

			$cacheFileName = str_replace("/", "-",$cacheFileName);

			$cacheFileName = str_replace("?", "-",$cacheFileName);

			

			// --------------------------------------------------

			// Is this a flush?

			// --------------------------------------------------

			if( strtolower( $Action ) == "flush" ) {

				

				// --------------------------------------------------

				// Yes, did they override directory?

				// --------------------------------------------------

				if( strlen( $Directory ) ) {

					

					// --------------------------------------------------

					// Yes, reset path

					// --------------------------------------------------

					$strPath = $Directory;

					

					if( substr( strPath, -1 ) != "\\" && substr( strPath, -1 ) != "/" ) {

						$strPath .= "/";

					}

				}

				

				// --------------------------------------------------

				// Set exact match flag and massage expression

				// --------------------------------------------------

				if( ereg( "\*", $ExpireURL ) ) {

					$bExactMatch			= 0;

					$strSearchComparison	= "LIKE";

					$strCriteria			= ereg_replace( "*", "%", $ExpireURL );

				} else {

					$bExactMatch			= 1;

					$strSearchComparison	= "=";

					$strCriteria			= $ExpireURL;

				}

				

				// ------------------------------------------------------------

				// remove the URL parameter we use to specify a flush

				// ------------------------------------------------------------

				$strCriteria = str_replace( "?cache_flush=1", "", $strCriteria );

				$strCriteria = str_replace( "&cache_flush=1", "", $strCriteria );

				

				// ------------------------------------------------------------

				// tell next instance of script to flush mappings from database

				// ------------------------------------------------------------

				$strQryFlushMaps =

					" UPDATE cache_log " .

					"    SET cacheTimeStamp = '2001-01-01 01:01:01' " .

					"  WHERE sourcePath = '" . addslashes( $strPath ) . "' ";

					

				// use clause if given

				// --------------------------------------------------

				if( strlen( trim( $ExpireURL ) ) )

					$strQryFlushMaps .= " AND baseURL " . $strSearchComparison . " '" . addslashes( $strCriteria ) . "' ";

				

				// last condition & finish

				// ------------------------------------------------------------

				$strQryFlushMaps .= sprintf( " AND %s ", $strCachingHostClause );

				

				$pQryFlushMaps = sql_query( $strQryFlushMaps, $cacheconn );



				// try to delete cached file on all servers...

				// ------------------------------------------------------------

				while( list($key,$webServerName) = each($webServers) ) {



					if (!get_cfg_var("safe_mode"))

						set_time_limit(300);



					$deleteCacheURL = sprintf( "http://%s/index.php?page=events/event51&cacheFileName=%s", $webServerName, urlencode($cacheFileName) );

					$null = @file( $deleteCacheURL );

					printf("<br>Deleting cache file: %s, on server: %s <!-- %s -->\n",$cacheFileName,$webServerName,$deleteCacheURL);

					flush();

				}



				// --------------------------------------------------

				// All done

				// --------------------------------------------------

				echo "<p>Cache refresh complete.";

				exit;

			}



			// --------------------------------------------------

			// Try to get page from local disk cache

			// --------------------------------------------------

			$dGetFromSQL = 1;



			if( is_file($cachePath . $cacheFileName) ) {



				$ExistingMaps_row = unserialize(implode("",file($cachePath . $cacheFileName)));

				$siteInformation[] = "Reading cache file: ".$cachePath . $cacheFileName;



				if( is_object( $ExistingMaps_row ) ) {

					$ExistingMaps_row->nowTimeStamp = time();

					$dGetFromSQL = 0;



					if( time()-filemtime($cachePath . $cacheFileName) > 600 )

						$dGetFromSQL = 1;



					if( $ExistingMaps_row->cacheTimeStamp + $Timeout < time() )

						$dGetFromSQL = 1;



				}

			}



			if( $dGetFromSQL ) {

				// --------------------------------------------------

				// build sql for existing maps query

				// --------------------------------------------------

				$strSQLGetExistingMaps =

					"SELECT id, baseURL, UNIX_TIMESTAMP(sourceTimeStamp) AS sourceTimeStamp, UNIX_TIMESTAMP(cacheTimeStamp) AS cacheTimeStamp, cachingHost, pageText, UNIX_TIMESTAMP(newcacheTimeStamp) AS newcacheTimeStamp, UNIX_TIMESTAMP(NOW()) AS nowTimeStamp " .

					"  FROM cache_log " .

					" WHERE sourcePath = '" . addslashes( $strPath ) . "' " .

					"   AND baseURL = '" . addslashes( $strBaseURL ) . "' " .

					"   AND ". $strCachingHostClause;



				// --------------------------------------------------

				// Check for existing mapping

				// --------------------------------------------------

				if( $pQryGetExistingMaps = sql_query( $strSQLGetExistingMaps, $cacheconn ) ) {



					// --------------------------------------------------

					// Check what to display

					// --------------------------------------------------

					if( ! sql_num_rows( $pQryGetExistingMaps ) ) {

						$bDspCachedCopy = 0;

					} else {

						$ExistingMaps_row = sql_fetch_object( $pQryGetExistingMaps );

						// uncompress pageText

						$ExistingMaps_row->pageText = gzuncompress($ExistingMaps_row->pageText);

					}

				}

			}



			if( is_object( $ExistingMaps_row ) && $bDspCachedCopy) {

				

				// --------------------------------------------------

				// Check timeout parameter if needed

				// --------------------------------------------------

				if( ! $bNeedTimeOut ) {

					if( isset( $Timeout ) ) {

						

						$cacheStampLag  = $ExistingMaps_row->nowTimeStamp - $ExistingMaps_row->newcacheTimeStamp;

						$NewCompareDate = $Timeout + 60;		// adding one minute

						

						if( $ExistingMaps_row->cacheTimeStamp < $NewCompareDate &&

						    $cacheStampLag > $MaxCacheLag ) {

							$bNeedTimeOut = TRUE;

							$bDspCachedCopy = 0;

						}

					}

				}

				

				// --------------------------------------------------

				// Timeout if needed

				// --------------------------------------------------

				if( $bNeedTimeOut ) {

					$strQryUpdateMap = 

						sprintf( " UPDATE cache_log SET newcacheTimeStamp = NOW() " ) .

						sprintf( " WHERE sourcePath = '%s' ", addslashes( $strPath ) ) .

						sprintf( " AND baseURL      = '%s' ", addslashes( $strBaseURL ) ) .

						sprintf( " AND %s ", $strCachingHostClause );

					

					// will trap error, but not handle it.  no reason to.

					// failed query will only increase race condition

					$pQryUpdateMap = sql_query( $strQryUpdateMap, $cacheconn );

				}

			}



			// Don't cache externally for more than 1 hour (for caching proxies, etc).

			header(sprintf("Expires: %s GMT",date("r",time()+(60*60))));



			// --------------------------------------------------

			// Got a mapping?

			// --------------------------------------------------

			if( ! $bDspCachedCopy ) {

				

				// --------------------------------------------------

				// No, build request string

				// --------------------------------------------------

				if( $QUERY_STRING == "" )

					$strURI = $SCRIPT_NAME . "?PHPNoCache=TRUE";

				else

					$strURI = $SCRIPT_NAME . "?" . $QUERY_STRING . "&PHPNoCache=TRUE";

				

				$strURL = $Protocol . $HTTP_HOST . $strURI;



				// --------------------------------------------------

				// Retrieve the results

				// port option not available thru ftp

				// --------------------------------------------------

				$strPageText;

				$strErrorMesg;

				$headers_done; // boolean to know when to start saving html.



				// taking this out due to problems when domains resolve to cluster device.

				//$bolSuccessfulGet = php_http( $strURL, $strPageText, $strErrorMesg );



				// always caching from localhost...

				// if the server is initially handling the request, then it itself

				// must be able to handle the cache request, right?

				$socket_pointer = fsockopen ("127.0.0.1", 80, $errno, $errstr, 30);

				if (!$socket_pointer) {

					echo "Error getting socket pointer: $errstr ($errno)<br>\n";

					$strPageText = "Connection Failure";

				} else {

					fputs ($socket_pointer, SPRINTF("GET %s HTTP/1.0\r\nHost: %s\r\n\r\n",$strURI,$HTTP_HOST));

					while (!feof($socket_pointer)) {

						$temp_string = fgets ($socket_pointer,128);



						// only start saving after the first blank line

						if($headers_done == 0 && strlen(trim($temp_string)) == 0)

							$headers_done = 1;



						if($headers_done == 1)

							$strPageText .= $temp_string;



					}

					fclose ($socket_pointer);

				}



				// remove double tabs

				// --------------------------------------------------

				while (ereg("\t\t", $strPageText))

					$strPageText = str_replace("\t\t", "\t", $strPageText);



				// remove double spaces

				// --------------------------------------------------

				while (ereg("  ", $strPageText))

					$strPageText = str_replace("  ", " ", $strPageText);



				// remove wasted leading tabs

				// --------------------------------------------------

				while (ereg("\n\t", $strPageText))

					$strPageText = str_replace("\n\t", "\n", $strPageText);



				// remove wasted leading spaces

				// --------------------------------------------------

				while (ereg("\n ", $strPageText))

					$strPageText = str_replace("\n ", "\n", $strPageText);



				// remove double new lines

				// --------------------------------------------------

				while (ereg("\n\n", $strPageText))

					$strPageText = str_replace("\n\n", "\n", $strPageText);



				// change carriage returns/new lines to chr(10)

				// --------------------------------------------------

				while (ereg("\r\n", $strPageText))

					$strPageText = str_replace("\r\n", "\n", $strPageText);



				$strNotRegistered = strtolower( "The version of the software you are using is not registered for this domain" );

				

				if( ereg( strtolower( "Error Diagnostic Information" ), strtolower( $strPageText ) )

					|| ereg( $strNotRegistered, strtolower( $strPageText ) )

					|| ereg( strtolower( "Connection Failure" ), strtolower( $strPageText ) )

					|| ereg( strtolower( "HTTP Error 404" ), strtolower( $strPageText ) )

					|| ereg( strtolower( "<b>Warning</b>" ), strtolower( $strPageText ) )

					|| ereg( strtolower( "Fatal error" ), strtolower( $strPageText ) )

					|| strlen( $strPageText ) < 100 ) {

					

					// --------------------------------------------------

					// Don't cache the file if an error occurs

					// --------------------------------------------------

					$siteInformation[] = "File contains error... page will not be cached.";

				} else {

					// --------------------------------------------------

					// no, the result does not contain any errors.

					// --------------------------------------------------

					$strCachedFile = $strPageText;

					

					// --------------------------------------------------

					// Write to cache & Timestamp it

					// --------------------------------------------------

					// *** NOT CHECKING SOURCE TIMESTAMP ACROSS SERVERS ***

					//$iSourceTimeStamp = filemtime( $strPathTranslated );

					//$tsSourceTimeStamp	= date( "Y-m-d H:i:s", $iSourceTimeStamp );

					

					$tsSourceTimeStamp   = date( "Y-m-d H:i:s", time() );

					$tsCacheTimeStamp    = date( "Y-m-d H:i:s", time() );

					$strCachingHost      = $HTTP_HOST;

					

					// deleting cache record from cache log

					$strQryDelMap = 

						sprintf( " DELETE FROM cache_log " ) .

						sprintf( "  WHERE sourcePath = '%s' ", addslashes( $strPath ) ) .

						sprintf( "    AND baseURL    = '%s' ", addslashes( $strBaseURL ) ) .

						sprintf( "    AND %s ", $strCachingHostClause );

					

					$pQryDelMap = sql_query( $strQryDelMap, $cacheconn );



					// try to delete cached file on disk...

					// ------------------------------------------------------------

					@unlink($cachePath . $cacheFileName);

					

					// insert new copy

					$strQryInsCache =

						"INSERT INTO cache_log " .

						"  (baseURL, sourceTimeStamp, cacheTimeStamp, cachingHost, pageText, sourcePath) " .

						"VALUES (" .

						" '" . addslashes( $strBaseURL ) . "', " .

						" '" . addslashes( $tsSourceTimeStamp ) . "', " .

						" '" . addslashes( $tsCacheTimeStamp ) . "', " .

						" '" . addslashes( $strCachingHost ) . "', " .

						" '" . addslashes( gzcompress($strCachedFile) ) . "', " .

						" '" . addslashes( $strPath ) . "' " .

						")";

						

					$pQryInsCache = sql_query( $strQryInsCache, $cacheconn );



				}

				

				// --------------------------------------------------

				// Output results

				// --------------------------------------------------

				echo $strPageText;

			} else {

				// --------------------------------------------------

				// Yes, Output it.  But first...

				// --------------------------------------------------

				

				$strPageText = $ExistingMaps_row->pageText;

				

				// ------------------------------------------------------------

				// If an admin is viewing this page, show refresh link.

				// ------------------------------------------------------------

				if( isset( $HTTP_COOKIE_VARS['ADMIN'] ) || isset($HTTP_COOKIE_VARS["debug"]) )

					printf( "<a href=\"%s?%s&cache_flush=1\"><b>Admin: Re-cache this page.</b></a>\n\n", $SCRIPT_NAME, $QUERY_STRING );

				

				// ------------------------------------------------------------

				// convert URLs of images referring back to same server to Akamai

				// ARLs to cache image content on the Akamai cache network...

				// if not  in secure mode

				// ------------------------------------------------------------

				if( $HTTP_SERVER_VARS['HTTPS'] != "on" &&

				    ! ereg( "192.168.1.", $HTTP_SERVER_VARS['REMOTE_ADDR'] ) &&

				    ! ereg( "66.196.13.",   $HTTP_SERVER_VARS['REMOTE_ADDR'] ) ) {

					

					$strPageText = str_replace( " SRC=\"/", sprintf(" src=\"%s",AKAMAI_ARL), $strPageText );

					$strPageText = str_replace( " src=\"/", sprintf(" src=\"%s",AKAMAI_ARL), $strPageText );



					$strPageText = str_replace( " SRC=/",     sprintf(" src=%s",AKAMAI_ARL), $strPageText );

					$strPageText = str_replace( " src=/",     sprintf(" src=%s",AKAMAI_ARL), $strPageText );



					$strPageText = str_replace( " SRC='/",   sprintf(" src='%s",AKAMAI_ARL), $strPageText );

					$strPageText = str_replace( " src='/",   sprintf(" src='%s",AKAMAI_ARL), $strPageText );

				}

				

				// ------------------------------------------------------------

				// // end of Akamai step

				// ------------------------------------------------------------

				

				// ------------------------------------------------------------

				// Now, Output it.

				// ------------------------------------------------------------

				echo $strPageText;





				if($dGetFromSQL) {

					@unlink($cachePath . $cacheFileName);



					// save cache page to local file...

					if($fp = @fopen ($cachePath . $cacheFileName, "w")) {

						$siteInformation[] = "Writing cache file: ".$cachePath . $cacheFileName;

						$null = fwrite ( $fp, serialize($ExistingMaps_row));

						fclose ($fp);

					}

				}

			}



			$aRemote_addr = explode(".",$HTTP_SERVER_VARS["REMOTE_ADDR"]);



			if( 	$aRemote_addr[0] == 4

				&& $aRemote_addr[1] == 19

				&& $aRemote_addr[2] == 95

				&& ( $aRemote_addr[3] == 11 || $aRemote_addr[3] > 250 )

				&& (isset($sqlQueries) || isset($siteInformation))

				&& isset($HTTP_COOKIE_VARS["debug"])

				) {





				if($starttime) {

					$endtime = getmicrotime();  /* end: show page execution time */

					$timedif = abs($endtime - $starttime);



					$siteInformation[] = sprintf("Script generation time: %.0f milliseconds", intval($timedif*1000));

				}



				printf("\n<pre>\n");



				var_dump($siteInformation);

				var_dump($sqlQueries);



				printf("\n</pre>\n");

			}

			// debugging stuff: echo "<!-- \n\nstrSQLGetExistingMaps $strSQLGetExistingMaps -->\n\n";

			// --------------------------------------------------

			// Stop processing at this point

			// --------------------------------------------------

			exit;

			

		} else {

			// --------------------------------------------------

			// No, this must be a request to build results.

			// Make sure we don't get debug output

			// --------------------------------------------------

			return 1;

		}

	}

?>