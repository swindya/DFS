<!DOCTYPE html>
<html lang="en">
<?php

session_start();

if (isset($_SESSION['statuslogin'])){
}
else {
	$_SESSION['statuslogin'] = 1;
}

if (!isset($_POST["statuslogin"])) {
	$statuslogin=-1;
}
else
	$statuslogin=$_POST["statuslogin"];
//----------------------------------------------------

?>
<head>
<link rel="shortcut icon" href="./images/logohino.jpg" />
	<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Custom Login Form Styling</title>
    <meta name="description" content="Custom Login Form Styling with CSS3" />
    <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
    <meta name="author" content="Codrops" />
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
	<script src="js/modernizr.custom.63321.js"></script>
	<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
<style>
/* unvisited link */
a:link {
    color: yellow;
}

/* visited link */
a:visited {
    color: green;
}

/* mouse over link */
a:hover {
    color: hotpink;
}

/* selected link */
a:active {
    color: blue;
}
</style>
<style type="text/css">
html, 
body {
height: 100%;
}

body {
background-image: url(./images/hino2016.jpg);
background-repeat: no-repeat;
background-size: 100% 100%;
}
</style>

<script type="text/javascript" language="javascript">   
function disableBackButton()
{
window.history.forward()
}  
disableBackButton();  
window.onload=disableBackButton();  
window.onpageshow=function(evt) { if(evt.persisted) disableBackButton() }  
window.onunload=function() { void(0) }  
</script>
	
</head>
<body onload="noBack();">
	<table style="text-align: center; margin-left: auto; margin-right: auto; height: 20px;" width="100%" border="0" cellpadding="0" cellspacing="0" >
		<tr> 
			<td width="100%">
		
				<div class="container">
		<!-- Codrops top bar -->
					<header>
						<br>
						<font face="Verdana,Arial" color="black" size="5">
							<h1>Aplikasi <strong>DFS</strong></h1>
						</font>
						<div class="support-note">
							<span class="note-ie">Sorry, only modern browsers.</span>
						</div>	
					</header>
					<br><br><br><br><br>
					<table style="text-align: center; margin-left: auto; margin-right: auto; height: 20px;" width="100%" border="0" cellpadding="0" cellspacing="0" >
						<tr height="30px"> 
							<td width="100%">
<?php
		if ($_SESSION['statuslogin'] == 8) {
?>
								<div style="width: 100%;text-align:center"><font color="red" size="1">Username/password is not found. Try again</font></div>
<?php	
		}
		elseif ($_SESSION['statuslogin'] == 7) {
?>
								<div style="width: 100%;text-align:center"><font color="red" size="1">Session expired</font></div>
<?php
		}
		else {
		}
		$_SESSION['statuslogin'] = 0;
?>
							</td>
						</tr>
					</table>
					<section class="main">
						<form class="form-1" action="mainmenu.php" method="post" name="logForm" id="logForm">
							<p class="field">
								<input type="text" name="username" id="username" placeholder="Username or email">
								<i class="icon-user icon-large"></i>
							</p>
							<p class="field">
								<input type="password" name="passwd" id="passwd" placeholder="Password">
								<input type="hidden" name="statuslogin" id="statuslogin" value="1">
								<i class="icon-lock icon-large"></i>
							</p>
							<p class="submit">
								<button type="submit" name="submit"><i class="icon-arrow-right icon-large"></i></button>
							</p>
						</form>
					</section>
				</div>
			</td>
		</tr>
	</table>

	<table style="text-align: center; margin-left: auto; margin-right: auto; height: 20px;" width="300px" border="0" cellpadding="0" cellspacing="0" >
		<tr> 
			<td style="text-align: left; margin-left: auto" width="300px">
				<font face="Arial" color="yellow" size="2"><i>
					<a href="registration.php" target="_blank">SignUp / Registration</a>
				</i></font>
			</td>
		</tr>
	</table>
	
</body>
</html>
<?php
//echo $_SESSION['statuslogin'];
	$_SESSION['statusmultif'] = 0;
	$_SESSION['start'] = time(); // Taking now logged in time.
	$_SESSION['statuspdam'] = 0;
            // Ending a session in 30 minutes from the starting time.
    //$_SESSION['expire'] = $_SESSION['start'] + (2 * 60);
	//session_destroy();
?>