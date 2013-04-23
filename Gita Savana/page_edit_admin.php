<?php 
if (isset($_GET['user'])) {
	$username = $_GET['user'];
	$sql = "SELECT * FROM admin WHERE username='$username'";
	$result = mysql_query($sql) or die(mysql_error());
	while ($data=mysql_fetch_array($result)){
?>
<form action='edit_admin.php?kode=<? echo $data['username'] ; ?>' method= 'post' enctype="multipart/form-data">
	<table id="rounded-corner">
	<thead><th colspan='2'>edit admin</th></thead></tr>
		<tr>
			<td><input type='text' id='textfield' name='nama_user' value='<?php echo $data['nama'];?>'></td>
			<td><input type='text' id='textfield' name='email_user' value='<?php echo $data['email'];?>'></td>
		</tr>
		<tr>
			<td><input type='text' id='textfield' name='username_user' value='<?php echo $data['username'];?>'></td>
			<td><input type='password' id='textfield' name='password_user' value='<?php echo $data['password'];?>'></td>
		</tr>
		<tr>
			<td colspan='2'><textarea name='alamat'  value='<?php echo $data['alamat'];?>'></textarea></td>
		</tr>
		<tr><tfoot>
		<td><input type='number' id='textfield' name='kontak_user' value='<?php echo $data['kontak'];?>'></td>
		<td class='foot'><input type='submit' value='edit' id='button'></td>
		</tfoot></tr>
	</table>
</form>
<?php } } ?>