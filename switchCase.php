<?php
$nilai = "Z";


switch ($nilai) {
    case "A":
        echo "Anda lulus Sangat baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda Tidak Lulus" . PHP_EOL;
        break;
    default:
        echo "Anda mungkin salah jurusan" . PHP_EOL;
}

// si=ytax alternatif
switch ($nilai):
    case "A":
        echo "Anda lulus Sangat baik" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "Anda lulus" . PHP_EOL;
        break;
    case "D":
        echo "Anda Tidak Lulus" . PHP_EOL;
        break;
    default:
        echo "Anda mungkin salah jurusan" . PHP_EOL;
endswitch;
