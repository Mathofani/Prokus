<?php
include ("koneksi.php");
$update = $_GET['update'];
$des=$_POST['des'];
if($update=="in"){
		$qry = "UPDATE opsi set deskripsi_option='$des' WHERE nama_option='information'" ;
		mysql_query($qry);
		header("location:admin.php?page=page_setting");
}else if($update=='prof'){
		$qry = "UPDATE opsi set deskripsi_option='$des' WHERE nama_option='profile'" ;
		mysql_query($qry);
		header("location:admin.php?page=page_setting");
}
?>