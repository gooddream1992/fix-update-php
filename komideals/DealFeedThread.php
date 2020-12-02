<?php



/**
 * Skeleton subclass for representing a row from the 'deal_feed_thread' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.komideals
 */
class DealFeedThread extends BaseDealFeedThread {
	
	public function save(PropelPDO $conn = null) {
		
		if($this->isNew()) {
			$this->setIsActive(1);
			
			// if not set before saving
			if ($this->getDateCreated('U') == 0) {
				$this->setDateCreated(time());
			}
			
		}
		if($this->isModified()) {
//			$this->setDateModified(time());
		}
		
		parent::save($conn);
	}

} // DealFeedThread
