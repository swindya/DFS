<?php

include "koneksi.php";

if (!isset($_GET["pathku"])) {
	$mypath=0;
}
else
	$mypath=$_GET["pathku"];
//----------------------------------------------------
if (!isset($_GET["fileku"])) {
	$myfile=0;
}
else
	$myfile=$_GET["fileku"];
//----------------------------------------------------
//----------------------------------------------------

//echo is_dir('C:\\adb');

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


$fn = $mypath . $myfile;
$newfn = "./VIEW/" . $myfile;

if (file_exists($newfn))
{
	unlink($newfn);
}

//Check apakah file sudah ada
/*
$aa=0;

	
while(!file_exists($fn))
{
	sleep(1);
}
*/

// Pindahkan file dan rename

copy($fn, $newfn);



//$tglsaiki = date("Y-m-d");
//$datetimesaiki = date("Y-m-d H:i:s");

//echo $newfn;

//===========================================================
function folder_exist($myfolder)
{
    // Get canonicalized absolute pathname
    $path = realpath($myfolder);

    // If it exist, check if it's a directory
    return ($path !== false AND is_dir($path)) ? $path : false;
}

?>