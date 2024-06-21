<?php

include "koneksi.php";

//----------------------------------------------------
$myuserid=0;
if (!isset($_POST["useridc"])) {
	$myuserid=$_GET["useridc"];
}
else
	$myuserid=$_POST["useridc"];
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

date_default_timezone_set('Asia/Jakarta');
$tglsaiki = date("Y-m-d");

$datetimesaiki = date("Y-m-d H:i:s");

$tglsaiki = date("Y-m-d");
$datetimesaiki = date("Y-m-d H:i:s");
$tglsaiki1 = $tglsaiki . " 00:00:00";
$tglsaiki2 = $tglsaiki . " 23:59:59";
//Check dulu apakah user sudah login pada hari yg sama dan belum logout ?

$sql = "SELECT * FROM userlog WHERE (userID=" . $myuserid . " AND logintime >='" . $tglsaiki1 . 
		"' AND logintime <='" . $tglsaiki2 . "' AND logouttime is null) ORDER BY ID;";

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
	$sql1 = "UPDATE userlog SET logouttime=now() WHERE ID=" . $idku . ";";
	$result = mysqli_query($link, $sql1);
}


//Update data jumlah scan user_error




?>

<meta http-equiv="refresh" content="0; url=index.php" />