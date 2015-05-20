<?php
if(isset($_POST['tambah'])){
	
	
	include('koneksi.php');
	
	
	$nis		= $_POST['id'];	
	$nama		= $_POST['aktivitas'];	
	$kelas		= $_POST['deskripsi'];	
	$jurusan	= $_POST['tanggal'];	
	
	
	$input = mysql_query("INSERT INTO siswa VALUES(NULL, '$nis', '$nama', '$kelas', '$jurusan')") or die(mysql_error());
	
	//jika query input sukses
	if($input){
		
		echo 'Data berhasil di tambahkan! ';		
		echo '<a href="tambah.php">Kembali</a>';	
		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
		echo '<a href="tambah.php">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
		
	}

}else{	//jika tidak terdeteksi tombol tambah di klik

	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';

}
?>