<?php 

// Pengulangan pada array
// for / foreach

$angka = [3,4,6,2,1,7,8,10,11,12];


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>Latihan 2</title>
 	<style>
 		.kotak {
 			width: 50px;
 			height: 50px;
 			background-color: salmon;
 			text-align: center;
 			line-height: 50px;
 			margin: 3px;
 			float: left;
 		}

 		.clear {
 			clear: both;
 		}
 	</style>
 </head>
 <body>
 	<?php for( $i = 0; $i < count($angka); $i++ ) { ?>
 	<div class="kotak"><?= $angka[$i]; ?></div>
 	<?php } ?>

 	<div class="clear"></div>

 	<?php foreach( $angka as $a ) { ?>
		<div class="kotak"><?= $a ?></div>
 	<?php } ?>
 </body>
 </html>