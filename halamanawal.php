<h1>HOME</h1>
<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "mahasiswa";

$conn = new mysqli($host, $username, $password, $db);

session_start();
if (isset($_SESSION['Berhasil']) && isset($_SESSION['nim']) && isset($_SESSION['pass'])) {

	$qry1 = "SELECT nama, nim, kelas, jenis, hobi, fakultas, alamat FROM data_mhs WHERE nim = '$_SESSION[nim]'";
	$qryz1 = mysqli_query($conn, $qry1);
	$baris1 = mysqli_fetch_array($qryz1);

	echo "<center>
			<table>
				<tr>
					<td>NIM</td>
					<td>Nama</td>
					<td>Kelas</td>
					<td>Jenis Kelamin</td>
					<td>Hobby</td>
					<td>Fakultas</td>
					<td>Alamat</td>
				</tr>
				<tr align='center'>
					<td>".$baris1[0]."</td>
					<td>".$baris1[1]."</td>
					<td>".$baris1[2]."</td>
					<td>".$baris1[3]."</td>
					<td>".$baris1[4]."</td>
					<td>".$baris1[5]."</td>
					<td>".$baris1[6]."</td>
				</tr>";
	# code...
}else{
	echo "Masuk akun Gagal, silahkan<a href='login.php'> Masuk</a> untuk masuk akun";
}

?>