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
if (!isset($_POST["userid"])) {
	$userid=0;
}
else
	$userid=$_POST["userid"];
//-------------------------------------------------
if (!isset($_POST["nomodel"])) {
	$nomodel=0;
}
else
	$nomodel=$_POST["nomodel"];
//-------------------------------------------------
if (!isset($_POST["modelmesin"])) {
	$modelmesin=0;
}
else
	$modelmesin=$_POST["modelmesin"];
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
		$userid = $row['ID'];
	}
}
//---------------------------------------------------------------------------------------------------

//Query dulu...apakah data sudah ada di database
if ($nomodel==1)
{
	$sql0 = "SELECT * FROM tipemesin1 WHERE (tipemesin1='" . $modelmesin . "');";
	$tipe = "tipemesin1";
}
else if ($nomodel==2)
{
	$sql0 = "SELECT * FROM tipemesin2 WHERE (tipemesin2='" . $modelmesin . "');";
	$tipe = "tipemesin2";
}
else if ($nomodel==3)
{
	$sql0 = "SELECT * FROM tipemesin3 WHERE (tipemesin3='" . $modelmesin . "');";
	$tipe = "tipemesin3";
}
//echo $sql0 . "<br>";
$row_cnt = 0;
$result0 = mysqli_query($link, $sql0);
if ($result0) {
 /* determine number of rows result set */
    $row_cnt = $result0->num_rows;
}
//echo $row_cnt;
if ($row_cnt == 0) {
	$sql = "INSERT INTO " . $tipe . "(" . $tipe . ", createduser, createddate) VALUES('" .
			$modelmesin . "'," . $userid . ",now());";
echo $sql . "<br>";
	$result = mysqli_query($link,$sql);
// Log trail -------------------------------
	$dataku = "user|" . $namaku . "|" . $nomodel . "|" . $modelmesin;
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
else
	echo "Data tidak bisa ditambahkan. Cek/periksa kembali data !";

mysqli_close($link);

$_SESSION['userid'] = $userid;
$_SESSION['username'] = $uname;
$_SESSION['passwd'] = $pwd;
$_SESSION['start'] = time(); // Taking now logged in time.

?>
<form method="post" name="addkm" id="addkm" action="mainnomesin.php">
	<input type="hidden" id="userid" name="userid" value="<?php echo $userid;?>">
</form>

<script>
	document.forms["addkm"].submit();
</script>
<!--meta http-equiv="refresh" content="0; url=mainnomesin.php?userid=<?php echo $userid?>'" /-->
