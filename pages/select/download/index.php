<form action="<?=$_SERVER['SCRIPT_NAME'];?>" method="POST">
<input type="hidden" name="page" value="<?=PAGE_C;?>">

<div align="left">

<p>The latest versions:</p>


<p>WordPress: DealFeed by Category: 0.7.0 <a href=/downloads/dealfeed_by_category_0.7.0.zip>Download</a>
</div>
<div>
<p>Your Affiliate ID is required to keep track of stats and commission. Your Affiliate ID is: <?php echo $objSession->getUser()->getDefaultBusiness()->getId(); ?>
</p></div>


</form>
