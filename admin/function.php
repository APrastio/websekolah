<?php 
require '../koneksi.php';
function registrasi($data){
	global $conn;
	$username = strtolower(stripcslashes($data["username"]));
	$password = mysqli_real_escape_string($conn,  $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	//cek username sama atau tidak
	$result = mysqli_query($conn,"SELECT username FROM admin WHERE username='$username'");
	if(mysqli_fetch_assoc($result)){
		echo "<script>
		alert('user name sudah ada')
		</script>";
		return false;
	}



	//cek konfirmasi
	if($password !== $password2){
		echo "<script>
		alert('konfirmasi tidak sesuai')
		</script>";
		return false;
	}
	//encryp
	$password = password_hash($password, PASSWORD_DEFAULT);
	//insert ke database
	mysqli_query($conn, "INSERT INTO admin 
		VALUES (
		'','$username','$password')
		");
	return mysqli_affected_rows($conn);


}

function terima($data){
	global $conn;
			//ambil data dari tiap elemn
	$nopendaftaran=$data["nopendaftaran"];
	$status = htmlspecialchars($data["accept"]);

	$query="UPDATE daftar
	SET 
	status = '$status'
	WHERE nopendaftaran='$nopendaftaran'";
	
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);

}
function tolak($data){
	global $conn;
			//ambil data dari tiap elemn
	$nopendaftaran=$data["nopendaftaran"];
	$status = htmlspecialchars($data["denied"]);

	$query="UPDATE daftar
	SET 
	status = '$status'
	WHERE nopendaftaran='$nopendaftaran'";
	
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);

}


 ?>