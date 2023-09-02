<?php
$nilaiA = 70;
$absenA = 90;

$nilaiB = 85;
$absenB = 90;

$nilaiC = 90;
$absenC = 50;


// tanpa block
if ($nilaiA >= 75 && $absenA >= 75)
    echo "Selamat anda Lulus" . PHP_EOL;
else
    echo "Tidak Lulus" . PHP_EOL;

// pakai blocak
if ($nilaiB >= 75 && $absenB >= 75) {
    echo "Selamat anda Lulus" . PHP_EOL;
} else {
    echo "Tidak Lulus" . PHP_EOL;
}

// if ifelse else

// pakai blocak
if ($nilaiC >= 80 && $absenC >= 80) {
    echo "Nilai A" . PHP_EOL;
} elseif ($nilaiC >= 70 && $absenC >= 70) {
    echo "Nilai B" . PHP_EOL;
} elseif ($nilaiC >= 60 && $absenC >= 60) {
    echo "Nilai C" . PHP_EOL;
} elseif ($nilaiC >= 50 && $absenC >= 50) {
    echo "Nilai D" . PHP_EOL;
} else {
    echo "Tidak lolos" . PHP_EOL;
}
// tanpa block atau alternatif
if ($nilaiC >= 80 && $absenC >= 80) :
    echo "Nilai A" . PHP_EOL;
elseif ($nilaiC >= 70 && $absenC >= 70) :
    echo "Nilai B" . PHP_EOL;
elseif ($nilaiC >= 60 && $absenC >= 60) :
    echo "Nilai C" . PHP_EOL;
elseif ($nilaiC >= 50 && $absenC >= 50) :
    echo "Nilai D" . PHP_EOL;
else :
    echo "Tidak lolos" . PHP_EOL;
endif;
