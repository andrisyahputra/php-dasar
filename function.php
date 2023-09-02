<?php
sayHello(); //bebas cara letak beda bahasa lain

function sayHello()
{
    echo "Hello Function" . PHP_EOL;
}

sayHello();
sayHello();

$hi = true;
if ($hi) {
    function sayHi()
    {
        echo "Hello If" . PHP_EOL;
    }
}

sayHi();

function sayNama($nama)
{
    echo "Hello $nama" . PHP_EOL;
}

// sayNama(""); //eror
sayNama("Andri");
sayNama("Bagus");

// nilai defauld
function sayDefauld($nama = "")
{
    echo "Hello $nama" . PHP_EOL;
}

sayDefauld();
sayDefauld("Bagus");

function fulName($depan = "Andri", $belakang)
{
    echo "Hello $depan $belakang" . PHP_EOL;
}

// fulName("");  //eror
// fulName("Bagus"); //nama balakang wajib isi
// fulName( ,"Syahputra"); //eror
fulName("Andri", "Syahputra"); //eror

function sum(int $nilai1, int $nilai2)
{
    $total = $nilai1 + $nilai2;
    echo "Total $nilai1 + $nilai2 = $total" . PHP_EOL;
}

sum(100, 100);
sum("100", "100"); //di konversi int
sum(true, false); //sama
// sum([], []); //ini eror

function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total " . implode(" + ", $values) . " = $total" . PHP_EOL;
}
$nilai = [1, 2, 3, 4, 5];

sumAll(10, 20, 30, 40, 50);
// sumAll([10, 20, 30, 40, 50]);

// ...//argument list konversi array
sumAll(...$nilai);

function tambah(int $first, int $last)
{
    $hasil = $first + $last;
    return $hasil;
}

$hasil = tambah(10, 10);
var_dump($hasil);

function getNilaiValue(int $value)
{
    if ($value >= 80) {
        return "A";
    } elseif ($value >= 70) {
        return "B";
    } elseif ($value >= 60) {
        return "C";
    } elseif ($value >= 50) {
        return "E";
    } else {
        return "Tidak Bagus";
    }

    //jika ada return tidak dijalan
    echo "Ups " . PHP_EOL;
}

$score = getNilaiValue("30");
var_dump($score);

// return type declation
function cobaInt(int $coba, int $tes): int
{
    return $coba + $tes;
}
function cobaString(string $coba, string $tes): String
{
    return "$coba $tes ini adalah string";
}


$testingInt = cobaInt("30", "70");
var_dump($testingInt);
$testingInt = cobaString("30", "70");
var_dump($testingInt);
