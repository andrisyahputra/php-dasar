<?php
$firstname = "Andri";
$lastname = "Syahputra";

// hero function
$sayHello = fn () => "Hello $firstname $lastname" . PHP_EOL;
echo $sayHello();

// factorial loop
function factorialLoop(int $value): int
{
    $total = 1;
    for ($i = 1; $i <= $value; $i++) {
        $total *= $i;
    }

    return $total;
}
var_dump(factorialLoop(6));
var_dump(1 * 2 * 3 * 4 * 5 * 6);

// memangil function sendri hasilnya sama
function factorialRecursuve(int $value): int
{
    if ($value == 1) {
        return 1;
    } else {
        return $value * factorialRecursuve($value - 1);
    }
}
var_dump(factorialRecursuve(6));
