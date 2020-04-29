<?php 
// koneksi halaman ini ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data mahasiswa /query
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
if( !$result ) {
	echo "Database Belum Terbuhung!";
}

// ambil data dari (fetch) object result/mahasiswa
// mysqli_fetch_row() / mengembalikan array numeric
// mysqli_fetch_assoc() mengembalikan array assosiative
// mysqli_fetch_array() mengembalikan assosiative & numeric
// mysqli_fetch_object()

// while ($mhs = mysqli_fetch_assoc($result) ) {
// 	var_dump($mhs);
// }





 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Halaman Admin</title>
	<style>
		img {
			width: 100px;
			height: 100px;
		}
	</style>
</head>
<body>
	
<h1>Daftar Mahasiswa</h1>

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

	<?php $no = 1; while( $row = mysqli_fetch_assoc($result) ) : ?>
	<tr>
		<td><?= $no++; ?></td>
		<td><img src="img/<?= $row["gambar"]; ?>"></td>
		<td><?= $row["nama"]; ?></td>
		<td><?= $row["nrp"]; ?></td>
		<td><?= $row["email"]; ?></td>
		<td><?= $row["jurusan"]; ?></td>
		<td>
			<a href="">ubah</a>
			<a href="">hapuss</a>
		</td>
	</tr>
	<?php endwhile; ?>
</table>





</body>
</html>