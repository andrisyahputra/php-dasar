<?php
function sayHello(string $nama, $filter)
{
    $finalNama = $filter($nama);
    echo "Hello $finalNama" . PHP_EOL;
}

// sayHello("Andri"); //tidak ada filter eror
sayHello("Andri", "strtoupper"); //function bawan php
sayHello("Andri", "strtolower");


// bawan sendiri

function salam(string $nama, $filter)
{
    $finalNama = $filter($nama);
    echo "Hello $finalNama" . PHP_EOL;
}


function sapa(string $nama): string
{
    return "Selamat Datang $nama";
}

salam("Andri", "sapa"); //function buat sendri

// aonoymous
$pagi = function (string $nama) {
    echo "Selamat Pagi $nama" . PHP_EOL;
};

$pagi("Andri");

// akses dari luar
$firstName = "Andri";
$sayHelloAndri = function ()
use ($firstName) {
    echo "Hello $firstName";
};

$sayHelloAndri();
