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
<script src="icheck.js"></script>
<script src="jquery-1.11.2.min.js"></script>

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
function mainuser()
{
	document.forms["usermanage"].submit();
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
	if (!isset($_POST["useridh"])) {
		$userid=0;
	}
	else
		$userid=$_POST["useridh"];
}
else
	$userid=$_POST["userid"];
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

if ($num > 0) {
	//$_SESSION['statuslogin'] = 0;
?>
  <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
<?php
}
else  {
	//$_SESSION['statuslogin'] = 8;
?>
<meta http-equiv="refresh" content="0; url=index.php" />
<?php
}

date_default_timezone_set('Asia/Jakarta');
$tglsaiki = date("Y-m-d");
$datetimesaiki = date("Y-m-d H:i:s");
$timesaiki = date("H:i:s");
$tglsaiki1 = $tglsaiki . " 00:00:00";
$tglsaiki2 = $tglsaiki . " 23:59:59";

//Cari Shift
$shiftid=0;
$sql0 = "SELECT * FROM shift WHERE (jamstart <= '" . $timesaiki . "' AND jamend >= '" . $timesaiki . "');";

$jmldata = 0;
$result = mysqli_query($link, $sql0);
if ($result) {
 /* determine number of rows result set */
    $jmldata = $result->num_rows;
}
if ($jmldata>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$shiftid = $row['ID'];
	}
}

if ($jmldata == 0)
{
	$sql0 = "SELECT * FROM shift";
	$jmldata1 = 0;
	$result = mysqli_query($link, $sql0);
	if ($result) {
 /* determine number of rows result set */
		$jmldata = $result->num_rows;
	}
	if ($jmldata>0) {
		$i = 0;
		while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
			$i++;
			$shiftidku[$i] = $row['ID'];
			$jamstart[$i] = $row['jamstart'];
			$jamend[$i] = $row['jamend'];
		}
	}
	for ($a=1; $a<=$i; $a++)
	{
		if ((($timesaiki > $jamstart[$a]) && ($timesaiki < "23:59:59")) || ($timesaiki >= "00:00:00" && $timesaiki < $jamend[$a])) 
		{
			$shiftid = $shiftidku[$i];
		}
	}
}
//echo $shiftid;


//Check dulu apakah user sudah login pada hari yg sama dan belum logout ?

$sql = "SELECT * FROM userlog WHERE userID=" . $userid . " AND logintime >='" . $tglsaiki1 . 
		"' AND logintime <='" . $tglsaiki2 . "');";
$jmldata1 = 0;
$result = mysqli_query($link, $sql);
if ($result) {
 /* determine number of rows result set */
    $jmldata1 = $result->num_rows;
}
if ($jmldata1>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$idku = $row['ID'];
	}
}

if ($jmldata1==0)
{
	$query = "INSERT INTO userlog(userID,shift,logintime) VALUES(" . $useridku . "," . $shiftid . ", now());";
	$result = mysqli_query($link, $query);
}
else if ($jmldata1>0)
{
	$sql = "SELECT * FROM userlog WHERE ID=" . $idku . " AND logintime >='" . $tglsaiki1 . 
			"' AND logouttime <='" . $tglsaiki2 . "');";
	$jmldata2 = 0;
	$result = mysqli_query($link, $sql);
	if ($result) {
 /* determine number of rows result set */
		$jmldata2 = $result->num_rows;
	}
	if ($jmldata2==0)
	{
//Logout dulu
		$sql1 = "UPDATE userlog SET logouttime='" . $datetimesaiki . "' WHERE ID=" . $idku . ";";
		$result = mysqli_query($link, $sql1);

		//$query = "INSERT INTO userlog(userID,logintime) VALUES(" . $userid . ", now());";
		//$result = mysqli_query($link, $query);
	}
	else if ($jmldata2>0)
	{
		$query = "INSERT INTO userlog(userID,logintime) VALUES(" . $userid . ", now());";
		$result = mysqli_query($link, $query);		
	}
}

//Cek userscan
$sql = "SELECT * FROM userscan WHERE (userID=" . $useridku . " AND mydate ='" . $tglsaiki . "');";
$jmldata1 = 0;
$result = mysqli_query($link, $sql);
if ($result) {
    $jmldata1 = $result->num_rows;
}
if ($jmldata1==0) {
	$sql0 = "INSERT INTO userscan(userID,shift,mydate) VALUES(" . $useridku . "," . $shiftid . ",'" . $tglsaiki . "');";
	
	$result = mysqli_query($link, $sql0);
}

//Cek userscan per user
$sql = "SELECT SUM(jmlscan) AS totscan FROM userscan WHERE (userID=" . $useridku . " AND mydate ='" . $tglsaiki . "');";
$jmldata1 = 0;
$result = mysqli_query($link, $sql);
if ($result) {
 /* determine number of rows result set */
    $jmldata1 = $result->num_rows;
}
if ($jmldata1>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$mytotscan = $row['totscan'];
	}
}

//Cek userscan per hari
$sql = "SELECT SUM(jmlscan) AS totscan FROM userscan WHERE (mydate ='" . $tglsaiki . "');";
$jmldata1 = 0;
$result = mysqli_query($link, $sql);
if ($result) {
 /* determine number of rows result set */
    $jmldata1 = $result->num_rows;
}
if ($jmldata1>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$totscan = $row['totscan'];
	}
}

?>




<?php
if ($num > 0) {

	
?>

<body onload="noBack();">

<div style="text-align: center;">

			<table align="center" style="text-align: center; margin-left: auto; margin-right: auto; margin-top: 0px;" width="90%" border="0" cellpadding="2" cellspacing="0">

				<tr style="vertical-align: middle; height: 30px">
					<td style="padding-left: 0px; text-align: left; height: 20px" width="43%">
						<img style="padding-left: 10px;" align="left" src="./images/hinoDFSlogo.jpg" height="75px" width="460px">
					</td>
					<td style="text-align: left;" width="17%">
<?php
		if (strpos($levelku,"admin") !== false)
		{
?>
						<font face="arial" size="2" color="black">
							<img OnClick="regme();" style="padding-left: 0px;" align="left" src="./images/user1.png" height="26px" width="26px">&nbsp;
							<!--a href="mainuser.php?userid=<?php echo $useridku;?>" style="padding-left: 0px;" align="left"-->
							<a href="" style="padding-left: 0px;" align="left" OnClick="mainuser();return false;">
							User Management
							</a>
							<!--form name="usermanage" id="usermanage" method="POST" action="mainuser.php" target="_blank"-->
							<form name="usermanage" id="usermanage" method="POST" action="mainuser.php">
								<input type="hidden" name="useridman" id="useridman" value="<?php echo $useridku;?>">
							</form>
						</font>
<?php
		}
?>
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
					<td align="center" style="padding-left: 10px; padding-top: 5px; text-align: left; font-size: 12;">

					</td>
				</tr>
			</table>






<br><br><br><br>
<big style="font-weight: bold; font-family: Arial; font-size: 2.4em"><font
 size="6">MENU UTAMA</font><br>
<br>
</big>
<br>

<br>

<table style="width: 1100px; text-align: left; margin-left: auto; margin-right: auto;" border="0" cellpadding="2" cellspacing="2">
  <tbody>
    <tr height="30px">
      <td style="text-align: center;">
      </td>
    </tr>
    <tr>
		<td style="width: 350px; text-align: center;">    
			<a button  class='multi-line-button red' style='color:#FFCCCC; width:14em' OnClick="managefile();">
				<span class='title'>File Manager</span>
				<span class='subtitle'>File Explorer</span>
				<form name="filemanage" action="filemanage.php" method="post">
					<input type="hidden" id="userid" name="userid" value="<?php echo $useridku;?>">
					<input type="hidden" id="username" name="username" value="<?php echo $uname;?>">
				</form>
			</a>
			
		</td>
		<td style="width: 400px; text-align: center;">   
			<a button  class='multi-line-button' style='color:yellow;width:16em' OnClick="scannow();">
				<span class='title'>Scan Barcode</span>
				<span class='subtitle'>Data Terkini</span>
				<form name="scandoc" id="scandoc" action="scandoc.php" method="post">
					<input type="hidden" id="useridd" name="useridd" value="<?php echo $useridku;?>">
					<input type="hidden" id="useridb" name="useridb" value="<?php echo $useridku;?>">
					<input type="hidden" id="usernameb" name="usernameb" value="<?php echo $uname;?>">
				</form>
			</a>
		</td>
		<td style="width: 350px; text-align: center;">    
			<a button  class='multi-line-button green' style='color:#5555CC;width:14em' OnClick="scanarc();">
				<span class='title'>Scan Archives</span>
				<span class='subtitle'>Data Lama</span>
				<form name="oldarchive" id="oldarchive" action="scanarchive.php" method="POST">
					<input type="hidden" id="userida" name="userida" value="<?php echo $useridku;?>">
					<input type="hidden" id="usernamea" name="usernamea" value="<?php echo $uname;?>">
				</form>
			</a>
		</td>

    </tr>
    <tr height="30px">
      <td style="text-align: center;">
	  </td>
    </tr>
  </tbody>
</table>

<table style="width: 600px; text-align: left; margin-left: auto; margin-right: auto;" border="0" cellpadding="2" cellspacing="2">
  <tbody>
    <tr height="30px">
      <td style="text-align: center;">
      </td>
    </tr>
    <tr height="25px">
		<td style="width: 600px; text-align: center;">    
			<font face="Arial" color="black" size="3">
				Total Scan yg anda lakukan hari ini: &nbsp; <?php echo $mytotscan;?>
			</FONT>
		</td>
    </tr>
    <!--tr height="25px">
		<td style="width: 200px; text-align: center;">    
			<FONT>
				Total Scan dilakukan hari ini: &nbsp; <?php echo $totscan;?>
			</FONT>
		</td>
    </tr-->
    <tr height="10px">
      <td style="text-align: center;">
	  </td>
    </tr>
  </tbody>
</table>

<?php
    $bytes = disk_free_space("E:"); //E:
    $si_prefix = array( 'B', 'KB', 'MB', 'GB', 'TB', 'EB', 'ZB', 'YB' );
    $base = 1024;
    $class = min((int)log($bytes , $base) , count($si_prefix) - 1);
    //echo $bytes . '<br />';

    $bytes2 = disk_total_space("E:"); //E:
    $si_prefix = array( 'B', 'KB', 'MB', 'GB', 'TB', 'EB', 'ZB', 'YB' );
    $base = 1024;
    $class = min((int)log($bytes2 , $base) , count($si_prefix) - 1);
    //echo $bytes . '<br />';
	
	$persen = 100 * $bytes / $bytes2;


?>


<table style="width: 600px; text-align: left; margin-left: auto; margin-right: auto;" border="0" cellpadding="2" cellspacing="2">
  <tbody>
    <tr height="20px">
      <td style="text-align: center;">
      </td>
    </tr>
    <tr height="25px">
		<td style="width: 600px; text-align: center;">    
			<FONT face="Arial" color="black" size="3">
				Available Disk Space: &nbsp; <?php echo sprintf('%1.2f' , $bytes / pow($base,$class)) . ' ' . $si_prefix[$class];?>
				&nbsp; of Total: &nbsp;<?php echo sprintf('%1.2f' , $bytes2 / pow($base,$class)) . ' ' . $si_prefix[$class];?>
			</FONT>
		</td>
    </tr>
    <tr height="25px">
		<td style="width: 600px; text-align: center;">    
			<FONT face="Arial" color="black" size="3">
				Free Space Percentage: &nbsp; <?php echo number_format($persen,2) . " %";?>
			</FONT>
		</td>
    </tr>
    <tr height="30px">
      <td style="text-align: center;">
	  </td>
    </tr>
  </tbody>
</table>

<?php
	if ($persen < 5)
	{

?>
<script type="text/javascript">

var i = 1,timer;
window.onload=function() {
timer = setInterval('blink()', 500);
}
function blink() {

 if (i == 1) {
    document.getElementById('blink').style.backgroundColor = '#ff0000';
	document.getElementById('blink').style.color = '#ffffff';
	document.getElementById('blink').style.fontSize = '26px';

 } else {
      document.getElementById('blink').style.backgroundColor = '#ffff00';
	  document.getElementById('blink').style.color = '#000000';
	  document.getElementById('blink').style.fontSize = '26px';
  }

 if(i == 1) i = 0; else i = 1;
}

</script>

<div id="blink" style="background-color: #ffff00;display: inline;padding: 5px;">
<font face="arial" size="4">
LOW DISK SPACE
</font>
</div>

<?php
	}
?>





<big style="font-weight: bold; font-family: Arial;"><br>
</big><big style="font-weight: bold; font-family: Arial;"><small><span
 style="font-weight: bold;"></span></small></big><br>
</div>


<?php
}
	$_SESSION['userid'] = $userid;
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

</body>
</html>

<style type="text/css">
button2, a.button {
border: 1px solid rgba(0,0,0,0.3);
background: #aaa;
color: #515151;
display: inline-block;
font-size: 24px;
font-weight: 700;
padding: 21px 34px;
position: relative;
text-decoration: none;
background: -webkit-gradient(linear, left bottom, left top, color-stop(0.21, rgb(203,203,203)), color-stop(0.58, rgb(227,226,226)));
background: -moz-linear-gradient(center bottom, rgb(203,203,203) 21%, rgb(227,226,226) 58%);
-moz-border-radius: 5px;
-webkit-border-radius: 5px;
border-radius: 5px;
-moz-box-shadow: 0 0 0 5px rgba(255,255,255,0.3) /* glass edge */, inset 0 1px 0 0 rgba(255,255,255,0.5) /* top highlight */, inset 0 -3px 0 0 rgba(0,0,0,0.5) /* bottom shadow */;
-webkit-box-shadow: 0 0 0 5px rgba(255,255,255,0.3), inset 0 1px 0 0 rgba(255,255,255,0.5), inset 0 -3px 0 0 rgba(0,0,0,0.5);
box-shadow: 0 0 0 5px rgba(255,255,255,0.3), inset 0 1px 0 0 rgba(255,255,255,0.5), inset 0 -3px 0 0 rgba(0,0,0,0.5);
text-shadow: 0 1px rgba(255,255,255,0.6);
}
button2::-moz-focus-inner, a.button2::-moz-focus-inner {
padding:0;
border:0;
}
button2:hover, a.button:hover {
background: #cbcbcb;
cursor: pointer;
}
button2:active, a.button:active {
background: #ccc;
padding: 22px 34px 20px; /* Bump down text–Thanks to Jason for the suggestion */
-moz-box-shadow: 0 0 0 5px rgba(255,255,255,0.3), inset 0 -1px 0 0 rgba(255,255,255,0.5), inset 0 2px 5px 0 rgba(0,0,0,0.2);
-webkit-box-shadow: 0 0 0 5px rgba(255,255,255,0.3), inset 0 -1px 0 0 rgba(255,255,255,0.5), inset 0 2px 5px 0 rgba(0,0,0,0.2);
box-shadow: 0 0 0 5px rgba(255,255,255,0.3), inset 0 -1px 0 0 rgba(255,255,255,0.5), inset 0 2px 5px 0 rgba(0,0,0,0.2);
text-shadow: none;
}
button2[disabled] {
background: #ddd;
color: #ccc;
cursor: default;
-moz-box-shadow: 0 0 0 5px rgba(255,255,255,0.2), inset 0 -1px 0 0 rgba(0,0,0,0.5);
-webkit-box-shadow: 0 0 0 5px rgba(255,255,255,0.2), inset 0 -1px 0 0 rgba(0,0,0,0.5);
box-shadow: 0 0 0 5px rgba(255,255,255,0.2), inset 0 -1px 0 0 rgba(0,0,0,0.5);
text-shadow: none;
}
button2[disabled]:active {
background: #ddd;
color: #ccc;
}
.red {
background: #e1001a;
color: #fff;
background: -webkit-gradient(linear, left bottom, left top, color-stop(0.21, rgb(192,0,22)), color-stop(0.58, rgb(226,0,26)));
background: -moz-linear-gradient(center bottom, rgb(192,0,22) 21%, rgb(226,0,26) 58%);
text-shadow: 0 1px rgba(0,0,0,0.25);
}
.red:hover {
background: #cb0018;
text-shadow: 0 1px rgba(0,0,0,0);
}
.red:active {
background: #ae0014;
}
a.smaller {
font-size: 12px;
margin: 18px 0px;
padding: 10px 14px;
}
a.smaller:active {
padding: 11px 14px 9px;
}	
</style>