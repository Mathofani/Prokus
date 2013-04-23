<?php
$sql = mysql_query("select * from opsi WHERE nama_option='banner'");
while ($row=mysql_fetch_array($sql)){

echo"
<table id='rounded-corner'>
<form method='POST' action='edit_banner.php?image=$row[image_option]' enctype='multipart/form-data'>
<tr><td rowspan='3'><img src='images/banner/$row[image_option]' width='300px' name='image'></td><td><input type='file' name='image_option'></td></tr>
<tr><td><input type='text' name='deskripsi' size='92' value='$row[deskripsi_option]' id='textfield'></td></tr>
<tr><td colspan='2' align='right'><input type='submit' name='submit' value='EDIT' id='button'></td></tr>
</form>
</table>";
}
?>