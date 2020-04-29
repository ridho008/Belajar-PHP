<?php 
function salam($welcome = "Datang") {
	date_default_timezone_set("Asia/Jakarta");
	
	$waktu = time();
	$jam = date('G', $waktu);

	if( $jam >= 0 && $jam <= 10 ) {
		echo "Selamat Pagi";
	} else if( $jam >= 11 && $jam <= 14) {
		echo "Selamat Siang";
	} else if( $jam >= 15 && $jam <= 18) {
		echo "Selamat Sore";
	} else if( $jam >= 19 && $jam <= 24) {
		echo "Selamat Malam";
	} else {
		return "Selamat $welcome $jam";
	}
	
}







 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>Latihan Function</title>
 	<link rel="stylesheet" href="">
 </head>
 <body>
 	<h1><?php echo salam(); ?></h1>
 </body>
 </html>