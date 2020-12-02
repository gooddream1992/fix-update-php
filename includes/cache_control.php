<?
	
	// ------------------------------------------------------------
	// Global Caching Control:
	// 
	// Variables to deal with:
	// 
	// current_page = 
	//   categories
	//   completed
	//   current
	//   ending
	//   featured
	//   going
	//   index
	//   new
	//   registration
	//   search
	//   search_results
	//   static
	// 
	// define variable: cache_flush
	// to flush the current cache directory.
	// 
	// requires:
	//   php_cache.php
	// ------------------------------------------------------------
	
	// ------------------------------------------------------------
	// config
	// ------------------------------------------------------------
	
	// cache time intervals (in minutes)
	$CacheIntervals = array(
		"test"          => 2,
		"Categories"    => 120,
		"Completed"     => 120,
		"Current"       => 10,
		"Ending"        => 10,
		"Going"         => 10,
		"Featured"      => 10,
		"Index"         => 60,
		"New"           => 10,
		"Registration"  => 120,
		"Search"        => 60,
		"SearchResults" => 120,
		"Static"        => 1440
	);
	
	// prerequisites
	include_once( sprintf( "%sphp_cache.php", $functionsdir ) );
	
	// ------------------------------------------------------------
	// run caching
	// ------------------------------------------------------------
	
	if( eregi( "^dev\.", $HTTP_HOST ) ||
	    eregi( "^bb0\.", $HTTP_HOST ) ) {
		
		// don't cache on this host
		// ------------------------------------------------------------
		$strCaching = "no";
	}
	
	if( ! isset( $strCaching ) )
		$strCaching = "yes";
	
	if( $strCaching != "no" &&
	    ! isset( $strCacheComplete ) ) {
		
		// set a variable so we don't run this cache code more than once...
		// ------------------------------------------------------------
		$strCacheComplete = true;
		
		// removed code here that reset Going interval to url value.
		// doesn't appear to be in use.  legacy code.
		// ------------------------------------------------------------
		
		// continue with cache setup
		// ------------------------------------------------------------
		if( ! isset( $current_page ) )
			$current_page = "undefined";
		
		switch( $current_page ) {
			case "categories":
				$cache_control    = true;
				$TmpCacheDuration = $CacheIntervals['Categories'];
				break;
			case "completed":
				$cache_control    = true;
				$TmpCacheDuration = $CacheIntervals['Completed'];
				break;
			case "current":
				$cache_control    = true;
				$TmpCacheDuration = $CacheIntervals['Current'];
				break;
			case "ending":
				$cache_control    = true;
				$TmpCacheDuration = $CacheIntervals['Ending'];
				break;
			case "featured":
				$cache_control    = true;
				$TmpCacheDuration = $CacheIntervals['Featured'];
				break;
			case "going":
				$cache_control    = true;
				$TmpCacheDuration = $CacheIntervals['Going'];
				break;
			case "index":
				$cache_control    = true;
				$TmpCacheDuration = $CacheIntervals['Index'];
				break;
			case "new":
				$cache_control    = true;
				$TmpCacheDuration = $CacheIntervals['New'];
				break;
			case "registration":
				$cache_control    = true;
				$TmpCacheDuration = $CacheIntervals['Registration'];
				break;
			case "search":
				$cache_control    = true;
				$TmpCacheDuration = $CacheIntervals['Search'];
				break;
			case "search_results":
				$cache_control    = true;
				$TmpCacheDuration = $CacheIntervals['SearchResults'];
				break;
			case "static":
				$cache_control    = true;
				$TmpCacheDuration = $CacheIntervals['Static'];
				break;
			case "test":
				$cache_control    = true;
				$TmpCacheDuration = $CacheIntervals['test'];
				break;
			default:
				$cache_control    = false;
		}
		
		if( ! isset( $cache_control ) )
			$cache_control = false;
		
		// run caching function
		// ------------------------------------------------------------
		if( $cache_control ) {
			// calc cache duration into seconds & setup for php_cache()
			// negative seconds.  time in past compared against cache timestamp.
			$cache_duration = 0 - ($TmpCacheDuration * 60);
			
			if( isset( $cache_flush ) ) {
				// flush cached file
				$ExpireURL = sprintf("%s?%s", basename($SCRIPT_NAME), $QUERY_STRING);
				
				php_cache( $cache_duration, "flush", "http://", "", $ExpireURL );
				// only thing needed originally was ExpireURL, but php doesn't allow you to
				// override default args unless you do them from 1st to last.  see php doc.
				
			} else {
				// run standard
				$Timeout = time() + $cache_duration;
				php_cache( $Timeout );
			}
		}
	}
	
?>
