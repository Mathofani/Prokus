<?php
include("koneksi.php");
include("sessionadminform.php");
require_once('inc/mysql.class.php');
// Include database connection
require_once('inc/global.inc.php');
// Include functions
require_once('inc/functions.inc.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="google-site-verification" content="U0vk4LP3DBBPwPfXDlZQqNB_OcPKg--Rqd8OM3EdLf8" />
<link href='images/favicon.ico' rel="shortcut icon" />
<title>Home</title>
<script src="autocomplete/jquery-1.8.3.js" type="text/javascript"></script>
<script src="autocomplete/jquery-ui.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="autocomplete/jquery-ui.css" />

<link rel="stylesheet" type="text/css" href="style.css" />

</head>
<body>
<div id='page'>

<div id='header'>
<img src='images/logo.jpg' height='40px'>PSM GITA SAVANA
<a href='log.php?op=out' title='logout'></a>
</div>
<div id='sidebar'>

<h1>Admin</h1>
<ul>
<li id='add_user'><a href='admin.php?page=page_add_admin'>Add Admin</a></li>
<li id='view_user'><a href='admin.php?page=page_view_admin'>View Admin</a></li>
</ul>

<h1>setting</h1>
<ul>
<li id='setting'><a href='admin.php?page=page_change_banner'>Change Banner</a></li>
<li id='setting'><a href='admin.php?page=page_setting'>Information & Profile</a></li>
</ul>
</div>

<div id='container'>
<table align='center'>
	<tr><td>
	<?php
	if (!empty($_GET['error'])) {
	if ($_GET['error'] == 1)
		{echo "<div class='warning_box'>Nothing Change !</div>";}
	else if ($_GET['error'] == 2)
		{echo "<div class='valid_box'>Success !</div>";}
	else if ($_GET['error'] == 3)
		{echo "<div class='error_box'>Error !</div>";}
	else if ($_GET['error'] == 4)
		{echo "<div class='error_box'>Oops !The requested URL was not found on this server.</div>";}
    }
	
	if (isset($_GET['page'])) {
		$page = $_GET['page'] . ".php";
		if (file_exists($page)){
		include ($page);
		}else{
		header("location:admin.php?error=4");
		}
	}
	?>
	</td></tr>
</table>
</div>

</div>
</body>
</html>