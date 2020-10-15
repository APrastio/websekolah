<?php 
session_start();
if(!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}
require 'functions.php';
$guru= query("SELECT * FROM guru ");

// jika tombol cari di tekan
if (isset($_POST["cari"])) {
	$guru= cari($_POST["keyword"]);

}
 
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Guru</title>
	<link rel="stylesheet" type="text/css" href="../gaya.css">
</head>
<body>
 <!-- The sidebar -->
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

<!-- Page content -->
<div class="content">
  <h1>Daftar Guru</h1>
  <a href="tambah.php">Tambah data guru</a>
  <br><br>
  <form action="" method="post">
    <input type="text" name="keyword" size="40" autofocus placeholder="Masukan Keyword NIP/Nama Guru" autocomplete="off">
    <button type="submit" name="cari">cari</button>
  </form> <br>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No.</th>
      <th>Aksi</th> 
      <th>NIP</th>
      <th>Nama</th>
      <th>Jenis Kelamin</th>
      <th>Tempat Lahir</th>
      <th>Tanggal Lahir</th>
      <th>Ijazah</th>
      <th>Mata Pelajaran</th>
    </tr>
    <?php   $i=1; ?>
  <?php   foreach($guru as $row): ?> 
    <tr>
      <td><?= $i; ?></td>
      <td>
        <a href="ubah.php?id=<?= $row["nip"]  ?>"">ubah</a> |
        <a href="hapus.php?id=<?= $row["nip"]  ?>" onclick="return confirm('hapus data?')">hapus</a>
      </td>
      <td><?= $row["nip"]; ?></td>
      <td><?= $row["nama_guru"]; ?></td>
      <td><?= $row["jenis_kelamin"]; ?></td>
      <td><?= $row["Tempat_lahir"]; ?></td>
      <td><?= date('d-m-Y',strtotime($row["tanggal_lahir"])); ?></td>
      <td><?= $row["ijazah"]; ?></td>
      <td><?= $row["mapel"]; ?></td>
    </tr>
    <?php   $i++; ?>
  <?php   endforeach; ?>
  </table>
</div> 
</body>
</html>