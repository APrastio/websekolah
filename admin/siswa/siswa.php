<?php 
session_start();
if(!isset($_SESSION["login"])){
  header("Location: ../login.php");
  exit;
}
//require 'functions.php';
require 'functions.php';
$siswa= query("SELECT * FROM siswa");

// jika tombol cari di tekan
if (isset($_POST["cari"])) {
  $siswa= cari($_POST["keyword"]);

}
 
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Daftar Siswa</title>
  <link rel="stylesheet" type="text/css" href="../gaya.css">
</head>
<body>
 <!-- The sidebar -->
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

<!-- Page content -->
<div class="content">
  <h1>Daftar Siswa</h1>
  <a href="tambah.php">Tambah data siswa</a>
  <br><br>
  <form action="" method="post">
    <input type="text" name="keyword" size="40" autofocus placeholder="Masukan Keyword NISN/Nama siswa" autocomplete="off">
    <button type="submit" name="cari">cari</button>
  </form> <br>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No.</th>
      <th>Aksi</th> 
      <th>NISN</th>
      <th>Nama</th>
      <th>Tanggal Lahir</th>
      <th>Tempat Lahir</th>
      <th>Jenis Kelamin</th>
      <th>Alamat</th>
      <th>Nama Orang Tua</th>
      <th>Pekerjaan Orang Tua</th>
    </tr>
    <?php   $i=1; ?>
  <?php   foreach($siswa as $row): ?> 
    <tr>
      <td><?= $i; ?></td>
      <td>
        <a href="ubah.php?id=<?= $row["nisn"]  ?>">ubah</a> |
        <a href="hapus.php?id=<?= $row["nisn"]  ?>" onclick="return confirm('hapus data?')">hapus</a>
      </td>
      <td><?= $row["nisn"]; ?></td>
      <td><?= $row["nama_siswa"]; ?></td>
      <td><?= date('d-m-Y',strtotime($row["tanggal_lahir"])); ?></td>
      <td><?= $row["tempat_lahir"]; ?></td>
      <td><?= $row["jenis_kelamin"]; ?></td>
      <td><?= $row["alamat"]; ?></td>
      <td><?= $row["nama_ortu"]; ?></td>
      <td><?= $row["pekerjaan_ortu"]; ?></td>
    </tr>
    <?php   $i++; ?>
  <?php   endforeach; ?>
  </table>
</div> 
</body>
</html>