<?php 

global $objSession;

$navSpacerImageWidth = 8;

if(is_object($objSession) && $objSession->IsLoggedIn()) {
	$header_image_src = '/images/header_logout.jpg';
} else {
	$header_image_src = '/images/header_login.jpg';
}

?>

		<div align="center">
			<div style="width:985px;background-color:#eeeeee;border:1px solid #999999;">
<?php /*				<span align="center"><a href="/"><img style="padding:15px;" src="/images/komideals/komideals_logo.png"></a></span>
*/ ?><span style="font-size: 24px;"><a href="/">Dealn.it</a></span>

