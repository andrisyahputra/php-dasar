<?php
$valueString = (string)100;
var_dump($valueString);

$valueInteger = (int)"Salah";
var_dump($valueInteger); //menjadi 0

$valueFloat = (float)"100.11";
var_dump($valueFloat); //menjadi 0