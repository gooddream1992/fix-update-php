<?php 
global $add_to_bodytag;

if (!stripos($add_to_bodytag, 'bgcolor='))
	$add_to_bodytag .= ' bgcolor="#ffffff" ';

if (!stripos($add_to_bodytag, 'text='))
	$add_to_bodytag .= ' text="#000000" ';

if (!stripos($add_to_bodytag, 'leftmargin='))
	$add_to_bodytag .= ' leftmargin="0" ';

if (!stripos($add_to_bodytag, 'topmargin='))
	$add_to_bodytag .= ' topmargin="0" ';

if (!stripos($add_to_bodytag, 'marginwidth='))
	$add_to_bodytag .= ' marginwidth="0" ';

if (!stripos($add_to_bodytag, 'marginheight='))
	$add_to_bodytag .= ' marginheight="0" ';
	

?><body <?=$add_to_bodytag;?>>
