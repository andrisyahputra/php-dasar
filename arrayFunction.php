<?php
$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$dataResult = array_map(fn (int $value) => $value * 10, $data);
// 1 *10 dan 2*20
var_dump($dataResult);

var_dump($data);
rsort($data);
var_dump($data); //dibalik

// var_dump(rsort($data));
$person = [
    "nama_depan" => "Andri",
    "nama_belakang" => "Syahputra"
];

var_dump(array_keys($person)); //key
var_dump(array_values($person)); //value aja