<form name="create_ad" action="<?=$_SERVER['SCRIPT_NAME'];?>" method="POST" enctype="multipart/form-data">
<input name="page" value="<?= PAGE_C; ?>" type="hidden">
<input name="id" value="<?= (int)$id; ?>" type="hidden">
<input name="type_id" value="<?= (int)$type_id; ?>" type="hidden">

<span class="mainText"><?=tabs_select_main(PAGE_PARENT_C);?></span>

<?

$buttonText = (int)$id > 0? 'Save Changes' : 'Upload This Banner';

echo $AdMediaBanner->getFormHeader();
echo $AdMediaBanner->getForm();
echo $AdMediaBanner->getFormFooter( $buttonText );

?>

</form>

