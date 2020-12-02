<?php 


//vdump($articles);
//vdump($images);
//vdump($keywords);
//vdump($categories);

/*
	articles
		[0]
			url
			confidence
			published_datetime
			zemified
			title
	
	images
		[0]
			confidence
			attribution
			description
			license
			source_url
			url_l
			url_l_w
			url_l_h
			url_m
			url_m_h
			url_m_w
			url_s
			url_s_h
			url_s_w
	
	categories
		[0]
			confidence
			categorization
			name
			

 */

$zemanta = '<div style="width:100%; text-align:left;padding:5px; overflow:auto;"><p><h3>Related articles:</h3></p><p><ul>';

foreach ($result->articles as $obj) {
	$zemanta .=<<< END

	<li><a href="{$obj->url}">{$obj->title}</a></li>
	
END;
}
$zemanta .= '</ul></p></div><br/><div style="width:100%; text-align:left;padding:5px; overflow:auto;"><p><h3>Related images:</h3></p><p>';

$maxHeight = 0;
$maxWidth = 0;
foreach ($result->images as $obj) {
	if ($maxHeight < $obj->url_s_h) {
		$maxHeight = $obj->url_s_h;
	}
	if ($maxWidth < $obj->url_s_w) {
		$maxWidth = $obj->url_s_w;
	}
}
foreach ($result->images as $obj) {
	$zemanta .=<<<END

	<div style="padding:5px;float:left; width:{$maxWidth}px; height:{$maxHeight}px"><a 
	href="{$obj->source_url}" title="{$obj->description}"><img
	src="{$obj->url_s}" alt="{$obj->description}" width="{$obj->url_s_w}" height="{$obj->url_s_h}" align="right"
	border="0"></a></div>
	
END;
}

$zemanta .= '</p></div>';
echo $zemanta;

