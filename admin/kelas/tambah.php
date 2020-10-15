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
		document.location.href = 'kelas.php';
		</script>";
	}else{
		echo "<script>
		alert('data gagal');
		document.location.href = 'kelas.php';
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
  <a href="../alumni/alumni.php">Alumni</a>
  <a href="../siswa/siswa.php">Siswa</a>
  <a class="active" href="kelas.php">Kelas</a>
  <a href="../detailkelas/detail.php">Detail Kelas</a>
  <a href="../mengajar/mengajar.php">Mengajar</a>
  <a href="../logout.php">Logout</a>
</div>
<div class="content">
	<h1>Tambah data kelas</h1>
	<form action="" method="post" enctype="multipart/form-data">
		<ul>
			<li>
				<label for="nss">nss : </label>
				<input type="text" name="nss" id="nss" required value="201026602010">
			</li>
			<li>
				<label>Kelas : </label>
				<select name="kelas">
					<option value="VII-1">VII-1</option>
					<option value="VII-2">VII-2</option>
					<option value="VIII-1">VIII-1</option>
					<option value="VIII-2">VIII-2</option>
					<option value="IX-1">IX-1</option>
					<option value="IX-2">IX-2</option>
				</select>
			</li>
			<li>
				<label for="nama_sekolah">Nama Sekolah : </label>
				<input type="text" name="nama_sekolah" id="nama_sekolah" value="SMP NEGERI 1O DEPOK">
			</li>
			<li>
				<label for="jumlah_siswa">Jumlah Siswa : </label>
				<input type="text" name="jumlah_siswa" id="jumlah_siswa">
			</li>
			<li><button type="submit" name="submit">Tambah Data</button></li>
		</ul>
	</form>
</div>
</body>
</html>