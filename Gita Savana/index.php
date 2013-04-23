         <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<title>Website Gita Savana</title>

<head>
	<link href="css/style2.css" rel="stylesheet" type="text/css" />
	<link href="8/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="8/js-image-slider.js" type="text/javascript"></script>
	<script src="jquery-1.7.2.minjs" type="text/javascript"></script>
	
	<link rel="shortcut icon" href="logo.jpg" type="image/x-icon">
	<script type="text/javascript">
	$(document).ready(function(){ 
	
	$("#nav ul.child").removeClass("child");
	
	$("#nav li").has("ul").hover(function(){
		$(this).addClass("current").children("ul").fadeIn();
	}, function() {
		$(this).removeClass("current").children("ul").hide();
	});
		
	});
	</script>
	
</head>

<body>
<div id="sliderFrame">
        <div id="slider">
            <a href="#" target="_blank">
                <img src="images/banner/konser.jpg" alt="Konser Produksi 2012" />
				 
            </a>
			<?php
				include("koneksi.php");
				$query=mysql_query("SELECT * FROM opsi WHERE nama_option='banner'");
				while ($data=mysql_fetch_array($query)){
				echo "<img src='images/banner/".$data['image_option']."'alt='".$data['deskripsi_option']."'/>";
				}
			?>
        </div>
</div>

<ul id="nav">
            	<li><a href="daftar.php">Admin</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="#">About</a>
					<ul class="child">
						<li><a href="pengurus.html">Pengurus</a></li>
						<li><a href="profil.html">Kegitasavanaan</a></li>
						<li><a href="#">Anggota</a></li>
						<li><a href="#">Alumni</a></li>
						<li><a href="prestasi.html">Prestasi</a></li>
					</ul>
				</li>
				<li><a href="download.php">Download</a></li>
                <li><a href="index.php">Home</a></li>
</ul>

<div id="home_container">

	<div id="menu_home_green">

		<div id="menu_home_container_green">
		<img src='images/flag-icon-inspire.png'>
		<label>INFORMATION</label>
		</div>
		<div id="menu_container">
		<?php
				include("koneksi.php");
				$query=mysql_query("SELECT * FROM opsi WHERE nama_option='information'");
				while ($data=mysql_fetch_array($query)){
				echo $data['deskripsi_option'];
				}
		?>
		</div>

	</div>

	<div id="menu_home_turquoise">

		<div id="menu_home_container_turquoise">
			<img src='images/flag-icon-share.png'>
			<label>PROFILE</label>
		</div>
		<div id="menu_container">
		<?php
				include("koneksi.php");
				$query=mysql_query("SELECT * FROM opsi WHERE nama_option='profile'");
				while ($data=mysql_fetch_array($query)){
				echo $data['deskripsi_option'];
				}
		?>
		</div>
	
	</div>
	
	</div> 
								
								
								
<script language="JavaScript" type="text/JavaScript"> 
function formCheck() {
	var passed = false;
	
	passed = false;
		
				
		if (document.gbook.nama.value == "") {
				alert("Silahkan isikan Nama Anda");
				document.gbook.nama.focus();
			}
					
			
		else if ( !/\w{1,}\@.{1,}\.\w{2,}/.test(document.gbook.email.value) ) {
				alert("Silahkan isikan Email Anda / Email anda tidak valid (contoh: name@domain.com)");
				document.gbook.email.focus();
			}
			
				
			
		else if (document.gbook.HP.value == "") {
				alert("Silahkan isikan Phone Anda");
				document.gbook.HP.focus();
			}
			
				
		
				
				
			
		else if (document.gbook.kota.value == "") {
				alert("Silahkan isikan Kota Anda");
				document.gbook.kota.focus();
			}
			
				
				
				
			
		else if (document.gbook.pesan.value == "") {
				alert("Silahkan isikan Massage Anda");
				document.gbook.pesan.focus();
			}
			
				
			else {
				passed = true;
			}
		
		return passed;
}
</script> 
<div class="content"> 
			<!-- start content --> 
			<br><br><br>
			<h1>Buku Tamu</h1> 
			
			<div class="list"> 
	<ul> 
		<li class="top"></li> 
		<li> 
 
    <form name="gbook" id="gbook" onSubmit="return formCheck()" action="input.php" method="post"> 
    <table class="gbTbl" cellpadding="0" cellspacing="7" align="center"> 
    
		<tr> 
			<td>Nama</td> 
			<td><input name="nama" type="text" size="32" class="gbText"></td> 
		</tr>
		<tr>
			<td>Email</td> 
			<td><input name="email" type="text" size="32" class="gbText"></td> 
		</tr>	
		<tr> 
			<td>Telp</td> 
			<td><input name="HP" type="text" size="32" class="gbText"></td> 
        </tr>	
		<tr> 
			<td width="23%" class="form" valign="top">kota</td> 
			<td width="77%" class="form" valign="top"> 
			<input name="kota" type="text" size="32" class="gbText"></td> 
        </tr>		
		<tr> 
			<td width="23%" class="form" valign="top">pesan</td> 
			<td width="77%" class="form" valign="top"> 
			<textarea rows="4" cols="40" name="pesan" cols="20" class="gbTextarea"></textarea></td> 
        </tr> 
 		
		<tr> 
			<td width="23%" class="form">&nbsp;</td> 
			<td width="77%" class="form"> 
			<input type="submit" value="Kirim" name="submit"  class="gbBtn"> 
        <input type="reset" value="Batal" name="reset"  class="gbBtn"</td> 
      </tr> 
	</table> 
			<p> 
				<i>Anda dapat ikut serta dalam guestbook kami dengan mengisi form </i>
			</p> 
    </form> 
		
		</li> 
		<li class="bottom"></li> 
	</ul> 
</div>  
			<h2>Baca Bukutamu</h2> 
			<?php
				include "koneksi1.php";
				$sql="select nama,email,pesan from bukutamu order by no desc limit 5"; //order by desc digunakan untuk view descending, limit 5 digunakan untuk membatasi jumlah view komentar yang diambil didalam database
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
</div> 
<div class="pageNav"> 
				<p class="first"><a  href=/index.php?action=guestbook.main&page=1>1</a> <a  href=/index.php?action=guestbook.main&page=2>2</a><a  href=/index.php?action=guestbook.main&page=3>3</a><a	href=/index.php?action=guestbook.main&page=2>next</a></p>
			
							
</div> 					
<div id="menu_home_fotter">
Copyright©Gita_Savana|2013
</div>
</div>
</body>

</html>         