<form action="<?=$_SERVER['SCRIPT_NAME'];?>" method="POST">
<input type="hidden" name="page" value="<?=PAGE_C;?>">

<div align="left">

<p>The latest versions:</p>


<p>WordPress: DealFeed by Category: 0.6.0 <a href=/downloads/dealfeed_by_category_0.6.0.zip>Download</a>
</div>
<div>
<p>Your Pubisher ID is required to keep track of stats and commission. Your Publisher ID is: <?php echo $objSession->getUser()->getDefaultBusiness()->getId(); ?>
</p></div>


</form>
