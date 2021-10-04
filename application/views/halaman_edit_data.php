<!DOCTYPE html>
<html>

<head>
	<title>Halaman Edit</title>
</head>

<body>
	<h3>Halaman Edit</h3>
	<form action="<?php echo base_url('home/fungsiEdit') ?>" method="post">
		<table>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim" value="<?php echo $queryMagangDetail->nim ?>" readonly></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" value="<?php echo $queryMagangDetail->nama ?>"></td>
			</tr>
			<tr>
				<td>alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat" value="<?php echo $queryMagangDetail->jabatan ?>"></td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td>:</td>
				<td><input type="text" name="jabatan" value="<?php echo $queryMagangDetail->jabatan ?>"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><input type="text" name="tanggallahir" value="<?php echo $queryMagangDetail->tanggallahir ?>"></td>
			</tr>
			<tr>
				<td>status</td>
				<td>:</td>
				<td><input type="text" name="status" value="<?php echo $queryMagangDetail->jurusan ?>"></td>
			</tr>
			<tr>
				<td colspan="3"><button type="submit">Update Data</button></td>
			</tr>
		</table>
	</form>
</body>

</html>