<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>DFS</title>
<?php
session_start();
?>
<link rel="shortcut icon" href="./images/logohino.jpg" />
<script src="jquery-1.11.2.min.js"></script>
<script src="icheck.js"></script>

  <!--link rel="stylesheet" href="style.css"-->

  <link rel="stylesheet" href="./Chosen/chosen.css">
  <style type="text/css" media="all">
    /* fix rtl for demo */
    .chosen-rtl .chosen-drop { left: -9000px; }
  </style>


<!--link rel="stylesheet" type="text/css" href="./modal1/jquery.confirm/jquery.confirm.css" /-->

	<!--link href="bootstrap.min.css" rel="stylesheet"-->
	<!--link href="font-awesome.min.css" rel="stylesheet"-->

<script type="text/javascript" src="libraries/syntaxhighlighter/public/javascript/XRegExp.js"></script>
<script type="text/javascript" src="libraries/syntaxhighlighter/public/javascript/shCore.js"></script>
<script type="text/javascript" src="libraries/syntaxhighlighter/public/javascript/shLegacy.js"></script>
<script type="text/javascript" src="libraries/syntaxhighlighter/public/javascript/shBrushJScript.js"></script>
<script type="text/javascript" src="libraries/syntaxhighlighter/public/javascript/shBrushXML.js"></script>

<script src="./Resources/dynamsoft.webtwain.install.js" charset="utf-8"></script>
<script type="text/javascript" src="./Resources/dynamsoft.webtwain.initiate.js"></script>
<script type="text/javascript" src="./Resources/dynamsoft.webtwain.config.js"></script>

<link rel="stylesheet" type="text/css" href="./tigracalendar/tcal.css" />
<script type="text/javascript" src="./tigracalendar/tcal.js"></script>

<!--script src="Form.Upload.js"></script-->
<link rel="stylesheet" href="spinnerclock.css" type="text/css">

<style type="text/css">
	/*this is just to organize the demo checkboxes*/
	label {margin-right:20px;}
</style>

<script type="text/javascript">
    SyntaxHighlighter.defaults['toolbar'] = false;
    SyntaxHighlighter.all();
</script>
<style>
.button, .button:visited {
background-color: #222;
display: inline-block;
padding: 5px 10px 6px;
color: #fff;
text-decoration: none;
-moz-border-radius: 6px;
-webkit-border-radius: 6px;
-moz-box-shadow: 0 1px 3px rgba(0,0,0,0.6);
-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.6);
text-shadow: 0 -1px 1px rgba(0,0,0,0.25);
border-bottom: 1px solid rgba(0,0,0,0.25);
position: relative;
cursor: pointer;
font-family: calibri;
}
.button:hover {
background-color: #111;
color: #fff;
} .button:active {
top: 1px;
}
.small.button, .small.button:visited {
font-size: 11px
}
.button, .button:visited,
.medium.button, .medium.button:visited {
font-size: 13px;
font-weight: bold;
line-height: 1;
text-shadow: 0 -1px 1px rgba(0,0,0,0.25);
}
.medium.button, .medium.button:visited {
font-size: 14px;
padding: 8px 14px 9px;
}
.large.button, .large.button:visited {
font-size: 34px;
padding: 8px 14px 9px;
}
.pink.button, .magenta.button:visited {
background-color: #e22092;
}
.pink.button:hover {
background-color: #c81e82;
}
.green.button, .green.button:visited {
background-color: #35cf21;
}
.green.button:hover {
background-color: #749a02;
}
.red.button, .red.button:visited {
background-color: #e62727;
}
.red.button:hover {
background-color: #cf2525;
}
.orange.button, .orange.button:visited {
background-color: #ff5c00;
}
.orange.button:hover {
background-color: #d45500;
}
.blue.button, .blue.button:visited {
background-color: #2175f4;
}
.blue.button:hover {
background-color: #2575cf;
}
.yellow.button, .yellow.button:visited {
background-color: #ffc515;
}
.yellow.button:hover {
background-color: #fc9200;
}
.purple.button, .yellow.button:visited {
background-color: #af65ef;
}
.purple.button:hover {
background-color: #fc9200;
}
</style>
<style>
  .textbox {
    border: 1px solid #c4c4c4;
    height: 40px;
    width: 220px;
    background: #DDDDDD;
    font-size: 22px;
    padding: 4px 4px 4px 4px;
    border-radius: 4px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    box-shadow: 0px 0px 4px #d9d9d9;
    -moz-box-shadow: 0px 0px 4px #d9d9d9;
    -webkit-box-shadow: 0px 0px 4px #d9d9d9;
}

.textbox:focus {
    outline: none;
    border: 1px solid #7bc1f7;
    box-shadow: 0px 0px 4px #7bc1f7;
    -moz-box-shadow: 0px 0px 4px #7bc1f7;
    -webkit-box-shadow: 0px 0px 4px #7bc1f7;
</style>
<style>
  .textboxbarcode {
    border: 2px solid #444444;
    height: 58px;
    width: 580px;
    background: #94FED0;
    font-size: 52px;
    font-weight: bold;
    padding: 4px 4px 4px 4px;
    border-radius: 4px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    box-shadow: 0px 0px 4px #d9d9d9;
    -moz-box-shadow: 0px 0px 4px #d9d9d9;
    -webkit-box-shadow: 0px 0px 4px #d9d9d9;
}

.textboxbarcode:focus {
    outline: none;
    border: 2px solid #888888;
    box-shadow: 0px 0px 4px #7bc1f7;
    -moz-box-shadow: 0px 0px 4px #7bc1f7;
    -webkit-box-shadow: 0px 0px 4px #7bc1f7;
</style>
<style>
.textboxnarrow {
    border: 2px solid #444444;
    height: 40px;
    width: 130px;
    font-size: 34px;
    font-weight: bold;
    background: #fcee50;
    padding: 4px 4px 4px 4px;
    border-radius: 4px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    box-shadow: 0px 0px 4px #d9d9d9;
    -moz-box-shadow: 0px 0px 4px #d9d9d9;
    -webkit-box-shadow: 0px 0px 4px #d9d9d9;
}

.textboxnarrow:focus {
    outline: none;
    border: 1px solid #7bc1f7;
    box-shadow: 0px 0px 4px #7bc1f7;
    -moz-box-shadow: 0px 0px 4px #7bc1f7;
    -webkit-box-shadow: 0px 0px 4px #7bc1f7;
</style>
<style>
.textboxmid {
    border: 1px solid #c4c4c4;
    height: 14px;
    width: 110px;
    font-size: 13px;
    padding: 4px 4px 4px 4px;
    border-radius: 4px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    box-shadow: 0px 0px 4px #d9d9d9;
    -moz-box-shadow: 0px 0px 4px #d9d9d9;
    -webkit-box-shadow: 0px 0px 4px #d9d9d9;
}

.textboxmid:focus {
    outline: none;
    border: 1px solid #c4c4c4;
    box-shadow: 0px 0px 4px #7bc1f7;
    -moz-box-shadow: 0px 0px 4px #7bc1f7;
    -webkit-box-shadow: 0px 0px 4px #7bc1f7;
}
 </style>
 <style>
.textboxwide {
    border: 1px solid #c4c4c4;
    height: 14px;
    width: 250px;
    font-size: 13px;
    padding: 4px 4px 4px 4px;
    border-radius: 4px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    box-shadow: 0px 0px 4px #d9d9d9;
    -moz-box-shadow: 0px 0px 4px #d9d9d9;
    -webkit-box-shadow: 0px 0px 4px #d9d9d9;
}

.textboxwide:focus {
    outline: none;
    border: 1px solid #7bc1f7;
    box-shadow: 0px 0px 4px #7bc1f7;
    -moz-box-shadow: 0px 0px 4px #7bc1f7;
    -webkit-box-shadow: 0px 0px 4px #7bc1f7;
}
 </style>
 <style>
  .textboxtgl {
    border: 2px solid #444444;
    height: 40px;
    width: 200px;
    background: #fcee50;
    font-size: 16px;
    padding: 4px 4px 4px 4px;
    border-radius: 2px;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    box-shadow: 0px 0px 2px #d9d9d9;
    -moz-box-shadow: 0px 0px 2px #d9d9d9;
    -webkit-box-shadow: 0px 0px 2px #d9d9d9;
}

.textboxtgl:focus {
    outline: none;
    border: 1px solid #7bc1f7;
    box-shadow: 0px 0px 2px #7bc1f7;
    -moz-box-shadow: 0px 0px 2px #7bc1f7;
    -webkit-box-shadow: 0px 0px 2px #7bc1f7;
}
 </style>
<style>
select#bank {
    max-width: 350px;
    min-width: 220px;
    width: 220px !important;
}
</style>
<style>
select#jenis {
    max-width: 250px;
    min-width: 120px;
    width: 150px !important;
}
</style>
    <!-- styles for this example page only -->


	<!-- style exceptions for IE 6 -->
	<!--[if IE 6]>
	<style type="text/css">
		.fg-menu-ipod .fg-menu li { width: 95%; }
		.fg-menu-ipod .ui-widget-content { border:0; }
	</style>
	<![endif]-->

<style>
.button {
   border-top: 1px solid #96d1f8;
   background: #69caf0;
   background: -webkit-gradient(linear, left top, left bottom, from(#2893f7), to(#69caf0));
   background: -webkit-linear-gradient(top, #2893f7, #69caf0);
   background: -moz-linear-gradient(top, #2893f7, #69caf0);
   background: -ms-linear-gradient(top, #2893f7, #69caf0);
   background: -o-linear-gradient(top, #2893f7, #69caf0);
   padding: 11.5px 23px;
   -webkit-border-radius: 16px;
   -moz-border-radius: 16px;
   border-radius: 16px;
   -webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
   -moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
   box-shadow: rgba(0,0,0,1) 0 1px 0;
   text-shadow: rgba(0,0,0,.4) 0 1px 0;
   color: #f9f9fc;
   font-size: 16px;
   font-family: Arial, serif;
   font-weight: normal;
   text-decoration: none;
   vertical-align: middle;
   }
.button:hover {
   border-top-color: #0c37c4;
   background: #0c37c4;
   color: #ffffff;
   }
.button:active {
   border-top-color: #1b435e;
   background: #1b435e;
   }
.button.icon {
   padding-left: 20px;
   }
.button.icon span{
   padding-left: 40px;
   padding-right: 10px;
   background:url('./images/scanner2.png') no-repeat 0 -14px;

   }
.button.icon.chat span {
   background-position: -4px -4px;
   }
</style>
<style>
.buttonh {
   border-top: 1px solid #96d1f8;
   background: #69caf0;
   background: -webkit-gradient(linear, left top, left bottom, from(#2893f7), to(#69caf0));
   background: -webkit-linear-gradient(top, #2893f7, #69caf0);
   background: -moz-linear-gradient(top, #2893f7, #69caf0);
   background: -ms-linear-gradient(top, #2893f7, #69caf0);
   background: -o-linear-gradient(top, #2893f7, #69caf0);
   padding: 11.5px 23px;
   -webkit-border-radius: 16px;
   -moz-border-radius: 16px;
   border-radius: 16px;
   -webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
   -moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
   box-shadow: rgba(0,0,0,1) 0 1px 0;
   text-shadow: rgba(0,0,0,.4) 0 1px 0;
   color: #f9f9fc;
   font-size: 16px;
   font-family: Arial, serif;
   font-weight: normal;
   text-decoration: none;
   vertical-align: middle;
   }
.buttonh:hover {
   border-top-color: #0c37c4;
   background: #0c37c4;
   color: #ffffff;
   }
.buttonh:active {
   border-top-color: #1b435e;
   background: #1b435e;
   }
.buttonh.icon {
   padding-left: 20px;
   }
.buttonh.icon span{
   padding-left: 40px;
   padding-right: 10px;
   background:url('./images/home11.png') no-repeat 0 -14px;

   }
.buttonh.icon.chat span {
   background-position: 0px 0px;
   }
</style>
<style>
.buttona {
   border-top: 1px solid #96d1f8;
   background: #69caf0;
   background: -webkit-gradient(linear, left top, left bottom, from(#2893f7), to(#69caf0));
   background: -webkit-linear-gradient(top, #2893f7, #69caf0);
   background: -moz-linear-gradient(top, #2893f7, #69caf0);
   background: -ms-linear-gradient(top, #2893f7, #69caf0);
   background: -o-linear-gradient(top, #2893f7, #69caf0);
   padding: 11.5px 23px;
   -webkit-border-radius: 16px;
   -moz-border-radius: 16px;
   border-radius: 16px;
   -webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
   -moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
   box-shadow: rgba(0,0,0,1) 0 1px 0;
   text-shadow: rgba(0,0,0,.4) 0 1px 0;
   color: #f9f9fc;
   font-size: 16px;
   font-family: Arial, serif;
   font-weight: normal;
   text-decoration: none;
   vertical-align: middle;
   }
.buttona:hover {
   border-top-color: #0c37c4;
   background: #0c37c4;
   color: #ffffff;
   }
.buttona:active {
   border-top-color: #1b435e;
   background: #1b435e;
   }
.buttona.icon {
   padding-left: 20px;
   }
.buttona.icon span{
   padding-left: 40px;
   padding-right: 10px;
   background:url('./images/search4.png') no-repeat 0 -14px;

   }
.buttona.icon.chat span {
   background-position: -3px -3px;
   }
</style>
<style>
.buttoncancel {
   border-top: 1px solid #96d1f8;
   background: #69caf0;
   background: -webkit-gradient(linear, left top, left bottom, from(#2893f7), to(#69caf0));
   background: -webkit-linear-gradient(top, #2893f7, #69caf0);
   background: -moz-linear-gradient(top, #2893f7, #69caf0);
   background: -ms-linear-gradient(top, #2893f7, #69caf0);
   background: -o-linear-gradient(top, #2893f7, #69caf0);
   padding: 11.5px 23px;
   -webkit-border-radius: 16px;
   -moz-border-radius: 16px;
   border-radius: 16px;
   -webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
   -moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
   box-shadow: rgba(0,0,0,1) 0 1px 0;
   text-shadow: rgba(0,0,0,.4) 0 1px 0;
   color: #f9f9fc;
   font-size: 16px;
   font-family: Arial, serif;
   font-weight: normal;
   text-decoration: none;
   vertical-align: middle;
   }
.buttoncancel:hover {
   border-top-color: #0c37c4;
   background: #0c37c4;
   color: #ffffff;
   }
.buttoncancel:active {
   border-top-color: #1b435e;
   background: #1b435e;
   }
.buttoncancel.icon {
   padding-left: 20px;
   }
.buttoncancel.icon span{
   padding-left: 40px;
   padding-right: 10px;
   background:url('./images/cancel1.png') no-repeat 0 -14px;

   }
.buttoncancel.icon.chat span {
   background-position: -2px -2px;
   }
</style>
<style>
input#search {
    background:url(./images/star_green.png);
    background-repeat: no-repeat;
    width:20px;
    height:20px;
    text-indent:-999px
}
</style>

<style>
a.ebutton {
background-image: -moz-linear-gradient(top, #ffffff, #dbdbdb);
background-image: -webkit-gradient(linear,left top,left bottom,
    color-stop(0, #ffffff),color-stop(1, #bbbbdb));
filter: progid:DXImageTransform.Microsoft.gradient
    (startColorStr='#ffffff', EndColorStr='#dbdbdb');
-ms-filter: "progid:DXImageTransform.Microsoft.gradient
    (startColorStr='#ffffff', EndColorStr='#dbdbdb')";
border: 1px solid #fff;
-moz-box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.4);
-webkit-box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.4);
box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.4);
border-radius: 18px;
-webkit-border-radius: 18px;
-moz-border-radius: 18px;
padding: 5px 25px;
text-decoration: none;
text-shadow: #fff 0 1px 0;
float: left;
margin-right: 15px;
margin-bottom: 15px;
display: block;
color: #597390;
line-height: 24px;
font-size: 16px;
font-family: Arial, serif;
font-weight: bold;
}
a.ebutton {
border: 1px solid #979797;
}
a.ebutton:hover {
background-image: -moz-linear-gradient(top, #ffffff, #eeeeee);
background-image: -webkit-gradient(linear,left top,left bottom,
    color-stop(0, #ffffff),color-stop(1, #eeeeee));
filter: progid:DXImageTransform.Microsoft.gradient
    (startColorStr='#ffffff', EndColorStr='#eeeeee');
-ms-filter: "progid:DXImageTransform.Microsoft.gradient
    (startColorStr='#ffffff', EndColorStr='#eeeeee')";
color: #000;
display: block;
}
a.ebutton:active {
background-image: -moz-linear-gradient(top, #dbdbdb, #ffffff);
background-image: -webkit-gradient(linear,left top,left bottom,
    color-stop(0, #dbdbdb),color-stop(1, #ffffff));
filter: progid:DXImageTransform.Microsoft.gradient
    (startColorStr='#dbdbdb', EndColorStr='#ffffff');
-ms-filter: "progid:DXImageTransform.Microsoft.gradient
    (startColorStr='#dbdbdb', EndColorStr='#ffffff')";
text-shadow: 0px -1px 0 rgba(255, 255, 255, 0.5);
margin-top: 1px;
}
a.ebutton.icon {
padding-left: 20px;
}
a.ebutton.icon span{
padding-left: 40px;
padding-right: 10px;
background:url('./images/search4.png') no-repeat 0 -14px;

}
a.ebutton.icon.chat span {
background-position: -3px -3px;
}
</style>
<style>
.dropbtn {
    background-color: #FFFFFF;
    color: black;
    padding: 4px;
    font-size: 15px;
	font-family: 'Arial', sans-serif;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #DDDDDD;
}

.dropdown {
    position: relative;
    display: inline-block;
	vertical-align: middle;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
	font-size: 15px;
	font-family: 'Arial', sans-serif;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #DDDDDD}

.show {display:block;}
</style>
<script type="text/javascript">
    $(function(){
    	// BUTTONS
    	$('.fg-button').hover(
    		function(){ $(this).removeClass('ui-state-default').addClass('ui-state-focus'); },
    		function(){ $(this).removeClass('ui-state-focus').addClass('ui-state-default'); }
    	);

    	// MENUS
		$('#flat').menu({
			content: $('#flat').next().html(), // grab content from this page
			showSpeed: 400
		});
    });
</script>

<script>
$(document).ready(function(){
  $('input').iCheck({
    checkboxClass: 'icheckbox_polaris',
    radioClass: 'iradio_polaris',
    increaseArea: '-10%' // optional
  });
});
</script>
<script>
function getbarcodeku(barcodemu, userid, aa, ii) 
{
	if (barcodemu.length > 11)
	{
		document.getElementsByName("barcodeno")[0].value = barcodemu;
		getbarcode1(aa);
	}
	else
	{
		if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}
		else { // code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function() {
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				//document.getElementById("statustxt").innerHTML=xmlhttp.responseText;
				var mystr = xmlhttp.responseText;
				var ab = mystr.split("|");
//alert("WIS" + ab[0] + ab[1] + ab[3]);
				//document.getElementsByName("barcodeno")[0].value = ab[0] + "|" + ab[1] + "|" + ab[2] + "|" + ab[3];
				document.getElementsByName("barcodeno")[0].value = ab[0] + ab[1] + ab[3];
				getbarcode1(aa);
				//return mystr;
				//document.getElementsByName("jmlscan")[0].value = mystr;
			}
		}

		var linkget = "getbarcode.php?userid=" + userid + "&barcode=" + barcodemu + "&p11=" + ii;
		xmlhttp.open("GET", linkget, true);
		xmlhttp.send();
	}
}
</script>
<script>
function cekfolder(barcodemu, mesinmu, tahunmu, bulanmu, harimu, foldermu, useridmu) {

		if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}
		else { // code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function() {
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				//document.getElementById("statustxt").innerHTML=xmlhttp.responseText;
				var mystr = xmlhttp.responseText;
//alert(mystr);
				document.getElementsByName("jmlscan")[0].value = mystr;
				//window.location.reload();
				if (mystr.indexOf('Data sudah dihapus')>=0) {
					alert("Data sudah dihapus");
					//window.location.reload();
				}
			}
		}
		var linkget = "checkfolder.php?barcodemu=" + barcodemu + "&mesinmu=" + mesinmu + "&tahunmu=" + tahunmu +
						"&bulanmu=" + bulanmu + "&harimu=" + harimu + "&foldermu=" + foldermu + "&useridmu=" + useridmu;

		xmlhttp.open("GET", linkget, true);
		xmlhttp.send();

}
</script>
<script>
function replacetxt(mytext, useridmu) {

		if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}
		else { // code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function() {
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				//document.getElementById("statustxt").innerHTML=xmlhttp.responseText;
				var mystr = xmlhttp.responseText;
//alert(mystr);
				document.getElementsByName("jmlscan")[0].value = mystr;
				if (mystr.indexOf('Data sudah dihapus')>=0) {
					alert("Data sudah dihapus");
					window.location.reload();
				}
			}
		}
		var linkget = "replacetext.php?foldermu" + mytext + "&useridmu=" + useridmu;

		xmlhttp.open("GET", linkget, true);
		xmlhttp.send();

}
</script>

<script>
function readsummaryscanku(userid, tglku) {
//alert(userid + "==" + tglku);
		if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}
		else { // code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function() {
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				//document.getElementById("statustxt").innerHTML=xmlhttp.responseText;
				var mystr = xmlhttp.responseText;
//alert(mystr);
				document.getElementsByName("jmlscan")[0].value = mystr;
				if (mystr.indexOf('Data sudah dihapus')>=0) {
					alert("Data sudah dihapus");
					window.location.reload();
				}
			}
		}
		var linkget = "summaryscan.php?userid=" + mytext + "&tgl=" + tglku;

		xmlhttp.open("GET", linkget, true);
		xmlhttp.send();

}
</script>

<script>
<script type="text/javascript">
function SelectAll(id)
{
    document.getElementById(id).focus();
    document.getElementById(id).select();
}
</script>
<script>
$.post( "checkfolder.php", { directory: "dir" })
.done(function( data ) {
alert( data);
});

</script>
<script>
function getbarcode(aa) {
	
	var ii=0;
	if(document.abc.enginetype.checked == true)      
	{      
		ii=1;      
	}
	if(document.abc.enginetype.checked == false)      
	{      
		ii=0;      
	}
	document.getElementById('image1').style.display='inline';
	document.getElementById('image2').style.display = 'none';
	document.getElementById('image3').style.display = 'none';

	var userid = document.getElementsByName("userid")[0].value;
	var barcodeku = document.getElementsByName("barcodeno")[0].value;
	var barcodeme = "";
	var barcodemine = "";
	var i=0;
	var barrk = "";
	
    barcodeku = barcodeku.replace(/[^\x20-\x7E]/gmi, "");
	barcodeku = barcodeku.toUpperCase();
	
	if (barcodeku.length <= 13 || (barcodeku.length > 35 && barcodeku.length < 40))
	{
		if (barcodeku.length > 33)
		{
			barrk = barcodeku;
			barcodeku = barrk.substr(14,12);
			getbarcodeku(barcodeku, userid, aa, ii);
		}
		else
		{
			getbarcodeku(barcodeku, userid, aa, ii);
		}
	}
	else
	{
		getbarcode1(aa);
	}

}
</script>
<script>
function getbarcode1(aa) {

	var userid = document.getElementsByName("userid")[0].value;
	var barcodeku = document.getElementsByName("barcodeno")[0].value;
	var barcodeme = "";
	var barcodemine = "";
	var i=0;
	
		barcodemine = barcodeku;

		kodemesin1 = barcodeku.substr(0,4);
		kodemesin2 = barcodeku.substr(4,1);
		kodemesin3 = barcodeku.substr(5,2);
		barcodeku = barcodeku.substr(5,7);
	
		barcodeme = kodemesin1 + kodemesin2 + barcodeku;
		barcodeku = barcodeme;

		document.getElementsByName("barcodeno")[0].value = barcodeme;
//alert(barcodeku.length);
	if ((barcodemine.length > 13 && barcodemine.length < 21) || (barcodemine.length > 40 && barcodemine.length < 50))
	{
		//barcodeku = barcodeku.substring(12,21);
		barcodeku = barcodeku.substr(0,12);
		//barcodemine = getbarcodeku(barcodeku, userid);
		//var ab = barcodemine.split("|");
		//kodemesin1 = ab[0];
		//kodemesin2 = ab[1];
		//kodemesin3 = ab[2];
		//barcodeku = ab[3];
		kodemesin1 = barcodeku.substr(0,4);
		kodemesin2 = barcodeku.substr(4,1);
		kodemesin3 = barcodeku.substr(5,2);
		barcodeku = barcodeku.substr(5,7);
	
		barcodeme = kodemesin1 + kodemesin2 + barcodeku;
		//barcodeku = barcodeme;
	}

	//getbarcodeku(barcodeku, userid);

	if (kodemesin1=="J08E")
	{
		// + kodeend;
		//document.getElementsByName("barcodeno")[0].value = barcodeme;
		document.getElementsByName("barcodeno")[0].style.backgroundColor='#77CFFD';
//alert("Panjang" + barcodeme);
	}
	else if (kodemesin1=="W04D")
	{
		document.getElementsByName("barcodeno")[0].style.backgroundColor='#FDCCCC';
	}
	else
	{
		document.getElementsByName("barcodeno")[0].style.backgroundColor='#CCCCFD';
	}

	//barcodeku = barcodeku + "-" + kodeend;
	//document.getElementsByName("jmlscan")[0].value = barcodeme;

	
	var barcodehide = document.getElementsByName("barcodehide")[0].value;

	var folderku="";
	var d = new Date();
	var tahunn = d.getFullYear();
	var bulann = d.getMonth();
	bulann = bulann+1;
	var harii = d.getDate();
	
	var kodemesinhide = barcodehide.substr(0,4);

	if (kodemesin1==kodemesinhide)
	{
		folderku = "E://" + kodemesin1 + "//" + tahunn + "//" + bulann + "//" + harii; 
	}
	else
	{
		folderku = "E://" + kodemesinhide + "//" + tahunn + "//" + bulann + "//" + harii;
		kodemesin1 = kodemesinhide;
	}
	 
//alert(folderku);
	document.getElementsByName("barcodeno")[0].value = barcodeme;
    document.getElementsByName("barcodeno")[0].focus();
    //document.getElementsByName("barcodeno")[0].select();	
	  //checkfolder();
      //document.getElementsByName("barcodeno")[0].style.backgroundcolor="#56EE55";
	
	if (aa==0)
	{

		barcode1 = barcodeme;
		barcode2 = barcodehide.substr(0,12);
//alert(barcode1 + "@" + barcode2);
		//if (barcode1.includes(barcode2) && (barcode2.length>1))
		if (barcode1===barcodehide && (barcode2.length>8))
		{
//Mulai scan
			document.getElementById('image1').style.display = 'none';
			document.getElementById('image2').style.display = 'inline';
			document.getElementById('image3').style.display = 'none';
//alert("SCAN:" + barcodeme + " Kodemesin:" + kodemesin1 + " Tahun:" + tahunn + " Bulan:" + bulann + " Folder:" + folderku + " Userid:" + userid);
			AcquireImage(barcodeme, kodemesin1, tahunn, bulann, harii, folderku, userid);
/* Callback functions for Async APIs */
			//cekfolder(barcodeme, kodemesin1, tahunn, bulann, harii, folderku, userid);
			document.getElementsByName("barcodehide")[0].value = "";
			//document.getElementsByName("barcodeno")[0].value = "";
			
			document.getElementById('image1').style.display = 'none';
			document.getElementById('image2').style.display = 'none';
			document.getElementById('image3').style.display = 'inline';
			
			//location.reload();
		}
		else
		{
			document.getElementsByName("barcodehide")[0].value = barcodeme;
		}
	}
	else 
	{

//alert(barcodeme + "+" + kodemesin1 + "+" + tahunn + "+" + bulann + "+" + harii + "+" + folderku + "+" + useridku);
		
		AcquireImage(barcodeme, kodemesin1, tahunn, bulann, harii, folderku, userid);

		//cekfolder(barcodeme, kodemesin1, tahunn, bulann, harii, folderku, userid);
		document.getElementsByName("barcodehide")[0].value = "";
		document.getElementsByName("barcodeno")[0].value = "";
		
		document.getElementById('image1').style.display = 'none';
		document.getElementById('image2').style.display = 'none';
		document.getElementById('image3').style.display = 'inline';
			
		//location.reload();

	}

	//document.getElementsByName("barcodeno")[0].value = barcodeme;
    //document.getElementsByName("barcodeno")[0].focus();
    //document.getElementsByName("barcodeno")[0].select();

}
</script>

<script>
function myengineshort()
{
	var radios = document.getElementsByName('enginetype');
	var barcodeku = document.getElementsByName("barcodeno")[0].value;
	var tipemesin="";
	var mesin1="";
	var mesin2="";
	//var kodemesin = barcodeku.substr(0,4);
	//var kodekode = barcodeku.substr(5,12);
	var i=0;
	/*
	for (var i = 0, length = radios.length; i < length; i++) {
		if (radios[i].checked) {
        // do whatever you want with the checked radio
			tipemesin=(radios[i].value);
        // only one radio can be logically checked, don't check the rest
			break;
		}
	}
	*/

	
	
if(document.abc.enginetype.checked == true)      
{      
	i=1;      
} 	

if(document.abc.enginetype.checked == false)      
{      
	i=2;      
} 
//alert(i + "--" + barcodeku + "--" + kodemesin + "==" + kodekode);
	
	tipemesin=tipemesin.toUpperCase();
//alert(barcodeku.length);
	if (barcodeku.length >0 )
	{
		barcodeku=barcodeku.trim();
		kodemesin = barcodeku.substr(0,4);
		kodekode = barcodeku.substr(5,12);

		if (i==1)
		{
			document.getElementsByName("barcodeno")[0].value="P11CV" + kodekode;
			document.getElementsByName("barcodehide")[0].value="P11CV" + kodekode;
		}
		else if (i==2)
		{
			document.getElementsByName("barcodeno")[0].value="W04DT" + kodekode;
			document.getElementsByName("barcodehide")[0].value="W04DT" + kodekode;
		}
	}
    //document.getElementsByName("barcodeno")[0].focus();
    //document.getElementsByName("barcodeno")[0].select();
	//alert(tipemesin);
}
</script>
<script>
function myrepair()
{

	var radios = document.getElementsByName('repair');
	var barcodeku = document.getElementsByName("barcodeno")[0].value;
	var mesin2="";
	var kodemesin="";
	var mesinl=0;
	//var kodemesin = barcodeku.substr(0,4);
	//var kodekode = barcodeku.substr(5,12);
	var i=0;


if(document.repairfrm.repair.checked == true)      
{      
	i=1;      
} 	

if(document.repairfrm.repair.checked == false)      
{      
	i=2;      
} 
	
	barcodeku=barcodeku.toUpperCase();
	mesinl = barcodeku.length;

	if (mesinl > 5 )
	{
		barcodeku=barcodeku.trim();
		kodekode = barcodeku.substr(0,12);
		if (i==1)
		{
			document.getElementsByName("barcodeno")[0].value=kodekode + "R";
		}
		else if (i==2)
		{
			document.getElementsByName("barcodeno")[0].value=kodekode;
		}
	}
    //document.getElementsByName("barcodeno")[0].focus();
    //document.getElementsByName("barcodeno")[0].select();
	//alert(tipemesin);
}
</script>
<script>
function myenginefullcode()
{
	var radios = document.getElementsByName('enginetype');
	var barcodeku = document.getElementsByName("barcodeno")[0].value;
	var tipemesin="";
	var mesin1="";
	var mesin2="";
	var kodemesin="";

	for (var i = 0, length = radios.length; i < length; i++) {
		if (radios[i].checked) {
        // do whatever you want with the checked radio
			tipemesin=(radios[i].value);
        // only one radio can be logically checked, don't check the rest
			break;
		}
	}
	
	if (barcodeku.length>0)
	{
		barcodeku=barcodeku.trim();
		mesin1 = barcodeku.substr(0,4);
		mesin2 = barcodeku.substr(5,1);
		kodemesin = barcodeku.substr(7,7);
		kodekode = barcodeku.substr(14,1);
		if (tipemesin=="P11C")
		{
			document.getElementsByName("barcodeno")[0].value=tipemesin + " V " + kodemesin + "P";
		}
		if (tipemesin=="W04D")
		{
			document.getElementsByName("barcodeno")[0].value=tipemesin + " T " + kodemesin + "W";
		}
	}
	//alert(tipemesin);
}
</script>

<script>
function DWT_AcquireImage() {
         DWObject.SelectSource();
         DWObject.OpenSource();
         DWObject.IfShowUI = false;
         DWObject.IfFeederEnabled = true;
         DWObject.IfAutoFeed = true;
         DWObject.XferCount = -1;
         DWObject.AcquireImage(); //using ADF  for scanning
        }
</script>

<script type="text/javascript">
	Dynamsoft.WebTwainEnv.RegisterEvent('OnWebTwainReady', Dynamsoft_OnReady);
    var DWObject;
    function Dynamsoft_OnReady(){
        DWObject = Dynamsoft.WebTwainEnv.GetWebTwain('dwtcontrolContainer');
		DWObject.Width = 90;
		DWObject.Height = 160;
            if (DWObject) {
                DWObject.RegisterEvent('OnPostAllTransfers', function () {          // Register OnPostAllTransfers event. This event fires when all pages have been scanned and transferred
					//DWObject.SaveAllAsPDF("E:\\Test.pdf");                // You can register other events here as well. Please check out 'Handling Events' in Developer's Guide
                });
            }
    }
    function AcquireImage(barcodeme, kodemesin1, tahunn, bulann, harii, folderku, userid) {
//alert(DWObject.SourceByIndex(0));

            var DWObject = Dynamsoft.WebTwainEnv.GetWebTwain('dwtcontrolContainer'); // Get the Dynamic Web TWAIN object that is embeded in the div with id 'dwtcontrolContainer'.

			DWObject.IfDisableSourceAfterAcquire = true;    // Source will be closed automatically after acquisition.
            //var bSelected = DWObject.SelectSource();                        // Select a Data Source (a device like scanner) from the Data Source Manager.
			DWObject.SelectSourceByIndex(0);
			//var bSelected = DWObject.SelectSource();
            //if(bSelected){
				var OnAcquireImageSuccess, OnAcquireImageFailure;
				OnAcquireImageSuccess = OnAcquireImageFailure = function (){
					DWObject.CloseSource();
				};
				//DWObject.OpenSource();
				DWObject.IfShowUI = false;
				DWObject.Resolution = 200;
				DWObject.IfDuplexEnabled = true;
				DWObject.IfAutoDiscardBlankpages = true;
				DWObject.PDFCompressionType = EnumDWT_PDFCompressionType.PDF_AUTO;
				DWObject.JPEGQuality = 50;
				//DWObject.MaxImagesInBuffer = 1024;
				DWObject.IfShowFileDialog = false;
//				DWObject.SaveAllAsPDF("C:\\dms.pdf");
				//DWObject.OpenSource();                          // Open the source. You can set resolution, pixel type, etc. after this method. Please refer to the sample 'Scan' -> 'Custom Scan' for more info.
				DWObject.AcquireImage(OnAcquireImageSuccess, OnAcquireImageFailure);                        // Acquire image(s) from the Data Source. Please NOTE this is a asynchronous method. In other words, it doesn't wait for the Data Source to come back. 
				//DWObject.AcquireImage(OnSuccess, OnFailure);
				//DWObject.AcquireImage(DeviceConfig, AsyncSuccessFunc, AsyncFailureFunc);
				//DWObject.SaveAllAsPDF("C:\\dms.pdf", optionalAsyncSuccessFunc, optionalAsyncFailureFunc);
				// In order to do things during the scanning, you can use the events OnPostTransfer and OnPostAllTransfers. Please check out the sample UseEvent.html
			//}
    DWObject.RegisterEvent("OnPostAllTransfers", function () {
	//	alert("Scanning has finished.");
	//	alert(barcodeme + kodemesin1 + tahunn + bulann + folderku);
		DWObject.SaveAllAsPDF("E:\\Test.pdf");
		cekfolder(barcodeme, kodemesin1, tahunn, bulann, harii, folderku, userid);
		location.reload();
  });

    }


	function optionalAsyncSuccessFunc(){
		console.log('successful');
	}
	function optionalAsyncFailureFunc(errorCode, errorString){
		alert(errorString);
	}
</script>
<script>
function managefile(a)
{
	var barcodeku = document.getElementsByName("docfile")[0].value;

	document.getElementsByName("searchbarcode")[0].value = barcodeku;
	document.forms["mysearch"].submit();
}
</script>

<script>
function logoutmenow()
{
	document.forms["logoutmeso"].submit();
/*
history.pushState(null, null, 'mainmenu.php');
window.addEventListener('popstate', function(event) {
  history.pushState(null, null, 'index.php');
});
window.location.assign("index.php");
window.close();
*/

}
</script>
<script>
function myshift()
{

document.forms["shiftku"].submit();

}
</script>
<script>
function myhome()
{
	document.forms["homemeso"].submit();
}
</script>

<script>
function readsummaryscan(userid,tglku)
{
	document.forms["scanlist"].submit();
}
</script>



<script>
function LoadMe()
{
	//document.getElementById('css-spinner').style.display='none';
	document.getElementById('image1').style.display = 'none';
	document.getElementById('image2').style.display = 'none';
	document.getElementById('image3').style.display = 'none';
	document.getElementsByName("barcodeno")[0].focus();
	noBack();
}
</script>
<script type="text/javascript" language="javascript">   
function disableBackButton()
{
window.history.forward()
}  
disableBackButton();  
window.onload=disableBackButton();  
window.onpageshow=function(evt) { if(evt.persisted) disableBackButton() }  
window.onunload=function() { void(0) }  
</script>

</head>

<body onload="LoadMe()";>
<?php
include "koneksi.php";
if(isset($_SESSION['statuslogin'])) {
	$statuslogin = $_SESSION['statuslogin'];
}
$now = time(); // Checking the time now when home page starts.

if (!isset($_POST["useridb"])) {
	$userid=0;
}
else
	$userid=$_POST["useridb"];
//----------------------------------------------------
if (!isset($_POST["usernameb"])) {
	$uname="";
}
else
	$uname=$_POST["usernameb"];
//----------------------------------------------------
if (!isset($_POST["passwd"])) {
	$pwd="";
}
else
	$pwd=$_POST["passwd"];
//----------------------------------------------------

//------------------------------------------------------------------------



$link = mysqli_connect($db_hostname, $db_username, $db_password);
if (!$link) {
    die('Not connected : ' . mysqli_error());
}
// Select the database.
$db_selected = mysqli_select_db($link, $db_database);
if (!$db_selected) {
    //die ('Can't use database : ' . mysqli_error());
?>
<script>
window.top.location.href = "index.php";
</script>
<?php
//print '<br><br><input name="Button" type="Button" onClick="javascript:history.back();return false" value="KEMBALI">&nbsp;&nbsp;&nbsp;' . "\n";
die();
}

$now = time(); // Checking the time now when home page starts.
$_SESSION['expire'] = $_SESSION['start'] + ($menit * 60);
if (isset($_SESSION['expire'])) {
	if ($now > $_SESSION['expire']) {
		$_SESSION['statuslogin'] = 7;//session expired
?>
<script>
window.top.location.href = "index.php"; 
</script>
<?php
die;
	}
}

#mysql_connect("localhost",$uname,$pwd);
# query the users table for name and surname
if ($userid==0 || $userid==null)
	$query = "SELECT * FROM user WHERE username='" . $uname . "' AND pwd=PASSWORD('" . $pwd . "');";
else
	$query = "SELECT * FROM user WHERE ID=" . $userid . ";";

$row_cnt = 0;
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$useridku = $row['ID'];
		$levelidku = $row['levelid'];
		$namaku = $row['nama'];
		$uname = $row['username'];
	}
}

$query = "SELECT * FROM level WHERE ID=" . $levelidku . ";";
$jmlrow = 0;
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
    $jmlrow = $result->num_rows;
}
if ($jmlrow>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$levelku = $row['level'];
	}
}

$now = time(); // Checking the time now when home page starts.
$_SESSION['expire'] = $_SESSION['start'] + ($menit * 60);
if (isset($_SESSION['expire'])) {
	if ($now > $_SESSION['expire']) {
		unset($_SESSION['username']);
		unset($_SESSION['passwd']);
		unset($_SESSION['perusahaanid']);
		unset($_SESSION['tahun']);
		$_SESSION['statuslogin'] = 7;//session expired
?>
<script>
window.top.location.href = "index.php";
</script>
<?php
die;
	}
}

if ($row_cnt > 0) {
	$_SESSION['statuslogin'] = 0;
?>
	<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
<?php
}
else  {
	$_SESSION['statuslogin'] = 8; //user not found in database or unauthorized
?>
<script>
//window.top.location.href = "index.php";
</script>
<?php
}

$hari = array("Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Mingu");

$tglsaiki = date("d-M-Y");
$tglnow = date("Y-m-d");

$day_number = date('N', strtotime($tglsaiki));
$hariku = $hari[$day_number-1];

$tglstr = $hariku . ", " . $tglsaiki;

//Cari jml scan oleh user pada suatu tgl pada baris terakhir
$sql0 = "SELECT * FROM userscan WHERE (userID=" . $useridku . " AND mydate='" . $tglnow . "') ORDER BY ID;";
$row_cnt = 0;
$jmlscanku=0;
$result = mysqli_query($link, $sql0);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$idku = $row['ID'];
		$jmlscanku = $row['jmlscan'];
	}
}


?>






<br>
<table align="center" style="text-align: center; margin-left: auto; margin-right: auto; margin-top: 0px;" width="90%" border="1" cellpadding="2" cellspacing="0">
	<tr height="90%">
		<td>
			<table align="center" style="text-align: center; margin-left: auto; margin-right: auto; margin-top: 0px;" width="100%" border="0" cellpadding="2" cellspacing="0">
				<tr height="10px">
					<td align="center" style="padding-left: 10px; padding-top: 10px; text-align: left; font-size: 12;">
					</td>
					<td align="center" style="padding-left: 10px; padding-top: 10px; text-align: left; font-size: 12;">
					</td>
					<td align="center" style="padding-left: 10px; padding-top: 10px; text-align: left; font-size: 12;">
					</td>
					<td align="center" style="padding-left: 10px; padding-top: 10px; text-align: left; font-size: 12;">
					</td>
					<td align="center" style="padding-left: 10px; padding-top: 10px; text-align: left; font-size: 12;">
					</td>
					<td align="center" style="padding-left: 10px; padding-top: 10px; text-align: left; font-size: 12;">
					</td>
				</tr>
				<tr style="vertical-align: middle; height: 30px">
					<td style="padding-left: 0px; text-align: left; height: 20px" width="43%">
						<img style="padding-left: 10px;" align="left" src="./images/hinoDFSlogo.jpg" height="75px" width="460px">
					</td>
					<td style="padding-left: 10px; text-align: left;" width="17%">
						<font face="Arial" color="black" size="5">
             <!--img style="padding-left: 10px;" align="left" src="./images/home2.jpg" height="35px" width="100px"-->
							<a class="buttonh icon chat" onclick="myhome(); return false;"><span>HOME</span></a>
							<form name="homemeso" id="homemeso" method="POST" action="mainmenu.php">
								<input type="hidden" name="useridh" id="useridh" value="<?php echo $useridku;?>">
								<input type="hidden" name="statuslogin" id="statuslogin" value="1">
							</form>
						</font>
					</td>
					<td style="text-align: left;" valign="middle" width="10%">
<?php
		if (strpos($levelku,"admin") !== false)
		{
?>
						<font face="arial" size="2" color="black">
						<div class="dropdown">
							<img OnClick="settingme();" style="padding-left: 0px;" align="left" src="./images/setting.png" height="26px" width="26px">&nbsp;

						</div>
						<div class="dropdown">
							<button onclick="myFunction()" class="dropbtn">Setting</button>
							<div id="myDropdown" class="dropdown-content">
								<a OnClick="mynomormesin();">Penomoran Mesin</a>
								<form id="nomormesinku" name="nomormesinku" method="post" action="mainnomesin.php">
									<input type="hidden" name="useridnomesin" id="useridnomesin" value="<?php echo $useridku;?>">
								</form>
								<a OnClick="myshift();">Shift</a>
								<form id="shiftku" name="shiftku" method="post" action="mainshift.php">
									<input type="hidden" name="useridshift" id="useridshift" value="<?php echo $useridku;?>">
								</form>
							</div>
						</div>			
						</font>
<?php
		}
?>
					</td>
					<td style="padding-left: 0px; text-align: center; vertical-align: middle" width="2%">
						<font face="Arial" color="black" size="2">
							<img style="padding-left: 0px;" align="left" src="./images/username4.png" height="26px" width="26px">

						</font>
					</td>
					<td style="padding-left: 10px; text-align: left; vertical-align: middle" width="12%">
						<font face="Arial" color="black" size="3">
							: &nbsp; <b><?php echo $uname;?></b>
						</font>
					</td>
					<td style="padding-left: 10px; text-align: left; vertical-align: middle" width="7%">
						<div class="dropdown">
							<img OnClick="logoutmenow();" style="padding-left: 0px;" align="left" src="./images/logout00.png" height="26px" width="26px">
						</div>
						<div class="dropdown">
							<font face="Arial" color="black" size="2">
								&nbsp;<a href="logoutme.php?useridc=<?php echo $useridku;?>&statuslogin=0" style="padding-left: 0px;" align="left">
								Logout
							</a>
							</font>
						</div>
							<form name="logoutmeso" id="logoutmeso" method="POST" action="logoutme.php">
								<input type="hidden" name="useridc" id="useridc" value="<?php echo $useridku;?>">
								<input type="hidden" name="statusloginc" id="statusloginc" value="0">
							</form>
					</td>					

				</tr>
				<tr height="30px">
					<td colspan="6" align="center" style="padding-left: 10px; padding-top: 5px; text-align: left; font-size: 12;">
					</td>
				</tr>
			</table>
			<table align="center" style="text-align: center; margin-left: auto; margin-right: auto; margin-top: 10px;" width="100%" border="0" cellpadding="2" cellspacing="0">
				<tr style="height:20px;">
					<td style="padding-left: 40px; text-align: center; height: 20px">
					</td>
				</tr>
				<tr style="height:50px;" bgcolor="#66FF93">
					<td style="padding-left: 40px; text-align: center; height: 50px">
						<font face="Arial" color="black" size="6"><b>
							REAL-TIME SCANNING
						</b></font>
					</td>
				</tr>
				<tr height="40px">
					<td align="center" style="padding-left: 30px; padding-top: 10px; text-align: center; font-size: 12;">
					</td>
				</tr>
			</table>


			<table align="center" style="text-align: left; margin-left: auto; margin-right: auto; margin-top: auto;" width="90%" border="0" cellspacing="0" cellpadding="0">
				<thead>
					<tr height="20px">
						<td style="padding-left: 0px; padding-top: auto; text-align: center;" width="25%">
							<font face="arial" color="black" size="3"><b></b></font>
						</td>
						<td style="padding-left: 0px; padding-top: auto; text-align: center;" width="40%">
							<!--font face="arial" color="black" size="4"><b>SCAN FINISH</b></font-->
							<img style="padding-left: auto;" align="middle" src="./images/scanfinish.jpg" height="32px" width="140px">
						</td>
						<td style="padding-left: 0px; padding-top: auto; text-align: center;" width="25%">
							<img style="padding-left: auto;" align="middle" src="./images/datetime.jpg" height="32px" width="210px">
							<!--font face="arial" color="black" size="4"><b>DATE/TIME</b></font-->
						</td>
					</tr>

				</thead>
				<tbody>

					<tr height="40px">
						<td style="padding-left: auto; padding-right: auto; padding-top: auto; text-align: center;">
							<FONT face="arial" color="black" size="3">
							<input style="text-align:center;" id="docfile" name="docfile" class="textbox" type="text">
							</FONT>
						</td>
						<td style="padding-left: 0px; text-align: center;">
							<FONT face="arial" color="black" size="2">
							<b><input style="text-align:center;" id="jmlscan" name="jmlscan" class="textboxnarrow" type="text" maxlength="8" OnClick="readsummaryscan();" value="<?php echo $jmlscanku;?>" readonly></b>
							</FONT>
							<form name="scanlist" id="scanlist" action="summaryscan.php" method="post" target="_blank" >
								<input type="hidden" id="useridscan" name="useridscan" value="<?php echo $useridku;?>">
								<input type="hidden" id="usernamescan" name="usernamescan" value="<?php echo $uname;?>">
								<input type="hidden" id="tglscan" name="tglscan" value="<?php echo $tglnow;?>">
							</form>							
						</td>
						<td style="padding-left: auto; text-align: center;">
							<FONT face="arial" color="black" size="2">
								<input style="text-align:center;" id="tgl" name="tgl" class="textboxtgl" value="<?php echo strtoupper($tglstr);?>" readonly>
							</FONT>
						</td>
					</tr>
					<tr height="20px">
    					<td colspan="3" style="padding-left: 10px; padding-top: auto; text-align: left; font-size: 11;">
    					</td>
    				</tr>
					<tr height="60px">
						<td style="padding-left: auto; text-align: center;">
							<form id="mysearch" name="mysearch" action="searchfile.php" method="post" target="_blank">
							<a class="buttona icon chat" OnClick="managefile(<?php echo $useridku;?>);"><span>SEARCH DOCUMENT</span></a>
								<input type="hidden" id="searchbarcode" name="searchbarcode">
								<input type="hidden" id="userido" name="userido" value="<?php echo $useridku;?>">
								<input type="hidden" id="namafile" name="namafile">
								<input type="hidden" id="usernameo" name="usernameo" value="<?php echo $uname;?>">
							</form>
						</td>
						<td style="padding-left: 5px; padding-top: auto; text-align: center; font-size: 11;">
							<FONT face="arial" color="black" size="5">
							<!--b>ENGINE NO</b-->
							<img style="padding-left: auto;" align="middle" src="./images/engineno.jpg" height="40px" width="590px">
							</FONT>
						</td>
						<td>
						</td>
					</tr>
				</tbody>
			</table>
			<table align="center" style="text-align: left; margin-left: auto; margin-right: auto; margin-top: auto;" width="90%" border="0" cellspacing="0" cellpadding="0">
					<tr height="40px">
						<td style="padding-left: 10px; padding-top: auto; text-align: center; font-size: 11;" width="30%">
						</td>
						<td style="padding-left: 10px; padding-top: auto; text-align: center; font-size: 11;" width="15%">
							<FONT face="arial" color="black" size="4">
							<!--input type="radio" name="enginetype" value="w04D" onclick="myengineshort()"> W04D &nbsp;
  <!--input type="radio" name="enginetype" value="J08E" onclick="myengine()"> J08E &nbsp;-->
							<FORM name="abc" id="abc">
							<input type="checkbox" name="enginetype" value="P11C" onclick="myengineshort()"> P11C
							</FORM>
							</FONT>
						</td>
						<td style="padding-left: 10px; padding-top: auto; text-align: center; font-size: 11;" width="15%">
							<FONT face="arial" color="black" size="4">
							<!--input type="radio" name="enginetype" value="w04D" onclick="myengineshort()"> W04D &nbsp;
  <!--input type="radio" name="enginetype" value="J08E" onclick="myengine()"> J08E &nbsp;-->
							<FORM name="repairfrm" id="repairfrm">
							<input type="checkbox" name="repair" value="R" onclick="myrepair()"> Repair
							</FORM>
							</FONT>
						</td>
						<td style="padding-left: 10px; padding-top: auto; text-align: center; font-size: 11;" width="30%">
						</td>
					</tr>
			</table>
			<table align="center" style="text-align: left; margin-left: auto; margin-right: auto; margin-top: auto;" width="90%" border="0" cellspacing="0" cellpadding="0">
				<thead>
				</thead>
				<tbody>
					<tr height="40px">
						<td style="padding-left: 0px; text-align: center;" width="20%">
						</td>
						<td style="padding-left: 0px; text-align: center;" width="50%">
							<FONT face="arial" color="black" size="2">
							<form name="barcodefrm" onsubmit="return false;">
								<input style="text-align:center;" id="barcodeno" name="barcodeno" class="textboxbarcode" type="text" onchange="getbarcode(0);return false;">
								<input style="text-align:center;" id="barcodehide" name="barcodehide" type="hidden">
								<input style="text-align:center;" id="barcodehide2" name="barcodehide2" type="hidden">
								<input style="text-align:center;" id="userid" name="userid" type="hidden" value="<?php echo $useridku;?>">
							</form>
							</FONT>
						</td>
						<td style="padding-left: 20px; padding-top: auto; text-align: left;" width="20%">
							<a class="buttoncancel icon chat" onclick="location.reload(); return false;"><span>Cancel / Clear</span></a>
						</td>
					</tr>
					<tr height="30px">
						<td colspan="3" style="padding-left: 10px; padding-top: auto; text-align: left; font-size: 11;">
						</td>
					</tr>
					<tr height="40px">
    					<td colspan="3" style="padding-left: 10px; padding-top: auto; text-align: center; font-size: 11;">
							<FONT face="arial" color="black" size="4">
							<a class="button icon chat" onclick="getbarcode(1); return false;"><span>START SCANNING</span></a>
					
							</FONT>
    					</td>
    				</tr>
				</tbody>
			</table>

			<table align="center" style="text-align: center; margin-left: auto; margin-right: auto; margin-top: 10px;" width="45%" border="0" cellpadding="2" cellspacing="0">
				<tr style="height:40px;">
					<td colspan="3" style="padding-left: 40px; text-align: center; height: 20px">
					</td>
				</tr>
				<tr height="30px">
					<td style="padding-left: 0px; padding-top: auto; text-align: center;" width="15%">
						<div id="image1" name="image1">
						<img style="padding-left: 0px;" align="center" src="./images/scanstep1.jpg" height="100px" width="120px">
						</div>
					</td>
					<td style="padding-left: 0px; padding-top: auto; text-align: center;" width="15%">
						<div id="image2" name="image2">
						<img style="padding-left: 0px;" align="center" src="./images/scanstep2.jpg" height="100px" width="120px">
						</div>
					</td>
					<td style="padding-left: 0px; padding-top: auto; text-align: center;" width="15%">
          <!--img style="padding-left: 0px;" align="center" src="./images/scanstep3.jpg" height="100px" width="100px"-->
						<div id="image3" name="image3">
						<div id="dwtcontrolContainer"> </div>
						</div>
					</td>
				</tr>
				<tr height="40px">
					<td colspan="3" align="center" style="padding-left: 30px; padding-top: 10px; text-align: center; font-size: 12;">
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>


<DIV align="left">
</DIV>
<div  id="css-spinner" class="cssload-clock"></div>


<?php

	//createoutput($perushid, $tahun, $noretur, $batch, $mysort, $link);
	
function folder_exist($folder)
{
    // Get canonicalized absolute pathname
    $path = realpath($folder);

    // If it exist, check if it's a directory
    return ($path !== false AND is_dir($path)) ? $path : false;
}

?>


<script src="bootstrap.min.js"></script>


  <script src="jquery.min.js" type="text/javascript"></script>
  <script src="chosen.jquery.js" type="text/javascript"></script>
  <script src="./Chosen/docsupport/prism.js" type="text/javascript" charset="utf-8"></script>

  <script type="text/javascript">
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
  </script>


<script type='text/javascript' src='./simplemodal/basic/js/jquery.js'></script>
<script type='text/javascript' src='./simplemodal/basic/js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='./simplemodal/basic/js/basic.js'></script>


<script type="text/javascript" src="./datepicker2/examples/public/javascript/jquery-1.11.1.js"></script>
<script type="text/javascript" src="./datepicker2/public/javascript/zebra_datepicker.js"></script>
<script type="text/javascript" src="./datepicker2/examples/public/javascript/core.js"></script>

<br><br>

<script>
        //$("form").submit(function (e) {
        //    e.preventDefault();
            //alert("call some function here");
        //});
</script>


<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>


</body>

</html>


</body>
<?php

//*******************************************************************************************************

	$_SESSION['username'] = $uname;
	$_SESSION['passwd'] = $pwd;
	$_SESSION['start'] = time(); // Taking now logged in time.
	//$_SESSION['statuslogin'] = 8;
	$_SESSION["delnpwp"] = 1;


//*******************************************************************************************************

?>
</html>
