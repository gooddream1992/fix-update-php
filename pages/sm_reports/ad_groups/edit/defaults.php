<?

$page_title = ucfirst(DOMAIN_C) . ': Edit Ad Groups and Banners';
$bInit2 = true;

require_once $propel_classesdir . 'AdMediaBannerPeer.php';
require_once $propel_classesdir . 'AdMediaTextPeer.php';

$templateLookup = array();
$templateLookup['image'] = 6;
$templateLookup['text728x90'] = 3;
$templateLookup['text120x600'] = 4;
$templateLookup['text300x250'] = 5;
