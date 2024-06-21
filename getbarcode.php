<?php
session_start();

include "koneksi.php";


//-------------------------------------------------
if (!isset($_GET["userid"])) {
	$userid=0;
}
else
	$userid=$_GET["userid"];
//-------------------------------------------------
if (!isset($_GET["barcode"])) {
	$barcode=0;
}
else
	$barcode=$_GET["barcode"];
//-------------------------------------------------
if (!isset($_GET["p11"])) {
	$p11=0;
}
else
	$p11=$_GET["p11"];
//-------------------------------------------------

$tipemesin3 = trim(substr($barcode,0,2));

//Сheck that we have a file
$valstr = "";
$jmlfile = 0;
$jj=0;
$mm=0;
$statusku = 0;

if ($userid==0)
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

$sql0 = "SELECT * FROM tipemesinaturan WHERE (tipemesin3='" . $tipemesin3 . "') ORDER BY tipemesin1 ASC;";

//echo $sql0 . "<br>";
$row_cnt = 0;
$result0 = mysqli_query($link, $sql0);
if ($result0) {
 /* determine number of rows result set */
    $row_cnt = $result0->num_rows;
}
//echo $row_cnt;
if ($row_cnt > 0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result0, MYSQLI_ASSOC)) {
		$i++;
		$tipemesinku2[$i] = $row['tipemesin2'];
		$tipemesinku1[$i] = $row['tipemesin1'];
	}
}

$dd = "";
for ($b=1; $b<=$i; $b++)
{
	$tipemesin1 = $tipemesinku1[$b];
	$tipemesin2 = $tipemesinku2[$b];
	$dd=$dd . $tipemesin1;
	if ($p11==1 && $tipemesinku1[$b]== "P11C")
	{
		$tipemesin1 = $tipemesinku1[$b];
		$tipemesin2 = $tipemesinku2[$b];
		break;
	}
}

echo $tipemesin1 . "|" . $tipemesin2 . "|" . $tipemesin3 . "|" . $barcode;

mysqli_close($link);

$_SESSION['userid'] = $userid;
$_SESSION['start'] = time(); // Taking now logged in time.

?>

