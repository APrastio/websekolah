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
		document.location.href = 'guru.php';
		</script>";
	}else{
		echo "<script>
		alert('data gagal');
		document.location.href = 'guru.php';
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
  <a class="active" href="guru.php">Guru</a>
  <a href="../alumni/alumni.php">Alumni</a>
  <a href="../siswa/siswa.php">Siswa</a>
  <a href="../kelas/kelas.php">Kelas</a>
  <a href="../detailkelas/detail.php">Detail Kelas</a>
  <a href="../mengajar/mengajar.php">Mengajar</a>
  <a href="../logout.php">Logout</a>
</div>
<div class="content">
	<h1>Tambah data guru</h1>
	<form action="" method="post" enctype="multipart/form-data">
		<ul>
			<li>
				<label for="nip">NIP : </label>
				<input type="text" name="nip" id="nip" required>
			</li>
			<li>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama" required>
			</li>
			<li>
				<label for="jenis">Jenis Kelamin : </label>
				<input type="text" name="jenis" id="jenis" required="">
			</li>
			<li>
				<label for="tempatlahir">Tempat Lahir : </label>
				<input type="text" name="tempatlahir" id="tempatlahir" required>
			</li>
			<li>
				<label for="tanggallahir">Tanggal Lahir : </label>
				<input type="text" name="tanggallahir" id="tanggallahir" required>
			</li>
			<li>
				<label for="ijazah">Ijazah : </label>
				<input type="text" name="ijazah" id="ijazah" required>
			</li>
			<li>
				<label for="mapel">Mata Pelajaran : </label>
				<input type="text" name="mapel" id="mapel" required>
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