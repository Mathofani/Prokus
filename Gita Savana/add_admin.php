<?php
		include ("koneksi.php");
		$nama=$_POST['nama'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$password = MD5($_POST['password']);
		$alamat=$_POST['alamat'];
		$kontak=$_POST['kontak'];

if ($nama==''||$email==''||$username==''||$password==''||$alamat==''||$kontak==''){
		header("location:admin.php?error=1");
}else{
		$qry = "INSERT INTO user (username,password,nama,email,kontak,alamat) VALUES ('$username','$password','$nama','$email','$kontak','$alamat')" ;
		mysql_query($qry);
		header("location:admin.php?error=2");
}
?>