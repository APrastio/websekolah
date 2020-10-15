<?php 

//koneksi ke databse
require '../../koneksi.php';
function tambah($data)
	{
		global $conn;
			//ambil data dari tiap elemn
	$nisn = htmlspecialchars($data["nisn"]);
	$nama_alumni = htmlspecialchars($data["nama_alumni"]);
	$jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
	$tempat_lahir = htmlspecialchars($data["tempat_lahir"]);
	$tanggal_lahir = date('Y-m-d',strtotime(htmlspecialchars($data["tanggal_lahir"])));
	$alamat = htmlspecialchars($data["alamat"]);
	$nama_ortu = htmlspecialchars($data["nama_ortu"]);
	//upload gambar
	// $gambar= upload();
	// if(!$gambar){
	// 	return false;
	// }

	$query="INSERT INTO alumni
	VALUES 
	('$nisn','$nama_alumni','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$alamat','$nama_ortu')";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
	}

// function upload(){
// 	$namaFile = $_FILES["gambar"]["name"];
// 	$ukuranFile = $_FILES["gambar"]["size"];
// 	$error = $_FILES["gambar"]["error"];
// 	$tmpName = $_FILES["gambar"]["tmp_name"];

// 	//cek apa gambar di upload
// 	if ($error ===4) {
// 		echo "<script>
// 		alert('pilih gambar terlebih dahulu');
// 		</script>";
// 		return false;
// 	}
// 	//
// 	$ekstensiGambarValid=['jpg','jpeg','png'];
// 	$ekstensiGambar= explode('.', $namaFile);
// 	$ekstensiGambar= strtolower(end($ekstensiGambar));
// 	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
// 		echo "<script>
// 		alert('yang anda upload bukan gambar');
// 		</script>";
// 		return false;
// 	}
// 	// cek jika ukuran terlalu besar
// 	if($ukuranFile>100000){
// 		echo "<script>
// 		alert('ukuran gambar terlalu besar');
// 		</script>";

// 		return false;
// 	}
// 	//lolos pengecekan
// 	//generate nama baru
// 	$namaFileBaru= uniqid();
// 	$namaFileBaru .= '.';
// 	$namaFileBaru .= $ekstensiGambar;
// 	move_uploaded_file($tmpName, '../img/'.$namaFileBaru);
// 	return $namaFileBaru; 

// }



function hapus($id){
	global $conn;
	mysqli_query($conn,"DELETE FROM alumni WHERE nisn =$id");
	return mysqli_affected_rows($conn);
}

function ubah($data){
	global $conn;
			//ambil data dari tiap elemn
	$id=$data["id"];
	$nisn = htmlspecialchars($data["nisn"]);
	$nama_alumni = htmlspecialchars($data["nama_alumni"]);
	$jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
	$tempat_lahir = htmlspecialchars($data["tempat_lahir"]);
	$tanggal_lahir = date('Y-m-d',strtotime(htmlspecialchars($data["tanggal_lahir"])));
	$alamat = htmlspecialchars($data["alamat"]);
	$nama_ortu = htmlspecialchars($data["nama_ortu"]);
	//cek apakah user pilih gambar atau tidak
	// $gambarLama = htmlspecialchars($data["gambarLama"]);
	// if ($_FILES['gambar']['error']===4) {
	// 	$gambar=$gambarLama;
	// }else{
	// 	$gambar=upload();
	// }

	$query="UPDATE alumni
	SET 
	nisn='$nisn', 
	nama_alumni='$nama_alumni',
	tempat_lahir='$tempat_lahir',
	jenis_kelamin='$jenis_kelamin',
	tanggal_lahir='$tanggal_lahir',
	alamat='$alamat',
	nama_ortu='$nama_ortu'
	WHERE nisn='$id'";
	
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
}

function cari($keyword){
	$query="SELECT * FROM alumni 
	WHERE 
	nama_alumni LIKE '%$keyword%'OR
	nisn LIKE '%$keyword%'
	";
	return query($query);
}




 ?>
