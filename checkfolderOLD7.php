<?php

include "koneksi.php";

if (!isset($_GET["barcodemu"])) {
	$mybarcode=0;
}
else
	$mybarcode=$_GET["barcodemu"];
//----------------------------------------------------
if (!isset($_GET["foldermu"])) {
	$myfolder=0;
}
else
	$myfolder=$_GET["foldermu"];
//----------------------------------------------------
if (!isset($_GET["mesinmu"])) {
	$mymesin=0;
}
else
	$mymesin=$_GET["mesinmu"];
//----------------------------------------------------
if (!isset($_GET["tahunmu"])) {
	$mytahun=0;
}
else
	$mytahun=$_GET["tahunmu"];
//----------------------------------------------------
if (!isset($_GET["bulanmu"])) {
	$mybulan=0;
}
else
	$mybulan=$_GET["bulanmu"];
//----------------------------------------------------
if (!isset($_GET["harimu"])) {
	$myhari=0;
}
else
	$myhari=$_GET["harimu"];
//----------------------------------------------------
if (!isset($_GET["foldermu"])) {
	$myfolder=0;
}
else
	$myfolder=$_GET["foldermu"];
//----------------------------------------------------
if (!isset($_GET["useridmu"])) {
	$myuserid=0;
}
else
	$myuserid=$_GET["useridmu"];
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



$mydir = "E:\\$mymesin";
//$mydir = join("\\", array("E:", $mymesin));

$aa = folder_exist($mydir);
if (!$aa)
{
	mkdir($mydir);
}

$mydir = "E:\\" . $mymesin . "\\" . $mytahun;
$aa = folder_exist($mydir);
if (!$aa)
{
	mkdir($mydir);
}

$mydir = "E:\\" . $mymesin . "\\" . $mytahun . "\\" . $mybulan;

$aa = folder_exist($mydir);
if (!$aa)
{
	mkdir($mydir);
}

$mydir = "E:\\" . $mymesin . "\\" . $mytahun . "\\" . $mybulan . "\\" . $myhari;

$aa = folder_exist($mydir);
if (!$aa)
{
	mkdir($mydir);
}



$fn = "E:\\Test.pdf";
$newfn = $mydir . "\\" . $mybarcode . ".pdf";

//Check apakah file sudah ada

while( !file_exists($fn) )
{
    //sleep(1);
}

sleep(2);
// Pindahkan file dan rename

if(rename($fn,$newfn)){
	
}else{
	echo 'An error occurred during renaming the file';
}



$tglsaiki = date("Y-m-d");
$datetimesaiki = date("Y-m-d H:i:s");

//Cari data userscan dgn userID
$query = "SELECT * FROM userscan WHERE userID=" . $myuserid . " AND mydate='" . $tglsaiki . "';";
$row_cnt = 0;
$jmlscanku=0;
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt==0)
{
	$sql = "INSERT INTO userscan(userID,jmlscan,mydate) VALUES(" . $myuserid . ",0,'" . $tglsaiki . "');";
	$result = mysqli_query($link, $sql);
}
else if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$jmlscanku = $row['jmlscan'];
	}
}


//Update data jumlah scan user_error

$query = "UPDATE userscan SET jmlscan=jmlscan+1 WHERE userID=" . $myuserid . " AND mydate='" . $tglsaiki . "';";
$result = mysqli_query($link, $query);

$query = "SELECT * FROM userscan WHERE userID=" . $myuserid . " AND mydate='" . $tglsaiki . "';";
$row_cnt = 0;
$jmlscanku=0;
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$jmlscanku = $row['jmlscan'];
	}
}

$sql2 = "INSERT INTO scanlog(userID,kodedoc,mytime,createddate,createduser) VALUES(" . $myuserid . ",'" . $mybarcode . "',now(),'" . 
		$tglsaiki . "'," . $myuserid . ");";
$result = mysqli_query($link, $sql2);


echo $jmlscanku;


//===========================================================
function folder_exist($myfolder)
{
    // Get canonicalized absolute pathname
    $path = realpath($myfolder);

    // If it exist, check if it's a directory
    return ($path !== false AND is_dir($path)) ? $path : false;
}

?>