<?php 
if (isset($_GET['image'])) {
	$url = $_GET['image'];
	$sql = "SELECT * FROM tabel_data WHERE url='$url'";
	$result = mysql_query($sql) or die(mysql_error());
	while ($data=mysql_fetch_array($result)){
?>
<form action='edit_foto.php?image=<? echo $data['url'] ; ?>' method= 'post' enctype="multipart/form-data">
	<table align='center'>
		<tr>Deskripsi</tr>
		<tr>
		<td colspan='2'><textarea name='keterangan' id='textarea'  placeholder='keterangan'><?php echo $data['keterangan'];?></textarea></td>
		</tr>
		<tr>
		<td><input type="file" name="url"></td>
		<td align='right'><input type='submit' value='Edit' id='button'></td>
		</tr><?php } ?>
	</table>
</form>
<?php } ?>