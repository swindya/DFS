<?php

include "koneksi.php";


if (!isset($_POST["tglscan"])) {
	$mytgl=0;
}
else
	$mytgl=$_POST["tglscan"];
//----------------------------------------------------
if (!isset($_POST["useridscan"])) {
	$myuserid=0;
}
else
	$myuserid=$_POST["useridscan"];
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

$tglsaiki = date("Y-m-d");
$datetimesaiki = date("Y-m-d H:i:s");

//Cari data userscan dgn userID
$query = "SELECT * FROM scanlog WHERE userID=" . $myuserid . " AND createddate='" . $mytgl . "';";
//echo $query;
$row_cnt = 0;
$jmlscanku=0;
$i=0;
$result = mysqli_query($link, $query);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$mytime[$i] = $row['mytime'];
		$mydoc[$i] = $row['kodedoc'];
	}
}
$jmlscanku = $i;

?>
			<table align="center" style="text-align: center; margin-left: auto; margin-right: auto; margin-top: 0px;" width="540px" border="0" cellpadding="2" cellspacing="0">
				<tr height="50px">
					<td colspan="3" align="center" style="padding-left: 10px; padding-top: 0px; text-align: left; font-size: 12;">
					</td>
				</tr>
				<tr height="40px">
					<td colspan="3" align="center" style="padding-left: 10px; padding-top: 0px; text-align: left; font-size: 12;">
						<font face="Arial" color="black" size="5">
							DAFTAR DOKUMEN YANG SUDAH DISCAN
						</font>
					</td>
				</tr>
				<tr height="40px">
					<td colspan="3" align="center" style="padding-left: 10px; padding-top: 20px; text-align: left; font-size: 12;">
						<font face="Arial" color="black" size="3">
						</font>
					</td>
				</tr>
				<tr height="60px">
					<td colspan="3" align="center" style="padding-left: 10px; padding-top: 0px; text-align: left; font-size: 12;">
					</td>
				</tr>
				<tr height="25px">
					<td align="center" style="padding-left: 10px; padding-top: 0px; text-align: center; font-size: 12;" width="40px">
						<font face="Arial" color="black" size="3"><b>
							No
						</b></font>
					</td>
					<td align="center" style="padding-left: 10px; padding-top: 0px; text-align: center; font-size: 12;" width="200px">
						<font face="Arial" color="black" size="3"><b>
							Time
						</b></font>
					</td>
					<td align="center" style="padding-left: 10px; padding-top: 0px; text-align: center; font-size: 12;" width="300px">
						<font face="Arial" color="black" size="3"><b>
							Dokumen
						</b></font>
					</td>
				</tr>
<?php
			for ($j=1; $j<=$jmlscanku; $j++)
			{
?>
				<tr height="25px">
					<td align="center" style="padding-left: 10px; padding-top: 0px; text-align: center; font-size: 12;">
						<font face="Arial" color="black" size="2">
							<?php echo $j;?>
						</font>
					</td>
					<td align="center" style="padding-left: 10px; padding-top: 0px; text-align: center; font-size: 12;">
						<font face="Arial" color="black" size="2">
							<?php echo $mytime[$j];?>
						</font>
					</td>
					<td align="center" style="padding-left: 10px; padding-top: 0px; text-align: center; font-size: 12;">
						<font face="Arial" color="black" size="2">
							<?php echo $mydoc[$j];?>
						</font>
					</td>
				</tr>
<?php
			}
?>


			</table>



<?php
//===========================================================
function folder_exist($myfolder)
{
    // Get canonicalized absolute pathname
    $path = realpath($myfolder);

    // If it exist, check if it's a directory
    return ($path !== false AND is_dir($path)) ? $path : false;
}

?>