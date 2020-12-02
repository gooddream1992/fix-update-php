<?php

if(!function_exists("display_daily_deal")) {

	function display_daily_deal($objDealFeed, $strTarget='_top') {
		/* @var $objDealFeed DealFeed */
		
		$objDate = new DateTime($objDealFeed->DateEnd);
		$dTimeLeft = intval($objDate->format('U'))-time();
		$dDays = floor($dTimeLeft/86400);
		$dHours = floor(($dTimeLeft-($dDays*86400))/3600);
		$dMinutes = floor(($dTimeLeft-($dDays*86400)-($dHours*3600))/60);
		
		$strTimeLeft = '';
		if ($dDays > 0)
			$strTimeLeft .= $dDays.'d ';
		if ($dHours > 0 || $dDays != 0)
			$strTimeLeft .= $dHours.'h ';
		if ($dMinutes > 0 || $dDays != 0 || $dHours != 0)
			$strTimeLeft .= $dMinutes.'m ';
			
		if ($dTimeLeft < 1)
			$strTimeLeft = '- expired -';
			
//		$strTimeLeft .= '<br>'.date("Y-m-d H:i:s", $objDate->format('U'));

		if (strlen($objDealFeed->Business->City)) {
			$strLocation = sprintf("%s, %s", $objDealFeed->Business->City, $objDealFeed->Business->State);
			
		} else {
			$strLocation = sprintf("%s", $objDealFeed->DivisionName);
		}
		
		
		$strDistance = sprintf("%.01f miles away", $objDealFeed->Distance);
		if ((int)$objDealFeed->Distance == 0 || (int)$objDealFeed->Distance > 7000) {
			$strDistance = 'Buy Online!';
		} elseif ((int)$objDealFeed->Distance > 2000) {
			$strDistance = 'Far Away';
		}
		
?>


	<div id="C3F0W8-wrapper">
	
	  <!--header-->
	  <div id="C3F0W8-header">
	
	  <div class="C3F0W8-header-left">
	    <h1><a target="<?php echo $strTarget; ?>" href="<?php echo $objDealFeed->ClickUrl;?>" rel="nofollow"><?php echo strlen($objDealFeed->Title)?$objDealFeed->Title:$objDealFeed->Subject;?></a></h1>
	    </div>
		<div class="C3F0W8-header-right">
		<p>Located in</p>
		<h4><?php echo $strLocation; ?></h4>
		<p><?php echo $strDistance; ?></p>
	
		</div>
	  </div>
	  <!--/header-->
	  
	  <!--content-->
	  <div id="C3F0W8-content">
	    <div id="C3F0W8-col-1">
		<a target="<?php echo $strTarget; ?>" href="<?php echo $objDealFeed->ClickUrl;?>" rel="nofollow"><img width="200" height="151" src="/images/dot.gif" style='background: url(<?php echo $objDealFeed->PhotoMedium;?>) no-repeat 0 0'></a>
		</div>
	    <div id="C3F0W8-col-2">
	
		<div class="C3F0W8-col-2">
					<p><?php 
					
					if (array_key_exists('more_details', $_GET)) {
						// show all details
						
						$details = $objDealFeed->Details;
						// strip links only
						$details = preg_replace('/<a[^>]*>/', '', $details);
						$details = eregi_replace('/</a>/', '', $details);
						echo $details;
						
//						echo strip_tags($objDealFeed->Details,'<p>');
						
						?> <a target="<?php echo $strTarget; ?>" href="<?php echo $objDealFeed->ClickUrl;?>" rel="nofollow">more &#187;</a>
					<?php
					} else {
						$strFirstP = strip_tags(substr($objDealFeed->Details, 0, strpos($objDealFeed->Details, '</p>')));
						$strFirstP = strlen($strFirstP)>290?substr($strFirstP, 0, 290).'...':$strFirstP;
						echo $strFirstP;
						
						?> <a target="<?php echo $strTarget; ?>" href='http://fivedeals.co/deal/<?php echo $objDealFeed->Id;?>/<?php echo $objDealFeed->Permalink;?>'>more &#187;</a>
					<?php } ?>
					</p>
		</div>
		<div class="C3F0W8-col-2-bottom">
		<div class="C3F0W8-bottom-head">
		
		<span>VALUE</span>
		<span>DISCOUNT</span>
		<span>SAVING</span>
		
			</div>
			<div class="C3F0W8-col-box">
			$<?php echo $objDealFeed->Price;?>
			</div>
			<div class="C3F0W8-col-box-center">
			<h2><a target="<?php echo $strTarget; ?>" href="<?php echo $objDealFeed->ClickUrl;?>" rel="nofollow">BUY IT!</a></h2>
	
			</div>
			<div class="C3F0W8-col-last">
			<p><?php echo $strTimeLeft; ?> Left</p>
			</div>
		<div class="C3F0W8-bottom-foot">
		<span>$<?php echo (int)$objDealFeed->RetailValue;?></span>
		<span><?php 
			if ((int)$objDealFeed->RetailValue > 0) {
				echo ceil((100/(int)$objDealFeed->RetailValue) * ((int)$objDealFeed->RetailValue - (int)$objDealFeed->Price));
			} else {
				echo '?';
			}
			?>%</span>
	
		<span>$<?php echo (int)$objDealFeed->RetailValue - (int)$objDealFeed->Price;?></span>
		</div>
	
		</div>
		</div>
	    <div class="C3F0W8-clear"></div>
	  </div>
	   <div class="C3F0W8-clear">
	   </div>
	
	  <!--/content-->
	  
	  <!--footer-->
	  <div id="C3F0W8-footer">
	  <div class="C3F0W8-footer-left">
	  <ul>
	  <li><strong>Share this deal:</strong>&nbsp;&nbsp;</li>
<?php /*	  <li><a target="<?php echo $strTarget; ?>" href="#"><img src="/images/icons/email_16x16.gif" alt="Email This Deal"></a></li> */ ?>
	  <li><a target="<?php echo $strTarget; ?>" href="http://www.facebook.com/sharer.php?u=<?php echo urlencode($objDealFeed->ClickUrl);?>&t=<?php echo urlencode((strlen($objDealFeed->Title))?$objDealFeed->Title:$objDealFeed->Subject); ?>"><img src="/images/icons/facebook_16x16.gif" alt="Share on FaceBook"></a></li>
	
	  <li><a target="<?php echo $strTarget; ?>" href="http://twitter.com/home?status=<?php echo urlencode((strlen($objDealFeed->Title))?$objDealFeed->Title:$objDealFeed->Subject);?><?php echo urlencode(' '.$objDealFeed->ClickUrl);?>"><img src="/images/icons/twitter_16x16.gif" alt="Share on Twitter"></a></li>
	  </ul>
	  </div>
	  <div class="C3F0W8-footer-right">
	  
	<?php 
		
	$objDealFeedThread = DealFeedThreadQuery::create()
		->filterByDealFeedId($objDealFeed->Id)
		->filterByIsActive(1)
		->orderByDateCreated(Criteria::DESC)
		->findOne();
			
	if ($objDealFeedThread instanceof DealFeedThread) {
		printf("<p><strong>%s</strong> says &quot;%s%s&quot;</p>"
			, $objDealFeedThread->getUser()->getFname()
			, substr($objDealFeedThread->getContent(), 0, 140)
			, strlen($objDealFeedThread->getContent()) > 140?'...':''
			);
	}

	if (strlen($objDealFeed->DiscussionUrl)) {
	
	?>
	  <p><a target="<?php echo $strTarget; ?>" href="<?php echo $objDealFeed->ClickUrl;?>" rel="nofollow">Read
		<?php 
		if ((int)$objDealFeed->CommentNumber > 0) {
			echo (int)$objDealFeed->CommentNumber. ' more';
		}
		 
		?>
		comment<?php if ((int)$objDealFeed->CommentNumber != 1){echo 's';} ?> &#187;</a>
	   </p>
	  
	<?php } ?>
	
	  </div>
	  </div>
	  <div class="C3F0W8-clear"></div>
	  <!--/footer-->
	  
	</div>
	
<?php 

	}
}

