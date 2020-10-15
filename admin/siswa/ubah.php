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
$sis=query("SELECT * FROM siswa WHERE nisn=$id")[0];


if (isset($_POST["submit"])) {


	// cek
	if (ubah($_POST)>0) {
		# code...
		echo "<script>
		alert('data berhasil di ubah');
		document.location.href = 'siswa.php';
		</script>";
	}else{
		echo "<script>
		alert('data gagal di ubah');
		document.location.href = 'siswa.php';
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
  <a class="active" href="siswa.php">Siswa</a>
  <a href="../kelas/kelas.php">Kelas</a>
  <a href="../detailkelas/detail.php">Detail Kelas</a>
  <a href="../mengajar/mengajar.php">Mengajar</a>
  <a href="../logout.php">Logout</a>
</div>
<div class="content">
	<h1>Ubah data siswa</h1>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $sis["nisn"]; ?>">
		<ul>
			<li>
				<label for="nisn">nisn : </label>
				<input type="text" name="nisn" id="nisn" required value="<?= $sis["nisn"];  ?>">
			</li>
			<li>
				<label for="nama_siswa">nama_siswa : </label>
				<input type="text" name="nama_siswa" id="nama_siswa" required value="<?= $sis["nama_siswa"];  ?>">
			</li>
			<li>
				<label for="tanggal_lahir">tanggal_lahir : </label>
				<input type="text" name="tanggal_lahir" id="tanggal_lahir" required value="<?= date('d-m-Y',strtotime($sis["tanggal_lahir"]));  ?>">
			</li>
			<li>
				<label for="tempat_lahir">tempat_lahir : </label>
				<input type="text" name="tempat_lahir" id="tempat_lahir" required value="<?= $sis["tempat_lahir"];  ?>">
			</li>
			<li>
				<label for="jenis_kelamin">jenis_kelamin : </label>
				<input type="text" name="jenis_kelamin" id="jenis_kelamin" required value="<?= $sis["jenis_kelamin"];  ?>">
			</li>
			<li>
				<label for="alamat">alamat : </label>
				<input type="text" name="alamat" id="alamat" required value="<?= $sis["alamat"];  ?>">
			</li>
			<li>
				<label for="nama_ortu">nama_ortu : </label>
				<input type="text" name="nama_ortu" id="nama_ortu" required value="<?= $sis["nama_ortu"];  ?>">
			</li>
			<li>
				<label for="pekerjaan_ortu">pekerjaan_ortu : </label>
				<input type="text" name="pekerjaan_ortu" id="pekerjaan_ortu" required value="<?= $sis["pekerjaan_ortu"];  ?>">
			</li>
			<li><button type="submit" name="submit">Ubah Data</button></li>
		</ul>
	</form>
</div>
</body>
</html>