<?php 
session_start();
if(!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}
require 'function.php';
 
 $nopendaftaran=$_GET["nopendaftaran"];
$pendaftar= query("SELECT * from daftar WHERE nopendaftaran=$nopendaftaran")[0];

if (isset($_POST["terima"])) {


  // cek
  if (terima($_POST)>0) {
    # code...
    echo "<script>
    alert('data berhasil di ubah');
    document.location.href = 'index.php';
    </script>";
  }else{
    echo "<script>
    alert('data gagal gagal di ubah');
    document.location.href = 'index.php';
    </script>";
  }
}elseif(isset($_POST['tolak'])){
   if (tolak($_POST)>0) {
    # code...
    echo "<script>
    alert('data berhasil di ubah');
    document.location.href = 'index.php';
    </script>";
  }else{
    echo "<script>
    alert('data gagal gagal di ubah');
    document.location.href = 'index.php';
    </script>";
  }
}

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
<form action="" method="post" enctype="multipart/form-data">
    
    <ul>
        <li><a href="index.php">Kembali</a></li><br>
      <li>
        <label >No.Pendaftaran : <?=$pendaftar["nopendaftaran"];  ?></label> 
        <input type="hidden" name="nopendaftaran" id="id" required value="<?= $pendaftar["nopendaftaran"];  ?>">
      </li>
      <li>
        <label>Nama Lengkap : <?=$pendaftar["nama_pendaftar"];  ?></label>
      </li>
      <li>
        <label>Jenis Kelamin : <?=$pendaftar["jenis_kelamin"];  ?></label>
      </li>
      <li>
        <label>NISN : <?=$pendaftar["nisn"];  ?></label>

      </li>
      <li>
        <label>Tempat Lahir : <?=$pendaftar["tempat_lahir"];  ?></label>
      </li>
      <li>
        <label>tanggal Lahir : <?= date('d-m-Y',strtotime($pendaftar["tanggal_lahir"]));  ?></label>
      </li>
      <li>
        <label>Alamat : <?=$pendaftar["alamat"];  ?></label>
      </li>
      <li>
        <label>NO.Telephone : <?=$pendaftar["tlp"];  ?></label>
      </li>
      <li>
        <label>Nama Orangtua : <?=$pendaftar["nama_ortu"];  ?></label>
      </li>
      <li>
        <label>Pekerjaan Orangtua : <?=$pendaftar["pekerjaan_ortu"];  ?></label>
      </li>
      <li>
        <label>NUN : <?=$pendaftar["nun"];  ?></label>
      </li>
      <li><input type="hidden" name="accept" value="DITERIMA">
        <input type="hidden" name="denied" value="DITOLAK"></li>
      <li><label>Ijazah : </label></li>
      <li>
        <img src="../user/img/<?= $pendaftar["ijazah"]?>">
      </li>
      <li><label>Akte Kelahiran : </label></li>
      <li>
        <img src="../user/img/<?= $pendaftar["akte"]?>">
      </li>
      <li><button type="submit" name="terima">Terima</button>
        <button type="submit" name="tolak">Tolak</button></li>
    </ul>
    <br><br>
  </form>
</div> 
 	</div>
 </body>
 </html>