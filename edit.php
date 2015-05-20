<!DOCTYPE html>
<html>
<head>
	<title>Tugas Pemograman Mobile</title>
</head>
<body>
	<h2>Simple CRUD</h2>
	
	<p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	
	<h3>Edit Data</h3>
	
	<?php
	include('koneksi.php');
	
	$id = $_GET['id'];
	
	$show = mysql_query("SELECT * FROM siswa WHERE id='$id'");
	
	if(mysql_num_rows($show) == 0){
		
		echo '<script>window.history.back()</script>';
		
	}else{
	
		$data = mysql_fetch_assoc($show);
	
	}
	?>
	
	<form action="edit-proses.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">	
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>ID</td>
				<td>:</td>
				<td><input type="text" name="id" value="<?php echo $data['id']; ?>" required></td>
			</tr>
			<tr>
				<td>Aktivitas</td>
				<td>:</td>
				<td><input type="text" name="aktivias" size="30" value="<?php echo $data['aktivitas']; ?>" required></td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td>:</td>
				<td><input type="text" name="deskripsi" size="30" value="<?php echo $data['aktivitas']; ?>" required></td>
			</tr>
			<tr>
				<td>Tanggal Deadline</td>
				<td>:</td>
				<td><input type="text" id="input" size="15" name="tanggal" value="12/12/1940" /></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>