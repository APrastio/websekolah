<?php 

//koneksi ke databse
require '../../koneksi.php';
function tambah($data)
	{
		global $conn;
			//ambil data dari tiap elemn
	$nip = htmlspecialchars($data["nip"]);
	$kelas = htmlspecialchars($data["kelas"]);
	$jamajar = htmlspecialchars($data["jamajar"]);

	$query="INSERT INTO mengajar
	VALUES 
	('','$nip','$kelas','$jamajar')";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
	}




function hapus($id){
	global $conn;
	mysqli_query($conn,"DELETE FROM mengajar WHERE kdajar =$id");
	return mysqli_affected_rows($conn);
}

function ubah($data){
	global $conn;
			//ambil data dari tiap elemn
	$id=$data["id"];
	$nip = htmlspecialchars($data["nip"]);
	$kelas = htmlspecialchars($data["kelas"]);
	$jamajar = htmlspecialchars($data["jamajar"]);
	

	$query="UPDATE mengajar
	SET 
	nip='$nip',
	id='$kelas',
	jamajar='$jamajar'
	WHERE kdajar='$id'";
	
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
}

function cari($keyword){
	$query="SELECT mengajar.kdajar,mengajar.jamajar,guru.nama_guru,guru.nip,kelas.kelas 
	FROM mengajar 
	INNER JOIN guru ON guru.nip=mengajar.nip 
	INNER JOIN kelas ON kelas.id = mengajar.id 
	WHERE mengajar.nip 
	LIKE '%$keyword%' OR kelas.kelas 
	LIKE '%$keyword%'";
	// $query="SELECT * FROM mengajar 
	// WHERE 
	// nip LIKE '%$keyword%'
	// ";
	return query($query);
}




 ?>
