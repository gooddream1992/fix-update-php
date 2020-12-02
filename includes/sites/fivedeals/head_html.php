<?php 

global $objSession;
global $h1;
global $arrNavCategories;
global $arrNavFiveDeals;
global $arrNavRegions;
global $rssLink;

if (strlen($objSession->GetValue('session_form_information'))) {
	// output info:
	?>
	<a href="javascript:;" onclick="" style="font-size:12px; color:#000000;" rel=nofollow><div 
	id="tip" style="text-align:left; background-color:#F9F2D8" 
	onmouseover="this.style.backgroundColor='#3169B6';this.style.color = '#FFFFFF';" 
	onmouseout="this.style.backgroundColor='#F9F2D8';this.style.color = '#000000';"><label 
	id='idea' >&nbsp;</label><?php echo $objSession->GetValue('session_form_information');?></div></a>
	
	<?php 
//	JS_alert($objSession->GetValue('session_form_information'));
//	printf("<div class=\"form_information\">%s</div>", $objSession->GetValue('session_form_information'));
	$objSession->SetSessionVar('session_form_information', '');
}

?>
<div id="container">
  <div id="header">

    <div id="logo">
      <h1><a href="/">FiveDeals</a></h1>
      <p>Your Daily Deal Explorer</p>
      <br class="clear" />
    </div>
    <div class="info">
      <ul>

<?php 

//if(is_object($objSession) && $objSession->IsLoggedIn()) {
//	printf("<li><strong>Welcome back, %s! (%d)</strong></li>\n", strlen($objSession->getUser()->getFname())?$objSession->getUser()->getFname():$objSession->getUser()->getEmail(), $objSession->getUser()->getDefaultBusiness()->getId());
////	echo ' -- <a class="tab" href="/select.htm" ><img class="icon" src="/images/img/b_home.png" width="16" height="16" alt=" Control Panel " /> Control Panel </a>';
//	if ($objSession->getUser()->isWebSiteAdmin()) {
//		printf("<li> | </li>\n");
//		printf("<li><a href=\"/sm_reports.htm\">Admin</a></li>\n");
//	}
//	printf("<li> | </li>\n");
//	printf("<li><a href=/login.htm?logout=%s>Logout</a>\n", $objSession->GetSID());
//} else {
//	printf("<li><a href=\"/login.htm\">Login</a></li>\n");
//	printf("<li> | </li>\n");
//	printf("<li><a href=\"/get_started.htm\">Create account</a></li>\n");
//}

?>
      </ul>
    </div>
    <ul class="topnav">
      <li<?php echo (PAGE_C == 'index')?' class="active"':''; ?>><a href="/">Home</a></li>

      <li><a href="/category_list/all">Categories</a>
        <ul>
        <?php
        
        $arrNavCategories = array();
        $arrNavCategories['wine'] = 'Wine';
        $arrNavCategories['fitness'] = 'Fitness';
        $arrNavCategories['dentistry'] = 'Dentistry';
        $arrNavCategories['beauty-and-cosmetic-services'] = 'Beauty and Cosmetic Services';
        $arrNavCategories['golf'] = 'Golf';
        $arrNavCategories['chocolate'] = 'Chocolate';
        
        foreach ($arrNavCategories as $key => $value) {
        	printf("<li><a href=\"/category/%s\">%s</a></li>\n", $key, $value);
        }
        
        ?>
          <li><a href="/category_list/all">Show All Categories</a></li>
        </ul>
      </li>
      <?php  /*
      <li><a href="/">DropDown</a>
        <ul>
          <li><a href="/">Link 1</a></li>
          <li><a href="/">Link 2Link 2Link 2Link 2Link 2Link 2Link 2Link 2Link 2Link 2Link 2Link 2</a></li>
          <li><a href="/">Link 3</a></li>
        </ul>
      </li>
      */ ?>
      <li><a href="/region_list/all">Regions</a>
        <ul>
        <?php 
        
        $arrNavRegions = array();
        $arrNavRegions['san-francisco'] = 'San Francisco';
        $arrNavRegions['los-angeles'] = 'Los Angeles';
        $arrNavRegions['new-york-city'] = 'New York';
        $arrNavRegions['atlanta'] = 'Atlanta';
        $arrNavRegions['boston'] = 'Boston';
        $arrNavRegions['seattle'] = 'Seattle';
        
        $arrLocalRegions = DealFeedQuery::getDivisionsByRemoteAddr($_SERVER['REMOTE_ADDR'], 5);
//        vdump($arrLocalRegions);
        foreach ($arrLocalRegions as $key => $arrLR) {
        	$arrNavRegions[$arrLR['slug']] = sprintf("Local: %s", $arrLR['name']);
        }
        
        foreach ($arrNavRegions as $key => $value) {
        	printf("<li><a href=\"/region/%s\">%s</a></li>\n", $key, $value);
        }
        
        
        ?>
          <li><a href="/region_list/all">Show All Regions</a></li>
        </ul>
      </li>
      <li><a href="/region_list/all">Local Deals</a>
        <ul>
      <?php 
      $countArrDeals = 0;
      $dDealsToShow = 5;
      $collDealFeed = DealFeedQuery::retrieveByRemoteAddr($_SERVER['REMOTE_ADDR'], $dDealsToShow);
      if ($collDealFeed) foreach ($collDealFeed as $objDealFeed) {
      	printf("<li><a href=\"/deal/%d/%s\" title=\"%s Region\">%s</a></li>\n"
      		, $objDealFeed->getId()
      		, $objDealFeed->getPermalink()
      		, $objDealFeed->getDealFeedDivision()->getDivisionName()
      		, $objDealFeed->getTitle()
      		);
      }
      
      ?>
        </ul>
      </li>
      <li><a href="/region_list/all">Most Viewed Deals</a>
        <ul>
      <?php 
      $countArrDeals = 0;
      $dDealsToShow = 5;
      $arrDeals = DealFeedClickQuery::getClicksGroupedByDealFeed(0, 0, 1, $dDealsToShow);
      if ($arrDeals) foreach ($arrDeals as $objDeal) {
      	printf("<li><a href=\"/deal/%d/%s\" title=\"%s Region (%d)\">%s</a></li>\n"
      		, $objDeal->objDealFeed->getId()
      		, $objDeal->objDealFeed->getPermalink()
      		, $objDeal->objDealFeed->getDealFeedDivision()->getDivisionName()
      		, $objDeal->cntid
      		, $objDeal->objDealFeed->getTitle()
      		);
      }
      
      ?>
        </ul>
      </li>
      <li><a href="/region_list/all">FiveDeals</a>
        <ul>
        <?php 
        
        $arrNavFiveDeals = array();
        $arrNavFiveDeals['/soon/#subemail'] = 'Subscribe Email';
        $arrNavFiveDeals['/soon/#submobile'] = 'Subscribe Mobile';
        $arrNavFiveDeals['/soon/#twitter'] = 'Twitter';
        $arrNavFiveDeals['/soon/#facebook'] = 'Facebook';
        $arrNavFiveDeals['http://'. $_SERVER['HTTP_HOST'] .'/index/rss'] = 'RSS';
        $arrNavFiveDeals['http://dealn.it/'] = 'Affiliates';
        
        foreach ($arrNavFiveDeals as $key => $value) {
        	printf("<li><a href=\"%s\">%s</a></li>\n", $key, $value);
        }
        
        ?>
        </ul>
      </li>
    </ul>
  </div>
  <div id="breadcrumb">
    <ul>
      <li class="first"><?php echo $h1; ?></li>
    </ul>
  </div>
  
  <div id="wrapper">
    <div id="content">
    
    