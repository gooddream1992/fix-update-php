<?

/* @var $ThisUser User */

// 0    1  2
// YYYY-mm-dd
$aStartTime = explode('-', $_GET['s']);
$aEndTime = explode('-', $_GET['e']);

$sTime = mktime ( 0, 0, 1, $aStartTime[1], $aStartTime[2], $aStartTime[0]);
$eTime = mktime ( 0, 0, 1, $aEndTime[1], $aEndTime[2], $aEndTime[0]);

$crit = new Criteria();
$crit->add(UserPeer::REFERRAL , $_GET['id'], Criteria::EQUAL );

$crit->add(UserPeer::DATE_CREATED , $eTime, Criteria::LESS_THAN );

$c1 = $crit->getNewCriterion(UserPeer::DATE_CREATED , $sTime, Criteria::GREATER_EQUAL );

$crit->addAnd($c1);

$collUsers = UserPeer::doSelect($crit);

$arrUserXML = array();

foreach ($collUsers as $ThisUser) {
	$arrUserXML[] = sprintf("<userid><![CDATA[%d]]></userid>
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

//vdump(str_replace(',', ',<br>', Propel::getConnection()->lastQuery));


echo "<?xml version='1.0' ?>\n";

?><!DOCTYPE response [
  <!ELEMENT response (record)* >
  <!ELEMENT record (userid, affiliateuserid, dateregistered, isactive)>
  <!ELEMENT userid (#PCDATA)>
  <!ELEMENT affiliateuserid (#PCDATA)>
  <!ELEMENT dateregistered (#PCDATA)>
  <!ELEMENT isactive (#PCDATA)>
]>

<response>

<record>
<?=implode("</record>\n\n<record>\n", $arrUserXML);?>
</record>

</response>
