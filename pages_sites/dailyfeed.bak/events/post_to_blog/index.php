<?php 

//$yql = 'select * from search.termextract where context="'.addslashes($arrResponseData['description'].$arrResponseData['mt_text_more']).'"';
//$url = 'http://query.yahooapis.com/v1/public/yql?format=json&q='.urlencode($yql);
//$result = curl_process_url($url);
//$objResult = json_decode($result['result']);
//sort($objResult->query->results->Result);
//vdump($objResult->query->results->Result);
//vdump($yql);

//$kw = suggest_keywords($arrResponseData['description'].$arrResponseData['mt_text_more']);
//sort($kw);
//vdump($kw);

//$temp = 'Half Off Bike Tune-up at Kozy’s';
//$temp = 'Half Off Bike Tune-up at Kozyâ��s';
//vdump($temp);
//
//$temp = str_replace("“", "'", $temp);
//vdump($temp);

//vdump('dumping temp');
//vdump($temp)

?>
<div style="clear:both"></div>
<a data-url="http://www.yahoo.com/" href="http://www.grouponia.com/">click here to go to grouponia.com (yahoo.com)</a>
<a data-url="http://www.bing.com/" href="http://www.grouponia.com/">click here to go to grouponia.com (bing)</a>

<br/><span><a class="click_handler_click" href="http://google.com">google.com</a></span>
<br/><span><a class="click_handler_click" href="http://bing.com">bing.com</a></span>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br/><span><a class="click_handler_click" href="<?php echo $_SERVER['SCRIPT_NAME'];?>">reload</a></span>

<div id="email_catcher_fuzz" style="display:none;">
</div>
<div id="email_catcher_plugin" style="display:none">
<form id="email_catcher_form">
<div class="email_catcher_title">To start receiving 50-90% off great experiences for you and your family, simply complete this short questionnaire...</div>
<table width="100%">
<tr><td align="right" width="20%" nowrap>Zip code:</td><td><input type="text" name="postal_code"></td></tr>
<tr><td align="right" nowrap>Email:</td><td><input type="text" name="email_address"><span id="email_catcher_required">* Email Required</span></td></tr>
<tr><td>&nbsp;</td><td><input id="email_catcher_button" type="button" value="Submit"></td></tr>
</table>
</form>
<br/><a id="email_catcher_continue" href="#">No thanks ... continue</a>
<br/><a id="email_catcher_cancel" href="#">Cancel</a>
</div>

<style>
<!--
#email_catcher_fuzz{ 
position:absolute; 
top:0; 
left:0; 
width:100%; 
z-index:100; 
display:none; 
text-align:left;
background: #666; 
opacity:0.5;
}
#email_catcher_required{ 
display:none; 
text-align:left;
color:red;
float:right;
}
.email_catcher_title{ 
font-size:16px;
font-weight:bold;
padding-bottom:15px;
text-align:left;
}
/*Message box, positioned in dead center of browser*/
#email_catcher_plugin{ 
display:none;
padding:20px;
position:absolute; 
width:400px; 
z-index:200; 
border:5px solid #222; 
background: #FFF;
top: 50%; 
left: 50%; 
//margin-top: -100px; 
//margin-left: -150px; 
}
-->
</style>

<script type="text/javascript">
<!--
//Adjust height of overlay to fill screen when browser gets resized
$(window).bind("resize", function(){
   $("#email_catcher_fuzz").css("height", $(document).height()-1);
});
function initEmailCatcher() {
	//Adjust height of overlay to fill screen when page loads
	$("#email_catcher_fuzz").css("height", $(document).height()-1);
	$("#email_catcher_fuzz").click(function(){
		$("#email_catcher_fuzz").fadeOut();
		$("#email_catcher_plugin").hide();
		return false;
	});
	// disable fuzz click trigger on this layer
	$("#email_catcher_plugin").click(function(){
		return false;
	});
	// remove all layers if cancel clicked
	$("#email_catcher_cancel").click(function(){
		$("#email_catcher_fuzz").fadeOut();
		$("#email_catcher_plugin").hide();
		return false;
	});
	$("#email_catcher_button").click(function(){
		
		var result = false;
		value = $("input:text[name=email_address]").val();
		var index = value.indexOf("@");
		if (index > 0) {
			var pindex = value.indexOf(".",index);
			if ((pindex > index+1) && (value.length > pindex+1)) {
				result = true;
			}
		}
		if (result === false) {
			// show error div
			$("#email_catcher_required").fadeIn(50);
			$("#email_catcher_required").fadeOut(50);
			$("#email_catcher_required").fadeIn(50);
			$("#email_catcher_required").fadeOut(50);
			$("#email_catcher_required").fadeIn(50);
			$("#email_catcher_plugin").corner();
			return false;
		}
		$.ajax({
			url: "http://dailyfeed.lify.us/data.htm",
			cache: false,
			type: "GET",
			data: ({
				elmid : "blog_data", 
				email_address : $("input:text[name=email_address]").val(), 
				postal_code : $("input:text[name=postal_code]").val()
				}),
			success: function(html){
				document.location = $("#email_catcher_continue").attr("datanexthref");
			}
		});
	});

	$("a").each(function (index, domEle) {
		if($(domEle).attr("class") == "click_handler_click") {
			$(domEle).click(function() {    
//				$("#email_catcher_plugin").css("top", ( $(window).height() - $("#email_catcher_plugin").height() ) / (2 + $(window).scrollTop()) + "px");
//				$("#email_catcher_plugin").css("left", ( $(window).width() - $("#email_catcher_plugin").width() ) / (2 + $(window).scrollLeft()) + "px");
				$("#email_catcher_plugin").center();
				$("#email_catcher_required").hide();
				$("#email_catcher_plugin").show();
				$("#email_catcher_fuzz").fadeIn();
				$("#email_catcher_continue").attr({datanexthref: $(domEle).attr("href")})
				$("#email_catcher_continue").click(function() {
					document.location = $(domEle).attr("href");
				});
				$("#email_catcher_plugin").corner();
				return false;
			});
		}
		if($(domEle).attr("data-url")) {
			$(domEle).click(function() {
				this.href = $(domEle).attr("data-url");
			});
		}
	});
}
$(document).ready(initEmailCatcher());
(function($){
    $.fn.extend({
         center: function (options) {
              var options =  $.extend({ // Default values
                   inside:window, // element, center into window
                   transition: 0, // millisecond, transition time
                   minX:0, // pixel, minimum left element value
                   minY:0, // pixel, minimum top element value
                   withScrolling:true, // booleen, take care of the scrollbar (scrollTop)
                   vertical:true, // booleen, center vertical
                   horizontal:true // booleen, center horizontal
              }, options);
              return this.each(function() {
                   var props = {position:'absolute'};
                   if (options.vertical) {
                        var top = ($(options.inside).height() - $(this).outerHeight()) / 2;
                        if (options.withScrolling) top += $(options.inside).scrollTop() || 0;
                        top = (top > options.minY ? top : options.minY);
                        $.extend(props, {top: top+'px'});
                   }
                   if (options.horizontal) {
                         var left = ($(options.inside).width() - $(this).outerWidth()) / 2;
                         if (options.withScrolling) left += $(options.inside).scrollLeft() || 0;
                         left = (left > options.minX ? left : options.minX);
                         $.extend(props, {left: left+'px'});
                   }
                   if (options.transition > 0) $(this).animate(props, options.transition);
                   else $(this).css(props);
                   return $(this);
              });
         }
    });
})(jQuery);

//-->
</script>

