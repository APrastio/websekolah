<?php 

//koneksi ke databse
require '../../koneksi.php';

function tambah($data)
	{
		global $conn;
			//ambil data dari tiap elemn
	$nisn = htmlspecialchars($data["nisn"]);
	$kelas = htmlspecialchars($data["kelas"]);

	$query="INSERT INTO detailkelas VALUES ('$nisn','$kelas')";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
	}


function hapus($id){
	global $conn;
	mysqli_query($conn,"DELETE FROM detailkelas WHERE nisn =$id");
	return mysqli_affected_rows($conn);
}

function ubah($data){
	global $conn;
			//ambil data dari tiap elemn
	$id=$data["id"];
	$nisn = htmlspecialchars($data["nisn"]);
	$kelas = htmlspecialchars($data["kelas"]);
	

	$query= "UPDATE detailkelas
	SET 
	nisn='$nisn',
	id='$kelas'
	WHERE nisn='$id'";
	
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
}

function cari($keyword){
	
	$query="SELECT detailkelas.nisn,siswa.nama_siswa,siswa.jenis_kelamin,kelas.kelas FROM detailkelas INNER JOIN siswa ON siswa.nisn=detailkelas.nisn INNER JOIN kelas ON kelas.id = detailkelas.id WHERE detailkelas.nisn LIKE '%$keyword%' OR siswa.nama_siswa LIKE '%$keyword%'
	";

	// $query="SELECT * FROM siswa 
	// WHERE 
	// nama_siswa LIKE '%$keyword%'OR
	// nisn LIKE '%$keyword%'
	// ";
	return query($query);
}




 ?>
