<!DOCTYPE html>
<html>

<head>
	<title>Halaman Tambah</title>
</head>

<body>
	<h3>Halaman Tambah Data</h3>
	<form action="<?php echo base_url('home/fungsiTambah') ?>" method="post">
		<table>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td>:</td>
				<td><input type="text" name="jabatan"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><input type="text" name="tanggallahir"></td>
			</tr>
			<tr>
				<td>status</td>
				<td>:</td>
				<td><input type="text" name="status"></td>
			</tr>
			<tr>
				<td colspan="3"><button type="submit">Tambah Data</button></td>
			</tr>
		</table>
	</form>
</body>

</html>