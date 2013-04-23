<?php
		include ("koneksi.php");
		$deskripsi=$_POST['deskripsi'];
		$image=$_GET['image'];
		
		$fileName = $_FILES['image_option']['name'];
		$fileSize = $_FILES['image_option']['size'];
		$fileError = $_FILES['image_option']['error'];
	
	if($fileName==''){
			$qry = "UPDATE opsi set deskripsi_option='$deskripsi' WHERE image_option='$image'" ;
			mysql_query($qry);
			header("location:admin.php?error=2");
	}else{
		if 	((($_FILES["image_option"]["type"] == "image/gif")
			|| ($_FILES["image_option"]["type"] == "image/jpeg")
			|| ($_FILES["image_option"]["type"] == "image/png")
			|| ($_FILES["image_option"]["type"] == "image/pjpeg"))
			)
		{
			$unlink = unlink('images/banner/'.$image);
			if($unlink){
				if ($fileSize > 0 || $fileError == 0) {
				$move = move_uploaded_file($_FILES['image_option']['tmp_name'], 'images/banner/' . $fileName);
				if ($move) {
				header("location:admin.php?error=2");
				} else {
				header("location:admin.php?error=3");
				}
				} else {
				header("location:admin.php?error=3");
				}
		
				$newimage = $fileName;
		
				$qry = "UPDATE opsi set image_option='$newimage',deskripsi_option='$deskripsi' WHERE image_option='$image'" ;
				mysql_query($qry);
				header("location:admin.php?error=2");
			}
		}else{
		header("location:admin.php?error=3");
		}
	}
?>