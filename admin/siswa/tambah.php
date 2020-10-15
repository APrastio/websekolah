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
		document.location.href = 'siswa.php';
		</script>";
	}else{
		echo "<script>
		alert('data gagal');
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
	<h1>Tambah data siswa</h1>
	<?php 
	if (isset($_GET['nopendaftaran'])){
	$nopendaftaran=$_GET["nopendaftaran"];
$pendaftar=query("SELECT * FROM daftar WHERE nopendaftaran=$nopendaftaran")[0];


	 ?>
		<form action="" method="post" enctype="multipart/form-data">
		<a href="pilih.php">PILIH DARI DATABASE PENDAFTARAN SISWA BARU</a>
		<ul>
			<li>
				<label for="nisn">NISN : </label>
				<input type="text" name="nisn" id="nisn" required value="<?= $pendaftar["nisn"]; ?>">
			</li>

			<li>
				<label for="nama_siswa">Nama Siswa : </label>
				<input type="text" name="nama_siswa" id="nama_siswa" required value="<?= $pendaftar["nama_pendaftar"]; ?>">
			</li>
			<li>
				<label for="tanggal_lahir">Tanggal Lahir : </label>
				<input type="text" name="tanggal_lahir" id="tanggal_lahir" required value="<?= date('d-m-Y',strtotime($pendaftar["tanggal_lahir"]));  ?>">
			</li>
			<li>
				<label for="tempat_lahir">Tempat Lahir : </label>
				<input type="text" name="tempat_lahir" id="tempat_lahir" required value="<?= $pendaftar["tempat_lahir"]; ?>">
			</li>
			<li>
				<label for="jenis_kelamin">Jenis Kelamin : </label>
				<input type="text" name="jenis_kelamin" id="jenis_kelamin" required value="<?= $pendaftar["jenis_kelamin"]; ?>">
			</li>
			<li>
				<label for="alamat">Alamat : </label>
				<input type="text" name="alamat" id="alamat" required value="<?= $pendaftar["alamat"]; ?>">
			</li>
			<li>
				<label for="nama_ortu">Nama Orangtua : </label>
				<input type="text" name="nama_ortu" id="nama_ortu" required value="<?= $pendaftar["nama_ortu"]; ?>">
			</li>
			<li>
				<label for="pekerjaan_ortu">Pekerjaan Orangtua : </label>
				<input type="text" name="pekerjaan_ortu" id="pekerjaan_ortu" required value="<?= $pendaftar["pekerjaan_ortu"]; ?>">
			</li>
			<li><button type="submit" name="submit">Tambah Data</button>
			</li>
		</ul>
	</form>
	<?php }else{ ?>
	<form action="" method="post" enctype="multipart/form-data">
		<a href="pilih.php">PILIH DARI DATABASE PENDAFTARAN SISWA BARU</a>
		<ul>
			<li>
				<label for="nisn">NISN : </label>
				<input type="text" name="nisn" id="nisn" required autofocus>
			</li>
			<li>
				<label for="nama_siswa">Nama : </label>
				<input type="text" name="nama_siswa" id="nama_siswa" required>
			</li>
			<li>
				<label for="tanggal_lahir">Tanggal Lahir : </label>
				<input type="text" name="tanggal_lahir" id="tanggal_lahir" required>
			</li>
			<li>
				<label for="tempat_lahir">Tempat Lahir : </label>
				<input type="text" name="tempat_lahir" id="tempat_lahir" required>
			</li>
			<li>
				<label for="jenis_kelamin">Jenis Kelamin : </label>
				<input type="text" name="jenis_kelamin" id="jenis_kelamin" required>
			</li>
			<li>
				<label for="alamat">Alamat : </label>
				<input type="text" name="alamat" id="alamat" required>
			</li>
			<li>
				<label for="nama_ortu">Nama Orangtua : </label>
				<input type="text" name="nama_ortu" id="nama_ortu" required>
			</li>
			<li>
				<label for="pekerjaan_ortu">Pekerjaan Orangtua : </label>
				<input type="text" name="pekerjaan_ortu" id="pekerjaan_ortu" required>
			</li>
			<li><button type="submit" name="submit">Tambah Data</button></li>
		</ul>
	</form>
<?php } ?>
</div>
</body>
</html>