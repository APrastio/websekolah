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
$aja=query("SELECT * FROM mengajar WHERE kdajar=$id")[0];


if (isset($_POST["submit"])) {


	// cek
	if (ubah($_POST)>0) {
		# code...
		echo "<script>
		alert('data berhasil di ubah');
		document.location.href = 'mengajar.php';
		</script>";
	}else{
		echo "<script>
		alert('data gagal di ubah');
		document.location.href = 'mengajar.php';
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
  <a href="../detailkelas/detail.php">Detail Kelas</a>
  <a class="active" href="mengajar.php">Mengajar</a>
  <a href="../logout.php">Logout</a>
</div>
<div class="content">
	<h1>Ubah data mengajar</h1>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $aja["kdajar"]; ?>">
		<ul>
			<li>
				<label for="nip">NIP : </label>
				<input type="text" name="nip" id="nip" required value="<?= $aja["nip"];  ?>">
			</li>
			<li>
				<label>Kelas : </label>
				<select name="kelas">
				<?php if($aja["id"]=='6'): ?>
					<option value="6" selected="">VII-1</option>
					<option value="7">VII-2</option>
					<option value="8">VIII-1</option>
					<option value="9">VIII-1</option>
					<option value="10">IX-1</option>
					<option value="12">IX-2</option>
				<?php elseif($aja["id"]=='7'): ?>
					<option value="6">VII-1</option>
					<option value="7" selected="">VII-2</option>
					<option value="8">VIII-1</option>
					<option value="9">VIII-2</option>
					<option value="10">IX-1</option>
					<option value="12">IX-2</option>
				<?php elseif($aja["id"]=='8'): ?>
					<option value="6">VII-1</option>
					<option value="7">VII-2</option>
					<option value="8"selected="">VIII-1</option>
					<option value="9">VIII-2</option>
					<option value="10">IX-1</option>
					<option value="12">IX-2</option>
				<?php elseif($aja["id"]=='9'): ?>
					<option value="6">VII-1</option>
					<option value="7">VII-2</option>
					<option value="8">VIII-1</option>
					<option value="9"selected="">VIII-2</option>
					<option value="10">IX-1</option>
					<option value="12">IX-2</option>
				<?php elseif($aja["id"]=='10'): ?>
					<option value="6">VII-1</option>
					<option value="7">VII-2</option>
					<option value="8">VIII-1</option>
					<option value="9">VIII-2</option>
					<option value="10" selected="">IX-1</option>
					<option value="12">IX-2</option>
				<?php elseif($aja["id"]=='12'): ?>
					<option value="6">VII-1</option>
					<option value="7">VII-2</option>
					<option value="8">VIII-1</option>
					<option value="9">VIII-2</option>
					<option value="10">IX-1</option>
					<option value="12" selected="">IX-2</option>
				<?php else: ?>
					<option value="6">VII-1</option>
					<option value="7">VII-2</option>
					<option value="8">VIII-1</option>
					<option value="9">VIII-2</option>
					<option value="10">IX</option>
					<option value="12">IX</option>
				<?php endif; ?>
				</select>
			</li>
			<li>
				<label for="jamajar">Jam Aajar : </label>
				<input type="text" name="jamajar" id="jamajar" value="<?= $aja["jamajar"];  ?>">
			</li>
			<li><button type="submit" name="submit">Ubah Data</button></li>
		</ul>
	</form>
</div>
</body>
</html>