<form action="<?=$_SERVER['SCRIPT_NAME'];?>" method="POST">
<input type="hidden" name="page" value="<?=PAGE_C;?>">

<div align="left">

<?=$User->getFormHeader('Edit Your Information'); ?>
<?=$User->getForm($User->getFieldsUserEditable()); ?>
<?=$User->getFormFooter(' Save '); ?>

</div>
</form>
