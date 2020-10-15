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
$kl=query("SELECT * FROM kelas WHERE id=$id")[0];


if (isset($_POST["submit"])) {


	// cek
	if (ubah($_POST)>0) {
		# code...
		echo "<script>
		alert('data berhasil di ubah');
		document.location.href = 'kelas.php';
		</script>";
	}else{
		echo "<script>
		alert('data gagal di ubah');
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
	<h1>Ubah data kelas</h1>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $kl["id"]; ?>">
		<ul>
			<li>
				<label for="nss">nss : </label>
				<input type="text" name="nss" id="nss" required value="<?= $kl["nss"];  ?>">
			</li>
			<li>
				<label>Kelas : </label>
				<select name="kelas">
				<?php if($kl["kelas"]=='VII-1'): ?>
					<option value="VII-1" selected="">VII-1</option>
					<option value="VII-2">VII-2</option>
					<option value="VIII-1">VIII-1</option>
					<option value="VIII-2">VIII-2</option>
					<option value="IX-1">IX-1</option>
					<option value="IX-2">IX-2</option>
				<?php elseif($kl["kelas"]=='VII-2'): ?>
					<option value="VII-1">VII-1</option>
					<option value="VII-2" selected="">VII-2</option>
					<option value="VIII-1">VIII-1</option>
					<option value="VIII-2">VIII-2</option>
					<option value="IX-1">IX-1</option>
					<option value="IX-2">IX-2</option>
				<?php elseif($kl["kelas"]=='VIII-1'): ?>
					<option value="VII-1">VII-1</option>
					<option value="VII-2">VII-2</option>
					<option value="VIII-1"selected="">VIII-1</option>
					<option value="VIII-2">VIII-2</option>
					<option value="IX-1">IX-1</option>
					<option value="IX-2">IX-2</option>
				<?php elseif($kl["kelas"]=='VIII-2'): ?>
					<option value="VII-1">VII-1</option>
					<option value="VII-2">VII-2</option>
					<option value="VIII-1">VIII-1</option>
					<option value="VIII-2"selected="">VIII-2</option>
					<option value="IX-1">IX-1</option>
					<option value="IX-2">IX-2</option>
				<?php elseif($kl["kelas"]=='IX-1'): ?>
					<option value="VII-1">VII-1</option>
					<option value="VII-2">VII-2</option>
					<option value="VIII-1">VIII-1</option>
					<option value="VIII-2">VIII-2</option>
					<option value="IX-1" selected="">IX-1</option>
					<option value="IX-2">IX-2</option>
				<?php elseif($kl["kelas"]=='IX-2'): ?>
					<option value="VII-1">VII-1</option>
					<option value="VII-2">VII-2</option>
					<option value="VIII-1">VIII-1</option>
					<option value="VIII-2">VIII-2</option>
					<option value="IX-1">IX-1</option>
					<option value="IX-2" selected="">IX-2</option>
				<?php else: ?>
				<option value="VII-1">VII-1</option>
					<option value="VII-2">VII-2</option>
					<option value="VIII-1">VIII-1</option>
					<option value="VIII-2">VIII-2</option>
					<option value="IX-1">IX-1</option>
					<option value="IX-2">IX-2</option>
				<?php endif; ?>
				</select>
			</li>
			<li>
				<label for="nama_sekolah">Nama Sekolah : </label>
				<input type="text" name="nama_sekolah" id="nama_sekolah" value="<?= $kl["nama_sekolah"];  ?>">
			</li>
			<li>
				<label for="jumlah_siswa">jumlah_siswa : </label>
				<input type="text" name="jumlah_siswa" id="jumlah_siswa" required value="<?= $kl["jumlah_siswa"];  ?>">
			</li>
			<li><button type="submit" name="submit">Ubah Data</button></li>
		</ul>
	</form>
</div>
</body>
</html>