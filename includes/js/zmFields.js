<!--
function zmFields()
{
	var genders = new Array('M','Male','F','Female');
	var gender = new Array(
'--','-- Select --',
'M','Mr.',
'F','Mrs.',
'F','Ms.',
'F','Miss'
);
	var birthmonth = new Array(
'--','Month',
'1','January',
'2','February',
'3','March',
'4','April',
'5','May',
'6','June',
'7','July',
'8','August',
'9','September',
'10','October',
'11','November',
'12','December'
);
	var birthday = new Array(
'--','Day',
'1','1',
'2','2',
'3','3',
'4','4',
'5','5',
'6','6',
'7','7',
'8','8',
'9','9',
'10','10',
'11','11',
'12','12',
'13','13',
'14','14',
'15','15',
'16','16',
'17','17',
'18','18',
'19','19',
'20','20',
'21','21',
'22','22',
'23','23',
'24','24',
'25','25',
'26','26',
'27','27',
'28','28',
'29','29',
'30','30',
'31','31'
);
	var yob = new Array(
'','Year',
'1987','1987',
'1986','1986',
'1985','1985',
'1984','1984',
'1983','1983',
'1982','1982',
'1981','1981',
'1980','1980',
'1979','1979',
'1978','1978',
'1977','1977',
'1976','1976',
'1975','1975',
'1974','1974',
'1973','1973',
'1972','1972',
'1971','1971',
'1970','1970',
'1969','1969',
'1968','1968',
'1967','1967',
'1966','1966',
'1965','1965',
'1964','1964',
'1963','1963',
'1962','1962',
'1961','1961',
'1960','1960',
'1959','1959',
'1958','1958',
'1957','1957',
'1956','1956',
'1955','1955',
'1954','1954',
'1953','1953',
'1952','1952',
'1951','1951',
'1950','1950',
'1949','1949',
'1948','1948',
'1947','1947',
'1946','1946',
'1945','1945',
'1944','1944',
'1943','1943',
'1942','1942',
'1941','1941',
'1940','1940',
'1939','1939',
'1938','1938',
'1937','1937',
'1936','1936',
'1935','1935',
'1934','1934',
'1933','1933',
'1932','1932',
'1931','1931',
'1930','1930',
'1929','1929',
'1928','1928',
'1927','1927',
'1926','1926',
'1925','1925',
'1924','1924',
'1923','1923',
'1922','1922',
'1921','1921',
'1920','1920',
'1919','1919',
'1918','1918',
'1917','1917',
'1916','1916',
'1915','1915',
'1914','1914',
'1913','1913',
'1912','1912',
'1911','1911',
'1910','1910',
'1909','1909',
'1908','1908',
'1907','1907',
'1906','1906',
'1905','1905',
'1904','1904',
'1903','1903',
'1902','1902',
'1901','1901',
'1900','1900'
);
//	var states = new Array(
////'AB','Alberta',
//'AK','Alaska', // 1
//'AL','Alabama', // 2
//'AR','Arkansas', // 3
//'AZ','Arizona', // 4
////'BC','British Columbia', // 
//'CA','California', // 5
//'CO','Colorado', // 6
//'CT','Connecticut', // 7
//'DC','District of Columbia', // 8
//'DE','Delaware', // 9
//'FL','Florida', // 10
//'GA','Georgia', // 11
//'HI','Hawaii', // 12
//'IA','Iowa', // 13
//'ID','Idaho', // 14
//'IL','Illinois', // 15
//'IN','Indiana', // 16
//'KS','Kansas', // 17
//'KY','Kentucky', // 18
//'LA','Louisiana', // 19
////'LB','Labrador', // 
//'MA','Massachusetts', // 20
////'MB','Manitoba', // 
//'MD','Maryland', // 21
//'ME','Maine', // 22
//'MI','Michigan', // 23
//'MN','Minnesota', // 24
//'MO','Missouri', // 25
//'MS','Mississippi', // 26
//'MT','Montana', // 27
////'NB','New Brunswick', // 
//'NC','North Carolina', // 28
//'ND','North Dakota', // 29
//'NE','Nebraska', // 30
////'NF','Newfoundland', // 
//'NH','New Hampshire', // 31
//'NJ','New Jersey', // 32
//'NM','New Mexico', // 33
////'NS','Nova Scotia', // 
////'NT','NW Territories', // 
//'NV','Nevada', // 34
//'NY','New York', // 35
//'OH','Ohio', // 36
//'OK','Oklahoma', // 37
////'ON','Ontario', // 
//'OR','Oregon', // 38
//'PA','Pennsylvania', // 39
////'PE','Prince Edward Island', // 
////'PQ','Quebec', // 
//'RI','Rhode Island', // 40
////'RQ','Puerto Rico', // 
//'SC','South Carolina', // 41
//'SD','South Dakota', // 42
////'SK','Saskatchewan', // 
//'TN','Tennessee', // 43
//'TX','Texas', // 44
//'UT','Utah', // 45
//'VA','Virginia', // 46
//'VT','Vermont', // 47
//'WA','Washington', // 48
//'WI','Wisconsin', // 49
//'WV','West Virginia', // 50
//'WY','Wyoming' // 51
////'YK','Yukon Territories'
//);
	var state = new Array(
'--','- - Please Select - -',
//'AA','Armed Forces Americas',
'AK','Alaska',
'AL','Alabama',
'AR','Arkansas',
'AZ','Arizona',
'CA','California',

'CO','Colorado',
'CT','Connecticut',
'DC','District of Columbia',
'DE','Delaware',
'FL','Florida',
'GA','Georgia',

'HI','Hawaii',
'IA','Iowa',
'ID','Idaho',
'IL','Illinois',
'IN','Indiana',

'KS','Kansas',
'KY','Kentucky',
'LA','Louisiana',
'MA','Massachusetts',
'MD','Maryland',

'ME','Maine',
'MI','Michigan',
'MN','Minnesota',
'MO','Missouri',
'MS','Mississippi',

'MT','Montana',
'NC','North Carolina',
'ND','North Dakota',
'NE','Nebraska',
'NH','New Hampshire',

'NJ','New Jersey',
'NM','New Mexico',
'NV','Nevada',
'NY','New York',
'OH','Ohio',

'OK','Oklahoma',
'OR','Oregon',
'PA','Pennsylvania',
'RI','Rhode Island',
'SC','South Carolina',

'SD','South Dakota',
'TN','Tennessee',
'TX','Texas',
'UT','Utah',
'VA','Virginia',

'VT','Vermont',
'WA','Washington',
'WI','Wisconsin',
'WV','West Virginia',
'WY','Wyoming'
);
	this.fontsize = 2;
	this.fontcolor = '#000000';
	this.fontface = 'Verdana, Arial, Helvetica, sans-serif';
	this.elem = new Object;
	this.elem['email'] = new Array("eMail",'','text','20','80');
	this.elem['fname'] = new Array("First Name",'','text','20','20');
	this.elem['lname'] = new Array("Last Name",'','text','20','20');
	this.elem['addressline1'] = new Array("Address",'','text','20','50');
	this.elem['addressline2'] = new Array("Address 2",'','text','20','50');
	this.elem['city'] = new Array("City",'','text','20','50');
	this.elem['state'] = new Array("State",'','select',state);
	this.elem['usastate'] = new Array("US State",'','select',state);
	this.elem['postcode'] = new Array("Zip Code",'','text','10','10');
	this.elem['homephone'] = new Array("Phone",'','text','12','15');
	this.elem['workphone'] = new Array("Work Phone",'','text','12','15');
	this.elem['age'] = new Array("Age",'','text','2','2');
	this.elem['gender'] = new Array("Prefix",'','select',gender);
	this.elem['birthmonth'] = new Array("Month",'','select',birthmonth);
	this.elem['birthday'] = new Array("Day",'','select',birthday);
	this.elem['yob'] = new Array("Year of Birth",'','select',yob);
	this.validate = new Object;
	this.validate['email'] = validateEmail;
	this.validate['fname'] = notMissing;
	this.validate['lname'] = notMissing;
	this.validate['addressline1'] = notMissing;
	this.validate['city'] = notMissing;
	this.validate['state'] = validateState;
	this.validate['usastate'] = validateState;
	this.validate['postcode'] = validatePostcode;
	this.validate['homephone'] = validateHomephone;
	this.validate['age'] = validateAge;
	this.validate['gender'] = validateGender;
	this.validate['birthmonth'] = notMissing;
	this.validate['birthday'] = notMissing;
	this.validate['yob'] = notMissing;
	this.getField = getField;
	this.getElement = getElement;
	this.createField = createField;
	this.createElement = createElement;
	this.validateForm = validateForm;
	this.isDigits = isDigits;
	this.setStyle = setStyle;
}
function setStyle(style)
{
	if (style) {this.style = style;}
}
function createElement(name,errtext,type,value)
{
	if (type == 'checkbox')
	{
		this.elem[name] = new Array(errtext,type,value);
		this.validate[name] = isChecked;
	}
	else
	{
		this.elem[name] = new Array(errtext,type,value);
		this.validate[name] = notMissing;
	}
	this.getElement(name);
}
function createField(name,label,hint,type,span,p1,p2)
{
	var yesno = new Array('Y','Yes','N','No');
	if (type == 'selectYN')
	{
		this.elem[name] = new Array(label,hint,'select',yesno);
	}
	else if (type == 'radioYN')
	{
		this.elem[name] = new Array(label,hint,'radio',yesno);
		this.validate[name] = isCheckedRadio;
	}
	else if (type == 'radio')
	{
		this.elem[name] = new Array(label,hint,'radio',p1);
		this.validate[name] = isCheckedRadio;
	}
	else if (type == 'select')
	{
		this.elem[name] = new Array(label,hint,type,p1);
	}
	else
	{
		this.elem[name] = new Array(label,hint,type,p1,p2);
		this.validate[name] = notMissing;
	}
	this.getField(name,span);
}
function getField(name,span)
{
	if (!span) {span = 1;}
	var font = "<font size='"+this.fontsize+"' color='"+this.fontcolor+"' face='"+this.fontface+"'>";
	if (this.style) {font = "<font class='"+this.style+"'>";}
	var vals = this.elem[name];
	var elem;
	if (vals[2] == 'select')
	{
		var opts = vals[3];
		elem = "<select size='1' name='"+name+"'>\n";
		for (var i = 0; i < opts.length; i+=2)
		{
			elem += "<option value=\""+opts[i]+"\">"+font+opts[i+1]+"</font></option>\n";
		}
		elem += "</select>";
	}
	else if (vals[2] == 'radio')
	{
		var opts = vals[3];
		elem = "";
		for (var i = 0; i < opts.length; i+=2)
		{
			elem += "<input type='"+vals[2]+"' value=\""+opts[i]+"\" name='"+name+"'>"+font+opts[i+1]+"</font>\n";
			sel = "";
		}
	}
	else
	{
		elem =  "<input type='"+vals[2]+"' size='"+vals[3]+"' value='' name='"+name+"'>";
	}
	var label2 = "";
	if (vals[1]) {label2 = "<br>"+vals[1];}
	var s = "<td colspan=\""+span+"\" align=\"right\">"+font+vals[0]+label2+"</font></td><td colspan=\""+span+"\">"+elem+"</td>";
	document.writeln(s);
}
function getElement(name)
{
	var vals = this.elem[name];
	var elem;
	if (vals[1] == 'checkbox')
	{
		elem = "<input type='"+vals[1]+"' name='"+name+"' value='"+vals[2]+"'>";
	}
	document.writeln(elem);
}
function validateForm(form)
{
	var valid = true;
	var errors = new Object;
	for (var i=0; i < form.elements.length; i++)
	{
		if (this.validate[form.elements[i].name])
		{
			var elemname = form.elements[i].name;
			if (!this.validate[elemname](form.elements[i],form))
			{
				errors[this.elem[elemname][0]] = 1;
				valid = false;
			}
		}
	}
	if (!valid)
	{
		var err = "These fields appear to have errors or are missing:\n";
		for (var i in errors) {err += "          "+i+"\n";}
		alert(err);
	}
	return valid;
}
function notMissing(elem)
{
	var result = false;
	value = elem.value + "";
	value = value.replace(/\s+$/g,"");
	if (value && value.length > 0) {result = true;}
	return result;
}
function isCheckedRadio(elem,form)
{
	var result = false;
	var numChecked=0;
	for (var j=0; j < form[elem.name].length; j++)
	{
		if (form[elem.name][j].checked) {numChecked++;}
	}
	if (numChecked > 0) {result = true;}
	return result;
}
function isChecked(elem,form)
{
	var result = false;
	if (form[elem.name].checked) {result = true;}
	return result;
}
function validateEmail(elem)
{
	var result = false;
	value = elem.value + "";
	var index = value.indexOf("@");
	if (index > 0)
	{
		var pindex = value.indexOf(".",index);
		if ((pindex > index+1) && (value.length > pindex+1))
		result = true;
	}
	return result;
}
function validateState(elem)
{
	var result = false;
	value = elem.value + "";
	if (value != "--") {result = true;}
	return result;
}
function validatePostcode(elem)
{
	var result = false;
	value = elem.value + "";
	if (value.length == 5 && isDigits(value)) {result = true;}
	else if (value.length == 10 && isDigits(value.substring(0,5)) &&
		 value.charAt(5) == '-' && isDigits(value.substring(6,10))) {result = true;}
	return result;
}
function validateHomephone(elem)
{
	var result = false;
	value = elem.value + "";
	var c = countDigits(value);
	if (c == 10 || c == 11) {result = true;}
	return result;
}
function validateGender(elem)
{
	var result = false;
	value = elem.value + "";
	if (value != "--") {result = true;}
	return result;
}
function validatePrefix(elem)
{
	var result = false;
	value = elem.value + "";
	if (value != "--") {result = true;}
	return result;
}
function validateAge(elem)
{
	var result = false;
	value = elem.value + "";
	if (value.length > 0 && value.length <= 2 && isDigits(value)) {result = true;}
	return result;
}
function isDigits(x)
{
	var result = true;
	x += "";
	var chars = "0123456789";
	for (var i=0; i < x.length; i++)
	{
		if (chars.indexOf(x.charAt(i)) == -1)
		{
			result = false;
			break;
		}
	}
	return result;
}
function countDigits(x)
{
	var count = 0;
	x += "";
	var chars = "0123456789";
	for (var i=0; i < x.length; i++)
	{
		if (chars.indexOf(x.charAt(i)) != -1)
		{
			count++;
		}
	}
	return count;
}
var zmArgs = new Object();
var extraParams = "";
function parseQuery()
{
        var queryString = location.search.substring(1);         // drop the leading ?
        var pairs = queryString.split("&");
        for (var i = 0; i < pairs.length; i++)
        {
                var pos = pairs[i].indexOf('=');
                if (pos == -1) continue;
                var argname = pairs[i].substring(0,pos);
                var argvalue = pairs[i].substring(pos+1);
                if (!zmArgs[argname]) {zmArgs[argname] = unescape(argvalue);}
                else {zmArgs[argname] += ";"+unescape(argvalue);}
        }
	if (zmArgs['age'] && !zmArgs['yob'])
	{
		today = new Date();
		zmArgs['yob'] = today.getFullYear() - zmArgs['age'] - 1;
		extraParams += "&yob="+zmArgs['yob'];
	}
}
function zmSend()
{
	var url = "http://zmedia.com/warp/subs/pix_final";
	url += location.search;
	url += extraParams;
	document.writeln("<img src=\""+url+"\" width=1 height=1>");
}
function addHidden(name)
{
        document.writeln("<input type=\"hidden\" name=\""+name+"\" value=\""+zmArgs[name]+"\">");
}
// -->
