<?php
    $counter = 1;
    while ($counter <= 10) {
        echo "Hello While loop : " . $counter . PHP_EOL;
        $counter++;

        if($counter > 5){
            break;
        }
    }
