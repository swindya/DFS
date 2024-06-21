<?php
session_start();

include "koneksi.php";

if (!isset($_GET["username"])) {
	$uname=$_SESSION["username"];
}
else
	$uname=$_GET["username"];
//-------------------------------------------------
if (!isset($_GET["passwd"])) {
	$pwd=$_SESSION["passwd"];
}
else
	$pwd=$_POST["passwd"];
//-------------------------------------------------
if (!isset($_POST["userid1"])) {
	$userid=0;
}
else
	$userid=$_POST["userid1"];
//-------------------------------------------------
if (!isset($_POST["modelmesin1"])) {
	$modelmesin1=0;
}
else
	$modelmesin1=$_POST["modelmesin1"];
//-------------------------------------------------


//Сheck that we have a file
$valstr = "";
$jmlfile = 0;
$jj=0;
$mm=0;
$statusku = 0;

if ($uname==0 && $userid==0)
{
?>
<script>
window.top.location.href = "index.php"; 
</script>
<?php
}
//-------------------------------------------------

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
die();	
}
//---------------------------------------------------------------------------------------------------
// Get user
# query the users table for name and surname 
$query = "SELECT * FROM user WHERE ID=" . $userid . ";";
//echo $query . "<br>";

$row_cnt = 0;
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$levelidku = $row['levelid'];
		$namaku = $row['nama'];
		$uname = $row['username'];
		$useridku = $row['ID'];
	}
}
//---------------------------------------------------------------------------------------------------

//Query dulu...apakah data sudah ada di database

$sql0 = "SELECT * FROM tipemesin1 WHERE (tipemesin1='" . $modelmesin1 . "');";
$tipe = "tipemesin1";

echo $sql0 . "<br>";

$row_cnt = 0;
$result0 = mysqli_query($link, $sql0);
if ($result0) {
 /* determine number of rows result set */
    $row_cnt = $result0->num_rows;
}
//echo $row_cnt;
if ($row_cnt == 0) {
	$sql = "INSERT INTO tipemesin1(tipemesin1, createduser, createddate) VALUES('" .
			$modelmesin1 . "'," . $userid . ",now());";
//echo $sql . "<br>";
	$result = mysqli_query($link,$sql);
// Log trail -------------------------------
	$dataku = "user|" . $namaku . "|" . $modelmesin1;
	$sql1 = "INSERT INTO mylog (userid, waktu, jenisaktivitas, detailaktivitas) VALUES(" . $userid .
			"',now(),'add', '" . $dataku . "');";
//echo $sql1 . "<br>";
	$res = mysqli_query($link,$sql1);
//------------------------------------------
	if ($result) {
		echo "Data sudah ditambahkan";
	}
	else
		echo "Data tidak bisa ditambahkan. Mungkin data udah ada. Cek kembali data !";
}
else {
?>
<script>
alert("Data sudah ada");
</script>
<?php	

}
	

mysqli_close($link);

$_SESSION['userid'] = $userid;
$_SESSION['start'] = time(); // Taking now logged in time.

?>
<!--form method="post" name="addkm" id="addkm" action="mainnomesin.php">
	<input type="hidden" id="userid" name="userid" value="<?php echo $userid;?>">
</form-->

<script>
	//document.forms["addkm"].submit();
</script>
<meta http-equiv="refresh" content="0; url=mainnomesin.php?userid=<?php echo $userid?>" />
