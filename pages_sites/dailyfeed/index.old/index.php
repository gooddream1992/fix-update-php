

<div style="width:471px;height:200px">

	<form method="get" action="/search_zip.htm" id="komiForm">
		<div style="width:460px;">
			<p style="font-size:17px">To start receiving 50-90% off great experiences for you and your family, simply complete the following two steps.</p>
		</div>
			
		<div align="left" id="first_step" style="padding-left:35px;height:167px;background-image:url(/images/komifeed/step1a.png);background-repeat:no-repeat;">
			<div style="height:80px;"></div>
			<input type="text" autocomplete="off" style="border:1px solid #999999;width: 200px; font-size:16px;padding:5px" name="zip" id="form_zip" value="<?php echo htmlspecialchars($objSession->GetValue('global_zip'));?>">
			
			
			<div style="width:363px; padding:11px;" align="right">
				<a href="#" onClick="showNextInput();" 
					style="font:bold 24px sans-serif; color:#ffffff;">Next</a>
			</div>

			<br /><span class="error error-step1"></span>
		</div>
		
		<div align="left" id="second_step" style="padding-left:35px;height:167px;display: none;background-image:url(/images/komifeed/step2a.png);background-repeat:no-repeat;">
			<div style="height:80px;"></div>
			<input type="text" autocomplete="off" style="border:1px solid #999999;width: 200px; font-size:16px;padding:5px" name="email" id="form_email" value="<?php echo htmlspecialchars($objSession->GetValue('global_email'));?>">
			
			
			<div style="width:354px; padding:11px;" align="right">
				<a href="#" onClick="submitKomiForm();" 
					style="font:bold 24px sans-serif; color:#ffffff;">Go</a>
			</div>
			
			<br /><span class="error error-step2"></span>
		</div>
		
	</form>	
</div>

<script type="text/javascript">

document.getElementById('form_zip').focus();

function showNextInput() {
	var el = document.getElementById('form_zip');
	var inputValue = el.value;
	sendData(inputValue,'save_zip');
	
	$('#first_step').toggle('slide','fast', function(){$('#second_step').toggle('slide','slow',function() {document.getElementById('form_email').focus();});});
}
function submitKomiForm() {
	var el = document.getElementById('form_email');
	var inputValue = el.value;
	sendData(inputValue,'save_email');
}
function submitThisForm() {
	document.getElementById('komiForm').submit();
}

</script>
<iframe frameborder="0" height="0" width="0" id="save_zip" style="color:#eeeeee;background-color:#eeeeee"></iframe>
<iframe frameborder="0" height="0" width="0" id="save_email" style="color:#eeeeee;background-color:#eeeeee"></iframe>