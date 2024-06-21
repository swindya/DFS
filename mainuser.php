<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Dividen</title>
<?php
session_start();
?>
<script src="jquery-1.11.2.min.js"></script>
<script src="icheck.js"></script>
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="chosen.css">
<!--script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script-->
<link type='text/css' href='./simplemodal/basic/css/basicb.css' rel='stylesheet' media='screen' />
<link type='text/css' href='./simplemodal/basic/css/basic2.css' rel='stylesheet' media='screen' />

<script src="script.js"></script>
<link rel="stylesheet" href="public/css/reset.css" type="text/css">
<link rel="stylesheet" href="./datepicker/public/css/default.css" type="text/css">
<link rel="stylesheet" href="public/css/style.css" type="text/css">

<script type="text/javascript" src="libraries/syntaxhighlighter/public/javascript/XRegExp.js"></script>
<script type="text/javascript" src="libraries/syntaxhighlighter/public/javascript/shCore.js"></script>
<script type="text/javascript" src="libraries/syntaxhighlighter/public/javascript/shLegacy.js"></script>
<script type="text/javascript" src="libraries/syntaxhighlighter/public/javascript/shBrushJScript.js"></script>
<script type="text/javascript" src="libraries/syntaxhighlighter/public/javascript/shBrushXML.js"></script>


<style type="text/css" media="all">
    /* fix rtl for demo */
    .chosen-rtl .chosen-drop { left: -9000px; }
</style>
<style>
	@import url(http://fonts.googleapis.com/css?family=Kaushan+Script);
	body{
		background-color: transparent;
	}
	#popup0 {
		visibility: hidden;
		opacity: 0;
		position: fixed;
		margin-top: -200px;
		background: black;
		color:black;
	}
	#popup0:target {
		visibility:visible;
		opacity: 1;
		background-color: rgba(0,0,0,0.2);
		position: fixed;
		padding-top: 10%;
		top:0;
		left:0;
		right:0;
		bottom:0;
		margin:0;
		z-index: 99;
		-webkit-transition:all 1s;
		-moz-transition:all 1s;
		transition:all 1s;
	}
	#tombol{
		top:50%;
		left:50%;
	}
	.popwrapper{
		background: #111144;
		position: relative;
		margin:auto;
		width: 500px;
		height: auto;
		padding: 10px;
		border-radius: 3px;
	}
	#header{
		height: 100px;
		padding-top:10px;
	}
	.navigasi{
		font-size: 24px;
		font-weight: 400;
	}
	#navigasi a:hover{
		color: white;
		border-bottom: 2px solid black;
	}
	.content{
		padding-top:40px;
		color: white;
	}
	.navbar-brand{
		font-size: 36px;
	}
</style>
<style>
	@import url(http://fonts.googleapis.com/css?family=Kaushan+Script);
	body{
		background-color: transparent;
	}
	#popup {
		visibility: hidden;
		opacity: 0;
		position: fixed;
		margin-top: -200px;
		background: black;
		color:black;
	}
	#popup:target {
		visibility:visible;
		opacity: 1;
		background-color: rgba(0,0,0,0.2);
		position: fixed;
		padding-top: 13%;
		top:0;
		left:0;
		right:0;
		bottom:0;
		margin:0;
		z-index: 99;
		-webkit-transition:all 1s;
		-moz-transition:all 1s;
		transition:all 1s;
	}
	#tombol{
		top:50%;
		left:50%;
	}
	.popwrapper{
		background: #111144;
		position: relative;
		margin:auto;
		font-size: 14px;
		width: 460px;
		height: auto;
		padding: 10px;
		border-radius: 3px;
	}
	#header{
		height: 100px;
		padding-top:10px;
	}
	.navigasi{
		font-size: 24px;
		font-weight: 400;
	}
	#navigasi a:hover{
		color: white;
		border-bottom: 2px solid black;
	}
	.content{
		padding-top:40px;
		color: white;
	}
	.navbar-brand{
		font-size: 36px;
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
background-color: #91bd09;
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
background-color: #2981e4;
}
.blue.button:hover {
background-color: #2575cf;
}
.yellow.button, .yellow.button:visited {
background-color: #ffb515;
}
.yellow.button:hover {
background-color: #fc9200;
} 
</style>
<style> 
  .textbox { 
    border: 1px transparent; 
	background-color: transparent;
    height: 16px; 
    width: 220px; 
    font-size: 13px; 
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
} 
 </style> 
<style> 
  .textboxmid { 
    border: 1px transparent; 
	background-color: transparent;
    height: 16px; 
    width: 120px; 
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
    border: 1px solid #7bc1f7; 
    box-shadow: 0px 0px 4px #7bc1f7; 
    -moz-box-shadow: 0px 0px 4px #7bc1f7; 
    -webkit-box-shadow: 0px 0px 4px #7bc1f7; 
} 
 </style>
<style> 
  .textboxlong { 
    border: 1px transparent; 
	background-color: transparent;
    height: 16px; 
    width: 180px; 
    font-size: 13px; 
    padding: 4px 4px 4px 4px; 
    border-radius: 4px; 
    -moz-border-radius: 2px; 
    -webkit-border-radius: 2px; 
    box-shadow: 0px 0px 2px #d9d9d9; 
    -moz-box-shadow: 0px 0px 2px #d9d9d9; 
    -webkit-box-shadow: 0px 0px 2px #d9d9d9; 
} 
 
.textboxlong:focus { 
    outline: none; 
    border: 1px solid #7bc1f7; 
    box-shadow: 0px 0px 2px #7bc1f7; 
    -moz-box-shadow: 0px 0px 2px #7bc1f7; 
    -webkit-box-shadow: 0px 0px 2px #7bc1f7; 
} 
 </style> 
 <style> 
  .textboxnarrow { 
    border: 1px transparent; 
	background-color: transparent;
    height: 16px; 
    width: 80px; 
    font-size: 13px; 
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
} 
 </style> 
 <style> 
  .textboxtgl { 
    border: 1px transparent; 
	background-color: transparent;
    height: 16px; 
    width: 20px; 
    font-size: 13px; 
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
  .textboxtahun { 
    border: 1px transparent; 
	background-color: transparent;
    height: 16px; 
    width: 30px; 
    font-size: 13px; 
    padding: 4px 4px 4px 4px; 
    border-radius: 2px; 
    -moz-border-radius: 2px; 
    -webkit-border-radius: 2px; 
    box-shadow: 0px 0px 2px #d9d9d9; 
    -moz-box-shadow: 0px 0px 2px #d9d9d9; 
    -webkit-box-shadow: 0px 0px 2px #d9d9d9; 
} 
 
.textboxtahun:focus { 
    outline: none; 
    border: 1px solid #7bc1f7; 
    box-shadow: 0px 0px 2px #7bc1f7; 
    -moz-box-shadow: 0px 0px 2px #7bc1f7; 
    -webkit-box-shadow: 0px 0px 2px #7bc1f7; 
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
 
<script>
function hapususer(forme, i, aa) 
{
	var r = confirm("Konfirmasi Penghapusan :!\nApakah anda yakin akan hapus data ?");
	if (r==true)
	{	
		var useridku = 'userid' + i;
		var useridmu = document.getElementsByName(useridku)[0].value;
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
				//alert(xmlhttp.responseText);
				window.location.reload();
				window.location.refresh();
			}
		}
		var url = "deluser.php?usrid=" + aa + "&userid=" + useridmu;
		xmlhttp.open("GET",url,true);
		xmlhttp.send();
	}
		//document.forms.submit();
}
</script>
<script>
 	function updateform(form, i, aa) {
		//var usermu = document.getElementsByName("username")[0].value;
		var idku = "ktpid" + i;
		var namaku = "nama" + i;
		var nomorktpku = "nomorktp" + i;
		var alamatku = "alamat" + i;
		var jabatanku = "jabatan" + i;
		var tgllahirku = "tgllahir" + i;
		var tglexpireku = "tglexpire" + i;
		var idmu = document.getElementsByName(idku)[0].value;
		var namamu = document.getElementsByName(namaku)[0].value;
		var nomorktpmu = document.getElementsByName(nomorktpku)[0].value;
		var alamatmu = document.getElementsByName(alamatku)[0].value;
		var jabatanmu = document.getElementsByName(jabatanku)[0].value;
		var tgllahirmu = document.getElementsByName(tgllahirku)[0].value;
		var tglexpiremu = document.getElementsByName(tglexpireku)[0].value;

		//var selectnpwpme = document.getElementsByName(selectnku)[0].value;
		if (namamu == null || namamu == "" || nomorktpmu == null || nomorktpmu == ""  || alamatmu == null 
			|| alamatmu == ""  || jabatanmu == null || jabatanmu == ""  || tgllahirmu == null || tgllahirmu == ""
			|| tglexpiremu == null || tglexpiremu == "") {
			alert("Data ada yg kosong/invalid");
		}
		else {
			//window.open("registeruser.php",'_blank');
			if (window.XMLHttpRequest) {
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp=new XMLHttpRequest();
			} 
			else { // code for IE6, IE5
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function() {
				if (xmlhttp.readyState==4 && xmlhttp.status==200) {
					//alert(xmlhttp.responseText);
					//document.getElementById("statustxt").innerHTML=xmlhttp.responseText;
					//alert(xmlhttp.responseText);
					window.location.reload();
					window.location.refresh();
				}
			}
			var url = "updateperusahaanktp.php?id=" + aa + "&nama=" + namamu + "&nomorktp=" + nomorktpmu + "&jabatan=" + 
						jabatanmu + "&alamat=" + alamatmu + "&tgllahir=" + tgllahirmu + "&tglexpire=" + tglexpiremu;
			xmlhttp.open("GET", url,true);
			xmlhttp.send();
		//alert("Data sudah di-update");
		
		//pauseme(1000);
			}



	}
</script>

<script>
function hapususer(forme, i, aa) 
{
	var r = confirm("Konfirmasi Penghapusan : \nApakah anda yakin akan hapus data ?");
	if (r==true)
	{	
		var useridku = 'userid' + i;
		var useridmu = document.getElementsByName(useridku)[0].value;
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
				//alert(xmlhttp.responseText);
				window.location.reload();
				window.location.refresh();
			}
		}
		var url = "deluser.php?usrid=" + aa + "&userid=" + useridmu;
		xmlhttp.open("GET",url,true);
		xmlhttp.send();
	}
		//document.forms.submit();
}
</script>
<script>
function adduserku() {
	var namamu = document.getElementsByName("nama")[0].value;
	var usern = document.getElementsByName("username")[0].value;
	var passw1 = document.getElementsByName("passwd")[0].value;
	var passw2 = document.getElementsByName("passwd1")[0].value;
	var levelid = document.getElementsByName("levelid")[0].value;
	
	if (namamu==null || namamu=="" || usern==null || usern=="" || passw1==null || passw1=="" || passw2==null ||
		passw2=="" || levelid==null || levelid=="")
	{
		alert("Harap isi/lengkapi data.");
		return false;
	}
	else
	{
		if (passw1 != passw2)
		{
			alert ("Periksa kembali data password.");
			return false
		}
		else
		{
			document.forms["adduser"].submit();
			return true;
		}
	}
}

</script>
<script>
function disenable(myform, i, aa) {
for (ii = 1; ii <= i; ii++) { 
	var mydi = 'nama'+ii;
	document.getElementById('nama'+ii).style.backgroundColor='transparent';
	document.getElementById('nama'+ii).readOnly = true;
	document.getElementById('jabatan'+ii).style.backgroundColor='transparent';
	document.getElementById('jabatan'+ii).readOnly = true;
	document.getElementById('nomorktp'+ii).style.backgroundColor='transparent';
	document.getElementById('nomorktp'+ii).readOnly = true;
	document.getElementById('tgllahir'+ii).style.backgroundColor='transparent';
	document.getElementById('tgllahir'+ii).readOnly = true;
	document.getElementById('tglexpire'+ii).style.backgroundColor='transparent';
	document.getElementById('tglexpire'+ii).readOnly = true;
}
document.getElementById(aa).style.backgroundColor='white';
document.getElementById(aa).readOnly = false;
}
</script>
<script>
function myhome()
{
	document.forms["homemeso"].submit();
}
</script>
<script>
function lockme(myform, i, aa) {

if (document.getElementById(aa).style.backgroundColor=='white') {
	document.getElementById(aa).readOnly = false;
}
else {
	for (ii = 1; ii <= i; ii++) { 
		document.getElementById('nama'+ii).style.backgroundColor='transparent';
		document.getElementById('nama'+ii).readOnly = true;
		document.getElementById('jabatan'+ii).style.backgroundColor='transparent';
		document.getElementById('jabatan'+ii).readOnly = true;
		document.getElementById('nomorktp'+ii).style.backgroundColor='transparent';
		document.getElementById('nomorktp'+ii).readOnly = true;
		document.getElementById('tgllahir'+ii).style.backgroundColor='transparent';
		document.getElementById('tgllahir'+ii).readOnly = true;
		document.getElementById('tglexpire'+ii).style.backgroundColor='transparent';
		document.getElementById('tglexpire'+ii).readOnly = true;
	}	
}
</script>
<script>
function editfill(id, nama, user, level)
{
//alert(document.getElementById("levelidedit").value);
	document.getElementsByName("namaedit")[0].value = nama;
	document.getElementsByName("usernameedit")[0].value = user;
	document.getElementsByName("passwdedit")[0].value = "";
	document.getElementsByName("useridedit")[0].value = id;
	//document.getElementById("levelidedit").options[1].selected = true;
	//document.getElementById("tahuna").options[thmu].selected = true;
	document.getElementById("levelidedit").value = level;
	//document.edituser.levelidedit.selectedIndex = 2;
	//alert(level);
}
</script>
<script>
function edituserku()
{

	var namaku = document.getElementsByName("namaedit")[0].value;
	var usernameku = document.getElementsByName("usernameedit")[0].value;
	var passwordku = document.getElementsByName("passwdedit")[0].value;
	var password1ku = document.getElementsByName("passwd1edit")[0].value;
	//var levelku = document.getElementsById("leveledit").options[].value;
	var e = document.getElementById("levelidedit");
	var levelku = e.options[e.selectedIndex].value;
	
	if (namaku==null || usernameku==null || passwordku==null || password1ku==null || levelku==null ||
		namaku=="" || usernameku=="" || passwordku=="" || password1ku=="" || levelku=="")
	{
		alert("Masih ada data yg kosong. Harap lengkapi/isi semua data.");
		return false;
	}

	if (passwordku !== password1ku)
	{
		alert("Password tidak konsisten/sama. Harap dikoreksi.");
		return false;
	}
	document.forms["edituser"].submit();

}
</script>
<script>
function tambahuser(a)
{

	//document.forms["edituser"].submit();

}
</script>
<script>
function myshift()
{

document.forms["shiftku"].submit();

}
</script>
<script>
function mynomormesin()
{

document.forms["nomormesinku"].submit();

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
<body onload="noBack();">
<?php
include "koneksi.php";

if(isset($_SESSION['statuslogin'])) {
	$statuslogin = $_SESSION['statuslogin'];
}
$now = time(); // Checking the time now when home page starts.

if (!isset($_POST["username"])) {
	$uname=$_SESSION["username"];
}
else
	$uname=$_POST["username"];
//----------------------------------------------------
if (!isset($_SESSION["passwd"])) {
	$pwd=0;
}
else
	$pwd=$_SESSION["passwd"];
//----------------------------------------------------
if (!isset($_GET["id"])) {
	$perusid=0;
}
else
	$perusid=$_GET["id"];
$perushid = $perusid;
//---------------------------------------------------------
if (!isset($_SESSION["userid"])) {
	$userid=0;
}
else
	$userid=$_SESSION["userid"];
//---------------------------------------------------------

if ($userid==0)
{
?>
<script>
//window.top.location.href = "index.php"; 
</script>
<?php
}

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

$levelidku=0;
#mysql_connect("localhost",$uname,$pwd);
if ($userid == 0)
{
# query the users table for name and surname 
	$query = "SELECT * FROM user WHERE username='" . $uname . "' AND pwd=PASSWORD('" . $pwd . "');";
	$row_cnt = 0;
	$result = mysqli_query($link, $query);
	if ($result) {
 /* determine number of rows result set */
		$row_cnt = $result->num_rows;
	}
	if ($row_cnt>0) {
		while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
			$useridku = $row['ID'];
			$levelidku = $row['levelid'];
			$namaku = $row['nama'];
		}
	}
}
else
{
# query the users table for name and surname 
	$query = "SELECT * FROM user WHERE ID=" . $userid . ";";
	$row_cnt = 0;
	$result = mysqli_query($link, $query);
	if ($result) {
 /* determine number of rows result set */
		$row_cnt = $result->num_rows;
	}
	if ($row_cnt>0) {
		while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
			$useridku = $row['ID'];
			$levelidku = $row['levelid'];
			$namaku = $row['nama'];
			$uname = $row['username'];
			$pwd = $row['passwd'];
		}
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

?>

<br>

<?php


$bulan = array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
# query the users table for name and surname 
if ($levelidku==2)
	$query = "SELECT * FROM user ORDER BY username;";
else 
	$query = "SELECT * FROM user WHERE ID=" . $userid . ";";

$row_cnt = 0;
$i = 0;
$namaperus = "none";
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$idmu[$i] = $row['ID'];
		$namamu[$i] = $row['nama'];
		$usernamemu[$i] = $row['username'];
		$passwordmu[$i] = $row['pwd'];
		$levelmu[$i] = $row['levelid'];
	}
}
$jmli = $i;

# query the users table for name and surname 
$query = "SELECT * FROM level ORDER BY ID;";
$row_cnt = 0;
$i = 0;
$namaperus = "none";
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$levelidi[$i] = $row['ID'];
		$leveli[$i] = $row['level'];
	}
}
$jmllevel = $i;

for ($i=1;$i<=$jmli;$i++)
{
# query the users access level 
	$query = "SELECT * FROM level WHERE ID=" . $levelmu[$i] . ";";
	$row_cnt = 0;
	$levelstrmu[$i] = 0;
	$result = mysqli_query($link, $query);
	if ($result) {
 /* determine number of rows result set */
		$row_cnt = $result->num_rows;
	}
	if ($row_cnt>0) {
		while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
			$levelstrmu[$i] = $row['level'];
		}
	}
}

?>


<div style="text-align: center;">
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
				<tr style="height:30px;" valign="middle">
					<td style="padding-left: 0px; text-align: center; height: 20px" width="43%">
						<img style="padding-left: 10px;" align="left" src="./images/hinoDFSlogo.jpg" height="75px" width="460px">
					</td>

					<td style="padding-left: 10px; text-align: left; vertical-align: middle" width="17%">
						<font face="Arial" color="black" size="5">
             <!--img style="padding-left: 10px;" align="left" src="./images/home2.jpg" height="35px" width="100px"-->
							<a class="buttonh icon chat" onclick="myhome(); return false;"><span>HOME</span></a>
						</font>

					</td>
							<form name="homemeso" id="homemeso" method="POST" action="mainmenu.php">
								<input type="hidden" name="userid" id="userid" value="<?php echo $useridku;?>">
								<input type="hidden" name="statuslogin" id="statuslogin" value="1">
							</form>
					<td style="text-align: left;" width="10%">
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
					<td align="center" style="padding-left: 10px; padding-top: 5px; text-align: left; font-size: 12;">

					</td>
				</tr>
			</table>




<div style="text-align: center;">
<table align="center" style="text-align: center; margin-left: auto; margin-right: auto; margin-top: auto;" width="860px" border="0" cellspacing="0" cellpadding="0">
	<tr height="50px">
		<td style="padding-left: 10px; text-align: left; font-size: 12; width: 860px">
		</td>
	</tr>
	<tr height="40px">
		<td style="padding-left: auto; text-align: center; font-size: 12;">
			<font face="arial" size="5" color="black"><b>USER ACCOUNT</b></font>
		</td>
	</tr>
	<tr height="30px">
		<td style="padding-left: 20px; text-align: left; font-size: 12;">
		</td>
	</tr>
</table>
</div>

    <div id="popup0">
        <div class="container popwrapper">
			<div style="text-align:right;">
				<FONT face="arial" color="#000000" size="2">
				<a href="#close" title="close modal dialog"><img src="./images/exit.png" /></a>
				</FONT>
            </div>
            <div style="padding:30px;">
                <center>
			<form method="post" class="signin" name="adduser" id="adduser" action="adduser.php">
				<table style="margin-left: auto; margin-right: auto;" border="0" cellspacing="0" cellpadding="0" width="400px">
					<tr height="40px">
						<td colspan="3" style="padding-left: auto; text-align: center;">
							<FONT face="arial" color="#FFFFAC" size="5"><b>Data User Baru</b></FONT>
						</td>
					</tr>
					<tr height="30px">
						<td colspan="3" style="padding-left: auto; text-align: center;">
						</td>
					</tr>
					<tr height="34px">
						<td style="padding-left: 30px; text-align: left;" width="150px">
							<FONT face="arial" color="#CCCCEE" size="3">Nama</FONT>
						</td>
						<td style="padding-left: auto; text-align: center;" width="20px">
							<FONT face="arial" color="blue" size="3">:</FONT>
						</td>
						<td style="padding-left: auto; text-align: left;" width="230px">
							<input STYLE="color: #FFFFFF; font-family: Arial; font-weight: normal; font-size: 16px; background-color: #444444;" class="textboxlong" id="nama" name="nama" value="" type="text" size="30">
						</td>
					</tr>
					<tr height="34px">
						<td style="padding-left: 30px; text-align: left;">
							<FONT face="arial" color="#CCCCEE" size="3">Username</FONT>
						</td>
						<td style="padding-left: auto; text-align: center;">
							<FONT face="arial" color="blue" size="3">:</FONT>
						</td>
						<td style="padding-left: auto; text-align: left;">
							<input STYLE="color: #FFFFFF; font-family: Arial; font-weight: normal; font-size: 16px; background-color: #444444;" class="textboxmid" id="username" name="username" type="text" size="30">
						</td>
					</tr>
					<tr height="34px">
						<td style="padding-left: 30px; text-align: left;">
							<FONT face="arial" color="#CCCCEE" size="3">Password</FONT>
						</td>
						<td style="padding-left: auto; text-align: center;">
							<FONT face="arial" color="blue" size="3">:</FONT>
						</td>
						<td style="padding-left: auto; text-align: left;">
							<input STYLE="color: #FFFFFF; font-family: Arial; font-weight: normal; font-size: 16px; background-color: #444444;" class="textboxmid" id="passwd" name="passwd" type="password" size="30">
						</td>
					</tr>
					<tr height="34px">
						<td style="padding-left: 30px; text-align: left;">
							<FONT face="arial" color="#CCCCEE" size="3">Retype Password</FONT>
						</td>
						<td style="padding-left: auto; text-align: center;">
							<FONT face="arial" color="blue" size="3">:</FONT>
						</td>
						<td style="padding-left: auto; text-align: left;">
							<input STYLE="color: #FFFFFF; font-family: Arial; font-weight: normal; font-size: 16px; background-color: #444444;" class="textboxmid" id="passwd1" name="passwd1" type="password" size="30">
						</td>
					</tr>
					<tr height="34px">
						<td style="padding-left: 30px; text-align: left;">
							<FONT face="arial" color="#CCCCEE" size="3">Level</FONT>
						</td>
						<td style="padding-left: auto; text-align: center;">
							<FONT face="arial" color="blue" size="3">:</FONT>
						</td>
						<td style="padding-left: auto; text-align: left;">
							<div class="side-by-side clearfix">
								<FONT face="arial" color="#000000" size="3">
								<select id="levelid" name="levelid" data-placeholder="Level Access" style="width:100px;">
									<option value=""></option>
<?php
									for ($i=1;$i<=$jmllevel;$i++) {
?>
									<option value="<?php print $i;?>"><?php print $i . "-" . $leveli[$i];?></option>
<?php
									}
?>
								</select>
								</FONT>
							</div>
						</td>
					</tr>
					<!--/form-->
					<!--form name="uploadktp" action="uploadktp.php" method="post"-->

					</form>
					<tr height="30px">
						<td colspan="3" style="padding-left: auto; text-align: center;">
						</td>
					</tr>
					<tr height="50px">
						<td colspan="3" style="padding-left: auto; text-align: center;">
							<!--button input type="submit">Tambahkan</button-->
							<!--a class="button orange medium" onclick="addktp(this.form);return false;">Tambahkan</a-->
							<input type="hidden" id="useridadd" name="useridadd" value="<?php echo $userid;?>">
							<a class="button orange medium" onclick="return adduserku();">Tambahkan</a>
						</td>
					</tr>
				</table>
			</form>
                </center>
            </div>
        </div>
    </div>

    <div id="popup">
        <div class="container popwrapper">
			<div style="text-align:right;">
				<FONT face="arial" color="#000000" size="2">
				<a href="#close" title="close modal dialog"><img src="./images/exit.png" /></a>
				</FONT>
            </div>
            <div style="padding:30px;">
                <center>
			<form method="post" class="signin" name="edituser" id="edituser" action="edituser.php">
				<table align="center" style="margin-left: auto; margin-right: auto;" border="0" cellspacing="0" cellpadding="0" width="100%">
					<tr height="40px">
						<td style="padding-left: auto; text-align: center;">
							<FONT face="arial" color="#AAFFAA" size="5"><b>Edit User</b></FONT>
						</td>
					</tr>
				</table>
				<table style="margin-left: auto; margin-right: auto;" border="0" cellspacing="0" cellpadding="0" width="450px">

					<tr height="30px">
						<td colspan="3" style="padding-left: auto; text-align: center;">
						</td>
					</tr>
					<tr height="34px">
						<td style="padding-left: 10px; text-align: left;" width="180px">
							<FONT face="arial" color="#AAFFFF" size="3">Nama</FONT>
						</td>
						<td style="padding-left: auto; text-align: center;" width="20px">
							<FONT face="arial" color="blue" size="3">:</FONT>
						</td>
						<td style="padding-left: auto; text-align: left;" width="250px">
							<input STYLE="color: #FFFFFF; font-family: Arial; font-weight: normal; font-size: 16px; background-color: #444444;" class="textbox" id="namaedit" name="namaedit" value="" type="text" size="30">
						</td>
					</tr>
					<tr height="34px">
						<td style="padding-left: 10px; text-align: left;" width="120px">
							<FONT face="arial" color="#AAFFFF" size="3">Username</FONT>
						</td>
						<td style="padding-left: auto; text-align: center;" width="20px">
							<FONT face="arial" color="blue" size="3">:</FONT>
						</td>
						<td style="padding-left: auto; text-align: left;" width="320px">
							<input STYLE="color: #FFFFFF; font-family: Arial; font-weight: normal; font-size: 16px; background-color: #444444;" class="textboxmid" id="usernameedit" name="usernameedit" value="" type="text" size="30">
						</td>
					</tr>
					<tr height="34px">
						<td style="padding-left: 10px; text-align: left;">
							<FONT face="arial" color="#AAFFFF" size="3">Password</FONT>
						</td>
						<td style="padding-left: auto; text-align: center;">
							<FONT face="arial" color="blue" size="3">:</FONT>
						</td>
						<td style="padding-left: auto; text-align: left;">
							<input STYLE="color: #FFFFFF; font-family: Arial; font-weight: normal; font-size: 16px; background-color: #444444;" class="textboxmid" id="passwdedit" name="passwdedit" type="password" size="30">
						</td>
					</tr>
					<tr height="34px">
						<td style="padding-left: 10px; text-align: left;">
							<FONT face="arial" color="#AAFFFF" size="3">Retype Password</FONT>
						</td>
						<td style="padding-left: auto; text-align: center;">
							<FONT face="arial" color="blue" size="3">:</FONT>
						</td>
						<td style="padding-left: auto; text-align: left;">
							<input STYLE="color: #FFFFFF; font-family: Arial; font-weight: normal; font-size: 16px; background-color: #444444;" class="textboxmid" id="passwd1edit" name="passwd1edit" type="password" size="30">
						</td>
					</tr>
					<tr height="34px">
						<td style="padding-left: 10px; text-align: left;">
							<FONT face="arial" color="#AAFFFF" size="3">Level</FONT>
						</td>
						<td style="padding-left: auto; text-align: center;">
							<FONT face="arial" color="blue" size="3">:</FONT>
						</td>
						<td style="padding-left: auto; text-align: left;">
							<div class="side-by-side clearfix">
								<FONT face="arial" color="#000000" size="3">
								<select id="levelidedit" name="levelidedit">
<?php
									for ($i=1;$i<=$jmllevel;$i++) {
?>
									<option value="<?php echo $i;?>" ><?php echo " " . $leveli[$i];?>&nbsp;</option>
<?php
									}
?>
								</select>
								</FONT>
							</div>
						</td>
					</tr>
					<!--/form-->
					<!--form name="uploadktp" action="uploadktp.php" method="post"-->

					</form>
					<tr height="30px">
						<td colspan="3" style="padding-left: auto; text-align: center;">
							<input type="hidden" id="useridedit" name="useridedit" value="<?php echo $userid;?>">
						</td>
					</tr>
				</table>
				<table align="center" style="margin-left: auto; margin-right: auto;" border="0" cellspacing="0" cellpadding="0" width="100%">
					<tr height="50px">
						<td colspan="3" style="padding-left: auto; text-align: center;">
							<!--button input type="submit">Tambahkan</button-->
							<!--a class="button orange medium" onclick="addktp(this.form);return false;">Tambahkan</a-->
							<a class="button orange medium" onclick="edituserku();">Update</a>
						</td>
					</tr>
				</table>
			</form>
                </center>
            </div>
        </div>
    </div>
<?php
	if ($levelidku>1)
	{
?>
<table align="center" style="text-align: left; margin-left: auto; margin-right: auto; margin-top: auto;" width="860px" border="0" cellspacing="0" cellpadding="0">
	<tr height="20px">
		<td style="padding-left: auto; text-align: right; font-size: 12;">
			<!--div id='basic-modal'>
				<a href="" class="basic">
					<img src="./img/useradd.png">
				</a> &nbsp;
			</div-->
			<!--a href="#popup0" class="button blue medium" onClick="tambahuser(<?php print $userid;?>);">Tambah User</a-->
			<a href="#popup0" class="button blue medium" onClick="tambahuser(1);">Tambah User</a>
		</td>
	</tr>
</table>
<?php
	}
?>

<DIV align="left">
	<table align="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: 0px;" width="860px" border="0" cellpadding="0" cellspacing="0">
		<tr height="10px">
			<td style="padding-left: 10px; text-align: left; font-size: 12;">
			</td>
		</tr>
	</table>
</DIV>
<?php
if ($jmli > 0)
{
?>
<DIV align="center">
	<table align="center" style="text-align: center; margin-left: auto; margin-right: auto; margin-top: 0px;" width="860px" border="1" cellpadding="0" cellspacing="0">
		<tr height="40px" bgcolor="#88eeff"> 
            <td style="padding-left: auto; text-align: center; font-size: 12;  width: 30px;">
				<b><i><font face="arial" size="2" color="black">NO</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 150px">
				<b><i><font face="arial" size="2" color="black">NAMA PEGAWAI</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 100px">
				<b><i><font face="arial" size="2" color="black">USERNAME</font></i></b>
			</td>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 80px">
				<b><i><font face="arial" size="2" color="black">LEVEL</font></i></b>
			</td>
<?php
	if ($levelidku>0)
	{
?>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 100px">
				<b><i><font face="arial" size="2" color="black">UPDATE</font></i></b>
			</td>
<?php
	}
	if ($levelidku==2) {
?>
            <td style="padding-left: auto; text-align: center; font-size: 12; width: 100px">
				<b><i><font face="arial" size="2" color="black">HAPUS</font></i></b>
			</td>
<?php
	}
?>
        </tr>
<?php

	$bulan = array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Des');
	$status = 0;
	for ($i=1; $i <= $jmli; $i++)
	{
		if ($levelidku == 2) {
			$status = 1;
		}
		else
			$status = 0;
?>
        <tr height="30px" <?php if (($i%2)==0) echo 'bgcolor="#bbffd7"'; else echo 'bgcolor="#d7ffe7"';?>>
<?php
		
		if ($status == 1) {
?>
            <td style="padding-right: auto; text-align: center; font-size: 12;">
				<font face="arial" size="2" color="black"><?php print $i;?></font>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12;">
				<font face="arial" size="2" color="black">
					<?php print $namamu[$i];?>
				</font>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12;">
				<font face="arial" size="2" color="black">
					<?php print $usernamemu[$i];?>
				</font>
			</td>
            <td style="padding-left: 10px; text-align: center; font-size: 12;">
				<font face="arial" size="2" color="black">
					<?php print $levelstrmu[$i];?>
				</font>
			</td>
		
<?php
		}
		if ($levelidku>0)
		{
?>

			<td style="padding-left: auto; text-align: center; font-size: 12;">
			
					<a href="#popup" class="button yellow small" onclick="editfill('<?php print $idmu[$i];?>','<?php print $namamu[$i];?>','<?php print $usernamemu[$i];?>','<?php print $levelmu[$i];?>');">Edit/Update</a>
				
			</td> 
<?php
		}
		if ($levelidku==2) {
?>			
			<td style="padding-left: auto; text-align: center; font-size: 12;">
				<form method="post" class="signin" name="deluser<?php print $idmu[$i];?>" id="deluser<?php print $idmu[$i];?>">
				<input type="hidden" id="userid<?php print $i;?>" name="userid<?php print $i;?>" value="<?php print $userid;?>">
				<input type="hidden" id="perusid" name="perusid" value="<?php print $perusid;?>">
				<a href="javascript:void(0)" target=_blank class="button red small" onclick="hapususer(this.form,<?php echo $i;?>,<?php print $idmu[$i];?>); return false;">Hapus</a>
				<!--a href="javascript:void(0)" target=_blank class="button red small" onclick="hapusktp(this.form, <?php print $idku[$i];?>)">Hapus</a-->
				</form>
			</td>        
<?php
		}
?>			
        </tr>
<?php
	}

?>
    </table>
<?php
}
else
{
?>
<table align="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: auto;" width="660px" border="0" cellspacing="0" cellpadding="0">
	<tr height="50px">
		<td style="padding-left: 0px; text-align: left; font-size: 12; width=300px">
			<font face="arial" size="4" color="red">
				TIDAK ADA DATA
			</font>
		</td>
	</tr>
</table>

<?php
}
?>	
	
</DIV>

<table style="text-align: left; margin-left: auto; margin-right: auto; margin-top: 10px;" width="660px" border="0" cellpadding="2" cellspacing="0">
    <tr height="30px"> 
        <td style="padding-left: 30px; text-align: left; font-size: 12">
			<h1>
				</h1>
		</td>
    </tr>
</table>



<br><br>
<table align="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: 0px;" width="800px" border="0" cellspacing="0" cellpadding="0">
	<tr height="20px">
		<td></td>
	</tr>
</table>

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
<script type='text/javascript' src='./simplemodal/basic/js/basicb.js'></script>

<script type='text/javascript' src='./simplemodal/basic/js/jquery2.js'></script>
<script type='text/javascript' src='./simplemodal/basic/js/jquery.simplemodal2.js'></script>
<script type='text/javascript' src='./simplemodal/basic/js/basic2.js'></script>  



  <script src="jquery.min.js" type="text/javascript"></script>
  <script src="chosen.jquery.js" type="text/javascript"></script>
  <script src="docsupport/prism.js" type="text/javascript" charset="utf-8"></script>

</body>

</html>
<?php
//*******************************************************************************************************
	$_SESSION['userid'] = $userid;
	$_SESSION['username'] = $uname;
	$_SESSION['passwd'] = $pwd;
	$_SESSION['start'] = time(); // Taking now logged in time.
	//$_SESSION['statuslogin'] = 8;
	$_SESSION["delnpwp"] = 1;
	//$_SESSION["sppd"] = $sppd;

//*******************************************************************************************************

?>