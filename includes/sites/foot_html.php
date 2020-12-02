<?php 

global $pagesdir;


?>
      
</div>
      <div class="left last">
      <?php 
      
		if( file_exists($pagesdir . PAGE_C . '/sidebar.php') ) {
			include_once $pagesdir . PAGE_C . '/sidebar.php';
		}
		if( file_exists($pagesdir . PAGE_PARENT_C . '/sidebar.php') ) {
			include_once $pagesdir . PAGE_PARENT_C . '/sidebar.php';
		}
		if( file_exists($pagesdir . PAGE_ROOT_C . '/sidebar.php') ) {
			include_once $pagesdir . PAGE_ROOT_C . '/sidebar.php';
		}
		if( file_exists($pagesdir . 'index' . '/sidebar.php') ) {
			include_once $pagesdir . 'index' . '/sidebar.php';
		}
      ?>
      </div>
      
      <div class="clr"></div>
    </div>
  </div>


    <div class="clr"></div>

    <!--<img src="images/simple_bg.gif" alt="picture" width="980" height="22" />-->
    <div class="clr" style="padding:20px 0 0 0;"></div>
    <div class="slide_blog_bg">
      <div class="slide_blog"> <img src="/images/dealn_it/slot_img_1.jpg" alt="picture" width="77" height="86" />
        <h3>Support.It<br />
          <span>Let us know how we can help</span></h3>
        <div class="clr"></div>

        <p><!-- Begin MailChimp Signup Form -->
<!--[if IE]>
<style type="text/css" media="screen">
	#mc_embed_signup fieldset {position: relative;}
	#mc_embed_signup legend {position: absolute; top: -1em; left: .2em;}
</style>
<![endif]--> 
<!--[if IE 7]>
<style type="text/css" media="screen">
	.mc-field-group {overflow:visible;}
</style>
<![endif]-->

<div id="mc_embed_signup" style="width: 280px;">
<form action="http://dealn.us2.list-manage1.com/subscribe/post?u=2517cbcf2df89de04adab1042&amp;id=71bbe9c811" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" style="font: normal 100% Verdana, Arial, sans-serif;font-size: 10px;">
	<fieldset style="-moz-border-radius: 4px;border-radius: 4px;-webkit-border-radius: 4px;border: 1px solid #fff;padding-top: 1.5em;margin: .5em 0;background-color: #000000;color: #ffffff;text-align: left;">
	
<div class="indicate-required" style="text-align: right;font-style: italic;overflow: hidden;color: #504F4F;margin: 0 9% 0 0;">* indicates required</div>
<div class="mc-field-group" style="margin: 1.3em 5%;clear: both;overflow: hidden;">
<label for="mce-EMAIL" style="display: block;margin: .3em 0;line-height: 1em;font-weight: bold;">Email Address <strong class="note-required">*</strong>
</label>

<input type="text" value="" name="EMAIL" class="required email" id="mce-EMAIL" style="margin-right: 1.5em;padding: .2em .3em;width: 90%;float: left;z-index: 999;">
</div>
<div class="mc-field-group" style="margin: 1.3em 5%;clear: both;overflow: hidden;">
<label for="mce-FNAME" style="display: block;margin: .3em 0;line-height: 1em;font-weight: bold;">First Name </label>
<input type="text" value="" name="FNAME" class="" id="mce-FNAME" style="margin-right: 1.5em;padding: .2em .3em;width: 90%;float: left;z-index: 999;">
</div>
<div class="mc-field-group" style="margin: 1.3em 5%;clear: both;overflow: hidden;">
<label for="mce-LNAME" style="display: block;margin: .3em 0;line-height: 1em;font-weight: bold;">Last Name </label>
<input type="text" value="" name="LNAME" class="" id="mce-LNAME" style="margin-right: 1.5em;padding: .2em .3em;width: 90%;float: left;z-index: 999;">
</div>
		<div id="mce-responses" style="float: left;top: -1.4em;padding: 0em .5em 0em .5em;overflow: hidden;width: 90%;margin: 0 5%;clear: both;">
			<div class="response" id="mce-error-response" style="display: none;margin: 1em 0;padding: 1em .5em .5em 0;font-weight: bold;float: left;top: -1.5em;z-index: 1;width: 80%;background: FBE3E4;color: #D12F19;"></div>
			<div class="response" id="mce-success-response" style="display: none;margin: 1em 0;padding: 1em .5em .5em 0;font-weight: bold;float: left;top: -1.5em;z-index: 1;width: 80%;background: #E3FBE4;color: #529214;"></div>

		</div>
		<div><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn" style="clear: both;width: auto;display: block;margin: 1em 0 1em 5%;"></div>
	</fieldset>	
	<a href="#" id="mc_embed_close" class="mc_embed_close" style="display: none;">Close</a>
</form>
</div>
<script  type="text/javascript">
try {
    var jqueryLoaded=jQuery;
    jqueryLoaded=true;
} catch(err) {
    var jqueryLoaded=false;
}
if (!jqueryLoaded) {
    var head= document.getElementsByTagName('head')[0];
    var script= document.createElement('script');
    script.type= 'text/javascript';
    script.src= 'http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js';
    head.appendChild(script);    
}
</script>
<script type="text/javascript" src="http://downloads.mailchimp.com/js/jquery.form-n-validate.js"></script>

<script type="text/javascript">
var fnames = new Array();var ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';var err_style = '';
try{
    err_style = mc_custom_error_style;
} catch(e){
    err_style = 'margin: 1em 0 0 0; padding: 1em 0.5em 0.5em 0.5em; background: FFEEEE none repeat scroll 0% 0%; font-weight: bold; float: left; z-index: 1; width: 80%; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial; color: FF0000;';
}
var head= document.getElementsByTagName('head')[0];
var style= document.createElement('style');
style.type= 'text/css';
if (style.styleSheet) {
  style.styleSheet.cssText = '.mce_inline_error {' + err_style + '}';
} else {
  style.appendChild(document.createTextNode('.mce_inline_error {' + err_style + '}'));
}
head.appendChild(style);
$(document).ready( function($) {
  var options = { errorClass: 'mce_inline_error', errorElement: 'div', onkeyup: function(){}, onfocusout:function(){}, onblur:function(){}  };
  var mce_validator = $("#mc-embedded-subscribe-form").validate(options);
  options = { url: 'http://dealn.us2.list-manage2.com/subscribe/post-json?u=2517cbcf2df89de04adab1042&id=71bbe9c811&c=?', type: 'GET', dataType: 'json', contentType: "application/json; charset=utf-8",
                beforeSubmit: function(){
                    $('#mce_tmp_error_msg').remove();
                    $('.datefield','#mc_embed_signup').each(
                        function(){
                            var txt = 'filled';
                            var fields = new Array();
                            var i = 0;
                            $(':text', this).each(
                                function(){
                                    fields[i] = this;
                                    i++;
                                });
                            $(':hidden', this).each(
                                function(){
                                	if ( fields[0].value=='MM' && fields[1].value=='DD' && fields[2].value=='YYYY' ){
                                		this.value = '';
									} else if ( fields[0].value=='' && fields[1].value=='' && fields[2].value=='' ){
                                		this.value = '';
									} else {
	                                    this.value = fields[0].value+'/'+fields[1].value+'/'+fields[2].value;
	                                }
                                });
                        });
                    return mce_validator.form();
                }, 
                success: mce_success_cb
            };
  $('#mc-embedded-subscribe-form').ajaxForm(options);

});
function mce_success_cb(resp){
    $('#mce-success-response').hide();
    $('#mce-error-response').hide();
    if (resp.result=="success"){
        $('#mce-'+resp.result+'-response').show();
        $('#mce-'+resp.result+'-response').html(resp.msg);
        $('#mc-embedded-subscribe-form').each(function(){
            this.reset();
    	});
    } else {
        var index = -1;
        var msg;
        try {
            var parts = resp.msg.split(' - ',2);
            if (parts[1]==undefined){
                msg = resp.msg;
            } else {
                i = parseInt(parts[0]);
                if (i.toString() == parts[0]){
                    index = parts[0];
                    msg = parts[1];
                } else {
                    index = -1;
                    msg = resp.msg;
                }
            }
        } catch(e){
            index = -1;
            msg = resp.msg;
        }
        try{
            if (index== -1){
                $('#mce-'+resp.result+'-response').show();
                $('#mce-'+resp.result+'-response').html(msg);            
            } else {
                err_id = 'mce_tmp_error_msg';
                html = '<div id="'+err_id+'" style="'+err_style+'"> '+msg+'</div>';
                
                var input_id = '#mc_embed_signup';
                var f = $(input_id);
                if (ftypes[index]=='address'){
                    input_id = '#mce-'+fnames[index]+'-addr1';
                    f = $(input_id).parent().parent().get(0);
                } else if (ftypes[index]=='date'){
                    input_id = '#mce-'+fnames[index]+'-month';
                    f = $(input_id).parent().parent().get(0);
                } else {
                    input_id = '#mce-'+fnames[index];
                    f = $().parent(input_id).get(0);
                }
                if (f){
                    $(f).append(html);
                    $(input_id).focus();
                } else {
                    $('#mce-'+resp.result+'-response').show();
                    $('#mce-'+resp.result+'-response').html(msg);
                }
            }
        } catch(e){
            $('#mce-'+resp.result+'-response').show();
            $('#mce-'+resp.result+'-response').html(msg);
        }
    }
}
</script>

<!--End mc_embed_signup--></p>
      </div>
      <div class="slide_blog"> <img src="/images/dealn_it/slot_img_2.jpg" alt="picture" width="77" height="86" />
        <h3>Twitter.It<br />
          <span>Follow us <a href="http://twitter.com/dealn_it" target="_blank">@dealn_it</a></span></h3>
        <div class="clr"></div>
        <p><script src="http://widgets.twimg.com/j/2/widget.js"></script>

<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 3,
  interval: 6000,
  width: 'auto',
  height: 250,
  theme: {
    shell: {
      background: '#000000',
      color: '#ffffff'
    },
    tweets: {
      background: '#000000',
      color: '#ffffff',
      links: '#e04a1d'
    }
  },
  features: {
    scrollbar: false,
    loop: false,
    live: false,
    hashtags: true,
    timestamp: false,
    avatars: false,
    behavior: 'all'
  }
}).render().setUser('dealn_it').start();
</script></p>
      </div>
      <div class="slide_blog last"> <img src="/images/dealn_it/slot_img_3.jpg" alt="picture" width="77" height="86" />
        <h3>Facebook.It<br />
          <span>Like us, love us</span></h3>
        <div class="clr"></div>
        <p><script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:like-box href="http://www.facebook.com/pages/DealnIt/182256118479876" width="280" colorscheme="dark" show_faces="true" stream="false" header="false"></fb:like-box></p>

      </div>
      <div class="clr"></div>
    </div>
    <div class="clr"></div>
    <!-- end #slideshow -->
    <div class="clr"></div>

</div>
  <div class="clr"></div>
</div>


<div class="footer">
  <div class="footer_resize">
    <p class="leftt">
    &copy; <?php echo date("Y");?>. Dealn.It LLC (<?=floor(CheckPointTime('footer'));?>)
    </p>
    
    <p class="right">
    Follow.It: <a href="http://twitter.com/dealn_it" target="_blank">@dealn_it</a>
    &nbsp;&nbsp;|&nbsp;&nbsp;Facebook.It: <a href="http://www.facebook.com/pages/DealnIt/182256118479876" target="_blank">Dealn.It</a>
    &nbsp;&nbsp;|&nbsp;&nbsp;Email.It: <a href="mailto:info@dealn.it">info@dealn.it</a>
    &nbsp;&nbsp;|&nbsp;&nbsp;<a href="/about-privacy_policy.htm">Privacy</a>
    &nbsp;&nbsp;|&nbsp;&nbsp;<a href="/about-terms_and_conditions.htm">Terms &amp; Conditions</a>
    </p>
   
    <div class="clr"></div>
  </div>
</div>

<?php /* dign.it komideals google stats */ ?>
<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-20670084-1']);
_gaq.push(['_trackPageview']);

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>

<?php /* dign.it komideals chartbeat stats
<script type="text/javascript">
var _sf_async_config={uid:15577,domain:"dealn.it"};
(function(){
  function loadChartbeat() {
    window._sf_endpt=(new Date()).getTime();
    var e = document.createElement('script');
    e.setAttribute('language', 'javascript');
    e.setAttribute('type', 'text/javascript');
    e.setAttribute('src',
       (("https:" == document.location.protocol) ? "https://a248.e.akamai.net/chartbeat.download.akamai.com/102508/" : "http://static.chartbeat.com/") +
       "js/chartbeat.js");
    document.body.appendChild(e);
  }
  var oldonload = window.onload;
  window.onload = (typeof window.onload != 'function') ?
     loadChartbeat : function() { oldonload(); loadChartbeat(); };
})();
</script> */ ?>

<?php 

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

