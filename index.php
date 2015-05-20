<!DOCTYPE html>
<html>
<head>
	<title>Tugas Pemograman Mobile</title>
</head>
<body>
	<h2>Simple CRUD</h2>
	
	<p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	
	<h3>Aktivitas Data CRUD</h3>
	
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<th>No.</th>
			<th>id</th>
			<th>Aktivitas</th>
			<th>Deskripsi</th>
			<th>Tanggal Deadline</th>
			<th>Status</th>
		</tr>
		
		<?php
		include('koneksi.php');
		
		$query = mysql_query("SELECT * FROM siswa ORDER BY id DESC") or die(mysql_error());
		
		//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
		if(mysql_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong
			
			//jika data kosong, maka akan menampilkan row kosong
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			
		}else{	//else ini artinya jika data hasil query ada (data diu database tidak kosong)
			
			//jika data tidak kosong, maka akan melakukan perulangan while
			$no = 1;	//membuat variabel $no untuk membuat nomor urut
			while($data = mysql_fetch_assoc($query)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database
				
				//menampilkan row dengan data di database
				echo '<tr>';
					echo '<td>'.$no.'</td>';	//menampilkan nomor urut
					echo '<td>'.$data['id'].'</td>';	//menampilkan data nis dari database
					echo '<td>'.$data['aktivitas'].'</td>';	//menampilkan data nama lengkap dari database
					echo '<td>'.$data['deskripsi'].'</td>';	//menampilkan data kelas dari database
					echo '<td>'.$data['tanggal'].'</td>';	//menampilkan data jurusan dari database
					echo '<td><a href="edit.php?id='.$data['id'].'">Edit</a> / <a href="hapus.php?id='.$data['id'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';
				echo '</tr>';
				
				$no++;	//menambah jumlah nomor urut setiap row
				
			}
			
		}
		?>
	</table>
</body>
</html>