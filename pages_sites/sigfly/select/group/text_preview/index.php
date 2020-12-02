<form name="preview_ad" action="<?=$_SERVER['SCRIPT_NAME'];?>" method="POST">
<input name="page" value="<?= $page ?>" type="hidden">

<span class="mainText"><?=tabs_select_main(PAGE_PARENT_C);?></span>

<p><span class="mainText">Use your browser back button to make any changes until you are satisfied with
the results.  When ready, <a href="<?php printf("/%s.htm", str_replace('/', '-', PAGE_PARENT_C));?>">click here</a> 
to continue to the next page.</span></p>

<?

while (list(,$adTag) = each($TextAdTags)) {
	printf("<br>%s\n\n", $adTag);
}


?>

</form>

