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
$dl=query("SELECT * FROM detailkelas WHERE nisn=$id")[0];


if (isset($_POST["submit"])) {


	// cek
	if (ubah($_POST)>0) {
		# code...
		echo "<script>
		alert('data berhasil di ubah');
		document.location.href = 'detail.php';
		</script>";
	}else{
		echo "<script>
		alert('data gagal di ubah');
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
	<h1>Ubah data siswa</h1>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $dl["nisn"]; ?>">

		<ul>
			<li>
				<label for="nisn">nisn : </label>
				<input type="text" name="nisn" id="nisn" required value="<?= $dl["nisn"];  ?>">
			</li>
			<li>
				<label>Kelas : </label>
				<select name="kelas">
				<?php if($dl["id"]=='6'): ?>
					<option value="6" selected="">VII-1</option>
					<option value="7">VII-2</option>
					<option value="8">VIII-1</option>
					<option value="9">VIII-1</option>
					<option value="10">IX-1</option>
					<option value="12">IX-2</option>
				<?php elseif($dl["id"]=='7'): ?>
					<option value="6">VII-1</option>
					<option value="7" selected="">VII-2</option>
					<option value="8">VIII-1</option>
					<option value="9">VIII-2</option>
					<option value="10">IX-1</option>
					<option value="12">IX-2</option>
				<?php elseif($dl["id"]=='8'): ?>
					<option value="6">VII-1</option>
					<option value="7">VII-2</option>
					<option value="8"selected="">VIII-1</option>
					<option value="9">VIII-2</option>
					<option value="10">IX-1</option>
					<option value="12">IX-2</option>
				<?php elseif($dl["id"]=='9'): ?>
					<option value="6">VII-1</option>
					<option value="7">VII-2</option>
					<option value="8">VIII-1</option>
					<option value="9"selected="">VIII-2</option>
					<option value="10">IX-1</option>
					<option value="12">IX-2</option>
				<?php elseif($dl["id"]=='10'): ?>
					<option value="6">VII-1</option>
					<option value="7">VII-2</option>
					<option value="8">VIII-1</option>
					<option value="9">VIII-2</option>
					<option value="10" selected="">IX-1</option>
					<option value="12">IX-2</option>
				<?php elseif($dl["id"]=='12'): ?>
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
			<li><button type="submit" name="submit">Ubah Data</button></li>
		</ul>
	</form>
</div>
</body>
</html>