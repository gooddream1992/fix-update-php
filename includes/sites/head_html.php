<?php 

global $objSession;
global $h1;

if(is_object($objSession) && $objSession->IsLoggedIn()) {
	$header_image_src = '/images/header_logout.jpg';
} else {
	$header_image_src = '/images/header_login.jpg';
}

?>

<div class="main">
<?php 
/* 
 * dign.it komideals chartbeat stats 
 * (requires part in footer)
 * 
<script type="text/javascript">var _sf_startpt=(new Date()).getTime();</script>
 * */ ?>

<?php 
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

  <div class="header">
    <div class="search">
<?php 

if(is_object($objSession) && $objSession->IsLoggedIn()) {
	printf("<p><strong>Welcome back, %s! (%d)</strong>", strlen($objSession->getUser()->getFname())?$objSession->getUser()->getFname():$objSession->getUser()->getEmail(), $objSession->getUser()->getDefaultBusiness()->getId());
//	echo ' -- <a class="tab" href="/select.htm" ><img class="icon" src="/images/img/b_home.png" width="16" height="16" alt=" Control Panel " /> Control Panel </a>';
	if ($objSession->getUser()->isWebSiteAdmin()) {
		printf(" | <a href=\"/sm_reports.htm\">Admin</a>");
	}
	printf(" | <a href=/login.htm?logout=%s>Logout</a>", $objSession->GetSID());
	echo "</p>";
} else {
	printf("<p><a href=\"/login.htm\">Login</a> | ");
	printf("<a href=\"/get_started.htm\">Create account.</a></p>");
}

?>
    </div>
    <div class="clr"></div>
    <div class="logo"><a href="/"><img src="/images/dealn_it/logo.png" width="228" height="116" border="0" alt="Dealn.It - Daily Deals Aggregation, Distribution, and Analytics" /></a></div>
    <div class="menu">
    <?php if(is_object($objSession) && $objSession->IsLoggedIn()) {?>
      <ul>
        <li><a href="/select.htm"            <?php echo (PAGE_C == 'select')?'class="active"':'';?>><span>Control Panel</span></a></li>
        <li><a href="/select-account.htm"    <?php echo (PAGE_C == 'select/account' || PAGE_PARENT_C == 'account')?'class="active"':'';?>><span>Account Settings</span></a></li>
        <li><a href="/select-accounting-payment_history.htm" <?php echo (PAGE_C == 'select/accounting' || PAGE_PARENT_C == 'accounting')?'class="active"':'';?>><span>Payments</span></a></li>
        <li><a href="/select-download.htm"   <?php echo (PAGE_C == 'select/download' || PAGE_PARENT_C == 'download')?'class="active"':'';?>><span>Download</span></a></li>
      </ul>
    <?php } else { ?>
      <ul>
        <li><a href="/"                    <?php echo (PAGE_C == 'index')?'class="active"':'';?>><span>Home</span></a></li>
        <li><a href="/about-how_it_works.htm"        <?php echo (PAGE_C == 'about/faq')?'class="active"':'';?>><span>How It Works</span></a></li>
        <li><a href="/get_started.htm"     <?php echo (PAGE_C == 'get_started')?'class="active"':'';?>><span>Sign-Up</span></a></li>
        <li><a href="/about-contact_us.htm" <?php echo (PAGE_C == 'about/contact_us')?'class="active"':'';?>><span>Contact</span></a></li>
      </ul>
    <?php } ?>
      <div class="clr"></div>
    </div>
    <div class="clr"></div>
  </div>

  <div id="slider">
    <div class="clr" style="padding:20px 0 0 0;"></div>
    <div class="slide_blog_bg">
      <h3><?php echo $h1; ?></h3>
      <div class="clr"></div>
    </div>
    <div class="clr"></div>
    <!-- end #slideshow -->
    <div class="clr"></div>
  </div>
  <div class="clr"></div>
  
  <div class="body">
    <div class="body_resize">
    
      <div class="right">
    
    