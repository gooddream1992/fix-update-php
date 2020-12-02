<?php

/**
 * Skeleton subclass for representing a row from the 'category' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.sigfly
 */
class Category extends BaseCategory {
	
	private function formatSlug() {
		$slug = strtolower(eregi_replace("[^0-9a-zA-Z]", "-", $this->getCategoryName()));
		while (strpos($slug, '--')) {
			$slug = str_replace('--', '-', $slug);
		}
		$slug = trim($slug, '-');
		
		$this->setSlug($slug);
	}
	
	public function save(PropelPDO $conn = null) {
		
		if($this->isNew()) {
			$this->setIsActive(1);
			$this->setDateCreated(time());
		
			if(!$this->isColumnModified(CategoryPeer::SLUG)) {
				$this->formatSlug();
			}
		}
		if($this->isModified()) {
			// do stuff if object has been modified
			// such as change date modified or save changes to changelog database
			
		}
		
		parent::save($conn);
	}

} // Category
