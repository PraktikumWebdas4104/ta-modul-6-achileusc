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
					<th>NIM</th>
					<th>Nama</th>
					<th>Kelas</th>
					<th>Jenis Kelamin</th>
					<th>Hobby</th>
					<th>Fakultas</th>
					<th>Alamat</th>
				</tr>
				<tr align='center'>
					<td>".$baris2[0]."</td>
					<td>".$baris2[0]."</td>
					<td>".$baris2[0]."</td>
					<td>".$baris2[0]."</td>
					<td>".$baris2[0]."</td>
					<td>".$baris2[0]."</td>
					<td>".$baris2[0]."</td>
				</tr>";
	# code...
}else{
	echo "Masuk akun Gagal, silahkan<a href='login.php> Masuk</a> untuk masuk akun'";
}

?>