<?php 


function sumAll(...$values) 
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total " . implode(",", $values) . " = $total" . PHP_EOL;
}


$values = [1, 2, 3, 4, 5];
sumAll(1, 2, 3, 4, 5);
sumALl(...$values);
?>