<?php



/**
 * Skeleton subclass for representing a row from the 'deal_feed_click' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.komideals
 */
class DealFeedClick extends BaseDealFeedClick {
	
	public function save(PropelPDO $conn = null) {
		
		if($this->isNew()) {
//			$this->setIsActive(1);
			$this->setDateCreated(time());
			
		}
		if($this->isModified()) {
			// do stuff if object has been modified
			// such as change date modified or save changes to changelog database
//			$this->setDateModified(time());
		}
		
		parent::save($conn);
	}

} // DealFeedClick
