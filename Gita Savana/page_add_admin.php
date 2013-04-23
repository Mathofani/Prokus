<form action='add_admin.php' method= 'post' enctype="multipart/form-data">
	<table id="rounded-corner">
	<thead><th colspan='2'>add admin</th></thead></tr>
		<tr>
			<td><input type='text' id='textfield' name='nama' placeholder='nama admin'></td>
			<td><input type='text' id='textfield' name='email' placeholder='email'></td>
		</tr>
		<tr>
			<td><input type='text' id='textfield' name='username' placeholder='username'></td>
			<td><input type='password' id='textfield' name='password' placeholder='password'></td>
		</tr>
		<tr>
			<td colspan='2'><textarea name='alamat'  placeholder='alamat'></textarea></td>
		</tr>
		<tr><tfoot>
		<td><input type='number' id='textfield' name='kontak' placeholder='contact'></td>
		<td class='foot'><input type='submit' value='Add' id='button'></td>
		</tfoot></tr>
	</table>
</form>