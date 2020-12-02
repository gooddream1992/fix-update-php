<?php

set_time_limit(3000);
$arrDoneDeals = array();
$strUniqueId = date("H:i:s");
$dealnumber = 0;

require_once 'komideals/DealFeed.php';
require_once 'komideals/DealFeedBlogPost.php';
require_once 'xmlrpc/blogger.php';

define('LOG_FILENAME_C','/tmp/expire_deal_log');
write_app_log("starting script...\n");

$collDealFeeds = DealFeedQuery::create()->filterByIsActive(1)->filterByDateEnd(time(), Criteria::LESS_THAN)->limit(500)->find();

foreach ($collDealFeeds as $objDealFeed) {
	/* @var $objDealFeed DealFeed */
	write_app_log(sprintf("%s %s\n", $objDealFeed->getClickUrl(), $objDealFeed->getDateEnd("Y-m-d H:i:s") ));
	
	$collDealFeedBlogPosts = $objDealFeed->getDealFeedBlogPosts();
	foreach ($collDealFeedBlogPosts as $objDealFeedBlogPost) {
		/* @var $objDealFeedBlogPost DealFeedBlogPost */
		write_app_log("  processing ".$objDealFeedBlogPost->getBlogName()." id: ".$objDealFeedBlogPost->getPostId()."\n");
		$objBlogPost = new remoteBlogPost($objDealFeedBlogPost->getBlogName());
		$objBlogPost->setPostId($objDealFeedBlogPost->getPostId());
		
		try {
			$struc = $objBlogPost->getPost()->getLastResponseData();
			
			if (is_array($struc)) {
				$struc['mt_keywords'] = '';
				$arrCategories = array();
				$is_description_expired = FALSE;
				$is_changed = FALSE;
			
				// old method of marking blog posts expired
				if (strpos($struc['description'], '<span style="color:red">Expired</span>')) {
					$is_description_expired = true;
				}
				// new method...
				if (strpos($struc['description'], '<span style="color:red">Limited Time</span>')) {
					$is_description_expired = true;
				}
				// if no expiry indicator, add one and save.
				if (!$is_description_expired) {
					$struc['description'] = str_replace('<p>', '<p><strong><span style="color:red">Limited Time</span> </strong> - ', $struc['description']);
					$is_changed = true;
				}
				
				// put categories back the way they were...
				if (is_array($struc['categories'])) {
					foreach ($struc['categories'] as $strCategoryValue) {
						if (ereg('Past ', $strCategoryValue)) {
							$strCategoryValue = str_replace('Past ', '', $strCategoryValue);
							$is_changed = true;
						}
						$arrCategories[] = $strCategoryValue;
					}
					$struc['categories'] = $arrCategories;
				}
				
				if ($is_changed) {
					// save it
					$response_status = $objBlogPost->setContentStruc($struc)->editPost()->getLastResponseStatus();
					write_app_log("  saved. status: ".$response_status."\n");
					if ($response_status == 1) {
						$objDealFeedBlogPost->setIsActive(0);
						$objDealFeedBlogPost->save();
					}
				}
			}
		} catch (Exception $e) {
			$err = 'Error expiring deal: '.$objDealFeed->getId().' '.$objDealFeedBlogPost->getBlogName();
			error_log($err);
			write_app_log('    '.$err."\n");
//			throw new Exception($e->getMessage());
		}
	}
	$dealnumber++;
	$objDealFeed->setIsActive(0);
	$objDealFeed->save();
}

write_app_log("quitting script.\n");

