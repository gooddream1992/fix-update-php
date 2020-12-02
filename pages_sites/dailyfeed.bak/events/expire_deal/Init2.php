<?php

set_time_limit(6000);
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
		$objBlogPost = new remoteBlogPost();
		$objBlogPost->setPostId($objDealFeedBlogPost->getPostId());
		$objBlogPost->setServer($objDealFeedBlogPost->getBlogName());
		
		$struc = $objBlogPost->getPost()->getLastResponseData();
		if (is_array($struc)) {
			$struc['mt_keywords'] = '';
			if (!strpos($struc['description'], 'Expired')) {
				$struc['description'] = str_replace('<p>', '<p><strong><span style="color:red">Limited Time</span> </strong> - ', $struc['description']);
				
				// save it
				$response_status = $objBlogPost->setContentStruc($struc)->editPost()->getLastResponseStatus();
				write_app_log("  saved. status: ".$response_status."\n");
				if ($response_status == 1) {
					$objDealFeedBlogPost->setIsActive(0);
					$objDealFeedBlogPost->save();
				}
			}
		}
	}
	$dealnumber++;
	$objDealFeed->setIsActive(0);
	$objDealFeed->save();
}

write_app_log("quitting script.\n");

