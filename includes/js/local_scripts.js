
//window.onerror=function(){
//	return true
//}

function sendData(strData, elmid) {
	var random = Math.floor(Math.random() * 1000000000);
	var url = "/data.htm?data=" + escape(strData) + '&elmid=' + elmid + '&rnd=' + random;
	document.getElementById(elmid).src = url;
	//alert(url);
}
function onDataReceived(strDataReceived) {
	alert("Data Received:" + strDataReceived);
}


function setEmail() {
	var email = document.getElementById("loginEmail").value;
	if(email == '') {
		document.getElementById("loginEmail").style.color="c0c0c0";
//		document.getElementById("loginEmail").style.fontStyle="italic";
		document.getElementById("loginEmail").value="username";
	}
	return true;
}
function clearEmail() {
	var email = document.getElementById("loginEmail").value;
	if(email == 'username') {
		document.getElementById("loginEmail").style.color="000000";
//		document.getElementById("loginEmail").style.fontStyle="normal";
		document.getElementById("loginEmail").value="";
	}
	return true;
}
function setPassword() {
	var password = document.getElementById("loginPassword").value;
	if(password == '') {
		document.getElementById("loginPassword").style.color="c0c0c0";
//		document.getElementById("loginPassword").style.fontStyle="italic";
		document.getElementById("loginPassword").value="password";
	}
	return true;
}
function clearPassword() {
	var password = document.getElementById("loginPassword").value;
	if(password == 'password') {
		document.getElementById("loginPassword").style.color="000000";
//		document.getElementById("loginPassword").style.fontStyle="normal";
		document.getElementById("loginPassword").value="";
	}
	return true;
}
function checkForm() {
	var email = document.getElementById("loginEmail").value;
	if(email == 'username' || email == '') {
		alert('Please enter your login username and password.');
		return false;
	}
	var email = document.getElementById("loginEmail").value;
	if(email == 'username' || email == '') {
		alert('Please enter your login username and password.');
		return false;
	}
	return true;
}

function switchVis( id ) {
	var el = document.getElementById(id);
	if (el) {
		el.style.display = (el.style.display=="none") ? "block" : "none";
	}
}

function formchk()
{
	var ok = zmf.validateForm(document.sweep_form);
	return ok;
}

function pageUp(URL) {
	window.open(URL, 'name', 'menubar=no,resizable=yes,scrollbars=yes');
	return
}

function confirm_url(message, url) {
	input_box = confirm(message);
	if (input_box==true) { 
		top.location.href = url; 
	} else {
		return false;
	}
	return true;
}

/****************************
** Form field Limiter script- By Dynamic Drive
** For full source code and more DHTML scripts, visit http://www.dynamicdrive.com
** This credit MUST stay intact for use
*****************************/
var ns6=document.getElementById&&!document.all

function restrictinput(maxlength,e,placeholder){
	if (window.event&&event.srcElement.value.length>=maxlength) {
		return false
	} else if (e.target&&e.target==eval(placeholder)&&e.target.value.length>=maxlength) {
		var pressedkey=/[a-zA-Z0-9\.\,\/]/ //detect alphanumeric keys
		if (pressedkey.test(String.fromCharCode(e.which))) {
			e.stopPropagation();
		}
	}
}

function countlimit(maxlength,e,placeholder) {
	var theform=eval(placeholder)
	var lengthleft=maxlength-theform.value.length
	var placeholderobj=document.all? document.all[placeholder] : document.getElementById(placeholder)
	if (window.event||e.target&&e.target==eval(placeholder)) {
		if (lengthleft<0) {
			theform.value=theform.value.substring(0,maxlength);
		}
			
		placeholderobj.innerHTML=lengthleft;
	}
}

function displaylimit(thename, theid, thelimit) {
	
	var theform=theid!=""? document.getElementById(theid) : thename;
	
	displaylimit = thelimit;
	if(displaylimit < 0) {
		displaylimit = 0;
	}
	var limit_text='<b><span id="'+theform.toString()+'">'+displaylimit+'</span></b> characters remaining on your input limit';
	
	if (document.all||ns6) {
		document.write(limit_text);
	}
	if (document.all) {
		eval(theform).onkeypress=function(){ return restrictinput(thelimit,event,theform)}
		eval(theform).onkeyup=function(){ countlimit(thelimit,event,theform)}
	} else if (ns6) {
		document.body.addEventListener('keypress', function(event) { restrictinput(thelimit,event,theform) }, true); 
		document.body.addEventListener('keyup', function(event) { countlimit(thelimit,event,theform) }, true); 
	}
}

function InfoPop(URL) {
	window.open(URL, 'name', 'menubar=no,resizable=no,scrollbars=no,height=465,width=975');
	return;
}