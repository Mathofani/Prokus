<html>
<head>
<title>Website Gita Savana</title>
<link rel="stylesheet" type="text/css" href="style2.css">
<link rel="shortcut icon" href="favicon.ico" type="images/logo.jpg">
</head>

<body>
<div id='header'>
<img src='images/logo.jpg' height='40px'>PSM GITA SAVANA
<a href="download.php"><img src="icn_jump_back.png" border="0"/></a></td>
</div>

<h2 align="center">Upload Files</h2>
<form enctype="multipart/form-data" action="upload.php" method="post">
<table class="datatable" align="center">
  <tr>
    <td width="29%" height="37" valign="middle"><font size="2" face="verdana">File</font></td>
    <td><input type="file" name="datafile" size="30" id="gambar" /></td>
  </tr>
  
  <tr>
    <td height="182"><font face="verdana" size="2">Keterangan</font></td>
    <td><textarea name="keterangan" cols="30" rows="10"></textarea></td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td width="71%"><input name="submit" type="submit" value="Upload" />&nbsp;</td>
  </tr>
</table>
</form>
<? include "d.php";?>
</body>
</html>
