<?php 

$mahasiswa = [
	[
		'Ridho Surya',
		'876798789',
		'Teknik Informatika'
	],
	[
		'Surya',
		'876798789',
		'Teknik Sipil'
	],
	[
		'Lumut',
		'876798789',
		'Teknik Sipil'
	]
];



 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>Latihan 3</title>
 	<link rel="stylesheet" href="">
 </head>
 <body>
 	<h1>Daftar Mahasiswa</h1>
 	<?php foreach( $mahasiswa as $mhs ) : ?>
 	<ul>
		<li><?= $mhs[0]; ?></li>
		<li><?= $mhs[1]; ?></li>
		<li><?= $mhs[2]; ?></li>
 	</ul>
 	<?php endforeach; ?>
 </body>
 </html>