<?php
$data = [
    "action" => "ada"
];

if (isset($data["action"])) {
    $action = $data["action"];
} else {
    $action = "tidak ada";
}

echo $action . PHP_EOL;

// null operator

$coba = $data["action"] ?? "tidak ada";

echo $coba . PHP_EOL;
