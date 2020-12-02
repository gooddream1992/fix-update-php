<?php 
global $User;
?>
<form action="<?=$_SERVER['SCRIPT_NAME'];?>" method="POST">
<input type="hidden" name="page" value="<?=PAGE_C;?>">

<div align="left">

<?=$User->getDefaultBusiness()->getFormHeader('Edit Your Affiliate Payment Information'); ?>
<?=$User->getDefaultBusiness()->getForm($User->getDefaultBusiness()->getFieldsUserEditable()); ?>
<?=$User->getDefaultBusiness()->getFormFooter(' Save '); ?>

</div>
</form>
