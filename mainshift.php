<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php
	session_start();
	if(isset($_SESSION['statuslogin'])) {
		$statuslogin = $_SESSION['statuslogin'];
	}
?>
<html>
<head>
<link rel="shortcut icon" href="./images/logohino.jpg" />
  <title>
  <font face="Arial" color="black" size="6">
  MENU UTAMA
  </font>
  </title>

<link rel="stylesheet" href="chosen.css">
<script src="icheck.js"></script>
<script src="jquery-1.11.2.min.js"></script>

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
font-size: 20px;
padding: 12px 18px 10px;
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
.dropbtn {
    background-color: #FFFFFF;
    color: black;
    padding: 4px;
    font-size: 15px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #CCCCCC;
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

.dropdown a:hover {background-color: #f1f1f1}

.show {display:block;}
</style>  
<style> 
  .textbox { 
    border: 1px solid #c4c4c4; 
    height: 32px; 
    width: 215px; 
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
.select_style 
{
	background: #FFF;
	overflow: hidden;
	display: inline-block;
	color: #525252;
	font-weight: 300;
	-webkit-border-radius: 5px 4px 4px 5px/5px 5px 4px 4px;
	-moz-border-radius: 5px 4px 4px 5px/5px 5px 4px 4px;
	border-radius: 5px 4px 4px 5px/5px 5px 4px 4px;
	-webkit-box-shadow: 0 0 5px rgba(123, 123, 123, 0.2);
	-moz-box-shadow: 0 0 5px rgba(123,123,123,.2);
	box-shadow: 0 0 5px rgba(123, 123, 123, 0.2);
	border: solid 1px #DADADA;
	font-family: arial;
	font-size: 16px;
	position: relative;
	cursor: pointer;
	padding-right:2px;
	vertical-align: middle;
}
.select_style span
{
	position: absolute;
	right: 10px;
	width: 8px;
	height: 8px;
	background: url ('./images/arrowdown1.png') no-repeat;
	top: 50%;
	margin-top: -4px;
}
.select_style select
{
  font-size: 20px;
	appearance:none;
	width:120%;
	background:none;
	background:transparent;
	border:none;
	outline:none;
	cursor:pointer;
	padding:4px 6px;
background: url('/images/arrowdown1.png') no-repeat 100% 4px #fff; /* add your own arrow image */
background: url('/images/arrowdown1.png') no-repeat 100% 0px #fff; /* fallback bg image*/
background: url('/images/arrowdown1.png') no-repeat 100% 0px, -webkit-linear-gradient(top, #fff, #9c9c9c);
background: url('/images/arrowdown1.png') no-repeat 100% 0px, -moz-linear-gradient(top, #fff, #9c9c9c);
background: url('/images/arrowdown1.png') no-repeat 100% 0px, -ms-linear-gradient(top, #fff, #9c9c9c);
background: url('/images/arrowdown1.png') no-repeat 100% 0px, -o-linear-gradient(top, #fff, #9c9c9c);
background: url('/images/arrowdown1.png') no-repeat 100% 0px, linear-gradient(top, #fff, #9c9c9c);
-webkit-appearance: menulist-button;
}
</style>

<script>
function managefile()
{
	//href='./filemanagerok/elfinder.html' 
	var win = window.open('filemanagerok/elfinder.php', '_blank');
	win.focus();
	//document.forms["filemanage"].submit();
}
</script>

<script>
function scanarc()
{
//alert(document.getElementsByName("userida")[0].value + document.getElementsByName("usernamea")[0].value);
	document.forms["oldarchive"].submit();
}
</script>

<script>
function scannow()
{
	document.forms["scandoc"].submit();
}
</script>

<script>
function logoutpage()
{

history.pushState(null, null, 'index.php');
window.addEventListener('popstate', function(event) {
  history.pushState(null, null, 'index.php');
});
	//document.forms["logoutform"].submit();

//window.open(url,'localhost/DFS/index.php');
window.location.assign("index.php");
window.close();
}
</script>

<script>
function logmeout() {

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
				alert(xmlhttp.responseText);
				if (mystr.indexOf('Data sudah dihapus')>=0) {
					alert("Data sudah dihapus");
					window.location.reload();
				}
			}
		}
		var linkget = "logoutme.php?useridmu=" + useridmu;

		xmlhttp.open("GET", linkget, true);
		xmlhttp.send();

}
</script>
<script>
function saveupdateme() {

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
				alert(xmlhttp.responseText);
				if (mystr.indexOf('Data sudah dihapus')>=0) {
					alert("Data sudah dihapus");
					window.location.reload();
				}
			}
		}
		var linkget = "logoutme.php?useridmu=" + useridmu;

		xmlhttp.open("GET", linkget, true);
		xmlhttp.send();

}
</script>
<script>
function saveme()
{
	
//var newwindow=window.open("index.php");
//window.focus();
	document.forms["shift"].submit();
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
<script>
function logoutmenow()
{
	
//var newwindow=window.open("index.php");
//window.focus();
	document.forms["logoutmeso"].submit();
}
</script>
<script>
function regme()
{
	document.forms["registrasi"].submit();
}
</script>
<script>
function myhome()
{
	document.forms["homemeso"].submit();
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


<?php
include "koneksi.php";

if (!isset($_POST["useridshift"])) {
	if (!isset($_POST["userid"])) 
		$userid=0;
	else
		$userid=$_POST["userid"];
}
else
	$userid=$_POST["useridshift"];
//----------------------------------------------------
if (!isset($_POST["username"])) {
	$uname="";
}
else
	$uname=$_POST["username"];
//----------------------------------------------------
if (!isset($_POST["passwd"])) {
	$pwd="";
}
else
	$pwd=$_POST["passwd"];
//----------------------------------------------------
if (!isset($_POST["statuslogin"])) {
	$statuslogin=$_SESSION["statuslogin"];
}
else
	$statuslogin=$_POST["statuslogin"];
//----------------------------------------------------

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

#mysql_connect("localhost",$uname,$pwd);
# query the users table for name and surname 
$useridku = $userid;
if ($userid==0 || $userid==null)
	$query = "SELECT * FROM user WHERE username='" . $uname . "' AND pwd=PASSWORD('" . $pwd . "');";
else 
	$query = "SELECT * FROM user WHERE ID=" . $userid . ";";

$row_cnt = 0;
$levelku=0;
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



$num = $row_cnt;
$now = time(); // Checking the time now when home page starts.
$_SESSION['expire'] = $_SESSION['start'] + ($menit * 60);
if (isset($_SESSION['expire'])) {
	if ($now > $_SESSION['expire']) {
		unset($_SESSION['username']); 
		unset($_SESSION['passwd']); 
		//$_SESSION['statuslogin'] = 7;//session expired
?>
<script>
window.top.location.href = "index.php"; 
</script>
<?php
die;
	}
}


date_default_timezone_set('Asia/Jakarta');
$tglsaiki = date("Y-m-d");

$datetimesaiki = date("Y-m-d H:i:s");
$tglsaiki1 = $tglsaiki . " 00:00:00";
$tglsaiki2 = $tglsaiki . " 23:59:59";

?>




<?php
$num=1;
if ($num > 0) 
{


	
?>

<body>


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
					<td style="padding-left: 0px; text-align: center; height: 20px" width="43%">
						<img style="padding-left: 10px;" align="left" src="./images/hinoDFSlogo.jpg" height="75px" width="460px">
					</td>

					<td style="padding-left: 10px; padding-top: 25px; text-align: left;" width="17%">
						<font face="Arial" color="black" size="5">
							<a class="buttonh icon chat" onclick="myhome(); return false;"><span>HOME</span></a>
							<form name="homemeso" id="homemeso" method="POST" action="mainmenu.php">
								<input type="hidden" name="useridh" id="useridh" value="<?php echo $useridku;?>">
								<input type="hidden" name="statuslogin" id="statuslogin" value="1">
							</form>
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
					<td colspan="6" align="center" style="padding-left: 10px; padding-top: 5px; text-align: left; font-size: 12;">
					</td>
				</tr>

			</table>


			<table align="center" style="text-align: center; margin-left: auto; margin-right: auto; margin-top: 0px;" width="90%" border="0" cellpadding="2" cellspacing="0">
				<tr height="100px">
					<td>
					</td>
				</tr>
				<tr height="40px">
					<td>
						<style="font-weight: bold; font-family: Arial;"><b><font face="Arial" size="6" color="black">SHIFT</font></b>
					</td>
				</tr>
				<tr height="40px">
					<td>
					</td>
				</tr>
			</table>


<?php

$query = "SELECT ID, DATE_FORMAT(jamstart ,  '%H:%i' ) AS jams, DATE_FORMAT(jamend ,  '%H:%i' ) AS jame FROM shift;";
$jmlrow = 0;
$i = 0;
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
    $jmlrow = $result->num_rows;
}
if ($jmlrow>0) {
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$shiftidku[$i] = $row['ID'];
		$jammulai[$i] = $row['jams'];
		$jamselesai[$i] = $row['jame'];
	}
}
$jmli = $i;

?>

			<DIV style="text-align: center;">
				<FORM id="shift" name="shift" method="POST" action="saveshift.php">
					<input type="hidden" name="userid" id="userid" value="<?php echo $useridku;?>">
					<input type="hidden" name="jmldata" id="jmldata" value="<?php echo $jmli;?>">
					<table align="center" style="text-align: center; margin-left: auto; margin-right: auto; margin-top: 0px;" width="660px" border="0" cellpadding="0" cellspacing="0">
						<tr height="50px" STYLE="background-color: #DDCCFF;"> 
							<td style="padding-left: auto; text-align: center; font-size: 1.2em; width:160px">
								<b><i><font face="arial" size="3" color="black">SHIFT</font></i></b>
							</td>
							<td style="padding-left: auto; text-align: center; font-size: 1.2em; width: 250px">
								<b><i><font face="arial" size="3" color="black">WAKTU MASUK</font></i></b>
							</td>
							<td style="padding-left: auto; text-align: center; font-size: 1.2em; width: 250px">
								<b><i><font face="arial" size="3" color="black">WAKTU PULANG</font></i></b>
							</td>
						</tr>
						<tr height="10px" STYLE="background-color: #FFFFCC;"> 
							<td style="padding-left: auto; text-align: center; font-size: 1.2em; width:160px">
								<b><i><font face="arial" size="3" color="black"></font></i></b>
							</td>
							<td style="padding-left: auto; text-align: center; font-size: 1.2em; width: 250px">
								<b><i><font face="arial" size="3" color="black"></font></i></b>
							</td>
							<td style="padding-left: auto; text-align: center; font-size: 1.2em; width: 250px">
								<b><i><font face="arial" size="3" color="black"></font></i></b>
							</td>
						</tr>
<?php
	if ($jmli > 0)
	{
		for ($a=1; $a <= $jmli; $a++)
		{
			$jammul = explode(":", $jammulai[$a]);
			$jamku = $jammul[0];
			$jmenitku = $jammul[1];
?>
						<tr height="50px" valign="middle" STYLE="background-color: #FFFFCC; vertical-align: middle"> 
							<td style="padding-left: auto; text-align: center; font-size: 1.2em; width:160px">
								<b><font face="arial" size="3" color="black">
									<?php echo $shiftidku[$a];?>
								</font></b>
								<input type="hidden" name="shift<?php echo $shiftidku[$a];?>" id="shift<?php echo $shiftidku[$a];?>" value="<?php echo $useridku;?>">
							</td>
							<td style="padding-left: auto; text-align: center; font-size: 1.6em; width: 250px">
								<b>				
									<div class="select_style">
										<select STYLE="color: #000000; background-color: #ffffff; width: 60px" id="jamwaktumulai<?php echo $a;?>" name="jamwaktumulai<?php echo $a;?>" tabindex="0"> 
<?php

						for ($j=0; $j<24; $j++)
						{
							if ($j<10)
							{
								$jk = (string) ('0' . $j);
							}
							else
								$jk = $j;
?>
											<option value="<?php echo $j;?>" <?php if ($jamku==$jk || $jamku==$j) echo "selected";?>><?php echo $jk;?>&nbsp;&nbsp;</option>
<?php
						}
?>						
										</select>							
									</div>
				:
									<div class="select_style">
										<select STYLE="color: #000000; background-color: #ffffff; width: 60px" id="menitwaktumulai<?php echo $a;?>" name="menitwaktumulai<?php echo $a;?>" tabindex="0"> 
<?php

						for ($j=0; $j<60; $j++)
						{
							if ($j<10)
							{
								$jk = (string) ('0' . $j);
							}
							else
								$jk = $j;
?>
											<option value="<?php echo $j;?>" <?php if ($jmenitku==$jk || $jmenitku==$j) echo "selected";?>><?php echo $jk;?>&nbsp;&nbsp;</option>
<?php
						}
?>						
										</select>							
									</div>
								</b>
							</td>
							<td style="padding-left: auto; text-align: center; font-size: 1.6em; width: 250px">
								<b>				
									<div class="select_style">
										<select STYLE="color: #000000; background-color: #ffffff; width: 60px" id="jamwaktusls<?php echo $a;?>" name="jamwaktusls<?php echo $a;?>" tabindex="0"> 
<?php
			$jamsel = explode(":", $jamselesai[$a]);
			$jamku = $jamsel[0];
			$jmenitku = $jamsel[1];
						for ($j=0; $j<24; $j++)
						{
							if ($j<10)
							{
								$jk = (string) ('0' . $j);
							}
							else
								$jk = $j;
?>
						<option value="<?php echo $j;?>" <?php if ($jamku==$jk || $jamku==$j) echo "selected";?>><?php echo $jk;?>&nbsp;&nbsp;</option>
<?php
						}
?>						
										</select>							
									</div>
				:
									<div class="select_style">
										<select STYLE="color: #000000; background-color: #ffffff; width: 60px" id="menitwaktusls<?php echo $a;?>" name="menitwaktusls<?php echo $a;?>" tabindex="0"> 
<?php

						for ($j=0; $j<60; $j++)
						{
							if ($j<10)
							{
								$jk = (string) ('0' . $j);
							}
							else
								$jk = $j;
?>
											<option value="<?php echo $j;?>" <?php if ($jmenitku==$jk || $jmenitku==$j) echo "selected";?>><?php echo $jk;?>&nbsp;&nbsp;</option>
<?php
						}
?>						
										</select>							
									</div>
								</b>
							</td>
						</tr>
<?php
		}
	}
?>



					</table>
				</FORM>
			</DIV>

			<DIV style="text-align: center;">
				<table align="center" style="text-align: center; margin-left: auto; margin-right: auto; margin-top: 0px;" width="100%" border="0" cellpadding="0" cellspacing="0">
					<tr height="150px"> 
						<td style="padding-left: auto; text-align: center; font-size: 1.2em; width:660px">
							<a OnClick="saveme();" class="large button blue">Save/Update</a>
						</td>
					</tr>
			</table>
		</td>
	</tr>
<table>


<br>
<br>



<big style="font-weight: bold; font-family: Arial;"><br>
</big><big style="font-weight: bold; font-family: Arial;"><small><span
 style="font-weight: bold;"></span></small></big><br>
</div>


<?php
}
	$_SESSION['username'] = $uname;
	$_SESSION['passwd'] = $pwd;
	$_SESSION['start'] = time(); // Taking now logged in time.
	//$_SESSION['statuslogin'] = 8;
?>

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
</body>
</html>

