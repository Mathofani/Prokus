<form action='conn.php' method= 'post'>
	<table align='left' id='rounded-corner'>
		<tr>
		<thead><th>Foto</th><th>Deskripsi</th><th colspan='2'>action</th></thead>
		</tr>
		<?php
		$query=mysql_query("select url,keterangan from tabel_data");
		while ($data=mysql_fetch_array($query)){
		?>
		<tr><tbody>
			<td><? echo $data['url'] ; ?></td>
			<td><? echo $data['keterangan'] ; ?></td>
			<td><a href='download.php?page=page_edit_foto&&image=<? echo $data['url'] ; ?>'><img src='images/icon/icn_edit.png'></a></td><td><a href='delete_foto.php?delete=<? echo $data['url'] ; ?>&&image=<? echo $data['url'] ; ?>' onClick="return confirm('Are you sure you want to delete?')"><img src='images/icon/icn_trash.png' title='delete'></a></td>
			<td><a href="link download.php"><img src="download.jpg" border="0"/></a></td>
		</tbody></tr>
		<?php } ?>
	</table>
</form>