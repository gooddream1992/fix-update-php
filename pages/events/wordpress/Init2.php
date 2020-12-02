<?php

require_once './functions/simplehtmldom/simple_html_dom.php';

//$url = 'http://dealn.it/test.php';
$url = 'https://dailywinedeals.wordpress.com/wp-login.php';

$postdata = array();
$postdata['log'] = urlencode('dailywinedeals');
$postdata['pwd'] = urlencode('dail1010');
$postdata['wp-submit'] = urlencode('Log In');
$postdata['redirect_to'] = urlencode('http://dailywinedeals.wordpress.com/wp-admin/users.php?page=grofiles-editor');
$postdata['testcookie'] = urlencode('1');

$postarr = array();
foreach ($postdata as $key => $value) {
	$postarr[] = $key . '=' . $value;
}

$tmpfile = '/tmp/curl/curl_result_'.md5($url);
$cookiefile = $tmpfile.'_cookie';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_POST, true);

curl_setopt ($ch, CURLOPT_POSTFIELDS, implode('&', $postarr));
curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt ($ch, CURLOPT_MAXREDIRS, 10);
curl_setopt ($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt ($ch, CURLOPT_REFERER, $url);

curl_setopt ($ch, CURLOPT_COOKIEJAR, $cookiefile);
curl_setopt ($ch, CURLOPT_COOKIEFILE, $cookiefile);

$result = curl_exec ($ch);
$info = curl_getinfo($ch);
// done logging in

// get post page

$url = 'http://dailywinedeals.wordpress.com/wp-admin/post-new.php';
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, false);

$result = curl_exec ($ch);
$info = curl_getinfo($ch);

/* @var $input simple_html_dom */
/* @var $hdom simple_html_dom */
$hdom = str_get_html($result);

$post_title = 'one test post. '.time();
$post_description = 'post body. '.date("Y-m-d H:i:s");

$arrinput = array();
foreach ($hdom->find('#post', 0)->find('input') as $input) {
	if ($input->attr['name'] == 'hidden_post_sticky' && $input->attr['value'] == 'sticky') continue;
	if ($input->attr['name'] == 'post_title' && $input->attr['value'] == '') continue;
	if ($input->attr['name'] == 'save' && $input->attr['value'] == 'Save') continue;
	if ($input->attr['name'] == 'save' && $input->attr['value'] == 'Save Draft') continue;
	if ($input->attr['name'] == 'sticky' && $input->attr['value'] == 'sticky') continue;
	if ($input->attr['name'] == 'visibility' && $input->attr['value'] == 'password') continue;
	if ($input->attr['name'] == 'visibility' && $input->attr['value'] == 'private') continue;

	if (strlen($input->attr['name']))
		$arrinput[$input->attr['name']] = array($input->attr['name'], $input->attr['value']);
}
// add daily deals category
$arrinput[] = array('post_category[]', '0');
//$arrinput['post_category[]'] = array('post_category[]', '323986');
$arrinput['post_status'] = array('post_status', 'draft');

// replace these form inputs
$arrinput['tax_input[post_tag]'] = array('tax_input[post_tag]', 'test tags');
$arrinput['post_title'] = array('post_title', $post_title);
$arrinput['content'] = array('content', $post_description);
$arrinput['excerpt'] = array('excerpt', '');
$arrinput['visibility'] = array('visibility', 'public');
$arrinput['newcategory_parent'] = array('newcategory_parent', '-1');
$arrinput['post_author_override'] = array('post_author_override', '23377022');
$arrinput['mm'] = array('mm', $arrinput['cur_mm'][1]); // this month?

$postarr = array();
foreach ($arrinput as $arr) {
	$postarr[] = urlencode($arr[0]) . '=' . urlencode($arr[1]);
}


//$postarr2 = array();
//$postarr2[] = '_wpnonce=74feb98372';
//$postarr2[] = '_wp_http_referer=%2Fwp-admin%2Fpost-new.php';
//$postarr2[] = 'user_ID=23377022';
//$postarr2[] = 'action=editpost';
//$postarr2[] = 'originalaction=editpost';
//$postarr2[] = 'post_author=23377022';
//$postarr2[] = 'post_type=post';
//$postarr2[] = 'original_post_status=auto-draft';
//$postarr2[] = 'referredby=http%3A%2F%2Fdailywinedeals.wordpress.com%2Fwp-admin%2Fpost.php%3Fpost%3D5%26action%3Dedit%26message%3D6';
//$postarr2[] = '_wp_original_http_referer=http%3A%2F%2Fdailywinedeals.wordpress.com%2Fwp-admin%2Fpost.php%3Fpost%3D5%26action%3Dedit%26message%3D6';
//$postarr2[] = 'auto_draft=1';
//$postarr2[] = 'post_ID=8';
//$postarr2[] = 'autosavenonce=26dead4c74';
//$postarr2[] = 'meta-box-order-nonce=6062dd59b3';
//$postarr2[] = 'closedpostboxesnonce=c134f15d9e';
//$postarr2[] = 'wp-preview=';
//$postarr2[] = 'hidden_post_status=draft';
//$postarr2[] = 'post_status=draft';
//$postarr2[] = 'hidden_post_password=';
//$postarr2[] = 'hidden_post_visibility=public';
//$postarr2[] = 'visibility=public';
//$postarr2[] = 'post_password=';
//$postarr2[] = 'mm=06';
//$postarr2[] = 'jj=24';
//$postarr2[] = 'aa=2011';
//$postarr2[] = 'hh=06';
//$postarr2[] = 'mn=11';
//$postarr2[] = 'ss=54';
//$postarr2[] = 'hidden_mm=06';
//$postarr2[] = 'cur_mm=06';
//$postarr2[] = 'hidden_jj=24';
//$postarr2[] = 'cur_jj=24';
//$postarr2[] = 'hidden_aa=2011';
//$postarr2[] = 'cur_aa=2011';
//$postarr2[] = 'hidden_hh=06';
//$postarr2[] = 'cur_hh=06';
//$postarr2[] = 'hidden_mn=11';
//$postarr2[] = 'cur_mn=11';
//$postarr2[] = 'original_publish=Publish';
//$postarr2[] = 'publish=Publish';
//$postarr2[] = 'post_category%5B%5D=0';
//$postarr2[] = 'post_category%5B%5D=323986';
//$postarr2[] = 'newcategory=New+Category+Name';
//$postarr2[] = 'newcategory_parent=-1';
//$postarr2[] = '_ajax_nonce-add-category=f01d555177';
//$postarr2[] = 'tax_input%5Bpost_tag%5D=My+Test+Tags%2C+another+tag%2C+america';
//$postarr2[] = 'newtag%5Bpost_tag%5D=';
//$postarr2[] = 'post_title=' . urlencode($post_title);
//$postarr2[] = 'samplepermalinknonce=70bb7f7fd9';
//$postarr2[] = 'content=' . urlencode($post_description);
//$postarr2[] = 'search=Search+for+posts+by+title';
//$postarr2[] = 'excerpt=';
//$postarr2[] = 'trackback_url=';
//$postarr2[] = 'advanced_view=1';
//$postarr2[] = 'comment_status=open';
//$postarr2[] = 'ping_status=open';
//$postarr2[] = 'post_name=';
//$postarr2[] = 'post_author_override=23377022';
//$postarr2[] = 'wpl_enable_post_likes=1';
//$postarr2[] = 'wpl_like_status_hidden=1';
//$postarr2[] = 'wpl_enable_post_sharing=1';
//$postarr2[] = 'wpl_sharing_status_hidden=1';
//
//$postarr3 = array();
//foreach ($postarr2 as $value) {
//	$postarr3[$value] = $value;
//}
//
//sort($postarr);
//sort($postarr2);
//
//vdump($postarr);
//vdump($postarr2);

//exit;

$url = 'http://dailywinedeals.wordpress.com/wp-admin/post.php';
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt ($ch, CURLOPT_POSTFIELDS, implode('&', $postarr));

$result = curl_exec ($ch);
$info = curl_getinfo($ch);


curl_close ($ch);

if (strpos($result, 'Edit Post')) {
	echo 'good';
} else {
	echo 'bad';
}

//var_dump($info);
//var_dump($result);
exit;























