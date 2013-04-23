<?php
	include ("koneksi.php");
	$delete = $_GET['delete'];
	
		$qry = "DELETE FROM admin WHERE username='$delete'" ;
		mysql_query($qry);
		header("location:admin.php?page=page_view_admin");
?>