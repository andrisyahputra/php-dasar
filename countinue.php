<?php
for ($genap = 1; $genap <= 10; $genap++) {
    if ($genap % 2 == 1) {
        continue;
    }
    echo "Genap " . $genap . PHP_EOL;
}
for ($ganjil = 1; $ganjil <= 10; $ganjil++) {
    if ($ganjil % 2 == 0) {
        continue;
    }
    echo "Ganjil " . $ganjil . PHP_EOL;
}
