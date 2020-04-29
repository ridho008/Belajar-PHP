<?php 

// $mahasiswa = [
// 				[
// 				"Ridho",
// 				"89868796",
// 				"ridho@gmail.com",
// 				"teknik informatika"
// 				],
// 				[
// 				"Ridho",
// 				"89868796",
// 				"ridho@gmail.com",
// 				"teknik informatika"
// 				]
// ];

// Assosiative Array
// key adalah string yang dibuat sendiri

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
 	<title>Data Mahasiswa</title>
 	<style>
		body, html {
			background-color: #eee;
		}

 		img {
 			width: 150px;
 			height: 150px;
 			box-shadow: 0 0 5px rgba(0,0,0,.8);
 			line-height: 200px;
 		}

 		table {
 			text-align: center;
 			border: 1px solid rgba(0,0,0,.1);
 			margin: auto;
 		}

 		tr:nth-child(odd) {
 			background-color: #ddd;
 		}

 		.ok:hover {
 			background-color: #eee;
 		}

 		ul li {
 			list-style: none;
 		}

 		.container {
 			width: 900px;
 			margin: 50px auto;
 			background-color: #fff;
 			padding-top : 30px;
 			padding-bottom: 30px;
 			text-align: center;
 			border-radius: 5px;
 		}

 	</style>
 </head>
 <body>
 
 <div class="container">
 	<h1>Daftar Mahasiswa</h1>

	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No</th>
			<th>Gambar</th>
			<th>Nama</th>
			<th>NRP</th>
			<th>Email</th>
			<th>Jurusan</th>
		</tr>
		<?php $i = 1; foreach($mahasiswa as $mhs) : ?>
		<tr>
			<td class="ok"><?= $i++; ?></td>
			<td class="ok"><img src="img/<?= $mhs['gambar']; ?>" alt=""></td>
			<td class="ok"><?= $mhs['nama']; ?></td>
			<td class="ok"><?= $mhs['nrp']; ?></td>
			<td class="ok"><?= $mhs['email']; ?></td>
			<td class="ok"><?= $mhs['jurusan']; ?></td>
		</tr>
		<?php endforeach; ?>
	</table>

</div>
 </body>
 </html>