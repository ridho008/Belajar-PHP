<?php 
// Untuk menampilkan tanggal
// echo date('l D M Y');

// Time
// echo time();

// echo date("l", time() - ( 100 * 24 * 60 * 60 ));

// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l" ,mktime(0,0,0,11,19,1999));

// strtotime
echo date("l", strtotime("19 nov 1999"));

$str = "Ridho";
echo strlen($str);

?>