<form action="<?=$_SERVER['SCRIPT_NAME'];?>" method="POST">
<input type="hidden" name="page" value="<?=PAGE_C;?>">

<div align="left">

		<a href="/<?php printf("%s-payment_history", str_replace('/', '-', PAGE_C)); ?>.htm">View your payment history...</a>
		<br><a href="/<?php printf("%s-payment_method", str_replace('/', '-', PAGE_C)); ?>.htm">Change your billing payment method...</a>

</div>

</form>
