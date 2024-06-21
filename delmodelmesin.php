<?php
session_start();

include "koneksi.php";

if (!isset($_GET["username"])) {
	$uname=$_SESSION["username"];
}
else
	$uname=$_GET["username"];
//---------------------------------------------
if (!isset($_GET["passwd"])) {
	$pwd=$_SESSION["passwd"];
}
else
	$pwd=$_POST["passwd"];
//---------------------------------------------
if (!isset($_GET["id"])) {
	$cid=0;
}
else
	$cid=$_GET["id"];
//---------------------------------------------
if (!isset($_GET["userid"])) {
	if (!isset($_POST["userid"])) 
		$userid=0;
	else
		$userid=$_POST["userid"];
}
else
	$userid=$_GET["userid"];
//-------------------------------------------------
if ($uname=0 || $pwd=0)
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
?>

<?php
// Get data user ------------------------------------------------------------------------------------
# query the users table for name and surname 
if (isset($userid))
	$query = "SELECT * FROM user WHERE ID=" . $userid . ";";
else
	$query = "SELECT * FROM user WHERE username='" . $uname . "' AND pwd=PASSWORD('" . $pwd . "');";
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
		$useridku = $row['ID'];
	}
}
//---------------------------------------------------------------------------------------------------
$query = "SELECT * FROM tipemesinaturan WHERE ID=" . $cid . ";";
$row_cnt = 0;
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$tipemesin1ku = $row['tipemesin1'];
		$tipemesin2ku = $row['tipemesin2'];
		$tipemesin3ku = $row['tipemesin3'];
	}
}
//---------------------------------------------------------------------------------------------------
if ($row_cnt>0) {
	$sql = "DELETE FROM tipemesinaturan WHERE ID=" . $cid . ";";
	$result = mysqli_query($link, $sql);
}

// Log trail -------------------------------
	$mydata = $useridku . "|" . $cid . "|" . $tipemesin1ku . "|" . $tipemesin2ku . "|" . $tipemesin3ku;
	$sql1 = "INSERT INTO mylog (userid, username, waktu, jenisaktivitas, detailaktivitas) VALUES(" . $userid . ",'" . 
			$namaku .	"','" . date('Y-m-d H:i:s') . "','DELETE', 'TIPEMESINATURAN|" . $mydata . "');";
	$res = mysqli_query($link,$sql1);
//------------------------------------------
	if ($result) 
		echo "Data sudah dihapus";
	else
		echo "Data tidak bisa dihapus. Cek kembali data tsb !";
mysqli_close($link);
?>
<?php
$_SESSION['userid'] = $userid;
$_SESSION['start'] = time(); // Taking now logged in time.
	//$_SESSION['statuslogin'] = 8;
?>