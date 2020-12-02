<form name="create_ad" action="<?=$_SERVER['SCRIPT_NAME'];?>" method="POST" enctype="multipart/form-data">
<input name="page" value="<?= PAGE_C; ?>" type="hidden">

<table width="100%" border="0" cellspacing="0" cellpadding="7">
	<tr> 
		<td colspan="3" nowrap class="mainText" style="padding:0pt;"><?=tabs_select_main(PAGE_C);?></td>
	</tr>
		
	<tr>
		<td class="mainText" valign="top">
		
<div align="left">
<span class="mainText">Here you are allowed but not required to upload one text banner and up to 3 banners of 3 different sizes.
Click <em>&quot;Add new banner&quot;</em> to add a new banner in that slot.
</span>
</div>
<table width="100%" border="0" cellpadding="3">

<?

//////// ----------- text banner ---------- //////////
/* @var $AdMediaText AdMediaText */

printf("<tr><td colspan=3 class=mainText><hr></td></tr>\n");
printf("<tr bgcolor=\"#e0e0e0\"><td colspan=3 class=mainText><b>Default Text Ad</b></td></tr>\n");
printf("<tr><td colspan=3 class=mainText>");

if($AdMediaText->isNew()) {
	
	$mediaName = 'New Banner';
	$editLink = sprintf("<a href=\"/%s-text.htm\"><img src=\"/images/img/b_newdb.png\" border=\"0\" height=\"16\" width=\"16\">Add new text banner</a>", str_replace('/', '-', PAGE_C));
	$previewLink = '';
	$clickUrlTag = '';
	
} else {
	
	$mediaName = $AdMediaText->getMediaName();
	$previewLink = sprintf("<a href=\"/%s-text_preview.htm?id=%d\" title=\"Preview this text banner.\"><img src=\"/images/img/b_view.png\" border=\"0\" height=\"16\" width=\"16\">Preview</a>", str_replace('/', '-', PAGE_C), $AdMediaText->getId());
	$editLink = sprintf("<a href=\"/%s-text.htm?id=%d\" title=\"Edit this text banner.\"><img src=\"/images/img/b_edit.png\" border=\"0\" height=\"16\" width=\"16\">Edit</a>", str_replace('/', '-', PAGE_C), $AdMediaText->getId());
	
	$shortDisplayUrl = $AdMediaText->getDisplayUrl();
	if(strlen($shortDisplayUrl) > 42) {
		// shorten it
		$shortDisplayUrl = sprintf("%s ... %s", substr($shortDisplayUrl, 0, 18), substr($shortDisplayUrl, -18));
	}
	$clickUrlTag = sprintf("<br><a href=\"%s\" title=\"Open in New Window: %s\" target=\"_blank\"><img src=\"/images/img/b_nextpage.png\" border=\"0\" height=\"13\" width=\"8\">&nbsp;%s</a>", $AdMediaText->getClickUrl(), $AdMediaText->getClickUrl(), htmlspecialchars($shortDisplayUrl));
}

printf("%s %s<br><b>%s</b>%s</td>\n", $previewLink, $editLink, htmlspecialchars($mediaName), $clickUrlTag);
printf("</td></tr>\n");

if(strlen($AdMediaText->getDescription())) {
	printf("<tr bgcolor=\"#f5f5f5\"><td colspan=3 class=mainText>%s</td></tr>\n", htmlspecialchars($AdMediaText->getDescription()));
}

//////// ----------- image banners ---------- //////////
printf("<tr><td colspan=3 class=mainText><hr></td></tr>\n");

$image_index = 1;
reset($AdMediaBanners);
while (list($MediaTypeId, $AdMediaBannerArray) = each($AdMediaBanners)) {
	reset($AdMediaBannerArray);
	
	/* @var $MediaType MediaType */
	
//	switch ($MediaType->getWidth().'x'.$MediaType->getHeight()) {
//		case '728x90':
//			printf("<tr bgcolor=\"#e0e0e0\"><td colspan=3 class=mainText><b>%s</b> Dimensions: width: %d pixels; height: %d pixels.</td></tr>\n", $MediaType->getTypeName(), $MediaType->getWidth(), $MediaType->getHeight());
//			break;
//		case '120x600':
			printf("<tr bgcolor=\"#e0e0e0\"><td colspan=3 class=mainText><b>%s</b> Dimensions: width: %d pixels; height: %d pixels.</td></tr>\n", $MediaType->getTypeName(), $MediaType->getWidth(), $MediaType->getHeight());
			printf("<tr>\n");
//			break;
//		case '300x250':
//			printf("<tr bgcolor=\"#e0e0e0\"><td colspan=3 class=mainText><b>%s</b> Dimensions: width: %d pixels; height: %d pixels.</td></tr>\n", $MediaType->getTypeName(), $MediaType->getWidth(), $MediaType->getHeight());
//			break;
//	
//		default:
//			break;
//	}
	
	foreach ($AdMediaBannerArray as $AdMediaBanner) {
		/* @var $AdMediaBanner AdMediaBanner */
		// getImgTag($border=0, $href=null, $scaleH=0, $scaleW=0
		
		
		if($AdMediaBanner->isNew()) {
			
			$mediaName = 'New Banner';
			$imgTag = sprintf("<a href=\"/%s-banner.htm?type_id=%d\"><img src=\"/images/img/b_newdb.png\" border=\"0\" height=\"16\" width=\"16\">Add new banner</a>", str_replace('/', '-', PAGE_C), $MediaType->getId());
			$editLink = '';
			$deleteLink = '';
			$bgcolor = ' bgcolor="#f5f5f5" ';
			$clickUrlTag = '';
			
		} else {
			
			$mediaName = $AdMediaBanner->getMediaName();
			$imgTag = sprintf("<a onmouseover=\"doTooltip(event,%d)\" onmouseout=\"hideTip()\" href=\"%s\"><img src=\"/images/img/b_view.png\" border=\"0\" height=\"16\" width=\"16\">Preview</a>", $image_index++, $AdMediaBanner->getImage()->getImgUrl());
			$editLink = sprintf("<a href=\"/%s-banner.htm?id=%d\" title=\"Edit this banner.\"><img src=\"/images/img/b_edit.png\" border=\"0\" height=\"16\" width=\"16\">Edit</a>", str_replace('/', '-', PAGE_C), $AdMediaBanner->getId());
			$deleteLink = sprintf("<a href=\"%s?delete=%d\" title=\"Delete this banner.\" onclick=\"javascript:confirm_url('Are you sure you wish to delete this banner?', '%s?delete=%d');return false\"><img src=\"/images/img/b_drop.png\" border=\"0\" height=\"16\" width=\"16\">Delete</a>", $_SERVER['SCRIPT_NAME'], $AdMediaBanner->getId(), $_SERVER['SCRIPT_NAME'], $AdMediaBanner->getId());
			$bgcolor = '';
			
			$shortClickUrl = $AdMediaBanner->getClickUrl();
			if(strlen($shortClickUrl) > 42) {
				// shorten it
				$shortClickUrl = sprintf("%s ... %s", substr($shortClickUrl, 0, 18), substr($shortClickUrl, -18));
			}
			$clickUrlTag = sprintf("<br><a href=\"%s\" title=\"Open in New Window: %s\" target=\"_blank\"><img src=\"/images/img/b_nextpage.png\" border=\"0\" height=\"13\" width=\"8\">&nbsp;%s</a>", $AdMediaBanner->getClickUrl(), $AdMediaBanner->getClickUrl(), htmlspecialchars($shortClickUrl));
		}
	
//		switch ($MediaType->getWidth().'x'.$MediaType->getHeight()) {
//			case '728x90':
//			printf("<tr><td colspan=3 class=mainText><b>%s</b> %s %s<br>%s</td></tr>\n", $mediaName, $editLink, $deleteLink, $imgTag);
//				break;
//			case '120x600':
			printf("<td width=\"33%%\" class=mainText valign=top%s>%s %s %s<br><b>%s</b>%s</td>\n", $bgcolor, $imgTag, $editLink, $deleteLink, htmlspecialchars($mediaName), $clickUrlTag);
//				break;
//			case '300x250':
//			printf("<tr><td colspan=3 class=mainText><b>%s</b> %s %s<br>%s</td></tr>\n", $mediaName, $editLink, $deleteLink, $imgTag);
//				break;
//		
//			default:
//				break;
//		}
		
	}
	
	
//	switch ($MediaType->getWidth().'x'.$MediaType->getHeight()) {
//		case '728x90':
//			printf("<tr><td colspan=3 class=mainText><hr></td></tr>\n");
//			break;
//		case '120x600':
			printf("</tr>\n");
			printf("<tr><td colspan=3 class=mainText><hr></td></tr>\n");
//			break;
//		case '300x250':
//			printf("<tr><td colspan=3 class=mainText><hr></td></tr>\n");
//			break;
//	
//		default:
//			break;
//	}
}


?>
</table>

		</td>
	</tr>
</table>

</form>

<!-- layer for image pop-ups -->
<div id="tipDiv" style="position:absolute; visibility:hidden; z-index:100"></div>

