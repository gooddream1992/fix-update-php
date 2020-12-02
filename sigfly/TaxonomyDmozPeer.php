<?php



/**
 * Skeleton subclass for performing query and update operations on the 'taxonomy_dmoz' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.sigfly
 */
class TaxonomyDmozPeer extends BaseTaxonomyDmozPeer {

	public static function saveTaxonomiesFromArray($arrTaxonomies) {
//		return true;
	
		/* @var $objDefaultTaxonomyDmoz TaxonomyDmoz */
		$objDefaultTaxonomyDmoz = TaxonomyDmozQuery::create()->findPk(1);
		if (!$objDefaultTaxonomyDmoz instanceof TaxonomyDmoz) {
			throw 'Cannot find default TaxonomyDmoz, line: '.__LINE__;
		}
		
		foreach ($arrTaxonomies as $strTaxonomyDmoz) {
						
			$objTaxonomyDmoz = TaxonomyDmozQuery::create()->findOneBySlug(format_slug($strTaxonomyDmoz));
			if ($objTaxonomyDmoz instanceof TaxonomyDmoz) {
				continue; // to next in loop
			}
// Top/Regional/North_America/United_States/Washington/Metro_Areas/Seattle-Tacoma_Metro/
//	Business_and_Economy/Beauty_and_Cosmetic_Services
			$arrParts = explode('/', $strTaxonomyDmoz);
			$arrObjs = array();
			foreach ($arrParts as $strPart) {
				if (!count($arrObjs) && $strPart == 'Top') {
					continue;
				}
				if (count($arrObjs) && $arrObjs[count($arrObjs)-1] instanceof TaxonomyDmoz) {
					$objLastTax = $arrObjs[count($arrObjs)-1];
				} else {
					$objLastTax = $objDefaultTaxonomyDmoz;
				}
					
				$objTaxonomyDmoz = TaxonomyDmozQuery::create()->findOneBySlug($objLastTax->getSlug().'-'.format_slug($strPart));
				if (!$objTaxonomyDmoz instanceof TaxonomyDmoz) {
					$objTaxonomyDmoz = new TaxonomyDmoz();
					$objTaxonomyDmoz->setSlugPart(format_slug($strPart));
					$objTaxonomyDmoz->setTaxonomyName(str_replace('_', ' ', $strPart));
					/* @var $objLastTax TaxonomyDmoz */
					$objTaxonomyDmoz->setSlug($objLastTax->getSlug().'-'.format_slug($strPart));
					$objTaxonomyDmoz->setParentId($objLastTax->getId());
				}
				$arrObjs[] = $objTaxonomyDmoz;
				$objTaxonomyDmoz->save();
			}
		}
		return true;
	}

} // TaxonomyDmozPeer
