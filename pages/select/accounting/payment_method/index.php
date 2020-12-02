<form name="billing" action="<?=$_SERVER['SCRIPT_NAME'];?>" method="POST">
<input name="page" value="<?= PAGE_C ?>" type="hidden">

<?=$PaymentMethod->getPaymentMethodForm();?>

</form>

