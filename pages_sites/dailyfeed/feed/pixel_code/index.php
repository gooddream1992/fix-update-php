<?

/* @var $ThisUser User */

try {
	
	if ((int)$_GET['uid'] == 0) {
		throw new Exception('A valid UID must be specified.');
	}
	
	if ((int)$_GET['id'] == 0) {
		throw new Exception('A valid Affiliate ID must be specified.');
	}

	$crit = new Criteria();
	$crit->add(UserPeer::REFERRAL_UID , $_GET['uid'], Criteria::EQUAL );
	$crit->add(UserPeer::REFERRAL , $_GET['id'], Criteria::EQUAL );
	
	$ThisUser = UserPeer::doSelectOne($crit);
	
	$arrUserXML = array();
	
	$arrXmlElements = array();
	$arrXmlElements[] = 'userid';
	$arrXmlElements[] = 'affiliateuserid';
	$arrXmlElements[] = 'dateregistered';
	$arrXmlElements[] = 'isactive';
	$arrXmlElements[] = 'pixelid';
	$arrXmlElements[] = 'javascript';
	$arrXmlElements[] = 'javascriptsecure';
	
	if ($ThisUser != null) {
		$arrUserXML[] = sprintf("
		<userid><![CDATA[%d]]></userid>
	<affiliateuserid><![CDATA[%d]]></affiliateuserid>
	<dateregistered><![CDATA[%s]]></dateregistered>
	<isactive><![CDATA[%s]]></isactive>
	"
				, $ThisUser->getId()
				, $ThisUser->getReferralUid()
				, $ThisUser->getDateCreated()
				, $ThisUser->getIsActive()
				);
	}
	
} catch (Exception $e) {
	
	
	$arrXmlElements = array();
	$arrXmlElements[] = 'error';
	$arrXmlElements[] = 'information';
	
	$arrUserXML[] = sprintf("
	<error><![CDATA[%s]]></error>
	<information><![CDATA[Please see the Affiliate API documentation for more information: http://%s/help-affiliate-api.htm]]></information>
	"
		, $e->getMessage()
		, $_SERVER['HTTP_HOST']
		);

}

//vdump(str_replace(',', ',<br>', Propel::getConnection()->lastQuery));


echo "<?xml version='1.0' ?>\n";

?><!DOCTYPE response [
  <!ELEMENT response (record)* >
  <!ELEMENT record (<?=implode(', ', $arrXmlElements);?>)>
<?
foreach ($arrXmlElements as $strXmlElement) {
	printf("  <!ELEMENT %s (#PCDATA)>\n", $strXmlElement);
}
?>
]>

<response>

<record>
<?=implode("</record>\n\n<record>\n", $arrUserXML);?>
</record>

</response>
