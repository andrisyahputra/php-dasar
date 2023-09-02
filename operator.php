<?php
$a = 7;
$b = 10;

$hasil = $a + $b;
var_dump($hasil);

$hasilNegatif = -$hasil;
var_dump($hasilNegatif);

$hasilPositif = +$hasil;
var_dump($hasilPositif);

// sisa bagi
$sisaBagi = -100 % 3;
var_dump($sisaBagi);


echo "\n";
$total = 0;

$jeruk = 10000;
$mangga = 15000;
$durian = 20000;

// $total = $total + $jeruk
$total += $jeruk;
$total += $mangga;
$total += $durian;

var_dump($total);
