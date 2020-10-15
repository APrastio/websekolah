<?php 

//koneksi ke databse
require '../../koneksi.php';

function tambah($data)
	{
		global $conn;
			//ambil data dari tiap elemn
	$nip = htmlspecialchars($data["nip"]);
	$nama = htmlspecialchars($data["nama"]);
	$jenis = htmlspecialchars($data["jenis"]);
	$tempatlahir = htmlspecialchars($data["tempatlahir"]);
	$tanggallahir = date('Y-m-d',strtotime(htmlspecialchars($data["tanggallahir"])));
	$ijazah = htmlspecialchars($data["ijazah"]);
	$mapel = htmlspecialchars($data["mapel"]);
	//upload gambar
	// $gambar= upload();
	// if(!$gambar){
	// 	return false;
	// }

	$query="INSERT INTO guru
	VALUES 
	('$nip','$nama','$jenis','$tempatlahir','$tanggallahir','$ijazah','$mapel')";
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
	mysqli_query($conn,"DELETE FROM guru WHERE nip ='$id'");
	return mysqli_affected_rows($conn);
}

function ubah($data){
	global $conn;
			//ambil data dari tiap elemn
	$id=$data["id"];
	$nip = htmlspecialchars($data["nip"]);
	$nama = htmlspecialchars($data["nama"]);
	$jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
	$Tempat_lahir = htmlspecialchars($data["Tempat_lahir"]);
	$tanggal_lahir = date('Y-m-d',strtotime(htmlspecialchars($data["tanggal_lahir"])));
	$ijazah = htmlspecialchars($data["ijazah"]);
	$mapel = htmlspecialchars($data["mapel"]);
	//cek apakah user pilih gambar atau tidak
	// $gambarLama = htmlspecialchars($data["gambarLama"]);
	// if ($_FILES['gambar']['error']===4) {
	// 	$gambar=$gambarLama;
	// }else{
	// 	$gambar=upload();
	// }

	$query="UPDATE guru
	SET 
	nip='$nip',
	nama_guru='$nama', 
	jenis_kelamin='$jenis_kelamin',
	Tempat_lahir='$Tempat_lahir',
	tanggal_lahir='$tanggal_lahir',
	ijazah='$ijazah', 
	mapel='$mapel'
	WHERE nip='$id'";
	
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
}

function cari($keyword){
	$query="SELECT * FROM guru 
	WHERE 
	nama_guru LIKE '%$keyword%'OR
	nip LIKE '%$keyword%'
	";
	return query($query);
}




 ?>
