<?php

/**
 * Skeleton subclass for performing query and update operations on the 'category' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.komideals
 */
class CategoryPeer extends BaseCategoryPeer {

	public static function saveCategoriesFromArray($arrCategories) {
	
		/* @var $objDefaultCategory Category */
		$objDefaultCategory = CategoryQuery::create()->findPk(1);
		if (!$objDefaultCategory instanceof Category) {
			throw 'Cannot find default category, line: '.__LINE__;
		}
		
		foreach ($arrCategories as $strCategory) {
			$objCategory = CategoryQuery::create()->findOneByCategoryName($strCategory);
			if (!($objCategory instanceof Category)) {
				$objCategory = new Category();
				$objCategory->setCategoryName($strCategory);
				$objCategory->setParentId($objDefaultCategory->getPrimaryKey());
				$objCategory->save();
			}
			unset($objCategory);
		}
		return true;
	}

} // CategoryPeer
