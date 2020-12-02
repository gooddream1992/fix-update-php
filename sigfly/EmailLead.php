<?php



/**
 * Skeleton subclass for representing a row from the 'email_lead' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.sigfly
 */
class EmailLead extends BaseEmailLead {
	
	public function save(PropelPDO $conn = null) {
		
		if($this->isNew()) {
			$this->setIsActive(1);
			$this->setDateCreated(time());
			$this->setRemoteAddr($_SERVER["REMOTE_ADDR"]);
			
		}
		if($this->isModified()) {
//			$this->setDateModified(time());
		}
		
		parent::save($conn);
	}

} // EmailLead
