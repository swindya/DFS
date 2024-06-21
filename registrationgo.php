<html>
<head>
<title>PHP Login :: Free Registration/Signup Form</title>
<link rel="stylesheet" type="text/css" href="./themes/default/easyui.css">
<link rel="stylesheet" type="text/css" href="./themes/icon.css">
<link href='multi-line-button.css' rel='stylesheet' />
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="jquery.easyui.min.js"></script>
<link rel="stylesheet" type="text/css" href="./demo/demo.css">
<script>
	function gotologin()
	{
		window.open("index.php",'_top');
	}
	function gotoregister()
	{
		window.open("register.php",'_top');
	}
</script>
</head>
<body>
<?php
include "koneksi.php";

/*
if (!isset($_POST["email"])) {
	$mailku=$_SESSION["email"];
}
else
	$mailku=$_POST["email"];
*/
//---------------------------------------
if (!isset($_POST["username"])) {
	$uname="";
}
else
	$uname=$_POST["username"];
//---------------------------------------
if (!isset($_POST["passwd"])) {
	$pwd="";
}
else
	$pwd=$_POST["passwd"];
//---------------------------------------
if (!isset($_POST["soflow"])) {
	$levelid="";
}
else
	$levelid=$_POST["soflow"];
//---------------------------------------

$link = mysqli_connect($db_hostname, $db_username, $db_password);

if (!$link) {
  die('Could not connect: ' . mysqli_error($link));
}

mysqli_select_db($link,'dms');
$statususer = 0;
$status = 0;
$row_cnt=0;

$sql = "SELECT * FROM user WHERE username='" . $db_username . "';";
//echo $sql;
$result = mysqli_query($link,$sql);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}
if ($row_cnt>0) {
	$i = 0;
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$userid = $row['ID'];
		$levelid = $row['levelid'];
	}
}

//Check apakah user sudah ada
$row_cnt=0;
$i = 0;
$sql2 = "SELECT * FROM user WHERE username='" . $uname . "' AND pwd = PASSWORD('" . $pwd . "');";

$result = mysqli_query($link,$sql2);
if ($result) {
 /* determine number of rows result set */
    $row_cnt = $result->num_rows;
}

if ($row_cnt>0) {
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		$i++;
		$userid = $row['ID'];
		$levelidku = $row['levelid'];
		$namaku = $row['nama'];
	}
}

if (($i==0)) {
	$sqlo = "INSERT INTO user(username, pwd, levelid, createddate) VALUES('" . $uname . "'," . 
			"PASSWORD('" . $pwd . "')," . $levelid . ",now());";
	$resulto = mysqli_query($link,$sqlo);
	$sqlo = "INSERT INTO userlog(userid, activity) VALUES(" . $userid . ",'user:" . $uname . ", passwd:" . $pwd . " created');";
	$resulto = mysqli_query($link,$sqlo);
	$status = 1;
}
else {
	$status = 0;
}


mysqli_close($link);

?>
<br><br>
<table style="background-color: rgb(255, 255, 120); text-align: left; margin-left: 20; margin-right: 20;" width="520px" border="0" cellpadding="3" cellspacing="3">
	<tr> 
        <td height="50px"><font face="arial" color="black" size="4"><strong>Hasil Registrasi :</strong></font></td>
    </tr>
    <tr> 
        <td style="height: 70px; width: 520px; text-align: left;">
<?php
		if ($status == 1) {
?>
			<font face="arial" color="blue" size="5">User &nbsp;<?php echo $uname; ?>&nbsp; berhasil dibuat</font>
<?php
		}
		else {
?>
			<font face="arial" color="red" size="5">
			User&nbsp;<?php echo $uname; ?>&nbsp; gagal/tidak bisa dibuat. Periksa 'authorized password
			</font>
<?php
		}
?>
		</td>
    </tr>
</table>
<!--meta http-equiv="refresh" content="0; url=login.php" /-->
<table style="text-align: left; margin-left: 20; margin-right: 20;" width="520px" border="0" cellpadding="3" cellspacing="3">
	<tr> 
        <td height="50px"><font face="arial" color="black" size="4">
<?php
	if ($status == 1) {
?>
		<a href="javascript:void(0)" class="easyui-linkbutton" onclick="gotologin();">Go to Login dalam 3 detik</a></font>
<?php
	}
	else {
?>
		<a href="javascript:void(0)" class="easyui-linkbutton" onclick="gotoregister();">Go to Register</a> &nbsp;
		<a href="javascript:void(0)" class="easyui-linkbutton" onclick="gotologin();">Go to Login</a></font>
<?php
	}
?>
		</td>
    </tr>
</table>


<meta http-equiv="refresh" content="3; url=index.php" />


<br><br>
</body>
</html>