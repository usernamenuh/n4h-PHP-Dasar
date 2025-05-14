<?php 

/* for (;;) {
    echo "Hello" . PHP_EOL;
} */

$counter = 1;

while ($counter <= 10) {
echo "Hello For Loop ke-$counter" . PHP_EOL;
$counter++;
}

while ($counter <= 10):
echo "Hello For Loop ke-$counter" . PHP_EOL;
$counter++;
endwhile;
?>