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
$gr=query("SELECT * FROM guru WHERE nip=$id")[0];


if (isset($_POST["submit"])) {


	// cek
	if (ubah($_POST)>0) {
		# code...
		echo "<script>
		alert('data berhasil di ubah');
		document.location.href = 'guru.php';
		</script>";
	}else{
		echo "<script>
		alert('data gagal di ubah');
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
	<h1>Ubah data guru</h1>
	<form action="" method="post" enctype="multipart/form-data">
		
		<ul>
				<input type="hidden" name="id" id="id" required value="<?= $gr["nip"];  ?>">
			<li>
				<label for="nip">NIP : </label>
				<input type="text" name="nip" id="nip" required value="<?= $gr["nip"];  ?>">
			</li>
			<li>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama" required value="<?= $gr["nama_guru"];  ?>">
			</li>
			<li>
				<label for="jenis_kelamin">Jenis Kelamin : </label>
				<input type="text" name="jenis_kelamin" id="jenis_kelamin" value="<?= $gr["jenis_kelamin"];  ?>">
			</li>
			<li>
				<label for="Tempat_lahir">Tempat Lahir : </label>
				<input type="text" name="Tempat_lahir" id="Tempat_lahir" required value="<?= $gr["Tempat_lahir"];  ?>">
			</li>
			<li>
				<label for="tanggal_lahir">Tanggal Lahir : </label>
				<input type="text" name="tanggal_lahir" id="tanggal_lahir" required value="<?= date('d-m-Y',strtotime($gr["tanggal_lahir"]));  ?>">
			</li>
			<li>
				<label for="ijazah">Ijazah : </label>
				<input type="text" name="ijazah" id="ijazah" required value="<?= $gr["ijazah"];  ?>">
			</li>
			<li>
				<label for="mapel">Mata Pelajaran : </label>
				<input type="text" name="mapel" id="mapel" required value="<?= $gr["mapel"];  ?>">
			</li>
			<li><button type="submit" name="submit">Ubah Data</button></li>
		</ul>
	</form>
</div>
</body>
</html>