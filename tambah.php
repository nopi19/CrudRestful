<!DOCTYPE html>
<html>
<head>
	<title>Tugas Pemograman Mobile</title>
</head>
<body>
	<h2>Simple CRUD</h2>
	
	<p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	
	<h3>Tambah Aktivitas</h3>
	
	<form action="tambah-proses.php" method="post">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>ID</td>
				<td>:</td>
				<td><input type="text" name="id" required></td>
			</tr>
			<tr>
				<td>Aktivitas</td>
				<td>:</td>
				<td><input type="text" name="aktivitas" size="30" required></td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td>:</td>
				<td><input type="text" name="deskripsi" size="200" required></td>
			</tr>
			<tr>
				<td>Tanggal Deadline</td>
				<td>:</td>
				<td><input type="text" id="input" size="15" name="tanggal" value="12/12/1940" /></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah"></td>
			</tr>
		</table>
	</form>
</body>
</html>