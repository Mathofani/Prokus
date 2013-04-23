<?php
		include ("conn.php");
		$keterangan=$_POST['keterangan'];
		$image=$_GET['image'];
		$fileName = $_FILES['url']['name'];
		$fileSize = $_FILES['url']['size'];
		$fileError = $_FILES['url']['error'];
		
if ((($_FILES["url"]["type"] == "image/gif")
|| ($_FILES["url"]["type"] == "image/jpeg")
|| ($_FILES["url"]["type"] == "image/png")
|| ($_FILES["url"]["type"] == "image/pjpeg"))
	)
{	
		
	if ($keterangan==''||$fileName==''){
		header("location:download.php?error=1");
	}else{
		if ($fileSize > 0 || $fileError == 0) {
		$move = move_uploaded_file($_FILES['url']['tmp_name'], 'url/tabel_data/' . $fileName);
		if ($move) {
        header("location:download.php?error=2");
		} else {
		header("location:download.php?error=3");
		}
		} else {
		header("location:download.php?error=3");
		}
		
		$image = $fileName;
		
		$qry = "INSERT INTO tabel_data (keterangan,url) VALUES ('$keterangan','$image')" ;
		mysql_query($qry);
		header("location:download.php?error=2");
		}
}else{
	header("location:download.php?error=3");
}
?>