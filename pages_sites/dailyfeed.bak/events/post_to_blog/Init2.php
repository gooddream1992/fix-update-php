<?php

require_once 'komideals/DealFeed.php';
require_once 'komideals/DealFeedBlogPost.php';

require_once 'xmlrpc/blogger.php';
require_once 'functions/functions.php';


	$objDealFeedBlogPost = DealFeedBlogPostQuery::create()->findOne();
	/* @var $objDealFeedBlogPost DealFeedBlogPost */
	
	vdump(zemanta_suggest($objDealFeedBlogPost->getDealFeed()->getDetails()));
	
//	$description = trim(substr($objDealFeed->getDetails(), 0, strpos($objDealFeed->getDetails(), '</p>')).'</p>');
//	$mt_text_more = str_replace($description, '', $objDealFeed->getDetails());
//	$arrKeywords = suggest_keywords(strip_tags($objDealFeed->getDetails()));
//	
//	$strKeywords = implode(',', $arrKeywords);
//	$categories = array('Daily Deals');
//	if (strpos(strtolower($objDealFeed->getLocationNote()),'online')) {
//		$categories = array('National Deals', 'Internet Deals'); // national, online
//	}

//	$objBlogPost = new remoteBlogPost();
//	$arrResponseData = $objBlogPost->setPostId($objDealFeedBlogPost->getPostId())->getPost()->getLastResponseData();
	
//	
//	vdump($arrResponseData);
//	vdump(suggest_keywords($arrResponseData['description'].$arrResponseData['mt_text_more']));
//	$arrResponseData['title'] = '<i>'.$arrResponseData['title'].'</i>';
	
//	$val2 = $objBlogPost->setContentStruc($arrResponseData)->editPost()->getLastResponseStatus();
//	vdump($val2);
//	vdump($objBlogPost->getLastResponseData());
//	vdump($objBlogPost->getPostId());
	

printf("<br>script done... %s\n", date("Y-m-d H:i:s"));

