<?php

// 1.membuat array 
$hari =array ('senin','selasa','rabu');
$bulan =['januari','februari','maret'];
$mahasiswa=['dhika',3.1,true];


// 2. mencetak isi array 
// mencetak satu nilai pada array ,menggunakan indeks 
echo $hari[1];
echo "<br>";
echo $bulan[2];

echo "<hr>";
// cetak semua isi array 
// var_dump() atau print_r()
// digunakkan debugging 

var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
var_dump($mahasiswa);
echo "<hr>";



// 3.memanipulasi array 
// menambah isi array 
// di akhir :[] atau array_push ()
$hari[]='kamis';
print_r($hari);

echo "<br>";

array_push($bulan,'april');
print_r($bulan);

echo "<br>";

// di awal :array_unshif ()

array_unshift($mahasiswa,'2400054');
print_r($mahasiswa);
echo "<hr>";

// menghapus 
// di belakang array_pop()
//di depan array_shift ()
array_pop($hari);
array_shift($bulan);

print_r($hari);
echo "<br>";
print_r($bulan);

?>