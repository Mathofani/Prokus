<html>
<head>
<title>Buku Tamu</title>
</head>
<body>
<?
include "koneksi1.php";
$sql="select nama,email,pesan from bukutamu";
if(!$query=mysql_query($sql))
echo mysql_error();
while($row=mysql_fetch_array($query))
{
echo "Nama : $row[nama]<br>";
echo "Email : $row[email]<br>";
echo "Komentar : $row[pesan]<br>";
echo "<hr>";
}
?>
<br>
<a href="index.php">Isi komentar lagi?...</a>
</body>
</html>