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
require_once 'xmlrpc/blogger.php';

/**
 * Skeleton subclass for representing a row from the 'deal_feed' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.komideals
 */
class DealFeed extends BaseDealFeed {
	
	private $_dDistanceFromMe = 0.0;
	
	public function getClickUrlRedirect($strSId='', $dPubId=0) {
			
		$url = sprintf("%s/r.htm?id=%d", DOMAIN_HOME_C, $this->getId());
		
		// dPubId overrides PID_C
		// PID_C = pid passed in url/cookie
		if (PID_C != PID_DEFAULT_C && $dPubId == 0)
			$dPubId = PID_C;
			
		if ($dPubId > 0)
			$url .= sprintf("&pid=%d", $dPubId);
			
		// strSId overrides SID_C
		// SID_C = sid passed in url/cookie
		if (SID_C != SID_DEFAULT_C && $strSId == '')
			$strSId = SID_C;
		
		if (strlen($strSId))
			$url .= sprintf("&sid=%s", urlencode($strSId));
			
		return $url;
	}
	
	public function postToBlogWithBlogNameArray($arrBlogNames = array(), $bForceBlogUpdate = false) {
		foreach ($arrBlogNames as $strBlogName) {
			write_app_log("processing blog... " .$this->getPermalink().'@'.$strBlogName. "\n");
			if ($this->postToBlogWithBlogName($strBlogName,$bForceBlogUpdate)) {
				write_app_log("saving dealfeed... " .$this->getPermalink(). "\n");
				$this->save();
//				break;
			}
		}
		return true;
	}
	public function postToBlogWithBlogName($strDefaultBlogName = 'grouponia.com', $bForceBlogUpdate = false) {
		
		/* @var $objDealFeedBlogPost DealFeedBlogPost */
		// get blogpost object for this deal
		$thisBlogPost = null;
		$collDealFeedBlogPost = $this->getDealFeedBlogPosts();
		foreach ($collDealFeedBlogPost as $objDealFeedBlogPost) {
			if ($strDefaultBlogName == $objDealFeedBlogPost->getBlogName()) {
				$thisBlogPost = $objDealFeedBlogPost; // by reference
			}
		}
		if (!$thisBlogPost instanceof DealFeedBlogPost) {
			// no blogpost for this deal, so...
			
			$blogCheckStart = CheckPointTime('blog check start '.$strDefaultBlogName);
			// for info only
			$con = Propel::getConnection(DealFeedPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
			
			// check for existing blogpost for similar deals...
			$objDealFeedCheck = DealFeedQuery::create()
				->filterBySubject($this->getSubject())
				->filterByTitle($this->getTitle())
				->filterByIsActive(1)
				->useDealFeedBlogPostQuery()
					->filterByBlogName($strDefaultBlogName)
				->endUse()
				->useBusinessQuery()
					->filterByCompanyName($this->getBusiness()->getCompanyName())
				->endUse()
				->findOne($con);
			
			$blogCheckEnd = CheckPointTime('blog check end '.$strDefaultBlogName);
			write_app_log($blogCheckEnd-$blogCheckStart . ' blog check ' . $this->getPermalink() . '@' . $strDefaultBlogName . "\n");
			
			if ($objDealFeedCheck instanceof DealFeed) {
				// another similar deal exists that 
				// has been posted to specified blog
				write_app_log('*** Duplicate blog entry found at '.$this->getPermalink().'@'.$strDefaultBlogName.' "'.$this->getSubject().'" "'.$this->getTitle()."\"\n");
				return false;
			}
			
			// create new blog post
			$thisBlogPost = new DealFeedBlogPost();
			$thisBlogPost->setBlogName($strDefaultBlogName);
			$this->addDealFeedBlogPost($thisBlogPost);
		}
		
		$blogPostStart = CheckPointTime('blog post start '.$strDefaultBlogName);
		// post to blog...
		try {
			$status = $thisBlogPost->postToBlog($bForceBlogUpdate);
			
			// if we didn't post to blog for some reason... don't assoc to obj.
			if (0 == $thisBlogPost->getPostId()) {
				write_app_log("deleting blogpost " .$this->getPermalink(). "\n");
				$thisBlogPost->delete();
				return FALSE;
			}
			
			// returned false for some other reason... not forced
			if ($status === false) {
				return false;
			}
		} catch (Exception $e) {
			write_app_log('DealFeed exception: '.$e->getMessage());
			return false;
		}
		$blogPostEnd = CheckPointTime('blog post end '.$strDefaultBlogName);
		write_app_log($blogPostEnd-$blogPostStart . ' blog post ' . $this->getPermalink() . '@' . $strDefaultBlogName . "\n");
		
		return TRUE;
	}
	
	public function save(PropelPDO $conn = null) {
		
		if($this->isNew()) {
			$this->setIsActive(1);
			$this->setDateCreated(time());
			
		}
		if($this->isModified()) {
			$this->setDateModified(time());
		}
		
		parent::save($conn);
	}

} // DealFeed
