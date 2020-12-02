
			<div style="height:20px;"></div>
		</div>
		<div id="ft">
			<ul class="first">
				<li><a class="logo" href="/"></a></li>
				<li><a href="#">About Us</a> | 
					<a href="#">Contact</a> | 
					<a href="#">Help / FAQ</a></li>
				<li><a href="#">Privacy Policy</a> | 
					<a href="#">Restrictions</a> | 
					<a href="#">Terms of Service</a></li>
					
<?php /*				<li><a href="/about.htm">About Us</a> | 
					<a href="/about-contact_us.htm">Contact</a> | 
					<a href="/help-faq.htm">Help / FAQ</a></li>
				<li><a href="/about-privacy_policy.htm">Privacy Policy</a> | 
					<a href="/about-restrictions.htm">Restrictions</a> | 
					<a href="/about-terms_and_conditions.htm">Terms of Service</a></li>
					*/ ?>
				<li class="copy">Copyright &#169; <?=date("Y");?> <?php echo COMPANY_C;?> All rights reserved.
				<br><span style="font:bold 10px sans-serif; color:#eeeeee;">(<?=floor(CheckPointTime('footer'));?>)</span></li>
			</ul>
			<ul>

				<li class="header">Follow Us</li>
				
				<li><a href="#"><?php echo DOMAIN_C;?> on Twitter</a></li>
            	<li><a href="#">Like on Facebook</a></li>
            </ul>
		</div>
	</div>

<?php

if(V_C != "devster" && $_SERVER['HTTP_HOST'] == ''){?>
<script type="text/javascript">

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-18916659-5']);
_gaq.push(['_trackPageview']);

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

</script>
<?php }

if(V_C == "154236"){?>
<SCRIPT FOR=window EVENT=onunload>
    var posX = event.clientX;
    var posY = event.clientY;
    var URL = document.referrer;
    if ( posY < 0 )
    {
            nStart = URL.indexOf("?");
            nEnd = URL.length;
            if ( nStart > 0 )
            {
                Domain = escape(URL.substring(0,nStart));
                Parameter = URL.substring(nStart, nEnd) + "&" + "SMOrigDomain=" + Domain;
                location.href = "redirect.php" + Parameter;
            }
    }
</SCRIPT>
<?

}

