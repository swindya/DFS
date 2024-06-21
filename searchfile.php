<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Deposito</title>
<?php
session_start();
?>
<script src="jquery-1.11.2.min.js"></script>
<link rel="stylesheet" href="chosen.css">
<script src="icheck.js"></script>

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
    border: 1px solid #c4c4c4; 
    height: 14px; 
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
.textboxnarrow { 
    border: 1px solid #c4c4c4; 
    height: 14px; 
    width: 50px; 
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
    border: 1px solid #c4c4c4; 
    height: 14px; 
    width: 100px; 
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
<script>
function movefile(myfile, mypath) {

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
		var linkget = "movemyfile.php?pathku=" + mypath + "&fileku=" + myfile;
		xmlhttp.open("GET", linkget, true);
		xmlhttp.send();

}
</script>
<script>
function openfile(myfile,mypath)
{
	//var myurl = "openmultifile.php?pathku=" + mypath + "&filenameku=" + myfile + "'";
	var myfileurl = "./VIEW/" + myfile;
	movefile(myfile, mypath);
	window.open(myfileurl, '_blank').focus();
}
</script>
<script>
function LoadMe()
{
	document.getElementById('css-spinner').style.display='none';
}
</script>
</head>

<body onload="LoadMe()">
<?php

include "koneksi.php";
if(isset($_SESSION['statuslogin'])) {
	$statuslogin = $_SESSION['statuslogin'];
}
$now = time(); // Checking the time now when home page starts.


//----------------------------------------------------
if (!isset($_POST["userid"])) {
	$userid="";
}
else
	$userid=$_POST["userid"];
//----------------------------------------------------
if (!isset($_POST["searchbarcode"])) {
	$searchbarcode="";
}
else
	$searchbarcode=$_POST["searchbarcode"];
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
		$levelidku = $row['levelid'];
		$namaku = $row['nama'];
	}
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


$namafileku = strtoupper($searchbarcode);// . ".pdf";

//echo $namafileku;

/*
$abc = "D:\\ABC\\";
$ccc = str_replace("\\","_",$abc);
$ccc = str_replace("_","\\\\",$ccc);

$abc .= "aa";
*/

//Reset file connector.minimal.php
/*
$filename1="./filemanagerok/php/connector.minimal.php";
$lines = file($filename1);
$word = "'path'          =>";
$result = '';


foreach($lines as $line) {
    if(strpos($line, "path") !== false && strpos($line, "=>") !== false) {
        $result .=" 			'path'          => 'E:/',                 // path to files (REQUIRED)" . "\n";
    }
	else {
        $result .= $line;
    }
}

file_put_contents($filename1, $result);

*/

//------------------------------------------------------------

//echo str_replace("semua","","Halo semua");


$a=0;
$di = new RecursiveDirectoryIterator('E:\\');
foreach (new RecursiveIteratorIterator($di) as $filename => $file) {
    //echo $namafileku . "--" . $filename . ' - ' . $file->getSize() . ' bytes <br/>';
	if (strpos($filename,$namafileku) !== false)
	{
			$a++;
			$fileku[$a] = str_replace("\\" ,"_", $filename);
			$fileku1[$a] = str_replace("_" ,"\\\\", $fileku[$a]);
			$fileku2[$a] = str_replace("_" ,"\\", $fileku[$a]);
			$pathku = str_replace($namafileku,"",$fileku1[$a]);
//echo $pathku . "<br>";
	}
}

//echo "A:" . $a . "<br>";
if ($a==0 || $searchbarcode=="")
{
	$a=0;
?>

<table align="center" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: 0px;" width="100%" border="0" cellpadding="0" cellspacing="0">
	<tr height="40px"> 
        <td style="padding-left: auto; text-align: center; font-size: 12;  width: 40px;">
			<b><i><u><font face="arial" size="3" color="black"></font></u></i></b>
		</td>
	</tr>
	<tr height="80px" STYLE="background-color: #FFFFAA;"> 
        <td style="padding-left: auto; padding-top: 40px; text-align: center; font-size: 12;  width: 40px;">
			<b><i><font face="arial" size="6" color="red">FILE TIDAK DITEMUKAN</font></i></b>
		</td>
	</tr>
	<tr height="40px" STYLE="background-color: #FFFFAA;"> 
        <td style="padding-left: auto; text-align: center; font-size: 12;  width: 40px;">
			<b><i><u><font face="arial" size="3" color="black"></font></u></i></b>
		</td>
	</tr>

</table>


<?php	
}
else if ($a > 0)
{

?>

<table align="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: 0px;" width="900px" border="0" cellpadding="0" cellspacing="0">
	<tr height="40px"> 
        <td style="padding-left: auto; text-align: center; font-size: 12;  width: 40px;">
			<b><i><u><font face="arial" size="3" color="black"></font></u></i></b>
		</td>
	</tr>
	<tr height="40px"> 
        <td style="padding-left: auto; text-align: center; font-size: 12;  width: 40px;">
			<b><font face="arial" size="5" color="black">SEARCHING FILE...</font></b>
		</td>
	</tr>
	<tr height="20px"> 
        <td style="padding-left: auto; text-align: center; font-size: 12;  width: 40px;">
			<b><i><u><font face="arial" size="3" color="black"></font></u></i></b>
		</td>
	</tr>
	<tr height="20px"> 
        <td style="padding-left: auto; text-align: center; font-size: 12;  width: 40px;">
			<i><font face="arial" size="3" color="black"><?php echo $namafileku;?></font></i>
		</td>
	</tr>
	<tr height="40px"> 
        <td style="padding-left: auto; text-align: center; font-size: 12;  width: 40px;">
			<i><font face="arial" size="3" color="black"></font></i>
		</td>
	</tr>
</table>


<table align="left" style="text-align: left; margin-left: 20px; margin-right: auto; margin-top: 0px;" width="900px" border="0" cellpadding="0" cellspacing="0">
	<tr height="40px" STYLE="background-color: #BBFFAA;"> 
        <td style="padding-left: auto; text-align: center; font-size: 12;  width: 40px;">
			<b><i><u><font face="arial" size="3" color="black">NO</font></u></i></b>
		</td>
        <td style="padding-left: auto; text-align: center; font-size: 12; width:700px">
			<b><i><u><font face="arial" size="3" color="black">Lokasi File</font></u></i></b>
		</td>
        <td style="padding-left: auto; text-align: center; font-size: 12; width: 160px">
			<b><i><u><font face="arial" size="3" color="black">Open</font></u></i></b>
		</td>
	</tr>

<?php
}
/*
$di = new RecursiveDirectoryIterator('D:\\');
foreach (new RecursiveIteratorIterator($di) as $filename => $file) {
    //echo $filename . ' - ' . $file->getSize() . ' bytes <br/>';
	$aa = explode("\\", $filename);
	$jmlku = count($aa);
	echo $aa[$jmlku-1] . "<br>";
}
*/


		

if ($a > 0)
{	
	$a=0;
	$b=1;
	$di = new RecursiveDirectoryIterator('E:\\');
	foreach (new RecursiveIteratorIterator($di) as $filename => $file) {
    //echo $namafileku . "--" . $filename . ' - ' . $file->getSize() . ' bytes <br/>';
		if (strpos($filename,$namafileku) !== false)
		{
		//echo $filename . " MATCH !" . "<br>";
			$a++;
			$fileku[$a] = str_replace("\\" ,"_", $filename);
			$fileku1[$a] = str_replace("_" ,"\\\\", $fileku[$a]);
			$fileku2[$a] = str_replace("_" ,"\\", $fileku[$a]);
			$pathku = str_replace($namafileku,"",$fileku1[$a]);
			$pathmumu = str_replace(".pdf","",$pathku);
			$pathmumu = str_replace($namafileku,"",$pathmumu);
			$pathabc = explode("\\\\", $pathmumu);
			$jmlpath = count($pathabc);
			//$jmlpath = 11;
			$pathmumu = "";
			for($aa=0;$aa<$jmlpath-1;$aa++)
			{
				if ($aa==$jmlpath-2)
					$pathmumu = $pathmumu . $pathabc[$aa];
				else
					$pathmumu = $pathmumu . $pathabc[$aa] . "\\\\";
			}
			$pathmumu = $pathmumu . "\\\\";
			
			$abc = explode("\\",$fileku2[$a]);
			$jmlc = count($abc);
			$namafileiki = $abc[$jmlc-1];
			if ($b==1)
			{
?>
	<tr height="40px" STYLE="background-color: #BBEEFF;">
<?php
				$b=0;
			}
			else
			{
?>
	<tr height="40px" STYLE="background-color: #FEEEDD;">
<?php
			}
?>
        <td style="padding-left: auto; padding-top: 8px;text-align: center;" valign="top">
				<font face="arial" size="3" color="black"><?php echo $a;?></font>
		</td>
        <td style="padding-left: auto; padding-top: 8px; text-align: left;" valign="top">
				<font face="arial" size="3" color="black"><?php echo $fileku2[$a];?></font>
		</td>
        <td style="padding-left: auto; padding-top: 8px; text-align: center;" valign="top">
			<font face="arial" size="3" color="black">
				<a href="#popup" class="small button blue" onclick="openfile('<?php $namamumu = $namafileku . ".pdf"; echo $namafileiki;?>','<?php echo $pathmumu;?>'); return true;">Open</a>
				<!--a href="#popup" class="small button blue" onclick="openfile('<?php echo $namafileku;?>','<?php echo str_replace($namafileku,"",$fileku2[$a]);?>'); return true;">Open</a-->
				<!--a href="<?php echo "./DATAFOLDER" . $pathku . $namafileku;?>">Link 2</a-->
				</font>
		</td>
	</tr>


<?php
		}
	}
}
else
{

?>

<script>
alert("File tidak ada (tidak ditemukan).");
window.close();
</script>
<?php
}
?>

</table>

<?php
	

function replace_string_in_file($filename, $string_to_replace, $replace_with){
    $content=file_get_contents($filename);
    //$content_chunks=explode($string_to_replace, $content);
    //$content=implode($replace_with, $content_chunks);
	$content=str_replace($string_to_replace, $replace_with, $content);
	//echo "-replace with:-" . $replace_with;
    file_put_contents($filename, $content);
}
?>