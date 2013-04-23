<?php
session_start();
include "koneksi.php";
$userid = $_POST['id'];
$password = MD5($_POST['pwd']);
$op = $_GET['op'];

if($op=="in"){
    $cek = mysql_query("SELECT * FROM admin WHERE username='$userid' AND password='$password'");
    if(mysql_num_rows($cek)==1){//jika berhasil akan bernilai 1
        $c = mysql_fetch_array($cek);
        $_SESSION['userid'] = $c['nama'];
		$_SESSION['level'] = $c['level'];
        header("location:up.php");
    }else{
        header("location:up.php");
    }
}else if($op=="out"){
    unset($_SESSION['userid']);
    header("location:index.php");
}
?>
