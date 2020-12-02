<form name="" action="<?=$_SERVER['SCRIPT_NAME'];?>" method="GET">
<input type="hidden" name="page" value="<?=PAGE_C;?>">
<input type="hidden" name="back_page" value="<?=htmlspecialchars($_GET['back_page']);?>">
<input type="hidden" name="rand" value="<?=rand(10000000, 99999999)?>">
<table width="95%" border="0">
	<tr>
		<td colspan="5" class="txt_head"><h4><?php echo COMPANY_C;?>: <?=breadcrumbs();?></h4></td>
	</tr>
	
	<?

	if(strlen($_GET['back_page'])) {
		printf("
		<tr>
			<td class=\"mainText\" colspan=\"5\" align=\"right\">When you are done, <a href=\"%s\">Click here</a> to go back to the last page.</td>
		</tr>
		", $_GET['back_page']);
	}
	
	?>
	
	<tr>
		<td colspan="5" class="mainText"><b><?=$UsersCount;?> Search Result<?=($UsersCount!=1)?'s':'';?> for:</b> <input type="text" name="s" value="<?=htmlspecialchars($_GET['s']);?>"><input type="submit" value=" Search Again "></td>
	</tr>
	
	<tr bgcolor="#f5f5f5">
		<th class="mainText"><b>&nbsp;</b></th>
		<th class="mainText"><em>(action)</em></th>
		<th class="mainText"><b>Date Registered</b></th>
		<th class="mainText"><b>Email</b></th>
		<th class="mainText"><b>Name (fname lname)</b></th>
	</tr>

<?

$rowNum = (($group-1)*$limit)+1;
foreach ($UsersSearch as $UserResult) {
	/* @var $UserResult User */
	printf("<tr class=\"mainText\">\n");
	
	printf("<td align=\"right\">%d)</td>\n", $rowNum++);
	printf("<td><a href=\"%s?page=%s/edit&id=%d&back_page=%s&rand=%d\">edit</a></td>\n", $_SERVER['SCRIPT_NAME'], PAGE_PARENT_C, $UserResult->getId(), urlencode($_SERVER['REQUEST_URI']), rand(1, 9999));
	printf("<td><b>%s</b></td>\n", $UserResult->getDateCreated());
	printf("<td>%s</td>\n", $UserResult->getEmail());
	printf("<td>%s&nbsp;%s</td>\n", $UserResult->getFname(), $UserResult->getLname());
	
	printf("</tr>\n\n");
}

if(count($UsersSearch) == 0) {
	printf("<tr class=\"mainText\">\n");
	printf("<td colspan=\"5\"><em>No results found.</em></td>\n");
	printf("</tr>\n\n");
}

?>

	
	<tr>
		<td colspan="5" class="mainText">
		<hr>
		<?
		
		$link = sprintf("%s?page=%s&s=%s", $_SERVER['SCRIPT_NAME'], PAGE_C, urlencode($_GET['s']));
		echo 'Pages: ';
		PageLinks($group, $numpages, $link);
		
		?>
		</td>
	</tr>
</table>

</form>
