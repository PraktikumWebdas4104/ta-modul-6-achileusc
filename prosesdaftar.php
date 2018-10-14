<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "mahasiswa";

$conn = new mysqli($host, $username, $password, $db);

if (isset($_POST['kirim'])) {
	$nim1 = $_POST['nim'];
	$nama1 = $_POST['nama'];
	$kelas = $_POST['kelas'];
	$jenis1 = $_POST['jenis'];
	$hobi1 = $_POST['hobi'];
	$fakultas1 = $_POST['fakultas'];
	$alamat1 = $_POST['alamat'];
	$pass1 = $_POST['pass'];
	# code...

	$qry = $conn -> query("INSERT INTO data_mhs VALUES ('$nim1','$nama1','$kelas','$jenis1','$hobi1','$fakultas1','$alamat1','$pass1')");
	if ($qry) {
		echo "Pendaftaran Berhasil, Silahkan <a href=login.php>Masuk</a>";
		# code...
	}else{
		echo "Pendaftaran Gagal";
	}
}
?>