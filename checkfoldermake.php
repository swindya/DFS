<?php


//echo is_dir('C:\\adb');

$mymesin="W080";
$mytahun="2017";
$mybulan="Feb";

$mydir = "E:\\$mymesin";
//$mydir = join("\\", array("E:", $mymesin));

echo $mydir;
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

echo $mydir;

function folder_exist($myfolder)
{
    // Get canonicalized absolute pathname
    $path = realpath($myfolder);

    // If it exist, check if it's a directory
    return ($path !== false AND is_dir($path)) ? $path : false;
}

?>