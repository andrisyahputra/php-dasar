<?php
$counter  = 1;
for (; $counter <= 10;) {
    echo "ini selama 10 berhenti loop ke-$counter" . PHP_EOL;
    $counter++;
}
// gunakan init
for ($no = 1; $no <= 10;) {
    echo "ini no selama 10 berhenti loop ke-$no" . PHP_EOL;
    $no++;
}
// yg lengkap sering dipakai
for ($urut = 1; $urut <= 10; $urut++) {
    echo "ini urut selama 10 berhenti loop ke-$urut" . PHP_EOL;
}

// kebalikan
for ($urut = 10; $urut >= 1; $urut--) {
    echo "ini urut selama 10 berhenti loop ke-$urut" . PHP_EOL;
}

// alternatif
for ($urut = 10; $urut >= 1; $urut--) :
    echo "ini urut selama 10 berhenti loop ke-$urut" . PHP_EOL;
endfor;
