<? /* @var $WorkingUser User */ ?>

<form name="" action="<?=$_SERVER['SCRIPT_NAME'];?>" method="POST">
<input type="hidden" name="page" value="<?=PAGE_C;?>">
<input type="hidden" name="id" value="<?=$WorkingUser->getId();?>">
<input type="hidden" name="back_page" value="<?=htmlspecialchars($back_page);?>">
<input type="hidden" name="rand" value="<?=rand(10000000, 99999999)?>">

<table width="95%" border="0" cellpadding="4">
	<tr>
		<td class="txt_head" colspan="2"><h4><?php echo COMPANY_C;?>: <?=breadcrumbs();?></h4></td>
	</tr>
	
	<?

	if(strlen($back_page)) {
		printf("
		<tr>
			<td class=\"mainText\" colspan=\"2\" align=\"right\">When you are done, <a href=\"%s\">Click here</a> to go back to the last page.</td>
		</tr>
		", $back_page);
	}
	
	?>
	
	<tr bgcolor="#e5e5e5">
		<td class="mainText" colspan="2"><b>Billing Info &amp; History</b></td>
	</tr>
	<tr>
		<td class="mainText"><b>User Id</b></td>
		<td class="mainText">
		<?=$WorkingUser->getId();?>
		<b>&rarr; </b><a href="/sm_reports-advertisers-edit.htm?back_page=<?=urlencode($_SERVER['REQUEST_URI']);?>&id=<?=$WorkingUser->getId();?>">edit user</a>
		</td>
	</tr>
	<tr>
		<td class="mainText"><b>Email</b></td>
		<td class="mainText"><?=$WorkingUser->getEmail();?> </td>
	</tr>
	<tr>
		<td class="mainText"><b>Company Name</b></td>
		<td class="mainText"><?=$WorkingUser->getCompanyName();?> </td>
	</tr>
	<tr>
		<td class="mainText"><b>User Account Expiration</b></td>
		<td class="mainText"><?=$WorkingUser->getDateExpires();?> </td>
	</tr>
	<tr>
		<td class="mainText"><b>CC info:</b></td>
		<td class="mainText">
		<?
		
		if ($PaymentMethod->isNew()) {
			echo '<em>(No payment info on file for user.)</em>';
		} else {
			printf("Type: %s", $PaymentMethod->getTypeName());
			printf(" -- CC Last 4: %s", $PaymentMethod->getNumberLastFour());
			printf(" -- Expiration: %s/%s", $PaymentMethod->getExpirationMonth(), $PaymentMethod->getExpirationYear());
		}
		
		?></td>
	</tr>
	<tr>
		<td colspan="2"><hr></td>
	</tr>
</table>

<table width="95%" border="0" cellpadding="4">

<?

if (count($arrErrors) > 0) {
	printf("<tr><td colspan=\"2\" class=\"mainText\" valign=\"top\" style=\"border: 15px solid red; padding: 10px\"><li>%s</td></tr>\n", implode(' <li>', $arrErrors));
}

if (count($arrStatus) > 0) {
	printf("<tr><td colspan=\"2\" class=\"mainText\" valign=\"top\" style=\"border: 15px solid green; padding: 10px\"><li>%s</td></tr>\n", implode(' <li>', $arrStatus));
}

?>
		
	<tr>
		<td class="mainText" colspan="2" bgcolor="#e5e5e5"><b>Make Payment</b></td>
	</tr>
<?

if ($PaymentMethod->isNew()) {

?>
	<tr>
		<td class="mainText" align="center" colspan="2"><em>(User payment info must be on file for this user before payments can be made here.)</em></td>
	</tr>
<?

} else {

?>

	
	<tr>
		<td class="mainText"><b>Comment</b></td>
		<td class="mainText"><input type="text" name="comment" value="<?=htmlspecialchars($_POST['comment']);?>" size="55" maxlength="255"></td>
	</tr>
	<tr>
		<td class="mainText"><b>Charge</b></td>
		<td class="mainText">
		<select name="months">
		<?
		
		$i = 0;
		while ($i<120) {
			$i++;
			printf("<option%s value=\"%d\">%d</option>\n", ((int)$_POST['months'] == $i)?' selected':'', $i, $i);
		}

		?>
		</select> Month(s) at the rate of 
		$<input type="text" name="amount_per_month" value="<?printf("%.02f", $_POST['amount_per_month']);?>" size="5" maxlength="7"> 
		per month.

		</td>
	</tr>
	<tr>
		<td class="mainText">&nbsp;</td>
		<td class="mainText"><input type="submit" value="Charge User Now"> -- Please have patience as this process may take a while.</td>
	</tr>
	<tr>
		<td colspan="2"><table width="100%" border="1" cellpadding="10"><tr><td class="mainText">
		<b>Note:</b>
		<ul>
		<li>User's expiration date will be advanced <em>n</em> months (as specified in drop-down list above).</li>
		<li>To advance expiration date without charging user's account, enter <b>$0.00</b> as the rate to charge per month.</li>
		<li>Changing the rate per month will not affect future charges based on the user's payment plan.</li>
		<li><b>Total amount charged will be <em>n</em> months times the rate per month.  Ex. User will be charged $40 if 2 months is selected at the rate of $20 per month.</b></li>
		</ul>
		</td></tr></table></td>
	</tr>
<?

}

?>
	<tr>
		<td colspan="2"><hr></td>
	</tr>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="7">
	<tr bgcolor="#e5e5e5">
		<td class="mainText" valign="top" align="right"><b>Date</b></td>
		<td class="mainText" valign="top"><b>Card (Trn.&nbsp;ID)</b></td>
		<td class="mainText" valign="top"><b>Comment</b></td>
		<td class="mainText" valign="top" align="right"><b>Amount</b></td>
	</tr>
	<tr bgcolor="#000000"> 
		<td colspan="4" style="padding:0pt;"><img src="/images/dot.gif" border="0" height="1" width="1"></td>
	</tr>
<?

$Payments = $WorkingUser->getPaymentsByDateCreated();

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

</form>
