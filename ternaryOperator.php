<?php
$gender = "CEWEK";

$hi = null;
if ($gender == "CEWEK") {
    $hi = "HI Nona";
} else {
    $hi = "HI Bro";
}

echo $hi . PHP_EOL;

// ternary nya
$hay = $gender == "CEWEK" ? "Hi Nona" : "Hi Bro";
echo $hay . PHP_EOL;
