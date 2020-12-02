<?php



/**
 * Skeleton subclass for representing a row from the 'user_agent' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.komideals
 */
class UserAgent extends BaseUserAgent {
	
	public function setUserAgent($strUserAgent) {
		
		$arrBrowser = get_browser($strUserAgent, true); // true = return array
		//object(stdClass)#193 (31) {
		//  ["browser_name_regex"]=>
		//  string(87) "^mozilla/5\.0 (windows; .*; windows nt 6\.1; .*; rv:1\.9\.2.*) gecko/.* firefox/3\.6.*$"
		//  ["browser_name_pattern"]=>
		//  string(75) "Mozilla/5.0 (Windows; *; Windows NT 6.1; *; rv:1.9.2*) Gecko/* Firefox/3.6*"
		$this->setParent($arrBrowser['parent']);
		//  ["parent"]=>
		//  string(11) "Firefox 3.6"
		$this->setPlatform($arrBrowser['platform']);
		//  ["platform"]=>
		//  string(4) "Win7"
		$this->setWin32($arrBrowser['win32']);
		//  ["win32"]=>
		//  string(1) "1"
		$this->setBrowser($arrBrowser['browser']);
		//  ["browser"]=>
		//  string(7) "Firefox"
		$this->setVersion($arrBrowser['version']);
		//  ["version"]=>
		//  string(3) "3.6"
		$this->setMajorver($arrBrowser['majorver']);
		//  ["majorver"]=>
		//  string(1) "3"
		$this->setMinorver($arrBrowser['minorver']);
		//  ["minorver"]=>
		//  string(1) "6"
		$this->setFrames($arrBrowser['frames']);
		//  ["frames"]=>
		//  string(1) "1"
		$this->setIframes($arrBrowser['iframes']);
		//  ["iframes"]=>
		//  string(1) "1"
		$this->setTables($arrBrowser['tables']);
		//  ["tables"]=>
		//  string(1) "1"
		$this->setCookies($arrBrowser['cookies']);
		//  ["cookies"]=>
		//  string(1) "1"
		$this->setJavaapplets($arrBrowser['javaapplets']);
		//  ["javaapplets"]=>
		//  string(1) "1"
		$this->setJavascript($arrBrowser['javascript']);
		//  ["javascript"]=>
		//  string(1) "1"
		$this->setCssversion($arrBrowser['cssversion']);
		//  ["cssversion"]=>
		//  string(1) "3"
		$this->setSupportscss($arrBrowser['supportscss']);
		//  ["supportscss"]=>
		//  string(1) "1"
		$this->setAlpha($arrBrowser['alpha']);
		//  ["alpha"]=>
		//  string(0) ""
		$this->setBeta($arrBrowser['beta']);
		//  ["beta"]=>
		//  string(0) ""
		$this->setWin16($arrBrowser['win16']);
		//  ["win16"]=>
		//  string(0) ""
		$this->setWin64($arrBrowser['win64']);
		//  ["win64"]=>
		//  string(0) ""
		$this->setBackgroundsounds($arrBrowser['backgroundsounds']);
		//  ["backgroundsounds"]=>
		//  string(0) ""
		$this->setCdf($arrBrowser['cdf']);
		//  ["cdf"]=>
		//  string(0) ""
		$this->setVbscript($arrBrowser['vbscript']);
		//  ["vbscript"]=>
		//  string(0) ""
		$this->setActivexcontrols($arrBrowser['activexcontrols']);
		//  ["activexcontrols"]=>
		//  string(0) ""
		$this->setIsbanned($arrBrowser['isbanned']);
		//  ["isbanned"]=>
		//  string(0) ""
		$this->setIsmobiledevice($arrBrowser['ismobiledevice']);
		//  ["ismobiledevice"]=>
		//  string(0) ""
		$this->setIssyndicationreader($arrBrowser['issyndicationreader']);
		//  ["issyndicationreader"]=>
		//  string(0) ""
		$this->setCrawler($arrBrowser['crawler']);
		//  ["crawler"]=>
		//  string(0) ""
		$this->setAol($arrBrowser['aol']);
		//  ["aol"]=>
		//  string(0) ""
		$this->setAolversion($arrBrowser['aolversion']);
		//  ["aolversion"]=>
		//  string(1) "0"
		//}
		
		parent::setUserAgent($strUserAgent);
		return $this;
	}
	
	public function save(PropelPDO $conn = null) {
		
		if($this->isNew()) {
//			$this->setIsActive(1);
//			$this->setDateCreated(time());
//			$this->setRemoteAddrCreated($_SERVER['REMOTE_ADDR']);
			
		}
		if($this->isModified()) {
			// do stuff if object has been modified
			// such as change date modified or save changes to changelog database
//			$this->setDateModified(time());
//			$this->setRemoteAddrModified($_SERVER['REMOTE_ADDR']);
		}
		
		parent::save($conn);
		return $this;
	}

} // UserAgent
