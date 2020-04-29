<?php 
// cek apakah tidak ada data di $_GET
if( !isset($_GET["nama"]) ||
	!isset($_GET['nrp']) || 
	!isset($_GET['email']) || 
	!isset($_GET['jurusan']) || 
	!isset($_GET['gambar']) ) 
{
	header("Location: latihan1.php");
	exit;
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Detail Mahasiswa</title>
	<style>
		img {
			width: 150px;
			height: 150px;
		}
	</style>
</head>
<body>
	<ul>
		<li><img src="img/<?= $_GET['gambar']; ?>" alt=""></li>
		<li><?= $_GET['nama']; ?></li>
		<li><?= $_GET['nrp']; ?></li>
		<li><?= $_GET['email']; ?></li>
		<li><?= $_GET['jurusan']; ?></li>
	</ul>
	<a href="latihan1.php">Kembali</a>
</body>
</html>