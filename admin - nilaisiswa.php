<!DOCTYPE html>
<html>
<head>
	<title>Administrator</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style_home.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
 <div id="wrapper">
<!-- 
Andi Prayetno
-->
<div class="content">
	<header>
		<h1 class="judul">Halaman Admin</h1>
	</header>

	<div class="menu">
	    <ul>
			
			<li><a href="biodata.php">Biodata Siswa</a></li>
			<li><a href="nilaisiswa.php">Nilai Siswa</a></li>
			
			
			
		</ul>
	</div>
<center>
	<div class="badan">
<form action="proses.php" method="post">
<strong>DATA NILAI SISWA</strong><br>
<pre>
Masukan NIS   :<input type="text" name="txtnis"><br>
Masukan Nama  :<input type="téxt" name="txtnama"><br>
Pilih Jurusan :<select name="cjurusan">
               <option>IPS</option>
               <option>IPA</option>
               <option>BAHASA</option></select><br>
Masukan Nilai :<input type="text" name="txtnilai"><br>
               <input type="submit" name="bhasil" value="Hasil"><input type="reset" name="bbatal" value="batal"><br>
</pre>
</center>

</div>
</div>
<center><p> Sistem informasi Siswa 2018 - 2019</p>
<center><a href="logout.php">[Logout]</a></center>
<p><b> Andi Prayetno - Maulana Ramadhani</b></center>

</body>
</html>
