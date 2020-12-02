<?php

require_once 'komideals/User.php';
require_once 'komideals/DealFeedDetail.php';
require_once 'komideals/DealFeedHighlight.php';
require_once 'komideals/DealFeedThread.php';
require_once 'komideals/DealFeedLocation.php';
require_once 'komideals/DealFeedSource.php';
require_once 'komideals/Category.php';
require_once 'komideals/Zipcode.php';
require_once 'komideals/Business.php';
require_once 'komideals/DealFeedBlogPost.php';
require_once 'komideals/DealFeedDivision.php';
require_once 'komideals/TaxonomyDmoz.php';
require_once 'komideals/DealFeedTaxonomyDmoz.php';
require_once 'xmlrpc/blogger.php';

/**
 * Skeleton subclass for representing a row from the 'deal_feed_blog_post' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.komideals
 */
class DealFeedBlogPost extends BaseDealFeedBlogPost {
	
	public function postToBlog($bForceBlogUpdate = false) {
		
		// object not new && don't force blog update... just return.
		if (!$bForceBlogUpdate && $this->getId()) {
			// prevent executing code... especially yahoo call.
			write_app_log("not forced, skipping. ".$this->getDealFeed()->getPermalink()."@".$this->getBlogName()."\n");
			return false;
		}
		
		// from blogger.php
		$objBlogPost = new remoteBlogPost($this->getBlogName());
		
		$objZip = ZipcodeQuery::create()->filterByCitytype('D')->findOneByZipcode($this->getDealFeed()->getBusiness()->getPostcode());
		
		// link directly to article
//		$strBlogPostLink = '';
//		if ($this->getPostId() != 0) {
//			$strBlogPostLink = sprintf("http://%s/?p=%d", $this->getBlogName(), $this->getPostId());
//		}
		
		// link to deal
		$strBlogPostLink = $this->getDealFeed()->getClickUrlRedirect($this->getBlogName());
		$strFiveDealsLink = sprintf("http://fivedeals.co/deal/%d/%s",$this->getDealFeed()->getId(), $this->getDealFeed()->getPermalink());
		
		/* @var $objDealFeed DealFeed */
		// title is title unless subject (which is usually shorter) exists
		$title = strip_tags(strlen($this->getDealFeed()->getSubject())?$this->getDealFeed()->getSubject():$this->getDealFeed()->getTitle());
		if(strpos($title, 'Groupon has arrived') && strlen(trim($this->getDealFeed()->getTitle() ))) {
			$title = trim(strip_tags($this->getDealFeed()->getTitle() ));
		}
		$description = sprintf("<img src='%s' align='left' style='margin:20px;' border=0 alt=\"%s\">\n"
			, $this->getDealFeed()->getPhotoMedium()
			, htmlentities($title)
			);
		if (strlen($strBlogPostLink)) {
			$description = '<a href="' .$strBlogPostLink. '">' .trim($description). "</a>";
		}
		$descriptionPart = substr($this->getDealFeed()->getDetails(), 0, strpos($this->getDealFeed()->getDetails(), '</p>')).'</p>';
		$description .= $descriptionPart;
		if($title != $this->getDealFeed()->getTitle() && strlen(trim($this->getDealFeed()->getTitle() ))) {
//			$description = '<i>'.trim(strip_tags($this->getDealFeed()->getTitle() )) .'</i> '. $description;
			// these assume the link/image are already set in description (requires id to be set)
			$description = str_replace('"></a><p>', '"></a><p><i>'.trim(strip_tags($this->getDealFeed()->getTitle() )).'.</i> ', $description);
		}
		$description = str_replace('"></a><p>', '"></a><p><strong>'.$this->getDealFeed()->getDealFeedDivision()->getDivisionName().'</strong> - ', $description);
	
		$mt_text_more = str_replace($descriptionPart, '', $this->getDealFeed()->getDetails());
		if ($mt_text_more == $this->getDealFeed()->getDetails()) {
			// mt_text_more is the same as details if details contians only 1 <P> tag.
			$mt_text_more = ''; // we don't want mt_text_more to be the same as datails
		}
		
		$strAddress = '';
		$collAddr = $this->getDealFeed()->getDealFeedLocations();
		foreach ($collAddr as $objLocation) {
			/* @var $objLocation DealFeedLocation */
			$strAddress .= $objLocation->getAddressline1().", ";
			if(($objZip instanceof Zipcode)) {
				$strAddress .= sprintf("%s, %s, %s, "
					, $objZip->getCity()
					, $objZip->getState()
					, $objZip->getCounty()
					);
			}
			$strAddress .= $objLocation->getPostcode().", ";
		}
		
		$result = zemanta_suggest($this->getDealFeed()->getDetails(). 
			' '. $this->getDealFeed()->getDealFeedDivision()->getDivisionName().
			' '. $this->getDealFeed()->getTitle()
			. $strAddress
		);

		$articles = array();
		foreach ($result->articles as $obj) {
			// remove zemanta's redirect...
			$url = $obj->url;
// http://r.zemanta.com/?u=http%3A//www.telegraph.co.uk/foodanddrink/8071088/Brown-sugar-meringues-with-lavender-cream-and-blackberries-recipe.html&a=27006034&rid=d6b9caae-3ed7-472b-b7b6-03e6e30c2a75&e=7a04a496e1e0a6c26510475191ddf16e
			$arrUrl = parse_url($url);
			parse_str($arrUrl['query'], $arrZemantaParsedUrl);
			if (strlen($arrZemantaParsedUrl['u'])) {
				$obj->url = $arrZemantaParsedUrl['u'];
			}
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
			
			// if no taxonomies found, add them
			$collDealFeedTaxonomyDmoz = $this->getDealFeed()->getDealFeedTaxonomyDmozs();
			if (!count($collDealFeedTaxonomyDmoz)) {
				
				// save relation between category and deal
				foreach ($result->categories as $obj) {
					// $obj->name;
					// $obj->confidence;
					$slug = format_slug($obj->name);
					$objTaxonomyDmoz = TaxonomyDmozQuery::create()->findOneBySlug($slug);
					if (!$objTaxonomyDmoz instanceof TaxonomyDmoz) {
						write_app_log("Cannot find slug: $slug\n");
						continue;
					}
					$objDealFeedTaxonomyDmoz = new DealFeedTaxonomyDmoz();
					$objDealFeedTaxonomyDmoz->setDealFeed($this->getDealFeed());
					$objDealFeedTaxonomyDmoz->setTaxonomyDmoz($objTaxonomyDmoz);
					$objDealFeedTaxonomyDmoz->setConfidence($obj->confidence);
					
					$this->getDealFeed()->addDealFeedTaxonomyDmoz($objDealFeedTaxonomyDmoz);
					write_app_log("SAVING category: $slug\n");
				}
			}
		}
		if (count($result->articles)) {
			$zemanta = '<div style="width:90%; text-align:left;padding:5px; overflow:auto;"><h3>Related articles:</h3><ul>';
			
			foreach ($result->articles as $obj) {
				$zemanta .=<<<END
				<li><a href="{$obj->url}">{$obj->title}</a></li>
END;
			}
			$zemanta .= '</ul></div>';
		}
//		if (count($result->images)) {
//			$zemanta .= '<div style="width:90%; text-align:left;padding:5px; overflow:auto;"><h3>Related images:</h3>';
//			
//			$maxHeight = 0;
//			$maxWidth = 0;
//			foreach ($result->images as $obj) {
//				if ($maxHeight < $obj->url_s_h) {
//					$maxHeight = $obj->url_s_h;
//				}
//				if ($maxWidth < $obj->url_s_w) {
//					$maxWidth = $obj->url_s_w;
//				}
//			}
//			foreach ($result->images as $obj) {
//				$zemanta .=<<<END
//				<div style="padding:5px;float:left; width:{$maxWidth}px; height:{$maxHeight}px"><a href="{$obj->source_url}" title="{$obj->description}"><img src="{$obj->url_s}" alt="{$obj->description}" width="{$obj->url_s_w}" height="{$obj->url_s_h}" align="right" border="0"></a></div>
//END;
//			}
//			$zemanta .= '<br/></div>';
//		}
		
		$mt_text_more .= sprintf("<h3><a href='%s'>More Info / Buy Now &raquo;</a></h3>\n", $this->getDealFeed()->getClickUrlRedirect($this->getBlogName()));
		
		if (strlen($zemanta)) {
			$mt_text_more .= $zemanta;
			$mt_text_more .= sprintf("<h3><a href='%s'>%s</a></h3>\n", $strFiveDealsLink, $this->getDealFeed()->getTitle());
			$mt_text_more .= sprintf("<h3><a href='%s'>Buy Now &raquo;</a></h3>\n", $this->getDealFeed()->getClickUrlRedirect($this->getBlogName()));
		}
		
		$arrKeywords = suggest_keywords(strip_tags($this->getDealFeed()->getDetails()));
		if (is_string($arrKeywords)) {
			$arrKeywords = array($arrKeywords);
		}
		if (is_array($arrKeywords)) {
			// remove bad entries... raquo
			if (array_search('raquo', $arrKeywords))
				unset($arrKeywords[array_search('raquo', $arrKeywords)]);
			if (array_search('&raquo', $arrKeywords))
				unset($arrKeywords[array_search('&raquo', $arrKeywords)]);
			if (array_search('rsquo', $arrKeywords))
				unset($arrKeywords[array_search('rsquo', $arrKeywords)]);
			if (array_search('&rsquo;', $arrKeywords))
				unset($arrKeywords[array_search('&rsquo', $arrKeywords)]);
		}
		if (count($arrKeywords) > 15) { 
			// limit to 15 because we're adding 5 more... and wp limit is 20.
			$arrKeywords = array_slice($arrKeywords, 0, 15);
		}
		
		$serializedKeywords = serialize($arrKeywords);
		if (strpos($serializedKeywords, 'raquo')) {
			write_app_log("bad keyword: ".$serializedKeywords."\n");
		}
		
		if(($objZip instanceof Zipcode)) {
			$arrKeywords[] = $objZip->getCity();
			$arrKeywords[] = $objZip->getCounty();
			$arrKeywords[] = $objZip->getAreacode();
			$arrKeywords[] = $objZip->getState();
			$arrKeywords[] = $this->getDealFeed()->getDealFeedDivision()->getDivisionName();
		}
		
		$strKeywords = implode(',', $arrKeywords);
		$strKeywords = str_replace('amp,', '', $strKeywords);
		$categories = array('Daily Deals');
		if ($this->getDealFeed()->getIsOnline()) {
			$categories = array('National Deals', 'Internet Deals'); // national, online
		}
		
		$content_struc = array();
		$content_struc['post_type'] = 'post';
		$content_struc['description'] = $description; //: (variable) // body of post
		$content_struc['title'] = $title; //: (variable)
		$content_struc['mt_text_more'] = $mt_text_more; //: (variable)
		$content_struc['mt_keywords'] = $strKeywords; //: (,separated list of kw) // aka tags
	//	$content_struc['date_created_gmt'] = $this->getDealFeed()->getDateStart('c'); //: (string) //  ISO 8601 format, overrides dateCreated 'Z'
		$content_struc['categories'] = $categories; //: (string of one or array of many)
		
		$content_struc['custom_fields'] = array();
//		$content_struc['custom_fields'][] = array('key'=>'test','value'=>'custom_fields');
		$content_struc['custom_fields'][] = array('key'=>'deal','value'=>serialize(DealFeedQuery::formatDealFeedForOutput($this->getDealFeed(), $this->getBlogName())));
		
//		vdump($arrKeywords);
//		vdump($content_struc);
		
		if ($this->getPostId() == 0) {
			try {
				
				// @note: duplicates (or similar deals) will be posted to blog
				$val2 = $objBlogPost->setContentStruc($content_struc)->newPost()->getPostId();
				$this->setPostId($val2);
				write_app_log("NEW WP Post: ".$val2." ".$this->getDealFeed()->getPermalink().'@'.$this->getBlogName()."\n");
				
				// update post with image link containing post id
//				$this->postToBlog(true); // force update
					
			} catch (Exception $e) {
				// just log it
				write_app_log("NEW WP Post: 0 failed ".$e->getMessage()." ".$this->getDealFeed()->getPermalink().'@'.$this->getBlogName()."\n");
				$this->setPostId(0);
//				throw new Exception("NEW WP Post: 0 failed ".$e->getMessage()." ".$this->getDealFeed()->getPermalink().'@'.$this->getBlogName()."\n");
				return false;
			}
		} else {
			write_app_log("UPDATING WP Post: ".$this->getPostId()." ".$this->getDealFeed()->getPermalink().'@'.$this->getBlogName()."\n");
			try {
				$val2 = $objBlogPost->setPostId($this->getPostId())->setContentStruc($content_struc)->editPost()->getLastResponseStatus();
				write_app_log("UPDATED WP Post, Status: ".$val2."\n");
			} catch (Exception $e) {
				// just log it
				write_app_log("UPDATED WP Post, Status: 0 failed ".$e->getMessage()." ".$this->getDealFeed()->getPermalink()."\n");
//				$this->setPostId(0);
				return false;
			}
		}
		return true;
	}
	
	public function save(PropelPDO $conn = null) {
		
		if($this->isNew()) {
			$this->setIsActive(1);
			$this->setDateCreated(time());
			
		}
		if($this->isModified()) {
			// do stuff if object has been modified
			// such as change date modified or save changes to changelog database
		}
		
		parent::save($conn);
	}

} // DealFeedBlogPost
