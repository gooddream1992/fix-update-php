
<!-- Google Code for Lead Conversion Page -->
<script language="JavaScript" type="text/javascript">
<!--
var google_conversion_id = 1067833719;
var google_conversion_language = "en_US";
var google_conversion_format = "1";
var google_conversion_color = "FFFFFF"; 
if (1) {
	var google_conversion_value = 1;
}
var google_conversion_label = "RTConv";
//-->
</script>
<script language="JavaScript"
src="https://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<img height=1 width=1 border=0
src="https://www.googleadservices.com/pagead/conversion/1067833719/?value=1&label=RTConv&script=0">
</noscript>

<SCRIPT LANGUAGE="JavaScript">
<!-- Overture Services Inc. 07/15/2003
var cc_tagVersion = "1.0";
var cc_accountID = "1268555196";
var cc_marketID =  "0";
var cc_protocol="http";
var cc_subdomain = "convctr";
if(location.protocol == "https:") {
	cc_protocol="https";
	cc_subdomain="convctrs";
}
var cc_queryStr = "?" + "ver=" + cc_tagVersion + "&aID=" + cc_accountID + "&mkt=" + cc_marketID +"&ref=" + escape(document.referrer);
var cc_imageUrl = cc_protocol + "://" + cc_subdomain + ".overture.com/images/cc/cc.gif" + cc_queryStr;
var cc_imageObject = new Image();
cc_imageObject.src = cc_imageUrl;
// -->
</SCRIPT>

<form name="billing" action="<?=$_SERVER['SCRIPT_NAME'];?>" method="POST">
<input name="page" value="<?= PAGE_C ?>" type="hidden">

<span class="mainText"><?=tabs_get_started(PAGE_C);?></span>

<?=$PaymentMethod->getPaymentMethodForm();?>

</form>

