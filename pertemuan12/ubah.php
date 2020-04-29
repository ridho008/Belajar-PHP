<?php
require 'functions.php';

// ambil data di url
$id = $_GET["id"];

// query data mahasiswa berdasarkan idnya
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


if(isset($_POST["submit"]) ) {
	
	// apakah data berhasil diubah / tidak
	if( ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil diubah');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah');
				document.location.href = 'index.php';
			</script>
		";
	}


}


 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ubah Data Mahasiswa</title>
</head>
<body>
	<h1>Ubah Data Mahasiswa</h1>

	<form action="" method="post">
		<input type="hidden" name="id" value="<?= $mhs['id']; ?>">
		<ul>
			<li>
				<label for="nama">Nama</label>
				<input type="text" name="nama" id="nama" value="<?= $mhs["nama"]; ?>">
			</li>
			<li>
				<label for="nrp">NRP</label>
				<input type="number" name="nrp" id="nrp" value="<?= $mhs["nrp"]; ?>">
			</li>
			<li>
				<label for="email">Email</label>
				<input type="email" name="email" id="email" value="<?= $mhs["email"]; ?>">
			</li>
			<li>
				<label for="jurusan">Jurusan</label>
				<input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"]; ?>">
			</li>
			<li>
				<label for="gambar">Gambar</label>
				<input type="text" name="gambar" id="gambar" value="<?= $mhs["gambar"]; ?>">
			</li>
			<li>
				<button type="submit" name="submit">Ubah Data</button>
			</li>
		</ul>
	</form>
</body>
</html>