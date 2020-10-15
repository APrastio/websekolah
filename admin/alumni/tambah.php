<?php 
session_start();
if(!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}
require 'functions.php';
if (isset($_POST["submit"])) {
	

	// cek
	if (tambah($_POST)>0) {
		# code...
		echo "<script>
		alert('data berhasil');
		document.location.href = 'alumni.php';
		</script>";
	}else{
		echo "<script>
		alert('data gagal');
		document.location.href = 'alumni.php';
		</script>";
	}
	
	
	
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../gaya.css">
</head>
<body>
	<div class="sidebar">
 <a href="../index.php">Home</a>
  <a href="../guru/guru.php">Guru</a>
  <a class="active" href="alumni.php">Alumni</a>
  <a href="../siswa/siswa.php">Siswa</a>
  <a href="../kelas/kelas.php">Kelas</a>
  <a href="../detailkelas/detail.php">Detail Kelas</a>
  <a href="../mengajar/mengajar.php">Mengajar</a>
  <a href="../logout.php">Logout</a>
</div>
<div class="content">
	<h1>Tambah data alumni</h1>
	<form action="" method="post" enctype="multipart/form-data">
		<ul>
			<li>
				<label for="nisn">NISN : </label>
				<input type="text" name="nisn" id="nisn" required autofocus>
			</li>
			<li>
				<label for="nama_alumni">Nama : </label>
				<input type="text" name="nama_alumni" id="nama_alumni" required>
			</li>
			<li>
				<label for="jenis_kelamin">Jenis Kelamin : </label>
				<input type="text" name="jenis_kelamin" id="jenis_kelamin" required>
			</li>
			<li>
				<label for="tempat_lahir">Tempat Lahir : </label>
				<input type="text" name="tempat_lahir" id="tempat_lahir" required>
			</li>
			<li>
				<label for="tanggal_lahir">Tanggal Lahir : </label>
				<input type="text" name="tanggal_lahir" id="tanggal_lahir" required>
			</li>
			<li>
				<label for="alamat">Alamat : </label>
				<input type="text" name="alamat" id="alamat" required>
			</li>
			<li>
				<label for="nama_ortu">Nama Ortu : </label>
				<input type="text" name="nama_ortu" id="nama_ortu" required>
			</li>
			<!-- <li>
				<label for="gambar">Gambar : </label>
				<input type="file" name="gambar" id="gambar">
			</li> -->
			<li><button type="submit" name="submit">Tambah Data</button></li>
		</ul>
	</form>
</div> 
	
</body>
</html>