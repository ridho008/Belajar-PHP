<?php 
session_start();
if(!isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// tombol cari ditekan
if(isset($_POST["cari"]) ) {
	$mahasiswa = cari($_POST["keyword"]);
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Halaman Admin</title>
	<style>
		td img {
			/*width: 100px;*/
			height: 200px;
			object-position: top;
			object-fit: cover;
		}

		.loader {
			width: 25px;
			position: absolute;
			z-index: -1;
			left: 400px;
			top: 140px;
			display: none;
		}
	</style>
</head>
<body>

<a href="logout.php">Logout</a>
	
<h1>Daftar Mahasiswa</h1>

<a href="tambah.php">Tambah Data Mahasiswa</a><br><br>

<form action="" method="post">
	<input type="text" name="keyword" size="50" autofocus placeholder="Cari data mahasiswa" autocomplete="off" id="keyword">
	<button type="submit" name="cari" id="tombolCari">Cari</button>

	<img src="img/loading.gif" class="loader"><br><br>
</form>

<div id="container">
<table border="1" cellspacing="0" cellpadding="10">
	<tr>
		<th>No</th>
		<th>Profile</th>
		<th>Nama</th>
		<th>NRP</th>
		<th>Email</th>
		<th>Jurusan</th>
		<th>Aksi</th>
	</tr>

	<?php $no = 1; foreach( $mahasiswa as $mhs ) : ?>
	<tr>
		<td><?= $no++; ?></td>
		<td><img src="img/<?= $mhs["gambar"]; ?>" class="gambar"></td>
		<td><?= $mhs["nama"]; ?></td>
		<td><?= $mhs["nrp"]; ?></td>
		<td><?= $mhs["email"]; ?></td>
		<td><?= $mhs["jurusan"]; ?></td>
		<td>
			<a href="ubah.php?id=<?= $mhs['id']; ?>">ubah</a>
			<a href="hapus.php?id=<?= $mhs['id']; ?>" onclick="return confirm('Yakin?')">hapuss</a>
		</td>
	</tr>
	<?php endforeach; ?>
</table>
</div>
	<?php if(!$mahasiswa) : ?>
		<p style="color:red;">Data tidak ditemukan</p>
	<?php endif; ?>


<script src="js/jquery-3.5.0.min.js"></script>
<script src="js/script.js"></script>	
</body>
</html>