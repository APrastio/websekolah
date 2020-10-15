<?php 
session_start();
if(!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}
 require '../koneksi.php';
$pendaftar= query("SELECT * from daftar WHERE status='menunggu'");
$total= count($pendaftar);

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Halaman Admin</title>
 	<link rel="stylesheet" type="text/css" href="gaya.css">
 </head>
 <body>
 	<div main-conten>
 		 <!-- The sidebar -->
<div class="sidebar">
  <a class="active" href="index.php">Home</a>
  <a href="guru/guru.php">Guru</a>
  <a href="alumni/alumni.php">Alumni</a>
  <a href="siswa/siswa.php">Siswa</a>
  <a href="kelas/kelas.php">Kelas</a>
  <a href="detailkelas/detail.php">Detail Kelas</a>
  <a href="mengajar/mengajar.php">Mengajar</a>
  <a href="logout.php">Logout</a>
</div>

<!-- Page content -->
<div class="content">
<h1>selamat datang di halam admin</h1>
<p>jumlah pendaftar = <?= $total;  ?> </p>
<?php if($total>0): ?>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No.</th>
      <th>Aksi</th> 
      <th>No Pendaftaran</th>
      <th>Nama</th>
      <th>Asal Sekolah</th>
    </tr>
    <?php   $i=1; ?>
  <?php   foreach($pendaftar as $row): ?> 
    <tr>
      <td><?= $i; ?></td>
      <td>
        <a href="rincian.php?nopendaftaran=<?= $row["nopendaftaran"]  ?>"">Rincian</a>
      </td>
      <td><?= $row["nopendaftaran"]; ?></td>
      <td><?= $row["nama_pendaftar"]; ?></td>
      <td><?= $row["asal_sekolah"]; ?></td>
    </tr>
    <?php   $i++; ?>
  <?php   endforeach; ?>
  </table>
  <?php else: ?>
    <p>TIDAK ADA PENDAFTAR BARU</p>
<?php endif; ?>
</div> 
 	</div>
 </body>
 </html>