<?

require_once 'md5.php';
require_once 'crc32.php';
require_once 'var_dump.php';

?>

function getReferralURL() {

                var sRef="";
                var g_d = document;
                if (typeof(g_frames) != "undefined")
                if (g_frames)
                        sRef=top.document.referrer;
                if ((sRef == "") || (sRef == "[unknown origin]") || (sRef == "unknown") || (sRef == "undefined"))
                if (document["parent"] != null)
                        if (parent["document"] != null) // ACCESS ERROR HERE!
                                if (parent.document["referrer"] != null)
                                        if (typeof(parent.document) == "object")
                                                sRef=parent.document.referrer;
                if ((sRef == "") || (sRef == "[unknown origin]") || (sRef == "unknown") || (sRef == "undefined"))
                if (g_d["referrer"] != null)
                        sRef = g_d["referrer"];
                if ((sRef == "[unknown origin]") || (sRef == "unknown") || (sRef == "undefined"))
                        sRef = "";

                return sRef;
}


function getSelText() {
    var txt = '';
     if (window.getSelection)
    {
        txt = window.getSelection();
             }
    else if (document.getSelection)
    {
        txt = document.getSelection();
            }
    else if (document.selection)
    {
        txt = document.selection.createRange().text;
            }
    else return;


	if(txt.rangeCount != 1) {
		alert('Please select some text.');
		return;
	}

	if(txt.anchorNode.nodeValue != txt.focusNode.nodeValue) {
		alert('More than one node selected. Select less text. Okay?');
		return;
	}

	replace_with = prompt('Please enter text to replace with selection:');
	if(replace_with.length == 0) {
		return;
	}

	get_url = 'http://174.139.1.210/test/save.php';
	get_url = get_url + '?node_length='+ txt.anchorNode.length;
	get_url = get_url + '&node_value_md5='+ MD5(txt.focusNode.nodeValue);
	get_url = get_url + '&selection_value_md5='+ MD5(txt.toString());
	get_url = get_url + '&anchor_offset='+ txt.anchorOffset;
	get_url = get_url + '&focus_offset=' + txt.focusOffset;
	get_url = get_url + '&base_uri='+ encodeURIComponent(txt.anchorNode.baseURI);
	get_url = get_url + '&referer='+ encodeURIComponent(getReferralURL());
	get_url = get_url + '&rnd='+ Math.floor(Math.random() * 1000000000)
	get_url = get_url + '&replace_with='+ encodeURIComponent(replace_with);

	var newIFrame = document.createElement("iframe");
	newIFrame.frameBorder = 0;
	newIFrame.width = 0;
	newIFrame.height = 0;
	newIFrame.src = get_url;

	txt.anchorNode.parentNode.insertBefore(newIFrame,txt.anchorNode);

	return(txt);
}

document.write('<input type="button" value="Process Selection" onmousedown="getSelText()">\n');


