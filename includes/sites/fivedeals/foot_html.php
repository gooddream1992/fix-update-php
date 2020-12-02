<?php 

global $pagesdir;
global $bUseSidebar;
global $arrNavCategories;
global $arrNavFiveDeals;
global $arrNavRegions;
global $rssLink;

?>

    </div>
    <div id="column">

      <div class="subnav">
      <?php 
      
		if( file_exists($pagesdir . PAGE_C . '/sidebar.php') ) {
			include_once $pagesdir . PAGE_C . '/sidebar.php';
		}
		if( file_exists($pagesdir . PAGE_PARENT_C . '/sidebar.php') ) {
			include_once $pagesdir . PAGE_PARENT_C . '/sidebar.php';
		}
		if( file_exists($pagesdir . PAGE_ROOT_C . '/sidebar.php') ) {
			include_once $pagesdir . PAGE_ROOT_C . '/sidebar.php';
		}
		if( file_exists($pagesdir . 'index' . '/sidebar.php') ) {
			include_once $pagesdir . 'index' . '/sidebar.php';
		}

		if (strlen($rssLink)) {
			?><p><a href="<?php echo $rssLink; ?>"><img src="/images/icons/rss_button.gif" border="0" align="left"> &nbsp;Follow this page</a><br></p>
			<?php 
			
		}
		
		$rssLink = 'http://'.$_SERVER['HTTP_HOST'].'/index/rss';
		
			?><p><a href="<?php echo $rssLink; ?>"><img src="/images/icons/rss_button.gif" border="0" align="left"> &nbsp;Follow your local deals</a><br></p>
			<?php 

      ?>
      </div>
      <?php  /*
      <div class="holder">
        <h2 class="title">Options</h2>
        <p><input type="checkbox" name="test" value="test">Test</p>
        <p><input type="checkbox" name="test" value="test">Test</p>
        <p><input type="checkbox" name="test" value="test">Test</p>
        <p><input type="checkbox" name="test" value="test">Test</p>
        <p><input type="checkbox" name="test" value="test">Test</p>

      </div> */ ?>
    </div>
    <br class="clear" />
  </div>
  <!-- END ALL -->
  <div id="footer">
    <div class="footbox">
      <h2>Categories</h2>
      <ul>
        <?php
	    
        foreach ($arrNavCategories as $key => $value) {
        	printf("<li><a href=\"/category/%s\">%s</a></li>\n", $key, $value);
        }
        
        ?>
        <li class="last"><a href="/category_list/all">Show All Categories</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Regions</h2>
      <ul>
        <?php 
        
        foreach ($arrNavRegions as $key => $value) {
        	printf("<li><a href=\"/region/%s\">%s</a></li>\n", $key, $value);
        }
        
        
        ?>
        <li class="last"><a href="/region_list/all">Show All Regions</a></li>
      </ul>

    </div>
    <div class="footbox">
      <h2>Local Deals</h2>
      <ul>
      <?php 
      $countArrDeals = 0;
      $dDealsToShow = 5;
      $collDealFeed = DealFeedQuery::retrieveByRemoteAddr($_SERVER['REMOTE_ADDR'], $dDealsToShow);
      if ($collDealFeed) foreach ($collDealFeed as $objDealFeed) {
      	$strLastClass = '';
      	if (++$countArrDeals == $dDealsToShow) $strLastClass = ' class="last"';
      	printf("<li%s><a href=\"/deal/%d/%s\" title=\"%s Region\">%s</a></li>\n"
      		, $strLastClass
      		, $objDealFeed->getId()
      		, $objDealFeed->getPermalink()
      		, $objDealFeed->getDealFeedDivision()->getDivisionName()
      		, $objDealFeed->getTitle()
      		);
      }
      
      ?>
      </ul>
    </div>
    <div class="footbox">
      <h2>Most Viewed Deals</h2>
      <ul>
      <?php 
      $count = 0;
      $dDealsToShow = 5;
      $arrDeals = DealFeedClickQuery::getClicksGroupedByDealFeed(0, 0, 1, $dDealsToShow);
      if ($arrDeals) foreach ($arrDeals as $objDeal) {
      	$strLastClass = '';
      	if (++$count == $dDealsToShow) $strLastClass = ' class="last"';
      	printf("<li%s><a href=\"/deal/%d/%s\" title=\"%s Region\">%s</a></li>\n"
      		, $strLastClass
      		, $objDeal->objDealFeed->getId()
      		, $objDeal->objDealFeed->getPermalink()
      		, $objDeal->objDealFeed->getDealFeedDivision()->getDivisionName()
      		, $objDeal->objDealFeed->getTitle()
      		);
      }
      
      ?>
      </ul>
    </div>
    <div class="footbox last">
      <h2>FiveDeals</h2>
      <ul>
      <?php 
      
      $count = 0;
      foreach ($arrNavFiveDeals as $key => $value) {
      	$strLastClass = '';
      	if (++$count == count($arrNavFiveDeals)) $strLastClass = ' class="last"';
      	printf("<li%s><a href=\"%s\">%s</a></li>\n", $strLastClass, $key, $value);
      }
        
      ?>
      </ul>
    </div>
    <br class="clear" />
  </div>
  <div id="copyright">
    <p class="fl_left">Copyright &copy; <?php echo date("Y");?> - All Rights Reserved - <a href="/">FiveDeals.co</a></p>
    <p class="fl_right">(<?=floor(CheckPointTime('footer'));?>)</p>
    <br class="clear" />
  </div>
</div>
<?php 

if(V_C == "154236"){?>
<SCRIPT FOR=window EVENT=onunload>
    var posX = event.clientX;
    var posY = event.clientY;
    var URL = document.referrer;
    if ( posY < 0 )
    {
            nStart = URL.indexOf("?");
            nEnd = URL.length;
            if ( nStart > 0 )
            {
                Domain = escape(URL.substring(0,nStart));
                Parameter = URL.substring(nStart, nEnd) + "&" + "SMOrigDomain=" + Domain;
                location.href = "redirect.php" + Parameter;
            }
    }
</SCRIPT>
<?

}

