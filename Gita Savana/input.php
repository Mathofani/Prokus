<html>
<head>
<title>Konfirmasi</title>
</head>
<body>
<?
$nama = $_POST['nama']; 
$email = $_POST['email'];
$pesan = $_POST['pesan']; 
include "koneksi1.php";
if(empty($nama) || empty($email) || empty($pesan)) 
{
echo "Data ada yang kosong, Silahkan tekan back untuk mengisi";
echo "<a href=index.php> Back</a>"; 
exit;
}
$sql="insert into bukutamu (nama,email,pesan) values ('$nama','$email','$pesan')"; 
if(!$query=mysql_query($sql))
echo mysql_error();
else
{
echo "";
header("location:index.php");
}
?>
</body>
</html>

