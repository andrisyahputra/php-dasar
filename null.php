<?php
$nama = "andrimc";
// $nama = NULL;

$age = null;

echo "Nama :";
echo $nama;
echo "\n";

echo "Umur :";
echo $age;
echo "\n";

echo "Is nama Null : ";
var_dump(is_null($nama));
echo "\n";

$contoh = "Andrimc";
unset($contoh);
echo $contoh; //tidak ada lagi variabel nya


var_dump(isset($contoh));
