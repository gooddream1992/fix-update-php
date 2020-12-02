<?php 

global $objSession;
global $h1;

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
      <p>A Daily Deal Explorer</p>
      <br class="clear" />
    </div>
    <div class="info">
      <ul>

<?php 

if(is_object($objSession) && $objSession->IsLoggedIn()) {
	printf("<li><strong>Welcome back, %s! (%d)</strong></li>\n", strlen($objSession->getUser()->getFname())?$objSession->getUser()->getFname():$objSession->getUser()->getEmail(), $objSession->getUser()->getDefaultBusiness()->getId());
//	echo ' -- <a class="tab" href="/select.htm" ><img class="icon" src="/images/img/b_home.png" width="16" height="16" alt=" Control Panel " /> Control Panel </a>';
	if ($objSession->getUser()->isWebSiteAdmin()) {
		printf("<li> | </li>\n");
		printf("<li><a href=\"/sm_reports.htm\">Admin</a></li>\n");
	}
	printf("<li> | </li>\n");
	printf("<li><a href=/login.htm?logout=%s>Logout</a>\n", $objSession->GetSID());
} else {
	printf("<li><a href=\"/login.htm\">Login</a></li>\n");
	printf("<li> | </li>\n");
	printf("<li><a href=\"/get_started.htm\">Create account</a></li>\n");
}

?>
      </ul>
    </div>
    <ul class="topnav">
      <li<?php echo (PAGE_C == 'index')?' class="active"':''; ?>><a href="/">Home</a></li>
      <li<?php echo (PAGE_C == 'help' || PAGE_ROOT_C == 'help')?' class="active"':''; ?>><a href="/help.htm">Help</a></li>

      <li><a href="/">Full Width</a>
        <ul>
          <li><a href="/">Link 1</a></li>
        </ul>
      </li>
      <li><a href="/">DropDown</a>
        <ul>
          <li><a href="/">Link 1</a></li>
          <li><a href="/">Link 2Link 2Link 2Link 2Link 2Link 2Link 2Link 2Link 2Link 2Link 2Link 2</a></li>
          <li><a href="/">Link 3</a></li>
        </ul>
      </li>
      <li><a href="/">A Long Link Text</a></li>
    </ul>
  </div>
  <div id="breadcrumb">
    <ul>
      <li class="first"><?php echo $h1; ?></li>
    </ul>
  </div>
  
  <div id="wrapper">
    <div id="content">
    
    