<?php
	include("koneksi.php");
	session_start();
	if(!isset($_SESSION['userid'])){
    header("location:index.php");
	}
?>