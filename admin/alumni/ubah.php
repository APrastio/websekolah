<?php 
session_start();
if(!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}
require 'functions.php';
//ambil data di url
$id=$_GET["id"];
//query data mahasiswa
$al=query("SELECT * FROM alumni WHERE nisn=$id")[0];


if (isset($_POST["submit"])) {


	// cek
	if (ubah($_POST)>0) {
		# code...
		echo "<script>
		alert('data berhasil di ubah');
		document.location.href = 'alumni.php';
		</script>";
	}else{
		echo "<script>
		alert('data gagal di ubah');
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
	<h1>Ubah data alumni</h1>
	<form action="" method="post" enctype="multipart/form-data">
		
		<ul>
				<input type="hidden" name="id" id="id" required value="<?= $al["nisn"];  ?>">
			<li>
				<label for="nisn">NISN : </label>
				<input type="text" name="nisn" id="nisn" required value="<?= $al["nisn"];  ?>">
			</li>
			<li>
				<label for="nama_alumni">Nama Alumni : </label>
				<input type="text" name="nama_alumni" id="nama_alumni" required value="<?= $al["nama_alumni"];  ?>">
			</li>
			<li>
				<label for="jenis_kelamin">Jenis Kelamin : </label>
				<input type="text" name="jenis_kelamin" id="jenis_kelamin" value="<?= $al["jenis_kelamin"];  ?>">
			</li>
			<li>
				<label for="tempat_lahir">Tempat Lahir : </label>
				<input type="text" name="tempat_lahir" id="tempat_lahir" required value="<?= $al["tempat_lahir"];  ?>">
			</li>
			<li>
				<label for="tanggal_lahir">Tanggal Lahir : </label>
				<input type="text" name="tanggal_lahir" id="tanggal_lahir" required value="<?= date('d-m-Y',strtotime($al["tanggal_lahir"]));  ?>">
			</li>
			<li>
				<label for="alamat">Alamat : </label>
				<input type="text" name="alamat" id="alamat" required value="<?= $al["alamat"];  ?>">
			</li>
			<li>
				<label for="nama_ortu">Nama Ortu : </label>
				<input type="text" name="nama_ortu" id="nama_ortu" required value="<?= $al["nama_ortu"];  ?>">
			</li>
			<li><button type="submit" name="submit">Ubah Data</button></li>
		</ul>
	</form>
</div>
</body>
</html>