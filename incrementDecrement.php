<?php
$a = 10;

// $a = $a +1;
$a++;
$a++;

// 12
var_dump($a);


$b = 10;

// $a = 
$c = ++$b;

// 12
var_dump($b); //11
var_dump($c); //11

$d = 10;

// $d = 
$e = $d++;

// 12
var_dump($d); //11
var_dump($e); //10



$j = 10;
$h = 10;
++$j;
$h++;
var_dump($j); //11
var_dump($h); //11