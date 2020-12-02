<?=rand(100000,999999);?>

hello.

<script type="text/javascript" src="/md5.php?<?=rand(100000,999999);?>"></script>

<p>hi</p>

<div>test div</div>
<div>est</div>

<script type="text/javascript">
function var_dump(element, limit, depth)
{
	depth =	depth?depth:0;
	limit = limit?limit:1;

	returnString = '<ol>';

	for(property in element)
	{
		//Property domConfig isn't accessable
		if (property != 'domConfig')
		{
			returnString += '<li><strong>'+ property + '</strong> <small>(' + (typeof element[property]) +')</small>';

			if (typeof element[property] == 'number' || typeof element[property] == 'boolean')
				returnString += ' : <em>' + element[property] + '</em>';
			if (typeof element[property] == 'string' && element[property])
				returnString += ': <div style="background:#C9C9C9;border:1px solid black; overflow:auto;"><code>' +
									element[property].replace(/</g, '&amp;lt;').replace(/>/g, '&amp;gt;') + '</code></div>';

			if ((typeof element[property] == 'object') && (depth < limit))
				returnString += var_dump(element[property], limit, (depth + 1));

			returnString += '</li>';
		}
	}
	returnString += '</ol>';

	if(depth == 0)
	{
		winpop = window.open("", "","width=800,height=600,scrollbars,resizable");
		winpop.document.write('<pre>'+returnString+ '</pre>');
		winpop.document.close();
	}	

	return returnString;
}

function substr( f_string, f_start, f_length ) {
    // http://kevin.vanzonneveld.net
    // +     original by: Martijn Wieringa
    // +     bugfixed by: T.Wild
    // +      tweaked by: Onno Marsman
    // *       example 1: substr('abcdef', 0, -1);
    // *       returns 1: 'abcde'
    // *       example 2: substr(2, 0, -6);
    // *       returns 2: ''
 
    f_string += '';
 
    if(f_start < 0) {
        f_start += f_string.length;
    }
 
    if(f_length == undefined) {
        f_length = f_string.length;
    } else if(f_length < 0){
        f_length += f_string.length;
    } else {
        f_length += f_start;
    }
 
    if(f_length < f_start) {
        f_length = f_start;
    }
 
    return f_string.substring(f_start, f_length);
}

// test div 1e118a8a872145df6643dd8d7d7d1379
// 1,3,est 1c52bdae8bad70e82da799843bb4e831
// substr(string, 0, position_start) = prefix
// substr(string, 1+start+length) = end

var collChanges = new Array();

var arr1e118a8a872145df6643dd8d7d7d1379 = new Array();
arr1e118a8a872145df6643dd8d7d7d1379["position"] = 1;
arr1e118a8a872145df6643dd8d7d7d1379["length"] = 3;
arr1e118a8a872145df6643dd8d7d7d1379["key"] = '1c52bdae8bad70e82da799843bb4e831';
arr1e118a8a872145df6643dd8d7d7d1379["value"] = '<font color=#ff0000>estiest</font>';

collChanges["1e118a8a872145df6643dd8d7d7d1379"] = arr1e118a8a872145df6643dd8d7d7d1379;

az = document.getElementsByTagName('*');
bodyseen = false;

for(var i=0;i<az.length;i++) {
	if(az[i].tagName == 'BODY') {
		bodyseen = true;
		continue;
	}

        if(az[i].tagName == 'SCRIPT') continue;
	if(bodyseen == false) continue;

//	azstr = az[i].textContent;
	azstr = az[i].innerHTML;

	if(azstr.length == 0) continue;

	azvar = azstr.length;
//        alert(az[i].tagName+' '+azvar+' '+azstr+' '+MD5(azstr));
//	document.write('<br>'+az[i].tagName+' '+azvar+' '+azstr+' '+MD5(azstr));
//	var_dump(az[i],1);

	// not in changes collection
	objChanges = collChanges[MD5(azstr)];
	if(!objChanges) {
		continue;
	}

	// check to see if what were removing is correct
	oldstr = substr(azstr, objChanges["position"], objChanges["length"]);
	if(MD5(oldstr) != objChanges["key"]) {
		continue;
	}

	// remove part, assemble first+middle+last
	prestr = substr(azstr, 0, objChanges["position"]);
	poststr = substr(azstr, objChanges["position"]+objChanges["length"]);

	newstr = prestr + objChanges["value"] + poststr;

//	alert(prestr+' '+prestr.length);
//	alert(objChanges["value"]+' '+objChanges["value"].length);
//	alert(poststr+' '+poststr.length);


	// write new string
	az[i].innerHTML = newstr;
};
</script>

<script language=javascript>
function getSelText()
{
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
document.aform.selectedtext.value =  txt;
}
</script>
<input type="button" value="Get selection" onmousedown="getSelText()"> 
<form name=aform >
<textarea name="selectedtext" rows="5" cols="20"></textarea>
</form>

