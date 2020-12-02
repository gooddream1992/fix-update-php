<?php

$arrDoneDeals = array();
$strUniqueId = date("H:i:s");

require_once './functions/simplehtmldom/simple_html_dom.php';

define('LOG_FILENAME_C','/tmp/livingsocial_test');
write_app_log("starting test script...\n");


// correct output for deal at 9654-one-dozen-cupcakes
//$dealx = "a:24:{s:3:\"adr\";a:1:{i:0;a:5:{s:12:\"addressline1\";s:13:\"335 Park Road\";s:12:\"addressline2\";s:0:\"\";s:9:\"telephone\";s:12:\"860-586-8711\";s:8:\"locality\";s:23:\"West Hartford, CT 06119\";s:7:\"zipcode\";s:5:\"06119\";}}s:10:\"highlights\";a:0:{}s:10:\"fine_print\";a:4:{i:0;s:39:\"Limit 1 per person, additional as gifts\";i:1;s:41:\"Limit 1 voucher per person to redeem only\";i:2;s:21:\"Not valid on holidays\";i:3;s:46:\"PROMOTIONAL VALUE EXPIRES ON September 2, 2011\";}s:13:\"requested_url\";s:53:\"http://livingsocial.com/deals/9654-one-dozen-cupcakes\";s:16:\"deal_source_name\";s:16:\"LivingSocial.com\";s:13:\"deal_deadline\";s:0:\"\";s:14:\"deal_permalink\";s:23:\"9654-one-dozen-cupcakes\";s:14:\"deal_perma_url\";s:53:\"http://livingsocial.com/deals/9654-one-dozen-cupcakes\";s:6:\"amount\";s:2:\"10\";s:19:\"discount_percentage\";s:2:\"50\";s:5:\"value\";i:20;s:8:\"discount\";i:10;s:3:\"url\";s:53:\"http://livingsocial.com/deals/9654-one-dozen-cupcakes\";s:5:\"price\";s:2:\"10\";s:5:\"photo\";s:76:\"http://a3.ak.lscdn.net/imgs/433d0458-ddea-426f-b76e-650e17429a39/280_q60.jpg\";s:12:\"photo_medium\";s:76:\"http://a3.ak.lscdn.net/imgs/433d0458-ddea-426f-b76e-650e17429a39/200_q60.jpg\";s:11:\"photo_small\";s:76:\"http://a3.ak.lscdn.net/imgs/433d0458-ddea-426f-b76e-650e17429a39/124_q60.jpg\";s:13:\"control_title\";s:18:\"One Dozen Cupcakes\";s:13:\"email_subject\";s:18:\"One Dozen Cupcakes\";s:13:\"division_name\";s:8:\"Hartford\";s:11:\"description\";s:744:\"<p>Eat your heart out, Martha Stewart, because a Connecticut lady can be the hostess with the mostess without the apron. We've whipped up today's sweet deal for one dozen cupcakes for just \$10 (regularly \$20) at <a href=\"http://www.alittlesomethingbakery.com/\" target=\"_blank\">A Little Something Bakery</a>, West Hartford's family-run business of decadent desserts. With scrumptious frosted flavors such as red velvet, chocolate, and coconut, you can bring home a dozen made-from-scratch treats that demonstrate your domestic prowess without ever stepping into the kitchen. Everyone needs a little somethin' somethin' for the sweet tooth -- so turn off the oven and hop on this offer, because getting 50% off is truly the icing on the cake.</p>\";s:11:\"number_sold\";s:3:\"540\";s:12:\"company_name\";s:25:\"A Little Something Bakery\";s:8:\"comments\";a:0:{}}";
$dealx = "a:24:{s:3:\"adr\";a:1:{i:0;a:5:{s:12:\"addressline1\";s:13:\"335 Park Road\";s:12:\"addressline2\";s:0:\"\";s:9:\"telephone\";s:12:\"860-586-8711\";s:8:\"locality\";s:23:\"West Hartford, CT 06119\";s:7:\"zipcode\";s:5:\"06119\";}}s:10:\"highlights\";a:0:{}s:10:\"fine_print\";a:4:{i:0;s:39:\"Limit 1 per person, additional as gifts\";i:1;s:41:\"Limit 1 voucher per person to redeem only\";i:2;s:21:\"Not valid on holidays\";i:3;s:46:\"PROMOTIONAL VALUE EXPIRES ON September 2, 2011\";}s:13:\"requested_url\";s:53:\"http://livingsocial.com/deals/9654-one-dozen-cupcakes\";s:16:\"deal_source_name\";s:16:\"LivingSocial.com\";s:13:\"deal_deadline\";s:0:\"\";s:14:\"deal_permalink\";s:23:\"9654-one-dozen-cupcakes\";s:14:\"deal_perma_url\";s:53:\"http://livingsocial.com/deals/9654-one-dozen-cupcakes\";s:6:\"amount\";s:2:\"10\";s:19:\"discount_percentage\";s:2:\"50\";s:5:\"value\";i:20;s:8:\"discount\";i:10;s:3:\"url\";s:53:\"http://livingsocial.com/deals/9654-one-dozen-cupcakes\";s:5:\"price\";s:2:\"10\";s:5:\"photo\";s:76:\"http://a3.ak.lscdn.net/imgs/433d0458-ddea-426f-b76e-650e17429a39/280_q60.jpg\";s:12:\"photo_medium\";s:76:\"http://a3.ak.lscdn.net/imgs/433d0458-ddea-426f-b76e-650e17429a39/200_q60.jpg\";s:11:\"photo_small\";s:76:\"http://a3.ak.lscdn.net/imgs/433d0458-ddea-426f-b76e-650e17429a39/124_q60.jpg\";s:13:\"control_title\";s:25:\"A Little Something Bakery\";s:13:\"email_subject\";s:46:\"A Little Something Bakery - One Dozen Cupcakes\";s:13:\"division_name\";s:8:\"Hartford\";s:11:\"description\";s:744:\"<p>Eat your heart out, Martha Stewart, because a Connecticut lady can be the hostess with the mostess without the apron. We've whipped up today's sweet deal for one dozen cupcakes for just \$10 (regularly \$20) at <a href=\"http://www.alittlesomethingbakery.com/\" target=\"_blank\">A Little Something Bakery</a>, West Hartford's family-run business of decadent desserts. With scrumptious frosted flavors such as red velvet, chocolate, and coconut, you can bring home a dozen made-from-scratch treats that demonstrate your domestic prowess without ever stepping into the kitchen. Everyone needs a little somethin' somethin' for the sweet tooth -- so turn off the oven and hop on this offer, because getting 50% off is truly the icing on the cake.</p>\";s:11:\"number_sold\";s:3:\"540\";s:12:\"company_name\";s:18:\"One Dozen Cupcakes\";s:8:\"comments\";a:0:{}}";

	$url = 'http://livingsocial.com/deals/9654-one-dozen-cupcakes';

	$data = get_livingsocial_data($url, TRUE, TRUE);
//	vdump($data);

// this might change... we con't care.
unset($data['deal']['post_to_blogs']);

$deal = serialize($data['deal']);
$deal = str_replace("\r\n", " ", $deal);
$deal = str_replace("\n", " ", $deal);

//vdump(addcslashes($deal,'"$'));
//vdump($deal);
//vdump($dealx);

$isdiff = $dealx != $deal?true:false;
vdump($isdiff);

function diff_string($string1, $string2) {
	// show what is different...
	for ($i = 0; $i < strlen($string1); $i++) {
		if ($string1{$i} != $string2{$i}) {
			vdump('different at char: '.$i);
			$strDiff = substr($string1, 0, $i).'<font color=red>'.substr($string1, $i);
			break;
		}
	}
	$strFfid = strrev($strDiff);
	$strLaed = strrev($string2);
	for ($i = 0; $i < strlen($strFfid); $i++) {
		if ($strFfid{$i} != $strLaed{$i}) {
			vdump('different at char: '.$i);
			$strDiff_rev = substr($strFfid, 0, $i).'>tnof/<'.substr($strFfid, $i);
			return strrev($strDiff_rev);
		}
	}
	return null;
}

if ($isdiff) {
	echo "New: ".diff_string($deal, $dealx);
	echo "\n\n<br><br>\n\nOld: ". diff_string($dealx, $deal);
	
//	send_unittest_results('LivingSocial unit test differs http://dealn.it/events-parse_livingsocial-test.htm');
}

write_app_log("quitting test script.\n");
exit;

