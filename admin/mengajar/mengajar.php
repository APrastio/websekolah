<?php 
session_start();
if(!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}
require 'functions.php';
// $ajar= query("SELECT * FROM mengajar ");
$ajar= query("SELECT mengajar.kdajar,mengajar.jamajar,guru.nama_guru,guru.nip,kelas.kelas FROM mengajar INNER JOIN guru ON guru.nip=mengajar.nip INNER JOIN kelas ON kelas.id = mengajar.id ORDER BY kdajar ASC");
// jika tombol cari di tekan

if (isset($_POST['cari'])) {
  # code...
  $ajar=cari($_POST['keyword']);
}
 
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mengajar</title>
	<link rel="stylesheet" type="text/css" href="../gaya.css">
</head>
<body>
 <!-- The sidebar -->
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

<!-- Page content -->
<div class="content">
  <h1>Daftar Mengajar</h1>
  <a href="tambah.php">Tambah data mengajar</a>
  <br><br>
  <form action="" method="post">
    <input type="text" name="keyword" size="40" autofocus placeholder="Masukan Keyword Pencarian NIP/Kelas" autocomplete="off">
    <button type="submit" name="cari">cari</button>
  </form> <br>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No.</th>
      <th>Aksi</th> 
      <th>Kode Ajar</th>
      <th>NIP</th>
      <th>Nama Guru</th>
      <th>Kelas</th>
      <th>Jam Ajar</th>
    </tr>
    <?php   $i=1; ?>
  <?php   foreach($ajar as $row): ?> 
    <tr>
      <td><?= $i; ?></td>
      <td>
        <a href="ubah.php?id=<?= $row["kdajar"]  ?>"">ubah</a> |
        <a href="hapus.php?id=<?= $row["kdajar"]  ?>" onclick="return confirm('hapus data?')">hapus</a>
      </td>
      <td><?= $row["kdajar"]; ?></td>
      <td><?= $row["nip"]; ?></td>
      <td><?= $row["nama_guru"]; ?></td>
      <td><?= $row["kelas"]; ?></td>
      <td><?= $row["jamajar"]; ?></td>
    </tr>
    <?php   $i++; ?>
  <?php   endforeach; ?>
  </table>
</div> 
</body>
</html>