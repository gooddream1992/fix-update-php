<?php 



echo base64_encode('poor Neo still thinks he\'s an alien');
var_dump(base64_decode('cG9vciBOZW8gc3RpbGwgdGhpbmtzIGhlJ3MgYW4gYWxpZW4='));
exit;

echo "<pre>\n";
//echo $_SERVER['USERNAME']{0};
//exit;
//define('BASE56KEYS_C', "abcdefghjkmnpqrstuvwxyz23456789ABCDEFGHJKMNPQRSTUVWXYZ");
define('BASE56KEYS_C', "23456789abcdefghijkmnpqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ");
//define('BASE56KEYS_C', "23456789abcdefghijkmnpqrstuvwxyz-");


function base56_encode($num){
    /*
	Encode a number in Base X
 
    `num`: The number to encode
    `alphabet`: The alphabet to use for encoding
    */
	$alphabet = str_split(BASE56KEYS_C);
    if ($num == 0){
        return 0;
	}
 
	$n = str_split($num);
    $arr = array();
    $base = sizeof($alphabet);
 
    while($num){
        $rem = $num % $base;
        $num = (int)($num / $base);
        $arr[]=$alphabet[$rem];
	}
 
    $arr = array_reverse($arr);
    return implode($arr);
}
 
function base56_decode($string){
    /*
	Decode a Base X encoded string into the number
 
    Arguments:
    - `string`: The encoded string
    - `alphabet`: The alphabet to use for encoding
    */
 	$alphabet = str_split(BASE56KEYS_C);
    $base = sizeof($alphabet);
    $strlen = strlen($string);
    $num = 0;
    $idx = 0;
 
	$s = str_split($string);
	$tebahpla = array_flip($alphabet);
 
    foreach($s as $char){
        $power = ($strlen - ($idx + 1));
        $num += $tebahpla[$char] * (pow($base,$power));
        $idx += 1;
	}
    return $num;
}
function generate_code($number) {
    $out   = "";
    $codes = "abcdefghjkmnpqrstuvwxyz23456789ABCDEFGHJKMNPQRSTUVWXYZ";

    while ($number > 53) {
        $key    = $number % 54;
        $number = floor($number / 54) - 1;
        $out    = $codes{$key}.$out;
    }

    return $codes{$number}.$out;
}
function dec2any( $num, $base=62, $index=false ) {
    if (! $base ) {
        $base = strlen( $index );
    } else if (! $index ) {
        $index = substr( "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ" ,0 ,$base );
    }
    $out = "";
    for ( $t = floor( log10( $num ) / log10( $base ) ); $t >= 0; $t-- ) {
        $a = floor( $num / pow( $base, $t ) );
        $out = $out . substr( $index, $a, 1 );
        $num = $num - ( $a * pow( $base, $t ) );
    }
    return $out;
}
function any2dec( $num, $base=62, $index=false ) {
    if (! $base ) {
        $base = strlen( $index );
    } else if (! $index ) {
        $index = substr( "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 0, $base );
    }
    $out = 0;
    $len = strlen( $num ) - 1;
    for ( $t = 0; $t <= $len; $t++ ) {
        $out = $out + strpos( $index, substr( $num, $t, 1 ) ) * pow( $base, $len - $t );
    }
    return $out;
}
for ($i = 54; $i < 157; $i++) {
	echo "i     : ".$i."\n";
//	echo "hexhex: ".hexdec(dechex($i))."\n";
//	echo strlen(BASE56KEYS_C)."/".strlen(BASE56KEYS_C)." : ".base56_decode(base56_encode($i))."\n";
//	echo "36/36 : ".base_convert(base_convert($i, 10, 36), 36, 10)."\n";
//	echo "dechex: ".dechex($i)."\n";
//	echo strlen(BASE56KEYS_C)."    : ".base56_encode($i)."\n";
//	echo "36    : ".base_convert($i, 10, 36)."\n";
//	echo "54/bad: ".generate_code($i)."\n";
	echo "d->".strlen(BASE56KEYS_C)." : ".dec2any($i, null, BASE56KEYS_C)."\n";
	echo strlen(BASE56KEYS_C)."->d : ".any2dec(dec2any($i, null, BASE56KEYS_C), null, BASE56KEYS_C)."\n";
	
	echo "\n";
}
echo "\n</pre>";
exit;


$url = 'http://www.buywithme.com/la/deals/2648-touche-salon-and-day-spa';
echo preg_replace("/http:\/\/(.*)\/(.*)\/deals\/(.*)/", "\\1", $url)."\n";
echo preg_replace("/http:\/\/(.*)\/(.*)\/deals\/(.*)/", "\\2", $url)."\n";
echo preg_replace("/http:\/\/(.*)\/(.*)\/deals\/(.*)/", "\\3", $url)."\n";


$str = <<<EOF
<p>
        <p>Coffee and wine are both pretty amazing liquids, and you&rsquo;ve been known to indulge from time to time (i.e. every morning at Starbucks). However, your smile is starting to suffer with less than sparkling-white teeth. Clean the slate with today&rsquo;s deal from <a href="http://www.gregoryrobinsdds.com/index.html" target="_blank">Gregory Robins Family Dentistry</a>, with <a href="http://www.gregoryrobinsdds.com/offices.html" target="_blank">two locations in Montebello and West Covina</a>: <strong>$49 gets you a Venus White Ultra teeth whitening kit, digital x-rays and a dental exam ($225 value).</strong></p>
<p>Gregory Robins Family Dentistry&rsquo;s <a href="http://www.gregoryrobinsdds.com/staff.html" target="_blank">experienced and friendly staff</a> will have you feeling right at home with their top-notch gentle and thorough care. If you&rsquo;ve been neglecting your smile, get it checked out with an expert exam and digital x-rays. During your visit, they&rsquo;ll fit you with tray molds for your <a href="http://www.smilebyvenus.com/venus_white_ultra.php" target="_blank">Venus White Ultra kit</a> that you can then wear around the house (anywhere from two hours to overnight, based on sensitivity.) You&rsquo;ll get four syringes of bleaching gel, which last between six months to a year depending on how often you use them.</p>

<p><strong>You can buy one voucher for yourself, and as many as you&rsquo;d like for gifts. </strong>After all, this makes the perfect gift for your morning latte buddies and post-work Malbec drinkers&hellip;<strong>&nbsp;</strong></p>
        <a href="#" id="read_less" onclick="$('short_description').toggle();$('full_description').toggle();gtrack('', 'http://www.buywithme.com/la/deals/2637-gregory-robins-family-dentistry?READ-LESS');; return false;">Read less...</a>
      </p>
EOF;

$str = trim($str);

$str = preg_replace("/^<p>/", "<p>TESTING", $str);
echo $str;

