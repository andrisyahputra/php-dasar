<?php
$counter = 100;
while ($counter <= 10) {
    echo "Hello While loop : " . $counter . PHP_EOL;
    $counter++;
}

// alternatif 
while ($counter <= 10) :
    echo "Hello While loop : " . $counter . PHP_EOL;
    $counter++;
endwhile;
