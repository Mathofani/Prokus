<?php
	include ("conn.php");
	$delete = $_GET['delete'];
	$image=$_GET['image'];
	
	$unlink = unlink('url/tabel_data/'.$image);
	
	if($unlink){
		$qry = "DELETE FROM tabel_data WHERE url='$delete'" ;
		mysql_query($qry);
		header("location:download.php?page=page_view_foto");
	}
	else
{
echo "Data berhasil dihapus";
echo "<a href=download.php> Back</a>"; 
exit;
}
?>