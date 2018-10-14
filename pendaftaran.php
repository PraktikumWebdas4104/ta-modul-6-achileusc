<form method="post">
	<table>
		<h1>Pendaftaran</h1>
		<tr>
			<td>Nama </td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
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
			<td>Kelas </td>
			<td>:</td>
			<td><input type="radio" name="kelas" value="D3MI41-01">D3MI41-01<br>
				<input type="radio" name="kelas" value="D3MI41-02">D3MI41-02<br>
				<input type="radio" name="kelas" value="D3MI41-03">D3MI41-03<br>
				<input type="radio" name="kelas" value="D3MI41-04">D3MI41-04</td>
		</tr>
		<tr>
			<td>Jenis Kelamin </td>
			<td>:</td>
			<td><input type="radio" name="jenis" value="Laki - laki">Laki - laki<br>
				<input type="radio" name="jenis" value="Perempuan">Perempuan</td>
		</tr>
		<tr>
			<td>Hobi </td>
			<td>:</td>
			<td><input type="checkbox" name=hobi value="futsal">Futsal<br>
				<input type="checkbox" name=hobi value="basket">Basket<br>
				<input type="checkbox" name=hobi value="volley">Volley<br>
				<input type="checkbox" name=hobi value="Jogging">Jogging</td>
		</tr>
		<tr>
			<td>Fakultas </td>
			<td>:</td>
			<td><select name="fakultas">
				<option value=" "> </option>
				<option value="fit">Fakultas Ilmu Terapan</option>
				<option value="feb">Fakultas Ekonomi Bisnis</option>
				<option value="fkb">Fakultas Komunikasi Bisnis</option>
			</select></td>
		</tr>
		<tr>
			<td>Alamat </td>
			<td>:</td>
			<td><input type="textarea" name="alamat"></td>
		</tr>
		<tr>
			<td><input type="reset" name="hapus" value="Hapus"></td>
			<td></td>
			<td><input type="submit" name="kirim" value="Kirim"></td>
		</tr>
	</table>
</form>

<?php

if (isset($_POST['kirim'])) {
	include 'prosesdaftar.php';
	# code...
}

?>