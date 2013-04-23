<?php
		include ("conn.php");
		$kode=$_GET['kode'];
		$image=$_GET['image'];

		$keterangan=$_POST['keterangan'];
		
		$fileName = $_FILES['url']['name'];
		$fileSize = $_FILES['url']['size'];
		$fileError = $_FILES['url']['error'];
		
		if($fileName==''){
			$qry = "UPDATE tabel_data set keterangan='$keterangan' WHERE url='$image'" ;
			mysql_query($qry);
			header("location:download.php?error=2");
		}else{
		if 	((($_FILES["url"]["type"] ==  "image/gif")
			|| ($_FILES["url"]["type"] == "image/jpeg")
			|| ($_FILES["url"]["type"] == "image/png")
			|| ($_FILES["url"]["type"] == "image/pjpeg"))
			)
		{
			$unlink = unlink('url/tabel_data/'.$image);
			if($unlink){
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
		
				$newimage = $fileName;
		
				$qry = "UPDATE tabel_data set keterangan='$keterangan',url='$newimage' WHERE url='$image'" ;
				mysql_query($qry);
				header("location:download.php?error=2");
			}
		}else{
		header("location:download.php?error=3");
		}
		}
?>