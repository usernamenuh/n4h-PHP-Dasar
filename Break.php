<?php 

$counter = 1;

while (true) {
    echo "Hello Ini Adalah While Ke-$counter" . PHP_EOL;
    $counter++;

    if ($counter > 1) {
        break;
    }
}

?>