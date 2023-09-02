<?php
function increment()
{
    static $counter = 1;

    echo "Counter:  $counter " . PHP_EOL;

    $counter++;
}

increment();
increment();
increment();

function decrement(int &$value)
{
    $value--;
}
$counter = 10;
decrement($counter);
decrement($counter);
decrement($counter);

echo $counter . PHP_EOL;
