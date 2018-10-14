<form method="post">
	<table>
		<tr>
			<td>Nim </td>
			<td>:</td>
			<td><input type="number" name="nim" length="10"></td>
		</tr>
		<tr>
			<td>Password </td>
			<td>:</td>
			<td><input type="password" name="pass"></td>
		</tr>
		<tr>
			<td><a href="pendaftaran.php">Daftar Disini</a></td>
			<td><input type="submit" name="kirim" value="Masuk"></td>
		</tr>
	</table>
</form>

<?php
error_reporting(0);

if (isset($_POST['kirim'])) {

	$host = "localhost";
	$username = "root";
	$password = "";
	$db = "mahasiswa";
	$conn = new mysqli($host, $username, $password, $db);
	
	session_start();

	$nim = isset($_POST['nim']);
	$pass = isset($_POST['pass']);

	$cekuser = $conn -> query("SELECT `nim`, `password` FROM data_mhs WHERE password = '$pass'");
	$hasil = mysqli_fetch_array($cekuser);

	$cekuser1 = $conn -> query("SELECT `nama`, `nim`, `kelas`, `jenis`, `hobi`, `fakultas`, `alamat`, `password` FROM data_mhs WHERE `nim` = '$nim'");
	$hasil1 = mysqli_num_rows($cekuser1);

	if ($nim == $hasil[0] && $pass == $hasil[1]) {
		$_SESSION["nim"] = $nim;
		$_SESSION["password"] = $pass;
		$_SESSION["nama"] = $hasil1[0];
		$_SESSION["kelas"] = $hasil1[3];
		$_SESSION["jenis"] = $hasil1[4];
		$_SESSION["hobi"] = $hasil1[5];
		$_SESSION['fakultas'] = $hasil1[6];
		$_SESSION["alamat"] = $hasil1[7];

		echo "Login Sukses";
		header("location:halamanawal.php");
		# code...
	}else{
		echo "NIM atau Password salah";
		# code...
	}
	# code...
}

?>