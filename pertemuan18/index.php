<?php 
session_start();
if(!isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}
require 'functions.php';

// pagination
// konfigurasi
$jumlahDataPerhalaman = 2;
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerhalaman);
$halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
$awalData = ( $jumlahDataPerhalaman * $halamanAktif ) - $jumlahDataPerhalaman;


$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerhalaman");

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
		img {
			/*width: 100px;*/
			height: 200px;
			object-position: top;
			object-fit: cover;
		}
	</style>
</head>
<body>

<a href="logout.php">Logout</a>
	
<h1>Daftar Mahasiswa</h1>

<a href="tambah.php">Tambah Data Mahasiswa</a><br><br>

<form action="" method="post">
	<input type="text" name="keyword" size="50" autofocus placeholder="Cari data mahasiswa" autocomplete="off">
	<button type="submit" name="cari">Cari</button><br><br>
</form>

<!-- navigasi -->

<?php if($halamanAktif > 1) : ?>
<a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo;</a>
<?php else : ?>
<?php endif; ?>

<?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
	<?php if($i == $halamanAktif) : ?>
	<a href="?halaman=<?= $i; ?>" style="font-weight: 600;color:red;"><?= $i; ?></a>
	<?php else : ?>
		<a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
	<?php endif; ?>
<?php endfor; ?>

<?php if($halamanAktif < $jumlahHalaman) : ?>
<a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
<?php else : ?>
<?php endif; ?>

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

	<?php $no = $awalData + 1; foreach( $mahasiswa as $mhs ) : ?>
	<tr>
		<td><?= $no++; ?></td>
		<td><img src="img/<?= $mhs["gambar"]; ?>"></td>
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





</body>
</html>