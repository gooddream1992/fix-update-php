<form action="<?=$_SERVER['SCRIPT_NAME'];?>" method="POST">
<input type="hidden" name="page" value="<?=PAGE_C;?>">

<div align="left">

<table width="100%" border="0" cellspacing="0" cellpadding="7">
	<tr bgcolor="#e5e5e5">
		<th class="mainText" valign="top" align="right"><b>Date</b></td>
		<th class="mainText" valign="top"><b>Card (Trn.&nbsp;ID)</b></td>
		<th class="mainText" valign="top"><b>Comment</b></td>
		<th class="mainText" valign="top" align="center"><b>Amount</b></td>
	</tr>
<?

$Payments = $User->getPaymentsByDateCreated();

if(count($Payments)) {
	// list payments
	$i = 0;
	foreach ($Payments as $Payment) {
		/* @var $Payment Payment */
		
		printf("\t<tr bgcolor=\"#%s\">\n", $i++&1? 'ffffff': 'f5f5f5');
		printf("\t	<td class=\"mainText\" valign=\"top\" align=\"right\" nowrap>%s</td>\n", $Payment->getDateCreated());
		printf("\t	<td class=\"mainText\" valign=\"top\">*-%s (%s)</td>\n", $Payment->getPaymentMethod()->getNumberLastFour(), $Payment->getOid());
		printf("\t	<td class=\"mainText\" valign=\"top\">%s%s Comment: %s</td>\n", ($Payment->getIsDeclined())?'<em>(declined)</em>':'', ($Payment->getIsPaid())?'<em>(paid)</em>':'', htmlspecialchars($Payment->getComment()));
		printf("\t	<td class=\"mainText\" valign=\"top\" align=\"right\" nowrap><span style=\"color: %s;\">\$%.02f</span></td>\n", ($Payment->getAmount() < 0)? 'red':'black', $Payment->getAmount());
		printf("\t</tr>\n");
	}
	
	
} else {
	
	printf("<tr> 
		<td colspan=\"4\" class=\"mainText\" align=\"center\"><em>(There is no data avaialble at this time.)</em></td>
	</tr>");
}


?>

</table>
</div>
</form>
