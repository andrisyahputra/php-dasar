<?php
function getValue()
{
    return 100;
}
$value = getValue();

var_dump($value);


$name = "Andri Syahputra";
echo $name;

$date = new DateTime();
var_dump($date);

// block
function runApp($name)
{
    echo "Start Program" . PHP_EOL;
    echo "Hello $name" . PHP_EOL;
    echo "End Program" . PHP_EOL;
}

runApp('Test');
