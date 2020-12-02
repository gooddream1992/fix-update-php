
<table width="95%" border="0">
	<tr>
		<td class="txt_head" colspan="2"><h4><?php echo COMPANY_C;?>: <?=breadcrumbs();?></h4></td>
	</tr>
	
	<?

	if(strlen($_GET['back_page'])) {
		printf("
		<tr>
			<td class=\"mainText\" colspan=\"2\" align=\"right\">When you are done, <a href=\"%s\">Click here</a> to go back to the last page.</td>
		</tr>
		", $_GET['back_page']);
	}
	
	?>
	
	<tr>
		<td class="mainText" colspan="2" bgcolor="#d5d5d5"><b>Edit Ad Groups and Banners</b></td>
	</tr>
	<tr>
		<td class="mainText"><b>User Id</b></td>
		<td class="mainText">
		<?=$WorkingAdGroup->getUser()->getId();?>
		<b>&rarr; </b><a href="/sm_reports-advertisers-edit.htm?back_page=<?=urlencode($_SERVER['REQUEST_URI']);?>&id=<?=$WorkingAdGroup->getUser()->getId();?>">edit user</a>
		</td>
	</tr>
	<tr>
		<td class="mainText"><b>Email</b></td>
		<td class="mainText"><?=$WorkingAdGroup->getUser()->getEmail();?> </td>
	</tr>
	<tr>
		<td class="mainText"><b>Company Name</b></td>
		<td class="mainText"><?=$WorkingAdGroup->getUser()->getCompanyName();?> </td>
	</tr>
	<tr>
		<td class="mainText"><b>Wilshire</b></td>
		<td class="mainText" nowrap>
		<b>&rarr; U:</b> <input type="text" style="background-color: #d5d5d5;" value="<?=htmlspecialchars($WorkingAdGroup->getUser()->getWilshireUsername());?>" size="<?=strlen($WorkingAdGroup->getUser()->getWilshireUsername())+1;?>">
		<b>&rarr; P:</b> <input type="text" style="background-color: #d5d5d5;" value="<?=htmlspecialchars($WorkingAdGroup->getUser()->getWilshirePassword());?>" size="<?=strlen($WorkingAdGroup->getUser()->getWilshirePassword())+1;?>">
		</td>
	</tr>
	<tr>
		<td class="mainText" valign="top"><b>AdGroup Name</b></td>
		<td class="mainText">
		<?=$WorkingAdGroup->getGroupName();?>
		<br>Pixel Code: <a href="/sm_reports-ad_groups-set_pixel.htm?back_page=<?=urlencode($_SERVER['REQUEST_URI']);?>&id=<?=$WorkingAdGroup->getId();?>">Set pixel id and/or resend pixel notification email</a>
		</td>
	</tr>
	
	<!-- loop through ads -->
	<?
	
	// image ads
	printf("<tr><td colspan=\"2\"><table width=\"100%%\" border=0 cellpadding=\"4\">\n");
	printf("<tr bgcolor=\"#d5d5d5\"><td class=\"mainText\"><b>Action</b></td> 
				<td class=\"mainText\"><b>Reference Id</b></td> 
				<td class=\"mainText\"><b>Type</b></td> 
				<td class=\"mainText\"><b>Name</b></td> 
				<td class=\"mainText\"><b>Click Url</b></td> 
				<td class=\"mainText\"><b>Image</b></td> 
			</tr>\n");
	
	$i = 0;
	foreach ($AdMediaBanners as $AdMediaBanner) {
		/* @var $AdMediaBanner AdMediaBanner */
		printf("<tr bgcolor=\"#%s\">\n", $i++&1?'ffffff':'f5f5f5');
		
		printf("<td class=\"mainText\">\n");
		
		if($AdMediaBanner->getIsProcessed() == 1) {
			printf("<span style=\"color: #d5d5d5\">%s</span>\n", ($AdMediaBanner->getIsActive() == 1)?'approved':'inactive');
		} else {
			$strApprove = ($AdMediaBanner->getIsActive() == 1)?'approve':'<font color=red>dismiss</font>';
			$approveUrl = sprintf("/%s.htm?approve=%d&id=%d&type=banner&back_page=%s&show_all=%d", str_replace('/', '-', PAGE_C), $AdMediaBanner->getId(), $_GET['id'], urlencode($_GET['back_page']), $_GET['show_all']);
			printf("<a href=\"%s\" onclick=\"return confirm_url('Are you sure you want to %s this creative?','%s')\">%s</a>\n", $approveUrl, strip_tags($strApprove), $approveUrl, $strApprove);
		}
		printf("<br><a href=\"/sm_reports-advertisers-notes.htm?template_id=%d&id=%d&back_page=%s\">email&nbsp;user</a>", 6, $WorkingAdGroup->getUser()->getId(), urlencode($_SERVER['REQUEST_URI']));
		printf("</td>\n");
		
		printf("<td class=\"mainText\">%d</td>\n", $AdMediaBanner->getId());
		
		printf("<td class=\"mainText\">%s</td>\n", $AdMediaBanner->getMediaType()->getTypeName());
		printf("<td class=\"mainText\">%s</td>\n", htmlspecialchars($AdMediaBanner->getMediaName()));
		
		$shortClickUrl = $AdMediaBanner->getClickUrl();
		if(strlen($shortClickUrl) > 42) {
			// shorten it
			$shortClickUrl = sprintf("%s ... %s", substr($shortClickUrl, 0, 18), substr($shortClickUrl, -18));
		}
		printf("<td class=\"mainText\"><a href=\"%s\">%s</a></td>\n", $AdMediaBanner->getClickUrl(), htmlspecialchars($shortClickUrl));
		printf("<td class=\"mainText\"><a href=\"%s\" target=_blank onClick=\"pageUp('%s'); return false;\">preview</a> -- <a href=\"%s\">download</a></td>\n", $AdMediaBanner->getImage()->getImgUrl(), $AdMediaBanner->getImage()->getImgUrl(), $AdMediaBanner->getImage()->getImgUrl(false, true));
		printf("</tr>\n");
	}
	printf("</table></td></tr>\n");
	
	
	// text ads
	printf("<tr><td colspan=\"2\"><table width=\"100%%\" border=0 cellpadding=\"4\">\n");
	printf("<tr bgcolor=\"#d5d5d5\"><td class=\"mainText\"><b>Action</b></td> 
				<td class=\"mainText\"><b>Type</b></td> 
				<td class=\"mainText\"><b>Name</b></td> 
			</tr>\n");
	
	foreach ($AdMediaTexts as $AdMediaText) {
		/* @var $AdMediaText AdMediaText */
		printf("<tr>\n");
		
		printf("<td class=\"mainText\">\n");
		if($AdMediaText->getIsProcessed() == 1) {
			printf("<span style=\"color: #d5d5d5\">%s</span>\n", ($AdMediaText->getIsActive() == 1)?'approved':'inactive');
		} else {
			$approveUrl = sprintf("/%s.htm?approve=%d&id=%d&type=text&back_page=%s&show_all=%d", str_replace('/', '-', PAGE_C),   $AdMediaText->getId(), $_GET['id'], urlencode($_GET['back_page']), $_GET['show_all']);
			printf("<a href=\"%s\" onclick=\"return confirm_url('Are you sure you want to approve this creative?','%s')\">approve</a>\n", $approveUrl, $approveUrl);
		}
		printf("</td>\n");
		
		printf("<td class=\"mainText\">%s</td>\n", 'Text');
		printf("<td class=\"mainText\">%s</td>\n", htmlspecialchars($AdMediaText->getMediaName()));
		printf("</tr>\n");
		
		$previewFormHtml = sprintf("<form><input type=text size=60 value=\"%s\">", htmlspecialchars($AdMediaText->getDisplayUrl()));
		$previewFormHtml .= sprintf("<br><input type=text size=60 value=\"%s\">", htmlspecialchars($AdMediaText->getHeading()));
		$previewFormHtml .= sprintf("<br><textarea cols=60 rows=15 wrap=virtual>%s</textarea>", htmlspecialchars($AdMediaText->getDescription()));
		$previewFormHtml .= sprintf("</form>");
		$previewFormHtml = str_replace("\r\n", "\\n", $previewFormHtml);
		$previewFormHtml = str_replace("\n", "\\n", $previewFormHtml);
		
		$StdTags = $AdMediaText->getStdTags(true);
		while (list($dims, $htmlTag) = each($StdTags)) {
			
			$preview_link = sprintf("<a href=\"#\" onclick=\"var v%s=window.open('about:blank', 'name%s', 'menubar=yes,resizable=yes,scrollbars=yes'); v%s.document.write('%s'); v%s.document.close(); return false;\">preview</a>", $dims, $dims, $dims, addcslashes(htmlspecialchars($htmlTag.$previewFormHtml), "'"), $dims);
			
			$email_link = sprintf("<a href=\"/sm_reports-advertisers-notes.htm?template_id=%d&id=%d&back_page=%s\">email user</a>", $templateLookup['text'.$dims], $WorkingAdGroup->getUser()->getId(), urlencode($_SERVER['REQUEST_URI']));
		
			printf("<tr>\n");
			printf("<td class=\"mainText\" colspan=\"3\">%s %s -- %s<br><textarea onfocus=\"this.select();\" onclick=\"this.select();\" rows=\"11\" cols=\"80\" wrap=\"virtual\">&lt;html&gt;&lt;body&gt;%s&lt;/body&gt;&lt;/html&gt;</textarea></td>\n", $dims, $preview_link, $email_link, htmlspecialchars($htmlTag));
			printf("</tr>\n");
		}
	}
	printf("</table></td></tr>\n");
	
	
	?>
	
</table>

