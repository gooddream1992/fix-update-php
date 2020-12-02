
<form method="get"><input type=text name=zipcode value="<?php echo $strZipcode; ?>"><input type=submit></form>
<div class="ajax-listing">
<ul class="deal-list dd">
<?php 

$collDealFeed = DealFeedQuery::retrieveByZipcode($strZipcode, 20, FALSE);

if (count($collDealFeed)) {
	foreach ($collDealFeed as $key => $objDealFeed) {
		/* @var $objDealFeed DealFeed */
//		printf(" %.01f miles in %s, %s <a href=\"%s\">%s</a> comments: <a href=\"%s\">%d</a><br>"
//		, $objDealFeed->getDistance()
//		, $objDealFeed->getBusiness()->getCity()
//		, $objDealFeed->getBusiness()->getState()
//		, $objDealFeed->getClickUrl()
//		, strlen($objDealFeed->getSubject())?$objDealFeed->getSubject():$objDealFeed->getTitle()
//		, $objDealFeed->getDiscussionUrl()
//		, $objDealFeed->getCommentNumber()
//		);
?>

	<li class='deal'>
		<h2 style="text-align:left;"><a href='<?php echo $objDealFeed->getClickUrl();?>'><?php echo strlen($objDealFeed->getTitle())?$objDealFeed->getTitle():$objDealFeed->getSubject();?></a></h2>
		<div class='bd'>																		
			<div class='left'>
				<a href='<?php echo $objDealFeed->getClickUrl();?>'>
				<img class='defer' src='/images/dot.gif' style='background-image: url(<?php echo $objDealFeed->getPhotoMedium();?>);'>
				</a>									
			</div>
			<blockquote style="text-align:left;" class="description">
				<?php 
				$strFirstP = strip_tags(substr($objDealFeed->getDetails(), 0, strpos($objDealFeed->getDetails(), '</p>')));
				$strFirstP = strlen($strFirstP)>290?substr($strFirstP, 0, 290).'...':$strFirstP;
				echo $strFirstP;
				?> <a href='<?php echo $objDealFeed->getClickUrl();?>'>read more &#187</a>
			</blockquote>
			<ul class='meta'>
<!--				<li class='tags'></li>-->
				<li class='neigh'>
					<div class='distance'>
						Located in<br />
						<strong><?php echo $objDealFeed->getBusiness()->getCity(); ?>, <?php echo $objDealFeed->getBusiness()->getState(); ?></strong><br />
						<?php printf("%.01f", $objDealFeed->getDistance());?> miles away
					</div>
				</li>

				<li class='tags'>
					<div class='distance' style="width:290px">
<?php 

$crit = new Criteria();
$crit->addDescendingOrderByColumn(DealFeedThreadPeer::DATE_CREATED);
$crit->add(DealFeedThreadPeer::IS_ACTIVE, '1', Criteria::EQUAL);
$crit->setLimit(1);
$collDealFeedThread = $objDealFeed->getDealFeedThreads($crit);

foreach ($collDealFeedThread as $objDealFeedThread) {
	/* @var $objDealFeedThread DealFeedThread */
	printf("<strong>%s</strong> says &quot;%s%s&quot;<br />"
		, $objDealFeedThread->getUser()->getFname()
		, substr($objDealFeedThread->getContent(), 0, 140)
		, strlen($objDealFeedThread->getContent()) > 140?'...':''
		);
}

if (strlen($objDealFeed->getDiscussionUrl())) {

?>
						<a href='<?php echo $objDealFeed->getDiscussionUrl();?>'>read <?php echo (int)$objDealFeed->getCommentNumber();?> more comments &#187</a>
<?php } ?>
					</div>
				</li>
			</ul>
		</div>
		<div class='ft'>
			<div class='deal-info'>
				<ul class='get-it'>
					<li class='save'><div><em>$<?php echo $objDealFeed->getPrice();?></em></div></li>
					<li class='get'><a class='track-buy' href='<?php echo $objDealFeed->getClickUrl();?>'><em class='track-buy'>Buy<br>Now</em><em class='arrow track-buy'>&nbsp</em></a></li>
				</ul>
				<ul class='price'>
					<li class='first'>Value <em>$<?php echo (int)$objDealFeed->getRetailValue();?></em></li>
					<li>Discount <em><?php 
					if ((int)$objDealFeed->getRetailValue() > 0) {
						echo ceil((100/(int)$objDealFeed->getRetailValue()) * ((int)$objDealFeed->getRetailValue() - (int)$objDealFeed->getPrice()));
					} else {
						echo '?';
					}
					?>%</em></li>
					<li>Save <em>$<?php echo (int)$objDealFeed->getRetailValue() - (int)$objDealFeed->getPrice();?></em></li>
				</ul>
			</div>
		</div>
	</li>

<?php 
	}
	
}



//	<li class='deal'>
//		<h2><a href='http://www.dailyd.com/deal/19-for-50-at-book-pig'>$19 for Children�s Book Rentals at BookPig ($50 Value)  </a></h2>
//		<div class='bd'>																		
//			<div class='left'>
//				<a href='http://www.dailyd.com/deal/19-for-50-at-book-pig'>
//				<img class='defer' src='http://s.dailyd.com/static/blank.gif' style='background-image: url(http://cdn.dailyd.com/deal.images/1122539eef137613137e28fea1d3ad53.png);'>
//				</a>									
//			</div>
//			<blockquote>
//				This is one of those wonderful ideas that makes you nod and say �yes!� You go to BookPig�s website and select children�s books. They mail them to you. You keep them as long as you want, mail them back, and get... <a href='http://www.dailyd.com/deal/19-for-50-at-book-pig'>read more &#187</a>
//			</blockquote>
//			<ul class='meta'>
//				<li class='tags'></li>
//				<li class='neigh'><div class='distance'>Located in<br /><strong>Everywhere</strong></div></li>
//
//				<li class='fb-like'>
//					<div class="fb-like">
//						<fb:like href="http://www.dailyd.com/deal/19-for-50-at-book-pig" show_faces="true" action="recommend" layout="button_count" width="150">
//						</fb:like>
//					</div>
//				</li>
//			</ul>
//		</div>
//		<div class='ft'>
//			<div class='deal-info'>
//				<ul class='get-it'>
//					<li class='save'><div><em>$19</em></div></li>
//					<li class='get'><a class='track-buy' href='https://www.dailyd.com/deal/buy/19-for-50-at-book-pig'><em class='track-buy'>Buy<br>Now</em><em class='arrow track-buy'>&nbsp</em></a></li>
//				</ul>
//				<ul class='price'>
//					<li class='first'>Value <em>$50</em></li>
//					<li>Discount <em>62%</em></li>
//					<li>Save <em>$31</em></li>
//				</ul>
//			</div>
//		</div>
//	</li>
	
?>

</ul>
</div>
