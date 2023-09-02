<?php
$depan = [
    "nama_depan" => "Andri"
];
$belakang = [
    "nama_depan" => "Putra",
    "nama_belakang" => "Syahputra"
];

$lengkap = $depan + $belakang;
var_dump($lengkap);

$a = [
    "nama_belakang" => "Syahputra",
    "nama_depan" => "Putra"
];
$b = [
    "nama_depan" => "Putra",
    "nama_belakang" => "Syahputra"
];

var_dump($a == $b); //true isi nya bukan key
var_dump($a === $b); //false ini keduanya

$x = 5;
$y = $x;

var_dump($y); //5