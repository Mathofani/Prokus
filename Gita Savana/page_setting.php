<?php
		include("koneksi.php");
		$query=mysql_query("SELECT * FROM opsi WHERE nama_option='information'");
		while ($data=mysql_fetch_array($query)){
?>
<form action='update_index.php?update=in' method= 'post' >
	<table id="rounded-corner">
		<tr><thead><th>INFORMATION</th></thead></tr>
		<tr>
			<td colspan='2'><textarea name='des'> <?=$data['deskripsi_option']?> </textarea></td>
		</tr>
		<tr>
			<tfoot><td align='right' class='foot'><input type='submit' value='Change' id='button'></td></tfoot>
		</tr>
	</table>
</form>
<?php
}
?>

<?php
		include("koneksi.php");
		$query=mysql_query("SELECT * FROM opsi WHERE nama_option='profile'");
		while ($data=mysql_fetch_array($query)){
?>
<form action='update_index.php?update=prof' method= 'post' >
	<table id="rounded-corner">
		<tr><thead><th>PROFILE</th></thead></tr>
		<tr>
			<td colspan='2'><textarea name='des'> <?=$data['deskripsi_option']?> </textarea></td>
		</tr>
		<tr>
			<tfoot><td align='right' class='foot'><input type='submit' value='Change' id='button'></td></tfoot>
		</tr>
	</table>
</form>
<?php
}
?>