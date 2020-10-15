<?php 
session_start();
if(!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}
//require 'functions.php';
require 'functions.php';
$kelas= query("SELECT * FROM kelas ");

// jika tombol cari di tekan

if (isset($_POST['cari'])) {
  # code...
  $kelas=cari($_POST['keyword']);
}
 
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar kelas</title>
	<link rel="stylesheet" type="text/css" href="../gaya.css">
</head>
<body>
 <!-- The sidebar -->
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

<!-- Page content -->
<div class="content">
  <h1>Daftar kelas</h1>
  <a href="tambah.php">Tambah data kelas</a>
  <br><br>
  <form action="" method="post">
    <input type="text" name="keyword" size="40" autofocus placeholder="Masukan Keyword Pencarian Kelas" autocomplete="off">
    <button type="submit" name="cari">cari</button>
  </form> <br>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No.</th>
      <th>Aksi</th> 
      <th>NSS</th>
      <th>ID Kelas</th>
      <th>Kelas</th>
      <th>Nama Sekolah</th>
      <th>Jumlah Siswa</th>
    </tr>
    <?php   $i=1; ?>
  <?php   foreach($kelas as $row): ?> 
    <tr>
      <td><?= $i; ?></td>
      <td>
        <a href="ubah.php?id=<?= $row["id"]  ?>"">ubah</a> |
        <a href="hapus.php?id=<?= $row["id"]  ?>" onclick="return confirm('hapus data?')">hapus</a>
      </td>
      <td><?= $row["nss"]; ?></td>
      <td><?= $row["id"]; ?></td>
      <td><?= $row["kelas"]; ?></td>
      <td><?= $row["nama_sekolah"]; ?></td>
      <td><?= $row["jumlah_siswa"]; ?></td>
    </tr>
    <?php   $i++; ?>
  <?php   endforeach; ?>
  </table>
</div> 
</body>
</html>