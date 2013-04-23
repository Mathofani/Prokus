<?
//konfigurasi
ini_set('display_errors',FALSE);
$host="localhost";
$user="root";
$pass="";
$db="gita savana";

//koneksi 
$koneksi=mysql_connect($host,$user,$pass);
mysql_select_db($db,$koneksi);
$tanggal=date("Y-m-d");

//cek
if ($koneksi)
{
	//echo "berhasil : )";
}else{
	?><script language="javascript">alert("Gagal Koneksi Database MySql !!")</script><?
}

?>
