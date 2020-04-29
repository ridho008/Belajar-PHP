<?php 

// // Variabel scope
// $x = 10;
// function tampiX()
// {
// 	global $x;
// 	echo $x;
// }
// tampiX();


// SUPERGLOBALS
// variabel milik php

// echo $_SERVER["HTTP_ACCEPT"];


// $_GET

$mahasiswa = [
	[
	"nama" => "Ridho Surya",
	"nrp"  => "98756897",
	"email" => "ridho@gmail.com",
	"jurusan" => "Teknik Inforamatika",
	"gambar" => "profile1.jpg"
	],
	[
	"nrp"  => "98756897",
	"nama" => "Surya",
	"email" => "ridho@gmail.com",
	"jurusan" => "Teknik Sipil",
	"gambar" => "profile2.jpg"
	]
];

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>Latihan 1 -GET</title>
 	<style>
 		img {
 			width: 300px;
 			height: 200px;
 		}
 	</style>
 </head>
 <body>
 	<h1>Daftar Mahasiswa</h1>
 	<ul>
 	<?php foreach( $mahasiswa as $mhs ) : ?>
 		<li>
 			<a href="latihan2.php?nama=<?= $mhs['nama']; ?>&nrp=<?= $mhs['nrp']; ?>&email=<?= $mhs['email']; ?>&jurusan=<?= $mhs['jurusan']; ?>&gambar=<?= $mhs['gambar']; ?>"><?= $mhs['nama']; ?></a>
 		</li>
 	<?php endforeach; ?>
 	</ul>
 </body>
 </html>