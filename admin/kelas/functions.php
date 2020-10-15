<?php 

//koneksi ke databse
require '../../koneksi.php';
function tambah($data)
	{
		global $conn;
			//ambil data dari tiap elemn
	$nss = htmlspecialchars($data["nss"]);
	$kelas = htmlspecialchars($data["kelas"]);
	$nama_sekolah = htmlspecialchars($data["nama_sekolah"]);
	$jumlah_siswa = htmlspecialchars($data["jumlah_siswa"]);

	$query="INSERT INTO kelas
	VALUES 
	('','$nss','$kelas','$nama_sekolah','$jumlah_siswa')";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
	}
function hapus($id){
	global $conn;
	mysqli_query($conn,"DELETE FROM kelas WHERE id =$id");
	return mysqli_affected_rows($conn);
}
function ubah($data){
	global $conn;
			//ambil data dari tiap elemn
	$id=$data["id"];
	$nss = htmlspecialchars($data["nss"]);
	$kelas = htmlspecialchars($data["kelas"]);
	$nama_sekolah = htmlspecialchars($data["nama_sekolah"]);
	$jumlah_siswa = htmlspecialchars($data["jumlah_siswa"]);
	$query="UPDATE kelas
	SET 
	nss='$nss',
	kelas='$kelas',
	nama_sekolah='$nama_sekolah',
	jumlah_siswa = '$jumlah_siswa'
	WHERE id='$id'";
	
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
}

function cari($keyword){
	$query="SELECT * FROM kelas 
	WHERE 
	kelas LIKE '%$keyword%'

	";
	return query($query);
}




 ?>
