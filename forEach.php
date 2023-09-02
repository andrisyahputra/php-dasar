<?php
$pemain = [
    "Messi",
    "Aguero",
    "Alvarez"
];
$pemainKey = [
    "nama" => "Witan",
    "negara" => "Indonesia",
    "liga" => "liga1"
];

// tanpa foreach
for ($i = 0; $i < count($pemain); $i++) {
    echo "Hello " . $pemain[$i] . PHP_EOL;
}

// kode foreach
foreach ($pemain as $p) {
    echo "Hello " . $p . PHP_EOL;
}

// foreach dgn key
foreach ($pemainKey as $key => $p) {
    echo "$key : $p" . PHP_EOL;
}
