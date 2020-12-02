<?php

global $objSession;

if (array_key_exists('content', $_POST)) {
	$cont = unserialize($_POST['content']);
} else {
	$cont = new stdClass();
	$cont->_GET = $_GET;
	$cont->_POST = $_POST;
	$cont->_SERVER = $_SERVER;
}

//if ($cont->_SERVER['REMOTE_ADDR'] != '98.154.211.93') {
//	echo 'Under construction.';
//	exit;
//}

$base_link = sprintf("http://%s%s", $cont->_SERVER['HTTP_HOST'], $cont->_SERVER['REQUEST_URI']);


$dLimit = 0;
if (array_key_exists('limit', $_GET)) {
	$dLimit = (int)$_GET['limit'];
}
if (array_key_exists('limit', $cont->_GET)) {
	$dLimit = (int)$cont->_GET['limit'];
}
if ($dLimit == 0) {
	$dLimit = 10;
}

$remote_addr = $_SERVER['REMOTE_ADDR'];
if (array_key_exists('REMOTE_ADDR', $cont->_SERVER)) {
	$remote_addr = $cont->_SERVER['REMOTE_ADDR'];
}
if (array_key_exists('ip', $cont->_GET)) {
	$remote_addr = $cont->_GET['ip'];
}
if (array_key_exists('remote_addr', $cont->_GET)) {
	$remote_addr = $cont->_GET['remote_addr'];
}

if (array_key_exists('postal_code', $cont->_GET)) {
	$collDealFeed = DealFeedQuery::retrieveByZipcode($cont->_GET['postal_code'], ceil($dLimit*1.5), FALSE);
	$collDealFeed = DealFeedQuery::formatDealFeedsForOutput($collDealFeed);
} else {
	$collDealFeed = DealFeedQuery::retrieveByRemoteAddr($remote_addr, ceil($dLimit*1.5), FALSE);
	$collDealFeed = DealFeedQuery::formatDealFeedsForOutput($collDealFeed);
}

printf("<form method=get>Enter your Zip Code: <input type=text name=postal_code value=\"%s\"><input type=submit value=Submit></form><br><hr>", $cont->_GET['postal_code']);

if (count($collDealFeed)) {
	$arrTitles = array();
	$counter = 1;
	
	echo "<link rel='stylesheet' id='komifeed-css'  href='http://dealn.it/includes/css/dealn_it/dealapp.css' type='text/css' media='all' />\n";

	echo "<ul>\n";
	foreach ($collDealFeed as $key => $objDealFeed) {
		
		// skip duplicates
		if (array_key_exists($objDealFeed->Title, $arrTitles)) {
//			printf("<li>skipping %s</li>\n", $objDealFeed->Title);
			continue;
		}
		$arrTitles[$objDealFeed->Title] = TRUE;
		
		if ($counter++ > $dLimit) {
			break 1;
		}
		
		?>
	
	<li class='deal-list'>
		<h2 style="text-align:left;"><a href='<?php echo $objDealFeed->ClickUrl;?>'><?php echo strlen($objDealFeed->Title)?$objDealFeed->Title:$objDealFeed->Subject;?></a></h2>
		<table border="0" style="border-width: 0px; border-collapse: separate;"><tr><td style="border-width: 0px;">
			<div>
				<a href='<?php echo $objDealFeed->ClickUrl;?>'>
				<img class='defer' height=121 width=200 src='http://dealn.it/images/dot.gif' style='background: url(<?php echo $objDealFeed->PhotoMedium;?>) no-repeat 0 0'>
				</a>									
			</div>
			</td><td style="border-width: 0px;">
			<blockquote style="text-align:left; padding-left: 20px;">
				<?php 
				$strFirstP = strip_tags(substr($objDealFeed->Details, 0, strpos($objDealFeed->Details, '</p>')));
				$strFirstP = strlen($strFirstP)>290?substr($strFirstP, 0, 290).'...':$strFirstP;
				echo $strFirstP;
				?> <a href='<?php echo $objDealFeed->ClickUrl;?>'>read more &#187;</a>
			</blockquote>
			</td></tr></table>
			<table border="0" width="100%" style="border-width: 0px; border-collapse: separate;"><tr><td valign="top" style="border-width: 0px;">
			<ul class='meta'>
				<li class='neigh' style="text-align:left; margin-left:0px;">
					<div class='distance'>
						Located in<br />
						<strong><?php echo $objDealFeed->Business->City; ?>, <?php echo $objDealFeed->Business->State; ?></strong><br />
						<?php printf("%.01f", $objDealFeed->Distance);?>&nbsp;miles&nbsp;away
					</div>
				</li>
			</ul>
			</td><td valign="top" style="border-width: 0px;">
			<ul class='meta'>
				<li class='tagss' style="text-align:left; margin-left:0px;">
					<div class='distance'>
<?php 
	
$objDealFeedThread = DealFeedThreadQuery::create()
	->filterByDealFeedId($objDealFeed->Id)
	->filterByIsActive(1)
	->orderByDateCreated(Criteria::DESC)
	->findOne();
		
if ($objDealFeedThread instanceof DealFeedThread) {
	printf("<strong>%s</strong> says &quot;%s%s&quot;<br />"
		, $objDealFeedThread->getUser()->getFname()
		, substr($objDealFeedThread->getContent(), 0, 140)
		, strlen($objDealFeedThread->getContent()) > 140?'...':''
		);
}

if (strlen($objDealFeed->DiscussionUrl)) {

?>
						<a href='<?php echo $objDealFeed->ClickUrl;?>'>read 
						<?php 
						if ((int)$objDealFeed->CommentNumber > 0) {
							echo (int)$objDealFeed->CommentNumber. ' more';
						}
						 
						?>
						comment<?php if ((int)$objDealFeed->CommentNumber != 1){echo 's';} ?> &#187;</a>
<?php } ?>
					</div>
				</li>
			</ul>
		</td><td valign="top" style="border-width: 0px;">
		<div class='ft'">
			<div class='deal-info'>
				<ul class='get-it'>
					<li class='save' style="text-align:center; margin-left:0px;"><div><em>$<?php echo $objDealFeed->Price;?></em></div></li>
					<li class='get' style="text-align:center; margin-left:0px;"><a class='track-buy' href='<?php echo $objDealFeed->ClickUrl;?>'><em class='track-buy' style="color:#fff;">Buy<br>Now</em></a></li>
				</ul>
				<ul class='price'>
					<li class='first' style="text-align:center; margin-left:0px;">Value <em>$<?php echo (int)$objDealFeed->RetailValue;?></em></li>
					<li style="text-align:center; margin-left:0px;">Discount <em><?php 
					if ((int)$objDealFeed->RetailValue > 0) {
						echo ceil((100/(int)$objDealFeed->RetailValue) * ((int)$objDealFeed->RetailValue - (int)$objDealFeed->Price));
					} else {
						echo '?';
					}
					?>%</em></li>
					<li style="text-align:center; margin-left:0px;">Save <em>$<?php echo (int)$objDealFeed->RetailValue - (int)$objDealFeed->Price;?></em></li>
				</ul>
			</div>
		</div>
		</td></tr></table>
		<hr width="100%">
	</li>
		<?php
	}
	echo "<ul>\n";
} else {
	echo '<br>No deals found.';
}

exit;