<!DOCTYPE html>
<html>
<head>
	<title>Data Nilai Siswa</title>
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
		<h1 class="judul">Hasil Nilai Anda</h1>
	</header>


	<div class="badan">
<center>
<strong>Data Nilai Siswa</strong><br>
------------------------------------<br>
<?php
$nis=$_POST['txtnis'];
$nama=$_POST['txtnama'];
$jurusan=$_POST['cjurusan'];
$nilai=$_POST['txtnilai'];

if($jurusan=="IPS") { $jrs="IPS"; }
elseif($jurusan=="IPA") { $jrs="IPA"; }
else { $jrs="Bahasa"; }

if($nilai>=65) { $ket="Lulus";}
else { $ket="Gagal"; }
echo"<pre>";
echo"NIS         : $nis <br>";
echo"Nama        : $nama <br>";
echo"Jurusan     : $jurusan <br>";
echo"Nilai       : $nilai <br>";
echo"Keterangan  : $ket <br>";
echo"---------------------------<br>";
echo"<td align='center'><a href='nilaisiswa.php'>Kembali ke awal</td>";
echo"</pre>";
?>
<a href="nilaisiswa.php"> 
    <button onClick="window.print();">Print</button> 
    </a>

</div>
</div>
</center>
<center><p> Sistem informasi Siswa 2018 - 2019</p>
<p><b> Andi Prayetno - Maulana Ramadhani</b></center>

</body>
</html>