<?php
    $nilai = array(1,2,3,4,5);
    var_dump($nilai);

    $nama = ["satu","dua","tiga"];
    var_dump($nama);
    var_dump($nama[0]);
    $nama[0] = "null";
    unset($nama[1]);
    var_dump($nama);
    $nama[] = "Empat";
    var_dump($nama);
    var_dump(count($nama));
    
    $pemainNumber = [
        1 => "Mbappe",
        2 => "Halland",
        3 => "Gabriel",
        4 => 1
    ];
    $pemain = [
        "psg" => "Mbappe",
        "mancity" => "Halland",
        "arsenal" => "Gabriel",
        "no" => 1
    ];
    $detailPemain = [
        "psg" => "Mbappe",
        "mancity" => "Halland",
        "arsenal" => "Gabriel",
        "no" => 1,
        "liga" => [
            "negara" => "inggris"
        ]
    ];

    var_dump($pemainNumber);
    var_dump($pemain);

    
    echo $pemain["psg"];
    echo "\n";
    echo $pemainNumber[2];
    echo "\n";
    echo $detailPemain["liga"]["negara"];

?>