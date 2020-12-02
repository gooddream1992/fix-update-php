
<table width="95%" border="0">
	<tr>
		<td class="txt_head"><h4><?php echo COMPANY_C;?>: <?=breadcrumbs();?></h4></td>
	</tr>
	
	<tr>
		<td class="mainText">
		<b>Ad Groups Needing Pixels</b> (Wilshire login required before showing up here.) <a href="<?=$_SERVER['SCRIPT_NAME'];?>?show_all=1">Show All Queued</a>
<?

foreach ($AdGroupsNeedPixel as $AdGroupNP) {
	/* @var $AdGroupNP AdGroup */
	printf("<br>created: <b>%s</b>, %s, <a href=\"/%s-set_pixel.htm?id=%d&back_page=%s\">set pixel</a>\n", 
		$AdGroupNP->getDateCreated(), $AdGroupNP->getUser()->getEmail(), str_replace('/', '-', PAGE_C), $AdGroupNP->getId(), urlencode($_SERVER['REQUEST_URI']));
}


?>

		</td>
	</tr>
	
	<tr><td><hr></td></tr>
	
	<tr>
		<td class="mainText">
		<b>Ad Groups Needing Processing</b> (Wilshire login required before showing up here.) <a href="<?=$_SERVER['SCRIPT_NAME'];?>?show_all=1">Show All Queued</a>
<?

foreach ($AdGroupsNeedProcessing as $AdGroupNP) {
	/* @var $AdGroupNP AdGroup */
	printf("<br>last modified: <b>%s</b>, %s, <a href=\"/%s-edit.htm?id=%d&back_page=%s\">view/edit</a>\n", 
		$AdGroupNP->getDateModified(), $AdGroupNP->getUser()->getEmail(), str_replace('/', '-', PAGE_C), $AdGroupNP->getId(), urlencode($_SERVER['REQUEST_URI']));
}


?>

		</td>
	</tr>
	<tr><td><hr></td></tr>
	
	<tr>
		<td class="mainText">
		<b>All Ad Groups</b><br>
	<? if($_GET['show_all'] != '1') { ?>
	
		<p>You need to <a href="<?=$_SERVER['SCRIPT_NAME'];?>?show_all=1">Click here</a> to show all.</p>
	
	<? } else { ?>
		<table width="100%">
		
		<? if($_GET['queue_empty'] == '1') { ?>
			<tr>
				<td colspan="5" class="mainText" style="border: 15px solid red;" align="center"><b>Queue empty.  Advertiser has not yet created/uploaded any text or image banner media.</b></td>
			</tr>
		<? } ?>
		
			<tr>
				<td colspan="5" class="mainText"><b><?=intval($AdGroupCount);?> AdGroup<?=($AdGroupCount!=1)?'s':'';?> found</td>
			</tr>
			
			<tr bgcolor="#f5f5f5">
				<td class="mainText"><b>&nbsp;</b></td>
				<td class="mainText"><em>(action)</em> (t/i)</td>
				<td class="mainText"><b>Date Modified</b></td>
				<td class="mainText"><b>Email</b></td>
				<td class="mainText"><b>Company Name</b></td>
			</tr>
		
		<?
		
		$rowNum = (($group-1)*$limit)+1;
		foreach ($AdGroupsAll as $AdGroupAll) {
			/* @var $AdGroupAll AdGroup */
			$bannerCrit = new Criteria();
			$bannerCrit->add(AdMediaBannerPeer::IS_ACTIVE , '1', Criteria::EQUAL );
			$countBanners = count($AdGroupAll->getAdMediaBanners($bannerCrit));
			
			$textCrit = new Criteria();
			$textCrit->add(AdMediaTextPeer::IS_ACTIVE , '1', Criteria::EQUAL );
			$countText = count($AdGroupAll->getAdMediaTexts($textCrit));
			
			$bannerInfo = sprintf("%s/%s", $countText>0?$countText:'-', $countBanners>0?$countBanners:'-');
			
			printf("<tr class=\"mainText\">\n");
			
			printf("<td align=\"right\">%d)</td>\n", $rowNum++);
			printf("<td><a href=\"%s-edit.htm?show_all=1&id=%d&back_page=%s&rand=%d\">view/edit</a> %s</td>\n", str_replace('/', '-', PAGE_C), $AdGroupAll->getId(), urlencode($_SERVER['REQUEST_URI']), rand(1, 9999), $bannerInfo);
			printf("<td><b>%s</b></td>\n", $AdGroupAll->getDateModified());
			printf("<td>%s</td>\n", $AdGroupAll->getUser()->getEmail());
			printf("<td>%s</td>\n", $AdGroupAll->getUser()->getCompanyName());
			
			printf("</tr>\n\n");
		}
		
		if(count($AdGroupsAll) == 0) {
			printf("<tr class=\"mainText\">\n");
			printf("<td colspan=\"5\"><em>No AdGroups found.</em></td>\n");
			printf("</tr>\n\n");
		}
		
		?>
		
			
			<tr>
				<td colspan="5" class="mainText">
				<hr>
				<?
				
				$link = sprintf("%s?show_all=1", $_SERVER['SCRIPT_NAME']);
				echo 'Pages: ';
				PageLinks($group, $numpages, $link);
				
				?>
				</td>
			</tr>
		</table>
	<? } // endif showing all adgroups
	?>
		</td>
	</tr>

</table>
