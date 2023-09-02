<?php
$nama = "Andri";
function sayName()
{
    global $nama;
    echo $nama . PHP_EOL;
    echo $GLOBALS['nama'] . PHP_EOL;
}

sayName();
