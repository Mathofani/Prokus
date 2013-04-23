<?php
		include ("koneksi.php");
		$user=$_GET['user'];
		$nama=$_POST['nama'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$password = MD5($_POST['password']);
		$alamat=$_POST['alamat'];
		$kontak=$_POST['kontak'];
		
		$qry = "UPDATE admin set nama='$nama' WHERE username='$user'" ;
		mysql_query($qry);
		header("location:admin.php?error=2");
?>