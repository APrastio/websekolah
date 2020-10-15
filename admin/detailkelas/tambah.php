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
		document.location.href = 'detail.php';
		</script>";
	}else{
		echo "<script>
		alert('data gagal');
		document.location.href = 'detail.php';
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
  <a href="../kelas/kelas.php">Kelas</a>
  <a class="active" href="detail.php">Detail Kelas</a>
  <a href="../mengajar/mengajar.php">Mengajar</a>
  <a href="../logout.php">Logout</a>
</div>
<div class="content">
	<h1>Tambah data siswa</h1>
	<form action="" method="post" enctype="multipart/form-data">
		<ul>
			<li>
				<label for="nisn">nisn : </label>
				<input type="text" name="nisn" id="nisn" required autofocus>
			</li>
			<li>
				<label>Kelas : </label>
				<select name="kelas">
					<option value="6">VII-1</option>
					<option value="7">VII-2</option>
					<option value="8">VIII-1</option>
					<option value="9">VIII-2</option>
					<option value="10">IX-1</option>
					<option selected value="12">IX-2</option>
				</select>
			</li>
			<li><button type="submit" name="submit">Tambah Data</button></li>
		</ul>
	</form>
</div>
</body>
</html>