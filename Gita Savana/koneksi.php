<?php
$con = mysql_connect("localhost","root","");
$db = mysql_select_db("gita savana");
if (!$con){
	header("location:a.php");
}else{
	if (!$db){
		header("location:a.php");
	}
}
?>