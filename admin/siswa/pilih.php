<?php 
session_start();
if(!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}
require 'functions.php';
$pendaftar= query("SELECT * FROM daftar WHERE status='DITERIMA'");
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
	<form>
		<table border="1" cellpadding="10" cellspacing="0">
			<tr>
				<th>NO</th>
				<th>PILIH</th>
				<th>NISN</th>
				<th>Nama</th>
				<th>Asal Sekolah</th>
			</tr>
			<?php   $i=1; ?>
  <?php   foreach($pendaftar as $row): ?> 
    <tr>
      <td><?= $i; ?></td>
      <td>
      <a href="tambah.php?nopendaftaran=<?= $row["nopendaftaran"]  ?>"">PILIH</a> 
      </td>
      <td><?= $row["nisn"]; ?></td>
      <td><?= $row["nama_pendaftar"]; ?></td>
      <td><?= $row["asal_sekolah"]; ?></td>
    </tr>
    </tr>
    <?php   $i++; ?>
  <?php   endforeach; ?>
		</table>

	</form>
</div>
</body>
</html>