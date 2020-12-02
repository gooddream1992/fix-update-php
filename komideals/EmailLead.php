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
 * @package    propel.generator.komideals
 */
class EmailLead extends BaseEmailLead {
		
	public function getAffiliateName() {
		
		switch ($this->getAffiliateId()) {
			case '2':
			case '3':
				$name = 'Grouponia.com';
			break;
			
			case '4':
				$name = 'DealGrater.com';
			break;
			
			case '5':
				$name = 'DailyCouponds.com';
			break;
			
			case '6':
				$name = 'Deals2Inbox.com';
			break;
			
			case '7':
				$name = 'KoreamDeals.com';
			break;
			
			case '8':
				$name = 'KomiDaily.com';
			break;
			
			case '9':
				$name = '4RealCheap.com';
			break;
			
			default:
				$name = 'Unknown';
			break;
		}
		
		return $name;
	}
	
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
