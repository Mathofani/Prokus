         <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<link href="css/style2.css" rel="stylesheet" type="text/css" />
	<link href="8/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="8/js-image-slider.js" type="text/javascript"></script>
	<script src="jquery-1.7.2.minjs" type="text/javascript"></script>
	
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
						<li><a href="">Pengurus</a></li>
						<li><a href="profil.html">Kegitasavanaan</a></li>
						<li><a href="#">Anggota</a></li>
						<li><a href="#">Alumni</a></li>
						<li><a href="#">Prestasi</a></li>
					</ul>
				</li>
				<li><a href="#">Download</a></li>
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
	<div id="menu_home_login">
		<form method='post' action='log.php?op=in'>
			<table align='center'>
				<tr>
					<td><input type='text' name='id' id='textfield' placeholder='username' autocomplete='off'></td>
				</tr>
				<tr>
					<td><input type='password' name='pwd' id='textfield' placeholder='password'></td>
				</tr>
				<tr>
					<td align='right'><input type='submit' name='submit' value='Login' id='button'></td>
				</tr>
			</table>
		</form>
	</div>
								
								
								

							
	<div id="menu_home_fotter">
		Copyright©Gita_Savana|2013
	</div>
</div>
</body>

</html>         