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
<body>
<?php
$Nis=$_POST['NIS'];
$Nama=$_POST['Nama'];
$NILAI=$_POST['NILAI'];
$Tahun=$_POST['Tahun'];
$Bulan=$_POST['Bulan'];
$jurusan=$_POST['jurusan'];
$Tempat=$_POST['Tempat'];
$Tgl=$_POST['Tgl'];
$Bln=$_POST['Bln'];
$Thn=$_POST['Thn'];
$JK=$_POST['JK'];
$alamat=$_POST['alamat'];

echo "NIS      : $Nis<br>";
echo "Nama     : $Nama<br>";
echo "NILAI      : $NILAI<br>";
echo "Lama Study    : $Tahun Tahun $Bulan Bulan<br>";
echo "Jurusan  : $jurusan<br>";
echo "Tempat dan Tanggal Lahir : $Tempat, $Tgl/$Bln/$Thn<br>";
echo "Jenis Kelamin : $JK<br>";
echo "Alamat : $alamat<br>";
?>

<center><p> Sistem informasi Siswa 2018 - 2019</p>
<center><a href="logout.php">[Logout]</a></center>
<p><b> Andi Prayetno - Maulana Ramadhani</b></center>
</body>
</html>