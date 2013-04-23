<?php
		include("koneksi.php");
		$kode = $_POST['kode_produk'];
		$query=mysql_query("SELECT * FROM produk WHERE kode_produk='$kode'");
		while ($data=mysql_fetch_array($query)){
		header("location:cart.php?action=add&&id=$kode");
		}
?>