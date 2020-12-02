<?php

require_once 'komideals/DealFeed.php';
require_once 'komideals/DealFeedBlogPost.php';

$objDealFeedBlogPost = DealFeedBlogPostQuery::create()->findOne();
/* @var $objDealFeedBlogPost DealFeedBlogPost */

/*
	articles
		[0]
			url
			confidence
			published_datetime
			zemified
			title
	
	markup
		[0]
			text
			links
				relevance
				confidence
				anchor
				target
					[0]
						url
						type
						title
				entity_type
					[0]
					
	images
		[0]
			url_m_h
			confidence
			url_s_h
			attribution
			description
			license
			url_l_w
			url_s
			source_url
			url_m
			url_l
			url_l_h
			url_s_w
			url_m_w
			
	signature
	keywords
		[0]
			conficence
			scheme
			name
	
	rid
	categories
		[0]
			confidence
			categorization
			name
			
	rich_objects

 */

$result = zemanta_suggest($objDealFeedBlogPost->getDealFeed()->getDetails());

$articles = array();
foreach ($result->articles as $obj) {
	$articles[(string)$obj->confidence] = $obj;
}
krsort($articles);
$result->articles = $articles;

$images = array();
foreach ($result->images as $obj) {
	$images[(string)$obj->confidence] = $obj;
}
krsort($images);
$result->images = $images;

$keywords = array();
foreach ($result->keywords as $obj) {
	$keywords[(string)$obj->confidence] = $obj;
}
krsort($keywords);
$result->keywords = $keywords;

$categories = array();
foreach ($result->categories as $obj) {
	$categories[(string)$obj->confidence] = $obj;
}
krsort($categories);
$result->categories = $categories;

if (count($result->categories)) {
	$arrCategories = array();
	foreach ($result->categories as $obj) {
		$arrCategories[] = $obj->name;
	}
	TaxonomyDmozPeer::saveTaxonomiesFromArray($arrCategories);
}

$zemanta = '<div style="width:100%; text-align:left;padding:5px; overflow:auto;"><p><h3>Related articles:</h3></p><p><ul>';

foreach ($result->articles as $obj) {
	$zemanta .=<<< END

	<li><a href="{$obj->url}">{$obj->title}</a></li>
	
END;
}
$zemanta .= '</ul></p></div><br/><div style="width:100%; text-align:left;padding:5px; overflow:auto;"><p><h3>Related images:</h3></p><p>';

$maxHeight = 0;
$maxWidth = 0;
foreach ($result->images as $obj) {
	if ($maxHeight < $obj->url_s_h) {
		$maxHeight = $obj->url_s_h;
	}
	if ($maxWidth < $obj->url_s_w) {
		$maxWidth = $obj->url_s_w;
	}
}
foreach ($result->images as $obj) {
	$zemanta .=<<<END

	<div style="padding:5px;float:left; width:{$maxWidth}px; height:{$maxHeight}px"><a 
	href="{$obj->source_url}" title="{$obj->description}"><img
	src="{$obj->url_s}" alt="{$obj->description}" width="{$obj->url_s_w}" height="{$obj->url_s_h}" align="right"
	border="0"></a></div>
	
END;
}

$zemanta .= '</p></div>';














