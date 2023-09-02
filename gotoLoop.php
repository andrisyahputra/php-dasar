<?php
$counter = 1;
while ($counter) {
    echo "ini adalah for while=$counter" . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        goto end;
    }
}


end:
echo "End Loop";
