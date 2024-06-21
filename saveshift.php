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
  <link href='multi-line-button.css' rel='stylesheet' />
  <link href='multi-line-button-a.css' rel='stylesheet' />
<link rel="stylesheet" href="chosen.css">

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
    font-size: 14px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #CCCCCC;
}

.dropdown {
    position: relative;
    display: inline-block;
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

if (!isset($_POST["userid"])) {
	if (!isset($_SESSION["userid"])) 
		$userid=0;
	else
		$userid=$_SESSION["userid"];
}
else
	$userid=$_POST["userid"];
//----------------------------------------------------
if (!isset($_POST["jmldata"])) {
	if (!isset($_SESSION["jmldata"])) 
		$jmldata=0;
	else
		$jmldata=$_SESSION["jmldata"];
}
else
	$jmldata=$_POST["jmldata"];
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
if (!isset($_POST["shift1"])) {
	$sh1=0;
}
else
	$sh1=$_POST["shift1"];
//----------------------------------------------------
if (!isset($_POST["shift2"])) {
	$sh2=0;
}
else
	$sh2=$_POST["shift2"];
//----------------------------------------------------
if (!isset($_POST["jamwaktumulai1"])) {
	$jammulai1="00";
}
else
	$jammulai1=$_POST["jamwaktumulai1"];
//----------------------------------------------------
if (!isset($_POST["menitwaktumulai1"])) {
	$menitmulai1="00";
}
else
	$menitmulai1=$_POST["menitwaktumulai1"];
//----------------------------------------------------
if (!isset($_POST["jamwaktusls1"])) {
	$jamselesai1="00";
}
else
	$jamselesai1=$_POST["jamwaktusls1"];
//----------------------------------------------------
if (!isset($_POST["menitwaktusls1"])) {
	$menitselesai1="00";
}
else
	$menitselesai1=$_POST["menitwaktusls1"];
//----------------------------------------------------
if (!isset($_POST["jamwaktumulai2"])) {
	$jammulai2="00";
}
else
	$jammulai2=$_POST["jamwaktumulai2"];
//----------------------------------------------------
if (!isset($_POST["menitwaktumulai2"])) {
	$menitmulai2="00";
}
else
	$menitmulai2=$_POST["menitwaktumulai2"];
//----------------------------------------------------
if (!isset($_POST["jamwaktusls2"])) {
	$jamselesai2="00";
}
else
	$jamselesai2=$_POST["jamwaktusls2"];
//----------------------------------------------------
if (!isset($_POST["menitwaktusls2"])) {
	$menitselesai2="00";
}
else
	$menitselesai2=$_POST["menitwaktusls2"];
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
		$useridku = $row['ID'];
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



<body>


<?php
$sql0 = "UPDATE shift SET jamstart='" . $jammulai1 . ":" . $menitmulai1 . "', jamend='" . $jamselesai1 . ":" . 
		$menitselesai1 . "' WHERE ID=1;";
$result0 = mysqli_query($link, $sql0);

$sql1 = "UPDATE shift SET jamstart='" . $jammulai2 . ":" . $menitmulai2 . "', jamend='" . $jamselesai2 . ":" . 
		$menitselesai2 . "' WHERE ID=2;";
$result1 = mysqli_query($link, $sql1);
?>

<br>
<br>



<big style="font-weight: bold; font-family: Arial;"><br>
</big><big style="font-weight: bold; font-family: Arial;"><small><span
 style="font-weight: bold;"></span></small></big><br>
</div>


<?php

	$_SESSION['username'] = $uname;
	$_SESSION['passwd'] = $pwd;
	$_SESSION['start'] = time(); // Taking now logged in time.
	//$_SESSION['statuslogin'] = 8;
?>

<FORM id="shift" name="shift" method="POST" action="mainshift.php">
<input type="hidden" name="userid" id="userid" value="<?php echo $useridku;?>">
</FORM>


<script>
alert("Data SHIFT sudah di-update");
document.forms["shift"].submit();
</script>


<!--meta http-equiv="refresh" content="0; url=mainshift.php?userid=<?php echo $userid;?>" /-->

</body>
</html>

