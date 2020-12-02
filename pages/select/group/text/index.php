<form name="create_ad" action="<?=$_SERVER['SCRIPT_NAME'];?>" method="POST">
<input name="page" value="<?= $page ?>" type="hidden">

<span class="mainText"><?=tabs_select_main(PAGE_PARENT_C);?></span>

<?


$buttonText = ( ! $AdMedia->isNew())? 'Save Changes' : 'Create Ad and go to Preview';
echo $AdMedia->getForm($buttonText);

?>

</form>

