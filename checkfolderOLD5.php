<?php


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

//echo is_dir('C:\\adb');

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
 
if(rename($fn,$newfn)){
	//echo sprintf("%s was renamed to %s",$fn,$newfn);
}else{
	echo 'An error occurred during renaming the file';
}



function folder_exist($myfolder)
{
    // Get canonicalized absolute pathname
    $path = realpath($myfolder);

    // If it exist, check if it's a directory
    return ($path !== false AND is_dir($path)) ? $path : false;
}

?>