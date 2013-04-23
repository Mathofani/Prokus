<form action='koneksi.php' method= 'post'>
	<table align='left' id='rounded-corner'>
		<tr>
		<thead><th>nama</th><th>email</th><th>contact</th><th>alamat</th><th colspan='2'>action</th></thead>
		</tr>
		<?php
		$query=mysql_query("select nama,email,kontak,alamat from admin");
		while($data=mysql_fetch_array($query)){
		?>
		<tr><tbody>
			<td><? echo $data['nama'] ; ?></td>
			<td><? echo $data['email'] ; ?></td>
			<td><? echo $data['kontak'] ; ?></td>
			<td><? echo $data['alamat'] ; ?></td>
			<td><? echo $data['username'] ; ?></td>
			<td><a href='admin.php?page=page_edit_admin&&user=<? echo $data['username'] ; ?>'><img src='images/icon/icn_edit.png'></a></td><td><a href='delete_admin.php?delete=<? echo $data['username'] ; ?>' onClick="return confirm('Are you sure you want to delete?')"><img src='images/icon/icn_trash.png' title='delete'></a></td>
		</tbody></tr>
		<?php } ?>
		</table>
</form>